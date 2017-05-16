<?php
	include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
	include 'pages/static/sidebar.php';
	if(isset($_GET['pages'])){ //jika pages nya kosong
		$page = $_GET['pages']; 
		if($page == 'home'){ //jika page nya home
			include 'pages/content.php'; //menambahkan file pages/content.php
		}else{
			include 'pages/not-found.html';
		}
	}else{
		include 'pages/content.php';
	}

	include 'pages/static/footer.php';
?>