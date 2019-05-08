<?php
	$username = "root";
	$password = "";
	$host = "127.0.0.1";
	$database = "wilayah";

	$koneksi = new mysqli($host,$username,$password, $database);

	if ($koneksi->error) {
		echo "gagal koneksi";
	}
?>