<?php require_once 'action/connect.php' ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
-->

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

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- Date Picker -->
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="css/cs-select.css">
<link rel="stylesheet" href="css/cs-skin-border.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/tambahan.css">


<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php"><i class="icon-airplane"></i>Travel</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="index.php">Home</a></li>
								<li>
									<a href="vacation.php" class="fh5co-sub-ddown">Vacations</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">Family</a></li>
										<li><a href="#">CSS3 &amp; HTML5</a></li>
										<li><a href="#">Angular JS</a></li>
										<li><a href="#">Node JS</a></li>
										<li><a href="#">Django &amp; Python</a></li>
									</ul>
								</li>
								<li class="active"><a href="flight.php">Flights</a></li>
								<li><a href="hotel.php">Hotel</a></li>
								<li><a href="car.php">Car</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<section id="breadcrum">
				<div class="container">
					<div class="row">
						<h2 class="title">Pemesanan Tiket</h2>
						<p>home // Pemesanan Tiket</p>
					</div>
				</div>
			</section>

			<section id="booking">
				<div class="container">
					<div class="row">

						<div class="divide">
							<h3>isi data dibawah ini</h3>
							<p></p>
						</div>

						<form action="action/create.php" method="post">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Username</label>
									<input type="text" placeholder="Nama Lengkap" name="name" class="form-control" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>email</label>
									<input type="email" placeholder="Email" name="email" class="form-control" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Asal</label>
									<input type="text" placeholder="Asal" name="asal" class="form-control" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Tujuan</label>
									<input type="text" placeholder="Tujuan" name="tujuan" class="form-control" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Dewasa</label>
											<select class="form-control" name="dewasa">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Anak</label>
											<select class="form-control" name="anak">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>No. Telp</label>
									<input type="text" placeholder="No. Telp" name="telp" class="form-control" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Alamat</label>
									<textarea class="form-control" name="alamat" rows="10"></textarea>
								</div>
							</div>
							<div class="col-sm-6">
								<label>Note</label>
								<div class="note">
								</div>
							</div>

							<div class="col-md-12">
								<div class="submit">
									<input type="submit" class="btn btn-primary btn-block" value="Booking">
								</div>
							</div>

						</form>

					</div>
				</div>	
			</section>

			<footer>
				<div id="footer">
					<div class="container">
						<div class="row row-bottom-padded-md">
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>About Travel</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Top Flights Routes</h3>
								<ul>
									<li><a href="#">Manila flights</a></li>
									<li><a href="#">Dubai flights</a></li>
									<li><a href="#">Bangkok flights</a></li>
									<li><a href="#">Tokyo Flight</a></li>
									<li><a href="#">New York Flights</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Top Hotels</h3>
								<ul>
									<li><a href="#">Boracay Hotel</a></li>
									<li><a href="#">Dubai Hotel</a></li>
									<li><a href="#">Singapore Hotel</a></li>
									<li><a href="#">Manila Hotel</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Interest</h3>
								<ul>
									<li><a href="#">Beaches</a></li>
									<li><a href="#">Family Travel</a></li>
									<li><a href="#">Budget Travel</a></li>
									<li><a href="#">Food &amp; Drink</a></li>
									<li><a href="#">Honeymoon and Romance</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Best Places</h3>
								<ul>
									<li><a href="#">Boracay Beach</a></li>
									<li><a href="#">Dubai</a></li>
									<li><a href="#">Singapore</a></li>
									<li><a href="#">Hongkong</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Affordable</h3>
								<ul>
									<li><a href="#">Food &amp; Drink</a></li>
									<li><a href="#">Fare Flights</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p>
								<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>
</html>

