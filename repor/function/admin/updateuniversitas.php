<?php 
// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$koneksi->query("UPDATE universitas SET kode_univ    = '$_POST[kode_univ]',
                        nama_univ    = '$_POST[nama_univ]',
                        alamat = '$_POST[alamat]',
                        kota  = '$_POST[kota]',
                        provinsi  = '$_POST[provinsi]',
                        negara  = '$_POST[negara]'

                    WHERE id = '$_POST[id]'");
// mengalihkan halaman kembali ke index.php
header("location:../../pages/admin/?p=universitas");
 
?>