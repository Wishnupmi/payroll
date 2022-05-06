-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2022 at 03:32 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absen`
--

CREATE TABLE `data_absen` (
  `id_data_absen` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masuk` int(11) NOT NULL,
  `alpha` int(11) DEFAULT NULL,
  `gaji_pokok` decimal(25,0) NOT NULL,
  `uang_transport` int(25) NOT NULL,
  `uang_makan` int(25) NOT NULL,
  `tunjangan_kawin` int(25) NOT NULL,
  `potongan_ijin` int(25) NOT NULL,
  `pinjaman` int(25) NOT NULL,
  `total_gaji` int(25) NOT NULL,
  `nama_jabatan` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sewa_motor` int(25) NOT NULL,
  `tanggal_input` datetime NOT NULL,
  `bpjs` int(25) NOT NULL,
  `ijin` int(11) DEFAULT NULL,
  `potongan_alpha` int(25) NOT NULL,
  `tahun` year(4) NOT NULL,
  `bulan` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_absen`
--

INSERT INTO `data_absen` (`id_data_absen`, `nama`, `nip`, `jabatan`, `masuk`, `alpha`, `gaji_pokok`, `uang_transport`, `uang_makan`, `tunjangan_kawin`, `potongan_ijin`, `pinjaman`, `total_gaji`, `nama_jabatan`, `sewa_motor`, `tanggal_input`, `bpjs`, `ijin`, `potongan_alpha`, `tahun`, `bulan`) VALUES
(80, 'Wishnu', '00000001', '1', 31, 2, '1900000', 10000, 15000, 200000, 0, 0, 2664877, 'Pegawai Tetap', 0, '0000-00-00 00:00:00', 123, 1, 0, 2022, '04'),
(81, 'Wishnu', '00000001', '3', 1, 0, '28000', 10000, 10000, 0, 0, 0, 48000, 'Sales', 0, '0000-00-00 00:00:00', 0, 0, 0, 2022, '02'),
(82, 'Wishnu', '00000001', '4', 1, 0, '28000', 10000, 10000, 0, 0, 0, 48000, 'Pegawai Gudang', 0, '0000-00-00 00:00:00', 0, 0, 0, 2022, '03'),
(83, 'Wishnu', '00000001', '4', 1, 0, '28000', 10000, 10000, 0, 0, 0, 0, 'Pegawai Gudang', 0, '0000-00-00 00:00:00', 0, 0, 0, 2022, '05'),
(85, 'Wishnu', '00000001', '4', 1, 0, '28000', 10000, 10000, 0, 0, 0, 48000, 'Pegawai Gudang', 0, '0000-00-00 00:00:00', 0, 0, 0, 2022, '04'),
(86, 'Wishnu', '00000001', '3', 1, 0, '28000', 10000, 10000, 0, 0, 0, 58000, 'Sales', 0, '0000-00-00 00:00:00', 0, 0, 0, 2022, '04'),
(87, 'Wishnu', '00000001', '1', 1, 0, '1900000', 10000, 15000, 200000, 0, 0, 2124877, 'Pegawai Tetap', 0, '0000-00-00 00:00:00', 123, 0, 0, 2022, '08'),
(88, 'Wishnu', '00000001', '1', 5, 2, '1900000', 10000, 15000, 200000, 10000, 0, 2814877, 'Pegawai Tetap', 0, '0000-00-00 00:00:00', 123, 1, 100000, 2022, '04');

-- --------------------------------------------------------

--
-- Table structure for table `data_gaji`
--

