<?php 
	include 'koneksi.php';
	// query
	$query = "SELECT * from city where city_id = '{$_GET['id']}'";
	// eksekusi
	$data = $koneksi->query($query);
	// sql result object -> array
	$data = $data->fetch_assoc();
?>

<h4>Edit data City id: <?= $_GET['id'] ?></h4>
<form action="proses_update.php?id=<?= $_GET['id'] ?>" method="post">

	<input type="text" name="city_name" placeholder="nama" value="<?= $data['city_name'] ?>">
	<br>	
	<input type="number" name="city_population" placeholder="populasi" value="<?= $data['city_population'] ?>">
	<br>	
	<input type="submit" name="submit" value="Update">
	
</form>