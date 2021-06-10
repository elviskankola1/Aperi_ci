<?php
include "../connectDB.php";
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
																		$sql = 'INSERT INTO ngomaSeminars (seminarName, seminarPhoto, seminarPrice, seminarStartTime, seminarEndTime ,seminarDuration, seminarDate, seminarDescription, seminarTarget, seminarOutline, seminarVenue, seminarCountry, seminarCity, seminarFacilitator, seminarType, seminarOffering, seminarStatus)

																		VALUES ( "'.$seminarName.'", "'.$image.'", "'.$seminarPrice.'", "'.$seminarStartTime.'", "'.$seminarEndTime.'", "'.$seminarDuration.'", "'.$seminarDate.'", "'.$seminarDescription.'", "'.$seminarTarget.'" ,"'.$seminarOutline.'", "'.$seminarVenue.'", "'.$seminarCountry.'", "'.$seminarCity.'", "'.$seminarFacilitator.'", "'.$seminarType.'", "'.$seminarOffering.'","'.$status.'")'
																						    ;
																                if(!mysqli_query($con, $sql)){
																                 echo mysqli_error($con);
																                }else{
																                  echo"Seminar Successfully Created.";
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
	  	}elseif($row['seminarOffering'] =="LS2"){
	  		$key ="<span class='badge badge-danger'> Life Skills</span>";
	  	}elseif ($row['seminarOffering'] =="TLS") {
	  		$key ="<span class='badge badge-danger'> Thusa Life Skills</span>";
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
                      <td>'.$row['seminarCountry'].'</td>
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
                                <select id="country" class="form-control" name="seminarCountry" value="<?php  echo $row['seminarCountry']; ?>"> 
                                   <option value="">Please Select Country</option>
                                 <option value="Online event">Online event</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon" selected="">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                </select>
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
                                 <option value="LS2"> Life Skills</option>
                                 <option value="TLS"> Thusa Life Skills</option>
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
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label>Upload Picture</label>
                              <input class="form-control" type="file" name="fileToUpload">
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
if (secure(basename( $_FILES["fileToUpload"]["name"]))) {

$target_dir = "../../../images/events/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

				$sql = 'UPDATE ngomaSeminars SET seminarName ="'.secure($_POST['seminarName']).'",
				seminarPhoto="'.secure(basename( $_FILES["fileToUpload"]["name"])).'",
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
			}
}

if(secure($_POST['action']) == "deleteSeminar"){
	$val = secure($_POST['val']);
	$image = secure($_POST['img']);
	if (is_numeric($val) && $val > 0 ) {
		if($image != ''){
			
					$sql = "DELETE  FROM ngomaSeminars WHERE seminarID = '".$val."' ";
					if(mysqli_query($con, $sql)){
						echo "Seminar Successfully Deleted";
					}else{
						echo mysqli_error($con);
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