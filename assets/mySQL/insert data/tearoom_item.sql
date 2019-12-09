-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: proj-mysql.uopnet.plymouth.ac.uk
-- Generation Time: Nov 29, 2019 at 01:17 AM
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
-- Table structure for table `tearoom_item`
--

CREATE TABLE `tearoom_item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `buying_cost` float(3,2) NOT NULL,
  `selling_price` float(3,2) NOT NULL,
  `category` varchar(5) NOT NULL,
  `quantity` int(4) NOT NULL,
  `min_reorder_amount` int(4) NOT NULL,
  `vegan` tinyint(1) NOT NULL,
  `vegetarian` tinyint(1) NOT NULL,
  `nut_free` tinyint(1) NOT NULL,
  `img_path` varchar(300) NOT NULL,
  `item_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tearoom_item`
--

INSERT INTO `tearoom_item` (`item_id`, `name`, `buying_cost`, `selling_price`, `category`, `quantity`, `min_reorder_amount`, `vegan`, `vegetarian`, `nut_free`, `img_path`, `item_status`) VALUES
(2, 'Brownie', 1.00, 2.00, 'Cake', 100, 10, 1, 1, 0, 'assets/img/brownie.jpg', 'Sale'),
(3, 'Chocolate Cake', 1.50, 3.00, 'Cake', 150, 10, 0, 1, 0, 'assets/img/chocolate.jpg', 'Sale'),
(4, 'Chocolate Cake', 1.50, 3.00, 'Cake', 150, 10, 0, 1, 0, 'assets/img/chocolate.jpg', 'Sale'),
(5, 'Chocolate Cake VEGAN', 2.00, 3.50, 'Cake', 100, 10, 1, 1, 0, 'assets/img/chocolateVegan.jpg', 'Sale'),
(6, 'Coffee', 1.00, 1.50, 'Drink', 200, 20, 0, 1, 1, 'assets/img/coffee.jpg', 'Sale'),
(7, 'Espresso', 1.50, 2.50, 'Drink', 200, 20, 1, 1, 1, 'assets/img/espresso.jpg', 'Sale'),
(8, 'Frapuccino', 2.50, 4.50, 'Drink', 100, 20, 0, 1, 1, 'assets/img/frappucino.jpg', 'Sale'),
(9, 'Fruit Cake VEGAN', 2.00, 3.50, 'Cake', 100, 20, 1, 1, 1, 'assets/img/fruit.jpg', 'Sale'),
(10, 'Hot Chocolate', 1.00, 2.50, 'Drink', 200, 40, 1, 1, 0, 'assets/img/hotChocolate.jpg', 'Sale'),
(11, 'Jasmine Tea', 1.50, 3.00, 'Drink', 140, 20, 1, 1, 1, 'assets/img/jasmine.jpg', 'Sale'),
(12, 'Latte', 1.00, 2.50, 'Drink', 150, 15, 0, 1, 1, 'assets/img/latte.jpg', 'Sale'),
(13, 'Pastel Candy Cake', 2.00, 4.50, 'Cake', 150, 10, 0, 0, 1, 'assets/img/pastel.jpg', 'Sale'),
(14, 'Peppermint Tea', 2.00, 2.50, 'Drink', 160, 20, 1, 1, 1, 'assets/img/peppermint.jpg', 'Sale'),
(15, 'Rainbow Cake', 2.00, 4.00, 'Cake', 100, 10, 0, 1, 1, 'assets/img/rainbow.jpg', 'Sale'),
(16, 'Raspberry Cake', 1.50, 2.50, 'Cake', 100, 20, 0, 1, 1, 'assets/img/raspberry.jpg', 'Sale'),
(17, 'Red Tea', 2.00, 2.50, 'Drink', 120, 20, 1, 1, 1, 'assets/img/redTea.jpg', 'Sale'),
(18, 'Red Velvet Cake', 2.00, 3.50, 'Drink', 200, 20, 0, 0, 0, 'assets/img/redVelvet.jpg', 'Sale'),
(19, 'Tea', 1.00, 1.50, 'Drink', 200, 50, 1, 1, 1, 'assets/img/tea.jpg', 'Sale'),
(20, 'Lemon Pie', 3.00, 5.00, 'Cake', 20, 10, 0, 0, 1, 'assets/img/lemon.jpg', 'Withdrawn'),
(21, 'Jelly Cake', 2.00, 4.50, 'Cake', 20, 10, 1, 1, 1, 'assets/img/jelly.jpg', 'Withdrawn'),
(22, 'Cheese Cake', 3.00, 5.50, 'Cake', 40, 10, 1, 1, 1, 'assets/img/cheese.jpg', 'Withdrawn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tearoom_item`
--
ALTER TABLE `tearoom_item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tearoom_item`
--
ALTER TABLE `tearoom_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
