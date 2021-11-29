<?php 
	require 'functions.php';
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		
		if (tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'admin.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'tambahadmin.php';
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

<h1 class="jdl-a">Tambah data Admin</h1>

<form action="" method="post">
	<ul class="ul-a">
		<li>
			<label class="label-a" for="nama">Nama</label><br>
			<input type="text" name="nama" id="nama" required> <!--required = agar input harus diisi dan tidak boleh kosong-->
		</li><br><br>
		<li>
			<label class="label-a" for="username">Username
			</label><br>
			<input type="text" name="username" id="username">
		</li><br><br>
		<li>
			<label class="label-a" for="password">Password
			</label><br>
			<input type="text" name="password" id="password">
		</li><br><br>
		<li>
			<button class="btn-submit" type="submit" name="submit">Tambahkan Data!</button>
		</li>
	</ul>

</form>


</body>
</html>