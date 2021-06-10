<!DOCTYPE html>
<html lang="en">

<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Advisory Board | Ngoma Communications</title>
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
								include "connectDB.php";
								$advisor = $_POST['advisorID'];
								$profile_img = "";
								$sql = "SELECT * FROM ngomaAdvisors WHERE advisorID='".$advisor."' ";
					            $result = mysqli_query($con, $sql);
					            $queryResult = mysqli_num_rows($result);  
					            if($queryResult > 0 ){
					            while ($row = mysqli_fetch_array($result)){
					            	$advisor_name = $row['advisorName'];
					            	 $advisor_image = $row['advisorImg'];
					            	 
					            	 if ($advisor_image != "") {
					            	 	$advisor_image ='<img class="img-responsive" src="images/profiles/'.$row["advisorImg"].'">';
					            	 }else{
					            	 	$advisor_image = '<img class="img-responsive" src="images/avatar.png" >';
					            	 }
					            ?>


					            
							<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
									<div class="box-item card-box">
										<div class="image" >
											<a href="javascript:void(0)">
												<?php echo $advisor_image; ?>
											</a>
										</div>
										<div class="desc">
											<p style="font-size: 20px"><?php echo $advisor_name ; ?></p>		
										</form>	
										</div>

									</div>
								</div>
								<!-- Facilitator Image End-->

								<!-- Facilitator Descricption -->
								<div class="col col-m-12 col-t-12 col-d-8 col-d-lg-8">
									<div class="box-item card-box" style="text-align: left; padding: 3%">
										<div class="desc">
				<a class="name" style="font-size: 20px; font-weight: 200"><?php echo nl2br($row['advisorDescription']); ?></a><br>
											
										</div>
										
										
									</div>
								</div>
								<!-- Facilitator Descricption End-->
							
							<?php
							//php cllosing tags and all that 
					            }
					        }else{
					        	echo "not working";

					        }

					         ?>
					        }
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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
	
</body>

<!-- Mirrored from beshley.com/patrick/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2019 18:57:50 GMT -->
</html>