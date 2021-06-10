<?php
include "../../../connectDB.php";
if(secure($_POST['action']) == "addAdvisor"){

	if(secure($_POST['name']) !=''){
	  if(secure($_POST['email']) !='' ){
	  		if(secure($_POST['phone']) !=''){
	  			if(secure($_POST['profession']) !=''){
	  				if(secure($_POST['description']) !=''){
  						if($_FILES["file"]['name'][0] != ''){
								$sql = "SELECT advisorEmail FROM ngomaAdvisors WHERE advisorEmail = '".secure($_POST['email'])."' ";
							  $result = mysqli_query($con, $sql);
							  $queryResult = mysqli_num_rows($result);
							  if($queryResult < 1 ){
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
										$sql = 'INSERT INTO ngomaAdvisors (advisorName, advisorEmail, advisorContact, advisorProfession, advisorImg, advisorDescription , advisorStatus)

										VALUES ( "'.secure($_POST['name']).'", "'.secure($_POST['email']).'", "'.secure($_POST['phone']).'", "'.secure($_POST['profession']).'", "'.$image.'", "'.secure($_POST['description']).'",  "'.$status.'" )'
														    ;
								                if(!mysqli_query($con, $sql)){
								                 echo mysqli_error($con);
								                }else{
								                  echo"Advisor Successfully Added.";
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
							  	echo "Looks like this advisor is already in the database";
							  }
							}else{
								echo"Please Upload a photo";
						  }
	  						 
	  			}else{
	  				echo "Please enter description";
	  			}		  
			}else{
		    echo "Please Enter Profession";
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
if(secure($_POST['action']) == "fetchAdvisor"){
$sql = "SELECT * FROM ngomaAdvisors";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	  	$i ="";
	  	$status ="";
	  while ($row = mysqli_fetch_array($result)){
		  	$i++;
		  	if($row['advisorStatus'] ==1){
		  		$status ="<a class='btn btn-success'>Active</a>";
		  	}else{
		  		$status ="<a class='btn btn-warning'>Offline</a>";
		  	}
	  		echo '

	  				<tr>
                      <td>'.$i.'</td>
                      <td><img src="../../images/profiles/'.$row['advisorImg'].'" style="width:50px; height:50px; border-radius:50%; object-fit:cover;"/></td>
                      <td>'.$row['advisorName'].'</td>
                      <td>'.$row['advisorEmail'].'</td>
                      <td>'.$row['advisorContact'].'</td>
                      <td>'.$row['advisorProfession'].'</td>
                      <td>'.$status.'</td>
                      <td>
                      	<button class="btn btn-primary btn-sm editAdvisor" data-toggle="modal" data-target="#editModal" data-id="'.$row['advisorID'].'"><i class="fa fa-pencil"></i></button>
                      	<button class="btn btn-danger btn-sm deletAdvisor" data-img="'.$row['advisorImg'].'" data-id="'.$row['advisorID'].'"><i class="fa fa-trash-o "></i></button>

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
	$sql = "SELECT * FROM ngomaAdvisors WHERE advisorID='".$val."' ";
  $result = mysqli_query($con, $sql);
  echo mysqli_error($con);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	 while ($row = mysqli_fetch_array($result)){
	 	echo '
	 		<div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name" >Name of advisor</label>
                  <input type="text" id="name" name="name" class="form-control"  value="'.$row['advisorName'].'" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email" >Advisor Email</label>
                  <input type="email" id="email" name="email" class="form-control" value="'.$row['advisorEmail'].'" required>
                </div>
               </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="phone" >Advisor Phone</label>
                 <input type="tel" id="phone" name="phone" class="form-control" value="'.$row['advisorContact'].'" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="profession" >Advisor profession</label>
                 <input type="text" id="profession" name="profession" value="'.$row['advisorProfession'].'" class="form-control">
                 <input type="hidden" name="action" value="saveEditedAdvisors" />
                 <input type="hidden" name="val" value="'.$row['advisorID'].'" />
                </div>
            </div>
            </div>
            <div class="form-group">
              <label for="comment">Description / Profile</label>
              <textarea class="form-control" name="description" rows="5" id="comment" required>'.$row['advisorDescription'].'</textarea>
            </div> 
	 	';

	}
  }
}

if(secure($_POST['action']) =="saveEditedAdvisors"){
	$val = secure($_POST['val']);
	if(secure($_POST['name']) !=''){
	  if(secure($_POST['email']) !='' ){
	  		if(secure($_POST['phone']) !=''){
	  			if(secure($_POST['profession']) !=''){
	  				if(secure($_POST['description']) !=''){
	  							$sql = 'UPDATE ngomaAdvisors SET advisorName ="'.secure($_POST['name']).'  ",
									advisorEmail ="'.secure($_POST['email']).'",			
									advisorContact ="'.secure($_POST['phone']).'",
									advisorProfession ="'.secure($_POST['profession']).'",
									advisorDescription ="'.secure($_POST['description']).'"
									WHERE advisorID = "'.$val.'"
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
		    echo "Please Enter Profession";
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


if( secure($_POST['action'])=="deleteAdvisor" ){
	$val = secure($_POST['val']);
	$image = secure($_POST['img']);
	if (is_numeric($val) && $val > 0 ) {
		if($image != ''){
				if(unlink('../../../images/profiles/'.$image)){
					$sql = "DELETE  FROM ngomaAdvisors WHERE advisorID = '".$val."' ";
					if(mysqli_query($con, $sql)){
						echo "Advisor Successfully Deleted";
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

