
<?php
include "connectDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<?php include "favicon.php";?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Proposals</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<script src="https://code.jquery.com/jquery-2.2.4.js"
			  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
			  crossorigin="anonymous"></script>
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="images/logo.png">
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '345083379773116'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=345083379773116&ev=PageView
	&noscript=1"/>
	</noscript>
	<style>
		*{
			padding: 0px;
			margin:0px;
		}
		html, body{
			width:100%;
			height:100%;
		}
		.overlay {
		  position: fixed;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background: rgba(0, 0, 0, 0.7);
		  overflow-y: auto;
		  display: none;
		}

		.popup {
		  margin: 70px auto;
		  padding: 20px;
		  background: #35393c;
		  border-radius: 5px;
		  color: #A09F9F;
		  width: 50%;
		  position: relative;
		  transition: all 5s ease-in-out;
		}

		.popup h2 {
		  margin-top: 0;
		  color: #A09F9F;
		  font-weight: 300;
		}
		.popup .close {
		  position: absolute;
		  top: 20px;
		  right: 30px;
		  transition: all 200ms;
		  font-size: 30px;
		  font-weight: bold;
		  text-decoration: none;
		  color: #A09F9F;
		}
		.popup .close:hover {
		  color: #06D85F;
		}
		.popup .content {
		  max-height: 30%;
		}
		.popup .coll{
			float: left;
  			width: 33.33%;
		}		
		.popup .coll2{
			float: left;
  			width: 20%;
  			padding: 10px;
		}		
		.popup .coll3{
			float: left;
  			width: 80%;
  			padding: 10px;
		}
		.popup .coll4{
			width: 100%
		}
		.popup .col1{
			float: left;
			width: 50%;
		}
		.popup .col2{
			float: right;
			width: 50%;
		}
		.popup .raw:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		.popup .mycard{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			border-radius: 20px;
			padding: 5px;
			border: 1px solid;
  			transition: 0.3s;
		}
		.popup .btn {
		  background-color: gray;
		  border: none;
		  color: white;
		  padding: 5px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 14px;
		  border-radius: 15px;
		  -webkit-transition-duration: 0.4s;
  		  transition-duration: 0.4s;
		}
		.popup .btn:hover{
			background-color: #4CAF50;
  			color: white;
		}
		.flex{
			display: flex; 
			justify-content: center;
		}

		@media screen and (max-width: 700px){
		  .box{
		    width: 90%;
		  }
		  .popup{
		    width: 100%;
		  }
		  .popup .coll .p{
		  	font-size: 20%;
		  }
		  .popup .coll .i{
		  	font-size: 20%;
		  }
		}	

		.far{
			padding:10px;
			border-radius: 50%;
		}	

		.formgroup{
			height:50px;
			padding: 10px;
		}
		.fiftyPercent{
			width:48%;
			margin:1%;
			float:left;
		}
		.btn2{
			width:90px;
			height: 50px;
			border:1px solid gray;
			margin-top:30px;
			margin-left:25px;
		}

		@media screen and (max-width: 700px){
		.fiftyPercent{
				width:91%;
				margin:1%;
				float:left;
			}
		}


		@keyframes spinner-border{
			to{-webkit-transform:rotate(360deg);
			transform:rotate(360deg)}
		}
		.spinner-border{
			text-align: center;
			align-content: center;
			align-items: center;
			display:inline-block;
			width:2rem;height:2rem;
			vertical-align:text-bottom;
			border:.25em solid currentColor;
			border-right-color:transparent;
			border-radius:50%;
			-webkit-animation:spinner-border .75s linear infinite;
			animation:spinner-border .75s linear infinite;
			margin:0px auto !important;
		}

	</style>
	
</head>

