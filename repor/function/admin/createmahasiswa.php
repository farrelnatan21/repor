<?php
include '../../config/koneksi.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat_ktp = $_POST['alamat_ktp'];
$no_hp = $_POST['no_hp'];
$nim = $_POST['nim'];
$koneksi->query("INSERT INTO mahasiswa(id_mahasiswa,nama,jk,tanggal_lahir,tempat_lahir,alamat_ktp,no_hp,nim) 
VALUES('$id_mahasiswa','$nama','$jk','$tanggal_lahir','$tempat_lahir','$alamat_ktp','$no_hp','$nim')");
header('location:../../pages/admin/?p=mahasiswa');
?>