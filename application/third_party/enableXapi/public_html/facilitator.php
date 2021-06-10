<?php
include "connectDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
<?php include "favicon.php";?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Facilitator | Ngoma Communications</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="images/logo.png">
	<style>
		.btn{
			padding: 10px;
			background-color:#808080 ;
			border-radius:4px ;
		}

	</style>
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
			<?php
				include 'nav.php';
			?>

			<!-- Started socials -->
			<!-- <div class="social">
				<a href=""><span class="icon la la-user"></span></a>
				<a target="_blank" href=""><span class="icon la la-facebook"></span></a>
				<a target="_blank" href=""><span class="icon la la-skype"></span></a>
				<a target="_blank" href=""><span class="icon la la-instagram"></span></a>
				<a target="_blank" href=""><span class="icon la la-whatsapp"></span></a>
			</div> -->

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
					<div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-9 col-d-lg-9">
									<div class="mobile4">About</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
						<div class="content blog" style="margin-top: 30px">
							
							<!-- items -->
							<div class="row">

								<!-- Facilitator Image -->

								<?php
								$facilitator = $_POST['facilitator'];
								$profile_img = "";
								$sql = "SELECT * FROM ngomaFacilitators WHERE facilitatorID ='".$facilitator."' ";
					            $result = mysqli_query($con, $sql);
					            $queryResult = mysqli_num_rows($result);  
					            if($queryResult > 0 ){
					            while ($row = mysqli_fetch_array($result)){
					            	$facilitator = $row['facilitatorName'];
					            	 $bio = $row['facilitatorDescription'];
					            	  $Offerings = $row['facilitatorOfferings'];
					            	 $ks_image = $row['facilitatorImg'];
					            	 if ($ks_image != "") {
					            	 	$profileImg ='<img style="max-height: 500px; width:auto;"  src="images/profiles/'.$ks_image.'"/>';
					            	 }else{
					            	 	$profileImg = '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"/>';
					            	 }
					            ?>


					            
							<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
									<div class="box-item card-box">
										<div class="image" >
											<a href="javascript:void(0)">
												<?php echo $profileImg; ?>
											</a>
										</div>
										<div class="desc">
											<p style="font-size: 20px"><?php echo $facilitator ; ?></p>	

											<p class="name" style="font-size: 15px; font-weight: 100"><?php echo nl2br($Offerings); ?></a>
					                        
										</form>	
										</div>

									</div>
								</div>
								<!-- Facilitator Image End-->

								<!-- Facilitator Descricption -->
								<div class="col col-m-12 col-t-12 col-d-8 col-d-lg-8">
									<div class="box-item card-box" style="text-align: left; padding: 3%">
										<div class="desc">
											<a class="name" style="font-size: 20px; font-weight: 200"><?php echo nl2br($bio); ?></a><br>
										</div>
										
										
									</div>
								</div>
								<!-- Facilitator Descricption End-->
							
							<?php
							//php cllosing tags and all that 
					            }
					        }else{
					        	echo "hello world";
					        }
					         ?>
					        
							</div>
								
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
	</div>
	<?php require_once('back.php');?>
	
	<script src="js/scripts.min.js"></script>
	
</body>

<!-- Mirrored from beshley.com/patrick/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2019 18:57:50 GMT -->
</html>