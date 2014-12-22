<div id="rightContent">
	<h3>Kategori Konten</h3>
    	<form method="post" action="kategori_manager.php">
    	<table width="95%">
			<tr><td width="16%" align="right"><b>Judul Kategori</b></td><td>: <input type="text" name="judul_kategori" class="sedang"></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan">
			</td></tr>
		</table>
        </form>
    	<?php 
			if(isset($_GET['message'])){ 
				if($_GET['message'] == "1"){
		?>
               <div class="sukses" id="messages">
                Sukses tambah kategori :) </div>
        <?php } else if($_GET['message'] == "2"){ ?>
        		<div class="sukses" id="messages">
                Sukses delete kategori :)
                </div>
        <?php } else if($_GET['message'] == "0"){ ?>
        		<div class="gagal" id="messages">
                Operasi Gagal
                </div>
    <?php } } ?>
		<table class="data">
			<tr class="data">
				<th class="data" width="85%">Judul Kategori</th>
				<th class="data" width="15%">Pilihan</th>
			</tr>
            <?php foreach(get_categories() as $categorie){ ?>
			<tr class="data">
				<td class="data" width="30px"><?php echo $categorie['judul_kategori'] ?></td>
				<td class="data" width="75px">
				<center>
				<a href="kategori_manager.php?action=delete&kode=<?php echo $categorie['kode_kategori'] ?>" title="Hapus Kategori <?php echo $categorie['judul_kategori'] ?>" onclick="return confirm('yakin hapus kategori <?php echo $categorie['judul_kategori'] ?> ?');"><img src="images/delete.png"></a>
				</center>
				</td>
			</tr>
            <?php } ?>
		</table>
</div>
 <script>
	$('#messages').fadeIn('slow').delay(1500).fadeOut('slow');
</script>