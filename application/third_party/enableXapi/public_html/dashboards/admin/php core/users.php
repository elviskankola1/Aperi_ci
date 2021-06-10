<?php
include "../../../connectDB.php";
if(secure($_POST['action']) == "addUsers"){
	if(secure($_POST['name']) !=''){
	  if(secure($_POST['email']) !='' ){
	  		if(secure($_POST['phone']) !=''){
	  			if(secure($_POST['level']) !=''){
	  				if(secure($_POST['description']) !=''){
	  					$sql = "SELECT adminEmail FROM ngomaAdmin WHERE adminEmail = '".secure($_POST['email'])."' ";
						  $result = mysqli_query($con, $sql);
						  $queryResult = mysqli_num_rows($result);
						  if($queryResult < 1 ){
  						if($_FILES["file"]['name'][0] != ''){
							  $file = $_FILES['file']; //from form
						      $FileName = $_FILES['file']['name'];
						      $FileTmpName = $_FILES['file']['tmp_name'];
						      $FileSize = $_FILES['file']['size'];
						      $FileError = $_FILES['file']['error'];
						      $FileType = $_FILES['file']['type'];
						      $FileExt = explode('.',$FileName); // seperating the file name from its extension
						      $FileActualExt = strtolower(end($FileExt)); //changing the file extensions to lowerCase
						      $AllowedExt = array('jpg','jpeg', 'png'); //file extensions allowed
						      if(in_array($FileActualExt, $AllowedExt)){
						        if($FileError === 0){
						          if($FileSize < 3145728){ //only files less than 3MB are allowed
						                  $FileNameNew = uniqid('',true).".".$FileActualExt;
						                  $FileDestination = "../../../images/profiles/".$FileNameNew; 
						                  move_uploaded_file($FileTmpName, $FileDestination);
						                  $image = $FileNameNew; // image of post 
						                  //INSERTING INTO THE DATABASE
						                  $status = 1;
						                  $password = password_hash('123456789', PASSWORD_DEFAULT);

										  $sql = 'INSERT INTO ngomaAdmin (adminName, adminEmail, adminContact, adminPhoto, adminAbout, adminPassword , accessLevel, adminStatus)
										  VALUES ( "'.secure($_POST['name']).'", "'.secure($_POST['email']).'", "'.secure($_POST['phone']).'","'.$image.'", "'.secure($_POST['description']).'", "'.$password.'", "'.secure($_POST['level']).'",  "'.$status.'" )'
														    ;
								                if(!mysqli_query($con, $sql)){
								                 echo mysqli_error($con);
								                }else{
								                  echo"User Successfully Added.";
								                } 
			                    
							          }else{
							            unlink($FileTmpName);
							            echo "File too big, Please upload something less than 3MB";        
							            }
							                    
							        }else{
							        unlink($FileTmpName);
							        echo "sorry, unknown  error occured while uploading your post";         
							        }
							                  
							      }else{
							      unlink($FileTmpName);
							      echo "Please upload image files only";     
							          } 
							  
							}else{
								echo"Please Upload a photo";
						  }
	  					}else{
	  						echo "User already added.";
	  					}	 
	  			}else{
	  				echo "Please enter description";
	  			}		  
			}else{
		    echo "Please Specify level";
		  }				
	  }else{
	    echo "Please Phone Number.";
	  }
	}else{ 
	echo "Please Enter Email.";
	}
  }else{ 
	echo "Please Enter Name.";
	}	
}

