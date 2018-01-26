<?php
//buat dulu skrip koneksi kedatabase
		require_once 'action/connect.php';
		if (isset($_POST['cari'])){ //Jika terpasang postingan dari "cari" maka
           $cari=$_POST['cari'];
           $cari=preg_replace("#[^a-z0-9]#i"," ", $cari);//fungsi ini untuk menghindari karakter selain dari huruf dan angka dengan mengubahnya menjadi spasi, misalkan karakter ' maka akan berubah menjadi space
           $data_pencarian=$connect->query("SELECT * FROM customer WHERE nama LIKE '%$search%' ");
           foreach($data_pencarian as $result){
           echo $result['nama']."<br />";


          }
          }else{}
?>