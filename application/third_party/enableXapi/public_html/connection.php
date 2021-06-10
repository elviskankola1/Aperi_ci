<?php 

$con = mysqli_connect("sql7.cpt2.host-h.net","ngomaxzwsm_1","ngomaxzwsm_db1");
// $con = mysqli_connect("sql7.cpt2.host-h.net","ngomaxycda_1","tuZE5naB9GCT584Q9An8","ngomaxycda_db1");
if(!$con){
  echo "System Under Maintenance. Visist again in 20 minutes ";
}

// require_once("../back.php");

function straped_ngoma(){
	?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><?php
}
function randomstring($len)
	{
		$string = "";
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		for($i=0;$i<$len;$i++)
		$string.=substr($chars,rand(0,strlen($chars)),1);
		return $string;
						}



function top_n($data){
		if($data ==="reserveIndividual"){
			?>
			<!doctype html>
				<html lang="en">
				<head>
					<?php include "favicon.php";?>
					<meta charset="utf-8" />
					<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
					<title>Reserve Worksop</title>
				<link rel="apple-touch-icon" sizes="76x76" href="https://ngomacommunications.com/wp-content/uploads/2019/04/achieve-Recovered.png" />
					<link rel="icon" type="image/png" href="https://ngomacommunications.com/wp-content/uploads/2019/04/achieve-Recovered.png" />

					<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
				    <meta name="viewport" content="width=device-width" />

					<!-- Canonical SEO -->
				    <link rel="canonical" href="https://www.creative-tim.com/product/material-bootstrap-wizard"/>



					<!-- Canonical SEO -->
				    <link rel="canonical" href="https://www.creative-tim.com/product/material-bootstrap-wizard"/>

					<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

					<!-- CSS Files -->
					<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
					<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

					<!-- CSS Just for demo purpose, don't include it in your project -->
					<link href="assets/css/demo.css" rel="stylesheet" />
					<!-- Google Tag Manager -->
					<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
					<!-- End Google Tag Manager -->
					</head>

					<body>
						<!-- Google Tag Manager (noscript) -->
					<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
					height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
					<!-- End Google Tag Manager (noscript) -->
					<div class="image-container set-full-height" style="background-image: url('https://ngomacommunications.com/wp-content/uploads/2019/04/intro.png')">
					    <!--   Creative Tim Branding   -->
					    <style type="text/css">
		.warn{
			/*border-left: 5px solid red;
			padding: 5px;
			border-top:.1px solid red;border-right: .1px solid red;border-bottom: .1px solid red; margin: .5em;*/
			border-top:0.1px solid red;
			border-right:0.1px solid red;
			border-bottom:0.1px solid red;
			border-left:0.1px solid red;
			border-radius: .1px;
			margin: 0.4em;
			/*padding: .3px;*/
		}
		.warn span{
			color: red; margin:.3em;
		}
	</style>
	               <style type="text/css">
			                            	*{font-family: 'Roboto', sans-serif;}

											@keyframes click-wave {
											  0% {
											    height: 40px;
											    width: 40px;
											    opacity: 0.35;
											    position: relative;
											  }
											  100% {
											    height: 200px;
											    width: 200px;
											    margin-left: -80px;
											    margin-top: -80px;
											    opacity: 0;
											  }
											}
											.but{
												font-size:25px !important;
												margin :1em;
											}
											.option-input {
											  -webkit-appearance: none;
											  -moz-appearance: none;
											  -ms-appearance: none;
											  -o-appearance: none;
											  appearance: none;
											  position: relative;
											  top: 13.33333px;
											  right: 0;
											  bottom: 0;
											  left: 0;
											  height: 40px;
											  width: 40px;
											  transition: all 0.15s ease-out 0s;
											  background: #cbd1d8;
											  border: none;
											  color: #fff;
											  cursor: pointer;
											  display: inline-block;
											  margin-right: 0.5rem;
											  outline: none;
											  position: relative;
											  z-index: 1000;
											}
											.option-input:hover {
											  background: #9faab7;
											}
											.option-input:checked {
											  background: #40e0d0;
											}
											.option-input:checked::before {
											  height: 40px;
											  width: 40px;
											  position: absolute;
											  content: '✔';
											  display: inline-block;
											  font-size: 26.66667px;
											  text-align: center;
											  line-height: 40px;
											}
											.option-input:checked::after {
											  -webkit-animation: click-wave 0.65s;
											  -moz-animation: click-wave 0.65s;
											  animation: click-wave 0.65s;
											  background: #40e0d0;
											  content: '';
											  display: block;
											  position: relative;
											  z-index: 100;
	}
	.option-input.radio {
	  border-radius: 50%;
	}
	.option-input.radio::after {
	  border-radius: 50%;
	}



			                            </style>
			<?php
		}elseif($data ==="reserveGroup"){

		}
	}

	function foot($data){
	if($data === "reserveIndividual"){
	?>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/getUser.js" type="text/javascript"></script>
<script type="text/javascript" src=""></script>
	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/material-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
</html>


	<?php
}else{
	
}
}
	?>
