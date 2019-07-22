<form name="form_mahasiwa" action="../../function/admin/createjurusan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Kode Jurusan</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan kode jurusan" name="kode_jurusan" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama Jursan</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama jurusan" name="nama_jurusan" required>
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>