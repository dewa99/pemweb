<?php 

	include "koneksi.php";
	$id  = implode(',', $_POST['dellist']);

	$query = "delete from city where city_id in ({$id})";
	
	if ($koneksi->query($query)) {
		echo "berhasil delete data";
		echo "<a href='index.php'>kembali ke home</a>";
	}else{
		echo "gagal delete data";
		echo "<a href='index.php'>kembali ke home</a>";
	}
	
?>