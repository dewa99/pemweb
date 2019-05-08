<?php 
	include 'koneksi.php';

	$query = "INSERT INTO city (city_name , city_population) VALUES('{$_POST['city_name']}','{$_POST['city_population']}')";

	if ($koneksi->query($query)) {
		echo "berhasil tambah data";
		echo "<a href='index.php'>kembali ke home</a>";
	}else{
		echo "Gagal tambah data";
		echo "<a href='index.php'>kembali ke home</a>";
	}

?>