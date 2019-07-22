<?php
include '../../config/koneksi.php';

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$universitas = $_POST['universitas'];
$password = md5($_POST['password']);
$level = $_POST['level'];
mysqli_query($koneksi,"insert into user values('','$id_user','$nama','$universitas','$username','$password','$level')");
header('location:../../pages/admin/?p=user');
?>