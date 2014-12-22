<?php
	include 'function.php';
	if($_POST){
		$kode_content = isset($_POST['kode_content']) ? $_POST['kode_content'] : NULL;
		$judul_content = isset($_POST['judul_content']) ? $_POST['judul_content'] : NULL;
		$kode_kategori = isset($_POST['kode_kategori']) ? $_POST['kode_kategori'] : NULL;
		$penulis = isset($_POST['penulis']) ? $_POST['penulis'] : NULL;
		$content = isset($_POST['content']) ? $_POST['content'] : NULL;
		$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : NULL;
		$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : NULL;
		$status = isset($_POST['status']) ? $_POST['status'] : NULL;
		
		if($status == "lama"){
			$response = update_content($kode_content,$judul_content,$kode_kategori,$penulis,$content,$keyword,$deskripsi);
			if($response == 1){
				header('location:index.php?page=content&message=2');
			}else{
				header('location:index.php?page=content&message=0');
			}
		}else{
			$response = insert_content($judul_content,$kode_kategori,$penulis,$content,$keyword,$deskripsi);
			if($response == 1){
				header('location:index.php?page=content&message=1');
			}else{
				header('location:index.php?page=content&message=0');
			}
		}
	}else{
		if(isset($_GET['action'])){
			if($_GET['action'] == "delete"){
				$response = delete_content($_GET['kode']);
				if($response == 1){
					header('location:index.php?page=content&message=3');
				}else{
					header('location:index.php?page=content&message=0');
				}
			}
		}
	}
?>