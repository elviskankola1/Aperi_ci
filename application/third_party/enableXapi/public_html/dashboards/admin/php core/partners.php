<?php
include "../../../connectDB.php";
if(secure($_POST['action']) == "addPartner"){

	if(secure($_POST['name']) !=''){
	  if(secure($_POST['email']) !='' ){
	  		if(secure($_POST['phone']) !=''){
	  			if(secure($_POST['type']) !=''){
	  				if(secure($_POST['description']) !=''){
	  					if($_FILES["file"]['name'][0] != ''){

							$sql = "SELECT partnerEmail FROM ngomaPartners WHERE partnerEmail = '".secure($_POST['email'])."' ";
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
										$sql = 'INSERT INTO ngomaPartners (partnerName, partnerEmail, partnerContact, partnerImg, partnerDescription, partnerType, partnerStatus)
										VALUES ( "'.secure($_POST['name']).'", "'.secure($_POST['email']).'", "'.secure($_POST['phone']).'", "'.$image.'",  "'.secure($_POST['description']).'", "'.secure($_POST['type']).'", "'.$status.'" )';

								                if(!mysqli_query($con, $sql)){
								                 echo mysqli_error($con);
								                }else{
								                  echo"Partner successfully Added.";
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
							  	echo "Looks like the user is already in the database.";
							  }

	  						  

		          }else{
		          		echo "Please Add a file"; 
  					}
	  						
	  			}else{
	  				echo "Please enter description";
	  			}		  
			}else{
		    echo "Please specify the type of partnership.";
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
if(secure($_POST['action']) == "fetchPartner"){
$sql = "SELECT * FROM ngomaPartners";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
  	$i ="";
  	$status ="";
  	$type="";
	  while ($row = mysqli_fetch_array($result)){
	  	$i++;
	  	if($row['partnersStatus'] ==1){
	  		$status ="<a class='btn btn-success'>Active</a>";
	  	}else{
	  		$status ="<a class='btn btn-warning'>Offline</a>";
	  	}
	  	if($row['partnerType'] == 1 ){
	  		$type="Company Partner";
	  	}else{
	  		$type="CSR Partner";
	  	}
	  		echo '
	  				<tr>
                      <td>'.$i.'</td>
                      <td><img src="../../images/profiles/'.$row['partnerImg'].'" style="width:50px; height:50px; border-radius:50%; object-fit:cover;"/></td>
                      <td>'.$row['partnerName'].'</td>
                      <td>'.$row['partnerEmail'].'</td>
                      <td>'.$row['partnerContact'].'</td>
                      <td>'.$type.'</td>
                      <td>'.$status.'</td>
                      <td><button class="btn btn-info" data-id="'.$row['facilitatorID'].'"> View/Edit </button></td>
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

