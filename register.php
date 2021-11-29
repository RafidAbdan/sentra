<?php 
	require 'users/functions.php';
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		
		if (tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'index.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'register.php';
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
	<title>Data Admin</title>
	<link rel="stylesheet" type="text/css" href="css/art.css">
</head>
<body id="Body1">
	<div class="nav1">
        <a class="Logo"href="register.php">Art's Shop</a>
    </div>

	<div class="rgs-form">
		<h1 class="jdl-rgs">Tambah data User</h1>

	<form class="isi-rgs"action="" method="post">
		<ul class="ul-rgs">
			<li>
				<label for="nama" class="label-rgs">Nama</label><br>
				<input type="text" name="nama" id="nama" required autocomplete="off" size="20"> <!--required = agar input harus diisi dan tidak boleh kosong-->
			</li><br><br>
			<li>
				<label for="username" class="label-rgs">Username</label><br>
				<input type="text" name="username" id="username" autocomplete="off">
			</li><br><br>
			<li>
				<label for="password" class="label-rgs">Password</label><br>
				<input type="text" name="password" id="password">
			</li><br><br>
			<li>
				<button type="submit" name="submit" class="btn-submit-rgs">TAMBAHKAN DATA!</button>
			</li>
		</ul>

	</form>
	<h4>sudah punya akun? <a href="login.php">klik disini</a></h4>
	</div>

	
</body>
</html>