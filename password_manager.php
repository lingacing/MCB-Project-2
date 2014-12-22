<?php
	require "function.php";
	if($_POST){
		$username = $_POST['username'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$password_lama = $_POST['password_lama'];
		$password_baru = $_POST['password_baru'];
		
		$data = get_user("where username = '$username' and password = '$password_lama'");
		if($data != NULL){
			$response = update_user($username,$nama_lengkap,$password_baru);
			if($response == 1){
				header("location:index.php?page=option&message=1");
			}else{
				header("location:index.php?page=option&message=0");
			}
		}else{
			header("location:index.php?page=option&message=10");
		}
	}
?>