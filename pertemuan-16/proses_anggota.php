<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ================= VALIDASI =================
    $fields = [
        'txtNoAng','txtNmAng','txtJabAng','txtTglJadi',
        'txtSkill','txtGaji','txtNoWA','txBatalion',
        'txtBB','txtTB'
    ];

    foreach ($fields as $f) {
        if (empty($_POST[$f])) {
            header("Location: index.php?status=gagal");
            exit;
        }
    }

    // ================= SANITASI =================
    $nomor      = htmlspecialchars(trim($_POST['txtNoAng']));
    $nama       = htmlspecialchars(trim($_POST['txtNamAng']));
    $jabatan    = htmlspecialchars(trim($_POST['txtJabAng']));
    $tgl_jadi   = $_POST['txtTglJadi'];
    $kemampuan  = htmlspecialchars(trim($_POST['txtSkill']));
    $gaji       = (float) $_POST['txtGaji'];
    $wa         = htmlspecialchars(trim($_POST['txtNoWA']));
    $batalion   = htmlspecialchars(trim($_POST['txtBatalion']));
    $bb         = (int) $_POST['txtBB'];
    $tb         = (int) $_POST['txtTB'];

    // ================= INSERT =================
    $sql = "INSERT INTO tbl_anggota 
        (nomor_anggota, nama_anggota, jabatan_anggota, tanggal_jadi,
         kemampuan_anggota, gaji_anggota, nomor_wa,
         batalion_anggota, berat_badan, tinggi_badan)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sssssdssii",
        $nomor,
        $nama,
        $jabatan,
        $tgl_jadi,
        $kemampuan,
        $gaji,
        $wa,
        $batalion,
        $bb,
        $tb
    );

if (!mysqli_stmt_execute($stmt)) {
    echo "<h3>INSERT GAGAL</h3>";
    echo "MySQL Error: " . mysqli_error($koneksi) . "<br><br>";

    echo "Data POST:<pre>";
    var_dump($_POST);
    echo "</pre>";

    exit;
}

header("Location: index.php?status=sukses");
exit;
}
