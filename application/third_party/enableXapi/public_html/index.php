<?php require_once "connectDB.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "favicon.php";?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="Enabling leadership skills for personal and business growth" />
	<meta name="keywords" content="ngoma communications, leadership, business, personal, growth, change, consulting,  " />
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<link rel="stylesheet" href="css/modal-video.min.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/b8977c7e2a.js">
		
	</script>
	
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="images/logo.png">
<!-- Facebook Pixel Code -->
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
<!-- End Facebook Pixel Code -->
	<style>
		.btn1{
			background-color: #4d4d4f;
		  	color: white;
		  	padding: 10px 15px;
		  	text-align: center;
		  	text-decoration: none;
		  	display: inline-block;
		  	font-weight: 300;
		  	font-size: 16px;
		  	margin: 4px 4px;
		  	cursor: pointer;
		  	-webkit-transition-duration: 0.4s;
		  	transition-duration: 0.4s;
		  	border-radius: 20px;
		  	display: inline-block;
		}
		@-webkit-keyframes btn1 {
		  50% {
		    -webkit-transform: scale(1.2);
		    transform: scale(1.2);
		  }
		}
		@keyframes bnt1 {
		  50% {
		    -webkit-transform: scale(1.2);
		    transform: scale(1.2);
		  }
		}
		.btn1:hover, .btn1:focus, .btn1:active{
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			color: #fff;
			-webkit-animation-name: btn1;
		  	animation-name: btn1;
		  	-webkit-animation-duration: 0.3s;
		  	animation-duration: 0.3s;
		  	-webkit-animation-timing-function: linear;
		  	animation-timing-function: linear;
		  	-webkit-animation-iteration-count: 1;
		  	animation-iteration-count: 1;
		}
		.btn2{
			height: 30%;
			 font-size: 12px;
		    background-color: rgba(38, 38, 40, 0.5);
		    padding: 8px 8px;
		    border-radius: 5px;
		  	color: white;
		  	text-align: center;
		  	text-decoration: none;
		  	display: inline-block;
		  	font-weight: 300;
		  	margin: 4px 4px;
		  	cursor: pointer;
		  	-webkit-transition-duration: 0.4s;
		  	transition-duration: 0.4s;
		}
		.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  padding-top: 100px; /* Location of the box */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content */
			.modal-content {
			  background-color: #383c40;
			  margin: auto;
			  position: absolute; /* Position text */
			  top: 50%; /* Position text in the middle */
			  left: 50%; /* Position text in the middle */
			  transform: translate(-50%, -50%);
			  max-width:600px;
			  width: 50%;
			  border-radius:10px;
			  padding: 10px;
			  text-align: center;
			}

			/* The Close Button */
			.close {
			  color: white;
			  float: right;
			  font-size: 28px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: grey;
			  text-decoration: none;
			  cursor: pointer;
			}

			.modal-content  form{
				max-width:250px;
				padding-bottom: 4px;
			}
			
			
		@-webkit-keyframes btn2 {
		  50% {
		    -webkit-transform: scale(1.2);
		    transform: scale(1.2);
		  }
		}
		@keyframes bnt2 {
		  50% {
		    -webkit-transform: scale(1.2);
		    transform: scale(1.2);
		  }
		}
		.btn2:hover, .btn2:focus, .btn2:active{
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			color: #fff;
			-webkit-animation-name: btn1;
		  	animation-name: btn1;
		  	-webkit-animation-duration: 0.3s;
		  	animation-duration: 0.3s;
		  	-webkit-animation-timing-function: linear;
		  	animation-timing-function: linear;
		  	-webkit-animation-iteration-count: 1;
		  	animation-iteration-count: 1;
		}
		.flex {
		  display: flex;
		  flex-direction: row;
		  flex-wrap: wrap;
		  justify-content: center;
		  width: 100%;
		}
		.flex:after{
			flex-direction: column;
		}
		.fa {
			  padding: 5px;
			  
			  text-decoration: none;
			}
		.fa:hover {
		    opacity: 0.7;
		}

		.fa-compass{
			padding:6px;
			font-size: 15px;
			border-radius:50%;
		}
		.preloader{
		position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    background: #181818;
    z-index: 0;
    display: none;
}
.box-item .fa-compass{
	text-align: center !important; 
}

