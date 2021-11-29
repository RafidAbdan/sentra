<?php 
	require 'functions.php';

	//ambil data di URL
	$id = $_GET["id"];

	//query data mahasiswa berdasarkan id
	$user = query("SELECT * FROM users WHERE id = $id")[0]; 
	
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		

		//cek apakah data berhasil diubah?
		if (ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'user.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'ubahuser.php';
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
	<title>Data User</title>
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

<h1 class="jdl-a">Ubah data User</h1>

<form action="" method="post">
	<input type="hidden" name="id" value="<?= $user["id"]; ?>">
	<ul>
		<li>
			<label for="nama" class="label-mp">Nama : </label><br>
			<input type="text" name="nama" id="nama" value="<?= $user["nama"]; ?>" required>
		</li><br><br>
		<li>
			<label for="username" class="label-mp">Username : </label><br>
			<input type="text" name="username" id="username" value="<?= $user["username"]; ?>">
		</li><br><br>
		<li>
			<label for="password" class="label-mp">Password : </label><br>
			<input type="password" name="password" id="password" value="<?= $user["password"]; ?>">
		</li><br><br>
		<li>
			<button type="submit" name="submit" class="btn-submit">UBAH DATA!</button>
		</li>
	</ul>

</form>


</body>
</html>