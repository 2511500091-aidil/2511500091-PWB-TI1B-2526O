<?php
session_start();
require_once __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php#contact');
}

// Bagian b. Ambil data $POST, trim, htmlspecialchars (asumsi fungsi 'bersihkan' sudah ada)
$nama = bersihkan($_POST['txtNama'] ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');

// Bagian c. Validasi (tidak boleh kosong, email valid)
# Validasi sederhana
$errors = []; // Ini array untuk menampung semua error yang ada
if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
}

if ($email === '') {
    $errors[] = 'Email wajib diisi.';
} elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format e-mail tidak valid.';
}

if ($pesan === '') {
    $errors[] = 'Pesan wajib diisi.';
}

# Jika kondisi di bawah ini hanya dikerjakan jika ada error,
# simpan nilai lama dan pesan error, lalu redirect
# (konsep PRG)
if (!empty($errors)) {
    $_SESSION['old'] = [
        'nama' => $nama,
        'email' => $email,
        'pesan' => $pesan,
    ];
    
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('index.php#contact');
}

# Menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_tamu (cnama, cemail, cpesan) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    # Jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
    $_SESSION["flash_error"] = "Terjadi kesalahan sistem (prepare gagal).";
    redirect_ke("index.php#contact");
}

# bind parameter dan eksekusi (s = string)
// diasumsikan variabel $nama, $email, dan $pesan sudah tersedia
mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);

// Eksekusi statement dan cek hasilnya
if (mysqli_stmt_execute($stmt)) {
    # Jika berhasil, kosongkan old value, beri pesan sukses
    unset($_SESSION["old"]);
    $_SESSION["flash_sukses"] = "Terima kasih, data Anda sudah tersimpan.";
    redirect_ke("index.php#contact"); # Pola PRG: kembali ke form / halaman home
} else {
    # Jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION["old"] = [
        "nama" => $nama,
        "email" => $email,
        "pesan" => $pesan,
    ];
    $_SESSION["flash_error"] = "Data gagal disimpan. Silakan coba lagi.";
    redirect_ke("index.php#contact");
}

# tutup statement
mysqli_stmt_close($stmt);

?>

$arrContact = [
  "nama" => $_POST["txtNama"] ?? "",
  "email" => $_POST["txtEmail"] ?? "",
  "pesan" => $_POST["txtPesan"] ?? ""
];
$_SESSION["contact"] = $arrContact;

$arrBiodata = [
  "nim" => $_POST["txtNim"] ?? "",
  "nama" => $_POST["txtNmLengkap"] ?? "",
  "tempat" => $_POST["txtT4Lhr"] ?? "",
  "tanggal" => $_POST["txtTglLhr"] ?? "",
  "hobi" => $_POST["txtHobi"] ?? "",
  "pasangan" => $_POST["txtPasangan"] ?? "",
  "pekerjaan" => $_POST["txtKerja"] ?? "",
  "ortu" => $_POST["txtNmOrtu"] ?? "",
  "kakak" => $_POST["txtNmKakak"] ?? "",
  "adik" => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
