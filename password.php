<?php
	$data = get_user("where username = '".$_SESSION['user']['username']."'");
?>
<div id="rightContent">
	<h3>User Blog</h3>
    	<?php 
			if(isset($_GET['message'])){ 
				if($_GET['message'] == "1"){
		?>
               <div class="sukses" id="messages">
                Sukses ganti profile :) </div>
        <?php } else if($_GET['message'] == "10"){ ?>
        		<div class="gagal" id="messages">
               password lama tidak sesuai !!!
                </div>
        <?php } else if($_GET['message'] == "0"){ ?>
        		<div class="gagal" id="messages">
                Operasi Gagal
                </div>
    <?php } } ?>
    <div>
    	<form method="post" action="password_manager.php">
    	<table width="95%">
			<tr><td width="16%" align="right"><b>Username </b></td><td><input type="text" value="<?php echo $_SESSION['user']['username']; ?>" class="sedang" readonly="readonly" name="username"></td></tr>
            <tr><td width="16%" align="right"><b>Nama Lengkap </b></td><td><input type="text" value="<?php echo $_SESSION['user']['nama_lengkap']; ?>" class="panjang" name="nama_lengkap"></td></tr>
            <tr><td align="right"><b>Password Baru</b></td><td><input type="text" name="password_baru" class="pendek"></td></tr>
            <tr><td align="right"><b>Password Lama</b></td><td><input type="text" name="password_lama" class="pendek"></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			</td></tr>
		</table>
        </form>
    </div>
</div>
 <script>
	$('#messages').fadeIn('slow').delay(1500).fadeOut('slow');
</script>