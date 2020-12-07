<?php
session_start();

if(!isset($_SESSION['user'])){
	echo '<script language="javascript">alert("Anda harus Login Terlebih Dahulu!"); document.location="login.php";</script>';
}
?>