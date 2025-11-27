<?php
session_start();

$_SESSION["sesnama"]  = $_POST["txtNama"];
$_SESSION["sesemail"] = $_POST["txtEmail"];
$_SESSION["sespesan"] = $_POST["txtPesan"];

$arrBiodata = [
    "nim"       => $_POST["txtNim"],
    "nama"      => $_POST["txtNmLengkap"],
    "tempat"    => $_POST["txtT4Lhr"],
    "tanggal"   => $_POST["txtTglLhr"],
    "hobi"      => $_POST["txtHobi"],
    "pasangan"  => $_POST["txtPasangan"],
    "pekerjaan" => $_POST["txtKerja"],
    "ortu"      => $_POST["txtNmOrtu"],
    "kakak"     => $_POST["txtNmKakak"],
    "adik"      => $_POST["txtNmAdik"]
];

$_SESSION["biodata"] = $arrBiodata;

header("Location: index.php#about");
exit;
?>