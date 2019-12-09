-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: proj-mysql.uopnet.plymouth.ac.uk
-- Generation Time: Nov 29, 2019 at 01:18 AM
-- Server version: 8.0.16
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isad251_stong`
--

-- --------------------------------------------------------

--
-- Table structure for table `tearoom_table`
--

CREATE TABLE `tearoom_table` (
  `table_number` int(3) NOT NULL,
  `seat_capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tearoom_table`
--

INSERT INTO `tearoom_table` (`table_number`, `seat_capacity`) VALUES
(1, 4),
(2, 4),
(3, 2),
(4, 2),
(5, 2),
(6, 6),
(7, 8),
(8, 2),
(9, 2),
(10, 2),
(11, 4),
(12, 4),
(13, 4),
(14, 2),
(15, 2),
(16, 6),
(17, 2),
(18, 4),
(19, 4),
(20, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tearoom_table`
--
ALTER TABLE `tearoom_table`
  ADD PRIMARY KEY (`table_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
