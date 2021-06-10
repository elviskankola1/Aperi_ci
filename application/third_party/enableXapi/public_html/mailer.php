<?php
if(isset($_POST['action'])){

	if($_POST['action'] == "message"){
		if(CheckData($_POST['name']) !=''){

			if(CheckData($_POST['message']) !=''){

				if(CheckData($_POST['email']) !=''){

						$to      = 'info@ngomacommunications.com';
						$subject = "General Enquiry";
						$message = 'You received an email from: '.trim(htmlentities(htmlspecialchars($_POST['name'])))."\r\n" .trim(htmlentities(htmlspecialchars($_POST['message'])));
						$headers = 'From:'.trim(htmlentities(htmlspecialchars($_POST['email']))) . "\r\n" ;
						    'Reply-To: '.$_POST['email'].' '. "\r\n" .
						    'X-Mailer: PHP/' . phpversion();
		 
						if(mail($to, $subject, $message, $headers)){
							echo "Thanks, your message was delivered.";
						}else{
							echo "Error! message not sent";
						}

					}else{
						echo "Error! Please enter your Email";
					}

			}else{
				echo "Error! Please enter your Message";
			}

		}else{
			echo "Error! Please enter your name";
		}	

	}

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
											$comments = CheckData($_POST['comments']);

											$to      = 'enquiry.ngomacommunications@gmail.com';
											$subject = "General Enquiry";
											$message = 'You received an email from: '.CheckData($_POST['firstName'])." ".CheckData($_POST['lastName']). "\r\n".
											"from ".CheckData($_POST['company']). "\r\n".
											"Job title :" .CheckData($_POST['jobTitle'])."\r\n".
											"Contact number: " .CheckData($_POST['phone'])."\r\n".
											"Email Address: " .CheckData($_POST['email'])."\r\n".
											"City :" .CheckData($_POST['city']). "\r\n".
											"Category: ".CheckData($_POST['category']). "\r\n".
											"Message: ".$comments. "\r\n".
											
											
											$headers = 'From: <enquiries@ngomacommunications.com>' . "\r\n";

											if(mail($to, $subject, $message,$headers)){
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



if($_POST['action'] == "proposal"){
	if(CheckData($_POST['firstName']) !=''){

	if(CheckData($_POST['lastName']) !=''){

		if(CheckData($_POST['email']) !=''){

				if(CheckData($_POST['company']) !=''){

						if(CheckData($_POST['jobTitle']) !=''){

							if(CheckData($_POST['phone']) !=''){

								if(CheckData($_POST['city']) !=''){

									if(CheckData($_POST['country']) !=''){

										if(CheckData($_POST['comments']) !=''){

											if(CheckData($_POST['programme']) !=''){

												if(CheckData($_POST['participants']) > 0 && is_numeric(CheckData($_POST['participants']))){

													if(CheckData($_POST['title']) !='' ){

														if(CheckData($_POST['time']) !=''){
															if(CheckData($_POST['date']) !=''){
																if(CheckData($_POST['deliveryPlace']) !=''){
																		$to      = 'reservations@ngomacommunications.com';
																		$subject = "Proposal  Enquiry";
																		$message = 'You received an email from: '.CheckData($_POST['title']).' '.CheckData($_POST['firstName'])." ".CheckData($_POST['lastName']). "\r\n".
																		"from:  ".CheckData($_POST['company']). "\r\n".
																		"Job title: " .CheckData($_POST['jobTitle'])."\r\n".
																		"Contact number: " .CheckData($_POST['phone'])."\r\n".
																		"Email Address: " .CheckData($_POST['email'])."\r\n".
																		"Suggested Time: " .CheckData($_POST['time'])."\r\n".
																		"Suggested Date: " .CheckData($_POST['date'])."\r\n".
																		"Suggested Place of delivery: " .CheckData($_POST['deliveryPlace'])."\r\n".
																		"City: " .CheckData($_POST['city']). "\r\n".
																		"Number of particiants:" .CheckData($_POST['participants']). "\r\n".
																		"programme: " .CheckData($_POST['programme']). "\r\n".
																		"Country: ".CheckData($_POST['country']). "\r\n".
																		"Message: " .CheckData($_POST['comments']);
																		
																		$headers = 'From:'.CheckData($_POST['email']) . "\r\n" ;
																	    'Reply-To: '.$_POST['email'].' '. "\r\n" .
																	    'CC: reservations@ngomacommunications.com '. "\r\n" .
																	    'X-Mailer: PHP/' . phpversion();

																		if(mail($to, $subject, $message)){
																			$toTwo = CheckData($_POST['email']) ;
																			 include "mailTemplate.php";
				 
																			// Set content-type for sending HTML email
																			$headersTwo = "MIME-Version: 1.0" . "\r\n";
																			$headersTwo .= "Content-type:text/html;charset=UTF-8" . "\r\n";
																			 
																			// Additional headers
																			$headersTwo .= 'From:'.$to. "\r\n" ;
																						    'Reply-To: '.$to.' '. "\r\n" .
																						    'X-Mailer: PHP/' . phpversion();

																			if(mail($toTwo, $subject, $messageTwo, $headersTwo)){
																				echo "Thank you, your request for a proposal was delivered. We will get back to you shortly.";
																			}

																		}else{
																			echo "Error! proposal not sent";
																		}
																}else{
																	echo "Please suggest Place";
																}
															}else{
																echo "Please Suggest Date";
															}
														}else{
															echo "Please suggest Time";
														}

													}else{
														echo "Please enter your title";
													}
														
												}else{
													echo "Please enter a valid number of participants";
												}
											}else{
												echo "please select a programme you would like";
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


if($_POST['action'] == "inHouse"){
		if(CheckData($_POST['firstName']) !=''){

	if(CheckData($_POST['lastName']) !=''){

		if(CheckData($_POST['email']) !=''){

				if(CheckData($_POST['company']) !=''){

						if(CheckData($_POST['jobTitle']) !=''){

							if(CheckData($_POST['phone']) !=''){

								if(CheckData($_POST['city']) !=''){

									if(CheckData($_POST['country']) !=''){

										if(CheckData($_POST['comments']) !=''){

											if(CheckData($_POST['offer']) !=''){

												if(CheckData($_POST['participants']) > 0 && is_numeric(CheckData($_POST['participants']))){

													if(CheckData($_POST['title']) !='' ){
															if(CheckData($_POST['facilitator']) !='' ){
																	if(CheckData($_POST['audience']) !='' ){
																			if(CheckData($_POST['date']) !='' ){
																					if(CheckData($_POST['time']) !='' ){
																						if(CheckData($_POST['suggestedPlace']) !='' ){
																							$programme = "";
																							$offer = "";
																							$to  = 'reservations@ngomacommunications.com';
																							if(CheckData($_POST['type']) =='KS'){
																								$programme = "keynote Speaking";
																								$offer = "Keynote Speaker Only";
																								
																							}else{
																								$programme = "Executive Coaching";
																								$offer = CheckData($_POST['offer']);
																							}
																							$subject = $programme . " Proposal  Enquiry";
																							$message = 'You received an email from: '.CheckData($_POST['title']).' '.CheckData($_POST['firstName'])." ".CheckData($_POST['lastName']). "\r\n".
																							"from:  ".CheckData($_POST['company']). "\r\n".
																							"Job title: " .CheckData($_POST['jobTitle'])."\r\n".
																							"Contact number: " .CheckData($_POST['phone'])."\r\n".
																							"Email Address: " .CheckData($_POST['email'])."\r\n".
																							"Number of particiants: " .CheckData($_POST['participants']). "\r\n".
																							"programme: " .$programme. "\r\n".
																							"Offer: " .$offer . "\r\n".
																							"place of delivery:" .CheckData($_POST['suggestedPlace']). "\r\n".
																							"Suggested Time : " .CheckData($_POST['time']). "\r\n".
																							"Suggested date: " .CheckData($_POST['date']). "\r\n".
																							"Audience Type: " .CheckData($_POST['audience']). "\r\n".
																							"Preferred facilitator :" .CheckData($_POST['facilitator']). "\r\n".
																							"City: " .CheckData($_POST['city']). "\r\n".
																							"Country: ".CheckData($_POST['country']). "\r\n".
																							"Message: " .CheckData($_POST['comments']);
																							
																							$headers = 'From:'.CheckData($_POST['email']) . "\r\n" ;
																						    'Reply-To: '.$_POST['email'].' '. "\r\n" .
																						    'CC: reservations@ngomacommunications.com '. "\r\n" .
																						    'X-Mailer: PHP/' . phpversion();

																							if(mail($to, $subject, $message, $headers)){
																								$toTwo = CheckData($_POST['email']) ;
																								 include "mailTemplate.php";
									 
																								// Set content-type for sending HTML email
																								$headersTwo = "MIME-Version: 1.0" . "\r\n";
																								$headersTwo .= "Content-type:text/html;charset=UTF-8" . "\r\n";
																								 
																								// Additional headers
																								$headersTwo .= 'From:'.$to. "\r\n" ;
																											    'Reply-To: '.$to.' '. "\r\n" .
																											    'X-Mailer: PHP/' . phpversion();

																								if(mail($toTwo, $subject, $messageTwo, $headersTwo)){
																									echo "Thank you, your request for a proposal was delivered. We will get back to you shortly.";
																								}


																							
																							}else{
																								echo "Error! proposal not sent";
																							}

																							}else{
																								echo "Please suggest place of delivery";
																							}
																					}else{
																						echo "Please suggest time";
																					}
																			}else{
																				echo "Please suggest date";
																			}
																	
																	}else{
																		echo "Please enter the audience profile";
																	}
															}else{
																echo "Please select facilitattor";
															}

													}else{
														echo "Please enter your title";
													}

												}else{
													echo "Please enter a valid number of participants";
												}
											}else{
												echo "please select a programme you would like";
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




}else{
	echo "something is not alright";
}




function CheckData($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 