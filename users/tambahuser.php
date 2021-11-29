<?php 
	require 'functions.php';
	// cek apakah sudah memencet tombol submit
	if (isset($_POST['submit'])) {
		
		if (tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'user.php';
				</script>
			";
		} else{
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'tambahuser.php';
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
                <li><a class="link"href="../admin/admin.php">Admin </a></li>
                <li><a class="link"href="user.php">User</a></li>
                <li><a class="link"href="../Manage/manage.php">Manage</a></li>
            </ul>
        </nav>
    </div>


<h1 class="jdl-a">Tambah data User</h1>

<form action="" method="post">
	<ul class="ul-mp">
		<li>
			<label for="nama" class="label-mp">Nama : </label><br>
			<input type="text" name="nama" id="nama" required> <!--required = agar input harus diisi dan tidak boleh kosong-->
		</li><br><br>
		<li>
			<label for="username" class="label-mp">Username : </label><br>
			<input type="text" name="username" id="username">
		</li><br><br>
		<li>
			<label for="password" class="label-mp">Password : </label><br>
			<input type="text" name="password" id="password">
		</li><br><br>
		<li>
			<button type="submit" name="submit" class="btn-submit">TAMBAHKAN DATA!</button>
		</li>
	</ul>

</form>


</body>
</html>