if(secure($_POST['action']) == "fetchUsers"){
$sql = "SELECT * FROM ngomaAdmin WHERE accessLevel !='1' ";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	  	$i ="";
	  	$status ="";
	  while ($row = mysqli_fetch_array($result)){
		  	$i++;
		  	$adminLevel = "";
		  	if($row['adminStatus'] ==1){
		  		$status ="<a class='btn btn-success'>Active</a>";
		  	}else{
		  		$status ="<a class='btn btn-warning'>Offline</a>";
		  	}
		  	if($row['accessLevel'] ==2){
		  		$adminLevel ="Mini-Admin";
		  	}elseif($row['accessLevel'] ==3){
		  		$adminLevel ="<span class='badge badge-success'> Mailer</span>";
		  	}elseif($row['accessLevel'] ==4){
		  		$adminLevel ="Ticketer";
		  	}
	  		echo '

	  				<tr>
                      <td>'.$i.'</td>
                      <td><img src="../../images/profiles/'.$row['adminPhoto'].'" style="width:50px; height:50px; border-radius:50%; object-fit:cover;"/></td>
                      <td>'.$row['adminName'].'</td>
                      <td>'.$row['adminEmail'].'</td>
                      <td>'.$row['adminContact'].'</td>
                      <td>'.$adminLevel.'</td>
                      <td>'.$status.'</td>
                      <td>
                      	<button class="btn btn-primary btn-sm editAdmin" data-toggle="modal" data-target="#editModal" data-id="'.$row['adminID'].'"><i class="fa fa-pencil"></i></button>
                      	<button class="btn btn-danger btn-sm deleteUser" data-img="'.$row['adminPhoto'].'" data-id="'.$row['adminID'].'"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
	  			';
	  }
	}else{
		echo '<h3>There are No Advisors in the database.</h3>';
	}
}
if(secure($_POST['action']) == "fetchEditForm"){
	$val = secure($_POST['val']);
	$sql = "SELECT * FROM ngomaAdmin WHERE adminID ='".$val."' ";
  $result = mysqli_query($con, $sql);
  echo mysqli_error($con);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	 while ($row = mysqli_fetch_array($result)){
	 	echo '
	 		<div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Add Name</label>
                   <input type="text" id="name" name="name"  value="'.$row['adminName'].'" class="form-control" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Access Level</label>
                 <select id="email" name="level" class="form-control" required>
                   <option value>Select Access Level</option>
                   <option value="2">Min Admin level</option>
                   <option value="3">Mailer</option>
                   <option value="4">Ticket Facilitator</option>
                 </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Admin Email</label>
                 <input type="email" id="email" name="email" class="form-control" value="'.$row['adminEmail'].'" required>
                 <input type="hidden" name="action" value="updateUsers">
                 <input type="hidden" name="val" value="'.$row['adminID'].'">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Admin Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-control" value="'.$row['adminContact'].'" required>
                </div>
               </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="form-group">
              <label for="comment">Description / Profile</label>
              <textarea class="form-control" name="description" rows="5" id="comment" required>'.$row['adminAbout'].' </textarea>
            </div> 
            </div>
	 	';

	}
  }
}

if(secure($_POST['action']) == "updateUsers"){
	$val = secure($_POST['val']);
	if(secure($_POST['name']) !=''){
	  if(secure($_POST['email']) !='' ){
	  		if(secure($_POST['phone']) !=''){
	  			if(secure($_POST['level']) !=''){
	  				if(secure($_POST['description']) !=''){

  						$sql = 'UPDATE ngomaAdmin SET adminName ="'.secure($_POST['name']).'  ",
								adminEmail ="'.secure($_POST['email']).'",			
								adminContact ="'.secure($_POST['phone']).'",
								adminAbout ="'.secure($_POST['description']).'",
								accessLevel ="'.secure($_POST['level']).'"
								WHERE adminID = "'.$val.'"
								';
								if(mysqli_query($con, $sql)){
									echo "Profile Updated Successfully";

								}else{
									echo mysqli_error($con);
								}
	  				}else{
	  				echo "Please enter description";
	  				}			  
			}else{
		    echo "Please Specify level";
		  }				
	  }else{
	    echo "Please Phone Number.";
	  }
	}else{ 
	echo "Please Enter Email.";
	}
}else{ 
echo "Please Enter Name.";
}		
}

if( secure($_POST['action'])=="deleteAdmin" ){
	$val = secure($_POST['val']);
	$image = secure($_POST['img']);
	if (is_numeric($val) && $val > 0 ) {
		if($image != ''){
				if(unlink('../../../images/profiles/'.$image)){
					$sql = "DELETE  FROM ngomaAdmin WHERE adminID = '".$val."' ";
					if(mysqli_query($con, $sql)){
						echo "uSER Successfully Deleted";
					}else{
						echo mysqli_error($con);
					}
				}else{
					echo "System failed to delete  image";
				}
				
		}else{
			echo "System failed to locate the image";
		}
	}else{
		echo "System failed to locate the facilitator.";
	}

}
function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>