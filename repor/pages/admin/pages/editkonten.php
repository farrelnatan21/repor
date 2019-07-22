<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM konten where id='$_GET[id]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/updatekonten.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="NIM">Id User</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="Masukan Id user" name="id_user" required value="<?php echo $e ['id_user'];?>">
  </div>

  <div class="form-group">
    <label for="NIM">Nama</label>
    <input type="text" class="form-control" id="nim" placeholder="Masukan Nama Anda" name="nama" required value="<?php echo $e ['nama'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama Topik</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukan Topik" name="topik" required value="<?php echo $e ['topik'];?>">
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
    <span><?php echo $e['gambar'];?></span>
  </div>
  <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Date</label>
		                                            <input class="form-control" type="date" name="tanggal" value="<?php echo $e['tanggal']; ?>" id="example-date-input">
		                                        </div>
  <div class="form-group">
    <label for="Alamat">Deskripsi</label>
    <textarea class="form-control" id="alamat" placeholder="Masukan Deskripsi" name="deskripsi" required ><?php echo $e['deskripsi'];?>"</textarea>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>