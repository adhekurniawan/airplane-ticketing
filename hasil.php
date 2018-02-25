
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


<section id="result" style="width: 100%;height: auto;padding: 50px 0px;">
  <div class="container">
    <div class="row">
     <?php
     if(isset($_GET['asal'])){
        $asal = $_GET['asal'];
        $tujuan = $_GET['tujuan'];
        $date = $_GET['date'];
        $jumlah = $_GET['jumlah'];}
        echo '<h2>'.$asal.' → '.$tujuan.'</h2>';
        echo '<p>Tanggal → '.$date.' <span style="margin:0px 20px;">|</span> '.$jumlah.' Orang</p>';
        ?>
      <div class="bar-title" style="display: flex;padding: 15px;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;margin-bottom: 5px;font-weight: 700;font-family: 'Proxima Nova'">
        <div class="bar-1" style="width: 30%">
          Airline
        </div>
        <div class="bar-1" style="width: 20%">
          Depart
        </div>
        <div class="bar-1" style="width: 15%">
          Arrive
        </div>
        <div class="bar-1" style="width: 20%">
          Duration
        </div>
        <div class="bar-1" style="width: 20%">
          Price per person
        </div>
      </div>
      <?php 
      if(isset($_GET['asal'])){
        $asal = $_GET['asal'];
        $tujuan = $_GET['tujuan'];
        $date = $_GET['date'];
        $jumlah = $_GET['jumlah'];
        $data = mysqli_query($connect,"SELECT * from rute,transportation where rute.id_transportation=transportation.id_transportation and rute.asal like '".$asal."' and rute.tujuan like '".$tujuan."' ");  
        while($var = mysqli_fetch_array($data)){
          $sampai = strtotime($var['sampai']);
          $waktu  = strtotime($var['waktu']);
          $lama   = $sampai - $waktu;
          ?>
          <div class="result-container" style="display: flex;width: 100%;height: auto;padding: 20px;border:1px solid #ddd;border-radius: 4px;margin-bottom: 5px;">
            <div class="logo-maskapai" style="width: 30%">
              <img src="assets/images/maskapai/<?php echo $var['logo_maskapai']; ?>" style="width: 120px;">
              <p style="padding-left: 20px;margin-top: 10px;font-family: 'Proxima Nova';"><?php echo $var['nama_pesawat']; ?> <?php echo '<span style="font-weight:bold;font-size:14px;color:#aaa;font-family:"Proxima Nova";">('.$var['kode'].')</span>'; ?></p>
            </div>
            <div class="detil-1" style="width: 15%">
              <p><?php echo $var['waktu']; ?></p>
              <p><?php echo $var['asal']; ?></p>
            </div>
            <div class="detil-2" style="width: 5%">
              <i class="icon-arrow-right"></i>
            </div>
            <div class="detil-3" style="width: 15%">
              <p><?php echo $var['sampai']; ?></p>
              <p><?php echo $var['tujuan']; ?></p>
            </div>
            <div class="detil-4" style="width: 20%">
              <p><?php echo gmdate('H',$lama)." jam " .gmdate("i", $lama) ?></p>
            </div>
            <div class="detil-5" style="width: 20%">
              <h3 style="font-weight: 700;color: #fa6d01">Rp. <?php echo $var['harga']; ?></h3>
              <?php echo '<a class="btn btn-primary" href="konfirmasi.php?id_rute='.$var['id_rute'].'&jumlah='.$jumlah.'">Booking</a>'; ?>
            </div>
          </div>
          <?php } ?>
          <?php 
        }

        ?>

      </div>
    </div>
  </section>

