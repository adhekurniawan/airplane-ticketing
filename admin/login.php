<?php 
@session_start();
require_once '../action/connect.php';
if(@$_POST['login']){
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$sql = mysqli_query($connect, "SELECT * FROM user where nama = '$nama' AND password = '$password'") or die ($dbname->error);
	$data = mysqli_fetch_array($sql);
	$id = $data[0];
	$cek = mysqli_num_rows($sql);
	if($cek>0){
		$_SESSION['traveler'] = $id;
		echo "<script>window.location = 'index.php'</script>";
	} else {
		echo "<script>alert('Login Gagal')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard - Travel</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

	<!-- CSS STYLE -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- CSS STYLE -->

  	<!-- AdminLTE Skins. Choose a skin from the css/skins
  		folder instead of downloading all of them to reduce the load. -->
  		<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  		<!-- Morris chart -->
  		<link rel="stylesheet" href="bower_components/morris.js/morris.css">
  		<!-- jvectormap -->
  		<link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  		<!-- Date Picker -->
  		<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  		<!-- Daterange picker -->
  		<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  		<!-- bootstrap wysihtml5 - text editor -->
  		<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	</head>

  	<section id="login-page">
  		<div class="container">
  			<div class="login">
  				<h3>TRAVEL LOGIN</h3>
  				<form role="form" method="POST">
  					<input class="form-control" type="text" class="text" name="nama" placeholder="Nama">
  					<input class="form-control" type="password" name="password" placeholder="Password">
  					<div class="submit"><input type="submit" value="LOGIN" name="login"></div>
  					<div class="clearfix"></div>
  				</form>
  			</div>
  		</div>
  	</section>

  	<!-- jQuery 3 -->
  	<script src="bower_components/jquery/dist/jquery.min.js"></script>
  	<!-- jQuery UI 1.11.4 -->
  	<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  	<script>
  		$.widget.bridge('uibutton', $.ui.button);
  	</script>
  	<!-- Bootstrap 3.3.7 -->
  	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  	<!-- Morris.js charts -->
  	<script src="bower_components/raphael/raphael.min.js"></script>
  	<script src="bower_components/morris.js/morris.min.js"></script>
  	<!-- Sparkline -->
  	<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  	<!-- jvectormap -->
  	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  	<!-- jQuery Knob Chart -->
  	<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  	<!-- daterangepicker -->
  	<script src="bower_components/moment/min/moment.min.js"></script>
  	<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  	<!-- datepicker -->
  	<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  	<!-- Bootstrap WYSIHTML5 -->
  	<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  	<!-- Slimscroll -->
  	<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  	<!-- FastClick -->
  	<script src="bower_components/fastclick/lib/fastclick.js"></script>
  	<!-- AdminLTE App -->
  	<script src="dist/js/adminlte.min.js"></script>
  	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  	<script src="dist/js/pages/dashboard.js"></script>
  	<!-- AdminLTE for demo purposes -->
  	<script src="dist/js/demo.js"></script>
  </body>
  </html>
