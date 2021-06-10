

<!DOCTYPE html>
<html lang="en">

<head>
	
	<?php include "favicon.php";?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>CSR Events</title>
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
									<div class="title-bg">CSR Events</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
						<div class="content blog">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title 
									<div class="title" style="font-weight: 300; padding-top: 5% !important"><span>Upcoming</span> Workshops</div>-->

								</div>
							</div>

							<!-- items -->
							<div class="row" id="display">
								<?php 
									include "connectDB.php";
									$today = date("d, m, Y");

									if(isset($_POST['submitCSR'])){
										if($_POST['mission'] == "outdated"){
											$sql = "SELECT * FROM csrEvents
											WHERE csrTimeline < '1'
											ORDER BY csrID DESC";

										}elseif($_POST['mission'] == "upcoming"){
											$sql = "SELECT * FROM csrEvents
											WHERE csrTimeline > '0'
											ORDER BY csrID DESC";
										}

									
									
										
						            $result = mysqli_query($con, $sql);
						            $queryResult = mysqli_num_rows($result);  
						            if($queryResult > 0 ){
						            while ($row = mysqli_fetch_array($result)){
						            		
										  	$csrID = $row['csrID'];
										    $csrTitle = $row['csrTitle'];
										    $image =$row['csrImg'];
										    $csrOverview = $row['csrOverview'];
										    $csrDate = $row['csrDate'];
										    $edates = date_create($row['csrDate']);
										    $edate = date_format($edates,"D jS M, Y");
										    $d = date_format($edates,"j");
										    $dd = date_format($edates,"m Y");
										    $Venue   = $row['csrPlace'];
										    $Audience = $row['csrTargetAud'];
										    $Facilitator = $row['Facilitator'];
										    $Offering = $row['csrOffering'];
										    	?>
								<!-- workshop item -->
								<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
									<div class="box-item card-box">
										<div class="image">
											<a href="javascript:void(0)">
												<img src="images/<?php echo $image;?>" alt="" style="height:300px; object-fit:cover;"/>
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong><?php echo $d;?></strong><?php echo $dd;?></span>
											</a>
										</div>
										<div class="desc">
											
								                <table style="padding: 0px;margin: 0px !important">
								                	<h6><?php echo $csrTitle;?></h6>
								           			<tr>
								                		<td>Offering:</td>
								                		<td class="g"><?php echo $Offering;?></td>
								                	</tr>
								                	<tr>
								                		<td>Venue:</td>
								                		<td class="g"><?php echo $Venue;?></td>
								                	</tr>
								                	<tr>
								                		<td>Facilitator:</td>
								                		<td class="g"><?php echo $Facilitator;?></td>
								                	</tr>
								                	
								                	
								                </table>
								                <style type="text/css">
								                	tr td{
								                		border-bottom: .001px ridge #181716;
								                		border-bottom-color: #181710
								                		margin: 0px;
								                		padding: 5px;
								                	}
								                	td.g{
								                		text-align: right;
								                	}
								                	td.c{
								                		text-align: left;
								                	}
								                </style>
										            <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; margin-top: 10% !important" ><a class="popModal" id="<?php echo $csrID;?>" href="javascript:void(0)">View Event Details</a></p>					
										</div>
									</div>
								</div>
							<?php }}
							else{
								echo " <h6 style='text-align:center;'>Content being updated, Please come again soon. </h6>";
							}
						}
					
							?>









							</div>

							<div class="pager">
								<input type="hidden" id="next_content" value="2" />
								<a href="#" class="button">
									<!-- <span class="text" id="loadMore">Load More</span> -->
									<span class="icon"></span>
								</a>
							</div>

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


		<!--Popup modal-->
		<div class="overlay" id="popup1" >
			<div class="popup popBlock">
				
		</div>

	</div>
	<?php require_once('back.php');?>
	<script src="js/scripts.min.js"></script>
	<script
	src="https://code.jquery.com/jquery-2.2.4.js"
	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
	<script>
	$(document).ready(function(){
		$(document).on('click', '.popModal', function(){
			var contentId = $(this).attr("id");
			var action = 'PopulateCSR';
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
	});

	</script>
</body>


</html>