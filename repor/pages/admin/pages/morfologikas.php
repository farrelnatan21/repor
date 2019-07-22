<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>TRANSAKSI</h3>
        <div class="row">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Topik
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="?p=kasir">Seluruh</a>
    <a class="dropdown-item" href="?p=kakipalsukas">Kaki Palsu</a>
    <a class="dropdown-item" href="?p=tmmkas">Tangan Mekanik Metekarpal</a>
    <a class="dropdown-item" href="?p=esg3kas">Exo Skeleton Gen 3</a>
    <a class="dropdown-item" href="?p=kakipelarikas">Kaki Pelari</a>
    <a class="dropdown-item" href="?p=morfologikas">Morfologi Scanning Kaki</a>
    <a class="dropdown-item" href="?p=pcukas">PCU</a>
    <a class="dropdown-item" href="?p=ceskas">Control Exo Skeleton</a>
  </div>
</div>
          
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i><a href="pages/kasirexcel.php" target="_blank"> CETAK EXCEL</h4></a>
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
                    <th>aksi</th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM t_kasir where topik='Above Knee with Damper'");
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
                    <td><img src="../../function/user/nota/<?php echo $m['nota'];?>" height="50"></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
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
    