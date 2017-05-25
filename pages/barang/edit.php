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
				echo "<script>swal('Sukses!','Berhasil mengubah data.','success').then(function(){location.href='" . base_url() . "barang';});</script>";
			}else{
				// echo $db->error;
				// echo $query;
				echo "<script>swal('Gagal!','Gagal mengubah data.','error').then(function(){location.href='" . base_url() . "barang';});</script>";
			}
		}else{
			echo "<script>swal('Gagal!','Lengkapi data terlebih dahulu.','error').then(function(){location.href='" . base_url() . "barang';});</script>";
		}
		//echo "<script>location.href='" . base_url() . "barang'</script>";
  	?>
  </div>