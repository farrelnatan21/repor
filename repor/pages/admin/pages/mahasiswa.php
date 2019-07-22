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
                <a href="?p=tambahmahasiswa"><button type="submit" class="btn btn-success">Tambah Data</button><a>
                <hr>
                <thead>
                  <tr>
                  <th>no</th>
                    <th>id mahasiswa</th>
                    <th>nama mahasiswa</th>
                    <th>jenis kelamin</th>
                    <th>jurusan</th>
                    <th>tanggal lahir</th>
                    <th>tempat lahir</th>
                    <th>alamat ktp</th>
                    <th>nomor hp</th>
                    <th>nim</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM mahasiswa");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['id_mahasiswa']; ?></td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['jk']; ?></td>
                    <td><?php echo $m['jurusan']; ?></td>
                    <td><?php echo $m['tanggal_lahir']; ?></td>
                    <td><?php echo $m['tempat_lahir']; ?></td>
                    <td><?php echo $m['alamat_ktp']; ?></td>
                    <td><?php echo $m['no_hp']; ?></td>
                    <td><?php echo $m['nim']; ?></td>
                    <td>
                    <button type="button" class="btn btn-outline-primary"><a href="?p=editmahasiswa&id=<?php echo $m['id'];?>"><i class="fa fa-pencil">EDIT</i></a></button>
                    <button type="button" class="btn btn-outline-secondary"><a href="../../function/admin/deletemahasiswa.php?id=<?php echo $m['id'];?>"><i class="fa fa-trash-o ">DELETE</i></button>
                    
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