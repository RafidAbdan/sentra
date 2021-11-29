<?php 
	require 'functions.php';
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		
		if (tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'manage.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'tambahlukisan.php';
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
	<title>Data Mahasiswa</title>
</head>
	<link rel="stylesheet" type="text/css" href="../css/art.css">
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

<h1 class="jdl-a">Tambah data pembelian</h1>

<form action="" method="post">
	<ul class="ul-a">
		<li>
			<label  class="label-a" for="nama">NAMA : </label><br>
			<input type="text" name="nama" id="nama" required> <!--required = agar input harus diisi dan tidak boleh kosong-->
		</li><br><br>
		<li>
			<label class="label-a" for="tipe">TIPE : </label><br>
			<input type="text" name="tipe" id="tipe">
		</li><br><br>
		<li>
			<label class="label-a" for="harga">HARGA : </label><br>
			<input type="text" name="harga" id="harga">
		</li><br><br>
		<li>
			<label class="label-a" for="gambar">GAMBAR : </label><br>
			<input type="text" name="gambar" id="gambar">
		</li><br><br>
		<li>
			<button class="btn-submit" type="submit" name="submit">TAMBAHKAN DATA!</button>
		</li>
	</ul>

</form>


</body>
</html>