<?php 

//Menghubungkan ke Database
$conn = mysqli_connect("localhost", "root", "", "artsshop");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}
function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data['nama']);
	$tipe = htmlspecialchars($data['tipe']);
	$harga = htmlspecialchars($data['harga']);
	$gambar = htmlspecialchars($data['gambar']);


	$query = "INSERT INTO paint VALUES ('', '$nama', '$tipe', '$harga', '$gambar')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function ubah($data){
	global $conn;
	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$tipe = htmlspecialchars($data['tipe']);
	$harga = htmlspecialchars($data['harga']);
	$gambar = htmlspecialchars($data['gambar']);


	$query = "UPDATE paint SET 
				nama = '$nama', 
				tipe = '$tipe', 
				harga = '$harga', 
				gambar = '$gambar' 
			 WHERE id = $id
			 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM paint WHERE id = $id");

	return mysqli_affected_rows($conn);
}
 ?>