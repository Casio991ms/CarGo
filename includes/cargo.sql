-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 05:50 PM
-- Server version: 8.0.20
-- PHP Version: 7.4.7

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
  `chalan_no` int NOT NULL,
  `from_warehouse` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `extra_charge` int NOT NULL,
  `calculated_rant` int NOT NULL,
  `billing_date` date NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `c_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calculate_cost`
--

INSERT INTO `calculate_cost` (`chalan_no`, `from_warehouse`, `destination`, `extra_charge`, `calculated_rant`, `billing_date`, `vehicle`, `c_remark`) VALUES
(18, '5', 'chittagong', 20, 15, '2021-07-07', '13', 'nothing'),
(12345, '2', 'chittagong', 30000, 50000, '2021-07-25', '9', 'nothing'),
(122333, '1', 'chittagong', 12121, 32324, '2021-07-06', '9', 'nothing'),
(234567, '2', 'khulna', 2333, 111111111, '2021-07-16', '12', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `transport_cost`
--

CREATE TABLE `transport_cost` (
  `t_id` int NOT NULL,
  `t_vehicle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cost_type` varchar(50) NOT NULL,
  `additional_info` varchar(255) NOT NULL,
  `t_cost` int NOT NULL,
  `billing_date` date NOT NULL,
  `t_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_cost`
--

INSERT INTO `transport_cost` (`t_id`, `t_vehicle`, `cost_type`, `additional_info`, `t_cost`, `billing_date`, `t_remark`) VALUES
(4, '12', 'oil', 'habijabi', 232435, '2021-06-16', 'abcde'),
(5, '13', 'oil', 'habijabi', 25, '2021-07-10', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `password`) VALUES
(1, 'Sadia Tasnim Dhruba', 'dhruba@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int NOT NULL,
  `v_no` varchar(100) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `v_expenditure` int NOT NULL,
  `v_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `v_no`, `driver_name`, `v_type`, `v_expenditure`, `v_remark`) VALUES
(9, 'mym KA 3456', 'hi hlw', 'truck', 12345, 'nothing'),
(12, 'ctg-8493', 'nafis onamika dhruba', 'bus', 40000, 'We are bus driver');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_code` int NOT NULL,
  `shop_code` int NOT NULL,
  `location` varchar(50) NOT NULL,
  `dealer_name` varchar(40) NOT NULL,
  `rate` int NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouse_code`, `shop_code`, `location`, `dealer_name`, `rate`, `remark`) VALUES
(1, 1, 'Bangladesh', 'dhruba', 5000, 'nothing'),
(3, 3, 'Sylhet', 'Sadia Tasnim', 6000, 'wowwwwwww');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculate_cost`
--
ALTER TABLE `calculate_cost`
  ADD PRIMARY KEY (`chalan_no`);

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
-- AUTO_INCREMENT for table `transport_cost`
--
ALTER TABLE `transport_cost`
  MODIFY `t_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
