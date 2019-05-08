-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2018 at 11:21 PM
-- Server version: 5.7.23-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawkelsi_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `print_order`
--

CREATE TABLE `print_order` (
  `id` int(11) NOT NULL,
  `page` int(10) NOT NULL,
  `copy` int(10) NOT NULL,
  `paper_type` varchar(100) NOT NULL,
  `binding` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print_order`
--

INSERT INTO `print_order` (`id`, `page`, `copy`, `paper_type`, `binding`, `file_path`, `total`, `userid`, `stat`) VALUES
(1, 1, 1, '1', '1', '1', 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `print_order`
--
ALTER TABLE `print_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `print_order`
--
ALTER TABLE `print_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
