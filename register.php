<?php  
require 'config/db_connection.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>


<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>University Picker</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="freehtml5.co" />
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="assets/css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="assets/css/flexslider.css">

		<!-- Pricing -->
		<link rel="stylesheet" href="assets/css/pricing.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- notification -->
		
		<link rel="stylesheet" href="assets/css/sw/toastr.min.css">


		<!-- Modernizr JS -->
		<script src="assets/js/modernizr-2.6.2.min.js"></script>




	</head>
<body>

	<div class="fh5co-loader"> </div>
	
	<div id="page">
		
		<div class="fh5co-loader"> </div>

			<nav class="fh5co-nav" role="navigation">
				
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-2">
								<div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>University<span>Picker</span></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="courses.html">Universities</a></li>
									<li class="btn-cta"><a href="" id="lgin"><span>Login</span></a></li>

									
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</nav>
			<aside id="fh5co-hero">
				<div class="flexslider">
					<ul class="slides">
						<li style="background-image: url(assets/images/1.jpeg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center slider-text">
										<div class="slider-text-inner">
											<h1>The new way to look for universities</h1>
											
											<p><a class="btn btn-primary btn-lg" href="#">Start Searching Now!</a></p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li style="background-image: url(assets/images/2.jpg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center slider-text">
										<div class="slider-text-inner">
											<h1>The Great Aim of Education is not Knowledge, But Action</h1>
											
											<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Searching Now!</a></p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li style="background-image: url(assets/images/3.jpeg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center slider-text">
										<div class="slider-text-inner">
											<h1>We Help You to Learn New Things</h1>
											
											<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Searching Now!</a></p>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</aside>
			
			<div id="fh5co-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-md-push-1 ">

							<form action="register.php" method="POST">
								<div class="fh5co-contact-info">
									<h3>Log In here</h3>
									
									<div class="col-md-10">
										
										<input type="email" name="log_email" id="emaill" class="form-control" placeholder="Your email address" value="<?php
												
												if(isset($_COOKIE['email'])) {
													echo $_COOKIE['email'];
												}
												
										?>" required>
										
										<br>
									</div>
									<br>
									<br>

									<div class="col-md-10">
										<!-- <label for="password">Password</label> -->
										<input type="password" name="log_password" id="passwordl" class="form-control" placeholder="Password" required>
										<br>
										<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "<br><p style='color:red;'>Email or password was incorrect</p>"; ?>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="login_button" value="Login" class="btn btn-primary">
								</div>
							</form>
						</div>

						<div class="col-md-6 ">
							<h3>Sign Up Information</h3>
							<form action="register.php" method="POST">
								<div class="row form-group">
									<div class="col-md-6">
										<input type="text" name="reg_fname" pid="fname" class="form-control" placeholder="Your firstname" value="<?php
												if(isset($_SESSION['reg_fname'])) {
													echo $_SESSION['reg_fname'];
												}
										?>" required>
										
										<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "<br><p style='color:red;'>Your first name must be between 2 and 25 characters</p>"; ?>
									</div>
									<div class="col-md-6">
										<input type="text" name="reg_lname" id="lname" class="form-control" placeholder="Your lastname" value="<?php
												if(isset($_SESSION['reg_lname'])) {
													echo $_SESSION['reg_lname'];
												}
										?>" required>
										
										<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "<br><p style='color:red;'>Your last name must be between 2 and 25 characters</p>"; ?>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<select name="reg_medium" class="form-control" >
											<option value="bangla">Bangla</option>
											<option value="english">English</option>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<input type="email" name="reg_email" id="emailr" class="form-control" placeholder="Your email address" value="<?php
												if(isset($_SESSION['reg_email'])) {
													echo $_SESSION['reg_email'];
												}
										?>" required>

										<?php if(in_array("Email already in use<br>", $error_array)) echo "<br><p style='color:red;'>Email already in use</p>"; ?>

									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email</label> -->
										<input type="password" name="reg_password" id="passwordr" class="form-control" placeholder="Password" required>
									</div>
								</div>
								<?php if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<br><p style='color:red;'>Your password must be betwen 5 and 30 characters</p>"; ?>
								<div class="row form-group">
									<div class="col-md-12">
										<input type="password" name="reg_password2" id="passwordre" class="form-control" placeholder="Re Type Password" required>
									</div>
								</div>

								<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "<br><p style='color:red;'>Your passwords do not match</p>"; ?>
								<?php if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<br><p style='color:red;'>Your password can only contain english characters or numbers</p>"; ?>
								
								<div class="form-group">
									<input type="submit" name="register_button"  class="btn btn-primary" value="Register">
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
					
			<div id="fh5co-course">
				<div class="container">
					<div class="row  ">
						<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
							<h2>Some top Universities</h2>
							<p></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 ">
							<div class="course">
								<a href="#" class="course-img" style="background-image: url(assets/images/project-1.jpg);">
								</a>
								<div class="desc">
									<h3><a href="#">Dhaka University</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<span><a href="#" class="btn btn-primary btn-sm btn-course">Details</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="course">
								<a href="#" class="course-img" style="background-image: url(assets/images/project-3.jpg);">
								</a>
								<div class="desc">
									<h3><a href="#">North South University</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<span><a href="#" class="btn btn-primary btn-sm btn-course">Details</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="course">
								<a href="#" class="course-img" style="background-image: url(assets/images/project-3.jpg);">
								</a>
								<div class="desc">
									<h3><a href="#"></a>BUP</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<span><a href="#" class="btn btn-primary btn-sm btn-course">Details</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="course">
								<a href="#" class="course-img" style="background-image: url(assets/images/project-4.jpg);">
								</a>
								<div class="desc">
									<h3><a href="#">BUET</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<span><a href="#" class="btn btn-primary btn-sm btn-course">Details</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer id="fh5co-footer" class="se" role="contentinfo" style="background-image: url(assets/images/img_bg_4.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-3 fh5co-widget">
							<h3>About UniversityPicker</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
							<h3>Universities</h3>
							<ul class="fh5co-footer-links">
								<li><a href="#">Course</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Meetups</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
							<h3>SmartFinder</h3>
							<ul class="fh5co-footer-links">
								<li><a href="#">Blog</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">Handbook</a></li>
								<li><a href="#">Held Desk</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
							<h3>Pricing</h3>
							<ul class="fh5co-footer-links">
								<li><a href="#">Marketing</a></li>
								<li><a href="#">Visual Assistant</a></li>
								<li><a href="#">System Analysis</a></li>
								<li><a href="#">Advertise</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
							<h3>Contact</h3>
							<ul class="fh5co-footer-links">
								<li><a href="#">Find Designers</a></li>
								<li><a href="#">Find Developers</a></li>
								<li><a href="#">Teams</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</div>

	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="assets/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="assets/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="assets/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="assets/js/main.js"></script>



	
	
	<!-- Main -->
	<!-- notification -->
	<script src="assets/js/sw/toastr.min.js"></script> 

	<script>

		var a=<?php echo $num; ?>;
		if(a==1){
			s();
		}
	
		function s(){
			 
			 toastr["success"]("Registration Succesful")

				toastr.options = {
				  "closeButton": false,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": false,
				  "positionClass": "toast-bottom-center",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
		}
		
	</script>

</script>


	<!-- notification -->


	</script>

</body>
</html>