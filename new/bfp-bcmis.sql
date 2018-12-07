-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 05:08 PM
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
  `assessment_status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_no`, `application_type`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay_name`, `type_of_permit`, `date_applied`, `username`, `password`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `initial_requirements`, `assessment_status`, `month`, `year`) VALUES
(32, 'FSEC', 'Alvin Yanson', 'Printing', 'Bacolod City', '1', 'Mandalagan', 'NA', 'December 3, 2018 6:33 pm', 'alvin', 'alvin', 'Alvin Yanson', '1', '1', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),', 'Unassessed', 'Dec', '2018'),
(33, 'FSEC', 'Alson John Bayon-on', 'Printing', 'Bacolod City', '0', 'Banago', 'NA', 'December 3, 2018 6:52 pm', 'alson', 'alson', 'Alson John Bayon-on', '1', '1', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018'),
(34, 'FSEC', 'Alvin Mananquil', 'Printing', 'Bacolod City', '0', 'Barangay 39', 'NA', 'December 3, 2018 6:53 pm', 'alvinmis', 'alvinmis', 'Alvin Mananquil', '1', '1', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Assessed', 'Dec', '2018'),
(35, 'FSEC', 'Arianne Torres', 'Printing', 'Bacolod City', '0', 'Barangay 39', 'NA', 'December 3, 2018 6:54 pm', 'arianne', 'arianne', 'Arianne Torres', '1', '1', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018'),
(36, 'FSIC', 'Rommel Adricula ', 'CISCO', 'Bacolod City', '1', 'Barangay 39', 'Building', 'December 3, 2018 10:16 pm', 'rommel', 'rommel', 'Rommel Adricula', '2', '10', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),', 'Unassessed', 'Dec', '2018'),
(37, 'FSIC', 'Rogy Acosta', 'Falcon', 'Bacolod City', '1', 'Barangay 39', 'Building', 'December 3, 2018 10:17 pm', 'rogy', 'rogy', 'Rogy Acosta', '1', '1', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018'),
(38, 'FSEC', 'Juan Dela Cruz', 'Printing', 'Bacolod City', '1', 'Barangay 39', 'NA', 'December 4, 2018 5:13 pm', 'juan', 'juan', 'Juan Dela Cruz', '3', '3', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `ops_no` int(100) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `type_of_certificate` varchar(50) NOT NULL,
  `construction_tax` varchar(100) NOT NULL,
  `reality_tax` varchar(100) NOT NULL,
  `premium_tax` varchar(100) NOT NULL,
  `sales_tax` varchar(100) NOT NULL,
  `proceeds_tax` varchar(100) NOT NULL,
  `inspection_fee` varchar(100) NOT NULL,
  `storage_clearance` varchar(100) NOT NULL,
  `conveyance_clearance` varchar(100) NOT NULL,
  `installation_clearance` varchar(100) NOT NULL,
  `other_clearance` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`ops_no`, `application_no`, `applicant_name`, `location`, `status`, `business_name`, `type_of_certificate`, `construction_tax`, `reality_tax`, `premium_tax`, `sales_tax`, `proceeds_tax`, `inspection_fee`, `storage_clearance`, `conveyance_clearance`, `installation_clearance`, `other_clearance`, `total_amount`, `month`, `year`) VALUES
(6, '34', 'Alvin Mananquil', 'Bacolod City', 'Complete', 'Printing', 'FSEC', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '100', 'Dec', '2018');

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
(2, 'Alijis'),
(3, 'Banago'),
(4, 'Barangay 1'),
(5, 'Barangay 2'),
(6, 'Barangay 3'),
(7, 'Barangay 4'),
(8, 'Barangay 5'),
(9, 'Barangay 6'),
(10, 'Barangay 7'),
(11, 'Barangay 8'),
(12, 'Barangay 9 '),
(13, 'Barangay 10'),
(14, 'Barangay 11'),
(15, 'Barangay 12'),
(16, 'Barangay 13'),
(17, 'Barangay 14'),
(18, 'Barangay 15'),
(19, 'Barangay 16 '),
(20, 'Barangay 17'),
(21, 'Barangay 18'),
(22, 'Barangay 19'),
(23, 'Barangay 20'),
(24, 'Barangay 21'),
(25, 'Barangay 22'),
(26, 'Barangay 23'),
(27, 'Barangay 24'),
(28, 'Barangay 25'),
(29, 'Barangay 26'),
(30, 'Barangay 27'),
(31, 'Barangay 28'),
(32, 'Barangay 29'),
(33, 'Barangay 30'),
(34, 'Barangay 31'),
(35, 'Barangay 32'),
(36, 'Barangay 33'),
(37, 'Barangay 34 '),
(38, 'Barangay 35'),
(39, 'Barangay 36'),
(40, 'Barangay 37 '),
(41, 'Barangay 38'),
(42, 'Barangay 39'),
(43, 'Barangay 40'),
(44, 'Barangay 41'),
(45, 'Bata'),
(46, 'Cabug'),
(47, 'Estefanía'),
(48, 'Felisa'),
(49, 'Granada'),
(50, 'Handumanan'),
(51, 'Mandalagan'),
(52, 'Mansilingan'),
(53, 'Montevista'),
(54, 'Pahanocoy'),
(55, 'Punta Taytay'),
(56, 'Singcang-Airport'),
(57, 'Sum-ag'),
(58, 'Taculing'),
(59, 'Tangub'),
(60, 'Villamonte'),
(61, 'Vista Alegre');

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
-- Table structure for table `inspection_order`
--

CREATE TABLE `inspection_order` (
  `inspection_order_no` int(10) NOT NULL,
  `inspection_report_no` varchar(20) NOT NULL,
  `application_no` varchar(20) NOT NULL,
  `building_construction_no` varchar(20) NOT NULL,
  `boc_no` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_order`
--

INSERT INTO `inspection_order` (`inspection_order_no`, `inspection_report_no`, `application_no`, `building_construction_no`, `boc_no`, `date`, `status`, `month`, `year`) VALUES
(1, '0001', '2018-11-30', '110', '110', 'November 30, 2018', 'Complete', 'Nov', '2018'),
(2, '0002', '2018-11-31', '111', '111', 'November 30, 2018', 'Complete', 'Nov', '2018'),
(3, '0003', '2018-11-32', '112', '112', 'November 30, 2018', 'Complete', 'Nov', '2018'),
(4, '0004', '2018-11-33', '113', '113', 'November 30, 2018', 'Complete', 'Nov', '2018'),
(5, '0005', '2018-11-34', '114', '114', 'November 30, 2018', 'Complete', 'Nov', '2018');

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
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`ops_no`);

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
-- Indexes for table `inspection_order`
--
ALTER TABLE `inspection_order`
  ADD PRIMARY KEY (`inspection_order_no`);

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
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inspection_order`
--
ALTER TABLE `inspection_order`
  MODIFY `inspection_order_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
