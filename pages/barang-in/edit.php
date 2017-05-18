<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php
  		$id = $db->real_escape_string($_POST['id']);
  		$id_barang = $db->real_escape_string($_POST['id_barang']);
		$id_user = $db->real_escape_string($_POST['id_user']);
		$jumlah = $db->real_escape_string($_POST['jumlah']);
    	$vendor = $db->real_escape_string($_POST['vendor']);

		if($id != "" && $id_barang != "" && $id_user != "" && $jumlah != "" && $vendor != ""){
			$query = "update barang_masuk set id_barang = '$id_barang', id_user = '$id_user', jumlah = '$jumlah', vendor='$vendor' where id = $id";
			$result = $db->query($query);
			if($result){
				echo "<script>alert('Data berhasil diubah');</script>";
			}else{
				echo "<script>alert('Data berhasil diubah');</script>";
			}
			echo "<script>window.location = '".base_url()."barang-masuk';</script>";
		}else{
			echo 'Lengkapi data terlebih dahulu';
		}
  	?>
  </div>