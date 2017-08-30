<?php
session_start();
	if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
		echo"<script>alert('');window.location='index.php';</script>";
	}
?>