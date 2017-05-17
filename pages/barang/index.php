<?php
  $result = $db->query("select * from barang");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>DESKRIPSI</th>
                        <th>STOK</th>
                        <th>DIBUAT PADA</th>
                        <th>DIUBAH PADA</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>NAMA BARANG</th>
                        <th>DESKRIPSI</th>
                        <th>STOK</th>
                        <th>DIBUAT PADA</th>
                        <th>DIUBAH PADA</th>
                        <th>ACTION</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['deskripsi'];?></td>
                        <td><?php echo $row['stok'];?></td>
                        <td><?php echo $row['created_at'];?></td>
                        <td><?php echo $row['updated_at'];?></td>
                        <td align="center">
                        <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button> 
                          <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> 
                          <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> 
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
