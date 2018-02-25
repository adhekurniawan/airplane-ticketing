
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

<div id="header">
	<div class="container">
		<div class="row">
			<div id="slider">
				<ul class="slides">
					<li class="slide slide1">
						<div class="col-md-6">
							<div class="desc-header">
								<h1 class="title">Traveloka first, then the world</h1>
								<p class="subtitle">Find the best deals on every Traveloka product you need!Find the best deals on every Traveloka product you need! Find the best deals on every Traveloka product you need!</p>
							</div>
						</div>
						<div class="col-md-6">
							<img src="assets/images/banner.jpeg">
						</div>
					</li>
					<li class="slide slide2">
						<div class="col-md-6">
							<div class="desc-header">
								<h1 class="title">Traveloka first, then the world</h1>
								<p class="subtitle">Find the best deals on every Traveloka product you need!Find the best deals on every Traveloka product you need! Find the best deals on every Traveloka product you need!</p>
							</div>
						</div>
						<div class="col-md-6">
							<img src="assets/images/banner.jpeg">
						</div>
					</li>
					<li class="slide slide3">
						<div class="col-md-6">
							<div class="desc-header">
								<h1 class="title">Traveloka first, then the world</h1>
								<p class="subtitle">Find the best deals on every Traveloka product you need!Find the best deals on every Traveloka product you need! Find the best deals on every Traveloka product you need!</p>
							</div>
						</div>
						<div class="col-md-6">
							<img src="assets/images/banner.jpeg">
						</div>
					</li>
					<li class="slide slide4">
						<div class="col-md-6">
							<div class="desc-header">
								<h1 class="title">Traveloka first, then the world</h1>
								<p class="subtitle">Find the best deals on every Traveloka product you need!Find the best deals on every Traveloka product you need! Find the best deals on every Traveloka product you need!</p>
							</div>
						</div>
						<div class="col-md-6">
							<img src="assets/images/banner.jpeg">
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div id="rex" style="padding: 30px;">
	<div class="row">
		<form action="hasil.php" method="get">
			<div class="col-xxs-12 col-xs-3 mt">
				<div class="input-field">
					<label for="from">Dari:</label>
					<select class="form-control" name="asal">
						<option>-- Pilih Asal Keberangkatan --</option>
						<?php
						require_once 'action/connect.php';
						$query = "SELECT DISTINCT asal from rute;";
						$sql = mysqli_query($connect, $query);
						while($data = mysqli_fetch_array($sql)){
							echo "<option value='".$data['asal']."''>".$data['asal']."</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="col-xxs-12 col-xs-3 mt">
				<div class="input-field">
					<label for="from">Ke:</label>
					<select class="form-control" name="tujuan">
						<option>-- Pilih Tujuan Keberangkatan --</option>
						<?php
						require_once 'action/connect.php';
						$query = "SELECT DISTINCT tujuan from rute;";
						$sql = mysqli_query($connect, $query);
						while($data = mysqli_fetch_array($sql)){
							echo "<option value='".$data['tujuan']."''>".$data['tujuan']."</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="col-xxs-12 col-xs-3 mt">
				<div class="input-field">
					<label for="from">Jumlah:</label>
					<select class="form-control" name="jumlah">
						<option>-- Pilih Jumlah Penumpang --</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>
			<div class="col-xxs-12 col-xs-3 mt alternate">
				<div class="input-field">
					<label for="date-start">Tanggal:</label>
					<input type="date" name="date" class="form-control" id="time" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			<div class="col-xs-3 col-xs-offset-9 text-right">
				<input type="submit" class="btn btn-orange" value="Search">
			</div>
		</form>
	</div>
</div>




<div id="populer">
	<div class="container">
		<div class="row">
			<h3 class="title">Populer Reservasion</h3>
			<p class="subtitle">Datang ke TIX Spot kami, dan tunjukkan TIX Card Anda untuk mendapatkan penawaran eksklusif.</p>
			<div class="content">
				<?php
				require_once 'action/connect.php';
				$query = "SELECT * FROM rute order by harga limit 4";
				$sql = mysqli_query($connect, $query);
				while($data = mysqli_fetch_array($sql)){

					?>
					<div class="col-md-4">
						<?php echo "<a href='pesan.php?id=$data[id_rute]'>" ?>
							<div class="destinasi">
								<img class="img-product" src="assets/images/destinasi/<?php echo $data['img_rute']; ?>">
								<div class="tag">
									<img src="assets/images/destinasi/tag.png"> <span><b>IDR</b></span>
									<p><?php echo $data['harga']; ?></p>
								</div>
								<div class="desc">
									<h4><?php echo $data['asal']; ?> - <?php echo $data['tujuan']; ?></h4>
									<p>packages and web page editors now use . . .</p>
								</div>
							</div>
						</a>
					</div>
					<?php }?>

				</div>
			</div>
		</div>
	</div>


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