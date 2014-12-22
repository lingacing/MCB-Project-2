<?php
	include 'function.php';
	if($_POST){
		$username = $_POST['username'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$password = $_POST['password'];
				
		$response = insert_user($username,$nama_lengkap,$password);
		if($response == 1){
			header('location:index.php?page=user&message=1');
		}else{
			header('location:index.php?page=user&message=0');
		}
	}else{
		if(isset($_GET['action'])){
			if($_GET['action'] == "delete"){
				$response = delete_user($_GET['username']);
				if($response == 1){
					header('location:index.php?page=user&message=2');
				}else{
					header('location:index.php?page=user&message=0');
				}
			}
		}
	}
?>