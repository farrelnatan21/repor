<?php 
	include '../../../config/koneksi.php';
	$id=$_GET["id"];

	$sql=$koneksi->query("UPDATE t_kasir SET keterangan='belum transfer' WHERE id='$id' ") or die(mysqli_error($koneksi));
	if ($sql) {
		echo "
			<script>
				alert ('update data berhasil');
				location='../../../pages/admin/index.php';
			</script>";
	}else{
		echo "
			<script>
				alert ('update data gagal');
				location='../../../pages/admin/index.php';
			</script>";
	}