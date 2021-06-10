<!DOCTYPE html>
<html lang="en">

<head>	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Offering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<script src="https://kit.fontawesome.com/b8977c7e2a.js"></script>
	
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
</head>
<style>
	.btn1{
		background: #44484c;
		color: #fff;
		width: 20%;
		text-align: center;
		border-radius: 15px;
		box-shadow: 0 2px 5px -12px;
	}
	.btn1:hover {
		color: #fff;
		transform: scale(1.1);
	  	transition: all ease 500ms;
	}
	.flex{
		text-align: center;
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
	}

	.my-float{
		margin-top:22px;
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
<div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12" id="Individuals" style="display: none;">
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1">Individuals</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
		<div class="content blog" style="text-align: center; margin-top: 50px">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
									<p style="font-size: 20px; text-align: left;">
										Are you a leader in your organisation, an entrepreneur, a professional, a job seeker, a parent or spouse, etc., and you seek to progress and fulfill your purpose in what you do? We Can Help You!
									</p>
								</div>
							</div>

							<!-- items -->


	<div class="row">	<!-- workshop item -->
		<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-PULL">
												<img src="images/topull.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Individual,WoW" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>	

									</div>
			</div>								

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-VIP">
												<img src="images/tovip.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Individual,VIP" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>	
									</div>
				</div>

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a href="executive.php">
												<img src="images/toec.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc" style="background: #474749">
											<a href="executive.php"  class="name book-button" style="font-weight: 200">Explore</a>
										</div>
									</div>
				</div>
				

	</div>							

		
			</div> 

</div>



<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->



<div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12" id="Groups" style="display: none;">
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1">Groups</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
		<div class="content blog" style="text-align: center; margin-top: 50px">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
									<p style="font-size: 20px; text-align: left;">
										Are you a startup organisation, a business or social network group and you wish to give an opportunity to your members to progress and grow? We Can Help You!
									</p>
								</div>
							</div>

							<!-- items -->


	<div class="row">	<!-- workshop item -->
		<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-PULL">
												<img src="images/topull.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Group,WoW" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>									
										</div>
			</div>

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-VIP">
												<img src="images/tovip.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Group,VIP" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>
									</div>
				</div>

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-PURE">
												<img src="images/topure.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Group,PURE" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>
									</div>
						</div>

										<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a href="executive.php">
												<img src="images/toec.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc" style="background: #474749">
											<a href="executive.php" class="name" style="font-weight: 200">Explore</a>
										</div>

									</div>
				</div>

				</div>							


			</div> 

</div>




<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
<div class="blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12" id="Corporates" style="display: none;">
						
						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1">Corporates</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
		<div class="content blog" style="text-align: center; margin-top: 50px">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-6 col-d-lg-6">
									<p style="font-size: 20px; text-align: left;">
										Are you a for-profit or non-profit company, a government service or organization or a non-government organisation and need to establish or understand the purpose in what you do while giving an opportunity to your staff to progress and contribute to your success? We Can Help You!
									</p>
								</div>
							</div>

							<!-- items -->


	<div class="row">	<!-- workshop item -->

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-VIP">
												<img src="images/tovip.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Corporate,VIP" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>	
									</div>
				</div>

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-PURE">
												<img src="images/topure.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Corporate,PURE" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>	
									</div>
				</div>
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a class="has-popup-media" href="#popup-PULL">
												<img src="images/topull.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<form action="https://ngomacommunications.com/private-reg" method="post">
												<input type="hidden" name="offer" value="Corporate,WoW" />
												<div class="desc" style="background: #474749">
												<input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="Book">
												</div>		
										</form>									
										</div>
			</div>

								<!-- workshop item -->
				<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
									<div class="box-item card-box">
										<div class="image">
											<a href="executive.php">
												<img src="images/toec.png" style="width: 80%; padding: 20px" />
												<span class="info">
													<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc" style="background: #474749">
											<a href="executive.php" class="name" style="font-weight: 200">Explore</a>
										</div>
									</div>
				</div>

				</div>								


			</div> 

</div>

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>- -->
<div id="popup-PURE" class="popup-box mfp-fade mfp-hide">
				<div class="content">
					<div class="desc">
						<div class="post-box">
								<h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Purpose Run Enterprise</h1>
								<div class="blog-content" style="margin-top: 2%">
								<p style="font-size: 120%; text-align: justify; font-weight: 300">
								The only way to create customers' loyalty to your brand is through the purpose of your business.<br>
							    Today, it is only by activating purpose in your business that a big difference for company performance and profits can be achieved.
							We help business leaders to run their businesses with purpose. ";
							    This is because the purpose of a business is the difference it intends to make in its customers’ lives and in the world through its services or products. Money and profit are only results.
							    	<br><br>

							  In our our interactions with business leaders and through the work we do for our corporate clients, we have established that business leaders who do not run their companies with a purpose are viewed as opportunistic by customers and  uninspirational by employees.  As a result, this makes them avoid taking risks that can lead to innovation.
							  		<br><br>
							Hence, with PuRE, we offer to business leaders–corporate executives and entrepreneurs–workshops and coaching programs that are specifically intended to help them embed and activate purpose in the businesses they run. 
									<br><br>
							For you not to be the cause of failure for your business, please attend one of our PuRE workshops or contact us to arrange a coaching session.
								</p>
								<!-- <div class="flex">
									<button class="btn1">Book</button>
								</div> -->
						</div>
				</div>
			</div>

<div id="popup-PULL" class="popup-box mfp-fade mfp-hide">
				<div class="content">
					<div class="desc">
						<div class="post-box">
								<h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">WoW (Why of Work)</h1>
								<div class="blog-content" style="margin-top: 2%">
								<p style="font-size: 120%; text-align: justify; font-weight: 300">
								Why do some people thrive in their jobs? While others become disillusioned. Why is it that some people can be extraordinarily well-paid and work in pampered settings but still feel empty? While others can work in the sewers of cities and feel fulfilled. The answer is that people who find fulfillment in their jobs, have found a way to feel like they’re working for a cause.  They have a purpose in what they do. 
								  <br><br>
								    Purpose—the sense that what we do has meaningful effects to others or to the world—is a fundamental human need. However, despite this seemingly simple definition, the search for the real or practical meaning of purpose has puzzled people for thousands of years.  This is because we typically begin at the wrong starting point—ourselves. We ask self-centered questions like “What do I want to be?” What are my goals or vision?  Contrary to what many popular books, workshops and seminars tell you, you won’t discover your purpose by focusing on yourself. You’ve probably tried that already and the result is less than reassuring.
								    <br><br>
							 Purpose is not magic — it’s something we must consciously pursue and create. With the right approach, almost any job can be meaningful.
								    <br><br>
								WoW is for individuals who are eager to find fulfillment in their jobs and careers.   It guides participants through a structured presentation that helps them to activate purpose in what they do or pursue professionally. </p>

								<!-- <div class="flex">
									<button class="btn1">Book</button>
								</div>
							 -->
						</div>
				</div>
</div>
<div id="popup-VIP" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="desc">
			<div class="post-box">
			<h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Vision Inspired Progress</h1>
				<div class="blog-content" style="margin-top: 2%">
					<p style="font-size: 120%; text-align: justify; font-weight: 300">
												  
				 	With a vision in mind, you are more likely to succeed far beyond what you could otherwise achieve.
				    A vision inspires action.  It creates the energy and will to make the change you want to happen.
					We don’t only help you create or clarify the vision for your life, we also show you what steps to take in order to realise it.
					<br><br>
				  Creating a vision for your life might seem like a frivolous, fantastical waste of time, but it’s not.  It is actually one of the most effective techniques for achieving the life of your dreams and achieving your goals.  With a vision in mind, you are more likely to succeed far beyond what you could otherwise achieve.  The harsh reality is that if you don’t have or don’t develop a vision for your life, you will allow other people, circumstances, the pasts, or your own emotions to determine the course of your life.
				    
				    The VIP workshop will guide you to craft your life vision and to establish the actions and the right choices that will propel you toward your personal and/or professional dreams.  This workshop is about taking some time & space for yourself to get crystal clear on what you want to achieve in life.  It is an opportunity to let go of what is in the way and a time to connect instead with your dreams while establishing a vision that fits your purpose.
				    <br><br>
				Many VIP participants have gone to become successful entrepreneurs, while others have gotten married, improved their relationships, run marathons written books, and more. Whatever your personal and business goals may be, VIP can set you on the path to achieving your dreams and goals.
				</p>
				<!-- <div class="flex">
					<a href=""> <button class="btn1">Book</button>
				</div> -->
			</div>
		</div>
	</div>
</div>
</div>
	
</div>
			</div>
			<!- Lines Grid -->
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

	<p>
		<a href="javascript:history.go(-1)" class="float">
			<i class="fa fa-reply my-float"></i>
		</a>
	</p>


	<script src="js/scripts.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
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
	    var value = getUrlVars()[0];
	    var category = getUrlVars()[1];

	    $(document).ready(function(){

	    	$('#'+category).show();

	    });
	</script>

</body>

</html>