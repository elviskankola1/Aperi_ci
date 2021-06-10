<?php
include "../../../connectDB.php";
if(secure($_POST['action']) == "addFacilitator"){

	if(secure($_POST['name']) !=''){
	  if(secure($_POST['email']) !='' ){
	  		if(secure($_POST['phone']) !=''){
	  			if(secure($_POST['offerings']) !=''){
	  				if(secure($_POST['description']) !=''){
	  					if(secure($_POST['profession']) !=''){
	  						if(secure($_POST['userType']) !=''){
	  						if($_FILES["file"]['name'][0] != ''){
								$sql = "SELECT facilitatorEmail FROM ngomaFacilitators WHERE facilitatorEmail = '".secure($_POST['email'])."' AND type ='".secure($_POST['userType'])."' ";
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
						          if($FileSize < 10145728){ //only files less than 3MB are allowed
						                  $FileNameNew = uniqid('',true).".".$FileActualExt;
						                  $FileDestination = "../../../images/profiles/".$FileNameNew; 
						                  move_uploaded_file($FileTmpName, $FileDestination);
						                  $image = $FileNameNew; // image of post 
						                  //INSERTING INTO THE DATABASE
						                  $password = password_hash('123456789', PASSWORD_DEFAULT);
						                  $status = 1;
										$sql = 'INSERT INTO ngomaFacilitators (facilitatorName, facilitatorEmail, facilitatorDescription, facilitatorPassword, facilitatorContact , facilitatorOfferings, facilitatorProfession,  facilitatorImg, type,  facilitatorStatus)
										VALUES ( "'.secure($_POST['name']).'", "'.secure($_POST['email']).'", "'.secure($_POST['description']).'", "'.$password.'", "'.secure($_POST['phone']).'", "'.secure($_POST['offerings']).'", "'.secure($_POST['profession']).'", "'.$image.'","'.secure($_POST['userType']).'", "'.$status.'" )'
														    ;
								                if(!mysqli_query($con, $sql)){
								                 echo mysqli_error($con);
								                }else{
								                  echo"Facilitator Added.";
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
						  	echo "Looks like this facilitator is already in the database";
						  }

						}else{
							echo "Please upload a photo";
						}

						}else{
			        		echo "Please select the type of user";
			        	}
			        }else{
			        	echo "Please enter your profession";
			        }
	  			}else{
	  				echo "Please enter description";
	  			}		  
			}else{
		    echo "Please Enter Offerings.";
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
if(secure($_POST['action']) == "fetchFacilitator"){
$sql = "SELECT * FROM ngomaFacilitators";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
  	$i ="";
  	$status ="";
	$type="";
  
	  while ($row = mysqli_fetch_array($result)){
	  	$i++;
	  	if($row['facilitatorStatus'] ==1){
	  		$status ="<a class='btn btn-success'>Active</a>";
	  	}else{
	  		$status ="<a class='btn btn-warning'>Offline</a>";
	  	}
		if($row['type']== 1){
			$type="<span class='badge'>facilitator</span>";
		}elseif($row['type']==2){
			  $type="<span class='badge'>keynote speaker</span>";
		}elseif($row['type']==3){
			$type="<span class='badge'>coach</span>";
		}
		
	  		echo '
	  				<tr>
                      <td>'.$i.'</td>
                      <td><img src="../../images/profiles/'.$row['facilitatorImg'].'" style="width:50px; height:50px; border-radius:50%; object-fit:cover;"/></td>
					  <td>'.$type.'</td>
                      <td>'.$row['facilitatorName'].'</td>
                      <td>'.$row['facilitatorEmail'].'</td>
                      <td>'.$row['facilitatorContact'].'</td>
                      <td>'.$row['facilitatorProfession'].'</td>
                      <td>'.$status.'</td>
                      <td>
                      	<button class="btn btn-primary btn-sm editAdvisors" data-toggle="modal" data-target="#editModal"  data-id="'.$row['facilitatorID'].'"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-sm deleteAdvisor" data-img ="'. $row['facilitatorImg'].'" data-id="'.$row['facilitatorID'].'"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
	  			';
	  	
	  	
	  }
	}else{echo"
		<h3>There are no facilitators in the database right now. </h3>
	";}
}

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

