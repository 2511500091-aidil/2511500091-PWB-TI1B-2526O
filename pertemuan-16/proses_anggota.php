<?php
require_once 'koneksi.php';

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
    $nomor_anggota      = htmlspecialchars(trim($_POST['txtNoAng']));
    $nama_anggota       = htmlspecialchars(trim($_POST['txtNamAngx`']));
    $jabatan_anggota    = htmlspecialchars(trim($_POST['txtJabAng']));
    $tanggal_jadi   = $_POST['txtTglJadi'];
    $kemampuan_anggota  = htmlspecialchars(trim($_POST['txtSkill']));
    $gaji_anggota       = (float) $_POST['txtGaji'];
    $nomor_wa         = htmlspecialchars(trim($_POST['txtNoWA']));
    $batalion_anggota   = htmlspecialchars(trim($_POST['txtBatalion']));
    $berat_badan         = (int) $_POST['txtBB'];
    $tinggi_badan         = (int) $_POST['txtTB'];

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
