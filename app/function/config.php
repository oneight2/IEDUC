<?php
	define("BASE_URL", "http://ieducindonesia.com/");
	
	$server = "localhost";
	$username = "ieduacom_dbieduc";
	$password = "p[3US8-k22";
	$database = "ieduacom_dbieduc";

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");

	