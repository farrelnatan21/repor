<?php 
include '../../config/koneksi.php';
   $hapus=$koneksi->query("select*from konten where id='$_GET[id]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat gambar
    $hapus_gambar="../../function/user/images/$lokasi";
    // script delete gambar dari folder
    unlink($hapus_gambar);
    $koneksi->query("DELETE FROM konten WHERE id='$_GET[id]'");
    header('location:../../pages/admin/?p=konten');
?>