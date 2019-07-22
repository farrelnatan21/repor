<?php 
// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$koneksi->query("UPDATE jurusan SET kode_jurusan     = '$_POST[kode_jurusan]',
                        nama_jurusan    = '$_POST[nama_jurusan]'
                    WHERE id = '$_POST[id]'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../pages/admin/?p=kejuruan");
 
?>