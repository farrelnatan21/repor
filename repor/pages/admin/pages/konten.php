<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
        <div class="row">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Topik
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="?p=konten">Seluruh</a>
    <a class="dropdown-item" href="?p=kakipalsu">Kaki Palsu</a>
    <a class="dropdown-item" href="?p=tmm">Tangan Mekanik Metekarpal</a>
    <a class="dropdown-item" href="?p=esg3">Exo Skeleton Gen 3</a>
    <a class="dropdown-item" href="?p=kakipelari">Kaki Pelari</a>
    <a class="dropdown-item" href="?p=morfologi">Morfologi Scanning Kaki</a>
    <a class="dropdown-item" href="?p=pcu">PCU</a>
    <a class="dropdown-item" href="?p=ces">Control Exo Skeleton</a>
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
                <h4><i class="fa fa-angle-right"></i><a href="pages/pdfesg3.php" target="_blank"> CETAK</h4></a>
                <hr>
                <thead>
                  <tr>
                  <th>no</th>
                    <th>id user</th>
                    <th>nama</th>
                    <th>username</th>
                    <th>password</th>
                    <th>level</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM konten");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['id_user']; ?></td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['topik']; ?></td>
                    <td><?php echo $m['tanggal']; ?></td>
                    <td><img src="../../function/user/images/<?php echo $m['gambar'];?>" height="50"></td>
                    <td><?php echo $m['deskripsi']; ?></td>
                    <td>
                  
                    <a href="?p=editkonten&id=<?php echo $m['id'];?>"><i class="fa fa-pencil"></i></a>
                    <a href="../../function/admin/deletekonten.php?id=<?php echo $m['id'];?>"><i class="fa fa-trash-o "></i></button>
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