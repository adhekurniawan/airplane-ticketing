<?php  
	$localhost	= "localhost";
	$username	= "root";
	$password	= "";
	$dbname		= "travel";

	//buat koneksi
	$connect = new mysqli($localhost,$username,$password,$dbname);

	//cek koneksi
	if ($connect->connect_error) {
		die("gagal terkoneksi :" .$connect->connect_error);
	} else{
		//echo "berhasil terkoneksi";
	}
?>