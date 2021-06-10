
<?php
include "connectDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Programmes | ngomacommunications.com</title>
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
	<?php include "favicon.php";?>
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
									<div class="title-bg">Seminar Shelf</div>
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
										<div class="row" align="center">
											<div class="col col-m-12 col-t-12 col-d-7 col-d-lg-7"  style="margin-top:30px;">
											<p style="text-align: center; font-size: 20px;">
												Our "Seminar Shelf" contains basic information on seminars we draw from for the delivery of our open seminars and that organisations can select from for  off-the-shelf in-house seminars.
											</p>
											</div>
										</div>
										<div class="row">

											<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
												<div class="group-val">
													<select id="" class="filter" style="width:50%; margin-top:30px; margin-left: 24%;margin-right: 24%; height:50px !important; background-color: #383a3d; color:white; border: none; padding: 10px;" class="btn btn-info">
														<option value="">-- filter by seminar type --</option>
														<option value="LS">Leading Youserlf</option>
														<option value="LO">Leading People</option>
														<option value="LB">Leading Organisations </option>
													</select>
													<br><br>
													<p style="text-align: center;">
														<i class="far fa-compass" style="background-color: red; color:white;"></i> Leading Yourself  
														<i class="far fa-compass" style="background-color: blue; color:white;"></i> Leading People 
														<i class="far fa-compass" style="background-color: #4caf50; color:white;"></i> Leading Organisation
													</p>


												</div>
											</div>
										</div>
									</form>
									
								</div>
							</div>

							<!-- items -->
							<div class="row filtered" id="display">
																<!-- workshop item -->
								
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


		<!--Popup modal-->
		<div class="overlay" id="popup1" >
			<div class="popup popBlock">
				<!--Pop up --> 
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
		$(document).on('click', '.popModal', function(){
			var contentId = $(this).attr("id");
			var action = 'populateProgrammes';
			$.ajax({
              url:'PopulateModal.php',
              method:"POST",
              data:{action:action, contentId:contentId},
              success:function(data){
              	$(".overlay").fadeIn(500);
                $('.popBlock').html(data);
              }
             }) 
		});

		$(document).on('click', '.close', function(){
			$(".overlay").fadeOut(500);
		});

		$(document).on('change', '.filter', function(){
			if($(this).val() !=''){
				var mission = $(this).val();
				var action = "fetchFilteredProgrammes";
				$.ajax({
	              url:'filtered.php',
	              method:"POST",
	              data:{action:action, mission:mission},
	              success:function(data){
	              	$(".filtered").html(data);
	              }
	             })

			}else{

				alert("Please select a valid offering");
			}
			
		});
			getEvents();
			function getEvents(){
				var action = "fetchProgrammes";
					$.ajax({
		              url:'filtered.php',
		              method:"POST",
		              data:{action:action},
		              success:function(data){
		              	$(".filtered").html(data);
		              }
		             });
			}
		});

	</script>
</body>


</html>

