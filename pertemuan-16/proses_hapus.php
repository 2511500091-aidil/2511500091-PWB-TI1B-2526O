<?php
require 'koneksi.php';

$id = $_GET['id'];

mysqli_query(
    $koneksi,
    "DELETE FROM tbl_anggota WHERE id_anggota='$id'"
);

header("Location: baca_anggota.php");
exit;
