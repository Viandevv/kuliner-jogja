<?php 
include 'koneksi.php';
 
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from user where email='$email' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:admin/index.html");
}else{
	header("location:index.html");	
}
 
?>