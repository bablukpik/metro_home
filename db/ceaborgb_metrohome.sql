-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2017 at 03:37 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ceaborgb_metrohome`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` int(11) NOT NULL,
  `adm_username` varchar(30) DEFAULT NULL,
  `adm_userpass` varchar(100) DEFAULT NULL,
  `user_type` varchar(40) NOT NULL DEFAULT 'admin',
  `adm_fullname` varchar(30) DEFAULT NULL,
  `adm_address` text,
  `adm_phone` varchar(30) DEFAULT NULL,
  `adm_email` varchar(30) DEFAULT NULL,
  `adm_created_date` datetime DEFAULT NULL,
  `adm_modified_date` datetime DEFAULT NULL,
  `adm_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_username`, `adm_userpass`, `user_type`, `adm_fullname`, `adm_address`, `adm_phone`, `adm_email`, `adm_created_date`, `adm_modified_date`, `adm_photo`) VALUES
(1, 'admin', 'admin', 'admin', 'Admin', 'Mirpur 10, Dhaka', '01730910539', 'bablukpik@gmail.com', '2017-05-02 00:00:00', '2017-05-02 00:00:00', '2017-05-02-13-01-07_BabluBR_thumb.jpg'),
(2, 'admin3', 'admin', 'admin', 'Sagor Sur', 'Savar, Dhaka', '+8801712612589', 'sagorsur@gmail.com', NULL, NULL, NULL),
(4, 'admin2', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ads_account_general`
--

CREATE TABLE IF NOT EXISTS `ads_account_general` (
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads_account_general`
--

INSERT INTO `ads_account_general` (`ad_id`, `ad_lnd_first_name`, `ad_lnd_last_name`, `ad_lnd_username`, `ad_lnd_password`, `ad_lnd_user_type`, `ad_lnd_police_station`, `ad_lnd_holding_no`, `ad_lnd_road_no`, `ad_lnd_locality`, `ad_lnd_postcode`, `ad_lnd_mobile`, `ad_user_photo`, `ad_created_date`, `ad_modified_date`) VALUES
(1, 'Md. Bablu', 'Mia', 'admin', 'admin', 'general', 'Kafrul', '272', '72', 'Senpara Parbata', '1216', '01730910539', '2017-05-19-22-29-01_BabluBR-copy_thumb.png', '2017-05-20 02:00:39', '2017-05-20 02:00:39'),
(5, 'Masudul', 'Islam', 'masudul', 'admin', 'general', 'Kafrul', '272', '72', 'Senpara', '1216', '66666666666', '2017-05-20-14-27-22_20170314_192547_thumb.jpg', '2017-05-20 06:27:22', '2017-05-20 06:27:22'),
(8, 'Kibria', 'Ahmed', 'kibria', 'kibria', 'general', 'Kurigram', '21', '20', 'Jumma Para', '1216', '01730910539', '2017-07-14-08-58-13_Bangladesh_thumb.jpg', '2017-07-14 07:58:14', '2017-07-14 07:58:14'),
(9, 'Bishwanath', 'Sarker', '19911913625000100000', 'general', 'general', 'kafrul', '7B', '234', 'senpara', '1216', '01745405276', '', '2017-08-10 05:27:25', '2017-08-10 05:27:25'),
(10, 'Bishwanath', 'Sarker', '19911913625000100001', 'general', 'general', 'Kafrul', '272', '7B', 'Senpara', '1216', '01745405276', '2017-08-12-03-05-24_IMG_0031_thumb.JPG', '2017-08-12 02:05:25', '2017-08-12 02:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

CREATE TABLE IF NOT EXISTS `landloard` (
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `landloard`
--

INSERT INTO `landloard` (`lnd_id`, `lnd_pass`, `user_type`, `lnd_fullname`, `lnd_father_name`, `lnd_birth_date`, `lnd_maritial_status`, `lnd_permanent_add`, `lnd_profession_institute`, `lnd_religion`, `lnd_educational_status`, `lnd_phone`, `lnd_email`, `lnd_nid`, `lnd_passport`, `lnd_emergency_name`, `lnd_emergency_relation`, `lnd_emergency_address`, `lnd_emergency_phone`, `lnd_previous_landlord_name`, `lnd_previous_landlord_phone`, `lnd_previous_landlord_permanent_add`, `lnd_prvious_leave_reason`, `lnd_present_landlord_name`, `lnd_present_landlord_phone`, `lnd_present_start_date`, `lnd_created_date`, `lnd_modified_date`, `lnd_division`, `lnd_district`, `lnd_police_station`, `lnd_flat_floor_no`, `lnd_holding_no`, `lnd_road_no`, `lnd_locality`, `lnd_postcode`, `lnd_photo`) VALUES
(14, 'landlord', 'landlord', 'Bishwanath Sarker', 'Shanti Sarker', '1969-12-31', 0, 'Vill:Barkota,Post.:Barkota, P.S:Daudkandi,Dist:Comilla.', 'Business', 'Hinduism', 'B.Sc Engineer', '+8801745405276', 'bishu.bubt.32@gmail.com', '19911913625000182', 'BB0264405', 'Shanti Sarker', 'Father', 'Vill:Barkota,Post.:Barkota, P.S:Daudkandi,Dist:Comilla.', '+8801746276746', '', '', '', '', '', '', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '5th', '272', '7A', 'Senpara', '1216', ''),
(15, 'landlord', 'landlord', 'asdf', 'asdf', '2017-10-07', 0, 'adsf', 'asdf', 'Islam', 'ffasdf', '01730910539', 'asdfff@gmail.com', '13141203051', '12345', 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'fasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', ''),
(16, 'landlord', 'landlord', 'Md. Bablu Ahmed', 'Md. Sulaiman mia', '1969-12-31', 0, 'Soptak Bhaban,130,Senpara, Parbata ,Mirpur-10. ', 'Own Business', 'Islam', 'B.Sc Engineer', '+8801730910539', 'bablukpik@gmail.com', '19911913625000100172', '', 'Lavlu Ahmed', 'Brother', 'Soptak Bhaban,130,Senpara, Parbata ,Mirpur-10. ', '+8801915446388', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'kafrul', '2nd', '130', '2/A', 'Senpara', '1216', ''),
(17, 'landlord', 'landlord', 'Sagor sur', 'Ashok Sur', '1969-12-31', 0, '211,Savar, Dhaka.', 'Computer Business', 'Hinduism', 'Engineer', '+8801612612589', 'surbook12@gmail.com', '19911913625000100162', '', 'Avik sur', 'Uncle', '211,Savar, Dhaka.', '+8801813223212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '3nd', '175', '5A', 'Senpara', '1216', ''),
(18, 'landlord', 'landlord', 'Tanveer Ahmed', 'Md. Azghor Ali ', '1986-10-02', 0, 'Shoptak Bhaban,75, kafrul, senpara parbota, mirpur-10.', 'Business', 'Islam', 'B.com', '+8801545405270', 'tanveer212.stu@gmail.com', '19911913625000100152', 'BB0566600', 'Md. Azghor Ali ', 'Father', 'Shoptak Bhaban,75, kafrul, senpara parbota, mirpur-10.', '+8801946276760', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '3rd ', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG'),
(19, 'landlord', 'landlord', 'Faysal Ahmed', 'Md.Amir Hossain Gulgar', '1987-12-07', 0, 'Vill:Barkota,Post:Barkota,P.S: Daudkandi,Dist:Comilla', 'Doctor', 'Islam', 'MBBS,BCS,FCPS.', '+8801945405287', 'faysalgulgar35@gmail.com', '19871913625000162', 'BF0246401', 'Md.Amir Hossain Gulgar', 'Father', 'Vill:Barkota,Post:Barkota,P.S: Daudkandi,Dist:Comilla', '+8801646276846', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'kafrul', '5th', '25', 'Adarsho Road', 'Senpara', '1216', '2017-07-10-00-55-50_19553919_1054992907964459_5973402843328405225_n_thumb.jpg'),
(20, 'landlord', 'landlord', 'Uzzal Mia', 'Fazlul ahmed sarker', '1982-10-01', 0, 'Vill:Behanhata,Post:Mohammadpur,P.S:Daudkandi,Dist:Comilla.', 'Own Business', 'Islam', 'LLB', '+8801845405270', 'isbut21.uzzal@gmail.com', '19911913625000100132', 'BG0264403', 'Mrs.Afsara Haque', 'Wife', 'Nirob Bahban,75,senpara,kafrul,Mirpur-10.', '+8801946276786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '4th', '75', 'Adarsho Road', 'senpara', '1216', '2017-07-10-01-04-52_13932873_292684897761871_5675923203249950282_n_thumb.jpg'),
(21, 'landlord', 'landlord', 'Atik ashraf', 'Enamul Haque', '1988-09-04', 0, '48,senpar parbata,mirpur-10.', 'Business', 'Islam', 'HSC', '+8801795405298', 'atik.32.msn@gmail.com', '19911913625000100122', '', 'Enamul Haque', 'Father', '48,senpar parbata,mirpur-10.', '+8801746276789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '7th', '48', '7/B', 'Senpara', '1216', '2017-07-10-01-17-11_19732204_811368092346271_1974903378734486844_n_thumb.jpg'),
(22, 'landlord', 'landlord', 'Ramesh Patwary', 'Fazlul Patwary', '1982-11-09', 0, 'Alapon Villa,8A,senpara,mirpur-10.', 'Teaching', 'Islam', 'M.com', '+8801795405299', 'ramesh1212.mcom@yahoo.com', '19911913625000100112', 'BH0264408', 'Fazlul Patwary', 'Father', 'Alapon Villa,8A,senpara,mirpur-10.', '+8801846276740', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'kafrul', '5A', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg'),
(23, 'landlord', 'landlord', 'Souvendhu Bhowmik', 'Santu Bhowmik', '1988-03-04', 0, 'Vill:Barkota,Post: Gauri[ur,P.S:Daudkandi,Dist:Comilla', 'Business man ', 'Hinduism', 'M.com', '+8801745405271', 'idu21.bhowmik@yahoo.com', '19911913625000100102', 'BF0274401', 'Santu Bhowmik', 'Father', 'Vill:Barkota,Post: Gauri[ur,P.S:Daudkandi,Dist:Comilla', '+8801746276780', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '3C', '321', '5A', 'Senpara', '1216', '2017-07-10-08-05-45_76386_164119606958451_4800567_n_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lnd_driver`
--

CREATE TABLE IF NOT EXISTS `lnd_driver` (
  `driver_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `driver_nid` varchar(30) DEFAULT NULL,
  `driver_phone` varchar(15) DEFAULT NULL,
  `driver_permanent_add` varchar(30) DEFAULT NULL,
  `driver_created_date` datetime DEFAULT NULL,
  `driver_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_driver`
--

INSERT INTO `lnd_driver` (`driver_id`, `lnd_id`, `driver_name`, `driver_nid`, `driver_phone`, `driver_permanent_add`, `driver_created_date`, `driver_modified_date`) VALUES
(1, 14, '', '', '', '', NULL, NULL),
(2, 15, 'asdf', 'adsf', 'adsf', 'adsf', NULL, NULL),
(3, 16, 'Azgar ali', '19871913625000231', '+8801871552371', 'Bakergong, Barisal', NULL, NULL),
(4, 17, 'Md.Aslam Mia', '19871913625000231', '+8801761552391', 'veramara,Nilfamari', NULL, NULL),
(5, 18, 'Md. Alamin Mia', '19891913625000323', '+8801671558821', 'Vill:Malay,Post: Mohammadpur,P', NULL, NULL),
(6, 19, 'Firuz ahmed', '19871913625000280', '+88016715522332', 'Barkota.Daudknadi, Comilla', NULL, NULL),
(7, 20, 'Md.faqrul Mia', '19871913625000222', '+8801971552554', 'Vill:Behanhata,Post:Mohammadpu', NULL, NULL),
(8, 21, 'Alamin Mia', '117855880002701', '+8801671558820', 'chorpoyali,Farirpur.', NULL, NULL),
(9, 22, 'Azgar ali', '19871913625000281', '+8801871552374', 'Bhairab,Kishorgong.', NULL, NULL),
(10, 23, 'Madhav sarker', '19871913625000229', '+88016715522390', 'Gauripur,Daudkandi,Comilla.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lnd_familymember`
--

CREATE TABLE IF NOT EXISTS `lnd_familymember` (
  `family_member_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(30) DEFAULT NULL,
  `family_member_age` varchar(10) DEFAULT NULL,
  `family_member_job` varchar(30) DEFAULT NULL,
  `family_member_phone` varchar(20) DEFAULT NULL,
  `family_created_date` datetime DEFAULT NULL,
  `family_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_familymember`
--

INSERT INTO `lnd_familymember` (`family_member_id`, `lnd_id`, `family_member_name`, `family_member_age`, `family_member_job`, `family_member_phone`, `family_created_date`, `family_modified_date`) VALUES
(1, 14, 'Mrs. Prantika Sarker', '21yrs', 'Housewife', '+8801821839294', NULL, NULL),
(2, 15, 'Md. Bablu Mia', '29', 'asdf', '000131313', NULL, NULL),
(3, 15, 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL),
(4, 16, 'Md fazul mia', '37yrs', 'Job', '+8801916554456', NULL, NULL),
(5, 16, 'Md.faqural Islam', '27yrs', 'Student', '+8801916532123', NULL, NULL),
(6, 17, 'Anjali roy', '38yrs', 'Housewife', '+8801816554421', NULL, NULL),
(7, 17, 'avik sur', '35yrs', 'Teacher', '+8801516554439', NULL, NULL),
(8, 18, 'Md. Azghor Ali ', '66yrs', 'Business', '+8801716554489', NULL, NULL),
(9, 18, 'Mrs.Afrija Alam', '32yrs', 'Hosewife', '+8801816554480', NULL, NULL),
(10, 19, 'Mrs.Brinti Islam', '32yrs', 'Doctor', '+8801716554490', NULL, NULL),
(11, 19, 'Md.Amir Hossain Gulgar', '65yrs', 'None', '+8801816554480', NULL, NULL),
(12, 19, 'Mrs.Arifa khanom', '57yrs', 'Hosewife', '+8801516554436', NULL, NULL),
(13, 20, 'Mrs.Afsara Haque', '35yrs', 'Teacher', '+8801916554437', NULL, NULL),
(14, 21, 'Alam asharaf', '20yrs', 'Student', '+8801916554439', NULL, NULL),
(15, 22, 'Bithe khatun', '30yrs', 'Teaching', '+8801816554488', NULL, NULL),
(16, 22, 'Fazlul Patwary', '67yrs', 'Business', '+8801716554430', NULL, NULL),
(17, 22, 'Fatema begum', '60yrs', 'Hosewife', '+8801716554430', NULL, NULL),
(18, 23, 'Santu Bhowmik', '68yrs', 'Business', '+8801916532120', NULL, NULL),
(19, 23, 'Akhi Bhowmik', '61yrs', 'Hosewife', '+8801716554438', NULL, NULL),
(20, 23, 'Alok Bhowmik', '30yrs', 'Job', '+8801616532127', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lnd_homeworker`
--

CREATE TABLE IF NOT EXISTS `lnd_homeworker` (
  `homeworker_id` int(11) NOT NULL,
  `lnd_id` int(11) DEFAULT NULL,
  `homeworker_name` varchar(30) DEFAULT NULL,
  `homeworker_nid` varchar(30) DEFAULT NULL,
  `homeworker_phone` varchar(15) DEFAULT NULL,
  `homeworker_permanent_add` varchar(30) DEFAULT NULL,
  `homeworker_created_date` datetime DEFAULT NULL,
  `homeworker_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lnd_homeworker`
--

INSERT INTO `lnd_homeworker` (`homeworker_id`, `lnd_id`, `homeworker_name`, `homeworker_nid`, `homeworker_phone`, `homeworker_permanent_add`, `homeworker_created_date`, `homeworker_modified_date`) VALUES
(1, 14, '', '', '', '', NULL, NULL),
(2, 15, 'asdf', 'asdf', 'adsf', 'asdf', NULL, NULL),
(3, 16, 'Morzila Begum', '19811913625000163', '+8801671552133', 'Bhubon nagor,Rangpur.', NULL, NULL),
(4, 17, 'piyali ', '19811913625000123', '+8801771552132', 'Bakergong, Barisal.', NULL, NULL),
(5, 18, 'Fatema akhter', '198119136250001421', '+8801871552153', 'Vill:Malay,Post: Mohammadpur,P', NULL, NULL),
(6, 19, 'Morzila akhtar', '19901913625000191', '+8801871552148', 'Mehendigong,Barisal.', NULL, NULL),
(7, 20, 'Fatema akhter', '19871913625000153', '+8801971552142', 'Bhoirab,kishorgong.', NULL, NULL),
(8, 21, 'piyali ', '19811913625000157', '+8801971552146', 'Moladi,Barisal.', NULL, NULL),
(9, 22, 'Sokhina akhter', '19811913625000159', '+8801971552138', 'Bhairab,Kishorgong.', NULL, NULL),
(10, 23, 'Parul akhter', '19861913625000150', '+8801671552140', 'Gauripur,Daudkandi,Comilla.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metro_police`
--

CREATE TABLE IF NOT EXISTS `metro_police` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metro_police`
--

INSERT INTO `metro_police` (`metro_police_id`, `metro_police_username`, `metro_police_userpass`, `user_type`, `metro_police_fullname`, `metro_police_address`, `metro_police_phone`, `metro_police_email`, `metro_police_created_date`, `metro_police_modified_date`, `metro_police_photo`) VALUES
(1, 'police', 'police', 'metro_police', 'Shumon', 'Kafrul Thana, Mirpur, Dhaka', '01730910530', 'metropolice@gmail.com', '2017-05-08 00:00:00', '2017-05-08 00:00:00', 'bdpolice.png');

-- --------------------------------------------------------

--
-- Table structure for table `publicity`
--

CREATE TABLE IF NOT EXISTS `publicity` (
  `publicity_id` int(11) NOT NULL,
  `publicity_userid` varchar(50) NOT NULL,
  `publicity_usertype` varchar(20) NOT NULL,
  `publicity_title` varchar(100) DEFAULT NULL,
  `publicity_description` varchar(250) DEFAULT NULL,
  `publicity_address` varchar(100) DEFAULT NULL,
  `publicity_charge_permonth` int(11) DEFAULT '0',
  `publicity_city` varchar(50) DEFAULT NULL,
  `publicity_mobile` varchar(15) DEFAULT NULL,
  `publicity_photo` varchar(255) DEFAULT NULL,
  `publicity_created_date` datetime DEFAULT NULL,
  `publicity_expired_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicity`
--

INSERT INTO `publicity` (`publicity_id`, `publicity_userid`, `publicity_usertype`, `publicity_title`, `publicity_description`, `publicity_address`, `publicity_charge_permonth`, `publicity_city`, `publicity_mobile`, `publicity_photo`, `publicity_created_date`, `publicity_expired_date`) VALUES
(11, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-06-59_images_thumb.jpg', '2017-06-02 10:06:59', '2017-06-02 10:06:59'),
(12, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-12-25_kerala-model-house-_thumb.jpg', '2017-06-02 10:12:25', '2017-06-02 10:12:25'),
(13, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-17-10_rental-house-big_82249357_thumb.jpg', '2017-06-02 10:17:10', '2017-06-02 10:17:10'),
(14, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-18-23_house-with-for-rent-sign-posted-in-yard_thumb.jpg', '2017-06-02 10:18:23', '2017-06-02 10:18:23'),
(15, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-22-05_images-(1)_thumb.jpg', '2017-06-02 10:22:05', '2017-06-02 10:22:05'),
(16, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-23-25_house-with-for-rent-sign-posted-in-yard_thumb.jpg', '2017-06-02 10:23:25', '2017-06-02 10:23:25'),
(17, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-23-51_images-(2)_thumb.jpg', '2017-06-02 10:23:52', '2017-06-02 10:23:52'),
(18, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-23-59_house-with-for-rent-sign-posted-in-yard_thumb.jpg', '2017-06-02 10:23:59', '2017-06-02 10:23:59'),
(19, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-24-17_kerala-model-house-_thumb.jpg', '2017-06-02 10:24:17', '2017-06-02 10:24:17'),
(20, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-24-40_house-with-for-rent-sign-posted-in-yard_thumb.jpg', '2017-06-02 10:24:40', '2017-06-02 10:24:40'),
(21, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-25-48_images-(1)_thumb.jpg', '2017-06-02 10:25:48', '2017-06-02 10:25:48'),
(22, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-26-42_images-(1)_thumb.jpg', '2017-06-02 10:26:42', '2017-06-02 10:26:42'),
(23, 'admin', 'general', 'A Flat for Rent at Mirpur 10', 'We are offering for Rent. There are 3 rooms, 2 washrooms and 1 kitchen room on the 6th floor of the house. Water is available 24 hours and Gas and Electricity are also available to the flat.', 'Rose Vila, 272, Senpara Parbata, Mirpur 10, Dhaka', 1400, 'Mirpur', '01730910539', '2017-06-02-18-27-41_kerala-model-house-_thumb.jpg', '2017-06-02 10:27:41', '2017-06-02 10:27:41'),
(24, 'masudul', 'general', 'Abrahametry Rent', 'Small house\r\n2 room, Attached bath,\r\nDrawing, dining', '413, Shenpara parbata, mirpur-10, Dhaka', 12000, 'Mirpur', '01768406869', '2017-06-07-23-27-45_masud_thumb.jpg', '2017-06-08 10:27:45', '2017-06-08 10:27:45'),
(26, '13141203051', 'landlord', 'Test Title', 'Test Description ...', 'Test Address', 12000, 'Mirpur', '01730910539', '2017-06-13-17-27-06_BabluBR-copy_thumb.png', '2017-06-14 04:27:06', '2017-06-14 04:27:06'),
(27, '13141203051', 'landlord', 'Test', 'Des', 'ad', 12000, 'Adabor', '01730910539', '2017-07-08-21-33-59_Bangladesh_thumb.jpg', '2017-07-09 08:34:10', '2017-07-09 08:34:10'),
(28, 'admin', 'admin', 'Flat For Rent at Adabor', '2 Bed room with attach bath,1 Drawing room with balcony & Kitchen room.\r\nLift facility.', '70,Adabor,Dhaka.', 25000, 'Adabor', '+8801949821072', '2017-07-10-01-53-58_10824-2-large_thumb.jpg', '2017-07-10 01:18:04', '2017-07-10 01:18:04'),
(29, 'admin', 'admin', 'Luxury Flat available at Badda', '1Master Bed,2bedroom,1 Drawing room,kitchen room.\r\nlift, water and Gas and electricity are always available .', '112,Badda,Dhaka.', 26000, 'Badda', '+8801949821082', '2017-07-10-01-58-41_images-(3)_thumb.jpg', '2017-07-10 01:18:21', '2017-07-10 01:18:21'),
(30, 'admin', 'admin', 'Flat for Rent at Bimanbandar.', '3 Beds,1 Daining & kitchen, \r\nLift and security facility .\r\nGenerator facility.', '30,Bimanbondor,Dhaka.', 20000, 'Bimanbandar', '+8801849221092', '2017-07-10-02-03-42_images-(4)_thumb.jpg', '2017-07-10 01:03:42', '2017-07-10 01:03:42'),
(31, 'admin', 'admin', 'Flat at Bangsal for rent', '2 Bed,1 Master bed, 1 kitchen and drawing room.\r\nLift and Generator facility.\r\n', '33,Bnagsal,Dhaka.', 18000, 'Bangsal', '+8801949821079', '2017-07-10-02-22-10_rental-service-300x225_thumb.jpeg', '2017-07-10 01:22:10', '2017-07-10 01:22:10'),
(32, 'admin', 'admin', 'Flat at Cantonment', '2 bed room,1 Drawing room & kitchen room.\r\nlift, water and Gas and electricity are always available .', '21/C ,Cantonment ,Dhaka.', 17000, 'Cantonment', '+8801849821070', '2017-07-10-02-25-14_1448797392_Dhaka-Bank_change_003_thumb.jpg', '2017-07-10 01:25:14', '2017-07-10 01:25:14'),
(33, 'admin', 'admin', ' চকবাজারে কম টাকায় ফ্লাট ভাড়া  ', '2 bed room,1 Drawing room,\r\nkitchen room.\r\nlift, water and Gas and electricity are always available .', '77/A,Chank Bazar,Dhaka.', 15000, 'Chak Bazar', '+8801949821079', '2017-07-10-02-29-00_images-(5)_thumb.jpg', '2017-07-10 01:29:00', '2017-07-10 01:29:00'),
(34, 'admin', 'admin', 'Flat at Dakshinkhan', '1 Master Bed,2 Bed room,1 Drawing room,kitchen room.\r\nlift, water and Gas and electricity are always available .', '85,Dakshinkhan,Dhaka.', 21000, 'Dakshinkhan', '+8801849821072', '2017-07-10-02-32-14_10824-2-large_thumb.jpg', '2017-07-10 01:32:14', '2017-07-10 01:32:14'),
(35, 'admin', 'admin', 'Flat at Darus Salam on 2nd Floor', '2 Bed room,1 Drawing room & 1 kitchen room.\r\nwater and Gas and electricity are always available .', '20/c, Darussalam,2nd floor,Dhaka,', 20000, 'Darus Salam', '+8801649821078', '2017-07-10-02-34-51_quality-inn_thumb.jpg', '2017-07-10 01:34:51', '2017-07-10 01:34:51'),
(36, 'admin', 'admin', 'Flat for rent at Demra ', '2 Bed room,1 Drawing room,kitchen room.\r\nlift, water and Gas and electricity are always available .', '43,demra,dhaka.', 14000, 'Demra', '+8801849221092', '2017-07-10-02-39-29_3-Bedroom-Flat-for-rent-in-Mirpur-11-Dhaka-3-large_thumb.jpg', '2017-07-10 01:39:29', '2017-07-10 01:39:29'),
(37, 'admin', 'admin', 'ধামরাই এ কম টাকায় ফ্লাট বাসা ভাড়া।', '২টা বেড রুম, রান্না ঘর,\r\nপানি ও গ্যাস সুবিধা।', 'ধামরাই ,ঢাকা।', 12000, 'Dhamrai', '+8801949821082', '2017-07-10-02-44-02_20151107101509-4OzI4Ag27X1r_rsz_20151105_141145_thumb.jpg', '2017-07-10 01:45:30', '2017-07-10 01:45:30'),
(38, 'admin', 'admin', 'Luxury Flat available  at Dhanmondi', '1 Master bed,2 bedroom, 1 Drawing room,1 kitchen room,\r\nLift and auto Generator facility.\r\nSecurity ', 'R:16/A, Dhanmondi, Dhaka.', 26000, 'Dhanmondi', '+8801949821079', '2017-07-10-02-48-53_images_thumb.jpg', '2017-07-10 01:48:53', '2017-07-10 01:48:53'),
(39, 'admin', 'admin', 'House rent at Dohar', '2 rooms + 1 kitchen+1 daining room.\r\nGas and other facility are available here. ', 'Sador, Dohar, Dhaka.', 12000, 'Dohar', '+8801949821070', '2017-07-10-07-09-57_house_in_dhaka_thumb.jpg', '2017-07-10 06:09:57', '2017-07-10 06:09:57'),
(40, '19911913625000100112', 'landlord', 'Home rent at Mirpur', '2Bed,1 kitchen and daining room ,lift and securiy and generator facility.', '290,senpara parbota,mirpur-10.', 15000, 'Mirpur', '+8801849221092', '2017-07-11-04-48-46_10824-2-large_thumb.jpg', '2017-07-11 03:48:46', '2017-07-11 03:48:46'),
(41, '19911913625000100152', 'landlord', 'Luxury Flat available at Mirpur-10', '3 Bed room,1 Drawing room with Barandha, Kitchen, lift and generator are available.', '272,Senpara parbota,Mirpur-10.', 16000, 'Mirpur', '+8801949821079', '2017-07-11-04-53-44_aeronautical-institute-of-bangladesh_thumb.jpg', '2017-07-11 03:53:44', '2017-07-11 03:53:44'),
(42, '19911913625000100000', 'general', ' HOME RENT at SENPARA', '2BED,1DRAWING,KITCHN AND GENERATOR FACILITY.', '272,SENPARA,PARBATA,MIRPUR-10.', 15000, 'Mirpur', '+8801849221092', '2017-08-10-06-33-57_a0a74648a9ec3f136b7ad30d9a2156ae_thumb.jpg', '2017-08-10 05:33:57', '2017-08-10 05:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE IF NOT EXISTS `renter` (
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`renter_id`, `renter_fullname`, `user_type`, `renter_father_name`, `renter_birth_date`, `renter_maritial_status`, `renter_permanent_add`, `renter_profession_institute`, `renter_religion`, `renter_educational_status`, `renter_phone`, `renter_email`, `renter_nid`, `renter_passport`, `renter_emergency_name`, `renter_emergency_relation`, `renter_emergency_address`, `renter_emergency_phone`, `renter_previous_landlord_name`, `renter_previous_landlord_phone`, `renter_previous_landlord_permanent_add`, `renter_prvious_leave_reason`, `renter_present_landlord_name`, `renter_present_landlord_phone`, `renter_present_start_date`, `renter_created_date`, `renter_modified_date`, `renter_division`, `renter_district`, `renter_police_station`, `renter_flat_floor_no`, `renter_holding_no`, `renter_road_no`, `renter_locality`, `renter_postcode`, `renter_photo`) VALUES
(1, 'Anupam Das Anik', 'renter', 'Sunirmol Das', '1990-11-07', 0, 'Vill:Porakadba,Post+P.S:Barora,Dsit:Comilla.', 'Student', 'Hinduism', 'MBA', '+8801945405239', 'annik.32das@gmail.com', '19911913625000100119', 'BF445904', 'Sunirmol Das', 'Father', 'Vill:Porakadba,Post+P.S:Barora,Dsit:Comilla.', '+8801946276790', 'Md.Musaroof Ahmed', '+8801971552590', '271,Senpara Parbata,kafrul,Mir', 'Want to stay with friend in the same flat.', 'Md.Asharaful kabir', '+8801771771586', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'Comilla', 'Babora', '7th', '230', '7B', 'Senpara', '1216', '2017-07-10-08-38-59_IMG_0334_thumb.JPG'),
(4, 'Bipul Sarker', 'renter', 'Mintu sarker', '1969-12-31', 0, 'Barkota,Daudknadi,Comilla', 'Student', 'Hinduism', 'BBA', '+8801845405219', 'bba12th.uiu@gamil.com', '19941913625011231', '', 'Mintu sarker', 'Uncle', 'Barkota,Daudknadi,Comilla', '+8801946276001', 'Halim chaowdhury', '+8801671552589', '7/B,Dhanmondhi,Dhaka', 'Want to stay with class friends', 'Afzal ahmed Bhuyain', '+8801571772059', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'Comilla', 'Daudkandi', '5b', '271', '7/B', 'Senpara', '1216', '2017-07-11-03-29-32_IMG_0353_thumb.JPG'),
(5, 'Mrs. Jinnat Sultana', 'renter', 'Rayhin Mahamud', '1969-12-31', 0, 'Maligaon,Daudkandi,Comilla', 'Housewife', 'Islam', 'HSC', '+8801845405298', 'bsc2006hsc@gmail.com', '19941913625011232', '', 'Shohel Rana', 'husband', '272,7/A,senpara,mirpur-10', '+8801946256740', 'Yeasin ahmed', '+8801771552589', '8/A,Malibag,Dhaka.', 'Business Purpose', 'Ashraful alam', '+8801971771586', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'Comilla', 'Daudkandi', '4C', '272', '7/A', 'Senpara', '1216', '2017-07-11-03-47-01_14390951_1862857357271688_5359161819488259603_n_thumb.jpg'),
(6, 'Nesar Uddin ', 'renter', 'Late abul hossain', '1969-12-31', 0, 'Satra,Chandina,Comilla', 'Dental Doctor', 'Islam', 'MBBS', '+8801545405298', 'cmcdental21@gmail.com', '19941913625011233', 'BC449550', 'Ayesha khushi', 'Wife', 'Satra,Chandina,Comilla', '+8801846276740', 'Md.Mamun Ahmen khan', '+8801971552580', '110,Segunbagica,Dhaka.', 'Official reason', 'Md.Asharaful Alam', '+8801971771554', '0000-00-00 00:00:00', NULL, NULL, 'Chittagong', 'Comilla', 'Chandina', '2A', '272', '7/A', 'Senpara', '1216', '2017-07-11-04-32-55_12112507_1083346121708731_3399486425098046040_n_thumb.jpg'),
(7, 'Pabel Mahamud', 'renter', 'fazid uddin ahmed', '1969-12-31', 0, '26,pabel house,Rajshahi sador,Rajshahi.', 'Student', 'Islam', 'MBA', '+8801545405276', 'pabel32.uib@gmail.com', '19941913625011234', 'BC445906', 'Parves Mahamud', 'Brother', '272,7/A,senpara,parbota.', '+8801946276743', 'Yeasin hossain ', '+8801871552580', '21/c,Gulsan,Dhaka.', 'Family reason', 'Md.Asharaful Alam', '+8801971771554', '0000-00-00 00:00:00', NULL, NULL, 'Rajshahi', 'Rajshahi', 'Rajshahi sador', '5a', '272', '7/A', 'Senpara', '1216', '2017-07-11-04-43-14_18447282_901621866646283_7469173061451455262_n_thumb.jpg'),
(8, 'Salauddin Mahamud', 'renter', 'Gazi Sultan Mahamud', '1969-12-31', 0, '550,Moddha para,Sador, B.Barai.', 'Student', 'Islam', 'MBA', '+8801545405289', 'raj34subctg@gmail.com', '19941913625011235', 'BB445908', 'Gazi Sultan Mahamud', 'Father', '550,Moddha para,Sador, B.Barai.', '+8801746276746', 'Yeasin ahmed chowdhury', '+8801671552582', '390,Moddha Badda,Dhaka.', 'Study reason', 'Ramesh Patwary', '+8801771771580', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '3C', '220', '220', 'Senpara', '1216', '2017-07-12-00-40-33_15965886_1832382453712093_95696587140836448_n_thumb.jpg'),
(9, 'Afzal Sarker', 'renter', 'Hasem ali sarker', '1969-12-31', 0, 'Old Chowdhurypara,Comilla sador,Comilla.', 'Business', 'Islam', 'B.Sc. In CSE', '+8801745405279', 'cse22ndeve.adu@gmail.com', '19941913625011236', '', 'Afsana Begum', 'Wife', 'Ramesh Bhaban,220,senpara parbata ,mirpur-10.', '+8801546276740', 'Babul ahmed ', '+8801971552583', '75/A,dhanmondi,Dhaka', 'Official Reason', 'Ramesh Patwary', '+8801971771580', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '2C', '220', '7/A', 'Senpara', '1216', '2017-07-12-00-49-22_19732214_823124557855046_1336645411407781681_n_thumb.jpg'),
(10, 'Dipa Rani Das', 'renter', 'Sadesh das', '1989-04-03', 0, 'Vill:Biteshor, Post:Barkota, P.S:Daudkandi, Dist:Comilla.', 'Hosewife', 'Hinduism', 'BBA', '+8801545405279', 'uiu232abik@gmail.com', '19941913625011237', '', 'Aditta Das', 'Husband', 'Seltech Villa,220,7/A,Senpara parbata,Mirpur-10.', '+8801946276778', 'Uzzal Mia 	', '+8801971552588', '220,senpara,Parbata.', 'Official reason', 'Ramesh Patwary', '+8801771771580', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '1B', '220', '7/A', 'Senpara', '1216', '2017-07-12-01-03-18_18698417_171044503427914_159005404185295762_n_thumb.jpg'),
(11, 'Subrota Sen', 'renter', 'Shonkar sen', '1969-12-31', 0, 'Feni sador,Feni,Chittagong.', 'Student', 'Hinduism', 'LLB', '+8801745405278', 'uiu990llbik@gmail.com', '19941913625011238', 'BF445903', 'Shonkar sen', 'Father', '220,senpara p[arbata,mirpur-10.', '+8801946276770', 'Bishwanath Sarker', '+8801745405276', '272,Senpara,Parbta,Mirpur-10.', 'Nathing', 'Ramesh Patwary', '+8801771771580', '0000-00-00 00:00:00', NULL, NULL, 'Dhaka', 'Dhaka', 'Kafrul', '1C', '220', '7/A', 'Senpara', '1216', '2017-07-12-01-16-04_18403304_1745943008766188_5782982952437134719_n_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `renter_driver`
--

CREATE TABLE IF NOT EXISTS `renter_driver` (
  `driver_id` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `driver_nid` varchar(30) DEFAULT NULL,
  `driver_phone` varchar(15) DEFAULT NULL,
  `driver_permanent_add` varchar(30) DEFAULT NULL,
  `driver_created_date` datetime DEFAULT NULL,
  `driver_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_driver`
--

INSERT INTO `renter_driver` (`driver_id`, `renter_id`, `driver_name`, `driver_nid`, `driver_phone`, `driver_permanent_add`, `driver_created_date`, `driver_modified_date`) VALUES
(1, 1, '', '', '', '', NULL, NULL),
(2, 4, 'Masud Mia', '19861912125010018', '+8801571559801', 'Gondhomoti,Kotbari,Comilla', NULL, NULL),
(3, 5, 'Firuz  mia', '19861912125010017', '+8801561552390', 'malay,Gauripur,daudkandi,Comil', NULL, NULL),
(4, 6, 'Alamin Mia', '19861912125010019', '+8801871552370', 'Satra,Chandina,Comilla', NULL, NULL),
(5, 7, 'Asharaf ali', '19861912125010020', '+8801761552396', '24,Rajshahi sador,Rajshahi.', NULL, NULL),
(6, 8, 'Md. Alamgir hossain', '19861912125010021', '+8801671552221', '45,Noton bazar ,Chandpur.', NULL, NULL),
(7, 9, 'ajgor mia', '19861912125010022', '+8801761552390', 'Old Chowdhurypara,Comilla sado', NULL, NULL),
(8, 10, 'Haliim mia', '19861912125010023', '+8801671552550', 'Barkota,Daudkandi,Comilla', NULL, NULL),
(9, 11, 'Azgar ali', '19861912125010024', '+8801671558825', 'Feni sador,Feni,Chittagong.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renter_familymember`
--

CREATE TABLE IF NOT EXISTS `renter_familymember` (
  `family_member_id` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(30) DEFAULT NULL,
  `family_member_age` varchar(10) DEFAULT NULL,
  `family_member_job` varchar(30) DEFAULT NULL,
  `family_member_phone` varchar(20) DEFAULT NULL,
  `family_member_created_date` datetime DEFAULT NULL,
  `family_member_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_familymember`
--

INSERT INTO `renter_familymember` (`family_member_id`, `renter_id`, `family_member_name`, `family_member_age`, `family_member_job`, `family_member_phone`, `family_member_created_date`, `family_member_modified_date`) VALUES
(1, 1, 'Faysal sarker', '26yrs', 'Student', '+8801916532120', NULL, NULL),
(2, 1, 'Palash Das', '22yrs', 'Student', '+8801916532123', NULL, NULL),
(3, 1, 'Raj rony', '29yrs', 'Job', '+8801916532123', NULL, NULL),
(4, 1, 'md.Lavli mia', '20yrs', 'Student', '+8801516554432', NULL, NULL),
(5, 1, 'Fahim Mahamud', '28yrs', 'Student', '+8801716554487', NULL, NULL),
(6, 4, 'Sayam rahman', '26yrs', 'Student', '+8801916532109', NULL, NULL),
(7, 4, 'Rahim Mia', '25yrs', 'Student', '+8801716554438', NULL, NULL),
(8, 4, 'Abdul Halim', '30yrs ', 'Business', '+8801616554436', NULL, NULL),
(9, 5, 'Raiyan rana', '9yrs', 'student', '+8801916532190', NULL, NULL),
(10, 5, 'Shohel Rana', '38yrs', 'Business', '+8801946256740', NULL, NULL),
(11, 6, 'Ayesha khushi', '30yrs', 'Doctor', '+8801886504489', NULL, NULL),
(12, 6, 'Apra ahmed', '8months', 'Nathing', '+8801886504489', NULL, NULL),
(13, 7, 'Parves Mahamud', '25yrs', 'student', '+8801916554437', NULL, NULL),
(14, 8, 'Bishwajet Sarker', '26yrs', 'Engineer', '+8801916554437', NULL, NULL),
(15, 8, 'Additta Das', '27yrs', 'Business', '+8801516554436', NULL, NULL),
(16, 8, 'Samim Bhawyain ', '26yrs', 'Student', '+8801816554480', NULL, NULL),
(17, 9, 'Afsana Begum', '28yrs', 'Housewife', '+8801546276740', NULL, NULL),
(18, 9, 'Apul  Sarker', '3yrs', 'None', '+8801546276740', NULL, NULL),
(19, 10, 'Aditta Das', '35yrs', 'Banker', '+8801946276778', NULL, NULL),
(20, 11, 'Shonkar sen', '60yrs', 'Bnaker', '+8801916554436', NULL, NULL),
(21, 11, 'karona rani sen', '56yrs', 'Teacher', '+8801916554435', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renter_homeworker`
--

CREATE TABLE IF NOT EXISTS `renter_homeworker` (
  `homeworker_id` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `homeworker_name` varchar(30) DEFAULT NULL,
  `homeworker_nid` varchar(30) DEFAULT NULL,
  `homeworker_phone` varchar(15) DEFAULT NULL,
  `homeworker_permanent_add` varchar(30) DEFAULT NULL,
  `homeworker_created_date` datetime DEFAULT NULL,
  `homeworker_modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_homeworker`
--

INSERT INTO `renter_homeworker` (`homeworker_id`, `renter_id`, `homeworker_name`, `homeworker_nid`, `homeworker_phone`, `homeworker_permanent_add`, `homeworker_created_date`, `homeworker_modified_date`) VALUES
(1, 1, 'Afroza akhter', '198119136250001229', '+8801971552176', 'Hira bazar, moszid road, Farid', NULL, NULL),
(2, 4, 'Amena Begum', '19801912125011117', '+8801871552109', 'Kotbari,Comilla', NULL, NULL),
(3, 5, 'Bilkis begum', '19801912125011116', '+8801971552190', 'malay,Gauripur,daudkandi,Comil', NULL, NULL),
(4, 6, 'Selina akhter', '19801912125011118', '+8801771552130', 'Satra,Chandina,Comilla', NULL, NULL),
(5, 7, 'Morzila akhtar', '19801912125011119', '+8801771552136', 'Rajshahi sador,Rajshahi.', NULL, NULL),
(6, 8, 'Feroza Begum', '19801912125011120', '+8801671552133', 'satrasta more,moladi,Borisal.', NULL, NULL),
(7, 9, 'Morzila Begum', '19801912125011121', '+8801971552130', 'Old Chowdhurypara,Comilla sado', NULL, NULL),
(8, 10, 'Shilpi ', '19801912125011122', '+8801971552130', 'Barkota,Daudkandi,Comilla', NULL, NULL),
(9, 11, 'piyali das', '19801912125011123', '+8801971552145', 'Feni sador,Feni,Chittagong.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renter_tracking_tbl`
--

CREATE TABLE IF NOT EXISTS `renter_tracking_tbl` (
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter_tracking_tbl`
--

INSERT INTO `renter_tracking_tbl` (`tracking_id`, `lnd_id`, `lnd_fullname`, `lnd_phone`, `lnd_nid`, `lnd_police_station`, `lnd_holding_no`, `lnd_road_no`, `lnd_locality`, `lnd_postcode`, `lnd_photo`, `renter_id`, `renter_fullname`, `renter_phone`, `renter_nid`, `renter_permanent_add`, `renter_photo`, `renter_started_date`, `renter_ending_date`) VALUES
(1, 18, 'Tanveer Ahmed', '+8801545405270', '19911913625000100152', 'Kafrul', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG', 4, 'Bipul Sarker', '+8801845405219', '19941913625011231', 'Barkota,Daudknadi,Comilla', '2017-07-11-03-29-32_IMG_0353_thumb.JPG', '2017-07-11 02:29:47', '2017-07-11 03:57:20'),
(2, 18, 'Tanveer Ahmed', '+8801545405270', '19911913625000100152', 'Kafrul', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG', 5, 'Mrs. Jinnat Sultana', '+8801845405298', '19941913625011232', 'Maligaon,Daudkandi,Comilla', '2017-07-11-03-47-01_14390951_1862857357271688_5359161819488259603_n_thumb.jpg', '2017-07-11 02:47:24', '2017-07-11 02:47:24'),
(3, 18, 'Tanveer Ahmed', '+8801545405270', '19911913625000100152', 'Kafrul', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG', 6, 'Nesar Uddin ', '+8801545405298', '19941913625011233', 'Satra,Chandina,Comilla', '2017-07-11-04-32-55_12112507_1083346121708731_3399486425098046040_n_thumb.jpg', '2017-07-11 03:33:30', '2017-07-12 11:22:52'),
(4, 18, 'Tanveer Ahmed', '+8801545405270', '19911913625000100152', 'Kafrul', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG', 7, 'Pabel Mahamud', '+8801545405276', '19941913625011234', '26,pabel house,Rajshahi sador,Rajshahi.', '2017-07-11-04-43-14_18447282_901621866646283_7469173061451455262_n_thumb.jpg', '2017-07-11 03:43:42', '2017-07-11 03:43:42'),
(5, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 4, 'Bipul Sarker', '+8801845405219', '19941913625011231', 'Barkota,Daudknadi,Comilla', '2017-07-11-03-29-32_IMG_0353_thumb.JPG', '2017-07-11 03:57:20', '2017-07-11 03:57:20'),
(6, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 6, 'Nesar Uddin ', '+8801545405298', '19941913625011233', 'Satra,Chandina,Comilla', '2017-07-11-04-32-55_12112507_1083346121708731_3399486425098046040_n_thumb.jpg', '2017-07-12 11:22:52', '2017-07-12 11:22:52'),
(7, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 8, 'Salauddin Mahamud', '+8801545405289', '19941913625011235', '550,Moddha para,Sador, B.Barai.', '2017-07-12-00-40-33_15965886_1832382453712093_95696587140836448_n_thumb.jpg', '2017-07-12 11:51:05', '2017-08-08 09:34:05'),
(8, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 9, 'Afzal Sarker', '+8801745405279', '19941913625011236', 'Old Chowdhurypara,Comilla sador,Comilla.', '2017-07-12-00-49-22_19732214_823124557855046_1336645411407781681_n_thumb.jpg', '2017-07-12 11:51:15', '2017-08-08 09:36:01'),
(9, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 10, 'Dipa Rani Das', '+8801545405279', '19941913625011237', 'Vill:Biteshor, Post:Barkota, P.S:Daudkandi, Dist:Comilla.', '2017-07-12-01-03-18_18698417_171044503427914_159005404185295762_n_thumb.jpg', '2017-07-12 12:03:43', '2017-08-08 09:38:39'),
(10, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 11, 'Subrota Sen', '+8801745405278', '19941913625011238', 'Feni sador,Feni,Chittagong.', '2017-07-12-01-16-04_18403304_1745943008766188_5782982952437134719_n_thumb.jpg', '2017-07-12 12:16:17', '2017-07-12 12:16:17'),
(11, 18, 'Tanveer Ahmed', '+8801545405270', '19911913625000100152', 'Kafrul', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG', 8, 'Salauddin Mahamud', '+8801545405289', '19941913625011235', '550,Moddha para,Sador, B.Barai.', '2017-07-12-00-40-33_15965886_1832382453712093_95696587140836448_n_thumb.jpg', '2017-08-08 09:34:05', '2017-08-08 09:34:05'),
(12, 22, 'Ramesh Patwary', '+8801795405299', '19911913625000100112', 'kafrul', '390', '8A', 'Senpara', '1216', '2017-07-10-07-23-39_14590448_1214720785241563_9022944112557431155_n_thumb.jpg', 9, 'Afzal Sarker', '+8801745405279', '19941913625011236', 'Old Chowdhurypara,Comilla sador,Comilla.', '2017-07-12-00-49-22_19732214_823124557855046_1336645411407781681_n_thumb.jpg', '2017-08-08 09:36:01', '2017-08-08 09:36:01'),
(13, 18, 'Tanveer Ahmed', '+8801545405270', '19911913625000100152', 'Kafrul', '75', '1A', 'Senpara', '1216', '2017-07-10-00-39-54_IMG_0211_thumb.JPG', 10, 'Dipa Rani Das', '+8801545405279', '19941913625011237', 'Vill:Biteshor, Post:Barkota, P.S:Daudkandi, Dist:Comilla.', '2017-07-12-01-03-18_18698417_171044503427914_159005404185295762_n_thumb.jpg', '2017-08-08 09:38:39', '2017-08-08 09:38:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`), ADD UNIQUE KEY `user_username` (`adm_username`);

--
-- Indexes for table `ads_account_general`
--
ALTER TABLE `ads_account_general`
  ADD PRIMARY KEY (`ad_id`), ADD UNIQUE KEY `ad_lnd_username` (`ad_lnd_username`);

--
-- Indexes for table `landloard`
--
ALTER TABLE `landloard`
  ADD PRIMARY KEY (`lnd_id`), ADD UNIQUE KEY `lnd_nid` (`lnd_nid`);

--
-- Indexes for table `lnd_driver`
--
ALTER TABLE `lnd_driver`
  ADD PRIMARY KEY (`driver_id`), ADD KEY `lnd_id` (`lnd_id`);

--
-- Indexes for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  ADD PRIMARY KEY (`family_member_id`), ADD KEY `lnd_id` (`lnd_id`);

--
-- Indexes for table `lnd_homeworker`
--
ALTER TABLE `lnd_homeworker`
  ADD PRIMARY KEY (`homeworker_id`), ADD KEY `lnd_id` (`lnd_id`);

--
-- Indexes for table `metro_police`
--
ALTER TABLE `metro_police`
  ADD PRIMARY KEY (`metro_police_id`), ADD UNIQUE KEY `metro_police_username` (`metro_police_username`);

--
-- Indexes for table `publicity`
--
ALTER TABLE `publicity`
  ADD PRIMARY KEY (`publicity_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`renter_id`), ADD UNIQUE KEY `renter_nid` (`renter_nid`);

--
-- Indexes for table `renter_driver`
--
ALTER TABLE `renter_driver`
  ADD PRIMARY KEY (`driver_id`), ADD KEY `renter_id` (`renter_id`);

--
-- Indexes for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  ADD PRIMARY KEY (`family_member_id`), ADD KEY `renter_id` (`renter_id`);

--
-- Indexes for table `renter_homeworker`
--
ALTER TABLE `renter_homeworker`
  ADD PRIMARY KEY (`homeworker_id`), ADD KEY `renter_id` (`renter_id`);

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
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ads_account_general`
--
ALTER TABLE `ads_account_general`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `landloard`
--
ALTER TABLE `landloard`
  MODIFY `lnd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `lnd_driver`
--
ALTER TABLE `lnd_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lnd_familymember`
--
ALTER TABLE `lnd_familymember`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lnd_homeworker`
--
ALTER TABLE `lnd_homeworker`
  MODIFY `homeworker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `metro_police`
--
ALTER TABLE `metro_police`
  MODIFY `metro_police_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `publicity`
--
ALTER TABLE `publicity`
  MODIFY `publicity_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `renter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `renter_driver`
--
ALTER TABLE `renter_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `renter_familymember`
--
ALTER TABLE `renter_familymember`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `renter_homeworker`
--
ALTER TABLE `renter_homeworker`
  MODIFY `homeworker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `renter_tracking_tbl`
--
ALTER TABLE `renter_tracking_tbl`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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
