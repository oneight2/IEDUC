<?php
	define("BASE_URL", "http://localhost/ieduc/admin/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "db_ieduc";

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");

	