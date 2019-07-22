<?php 
include '../../config/koneksi.php';
  $gambar   = $_FILES['gambar']['name'];
  // Apabila gambar tidak diganti
  if (empty($gambar)){
    $mysqli->query("UPDATE konten SET id_user   = '$_post[id_user]',  
                        nama     = '$_POST[nama]',
                        topik    = '$_POST[topik]',
                        tanggal = '$_POST[tanggal]',
                        keterangan = '$_POST[keterangan]',
                        deskripsi  = '$_POST[deskripsi]'
                    WHERE id = '$_POST[id]'");
  }else{

    $hapus= $koneksi->query("select*from konten where id='$_POST[id]'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat foto
    $hapus_gambar="../../function/user/images/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'../../function/user/images/'.$gambar);
    $koneksi->query("UPDATE konten SET id_user   = '$_post[id_user]', 
                        nama     = '$_POST[nama]',
                        topik    = '$_POST[topik]',
                        tanggal = '$_POST[tanggal]',
                        deskripsi  = '$_POST[deskripsi]',
                        keterangan = '$_POST[keterangan]',
                        gambar  = '$gambar'
                    WHERE id = '$_POST[id]'");
  }
  header('location:../../pages/admin/?p=konten');
?>