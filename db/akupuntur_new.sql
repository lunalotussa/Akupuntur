-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 09:37 AM
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
(1, 1, 'Jl. Danau Tondano Raya A1 F10', 2147483647, 'BCA', 'Sawojajar-Malang', 4567, '');

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
(6, 8, 'Jl. Hasanudin No 5 Batu', 2147483647, 'BRI', 'Punten-Batu', 12345678, 'download_(1).jpg');

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
(68, 2, 2),
(71, 3, 1),
(72, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `durasi` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `jenis`, `nama`, `durasi`, `harga`) VALUES
(1, 'Akupuntur Tubuh', 'Bekam Badan', '45 menit', 100000),
(2, 'Akupuntur Tubuh', 'Lulur Badan', '1 Jam', 60000),
(3, 'Perawatan Wajah', 'Facial Bio', '1 jam', 90000);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terapis`
--

INSERT INTO `terapis` (`id_terapis`, `id_user`, `alamat`, `telepon`, `bank`, `unit_bank`, `no_rekening`, `ktp`, `selfie_ktp`, `profile`, `status`) VALUES
(2, 9, 'Jl. Hasanudin No 10 Batu', 2147483647, 'Mandiri', 'Ngagglik-Batu', 2147483647, '', '', '', 1),
(3, 10, 'Jl. Danau Tondano Raya A1 F11', 45678, 'BRI', 'Sawojajar-Malang', 4567890, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_terapis` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL,
  `status_pemesanan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'Admin'),
(8, 'Luna Lotussa', 'victorialuna1204@gmail.com', 'lunalotussa', 'Customer'),
(9, 'Jaya Hayadi', 'jayahayadi@gmail.com', 'jayahayadi', 'Terapis'),
(10, 'Siti Badriah', 'siti@gmail.com', 'sitibadriah', 'Terapis');

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
  ADD KEY `IdLayanan2` (`id_layanan`),
  ADD KEY `IdTerapis2` (`id_terapis`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `IdLayanan` (`id_layanan`),
  ADD KEY `IdTransaksi` (`no_transaksi`);

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
  ADD KEY `IdCostumer` (`id_customer`),
  ADD KEY `IdTerapis` (`id_terapis`);

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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_layanan`
--
ALTER TABLE `detail_layanan`
  MODIFY `id_detailLayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terapis`
--
ALTER TABLE `terapis`
  MODIFY `id_terapis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `IdLayanan2` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`),
  ADD CONSTRAINT `IdTerapis2` FOREIGN KEY (`id_terapis`) REFERENCES `terapis` (`id_terapis`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `IdLayanan` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`),
  ADD CONSTRAINT `IdTransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`);

--
-- Constraints for table `terapis`
--
ALTER TABLE `terapis`
  ADD CONSTRAINT `IdUser2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `IdCostumer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `IdTerapis` FOREIGN KEY (`id_terapis`) REFERENCES `terapis` (`id_terapis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
