<!DOCTYPE html>
<html lang="en">

<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Inhouse Training</title>
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
	<?php include "favicon.php";?>
	
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
			<?php
			include 'nav.php';
			?>
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
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div style="margin-top: -3rem;">
								

								<a href="events.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; padding: 8px 8px; border-radius: 5px;">Public Training</a>	
								<a href="podcast.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; margin-left: 10rem; padding: 8px 8px; border-radius: 5px;">Podcasts</a>	
								<!--a href="pages-keynote.php" class="btn2" style="height: 30%; font-size: 12px; background-color: #318342; margin-left: 10rem; padding: 8px 8px; border-radius: 5px;">Keynote Speaking</a-->	

							</div>
									<div class="title-bg" style="margin-top: 5rem; font-size: 6rem;">In-House Training</div><br><br>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
						<div class="content blog" style="margin-top: 65px">
							
							<!-- items -->
							<div class="row">

								<!-- workshop item -->
								<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="margin-top: 1rem !important;">
									<div class="box-item card-box">
										<div class="image">
											<a href="workshops/adhoc_/index.php">
												<img src="images/offtheshelf.jpg"/>
												<span class="info">
													<span class="icon la la-check-circle-o"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<form action="inquire.php" method="post">
												<input type="hidden" name="offer" value="Keynote Speaking" />
												<input type="hidden" name="programme" value="KS" />
												<input type="hidden" name="concat" value="2" />
												<div class="desc" style="background: #318342;">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Send an Enquiry">
												</div>		
											</form>
										</div>

									</div>
								</div>

								<!-- workshop item -->
								<div class="col col-m-12 col-t-12 col-d-8 col-d-lg-8"style="margin-top: 4rem !important;">
									<div class="box-item card-box" style="text-align: left; padding: 5px">
										<div class="desc">
											<a class="name" style="font-size: 16px; font-weight: 200">Choosing an effective in-house training seminar for your managers and employees can be difficult, with plenty of questions to consider. What should the content include? Which topics need to be covered?</a>
										</div>
										<div class="desc">
											<a class="name" style="font-size: 16px; font-weight: 200">Our success in delivering in-House training seminars is attributed to our ability to work closely with organisations. We excel in understanding your goals and specific requirement then we plan and deliver customised or off-the-shelf training seminar that meets your organisation's objectives.</a>
										</div>
										
										
									</div>


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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <style type="text/css">
  	@import url(https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500);




.container {
  bottom: 0;
  position: fixed;
  margin: 1em;
  right: 0px;
}

  </style>
	<footer>

      <a href="javascript:history.go(-1)" class="float">
          <i class="fa fa-reply my-float"></i>
      </a>
  <style type="text/css">
            
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
}

.my-float{
    margin-top:22px;
    color: white;
}
@media (max-width:560px)
{
  .float{
    width:40px;
    height:40px;
    bottom:10px;
    right:40px; 
    border-radius:50px;
    background: rgb(0,0,0,0.6);
    }
    .my-float{
    margin-top:11px;
    color: white;
  }
}
        </style>
  
     </footer>  
	
	<script src="js/scripts.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
	
</body>

</html>