<div id="rightContent">
	<h3>Konten</h3>
    	<div style="width:95%; background:#0066CC;">
        	<h4 style="float:right;">
            	<a href="index.php?page=write" style="color:#FF0000; text-decoration:underline;">Buat tulisan baru</a>
           	</h4>
        </div>
        <?php 
			if(isset($_GET['message'])){ 
				if($_GET['message'] == "1"){
		?>
               <div class="sukses" id="messages">
                Sukses tambah data :)
                </div>
        <?php } else if($_GET['message'] == "2"){ ?>
        		<div class="sukses" id="messages">
                Sukses update data :)
                </div>
        <?php } else if($_GET['message'] == "3"){ ?>
        		<div class="sukses" id="messages">
                Sukses delete data :)
                </div>
        <?php } else if($_GET['message'] == "0"){ ?>
        		<div class="gagal" id="messages">
                Operasi Gagal
                </div>
        <?php } } ?>
		<table class="data">
			<tr class="data">
				<th class="data" width="40%;">Judul Content</th>
				<th class="data" width="15%;">Kategori</th>
				<th class="data" width="15%;">Tanggal</th>
				<th class="data" width="18%;">Penulis</th>
				<th class="data" width="10%">Pilihan</th>
			</tr>
            <?php foreach(get_content() as $content){ ?>
			<tr class="data">
				<td class="data" width="30px"><?php echo $content["judul_content"]; ?></td>
				<td class="data"><?php echo $content["judul_kategori"]; ?></td>
				<td class="data"><?php
					$temp = explode(' ',$content["tanggal"]);
					 echo $temp[0];
				?></td>
				<td class="data"><?php echo $content["penulis"]; ?></td>
				<td class="data" width="75px">
				<center>
				<a href="index.php?page=write&action=edit&kode=<?php echo $content["kode_content"]; ?>"><img src="images/edit.png"></a>&nbsp;&nbsp;&nbsp;
				<a href="content_manager.php?action=delete&kode=<?php echo $content["kode_content"]; ?>" title="Edit <?php echo $content["judul_content"]; ?>" title="Hapus <?php echo $content["judul_content"]; ?>" onclick="return confirm('yakin hapus data ini ?')"><img src="images/delete.png"></a>
				</center>
				</td>
			</tr>
            <?php } ?>
		</table>
	</div>
<script>
	$('#messages').fadeIn('slow').delay(1500).fadeOut('slow');
</script>