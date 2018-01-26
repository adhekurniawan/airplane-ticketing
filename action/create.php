<?php 
require_once 'connect.php';

if ($_POST) {
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$asal	= $_POST['asal'];
	$tujuan	= $_POST['tujuan'];
	$dewasa	= $_POST['dewasa'];
	$anak	= $_POST['anak'];
	$telp	= $_POST['telp'];
	$alamat	= $_POST['alamat'];
	$jenkel	= $_POST['jenkel'];

	$sql = "INSERT INTO customer (nama, alamat, telp, dewasa, anak, jenkel, asal, tujuan, seat) VALUES ( '$nama', '$alamat', '$telp', '$dewasa', '$anak', '$jenkel', '$asal', '$tujuan', '$seat')";
	if ($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>

<?php header('location: ../booking.php') ?>