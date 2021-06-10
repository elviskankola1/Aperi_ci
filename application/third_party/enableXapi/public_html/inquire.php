
<?php
include "connectDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "favicon.php";?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Enquiries</title>
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
									<div class="title-bg">Enquiry Form</div>
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
												Our team will take contact you within 24 hours to discuss with you about your leadership training needs.<br>
												This is free of charge and without any commitments.</p>

											
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
												<input type="text" class="formgroup fiftyPercent" name="firstName" placeholder="First Name" required>
												<input type="text" class="formgroup fiftyPercent" name="lastName" placeholder="Last Name" required>
												<input type="email" class="formgroup fiftyPercent" name="email" placeholder="Email" required>
												<input type="text" class="formgroup fiftyPercent" name="company" placeholder="Company" required>
												<input type="text" class="formgroup fiftyPercent" name="jobTitle" placeholder="Job Title" required>
												<input type="tel" class="formgroup fiftyPercent" name="phone" placeholder="Phone" required>
												<input type="hidden" value="inquiry" name="action"  required/>
												<input type="text" class="formgroup fiftyPercent" name="city" placeholder="City / Town" required>
												<select class="formgroup fiftyPercent" name="category" style="background: transparent; border:none !important; border-bottom: 1px solid #777777 !important; color:#697161;">
												<option value="">Please Select Category</option>
												   <option value="Leading Yourself"> Leading Yourself</option>
                                                   <option value="Leading People"> Leading People</option>
                                                   <option value="Leading Organisations"> Leading Organisations</option>
                                                   <option value="Life Skills"> Life Skills</option>
											</select>

											<textarea  placeholder="Your Message" name="comments" cols="4" style="width: 98%; margin:2%;" required></textarea>
											<input type="submit" value="submit" class="btn2" name="btn btn2" />
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

