<?php
	require "inc/koneksi.php";
	require "inc/site_helper.php";

	if(isset($_GET['pages'])){ //jika pages nya kosong
		$page = $_GET['pages']; 
		if($page == 'dashboard'){ //jika page nya home
			$dasboardMenu = true;
			include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
			include 'pages/static/sidebar.php';
			include 'pages/dashboard.php'; //menambahkan file pages/content.php
		}else if($page == 'barang'){ //jika page nya home
			$barangMenu = true;
			include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
			include 'pages/static/sidebar.php';
			if(isset($_GET['action'])){
				$action = $_GET['action'];
				//echo "<div class='content-wrapper'>$action</div>";
				if($action == 'edit'){
					include 'pages/barang/edit.php';
				}else if($action == 'delete'){
					include 'pages/barang/index.php';
				}else if($action == 'add'){
					include 'pages/barang/add.php';
				}
			}else{
				include 'pages/barang/index.php'; //menambahkan file pages/content.php
			}
		}else if($page == 'barang-masuk'){ //jika page nya home
			$barangInMenu = true;
			include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
			include 'pages/static/sidebar.php';
			if(isset($_GET['action'])){
				$action = $_GET['action'];
				//echo "<div class='content-wrapper'>$action</div>";
				if($action == 'edit'){
					include 'pages/barang-in/edit.php';
				}else if($action == 'delete'){
					include 'pages/barang-in/index.php';
				}else if($action == 'add'){
					include 'pages/barang-in/add.php';
				}
			}else{
				include 'pages/barang-in/index.php'; //menambahkan file pages/content.php
			}
		}else if($page == 'barang-keluar'){ //jika page nya home
			$barangOutMenu = true;
			include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
			include 'pages/static/sidebar.php';
			if(isset($_GET['action'])){
				$action = $_GET['action'];
				//echo "<div class='content-wrapper'>$action</div>";
				if($action == 'edit'){
					include 'pages/barang-out/edit.php';
				}else if($action == 'delete'){
					include 'pages/barang-out/index.php';
				}else if($action == 'add'){
					include 'pages/barang-out/add.php';
				}
			}else{
				include 'pages/barang-out/index.php'; //menambahkan file pages/content.php
			}
		}else if($page == 'user'){ //jika page nya home
			$userMenu = true;
			include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
			include 'pages/static/sidebar.php';
			include 'pages/user/index.php'; //menambahkan file pages/content.php
		}else{
			include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
			include 'pages/static/sidebar.php';
			include 'pages/not-found.html';
		}
	}else{
		$dasboardMenu = true;
		$page = "dashboard";
		include 'pages/static/header.php'; //untuk menambahkan file header.php di folder pages/static/
		include 'pages/static/sidebar.php';
		include 'pages/dashboard.php';
	}

	include 'pages/static/footer.php';
?>