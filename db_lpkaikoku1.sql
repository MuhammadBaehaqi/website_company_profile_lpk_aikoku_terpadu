-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 04:17 PM
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
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `title`, `description`, `link`, `icon`) VALUES
(7, 'tes1aaaaaaaaaaaaaa', 'vvvvvvvvvvvv', 'dsf', 'efsd'),
(8, 'coba', 'q1e', 'dasd', 'cvds'),
(9, 'cc', 'casca', 'dasd', 'sf'),
(10, 'cc', 'casca', 'dasd', 'sf'),
(11, 'aaaaaaaaaa', 'fdadsd', 'asd', 'dsad'),
(12, 'ere', 'ere', 'ere', 'er'),
(13, 'ana', 'tes', 'index.php', 'fa-handshake'),
(14, 'cobaaaaaa', 'halosssssss', 'index.php', 'fa-handshake'),
(16, 'ddd', 'ddddd', 'profile.php', 'fa-handshake'),
(17, 'aaaaaafccccccccc', 'sad', 'index.php', 'fa-regular fa-handshake'),
(18, 'qw', 'eqr', 'profile.php', 'fa-handshake'),
(19, 'qw', 'eqr', 'profile.php', 'fa-handshake'),
(20, 'tesd', 'ea', 'profile.php', 'fa-handshake'),
(21, 'tesd', 'ea', 'profile.php', 'fa-handshake'),
(22, 're', 'sd', 'index.php', 'fa-handshake'),
(23, 'coba1', 'dqw', 'profile.php', 'fa-handshake');

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
(1, 'Imam', 'muhammadbaehaqi12@gmail.comaas', '202cb962ac59075b964b07152d234b70', 'admin\r\n'),
(2, 'Ali Chamdan', 'muhammadbaehaqi12@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'Octa Hidayat', '', '202cb962ac59075b964b07152d234b70', 'staff'),
(5, 'haki', 'dd@d', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'zak', 'zak@12', '202cb962ac59075b964b07152d234b70', 'user'),
(14, 'dimas', 'dimas@dimas', '202cb962ac59075b964b07152d234b70', 'admin'),
(15, 'hoki', 'hoki@hoki', '202cb962ac59075b964b07152d234b70', 'admin'),
(16, 'ana', 'ana@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(19, 'ani', 'ani@gmail', '202cb962ac59075b964b07152d234b70', 'user'),
(22, '', '', '', ''),
(23, 'superadmin', 'superadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'super admin'),
(24, 'coba', 'coba@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(25, 'Contoh', 'contoh@32134', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

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
(6, 'aaaaaaaaaaaaafd', 12111111, 'ASE@JYFsef', 'ggggggsdf', 'aaaaasdfxc'),
(7, 'ddd', 12, 'muhammadbaehaqi12@gmail.com', '1ed12', 'sd'),
(8, 'zaki', 1213, 'zaki@gmail.com', 'ketanggungan', 'ddddddddddd'),
(9, 'mad', 1111, 'Was@d', 'aaa', 'ss'),
(10, 'SASaa', 0, 'ssssssssssssssaaaaaaaddS@Wd', 'sssssssssssssss', 'ssssssssssssssssD'),
(11, 'zakiaaaaaa', 0, 'sda!@dasz', 'asdas', 'asdasdaAA'),
(12, 'qqqqqqqqqqq11111', 0, '12ws@edwqs11111111', 'qwd233111111', 'vv'),
(13, 'qqqqqqqqqqq11111', 0, '12ws@edwqs11111111', 'qwd233111111', 'vvaaaaaaa'),
(14, 'dddddd', 0, 'edsa@Eds', 'asfas', 'efwd'),
(15, 'aaa', 0, 'dww@dws', 'sdq23', 'sda'),
(16, 'qqqqqqqqqqq11111', 0, '12ws@edwqs11111111', 'qwd233111111', 'vvaaaaaaa'),
(17, 'qqqqqqqqqqq11111', 0, '12ws@edwqs11111111', 'qwd233111111', 's'),
(18, 'aaa', 0, 'dww@dws', 'sdq23', 'sd'),
(19, 'haki', 12, 'da@ew', 'adq', 'fdas'),
(20, 'ada', 32, 'd@d', '4trg', 'tess'),
(21, 'safd', 1324, 'tdg@rfesfs', 'sert43', 'h45y'),
(23, 'ANIS', 1231425, 'dsfs@aerff32', 'erasf', 'sertwr');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_fields`
--

CREATE TABLE `tb_form_fields` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `OPTIONS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `no_telepon` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_keluarga` varchar(100) NOT NULL,
  `telepon_keluarga` varchar(100) NOT NULL,
  `alamat_email` varchar(50) NOT NULL,
  `bidang` enum('Magang','Tokutei Ginou','Engineering','') NOT NULL,
  `pendidikan_terakhir` enum('SD','MI','SMP','MTS','SMA','SMK','ALIYAH','D3','S1','S2','S3') NOT NULL,
  `pengalaman_kerja` varchar(150) DEFAULT NULL,
  `status_pernikahan` enum('Belum Menikah','Menikah','Janda/Duda','') NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `pengalaman_jepang` enum('Pemula','Ex-Jepang','','') NOT NULL,
  `penyakit_kronis` varchar(100) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `nama_form` varchar(255) NOT NULL,
  `type` enum('text','textarea','select') NOT NULL,
  `opsi` text DEFAULT NULL,
  `tanggal_upload` date NOT NULL DEFAULT curdate(),
  `status` enum('Pending','Diterima','Ditolak') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelajar`
--

INSERT INTO `tb_pelajar` (`id_regis`, `Nama_lengkap`, `TTL`, `tanggal_lahir`, `usia`, `Agama`, `alamat_ktp`, `Jenis_Kelamin`, `no_telepon`, `alamat`, `alamat_keluarga`, `telepon_keluarga`, `alamat_email`, `bidang`, `pendidikan_terakhir`, `pengalaman_kerja`, `status_pernikahan`, `tinggi_badan`, `berat_badan`, `pengalaman_jepang`, `penyakit_kronis`, `golongan_darah`, `nama_form`, `type`, `opsi`, `tanggal_upload`, `status`) VALUES
(34, 'zz', 'tegal', '2005-02-16', '19', 'Kristen', 'dqw', 'Perempuan', '', 'Petunjungan', 'banjaratmaaaa', '', 'ddddddd@rf', '', '', 'bb', '', '', '', '', '', 'B', '', 'text', NULL, '2024-12-22', 'Pending'),
(35, 'AAN', 'dw', '', 'ddddddwq32', '', 'dw', '', 'dqwqr33', '', 'q32rfdd', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(38, '', '', '', '', '', '', '', '', '', 'aaaaaaaa', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(40, '', '', '', 'dw', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(41, '', '13wed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(42, '', '13wed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(45, ';p', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(46, 'vv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(49, 'nandaaaaaaaaaaaaaaaaaaaaa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'aa', '', 'text', NULL, '2024-12-22', 'Pending'),
(51, 'hhhhhhhhhhhhhhhhhhh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(52, 'ana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(53, '', '', '', '', '', '', 'Laki-Laki', '', '', '', '', '', 'Magang', 'SD', '', 'Belum Menikah', '', '', '', '', '', 'd', 'text', NULL, '2024-12-22', 'Pending'),
(54, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(55, 'asep', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(56, 'tes', '', '', '', '', '', '', '', '', '', '', '', '', '', 'agaaaaaaa', '', '', '', '', '', '', '', 'text', NULL, '2024-12-22', 'Pending'),
(57, 'aaad', '', '', '', '', '', 'Laki-Laki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2024-12-23', 'Pending'),
(58, '', '', '', '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2025-01-01', 'Pending'),
(59, 'gf', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2025-01-01', 'Pending'),
(60, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2025-01-13', 'Pending'),
(61, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2025-01-13', 'Pending'),
(62, 'bbbbbbbb', '', '', '12', '', '', 'Perempuan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2025-01-13', 'Pending'),
(63, 'nawul', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'text', NULL, '2025-01-15', 'Pending'),
(64, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ex-Jepang', '', '', '', 'text', NULL, '2025-01-21', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

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
-- Indexes for table `tb_form_fields`
--
ALTER TABLE `tb_form_fields`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_admin1`
--
ALTER TABLE `tb_admin1`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_form_fields`
--
ALTER TABLE `tb_form_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
