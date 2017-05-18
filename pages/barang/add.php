<?php
	if(isset($_POST['submit'])){
		$nama = $db->real_escape_string($_POST['nama']);
		$deskripsi = $db->real_escape_string($_POST['deskripsi']);
		$stok = $db->real_escape_string($_POST['stok']);
		$query = "insert into barang(nama, deskripsi, stok) values('$nama', '$deskripsi', '$stok')";

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
  		<form class="form-horizontal" action="<?php echo base_url(); ?>barang/add" method="post">
            <input type="hidden" name="id" class="form-control" id="text-id" placeholder="Enter ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="deskripsi">Nama :</label>
              <div class="col-sm-8"> 
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="deskripsi">Deskripsi :</label>
              <div class="col-sm-8"> 
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Enter Deskripsi">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="stok">Stok : </label>
              <div class="col-sm-8"> 
                <input type="number" name="stok" class="form-control" id="stok" placeholder="Enter Stok">
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