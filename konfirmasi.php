
<?php require_once 'action/connect.php'; ?>

<?php require_once 'page/header.php' ?>


<div id="fh5co-wrapper">
	<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"></i>Travel</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>


<div id="header" style="height: 300px;width: 100%;background: url(assets/images/banner.jpg);background-size: auto;background-position: 50%;">
	<div class="container">
		<div class="row">
		</div>
	</div>
</div>


<section id="list-maskapai" style="width: 100%;padding: 70px 0px;background: #e6eaed;overflow: hidden;margin-bottom: 30px;position: relative;top: 0;">
	<div class="container">
		<div class="row">
			<?php
			require_once 'action/connect.php';
			$id_rute=$_GET['id_rute'];
			$jumlah=$_GET['jumlah'];
			$query = "SELECT * from rute,transportation where rute.id_transportation=transportation.id_transportation and rute.id_rute='$id_rute'";
			$sql = mysqli_query($connect, $query);
			while($data = mysqli_fetch_array($sql)){
				$sampai = strtotime($data['sampai']);
				$waktu	= strtotime($data['waktu']);
				$lama 	= $sampai - $waktu;
				?>
				<div class="box-container">
					<div class="col-md-8">
						<div class="left-desc" style="width: 100%;height: auto;background: #fff;border:1px solid #ddd;border-radius: 4px;">
							<div class="head-desc" style="width: 100%;height: auto;border-bottom: 1px solid #ddd;padding: 15px;">
								<?php echo $data['asal'] ?> → <?php echo $data['tujuan'] ?> 
							</div>
							<div class="body-desc" style="width: 100%;padding: 15px;">
								<p><b><?php echo date('D, d/M/Y', strtotime($data['date']));?></b></p>
								<img src="assets/images/maskapai/<?php echo $data['logo_maskapai']; ?>" alt="logo_maskapai" style="width: 120px;">
								<p><?php echo $data['waktu'].' <span class="icon-arrow-right" style="margin-left:100px; margin-right:50px;"></span> '.$data['sampai']?><br>
							<?php echo $data['asal'].' <span class="icon-arrow-right" style="margin:50px"></span> '.$data['tujuan']?></p>
							<?php
							$sampai = strtotime($data['sampai']);
							$waktu = strtotime($data['waktu']);
							$durasi = $sampai-$waktu;
							echo '<h5>Durasi: '.gmdate("H",$durasi).' jam '.gmdate("i", $durasi). ' menit </h5>';
							?>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="right-desc" style="width: 100%;height: auto;background: #fff;border:1px solid #ddd;border-radius: 4px;margin-bottom: 10px;">
							<div class="head-desc" style="width: 100%;height: auto;border-bottom: 1px solid #ddd;padding: 15px;">
								<b>Detail harga</b>
							</div>
							<div class="body-desc" style="width: 100%;padding: 15px;">
								<p>Harga<span style="float: right;font-weight: bold;"><?php echo $data['harga']; ?></span></p>
								<p>Jumlah<span style="float: right;font-weight: bold;"><?php echo $jumlah; ?></span></p>
								<p>Total<span style="float: right;font-weight: bold;"><?php echo $total=$data['harga']*$jumlah; ?></span></p>
							</div>
						</div>
						<div class="right-desc" style="width: 100%;height: auto;background: #fff;border:1px solid #ddd;border-radius: 4px;">
							<div class="head-desc" style="width: 100%;height: auto;border-bottom: 1px solid #ddd;padding: 15px;">
								<b>Informasi</b>
							</div>
							<div class="body-desc" style="width: 100%;padding: 15px;">
								<p>Any cancellations or changes made to this booking may be subjected to a cancellation fee. Please make sure you have understood the refund policy before requesting a refund.</p>
							</div>
						</div>
						<div class="btn-container" style="margin: 10px 0px;">
							<?php echo '<a class="btn btn-primary col-md-12" href="inputdata.php?id_rute='.$data['id_rute'].'&jumlah='.$jumlah.'">Selanjutnya</a>'; ?>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>


	<section id="why">
		<div class="container">
			<div class="row">
				<h3 class="title">Mengapa Pesan di Sini</h3>
				<p class="subtitle">Datang ke TIX Spot kami, dan tunjukkan TIX Card Anda untuk mendapatkan penawaran eksklusif.</p>
				<div class="content">
					<div class="col-md-4">
						<div class="icon-why">
							<img src="assets/images/thumb1.png">
						</div>
						<div class="desc-why">
							<h4>Pesan tiket pesawat dan kereta api  dan hotel terlengkap</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has .</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-why">
							<img src="assets/images/thumb2.png">
						</div>
						<div class="desc-why">
							<h4>Pembayaran online yang mudah dan terpercaya</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has .</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-why">
							<img src="assets/images/thumb3.png">
						</div>
						<div class="desc-why">
							<h4>Layanan customer dervice  24 jam</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has .</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="Rounded_Rectangle_6"></div>
			</div>
		</div>
	</div>


	<?php 	require_once 'page/footer.php' ?>