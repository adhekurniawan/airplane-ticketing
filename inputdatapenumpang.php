
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
							<li><a href="booking.php">Booking</a></li>
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


<div class="overlay"></div>
<div class="konfirm">
	<div class="gtco-container">
		<div class="col-md-12">
			<div class="kbreadcum">
				<h3>Detail Pemesanan</h3>
				<div style="width: 100%; height: 1px; background-color: red; margin: 10px 0px;"></div>
				<?php
				ob_start();
				$id_rute = $_GET['id_rute'];
				$jumlah = $_GET['jumlah'];
				$data = mysqli_query($connect, "SELECT * from rute, transportation where rute.id_transportation=transportation.id_transportation and rute.id_rute=".$id_rute."");
				$data = mysqli_fetch_array($data);
				echo "<i class='icon-paper-plane'> </i>";
				echo $data['asal'];
				echo " <i class='icon-arrow-right'> </i> ";
				echo $data['tujuan'];
				?>
				<p><?php echo date('D, d/M/Y', strtotime($data['date']));?></p>						
				<p><?php echo '<img src="assets/images/maskapai/'.$data['logo_maskapai'].'" width="70px" > '.$data['nama_pesawat'].' '.$data['kode'].''; ?></p>
				<p><?php echo $data['waktu'].' <span class="icon-arrow-right" style="margin-left:70px; margin-right:20px;"></span> '.$data['sampai']?><br>
					<?php echo $data['asal'].' <span class="icon-arrow-right" style="margin:20px"></span> '.$data['tujuan']?></p>
					<?php
					$sampai = strtotime($data['sampai']);
					$waktu = strtotime($data['waktu']);
					$durasi = $sampai-$waktu;
					echo '<h5>Durasi: '.gmdate("H",$durasi).' jam '.gmdate("i", $durasi). ' menit </h5>';
					?>
				</div>
			</div>
			<?php 
			function getcode(){
				$k = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
				$h = strlen($k) -1;
				return substr($k, rand(0, $h), 1);
			}
			$jumlah = $_GET['jumlah'];
			$id_rute = $_GET['id_rute'];
			$nama_pemesan = $_GET['nama_pemesan'];
			$alamat = $_GET['alamat'];
			$telp = $_GET['telp'];
			$email = $_GET['email'];
			$sisa_seat = $_GET['sisa_seat'];
			$sisakuota = $sisa_seat-$jumlah;
			for ($j=1; $j <=$jumlah ; $j++) { 

				?>
				<div class="col-md-6">
					<div class="kbreadcum">
						<form method="POST">
							<input type="hidden" name="nama_pemesan" value="<?php echo $nama_pemesan ?>">
							<input type="hidden" name="alamat" value="<?php echo $alamat  ?>">
							<input type="hidden" name="email" value="<?php echo $email ?>">
							<input type="hidden" name="telp" value="<?php echo $telp ?>">
							<input type="hidden" name="sisakuota" value="<?php echo $sisakuota ?>">
							<input type="hidden" name="id_rute" value="<?php echo $id_rute ?>">
							<input type="hidden" name="kode_reservasi" value="<?php 
							for ($a = 0; $a < 7; $a++){
								echo getcode(); }?>">
								<input type="hidden" name="kode_penumpang<?php echo $j;?>" value="<?php 
								for ($a = 0; $a < 7; $a++){
									echo getcode(); echo $j; }?>">
									<div class="form-group">
										<label class="control-label">Tittle Penumpang <?php echo $j ?></label>

										<select class="form-control" name="tittle<?php echo $j ?>">
											<option>Pilih Tittle</option>
											<option>Tn.</option>
											<option>Ny.</option>
											<option>Nn.</option>
										</select>							
									</div>
									<div class="form-group">
										<label class="control-label">Nama Penumpang <?php echo $j ?></label>
										<input type="text" class="form-control" name="nama_penumpang<?php echo $j ?>">	
									</div>
								</div>
							</div>
							<?php 
						}
						?>
						<div class="col-md-6" style="float: left">
							<input class="btn btn-primary" value="Selanjutnya" name="Input" type="submit" style="position: relative; left: 71%; margin-top: 5px;"/>
						</div>
					</form>
					<?php
					if (isset($_POST['Input'])){
						$get= array(
							'kode_penumpang' => $_POST['kode_penumpang1'],
							'id_rute' => $_POST['id_rute'],
							'sisa_seat' => $data['sisa_seat']
						);
						$getdata = http_build_query($get);
						for ($j=1; $j <= $jumlah; $j++){
							$nama_pemesan = $_POST['nama_pemesan'];
							$alamat = $_POST['alamat'];
							$telp = $_POST['telp'];
							$email = $_POST['email'];
							$kode_reservasi = $_POST['kode_reservasi'];
							$nama_penumpang = $_POST['nama_penumpang'.$j];
							$kode_penumpang = $_POST['kode_penumpang'.$j];
							$tittle = $_POST['tittle'.$j];
							$id_rute = $_POST['id_rute'];
							$sisakuota = $_POST['sisakuota'];
							$insert = mysqli_query($connect, "INSERT INTO costumer (nama_pemesan,alamat,telp,email,kode_reservasi,nama_penumpang,kode_penumpang,tittle,id_rute) VALUES ('$nama_pemesan','$alamat','$telp','$email','$kode_reservasi','$nama_penumpang','$kode_penumpang','$tittle','$id_rute')");
							$upd = mysqli_query($connect, "UPDATE rute SET sisa_seat='$sisakuota' WHERE id_rute='$id_rute'");
						}
					 header('location:pilih-kursi.php?'.$getdata);
					}
					?>

					<div class="clearfix"></div>
				</div>
			</div>

<!-- 
<div class="container">
	<div class="row">
		<div class="form-group">
			<label>Nama</label>
			<input type="" name="">
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<?php for ($jum=1; $jum <= $jumlah ; $jum++) { 
			?>
			<div class="col-lg-6">
				<div class="form-group">
					<input type="" name="">
				</div>
			</div>
		<?php }?>
	</div>
</div>
-->

