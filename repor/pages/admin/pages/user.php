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
                <a href="?p=tambahuser"><button type="submit" class="btn btn-success">Tambah Data</button><a>
                <hr>
                <thead>
                  <tr>
                    <th>no</th>
                    <th>id user</th>
                    <th>nama</th>
                    <th>universitas</th>
                    <th>username</th>
                    <th>password</th>
                    <th>level</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <?php
                include '../../config/koneksi.php';
                
            $no = 0;
            $data=$koneksi->query("SELECT * FROM user");
            while($m=mysqli_fetch_array($data)){
            $no++;    
          ?>  
                <tbody>
                  <tr>
                    <td scope="row"><?php echo $no;?></a>
                    </td>
                    <td><?php echo $m['id_user'];?></td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['universitas']; ?></td>
                    <td><?php echo $m['username']; ?></td>
                    <td><?php echo $m['password']; ?></td>
                    <td><?php echo $m['level']; ?></td>
                    <td>
                    <a href="?p=edituser&id=<?php echo $m['id'];?>"><i class="fa fa-pencil"></i></a>
                    <a href="../../function/admin/deleteuser.php?id=<?php echo $m['id'];?>"><i class="fa fa-trash-o "></i></button>
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