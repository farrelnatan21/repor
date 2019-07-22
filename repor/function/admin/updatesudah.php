<?php 
// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$koneksi->query("UPDATE konten SET keterangan    = 'sudah'

                    WHERE id = '$_POST[id]'");
// mengalihkan halaman kembali ke index.php
header("location:../../pages/admin/?p=kasir");
 
?>