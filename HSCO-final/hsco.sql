-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2012 at 03:35 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsco`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `UniqueID` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(24) NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(24) NOT NULL,
  `Impacted` varchar(24) NOT NULL,
  `Domain` int(11) NOT NULL,
  PRIMARY KEY (`UniqueID`),
  UNIQUE KEY `UniqueID` (`UniqueID`),
  UNIQUE KEY `UniqueID_4` (`UniqueID`),
  KEY `UniqueID_2` (`UniqueID`),
  KEY `UniqueID_3` (`UniqueID`),
  KEY `UniqueID_5` (`UniqueID`),
  KEY `Domain` (`Domain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity_by_institute`
--

CREATE TABLE IF NOT EXISTS `activity_by_institute` (
  `Activity_UniqueID` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(24) NOT NULL,
  PRIMARY KEY (`Activity_UniqueID`),
  UNIQUE KEY `Activity_UniqueID` (`Activity_UniqueID`),
  KEY `Activity_UniqueID_2` (`Activity_UniqueID`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity_volunteered_by`
--

CREATE TABLE IF NOT EXISTS `activity_volunteered_by` (
  `Activity_UniqueID` int(11) NOT NULL,
  `Volunteer_UniqueID` int(11) NOT NULL,
  PRIMARY KEY (`Activity_UniqueID`),
  UNIQUE KEY `Activity_UniqueID_2` (`Activity_UniqueID`),
  KEY `Activity_UniqueID` (`Activity_UniqueID`),
  KEY `Volunteer_UniqueID` (`Volunteer_UniqueID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `central_executive_committee`
--

CREATE TABLE IF NOT EXISTS `central_executive_committee` (
  `Term` varchar(24) NOT NULL,
  `Name` varchar(24) NOT NULL,
  `Designation` varchar(24) NOT NULL,
  PRIMARY KEY (`Designation`),
  UNIQUE KEY `Designation` (`Designation`),
  KEY `Designation_2` (`Designation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `UniqueID` int(11) NOT NULL,
  `Name` varchar(24) NOT NULL,
  PRIMARY KEY (`UniqueID`),
  UNIQUE KEY `UniqueID` (`UniqueID`),
  KEY `UniqueID_2` (`UniqueID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `Mode` varchar(24) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Incoming_TransactionID` int(11) NOT NULL,
  PRIMARY KEY (`Incoming_TransactionID`),
  UNIQUE KEY `Incoming_TransactionID` (`Incoming_TransactionID`),
  KEY `Incoming_TransactionID_2` (`Incoming_TransactionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation_by`
--

CREATE TABLE IF NOT EXISTS `donation_by` (
  `Name` varchar(24) NOT NULL,
  `Contact` varchar(24) NOT NULL,
  `DD_no` int(11) NOT NULL,
  PRIMARY KEY (`DD_no`),
  UNIQUE KEY `DD_no` (`DD_no`),
  KEY `DD_no_2` (`DD_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation_info`
--

CREATE TABLE IF NOT EXISTS `donation_info` (
  `Donation_Incoming_TransactionID` int(11) NOT NULL,
  `P_dd_no` int(11) NOT NULL,
  PRIMARY KEY (`Donation_Incoming_TransactionID`),
  UNIQUE KEY `Donation_Incoming_TransactionID` (`Donation_Incoming_TransactionID`),
  KEY `Donation_Incoming_TransactionI_2` (`Donation_Incoming_TransactionID`),
  KEY `P_dd_no` (`P_dd_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `Term` varchar(24) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Outgoing_TransactionID` int(11) NOT NULL,
  `on_domain` int(11) NOT NULL,
  PRIMARY KEY (`Outgoing_TransactionID`),
  UNIQUE KEY `Outgoing_TransactionID` (`Outgoing_TransactionID`),
  KEY `Outgoing_TransactionID_2` (`Outgoing_TransactionID`),
  KEY `on_domain` (`on_domain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `Account_no` int(11) NOT NULL,
  `Total_Balance` int(11) NOT NULL,
  `Bank_name` varchar(24) NOT NULL,
  PRIMARY KEY (`Account_no`),
  UNIQUE KEY `Account_no` (`Account_no`),
  KEY `Account_no_2` (`Account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financial_info`
--

CREATE TABLE IF NOT EXISTS `financial_info` (
  `Account_no` int(11) NOT NULL,
  `Outgoing_Expenditure` int(11) NOT NULL,
  `Incoming_Donation` int(11) NOT NULL,
  PRIMARY KEY (`Account_no`),
  UNIQUE KEY `Account_no` (`Account_no`),
  KEY `Account_no_2` (`Account_no`),
  KEY `Outgoing_Expenditure` (`Outgoing_Expenditure`),
  KEY `Incoming_Donation` (`Incoming_Donation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_body`
--

CREATE TABLE IF NOT EXISTS `general_body` (
  `Name` varchar(24) NOT NULL,
  `UniqueID` int(11) NOT NULL,
  `Contact_no` varchar(24) NOT NULL,
  `Belongs_to` varchar(24) NOT NULL,
  `Headed_by` varchar(24) NOT NULL,
  PRIMARY KEY (`UniqueID`),
  UNIQUE KEY `UniqueID` (`UniqueID`),
  KEY `UniqueID_2` (`UniqueID`),
  KEY `Belongs_to` (`Belongs_to`),
  KEY `Headed_by` (`Headed_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `Name` varchar(24) NOT NULL,
  `Institution_Coordinator` varchar(24) NOT NULL,
  `No_of_members` int(11) NOT NULL,
  `Location` varchar(24) NOT NULL,
  PRIMARY KEY (`Name`),
  UNIQUE KEY `Name` (`Name`),
  KEY `Name_2` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `Name` varchar(24) NOT NULL DEFAULT 'HSCO',
  `Founded_in` year(4) NOT NULL DEFAULT '2011',
  `Location` varchar(24) NOT NULL DEFAULT 'Kachiguda,Hyderabad',
  `Domains` int(11) NOT NULL,
  `Branches` varchar(24) NOT NULL,
  `Undertaken_Activities` int(11) NOT NULL,
  PRIMARY KEY (`Name`),
  UNIQUE KEY `Name` (`Name`),
  KEY `Name_2` (`Name`),
  KEY `Domains` (`Domains`),
  KEY `Branches` (`Branches`),
  KEY `Undertaken_Activities` (`Undertaken_Activities`),
  KEY `Domains_2` (`Domains`),
  KEY `Branches_2` (`Branches`),
  KEY `Undertaken_Activities_2` (`Undertaken_Activities`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`Domain`) REFERENCES `domain` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activity_by_institute`
--
ALTER TABLE `activity_by_institute`
  ADD CONSTRAINT `activity_by_institute_ibfk_2` FOREIGN KEY (`Name`) REFERENCES `institution` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activity_by_institute_ibfk_1` FOREIGN KEY (`Activity_UniqueID`) REFERENCES `activities` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activity_volunteered_by`
--
ALTER TABLE `activity_volunteered_by`
  ADD CONSTRAINT `activity_volunteered_by_ibfk_2` FOREIGN KEY (`Volunteer_UniqueID`) REFERENCES `general_body` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activity_volunteered_by_ibfk_1` FOREIGN KEY (`Activity_UniqueID`) REFERENCES `activities` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_by`
--
ALTER TABLE `donation_by`
  ADD CONSTRAINT `donation_by_ibfk_1` FOREIGN KEY (`DD_no`) REFERENCES `donation_info` (`P_dd_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_info`
--
ALTER TABLE `donation_info`
  ADD CONSTRAINT `donation_info_ibfk_1` FOREIGN KEY (`Donation_Incoming_TransactionID`) REFERENCES `donation` (`Incoming_TransactionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD CONSTRAINT `expenditure_ibfk_1` FOREIGN KEY (`on_domain`) REFERENCES `domain` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `financial_info`
--
ALTER TABLE `financial_info`
  ADD CONSTRAINT `financial_info_ibfk_3` FOREIGN KEY (`Incoming_Donation`) REFERENCES `donation` (`Incoming_TransactionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `financial_info_ibfk_1` FOREIGN KEY (`Account_no`) REFERENCES `finance` (`Account_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `financial_info_ibfk_2` FOREIGN KEY (`Outgoing_Expenditure`) REFERENCES `expenditure` (`Outgoing_TransactionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `general_body`
--
ALTER TABLE `general_body`
  ADD CONSTRAINT `general_body_ibfk_1` FOREIGN KEY (`Belongs_to`) REFERENCES `institution` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `organization_ibfk_4` FOREIGN KEY (`Domains`) REFERENCES `domain` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organization_ibfk_2` FOREIGN KEY (`Branches`) REFERENCES `institution` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organization_ibfk_3` FOREIGN KEY (`Undertaken_Activities`) REFERENCES `activities` (`UniqueID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
