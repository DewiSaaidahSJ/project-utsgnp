-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 04:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tperpus`
--

CREATE TABLE `tperpus` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `eksemplar` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tperpus`
--

INSERT INTO `tperpus` (`id`, `judul_buku`, `eksemplar`, `pengarang`) VALUES
(8, 'Rahvayana - Ada yang Tiada', '35', 'Suwijo Tejo'),
(11, 'Pemrograman Android & Database', '50', 'Abdul Kadir'),
(12, 'Sebuah Seni untuk Bersikap Bodoamat', '20', 'Mark Manson'),
(13, 'Menjadi Web Entrepreneur, Siapa takut?', '25', 'Su Rahman'),
(14, 'Jaringan Komputer Berbasis Mikrotik +Cd', '65', 'Iwan Sofana'),
(15, 'Buku Sakti Pemrogaman Web', '60', 'Didik Setiawan'),
(20, 'Mahir Desain Grafis dengan CorelDraw', '55', 'Jubilee Enterprise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tperpus`
--
ALTER TABLE `tperpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tperpus`
--
ALTER TABLE `tperpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
