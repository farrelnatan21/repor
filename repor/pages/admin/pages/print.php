
<?php include '../../../config/koneksi.php' ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Contoh report nantinya</h3>
        <div class="row">
          
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <?php $get=$koneksi->query("SELECT * FROM konten");?>
        <?php while ($a=$get->fetch_assoc()){?>
        <div class="row mt">
          <div class="col-md-12">
              <div class="thumbnail"></div>
              <center><h3><?php echo $a ['topik'];?></h3></center>
              <center><img src="../../../function/user/images/<?php echo $a['gambar']; ?>" width="1080px" height="720px" alt=""></center>
              <div class="caption">
                  <center><h5><?php echo $a ['tanggal'];?></h5></center>
                  <p><?php echo $a ['deskripsi']; ?></p>
              </div>
          </div>
        <?php }?>
          
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    