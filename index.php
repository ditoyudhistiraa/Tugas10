<?php  
require 'functions.php';

$produk = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 10 | Dito Yudhistira</title>
</head>
<body>
	<h3>TUGAS 10 | Dito Yudhistira</h3>
	<a href="tambah.php"><button>Tambah Data</button></a>
	<table style="margin-top: 20px;" cellpadding="10" cellspacing="1" border="1">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach($produk as $data) :?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $data["nama_produk"]; ?></td>
				<td>Rp. <?= $data["harga"]; ?> </td>
				<td><?= $data["jumlah"]; ?></td>
				<td><?= $data["keterangan"]; ?></td>
				<td>
					<a href="ubah.php?id=<?= $data["id"]; ?>">Ubah</a>
					<a href="hapus.php?id=<?= $data["id"]; ?>">Hapus</a>
				</td>
			</tr>

		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>