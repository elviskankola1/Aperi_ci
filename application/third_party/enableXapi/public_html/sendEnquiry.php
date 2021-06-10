<?php
if($_POST['action'] == "inquiry"){
		if(CheckData($_POST['firstName']) !=''){

	if(CheckData($_POST['lastName']) !=''){

		if(CheckData($_POST['email']) !=''){

				if(CheckData($_POST['company']) !=''){

						if(CheckData($_POST['jobTitle']) !=''){

							if(CheckData($_POST['phone']) !=''){

								if(CheckData($_POST['city']) !=''){

									if(CheckData($_POST['country']) !=''){

										if(CheckData($_POST['comments']) !=''){

											$to = 'admin@thusaeducation.org';
											$subject = "General Enquiry";
											
											$message = "
										<html>
										<head>
										<title></title>
										</head>
										<body>
										<p>You received an email from:  ".CheckData($_POST['firstName'])." ".CheckData($_POST['lastName']). "</p>
										<p>From: ".CheckData($_POST['company']). "</p>
										<p>Job Title: ".CheckData($_POST['jobTitle'])."</p>
										<p>Contact Number: " .CheckData($_POST['phone'])."</p>
										<p>Email Address: " .CheckData($_POST['email'])."</p>
										<p>City: " .CheckData($_POST['city']). "</p>
										<p>Country: ".CheckData($_POST['country']). "</p>
										</body>
										</html>
										";
											
											
											
											$headers = "MIME-Version: 1.0" . "\r\n";
										    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
										    // More headers
										    $headers .= 'From: enquiry@ngomacommunications.com' . "\r\n";

											if(mail($to, $subject, $message, $headers)){
											echo "Thanks, your message was delivered. We will get back to you shortly.";
											}else{
												echo "Error! message not sent";
											}

										}else{
											echo "please enter your message";
										}
									}else{
										echo "please enter your country";
									}
								}else{
									echo "please enter your city";
								}
							}else{
								echo "PLease enter your contact number";
							}
						}else{
							echo "Please enter your job title";
						}
				}else{
					echo "Please enter the company name";
				}
			}else{
				echo "Error! Please enter your Email";
			}

	}else{
		echo "Error! Please enter your last name";
	}

}else{
	echo "Error! Please enter your first name";
}

	}

?>