.box-item {
    
    position: relative;
    overflow: hidden;
    text-align: left;
}
.box-item a span{
	white-space: nowrap;
}
.mobile4{
	margin-top: 14%;
    background: rgb(0,0,0,0.6);
    color: #fff; padding: 2%;
    font-weight: 300;
   text-align: left;
    font-size: 16px !important
}
.buttons{
padding-left: 4rem; 
}

@media only screen and (max-width: 600px) {
	
	.aboutButtons .btn2{
		margin: 0rem !important;
	}
  .text{
	padding-bottom: 6rem !important;
	margin-top: 10rem !important;
	padding-right: 1rem !important;
	padding-left: 1rem !important;
	
	}
.viewmore{
	width: 100% !important;
	margin-left:  0rem !important;
	margin-bottom: 2rem !important
}
.service-items{
	padding-top: 2rem
}


.aboutText{
	padding-left: 1%; padding-right: 1% 
}


.card-image1{
	height: auto !important;
}
.card-image a{
	color: #222 !important;
}
.card-block{
	
	min-width: 10rem !important;
	max-width: 10rem !important;

}
.name{
	font-weight: 200 !important;
}
.cardm{
	
	
	padding-right: 0rem !important

}
.circle-bts{
	bottom: 20rem !important;
	left: 2rem

}
.circle-bts1{
	
bottom: 8rem

}





}

.aboutText{
	padding-left: 15% ;  padding-right: 35% ;
}
@media (max-width: 1330px){
.row .col.col-d-8 {
    width: 100%;
}}

	
		::-webkit-scrollbar {
    width: 0px; 
 
}

::-webkit-scrollbar-thumb {
  background: transparent; 
  width: 0px;
}
::-webkit-scrollbar {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;
    background: transparent;   /* Firefox */
}

.simplebar-scrollbar{
	width: 0px !important;
	background-color: transparent !important;
}
.card1{
	display: flex;
	color: #fff;
    border: none;
    border-radius: 20px;   
    font-weight: 200;
    max-height: 130px;
    position: relative;
    margin-bottom: 1rem;
}
.card-block{
	background-color: rgba(0,0,0,0.5);
	border-top-right-radius: 20px;
border-bottom-right-radius: 20px;
	padding: 1rem;
	min-width: 13rem;
	max-width: 13rem;

}
.image{
	border-top-left-radius: 20px;
border-bottom-left-radius: 20px;
}
.image img{
	min-height: 8rem;
	max-height: 8rem;
	max-width: 10rem;
	min-width: 10rem;
border-top-left-radius: 20px;
border-bottom-left-radius: 20px;


}

.card-inner .card-box {
    position: relative;
    padding: 30px;
    background: rgba(255, 255, 255, .2);
    box-shadow: 0 0 50px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 0 50px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 0 50px rgba(0, 0, 0, .2);
    -khtml-box-shadow: 0 0 50px rgba(0, 0, 0, .2);
    border-radius: 18px;
    -moz-border-radius: 18px;
    -webkit-border-radius: 18px;
    -khtml-border-radius: 18px;
    transition: all .3s ease 0s;
    -moz-transition: all .3s ease 0s;
    -webkit-transition: all .3s ease 0s;
    -o-transition: all .3s ease 0s;
    color: #000;
}

.simplebar-scroll-content{
	padding: 0px !important
}

.logo{
	width: 10rem; float: left; margin-top: -2rem;
}

.Mobile{
	display: none;
	padding-left: 2rem !important
}
.text {
	margin-top: 8rem;
}


@media only screen and (max-width: 1085px) {
  .desktop{
	display: none !important;
}
.text {
	margin-top: 2rem !important;
}




.logo{
	width: 15rem; float: left; margin-top: 4rem;
}

.Mobile{
	display: block;
	min-height: 130vh !important;
	margin-top: 2rem;
	min-width: 150vw !important;
	padding-left: 4rem;
}
.cardm{
	background-size: 405vh auto   !important;
	padding-left: 1rem;
	padding-right: 1rem

}

.card-block{
	
	min-width: 18rem;
	max-width: 18rem;

}



}


.cardm{
	background-size: auto 105%;
	padding-right: 6rem
}
.name{
	 overflow : hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.simplebar-content{padding-bottom: 0px;}
.logo{
	width: 15rem;
	margin-left: 4rem;
}



.circle-bts a{
	
color: #fff !important

}
.circle-bts{
	position: absolute;
	bottom: 4rem;
	right: 2rem

}

.circle-bts1{
	
	left: 2rem

}




.ml{
	margin-left: -2rem;
}




body::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 7px;
}
body::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}







	</style>

