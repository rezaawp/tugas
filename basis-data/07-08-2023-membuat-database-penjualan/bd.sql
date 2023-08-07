-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2023 at 05:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`, `keterangan`) VALUES
(1, 10, 4, 2, 'Paket berwarna biru'),
(2, 3, 3, 1, 'Paket ukuran XL'),
(3, 1, 3, 3, 'Paket express'),
(4, 19, 1, 4, 'Paket lipat rapi'),
(5, 9, 4, 1, 'Paket warna merah'),
(6, 19, 2, 5, 'Paket lainnya'),
(7, 12, 1, 2, 'Paket bermotif'),
(8, 14, 2, 3, 'Paket premium'),
(9, 2, 3, 1, 'Paket express'),
(10, 9, 3, 4, 'Paket lipat rapi'),
(11, 8, 2, 5, 'Paket lainnya'),
(12, 11, 4, 2, 'Paket bermotif'),
(13, 12, 5, 3, 'Paket premium'),
(14, 4, 5, 4, 'Paket lipat rapi'),
(15, 5, 2, 1, 'Paket warna merah'),
(16, 12, 2, 5, 'Paket lainnya'),
(17, 8, 1, 2, 'Paket bermotif'),
(18, 6, 2, 3, 'Paket premium'),
(19, 19, 2, 1, 'Paket express'),
(20, 4, 2, 4, 'Paket lipat rapi'),
(21, 17, 3, 3, 'Paket express'),
(22, 16, 3, 2, 'Paket bermotif'),
(23, 9, 3, 5, 'Paket lainnya'),
(24, 5, 3, 4, 'Paket lipat rapi'),
(25, 18, 1, 1, 'Paket warna merah'),
(26, 13, 4, 3, 'Paket premium'),
(27, 7, 2, 1, 'Paket express'),
(28, 18, 5, 5, 'Paket lainnya'),
(29, 2, 2, 2, 'Paket bermotif'),
(30, 11, 4, 4, 'Paket lipat rapi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'John Doe', 'Jl. Merdeka No. 123', 'L', '081234567890'),
(2, 'Jane Smith', 'Jl. Bahagia No. 456', 'P', '082345678901'),
(3, 'Michael Johnson', 'Jl. Sukamaju No. 789', 'L', '083456789012'),
(4, 'Emily Williams', 'Jl. Harmoni No. 567', 'P', '084567890123'),
(5, 'David Brown', 'Jl. Makmur No. 234', 'L', '085678901234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_outlet`
--

