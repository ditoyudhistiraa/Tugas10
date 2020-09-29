<?php 
require 'functions.php';

$id = $_GET['id'];

$data = query("SELECT * FROM produk WHERE id=$id")[0];

if( isset( $_POST['submit']) ){
	if(ubah($_POST) > 0){
		echo "!! DATA BERHASIL DI UPDATE";
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
			margin: 10px 0;
		}
	</style>
	<title>Ubah Data</title>
</head>
<body>

	<h2>UBAH DATA PRODUK</h2>
	<form method="POST">
		<div class="grup">
			<label>Nama Produk :</label>
			<input type="text" name="nama_produk" autocomplete="off" value="<?= $data['nama_produk']; ?>">
		</div>
		<div class="grup">
			<label>Harga :</label>
			<input type="text" name="harga" autocomplete="off" value="<?= $data['harga']; ?>">
		</div>
		<div class="grup">
			<label>Jumlah :</label>
			<input type="text" name="jumlah" autocomplete="off" value="<?= $data['jumlah']; ?>">
		</div>
		<div class="grup">
			<label>Keterangan :</label>
			<input type="text" name="keterangan" autocomplete="off" value="<?= $data['keterangan']; ?>">
		</div>
		<button type="submit" name="submit">Ubah Data</button>
	</form>
	<br>
	<a href="index.php"><< Halaman Utama</a>
	
</body>
</html>