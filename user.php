<div id="rightContent">
	<h3>User Blog</h3>
    <div>
        <form method="post" action="user_manager.php">
    	<table width="95%">
			<tr><td width="15%" align="right"><b>Username </b></td><td><input type="text" name="username" class="sedang"></td></tr>
            <tr><td width="15%" align="right"><b>Nama Lengkap </b></td><td><input type="text" name="nama_lengkap" class="panjang"></td></tr>
            <tr><td align="right"><b>Password</b></td><td><input type="text" name="password" class="pendek"></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			</td></tr>
		</table>
        </form> 	
    </div>
     	<?php 
			if(isset($_GET['message'])){ 
				if($_GET['message'] == "1"){
		?>
               <div class="sukses" id="messages">
                Sukses tambah user :)</div>
        <?php } else if($_GET['message'] == "2"){ ?>
        		<div class="sukses" id="messages">
                Sukses delete user :)
                </div>
        <?php } else if($_GET['message'] == "0"){ ?>
        		<div class="gagal" id="messages">
                Operasi Gagal
                </div>
        <?php } } ?>  
    	
		<table class="data">
			<tr class="data">
				<th class="data" width="30%">Username</th>
				<th class="data" width="55%">Nama Lengkap</th>
				<th class="data" width="75px">Pilihan</th>
			</tr>
            <?php foreach(get_user() as $user){ ?>
			<tr class="data">
				<td class="data"><?php echo $user['username']; ?></td>
				<td class="data"><?php echo $user['nama_lengkap']; ?></td>
				<td class="data" width="75px">
				<center>
				<a href="user_manager.php?action=delete&username=<?php echo $user['username']; ?>" title="Hapus <?php echo $user['nama_lengkap']; ?>" onclick="return confirm('yakin hapus user <?php echo $user['nama_lengkap']; ?> ?')"><img src="images/delete.png"></a>
				</center>
				</td>
			</tr>
            <?php } ?>
		</table>
	</div>
<script>
	$('#messages').fadeIn('slow').delay(1500).fadeOut('slow');
</script>