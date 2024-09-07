<?php
    $host = "localhost";
    $username = "root";
    $password = ""; 
    $database = "form";

$koneksi = new mysqli($host, $username, $password, $database);
if(!$koneksi){
    die("Koneksi gagal: ".mysqli_connect_error());
}
echo "Koneksi berhasil";
?>