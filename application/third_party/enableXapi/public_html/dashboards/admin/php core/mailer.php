<?php

	if($_POST['action'] == "emailBlaster"){
	CheckData($_POST['name']);

	if(CheckData($_POST['email']) !=''){

		//if(CheckData($_POST['subject']) !=''){

						if(CheckData($_POST['organisation']) !=''){

								if(CheckData($_POST['telephone']) !=''){

									//if(CheckData($_POST['town']) !=''){

										if(CheckData($_POST['suburb']) !=''){

											if(CheckData($_POST['message']) !=''){

												if($_FILES["file"]['name'][0] != ''){
												  $file = $_FILES['file']; //from form
												  $FileName = $_FILES['file']['name'];
												  $FileTmpName = $_FILES['file']['tmp_name'];
												  $FileSize = $_FILES['file']['size'];
												  $FileError = $_FILES['file']['error'];
												  $FileType = $_FILES['file']['type'];
												  $FileExt = explode('.',$FileName); // seperating the file name from its extension
												  $FileActualExt = strtolower(end($FileExt)); //changing the file extensions to lowerCase
												  $AllowedExt = array('docx','pdf', 'docs', 'doc'); //file extensions allowed
												  if(in_array($FileActualExt, $AllowedExt)){
												    if($FileError === 0){
												      if($FileSize < 5145728){ //only files less than 3MB are allowed
												              $FileNameNew = "leaflet".rand(111111, 999999).".".$FileActualExt;
												              $FileDestination = "../uploads/".$FileNameNew; 
												              move_uploaded_file($FileTmpName, $FileDestination);
												              	
											    				
												              	$mailto = CheckData($_POST['email']);
															    $subject = 'Goal - Illustration Activity';
															    include "mailerTemplate.php";
															    $headers = "From: paul@ngomacommunications.com" . "\r\n" .
																			"BCC: vision@ngomacommunications.com";
													// boundary
													            $semi_rand = md5(time());
													            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

													// headers for attachment
													            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

													// multipart boundary
													            $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=ISO-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

													                $message .= "--{$mime_boundary}\n";

													                $filename = $FileNameNew;
													                $file = fopen($FileDestination, "rb");

													                $data = fread($file, filesize($FileDestination));
													                fclose($file);
													                $data = chunk_split(base64_encode($data));
													                $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$filename\"\n" .
													                        "Content-Disposition: attachment;\n" . " filename=\"$filename\"\n" .
													                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
													                $message .= "--{$mime_boundary}\n";

															if(mail($mailto, $subject, $message, $headers)){
																unlink($FileDestination);
																echo "Email successfully sent";
															}else{
																unlink($FileDestination);
																echo "Hayi baba check your code.";
															}
															    

												          }else{
												          	echo "Only files les than 5mb allowed ";
												          }
												      }else{
												      	echo "Unknown error occured";
												      }
												  }else{
												  	echo "file type does not allowed";
												  }
												}else{
													echo "Please upload a file";
												}


											}else{	
												echo "please enter your message";
											}

										}else{
											echo "please enter your suburb";
										}
									//}else{
									//	echo "please enter town name";
									//}
								}else{
									echo "please enter telephone name";
								}
						}else{
							echo "Please enter organisation name";
						}
				
			//}else{
			//	echo "Error! Please enter subject";
			//}

	}else{
		echo "Error! Please enter email";
	}



	}


function CheckData($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>