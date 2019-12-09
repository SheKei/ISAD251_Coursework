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
-- Table structure for table `tearoom_table_order`
--

CREATE TABLE `tearoom_table_order` (
  `table_number` int(2) NOT NULL,
  `order_id` int(3) NOT NULL,
  `item_id` int(3) NOT NULL,
  `order_quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tearoom_table_order`
--

INSERT INTO `tearoom_table_order` (`table_number`, `order_id`, `item_id`, `order_quantity`) VALUES
(1, 5, 14, 2),
(1, 5, 18, 2),
(1, 18, 4, 2),
(1, 18, 8, 1),
(1, 18, 11, 2),
(1, 32, 14, 2),
(1, 33, 18, 2),
(1, 63, 14, 2),
(1, 64, 18, 2),
(2, 22, 2, 2),
(2, 22, 15, 2),
(2, 34, 4, 2),
(2, 65, 4, 2),
(4, 17, 5, 1),
(4, 17, 16, 1),
(4, 35, 8, 1),
(4, 66, 8, 1),
(5, 12, 6, 2),
(5, 12, 8, 2),
(5, 36, 11, 2),
(5, 67, 11, 2),
(6, 21, 4, 2),
(6, 37, 2, 2),
(6, 68, 2, 2),
(7, 1, 16, 2),
(7, 3, 2, 4),
(7, 3, 19, 4),
(7, 38, 15, 2),
(7, 39, 5, 1),
(7, 69, 15, 2),
(7, 70, 5, 1),
(8, 19, 7, 2),
(8, 40, 16, 1),
(8, 71, 16, 1),
(9, 7, 7, 3),
(9, 7, 16, 2),
(9, 41, 6, 2),
(9, 72, 6, 2),
(10, 23, 12, 10),
(10, 25, 3, 2),
(10, 25, 17, 2),
(10, 42, 8, 2),
(10, 43, 4, 2),
(10, 73, 8, 2),
(10, 74, 4, 2),
(11, 9, 6, 1),
(11, 9, 19, 1),
(11, 14, 15, 4),
(11, 14, 18, 2),
(11, 44, 16, 2),
(11, 45, 2, 4),
(11, 75, 16, 2),
(11, 76, 2, 4),
(12, 2, 5, 3),
(12, 46, 19, 4),
(12, 77, 19, 4),
(13, 16, 13, 2),
(13, 16, 19, 2),
(13, 47, 7, 2),
(13, 48, 7, 3),
(13, 78, 7, 2),
(13, 79, 7, 3),
(14, 20, 19, 2),
(14, 49, 16, 2),
(14, 80, 16, 2),
(15, 24, 7, 4),
(15, 50, 12, 10),
(15, 81, 12, 10),
(16, 10, 7, 2),
(16, 10, 12, 2),
(16, 26, 2, 8),
(16, 51, 3, 2),
(16, 52, 17, 2),
(16, 82, 3, 2),
(16, 83, 17, 2),
(17, 8, 3, 2),
(17, 8, 14, 2),
(17, 15, 2, 2),
(17, 15, 8, 4),
(17, 27, 17, 2),
(17, 53, 6, 1),
(17, 54, 19, 1),
(17, 55, 15, 4),
(17, 84, 6, 1),
(17, 85, 19, 1),
(17, 86, 15, 4),
(18, 6, 2, 2),
(18, 6, 6, 2),
(18, 6, 9, 2),
(18, 28, 13, 2),
(18, 28, 19, 4),
(18, 56, 18, 2),
(18, 57, 5, 3),
(18, 87, 18, 2),
(18, 88, 5, 3),
(19, 13, 2, 2),
(19, 13, 5, 2),
(19, 29, 12, 2),
(19, 58, 13, 2),
(19, 59, 19, 2),
(19, 89, 13, 2),
(19, 90, 19, 2),
(20, 4, 12, 2),
(20, 30, 16, 4),
(20, 30, 17, 4),
(20, 31, 8, 4),
(20, 31, 15, 4),
(20, 60, 19, 2),
(20, 61, 7, 4),
(20, 62, 7, 2),
(20, 91, 7, 4),
(20, 91, 19, 2),
(20, 93, 7, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tearoom_table_order`
--
ALTER TABLE `tearoom_table_order`
  ADD PRIMARY KEY (`table_number`,`order_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tearoom_table_order`
--
ALTER TABLE `tearoom_table_order`
  ADD CONSTRAINT `FK_Order` FOREIGN KEY (`table_number`,`order_id`) REFERENCES `tearoom_order` (`table_number`, `order_id`),
  ADD CONSTRAINT `tearoom_table_order_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tearoom_item` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
