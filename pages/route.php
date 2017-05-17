<?php
	require "inc/koneksi.php";
	require "inc/site_helper.php";
	include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/

	if(isset($_GET['pages'])){ //jika pages nya kosong
		$page = $_GET['pages']; 
		if($page == 'dashboard'){ //jika page nya home
			$dasboardMenu = true;
			include 'pages/static/sidebar.php';
			include 'pages/dashboard.php'; //menambahkan file pages/content.php
		}else if($page == 'barang'){ //jika page nya home
			$barangMenu = true;
			include 'pages/static/sidebar.php';
			include 'pages/barang/index.php'; //menambahkan file pages/content.php
		}else if($page == 'barang-masuk'){ //jika page nya home
			$barangInMenu = true;
			include 'pages/static/sidebar.php';
			include 'pages/barang-in/index.php'; //menambahkan file pages/content.php
		}else if($page == 'barang-keluar'){ //jika page nya home
			$barangOutMenu = true;
			include 'pages/static/sidebar.php';
			include 'pages/barang-out/index.php'; //menambahkan file pages/content.php
		}else if($page == 'user'){ //jika page nya home
			$userMenu = true;
			include 'pages/static/sidebar.php';
			include 'pages/user/index.php'; //menambahkan file pages/content.php
		}else{
			include 'pages/not-found.html';
		}
	}else{
		$dasboardMenu = true;
		include 'pages/static/sidebar.php';
		include 'pages/dashboard.php';
	}

	include 'pages/static/footer.php';
?>