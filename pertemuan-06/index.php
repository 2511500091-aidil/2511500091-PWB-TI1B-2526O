<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <p>Ini contoh paragraf HTML.</p>
      <?php
        echo "<p>Halo Dunia!</p>";
        echo "<p>Nama Saya Muhammad Aidil Zaky</p>";
      ?>
    </section>

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
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="" method="GET">
        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; <?= $nama_lengkap; ?> [<?= $nim; ?>]</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
