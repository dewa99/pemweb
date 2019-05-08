<?php 

	include "koneksi.php";

	$id = $_GET['id'];
	
	$city_name = $_POST['city_name'];
	$city_population = $_POST['city_population'];

	$query = "update city set city_name='{$city_name}' , city_population='{$city_population}' where city_id = '{$id}'";

	if ($koneksi->query($query)) {
		echo "berhasil update data";
		echo "<a href='index.php'>kembali ke home</a>";
	}else{
		echo "gagal update data";
		echo "<a href='index.php'>kembali ke home</a>";
	}
?>