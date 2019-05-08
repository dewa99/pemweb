<?php 
	include 'koneksi.php';

	//query 
	$query = "SELECT * FROM city";
	//eksekusi query
	$data = $koneksi->query($query);
?>	
	<a href="tambah.php">Tambah data</a>
	<form action="delete_batch.php" method="post">
	<table border="1">
		<?php 
			while($row = $data->fetch_assoc()):
		?>
		<tr>	
			<td><?= $row['city_id'] ?></td>
			<td><?= $row['city_name'] ?></td>
			<td><?= $row['city_population'] ?></td>
			<td><a href="edit.php?id=<?= $row['city_id'] ?>">Edit</a></td>
			<td><a href="delete.php?id=<?= $row['city_id'] ?>">Delete</a></td>
			<td><input type="checkbox" value="<?= $row['city_id'] ?>" name="dellist[]"></td>
		</tr>
		<?php 
			endwhile;
		?>
	</table>
	<input type="submit" name="delete" value="delete">
	</form>