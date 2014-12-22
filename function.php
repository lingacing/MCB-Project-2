<?php
	function connection(){
		$koneksi = mysql_connect("localhost","root","") or die ("connection failed");
		mysql_select_db("blog") or die ("database error");
		return $koneksi;
	}
	
	function destroy_connection($koneksi){
		mysql_close($koneksi);
	}
	
	function to_array($data){
		$result = array();
		while($hasil = mysql_fetch_array($data)){
			$result[] = $hasil;
		}
		return $result;
	}
	
	function get_content($where = ""){
		$koneksi = connection();
		$data = mysql_query("select content.*,kategori.judul_kategori from content inner join kategori on content.kode_kategori = kategori.kode_kategori $where order by content.kode_content desc;") or die ("query error");
		destroy_connection($koneksi);
		return to_array($data);
	}
	
	function get_categories($where = ""){
		$koneksi = connection();
		$data = mysql_query("select * from kategori $where;") or die ("query error");
		destroy_connection($koneksi);
		return to_array($data);
	}
	
	function get_user($where = ""){
		$koneksi = connection();
		$data = mysql_query("select * from userapp $where;") or die ("query error");
		destroy_connection($koneksi);
		return to_array($data);
	}
	
	function insert_content($judul_content,$kode_kategori,$penulis,$content,$keyword,$deskripsi){
		$koneksi = connection();
		$data = mysql_query("insert into content (judul_content,kode_kategori,tanggal,penulis,content,keyword,deskripsi) values ('$judul_content','$kode_kategori',now(),'$penulis','$content','$keyword','$deskripsi');") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}	
	
	function update_content($kode_content,$judul_content,$kode_kategori,$penulis,$content,$keyword,$deskripsi){
		$koneksi = connection();
		$data = mysql_query("update content set judul_content = '$judul_content',kode_kategori = '$kode_kategori',penulis = '$penulis',content = '$content',keyword = '$keyword',deskripsi = '$deskripsi' where kode_content = '$kode_content';") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}	
	
	function delete_content($kode_content){
		$koneksi = connection();
		$data = mysql_query("delete from content where kode_content = '$kode_content';") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}	
	
	function insert_user($username,$nama_lengkap,$password){
		$koneksi = connection();
		$data = mysql_query("insert into userapp values ('$username','$password','$nama_lengkap');") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}
	
	function delete_user($username){
		$koneksi = connection();
		$data = mysql_query("delete from userapp where username = '$username';") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}	
	
	function insert_kategori($judul_kategori){
		$koneksi = connection();
		$data = mysql_query("insert into kategori (judul_kategori) values ('$judul_kategori');") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}
	
	function delete_kategori($kode_kategori){
		$koneksi = connection();
		$data = mysql_query("delete from kategori where kode_kategori = '$kode_kategori';") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}
	
	function update_user($username,$nama_lengkap,$password){
		$koneksi = connection();
		$data = mysql_query("update userapp set nama_lengkap = '$nama_lengkap',password = '$password' where username = '$username';") or die ("query error");
		destroy_connection($koneksi);
		return $data;
	}
	
	function cek_login(){
		if(!isset($_SESSION)){
			session_start();
		}
		
		if(!isset($_SESSION['user'])){
			header("location:login.php");
		}
	}
?>