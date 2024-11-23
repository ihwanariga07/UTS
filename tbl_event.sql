-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2024 at 06:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_peserta` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id_event`, `nama_event`, `lokasi`, `tanggal`, `jumlah_peserta`) VALUES
(2, 'pspl', 'lampuuk', '2024-10-27', 50),
(3, 'wmk', 'kutaradja', '0000-00-00', 10),
(4, 'psh', 'banda', '2024-11-23', 35),
(5, 'shk', 'lp', '2024-11-23', 24),
(6, 'wmk', 'banda', '2024-11-23', 55),
(7, 'hut', 'banda', '2024-11-23', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
