<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Transaksi.xls");
	?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>TRANSAKSI</h3>
        <div class="row">
          
          
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>topik</th>
                    <th>tanggal transaksi</th>
                    <th>jumlah barang</th>
                    <th>harga satuan</th>
                    <th>harga total</th>
                    <th>nota</th>
                  </tr>
                </thead>
                <?php
                include '../../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM t_kasir");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['topik']; ?></td>
                    <td><?php echo $m['tgl_transaksi']; ?></td>
                    <td><?php echo $m['jumlah_barang'];?></td>
                    <td><?php echo $m['harga_satuan'];?></td>
                    <td><?php echo $m['harga_total'];?></td>
                  </tr>
                 <?php
        }
                 ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    