<?php
  if(isset($_GET['id']) && isset($_GET['action'])){
    if($_GET['action'] == 'delete'){
      $id = $_GET['id'];
      //echo "<script>alert('$id')</script>";
      $query = "delete from user where id = $id";
      $result = $db->query($query);
      if($result){ ?>
        <script>swal('Deleted!', 'Berhasil menghapus data.', 'success' ); </script>
        <?php
      }else{ ?>
        <script>swal( 'Gagal!', 'Gagal menghapus data.', 'error' );</script>
        <?php
      }
    }
  }
  $result = $db->query("select * from user");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KTP</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>NO. TELEPON</th>
                        <th>USERNAME</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>KTP</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>NO. TELEPON</th>
                        <th>USERNAME</th>
                        <th>ACTION</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="id"><?php echo $row['id'];?></td>
                        <td class="ktp"><?php echo $row['ktp'];?></td>
                        <td class="nama"><?php echo $row['nama'];?></td>
                        <td class="email"><?php echo $row['email'];?></td>
                        <td class="alamat"><?php echo $row['alamat'];?></td>
                        <td class="telp"><?php echo $row['telp'];?></td>
                        <td class="username"><?php echo $row['username'];?></td>
                        <td align="cMasukkan">
                          <button type="button" id="btn-edit" data-toggle="modal" data-target="#addBookDialog" data-id="<?php echo $row['id'];?>" title="Add this item" class="open-DialogUser btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> 
                          <button type="button" onclick="deleteData(<?php echo $row['id'];?>);" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> 
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
        <h3>Edit User</h3>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="<?php echo base_url(); ?>user/edit" method="post">
            <input type="hidden" name="id" class="form-control" id="id" placeholder="Masukkan ID">
            <div class="form-group">
              <label class="control-label col-sm-3" for="ktp">KTP :</label>
              <div class="col-sm-8"> 
                <input type="text" name="ktp" class="form-control" id="ktp" placeholder="Masukkan KTP">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="nama">Nama :</label>
              <div class="col-sm-8"> 
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="email">Email :</label>
              <div class="col-sm-8"> 
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="alamat">Alamat :</label>
              <div class="col-sm-8"> 
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="telp">No. Telpon :</label>
              <div class="col-sm-8"> 
                <input type="number" name="telp" class="form-control" id="telp" placeholder="Masukkan No. Telpon">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">Username : </label>
              <div class="col-sm-8"> 
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">Password : </label>
              <div class="col-sm-8"> 
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password jika ingin mengganti">
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
<script type="text/javascript">
  function deleteData(id){
    //var id = $(this).closest('tr').children('td.id').text();
    // var id = $(this).data("id");
    // console.log(id);
    swal({
      title: 'Anda yakin ingin menghapus data ini?',
      text: "Anda tidak akan dapat mengembalikan data ini!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Iya, Hapus!'
    }).then(function () {
      window.location='<?php echo base_url();?>user/delete/' + id;
    });
  }
</script>