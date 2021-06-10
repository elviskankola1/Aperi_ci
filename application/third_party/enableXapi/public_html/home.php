<?php require_once "connectDB.php";?>
<!DOCTYPE html>
<html lang="en">


<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Patrick - vCard / Resume / CV Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="vCard & Resume Template" />
	<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="beshleyua" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<link rel="stylesheet" href="css/modal-video.min.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/b8977c7e2a.js"></script>

	<style type="text/css">
		
		::-webkit-scrollbar {
    width: 0px;  /* Remove scrollbar space */
    /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
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
	min-width: 15rem;

}
.image{
	border-top-left-radius: 20px;
border-bottom-left-radius: 20px;
}
.image img{
	min-height: 100%;
	max-height: 100%;
	max-width: 10rem;
	min-width: 10rem;
border-top-left-radius: 20px;
border-bottom-left-radius: 20px;


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


			<div class="card-inner active" id="home">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-8" data-simplebar>
						
						<!-- About Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-4" style="background-image: url(images2/profile.jpg); margin-left: -2rem">
							
						  


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
						            	<a href="events.php"><p><?php echo $row['seminarName']?>
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
						<div class="content inner-top  col-d-lg-10" style="background-image: url(https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F61526849%2F71524111461%2F1%2Foriginal.20190501-194340?w=1000&auto=compress&rect=0%2C7%2C5184%2C2592&s=cf96f2d6e270c2302c8a2b38fffd165b);background-repeat: no-repeat;">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="">

										<img src="images/ngoma.png" style="width: 10rem;">


									</div>
									<div class="text">
										<p style="font-size: 32px; line-height: 1.2;  color:white;  text-shadow: 2px 2px 4px #000000; text-align: center; font-weight:200;">
											We help organisations and individuals<br> to reach a higher level of excellence.
										</p>
									</div>

									<br><br>
									
					<div style="background-color: rgba(0,0,0,.5);padding: 1rem; padding-bottom: .5rem" ><p style="font-size: 15px; color: #fff;font-weight: 200" >We maintain a pool of highly qualified facilitators, coaches, and keynotes speakers who are all business people with executive-level backgrounds working for international corporations. Grounded in ongoing research and 15 years of experience developing successful business leaders, our work address the three aspects of leadership: Leading Youself; Leading People; Leading Organisations. </p></div>
								</div>

									<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-4">
									<div class="service-item card-box">
										<div class="icon"> <i class="far fa-compass" style="background-color: red; color:white; height: 20%;border-radius: 50px"></i></div>


										<!-- <a href="leading.php"  style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"><br><span style="font-size: 12px; color: #fff;">Leading Yourself</span></a> -->
										<div class="name">Leading Yourself</div>
										
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-4">
									<div class="service-item card-box">
										<div class="icon"> <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;border-radius: 50px"></i></div>
										<div class="name">Leading People</div>
										
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-4">
									<div class="service-item card-box">
										<div class="icon"><i class="far fa-compass" style="background-color: #4caf50; color:white;border-radius: 50px"></i></div>
										<div class="name">Leading Organisations</div>
										
									</div>
								</div>

							</div>


						
						</div>

						<!--
							Services
						-->
					
					</div>
				</div>
			</div>
					
			
			<!-- 
				Card - Resume
			-->
			

<div class="card-inner" id="about">
	<div class="row card-container">

		<!--Card Wrap-->
		<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-7" data-simplebar>

			<!-- About Image -->
	<div class="card-image card-image1 col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/bg1.jpg); background-size: cover;">
				
				<p class="mobile4">We maintain a pool of highly qualified facilitators, coaches, and keynotes speakers who are all business people with executive-level backgrounds working for international corporations. Grounded in ongoing research and 15 years of experience developing successful business leaders, our work address the three aspects of leadership: Leading Youself; Leading People; Leading Organisations. </p>

					<div class="row">

								<div class="row"  style="margin-top:60px;">
								</div>			
								<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
									<div class="box-item card-box ">
										<div class="image">
											<a href="#popup-leadSelf" class="has-popup-media">
												
												<span class="info">
												<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc" >
											<a href="#popup-leadSelf"  class=" has-popup-media link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"> <i class="far fa-compass" style="background-color: red; color:white; height: 20%;"></i><br><span style="font-size: 12px; color: #fff;">Leading Yourself</span></a>
										</div>
									</div>
								</div>

								<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-leadOthers" class="has-popup-media">
												
												<span class="info">
												<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-leadOthers" class=" has-popup-media link" style="font-weight: 200; font-size:20px; text-align: center; border-bottom:none !important; cursor: pointer;"> <i class="far fa-compass" style="background-color: blue; color:white; height: 10%;"></i><br><span style="font-size: 12px; color: #fff;">Leading People</span></a>
										</div>
									</div>
								</div>


								<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4 card3" id="card3" style="">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-leadBusiness" class="has-popup-media">
											
												<span class="info">
												<span class="icon la la-long-arrow-right"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-leadBusiness" class="has-popup-media link" style="font-weight: 200; font-size:20px; text-align: left; border-bottom:none !important; cursor: pointer;"><i class="far fa-compass" style="background-color: #4caf50; color:white;"></i><br><span style="font-size: 12px; color: #fff;">Leading Organisations</span></a>
										</div>
									</div>
								</div>


							</div>
			</div>
						












			<!--Inner Top-->
	<div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important;">
				<div class="row">
					<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="">
						<div class="title-bg mobile1">About Us</div>
							<div class="text aboutText" style="margin-top: 70px;">
								<p style="font-weight: 200; text-align: justify; font-size: 16px;">
									We are an international training company specialising in business leadership development. Over the past 15 years, we have delivered in 45 countries around the world hundreds of open and in-house training seminars as well as keynote speeches on various topics relating to business leadership. We have also provided hundreds of executive coaching to professional men and women, from top executives, to middle managers, to personal assistants, to entrepreneurs.					
								</p>

							</div>
							
									<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12" style="">
										<div class="aboutButtons" style="text-align:left;">
											
									<a class="btn2" href="about/?ngoma=a" style="background-color: #318342; margin-left: 12rem; font-size: 13px !important;"><span><i></i>Advisory Board</span></a>
											
									<a class="btn2" href="about/?ngoma=c" style="background-color: #318342; margin-left: 3rem; font-size: 13px !important;"><span><i style="font-weight: 200"></i>CSR</span></a>
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
<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>
						
						<!-- Map -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6">
							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.74085184428!2d28.01027026556386!3d-26.04203393351032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957406164e538b%3A0x9b524dcefc1a963a!2sEpsom+Downs%2C+Sandton%2C+2152!5e0!3m2!1sen!2sza!4v1563277312586!5m2!1sen!2sza" width="940" height="970" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
							
						<!--
							Inner Top
						-->
						<div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg mobile1">Contact Us</div>
								</div>
							</div>
						</div>

						<!--
							Contacts Info
						-->
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
										 <a href="events.php" class="btn2"> Open Seminars</a><br> 
									</P>
									<P style="padding: 10PX;">
										 Should you be interested to have an in-house training seminar for your organisation,  please click the button below to go to the In-house Seminar page.
										 <br><a href="pages-inhouse.php" class="btn2">In-house Seminars</a><br>
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
				When browsing our open seminars in your country, look out for this <i class="far fa-compass" style="background-color: red; color:white;"></i> icon,  for Leading Yourself Seminars.
				</p>
					<div class="flex" style="font-size: 12px; margin-top: 2rem;">
						<a href="events.php" class="btn2" style="background-color: #318342; font-size: 12px;">Open & Online Seminars</a>
						<a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House Seminar Enquiry</a>
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
				When browsing our open seminars in your country, look out for this <i class="far fa-compass" style="background-color: blue; color:white;"></i> icon for Leading People Seminars.
				<br><br>
				
				</p>
					<div class="flex" style="font-size: 12px;">
						<a href="events.php" class="btn2" style="background-color: #318342;  font-size: 12px;">Open & Online Seminars</a>
						<a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House Seminar Enquiry</a>
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

				Seminars in this category will help you to implement a compelling vision, to empower and release human and organisational potential, to shape organisational culture through a powerful combination of message, matched by action. 
				<br><br>

				All seminars provide each valuable insights, proven to work in a “real world” environment. 

				<br><br>
				When browsing our open seminars in your city, look out for  this <i class="far fa-compass" style="background-color: #4caf50; color:white;"></i>  icon for Leading Organisations Seminars.

				</p>
					<div class="flex" style="margin-top: 2rem;">
						<a href="events.php" class="btn2" style="background-color: #318342; font-size: 12px;">Open & Online Seminars</a>
						<a href="inquire.php" class="btn2" style="background-color: #318342; font-size: 12px;">In-House Seminar Enquiry</a>
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
	
	<script src="js2/scripts.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
	
</body>


</html>