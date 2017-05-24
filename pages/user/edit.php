<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php
  		$id = trim($db->real_escape_string($_POST['id']));
  		$ktp = trim($db->real_escape_string($_POST['ktp']));
  		$nama = trim($db->real_escape_string($_POST['nama']));
  		$email = trim($db->real_escape_string($_POST['email']));
		$alamat = trim($db->real_escape_string($_POST['alamat']));
		$telp = trim($db->real_escape_string($_POST['telp']));
		$username = trim($db->real_escape_string($_POST['username']));
		$password = trim($db->real_escape_string($_POST['password']));

		if($id != "" && $nama != "" && $ktp != "" && $username != ""){
			if($password != ""){
				$query = "update user set nama = '$nama', ktp = '$ktp', email = '$email', alamat = '$alamat', telp = '$telp', username = '$username', password = md5('$password') where id = $id";
			}else{
				$query = "update user set nama = '$nama', ktp = '$ktp', email = '$email', alamat = '$alamat', telp = '$telp', username = '$username' where id = $id";
			}
			$result = $db->query($query);
			if($result){
				echo "<script>alert('Data berhasil diubah');</script>";
			}else{
				// echo $db->error;
				// echo $query;
				echo "<script>alert('Data gagal diubah');</script>";
			}
		}else{
			echo "<script>alert('Lengkapi data terlebih dahulu');</script>";
		}
		echo "<script>location.href='" . base_url() . "user'</script>";
  	?>
  </div>