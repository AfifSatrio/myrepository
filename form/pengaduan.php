<?php
require 'koneksi/koneksi.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pengaduan = $_POST['pengaduan'];

$query_sql ="INSERT INTO form_pengaduan (nama, nim, jurusan, jenis_kelamin, pengaduan)
             VALUES ('$nama','$nim','$jurusan','$jenis_kelamin','$pengaduan')";

if (mysqli_query($koneksi, $query_sql)) {
header("Location: index.php?success=true");
exit;
}
?>