-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 02:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrohome`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `adm_username` varchar(30) DEFAULT NULL,
  `adm_pass` varchar(100) DEFAULT NULL,
  `adm_name` varchar(30) DEFAULT NULL,
  `adm_address` text,
  `adm_phone` varchar(30) DEFAULT NULL,
  `adm_email` varchar(30) DEFAULT NULL,
  `adm_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_username`, `adm_pass`, `adm_name`, `adm_address`, `adm_phone`, `adm_email`, `adm_photo`) VALUES
(1, 'admin', 'admin', 'Faruk Ahmed Bablu', '272, Shenpara Parbata, Mirpur 10, Dhaka', '01730910539', 'bablububt@gmail.com', 'bablu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

CREATE TABLE `landloard` (
  `lnd_id` int(11) NOT NULL,
  `lnd_name` varchar(30) DEFAULT NULL,
  `lnd_father_name` varchar(30) DEFAULT NULL,
  `lnd_birth_date` datetime DEFAULT NULL,
  `lnd_maritial_status` int(2) DEFAULT NULL,
  `lnd_permanent_add` text,
  `lnd_profession_institute` varchar(30) DEFAULT NULL,
  `lnd_religion` varchar(30) DEFAULT NULL,
  `lnd_educational_status` varchar(30) DEFAULT NULL,
  `lnd_phone` varchar(30) DEFAULT NULL,
  `lnd_email` varchar(30) DEFAULT NULL,
  `lnd_nid` varchar(30) DEFAULT NULL,
  `lnd_passport` varchar(30) DEFAULT NULL,
  `lnd_emergency_name` varchar(30) DEFAULT NULL,
  `lnd_emergency_relation` varchar(30) DEFAULT NULL,
  `lnd_emergency_address` text,
  `lnd_emergency_phone` varchar(30) DEFAULT NULL,
  `lnd_homeworker_name` varchar(30) DEFAULT NULL,
  `lnd_homeworker_nid` varchar(30) DEFAULT NULL,
  `lnd_homeworker_phone` varchar(30) DEFAULT NULL,
  `lnd_homeworker_permanent_add` varchar(30) DEFAULT NULL,
  `lnd_driver_name` varchar(30) DEFAULT NULL,
  `lnd_driver_nid` varchar(30) DEFAULT NULL,
  `lnd_driver_phone` varchar(30) DEFAULT NULL,
  `lnd_driver_permanent_add` varchar(30) DEFAULT NULL,
  `lnd_previous_landlord_name` varchar(30) DEFAULT NULL,
  `lnd_previous_landlord_phone` varchar(30) DEFAULT NULL,
  `lnd_previous_landlord_permanent_add` varchar(30) DEFAULT NULL,
  `lnd_prvious_leave_reason` text,
  `lnd_present_landlord_name` varchar(30) DEFAULT NULL,
  `lnd_present_landlord_phone` varchar(30) DEFAULT NULL,
  `lnd_present_start_date` datetime DEFAULT NULL,
  `lnd_division` varchar(30) DEFAULT NULL,
  `lnd_police_station` varchar(30) DEFAULT NULL,
  `lnd_flat_floor_no` varchar(30) DEFAULT NULL,
  `lnd_holding_no` varchar(30) DEFAULT NULL,
  `lnd_road_no` varchar(30) DEFAULT NULL,
  `lnd_locality` varchar(30) DEFAULT NULL,
  `lnd_postcode` varchar(30) DEFAULT NULL,
  `lnd_pass` varchar(30) DEFAULT NULL,
  `lnd_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lnd_familymember`
--

CREATE TABLE `lnd_familymember` (
  `family_member_slno` int(2) NOT NULL,
  `family_member_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(30) DEFAULT NULL,
  `family_member_age` varchar(10) DEFAULT NULL,
  `family_member_job` varchar(30) DEFAULT NULL,
  `family_member_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `renter_id` int(11) NOT NULL,
  `renter_name` varchar(30) DEFAULT NULL,
  `renter_father_name` varchar(30) DEFAULT NULL,
  `renter_birth_date` datetime DEFAULT NULL,
  `renter_maritial_status` int(2) DEFAULT NULL,
  `renter_permanent_add` text,
  `renter_profession_institute` varchar(30) DEFAULT NULL,
  `renter_religion` varchar(30) DEFAULT NULL,
  `renter_educational_status` varchar(30) DEFAULT NULL,
  `renter_phone` varchar(30) DEFAULT NULL,
  `renter_email` varchar(30) DEFAULT NULL,
  `renter_nid` varchar(30) DEFAULT NULL,
  `renter_passport` varchar(30) DEFAULT NULL,
  `renter_emergency_name` varchar(30) DEFAULT NULL,
  `renter_emergency_relation` varchar(30) DEFAULT NULL,
  `renter_emergency_address` text,
  `renter_emergency_phone` varchar(30) DEFAULT NULL,
  `renter_homeworker_name` varchar(30) DEFAULT NULL,
  `renter_homeworker_nid` varchar(30) DEFAULT NULL,
  `renter_homeworker_phone` varchar(30) DEFAULT NULL,
  `renter_homeworker_permanent_add` varchar(30) DEFAULT NULL,
  `renter_driver_name` varchar(30) DEFAULT NULL,
  `renter_driver_nid` varchar(30) DEFAULT NULL,
  `renter_driver_phone` varchar(30) DEFAULT NULL,
  `renter_driver_permanent_add` varchar(30) DEFAULT NULL,
  `renter_previous_landlord_name` varchar(30) DEFAULT NULL,
  `renter_previous_landlord_phone` varchar(30) DEFAULT NULL,
  `renter_previous_landlord_permanent_add` varchar(30) DEFAULT NULL,
  `renter_prvious_leave_reason` text,
  `renter_present_landlord_name` varchar(30) DEFAULT NULL,
  `renter_present_landlord_phone` varchar(30) DEFAULT NULL,
  `renter_present_start_date` datetime DEFAULT NULL,
  `renter_division` varchar(30) DEFAULT NULL,
  `renter_police_station` varchar(30) DEFAULT NULL,
  `renter_flat_floor_no` varchar(30) DEFAULT NULL,
  `renter_holding_no` varchar(30) DEFAULT NULL,
  `renter_road_no` varchar(30) DEFAULT NULL,
  `renter_locality` varchar(30) DEFAULT NULL,
  `renter_postcode` varchar(30) DEFAULT NULL,
  `renter_pass` varchar(30) DEFAULT NULL,
  `renter_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `renter_familymember`
