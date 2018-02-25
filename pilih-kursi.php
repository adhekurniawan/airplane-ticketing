
<?php require_once 'action/connect.php'; 
				ob_start();
				 ?>

<?php require_once 'page/header.php' ?>

<style type="text/css">
<style type="text/css">
p{
	padding-left: 5px;
}
.customer-color{
	width: 15px;
	height: 15px;
	background-color:#61667d;
	cursor:pointer;
}
.customer-selected{
	background-color:#FFF;
}
/* seat */
.seat{
	background-color:#f2f2f2;
	padding:5px;
	overflow: hidden;
}
.seat-id{
	height: 46px;
	width: 46px;
	margin:2px;
	background-color: #bfbfbf;
	float: left;
	cursor: pointer;
}
.seat-id > p{
	text-align: center;
}
.seat-notavailabe{
	background-color: #dc352f;
	/* cursor:disabl */
}
.seat-selected{
	background-color: #61667d;
}
</style>

</style>

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
				<div class="kbreadcum">
					<form method="POST">
						<?php
						$kode_penumpang = $_GET['kode_penumpang'];
						$datapenumpang = mysqli_query($connect, "SELECT * FROM costumer WHERE kode_penumpang='$kode_penumpang'");
						$ddd = mysqli_fetch_array($datapenumpang);
						$kode = $ddd['kode_reservasi'];
						$jml = $data['seat_qty'];
						$costumer = mysqli_query($connect,"SELECT * FROM costumer WHERE kode_reservasi='$kode'"); 
						$jumlah_cos = mysqli_num_rows($costumer);
						$count = 0;
						if(isset($_POST['submit'])){
							$kursi = $_POST['kursi'];
							foreach ($costumer as $cus) {
								$connect->query("UPDATE costumer SET kode_kursi='$kursi[$count]' WHERE kode_reservasi='$kode' AND id_costumer = '$cus[id_costumer]'");
								$count++;
							}
							header('location:cek-pesanan.php?'.$getdata);
						} 
						?>
						<?php
						for ($i=1; $i <= $jumlah_cos ; $i++) { 

							?>
							<div class="customer-name">
								<table>
									<td>
										<div onclick="pget(this.id)" id="p<?php echo $i;?>" class="customer-color id-1"></div>
									</td>
									<div class="form-group">
										<td>
											<span>Penumpang<?php echo $i; ?></span>
										</td>
										<td>
											<input id="i<?php echo $i ?>" type="text" name="kursi[]">
										</td>
									</div>
								</table>
							</div>
							<?php
						}
						?>

						<?php
						$apa = [];
						$sss = mysqli_query($connect, "SELECT * FROM costumer WHERE id_rute =".$id_rute."");
						while ($bb = mysqli_fetch_assoc($sss)) {
							$apa[]=$bb['kode_kursi'];
						}
						?>
						<div class="seat">
							<?php
							for ($i=1; $i <= $jml ; $i++) { 
								if (in_array($i, $apa)) {
								# code...

									?>


									<div id="<?php echo $i; ?>" class="seat-id seat-notavailabe"><p><?php echo $i; ?></p></div>
									<?php
								}
								else{
									?>
									<div onclick="sget(this.id)" id="<?php echo $i; ?>" class="seat-id"><p><?php echo $i; ?></p></div>

									<?php
								}
							} 
							?>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="date_btn col-md-12">
						<input type="submit" class="btn btn-primary" name="submit" value="Selanjutnya" style="border-radius: 0px; float: right;">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<script>

	function pget(id){
		seat.p = id;
		$('.customer-color').removeClass("customer-selected");
		$('#'+id).addClass("customer-selected");
	}
	function sget(id){
		seat.selectSeat(id);
	}

	var seat = {
		p:'',
		pn:function(id){
			pn = id.replace('p', '');
			return pn;
		},
		selectSeat: function(id) {
			if ($('#' + id).attr('class') == 'seat-id') {

				if($('#i'+this.pn(this.p)).val() == ''){
					$('#' + id).addClass("seat-selected");
                         // console.log(this.pn(this.p));
                         $('#i'+this.pn(this.p)).val(id);
                         $('#'+id).addClass('seat-for-'+this.p);
                     }


                 } else {
                 	cSeat = $('#' + id).attr('class');
                 	cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p','');
                 	$('#' + id).removeClass("seat-selected");
                 	$('#'+id).removeClass(cSeat.replace('seat-id ',''));
                 	$('#i'+cSeatoc).val(''); 


                 }
                //    console.log($('#'+id).attr('class'));
            }
        }



    </script>

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="Rounded_Rectangle_6"></div>
    		</div>
    	</div>
    </div>


    <?php 	require_once 'page/footer.php' ?>