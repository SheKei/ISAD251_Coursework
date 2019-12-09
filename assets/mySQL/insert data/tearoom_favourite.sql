-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: proj-mysql.uopnet.plymouth.ac.uk
-- Generation Time: Nov 29, 2019 at 01:30 AM
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
-- Table structure for table `tearoom_favourite`
--

CREATE TABLE `tearoom_favourite` (
  `fav_id` int(11) NOT NULL,
  `table_number` int(3) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tearoom_favourite`
--

INSERT INTO `tearoom_favourite` (`fav_id`, `table_number`, `item_id`) VALUES
(1, 12, 12),
(2, 12, 6),
(3, 14, 4),
(4, 12, 5),
(5, 18, 6),
(6, 2, 7),
(7, 1, 12),
(8, 8, 11),
(9, 7, 3),
(10, 14, 4),
(11, 12, 9),
(12, 8, 16),
(13, 2, 17),
(14, 12, 2),
(15, 12, 12),
(16, 12, 6),
(17, 14, 4),
(18, 12, 5),
(19, 18, 6),
(20, 13, 7),
(21, 14, 12),
(22, 15, 11),
(23, 16, 3),
(24, 17, 4),
(25, 18, 9),
(26, 19, 16),
(27, 20, 17),
(28, 14, 4),
(29, 12, 5),
(30, 18, 6),
(31, 13, 7),
(32, 14, 12),
(33, 15, 10),
(34, 16, 11),
(35, 17, 12),
(36, 18, 13),
(37, 19, 14),
(38, 20, 15),
(39, 14, 4),
(40, 12, 5),
(41, 18, 6),
(42, 13, 7),
(43, 7, 12),
(44, 6, 10),
(45, 5, 11),
(46, 4, 12),
(47, 3, 13),
(48, 2, 14),
(49, 1, 15),
(50, 12, 2),
(51, 12, 12),
(52, 12, 6),
(53, 14, 4),
(54, 12, 5),
(55, 18, 6),
(56, 2, 7),
(57, 1, 12),
(58, 8, 11),
(59, 7, 3),
(60, 14, 4),
(61, 12, 9),
(62, 8, 16),
(63, 2, 17),
(64, 12, 2),
(65, 12, 12),
(66, 12, 6),
(67, 14, 4),
(68, 12, 5),
(69, 18, 6),
(70, 13, 7),
(71, 14, 12),
(72, 15, 11),
(73, 16, 3),
(74, 17, 4),
(75, 18, 9),
(76, 19, 16),
(77, 20, 17),
(78, 14, 4),
(79, 12, 5),
(80, 18, 6),
(81, 13, 7),
(82, 14, 12),
(83, 15, 10),
(84, 16, 11),
(85, 17, 12),
(86, 18, 13),
(87, 19, 14),
(88, 20, 15),
(89, 14, 4),
(90, 12, 5),
(91, 18, 6),
(92, 13, 7),
(93, 7, 12),
(94, 6, 10),
(95, 5, 11),
(96, 4, 12),
(97, 3, 13),
(98, 2, 14),
(99, 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tearoom_favourite`
--
ALTER TABLE `tearoom_favourite`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `table_number` (`table_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tearoom_favourite`
--
ALTER TABLE `tearoom_favourite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tearoom_favourite`
--
ALTER TABLE `tearoom_favourite`
  ADD CONSTRAINT `tearoom_favourite_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tearoom_item` (`item_id`),
  ADD CONSTRAINT `tearoom_favourite_ibfk_2` FOREIGN KEY (`table_number`) REFERENCES `tearoom_table` (`table_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
