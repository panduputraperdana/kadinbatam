<?php 
	// Localhost
	$server = "localhost";
	$user= "root";
	$password="";
	$db_name ="kadinbatam";

	$con = mysqli_connect($server,$user,$password,$db_name);
	if(!$con)
	{
		die("Connection failed! :" . mysqli_connect_error());
	}

	$baseUrl = "http://localhost/kadinbatam";
	if ($_SERVER['SERVER_NAME'] == 'localhost') {
		$baseUrl = "http://localhost/kadinbatam";
	} else {
		$baseUrl = $_SERVER["HTTP_ORIGIN"];
	}
 ?>