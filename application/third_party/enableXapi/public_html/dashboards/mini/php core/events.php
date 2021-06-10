<?php
include "../../../connectDB.php";
if(secure($_POST['action']) == "createSeminar"){
	if(secure($_POST['seminarName']) !=''){
	  if(secure($_POST['seminarPrice']) !='' ){
	  		if(secure($_POST['seminarStartTime']) !=''){
	  			if(secure($_POST['seminarEndTime']) !=''){
	  				if(secure($_POST['seminarDate']) !=''){
					  if(secure($_POST['seminarVenue']) !=''){
					    if(secure($_POST['seminarCity']) !='' ){
					  		if(secure($_POST['seminarCountry']) !=''){
					  				if(secure($_POST['seminarTarget']) !=''){
					  					if(secure($_POST['seminarOffering']) !=''){
					  						if(secure($_POST['seminarType']) !=''){
					  							if(secure($_POST['seminarFacilitator']) !=''){
					  								if(secure($_POST['seminarDescription']) !=''){
					  									if(secure($_POST['seminarDuration']) !=''){
					  										if(secure($_POST['seminarOutline']) !=''){
					  										
					  									if($_FILES["file"]['name'][0] != ''){
															   $seminarName = secure($_POST['seminarName']);
															   $seminarPrice = secure($_POST['seminarPrice']);
															   $seminarStartTime = secure($_POST['seminarStartTime']);
															   $seminarEndTime = secure($_POST['seminarEndTime']);
															   $seminarDate = secure($_POST['seminarDate']);
															   $seminarVenue = secure($_POST['seminarVenue']);
															   $seminarCity = secure($_POST['seminarCity']);
															   $seminarCountry = secure($_POST['seminarCountry']);
															   $seminarTarget = secure($_POST['seminarTarget']);
															   $seminarOffering = secure($_POST['seminarOffering']);
															   $seminarType = secure($_POST['seminarType']);
															   $seminarFacilitator = secure($_POST['seminarFacilitator']);
															   $seminarDescription = secure($_POST['seminarDescription']);
															   $seminarDuration = secure($_POST['seminarFacilitator']);
															   $seminarOutline = secure($_POST['seminarDescription']);
															   $status = "1";
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
														          if($FileSize < 5145728){ //only files less than 3MB are allowed
														                  $FileNameNew = uniqid('',true).".".$FileActualExt;
														                  $FileDestination = "../../../images/events/".$FileNameNew; 
														                  move_uploaded_file($FileTmpName, $FileDestination);
														                  $image = $FileNameNew; // image of post 
														                  //INSERTING INTO THE DATABASE
														                  $password = password_hash('123456789', PASSWORD_DEFAULT);
														                  $status = 1;
														                  $uniqueCode = uniqid('',true);
																			list($ticket, $ticketCode)= explode(".", $uniqueCode);
																			$password = password_hash($ticketCode, PASSWORD_DEFAULT);
																		$sql = 'INSERT INTO ngomaSeminars (seminarName, seminarPhoto, seminarPrice, seminarPassword, seminarStartTime, seminarEndTime ,seminarDuration, seminarDate, seminarDescription, seminarTarget, seminarOutline, seminarVenue, seminarCountry, seminarCity, seminarFacilitator, seminarType, seminarOffering, seminarStatus)

																		VALUES ( "'.$seminarName.'", "'.$image.'", "'.$seminarPrice.'", "'.$password.'", "'.$seminarStartTime.'", "'.$seminarEndTime.'", "'.$seminarDuration.'", "'.$seminarDate.'", "'.$seminarDescription.'", "'.$seminarTarget.'" ,"'.$seminarOutline.'", "'.$seminarVenue.'", "'.$seminarCountry.'", "'.$seminarCity.'", "'.$seminarFacilitator.'", "'.$seminarType.'", "'.$seminarOffering.'","'.$status.'")'
																						    ;
																                if(!mysqli_query($con, $sql)){
																                 echo mysqli_error($con);
																                }else{
																                  $sql = "SELECT facilitatorEmail FROM ngomaFacilitators WHERE facilitatorID ='".$seminarFacilitator."'  ";
																					  $result = mysqli_query($con, $sql);
																					  $queryResult = mysqli_num_rows($result);
																					  $row = mysqli_fetch_array($result);
																					  if($queryResult > 0 ){

																					  	$to = $row['facilitatorEmail'];
																						$subject = "Seminar Password";
																						$message = "
																							<html>
																							<head>
																							<title>".$seminarName."</title>
																							</head>
																							<body>
																							<p>Good day, please find the attached password below to verify the tickets for ".$seminarName.", please be advised this is a one time key, DON'T LOSE IT.</p>
																							<table>
																							<tr>
																							<th>Password:</th>
																							<th>".$ticketCode."</th>
																							</tr>
																							
																							</table>
																							</body>
																							</html>
																							";

																							// Always set content-type when sending HTML email
																							$headers = "MIME-Version: 1.0" . "\r\n";
																							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

																							// More headers
																							$headers .= 'From: <luke@ngomacommunications.com>' . "\r\n";
																							$headers .= 'Cc: info@ngomacommunications.com' . "\r\n";

																							if(mail($to,$subject,$message,$headers)){
																								echo "Seminar was Successfully Created and Email was sent to facilitator";
																							}else{
																								echo "Seminar was Successfully but system failed to send the facilitator";
																							}

																              		  }else{
																              		  	echo "System couldn't retrive facilitator's Email";
																              		  } 
																                } 
											              
											                    
														          }else{
														            unlink($FileTmpName);
														            echo "File too big, Please upload something less than 5MB";        
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
															    echo "Please upload a file.";
															}

						  									}else{
						  										echo "Please enter the seminar outline";
						  									}
					  									}else{
					  										echo "Please enter the seminar duretion";
					  									}
					  								}else{
					  									echo "Please enter a valid description.";
					  								}
					  							}else{
					  								echo "please add a facilitator.";
					  							}
					  						}else{
					  							echo "Please select a valid seminar type.";
					  						}
					  					}else{
					  						echo "please select a valid offering.";
					  					}	
									
					  			}else{
					  				echo "please enter the target audince for this seminar";
					  			}		  
									
					  }else{
					    echo "Please select a Country.";
					  }
					}else{ 
					echo "Please enter the City .";
					}
				  }else{ 
					echo "Please enter the venue location.";
					}			
					
	  			}else{
	  				echo "Please enter the seminar Date";
	  			}		  
			}else{
		    echo "Please enter the end time of the seminar.";
		  }				
	  }else{
	    echo "PLease enter the starting time of the seminar.";
	  }
	}else{ 
	echo "please enter the seminar price per person.";
	}
  }else{ 
	echo "Please enter the seminar name.";
	}	
}

if(secure($_POST['action']) == "fetchSeminar"){
$sql = "SELECT * FROM ngomaSeminars 
INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = ngomaSeminars.seminarFacilitator";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
  	$i = "";
	  while ($row = mysqli_fetch_array($result)){
	  	$i++;
	  	$key ="";
	  	if($row['seminarOffering'] =="LO"){
	  		$key ="<span class='badge badge-danger'> leading People </span>";
	  	}elseif($row['seminarOffering'] =="LS"){
	  		$key ="<span class='badge badge-danger'> Leading Yourself</span>";
	  	}elseif($row['seminarOffering'] =="LB"){
	  		$key ="<span class='badge badge-danger'> Leading Organisations</span>";
	  	}
	  	$i++;
	  	if($row['seminarStatus'] == 1){
	  		$status ="<a class='btn btn-success'>Active</a>";
	  	}else{
	  		$status ="<a class='btn btn-warning'>Down</a>";
	  	}
	  		echo '
	  				<tr>
                      <td>'.$i.'</td>
                      <td>'.$row['seminarName'].'</td>
                      <td>'.$row['seminarDate'].'</td>
                      <td>R '.$row['seminarPrice'].'</td>
                      <td>'.$row['facilitatorName'].'</td>
                      <td>'.$key.'</td>
                      <td>'.$status.'</td>
                      <td>
                      <button class="btn btn-primary btn-sm editSeminar" data-toggle="modal" data-target="#editModal"  data-id="'.$row['seminarID'].'"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-sm deleteSeminar" data-img ="'. $row['seminarPhoto'].'" data-id="'.$row['seminarID'].'"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
	  			';

	  }
	}else{echo"
		<h3>There are no seminars in the database right now. </h3>
	";}
}
if(secure($_POST['action']) == "fetchEditSeminar"){
	$val = secure($_POST['val']);
	$sql = "SELECT * FROM ngomaSeminars WHERE seminarID='".$val."' ";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	  while ($row = mysqli_fetch_array($result)){

		?>
			<div class="modal-body">
						 <img src="../../../images/events/<?php echo $row['seminarPhoto']; ?>" class="img-rounded" alt="Cinque Terre" style="max-width:100%; width:auto; height:auto; max-height:400px; margin:20px auto;"> 
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Seminar Name</label>
                              <input type="text" class="form-control"  value="<?php  echo $row['seminarName']; ?>" name="seminarName" required="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Seminar Price</label>
                                <input type="number" class="form-control"  value="<?php  echo $row['seminarPrice']; ?>"  name="seminarPrice" required="">
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Starting Time</label>
                              <input type="time" class="form-control"  value="<?php  echo $row['seminarStartTime']; ?>"  name="seminarStartTime" required="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>End Time</label>
                                <input type="time" class="form-control"  value="<?php  echo $row['seminarEndTime']; ?>"  name="seminarEndTime" required="">
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Event Date</label>
                              <input type="date" class="form-control"  value="<?php  echo $row['seminarDate']; ?>"  name="seminarDate" required="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Event Venue</label>
                                <input type="text" class="form-control"  value="<?php  echo $row['seminarVenue']; ?>"  name="seminarVenue"required="">
                            </div>
                           </div>
                        </div> 
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Event City</label>
                              <input type="text" class="form-control"  value="<?php  echo $row['seminarCity']; ?>"  name="seminarCity" required="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Event Country</label>
                              	<input type="text" class="form-control"  value="<?php  echo $row['seminarCountry']; ?>"  name="seminarCountry" required="">
                                
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Duration</label>
                                <input type="text" class="form-control"  value="<?php  echo $row['seminarDuration']; ?>"  name="seminarDuration" required="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Seminar Outline</label>
                                <textarea class="form-control" maxlength="200" rows="3" name="seminarOutline"><?php  echo $row['seminarOutline']; ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Who should attend</label>
                                <textarea class="form-control" maxlength="200" rows="3" name="seminarTarget"><?php  echo $row['seminarTarget']; ?></textarea>
                                <input type="hidden" name="action"  value="editSeminar" required="">
                                <input type="hidden" name="id"  value="<?php  echo $row['seminarID']; ?>" required="">
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Seminar Offering</label>
                              <select class="form-control" name="seminarOffering" required="">   
                                <option value="LS"> Leading Yourself</option>
                                <option value="LO"> Leading People</option>
                                <option value="LB"> Leading Organisations</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Seminar Type</label>
                                <select class="form-control" name="seminarType" required="">   
                                  <option value="1"> Open Seminar</option>
                                  <option value="2"> CSR Event</option>
                                </select>
                            </div>
                           </div>
                        </div>
                         <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Seminar Facilitator</label>
                              <select class="form-control" name="seminarFacilitator" required="">   
                                <option value="">Select facilitator</option>
                               		<?php echo getFacilitator($con);?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Seminar Description</label>
                              <textarea class="form-control" maxlength="500" rows="4" name="seminarDescription"><?php  echo $row['seminarDescription']; ?></textarea>
                            </div>
                           </div>
                          
                        </div>
                  </div>
                  <div class="modal-footer">
                  	 <button type="submit" class="btn btn-primary">Update Seminar</button>
                    <div class="spinner-border" id="spinner" style="display:none;"></div>
                  </div>
<?

	  }
	}else{echo"
		<h3>Seminar Not Found </h3>
	";} 
}
if(secure($_POST['action']) == "editSeminar"){
	$id = secure($_POST['id']);
	if(secure($_POST['seminarName']) !=''){
	  if(secure($_POST['seminarPrice']) !='' ){
	  		if(secure($_POST['seminarStartTime']) !=''){
	  			if(secure($_POST['seminarEndTime']) !=''){
	  				if(secure($_POST['seminarDate']) !=''){
					  if(secure($_POST['seminarVenue']) !=''){
					    if(secure($_POST['seminarCity']) !='' ){
					  		if(secure($_POST['seminarCountry']) !=''){
					  				if(secure($_POST['seminarTarget']) !=''){
					  					if(secure($_POST['seminarOffering']) !=''){
					  						if(secure($_POST['seminarType']) !=''){
					  							if(secure($_POST['seminarFacilitator']) !=''){
					  								if(secure($_POST['seminarDescription']) !=''){
					  									if(secure($_POST['seminarDuration']) !=''){
					  										if(secure($_POST['seminarOutline']) !=''){
					  											$sql = 'UPDATE ngomaSeminars SET seminarName ="'.secure($_POST['seminarName']).'",
					  																			seminarPrice ="'.secure($_POST['seminarPrice']).'",			
					  																			seminarStartTime ="'.secure($_POST['seminarStartTime']).'",
					  																			seminarEndTime ="'.secure($_POST['seminarEndTime']).'",
					  																			seminarDuration ="'.secure($_POST['seminarDuration']).'",
					  																			seminarDate ="'.secure($_POST['seminarDate']).'",
					  																			seminarDescription ="'.secure($_POST['seminarDescription']).'",
					  																			seminarTarget ="'.secure($_POST['seminarTarget']).'",
					  																			seminarOutline ="'.secure($_POST['seminarOutline']).'",
					  																			seminarVenue ="'.secure($_POST['seminarVenue']).'",
					  																			seminarCountry ="'.secure($_POST['seminarCountry']).'",
					  																			seminarCity ="'.secure($_POST['seminarCity']).'",
					  																			seminarFacilitator ="'.secure($_POST['seminarFacilitator']).'",
					  																			seminarType ="'.secure($_POST['seminarType']).'",
					  																			seminarOffering ="'.secure($_POST['seminarOffering']).'"
					  																			WHERE seminarID = "'.$id.'"
					  																			';
					  																			if(mysqli_query($con, $sql)){
					  																				echo "Seminar Updated";

					  																			}else{
					  																				echo mysqli_error($con);
					  																			}
						  									}else{
						  										echo "Please enter the seminar outline";
						  									}
					  									}else{
					  										echo "Please enter the seminar duretion";
					  									}
					  								}else{
					  									echo "Please enter a valid description.";
					  								}
					  							}else{
					  								echo "please add a facilitator.";
					  							}
					  						}else{
					  							echo "Please select a valid seminar type.";
					  						}
					  					}else{
					  						echo "please select a valid offering.";
					  					}	
									
					  			}else{
					  				echo "please enter the target audince for this seminar";
					  			}		  
									
					  }else{
					    echo "Please select a Country.";
					  }
					}else{ 
					echo "Please enter the City .";
					}
				  }else{ 
					echo "Please enter the venue location.";
					}			
					
	  			}else{
	  				echo "Please enter the seminar Date";
	  			}		  
			}else{
		    echo "Please enter the end time of the seminar.";
		  }				
	  }else{
	    echo "PLease enter the starting time of the seminar.";
	  }
	}else{ 
	echo "please enter the seminar price per person.";
	}
  }else{ 
	echo "Please enter the seminar name.";
	}	
}

if(secure($_POST['action']) == "deleteSeminar"){
	$val = secure($_POST['val']);
	$image = secure($_POST['img']);
	if (is_numeric($val) && $val > 0 ) {
		if($image != ''){
				if(unlink('../../../images/events/'.$image)){
					$sql = "DELETE  FROM ngomaSeminars WHERE seminarID = '".$val."' ";
					if(mysqli_query($con, $sql)){
						echo "Seminar Successfully Deleted";
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
		echo "System failed to locate the seminar.";
	}

}
function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function getFacilitator($con){
  $sql = "SELECT * FROM ngomaFacilitators WHERE  type='1' ";
  $data =  "";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);  
  if($queryResult > 0 ){
  while ($row = mysqli_fetch_array($result)){
    $data .= '<option value="'.$row['facilitatorID'].'">'.$row['facilitatorName'].'</option>';
  }
  }else{
    $data .= '<option value="">No facilitator found</option>';
  }
  return $data;
}
?>