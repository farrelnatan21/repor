<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>TRANSAKSI</h3>
        <div class="row">
          
          
          <!-- /col-md-12 -->
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
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                
                <form action="cetakmorfologi.php" method="post">
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
<form action="pages/cetakmorfologi.php" method="post">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <label class="control-label">Star Date</label>
        <input type="date" name="from" id="stayf"  class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label">End Date</label>
        <input type="date" name="end" id="stayf"  class="form-control">
    </div>         
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" name="submit" value="proses" onclick="return valid();">Print</button>
      </div>
    </div>
  </div>
</div>              
</form>
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
            $data=$koneksi->query("SELECT * FROM konten where topik='Morfologi Scanning Kaki'");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['topik']; ?></td>
                    <td><?php echo $m['tanggal']; ?></td>
                    <td><?php echo $m['keterangan'];?></td>
                    <td><?php echo $m['deskripsi'];?></td>
                    <td><img src="../../function/user/images/<?php echo $m['nota'];?>" height="50"></td>
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
    