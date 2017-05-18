<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php
  		$id = trim($db->real_escape_string($_POST['id']));
  		$nama = trim($db->real_escape_string($_POST['nama']));
		$deskripsi = trim($db->real_escape_string($_POST['deskripsi']));
		$stok = trim($db->real_escape_string($_POST['stok']));

		if($id != "" && $nama != "" && $deskripsi != "" && $stok != ""){
			$query = "update barang set nama = '$nama', deskripsi = '$deskripsi', stok = '$stok' where id = $id";
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