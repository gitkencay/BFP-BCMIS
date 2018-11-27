-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 11:41 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfp-bcmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_no` int(20) NOT NULL,
  `application_type` varchar(10) NOT NULL,
  `application_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `establishment_address` varchar(50) NOT NULL,
  `building_type` varchar(50) NOT NULL,
  `barangay_name` varchar(100) NOT NULL,
  `type_of_permit` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number_of_floors` varchar(10) NOT NULL,
  `lot_size` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `initial_requirements` varchar(200) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_no`, `application_type`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay_name`, `type_of_permit`, `date_applied`, `username`, `password`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `initial_requirements`, `month`, `year`) VALUES
(3, 'FSEC', 'Kenneth Cayetano', 'Puatu Peps', 'San Enrique', '1', 'Alangilan', '', 'November 26, 2018 7:19 pm', 'clarkcan2018', '8080', 'asdasd', '1', '1', 'Pending', 'Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Nov', '2018'),
(7, 'FSEC', 'Alvin Yansons', 'Printing', 'Bacolod City', '1', 'Alangilan', 'NA', 'November 27, 2018 4:26 pm', 'alvin', 'alvin', 'Alvin Yanson', '3', '400', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1)', 'Nov', '2018'),
(9, 'FSEC', 'qwewq', 'qwewq', 'wqewq', '1', 'Alijis', 'NA', 'November 27, 2018 5:33 pm', 'qwewqeqw', 'qwewq', 'wqeqweqw', '1', '1', 'Incomplete', 'Endorsement from building Official,Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Nov', '2018'),
(10, 'FSEC', 'Alson Bayon-on', 'Printing', 'Bacolod City', '1', 'Alijis', 'NA', 'November 27, 2018 6:06 pm', 'alson', 'alson', 'Alson Bayon-on', '1', '1', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1)', 'Nov', '2018'),
(12, 'FSIC', 'Alson Bayon-on', 'Drugs', 'Banago, Bacolod City', '1', 'Alijis', 'Building', 'November 27, 2018 6:25 pm', 'alson', 'alson', 'Alvin Yanson', '1', '1', 'Complete', 'Endorsement from building Official,Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Nov', '2018'),
(13, 'FSIC', 'Kenneth D. Cayetano', 'Printing', 'Bacolod City', '1', 'Alijis', 'Building', 'November 27, 2018 6:37 pm', 'clarkcan2018', '8080', 'Alson Bayon-on', '1', '1', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1)', 'Nov', '2018'),
(14, 'FSIC', 'Erul John Ubas', 'Printing', 'Bacolod City', '1', 'Alangilan', 'Building', 'November 27, 2018 6:39 pm', 'erulgg', 'erulgg', 'Alson Bayon-on', '2', '2', 'Pending', 'Endorsement from building Official,Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Nov', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(100) NOT NULL,
  `barangay_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(1, 'Alangilan'),
(2, 'Alijis');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `officer_type` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `officer_fname` varchar(100) NOT NULL,
  `officer_mname` varchar(100) NOT NULL,
  `officer_lname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `firestation` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `officer_type`, `rank`, `officer_fname`, `officer_mname`, `officer_lname`, `username`, `password`, `confirm_password`, `firestation`, `date_applied`) VALUES
(4, 'Evaluator', 'F04', 'Justin', 'Christian', 'Puatu', 'asdasdasd', '1234', '1234', '1', 'November 15, 2018 10:10 pm'),
(5, 'Evaluator', 'F02', 'Kenneth', 'De La Rosa', 'Cayetano', 'Kenneth', 'asdfghj', 'asdfghj', '6', 'November 15, 2018 11:17 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(7, 'assessor1', 'user1@cool.com', 'assessor1'),
(9, 'user2', 'user2@cool.com', 'cooluser2'),
(10, 'user3', 'user3@cool.com', 'cooluser3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_no`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