</head>

<body>
	<div class="page" >
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
		<header class="header" >

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
				Card - Started
			--><!--======================Home starts=====================-->	
			   <!--======================Home starts=====================-->	
             	<div class="card-inner active" id="home">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-9 col-d-lg-9" data-simplebar>
						
						<!-- About Image -->
						<div class="card-image desktop col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="background-image: url(images/bg1.jpg); ">
							
						  <div class="">Upcoming Events</div>


						<?php

                                      $sql = "SELECT * FROM ngomaSeminars ORDER BY seminarDate ASC limit 4";
                                      $result = mysqli_query($con, $sql);
                                      $queryResult = mysqli_num_rows($result);

                                        while ($row = mysqli_fetch_array($result)){
                                            ?>
						
						      <div class="card1">
						        <div class="image">
						        	<a href="events.php">
						          <img class="d-block " src="images/events/<?php echo $row['seminarPhoto'];?>" alt="">
						          </a>
						        </div>
						   
						          <div class="card-block">
						            <!--           <h4 class="card-title">Small card</h4> -->
						            	<a href="events.php"><p class="name"><?php echo $row['seminarName']?>
						         </p></a>
						         <p>
						         	<span style="font-size: 12px"><?php echo date('d-M-Y',strtotime($row['seminarDate']));?><span style="float: right;">$ <?php echo $row['seminarPrice']?></span></span>
						         	<br>
						         	<span><?php echo $row['seminarCountry']?></span>
						         </p>
						          </div>						 
						      </div>
						      	<?php }?>
		
													
													</div>
									
						<!--
							Inner Top
						-->
						<div class="content inner-top  col-d-lg-10 cardm" style="background-image: url(https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F61526849%2F71524111461%2F1%2Foriginal.20190501-194340?w=1000&auto=compress&rect=0%2C7%2C5184%2C2592&s=cf96f2d6e270c2302c8a2b38fffd165b);background-repeat: no-repeat; margin-top: -2rem; ">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="row">
										<div class="">

										<img src="images/ngoma.png" class="logo" style="">


									</div>
									</div>
									<div class="text">
										
										<p class="" style="font-size: 32px; line-height: 1.2;  color:white;  text-shadow: 2px 2px 4px #000000; text-align: center; font-weight:200;">
											We help organisations and individuals<br> to reach a higher level of excellence.
										</p>
									</div>

									<br>
									
					<div style="background-color: rgba(0,0,0,.5);padding: 1rem; padding-bottom: .5rem" ><p style="font-size: 15px; color: #fff;font-weight: 200" >Grounded in ongoing research and 15 years of experience developing successful business leaders, our offerings address the three aspects of leadership: Leading Youself; Leading People; Leading Organisations. </p></div>
								</div>

									<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"> <i class="far fa-compass" style="background-color: red; color:white; height: 20%;border-radius: 50px"></i></div>
										<div class="name"><a href="leading.php" style="color: #222;font-size: 15px">Leading Yourself</a></div>
										
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"> <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;border-radius: 50px"></i></div>
										<div class="name"><a href="leadingPeople.php" style="color: #222;font-size: 15px">Leading People</a></div>
										
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="far fa-compass" style="background-color: #4caf50; color:white;border-radius: 50px"></i></div>
										<div class="name"><a href="leadingOrganisations.php" style="color: #222;font-size: 15px">Leading Organisations</a></div>
										
									</div>
								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="far fa-compass" style="background-color: #FACB3D; color:white;border-radius: 50px"></i></div>
										<div class="name"><a href="lifeskills.php" style="color: #222;font-size: 15px">Life Skills</a></div>
										
									</div>
								</div>







