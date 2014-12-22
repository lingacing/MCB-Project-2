<?php
	$judul_content = "";
	$kode_content = "";
	$description = "";
	$keyword = "";
	$author = $_SESSION['user']['nama_lengkap'];
	$kode_kategori = "";
	$isi = "";
	$status = "baru";
	$data_kategori = get_categories();
	if(isset($_GET['action'])){
		if($_GET['action'] == "edit"){
			$data = get_content("where content.kode_content = '".$_GET['kode']."'");
			foreach($data as $content){
				$judul_content = $content["judul_content"];
				$kode_content = $content["kode_content"];
				$description = $content["deskripsi"];
				$keyword = $content["keyword"];
				//$author = $content["penulis"];
				$kode_kategori = $content["kode_kategori"];
				$isi = $content["content"];
				$status = "lama";
			}
		}
	}
?>
<div id="rightContent">
	<h3>Tulisan Baru</h3>
    <form method="post" action="content_manager.php">
   	<table width="95%">
			<tr><td width="15%;" align="right"><b>Judul Konten</b></td><td> <input type="text" value="<?php echo $judul_content; ?>" class="panjang" name="judul_content"></td></tr>
            <tr><td width="15%;" align="right"><b>Keyword</b></td><td><input type="text" value="<?php echo $keyword; ?>" class="panjang" name="keyword"></td></tr>
            <tr><td width="15%;" align="right"><b>Deskripsi</b></td><td><input type="text" value="<?php echo $description; ?>" class="panjang" name="deskripsi"></td></tr>
			<tr><td width="15%;" align="right"><b>Kategori</b></td><td> 
				<select name="kode_kategori">
                	<option selected>-- pilihan --</option>
                <?php foreach($data_kategori as $k){ if($k['kode_kategori'] == $kode_kategori){?>
                	<option value="<?php echo $k['kode_kategori']; ?>" selected="selected"><?php echo $k['judul_kategori']; ?></option>
                    <?php } else{ ?>			
					<option value="<?php echo $k['kode_kategori']; ?>"><?php echo $k['judul_kategori']; ?></option>
                <?php } } ?>
				</select>
			</td></tr>
			<tr><td align="right" valign="top"><b>Isi Content</b></td><td><textarea id="editor1" name="content"><?php echo $isi; ?></textarea></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Simpan" />
			</td></tr>
            <input type="hidden" name="kode_content" value="<?php echo $kode_content; ?>" />
            <input type="hidden" name="penulis" value="<?php echo $author ?>" />
            <input type="hidden" name="status" value="<?php echo $status; ?>" />
	</table>
    </form>
</div>
<script type="text/javascript">
//<![CDATA[
	CKEDITOR.replace( 'editor1',
	{
		filebrowserBrowseUrl : 'js/kcfinder/browse.php?type=files',
		filebrowserImageBrowseUrl : 'js/kcfinder/browse.php?type=images',
		filebrowserFlashBrowseUrl : 'js/kcfinder/browse.php?type=flash',
		filebrowserUploadUrl : 'js/kcfinder/upload.php?type=files',
		filebrowserImageUploadUrl : 'js/kcfinder/upload.php?type=images',
		filebrowserFlashUploadUrl : 'js/kcfinder/upload.php?type=flash'
	});
//]]>
</script>
