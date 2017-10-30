-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 05:15 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_now`
--

CREATE TABLE `buy_now` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `paid` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_now`
--

INSERT INTO `buy_now` (`id`, `product_name`, `user`, `cost`, `paid`) VALUES
(1, 'V Wash', 'monishi@gmail.com', 600, 0),
(2, 'V Wash', 'monishi@gmail.com', 600, 0),
(3, 'V Wash', 'monishi@gmail.com', 600, 0),
(4, 'Pampers', 'monishi@gmail.com', 850, 0),
(5, 'Pampers', 'monishi@gmail.com', 850, 1),
(6, 'Pampers', 'monishi@gmail.com', 850, 1),
(7, 'Pampers', 'monishi@gmail.com', 850, 1),
(8, 'Pampers', 'monishi@gmail.com', 850, 1),
(9, 'Disprin', 'monishi@gmail.com', 5, 1),
(10, 'Pampers', 'monishi@gmail.com', 850, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` bigint(20) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `product_id`, `quantity`, `cost`, `paid`) VALUES
(16, 'monishi@gmail.com', 'Pampers', 3, 2550, 1),
(17, 'monishi@gmail.com', 'V Wash', 1, 600, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(2, 'Women'),
(3, 'Infants'),
(4, 'Medicines');

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `debit` bigint(20) NOT NULL,
  `debit1` bigint(20) NOT NULL,
  `debit2` bigint(20) NOT NULL,
  `debit3` bigint(20) NOT NULL,
  `expiry` date NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `card_number`, `debit`, `debit1`, `debit2`, `debit3`, `expiry`, `cvv`) VALUES
(1, '', 3425, 4135, 5645, 5423, '0000-00-00', 979),
(2, '', 3534, 7785, 4653, 8689, '0000-00-00', 907),
(3, '6076356625783698', 6076, 3566, 2578, 3698, '0000-00-00', 335),
(4, '1111222233335555', 1111, 2222, 3333, 5555, '0000-00-00', 336),
(5, '111133334444666', 1111, 3333, 4444, 666, '2017-10-05', 335),
(6, '1111111111111111', 1111, 1111, 1111, 1111, '2017-10-17', 334),
(7, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(8, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(9, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(10, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(11, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(12, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(13, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(14, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0),
(15, '1111111111111111', 1111, 1111, 1111, 1111, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` float NOT NULL,
  `dat` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `quantity`, `cost`, `dat`, `description`, `category_name`, `image`) VALUES
(14, 'V Wash', 18, 600, '2017-10-15', 'Used for female hygine', 'Women', 'images/V-WASH-PLUS-PH-35-1416891826-10012792.jpeg'),
(15, 'Pampers', 28, 850, '2017-12-14', 'Used for infants', 'Infants', 'images/17399580.jpeg'),
(16, 'Disprin', 69, 5, '2017-12-22', 'Used as a Painkiller', 'Medicines', 'images/3DF_800.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `paytm`
--

CREATE TABLE `paytm` (
  `id` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `cost` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paytm`
--

INSERT INTO `paytm` (`id`, `phone`, `cost`) VALUES
(1, 9800679222, 1450),
(2, 9800679222, 500),
(3, 9800679222, 400),
(4, 9800679222, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `username`, `password`, `position`) VALUES
(1, 'Sonali Pandey', 'sonali.pandey2015@vit.ac.in', 0, 'admin', '1a1dc91c907325c69271ddf0c944bc72', 1),
(2, 'Nish', 'monishi@gmail.com', 0, 'patient', 'b39024efbc6de61976f585c8421c6bba', 2),
(3, 'Cashier', 'cashier@gmail.com', 0, 'cashier', '6ac2470ed8ccf204fd5ff89b32a355cf', 3),
(8, 'Rajesh', 'rajesh@gmail.com', 8972983649, 'rajesh@gmail.com', 'love', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_now`
--
ALTER TABLE `buy_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_product_pay` (`name`,`product_id`,`paid`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cod`
--
ALTER TABLE `cod`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paytm`
--
ALTER TABLE `paytm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_now`
--
ALTER TABLE `buy_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `paytm`
--
ALTER TABLE `paytm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
