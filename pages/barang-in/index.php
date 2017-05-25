<?php
  if(isset($_GET['id']) && isset($_GET['action'])){
    if($_GET['action'] == 'delete'){
      $id = $_GET['id'];
      //echo "<script>alert('$id')</script>";
      $query = "delete from barang_masuk where id = $id";
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
  $result = $db->query("select a.*, b.nama, c.nama as nama_user from barang_masuk a, barang b, user c where a.id_barang = b.id and a.id_user = c.id");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barang Masuk
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang Masuk</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID BARANG</th>
                        <th>ID USER</th>
                        <th>JUMLAH</th>
                        <th>VENDOR</th>
                        <th>KETERANGAN</th>
                        <th>STATUS</th>
                        <th>DIBUAT PADA</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>ID BARANG</th>
                        <th>ID USER</th>
                        <th>JUMLAH</th>
                        <th>VENDOR</th>
                        <th>KETERANGAN</th>
                        <th>STATUS</th>
                        <th>DIBUAT PADA</th>
                        <th>ACTION</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="id"><?php echo $row['id'];?></td>
                        <td class="id_barang"><input type="hidden" class="idb" value="<?php echo $row['id_barang'];?>"><?php echo $row['nama'];?></td>
                        <td class="id_user"><input type="hidden" class="idu" value="<?php echo $row['id_user'];?>"><?php echo $row['nama_user'];?></td>
                        <td class="jumlah"><?php echo $row['jumlah'];?></td>
                        <td class="vendor"><?php echo $row['vendor'];?></td>
                        <td class="keterangan"><?php echo $row['keterangan'];?></td>
                        <td class="status"><?php echo $row['status'];?></td>
                        <td class="created_at"><?php echo $row['created_at'];?></td>
                        <td align="center">
                          <button type="button" id="btn-edit" data-toggle="modal" data-target="#addBookDialog" data-id="<?php echo $row['id'];?>" title="Add this item" class="open-DialogBarangIn btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> 
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
        <h3>Edit Barang</h3>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="<?php echo base_url(); ?>barang-masuk/edit" method="post" onsubmit="return validateForm()">
            <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter ID">
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_barang">Nama Barang :</label>
              <div class="col-sm-8"> 
                <select id="id_barang" name='id_barang' class="form-control"></select>
                <!-- <input type="text" name="id_barang" class="form-control" id="id_barang2" placeholder="Masukkan ID Barang"> -->
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_user">Nama User :</label>
              <div class="col-sm-8"> 
                <select id="id_user" name='id_user' class="form-control"></select>
                <!-- <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Masukkan ID User"> -->
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="jumlah">Jumlah :  </label>
              <div class="col-sm-8"> 
                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="vendor">Vendor :</label>
              <div class="col-sm-8"> 
                <input type="text" name="vendor" class="form-control" id="vendor" placeholder="Masukkan Vendor">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="keterangan">Keterangan :</label>
              <div class="col-sm-8"> 
                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="status">Status :</label>
              <div class="col-sm-8"> 
                <select name="status" id="status" class="form-control">
                  <option disabled="true" selected="true" value="null">Pilih Status</option>
                  <option value="fluktuatif">Fluktuatif</option>
                  <option value="antisipasi">Antisipasi</option>
                </select>
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-3">
                <button type="submit" name='submit' class="btn btn-default">Submit</button>
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
  function validateForm(){
    var id_barang = document.getElementById('id_barang').value;
    var id_user = document.getElementById('id_user').value;
    var jumlah = document.getElementById('jumlah').value;
    var vendor = document.getElementById('vendor').value;
    var keterangan = document.getElementById('keterangan').value;
    var status = document.getElementById('status').value;

    if(id_barang == "" || id_user == "" || jumlah == "" || vendor == "" || keterangan == "" || status == "null"){
      alert('Isi form dengan benar');
      return false;
    }
    return true;
  }

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
      window.location='<?php echo base_url();?>barang-masuk/delete/' + id;
    });
  }
</script>