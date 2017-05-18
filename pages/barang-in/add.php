<?php
	if(isset($_POST['submit'])){
		$id_barang = $db->real_escape_string($_POST['id_barang']);
		$id_user = $db->real_escape_string($_POST['id_user']);
		$jumlah = $db->real_escape_string($_POST['jumlah']);
    $vendor = $db->real_escape_string($_POST['vendor']);
		$query = "insert into barang_masuk(id_barang, id_user, jumlah, vendor) values('$id_barang', '$id_user', '$jumlah', '$vendor')";

		if($db->query($query)){
			echo "<script>alert('data berhasil ditambahkan');</script>";
		}else{
			echo "<script>alert('data berhasil ditambahkan');</script>";
		}
	}
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content-header">
      <h1>
        Tambah Barang
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
       <br>
  		<form class="form-horizontal" action="<?php echo base_url(); ?>barang-masuk/add" method="post">
            <input type="hidden" name="id" class="form-control" id="text-id" placeholder="Enter ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="id_barang">ID Barang :</label>
              <div class="col-sm-8"> 
                <input type="text" name="id_barang" class="form-control" id="nama" placeholder="Masukkan ID Barang">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="id_user">ID User :</label>
              <div class="col-sm-8"> 
                <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Masukkan ID User">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="jumlah">Jumlah :  </label>
              <div class="col-sm-8"> 
                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="vendor">Vendor :</label>
              <div class="col-sm-8"> 
                <input type="text" name="vendor" class="form-control" id="vendor" placeholder="Masukkan Vendor">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" name='submit' class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
          <br>
          </div>
         </div>
      </div>
  	</section>
  </div>