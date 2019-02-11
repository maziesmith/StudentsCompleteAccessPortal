-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 06:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scap`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicdet`
--

CREATE TABLE IF NOT EXISTS `academicdet` (
  `s_id` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `SSC` int(10) DEFAULT NULL,
  `HSC_Diploma` int(10) DEFAULT NULL,
  `sem_1` int(10) DEFAULT NULL,
  `sem_2` int(10) DEFAULT NULL,
  `sem_3` int(10) DEFAULT NULL,
  `sem_4` int(10) DEFAULT NULL,
  `sem_5` int(10) DEFAULT NULL,
  `sem_6` int(10) DEFAULT NULL,
  `sem_7` int(10) DEFAULT NULL,
  `sem_8` int(10) DEFAULT NULL,
  `agg` int(10) DEFAULT NULL,
  `live_kt` int(10) DEFAULT NULL,
  `dead_kt` int(10) DEFAULT NULL,
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicdet`
--

INSERT INTO `academicdet` (`s_id`, `stream`, `SSC`, `HSC_Diploma`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `sem_6`, `sem_7`, `sem_8`, `agg`, `live_kt`, `dead_kt`) VALUES
('B001', 'IT', 85, 88, 66, 66, 79, 78, 78, 79, 0, 0, 75, 0, 0),
('B002', 'IT', 91, 80, 71, 68, 78, 72, 76, 78, 0, 0, 74, 0, 0),
('B003', 'IT', 85, 81, 0, 0, 73, 70, 75, 75, 0, 0, 73, 0, 0),
('B004', 'IT', 82, 81, 0, 0, 66, 69, 73, 75, 0, 0, 71, 0, 0),
('B005', 'IT', 91, 88, 61, 68, 75, 72, 74, 74, 0, 0, 71, 0, 0),
('B006', 'IT', 88, 80, 0, 0, 66, 68, 72, 75, 0, 0, 70, 0, 0),
('B007', 'IT', 94, 93, 68, 62, 77, 71, 69, 73, 0, 0, 70, 0, 0),
('B008', 'IT', 86, 91, 66, 65, 74, 68, 71, 71, 0, 0, 69, 0, 0),
('B009', 'IT', 90, 88, 65, 67, 69, 71, 71, 72, 0, 0, 69, 0, 0),
('B0010', 'IT', 94, 91, 66, 66, 71, 70, 71, 69, 0, 0, 69, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admindet`
--

CREATE TABLE IF NOT EXISTS `admindet` (
  `a_id` varchar(20) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_pwd` varchar(20) NOT NULL,
  `a_phone` bigint(50) DEFAULT NULL,
  `a_email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindet`
--

INSERT INTO `admindet` (`a_id`, `a_name`, `a_pwd`, `a_phone`, `a_email`) VALUES
('A001', 'Dr.Gopakumaran T. Thampi', '1', 9594696888, 'gtthampi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `attdet`
--

CREATE TABLE IF NOT EXISTS `attdet` (
  `s_id` varchar(10) DEFAULT NULL,
  `t_id` varchar(10) DEFAULT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `sclass` varchar(10) DEFAULT NULL,
  `att` int(2) DEFAULT NULL,
  `d_nt` datetime DEFAULT NULL,
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculardet`
--

CREATE TABLE IF NOT EXISTS `extracurriculardet` (
  `s_id` varchar(20) DEFAULT NULL,
  `no_of_committees` int(10) DEFAULT NULL,
  `committee1` varchar(20) DEFAULT NULL,
  `desg1` varchar(20) DEFAULT NULL,
  `committee2` varchar(20) DEFAULT NULL,
  `desg2` varchar(20) DEFAULT NULL,
  `committee3` varchar(20) DEFAULT NULL,
  `desg3` varchar(20) DEFAULT NULL,
  `achievements` tinytext,
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extracurriculardet`
--

INSERT INTO `extracurriculardet` (`s_id`, `no_of_committees`, `committee1`, `desg1`, `committee2`, `desg2`, `committee3`, `desg3`, `achievements`) VALUES
('B001', 0, '0', '0', '0', '0', '0', '0', 'Internship at engineering coaching classes'),
('B002', 0, '0', '0', '0', '0', '0', '0', 'NONE'),
('B003', 1, 'iTantra', 'Technical Head', '', '', '', '', ''),
('B004', 2, 'iTantra', 'volunteer', 'iTantra', 'Public Relations', '', '', ''),
('B005', 1, 'iTantra', 'Digital Design', '', '', '', '', ''),
('B006', 2, 'iTantra', 'Creative Head', 'iTantra', 'Head of Affairs', '', '', ''),
('B007', 0, '', '', '', '', '', '', ''),
('B008', 0, '', '', '', '', '', '', ''),
('B009', 0, '', '', '', '', '', '', ''),
('B0010', 1, 'Students Council', 'Public Relations', '', '', '', '', 'Ladies Representative of College');

-- --------------------------------------------------------

--
-- Table structure for table `notdet`
--

CREATE TABLE IF NOT EXISTS `notdet` (
  `d_t` varchar(50) DEFAULT NULL,
  `notify` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdet`
--

CREATE TABLE IF NOT EXISTS `studentdet` (
  `s_id` varchar(20) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_pwd` varchar(20) NOT NULL,
  `s_class` varchar(20) NOT NULL,
  `s_phone` bigint(50) DEFAULT NULL,
  `s_caddress` varchar(200) DEFAULT NULL,
  `s_paddress` varchar(200) DEFAULT NULL,
  `s_age` int(10) DEFAULT NULL,
  `s_dob` date DEFAULT NULL,
  `s_email` varchar(30) DEFAULT NULL,
  `s_gender` varchar(10) DEFAULT NULL,
  `s_dp` longblob,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdet`
--

INSERT INTO `studentdet` (`s_id`, `s_name`, `s_pwd`, `s_class`, `s_phone`, `s_caddress`, `s_paddress`, `s_age`, `s_dob`, `s_email`, `s_gender`, `s_dp`) VALUES
('B001', 'SHAH KHANJAN DINESH', '1', 'B1', 9594002468, '403, JINESHWAR DARSHAN, DEVCHAND NAGAR, NEAR JAIN TEMPLE, BHAYANDER(WEST). THANE-401101\r\n', '403, JINESHWAR DARSHAN, DEVCHAND NAGAR, NEAR JAIN TEMPLE, BHAYANDER(WEST). THANE-401101\r\n', 21, '1993-03-08', 'khanjan.engineer@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f312e6a7067),
('B0010', 'RATTI ISHA KAUR', '10', 'B1', 9819850683, '"6/136, HAZARA C.H.S,M.H.B COLONY,OPP. EVERARD NGAR,\r\nCHUNABHATTI, SION, MUMBAI-22."\r\n', '"6/136, HAZARA C.H.S,M.H.B COLONY,OPP. EVERARD NGAR,\r\nCHUNABHATTI, SION, MUMBAI-22."\r\n', 21, '1993-10-23', 'ishakaur163@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31302e6a7067),
('B002', 'SHARMA POOJA OMPRAKASH', '2', 'B1', 9664681153, '5, Sharma Nivas, Vasant Mistry Chawl, Samant Wadi, Sonawala Road, Goregaon East, Mumbai - 400063\r\n', '5, Sharma Nivas, Vasant Mistry Chawl, Samant Wadi, Sonawala Road, Goregaon East, Mumbai - 400063\r\n', 21, '0000-00-00', 'poojasharma93@yahoo.co.in', 'female', 0x2e2e2f6e65772f75706c6f6164732f322e6a7067),
('B003', 'GOSALIA JAYNAM DEEPAK', '3', 'B1', 9821788711, '"193\r\nBhagwati Niwas, \r\nawahar Nagar,\r\nRoad No 13, \r\nGoregaon (W)\r\nMumbai - 400104"\r\n', '"193\r\nBhagwati Niwas, \r\nawahar Nagar,\r\nRoad No 13, \r\nGoregaon (W)\r\nMumbai - 400104"\r\n', 21, '1993-07-06', 'jaynam999@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f332e706e67),
('B004', 'CHUDASAMA SHREYA SANJAY', '4', 'B1', 9930601210, '301,SEC-4,A-4,SHANTINAGAR,MIRAROAD(EAST)\r\n', '301,SEC-4,A-4,SHANTINAGAR,MIRAROAD(EAST)\r\n', 21, '1994-01-16', 'CHUDASAMA.SHREYA16@GMAIL.COM', 'female', 0x2e2e2f6e65772f75706c6f6164732f342e6a7067),
('B005', 'KARTHIKA SURESH', '5', 'B1', 8879565944, '102/16,Western Railway Colony,Matunga Road,Mumbai -19\r\n', '102/16,Western Railway Colony,Matunga Road,Mumbai -19\r\n', 21, '1994-03-18', 'karthika318@yahoo.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f352e6a7067),
('B006', 'UDESHI MANJARI PARESH', '6', 'B1', 9870137955, '601, Casablanca, Skyline Oasis, Premier Road, Ghatkopar(West), Mumbai-400086\r\n', '601, Casablanca, Skyline Oasis, Premier Road, Ghatkopar(West), Mumbai-400086\r\n', 21, '1993-07-11', 'manjariudeshi07@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f362e706e67),
('B007', 'JAIN SHREYA PRAKASHCHANDRA', '7', 'B1', 9022103000, '1303 kanchan tower sector-25 plot no 9 , Nerul, Navi Mumbai-400706\r\n', '1303 kanchan tower sector-25 plot no 9 , Nerul, Navi Mumbai-400706\r\n', 21, '1994-02-18', 'shreya1894.jain@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f372e6a7067),
('B008', 'GUPTA RUHI PRAMOD', '8', 'B1', 9757399940, '"B-703,LOTUS,\r\nHIRANANDANI GARDENS,\r\nPOWAI,\r\nMUMBAI-400076."\r\n', '"B-703,LOTUS,\r\nHIRANANDANI GARDENS,\r\nPOWAI,\r\nMUMBAI-400076."\r\n', 21, '1994-04-11', 'ruhi_41193@hotmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f382e6a7067),
('B009', 'SAYED SANAA SALIM', '9', 'B1', 9594310552, '96 Dimtimkar rd,Nagpada,Haji bldg,1st flr rmno-65,Mumbai-400008.\r\n', '96 Dimtimkar rd,Nagpada,Haji bldg,1st flr rmno-65,Mumbai-400008.\r\n', 21, '1993-08-28', 'sanaa.sayyed@ymail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f392e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `subjdet`
--

CREATE TABLE IF NOT EXISTS `subjdet` (
  `t_id` varchar(10) DEFAULT NULL,
  `t_nam` varchar(50) DEFAULT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL,
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjdet`
--

INSERT INTO `subjdet` (`t_id`, `t_nam`, `subject`, `sem`) VALUES
('BJ001', 'Bhushan Jadhav', 'CC', '8');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdet`
--

CREATE TABLE IF NOT EXISTS `teacherdet` (
  `t_id` varchar(20) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_pwd` varchar(20) NOT NULL,
  `t_phone` bigint(50) DEFAULT NULL,
  `t_mail` varchar(20) DEFAULT NULL,
  `t_sub` tinytext,
  `t_des` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdet`
--

INSERT INTO `teacherdet` (`t_id`, `t_name`, `t_pwd`, `t_phone`, `t_mail`, `t_sub`, `t_des`) VALUES
('BJ001', 'Bhushan Jadhav', '1', 9702868662, 'bhushan.jadhav1@yaho', 'CC,MEIT,OSSL,OST', 'Assistant Professor'),
('GT001', 'Dr.Gopakumaran T. Thampi', '1', 9594696888, 'gtthampi@yahoo.com', 'C++,CGVRS,ICT', 'PRINCIPAL');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academicdet`
--
ALTER TABLE `academicdet`
  ADD CONSTRAINT `academicdet_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `studentdet` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attdet`
--
ALTER TABLE `attdet`
  ADD CONSTRAINT `attdet_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `studentdet` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `extracurriculardet`
--
ALTER TABLE `extracurriculardet`
  ADD CONSTRAINT `extracurriculardet_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `studentdet` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjdet`
--
ALTER TABLE `subjdet`
  ADD CONSTRAINT `subjdet_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teacherdet` (`t_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
