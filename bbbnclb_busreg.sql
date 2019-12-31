-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2019 at 09:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbbnclb_busreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `facid` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`facid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`facid`, `username`, `userid`, `password`) VALUES
('BusAdmin', 'BusAdmin', 'BusAdmin', 'BusAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `busroutes`
--

CREATE TABLE IF NOT EXISTS `busroutes` (
  `BusrouteNames` varchar(150) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BusrouteNumbers` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `busroutes`
--

INSERT INTO `busroutes` (`BusrouteNames`, `id`, `BusrouteNumbers`) VALUES
('Choppadandi', 1, 1),
('Geetha Bhavan', 2, 2),
('Saptagiri Colony', 3, 3),
('Gopi Krishna SVJC', 4, 4),
('Hostel(Girls) MM Thota', 5, 5),
('Husnabad', 6, 6),
('Huzurabad', 7, 7),
('Jagitial', 8, 8),
('Kothayashwada', 9, 9),
('Old Bypass', 10, 10),
('Padma Nagar Petrol Pump', 11, 11),
('Peddapally', 12, 12),
('Hosing Board Colony', 13, 13),
('Vidya Nagar', 14, 14),
('Siricilla', 15, 15),
('Telephone Quarters and Kattarampoor', 16, 16),
('Vegurupally', 17, 17),
('Vemulawada', 18, 18),
('Kothapally', 19, 19);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seditdate` date NOT NULL,
  `eeditdate` date NOT NULL,
  `modifydate` int(11) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `seditdate`, `eeditdate`, `modifydate`, `message`) VALUES
(1, '2018-07-08', '2020-08-31', 1, 'Submission Application form after registration to transport department 09/09/2018                                                                                                                                                                                                                                                                     ');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE IF NOT EXISTS `studentregistration` (
  `Enroll_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hall_Ticket_No` varchar(10) DEFAULT NULL,
  `Name_Student` varchar(60) DEFAULT NULL,
  `Course` varchar(10) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Year` varchar(15) NOT NULL,
  `Academic_Year` varchar(15) DEFAULT NULL,
  `Parent_Name` varchar(60) DEFAULT NULL,
  `HouseNo` varchar(50) DEFAULT NULL,
  `Street_Village` varchar(100) DEFAULT NULL,
  `Mandal` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Pincode` varchar(10) DEFAULT NULL,
  `Email_Id` varchar(100) DEFAULT NULL,
  `Student_Phno` varchar(15) DEFAULT NULL,
  `Parent_Phno` varchar(15) DEFAULT NULL,
  `Rout_No` varchar(150) DEFAULT NULL,
  `Bus_Stage_Name` varchar(100) DEFAULT NULL,
  `Blood_Group` varchar(15) DEFAULT NULL,
  `Account_Status` varchar(10) DEFAULT NULL,
  `Bus_Fee` varchar(15) DEFAULT NULL,
  `Date_of_Registration` datetime DEFAULT NULL,
  `ip_Address` varchar(50) DEFAULT NULL,
  `Date_of_Birth` varchar(50) DEFAULT NULL,
  `Remarks1` varchar(100) DEFAULT NULL,
  `Remarks2` varchar(100) DEFAULT NULL,
  `Remarks3` varchar(100) DEFAULT NULL,
  `Remarks4` varchar(100) DEFAULT NULL,
  `Remarks5` varchar(100) DEFAULT NULL,
  `Remarks6` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Enroll_Id`),
  UNIQUE KEY `Hall_Ticket_No` (`Hall_Ticket_No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='studentregistration' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `studentregistration`
--

