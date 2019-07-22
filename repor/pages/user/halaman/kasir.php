<form name="form_mahasiwa" action="../../function/user/createkasir.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Nama</label>
    <input type="text" class="form-control" id="nim" placeholder="Masukan nama Cabang" name="nama" value="<?php echo $_SESSION['username']; ?>" required>
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
		                                        	<label for="example-date-input" class="control-label">tanggal transaksi</label>
		                                            <input class="form-control" type="date" name="tgl_transaksi"  id="example-date-input">
		                                        </div>

  <div class="form-group">
    <label for="Nama">jumlah barang</label>
    <input type="text" class="form-control" id="jumlah_barang" placeholder="masukan nama universitas" name="jumlah_barang" onfocus="mulaiHitung()" onblur="berhentiHitung()" required>
  </div>

  <div class="form-group">
    <label for="Nama">harga satuan</label>
    <input type="text" class="form-control" id="harga_satuan" placeholder="masukan nama universitas" name="harga_satuan" onfocus="mulaiHitung()" onblur="berhentiHitung()" required>
  </div>

  <div class="form-group">
    <label for="Nama">harga total</label>
    <input type="text" class="form-control" id="harga_total" placeholder="masukan nama universitas" name="harga_total" required>
  </div>

  <div class="form-group">
    <label for="Gambar">nota</label>
    <input type="file" class="form-control" id="gambar" name="nota" required>
  </div>

  <div class="form-group">
    <label for="Jurusan">Topik</label>
    <select name="topik" class="form-control" id="jurusan" name="topik" required>
    	<option value="Sudah">Sudah Transfer</option>
    	<option value="Belum">Belum Transfer</option>
    </select>
  </div>
 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
  <script>
    function mulaiHitung() {
      Interval = setInterval("hitung()",1);
    }
    function hitung() {
      harga_satuan  = parseInt(document.getElementById("harga_satuan").value);
      jumlah_barang = parseInt(document.getElementById("jumlah_barang").value);
      harga_total   = harga_satuan * jumlah_barang;
      document.getElementById("harga_total").value = harga_total;
    }
    function berhentiHitung() {
      clearInterval(Interval);  
    }
  </script>
</form>