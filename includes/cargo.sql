-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 09:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculate_cost`
--

CREATE TABLE `calculate_cost` (
  `chalan_no` int(11) NOT NULL,
  `from_warehouse` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `extra_charge` int(11) NOT NULL,
  `calculated_rant` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `c_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculate_cost`
--

INSERT INTO `calculate_cost` (`chalan_no`, `from_warehouse`, `destination`, `extra_charge`, `calculated_rant`, `billing_date`, `vehicle`, `c_remark`) VALUES
(11, '1', 'chittagong', 200, 5000, '2021-11-11', '14', 'nothing'),
(15, '5', 'chittagong', 500, 5000, '2021-11-06', '14', 'nothing'),
(18, '5', 'chittagong', 20, 15, '2021-07-07', '13', 'nothing'),
(111, '4', 'chittagong', 500, 1000, '2021-11-02', '9', 'nothing'),
(12345, '2', 'chittagong', 30000, 50000, '2021-07-25', '9', 'nothing'),
(122333, '1', 'chittagong', 12121, 32324, '2021-07-06', '9', 'nothing'),
(234567, '2', 'khulna', 2333, 111111111, '2021-07-16', '12', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `phone`, `text`) VALUES
(1, 'Sadia Tasnim Dhruba', 'tasnim@gmail.com', '+8801775375309', 'hi'),
(2, 'Sadia Tasnim Dhruba', 'tasnim@gmail.com', '+8801775375309', 'hi,');

-- --------------------------------------------------------

--
-- Table structure for table `transport_cost`
--

CREATE TABLE `transport_cost` (
  `t_id` int(11) NOT NULL,
  `t_vehicle` varchar(50) NOT NULL,
  `cost_type` varchar(50) NOT NULL,
  `additional_info` varchar(255) NOT NULL,
  `t_cost` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `t_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport_cost`
--

INSERT INTO `transport_cost` (`t_id`, `t_vehicle`, `cost_type`, `additional_info`, `t_cost`, `billing_date`, `t_remark`) VALUES
(4, '12', 'oil', 'habijabi', 232435, '2021-06-16', 'abcde'),
(5, '13', 'oil', 'habijabi', 25, '2021-07-10', 'nothing'),
(6, '9', 'oil', 'gazipur', 2000, '2021-11-10', 'nothing'),
(7, '14', 'oil', 'gazipur', 600, '2021-11-06', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `password`) VALUES
(1, 'Sadia Tasnim Dhruba', 'dhruba@gmail.com', '12345'),
(3, 'Sadia Tasnim Dhruba', 'tasnim@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `v_no` varchar(100) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `v_expenditure` int(11) NOT NULL,
  `v_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `uid`, `v_no`, `driver_name`, `v_type`, `v_expenditure`, `v_remark`) VALUES
(9, 1, 'mym KA 3456', 'dhruba', 'truck', 12345, 'nothing'),
(12, 1, 'ctg-8493', ' dhruba', 'bus', 40000, 'We are bus driver'),
(14, 3, 'dha 3456', ' hlw', 'bus', 40000, 'nothing'),
(16, 3, 'rtrg', 'fabiha', 'bus', 50000, 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_code` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `shop_code` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `dealer_name` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouse_code`, `uid`, `shop_code`, `location`, `dealer_name`, `rate`, `remark`) VALUES
(5, 1, 5, 'Rajshahi', 'sadia', 5000, 'nothing'),
(11, 3, 3, 'Dhaka', 'dhruba', 5000, 'nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculate_cost`
--
ALTER TABLE `calculate_cost`
  ADD PRIMARY KEY (`chalan_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_cost`
--
ALTER TABLE `transport_cost`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transport_cost`
--
ALTER TABLE `transport_cost`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
