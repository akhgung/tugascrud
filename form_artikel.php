<?php error_reporting(E_ALL); 
include('koneksi.php'); 
//include('login_session.php');
if (isset($_POST['submit'])) {
	$judul =$_POST['title'];
	$content =$_POST['content'];
	$tanggal =$_POST['tanggal'];

	$sql = 'INSERT INTO artikel (title,content,tanggal) ';
	$sql .= "VALUE ('{$title}','{$content}','{$tanggal}')";
	$result = mysqli_query($conn, $sql);
	if(!$result) {
		die(mysqli_error($conn));
	}
	header('location: form_artikel.php');
} 


include 'nav.php';
include('sidebar.php'); 
?> 

<div class="content_a"> 
	<div class="daftar"> 
	<div class="main"> 
		<h2>Tambah Artikel</h2>
	<form method="post" action="?mod=admin/tambah" enctype="multipart/form-data">
	<div class="input">
		<input type="text" name="title" placeholder="Judul Artikel" />
	</div>
	<div class="input">
		<textarea type="content" cols="50" rows="10" placeholder="Isi Artikel"></textarea>
	</div>
	<div class="input">
		<label>Tanggal</label>
		<input type="date" name="tanggal" />
	</div>
	<div class="submit">
		<input type="submit" name="submit" class="btn btn-large" value="simpan" />
	</div>
	
		</div>
	</div>
</div>