CREATE TABLE `data_gaji` (
  `id_data_gaji` int(11) NOT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gaji` int(50) NOT NULL,
  `uang_makan` int(25) NOT NULL,
  `uang_transport` int(25) NOT NULL,
  `tunjangan_kawin` int(25) NOT NULL,
  `sewa_motor` int(25) NOT NULL,
  `bpjs` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_gaji`
--

INSERT INTO `data_gaji` (`id_data_gaji`, `jabatan`, `gaji`, `uang_makan`, `uang_transport`, `tunjangan_kawin`, `sewa_motor`, `bpjs`) VALUES
(1, 'Pegawai Tetap', 1900000, 15000, 10000, 200000, 0, 123),
(3, 'Sales', 28000, 10000, 10000, 0, 10000, 0),
(4, 'Pegawai Gudang', 28000, 10000, 10000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_koperasi`
--

CREATE TABLE `data_koperasi` (
  `id_data_koperasi` int(11) NOT NULL,
  `nip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masuk_bln` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masuk_thn` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_koperasi`
--

INSERT INTO `data_koperasi` (`id_data_koperasi`, `nip`, `nama`, `masuk_bln`, `masuk_thn`) VALUES
(4, 'fg', 'fg', '12', '1'),
(5, 'fg', 'fg', '12', '1'),
(6, 'sd', 'sd', '12', '1212'),
(7, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status_bpjs` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama`, `nip`, `jabatan`, `alamat`, `status`, `status_bpjs`) VALUES
(12, 'Cecep', '12345678', 'Pegawai Kantor', 'Jl. Rejeki', 'Menikah', '0'),
(14, 'Wishnu', '00000001', 'Pegawai Kantor', 'Batang Jawa Tengah', 'Menikah', '0');

-- --------------------------------------------------------

--
-- Table structure for table `data_pinjaman`
--

CREATE TABLE `data_pinjaman` (
  `id_data_pinjaman` int(11) NOT NULL,
  `nip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pinjaman` int(11) NOT NULL,
  `jangka_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_pinjaman`
--

INSERT INTO `data_pinjaman` (`id_data_pinjaman`, `nip`, `nama`, `pinjaman`, `jangka_waktu`) VALUES
(1, 'fg', 'fg', 0, 1),
(2, 'fg', 'fg', 0, 1),
(3, 'fgfg', 'dfdfdfd', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_potongan`
--

CREATE TABLE `data_potongan` (
  `id_potongan` int(15) NOT NULL,
  `jenis_potongan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_potongan`
--

INSERT INTO `data_potongan` (`id_potongan`, `jenis_potongan`, `jumlah`) VALUES
(2, 'Alpha', 100000),
(3, 'Ijin', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `data_slip_gaji`
--

CREATE TABLE `data_slip_gaji` (
  `id_slip_gaji` int(15) NOT NULL,
  `Nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `masuk` int(11) NOT NULL,
  `tidak_masuk` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `uang_transport` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `tunjangan_kawin` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `pinjaman` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_slip_gaji`
--

INSERT INTO `data_slip_gaji` (`id_slip_gaji`, `Nama`, `nip`, `jabatan`, `masuk`, `tidak_masuk`, `gaji_pokok`, `uang_transport`, `uang_makan`, `tunjangan_kawin`, `potongan`, `pinjaman`, `total_gaji`) VALUES
(1, 'dfd', 'dfd', 'dfdf', 2, 3, 23, 23, 23, 23, 23, 23, 23),
(2, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', 'df', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'df', 'df123', '', 12, 12, 12, 12, 12, 12, 23, 23, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_users` int(11) NOT NULL,
  `nm_users` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kelamin_users` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_users`, `nm_users`, `kelamin_users`, `username`, `password`, `user_email`) VALUES
(1, 'tes123', 'Laki-laki', 'df', 'df', ''),
(3, 'fgfg', 'Laki-laki', 'fgfg', 'fgfg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `alamat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`, `alamat`, `status`) VALUES
(1, 'asas', 'as@gmail.com', '$2y$10$P.pJQWrkUYWK/8rXZrtqGebqUrbt/kpklb5xIBZ6l2oTWKCZVGqbq', '2022-04-02 22:44:44', '', '2'),
(4, 'wishnu', 'wishnu@gmail.com', '$2y$10$LvXZ3ywUJ3bAhTEgf2AlHuOmfC2XFeaYJVPje.ZRfDFOntWTlAgkG', '2022-04-23 16:50:16', 'Batang Jawa Tengah', '1'),
(9, 'fgfgfg', 'fg@gmail.com', '$2y$10$cVAl8Co6IQnbwf0XgzUp7.bFUnE0i9DFIwMkvAW90sfzl9quL32ku', '2022-04-25 14:12:48', 'fgfgfg', '1'),
(10, 'hjhjhj', 'cv@gmail.com', '$2y$10$lqqN3kcwMTFCK7UJCfvUaur8m1Mk.EvQDAafS1XXY7iMalEM9hBWS', '2022-04-25 14:13:31', 'hjhjhj', '2'),
(11, 'klklkl', 'tes@gmail.com', '$2y$10$RYsI74TOmBGAMH8aaOiAyOdSUzJi9hfA34N6WXPfIGnKNBLaeakaG', '2022-04-25 14:35:20', 'klklkl', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id_data_absen`);

--
-- Indexes for table `data_gaji`
--
ALTER TABLE `data_gaji`
  ADD PRIMARY KEY (`id_data_gaji`);

--
-- Indexes for table `data_koperasi`
--
ALTER TABLE `data_koperasi`
  ADD PRIMARY KEY (`id_data_koperasi`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_pinjaman`
--
ALTER TABLE `data_pinjaman`
  ADD PRIMARY KEY (`id_data_pinjaman`);

--
-- Indexes for table `data_potongan`
--
ALTER TABLE `data_potongan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `data_slip_gaji`
--
ALTER TABLE `data_slip_gaji`
  ADD PRIMARY KEY (`id_slip_gaji`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id_data_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `data_gaji`
--
ALTER TABLE `data_gaji`
  MODIFY `id_data_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_koperasi`
--
ALTER TABLE `data_koperasi`
  MODIFY `id_data_koperasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_pinjaman`
--
ALTER TABLE `data_pinjaman`
  MODIFY `id_data_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_potongan`
--
ALTER TABLE `data_potongan`
  MODIFY `id_potongan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_slip_gaji`
--
ALTER TABLE `data_slip_gaji`
  MODIFY `id_slip_gaji` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
