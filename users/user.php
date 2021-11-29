<?php 

    require 'functions.php';

    $user = query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/art.css">
    <title>Tabel Users</title>
</head>
<body id="Body1">
    <div class="nav1">
        <a class="Logo"href="../index.php">Art's Shop</a>
        <nav>
            <ul class="nav_link">
                <li><a class="link"href="../admin/admin.php">Admin</a></li>
                <li><a class="link"href="../Manage/manage.php">Manage</a></li>
            </ul>
        </nav>
    </div>
    <h1 class="jdl-u">Halaman Data User </h1>
    <a href="tambahuser.php" class="links">Pergi ke Halaman tambahkan data!</a><br><br><br>
    <table border="1" cellspacing="2" cellpadding="5">
        <tr>
            <th class="th-u">No</th>
            <th class="th-u">Nama</th>
            <th class="th-u">Username</th>
            <th class="th-u">Password</th>
            <th class="th-u">Aksi</th>
        </tr>
        <?php  $i = 1; ?>
        <?php foreach($user as $row) : ?>
        <tr>
            <td class="td-u"><?= $i++; ?></td>
            <td class="td-u"><?= $row['nama'];?></td>
            <td class="td-u"><?= $row['username'];?></td>
            <td class="td-u"><?= $row['password'];?></td>
            <td class="td-u"><a href="ubahuser.php?id=<?= $row["id"]?>">Ubah<a> | <a href="hapususer.php?id=<?= $row["id"]?>">Hapus</a></td>
        </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>