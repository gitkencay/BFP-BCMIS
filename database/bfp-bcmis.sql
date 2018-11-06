-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 11:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `officer_type` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `officer` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firestation` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `officer_type`, `rank`, `officer`, `password`, `firestation`, `date_applied`) VALUES
(1, '1', '1', 'adssa', '', '1', 'November 6, 2018 4:55 pm'),
(2, 'Inspector', 'SF01', 'alvin', 'asdasd', '3', 'November 6, 2018 5:13 pm');

-- --------------------------------------------------------

--
-- Table structure for table `fsec_application`
--

CREATE TABLE `fsec_application` (
  `application_no` int(20) NOT NULL,
  `application_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `establishment_address` varchar(50) NOT NULL,
  `building_type` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number_of_floors` varchar(10) NOT NULL,
  `lot_size` varchar(10) NOT NULL,
  `initial_requirements` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fsec_application`
--

INSERT INTO `fsec_application` (`application_no`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay`, `date_applied`, `username`, `password`, `owner_name`, `number_of_floors`, `lot_size`, `initial_requirements`, `status`, `month`, `year`) VALUES
(9, '1', '1', '1', '1', '1', 'November 2, 2018 1:08 pm', 'clarkcan2018', '8080', 'Clark', '1', '1', 'Endorsement from building Official,Set of Building Plans (3),', '1', 'Nov', '2018'),
(10, '2', '2', '', '0', '0', 'November 2, 2018 7:41 pm', 'clarkcan2018', '8080', 'Kenneth', '2', '2', '', '0', 'Nov', '2018'),
(11, 'Justin', 'Puatu Peps', 'San Enrique', '0', '1', 'November 5, 2018 1:04 am', 'clarkcan2018', '8080', 'Justin', '9', '9', 'Endorsement from building Official,Set of Building Plans (3),', 'Pending', 'Nov', '2018'),
(13, 'f', 'd', 'rr', '0', '0', 'November 5, 2018 1:38 am', 'clarkcan2018', '8080', 'hhh', '3', '9', 'None', '0', 'Nov', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `fsic_application`
--

CREATE TABLE `fsic_application` (
  `application_no` int(20) NOT NULL,
  `application_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `establishment_address` varchar(50) NOT NULL,
  `building_type` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `type_of_permit` varchar(20) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number_of_floors` varchar(10) NOT NULL,
  `lot_size` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fsic_application`
--

INSERT INTO `fsic_application` (`application_no`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay`, `type_of_permit`, `date_applied`, `username`, `password`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `month`, `year`) VALUES
(11, 'Kenneth Cayetano', 'Printing', 'Bacolod City', '1', 'Brgy. 1', 'Building', 'November 2, 2018 8:21 pm', 'kenneth', 'cayetano', 'Kenneth Cayetano', '3', '4', 'Complete', 'Nov', '2018'),
(12, 'Juan Dela Cruz', 'Computer Shop', 'Bacolod City', '1', 'Brgy. 2', 'Occupancy', 'November 2, 2018 8:26 pm', 'juan', 'delacruz', 'Juan Dela Cruz', '3', '3', 'Complete', 'Nov', '2018');

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
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fsec_application`
--
ALTER TABLE `fsec_application`
  ADD PRIMARY KEY (`application_no`);

--
-- Indexes for table `fsic_application`
--
ALTER TABLE `fsic_application`
  ADD PRIMARY KEY (`application_no`);

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
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fsec_application`
--
ALTER TABLE `fsec_application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fsic_application`
--
ALTER TABLE `fsic_application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
