<?php
$conn = mysqli_connect("localhost", "root", "", "artsshop");
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>