-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 10:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarun_massage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(200) NOT NULL,
  `cus_sex` varchar(50) NOT NULL,
  `moblie_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_sex`, `moblie_phone`) VALUES
(2, 'ยิ่งลักษณ์ หหห', 'หญิง', '2256-56655'),
(3, 'ประยุทต์ จันโอชชชชช', 'ชาย', '8888');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(200) NOT NULL,
  `emp_sex` varchar(50) NOT NULL,
  `emp_phone` varchar(20) NOT NULL,
  `emp_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_sex`, `emp_phone`, `emp_address`) VALUES
(1, 'สนธิ2', 'ชาย', '888', '888'),
(2, 'สนธิ', 'ชาย', '5562544', 'หดฟ หกดฟหำพำไ'),
(3, 'ป้าง นครินทร์', 'ชาย', '55555', '8888888');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `mas_id` int(11) NOT NULL,
  `mas_type` varchar(100) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `mas_time` int(11) NOT NULL,
  `mas_timeupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`mas_id`, `mas_type`, `cus_id`, `emp_id`, `pay_id`, `mas_time`, `mas_timeupdate`) VALUES
(2, 'นวดทั่วไป', 2, 3, 1, 2, '2023-02-13 08:22:10'),
(3, 'นวดเส้น', 3, 3, 2, 3, '2023-02-13 08:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_price` decimal(10,0) NOT NULL,
  `pay_complete` tinyint(4) NOT NULL DEFAULT 0,
  `pay_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_price`, `pay_complete`, `pay_datetime`) VALUES
(1, '0', 0, '2023-02-13 09:20:43'),
(2, '900', 0, '2023-02-13 09:51:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`mas_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `pay_id` (`pay_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `mas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `massage`
--
ALTER TABLE `massage`
  ADD CONSTRAINT `massage_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`cus_id`),
  ADD CONSTRAINT `massage_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `massage_ibfk_3` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`pay_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
