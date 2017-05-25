<div class="content-wrapper">
<?php
	if(isset($_POST['submit'])){
    $id = trim($db->real_escape_string($_POST['id']));
    $ktp = trim($db->real_escape_string($_POST['ktp']));
    $nama = trim($db->real_escape_string($_POST['nama']));
    $email = trim($db->real_escape_string($_POST['email']));
    $alamat = trim($db->real_escape_string($_POST['alamat']));
    $telp = trim($db->real_escape_string($_POST['telp']));
    $username = trim($db->real_escape_string($_POST['username']));
    $password = trim($db->real_escape_string($_POST['password']));
		$query = "insert into user(ktp, nama, email, alamat, telp, username, password) values('$ktp', '$nama', '$email', '$alamat', '$telp', '$username', md5('$password'))";
    $result = $db->query($query);
		if($result){
      echo "<script>swal('Sukses!','Berhasil menambah data.','success');</script>";
    }else{
      echo "<script>swal('Gagal!','Gagal menambah data.','error');</script>";
    }
	}
?>
<!-- Content Wrapper. Contains page content -->
  <section class="content-header">
      <h1>
        Tambah User
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
  		<form class="form-horizontal" action="<?php echo base_url(); ?>user/add?" method="post">
            <input type="hidden" name="id" class="form-control" id="id" placeholder="Masukkan ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="ktp">KTP :</label>
              <div class="col-sm-10"> 
                <input type="text" name="ktp" class="form-control" id="ktp" placeholder="Masukkan KTP">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="nama">Nama :</label>
              <div class="col-sm-10"> 
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email :</label>
              <div class="col-sm-10"> 
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="alamat">Alamat :</label>
              <div class="col-sm-10"> 
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="telp">No. Telpon :</label>
              <div class="col-sm-10"> 
                <input type="number" name="telp" class="form-control" id="telp" placeholder="Masukkan No. Telpon">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="username">Username : </label>
              <div class="col-sm-10"> 
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="username">Password : </label>
              <div class="col-sm-10"> 
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
          <br>
          </div>
         </div>
      </div>
  	</section>
  </div>