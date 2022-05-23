-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 06:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_ujikom26`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblanggota`
--

CREATE TABLE `tblanggota` (
  `no_anggota` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wajib` int(11) NOT NULL,
  `pokok` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblanggota`
--

INSERT INTO `tblanggota` (`no_anggota`, `nama`, `wajib`, `pokok`, `saldo`) VALUES
('A01', 'UUS RUSMAWAN', 100000, 200000, 800000),
('A02', 'ALBANI', 100000, 200000, 400000),
('A03', 'RYAN', 100000, 200000, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tblkasir`
--

CREATE TABLE `tblkasir` (
  `kodeksr` varchar(5) NOT NULL,
  `namaksr` varchar(255) NOT NULL,
  `passwordksr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkasir`
--

INSERT INTO `tblkasir` (`kodeksr`, `namaksr`, `passwordksr`) VALUES
('K01', 'tanti', 'tanti');

-- --------------------------------------------------------

--
-- Table structure for table `tblpinjam`
--

CREATE TABLE `tblpinjam` (
  `no_pinjam` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `no_anggota` varchar(5) NOT NULL,
  `jmlpinjam` int(11) NOT NULL,
  `kodeksr` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsimpan`
--

CREATE TABLE `tblsimpan` (
  `no_simpan` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `no_anggota` varchar(5) NOT NULL,
  `jmlsimpan` int(11) NOT NULL,
  `kodeksr` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblanggota`
--
ALTER TABLE `tblanggota`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `tblkasir`
--
ALTER TABLE `tblkasir`
  ADD PRIMARY KEY (`kodeksr`);

--
-- Indexes for table `tblpinjam`
--
ALTER TABLE `tblpinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `no_anggota` (`no_anggota`),
  ADD KEY `kodeksr` (`kodeksr`);

--
-- Indexes for table `tblsimpan`
--
ALTER TABLE `tblsimpan`
  ADD PRIMARY KEY (`no_simpan`),
  ADD KEY `no_anggota` (`no_anggota`),
  ADD KEY `kodeksr` (`kodeksr`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblpinjam`
--
ALTER TABLE `tblpinjam`
  ADD CONSTRAINT `tblpinjam_ibfk_2` FOREIGN KEY (`kodeksr`) REFERENCES `tblkasir` (`kodeksr`);

--
-- Constraints for table `tblsimpan`
--
ALTER TABLE `tblsimpan`
  ADD CONSTRAINT `tblsimpan_ibfk_1` FOREIGN KEY (`no_anggota`) REFERENCES `tblanggota` (`no_anggota`),
  ADD CONSTRAINT `tblsimpan_ibfk_2` FOREIGN KEY (`kodeksr`) REFERENCES `tblkasir` (`kodeksr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
