	<?php
	session_start();
	if($_SESSION['traveler']){

		?>

		<?php
		require_once '../../action/connect.php';
		if (isset($_POST['Input'])){
			$nama	= $_POST['nama'];
			$email	= $_POST['email'];
			$asal	= $_POST['asal'];
			$tujuan	= $_POST['tujuan'];
			$dewasa	= $_POST['dewasa'];
			$anak	= $_POST['anak'];
			$telp	= $_POST['telp'];
			$alamat	= $_POST['alamat'];
			$jenkel	= $_POST['jenkel'];			
			$connect->query("INSERT INTO customer (nama, alamat, telp, dewasa, anak, jenkel, asal, tujuan, seat) VALUES ( '$nama', '$alamat', '$telp', '$dewasa', '$anak', '$jenkel', '$asal', '$tujuan', '$seat')");
		}
		?>
	<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Forms :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons-->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">
					<!--menu-right-->

					<!--/profile_details-->

					<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

				<!-- //header-ends -->
				<!--//outer-wp-->
				<div class="outter-wp">
					<!--/sub-heard-part-->

					<!--/sub-heard-part-->	
					<!--/forms-->
					<div class="forms-main">
						<h2 class="inner-tittle">Form Data Pesawat</h2>
						<div class="graph-form">
							<div class="form-body">
								<form class="form-horizontal" role="form" method="POST"> 
									<div class="form-group"> 
										<label>Nama</label> 
										<input type="text" class="form-control" placeholder="Nama" name="nama"> 
									</div> 									
									<div class="form-group"> 
										<label>Email</label> 
										<input type="email" class="form-control" placeholder="email" name="email"> 
									</div>						
									<div class="form-group"> 
										<label>Jenis Kelamin</label> 
										<input type="radio" placeholder="Email" name="jenkel" value="laki-laki" /> Laki Laki
										<input type="radio" placeholder="Email" name="jenkel" value="perempuan" /> perempuan
									</div>		
									<div class="form-group">
										<label>Dewasa</label>
										<select class="form-control" name="dewasa">
											<option value="Penumpang Dewasa">---- Penumpang Dewasa ----</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>			
									<div class="form-group">
										<label>Anak</label>
										<select class="form-control" name="anak">
											<option value="Penumpang Anak">---- Penumpang Anak ----</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
									<div class="form-group">
										<label>Asal</label>
										<input type="text" placeholder="Asal" name="asal" class="form-control" />
									</div>
									<div class="form-group">
										<label>Tujuan</label>
										<input type="text" placeholder="Tujuan" name="tujuan" class="form-control" />
									</div>
									<div class="form-group">
										<label>No. Telp</label>
										<input type="text" placeholder="No. Telp" name="telp" class="form-control" />
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<textarea class="form-control" name="alamat" rows="10"></textarea>
									</div>
									<div class="submit">
										<input type="submit" value="Input" name="Input">
									</div> 
								</form> 
							</div>

						</div>
						<!--/forms-inner-->

						<!--//outer-wp-->
						<!--footer section start-->

						<!--footer section end-->
					</div>
				</div>
				<!--//content-inner-->
				


				<?php require_once 'page/navbar.php' ?>

			</script>
			<!--js -->
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>
		</body>
		</html>
		<?php
	} else {
		echo "<script>window.location='../login.php';</script>";
	}