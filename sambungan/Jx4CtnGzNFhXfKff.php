<?php

	header("Access-Control-Allow-Origin: *");

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "antrian";

	$koneksi = mysqli_connect($server,$user,$pass,$dbname);
 
	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

?>