<?php
include '../../config/koneksi.php';

$nama = $_POST['nama'];
$topik = $_POST['topik'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$jumlah_barang = $_POST['jumlah_barang'];
$harga_satuan = $_POST['harga_satuan'];
$harga_total = $_POST['harga_total'];
$nota = $_FILES['nota']['name'];
$koneksi->query("INSERT INTO t_kasir(nama, topik, tgl_transaksi, jumlah_barang, harga_satuan
,harga_total,nota) VALUES('$nama','$topik','$tgl_transaksi','$jumlah_barang','$harga_satuan','$harga_total','$nota')");
move_uploaded_file($_FILES['nota']['tmp_name'],'nota/'.$nota);
header('location:../../pages/user/?p=kasir');
?>