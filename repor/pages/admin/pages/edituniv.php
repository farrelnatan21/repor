<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM universitas where id='$_GET[id]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/updateuniversitas.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Kode Universitas</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="Nomor Indux Mahasiswa" name="kode_univ" required value="<?php echo $e ['kode_univ'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama Universitas</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_univ" required value="<?php echo $e ['nama_univ'];?>">
  </div>

  <div class="form-group"> 
    <label for="Alamat">Alamat Universitas</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required value="<?php echo $e['alamat'];?>"></textarea>
  </div>
 
                                            
                                            

  <div class="form-group">
    <label for="Nama">Kota</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="kota" required value="<?php echo $e ['kota'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Provinsi</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="provinsi" required value="<?php echo $e ['provinsi'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Negara</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="negara" required value="<?php echo $e ['negara'];?>">
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>