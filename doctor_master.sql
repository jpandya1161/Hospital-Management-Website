-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 02:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'Dental'),
(3, 'General'),
(4, 'Neurology'),
(2, 'Orthopedic');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `name` varchar(40) NOT NULL,
  `department` varchar(20) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `new_case_fee` int(5) NOT NULL,
  `old_case_fee` int(5) NOT NULL,
  `emergency_fee` int(5) NOT NULL,
  `validity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`name`, `department`, `qualification`, `address`, `city`, `state`, `phone`, `new_case_fee`, `old_case_fee`, `emergency_fee`, `validity`) VALUES
('Devang Soni', 'General', 'MD', '6B Saibaba Society, Oppo. Banker heart hospita', 'Vadodara', 'Gujarat', 6352549664, 300, 200, 500, 20),
('Cassy Thapa', 'Orthopedic', 'MBBS', 'Virat nagar', 'Ahmedabad', 'Gujarat', 9876109000, 100, 80, 200, 10),
('UM Amalani', 'General', 'MD', 'GF-2 Central Building, Sangam', 'Vadodara', 'Gujarat', 9087120817, 200, 150, 500, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pdata`
--

CREATE TABLE `pdata` (
  `id` int(4) NOT NULL,
  `casetype` varchar(20) CHARACTER SET utf8 NOT NULL,
  `isemerg` varchar(10) NOT NULL,
  `casenum` varchar(20) NOT NULL,
  `doct` varchar(20) NOT NULL,
  `casefee` int(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mob` int(10) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(15) NOT NULL,
  `paymode` varchar(20) NOT NULL,
  `occup` varchar(20) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `tokenno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdata`
--

INSERT INTO `pdata` (`id`, `casetype`, `isemerg`, `casenum`, `doct`, `casefee`, `dept`, `name`, `age`, `gender`, `mob`, `address`, `city`, `pincode`, `state`, `country`, `paymode`, `occup`, `religion`, `tokenno`) VALUES
(8, 'Emergency', 'on', '1', 'Dr. shah', 300, 'Orthopedic', 'Devang Soni', 21, 'Male', 2147483647, '6B Saibaba Society, ', 'Vadodara', 390022, 'Gujarat', 'India', 'Cash', 'Student', 'Hindu', 1),
(9, 'Emergency', 'on', '2', 'UM Amalani', 300, '', 'Raja Jani', 32, 'Male', 2147483647, 'Ajit Nagar', 'Surat', 400231, 'Guajarat', 'India', 'Net banking', 'Bussiness', 'Other', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`),
  ADD UNIQUE KEY `dep_name` (`dep_name`);

--
-- Indexes for table `pdata`
--
ALTER TABLE `pdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdata`
--
ALTER TABLE `pdata`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
