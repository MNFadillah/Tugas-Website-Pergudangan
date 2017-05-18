<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php
  		$id = trim($db->real_escape_string($_POST['id']));
  		$nama = trim($db->real_escape_string($_POST['nama']));
  		$ktp = trim($db->real_escape_string($_POST['ktp']));
		$username = trim($db->real_escape_string($_POST['username']));
		$password = trim($db->real_escape_string($_POST['password']));

		if($id != "" && $nama != "" && $ktp != "" && $username != ""){
			if($password != ""){
				$query = "update user set nama = '$nama', ktp = '$ktp', username = '$username', password = md5('$password') where id = $id";
			}else{
				$query = "update user set nama = '$nama', ktp = '$ktp', username = '$username' where id = $id";
			}
			$result = $db->query($query);
			if($result){
				echo "Data berhasil diubah";
			}else{
				echo 'Data gagal diubah';
			}
		}else{
			echo 'Lengkapi data terlebih dahulu';
		}
  	?>
  </div>