<div style="min-height: 2rem"></div>
							</div>


						
						</div>

							<!-- About Image -->
						<div class="card-image Mobile col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="background-image: url(images/bg1.jpg);">



							
							
						  	  <div class="" style="color: #9e9e9e;font-size: 20px; text-align: left;"><span style="color: #  !important">Upcoming</span> Public Training</div>

						  	  <br>
						<?php

                                      $sql = "SELECT * FROM ngomaSeminars ORDER BY seminarDate ASC limit 3";
                                      $result = mysqli_query($con, $sql);
                                      $queryResult = mysqli_num_rows($result);

                                        while ($row = mysqli_fetch_array($result)){
                                            ?>
						
						      <div class="card1">
						        <div class="image">
						        	<a href="events.php">
						          <img class="d-block " src="images/events/<?php echo $row['seminarPhoto'];?>" alt="">
						          </a>
						        </div>
						   
						          <div class="card-block">
						            <!--           <h4 class="card-title">Small card</h4> -->
						            	<a href="events.php"><p class="name" style="color: #fff; font-weight: 500"><?php echo $row['seminarName']?>
						         </p></a>
						         <p>
						         	<span style="font-size: 12px"><?php echo date('d-M-Y',strtotime($row['seminarDate']));?><span style="float: right;">$ <?php echo $row['seminarPrice']?></span></span>
						         	<br>
						         	<span><?php echo $row['seminarCountry']?></span>
						         </p>
						          </div>						 
						      </div>
						      	<?php }?>

						      		<br>
						      	   <div style="position: relative;z-index: 100 !important" >
										
									<a href="events.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 200;font-size: 12px;"><span></i>More Public Training</span></a>&nbsp;&nbsp;


									<a href="in-house.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 200;font-size: 12px;"><span></i>Inhouse </span></a>&nbsp;&nbsp;

									<a href="podcast.php" style="padding: .5rem 1rem; background-color: #56b345;color: #fff;border-radius: 50px;font-weight: 200;font-size: 12px;"><span></i>Podcasts </span></a>&nbsp;&nbsp;
										
										
									</div>

	
													
													</div>
					
					</div>
				</div>
			</div>
			<!--======================Home end=====================-->
			<!--======================Home end=====================-->			




<div class="card-inner" id="about">
	<div class="row card-container">

		<!--Card Wrap-->
		<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-7" >

			<!-- About Image -->
	<div class="card-image card-image1 col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/bg1.jpg); background-size: cover;  overflow-y: scroll;">
				
				<p class="mobile4">We maintain a pool of highly qualified facilitators, coaches, and keynotes speakers who are all business people with executive-level backgrounds working for international corporations. Grounded in ongoing research and 15 years of experience developing successful business leaders, our work address the three aspects of leadership: Leading Youself; Leading People; Leading Organisations. </p>

					<div class="row">

								<div class="row"  style="margin-top:60px;">
								</div>


								<div class="col col-m-12 col-t-12 col-d-6 col-d-lg-4">
									<div class="box-item card-box ">
										<div class="image">
											<a href="#popup-leadSelf" class="has-popup-media">
												
												<span class="info">
												<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc" >
											<a href="#popup-leadSelf"  class=" has-popup-media link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"> <i class="far fa-compass" style="background-color: red; color:white; height: 20%;"></i><br><span style="font-size: 12px; color: #fff; text-align: left;" class="ml">Leading Yourself</span></a>
										</div>
									</div>
								</div>

								<div class="col col-m-12 col-t-12 col-d-6 col-d-lg-4">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-leadOthers" class="has-popup-media">
												
												<span class="info">
												<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-leadOthers" class=" has-popup-media link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"> <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;"></i><br><span style="font-size: 12px; color: #fff; text-align: left;" class="ml">Leading People</span></a>
										</div>
									</div>
								</div>


								<div class="col col-m-12 col-t-12 col-d-7 col-d-lg-4 card3" id="card3" style="">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-leadBusiness" class="has-popup-media">
											
												<span class="info">
												<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-leadBusiness" class="has-popup-media link" style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;"><i class="far fa-compass" style="background-color: #4caf50; color:white;"></i>
												<span style="font-size: 12px; color: #fff;  text-align: left !important;   white-space: nowrap; margin-left: -2rem">Leading Organisations</span></a>
										</div>
									</div>
								</div>


							</div>
			</div>
						

			<!--Inner Top-->
	<div class="content inner-top" style="margin-top: 0 !important; padding-top: 10px !important;">
				<div class="row">
					<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="">

									<div style="margin-top: 1rem; margin-bottom: 2rem">
								

								<a href="events.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; padding: 8px 8px; border-radius: 5px;">Public Training</a>

								<a href="in-house.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342;padding: 8px 8px; border-radius: 5px;">In-House Training</a>	
								
								<a href="podcast.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; padding: 8px 8px; border-radius: 5px;">Podcasts</a>
							</div>

				<div class="title-bg mobile1" style="margin-top: 9rem;margin-bottom: 3rem; font-size: 6rem; text-align: center">About Us</div>
							<div class="text aboutText" style="margin-top: 150px;">
								<p style="font-weight: 200; text-align: justify; font-size: 16px;">
									We are an international training company specialising in business leadership development. Over the past 15 years, we have delivered in 45 countries around the world hundreds of open and in-house training seminars as well as keynote speeches on various topics relating to business leadership. We have also provided hundreds of executive coaching to professional men and women, from top executives, to middle managers, to personal assistants, to entrepreneurs.					
								</p>

							</div>
							
									<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="">
										<div class="aboutButtons" style="text-align:left;">
											
									<a class="btn2" href="about/?ngoma=a" style="background-color: #318342; margin-left: 12rem; font-size: 13px !important;"><span><i></i>Advisory Board</span></a>
											
									<a class="btn2" href="about/?ngoma=c" style="background-color: #318342; margin-left: 3rem; font-size: 13px !important;"><span><i style="font-weight: 200"></i>CSR Activities</span></a>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
				</div>
			</div>
			
			<!-- 
				Card - Offerings
			-->

