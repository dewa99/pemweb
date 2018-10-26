<?php 

require_once('koneksi.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>tampil</title>
</head>
<body>

	<table>
		<thead>
			<th>nama</th>
			<th>nim</th>
			<th>alamat</th>
			<th>aksi</th>
		</thead>

		<tbody>

		<?php 
		$query = 'select * from mahasiswa';
		$data = $db->query($query);

		while ($row = $data->fetch_assoc()) {
           echo "<tr><td>".$row['nama']."</td><td>".$row['nim']."</td><td>".$row['alamat']."</td><td><a href='edit.php?nim=".$row['nim']."'>edit</a></td></tr>";
		}

		?>
		</tbody>
	</table>

</body>
</html>