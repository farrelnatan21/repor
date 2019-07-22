<form name="form_mahasiwa" action="../../function/user/createkonten.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Nama</label>
    <input type="text" class="form-control" id="nim" placeholder="Nama  " name="nama" value="<?php echo $_SESSION['username']; ?>"uired>
  </div>

  <div class="form-group">
    <label for="Jurusan">Topik</label>
    <select name="topik" class="form-control" id="jurusan" name="topik" required>
    	<option value="kakipalsu">Kaki Palsu</option>
    	<option value="Tangan Mekanik metakarpal">Tangan Mekanik Metakarpal</option>
      <option value="Exo Skeleton Gen3">Exo Skeleton Generasi 3</option>
      <option value="Kaki Pelari">Kaki Pelari</option>
      <option value="Above Knee With Damper">Above Knee With Damper</option>
      <option value="Morfologi Scanning Kaki">Morfologi Scanning Kaki</option>
      <option value="PCU">PCU</option>
      <option value="Control Exo Skeleton">Control Exo Skeleton</option>
      <option value="Hydroxy Apatit">Hydroxy Apatit</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
  </div>
  <div class="form-group">
    <label for="Keterangan">Keterangan</label>
    <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan Gambar " name="keterangan" required>
  </div>
  <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Date</label>
		                                            <input class="form-control" type="date" name="tanggal" value="2011-08-19" id="example-date-input">
		                                        </div>
  <div class="form-group">
    <label for="Alamat">Deskripsi</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="deskripsi" required></textarea>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>