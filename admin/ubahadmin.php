<?php 
	require 'functions.php';

	//ambil data di URL
	$id = $_GET["id"];

	//query data mahasiswa berdasarkan id
	$admin = query("SELECT * FROM admin WHERE id = $id")[0]; 
	
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		

		//cek apakah data berhasil diubah?
		if (ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'admin.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'ubahadmin.php';
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
                <li><a class="link"href="admin.php">Admin </a></li>
                <li><a class="link"href="../users/user.php">User</a></li>
                <li><a class="link"href="../Manage/manage.php">Manage</a></li>
            </ul>
        </nav>
    </div>

<h1 class="jdl-a">Ubah data Admin</h1>

<form action="" method="post">
	<input type="hidden" name="id" value="<?= $admin["id"]; ?>">
	<ul>
		<li>
			<label for="nama" class="label-a">Nama : </label><br>
			<input type="text" name="nama" id="nama" value="<?= $admin["nama"]; ?>" required>
		</li><br><br>
		<li>
			<label for="username" class="label-a">Username : </label><br>
			<input type="text" name="username" id="username" value="<?= $admin["username"]; ?>">
		</li><br><br>
		<li>
			<label for="password" class="label-a">Password : </label><br>
			<input type="password" name="password" id="password" value="<?= $admin["password"]; ?>">
		</li><br><br>
		<li>
			<button class="btn-submit" type="submit" name="submit">UBAH DATA!</button>
		</li>
	</ul>

</form>


</body>
</html>