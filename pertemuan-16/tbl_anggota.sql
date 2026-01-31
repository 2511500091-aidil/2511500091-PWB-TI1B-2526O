-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Jan 2026 pada 06.40
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nomor_anggota` varchar(20) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jabatan_anggota` varchar(50) NOT NULL,
  `tanggal_jadi` date NOT NULL,
  `kemampuan_anggota` varchar(100) NOT NULL,
  `gaji_anggota` decimal(12,2) NOT NULL,
  `nomor_wa` varchar(20) NOT NULL,
  `batalion_anggota` varchar(50) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nomor_anggota`, `nama_anggota`, `jabatan_anggota`, `tanggal_jadi`, `kemampuan_anggota`, `gaji_anggota`, `nomor_wa`, `batalion_anggota`, `berat_badan`, `tinggi_badan`, `created_at`) VALUES
(1, '1', 'Test', 'Admin', '2024-01-31', 'PHP', 5000000.00, '08123456789', 'A', 70, 170, '2026-01-31 06:13:45'),
(2, 'A001', 'Adil Pratama', 'Ketua', '2024-01-31', 'Manajemen & PHP', 5000000.00, '081234567890', 'Batalion Alpha', 70, 170, '2026-01-31 06:24:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `nomor_anggota` (`nomor_anggota`),
  ADD UNIQUE KEY `nomor_wa` (`nomor_wa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
