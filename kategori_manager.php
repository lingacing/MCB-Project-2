<?php
	include 'function.php';
	if($_POST){
		$judul_kategori = $_POST['judul_kategori'];
				
		$response = insert_kategori($judul_kategori);
		if($response == 1){
			header('location:index.php?page=categorie&message=1');
		}else{
			header('location:index.php?page=categorie&message=0');
		}
	}else{
		if(isset($_GET['action'])){
			if($_GET['action'] == "delete"){
				$response = delete_kategori($_GET['kode']);
				if($response == 1){
					header('location:index.php?page=categorie&message=2');
				}else{
					header('location:index.php?page=categorie&message=0');
				}
			}
		}
	}
?>