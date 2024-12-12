-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lpkaikoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin1`
--

CREATE TABLE `tb_admin1` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin1`
--

INSERT INTO `tb_admin1` (`id_admin`, `username`, `email_admin`, `password`, `roles`) VALUES
(1, 'Imam Joharudin', 'muhammadbaehaqi12@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin\r\n'),
(2, 'Ali Chamdan', 'muhammadbaehaqi12@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin'),
(3, 'Octa Hidayat', '', 'ba0991843e85f54379110756eea93ed7', 'staff'),
(5, 'haki', '', '8e0cdbc8beefb35843dd2e835c5eee03', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(100) NOT NULL,
  `no_contact` int(20) NOT NULL,
  `email_contact` varchar(50) NOT NULL,
  `alamat_contact` varchar(100) NOT NULL,
  `pesan_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id_contact`, `nama_contact`, `no_contact`, `email_contact`, `alamat_contact`, `pesan_contact`) VALUES
(1, 'haki', 12312, 'sadfqw3@ed', 'dhd', 'saya ingin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto_galeri` varchar(900) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `upload_date` varchar(500) NOT NULL,
  `detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `foto_galeri`, `keterangan`, `upload_date`, `detail`) VALUES
(5, 'uploads/jpng.jpg', 'Fuji\r\n', '2024-12-12 17:14:52', ''),
(6, 'uploads/Fujiyama.jpg', 'fuji', '2024-12-12 17:23:46', ''),
(7, 'uploads/lpk.jpg', 'logo', '2024-12-12 17:25:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajar`
--

CREATE TABLE `tb_pelajar` (
  `id_regis` int(11) NOT NULL,
  `Nama_lengkap` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `hobi` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_keluarga` varchar(100) NOT NULL,
  `telepon_keluarga` varchar(100) NOT NULL,
  `alamat_email` varchar(50) NOT NULL,
  `bidang` enum('Magang','Tokutei Ginou','Engineering','') NOT NULL,
  `pendidikan_terakhir` enum('SD','MI','SMP','MTS','SMA','SMK','ALIYAH','D3','S1','S2','S3') NOT NULL,
  `pengalaman_kerja` varchar(150) NOT NULL,
  `status_pernikahan` enum('Belum Menikah','Menikah','Janda/Duda','') NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `buta_warna` enum('Ya','Tidak','','') NOT NULL,
  `kesehatan` varchar(100) NOT NULL,
  `penyakit_kronis` varchar(100) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelajar`
--

INSERT INTO `tb_pelajar` (`id_regis`, `Nama_lengkap`, `TTL`, `tanggal_lahir`, `usia`, `Agama`, `alamat_ktp`, `Jenis_Kelamin`, `hobi`, `no_telepon`, `alamat`, `alamat_keluarga`, `telepon_keluarga`, `alamat_email`, `bidang`, `pendidikan_terakhir`, `pengalaman_kerja`, `status_pernikahan`, `tinggi_badan`, `berat_badan`, `buta_warna`, `kesehatan`, `penyakit_kronis`, `golongan_darah`, `kewarganegaraan`) VALUES
(31, 'Hakihoki', 'petunjungan', '2004-05-04', '90', 'islam', 'BREBES', 'Laki-Laki', '', '085875962872', 'dqewuigdg', 'Petunjungan', '', 'BREBES@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'zz', 'tegal', '2005-02-16', '19', 'Kristen', 'dqw', 'Perempuan', '', 'ef', 'Petunjungan', 'd3eqwd', '', 'ddddddd@rf', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'AAN', 'dw', '', 'ddddddwq32', '', 'dw', '', '', 'dqwqr33', '', 'q32rfdd', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ef'),
(40, '', '', '', 'dw', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '', '13wed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '', '13wed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'wda'),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'few'),
(45, ';p', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ht'),
(46, 'vv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin1`
--
ALTER TABLE `tb_admin1`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  ADD PRIMARY KEY (`id_regis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin1`
--
ALTER TABLE `tb_admin1`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
