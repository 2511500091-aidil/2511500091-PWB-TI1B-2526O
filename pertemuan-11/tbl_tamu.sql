-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2025 at 06:48 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

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
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Muhammad Aidil Zaky', 'dilajaa06@gmail.com', 'Belajar PWD itu asik loh!!!', '2025-12-14 01:41:31'),
(2, 'Akmal Fadhillah Dwiputra', 'defiarftri02@gmail.com', 'Ngoding itu sangat seru!', '2025-12-14 01:41:31'),
(3, 'Faris Fatih', 'farisfatih08@gmail.com', 'Aku mau belajar goding biar bisa jadi programmer!', '2025-12-14 01:41:31'),
(4, 'Aura Aliana', 'auraaliana112@gmail.com', 'Halo, Saya Pemula!', '2025-12-14 01:41:31'),
(5, 'Wabi Hamdika', 'wabihamdika887@gmail.com', 'Hai, saya merupakan programmer pemula!', '2025-12-14 01:41:31'),
(6, 'Adil Zaky', 'dilajaa12@gmail.com', 'Hai, saya Aidil!', '2025-12-14 01:41:31'),
(7, 'Dil', 'dilajaa08@gmail.com', 'Hai, saya Dil', '2025-12-14 01:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
