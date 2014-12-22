<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeaderLogin"></div>
</div>
<script type="text/javascript">
	<?php 
		if(isset($_GET['message'])){ 
			if($_GET['message'] == 0){
	?>
		alert("username / password salah");
	<?php } } ?>
</script>
<div id="loginForm">
	<div class="headLoginForm">
	Login Administrator
	</div>
	<div class="fieldLogin">
	<form method="POST" action="login_manager.php" id="form_login">
        <label>Username</label><br>
        <input type="text" name="username" class="login"><br>
        <label>Password</label><br>
        <input type="password" name="password" class="login"><br>
        <input type="submit" class="button" value="Login">
	</form>
	</div>
</div>
</body>
</html>