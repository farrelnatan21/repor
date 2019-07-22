<?php
include '../../config/koneksi.php';

$kode_jurusan = $_POST['kode_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];
$koneksi->query("INSERT INTO jurusan(kode_jurusan,nama_jurusan) VALUES('$kode_jurusan','$nama_jurusan')");
header('location:../../pages/admin/?p=kejuruan');
?>