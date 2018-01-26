<?php 
session_start();
unset($_SESSION['traveler']);
echo "<script>window.location = '../login.php';</script>";
session_destroy();
 ?>