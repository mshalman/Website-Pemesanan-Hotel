-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2024 at 09:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('pria','wanita') DEFAULT NULL,
  `nomor_identitas` varchar(16) DEFAULT NULL,
  `tipe_kamar` varchar(50) DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `discount` int(60) NOT NULL,
  `total_harga` decimal(60,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `jenis_kelamin`, `nomor_identitas`, `tipe_kamar`, `durasi`, `discount`, `total_harga`) VALUES
(1, 'salman', 'pria', '1234567891234567', 'deluxe', 1, 0, 830),
(2, 'salman', 'pria', '1234567891234567', 'deluxe', 1, 0, 830),
(3, 'salman', 'pria', '1234567891234567', 'deluxe', 1, 0, 830),
(4, 'salman', 'pria', '1234567891234567', 'standar', 4, 0, 2),
(5, 'salman', 'pria', '1234567891234567', 'standar', 4, 0, 2),
(6, 'salman', 'pria', '1234567891234567', 'executive', 4, 0, 3),
(7, 'salman', 'pria', '1234567891234567', 'standar', 3, 0, 1),
(8, 'salman', 'pria', '1234567891234567', 'executive', 3, 0, 3),
(9, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2),
(10, 'salman', 'pria', '1234567891234567', 'standar', 4, 0, 1),
(11, 'salman', 'pria', '1234567891234567', 'standar', 3, 0, 1),
(12, 'salman', 'pria', '1234567891234567', 'standar', 4, 0, 2),
(13, 'salman', 'pria', '1234567891234567', 'standar', 3, 0, 1),
(14, 'salman', 'pria', '1234567891234567', 'standar', 4, 0, 1),
(15, 'salman', 'pria', '1234567891234567', 'standar', 4, 0, 2088000),
(16, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(17, 'salman', 'pria', '1234567891234567', 'deluxe', 4, 0, 2988000),
(18, 'salman', 'pria', '1234567891234567', 'standar', 5, 10, 2250000),
(19, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 2088000),
(20, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 2088000),
(21, 'salman', 'pria', '1234567891234567', 'deluxe', 4, 10, 2988000),
(22, 'salman', 'pria', '1234567891234567', 'standar', 2, 0, 1160000),
(23, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 2088000),
(24, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(25, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(26, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(27, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(28, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(29, 'faris', 'pria', '1234567891234567', 'executive', 4, 10, 3888000),
(30, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 2088000),
(31, 'salman', 'pria', '12334', 'standar', 2, 0, 0),
(32, 'salman', 'pria', '12345', 'standar', 1, 0, 0),
(33, 'salman', 'pria', '12334', 'standar', 1, 0, 0),
(34, 'salman', 'pria', '12334', 'standar', 1, 0, 0),
(35, 'salman', 'pria', '12334', 'standar', 2, 0, 0),
(36, 'salman', 'pria', '12334', 'standar', 1, 0, 0),
(37, 'salman', 'pria', '12334', 'standar', 1, 0, 0),
(38, 'salman', 'pria', '1234567891234567', 'standar', 1, 0, 500000),
(39, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 500000),
(40, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 1800000),
(41, 'salman', 'pria', '1234567891234567', 'standar', 4, 10, 2088000),
(42, 'salman', 'pria', '1234567891234567', 'standar', 3, 0, 1740000),
(43, 'salman', 'pria', '1234567891234567', 'standar', 2, 0, 1160000),
(44, 'salman', 'pria', '1234567891234567', 'executive', 4, 10, 3888000),
(45, 'salman', 'pria', '1234567891234567', 'standar', 1, 0, 580000),
(46, 'salman', 'pria', '1234567891234567', 'standar', 2, 0, 1160000),
(47, 'salman', 'pria', '1234567891234567', 'executive', 4, 10, 3888000),
(48, 'salman', 'pria', '1234567891234567', 'executive', 2, 0, 2160000),
(49, 'salman', 'pria', '1234567891234567', 'executive', 4, 10, 2160000),
(50, 'salman', 'pria', '1234567891234567', 'deluxe', 2, 0, 1660000),
(51, 'salman', 'pria', '1234567891234567', 'deluxe', 4, 10, 2700000),
(52, 'salman', 'pria', '1234567891234567', 'standar', 1, 0, 580000),
(53, 'salman', 'pria', '1234567891234567', 'deluxe', 1, 0, 750000),
(54, 'salman', 'pria', '1234567891234567', 'executive', 4, 10, 3888000),
(55, 'salman', 'pria', '1234567891234567', 'executive', 4, 10, 3888000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
