<?php
	include 'function.php';
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$result = get_user("where username = '$username' and password = '$password'");
		if($result != NULL){
			session_start();			
			$_SESSION['user'] = array('username' => $result[0]['username'],'nama_lengkap' =>  $result[0]['nama_lengkap']);
			$_SESSION['kcfinder_mati'] = false;
			header("location:index.php");
		}else{
			header("location:login.php?message=0");
		}
	}
?>