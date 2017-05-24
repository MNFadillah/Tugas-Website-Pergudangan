<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php
  		$id = $db->real_escape_string($_POST['id']);
  		$id_barang = $db->real_escape_string($_POST['id_barang']);
		$id_user = $db->real_escape_string($_POST['id_user']);
		$jumlah = $db->real_escape_string($_POST['jumlah']);
    	$departemen = $db->real_escape_string($_POST['departemen']);
    	$keterangan = $db->real_escape_string($_POST['keterangan']);
		$status = $db->real_escape_string($_POST['status']);

		if($id != "" && $id_barang != "" && $id_user != "" && $jumlah != "" && $departemen != ""){
			$query = "update barang_keluar set id_barang = '$id_barang', id_user = '$id_user', jumlah = '$jumlah', departemen='$departemen', keterangan='$keterangan', status='$status' where id = $id";
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
		echo "<script>location.href='" . base_url() . "barang-out'</script>";
  	?>
  </div>