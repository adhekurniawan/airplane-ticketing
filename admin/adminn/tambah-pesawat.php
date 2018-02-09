	<?php
	session_start();
	if($_SESSION['traveler']){

		?>

		<?php
		require_once '../../action/connect.php';
		if (isset($_POST['Input'])){
			$nama_pesawat	= $_POST['nama_pesawat'];
			$kode 			= $_POST['kode'];
			$deskripsi 		= $_POST['deskripsi'];
			$seat 			= $_POST['seat'];			
			$connect->query("INSERT INTO transportation (nama_pesawat, kode, deskripsi, seat) VALUES ('$nama_pesawat','$kode','$deskripsi','$seat')");
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
						<div class="col-md-4">
							<h2 class="inner-tittle">Form Data Pesawat</h2>
							<div class="graph-form">
								<div class="form-body">
									<form class="form-horizontal" role="form" method="POST"> 
										<div class="form-group"> 
											<label>Nama Pesawat</label> 
											<input type="text" class="form-control" id="nama_pesawat" placeholder="nama pesawat" name="nama_pesawat"> 
										</div> 
										<div class="form-group"> 
											<label>Kode Pesawat</label> 
											<input type="text" class="form-control" id="kode" placeholder="Kode Pesawat" name="kode"> 
										</div> 
										<div class="form-group"> 
											<label>Deskripsi Pesawat</label> 
											<input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Pesawat" name="deskripsi"> 
										</div>
										<div class="form-group"> 
											<label>Seat</label> 
											<input type="text" class="form-control" id="seat" placeholder="Jumlah Seat" name="seat"> 
										</div>
										<div class="submit">
											<input type="submit" value="Input" name="Input">
										</div> 
									</form> 
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<h2 class="inner-tittle">Data Pesawat</h2>
							<div id="tbl-length" class="col-sm-12 col-md-10">
								<table class="table table-striped table-responsive table-hover">
									<thead>
										<th>No</th>
										<th>Nama Pesawat</th>
										<th>Kode</th>
										<th>Deskripsi</th>
										<th>Seat</th>
										<th>Opsi</th>
									</thead>
									<tbody>

										<?php
                          // Load file connect.php
										require_once '../../action/connect.php';

  														$query = "SELECT * FROM transportation"; // Query untuk menampilkan semua data siswa
  														$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  														$no=1;
  														while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
  															echo "<tr>";
  															echo "<td>".$no."</td>";
  															echo "<td>".$data['nama_pesawat']."</td>";    
  															echo "<td>".$data['kode']."</td>";
  															echo "<td>".$data['deskripsi']."</td>";
  															echo "<td>".$data['seat']."</td>";
  															echo "<td>
  															<a class='fa fa-edit' href='edit-pesawat.php?id=".$data['id']."'></a>
  															<a class='fa fa-trash-o' href='delete-pesawat.php?aksi=delete&id=".$data['id']."'></a>
  															</td>";

  															echo "</tr>";
  															$no++;
  														}
  														?>

  													</tbody>
  												</table>
  											</div>
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