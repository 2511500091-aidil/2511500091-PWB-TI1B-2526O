<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $required = [
        'txtNoAng', 'txtNmAng', 'txtJabAng', 'txtTglJadi',
        'txtSkill', 'txtGaji', 'txtNoWA',
        'txBatalion', 'txtBB', 'txtTB'
    ];

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            header("Location: anggota.php?status=gagal");
            exit;
        }
    }

    $no_anggota   = htmlspecialchars(trim($_POST['txtNoAng']));
    $nama         = htmlspecialchars(trim($_POST['txtNmAng']));
    $jabatan      = htmlspecialchars(trim($_POST['txtJabAng']));
    $tgl_jadi     = $_POST['txtTglJadi'];
    $skill        = htmlspecialchars(trim($_POST['txtSkill']));
    $gaji         = (float) $_POST['txtGaji'];
    $no_wa        = htmlspecialchars(trim($_POST['txtNoWA']));
    $batalion     = htmlspecialchars(trim($_POST['txBatalion']));
    $bb           = (int) $_POST['txtBB'];
    $tb           = (int) $_POST['txtTB'];

    $sql = "INSERT INTO tbl_anggota
            (no_anggota, nama_anggota, jabatan, tanggal_jadi, skill,
             gaji, no_wa, batalion, berat_badan, tinggi_badan)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sssssdssii",
        $no_anggota,
        $nama,
        $jabatan,
        $tgl_jadi,
        $skill,
        $gaji,
        $no_wa,
        $batalion,
        $bb,
        $tb
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: anggota.php?status=sukses");
        exit;
    } else {
        header("Location: anggota.php?status=gagal");
        exit;
    }
}
