<?php 

require_once('koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>tampil</title>
</head>
<body>
	<a href="form.php">tambah dong</a>
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
           echo "<tr><td>".$row['nama']."</td><td>".$row['nim']."</td><td>".$row['alamat']."</td><td><a href='edit.php?nim=".$row['nim']."'>edit</a><td><a href='delete.php?nim=".$row['nim']."'>delete</a></td></tr>";
		}

		?>
		</tbody>
	</table>
	<script>
		<?php 
			if (isset($_SESSION['msg'])) {
			?>

			alert('<?= $_SESSION['msg'] ?>');
		<?php
				unset($_SESSION['msg']);
			}
		?>
	</script>
</body>
</html>