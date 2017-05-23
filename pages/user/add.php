<div class="content-wrapper">
<?php
	if(isset($_POST['submit'])){
		$id = trim($db->real_escape_string($_POST['id']));
    $nama = trim($db->real_escape_string($_POST['nama']));
    $ktp = trim($db->real_escape_string($_POST['ktp']));
    $username = trim($db->real_escape_string($_POST['username']));
    $password = trim($db->real_escape_string($_POST['password']));
		$query = "insert into user(nama, ktp, username, password) values('$nama', '$ktp', '$username', md5('$password'))";
    $result = $db->query($query);
		if($result){
			echo "<script>alert('data berhasil ditambahkan');</script>";
		}else{

			echo "<script>alert('data gagal ditambahkan');</script>";
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
            <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter ID">
            <div class="form-group">
              <label class="control-label col-sm-2" for="nama">Nama :</label>
              <div class="col-sm-10"> 
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ktp">KTP :</label>
              <div class="col-sm-10"> 
                <input type="text" name="ktp" class="form-control" id="ktp" placeholder="Enter KTP">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="username">USERNAME : </label>
              <div class="col-sm-10"> 
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter USERNAME">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="username">PASSWORD : </label>
              <div class="col-sm-10"> 
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
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