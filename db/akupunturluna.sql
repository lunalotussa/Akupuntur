-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 03:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akupuntur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `unit_bank` varchar(30) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `alamat`, `telepon`, `bank`, `unit_bank`, `no_rekening`, `profile`) VALUES
(1, 1, 'Jl. Danau Tondano Raya A1 F10', 2147483647, 'BCA', 'Sawojajar-Malang 1', 4567, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_chart` int(11) NOT NULL,
  `id_detail_layanan` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_chart`, `id_detail_layanan`, `id_customer`, `status`) VALUES
(23, 1, 7, '0'),
(28, 1, 8, '0'),
(29, 2, 8, '0'),
(32, 1, 13, '1'),
(39, 2, 6, '0'),
(40, 18, 6, '0'),
(49, 2, 2, '0'),
(52, 2, 6, '0'),
(60, 1, 1, '1'),
(61, 1, 14, '1'),
(62, 18, 2, '0'),
(65, 2, 6, '0'),
(74, 1, 6, '1'),
(75, 2, 6, '1'),
(81, 1, 8, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `unit_bank` varchar(30) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `id_user`, `alamat`, `telepon`, `bank`, `unit_bank`, `no_rekening`, `profile`) VALUES
(6, 2, 'Jl. Hasanudin No 5 Batu', 2147483647, 'BRI', 'Punten-Batu', 12345678, 'WhatsApp_Image_2020-12-05_at_10_05_21.jpeg'),
(7, 6, '', 0, '', '', 0, ''),
(8, 7, '', 0, '', '', 0, ''),
(9, 8, '', 0, '', '', 0, ''),
(10, 10, '', 0, '', '', 0, ''),
(11, 13, '', 0, '', '', 0, ''),
(12, 14, '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_layanan`
--

CREATE TABLE `detail_layanan` (
  `id_detailLayanan` int(11) NOT NULL,
  `id_terapis` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_layanan`
--

INSERT INTO `detail_layanan` (`id_detailLayanan`, `id_terapis`, `id_layanan`) VALUES
(1, 2, 1),
(2, 2, 3),
(18, 3, 1),
(22, 5, 1),
(23, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `jam_mulai` varchar(45) DEFAULT NULL,
  `jam_selesai` varchar(45) DEFAULT NULL,
  `id_terapis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `no_transaksi`, `id_cart`, `tanggal`, `jam_mulai`, `jam_selesai`, `id_terapis`) VALUES
(73, 72, 23, '2020-12-31', NULL, NULL, 0),
(77, 75, 28, '2021-01-08', NULL, NULL, 0),
(78, 75, 29, '2021-01-08', NULL, NULL, 0),
(87, 84, 39, '2021-01-20', NULL, NULL, 0),
(88, 84, 40, '2021-01-20', NULL, NULL, 0),
(89, 85, 49, '2021-02-06', NULL, NULL, 0),
(90, 86, 49, '2021-01-27', NULL, NULL, 0),
(91, 87, 52, '2021-01-22', NULL, NULL, 0),
(92, 88, 52, '2021-01-28', NULL, NULL, 0),
(94, 92, 62, '2021-01-29', NULL, NULL, 0),
(96, 94, 65, '2021-01-31', NULL, NULL, 0),
(97, 95, 65, '2021-01-20', NULL, NULL, 0),
(106, 100, 74, '2021-02-18', '08:00', '11:00', 2),
(107, 100, 75, '2021-02-18', '08:00', '11:00', 2),
(110, 103, 81, '2021-02-18', '14:30', '16:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `durasi` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `jenis`, `nama`, `durasi`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Akupunktur', 'Akupunktur kecantikan', '90 menit', 500000, 'e03d5b812b2734826f76960eca5b5541.jpg', NULL),
(3, 'Akupunktur', 'Akupunktur pelangsingan', '90 menit', 500000, 'e03d5b812b2734826f76960eca5b5541.jpg', NULL),
(4, 'Akupunktur ', 'Akupunktur Kepala', '30 menit', 100000, 'e03d5b812b2734826f76960eca5b5541.jpg', NULL),
(5, 'Akupunktur', 'Akupunktur badan depan', '30 menit', 100000, 'e03d5b812b2734826f76960eca5b5541.jpg', NULL),
(6, 'Akupunktur', 'Akupunktur badan belakang', '30 menit', 100000, 'e03d5b812b2734826f76960eca5b5541.jpg', NULL),
(7, 'Diagnosa', 'Komplit', '60 menit', 200000, 'EXPnpM0UYAA9Lo0.jpg', NULL),
(8, 'Pijat', 'Refleksi', '60 menit', 100000, 'EXPnpM0UYAA9Lo0.jpg', NULL),
(9, 'Pijat', 'Seluruh badan', '60 menit', 200000, 'EXPnpM0UYAA9Lo0.jpg', NULL),
(10, 'Pijat', 'Bayi', '30 menit', 150000, 'EXPnpM0UYAA9Lo0.jpg', NULL),
(11, 'Pijat', 'Relaksasi kepala', '30 menit', 100000, 'EXPnpM0UYAA9Lo0.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terapis`
--

CREATE TABLE `terapis` (
  `id_terapis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `unit_bank` varchar(30) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `selfie_ktp` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terapis`
--

INSERT INTO `terapis` (`id_terapis`, `id_user`, `alamat`, `telepon`, `bank`, `unit_bank`, `no_rekening`, `ktp`, `selfie_ktp`, `profile`, `status`) VALUES
(2, 3, 'Jl. Hasanudin No 10 Batu', 2147483647, 'Mandiri', 'Ngagglik-Batu1', 2147483647, '', 'logo.png', '', '1'),
(3, 4, 'Jl. Danau Tondano Raya A1 F11', 45678, 'BRI', 'Sawojajar-Malang', 4567890, '', '', '', '1'),
(4, 5, 'Jl Candi 3E No 137', 2147483647, 'BTPN', 'Purwosari', 2147483647, '', '', 'avatar1.png', '1'),
(5, 9, 'Jl. Danau Rinjani 8B', 2147483647, 'Mandiri', 'Sawojajar-Malang', 4567890, '', '', '', '1'),
(7, 12, '', 0, '', '', 0, '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `bukti_pembayaran` varchar(500) NOT NULL,
  `rekening_pengirim` varchar(45) NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL,
  `status_pemesanan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_customer`, `tanggal`, `total_harga`, `bukti_pembayaran`, `rekening_pengirim`, `status_pembayaran`, `status_pemesanan`) VALUES
(72, 7, '2020-12-13, 21:12:52', 100000, 'e03d5b812b2734826f76960eca5b5541.jpg', '567890', 1, 1),
(74, 6, '2020-12-13, 21:12:37', 150000, '70882440.jpg', '12345678', 1, 1),
(75, 8, '2020-12-14, 09:12:59', 150000, '708824401.jpg', '768899000', 1, 1),
(76, 6, '2021-01-08, 22:01:18', 100000, '0', '0', 1, 0),
(77, 13, '2021-01-14, 12:01:13', 0, '0', '0', 0, 0),
(78, 6, '2021-01-14, 12:01:35', 100000, '0', '0', 0, 0),
(79, 6, '2021-01-14, 17:01:33', 100000, '0', '0', 0, 0),
(80, 6, '2021-01-14, 17:01:46', 0, '0', '0', 0, 0),
(81, 6, '2021-01-14, 17:01:05', 100000, 'WhatsApp_Image_2021-01-13_at_13_39_11.jpeg', '23423423423423', 0, 0),
(82, 6, '2021-01-19, 15:01:13', 1000000, '0', '0', 0, 0),
(83, 6, '2021-01-19, 15:01:38', 1000000, 'Screen_Shot_2021-01-16_at_23_01_26.png', '12134567890', 0, 0),
(84, 6, '2021-01-19, 23:01:24', 1000000, 'avatar1.png', '2132132321', 1, 0),
(85, 6, '2021-01-20, 00:01:50', 500000, 'Screen_Shot_2021-01-16_at_23_01_37.png', '995', 1, 1),
(86, 6, '2021-01-20, 00:01:51', 500000, 'Screen_Shot_2021-01-16_at_23_01_371.png', '995', 1, 0),
(87, 6, '2021-01-20, 01:01:07', 500000, '0', '0', 0, 0),
(88, 6, '2021-01-20, 01:01:19', 500000, 'avatar11.png', '218973289', 1, 0),
(89, 6, '2021-01-20, 01:01:17', 500000, '0', '0', 0, 0),
(90, 1, '2021-01-22, 10:01:09', 0, '0', '0', 0, 0),
(91, 14, '2021-01-22, 13:01:34', 0, '0', '0', 0, 0),
(92, 6, '2021-01-22, 14:01:11', 500000, 'Bukti_Pameran_TechnoFest.PNG', '43567890999', 1, 1),
(93, 6, '2021-01-22, 15:01:31', 0, '0', '0', 0, 0),
(94, 6, '2021-01-22, 15:01:02', 500000, '0', '0', 0, 0),
(95, 6, '2021-01-22, 15:01:51', 500000, 'fis_ec_council_luna_v1.PNG', '123456789', 1, 1),
(96, 6, '2021-02-01, 01:02:11', 600000, '0', '0', 0, 0),
(97, 6, '2021-02-01, 01:02:37', 600000, '1(1).jpg', '12345', 0, 0),
(98, 6, '2021-02-01, 22:02:25', 600000, '0', '0', 0, 0),
(99, 8, '2021-02-04, 12:02:33', 1000000, '0', '0', 0, 0),
(100, 6, '2021-02-06, 19:02:42', 1000000, '0', '0', 0, 0),
(101, 8, '2021-02-06, 20:02:19', 500000, '0', '0', 0, 0),
(102, 8, '2021-02-06, 20:02:37', 500000, '0', '0', 0, 0),
(103, 8, '2021-02-06, 20:02:10', 500000, '0', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'Luna Lotussa', 'victorialuna1204@gmail.com', '3d6857ffc06f51aa6ef181ecef051bb0', 'Customer'),
(3, 'Jaya Hayadi', 'jayahayadi@gmail.com', 'bcaec922e1717fbe439684de28f60ea1', 'Terapis'),
(4, 'Siti Badriah', 'siti@gmail.com', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'Terapis'),
(5, 'gellen', 'gellen@gmail.com', 'ea7e97f88e77c118b18d306d09a2bf55', 'Terapis'),
(6, 'Gellen', 'hellogellen@gmail.com', '40338f0032c4470b313c68212b073310', 'Customer'),
(7, 'Saga Sandah', 'sagasandah@gmail.com', 'c0a624848fa3f07c9b887ab3189e74c2', 'Customer'),
(8, 'Gana', 'gana@gmail.com', '57e6e9b3ce8603fde63fb396e2a57f83', 'Customer'),
(9, 'Gabriella Felicia', 'gaby@gmail.com', '68e18c13237884aa15c9bbc988be74ce', 'Terapis'),
(10, 'Panji Iman Baskoro', 'panjidia995@gmail.com', 'ad556d63e9333734ab1fd7e76f753269', 'Customer'),
(12, 'Terapis2', 'terapis2@gmail.com', 'ad556d63e9333734ab1fd7e76f753269', 'Terapis'),
(13, 'Bagus ', 'kristomoyo@gmail.com', 'a89407b9014f6f6d9a85f2d5b6a2c118', 'Customer'),
(14, 'Anggita R.O', 'atmajaignacio0404@gmail.com', 'b1882e159c18bf57620041c8080002f0', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `IdUser1` (`id_user`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_chart`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `IdUser3` (`id_user`);

--
-- Indexes for table `detail_layanan`
--
ALTER TABLE `detail_layanan`
  ADD PRIMARY KEY (`id_detailLayanan`),
  ADD KEY `IdLayanan5` (`id_layanan`),
  ADD KEY `IdTerapis5` (`id_terapis`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `IdTransaksi` (`no_transaksi`),
  ADD KEY `fk_detail_transaksi_1_idx` (`id_cart`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `terapis`
--
ALTER TABLE `terapis`
  ADD PRIMARY KEY (`id_terapis`),
  ADD KEY `IdUser2` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `IdCostumer` (`id_customer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detail_layanan`
--
ALTER TABLE `detail_layanan`
  MODIFY `id_detailLayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `terapis`
--
ALTER TABLE `terapis`
  MODIFY `id_terapis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `IdUser1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `IdUser3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `detail_layanan`
--
ALTER TABLE `detail_layanan`
  ADD CONSTRAINT `IdLayanan5` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`),
  ADD CONSTRAINT `IdTerapis5` FOREIGN KEY (`id_terapis`) REFERENCES `terapis` (`id_terapis`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `IdTransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`),
  ADD CONSTRAINT `fk_detail_transaksi_1` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_chart`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `terapis`
--
ALTER TABLE `terapis`
  ADD CONSTRAINT `IdUser2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
