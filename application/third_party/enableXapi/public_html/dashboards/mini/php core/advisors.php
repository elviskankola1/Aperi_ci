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
                      	<button class="btn btn-primary btn-sm editAdvisors" data-toggle="modal" data-target="#editModal"  data-id="'.$row['advisorID'].'"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-sm deleteAdvisor" data-img ="'. $row['advisorImg'].'" data-id="'.$row['advisorID'].'"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
	  			';
	  }
	}else{
		echo '<h3>There are No Advisors in the database.</h3>';
	}
}

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

