<?php
	include "../../inc/koneksi.php";
	$id = $_POST['id'];
	$data = $db->query("select * from user");
	while ($row = mysqli_fetch_assoc($data)) { 
		if($id == $row['id']){
			echo "<option value='" . $row['id'] . "' selected='true'>" . $row['nama'] . "</option>";
		}else{
			echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
		}
	}
?>