	<?php
	session_start();
	if($_SESSION['traveler']){

		?>

		<?php
		require_once '../../action/connect.php';
		if (isset($_POST['Input'])){
			$asal 			= $_POST['asal'];
			$tujuan 		= $_POST['tujuan'];
			$date 			= $_POST['date'];
			$waktu			= $_POST['waktu'];
			$sampai			= $_POST['sampai'];
			$id_transportation		= $_POST['id_transportation'];
			$harga 			= $_POST['harga'];			
			$connect->query("INSERT INTO `rute`(`id_rute`, `asal`, `tujuan`, `date`, `waktu`, `sampai`, `harga`, `id_transportation`, `img_rute`) VALUES (NULL, '$asal','$tujuan','$date','$waktu','$sampai','$harga','$id_transportation','$id_transportation')");
		}
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Dashboard | Data Pesawat</title>
			<!-- Tell the browser to be responsive to screen width -->
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			<!-- Bootstrap 3.3.7 -->
			<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
			<!-- Ionicons -->
			<link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
			<!-- DataTables -->
			<link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
			<!-- Theme style -->
			<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

			<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
			<link rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		</head>
		<body class="hold-transition skin-blue sidebar-mini">
			<div class="wrapper">

				<header class="main-header">
					<!-- Logo -->
					<a href="../index.php" class="logo">
						<!-- mini logo for sidebar mini 50x50 pixels -->
						<span class="logo-mini"><b>A</b>LT</span>
						<!-- logo for regular state and mobile devices -->
						<span class="logo-lg"><b>Admin</b>LTE</span>
					</a>
					<!-- Header Navbar: style can be found in header.less -->
					<nav class="navbar navbar-static-top">
						<!-- Sidebar toggle button-->
						<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>

						<div class="navbar-custom-menu">
							<ul class="nav navbar-nav">
								<!-- Messages: style can be found in dropdown.less-->
								<li class="dropdown messages-menu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-envelope-o"></i>
										<span class="label label-success">4</span>
									</a>
									<ul class="dropdown-menu">
										<li class="header">You have 4 messages</li>
										<li>
											<!-- inner menu: contains the actual data -->
											<ul class="menu">
												<li><!-- start message -->
													<a href="#">
														<div class="pull-left">
															<img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
														</div>
														<h4>
															Support Team
															<small><i class="fa fa-clock-o"></i> 5 mins</small>
														</h4>
														<p>Why not buy a new awesome theme?</p>
													</a>
												</li>
												<!-- end message -->
												<li>
													<a href="#">
														<div class="pull-left">
															<img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
														</div>
														<h4>
															AdminLTE Design Team
															<small><i class="fa fa-clock-o"></i> 2 hours</small>
														</h4>
														<p>Why not buy a new awesome theme?</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="pull-left">
															<img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
														</div>
														<h4>
															Developers
															<small><i class="fa fa-clock-o"></i> Today</small>
														</h4>
														<p>Why not buy a new awesome theme?</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="pull-left">
															<img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
														</div>
														<h4>
															Sales Department
															<small><i class="fa fa-clock-o"></i> Yesterday</small>
														</h4>
														<p>Why not buy a new awesome theme?</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="pull-left">
															<img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
														</div>
														<h4>
															Reviewers
															<small><i class="fa fa-clock-o"></i> 2 days</small>
														</h4>
														<p>Why not buy a new awesome theme?</p>
													</a>
												</li>
											</ul>
										</li>
										<li class="footer"><a href="#">See All Messages</a></li>
									</ul>
								</li>
								<!-- Notifications: style can be found in dropdown.less -->
								<li class="dropdown notifications-menu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class="label label-warning">10</span>
									</a>
									<ul class="dropdown-menu">
										<li class="header">You have 10 notifications</li>
										<li>
											<!-- inner menu: contains the actual data -->
											<ul class="menu">
												<li>
													<a href="#">
														<i class="fa fa-users text-aqua"></i> 5 new members joined today
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
														page and may cause design problems
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-users text-red"></i> 5 new members joined
													</a>
												</li>

												<li>
													<a href="#">
														<i class="fa fa-shopping-cart text-green"></i> 25 sales made
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-user text-red"></i> You changed your username
													</a>
												</li>
											</ul>
										</li>
										<li class="footer"><a href="#">View all</a></li>
									</ul>
								</li>
								<!-- Tasks: style can be found in dropdown.less -->
								<li class="dropdown tasks-menu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-flag-o"></i>
										<span class="label label-danger">9</span>
									</a>
									<ul class="dropdown-menu">
										<li class="header">You have 9 tasks</li>
										<li>
											<!-- inner menu: contains the actual data -->
											<ul class="menu">
												<li><!-- Task item -->
													<a href="#">
														<h3>
															Design some buttons
															<small class="pull-right">20%</small>
														</h3>
														<div class="progress xs">
															<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
															aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">20% Complete</span>
														</div>
													</div>
												</a>
											</li>
											<!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Create a nice theme
														<small class="pull-right">40%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
														aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Some task I need to do
													<small class="pull-right">60%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
													aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												Make beautiful transitions
												<small class="pull-right">80%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
												aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<!-- end task item -->
							</ul>
						</li>
						<li class="footer">
							<a href="#">View all tasks</a>
						</li>
					</ul>
				</li>
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs">Alexander Pierce</span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

							<p>
								Alexander Pierce - Web Developer
								<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
							</div>
							<!-- /.row -->
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="#" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->

<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li class="active"><a href="data-pesawat.php"><i class="fa fa-table"></i> <span>Data Transportation</span></a></li>
			<li><a href="data-reservasi.php"><i class="fa fa-table"></i> <span>Data Reservation</span></a></li>
			<li><a href="data-customer.php"><i class="ion ion-person"></i> <span>Data Customer</span></a></li>
			<li><a href="data-rute.php"><i class="fa fa-table"></i> <span>Data Rute</span></a></li>
			<li><a href="data-user.php"><i class="fa fa-user"></i> <span>Data User</span></a></li>
			<li><a href="admin2/pages/logout.php"><i class="fa fa-"></i> <span>Logout</span></a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Tables
			<small>advanced tables</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data Pesawat</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-3">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Tambah Data Pesawat</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div style="padding:0px 30px 30px 30px;">
							<form class="form-horizontal" role="form" method="POST"> 
								<div class="form-group"> 
									<label>Asal</label> 
									<input type="text" class="form-control" id="asal" placeholder="asal" name="asal"> 
								</div> 
								<div class="form-group"> 
									<label>tujuan Pesawat</label> 
									<input type="text" class="form-control" id="tujuan" placeholder="tujuan" name="tujuan"> 
								</div>
								<div class="form-group"> 
									<label>Tanggal</label> 
									<input type="date" class="form-control" id="waktu" placeholder="date" name="date"> 
								</div> 
								<div class="form-group"> 
									<label>Waktu</label> 
									<input type="time" class="form-control" id="waktu" placeholder="waktu" name="waktu"> 
								</div> 
								<div class="form-group"> 
									<label>Sampai</label> 
									<input type="time" class="form-control" id="sampai" placeholder="sampai" name="sampai"> 
								</div> 
								<div class="form-group"> 
									<label>Maskapai</label> 
									<select class="form-control" name="id_transportation">
										<option>-- Pilih Maskapai --</option>
										<?php
										$query = "SELECT id_transportation,nama_pesawat from transportation;";
										$sql = mysqli_query($connect, $query);
										while($data = mysqli_fetch_array($sql)){
											echo "<option value='".$data['id_transportation']."''>".$data['nama_pesawat']."</option>";
										}
										?>
									</select>
								</div> 
								<div class="form-group"> 
									<label>harga</label> 
									<input type="text" class="form-control" id="harga" placeholder="harga" name="harga"> 
								</div>
								<div class="submit">
									<input type="submit" value="Input" name="Input">
								</div> 
							</form> 
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-xs-9">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Pesawat</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body"><table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Asal</th>
								<th>Tujuan</th>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Sampai</th>
								<th>Maskapai</th>
								<th>Harga</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							require_once '../../action/connect.php';

							$query = "SELECT * FROM rute,transportation where rute.id_transportation=transportation.id_transportation";
							$sql = mysqli_query($connect, $query);
							$no=1;
							while($data = mysqli_fetch_array($sql)){
								echo "<tr>";
								echo "<td>".$no."</td>"; 
								echo "<td>".$data['asal']."</td>";
								echo "<td>".$data['tujuan']."</td>";
								echo "<td>".$data['date']."</td>";
								echo "<td>".$data['waktu']."</td>";   
								echo "<td>".$data['sampai']."</td>";   
								echo "<td>".$data['nama_pesawat']."</td>";  
								echo "<td>".$data['harga']."</td>";
								echo "<td>
								<a class='btn btn-warning col-md-5' href='edit-rute.php?id_rute=".$data['id_rute']."'>Edit</a>
								<a class='btn btn-danger col-md-6' style='margin-left:2px;' href='delete-rute.php?aksi=delete&id_rute=".$data['id_rute']."'>Hapus</a>
								</td>";
								echo "</tr>";
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
	reserved.
</footer>



  <!-- Add the sidebar's background. This div must be placed
  	immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- page script -->
  <script>
  	$(function () {
  		$('#example1').DataTable()
  		$('#example2').DataTable({
  			'paging'      : true,
  			'lengthChange': false,
  			'searching'   : false,
  			'ordering'    : true,
  			'info'        : true,
  			'autoWidth'   : false
  		})
  	})
  </script>
</body>
</html>

<?php
} else {
	echo "<script>window.location='../login.php';</script>";
}