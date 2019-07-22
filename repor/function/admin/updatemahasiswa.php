<?php 
// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$koneksi->query("UPDATE mahasiswa SET id_mahasiswa     = '$_POST[id_mahasiswa]',
                        nama    = '$_POST[nama]',
                        jurusan = '$_POST[jurusan]',
                        jk  = '$_POST[jk]',
                        tanggal_lahir  = '$_POST[tanggal_lahir]',
                        tempat_lahir  = '$_POST[tempat_lahir]',
                        alamat_ktp  = '$_POST[alamat_ktp]',
                        no_hp  = '$_POST[no_hp]',
                        nim  = '$_POST[nim]'

                    WHERE id = '$_POST[id]'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../pages/admin/?p=mahasiswa");
 
?>