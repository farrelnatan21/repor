<?php
include '../../config/koneksi.php';

$tgL_input = date("Y-m-d H:i:s");
$cabang = $_POST['cabang'];
$universitas = $_POST['universitas'];
$pengguna = $_POST['pengguna'];
$no_kasir = $_POST['no_kasir'];
$tanggal = $_POST['tanggal'];
$akun = $_POST['akun'];
$keterangan = $_POST['keterangan'];
$debet = $_POST['debet'];
$kredit = $_POST['kredit'];
$status = $_POST['status'];
$jurusan = $_POST['kwitansi']['name'];
$koneksi->query("INSERT INTO kasir VALUES('','$tgL_input','$cabang','$universitas','$pengguna','$no_kasir','$tanggal','$akun','$keterangan','$debet','$kredit','$status,'$kwitansi')");
move_uploaded_file($_FILES['kwitansi']['tmp_name'],'../user/images/'.$kwitansi);
header('location:../../pages/admin/?p=kasir');
?>