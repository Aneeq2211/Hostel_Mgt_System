-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2019 at 03:08 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` varchar(5) NOT NULL,
  `hostel_id` varchar(5) DEFAULT NULL,
  `emp_type` varchar(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `emp_no` varchar(10) DEFAULT NULL,
  `emp_doj` date DEFAULT NULL,
  `emp_dob` date DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `hostel_id` (`hostel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `hostel_id`, `emp_type`, `gender`, `emp_name`, `password`, `emp_no`, `emp_doj`, `emp_dob`) VALUES
('WB01', 'B01', 'warden', 'M', 'Kumar', 'kumar123', '9876848832', '2009-10-09', '1982-05-02'),
('WB02', 'B02', 'warden', 'M', 'Gangodhar', 'gang65', '9876838261', '2007-01-09', '1979-06-01'),
('MB05', 'B01', 'manager', 'M', 'Sagar', 'saga654', '8473826172', '2008-09-14', '1985-06-23'),
('MG14', 'G01', 'manager', 'F', 'kamala r', 'kama876', '6561526717', '2010-09-07', '1989-11-09'),
('WG01', 'G01', 'warden', 'F', 'rama', 'rama873', '7837261816', '2012-05-12', '1988-08-12'),
('WG02', 'G01', 'warden', 'F', 'girija', 'giri124', '9872517381', '2014-09-08', '1987-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `fees_id` varchar(5) NOT NULL,
  `usn` varchar(10) DEFAULT NULL,
  `reg_id` varchar(5) DEFAULT NULL,
  `total_fee` int(10) DEFAULT NULL,
  `fee_paid` int(10) DEFAULT NULL,
  `balance_fee` int(10) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  PRIMARY KEY (`fees_id`),
  KEY `usn` (`usn`),
  KEY `reg_id` (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `usn`, `reg_id`, `total_fee`, `fee_paid`, `balance_fee`, `paid_date`) VALUES
('123', '1ga17cs032', '10389', 70000, 50000, 20000, '2019-05-12'),
('143', '1ga17cs063', '10543', 70000, 20000, 50000, '2019-09-12'),
('176', '1ga17is053', '13421', 70000, 60000, 10000, '2019-04-17'),
('198', '1ga16cs014', '12876', 70000, 60000, 10000, '2019-01-18'),
('102', '1ga16cs087', '17532', 70000, 20000, 50000, '2019-08-09'),
('190', '1ga17me015', '10653', 70000, 20000, 50000, '2019-06-02'),
('128', '1ga18is095', '12098', 70000, 40000, 20000, '2019-02-19'),
('166', '1ga17ee011', '18723', 70000, 10000, 60000, '2019-04-19'),
('144', '1ga18ec018', '18723', 70000, 15000, 55000, '2019-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

DROP TABLE IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
  `hostel_id` varchar(5) NOT NULL,
  `manager_id` varchar(5) NOT NULL,
  `hostel_name` varchar(10) NOT NULL,
  `no_of_rooms` bigint(200) NOT NULL,
  `vacant_rooms` bigint(200) NOT NULL,
  PRIMARY KEY (`hostel_id`,`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `manager_id`, `hostel_name`, `no_of_rooms`, `vacant_rooms`) VALUES
('B01', 'MB05', 'Gat-Boys', 20, 5),
('G01', 'MG14', 'Gat_Girls', 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` varchar(5) NOT NULL,
  `hostel_id` varchar(5) DEFAULT NULL,
  `room_type` varchar(10) DEFAULT NULL,
  `no_of_beds` int(20) DEFAULT NULL,
  `vacant_beds` int(20) DEFAULT NULL,
  PRIMARY KEY (`room_id`),
  KEY `hostel_id` (`hostel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hostel_id`, `room_type`, `no_of_beds`, `vacant_beds`) VALUES
('a01', 'G01', 'sharing', 4, 2),
('a11', 'G01', 'sharing', 2, 0),
('a09', 'G01', 'nonsharing', 1, 0),
('x01', 'B01', 'sharing', 3, 1),
('x10', 'B01', 'nonsharing', 1, 0),
('x14', 'B01', 'sharing', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(10) NOT NULL,
  `reg_id` varchar(5) NOT NULL,
  `room_id` varchar(5) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sem` int(1) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `parent_no` varchar(10) DEFAULT NULL,
  `m_name` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` char(3) NOT NULL,
  `upated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`usn`,`reg_id`),
  KEY `room_id` (`room_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `reg_id`, `room_id`, `sname`, `sem`, `branch`, `gender`, `contact_no`, `parent_no`, `m_name`, `f_name`, `dob`, `blood_group`, `upated_on`) VALUES
('1ga17cs032', '10389', 'a01', 'Bhavana R', 5, 'cse', 'F', '9731523079', '9988775431', 'Aarthi', 'Ramesh', '1999-08-23', 'B+', '2019-11-14 00:37:30'),
('1ga17cs063', '10543', 'a01', 'Hima G', 5, 'cse', 'F', '8792513629', '9113273805', 'Manjula G V', 'Gopal', '1999-10-04', 'B+', '2019-11-14 00:37:30'),
('1ga17is053', '13421', 'a11', 'Anusha D', 3, 'ise', 'F', '8765498653', '9876313535', 'Amala', 'Suresh', '2000-05-10', 'A-', '2019-11-14 00:37:30'),
('1ga16cs014', '12876', '407', 'Aneeq Ul Waseeq', 5, 'CSE', 'M', '8303882637', '7310045485', 'Nameera', 'Waseeq', '1998-11-22', 'O+', '2019-11-14 00:37:30'),
('1ga16cs087', '17532', 'x14', 'Shravan Bhat', 7, 'cse', 'M', '9865678765', '7685357865', 'Shanthi', 'Arun Bhat', '1998-05-18', 'AB+', '2019-11-14 00:37:30'),
('1ga17me015', '10653', 'x01', 'Ayush Sharma', 5, 'me', 'M', '7795919133', '9844723453', 'Aruna', 'Anil Sharma', '1999-06-17', 'O-', '2019-11-14 00:37:30'),
('1ga18is095', '12098', 'a09', 'Varshitha', 3, 'ise', 'F', '7019765432', '7865468757', 'Bhanu G', 'Harsha', '2000-03-20', 'B+', '2019-11-14 00:37:30'),
('1ga18ec018', '10456', 'x10', 'Akshay Dwivedi', 3, 'ece', 'M', '6263453467', '8899764321', 'Sushma S', 'Karan Dwivedi', '2000-03-09', 'AB+', '2019-11-14 00:37:30'),
('1ga17ee011', '18723', 'a11', 'harshitha', 5, 'eee', 'F', '8799292929', '6262617188', 'manjula', 'girish', '1999-02-27', 'O-', '2019-11-14 00:37:30'),
('1ga17cs009', '10022', '10', 'Aman', 5, 'CSE', 'M', '9876543210', '9988776655', 'Parvati', 'Ishwar', '2000-03-03', 'A+', '2019-11-14 00:37:30');

--
-- Triggers `student`
--
DROP TRIGGER IF EXISTS `last_update`;
DELIMITER $$
CREATE TRIGGER `last_update` BEFORE UPDATE ON `student` FOR EACH ROW BEGIN
UPDATE student
SET upated_on=CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE IF NOT EXISTS `visitor` (
  `vis_id` varchar(5) NOT NULL,
  `vssn` varchar(10) DEFAULT NULL,
  `vis_name` varchar(20) DEFAULT NULL,
  `vis_type` varchar(20) DEFAULT NULL,
  `vis_contact` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`vis_id`),
  KEY `vssn` (`vssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`vis_id`, `vssn`, `vis_name`, `vis_type`, `vis_contact`) VALUES
('12000', '1ga17cs014', 'Mohd. Waseeq', 'Father', '9621128890'),
('8546', '1ga17cs008', 'Sankalp', 'Brother', '9654123802');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
