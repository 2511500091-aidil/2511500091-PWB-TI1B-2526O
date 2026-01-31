<?php
require_once "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM tbl_anggota WHERE id_anggota = '$id'"
);

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}
?>

<h2>Edit Data Anggota</h2>

<form action="proses_edit.php" method="POST">

    <!-- PRIMARY KEY (READONLY) -->
    <label>ID Anggota</label><br>
    <input type="text" name="id_anggota"
           value="<?= $data['id_anggota']; ?>"
           readonly><br><br>

    <label>Nomor Anggota</label><br>
    <input type="text" name="nomor_anggota"
           value="<?= $data['nomor_anggota']; ?>" required><br><br>

    <label>Nama Anggota</label><br>
    <input type="text" name="nama_anggota"
           value="<?= $data['nama_anggota']; ?>" required><br><br>

    <label>Jabatan</label><br>
    <input type="text" name="jabatan_anggota"
           value="<?= $data['jabatan_anggota']; ?>" required><br><br>

    <label>Tanggal Jadi</label><br>
    <input type="date" name="tanggal_jadi"
           value="<?= $data['tanggal_jadi']; ?>" required><br><br>

    <label>Kemampuan</label><br>
    <input type="text" name="kemampuan_anggota"
           value="<?= $data['kemampuan_anggota']; ?>" required><br><br>

    <label>Gaji</label><br>
    <input type="number" name="gaji_anggota"
           value="<?= $data['gaji_anggota']; ?>" required><br><br>

    <label>No WA</label><br>
    <input type="text" name="nomor_wa"
           value="<?= $data['nomor_wa']; ?>" required><br><br>

    <label>Batalion</label><br>
    <input type="text" name="batalion_anggota"
           value="<?= $data['batalion_anggota']; ?>" required><br><br>

    <label>Berat Badan</label><br>
    <input type="number" name="berat_badan"
           value="<?= $data['berat_badan']; ?>" required><br><br>

    <label>Tinggi Badan</label><br>
    <input type="number" name="tinggi_badan"
           value="<?= $data['tinggi_badan']; ?>" required><br><br>

    <!-- TOMBOL -->
    <button type="submit">Kirim</button>
    <a href="baca_anggota.php">
        <button type="button">Batal</button>
    </a>

</form>
