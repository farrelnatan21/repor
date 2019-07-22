<form name="form_mahasiwa" action="../../function/admin/createmahasiswa.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">id mahasiswa</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan id mahasiswa" name="id_mahasiswa" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama mahasiswa" name="nama" required>
  </div>

  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
    	<option value="Teknik Mesin Undip">Teknik Mesin Undip</option>
    	<option value="Teknik Mesin Unnes">Teknik Mesin Unnes</option>
    </select>
  </div>

 

  <div class="form-group">
  <label for="Jurusan">Tanggal Lahir</label>
		                                        	<label for="example-date-input" class="control-label">Date</label>
		                                            <input class="form-control" type="date" name="tanggal_lahir" id="example-date-input">
                                            </div>
                                            <div class="form-group">
    <label for="Jk">Jurusan</label>
    <select name="jk" class="form-control" id="jk" name="jk" required>
    	<option value="Pria">Pria</option>
    	<option value="Wanita">Wanita</option>
    </select>
  </div>
                                            <div class="form-group">
    <label for="Nama">Tempat Lahir</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="tempat_lahir" required>
  </div>

  <div class="form-group">
    <label for="Nama">Alamat KTP</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="alamat_ktp" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nomor HP</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="no_hp" required>
  </div>

  <div class="form-group">
    <label for="Nama">NIM</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nim" required>
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>