<?php

require_once __DIR__ . '/vendor/autoload.php';

require '../../config/koneksi.php';

$from=$_POST['from'];
$end=$_POST['end'];
$get=mysqli_query($koneksi,"SELECT * FROM konten where tanggal BETWEEN '$from' AND '$end' and topik='PCU'");
$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>';
while ($a=$get->fetch_assoc()){
	$html.='<center><h3 align="center">'.$a ['topik'] .'</h3></center>
	<center><img src="../../function/user/images/'. $a['gambar'].'" width="1080px" height="720px" alt=""></center>
	<h5 align="center">'. $a['keterangan'].'</h5>
	<h5 align="center">'. $a ['tanggal'].'</h5>
	<p>'. $a ['deskripsi'].'</p>';
}
$html.='</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('PCU.pdf',  \Mpdf\Output\Destination::INLINE);
?>