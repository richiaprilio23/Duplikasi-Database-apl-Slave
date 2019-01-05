-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2018 at 10:06 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TransaksiSlave`
--

-- --------------------------------------------------------

--
-- Table structure for table `HotelBahagia`
--

CREATE TABLE `HotelBahagia` (
  `t_detail_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HotelBahagia`
--

INSERT INTO `HotelBahagia` (`t_detail_id`, `kategori_id`, `nama_barang`, `qty`, `transaksi_id`, `nama_tamu`, `harga`, `status`) VALUES
(96, 2, '223', 1, 288, 'asdasda', 275000, 0),
(91, 1, '228', 9, 207, 'ganang', 185000, 1),
(90, 2, '223', 2, 283, 'wahyu', 275000, 1),
(89, 1, '228', 2, 280, 'riki', 185000, 1),
(95, 1, '228', 1, 283, 'riki', 185000, 1),
(97, 1, '228', 3, 288, 'wahyu', 185000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `HotelCamplong`
--

CREATE TABLE `HotelCamplong` (
  `t_detail_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HotelCamplong`
--

INSERT INTO `HotelCamplong` (`t_detail_id`, `kategori_id`, `nama_barang`, `qty`, `transaksi_id`, `nama_tamu`, `harga`, `status`) VALUES
(96, 2, '223', 1, 288, 'asdasda', 275000, 0),
(91, 1, '228', 9, 207, 'ganang', 185000, 1),
(90, 2, '223', 2, 283, 'wahyu', 275000, 1),
(89, 1, '228', 2, 280, 'riki', 185000, 1),
(95, 1, '228', 1, 283, 'riki', 185000, 1),
(97, 1, '228', 3, 288, 'wahyu', 185000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `HotelPanglima`
--

CREATE TABLE `HotelPanglima` (
  `t_detail_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `HotelPKPRI`
--

CREATE TABLE `HotelPKPRI` (
  `t_detail_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HotelPKPRI`
--

INSERT INTO `HotelPKPRI` (`t_detail_id`, `kategori_id`, `nama_barang`, `qty`, `transaksi_id`, `nama_tamu`, `harga`, `status`) VALUES
(96, 2, '223', 1, 288, 'asdasda', 275000, 0),
(91, 1, '228', 9, 207, 'ganang', 185000, 1),
(90, 2, '223', 2, 283, 'wahyu', 275000, 1),
(89, 1, '228', 2, 280, 'riki', 185000, 1),
(95, 1, '228', 1, 283, 'riki', 185000, 1),
(97, 1, '228', 3, 288, 'wahyu', 185000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `HotelRahmat`
--

CREATE TABLE `HotelRahmat` (
  `t_detail_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`) VALUES
(22, 'admin@bewithdhanu.in', 'bQuODxqZlTGaN2z', 'Chrome 65.0.3325.183', '::1', 0, 1, '2018-09-11 22:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `isDeleted`) VALUES
(1, 'admin@bewithdhanu.in', '$2y$10$Pk.Y9O7NCeqlhmSHbCj/cOJn9/GN.R4vpLcN9mZ8DSH4YkZLLtTe.', 'System Administrator', 0),
(27, 'Develops@richisoft.co.id', '$2y$10$m6m/PVpYeS9u2DkRbizE5uKTBvof5lxX8azrkN6lCV9TWtz9Q56gS', 'Rici', 0),
(2, 'admin@admin.com', '$2y$10$6an4F1CVHQfHYqkPsa75kOrOLUapTMb8dU3B64Hd6tECHwAtGwSsm', 'Richi Administrator', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HotelBahagia`
--
ALTER TABLE `HotelBahagia`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- Indexes for table `HotelCamplong`
--
ALTER TABLE `HotelCamplong`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- Indexes for table `HotelPanglima`
--
ALTER TABLE `HotelPanglima`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- Indexes for table `HotelPKPRI`
--
ALTER TABLE `HotelPKPRI`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- Indexes for table `HotelRahmat`
--
ALTER TABLE `HotelRahmat`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `HotelBahagia`
--
ALTER TABLE `HotelBahagia`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `HotelCamplong`
--
ALTER TABLE `HotelCamplong`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `HotelPanglima`
--
ALTER TABLE `HotelPanglima`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `HotelPKPRI`
--
ALTER TABLE `HotelPKPRI`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `HotelRahmat`
--
ALTER TABLE `HotelRahmat`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
