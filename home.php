<?php 
	require 'includes/header.php';
	 
	 // echo $_SESSION['log_email'];
	 // echo $_SESSION['reg_medium'];
	 
	 // echo $_SESSION['id'];
	 $userid=$_SESSION['id'];

	if(isset($_POST['bangla_button'])){

		$sscgpa = $_POST['sscgpa'];
		$_SESSION['sscgpa']=$sscgpa;
		$hscgpa = $_POST['hscgpa'];
		$_SESSION['hscgpa']=$hscgpa;
		$department = $_POST['department'];
		$_SESSION['department']=$department;
		$firstSub = $_POST['firstSub'];
		$_SESSION['firstSub']=$firstSub;
		$firstSubgrade = $_POST['firstSubgrade'];
		$_SESSION['firstSubgrade']=$firstSubgrade;
		$secondSub = $_POST['secondSub'];
		$_SESSION['secondSub']=$secondSub;
		$secondSubgrade = $_POST['secondSubgrade'];
		$_SESSION['secondSubgrade']=$secondSubgrade;
		$thirdSub = $_POST['thirdSub'];
		$_SESSION['thirdSub']=$thirdSub;
		$thirdSubgrade = $_POST['thirdSubgrade'];
		$_SESSION['thirdSubgrade']=$thirdSubgrade;
		$fourthSub = $_POST['fourthSub'];
		$_SESSION['fourthSub']=$fourthSub;
		$fourthSubgrade = $_POST['fourthSubgrade'];
		$_SESSION['fourthSubgrade']=$fourthSubgrade;
		$query = mysqli_query($con, "INSERT INTO userinfo VALUES ('', '$userid', '$sscgpa', '$hscgpa', '$department', '$firstSub','$firstSubgrade', '$secondSub','$secondSubgrade', '$thirdSub','$thirdSubgrade', '$fourthSub','$fourthSubgrade')");

		header("Location: searchResult2.php");

	}

	if(isset($_POST['english_button'])){

		$olevel = $_POST['olevel'];
		$_SESSION['olevel']=$olevel;
		$alevel = $_POST['alevel'];
		$_SESSION['alevel']=$alevel;
		
		$query = mysqli_query($con, "INSERT INTO userinfoenglish VALUES ('', '$userid', '$olevel', '$alevel')");

		header("Location: searchResult.php");

	}
 ?>

 <!DOCTYPE html>
 <html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>home</title>
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
		<link rel="stylesheet" href="assets/magnific-popup.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="assets/css/flexslider.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="assets/css/home/style.css">

		<!-- Modernizr JS -->
		<script src="assets/home/js/modernizr-2.6.2.min.js"></script>


	</head>
 <body>

 	<?php if ($_SESSION['medium']=="bangla") {    ?>


<div class="gtco-loader"></div>
<div id="page">
	
	
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(assets/images/img_12.jpg)">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					
					
					<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
						<h1>Looking for the perfect University ?</h1>
					</div>
					<div class="col-md-4 col-md-push-1 " data-animate-effect="">
						<div class="form-wrap">
							<div class="tab">
								
								<div class="tab-content">
									<div class="tab-content-inner active" data-content="signup">
										<h3>Search Your University</h3>
										
										 <form action='home.php' method='POST'>
											<div class="row form-group">
												<div class="col-md-6">
													<input type="number" name="sscgpa" id="ssc" class="form-control" placeholder="SSC-GPA" step="0.01" min=0 max=5>
												</div>
												<div class="col-md-6">
													<input type='number' name='hscgpa'  id="hsc" class="form-control" placeholder="HSC-GPA" step='0.01' min=0 max=5>
												</div>
											</div>
											
											<div class="row form-group">
												<div class="col-md-12">
													<label for="destination">Department</label>
													<select name="department" id="select" class="form-control">
														
																					
													    <option value='science' onclick='department()'>Science</option>
													    <option value='commerce' onclick='department()'>Commerce</option>
													    <option value='arts' onclick='department()'>Arts</option>
														
														
													</select>

												</div>
												<div class="col-md-12">
													<br>
													
												</div><br>
											</div>

												<div class='d-none form-group' id='science'>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked1" name='firstSub' value='physics'>

																<label class="custom-control-label" for="defaultChecked1">Physics</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	<!-- <label for="Grade">Grade</label> -->
																	<select name='firstSubgrade' id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked2"  name='secondSub' value='chemistry'>
																<label class="custom-control-label" for="defaultChecked2">chemistry</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="secondSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked3"  name='thirdSub' value='math'>
																<label class="custom-control-label" for="defaultChecked3">Math</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="thirdSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked4" name='fourthSub' value='biology'>
																<label class="custom-control-label" for="defaultChecked4">Biology</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="fourthSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked5" name='fourthSub' value='statistic'>
																<label class="custom-control-label" for="defaultChecked5">Statistic</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="fourthSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- //FOr commerce -->

												<div class='d-none form-group' id='commerce'>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked6" name='firstSub' value='accounting'>

																<label class="custom-control-label" for="defaultChecked6">Accounting</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	<!-- <label for="Grade">Grade</label> -->
																	<select name='firstSubgrade' id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked7"  name='secondSub' value='finance'>
																<label class="custom-control-label" for="defaultChecked7">Finance</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="secondSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked8"  name='thirdSub' value='management'>
																<label class="custom-control-label" for="defaultChecked8">Management</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="thirdSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked9" name='fourthSub' value='economics'>
																<label class="custom-control-label" for="defaultChecked9">Economics</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="fourthSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked10" name='fourthSub' value='statistic'>
																<label class="custom-control-label" for="defaultChecked10">Statistic</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="fourthSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- For Arts -->

												<div class='d-none form-group' id='arts'>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked11" name='firstSub' value='x'>

																<label class="custom-control-label" for="defaultChecked11">X</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	<!-- <label for="Grade">Grade</label> -->
																	<select name='firstSubgrade' id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked12"  name='secondSub' value='y'>
																<label class="custom-control-label" for="defaultChecked12">y</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="secondSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked13"  name='thirdSub' value='z'>
																<label class="custom-control-label" for="defaultChecked13">Z</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="thirdSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked14" name='fourthSub' value='y'>
																<label class="custom-control-label" for="defaultChecked14">Y</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="fourthSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="defaultChecked15" name='fourthSub' value='z'>
																<label class="custom-control-label" for="defaultChecked15">Z</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row form-group">
																<div class="col-md-12">
																	
																	<select name="fourthSubgrade" id="grade1" class="form-control">
																		
																		<option value="A+">A+</option>
																		<option value="A">A</option>
																		<option value="A-">A-</option>
																		<option value="B">B</option>
																		<option value="C">C</option>
																		<option value="D">D</option>>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>


											 
													
										  </div>
												
										
										
										<div class="row form-group">
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-block" name='bangla_button' value='Submit'>
											</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
</header>





	<?php 	}
		

	else{ ?>
	
	<div class="gtco-loader"></div>
<div id="page">
	
	
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(assets/images/img_12.jpg)">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					
					
					<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
						<h1>Looking for the perfect University ?</h1>
					</div>
					<div class="col-md-4 col-md-push-1 " data-animate-effect="">
						<div class="form-wrap">
							<div class="tab">
								
								<div class="tab-content">
									<div class="tab-content-inner active" data-content="signup">
										<h3>Search Your University</h3>
										
										 <form action='home.php' method='POST'>
											<div class="row form-group">
												<div class="col-md-12">
													<input type="number" name="olevel" id="" class="form-control" placeholder="olevel-GPA" step="0.01" min=0 max=5>
												</div>
												<div class="col-md-12">
													<input type='number' name='alevel'  id="" class="form-control" placeholder="alevel-GPA" step='0.01' min=0 max=5>
												</div>
											</div>

											


												
										
										
										<div class="row form-group">
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-block" name='english_button' value='Submit'>
											</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
</header>


	<?php  } ?>






	<script>

		function department() {
				var e = document.getElementById ("select");
				var strUser = e.options [e.selectedIndex] .value;
				

				if (strUser=="science") {
					var element = document.getElementById("science");
  					element.classList.remove("d-none");

  					var element = document.getElementById("commerce");
  					element.classList.add("d-none");

  					var element = document.getElementById("arts");
  					element.classList.add("d-none");
				}
				else if (strUser=="commerce") {
					var element = document.getElementById("commerce");
  					element.classList.remove("d-none");

  					var element = document.getElementById("science");
  					element.classList.add("d-none");

  					var element = document.getElementById("arts");
  					element.classList.add("d-none");
				}
				else{
					var element = document.getElementById("arts");
  					element.classList.remove("d-none");

  					var element = document.getElementById("science");
  					element.classList.add("d-none");

  					var element = document.getElementById("commerce");
  					element.classList.add("d-none");
				};
		}
		


		
	</script>

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
	<script src="assets/js/home/main.js"></script>
 </body>
 </html>