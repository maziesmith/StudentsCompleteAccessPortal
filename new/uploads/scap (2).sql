-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2015 at 10:19 AM
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
('B0010', 'IT', 94, 91, 66, 66, 71, 70, 71, 69, 0, 0, 69, 0, 0),
('B0011', 'IT', 94, 84, 68, 67, 69, 67, 68, 70, 0, 0, 68, 0, 0),
('B0012', 'IT', 82, 80, 62, 63, 66, 68, 70, 77, 0, 0, 67, 0, 0),
('B001', 'IT', 85, 88, 66, 66, 79, 78, 78, 79, 0, 0, 75, 0, 0),
('B002', 'IT', 91, 80, 71, 68, 78, 72, 76, 78, 0, 0, 74, 0, 0),
('B003', 'IT', 85, 81, 0, 0, 73, 70, 75, 75, 0, 0, 73, 0, 0),
('B004', 'IT', 82, 81, 0, 0, 66, 69, 73, 75, 0, 0, 71, 0, 0),
('B005', 'IT', 91, 88, 61, 68, 75, 72, 74, 74, 0, 0, 71, 0, 0),
('B006', 'IT', 88, 80, 0, 0, 66, 68, 72, 75, 0, 0, 70, 0, 0),
('B007', 'IT', 94, 93, 68, 62, 77, 71, 69, 73, 0, 0, 70, 0, 0),
('B008', 'IT', 86, 91, 66, 65, 74, 68, 71, 71, 0, 0, 69, 0, 0),
('B009', 'IT', 90, 88, 65, 67, 69, 71, 71, 72, 0, 0, 69, 0, 0),
('B0010', 'IT', 94, 91, 66, 66, 71, 70, 71, 69, 0, 0, 69, 0, 0),
('B0014', 'IT', 66, 78, 63, 59, 70, 65, 70, 71, 0, 0, 66, 0, 0),
('B0015', 'IT', 88, 79, 0, 0, 60, 68, 66, 68, 0, 0, 65, 0, 0),
('B0016', 'IT', 86, 78, 61, 65, 68, 67, 58, 69, 0, 0, 65, 0, 0),
('B0017', 'IT', 82, 81, 0, 0, 66, 65, 62, 64, 0, 0, 64, 0, 0),
('B0018', 'IT', 93, 78, 59, 63, 68, 56, 62, 68, 0, 0, 63, 0, 0),
('B0019', 'IT', 92, 80, 58, 54, 59, 56, 68, 74, 0, 0, 62, 0, 0),
('B0020', 'IT', 87, 81, 58, 60, 62, 59, 64, 66, 0, 0, 62, 0, 0),
('B001', 'IT', 85, 88, 66, 66, 79, 78, 78, 79, 0, 0, 75, 0, 0),
('B002', 'IT', 91, 80, 71, 68, 78, 72, 76, 78, 0, 0, 74, 0, 0),
('B003', 'IT', 85, 81, 0, 0, 73, 70, 75, 75, 0, 0, 73, 0, 0),
('B004', 'IT', 82, 81, 0, 0, 66, 69, 73, 75, 0, 0, 71, 0, 0),
('B005', 'IT', 91, 88, 61, 68, 75, 72, 74, 74, 0, 0, 71, 0, 0),
('B006', 'IT', 88, 80, 0, 0, 66, 68, 72, 75, 0, 0, 70, 0, 0),
('B007', 'IT', 94, 93, 68, 62, 77, 71, 69, 73, 0, 0, 70, 0, 0),
('B008', 'IT', 86, 91, 66, 65, 74, 68, 71, 71, 0, 0, 69, 0, 0),
('B009', 'IT', 90, 88, 65, 67, 69, 71, 71, 72, 0, 0, 69, 0, 0),
('B0010', 'IT', 94, 91, 66, 66, 71, 70, 71, 69, 0, 0, 69, 0, 0),
('B0011', 'IT', 94, 84, 68, 67, 69, 67, 68, 70, 0, 0, 68, 0, 0),
('B0012', 'IT', 82, 80, 62, 63, 66, 68, 70, 77, 0, 0, 67, 0, 0),
('B001', 'IT', 85, 88, 66, 66, 79, 78, 78, 79, 0, 0, 75, 0, 0),
('B002', 'IT', 91, 80, 71, 68, 78, 72, 76, 78, 0, 0, 74, 0, 0),
('B003', 'IT', 85, 81, 0, 0, 73, 70, 75, 75, 0, 0, 73, 0, 0),
('B004', 'IT', 82, 81, 0, 0, 66, 69, 73, 75, 0, 0, 71, 0, 0),
('B005', 'IT', 91, 88, 61, 68, 75, 72, 74, 74, 0, 0, 71, 0, 0),
('B006', 'IT', 88, 80, 0, 0, 66, 68, 72, 75, 0, 0, 70, 0, 0),
('B007', 'IT', 94, 93, 68, 62, 77, 71, 69, 73, 0, 0, 70, 0, 0),
('B008', 'IT', 86, 91, 66, 65, 74, 68, 71, 71, 0, 0, 69, 0, 0),
('B009', 'IT', 90, 88, 65, 67, 69, 71, 71, 72, 0, 0, 69, 0, 0),
('B0010', 'IT', 94, 91, 66, 66, 71, 70, 71, 69, 0, 0, 69, 0, 0),
('B0014', 'IT', 66, 78, 63, 59, 70, 65, 70, 71, 0, 0, 66, 0, 0),
('B0015', 'IT', 88, 79, 0, 0, 60, 68, 66, 68, 0, 0, 65, 0, 0),
('B0016', 'IT', 86, 78, 61, 65, 68, 67, 58, 69, 0, 0, 65, 0, 0),
('B0017', 'IT', 82, 81, 0, 0, 66, 65, 62, 64, 0, 0, 64, 0, 0),
('B0018', 'IT', 93, 78, 59, 63, 68, 56, 62, 68, 0, 0, 63, 0, 0),
('B0019', 'IT', 92, 80, 58, 54, 59, 56, 68, 74, 0, 0, 62, 0, 0),
('B0020', 'IT', 87, 81, 58, 60, 62, 59, 64, 66, 0, 0, 62, 0, 0),
('B0013', 'IT', 80, 75, 53, 63, 61, 59, 64, 65, 0, 0, 61, 0, 0),
('B0021', 'IT', 90, 77, 61, 62, 62, 57, 64, 61, 0, 0, 61, 0, 0),
('B0023', 'IT', 74, 80, 0, 0, 60, 60, 59, 61, 0, 0, 60, 0, 0),
('B0024', 'IT', 91, 0, 57, 57, 63, 56, 62, 66, 0, 0, 60, 0, 0),
('B0025', 'IT', 81, 73, 53, 55, 59, 57, 61, 66, 0, 0, 58, 0, 2),
('B0026', 'IT', 84, 82, 52, 55, 58, 57, 60, 65, 0, 0, 58, 0, 5),
('B0027', 'IT', 70, 73, 55, 52, 59, 60, 56, 58, 0, 0, 57, 0, 13),
('B0028', 'IT', 79, 68, 56, 57, 57, 56, 56, 59, 0, 0, 57, 0, 0),
('B0029', 'IT', 78, 79, 52, 56, 59, 52, 64, 56, 0, 0, 57, 0, 7),
('B0030', 'IT', 86, 61, 53, 56, 54, 55, 55, 56, 0, 0, 55, 0, 3),
('B0031', 'IT', 88, 0, 0, 0, 67, 62, 71, 68, 0, 0, 67, 0, 0),
('B0032', 'IT', 82, 67, 49, 55, 55, 56, 52, 58, 0, 0, 54, 0, 6),
('B0033', 'IT', 84, 70, 54, 52, 53, 56, 52, 54, 0, 0, 53, 0, 10),
('B0034', 'IT', 71, 60, 48, 53, 55, 50, 50, 59, 0, 0, 53, 0, 6),
('B0035', 'IT', 86, 73, 52, 54, 56, 49, 53, 51, 0, 0, 52, 0, 21),
('B0036', 'IT', 72, 72, 49, 47, 54, 53, 50, 52, 0, 0, 51, 0, 3),
('B0037', 'IT', 67, 67, 49, 54, 52, 53, 53, 41, 0, 0, 50, 3, 18),
('B0038', 'IT', 84, 65, 49, 48, 48, 49, 50, 51, 0, 0, 49, 0, 10),
('B0039', 'IT', 85, 75, 58, 61, 71, 68, 70, 65, 0, 0, 66, 0, 0),
('B0040', 'IT', 77, 81, 0, 0, 65, 66, 68, 70, 0, 0, 67, 0, 0),
('B0022', 'IT', 81, 73, 0, 0, 65, 59, 67, 71, 0, 0, 66, 0, 0);

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
('B0010', 1, 'Students Council', 'Public Relations', '', '', '', '', 'Ladies Representative of College'),
('B0011', 1, 'IEEE', 'Technical Head', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0012', 0, 'NA', 'NA', 'NA', 'NA', 'Na', 'NA', 'Won 1st prize in Intercollegiate paper presentation competition.'),
('B0014', 1, 'iTantra', 'Volunteer', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0015', 0, 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0016', 1, 'IEEE', 'Secretary', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0017', 2, 'iTantra', 'Volunteer', 'itantra', 'Secretary', 'NA', 'NA', 'NA'),
('B0018', 0, 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0019', 0, 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0020', 1, 'iTantra', 'PRO', 'NA', 'NA', 'NA', 'NA', 'NA'),
('B0013', 1, 'ITANTRA', 'INFRA. HEAD', '', '', '', '', ''),
('B0021', 1, 'ITANTRA', 'TREASURER', '', '', '', '', ''),
('B0023', 1, 'ITANTRA', 'LOGISTICS ', '', '', '', '', ''),
('B0024', 2, 'ITANTRA', 'CHAIRMAN', 'CSI', 'SECRETARY', '', '', ''),
('B0025', 0, '0', '0', '0', '0', '0', '0', ''),
('B0026', 0, '0', '0', '0', '0', '0', '0', ''),
('B0027', 0, '0', '0', '0', '0', '0', '0', ''),
('B0028', 0, '0', '0', '0', '0', '0', '0', ''),
('B0029', 1, 'ITANTRA', 'PHOTOGRAPHY', '', '', '', '', ''),
('B0031', 1, 'ITANTRA', 'MARKETING SUB-HEAD', '', '', '', '', ''),
('B0032', 1, 'MS', 'MARKETING HEAD', '', '', '', '', ''),
('B0037', 1, 'ITANTRA', 'LOGISTICS ', '', '', '', '', ''),
('B0038', 0, '0', '0', '0', '0', '0', '0', 'PERFORMED AT VARIOUS FASHION SHOW EVENTS.'),
('B0039', 1, 'ITANTRA', 'DESIGN HEAD', '', '', '', '', ''),
('B0040', 0, '0', '0', '0', '0', '0', '0', 'PARTICIPATED AT VARIOUS CULTURAL EVENTS.'),
('B0022', 1, 'ITANTRA', 'TREASURER SUB-HEAD', '', '', '', '', ''),
('S001', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notdet`
--

CREATE TABLE IF NOT EXISTS `notdet` (
  `d_t` varchar(50) DEFAULT NULL,
  `notify` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notdet`
--

INSERT INTO `notdet` (`d_t`, `notify`) VALUES
('2015-04-24', 'Defaulters meet at 10');

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
('B001', 'SHAH KHANJAN DINESH', '1', 'B1', 9594002468, '403, JINESHWAR DARSHAN, DEVCHAND NAGAR, NEAR JAIN TEMPLE, BHAYANDER(WEST). THANE-401101', '403, JINESHWAR DARSHAN, DEVCHAND NAGAR, NEAR JAIN TEMPLE, BHAYANDER(WEST). THANE-401101', 21, '1993-03-08', 'khanjan.engineer@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f312e6a7067),
('B0010', 'RATTI ISHA KAUR', '10', 'B1', 9819850683, '"6/136, HAZARA C.H.S,M.H.B COLONY,OPP. EVERARD NGAR,\r\nCHUNABHATTI, SION, MUMBAI-22."\r\n', '"6/136, HAZARA C.H.S,M.H.B COLONY,OPP. EVERARD NGAR,\r\nCHUNABHATTI, SION, MUMBAI-22."\r\n', 21, '1993-10-23', 'ishakaur163@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31302e6a7067),
('B0011', 'RAJPUT DWARKESH MAHESH', '11', 'B1', 9833208428, 'A/602, \r\nShreeji Complex, \r\nLaxman Mhatre Road, \r\nBorivali(w) \r\nMumbai-400103\r\n', 'A/602, \r\nShreeji Complex, \r\nLaxman Mhatre Road, \r\nBorivali(w) \r\nMumbai-400103\r\n', 21, '1993-02-10', 'dwarkesh_rajput@yahoo.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f31312e706e67),
('B0012', 'SHARMA VARUN RAJENDRA', '12', 'B1', 9833396669, 'B-103 PRATHAMESH AVENUE,DATT-MANDIR ROAD,NEAR SANGEETA THEATRE,MALAD(EAST),MUMBAI-400097.\r\n', 'B-103 PRATHAMESH AVENUE,DATT-MANDIR ROAD,NEAR SANGEETA THEATRE,MALAD(EAST),MUMBAI-400097.\r\n', 21, '0000-00-00', 'sharma15varun@yahoo.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f31322e706e67),
('B0013', 'SARVAIYA SOUMIL PRAMOD', '13', 'B1', 9930025758, '101/1A, NARAYAN NIWAS ,PODDAR ROAD, MALAD(EAST),MUMBAI -400097\r\n', '101/1A, NARAYAN NIWAS ,PODDAR ROAD, MALAD(EAST),MUMBAI -400097\r\n', 21, '1993-09-02', 'soumil.sarvaiya@gmail.com793.5', 'male', 0x2e2e2f6e65772f75706c6f6164732f32322e6a7067),
('B0014', 'AGARWAL SHEFALI DEEPAK', '14', 'B1', 9004552110, '1601 Orchid CHS, Vasant Valley, Filmcity road, Malad-E, Mumbai- 400097\r\n', '1601 Orchid CHS, Vasant Valley, Filmcity road, Malad-E, Mumbai- 400097\r\n', 21, '1993-01-25', 'shefali.agarwal251@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31342e706e67),
('B0015', 'SHAH NIDHI JAYESH', '15', 'B1', 8237610924, '603,goyal plaza,carter rd(4),borivali(east),mumbai-400066\r\n', '603,goyal plaza,carter rd(4),borivali(east),mumbai-400066\r\n', 21, '1993-08-25', 'nish258@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31352e6a7067),
('B0016', 'MASAND ROSHNI RAJA', '16', 'B1', 9920165723, '"201/202 Samruddhi, \r\nPlot No 23,\r\nJai Hind CHS,\r\nN-S Road No. 11,\r\nJVPD Scheme,\r\nJuhu,\r\nMumbai-400049"\r\n', '"201/202 Samruddhi, \r\nPlot No 23,\r\nJai Hind CHS,\r\nN-S Road No. 11,\r\nJVPD Scheme,\r\nJuhu,\r\nMumbai-400049"\r\n', 21, '1993-11-30', 'roshni.masand30@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31362e6a7067),
('B0017', 'SHAH SAPNA NAINISH', '17', 'B1', 9619767172, '"E-102, PREM APARTMENT,\r\nSAIBABA NAGAR,\r\nBORIVALI - WEST,\r\nMUMBAI - 400092."\r\n', '"E-102, PREM APARTMENT,\r\nSAIBABA NAGAR,\r\nBORIVALI - WEST,\r\nMUMBAI - 400092."\r\n', 21, '1993-01-09', 'shah.sapna05@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31372e6a7067),
('B0018', 'POOJARY SHASHANK CHANDAYA', '18', 'B1', 9619566619, '401 moti 2 devidas lane opp st lawrence school borivali west mumbai 400103\r\n', '401 moti 2 devidas lane opp st lawrence school borivali west mumbai 400103\r\n', 21, '1993-09-15', 'shashankmscs@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f31382e6a7067),
('B0019', 'CHHABRA ISHITA NARESH', '19', 'B1', 9769769089, '3B-106 DHEERAJ ENCLAVE\r\nOFF WESTERN EXPRESS HIGHWAY\r\nBEHIND ANNEXE MALL\r\nBORIVALI(EAST)\r\nMUMBAI-400066"\r\n', '3B-106 DHEERAJ ENCLAVE\r\nOFF WESTERN EXPRESS HIGHWAY\r\nBEHIND ANNEXE MALL\r\nBORIVALI(EAST)\r\nMUMBAI-400066"\r\n', 21, '1993-02-09', 'ishitachhabra29@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f31392e6a7067),
('B002', 'SHARMA POOJA OMPRAKASH', '2', 'B1', 9664681153, '5, Sharma Nivas, Vasant Mistry Chawl, Samant Wadi, Sonawala Road, Goregaon East, Mumbai - 400063\r\n', '5, Sharma Nivas, Vasant Mistry Chawl, Samant Wadi, Sonawala Road, Goregaon East, Mumbai - 400063\r\n', 21, '0000-00-00', 'poojasharma93@yahoo.co.in', 'female', 0x2e2e2f6e65772f75706c6f6164732f322e6a7067),
('B0020', 'NEGANDHI DARSHAN SUNIL', '20', 'B1', 9111966511, 'D/8,KAILASH NAGAR, SHANKERLANE , MUMBAI - 400067.\r\n', 'D/8,KAILASH NAGAR, SHANKERLANE , MUMBAI - 400067.', 21, '1993-03-23', 'darshannegandhi@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32302e6a7067),
('B0021', 'NAIR SURAJ SUNIL', '21', 'B2', 9664530034, '206,Bhawani Tower,Bhawani Nagar,Marol Maroshi Road,Andheri(E),Mumbai-400059', '206,Bhawani Tower,Bhawani Nagar,Marol Maroshi Road,Andheri(E),Mumbai-400059', 22, '1993-12-23', 'surajsnair23@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32312e6a7067),
('B0022', 'AMARNANI KAJAL DEEPAK', '22', 'B2', 8390958002, '105, Neelkanth Co.Hsg, b wing,Shivdham complex,Ambarnath(east)-421501"', '105, Neelkanth Co.Hsg, b wing,Shivdham complex,Ambarnath(east)-421501"', 22, '1993-12-29', 'kajal.amarnani@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f32322e4a5047),
('B0023', 'MANIAR RAJ ASHOK', '23', 'B2', 9028636690, 'D-104, DEV NAGAR APT., NEAR BHATIA SCHOOL, SAI BABA NAGAR, KANDIVALI (WEST) - 400067\r\n', 'D-104, DEV NAGAR APT., NEAR BHATIA SCHOOL, SAI BABA NAGAR, KANDIVALI (WEST) - 400067\r\n', 21, '1994-07-01', 'rajmaniar955@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32332e6a7067),
('B0024', 'VORA AKASH MANISH', '24', 'B2', 8080280100, '"B-37, Shri Kedarnath CHS,\r\nShimpoli road, near Soniwadi,\r\nBorivali west,\r\nMumbai 400092."\r\n', '"B-37, Shri Kedarnath CHS,\r\nShimpoli road, near Soniwadi,\r\nBorivali west,\r\nMumbai 400092."\r\n', 22, '1993-10-21', 'akash.vora93@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32342e6a7067),
('B0025', 'BAGADIA RUSHABH KAMLESH', '25', 'B2', 9769050340, 'B/15 PRABHU KRUPA, ZAVERI BAUG, S.V. ROAD, OPP. KANDIVALI MTNL, KANDIVALI (W), MUMBAI - 400067\r\n', 'B/15 PRABHU KRUPA, ZAVERI BAUG, S.V. ROAD, OPP. KANDIVALI MTNL, KANDIVALI (W), MUMBAI - 400067\r\n', 22, '1993-08-22', 'rushabh.bagadia@yahoo.co.in', 'male', 0x2e2e2f6e65772f75706c6f6164732f32352e706e67),
('B0026', 'RACCA KARAN JITENDRA', '26', 'B2', 8879491059, 'B22 , Ankur Building , new Anand Nagar , Vakola Bridge road , Santacruz(e) , Mumbai-400055\r\n', 'Racca Farm , Hanumanwadi , Makhmalabad road , Panchvati , Nashik-422003\r\n', 22, '1993-11-20', 'karanracca@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32362e6a7067),
('B0027', 'HAZARI SAGAR DAYAL', '27', 'B2', 9403333570, '302,PUSHKAR APT,KALYANIS RESIDENTIAL COMPLEX,NEAR NEW TELEPHONE EXCHANGE,ULHASNAGAR-421001\r\n', '302,PUSHKAR APT,KALYANIS RESIDENTIAL COMPLEX,NEAR NEW TELEPHONE EXCHANGE,ULHASNAGAR-421001\r\n', 23, '1993-11-25', 'sagar_hazariii@yahoo.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32372e6a7067),
('B0028', 'TALREJA LAKSHIT SUDHIR', '28', 'B2', 9930356006, 'A-12, 504, SIDDHARTH NAGAR, KHATAU MILL COMPOUND, NEAR BROADWAY CINEMA, BORIVALI(E). MUMBAI- 400066.\r\n', 'A-12, 504, SIDDHARTH NAGAR, KHATAU MILL COMPOUND, NEAR BROADWAY CINEMA, BORIVALI(E). MUMBAI- 400066.\r\n', 22, '1993-11-27', 'ltalreja@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32382e6a7067),
('B0029', 'RAVAL GOPESH JYOTIN', '29', 'B2', 9967145774, '3/1, SHASHIKANT NAGAR ,STATION ROAD, BHAYANDER(WEST).THANE-401101\r\n', '3/1, SHASHIKANT NAGAR ,STATION ROAD, BHAYANDER(WEST).THANE-401101\r\n', 23, '1991-02-14', 'graval77@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f32392e6a7067),
('B003', 'GOSALIA JAYNAM DEEPAK', '3', 'B1', 9821788711, '"193\r\nBhagwati Niwas, \r\nawahar Nagar,\r\nRoad No 13, \r\nGoregaon (W)\r\nMumbai - 400104"\r\n', '"193\r\nBhagwati Niwas, \r\nawahar Nagar,\r\nRoad No 13, \r\nGoregaon (W)\r\nMumbai - 400104"\r\n', 21, '1993-07-06', 'jaynam999@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f332e706e67),
('B0030', 'GOYANI NISHANT CHETAN', '30', 'B2', 9920626412, '403/Om Manan,Park Road,Vile Parle east,Mumbai-400057.\r\n', '403/Om Manan,Park Road,Vile Parle east,Mumbai-400057.\r\n', 22, '1993-03-14', 'nishant.goyani503@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33302e6a7067),
('B0031', 'DESAI AASHNA JATIN', '31', 'B2', 9076334468, 'B-302, RIDDHI APT, CHIKUWADI, OFF.LINK ROAD, BORIVALI (WEST) MUMBAI-400092\r\n', 'B-302, RIDDHI APT, CHIKUWADI, OFF.LINK ROAD, BORIVALI (WEST) MUMBAI-400092\r\n', 23, '1992-02-05', 'DESAI.AASHNA0205@GMAIL.COM', 'female', 0x2e2e2f6e65772f75706c6f6164732f33312e6a7067),
('B0032', 'WADHWANI SURAJ HARESH', '32', 'B2', 8286188373, '1A/2 SAHYADRI, ASHA NAGAR , THAKUR COMPLEX, KANDIVALI EAST , MUMBAI 400101\r\n', '1A/2 SAHYADRI, ASHA NAGAR , THAKUR COMPLEX, KANDIVALI EAST , MUMBAI 400101\r\n', 22, '1993-09-28', 'wadhwanisuraj1993@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33322e6a7067),
('B0033', 'SHAHARI SHRADDHA NANIK', '33', 'B2', 9004646201, '"63,D/8,SAI PRASAD CHS,GORAI-1,BORIVALI(WEST),\r\nMUMBAI-400091."\r\n', '"63,D/8,SAI PRASAD CHS,GORAI-1,BORIVALI(WEST),\r\nMUMBAI-400091."\r\n', 22, '1993-03-26', 'sharu.teddy@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f33332e706e67),
('B0034', 'PARDASANI CHIRAG DEVDAS', '34', 'B2', 9920384198, 'A/401 leo apartment, jankalyan nagar , marve road , malad(west) , mumbai -400095\r\n', 'A/401 leo apartment, jankalyan nagar , marve road , malad(west) , mumbai -400095\r\n', 22, '1993-11-26', 'pardasanichirag2@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33342e6a7067),
('B0035', 'KOTALWAR PRATIK SHRIKANT', '35', 'B2', 7588211975, '304, 3rd floor,A wing, SRA buiding , shastri nagar,near mig cricket club, bandra (E),Mumbai, Maharashtra-400051', 'KRISHNAI,Behind Axis Bank,Khardekar Stop, Ausa Road,Latur, MAHARASHTRA-413512', 23, '1993-12-28', 'kotalwarpratik@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33352e6a7067),
('B0036', 'PUNJABI HITESH PRAKASH', '36', 'B2', 8652318346, 'Ms bldg no 7/246,chembur colony mumbai-400074\r\n', 'Ms bldg no 7/246,chembur colony mumbai-400074\r\n', 22, '1993-12-09', 'hitesh_cranky@yahoo.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33362e6a7067),
('B0037', 'THAKUR AKASH KAMAL', '37', 'B2', 9022558726, '"BK-991/11\r\nsection 20\r\nSection road\r\nulhasnagar-421003\r\nThane"\r\n', '"BK-991/11\r\nsection 20\r\nSection road\r\nulhasnagar-421003\r\nThane"\r\n', 22, '1993-12-03', 'akt1203@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33372e706e67),
('B0038', 'MUKTA RAJ ASHOK', '38', 'B2', 7709772277, '"504, Vinod Apt.,\r\nNetaji Area, \r\nUlhasnagar - 421004"\r\n', '"504, Vinod Apt.,\r\nNetaji Area, \r\nUlhasnagar - 421004"\r\n', 22, '1993-08-24', 'rm7890@live.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f33382e6a7067),
('B0039', 'RAYALI TASLEEM NAZMUDIN', '39', 'B2', 9769592150, 'C-703 ATLANTIC SAGAR CITY,VP ROAD, ANDHERI (WEST) MUMBAI 400058\r\n', 'C-703 ATLANTIC SAGAR CITY,VP ROAD, ANDHERI (WEST) MUMBAI 400058\r\n', 21, '1994-04-02', 'tashu.rayali@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f33392e706e67),
('B004', 'CHUDASAMA SHREYA SANJAY', '4', 'B1', 9930601210, '301,SEC-4,A-4,SHANTINAGAR,MIRAROAD(EAST)\r\n', '301,SEC-4,A-4,SHANTINAGAR,MIRAROAD(EAST)\r\n', 21, '1994-01-16', 'CHUDASAMA.SHREYA16@GMAIL.COM', 'female', 0x2e2e2f6e65772f75706c6f6164732f342e6a7067),
('B0040', 'SHETTY RATIK RATNAKAR', '40', 'B2', 9699988111, 'B/14 DAULATRAO DESAI NAGAR CHSL, MODEL TOWN, SEVEN BUNGALOWS, ANDHERI (WEST), MUMBAI-53.\r\n', 'B/14 DAULATRAO DESAI NAGAR CHSL, MODEL TOWN, SEVEN BUNGALOWS, ANDHERI (WEST), MUMBAI-53.\r\n', 22, '1993-10-08', 'ratikshetty@gmail.com', 'male', 0x2e2e2f6e65772f75706c6f6164732f34302e6a7067),
('B005', 'KARTHIKA SURESH', '5', 'B1', 8879565944, '102/16,Western Railway Colony,Matunga Road,Mumbai -19\r\n', '102/16,Western Railway Colony,Matunga Road,Mumbai -19\r\n', 21, '1994-03-18', 'karthika318@yahoo.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f352e6a7067),
('B006', 'UDESHI MANJARI PARESH', '6', 'B1', 9870137955, '601, Casablanca, Skyline Oasis, Premier Road, Ghatkopar(West), Mumbai-400086\r\n', '601, Casablanca, Skyline Oasis, Premier Road, Ghatkopar(West), Mumbai-400086\r\n', 21, '1993-07-11', 'manjariudeshi07@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f362e706e67),
('B007', 'JAIN SHREYA PRAKASHCHANDRA', '7', 'B1', 9022103000, '1303 kanchan tower sector-25 plot no 9 , Nerul, Navi Mumbai-400706\r\n', '1303 kanchan tower sector-25 plot no 9 , Nerul, Navi Mumbai-400706\r\n', 21, '1994-02-18', 'shreya1894.jain@gmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f372e6a7067),
('B008', 'GUPTA RUHI PRAMOD', '8', 'B1', 9757399940, '"B-703,LOTUS,\r\nHIRANANDANI GARDENS,\r\nPOWAI,\r\nMUMBAI-400076."\r\n', '"B-703,LOTUS,\r\nHIRANANDANI GARDENS,\r\nPOWAI,\r\nMUMBAI-400076."\r\n', 21, '1994-04-11', 'ruhi_41193@hotmail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f382e6a7067),
('B009', 'SAYED SANAA SALIM', '9', 'B1', 9594310552, '96 Dimtimkar rd,Nagpada,Haji bldg,1st flr rmno-65,Mumbai-400008.\r\n', '96 Dimtimkar rd,Nagpada,Haji bldg,1st flr rmno-65,Mumbai-400008.\r\n', 21, '1993-08-28', 'sanaa.sayyed@ymail.com', 'female', 0x2e2e2f6e65772f75706c6f6164732f392e6a7067),
('S001', 'trsycv', '1', 'B1', 43567890, 'rdtfyguhijokp', 'dyufghijo', 21, '1993-12-12', 'dtfyjgk', 'male', 0x2e2e2f6e65772f75706c6f6164732f);

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
('ABK001', 'Arun Kulkarni', 'DSIP', '6'),
('CA001', 'Chetan Agarwal', 'GAP', '8'),
('NJ001', 'Nikilesh Joshi', 'ISMDR', '8'),
('NJ001', 'Nikilesh Joshi', 'SM', '7'),
('GP001', 'Gopal', 'SPM', '8'),
('SN001', 'Sachi ', 'ITME', '5'),
('BJ001', 'Bhushan', 'CC', '8');

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
('ABK001', 'Arun Kulkarni', '1', 9833876915, 'kkkarun@yahoo.com', 'DSIP,MPMC', 'Head of Department(IT)'),
('AM001', 'Anjali Malviya', '1', 9619764351, 'anjali.malviya@gmail', 'MOEC,DSIP', 'Dean(AICTE)'),
('BJ001', 'Bhushan Jadhav', '1', 9702868662, 'bhushan.jadhav1@yaho', 'CC,MEIT,OSSL,OST', 'Assistant Professor'),
('CA001', 'Chetan Agarwal', '1', 9820793137, 'chetan78@gmail.com', 'GAP,SE,STQA', 'Assistant Professor'),
('GP001', 'Gopal Pardesi', '1', 9833119040, 'gopal.pardesi@rediff', 'SPM,MPMC,WN', 'Professor'),
('GT001', 'Dr.Gopakumaran T. Thampi', '1', 9594696888, 'gtthampi@yahoo.com', 'C++,CGVRS,ICT', 'PRINCIPAL'),
('KS001', 'Kumkum Saxena', '1', 9819727073, 'kumkum.saxena@gmail.', 'PMRC,DSA', 'Professor'),
('NJ001', 'Nikilesh Joshi', '1', 9619659411, 'nikilesh.joshi@gmail', 'SM,ISMDR', 'Assistant Professor'),
('SKP001', 'Sanjay Pandey', '1', 7718832101, 'sanjay.pandey@outloo', 'ISMDR,NTDD', 'Assistant Professor'),
('SN001', 'Sachi Natu', '1', 9967232052, 'sachi_natu@yahoo.com', 'ITME,GAP', 'Assistant Professor'),
('SS001', 'Sanober Sheik', '1', 9869874419, 's_sheik@gmail.com', 'IP,AT', 'Assistant Professor');

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
