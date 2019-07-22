<?php 
// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$universitas = $_POST['universitas'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

// update data ke database
mysqli_query($koneksi,"update user set id_user='$id_user',nama='$nama', username='$username', universitas='$universitas', password='$password' where id='$id'");

header("location:../../pages/admin/?p=user");
 
?>