<?php
session_start();
include "../../../connectDB.php";
if(secure($_POST['action']) == "adminDetails"){
if(secure($_POST['fullName']) !=''){
	if(secure($_POST['phone']) !=''){
		if(secure($_POST['email']) !=''){
			if(secure($_POST['adminBio']) !=''){
				$sql = 'UPDATE ngomaAdmin
				 SET adminName = "'.secure ($_POST['fullName']).'",
				 	adminEmail = "'.secure ($_POST['email']).'",	
				 	adminContact = "'.secure ($_POST['phone']).'",
				 	adminAbout = "'.secure ($_POST['adminBio']).'"
				 	WHERE adminID = "'.$_SESSION['adminID'].'"  ';
				 if(!mysqli_query($con, $sql)){
	                 echo mysqli_error($con);
	                }else{
	                  echo "Profile details updated successfully!";
	                } 
			              
			}else{
				echo "Please enter your Bio";
			}
		}else{
			echo "Please eneter your Email";
		}
	}else{
		echo "Please enter your Phone";
	}
}else{
	echo "Please enter your name";
}

}

if(secure($_POST['action']) == "updateDP"){
	if($_SESSION['adminPhoto'] != ''){
		unlink('../../../images/profiles/'.$_POST['previousDP']);
	}
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
	                  $status = 1;
					$sql = 'UPDATE ngomaAdmin
					SET adminPhoto = "'.$image.'"
				 	WHERE adminID = "'.$_SESSION['adminID'].'"  ';
				 	if(!mysqli_query($con, $sql)){
	                 echo mysqli_error($con);
	                }else{
	                	$_SESSION['adminPhoto'] =  $image;
	                  echo "Profile Picture Updated!";
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
		echo "Please upload a photo";
	}
}

if(secure($_POST['action']) == "updatePassword"){
	$password = secure($_POST['password']);
	$password2 = secure($_POST['password2']);

	if($password  !=''){
			if( $password2 !=''){

				if($password == $password2){
					$pass = password_hash($password, PASSWORD_DEFAULT);

					$sql = 'UPDATE ngomaAdmin
					 SET adminPassword = "'.$pass.'"
					 	WHERE adminID = "'.$_SESSION['adminID'].'"  ';
					 if(!mysqli_query($con, $sql)){
		                 echo mysqli_error($con);
		                }else{
		                  echo "Password updated";
		                }
				}else{
					echo "Your password does not match";
				}
				 
			              
			}else{
				echo "Your password must atleast be 7 characters";
			}
		}else{
			echo "Your password must atleast be 7 characters";
		}
	}	
function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>