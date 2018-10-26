<?php 
require_once('koneksi.php'); 

$nim = $_GET['nim'];
$query = "select *from mahasiswa where nim='".$nim."'";
$data = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  	<?php while($row = $data->fetch_assoc()){ ?>
    <form class="" action="update.php" method="post">
      <input type="text" name="nama" value="<?=$row['nama']?>">
      <input type="text" name="nim" value="<?=$row['nim']?>">
      <textarea name="alamat" id="" cols="30" rows="10"><?=$row['alamat']?></textarea>
      <input type="hidden" name="id" value="<?=$nim?>">
      <input type="submit" name="submit" value="submit">
    </form>
	<?php } ?>
  </body>
</html>
