<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
        <div class="row">
          
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                <a href="?p=tambahuniversitas"><button type="submit" class="btn btn-success">Tambah Data</button><a>
                <hr>
                <thead>
                  <tr>
                    <th>no</th>
                    <th>kode universitas</th>
                    <th>nama universitas </th>
                    <th>alamat</th>
                    <th>kota</th>
                    <th>provinsi</th>
                    <th>negara</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM universitas");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['kode_univ']; ?></td>
                    <td><?php echo $m['nama_univ']; ?></td>
                    <td><?php echo $m['alamat']; ?></td>
                    <td><?php echo $m['kota']; ?></td>
                    <td><?php echo $m['provinsi']; ?></td>
                    <td><?php echo $m['negara']; ?></td>
                    <td>
                    <button type="button" class="btn btn-outline-primary"><a href="?p=edituniva&id=<?php echo $m['id'];?>"><i class="fa fa-pencil">EDIT</i></a></button>
                    <button type="button" class="btn btn-outline-secondary"><a href="../../function/admin/deleteuniversitas.php?id=<?php echo $m['id'];?>"><i class="fa fa-trash-o ">DELETE</i></button>
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