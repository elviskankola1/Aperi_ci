

<!DOCTYPE html>
<html lang="en">

<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Ngoma Communications</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<!--
		Favicons
	-->
	<?php include "favicon.php";?>

	<style>
		.our-team {
		  padding: 30px 0 40px;
		  margin-bottom: 30px;
		  background-color: #35373B;
		  text-align: center;
		  overflow: hidden;
		  position: relative;
		}

		.our-team .picture {
		  display: inline-block;
		  height: 130px;
		  width: 130px;
		  margin-bottom: 50px;
		  z-index: 1;
		  position: relative;
		}
		.team-content{
			margin-bottom: 15%;
		}

		.our-team .picture::before {
		  content: "";
		  width: 100%;
		  height: 0;
		  border-radius: 50%;
		  background-color: gray;
		  position: absolute;
		  bottom: 135%;
		  right: 0;
		  left: 0;
		  opacity: 0.9;
		  transform: scale(3);
		  transition: all 0.3s linear 0s;
		}

		.our-team:hover .picture::before {
		  height: 100%;
		}

		.our-team .picture::after {
		  content: "";
		  width: 100%;
		  height: 100%;
		  border-radius: 50%;
		  background-color: gray;
		  position: absolute;
		  top: 0;
		  left: 0;
		  z-index: -1;
		}

		.our-team .picture img {
		  width: 100%;
		  height: auto;
		  border-radius: 50%;
		  transform: scale(1);
		  transition: all 0.9s ease 0s;
		}

		.our-team:hover .picture img {
		  box-shadow: 0 0 0 14px #35373B;
		  transform: scale(0.7);
		}

		.our-team .title {
		  display: block;
		  font-size: 15px;
		  color: gray;
		  text-transform: capitalize;
		}
		
		.our-team .social {
		  width: 100%;
		  padding: 0;
		  margin: 0;
		  background-color: gray;
		  position: absolute;
		  bottom: -100px;
		  left: 0;
		  transition: all 0.5s ease 0s;
		}

		.our-team:hover .social {
		  bottom: 0;
		}

		.our-team .social li {
		  display: inline-block;
		}

		.our-team .social li a {
		  display: block;
		  padding: 10px;
		  font-size: 17px;
		  color: white;
		  transition: all 0.3s ease 0s;
		  text-decoration: none;
		  font-weight: 200;
		}

		.our-team .social li a:hover {
		  color: #fff;
		  background-color: #35373B;
		}

		.float{
			position:fixed;
			width:60px;
			height:60px;
			bottom:10px;
			right:40px;
			background-color: gray;
			color:#FFF;
			border-radius:50px;
			text-align:center;
			box-shadow: 2px 2px 3px #999;
		}

		.my-float{
			margin-top:22px;
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
				<div class="row card-container" data-simplebar>

					<div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">

						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="mobile4" style="font-weight: 200">Step 1: Pick a Date</div>
								</div>
							</div>
						</div>

					</div>

					<div class="content blog" style="text-align: center; margin-top: 30px">
						<div class="row">
							<div class="col col-m-9 col-t-9 col-d-6 col-d-lg-6">
								<p style="font-size: 20px; text-align: left;">
									Please Select the date and time slot you wish to  arrange your private Session
								</p>
								<p style="font-size: 20px; text-align: justify;">
									You will be prompted to select a facilitator/Coach/Keynote speaker according to their availability. After a successful selection of a facilitator/Coach/Keynote speaker you will be able to proceed with the registration of your private session.
								</p>
							</div>
						</div>
					</div>

					<div class="content blog" style="text-align: center; margin-top: 30px">
						<div class="row">
							<div class="col col-m-9 col-t-9 col-d-4 col-d-lg-4">
								<input type="date">
							</div>
						</div>
					</div>

					<div class="content blog" style="text-align: center; margin-top: 30px">
						
						<div class="row">

							<!--Item 1-->
							<div class="col col-m-10 col-t-6 col-d-4 col-d-lg-3" style="margin-right: 3%">
							    <div class="our-team">
							        <div class="picture">
							          <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
							        </div>
							        <div class="team-content">
							          <h3 class="name" style="font-weight: 200">Rebecca Kanoerera</h3>
							        </div>
							        <ul class="social">
							          <li><a href="" aria-hidden="true">Morning</a></li>
							          <li><a href="" aria-hidden="true">Afternoon</a></li>
							          <li><a href="" aria-hidden="true">Full day</a></li>
							        </ul>
							    </div>
							</div>

							<!--Item 2-->
							<div class="col col-m-10 col-t-6 col-d-4 col-d-lg-3" style="margin-right: 3%">
							    <div class="our-team">
							        <div class="picture">
							          <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
							        </div>
							        <div class="team-content">
							          <h3 class="name" style="font-weight: 200">Mimile Maisha</h3>
							        </div>
							        <ul class="social">
							          <li><a href="" aria-hidden="true">Morning</a></li>
							          <li><a href="" aria-hidden="true">Afternoon</a></li>
							          <li><a href="" aria-hidden="true">Full day</a></li>
							        </ul>
							    </div>
							</div>

							<!--Item 3-->
							<div class="col col-m-10 col-t-6 col-d-4 col-d-lg-3" style="margin-right: 3%">
							    <div class="our-team">
							        <div class="picture">
							          <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
							        </div>
							        <div class="team-content">
							          <h3 class="name" style="font-weight: 200">Mimile Maisha</h3>
							        </div>
							        <ul class="social">
							          <li><a href="" aria-hidden="true">Morning</a></li>
							          <li><a href="" aria-hidden="true">Afternoon</a></li>
							          <li><a href="" aria-hidden="true">Full day</a></li>
							        </ul>
							    </div>
							</div>

						</div>
					</div>
			
			<!-- 
				Lines Grid
			-->
			<div class="lines-grid">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
				</div>
			</div>

		</div>
		<a href="javascript:history.go(-1)" class="float">
			<i class="fa fa-reply my-float"></i>
		</a>
	</div>
	<script src="js/scripts.min.js"></script>
	<script
	src="https://code.jquery.com/jquery-2.2.4.js"
	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>

</body>


</html>