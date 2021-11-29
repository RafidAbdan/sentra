<?php 

    require 'functions.php';

    $admin = query("SELECT * FROM admin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/art.css">
</head>
<body id="Body1">
    <div class="nav1">
        <a class="Logo"href="../index.php">Art's shop</a>
        <nav>
            <ul class="nav_link">
                <li><a class="link"href="../users/user.php">User</a></li>
                <li><a class="link"href="../Manage/manage.php">Manage</a></li>
            </ul>
        </nav>
    </div>
    <h1 class="jdl-a">Data Admin </h1>
    <a class="links" href="tambahadmin.php" >Tambahkan data!</a><br><br><br>
    <table border="1" cellspacing="2" cellpadding="5" class="tbl-admin">
        <tr>
            <th class="th-a">No</th>
            <th class="th-a">Nama</th>
            <th class="th-a">Username</th>
            <th class="th-a">Password</th>
            <th class="th-a">Aksi</th>
        </tr>
        <?php  $i = 1; ?>
        <?php foreach($admin as $row) : ?>
        <tr>
            <td class="td-a"><?= $i++; ?></td>
            <td class="td-a"><?= $row['nama'];?></td>
            <td class="td-a"><?= $row['username'];?></td>
            <td class="td-a"><?= $row['password'];?></td>
            <td class="td-a"><a href="ubahadmin.php?id=<?= $row["id"]?>">Ubah<a> | <a href="hapusadmin.php?id=<?= $row["id"]?>">Hapus</a></td>
        </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>