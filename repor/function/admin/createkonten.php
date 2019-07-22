<?php
include '../../config/koneksi.php';

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$topik = $_POST['topik'];
$tanggal = $_POST['tanggal'];
$gambar = $_FILES['gambar']['name'];
$keterangan = $_POST['keterangan'];
$deskripsi = $_POST['deskripsi'];
$koneksi->query("INSERT INTO konten(id_user,nama,topik,tanggal,gambar,keterangan,deskripsi) VALUES('$id_user','$nama','$topik','$tanggal','$gambar','$keterangan','$deskripsi')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'../user/images/'.$gambar);
header('location:../../pages/admin/?p=konten');
?>