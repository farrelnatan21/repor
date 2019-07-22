<form name="form_mahasiwa" action="../../function/admin/createuniversitas.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Kode Universitas</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan kode universitas" name="kode_univ" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama Universitas</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama universitas" name="nama_univ" required>
  </div>

  <div class="form-group"> 
    <label for="Alamat">Alamat Universitas</label>
    <textarea class="form-control" id="alamat" placeholder="masukan nama universitas" name="alamat" required></textarea>
  </div>
 
                                            
                                            

  <div class="form-group">
    <label for="Nama">Kota</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan kota universitas" name="kota" required>
  </div>

  <div class="form-group">
    <label for="Nama">Provinsi</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan provinsi universitas" name="provinsi" required>
  </div>

  <div class="form-group">
    <label for="Nama">Negara</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan negara universitas" name="negara" required>
  </div>

  
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>