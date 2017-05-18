<?php
  if(isset($_GET['id']) && isset($_GET['action'])){
    if($_GET['action'] == 'delete'){
      $id = $_GET['id'];
      //echo "<script>alert('$id')</script>";
      $query = "delete from barang where id = $id";
      $result = $db->query($query);
      if($result){
        echo "<script>alert('Data berhasil dihapus')</script>";
      }else{
        echo "<script>alert('Data Gagal dihapus')</script>";
      }
    }
  }
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
              <h3 class="box-title">Data Barang</h3>
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
                        <td class="id"><?php echo $row['id'];?></td>
                        <td class="nama"><?php echo $row['nama'];?></td>
                        <td class="deskripsi"><?php echo $row['deskripsi'];?></td>
                        <td class="stok"><?php echo $row['stok'];?></td>
                        <td class="created_at"><?php echo $row['created_at'];?></td>
                        <td class="updated_at"><?php echo $row['updated_at'];?></td>
                        <td align="center">
                          <button type="button" id="btn-edit" data-toggle="modal" data-target="#addBookDialog" data-id="<?php echo $row['id'];?>" title="Add this item" class="open-DialogBarang btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> 
                          <button type="button" onclick="window.location='<?php echo base_url();?>barang/delete/<?php echo $row['id']; ?>'" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> 
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
 
<div class="modal fade" id="addBookDialog" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
        <h3>Edit Barang</h3>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="<?php echo base_url(); ?>barang/edit" method="post">
            <input type="hidden" name="id" class="form-control" id="text-id" placeholder="Enter ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="deskripsi">Nama :</label>
              <div class="col-sm-10"> 
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="deskripsi">Deskripsi :</label>
              <div class="col-sm-10"> 
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Enter Deskripsi">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="stok">Stok : </label>
              <div class="col-sm-10"> 
                <input type="number" name="stok" class="form-control" id="stok" placeholder="Enter Stok">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>