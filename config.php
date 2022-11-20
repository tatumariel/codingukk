<?php

$host = "localhost";
$user = "root";
$password = "";
$nama_database = "ukk";

$db = mysqli_connect($host, $user, $password, $nama_database);

if( !$db ){ 
    die("gagal terhubung dengan database" . mysqli_connect_error());
}

?>