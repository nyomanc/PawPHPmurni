-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 07:44 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
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
(1, 1, 1, '1', '1', '1', 1, 1, NULL),
(2, 1, 12, 'f4', 'Lakban', 'localhost:8080/uploads/2.pdf', 3600, NULL, NULL),
(3, 123, 123, 'a4', 'Spiral', 'localhost:8080/uploads/Nyoman Chandra3.pdf', 3025800, NULL, NULL),
(4, 123, 123, 'a4', 'Spiral', 'http://localhost:8080/uploads/wendy4.pdf', 3025800, NULL, NULL),
(5, 1, 1, 'a4', 'Tidak', 'localhost:8080/uploads/nyoman5.pdf', 200, NULL, NULL),
(6, 1, 1, 'f4', 'Spiral', 'localhost:8080/uploads/123123 Chandra6.pdf', 300, NULL, NULL),
(7, 0, 0, '', '', 'localhost:8080/uploads/123123saasdas Chandra7.pdf', 0, NULL, NULL),
(8, 1, 2, 'f4', 'Tidak', 'localhost:8080/uploads/nyoman8.pdf', 600, NULL, NULL),
(9, 1, 1, 'f4', 'Spiral', 'localhost:8080/uploads/ 49.pdf', 300, 4, 1),
(10, 1, 1, 'f4', 'Spiral', 'localhost:8080/uploads/Nyoman Chandra 410.pdf', 300, 4, 1),
(11, 12, 100, 'f4', 'Spiral', 'localhost:8080/uploads/hendy putra 2211.pdf', 360000, 22, 1);

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
