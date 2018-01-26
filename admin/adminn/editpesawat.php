 		<?php
 		session_start();
 		if($_SESSION['traveler']){

 			?>

 			<?php
 			require_once '../../action/connect.php';
 			$ambilid = $_GET['id'];
 			$res = $connect ->query("SELECT * from transportation where id='$ambilid'");
 			$data = $res->fetch_array(MYSQLI_ASSOC);

 			if(isset($_POST['edit'])){
 				$nama_pesawat = $_POST['nama_pesawat'];
 				$kode = $_POST['kode'];
 				$deskripsi = $_POST['deskripsi'];
 				$seat = $_POST['seat'];
 				$update = $connect->query("UPDATE transportation SET nama_pesawat='$nama_pesawat', kode='$kode', deskripsi='$deskripsi', seat='$seat' WHERE id='$ambilid'");
 				header("location:dafpesawat.php");

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
										<label>Nama Pesawat</label> 
										<input type="text" class="form-control" id="nama_pesawat" placeholder="Nama Pesawat" name="nama_pesawat" value="<?php echo $data['nama_pesawat'];?>"> 
									</div> 
									<div class="form-group"> 
										<label>Kode Pesawat</label> 
										<input type="text" class="form-control" id="kode" placeholder="Kode Pesawat" name="kode" value="<?php echo $data['kode'];?>"> 
									</div> 
									<div class="form-group"> 
										<label>Deskripsi Pesawat</label> 
										<input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Pesawat" name="deskripsi" value="<?php echo $data['deskripsi'];?>"> 
									</div>
									<div class="form-group"> 
										<label>Seat</label> 
										<input type="text" class="form-control" id="seat" placeholder="Jumlah Seat" name="seat" value="<?php echo $data['seat'];?>"> 
									</div>
									<div class="submit">
										<input type="submit" value="edit" name="edit">
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
				<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Traveler</h1></span> 
							<!--<img id="logo" src="" alt="Logo"/>--> 
						</a> 
					</header>
					<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
					<!--/down-->

					<!--//down-->
					<div class="menu">
						<ul id="menu" >
							<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
							<li><a href="forms.php"><i class="fa fa-plane"></i> <span>Input Data Pesawat</span></a></li>
							<li><a href="dafpesawat.php"><i class="fa fa-plane"></i> <span>Data Pesawat</span></a></li>
							<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tabs &amp; Panels</span> <span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub" >
									<li id="menu-academico-avaliacoes" ><a href="tabs.php"> Tabs &amp; Panels</a></li>
									<li id="menu-academico-boletim" ><a href="widget.php">Widgets</a></li>
									<li id="menu-academico-avaliacoes" ><a href="calender.php">Calendar</a></li>

								</ul>
							</li>
							<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub" >
									<li id="menu-academico-avaliacoes" ><a href="forms.php">Forms</a></li>
									<li id="menu-academico-boletim" ><a href="validation.php">Validation Forms</a></li>
									<li id="menu-academico-boletim" ><a href="table.php">Tables</a></li>
									<li id="menu-academico-boletim" ><a href="Buttons.php">Buttons</a></li>
								</ul>
							</li>
							<li><a href="typography.php"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
							<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub" >
									<li id="menu-academico-avaliacoes" ><a href="Login.php">Login</a></li>
									<li id="menu-academico-boletim" ><a href="register.php">Register</a></li>
									<li id="menu-academico-boletim" ><a href="404.php">404</a></li>
									<li id="menu-academico-boletim" ><a href="sign.php">Sign up</a></li>
									<li id="menu-academico-boletim" ><a href="profile.php">Profile</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
								<ul>
									<li><a href="inbox.php"><i class="fa fa-inbox"></i> Inbox</a></li>
									<li><a href="inbox.php"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
									<li><a href="editor.php"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

								</ul>
							</li>
							<li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub" >
									<li id="menu-academico-avaliacoes" ><a href="grids.php">Grids</a></li>
									<li id="menu-academico-boletim" ><a href="media.php">Media Objects</a></li>

								</ul>
							</li>
							<li><a href="chart.php"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
								<ul>
									<li><a href="map.php"><i class="lnr lnr-map"></i> Maps</a></li>
									<li><a href="graph.php"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
								</ul>
							</li>
							<li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
								<ul id="menu-comunicacao-sub" >
									<li id="menu-mensagens" style="width:120px" ><a href="project.php">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
										<ul id="menu-mensagens-sub" >
											<li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.php">Ribbons</a></li>
											<li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.php">Blank</a></li>
										</ul>
									</li>
									<li id="menu-arquivos" ><a href="500.php">500</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>		
			</div>
			<script>
				var toggle = true;

				$(".sidebar-icon").click(function() {                
					if (toggle)
					{
						$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
						$("#menu span").css({"position":"absolute"});
					}
					else
					{
						$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
						setTimeout(function() {
							$("#menu span").css({"position":"relative"});
						}, 400);
					}

					toggle = !toggle;
				});
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