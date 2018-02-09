<?php 

session_start();
if($_SESSION['traveler']){
	?>

	<?php 
	require_once '../../action/connect.php';
	if(isset($_GET['aksi']) == 'delete'){
		$ambilid = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * from customer where id='$ambilid'");
		if(mysqli_num_rows($cek) == 0){
			echo '<div class="alert alert-info-alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
		} else {
			$delete = mysqli_query($connect, "DELETE from customer where id='$ambilid'");
			if($delete){
				echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>';
				header('location:data-customer.php');
			} else {
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
			}
		}
	}
	?>
	<?php 
} else {
	echo "<script>window.location='../login.php';</script>";
}