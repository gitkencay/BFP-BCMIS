-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 01:35 PM
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
(10, '2', '2', '', '0', '0', 'November 2, 2018 7:41 pm', 'clarkcan2018', '8080', 'Kenneth', '2', '2', '', '0', 'Nov', '2018');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fsec_application`
--
ALTER TABLE `fsec_application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fsic_application`
--
ALTER TABLE `fsic_application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
