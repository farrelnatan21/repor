<?php

$id=['id'];
$sudah=$_POST['sudah'];
$belum=$_POST['belum'];

if(isset($_POST['sudah'])){

    $allowed = mysqli_query($koneksi," UPDATE users SET keterangan = 'sudah' WHERE id = '$id' ");

}

if(isset($_POST['belum'])){

    $notallowed = mysqli_query($koneksi," UPDATE users SET keterangan = 'belum' WHERE id = '$id' ");

}
?>  