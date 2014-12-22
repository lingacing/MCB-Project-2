<?php require "function.php"; cek_login(); ?>
<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="Gerdyan">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Gerdyan">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--pemanggilan file css-->
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
        <?php $user = ""; if(isset($_SESSION['user'])){ ?>
		Hallo, <?php echo $_SESSION['user']['nama_lengkap']; ?><br>
        <?php } ?>
		<a href="">Lihat website</a> | <a href="">Help</a> | <a href="logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.php?page=content">Content</a></li>
		<li><a href="index.php?page=user">User</a></li>
		<li><a href="index.php?page=categorie">Categorie</a></li>
        <li><a href="index.php?page=option">Option</a></li>
	</ul>
	</div>
	<?php 	
		if(!isset($_GET["page"])){
			require "content.php"; 
		}else{
			if($_GET['page'] == "content"){
				require "content.php";
			}else if($_GET['page'] == "user"){
				require "user.php";
			}else if($_GET['page'] == "categorie"){
				require "kategori.php";
			}else if($_GET['page'] == "write"){
				require "write.php";
			}else if($_GET['page'] == "option"){
				require "password.php";
			}else{
				echo "<div id='rightContent'><h2 style='color:red;'>Page not found !!</h2></div>";
			}
		}
	?>
<div class="clear"></div>
<div id="footer">
	&copy; 2014 css template
</div>
</div>
</body>
</html>