<?php 
require_once("koneksi.php") ;
session_start();
extract($_POST);
$query = "update mahasiswa set nama='$nama',nim='$nim',alamat='$alamat' where nim='$id'";
// echo $query;
$action = $db->query($query);
if($action){
    echo "terupdate";
    $_SESSION['msg'] = 'berhasil update';
    header('location:/pemweb/');
}


?>