<?php
    include "../../config/koneksi.php";
	$modal_id=$_GET['id'];
	$modal=mysqli_query($koneksi,"SELECT * FROM konten WHERE id='$id'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Menggunakan Modal Boostrap (popup)</h4>
        </div>

        <div class="modal-body">
        	<form action="../../function/editketerangan.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group">
    <label for="keterangan">Keterangan</label>
    <select name="keterangan" class="form-control" id="keterangan" name="keterangan" required>
    	<option value="<?php echo $r['keterangan'];?>"><?php echo $r['keterangan'];?></option>
    	<option value="Sudah Transfer">Sudah Transfer</option>
    	<option value="Belum Transfer">Belum Transfer</option>
    </select>
  </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>