<div class="card-inner" id="contact">

<div class="row card-container">
					
					<!--
						Card Wrap
					-->
<div class="card-wrap col col-m-12 col-t-12 col-d-6 col-d-lg-6" data-simplebar>
						
						<!-- Map -->
						<div class="card-image col col-m-12 col-t-12 col-d-6 col-d-lg-6">
							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.74085184428!2d28.01027026556386!3d-26.04203393351032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957406164e538b%3A0x9b524dcefc1a963a!2sEpsom+Downs%2C+Sandton%2C+2152!5e0!3m2!1sen!2sza!4v1563277312586!5m2!1sen!2sza" width="940" height="970" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
							
					
						<div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1">Contact Us</div>
								</div>
							</div>
						</div>

				
						<div class="content contacts-info" style="margin-top: 30px">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title" style="font-weight: 300"><span>Get</span> in Touch</div>

								</div>
							</div>

							<!-- contacts items -->
							<div class="row contacts-items">

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="fas fa-map-marker-alt"></i></div>
										<div class="name">Address</div>
										<p>
											8 Meadowbrook Lane, Epsom Downs, <br> Sandton, 2196 Johannesburg
										</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="fas fa-at"></i></div>
										<div class="name">Email</div>
										<p style="font-size: 12px">
											<a href="mailto:info@ngomacommunications.com">Send email</a>
										</p>
									</div>
								</div>
								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="fas fa-phone-alt"></i></div>
										<div class="name">Phone</div>
										<p><a href="tel:+27110836004">
											+27 11 083 6004</a>
										</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="far fa-clock"></i></div>
										<div class="name">Working hours</div>
										<p>
											08:00am-05:00pm (Mon-Fri)
										</p>
									</div>
								</div>

							</div>
</div>

						<!--
							Contacts Form
						-->
						<div class="content contacts-form">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title" style="font-weight: 300"><span>Contact</span> Form</div>

								</div>
							</div>
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- form -->
									<div class="contact_form card-box">
										<form  method="post" action="javascript:void(0)" id="contactForm">
											<div class="row">
												<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
													<div class="group-val">
														<input type="text" name="name" placeholder="Full Name" />
													</div>
												</div>
												<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
													<div class="group-val">
														<input type="text" name="email" placeholder="Email Address" />
														<input type="Hidden" name="action" value="message" />
													</div>
												</div>
												<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
													<div class="group-val">
														<textarea name="message" placeholder="Your Message"></textarea>
													</div>
												</div>
											</div>
											<div class="align-center">
												<input type='submit' class="button text" style="cursor: pointer;" value="Send Message">
												
												
											</div>
										</form>
										<div class="alert-success">
											<p style="text-align: center;" class="confirmationBox"></p>
										</div>
									</div>

								</div>
							</div>
						</div>

</div>
					
</div>
</div>



