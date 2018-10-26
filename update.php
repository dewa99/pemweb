<?php 
require_once("koneksi.php") ;

extract($_POST);
$query = "update mahasiswa set nama='$nama',nim='$nim',alamat='$alamat' where nim='$id'";
// echo $query;
$action = $db->query($query);
if($action){
    echo "terupdate";
    header('location:/pbw/');
}


?>