INSERT INTO `tb_outlet` (`id`, `nama`, `alamat`, `tlp`) VALUES
(1, 'Outlet A', 'Jl. Raya No. 123', '081234567890'),
(2, 'Outlet B', 'Jl. Utama No. 456', '082345678901'),
(3, 'Outlet C', 'Jl. Jaya No. 789', '083456789012'),
(4, 'Outlet D', 'Jl. Harmoni No. 567', '084567890123'),
(5, 'Outlet E', 'Jl. Baru No. 234', '085678901234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('kiloan','selimut','bed_cover','kaos','lain') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 3, 'kiloan', 'Paket A', 50000),
(2, 2, 'selimut', 'Paket B', 75000),
(3, 1, 'bed_cover', 'Paket C', 100000),
(4, 4, 'kaos', 'Paket D', 60000),
(5, 5, 'lain', 'Paket E', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_outlet`, `kode_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`) VALUES
(1, 3, 'INV202301', 3, '2023-08-07 00:00:00', '2023-08-09 00:00:00', NULL, 5000, 10, 5, 'baru', 'belum_dibayar', 4),
(2, 4, 'INV202302', 2, '2023-08-08 00:00:00', '2023-08-10 00:00:00', NULL, 0, 0, 0, 'proses', 'belum_dibayar', 4),
(3, 4, 'INV202303', 3, '2023-08-09 00:00:00', '2023-08-11 00:00:00', NULL, 2000, 0, 5, 'proses', 'belum_dibayar', 4),
(4, 5, 'INV202304', 3, '2023-08-10 00:00:00', '2023-08-12 00:00:00', NULL, 1000, 5, 0, 'selesai', 'dibayar', 4),
(5, 4, 'INV202305', 2, '2023-08-11 00:00:00', '2023-08-13 00:00:00', NULL, 0, 0, 0, 'diambil', 'dibayar', 1),
(6, 2, 'INV202306', 3, '2023-08-12 00:00:00', '2023-08-14 00:00:00', NULL, 3000, 20, 10, 'baru', 'belum_dibayar', 4),
(7, 5, 'INV202307', 4, '2023-08-13 00:00:00', '2023-08-15 00:00:00', NULL, 500, 5, 5, 'proses', 'belum_dibayar', 3),
(8, 3, 'INV202308', 4, '2023-08-14 00:00:00', '2023-08-16 00:00:00', NULL, 0, 0, 0, 'selesai', 'dibayar', 4),
(9, 2, 'INV202309', 5, '2023-08-15 00:00:00', '2023-08-17 00:00:00', NULL, 0, 0, 0, 'diambil', 'dibayar', 4),
(10, 3, 'INV202310', 4, '2023-08-16 00:00:00', '2023-08-18 00:00:00', NULL, 1000, 10, 5, 'baru', 'belum_dibayar', 1),
(11, 2, 'INV202311', 1, '2023-08-17 00:00:00', '2023-08-19 00:00:00', NULL, 0, 0, 0, 'proses', 'belum_dibayar', 3),
(12, 2, 'INV202312', 4, '2023-08-18 00:00:00', '2023-08-20 00:00:00', NULL, 2000, 0, 5, 'proses', 'belum_dibayar', 3),
(13, 5, 'INV202313', 5, '2023-08-19 00:00:00', '2023-08-21 00:00:00', NULL, 0, 0, 0, 'selesai', 'dibayar', 1),
(14, 3, 'INV202314', 4, '2023-08-20 00:00:00', '2023-08-22 00:00:00', NULL, 3000, 20, 10, 'diambil', 'dibayar', 4),
(15, 2, 'INV202315', 3, '2023-08-21 00:00:00', '2023-08-23 00:00:00', NULL, 500, 5, 5, 'baru', 'belum_dibayar', 3),
(16, 4, 'INV202316', 2, '2023-08-22 00:00:00', '2023-08-24 00:00:00', NULL, 0, 0, 0, 'proses', 'belum_dibayar', 3),
(17, 4, 'INV202317', 2, '2023-08-23 00:00:00', '2023-08-25 00:00:00', NULL, 0, 0, 0, 'selesai', 'dibayar', 1),
(18, 2, 'INV202318', 2, '2023-08-24 00:00:00', '2023-08-26 00:00:00', NULL, 1000, 10, 5, 'diambil', 'dibayar', 2),
(19, 1, 'INV202319', 3, '2023-08-25 00:00:00', '2023-08-27 00:00:00', NULL, 0, 0, 0, 'baru', 'belum_dibayar', 5),
(20, 2, 'INV202320', 2, '2023-08-26 00:00:00', '2023-08-28 00:00:00', NULL, 2000, 0, 5, 'proses', 'belum_dibayar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `id_outlet`, `role`) VALUES
(1, 'Admin A', 'admin_a', 'password123', 1, 'admin'),
(2, 'Kasir B', 'kasir_b', 'password456', 2, 'kasir'),
(3, 'Owner C', 'owner_c', 'password789', 3, 'owner'),
(4, 'Admin D', 'admin_d', 'password987', 4, 'admin'),
(5, 'Kasir E', 'kasir_e', 'password654', 5, 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_detail_tra_fk_id_tra` (`id_transaksi`),
  ADD KEY `tb_detail_tra_fk_id_paket` (`id_paket`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_pake_fk_id_outlet` (`id_outlet`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_member` (`id_member`),
  ADD KEY `fk_id_outlet` (`id_outlet`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_user_fk_id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_tra_fk_id_paket` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`),
  ADD CONSTRAINT `tb_detail_tra_fk_id_tra` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id`);

--
-- Constraints for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_pake_fk_id_outlet` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_id_member` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id`),
  ADD CONSTRAINT `fk_id_outlet` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_fk_id_outlet` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
