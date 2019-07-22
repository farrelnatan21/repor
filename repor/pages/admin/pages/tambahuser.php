<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->

<form name="form_mahasiwa" action="../../function/admin/createuser.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="NIM">Id User</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan id user" name="id_user" required>
  </div>

<div class="form-group">
    <label for="NIM">Nama User</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan nama user" name="nama" required>
  </div>

  <div class="form-group">
    <label for="NIM">Universitas</label>
    <input type="text" class="form-control" id="nim" placeholder="masukan nama user" name="universitas" required>
  </div>

  <div class="form-group">
    <label for="Nama">Username</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan username" name="username" required>
  </div>

  <div class="form-group">
    <label for="Nama">Password</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan password" name="password" required>
  </div>
  
  <div class="form-group">
    <label for="Nama">Level</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan level" name="level" required>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>