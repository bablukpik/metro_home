-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 11:50 AM
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
  `id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `user_pass` varchar(100) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_fullname` varchar(30) DEFAULT NULL,
  `address` text,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `user_pass`, `user_type`, `user_fullname`, `address`, `phone`, `email`, `photo`) VALUES
(3, 'admin', 'admin', 'admin', 'Md. Bablu Mia', 'Mirpur 10, Dhaka, Bangladesh', '01730910539', 'bablukpik@gmail.com', 'photo'),
(4, 'sagor', 'sagor', 'admin', 'Sagor Sur', 'Savar, Dhaka, Bangladesh.', '01712612589', 'sagorsur@gmail.com', NULL),
(5, 'bishue', 'bishue', 'admin', 'Bishwanath Sarker', 'Mirpur, Dhaka, Bangladesh.', '01745405276', 'bishu.bubt.32@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

CREATE TABLE `landloard` (
  `lnd_id` int(11) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_type` varchar(30) NOT NULL DEFAULT 'landlord',
  `user_fullname` varchar(30) DEFAULT NULL,
  `lnd_father_name` varchar(30) DEFAULT NULL,
  `lnd_birth_date` date DEFAULT NULL,
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
  `lnd_previous_landlord_name` varchar(30) DEFAULT NULL,
  `lnd_previous_landlord_phone` varchar(30) DEFAULT NULL,
  `lnd_previous_landlord_permanent_add` varchar(30) DEFAULT NULL,
  `lnd_prvious_leave_reason` text,
  `lnd_present_landlord_name` varchar(30) DEFAULT NULL,
  `lnd_present_landlord_phone` varchar(30) DEFAULT NULL,
  `lnd_present_start_date` datetime DEFAULT NULL,
  `lnd_division` varchar(30) DEFAULT NULL,
  `lnd_district` varchar(30) DEFAULT NULL,
  `lnd_police_station` varchar(30) DEFAULT NULL,
  `lnd_flat_floor_no` varchar(30) DEFAULT NULL,
  `lnd_holding_no` varchar(30) DEFAULT NULL,
  `lnd_road_no` varchar(30) DEFAULT NULL,
  `lnd_locality` varchar(30) DEFAULT NULL,
  `lnd_postcode` varchar(30) DEFAULT NULL,
  `lnd_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `landloard`
--

INSERT INTO `landloard` (`lnd_id`, `user_pass`, `user_type`, `user_fullname`, `lnd_father_name`, `lnd_birth_date`, `lnd_maritial_status`, `lnd_permanent_add`, `lnd_profession_institute`, `lnd_religion`, `lnd_educational_status`, `lnd_phone`, `lnd_email`, `lnd_nid`, `lnd_passport`, `lnd_emergency_name`, `lnd_emergency_relation`, `lnd_emergency_address`, `lnd_emergency_phone`, `lnd_previous_landlord_name`, `lnd_previous_landlord_phone`, `lnd_previous_landlord_permanent_add`, `lnd_prvious_leave_reason`, `lnd_present_landlord_name`, `lnd_present_landlord_phone`, `lnd_present_start_date`, `lnd_division`, `lnd_district`, `lnd_police_station`, `lnd_flat_floor_no`, `lnd_holding_no`, `lnd_road_no`, `lnd_locality`, `lnd_postcode`, `lnd_photo`) VALUES
(1, 'admin', 'landlord', 'asdf', 'asdf', '0000-00-00', 0, 'asdf', 'asdf', 'Islam', 'asdf', 'asdf', 'bablukpik@gmail.com', '123', 'asdf', 'asdf', 'asdfasdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', 'Dhaka', 'asdf', 'asdf', 'asdfa', 'dfasdfasd', 'asdf', 'asd', 'asdf', NULL),
(2, 'sdf', 'landlord', 'Mr. Kato', 'asdf', '0000-00-00', 0, 'asdf', 'asdf', NULL, 'dsf', 'asdf', 'asdfasdfff@gmail.com', '12345', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asfd', 'asdf', 'asdf', '0000-00-00 00:00:00', 'Dhaka', 'asdf', 'asdf', 'asdf', 'asd', 'asd', 'asdf', 'asdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lnd_driver`
--

CREATE TABLE `lnd_driver` (
  `driver_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `driver_nid` varchar(30) DEFAULT NULL,
  `driver_phone` varchar(15) DEFAULT NULL,
  `driver_permanent_add` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_driver`
--

INSERT INTO `lnd_driver` (`driver_id`, `lnd_id`, `driver_name`, `driver_nid`, `driver_phone`, `driver_permanent_add`) VALUES
(1, 1, 'asdf', 'asdf', 'adsf', 'asdf'),
(2, 2, 'asdf', 'sadf', 'asf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `lnd_familymember`
--

CREATE TABLE `lnd_familymember` (
  `family_member_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(30) DEFAULT NULL,
  `family_member_age` varchar(10) DEFAULT NULL,
  `family_member_job` varchar(30) DEFAULT NULL,
  `family_member_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_familymember`
--

INSERT INTO `lnd_familymember` (`family_member_id`, `lnd_id`, `family_member_name`, `family_member_age`, `family_member_job`, `family_member_phone`) VALUES
(1, 1, 'asdf', 'asdf', 'asdf', 'adsfa'),
(2, 2, 'sad', 'sadf', 'sdfas', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `lnd_homeworker`
--

CREATE TABLE `lnd_homeworker` (
  `homeworker_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `homeworker_name` varchar(30) DEFAULT NULL,
  `homeworker_nid` varchar(30) DEFAULT NULL,
  `homeworker_phone` varchar(15) DEFAULT NULL,
  `homeworker_permanent_add` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_homeworker`
--

INSERT INTO `lnd_homeworker` (`homeworker_id`, `lnd_id`, `homeworker_name`, `homeworker_nid`, `homeworker_phone`, `homeworker_permanent_add`) VALUES
(1, 1, 'asdf', 'asdf', 'asdf', 'dsf'),
(2, 2, 'sdf', 'asdf', 'sadf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `renter_id` int(11) NOT NULL,
  `user_type` varchar(30) NOT NULL DEFAULT 'renter',
  `user_fullname` varchar(30) DEFAULT NULL,
  `renter_father_name` varchar(30) DEFAULT NULL,
  `renter_birth_date` date DEFAULT NULL,
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
  `renter_previous_landlord_name` varchar(30) DEFAULT NULL,
  `renter_previous_landlord_phone` varchar(30) DEFAULT NULL,
  `renter_previous_landlord_permanent_add` varchar(30) DEFAULT NULL,
  `renter_prvious_leave_reason` text,
  `renter_present_landlord_name` varchar(30) DEFAULT NULL,
  `renter_present_landlord_phone` varchar(30) DEFAULT NULL,
  `renter_present_start_date` datetime DEFAULT NULL,
  `renter_division` varchar(30) DEFAULT NULL,
  `renter_district` varchar(30) DEFAULT NULL,
  `renter_police_station` varchar(30) DEFAULT NULL,
  `renter_flat_floor_no` varchar(30) DEFAULT NULL,
  `renter_holding_no` varchar(30) DEFAULT NULL,
  `renter_road_no` varchar(30) DEFAULT NULL,
  `renter_locality` varchar(30) DEFAULT NULL,
  `renter_postcode` varchar(30) DEFAULT NULL,
  `renter_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`renter_id`, `user_type`, `user_fullname`, `renter_father_name`, `renter_birth_date`, `renter_maritial_status`, `renter_permanent_add`, `renter_profession_institute`, `renter_religion`, `renter_educational_status`, `renter_phone`, `renter_email`, `renter_nid`, `renter_passport`, `renter_emergency_name`, `renter_emergency_relation`, `renter_emergency_address`, `renter_emergency_phone`, `renter_previous_landlord_name`, `renter_previous_landlord_phone`, `renter_previous_landlord_permanent_add`, `renter_prvious_leave_reason`, `renter_present_landlord_name`, `renter_present_landlord_phone`, `renter_present_start_date`, `renter_division`, `renter_district`, `renter_police_station`, `renter_flat_floor_no`, `renter_holding_no`, `renter_road_no`, `renter_locality`, `renter_postcode`, `renter_photo`) VALUES
(1, 'renter', 'Mr. Karim', 'asdf', '1987-11-10', 0, 'asdf', 'asdf', 'Islam', 'asdf', 'adsf', 'asdf@gmail.com', '123', 'adf', 'asd', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'sadf', 'sadf', '0000-00-00 00:00:00', 'Dhaka', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', NULL),
(3, 'renter', 'abc', 'asd', '0000-00-00', 0, 'asd', 'ads', 'Islam', '', '', 'asdf@gmail.com', 'ads', 'asdf', 'asd', 'sad', 'asd', 'asd', '', '', '', '', '', '', '0000-00-00 00:00:00', 'Dhaka', 'asdf', 'asdf', 'asd', 'sdf', '', '', '', NULL),
(4, 'renter', 'Md. Masudul Islam', 'Janina', '0000-00-00', 0, 'asdf', 'asdf', 'Islam', 'asdf', 'aasdf', 'bablukpik@gmail.com', 'asdfasdf', 'asdfasd', 'asfasd', 'asdfasd', 'asdfasd', 'sadfsd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', 'Rangpur', 'Kurigram', 'Kurigram', '5', '272', '30', 'Shenpara', '1216', NULL),
(5, 'renter', 'Rhmmmmm', 'adfa', '0000-00-00', 0, 'asdf', 'asdf', 'Islam', 'asdf', '', 'asdfasdfasd@gmail.com', '123456', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'adsf', 'asd', 'sadf', 'sdf', 'sad', 'asd', '0000-00-00 00:00:00', 'Rangpur', 'adsf', 'asdfasdf', 'asdf', 'asdf', 'asd', 'sdf', 'asd', NULL),
(6, 'renter', 'abc', 'asdf', '2017-04-11', 0, 'asdf', 'asdf', 'Islam', 'adsf', 'asdf', 'sadfasdfasdf@gmail.com', '1234567', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'ads', 'asdf', 'sadf', 'asdf', 'asdf', 'sadf', '0000-00-00 00:00:00', NULL, 'asdf', 'adsfasd', 'asdf', 'asdf', 'asdf', 'asdf', 'adfs', NULL),
(7, 'renter', 'asdfasdf', '', '2017-11-04', 0, 'asdf', 'adf', NULL, '', '', 'afasdfasdf', '123123', 'ads', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 'Dhaka', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renter_driver`
--

CREATE TABLE `renter_driver` (
  `driver_id` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `driver_nid` varchar(30) DEFAULT NULL,
  `driver_phone` varchar(15) DEFAULT NULL,
  `driver_permanent_add` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_driver`
--

INSERT INTO `renter_driver` (`driver_id`, `renter_id`, `driver_name`, `driver_nid`, `driver_phone`, `driver_permanent_add`) VALUES
(1, 4, 'sadf', 'asdf', 'asdf', 'asdf'),
(2, 5, 'asfd', 'asd', 'asdf', 'asd'),
(3, 6, 'sadf', 'sadf', 'asdf', 'asdf'),
(4, 7, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `renter_familymember`
--

CREATE TABLE `renter_familymember` (
  `family_member_id` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(30) DEFAULT NULL,
  `family_member_age` varchar(10) DEFAULT NULL,
  `family_member_job` varchar(30) DEFAULT NULL,
  `family_member_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_familymember`
--

INSERT INTO `renter_familymember` (`family_member_id`, `renter_id`, `family_member_name`, `family_member_age`, `family_member_job`, `family_member_phone`) VALUES
(1, 3, 'asd', '', '', ''),
(2, 4, 'asdfasd', 'asdfasd', 'sadfasd', 'asdfas'),
(3, 5, 'asdf', 'asd', 'asdf', 'sadf'),
(4, 6, 'asdf', 'ads', 'asdf', 'asdf'),
(5, 7, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `renter_homeworker`
--

CREATE TABLE `renter_homeworker` (
  `homeworker_id` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `homeworker_name` varchar(30) DEFAULT NULL,
  `homeworker_nid` varchar(30) DEFAULT NULL,
  `homeworker_phone` varchar(15) DEFAULT NULL,
  `homeworker_permanent_add` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_homeworker`
--

INSERT INTO `renter_homeworker` (`homeworker_id`, `renter_id`, `homeworker_name`, `homeworker_nid`, `homeworker_phone`, `homeworker_permanent_add`) VALUES
(1, 4, 'asdfasd', 'asdf', 'asdf', 'asdf'),
(2, 5, 'sasdf', 'asdf', 'adf', 'ads'),
(3, 6, 'asd', 'asdf', 'adsf', 'asdf'),
(4, 7, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adm_username` (`user_name`);

--
-- Indexes for table `landloard`
--
ALTER TABLE `landloard`
  ADD PRIMARY KEY (`lnd_id`),
  ADD UNIQUE KEY `lnd_nid` (`lnd_nid`);

--
-- Indexes for table `lnd_driver`
--
ALTER TABLE `lnd_driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `lnd_id` (`lnd_id`);

--
-- Indexes for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  ADD PRIMARY KEY (`family_member_id`),
  ADD KEY `lnd_id` (`lnd_id`);

--
-- Indexes for table `lnd_homeworker`
--
ALTER TABLE `lnd_homeworker`
  ADD PRIMARY KEY (`homeworker_id`),
  ADD KEY `lnd_id` (`lnd_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`renter_id`),
  ADD UNIQUE KEY `renter_nid` (`renter_nid`);

--
-- Indexes for table `renter_driver`
--
ALTER TABLE `renter_driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `renter_id` (`renter_id`);

--
-- Indexes for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  ADD PRIMARY KEY (`family_member_id`),
  ADD KEY `renter_id` (`renter_id`);

--
-- Indexes for table `renter_homeworker`
--
ALTER TABLE `renter_homeworker`
  ADD PRIMARY KEY (`homeworker_id`),
  ADD KEY `renter_id` (`renter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `landloard`
--
ALTER TABLE `landloard`
  MODIFY `lnd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lnd_driver`
--
ALTER TABLE `lnd_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lnd_homeworker`
--
ALTER TABLE `lnd_homeworker`
  MODIFY `homeworker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `renter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `renter_driver`
--
ALTER TABLE `renter_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `renter_homeworker`
--
ALTER TABLE `renter_homeworker`
  MODIFY `homeworker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lnd_driver`
--
ALTER TABLE `lnd_driver`
  ADD CONSTRAINT `lnd_driver_ibfk_1` FOREIGN KEY (`lnd_id`) REFERENCES `landloard` (`lnd_id`);

--
-- Constraints for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  ADD CONSTRAINT `lnd_familymember_ibfk_1` FOREIGN KEY (`lnd_id`) REFERENCES `landloard` (`lnd_id`);

--
-- Constraints for table `lnd_homeworker`
--
ALTER TABLE `lnd_homeworker`
  ADD CONSTRAINT `lnd_homeworker_ibfk_1` FOREIGN KEY (`lnd_id`) REFERENCES `landloard` (`lnd_id`);

--
-- Constraints for table `renter_driver`
--
ALTER TABLE `renter_driver`
  ADD CONSTRAINT `renter_driver_ibfk_1` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`renter_id`);

--
-- Constraints for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  ADD CONSTRAINT `renter_familymember_ibfk_1` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`renter_id`);

--
-- Constraints for table `renter_homeworker`
--
ALTER TABLE `renter_homeworker`
  ADD CONSTRAINT `renter_homeworker_ibfk_1` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`renter_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
