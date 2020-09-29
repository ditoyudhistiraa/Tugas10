<?php  

$conn = mysqli_connect("localhost", "root", "", "arkademy");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
};

function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data['nama_produk']);
	$harga = htmlspecialchars($data['harga']);
	$jumlah = htmlspecialchars($data['jumlah']);
	$keterangan = htmlspecialchars($data['keterangan']);

	$query = "INSERT INTO produk 
				VALUES
			('', '$nama', '$keterangan', '$harga', '$jumlah')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
};

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $_GET['id'];
	$nama = htmlspecialchars($data['nama_produk']);
	$harga = htmlspecialchars($data['harga']);
	$jumlah = htmlspecialchars($data['jumlah']);
	$keterangan = htmlspecialchars($data['keterangan']);

	$query = "UPDATE produk 
				SET
			nama_produk= '$nama',
			keterangan = '$keterangan',
			harga = '$harga',
			jumlah = '$jumlah' WHERE id= $id";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>