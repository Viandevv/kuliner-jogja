<?php 
include '../koneksi.php';
 
session_start();
 
if($_SESSION['status'] !="login"){
	header("location:../index.html");
}
 
echo "Hai, selamat datang ". $_SESSION['email'];
 
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>