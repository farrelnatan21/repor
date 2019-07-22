<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM jurusan where id='$_GET[id]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/updatejurusan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Kode Jurusan</label>
    <input type="text" class="form-control" id="nim" placeholder="Nomor Indux Mahasiswa" name="kode_jurusan" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama Jursan</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_jurusan" required>
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>