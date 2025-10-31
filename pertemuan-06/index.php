<?php
  $nim             = "2511500091";
  $nama_lengkap    = "Muhammad Aidil Zaky";
  $tempat_lahir    = "Pangkalpinang";
  $tanggal_lahir   = "13 Oktober 2007";
  $hobi            = "Jual beli COD dan akun game 🎮, serta mempelajari hal-hal baru tentang teknologi 💻 dan dunia digital 🌐";
  $pasangan        = "Elsya Vebrianti – pasangan terbaik yang saya temui sejak SMK kelas 10, dan semoga nanti bisa jadi pasangan hidup saya ❤️🔥";
  $pekerjaan       = "Mahasiswa";
  $nama_ayah       = "Wandy Aprizal";
  $nama_ibu        = "Denti Seprianti";
  $adik_laki       = "Faris Fatih";
  $adik_perempuan  = "Aura Aliana";
?>

<section id="about">
  <h2>Tentang Saya</h2>
  <link rel="stylesheet" href="style.css">

  <div class="about-container">
    <p><strong>NIM:</strong> <?= $nim; ?></p>
    <p><strong>Nama Lengkap:</strong> <?= $nama_lengkap; ?> 😎</p>
    <p><strong>Tempat Lahir:</strong> <?= $tempat_lahir; ?></p>
    <p><strong>Tanggal Lahir:</strong> <?= $tanggal_lahir; ?></p>
    <p><strong>Hobi:</strong> <?= $hobi; ?></p>
    <p><strong>Pasangan:</strong> <?= $pasangan; ?></p>
    <p><strong>Pekerjaan:</strong> <?= $pekerjaan; ?></p>
    <p><strong>Nama Ayah:</strong> <?= $nama_ayah; ?></p>
    <p><strong>Nama Ibu:</strong> <?= $nama_ibu; ?></p>
    <p><strong>Nama Adik Laki-Laki:</strong> <?= $adik_laki; ?></p>
    <p><strong>Nama Adik Perempuan:</strong> <?= $adik_perempuan; ?></p>
  </div>
</section>
