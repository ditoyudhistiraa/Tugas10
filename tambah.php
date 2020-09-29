<?php  
require 'functions.php';

if( isset($_POST['submit']) ){
	if( tambah($_POST) > 0 ){
		echo "!! DATA BERHASIL DITAMBAHKAN !!";
	} else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.grup {
			margin: 5px 0;
		}
	</style>
	<title>Tambah Data</title>
</head>
<body>
	<h2>TAMBAH DATA PRODUK</h2>
	<form method="POST">
		<div class="grup">
			<label>Nama Produk :</label>
			<input type="text" name="nama_produk" autocomplete="off">
		</div>
		<div class="grup">
			<label>Harga :</label>
			<input type="text" name="harga" autocomplete="off">
		</div>
		<div class="grup">
			<label>Jumlah :</label>
			<input type="text" name="jumlah" autocomplete="off">
		</div>
		<div class="grup">
			<label>Keterangan :</label>
			<input type="text" name="keterangan" autocomplete="off">
		</div>
		<button type="submit" name="submit">Tambahkan Data</button>
	</form>
	<br>
	<a href="index.php"><< Halaman Utama</a>
</body>
</html>