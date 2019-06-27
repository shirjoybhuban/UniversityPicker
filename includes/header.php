<?php  
require 'config/db_connection.php';

if (isset($_SESSION['log_email'])) {
	$userLoggedIn = $_SESSION['log_email'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE email='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
	$_SESSION['id']=$user['id'];
	$_SESSION['username']=$user['username'];
	$_SESSION['medium']=$user['medium'];
	
}
else {
	header("Location: register.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

<!-- 		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="includes/handlers/logout.php">Logout</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="unisearch.php">University Search</a>
					</li>
									
				</ul>
				
			</div>
		</nav> -->

		<nav class="fh5co-nav navbar-expand-lg" role="navigation">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="index.html">University<span>Picker</span></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li><a href="unisearch.php">Universities</a></li>
								<li><a href="smartfinder.php">SmartFinder</a></li>
								<li class="btn-cta"><a href="includes/handlers/logout.php"><span>Logout</span></a></li>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		</nav>







		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>