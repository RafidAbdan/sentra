<?php 
	require 'functions.php';

	//ambil data di URL
	$id = $_GET["id"];

	//query data mahasiswa berdasarkan id
	$paint = query("SELECT * FROM paint WHERE id = $id")[0]; 
	
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		

		//cek apakah data berhasil diubah?
		if (ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'manage.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'ubahlukisan.php';
				</script>
			";
		}
		
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Lukisan</title>
	<link rel="stylesheet" type="text/css" href="../css/art.css">
</head>
<body id="Body1">
	<div class="nav1">
        <a class="Logo"href="home.html">Art's web</a>
       <nav>
            <ul class="nav_link">
                <li><a class="link"href="../admin/admin.php">Admin</a></li>
                <li><a class="link"href="../users/user.php">User</a></li>
                <li><a class="link"href="manage.php">Manage</a></li>
            </ul>
        </nav>
    </div>

<h1 class="jdl-a">Ubah data Pembelian</h1>

<form action="" method="post">
	<input type="hidden" name="id" value="<?= $paint["id"]; ?>">
	<ul class="ul-m">
		<li>
			<label  class="label-m" for="nama">NAMA : </label><br>
			<input type="text" name="nama" id="nama" value="<?= $paint["nama"]; ?>" required>
		</li><br><br>
		<li>
			<label  class="label-m" for="tipe">Tipe : </label><br>
			<input type="text" name="tipe" id="tipe" value="<?= $paint["tipe"]; ?>">
		</li><br><br>
		<li>
			<label  class="label-m" for="harga">Harga : </label><br>
			<input type="text" name="harga" id="harga" value="<?= $paint["harga"]; ?>">
		</li><br><br>
		<li>
			<label class="label-m"  for="gambar">GAMBAR : </label><br>
			<input type="text" name="gambar" id="gambar" value="<?= $paint["gambar"]; ?>">
		</li><br><br>
		<li>
			<button class="btn-submit" type="submit" name="submit">UBAH DATA!</button>
		</li>
	</ul>

</form>


</body>
</html>