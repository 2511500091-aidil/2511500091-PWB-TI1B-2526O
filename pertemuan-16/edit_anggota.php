<?php
require 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM tbl_anggota WHERE id_anggota='$id'"
);
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Data Anggota</h2>

<form action="proses_edit.php" method="POST">
    <input type="hidden" name="id_anggota" value="<?= $row['id_anggota'] ?>">

    <input type="text" name="nomor_anggota" value="<?= $row['nomor_anggota'] ?>" required>
    <input type="text" name="nama_anggota" value="<?= $row['nama_anggota'] ?>" required>
    <input type="text" name="jabatan_anggota" value="<?= $row['jabatan_anggota'] ?>" required>
    <input type="date" name="tanggal_jadi" value="<?= $row['tanggal_jadi'] ?>" required>
    <input type="text" name="kemampuan_anggota" value="<?= $row['kemampuan_anggota'] ?>" required>
    <input type="number" name="gaji_anggota" value="<?= $row['gaji_anggota'] ?>" required>
    <input type="text" name="nomor_wa" value="<?= $row['nomor_wa'] ?>" required>
    <input type="text" name="batalion_anggota" value="<?= $row['batalion_anggota'] ?>" required>
    <input type="number" name="berat_badan" value="<?= $row['berat_badan'] ?>" required>
    <input type="number" name="tinggi_badan" value="<?= $row['tinggi_badan'] ?>" required>

    <button type="submit">Update</button>
</form>
