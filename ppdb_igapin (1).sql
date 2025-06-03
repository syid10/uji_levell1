-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2025 at 09:42 AM
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
-- Database: `ppdb_igapin`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_tahunan`
--

CREATE TABLE `biaya_tahunan` (
  `tahun_ajaran` int(11) NOT NULL,
  `b_pendaftaran` varchar(10) NOT NULL,
  `b_awaltahun` varchar(10) NOT NULL,
  `b_seragam` varchar(10) NOT NULL,
  `b_spp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jur` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `no_daftar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_ttl` varchar(100) NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `kode_jur` varchar(10) NOT NULL,
  `no_telpon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_daftar` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`no_daftar`, `nama`, `tempat_ttl`, `jk`, `alamat`, `asal_sekolah`, `kode_jur`, `no_telpon`, `email`, `tanggal_daftar`) VALUES
(13, 'asds', 'asd', 'L', 'asd', 'asd', 'IGAPIN_2', 123, 'aa@gmail', '2025-06-03 10:33:41'),
(15, 'sasasasaasasasasasaasasassaasas', 'saasasassasaassaas', 'L', 'assasaasasasasas', 'SMPN 1 Cilengkrang', 'IGAPIN_1', 2147483647, 'pp@gmail', '2025-06-03 12:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `kd_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `nama_petugas`, `role`) VALUES
('P001', 'Asep Sunandar', 'Petugas'),
('P002', 'Susanti', 'Petugas'),
('P003', 'Aki Syakip', 'Admin'),
('P004', 'Sania Marwah', 'TU'),
('P005', 'Aria Kamandanu', 'Kepala Sekolah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_tahunan`
--
ALTER TABLE `biaya_tahunan`
  ADD PRIMARY KEY (`tahun_ajaran`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jur`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
