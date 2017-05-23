<?php
	if(isset($_POST['submit'])){
		$nama = $db->real_escape_string($_POST['nama']);
		$deskripsi = $db->real_escape_string($_POST['deskripsi']);
		$stok = $db->real_escape_string($_POST['stok']);
    $jenis = $db->real_escape_string($_POST['jenis']);
    $tahun_pembuatan = $db->real_escape_string($_POST['tahun_pembuatan']);
    $status = $db->real_escape_string($_POST['status']);
		$query = "insert into barang(nama, deskripsi, stok, jenis, tahun_pembuatan, status) values('$nama', '$deskripsi', '$stok', '$jenis', '$tahun_pembuatan', '$status')";

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
       <div class="box  col-xs-12">
       <br>
  		<form class="form-horizontal" action="<?php echo base_url(); ?>barang/add" method="post">
            <input type="hidden" name="id" class="form-control" id="text-id" placeholder="Masukkan ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="deskripsi">Nama :</label>
              <div class="col-sm-8"> 
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="deskripsi">Deskripsi :</label>
              <div class="col-sm-8"> 
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="jenis">Jenis :</label>
              <div class="col-sm-8"> 
                <select name="jenis" id="jenis" class="form-control">
                  <option value="Pilih Status" selected="true" disabled="true">Pilih Jenis</option>
                  <option value="elektronik">Elektronik</option>
                  <option value="mebel">Mebel</option>
                  <option value="atk">Alat Tulis Kantor</option>
                  <option value="alat dapur">Alat Dapur</option>
                  <option value="tekstil">Tekstil</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="tahun_pembuatan">Tahun Pembuatan :</label>
              <div class="col-sm-8"> 
                <input type="text" name="tahun_pembuatan" class="form-control" id="tahun_pembuatan" placeholder="Masukkan Tahun Pembuatan">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="status">status :</label>
              <div class="col-sm-8"> 
                <select name="status" id="status" class="form-control">
                  <option value="Pilih Status" selected="true" disabled="true">Pilih Status</option>
                  <option value="lama">Barang Lama</option>
                  <option value="baru">Barang Baru</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="stok">Stok : </label>
              <div class="col-sm-8"> 
                <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan Stok">
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