<body>
	<div class="page">
		
		<!--
			Preloader
		-->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>
		
		<!--
			Header
		-->
		<header class="header">

			<!-- menu -->
			<!-- menu -->
			<?php
				include 'nav.php';
			?>

			<!-- Mobile Menu -->
			<span class="menu-btn">
				<span class="m-line"></span>
			</span>
		</header>

		<!--
			Container
		-->
		<div class="container">
			
			<!-- 
				Card - Blog
			-->
			<div class="card-inner blogs active" id="blog-card">
				<div class="row card-container" data-simplebar="init"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 43px;"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 12px; margin-bottom: -24px;"><div class="simplebar-content" style="padding-bottom: 12px; margin-right: -12px;">
						
					<!--
						Card Wrap
					-->
					<div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">Executive Coaching Enquiry</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
						<div class="content blog">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<form id="cform" method="post" novalidate="novalidate">
										
										<div class="row">

											<p style="margin-top:40px; text-align:center; font-size: 20px;">
												Our team will take contact with you in the next 24 hours to hear more about your project and needs.
												<br> This is free of charge and without any commitments.
											</p>

											
										</div>
									</form>
									<!-- title 
									<div class="title" style="font-weight: 300; padding-top: 5% !important"><span>Upcoming</span> Workshops</div>-->
								</div>
							</div>

							<!-- items -->
							<div class="row" >
									<!-- workshop item -->
									
									<form method="POST" action="" id="contactForm">
										<div class="col col-m-11 col-t-11 col-d-10 col-d-lg-10" style="margin-left:5%; margin-right:5%;">
												
												<input type="text" class="formgroup fiftyPercent" max="50" name="programme" value="<?php echo $_POST['offer']; ?>" placeholder="Programme" required />
												<input type="number" class="formgroup fiftyPercent" max="50" name="participants" placeholder="Number of Number of Participants" required />
												<select class="formgroup fiftyPercent" name="title" style="background: transparent; border:none !important; border-bottom: 1px solid #777777 !important; color:#697161;">
													<option value="">Please select title</option>
													<option value="Mr">Mr</option>
													<option value="Mrs">Mrs</option>
													<option value="Miss">Miss</option>
												</select>
												<input type="text" class="formgroup fiftyPercent" name="jobTitle" placeholder="Job Title" required />
												<input type="text" class="formgroup fiftyPercent" name="firstName" placeholder="First Name" required />
												<input type="text" class="formgroup fiftyPercent" name="lastName" placeholder="Last Name" required />
												<input type="email" class="formgroup fiftyPercent" name="email" placeholder="Email" required />
												<input type="tel" class="formgroup fiftyPercent" name="phone" placeholder="Phone" required />
												<input type="text" class="formgroup fiftyPercent" name="company" placeholder="Company" required />
												<input type="hidden" value="proposal" name="action" required />
												<input type="text" class="formgroup fiftyPercent" name="city" placeholder="City / Town"  required />
												<select class="formgroup fiftyPercent" name="country" style="background: transparent; border:none !important; border-bottom: 1px solid #777777 !important; color:#697161;">
															<option value="">Please Select Country</option>
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
														    <option value="Lebanon" selected>Lebanon</option>
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
														    <option value="Vietnam">Viet Nam</option>
														    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
														    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
														    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
														    <option value="Western Sahara">Western Sahara</option>
														    <option value="Yemen">Yemen</option>
														    <option value="Yugoslavia">Yugoslavia</option>
														    <option value="Zambia">Zambia</option>
														    <option value="Zimbabwe">Zimbabwe</option>
												</select>

											<textarea  placeholder="Your Message" name="comments" cols="4" style="width: 98%; margin:2%;" required></textarea>
											<input type="submit" value="send" class="btn2" name="btn btn2">
											 <div class="col-md-12" style="text-align: center; padding-bottom: 0;   padding-top: 1%">
											<div class="spinner-border text-muted"style="margin: auto, auto; text-align: center !important; display: none;"></div>
										</div>
										</div>
										

									</form>
								
							</div>

							<div class="pager">
								<input type="hidden" id="next_content" value="2">
								<a href="#" class="button">
									<!-- <span class="text" id="loadMore">Load More</span> -->
									<span class="icon"></span>
								</a>
							</div>

						</div> 

					</div>

					
				</div></div></div>
			</div>
			<div class="lines-grid loaded">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
				</div>
			</div>

		</div>


	</div>
	<?php require_once('back.php');?>
	<script
	src="https://code.jquery.com/jquery-2.2.4.js"
	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
	crossorigin="anonymous"></script>
	<script src="js/scripts.min.js"></script>

	<script>
	$(document).ready(function(){
		$(document).on('submit', '#contactForm', function(e){
          e.preventDefault();
          $(".text-muted").fadeIn(500);
          $.ajax({
            type:"POST",
            url:"mailer.php",
            data:new FormData(this),
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData:false, // To send DOMDocument or non processed data file it is set to false               
            success:function(data){
            	$(".text-muted").fadeOut(500);
            alert(data);

            }
          });
        });

		$(document).on('click', '.close', function(){
			$(".overlay").fadeOut(500);
		});


			
		});

	</script>
</body>


</html>

<?php
function getName($conn){
	$sql = "SELECT DISTINCT ename FROM ngo; 
	";
	$data =  "";
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);  
	if($queryResult > 0 ){
	while ($row = mysqli_fetch_array($result)){
		$data .= '<option value="'.$row['ename'].'">'.$row['ename'].'</option>';
	}
	}else{
		$data .= 'No countries available';
	}
	return $data;
}

?>
