-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 11:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_tokobangunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `rwyt_trankonsumen`
--

CREATE TABLE `rwyt_trankonsumen` (
  `id_RiwayatKonsumen` int(15) NOT NULL,
  `kode_transaksi` int(15) NOT NULL,
  `kode_konsumen` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rwyt_tranpelanggan`
--

CREATE TABLE `rwyt_tranpelanggan` (
  `id_RiwayatPelanggan` int(15) NOT NULL,
  `kode_transaksi` int(15) NOT NULL,
  `kode_pelanggan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` int(15) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `satuan_barang` int(45) NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(80) NOT NULL,
  `kode_distributor` int(15) NOT NULL,
  `kode_pegawai` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_distributor`
--

CREATE TABLE `tb_distributor` (
  `kode_distributor` int(15) NOT NULL,
  `nama_distributor` varchar(50) NOT NULL,
  `Alamat_distributor` varchar(45) NOT NULL,
  `Telp_distributor` varchar(15) NOT NULL,
  `email_distributor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenistransaksi`
--

CREATE TABLE `tb_jenistransaksi` (
  `kode_jenis` int(15) NOT NULL,
  `Nama_JenisTransaksi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `kode_keluh` int(15) NOT NULL,
  `nama_pelanggan` varchar(95) NOT NULL,
  `email_pelanggan` varchar(75) NOT NULL,
  `Isi_keluh` varchar(95) NOT NULL,
  `Date_keluh` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `kode_konsumen` int(15) NOT NULL,
  `nama_konsumen` varchar(95) NOT NULL,
  `Alamat_konsumen` varchar(45) NOT NULL,
  `Telp_konsumen` varchar(15) NOT NULL,
  `email_konsumen` varchar(55) NOT NULL,
  `id_RiwayatKonsumen` int(15) NOT NULL,
  `kode_keluh` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `kode_pegawai` int(15) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `Telp_pegawai` varchar(18) NOT NULL,
  `Alamat_pegawai` varchar(50) NOT NULL,
  `gaji_pegawai` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `kode_pelanggan` int(15) NOT NULL,
  `nama_pelanggan` varchar(45) NOT NULL,
  `Alamat_pelanggan` varchar(35) NOT NULL,
  `Telp_pelanggan` varchar(25) NOT NULL,
  `email_pelanggan` varchar(35) NOT NULL,
  `id_RiwayatPelanggan` int(15) NOT NULL,
  `kode_keluh` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_poin`
--

CREATE TABLE `tb_poin` (
  `kode_poin` int(15) NOT NULL,
  `DateLine` datetime(6) NOT NULL,
  `Nominal` varchar(75) NOT NULL,
  `kode_pelanggan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kode_transaksi` int(15) NOT NULL,
  `Date_transaksi` datetime(6) NOT NULL,
  `jumlah_barang` varchar(95) NOT NULL,
  `jumlah_poin` varchar(95) NOT NULL,
  `total_harga` varchar(85) NOT NULL,
  `kode_pelanggan` int(15) NOT NULL,
  `kode_barang` int(15) NOT NULL,
  `kode_jenis` int(15) NOT NULL,
  `kode_konsumen` int(15) NOT NULL,
  `kode_pegawai` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tukar_poin`
--

CREATE TABLE `tukar_poin` (
  `id_TukarPoin` int(15) NOT NULL,
  `status_tukar` varchar(40) NOT NULL,
  `kode_poin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rwyt_trankonsumen`
--
ALTER TABLE `rwyt_trankonsumen`
  ADD PRIMARY KEY (`id_RiwayatKonsumen`),
  ADD KEY `kode_transaksi` (`kode_transaksi`,`kode_konsumen`),
  ADD KEY `kode_konsumen` (`kode_konsumen`);

--
-- Indexes for table `rwyt_tranpelanggan`
--
ALTER TABLE `rwyt_tranpelanggan`
  ADD PRIMARY KEY (`id_RiwayatPelanggan`),
  ADD KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `kode_pelanggan` (`kode_pelanggan`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_distributor` (`kode_distributor`),
  ADD KEY `kode_pegawai` (`kode_pegawai`);

--
-- Indexes for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  ADD PRIMARY KEY (`kode_distributor`);

--
-- Indexes for table `tb_jenistransaksi`
--
ALTER TABLE `tb_jenistransaksi`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`kode_keluh`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`kode_konsumen`),
  ADD KEY `id_RiwayatKonsumen` (`id_RiwayatKonsumen`),
  ADD KEY `kode_keluh` (`kode_keluh`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`),
  ADD KEY `id_RiwayatPelanggan` (`id_RiwayatPelanggan`),
  ADD KEY `kode_keluh` (`kode_keluh`);

--
-- Indexes for table `tb_poin`
--
ALTER TABLE `tb_poin`
  ADD PRIMARY KEY (`kode_poin`),
  ADD KEY `kode_pelanggan` (`kode_pelanggan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `kode_pelanggan` (`kode_pelanggan`,`kode_barang`,`kode_jenis`,`kode_konsumen`),
  ADD KEY `kode_konsumen` (`kode_konsumen`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_jenis` (`kode_jenis`),
  ADD KEY `kode_pegawai` (`kode_pegawai`);

--
-- Indexes for table `tukar_poin`
--
ALTER TABLE `tukar_poin`
  ADD KEY `kode_poin` (`kode_poin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rwyt_trankonsumen`
--
ALTER TABLE `rwyt_trankonsumen`
  ADD CONSTRAINT `rwyt_trankonsumen_ibfk_1` FOREIGN KEY (`kode_konsumen`) REFERENCES `tb_konsumen` (`kode_konsumen`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `rwyt_trankonsumen_ibfk_2` FOREIGN KEY (`kode_transaksi`) REFERENCES `tb_transaksi` (`kode_transaksi`) ON UPDATE NO ACTION;

--
-- Constraints for table `rwyt_tranpelanggan`
--
ALTER TABLE `rwyt_tranpelanggan`
  ADD CONSTRAINT `rwyt_tranpelanggan_ibfk_1` FOREIGN KEY (`kode_pelanggan`) REFERENCES `tb_pelanggan` (`kode_pelanggan`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `rwyt_tranpelanggan_ibfk_2` FOREIGN KEY (`kode_transaksi`) REFERENCES `tb_transaksi` (`kode_transaksi`) ON UPDATE NO ACTION;

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`kode_distributor`) REFERENCES `tb_distributor` (`kode_distributor`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON UPDATE NO ACTION;

--
-- Constraints for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD CONSTRAINT `tb_konsumen_ibfk_1` FOREIGN KEY (`kode_keluh`) REFERENCES `tb_keluhan` (`kode_keluh`) ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`kode_keluh`) REFERENCES `tb_keluhan` (`kode_keluh`) ON UPDATE NO ACTION;

--
-- Constraints for table `tb_poin`
--
ALTER TABLE `tb_poin`
  ADD CONSTRAINT `tb_poin_ibfk_1` FOREIGN KEY (`kode_pelanggan`) REFERENCES `tb_pelanggan` (`kode_pelanggan`) ON UPDATE NO ACTION;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`kode_konsumen`) REFERENCES `tb_konsumen` (`kode_konsumen`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`kode_pelanggan`) REFERENCES `tb_pelanggan` (`kode_pelanggan`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `tb_barang` (`kode_barang`),
  ADD CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`kode_jenis`) REFERENCES `tb_jenistransaksi` (`kode_jenis`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_transaksi_ibfk_5` FOREIGN KEY (`kode_pegawai`) REFERENCES `tb_pegawai` (`kode_pegawai`) ON UPDATE NO ACTION;

--
-- Constraints for table `tukar_poin`
--
ALTER TABLE `tukar_poin`
  ADD CONSTRAINT `tukar_poin_ibfk_1` FOREIGN KEY (`kode_poin`) REFERENCES `tb_poin` (`kode_poin`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
