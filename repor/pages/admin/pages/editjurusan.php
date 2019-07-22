<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM jurusan where id='$_GET[id]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/updatejurusan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Kode Jurusan</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="Masukan Kode Jurusan" name="kode_jurusan" required value="<?php echo $e ['kode_jurusan'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama Jurusan</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Jurusan" name="nama_jurusan" required value="<?php echo $e ['nama_jurusan'];?>">
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>