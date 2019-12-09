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
-- Table structure for table `tearoom_order`
--

CREATE TABLE `tearoom_order` (
  `table_number` int(2) NOT NULL,
  `order_id` int(3) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'ONGOING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tearoom_order`
--

INSERT INTO `tearoom_order` (`table_number`, `order_id`, `order_date`, `order_status`) VALUES
(1, 5, '2019-11-02 13:00:00', 'Delivered'),
(1, 18, '2019-11-11 13:00:00', 'Delivered'),
(1, 32, '2019-12-02 13:00:00', 'Delivered'),
(1, 33, '2019-12-11 13:00:00', 'Delivered'),
(1, 63, '2020-11-02 13:00:00', 'Delivered'),
(1, 64, '2020-11-11 13:00:00', 'Delivered'),
(2, 22, '2019-11-14 13:00:00', 'Delivered'),
(2, 34, '2019-12-14 13:00:00', 'Delivered'),
(2, 65, '2020-11-14 13:00:00', 'Delivered'),
(4, 17, '2019-11-11 13:00:00', 'Delivered'),
(4, 35, '2019-12-11 13:00:00', 'Delivered'),
(4, 66, '2020-11-11 13:00:00', 'Delivered'),
(5, 12, '2019-11-14 13:00:00', 'Delivered'),
(5, 36, '2019-12-14 13:00:00', 'Delivered'),
(5, 67, '2020-11-14 13:00:00', 'Delivered'),
(6, 21, '2019-11-08 16:25:00', 'Delivered'),
(6, 37, '2019-12-08 16:25:00', 'Delivered'),
(6, 68, '2020-11-08 16:25:00', 'Delivered'),
(7, 1, '2019-11-01 14:20:00', 'Delivered'),
(7, 3, '2019-11-01 09:00:00', 'Cancelled'),
(7, 38, '2019-12-01 14:20:00', 'Delivered'),
(7, 39, '2019-12-01 09:00:00', 'Cancelled'),
(7, 69, '2020-11-01 14:20:00', 'Delivered'),
(7, 70, '2020-11-01 09:00:00', 'Cancelled'),
(8, 19, '2019-11-14 11:00:00', 'Cancelled'),
(8, 40, '2019-12-14 11:00:00', 'Cancelled'),
(8, 71, '2020-11-14 11:00:00', 'Cancelled'),
(9, 7, '2019-11-03 11:15:00', 'Cancelled'),
(9, 41, '2019-12-03 11:15:00', 'Cancelled'),
(9, 72, '2020-11-03 11:15:00', 'Cancelled'),
(10, 23, '2019-11-14 13:00:00', 'Delivered'),
(10, 25, '2019-11-14 15:00:00', 'Delivered'),
(10, 42, '2019-12-14 13:00:00', 'Delivered'),
(10, 43, '2019-12-14 15:00:00', 'Delivered'),
(10, 73, '2020-11-14 13:00:00', 'Delivered'),
(10, 74, '2020-11-14 15:00:00', 'Delivered'),
(11, 9, '2019-11-04 15:20:00', 'Delivered'),
(11, 14, '2019-11-03 09:00:00', 'Cancelled'),
(11, 44, '2019-12-04 15:20:00', 'Delivered'),
(11, 45, '2019-12-03 09:00:00', 'Cancelled'),
(11, 75, '2020-11-04 15:20:00', 'Delivered'),
(11, 76, '2020-11-03 09:00:00', 'Cancelled'),
(12, 2, '2019-11-01 09:00:00', 'Delivered'),
(12, 46, '2019-12-01 09:00:00', 'Delivered'),
(12, 77, '2020-11-01 09:00:00', 'Delivered'),
(13, 11, '2019-11-07 17:00:00', 'Delivered'),
(13, 16, '2019-11-10 08:00:00', 'Delivered'),
(13, 47, '2019-12-07 17:00:00', 'Delivered'),
(13, 48, '2019-12-10 08:00:00', 'Delivered'),
(13, 78, '2020-11-07 17:00:00', 'Delivered'),
(13, 79, '2020-11-10 08:00:00', 'Delivered'),
(14, 20, '2019-11-05 11:00:00', 'Delivered'),
(14, 49, '2019-12-05 11:00:00', 'Delivered'),
(14, 80, '2020-11-05 11:00:00', 'Delivered'),
(15, 24, '2019-11-14 13:00:00', 'Delivered'),
(15, 50, '2019-12-14 13:00:00', 'Delivered'),
(15, 81, '2020-11-14 13:00:00', 'Delivered'),
(16, 10, '2019-11-05 12:10:00', 'Delivered'),
(16, 26, '2019-11-05 09:00:00', 'Delivered'),
(16, 51, '2019-12-05 12:10:00', 'Delivered'),
(16, 52, '2019-12-05 09:00:00', 'Delivered'),
(16, 82, '2020-11-05 12:10:00', 'Delivered'),
(16, 83, '2020-11-05 09:00:00', 'Delivered'),
(17, 8, '2019-11-04 15:20:00', 'Delivered'),
(17, 15, '2019-11-10 08:00:00', 'Delivered'),
(17, 27, '2019-10-30 00:00:00', 'Cancelled'),
(17, 53, '2019-12-04 15:20:00', 'Delivered'),
(17, 54, '2019-12-10 08:00:00', 'Delivered'),
(17, 55, '2019-12-30 00:00:00', 'Cancelled'),
(17, 84, '2020-11-04 15:20:00', 'Delivered'),
(17, 85, '2020-11-10 08:00:00', 'Delivered'),
(17, 86, '2020-10-30 00:00:00', 'Cancelled'),
(18, 6, '2019-11-02 13:00:00', 'Delivered'),
(18, 28, '2019-11-06 13:36:00', 'Delivered'),
(18, 56, '2019-12-02 13:00:00', 'Delivered'),
(18, 57, '2019-12-06 13:36:00', 'Delivered'),
(18, 87, '2020-11-02 13:00:00', 'Delivered'),
(18, 88, '2020-11-06 13:36:00', 'Delivered'),
(19, 13, '2019-11-13 16:00:00', 'Delivered'),
(19, 29, '2019-10-29 08:00:00', 'Cancelled'),
(19, 58, '2019-12-13 16:00:00', 'Delivered'),
(19, 59, '2019-12-29 08:00:00', 'Cancelled'),
(19, 89, '2020-11-13 16:00:00', 'Delivered'),
(19, 90, '2020-10-29 08:00:00', 'Cancelled'),
(20, 4, '2019-11-02 13:00:00', 'Delivered'),
(20, 30, '2019-10-27 14:22:00', 'Delivered'),
(20, 31, '2019-10-14 09:20:00', 'Delivered'),
(20, 60, '2019-12-02 13:00:00', 'Delivered'),
(20, 61, '2019-12-27 14:22:00', 'Delivered'),
(20, 62, '2019-12-14 09:20:00', 'Delivered'),
(20, 91, '2020-11-02 13:00:00', 'Delivered'),
(20, 92, '2020-10-27 14:22:00', 'Delivered'),
(20, 93, '2020-10-14 09:20:00', 'Delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tearoom_order`
--
ALTER TABLE `tearoom_order`
  ADD PRIMARY KEY (`table_number`,`order_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tearoom_order`
--
ALTER TABLE `tearoom_order`
  ADD CONSTRAINT `tearoom_order_ibfk_1` FOREIGN KEY (`table_number`) REFERENCES `tearoom_table` (`table_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
