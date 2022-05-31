-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 04:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `order_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `totalPrice` int(50) NOT NULL,
  `Pid of article` text NOT NULL,
  `token_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_id`, `status`, `name`, `address`, `mobile`, `totalPrice`, `Pid of article`, `token_no`) VALUES
(1, 'pending', 'kamal kishor verma', 'sdfjslfjsj sdajsfjs safjslfjlsfjj saf', 1154552111, 2003, '1,2,3,4', 'jlgjfgjjdgjgjsdgjslgjlsjgf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pid` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pid`, `name`, `price`, `picture`) VALUES
(1, 'product1', 520, 'product1.jpg'),
(2, 'product2', 500, 'product2.jpg'),
(4, 'product4', 380, 'product4.jpg'),
(6, 'product6', 380, 'product6.jpg'),
(7, 'product5', 300, 'product5.jpg'),
(8, 'product3', 200, 'product3.jpg'),
(9, 'product7', 199, 'product7.jpg'),
(10, 'product8', 150, 'product8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
