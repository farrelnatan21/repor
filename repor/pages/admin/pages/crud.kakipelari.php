<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Laporan Pengadaan Barang</h3>
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
<form action="" method="post">
<input type="date" name="txtStartDate">
<input type="date" name="txtEndDate">
<button type="submit" class="btn btn-primary">Cari</button>
</form>   
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i><a href="pages/pdfkakipelari.php" target="_blank"> CETAK</h4></a>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Company</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th><i class="fa fa-bookmark"></i> Profit</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            if (isset($_POST['search'])) {
            $startdate=$_POST['startdate'];
            $enddate=$_POST['enddate'];
            $data=$koneksi->query("SELECT * FROM konten where topik='Morfologi Scanning Kaki' and tanggal between '$startdate' and 
            '$enddate'");
            $count=mysqli_num_rows($data);
            }
            if ($count == "0") {
              echo'<h2> silahkan select tanggal terlebih dahulu bila belum tampil maka data tidak ada </h2>';
            }
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
                    <td><img src="../../function/user/images/<?php echo $m['gambar'];?>" height="50"></td>
                    <td><?php echo $m['keterangan'];?></td>
                    <td><?php echo $m['deskripsi']; ?></td>
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
    