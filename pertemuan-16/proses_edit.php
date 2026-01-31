<?php
require_once "koneksi.php";

$id = $_POST['id_anggota'];

$sql = "UPDATE tbl_anggota SET
    nomor_anggota = ?,
    nama_anggota = ?,
    jabatan_anggota = ?,
    tanggal_jadi = ?,
    kemampuan_anggota = ?,
    gaji_anggota = ?,
    nomor_wa = ?,
    batalion_anggota = ?,
    berat_badan = ?,
    tinggi_badan = ?
WHERE id_anggota = ?";

$stmt = mysqli_prepare($koneksi, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssssdssiii",
    $_POST['nomor_anggota'],
    $_POST['nama_anggota'],
    $_POST['jabatan_anggota'],
    $_POST['tanggal_jadi'],
    $_POST['kemampuan_anggota'],
    $_POST['gaji_anggota'],
    $_POST['nomor_wa'],
    $_POST['batalion_anggota'],
    $_POST['berat_badan'],
    $_POST['tinggi_badan'],
    $id
);

mysqli_stmt_execute($stmt);

header("Location: baca_anggota.php");
exit;
