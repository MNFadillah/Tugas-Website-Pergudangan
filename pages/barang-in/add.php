<?php
	if(isset($_POST['submit'])){
		$id_barang = $db->real_escape_string($_POST['id_barang']);
		$id_user = $db->real_escape_string($_POST['id_user']);
		$jumlah = $db->real_escape_string($_POST['jumlah']);
    $vendor = $db->real_escape_string($_POST['vendor']);
    $keterangan = $db->real_escape_string($_POST['keterangan']);
    $status = $db->real_escape_string($_POST['status']);
		$query = "insert into barang_masuk(id_barang, id_user, jumlah, vendor, keterangan, status) values('$id_barang', '$id_user', '$jumlah', '$vendor', '$keterangan', '$status')";

		if($db->query($query)){
			echo "<script>alert('data berhasil ditambahkan');</script>";
		}else{
			echo "<script>alert('data berhasil ditambahkan');</script>";
		}
	}
  $query = "select * from barang";
  $barangData = $db->query($query);
  $query = "select * from user";
  $userData = $db->query($query);
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
       <div class="box  col-xs-12 ">
       <br>
  		<form class="form-horizontal" action="<?php echo base_url(); ?>barang-masuk/add" method="post">
            <input type="hidden" name="id" class="form-control" id="text-id" placeholder="Enter ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="id_barang">Nama Barang :</label>
              <div class="col-sm-8"> 
                <select name="id_barang" id="id_barang" class="form-control">
                  <?php while ($row = mysqli_fetch_assoc($barangData)) { ?>
                    <option value="<?php echo $row['id'] ;?>"><?php echo $row['nama']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="id_user">Nama User :</label>
              <div class="col-sm-8"> 
                <select name="id_user" id="id_user" class="form-control">
                  <?php while ($row = mysqli_fetch_assoc($userData)) { ?>
                    <option value="<?php echo $row['id'] ;?>"><?php echo $row['nama']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <!-- <div class="col-sm-8"> 
                <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Masukkan ID User">
              </div> -->
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
              <label class="control-label col-sm-2" for="keterangan">Keterangan :</label>
              <div class="col-sm-8"> 
                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="status">Status :</label>
              <div class="col-sm-8"> 
                <select name="status" id="status" class="form-control">
                  <option disabled="true" selected="true">Pilih Status</option>
                  <option value="tidak terkirim">Tidak Terkirim</option>
                  <option value="pending">Pending</option>
                  <option value="terkirim">Terkirim</option>
                </select>
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