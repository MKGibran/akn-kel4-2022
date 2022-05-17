-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 06:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akn-kel4`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_pokok`
--

CREATE TABLE `harga_pokok` (
  `id` int(11) NOT NULL,
  `persediaan_awal` int(11) NOT NULL,
  `pembelian` int(11) NOT NULL,
  `barang_tersedia` int(11) NOT NULL,
  `persediaan_akhir` int(11) NOT NULL,
  `harga_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_pokok`
--

INSERT INTO `harga_pokok` (`id`, `persediaan_awal`, `pembelian`, `barang_tersedia`, `persediaan_akhir`, `harga_pokok`) VALUES
(1, 10, 10, 10, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban1`
--

CREATE TABLE `jawaban1` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban1`
--

INSERT INTO `jawaban1` (`id`, `tanggal`, `nama`, `debit`, `kredit`) VALUES
(5, '2022-05-16', 'Nama', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban2`
--

CREATE TABLE `jawaban2` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `unit1` int(11) NOT NULL,
  `harga1` int(11) NOT NULL,
  `total_harga1` int(11) NOT NULL,
  `unit2` int(11) NOT NULL,
  `harga2` int(11) NOT NULL,
  `total_harga2` int(11) NOT NULL,
  `unit3` int(11) NOT NULL,
  `harga3` int(11) NOT NULL,
  `total_harga3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban2`
--

INSERT INTO `jawaban2` (`id`, `tanggal`, `unit1`, `harga1`, `total_harga1`, `unit2`, `harga2`, `total_harga2`, `unit3`, `harga3`, `total_harga3`) VALUES
(4, '2022-05-16', 1, 10, 100, 1, 10, 100, 1, 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `soal1`
--

CREATE TABLE `soal1` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` text NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal1`
--

INSERT INTO `soal1` (`id`, `tanggal`, `uraian`, `nominal`) VALUES
(4, '2022-05-16', 'Contoh', 10);

-- --------------------------------------------------------

--
-- Table structure for table `soal2`
--

CREATE TABLE `soal2` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal2`
--

INSERT INTO `soal2` (`id`, `tanggal`, `keterangan`, `kuantitas`, `unit`, `harga`) VALUES
(4, '2022-05-16', 'Contoh', 1, 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_pokok`
--
ALTER TABLE `harga_pokok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban1`
--
ALTER TABLE `jawaban1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban2`
--
ALTER TABLE `jawaban2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal1`
--
ALTER TABLE `soal1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal2`
--
ALTER TABLE `soal2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga_pokok`
--
ALTER TABLE `harga_pokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jawaban1`
--
ALTER TABLE `jawaban1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jawaban2`
--
ALTER TABLE `jawaban2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal1`
--
ALTER TABLE `soal1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal2`
--
ALTER TABLE `soal2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
