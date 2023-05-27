-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 11:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stok-barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `stok_jaket`
--

CREATE TABLE `stok_jaket` (
  `id_jaket` int(11) NOT NULL,
  `nama_jaket` varchar(100) NOT NULL,
  `ukuran_jaket` varchar(20) NOT NULL,
  `harga_jaket` varchar(20) NOT NULL,
  `stok_jaket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_jaket`
--

INSERT INTO `stok_jaket` (`id_jaket`, `nama_jaket`, `ukuran_jaket`, `harga_jaket`, `stok_jaket`) VALUES
(3, 'Jaket Bomber Varsity', 'M', 'Rp.500.000', '3'),
(4, 'Bomber Varsity', 'XL', 'Rp.120.000', '12'),
(5, 'Bomber Varsity', 'XL', 'Rp.120.000', '12'),
(6, 'Hoodie Unisex', 'M', 'Rp.150.000', '8'),
(7, 'Leather Jacket', 'L', 'Rp.180.000', '5'),
(8, 'Denim Jacket', 'S', 'Rp.90.000', '15'),
(9, 'Windbreaker Jacket', 'XXL', 'Rp.200.000', '3'),
(10, 'Biker Jacket', 'S', 'Rp.110.000', '10'),
(11, 'Parka Jacket', 'L', 'Rp.160.000', '7'),
(12, 'Varsity Jacket', 'M', 'Rp.140.000', '9'),
(13, 'Military Jacket', 'XL', 'Rp.170.000', '6'),
(14, 'Puffer Jacket', 'S', 'Rp.95.000', '14'),
(15, 'Field Jacket', 'XXL', 'Rp.210.000', '2'),
(16, 'Track Jacket', 'L', 'Rp.175.000', '5'),
(17, 'Suede Jacket', 'M', 'Rp.130.000', '11'),
(18, 'Winter Jacket', 'XL', 'Rp.190.000', '4'),
(19, 'Sports Jacket', 'S', 'Rp.100.000', '13'),
(20, 'Fleece Jacket', 'L', 'Rp.165.000', '6'),
(21, 'Flight Jacket', 'M', 'Rp.135.000', '9'),
(22, 'Down Jacket', 'XL', 'Rp.160.000', '5'),
(23, 'Jean Jacket', 'S', 'Rp.105.000', '12'),
(24, 'Rain Jacket', 'XXL', 'Rp.220.000', '3'),
(25, 'Moto Jacket', 'L', 'Rp.180.000', '4'),
(26, 'Blazer Jacket', 'M', 'Rp.125.000', '10'),
(27, 'Outdoor Jacket', 'XL', 'Rp.195.000', '3'),
(28, 'Raincoat Jacket', 'S', 'Rp.98.000', '15'),
(29, 'Cropped Jacket', 'L', 'Rp.170.000', '7'),
(30, 'Corduroy Jacket', 'M', 'Rp.140.000', '8'),
(31, 'Biker Jacket', 'XL', 'Rp.180.000', '5'),
(32, 'Bomber Jacket', 'S', 'Rp.102.000', '11'),
(33, 'Satin Jacket', 'XXL', 'Rp.230.000', '2'),
(34, 'Biker Jacket', 'L', 'Rp.185.000', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stok_jaket`
--
ALTER TABLE `stok_jaket`
  ADD PRIMARY KEY (`id_jaket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stok_jaket`
--
ALTER TABLE `stok_jaket`
  MODIFY `id_jaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
