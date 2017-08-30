<?php
include '../config/koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$cek = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");

if($cek->num_rows >0)
{
	session_start();

	$r = $cek->fetch_array();
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	echo"<script>alert('sukses');window.location='../dashboard.php';</script>";
}else{
	echo"<script>alert('gagal');window.location='../index.php';</script>";
}
?>