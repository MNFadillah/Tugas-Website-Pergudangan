<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php
  		$id = trim($db->real_escape_string($_POST['id']));
  		$nama = trim($db->real_escape_string($_POST['nama']));
		$deskripsi = trim($db->real_escape_string($_POST['deskripsi']));
		$stok = trim($db->real_escape_string($_POST['stok']));
		$jenis = $db->real_escape_string($_POST['jenis']);
		$tahun_pembuatan = $db->real_escape_string($_POST['tahun_pembuatan']);
		$status = $db->real_escape_string($_POST['status']);

		if($id != "" && $nama != "" && $deskripsi != "" && $stok != ""){
			$query = "update barang set nama = '$nama', deskripsi = '$deskripsi', stok = '$stok', jenis = '$jenis', tahun_pembuatan = '$tahun_pembuatan', status = '$status' where id = $id";
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
		echo "<script>location.href='" . base_url() . "barang'</script>";
  	?>
  </div>