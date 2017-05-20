-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 07:45 AM
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
  `adm_userpass` varchar(100) DEFAULT NULL,
  `user_type` varchar(40) NOT NULL,
  `adm_fullname` varchar(30) DEFAULT NULL,
  `adm_address` text,
  `adm_phone` varchar(30) DEFAULT NULL,
  `adm_email` varchar(30) DEFAULT NULL,
  `adm_created_date` datetime DEFAULT NULL,
  `adm_modified_date` datetime DEFAULT NULL,
  `adm_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_username`, `adm_userpass`, `user_type`, `adm_fullname`, `adm_address`, `adm_phone`, `adm_email`, `adm_created_date`, `adm_modified_date`, `adm_photo`) VALUES
(1, 'admin', 'admin', 'admin', 'Md. Bablu Mia', 'Mirpur 10, Dhaka', '01730910539', 'bablukpik@gmail.com', '2017-05-02 00:00:00', '2017-05-02 00:00:00', '2017-05-02-13-01-07_BabluBR_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ads_account_general`
--

CREATE TABLE `ads_account_general` (
  `ad_id` int(11) NOT NULL,
  `ad_lnd_first_name` varchar(30) DEFAULT NULL,
  `ad_lnd_last_name` varchar(30) DEFAULT NULL,
  `ad_lnd_username` varchar(30) DEFAULT NULL,
  `ad_lnd_password` varchar(30) DEFAULT NULL,
  `ad_lnd_user_type` varchar(30) DEFAULT 'general',
  `ad_lnd_police_station` varchar(50) DEFAULT NULL,
  `ad_lnd_holding_no` varchar(30) DEFAULT NULL,
  `ad_lnd_road_no` varchar(255) DEFAULT NULL,
  `ad_lnd_locality` varchar(30) DEFAULT NULL,
  `ad_lnd_postcode` varchar(15) DEFAULT NULL,
  `ad_lnd_mobile` varchar(15) DEFAULT NULL,
  `ad_user_photo` varchar(255) DEFAULT NULL,
  `ad_created_date` datetime DEFAULT NULL,
  `ad_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads_account_general`
--

INSERT INTO `ads_account_general` (`ad_id`, `ad_lnd_first_name`, `ad_lnd_last_name`, `ad_lnd_username`, `ad_lnd_password`, `ad_lnd_user_type`, `ad_lnd_police_station`, `ad_lnd_holding_no`, `ad_lnd_road_no`, `ad_lnd_locality`, `ad_lnd_postcode`, `ad_lnd_mobile`, `ad_user_photo`, `ad_created_date`, `ad_modified_date`) VALUES
(1, 'Md. Bablu', 'Mia', 'admin', 'admin', 'general', 'Kafrul', '272', '72', 'Senpara Parbata', '1216', '01730910539', '2017-05-19-22-29-01_BabluBR-copy_thumb.png', '2017-05-20 02:00:39', '2017-05-20 02:00:39'),
(4, 'asd', 'fasdf', 'asd', 'adsf', 'general', 'asdf', 'adf', 'ads', 'ads', 'ads', 'asd', '2017-05-19-22-29-01_BabluBR-copy_thumb.png', '2017-05-20 02:29:01', '2017-05-20 02:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

CREATE TABLE `landloard` (
  `lnd_id` int(11) NOT NULL,
  `lnd_pass` varchar(40) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL,
  `lnd_fullname` varchar(30) DEFAULT NULL,
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
  `lnd_created_date` datetime DEFAULT NULL,
  `lnd_modified_date` datetime DEFAULT NULL,
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

INSERT INTO `landloard` (`lnd_id`, `lnd_pass`, `user_type`, `lnd_fullname`, `lnd_father_name`, `lnd_birth_date`, `lnd_maritial_status`, `lnd_permanent_add`, `lnd_profession_institute`, `lnd_religion`, `lnd_educational_status`, `lnd_phone`, `lnd_email`, `lnd_nid`, `lnd_passport`, `lnd_emergency_name`, `lnd_emergency_relation`, `lnd_emergency_address`, `lnd_emergency_phone`, `lnd_previous_landlord_name`, `lnd_previous_landlord_phone`, `lnd_previous_landlord_permanent_add`, `lnd_prvious_leave_reason`, `lnd_present_landlord_name`, `lnd_present_landlord_phone`, `lnd_present_start_date`, `lnd_created_date`, `lnd_modified_date`, `lnd_division`, `lnd_district`, `lnd_police_station`, `lnd_flat_floor_no`, `lnd_holding_no`, `lnd_road_no`, `lnd_locality`, `lnd_postcode`, `lnd_photo`) VALUES
(1, '123', 'landlord', 'asdf', 'asd', '1970-01-01', 0, 'lkasjdfl', 'asdf', 'Islam', 'asdf', '123', 'bablukpik@gmail.com', '123', '123', 'fa', 'asd', 'asdf', 'asdf', 'sad', 'sad', 'sda', 'asdf', 'asdf', 'sadf', '0000-00-00 00:00:00', NULL, NULL, 'Rangpur', 'asdf', 'asdf', 'asd', 'asd', 'asd', 'asdf', 'asdf', ''),
(2, '123', 'landlord', 'asdf', 'asd', '2017-11-05', 0, 'asdf', 'asd', 'Islam', 'asd', 'asd', 'bablukpik@gmail.com', '1212', '1212', 'asdf', 'adf', 'asdf', 'asdf', 'asd', 'asdf', 'asd', 'asd', 'asd', 'asd', '0000-00-00 00:00:00', NULL, NULL, 'Rangpur', 'asdf', 'asdf', 'asdf', 'asdfasdf', 'asf', 'asdf', 'asd', '2017-05-02-13-01-07_BabluBR_thumb.png'),
(3, 'asd', 'landlord', 'asdf', 'asdf', '1970-01-01', 0, 'asdf', 'asd', 'Islam', 'asdf', 'asdf', 'ffff@gmail.com', 'asdfasd', 'asdfa', 'a', 'as', 'asd', 'asd', 'sad', 'asd', 'asd', 'asd', 'asd', 'asd', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'asdf', 'asdf', 'adsf', 'asd', '', '', '', ''),
(4, 'asdf', 'landlord', 'asdf', 'asd', '1970-01-01', 0, 'asd', 'ad', 'Islam', '', 'ads', 'asdfasd@gmail.com', '1234567', '1234567', 'asdf', 'asdf', 'asdf', 'asd', 'f', 'af', 'asdf', 'asdf', 'asd', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'adf', 'adf', 'asdfa', 'asf', 'asd', 'asd', 'asdf', ''),
(5, 'asdf', 'landlord', 'asdf', 'asdf', '1970-01-01', 0, 'asdf', 'asd', 'Islam', 'asdf', 'aasdf', 'asdfasd@gmail.com', '444', '444', 'asd', 'adsf', 'asd', 'asd', 'sdaf', 'sdf', 'asdf', 'asdf', 'adf', 'ad', '0000-00-00 00:00:00', NULL, NULL, NULL, 'asdfasdf', '', 'asdf', 'f', '', 'aasd', 'asdf', ''),
(6, 'asdfasd', 'landlord', 'asdf', 'asdf', '1970-01-01', 0, 'asdf', 'asd', 'Islam', 'asd', 'asdf', 'asdfasd@gmail.com', 'asdfasdf', 'asdfasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'as', 'asdf', 'asdf', 'asdf', 'sdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'adsf', 'asd', 'asd', 'asd', 'asdf', 'asd', 'asdf', ''),
(7, 'asdf', 'landlord', 'asdf', 'asf', '2017-01-05', 0, 'asd', 'asd', 'Islam', 'asdf', 'asd', 'asdfasd@gmail.com', 'asdfasdfsad', 'asdfasdfasd', 'asd', 'asdf', 'asdf', 'sadf', 'sadf', 'sad', 'asdf', 'asdf', 'saf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'asdf', 'asdf', 'asdfa', 'asdf', 'asdf', 'asdfasdf', '', ''),
(8, 'sadf', 'landlord', 'asdf', 'asdf', '1970-01-01', 0, 'asd', 'asdf', 'Islam', 'asd', 'asd', 'asdfasd@gmail.com', 'asdfasd44', 'asdfasd33', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdf', 'asdf', 'sf', 'sfd', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Rajshahi', 'asdf', 'asdf', 'asdf', 'asdf', 'asdfasdf', 'asdfasdf', '', ''),
(9, 'asdf', 'landlord', 'asdf', 'sadf', '1970-01-01', 0, 'sadf', 'asdf', 'Islam', 'asdf', 'asdf', 'asdfasd@gmail.com', 'asdffff44', 'asdfasdfff33', 'asd', 'asdf', 'asd', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'adsf', 'asdf', 'asdfa', 'asd', 'sad', 'f', 'asdf', ''),
(10, 'asd', 'landlord', 'asd', 'asd', '1970-01-01', 0, 'asd', 'asdf', 'Islam', 'asdf', 'asd', 'bablukpik@gmail.com', 'asdfdfff', 'asdffff', 'asdf', 'sadf', 'as', 'asd', 'asdf', 'asdf', 'sadf', 'sda', 'sd', 'sdf', '0000-00-00 00:00:00', NULL, NULL, 'Rangpur', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', ''),
(11, 'asf', 'landlord', 'asf', 'asf', '1970-01-01', 0, 'adad', 'ad', 'Islam', 'asdf', 'asdf', 'asdfasd@gmail.com', 'fff4455', 'fff4455', 'asdf', 'asdf', 'adsf', 'as', 'adsf', 'as', 'asf', 'aadf', 'adf', 'asf', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'sdf', 'asdfaa', 'asf', 'asdf', 'asf', 'asdf', 'asf', '2017-05-02-16-11-09_BabluBR_thumb.png'),
(12, 'asdf', 'landlord', 'asdf', 'adsf', '1970-01-01', 0, 'asdf', 'adf', 'Islam', 'adf', 'adsfadsf', '', 'asdfasdfasdfasdfas', 'asdfasdfasdfasdf', 'asdf', 'asfd', 'asdf', 'adf', 'asf', 'sdf', 'asdf', 'asf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Rajshahi', 'aadf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', ''),
(13, 'landlord', 'landlord', 'Mr. Rahim', 'adsf', '1991-11-10', 0, 'asdf', 'sdf', 'Islam', 'asdasd', 'asd', 'asdfasd@gmail.com', '13141203051', 'asdfd556', 'asdf', 'adsf', 'adsf', 'adfs', 'asdf', 'adsf', 'asdf', 'adfs', 'asdf', 'adsf', '0000-00-00 00:00:00', NULL, NULL, 'Khulna', 'ad', 'a', 'asdf', 'asd', 'a', 'dsf', 'adsf', '2017-05-02-13-01-07_BabluBR_thumb.png');

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
  `driver_permanent_add` varchar(30) DEFAULT NULL,
  `driver_created_date` datetime DEFAULT NULL,
  `driver_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_driver`
--

INSERT INTO `lnd_driver` (`driver_id`, `lnd_id`, `driver_name`, `driver_nid`, `driver_phone`, `driver_permanent_add`, `driver_created_date`, `driver_modified_date`) VALUES
(1, 1, 'asd', 'asdf', 'asd', 'asd', NULL, NULL),
(2, 2, 'asdfa', 'asd', 'asdf', 'asd', NULL, NULL),
(3, 3, 'asd', 'asd', 'ads', 'sad', NULL, NULL),
(4, 4, 'asdf', 'sad', 'sadf', 'sadf', NULL, NULL),
(5, 5, 'asdf', 'sadf', 'sdf', 'asd', NULL, NULL),
(6, 6, 'asdfasdas', 'sadas', 'dfsda', 'dfasd', NULL, NULL),
(7, 7, 'asdf', 'sadf', 'asd', 'asdf', NULL, NULL),
(8, 8, 'asdf', 'asdf', 'asdf', 'ads', NULL, NULL),
(9, 9, 'asd', 'asd', 'asd', 'asd', NULL, NULL),
(10, 10, 'asdf', 'asdf', 'asdf', 'sadf', NULL, NULL),
(11, 11, 'adf', 'af', 'adf', 'adsf', NULL, NULL),
(12, 12, 'adsf', 'adf', 'asf', 'asd', NULL, NULL),
(13, 13, 'asd', 'adsf', 'asdf', 'adsf', NULL, NULL);

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
  `family_member_phone` varchar(20) DEFAULT NULL,
  `family_created_date` datetime DEFAULT NULL,
  `family_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_familymember`
--

INSERT INTO `lnd_familymember` (`family_member_id`, `lnd_id`, `family_member_name`, `family_member_age`, `family_member_job`, `family_member_phone`, `family_created_date`, `family_modified_date`) VALUES
(1, 1, 'asd', 'asd', 'fasdf', 'asd', NULL, NULL),
(2, 2, 'adsf', 'asd', 'fasd', 'f', NULL, NULL),
(3, 3, 'a', 'asd', 'asdf', 'asdf', NULL, NULL),
(4, 4, 'asdf', 'asdf', 'asd', 'f', NULL, NULL),
(5, 5, 'adsf', 'adsf', 'safd', 'asd', NULL, NULL),
(6, 6, 'asdf', 'sdf', 'asd', 'sad', NULL, NULL),
(7, 7, 'asdf', 'asdf', 'sadf', 'sadf', NULL, NULL),
(8, 8, 'asdf', 'as', 'fasd', 'asd', NULL, NULL),
(9, 9, 'asdf', 'asdf', 'asd', 'asd', NULL, NULL),
(10, 10, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(11, 11, 'asdf', 'a', 'adsf', 'ad', NULL, NULL),
(12, 12, 'asdf', 'ad', 'f', 'asdf', NULL, NULL),
(13, 13, 'asdf', 'adf', 'asdf', 'adsf', NULL, NULL);

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
  `homeworker_permanent_add` varchar(30) DEFAULT NULL,
  `homeworker_created_date` datetime DEFAULT NULL,
  `homeworker_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_homeworker`
--

INSERT INTO `lnd_homeworker` (`homeworker_id`, `lnd_id`, `homeworker_name`, `homeworker_nid`, `homeworker_phone`, `homeworker_permanent_add`, `homeworker_created_date`, `homeworker_modified_date`) VALUES
(1, 1, 'asd', 'asdf', 'asdf', 'asdf', NULL, NULL),
(2, 2, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(3, 3, 'asdfas', 'asdfas', 'asdf', 'asdf', NULL, NULL),
(4, 4, 'asd', 'asd', 'asdf', 'asd', NULL, NULL),
(5, 5, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(6, 6, 'sdasd', 'asdfasasd', 'sad', '', NULL, NULL),
(7, 7, 'sadf', 'sad', 'asdf', 'sadf', NULL, NULL),
(8, 8, 'asd', 'asd', 'asdf', 'safd', NULL, NULL),
(9, 9, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(10, 10, 'asd', 'asdfas', 'asdf', 'asdf', NULL, NULL),
(11, 11, 'asdf', 'adf', 'asdf', 'af', NULL, NULL),
(12, 12, 'adsf', 'asdf', 'adf', 'asdf', NULL, NULL),
(13, 13, 'adsf', 'asdf', 'adf', 'adsf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metro_police`
--

CREATE TABLE `metro_police` (
  `metro_police_id` int(11) NOT NULL,
  `metro_police_username` varchar(30) DEFAULT NULL,
  `metro_police_userpass` varchar(100) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT 'metro_police',
  `metro_police_fullname` varchar(30) DEFAULT NULL,
  `metro_police_address` text,
  `metro_police_phone` varchar(30) DEFAULT NULL,
  `metro_police_email` varchar(30) DEFAULT NULL,
  `metro_police_created_date` datetime DEFAULT NULL,
  `metro_police_modified_date` datetime DEFAULT NULL,
  `metro_police_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metro_police`
--

INSERT INTO `metro_police` (`metro_police_id`, `metro_police_username`, `metro_police_userpass`, `user_type`, `metro_police_fullname`, `metro_police_address`, `metro_police_phone`, `metro_police_email`, `metro_police_created_date`, `metro_police_modified_date`, `metro_police_photo`) VALUES
(1, 'police', 'police', 'metro_police', 'Shumon', 'Kafrul Thana, Mirpur, Dhaka', '01730910530', 'metropolice@gmail.com', '2017-05-08 00:00:00', '2017-05-08 00:00:00', 'bdpolice.png');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `renter_id` int(11) NOT NULL,
  `renter_fullname` varchar(30) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL,
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
  `renter_created_date` datetime DEFAULT NULL,
  `renter_modified_date` datetime DEFAULT NULL,
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

INSERT INTO `renter` (`renter_id`, `renter_fullname`, `user_type`, `renter_father_name`, `renter_birth_date`, `renter_maritial_status`, `renter_permanent_add`, `renter_profession_institute`, `renter_religion`, `renter_educational_status`, `renter_phone`, `renter_email`, `renter_nid`, `renter_passport`, `renter_emergency_name`, `renter_emergency_relation`, `renter_emergency_address`, `renter_emergency_phone`, `renter_previous_landlord_name`, `renter_previous_landlord_phone`, `renter_previous_landlord_permanent_add`, `renter_prvious_leave_reason`, `renter_present_landlord_name`, `renter_present_landlord_phone`, `renter_present_start_date`, `renter_created_date`, `renter_modified_date`, `renter_division`, `renter_district`, `renter_police_station`, `renter_flat_floor_no`, `renter_holding_no`, `renter_road_no`, `renter_locality`, `renter_postcode`, `renter_photo`) VALUES
(1, 'aasd', NULL, 'asdf', '1970-01-01', 0, 'asd', 'ads', 'Islam', 'asd', 'aasd', 'asdf@gmail.com', '123', '123', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'sad', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asd', NULL),
(2, 'asdf', 'renter', 'adsf', '1970-01-01', 0, 'ads', 'asd', 'Islam', 'adf', 'asdf', 'ada@gmail.com', '1234', '1234', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', NULL, NULL, NULL, 'adf', 'asdf', '', 'asdf', '', '', '', NULL),
(5, 'asdf', 'renter', 'asdf', '1970-01-01', 0, 'asdf', 'adf', 'Islam', 'asfd', 'adsf', 'asdfasd@gmail.com', '123456', '123456', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'adsf', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'adf', 'asdf', 'asdf', 'adsf', 'aasdf', 'adsf', 'asdf', '2017-05-01-22-57-39_11748607_thumb.jpg'),
(6, 'asd', 'renter', 'asdf', '1970-01-01', 0, 'sdf', 'asdf', 'Islam', 'adsf', 'asdf', 'asdfasdfasdf', '123457', '123457', 'asd', 'asdf', 'asdf', 'asdfasd', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'adsf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'aasdf', 'asdf', 'asd', 'asd', 'asdf', 'asdf', 'asdf', '2017-05-01-23-05-26_11748607_thumb.jpg'),
(7, 'asdf', 'renter', 'asdf', '1970-01-01', 0, 'asd', 'asd', 'Buddhism', 'asdf', 'asdfasdf', 'asdfasdfasdfaf@gmail.com', '131', '131', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2017-05-01-23-12-46_11748607-asd_thumb.jpg'),
(8, 'asdf', 'renter', 'asdf', '1970-01-01', 0, 'ads', 'asdf', 'Islam', 'asdf', 'asdfasdf', 'asdf@gmail.com', 'adffff44', 'dsafdsdf444', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Rajshahi', 'assf', 'adsf', 'adsf', 'asdf', 'asdf', 'asdf', 'asdf', ''),
(10, 'asdf', 'renter', 'asdf', '1970-01-01', 0, 'ads', 'fad', 'Islam', 'asdf', 'asdfasdf', 'asdf@gmail.com', '4453245asd', 'dsafdsdf444', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Rajshahi', 'assf', 'adsf', 'adsf', 'asdf', 'asdf', 'asdf', 'asdf', ''),
(11, 'asdf', 'renter', 'asdf', '2017-10-05', 0, 'asdf', 'asdf', 'Islam', 'asdf', 'asdf', 'asdf@gmail.comfff', 'aasdfff', 'asdfff', 'asd', 'adf', 'ad', 'asd', 'asdf', 'asdf', 'adsf', 'adf', 'adsf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'aasdfdf', 'adf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', ''),
(12, 'asfd', 'renter', 'asdf', '1970-01-01', 0, 'asdf', 'asdf', 'Islam', 'asdf', 'aadf', 'asdf@gmail.comffff', '123asfd', '123afd', 'asdf', 'sadf', 'asd', 'asdf', 'asdf', 'asdf', '', 'sadf', 'asf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Khulna', 'asdf', 'asdf', 'asdf', 'asdf', 'asf', 'asdf', 'asdf', ''),
(13, 'asdf', 'renter', 'asdf', '1970-01-01', 0, '', 'asf', 'Islam', 'asdf', 'asdf', 'asdf@gmail.comasfd', 'asdfasdfas', 'asdfasdfasd', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'sdaf', 'asdf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'aadfadsf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', ''),
(14, 'asdf', 'renter', 'asdf', '1970-01-01', 0, 'fasdf', 'asd', 'Islam', 'asdf', '', 'asdf@gmail.comfffasdf', 'asdfasd', 'asdf', 'asdf', 'asdf', 'asdfasdf', 'asdf', 'adf', 'afs', 'adsf', 'asdf', 'asdf', 'adsf', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', '2017-05-02-18-00-19_BabluBR_thumb.png'),
(15, 'asdf', 'renter', 'adsf', '1970-01-01', 0, 'asdf', 'asdf', 'Islam', 'asdf', 'asdfasdf', 'asdfasdfasdfasdf', 'asdffff', 'fasdfasdff', 'asdf', 'adsf', 'as', 'adsf', 'asdf', 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png'),
(16, 'Mr. Karim', 'renter', 'asdf', '1991-11-10', 0, 'asdf', 'adf', 'Islam', 'asdf', 'asdf', 'asdf@gmail.comasfd', '13141203051', '123asdfasdfasdfadsfff', 'asdf', 'asdf', 'asdf', 'adsf', '', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '0000-00-00 00:00:00', NULL, NULL, NULL, 'asdf', 'asdf', 'asdf', 'asdf', 'asdfa', 'asdf', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png');

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
  `driver_permanent_add` varchar(30) DEFAULT NULL,
  `driver_created_date` datetime DEFAULT NULL,
  `driver_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_driver`
--

INSERT INTO `renter_driver` (`driver_id`, `renter_id`, `driver_name`, `driver_nid`, `driver_phone`, `driver_permanent_add`, `driver_created_date`, `driver_modified_date`) VALUES
(1, 1, 'asdf', 'asdf', 'asdf', 'asfd', NULL, NULL),
(2, 2, '', '', '', '', NULL, NULL),
(3, 5, 'asdf', 'asdf', 'adsf', 'asasdf', NULL, NULL),
(4, 6, 'asdf', 'asdf', 'adsf', 'aasdf', NULL, NULL),
(5, 7, 'asdf', 'sdf', 'asdf', 'sadf', NULL, NULL),
(6, 8, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(7, 10, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(8, 11, 'sdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(9, 12, 'asd', 'asf', 'asdf', 'asdf', NULL, NULL),
(10, 13, 'asdf', 'asfd', 'asfd', 'asdf', NULL, NULL),
(11, 14, 'asdf', 'sdf', 'adsf', 'asdf', NULL, NULL),
(12, 15, 'fasdf', 'asdf', 'asdf', 'saf', NULL, NULL),
(13, 16, 'asdf', 'asfd', 'asd', 'asdf', NULL, NULL);

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
  `family_member_phone` varchar(20) DEFAULT NULL,
  `family_member_created_date` datetime DEFAULT NULL,
  `family_member_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_familymember`
--

INSERT INTO `renter_familymember` (`family_member_id`, `renter_id`, `family_member_name`, `family_member_age`, `family_member_job`, `family_member_phone`, `family_member_created_date`, `family_member_modified_date`) VALUES
(1, 1, 'asdf', 'asdf', 'ads', 'fasd', NULL, NULL),
(2, 2, '', '', '', '', NULL, NULL),
(3, 5, 'asdf', 'asdf', 'asdf', 'adsf', NULL, NULL),
(4, 6, 'asdf', 'asdf', 'asdf', 'sad', NULL, NULL),
(5, 7, 'asdf', 'asdf', 'asdf', 'sad', NULL, NULL),
(6, 8, 'asasdf', 'asdf', 'asdf', 'asd', NULL, NULL),
(7, 10, 'asasdf', 'asdf', 'asdf', 'asd', NULL, NULL),
(8, 11, 'asd', 'asd', 'asd', 'asd', NULL, NULL),
(9, 12, 'asd', 'sadf', 'asdf', 'sad', NULL, NULL),
(10, 13, 'asdf', 'sf', 'asd', 'sadf', NULL, NULL),
(11, 14, 'afd', 'asdf', 'asdf', 'asdf', NULL, NULL),
(12, 15, 'asdf', 'asdf', 'asdf', 'asd', NULL, NULL),
(13, 16, 'asdf', 'adsf', 'adsf', 'sad', NULL, NULL);

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
  `homeworker_permanent_add` varchar(30) DEFAULT NULL,
  `homeworker_created_date` datetime DEFAULT NULL,
  `homeworker_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_homeworker`
--

INSERT INTO `renter_homeworker` (`homeworker_id`, `renter_id`, `homeworker_name`, `homeworker_nid`, `homeworker_phone`, `homeworker_permanent_add`, `homeworker_created_date`, `homeworker_modified_date`) VALUES
(1, 1, 'asdfas', 'asd', 'adsf', 'asdf', NULL, NULL),
(2, 2, '', '', '', '', NULL, NULL),
(3, 5, 'asdf', '123456', 'adsf', 'asdf', NULL, NULL),
(4, 6, 'asd', 'adsf', 'asdf', 'asdf', NULL, NULL),
(5, 7, 'asdf', 'asdfas', 'sadf', 'asdf', NULL, NULL),
(6, 8, 'asdf', 'asdf', 'asd', 'fasdf', NULL, NULL),
(7, 10, 'asdf', 'asdf', 'asd', 'fasdf', NULL, NULL),
(8, 11, 'asdf', 'ads', 'ad', 'asdf', NULL, NULL),
(9, 12, 'asdf', 'asdf', 'asdf', 'sdf', NULL, NULL),
(10, 13, 'asdf', 'asfd', 'asdf', 'sadf', NULL, NULL),
(11, 14, 'asdf', 'asdf', 'adsf', 'adf', NULL, NULL),
(12, 15, 'asdf', 'asdf', 'asdfa', 'sdfasd', NULL, NULL),
(13, 16, 'asf', 'asdf', 'asdf', 'asdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renter_tracking_tbl`
--

CREATE TABLE `renter_tracking_tbl` (
  `tracking_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `lnd_fullname` varchar(30) DEFAULT NULL,
  `lnd_phone` varchar(15) DEFAULT NULL,
  `lnd_nid` varchar(30) DEFAULT NULL,
  `lnd_police_station` varchar(50) DEFAULT NULL,
  `lnd_holding_no` varchar(30) DEFAULT NULL,
  `lnd_road_no` varchar(255) DEFAULT NULL,
  `lnd_locality` varchar(30) DEFAULT NULL,
  `lnd_postcode` varchar(15) DEFAULT NULL,
  `lnd_photo` varchar(255) DEFAULT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `renter_fullname` varchar(30) DEFAULT NULL,
  `renter_phone` varchar(30) DEFAULT NULL,
  `renter_nid` varchar(30) DEFAULT NULL,
  `renter_permanent_add` text,
  `renter_photo` varchar(255) DEFAULT NULL,
  `renter_started_date` datetime DEFAULT NULL,
  `renter_ending_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_tracking_tbl`
--

INSERT INTO `renter_tracking_tbl` (`tracking_id`, `lnd_id`, `lnd_fullname`, `lnd_phone`, `lnd_nid`, `lnd_police_station`, `lnd_holding_no`, `lnd_road_no`, `lnd_locality`, `lnd_postcode`, `lnd_photo`, `renter_id`, `renter_fullname`, `renter_phone`, `renter_nid`, `renter_permanent_add`, `renter_photo`, `renter_started_date`, `renter_ending_date`) VALUES
(9, 13, 'Mr. Rahim', 'asd', '13141203051', 'a', 'asd', 'a', 'dsf', 'adsf', '2017-05-02-13-01-07_BabluBR_thumb.png', 16, 'Mr. Karim', 'asdf', '13141203052', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png', '2017-05-08 03:49:27', '2017-05-16 01:31:28'),
(13, 13, 'Mr. Rahim', 'asd', '13141203051', 'a', 'asd', 'a', 'dsf', 'adsf', '2017-05-02-13-01-07_BabluBR_thumb.png', 16, 'Mr. Karim', 'asdf', '13141203051', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png', '2017-05-15 12:39:54', '2017-05-16 01:31:28'),
(14, 13, 'Mr. Rahim', 'asd', '13141203051', 'a', 'asd', 'a', 'dsf', 'adsf', '2017-05-02-13-01-07_BabluBR_thumb.png', 16, 'Mr. Karim', 'asdf', '13141203051', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png', '2017-05-16 12:40:37', '2017-05-16 01:31:28'),
(15, 13, 'Mr. Rahim', 'asd', '13141203051', 'a', 'asd', 'a', 'dsf', 'adsf', '2017-05-02-13-01-07_BabluBR_thumb.png', 16, 'Mr. Karim', 'asdf', '13141203051', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png', '2017-05-16 01:31:28', '2017-05-16 01:32:16'),
(16, 13, 'Mr. Rahim', 'asd', '13141203051', 'a', 'asd', 'a', 'dsf', 'adsf', '2017-05-02-13-01-07_BabluBR_thumb.png', 16, 'Mr. Karim', 'asdf', '13141203051', 'asdf', '2017-05-02-13-01-07_BabluBR_thumb.png', '2017-05-16 01:32:16', '2017-05-16 01:32:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `user_username` (`adm_username`);

--
-- Indexes for table `ads_account_general`
--
ALTER TABLE `ads_account_general`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `ad_lnd_username` (`ad_lnd_username`);

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
-- Indexes for table `metro_police`
--
ALTER TABLE `metro_police`
  ADD PRIMARY KEY (`metro_police_id`),
  ADD UNIQUE KEY `metro_police_username` (`metro_police_username`);

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
-- Indexes for table `renter_tracking_tbl`
--
ALTER TABLE `renter_tracking_tbl`
  ADD PRIMARY KEY (`tracking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ads_account_general`
--
ALTER TABLE `ads_account_general`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `landloard`
--
ALTER TABLE `landloard`
  MODIFY `lnd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lnd_driver`
--
ALTER TABLE `lnd_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lnd_homeworker`
--
ALTER TABLE `lnd_homeworker`
  MODIFY `homeworker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `metro_police`
--
ALTER TABLE `metro_police`
  MODIFY `metro_police_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `renter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `renter_driver`
--
ALTER TABLE `renter_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `renter_homeworker`
--
ALTER TABLE `renter_homeworker`
  MODIFY `homeworker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `renter_tracking_tbl`
--
ALTER TABLE `renter_tracking_tbl`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