--

CREATE TABLE `renter_familymember` (
  `family_member_slno` int(2) NOT NULL,
  `family_member_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(30) DEFAULT NULL,
  `family_member_age` varchar(10) DEFAULT NULL,
  `family_member_job` varchar(30) DEFAULT NULL,
  `family_member_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `adm_username` (`adm_username`);

--
-- Indexes for table `landloard`
--
ALTER TABLE `landloard`
  ADD PRIMARY KEY (`lnd_id`),
  ADD UNIQUE KEY `lnd_nid` (`lnd_nid`);

--
-- Indexes for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  ADD PRIMARY KEY (`family_member_slno`),
  ADD KEY `family_member_id` (`family_member_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`renter_id`),
  ADD UNIQUE KEY `renter_nid` (`renter_nid`);

--
-- Indexes for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  ADD PRIMARY KEY (`family_member_slno`),
  ADD KEY `family_member_id` (`family_member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `landloard`
--
ALTER TABLE `landloard`
  MODIFY `lnd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  MODIFY `family_member_slno` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `renter_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  MODIFY `family_member_slno` int(2) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  ADD CONSTRAINT `lnd_familymember_ibfk_1` FOREIGN KEY (`family_member_id`) REFERENCES `landloard` (`lnd_id`);

--
-- Constraints for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  ADD CONSTRAINT `renter_familymember_ibfk_1` FOREIGN KEY (`family_member_id`) REFERENCES `renter` (`renter_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
