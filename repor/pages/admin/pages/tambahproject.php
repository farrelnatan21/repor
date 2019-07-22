<form name="form_mahasiwa" action="../../function/admin/createkonten.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="NIM">Id User</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan id user" name="id_user" required>
  </div>

  <div class="form-group">
    <label for="NIM">Nama</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan nama mahasiswa" name="nama" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama Topik</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan judul topik" name="topik" required>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
  </div>
  <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Date</label>
		                                            <input class="form-control" type="date" name="tanggal"  id="example-date-input">
		                                        </div>
  <div class="form-group">
    <label for="Alamat">Deskripsi</label>
    <textarea class="form-control" id="alamat" placeholder="masukan deskripsi dari project" name="deskripsi" required></textarea>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>