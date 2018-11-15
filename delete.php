<?php 
require_once("koneksi.php") ;
session_start();

$id = $_GET['nim'];
$query = "delete from mahasiswa where nim='$id'";
// echo $query;
$action = $db->query($query);
if($action){
    echo "terupdate";
    $_SESSION['msg'] = 'berhasil delete';
    header('location:/pemweb/');
}


?>