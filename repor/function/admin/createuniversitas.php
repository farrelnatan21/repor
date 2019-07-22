<?php
include '../../config/koneksi.php';

$kode_univ = $_POST['kode_univ'];
$nama_univ = $_POST['nama_univ'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$negara = $_POST['negara'];
$koneksi->query("INSERT INTO universitas(kode_univ,nama_univ,alamat,kota,provinsi,negara) 
VALUES('$kode_univ','$nama_univ','$alamat','$kota','$provinsi','$negara')");
header('location:../../pages/admin/?p=universitas');
?>