<div class="card-inner" id="sessions">
				<div class="row card-container">
						
					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Offering Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/profile2.jpg);">
							<p class="mobile2" style="margin-top: 50%; background: rgb(0,0,0,0.6); color: #fff; padding: 2%; font-weight: 200; text-align: justify;">In addition to our open seminars organised in different cities around the world, we deliver our three offerings (Leading yourself, Leading people and Leading Organisations) through private sessions in the form of tailored in-house seminars, on and off-site executive coaching as well as keynote speaking.</p>
						</div>

						<!--
							Inner Top
						-->
						<div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
							<div class="row">
								<div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1" style="font-size: 70px">Private Sessions</div>
								</div>
							</div>
						</div>

						<!--
							Offerings
						-->
						<div class="content resume" style="margin-top: 60px">
							<div class="row">
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="box-item card-box">
										<div class="image">
											<a href="pages-inhouse.php">
												<img src="images/in-house.jpg" style="height: 350px; margin-top:5%; width: 300px; object-fit:cover; border-bottom-left-radius: 15px; border-bottom-right-radius: 15"/>
												<span class="info">
													</span>
											</a>
										</div>
										<div class="desc">
											<a href="pages-inhouse.php" class="link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"> In-House Seminars</a>
										</div>
									</div>
								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="box-item card-box">
										<div class="image">
											<a href="pages-keynote.php">
												<img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" style="height: 350px; margin-top:5%; width: 300px; object-fit:cover; border-bottom-left-radius: 15px; border-bottom-right-radius: 15"/>
												<span class="info">
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="pages-keynote.php" class="link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"> Keynote Speaking</a>
										</div>
									</div>
								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 card3" id="card4">
									<div class="box-item card-box">
										<div class="image">
											<a href="pages-executive.php">
												<img src="images/profile4.jpg" style="height: 350px; margin-top:5%; width: 300px; object-fit:cover; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px"/>
												<span class="info">
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="pages-executive.php" class="link" style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;"> Executive Coaching</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					
				</div>
</div>
			

			
	
		
<div class="card-inner" id="events">

			<div class="row card-container">
						
					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Offering Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/sideOfferings.jpg);">
							<p class="mobile2" style="margin-top: 1%; background: rgb(0,0,0,0.6); color: #fff; padding: 2%; font-size:18px !important; font-weight: 200; text-align: justify;"> Set a course for growth. Get new leadership strategies to bring out the best in you—and your team. Ngoma Communications’ leadership seminars provide numerous avenues for enhancing the qualities of good leadership.<br>

							All our Programmes are practical and pragmatic. They focus on real business issues and challenges. It is not just about the theory; you will actually practice, practice and practice. What you learn today, you can apply tomorrow, when you are back at work.<br>

							Programmes are facilitated by Senior Associates with at least 15+ years hands-on senior management and international experience. So they understand your issues, your challenges and your needs.<br>

							We update our key programmes on a regular basis to make sure you have the best learning experience.</p>


						</div>


						<!--
							Inner Top
						-->
						<div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
							<div class="row">
								<div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1" style="font-size: 70px">Offerings</div>
								</div>
							</div>
						</div>

						<!--
							Offerings
						-->
						
						<div class="content resume" style="margin-top: 60px">
							<div class="row">
								
							<div class="row" align="center" style="margin-top:50px;" style="text-align: left;">
									<P style="padding: 10PX;">
										Should you be interested in our open seminars , please click the button below to view our upcoming  open seminars in your city.<br>
										 <a href="events.php" class="btn2"> Public Training</a><br> 
									</P>
									<P style="padding: 10PX;">
										 Should you be interested to have an in-house training seminar for your organisation,  please click the button below to go to the In-house Seminar page.
										 <br><a href="pages-inhouse.php" class="btn2">In-house Training</a><br>
									</P>
								</div>
						</div>

						<div class="content" style="margin-top: 60px">

<div id="popup-leadSelf" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="desc">
			<div class="post-box">
			<h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%; ">Leading Yourself</h1>
				<div class="blog-content" style="margin-top: 2%">
					<p style="font-size: 14px; text-align: justify; font-weight: 300">
				To be a great leader, manager, supervisor, assistant, or support staff, you need to understanding, motivate, organise and empower yourself.
				<br><br>
				You also need to ensure you have the right skills for your position and responsibilities. Do you know how to work with your colleagues and peers? What is your preferred communication style? How do you communicate in the best way with senior management? What is the best way to negotiate a win-win deal? Do you have the right influence skills for your role?  How do you persuade your colleagues to focus on common goals? How can you be the best in your job? How can find fulfillment at work and progress in your career?
				<bR><br>
				Sessions in this category will help you to improve self-awareness, personal strengths, self-management, expertise in communication, negotiation, influencing, selling your ideas, persuading others, negotiating and resolving conflicts as well
				<br><br>
				Each of these skills helps you to perform at your best in your organisation or business.

				<br><br>
				When browsing our open seminars in your country, look out for this <i class="far fa-compass" style="background-color: red; color:white;"></i> icon,  for Leading Yourself Training Seminars.
				</p>
					<div class="flex" style="font-size: 12px; margin-top: 2rem;">
						<a href="events.php" class="btn2" style="background-color: #318342; font-size: 12px;">Public Training</a>
						<a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House Training</a>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>	
