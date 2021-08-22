-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_salvage`
--

CREATE TABLE `data_salvage` (
  `id` smallint(6) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `no` varchar(20) NOT NULL,
  `wo` varchar(40) NOT NULL,
  `nama_sa` varchar(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_salvage`
--

INSERT INTO `data_salvage` (`id`, `timestamp`, `no`, `wo`, `nama_sa`, `nama_barang`) VALUES
(14, '2021-08-22 16:54:45.251513', 'DD6550QE', 'SWO/21/08/00111', 'Ahmad Supardy', '1. Bumper depan, \r\n2. Bumper belakang'),
(15, '2021-08-22 17:01:50.683712', 'DD6969SX', 'SWO/21/08/01002', 'Irwansyah', '1. Headlamp, \r\n2. Stoplamp, \r\n3. Pintu depan kanan, \r\n4. Bumper belakang, \r\n5. Bumper depan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_salvage`
--
ALTER TABLE `data_salvage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_salvage`
--
ALTER TABLE `data_salvage`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
