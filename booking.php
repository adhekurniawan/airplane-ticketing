
<?php require_once 'action/connect.php' ?>
<?php require_once 'page/header.php' ?>

	<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"></i>E-ticketing</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="booking.php">Booking</a></li>
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
									<input type="text" placeholder="Nama Lengkap" name="nama" class="form-control" />
								</div>
								<div class="form-group">
									<label>email</label>
									<input type="email" placeholder="Email" name="email" class="form-control" />
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label><br>
									<input type="radio" placeholder="Email" name="jenkel" value="laki-laki" /> Laki Laki
									<input type="radio" placeholder="Email" name="jenkel" value="perempuan" /> perempuan
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Dewasa</label>
											<select class="form-control" name="dewasa">
												<option value="Penumpang Dewasa">---- Penumpang Dewasa ----</option>
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
												<option value="Penumpang Anak">---- Penumpang Anak ----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
									</div>
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
									<input type="submit" class="btn btn-primary btn-block" value="Booking">
								</div>

							</div>


						</form>

					</div>
				</div>	
			</section>


<?php require_once 'page/footer.php' ?>