<?php
include '../../config/koneksi.php';

$nama = $_POST['nama'];
$topik = $_POST['topik'];
$tanggal = $_POST['tanggal'];
$gambar = $_FILES['gambar']['name'];
$keterangan = $_POST['keterangan'];
$deskripsi = $_POST['deskripsi'];
$koneksi->query("INSERT INTO konten(nama,topik,tanggal,gambar,keterangan,deskripsi) VALUES('$nama','$topik','$tanggal','$gambar','$keterangan','$deskripsi')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:../../pages/user/?p=home');
?>