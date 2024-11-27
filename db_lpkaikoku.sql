-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 06:47 AM
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(31, 'Haki', 'petunjungan', '2007-01-11', '18', 'islam', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'AAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'z', 'tegal', '2005-02-16', '19', 'Kristen', '', 'Perempuan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  ADD PRIMARY KEY (`id_regis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
