<?php 
require_once("koneksi.php") ;
session_start();
extract($_POST);
$query = "insert into mahasiswa(nama,nim,alamat) values('$nama','$nim','$alamat')";
// echo $query;
$action = $db->query($query);
if($action){
    echo "masuk";
    $_SESSION['msg'] = 'berhasil tambah data';
    header('location:/pemweb/');

}


?>