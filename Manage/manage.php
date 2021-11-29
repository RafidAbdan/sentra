<?php 

    require 'functions.php';

    $paint = query("SELECT * FROM paint");

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
        <a class="Logo"href="../index.html">Art's shop</a>
        <nav>
            <ul class="nav_link">
                <li><a class="link"href="../admin/admin.php">Admin</a></li>
                <li><a class="link"href="../users/user.php">User</a></li>
            </ul>
        </nav>
    </div>
    <h1 class="jdl-a">Halaman Data Pembelian User </h1>
    <a  class="links" href="tambahlukisan.php" style="font-size: 20px;">Pergi ke Halaman tambahkan data!</a><br><br><br>
    <table border="1" cellspacing="2" cellpadding="10" class="tbl-m">
        <tr>
            <th  class="th-a">No</th>
            <th class="th-a">Nama</th>
            <th class="th-a">Tipe</th>
            <th class="th-a">Harga</th>
            <th class="th-a">Gambar</th>
            <th class="th-a">Aksi</th>
        </tr>
        <?php  $i = 1; ?>
        <?php foreach($paint as $row) : ?>
        <tr>
            <td class="td-a"><?= $i++; ?></td>
            <td class="td-a"><?= $row['nama'];?></td>
            <td class="td-a"><?= $row['tipe'];?></td>
            <td class="td-a"><?= $row['harga'];?></td>
            <td class="td-a"><?= $row['gambar'];?></td>
            <td class="td-a"><a href="ubahlukisan.php?id=<?= $row["id"]?>">Ubah<a> | <a href="hapuslukisan.php?id=<?= $row["id"]?>">Hapus</a></td>
        </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>