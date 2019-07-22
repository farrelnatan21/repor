<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM mahasiswa where id='$_GET[id]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/updatemahasiswa.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">id mahasiswa</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="masukan id mahasiswa" name="id_mahasiswa" required value="<?php echo $e ['id_mahasiswa'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama anda" name="nama" required value="<?php echo $e ['nama'];?>">
  </div>

  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
    	<option value="<?php echo $e['jurusan'];?>"><?php echo $e['jurusan'];?></option>
    	<option value="Teknik Mesin Undip">Teknik Mesin Undip</option>
    	<option value="Teknik Mesin Unnes">Teknik Mesin Unnes</option>
    </select>
  </div>

 

  <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Date</label>
		                                            <input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $e['tanggal_lahir']; ?>" id="example-date-input">
                                            </div>
                                            <div class="form-group">
    <label for="Jk">Jenis kelamin</label>
    <select name="jk" class="form-control" id="jk" name="jk" required>
    	<option value="<?php echo $e['jk'];?>"><?php echo $e['jk'];?></option>
    	<option value="Pria">Pria</option>
    	<option value="Wanita">Wanita</option>
    </select>
  </div>
                                            <div class="form-group">
    <label for="Nama">Tempat Lahir</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="tempat_lahir" required value="<?php echo $e ['tempat_lahir'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Alamat KTP</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="alamat_ktp" required value="<?php echo $e ['alamat_ktp'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nomor HP</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="no_hp" required value="<?php echo $e ['no_hp'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">NIM</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nim" required value="<?php echo $e ['nama'];?>">
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>