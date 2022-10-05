-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 09:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reza`
--

-- --------------------------------------------------------

--
-- Table structure for table `bekerja_pada`
--

CREATE TABLE `bekerja_pada` (
  `NIP` varchar(255) NOT NULL,
  `PNomor` varchar(255) NOT NULL,
  `LamaJam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dapartemen`
--

CREATE TABLE `dapartemen` (
  `Dnomor` varchar(255) NOT NULL,
  `Dnama` varchar(255) DEFAULT NULL,
  `NIP_MGR` varchar(255) DEFAULT NULL,
  `TglMulai_MGR` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_dapartemen`
--

CREATE TABLE `lokasi_dapartemen` (
  `Dnomor` varchar(255) NOT NULL,
  `Dlokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(255) NOT NULL,
  `NmDepan` varchar(255) NOT NULL,
  `Inisial` varchar(255) NOT NULL,
  `NmBelakang` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Gaji` bigint(20) NOT NULL,
  `JenisKel` varchar(255) NOT NULL,
  `NIPKepala` varchar(255) NOT NULL,
  `DNO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_1`
--

CREATE TABLE `pegawai_1` (
  `NIP` varchar(255) NOT NULL,
  `NmDepan` varchar(255) NOT NULL,
  `Inisial` varchar(255) NOT NULL,
  `NmBelakang` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Gaji` bigint(20) NOT NULL,
  `JenisKel` varchar(255) NOT NULL,
  `NIPKepala` varchar(255) NOT NULL,
  `DNO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_2`
--

CREATE TABLE `pegawai_2` (
  `NIP` varchar(255) NOT NULL,
  `NmDepan` varchar(255) NOT NULL,
  `Inisial` varchar(255) NOT NULL,
  `NmBelakang` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Gaji` bigint(20) NOT NULL,
  `JenisKel` varchar(255) NOT NULL,
  `NIPKepala` varchar(255) NOT NULL,
  `DNO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `PNomor` varchar(255) NOT NULL,
  `Pnama` varchar(255) NOT NULL,
  `Plokasi` text NOT NULL,
  `Dnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tanggungan`
--

CREATE TABLE `tanggungan` (
  `NIP` varchar(255) NOT NULL,
  `Nama_tanggungan` varchar(255) NOT NULL,
  `JenisKelamin` varchar(255) NOT NULL,
  `TglLahir` date NOT NULL,
  `Hubungan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bekerja_pada`
--
ALTER TABLE `bekerja_pada`
  ADD KEY `NIP` (`NIP`),
  ADD KEY `PNomor` (`PNomor`);

--
-- Indexes for table `dapartemen`
--
ALTER TABLE `dapartemen`
  ADD PRIMARY KEY (`Dnomor`),
  ADD UNIQUE KEY `NIP_MGR` (`NIP_MGR`);

--
-- Indexes for table `lokasi_dapartemen`
--
ALTER TABLE `lokasi_dapartemen`
  ADD KEY `Dnomor` (`Dnomor`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `NIPKepala` (`NIPKepala`),
  ADD KEY `DNO` (`DNO`);

--
-- Indexes for table `pegawai_1`
--
ALTER TABLE `pegawai_1`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pegawai_2`
--
ALTER TABLE `pegawai_2`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`PNomor`),
  ADD KEY `Dnum` (`Dnum`);

--
-- Indexes for table `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD KEY `NIP` (`NIP`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bekerja_pada`
--
ALTER TABLE `bekerja_pada`
  ADD CONSTRAINT `bekerja_pada_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bekerja_pada_ibfk_2` FOREIGN KEY (`PNomor`) REFERENCES `proyek` (`PNomor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `dapartemen`
--
ALTER TABLE `dapartemen`
  ADD CONSTRAINT `dapartemen_ibfk_1` FOREIGN KEY (`Dnomor`) REFERENCES `pegawai` (`DNO`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `lokasi_dapartemen`
--
ALTER TABLE `lokasi_dapartemen`
  ADD CONSTRAINT `lokasi_dapartemen_ibfk_1` FOREIGN KEY (`Dnomor`) REFERENCES `dapartemen` (`Dnomor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`NIPKepala`) REFERENCES `pegawai_1` (`NIP`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `tanggungan` (`NIP`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`DNO`) REFERENCES `dapartemen` (`DNomor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pegawai_2`
--
ALTER TABLE `pegawai_2`
  ADD CONSTRAINT `pegawai_2_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dapartemen` (`NIP_MGR`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `proyek`
--
ALTER TABLE `proyek`
  ADD CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`Dnum`) REFERENCES `dapartemen` (`Dnomor`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
