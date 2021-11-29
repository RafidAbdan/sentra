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
	$username = htmlspecialchars($data['username']);
	$pass = htmlspecialchars($data['password']);

	$password = password_hash($pass, PASSWORD_DEFAULT);

	$query = "INSERT INTO admin VALUES ('', '$nama', '$username', '$password')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function ubah($data){
	global $conn;
	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$username = htmlspecialchars($data['username']);
	$pass = htmlspecialchars($data['password']);

	$password = password_hash($pass, PASSWORD_DEFAULT);

	$query = "UPDATE admin SET 
				nama = '$nama', 
				username = '$username', 
				password = '$password'
			 WHERE id = $id
			 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM admin WHERE id = $id");

	return mysqli_affected_rows($conn);
}
 ?>