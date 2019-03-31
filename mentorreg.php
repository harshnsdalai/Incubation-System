<?php

include 'mentor_reg.php';


?>


<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>36 Inc</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		
	<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.html"><img src="logo.png" alt="Logo"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>

							<li class="has-dropdown">
								<a href="#">Register</a>
								<ul class="dropdown">
									<li><a href="mentorreg.php">As Mentor</a></li>
									<li><a href="startupreg.php">As Startup</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="services.html">Login</a>
								<ul class="dropdown">
									<li><a href="adminlogin.php">Admin</a></li>
									<li><a href="mentorlogin.php">Mentor</a></li>
									<li><a href="startuplogin.php">Startup</a></li>

								</ul>
							</li>


						</ul>
					</div>
				</div>

			</div>
		</nav>


		<header id="gtco-header" class="gtco-cover gtco-cover-xs gtco-inner" style="height:100px;" role="banner">
			<div>
		        <h1 class="text-center"><strong>Mentor Registration</strong></h1>
			</div>
		</header>	

		

		<div class="gtco-section">
			<div class="gtco-container">
				
				<div class="row">
					<div class=" row align-items-center">
						<form action="#" method="POST">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" required> 
							</div>
               <div class="form-group">
								<label for="name">Contact Number</label>
								<input type="text" class="form-control" id="name" name="number" required>
							</div>
              <div class="form-group">
								<label for="name">Field Specialisation</label>
								<input type="text" class="form-control" id="name" name="fsp" required>
							</div>
							<div class="form-group">
								<label for="name">Work Experience</label>
								<input type="text" class="form-control" id="name" name="work_experience" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>

							<div class="form-group">
								<label for="email">Password</label>
								<input type="password" class="form-control" id="email" name="password" required>
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Submit">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<!-- END .gtco-services -->

		
		
		

		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 gtco-cta text-center">
						
						<p><a href="#" class="btn btn-white btn-outline">Contact Us</a></p>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget gtco-footer-paragraph">
						<h3>Incubator</h3>
						<p>We provide high quality and cost effective incubation</p>
					</div>
					<div class="col-md-4 gtco-footer-link">
						<div class="row">
							<div class="col-md-6">
								<ul class="gtco-list-link">
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									
								</ul>
							</div>
							<div class="col-md-6">
								<p>
									<a href="tel://1234567890">+1 234 4565 2342</a> <br>
									<a href="#">incubation@gmail.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="" placeholder="Email">
						  </div>
						  <button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<!--<div class="col-md-6 text-left">
							<p><small>&copy;  All Rights Reserved. </small></p>
						</div> 
						 -->
					</div>
				</div>
			</div>
		</footer>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
