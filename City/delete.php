<?php 

	include "koneksi.php";

	$id = $_GET['id'];
	
	$query = "delete from city where city_id = '{$id}'";

	if ($koneksi->query($query)) {
		echo "berhasil delete data";
		echo "<a href='index.php'>kembali ke home</a>";
	}else{
		echo "gagal delete data";
		echo "<a href='index.php'>kembali ke home</a>";
	}
?>