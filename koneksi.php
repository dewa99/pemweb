<?php
$username = 'root';
$host = '127.0.0.1';
$password = '';
$dbname = 'pbw';


$db = new mysqli($host,$username,$password,$dbname);

if ($db->error)
    echo 'error';


?>