<div id="popup-leadOthers" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="desc">
			<div class="post-box">
			<h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%; ">Leading People</h1>
				<div class="blog-content" style="margin-top: 2%">
					<p style="font-size: 14px; text-align: justify; font-weight: 300">
				To be a great leader, manager or supervisor, you need to have the right skills to lead others.
				<br><br>
				This means having the knowledge, skills, competence and understanding of how to engage, motivate and manage people. It also means understanding and how you can be a great leader. You need to also be able to formulate a vision, set a strategy and motivate people towards common business and organisational goals. What is your preferred leadership style? What are the best practices in Leadership today? Is coaching an important part of my role? Should I mentor my team? Do you need to change your leadership style? How can you motivate your teams?
				<br><br>
				Seminars in this category will help you to improve knowledge and skills to engage people to work towards common business and organiational goals, understanding how to formulate a vision, set a strategy and communicate it.
				<br><br>
				Each of these skills helps you to perform as a leader, manager or supervisor of people in your organisation.
				<br><br>
				When browsing our open seminars in your country, look out for this <i class="far fa-compass" style="background-color: blue; color:white;"></i> icon for Leading People Training Seminars.
				<br><br>
				
				</p>
					<div class="flex" style="font-size: 12px;">
						<a href="events.php" class="btn2" style="background-color: #318342;  font-size: 12px;">Public Training</a>
						<a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House Training</a>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>	
<div id="popup-leadBusiness" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="desc">
			<div class="post-box">
			<h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Leading Organisations</h1>
				<div class="blog-content" style="margin-top: 2%">
					<p style="font-size: 14px; text-align: justify; font-weight: 300">
				Do you have the right acumen to contribute or lead your business to success?
				<br><br>

				Training seminars in this category will help you to implement a compelling vision, to empower and release human and organisational potential, to shape organisational culture through a powerful combination of message, matched by action. 
				<br><br>

				All seminars provide each valuable insights, proven to work in a “real world” environment. 

				<br><br>
				When browsing our open seminars in your city, look out for  this <i class="far fa-compass" style="background-color: #4caf50; color:white;"></i>  icon for Leading Organisations Training.

				</p>
					<div class="flex" style="margin-top: 2rem;">
						<a href="events.php" class="btn2" style="background-color: #318342; font-size: 12px;">Public Training</a>
						<a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House Training</a>
					</div>  
				</div>
			</div>
		</div>
	</div>
</div>				
</div>




<?php require_once("back.php");?>

</div>
			
			<!-- 
				Lines Grid
			-->
<div class="lines-grid">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 10s;"></div>
						</div>
					</div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
						</div>
					</div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 0s;"></div>
						</div>
					</div>
				</div>
			</div>

	</div>
</div>

	<script src="js/scripts.min.js"></script>
	<script src="js/jquery-modal-video.min.js"></script>
	<script>
		//extract url values
		function getUrlVars(){
			    var vars = [], hash;
			    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('=');
			    for(var i = 0; i < hashes.length; i++)
			    {
			        hash = hashes[i].split('=');
			        vars.push(hash[0]);
			        vars[hash[0]] = hash[1];
			    }
			    return vars;
			}
		//put the values in varibles
	    var param = getUrlVars()[0];
	    var pageID = getUrlVars()[1];
		getPage();



		function getPage(){
			$("#"+pageID).addClass("active");
		}
		$(".btn1").modalVideo({
			youtube:{
				controls:0,
				nocookie: true
			}
		});


		$(document).on('submit', '#contactForm', function(e){
          e.preventDefault();
          $.ajax({
            type:"POST",
            url:"mailer.php",
            data:new FormData(this),
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData:false, // To send DOMDocument or non processed data file it is set to false               
            success:function(data){
            alert(data);
            }
          });
        });
	</script>
	
</body>
</html>