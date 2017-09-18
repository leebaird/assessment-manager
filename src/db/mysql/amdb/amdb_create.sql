-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 10:53 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31
use amdb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountmgrs`
--

CREATE TABLE `accountmgrs` (
  `accountmgrID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `accountmgr` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `client` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `city` varchar(25) COLLATE utf8_bin NOT NULL,
  `state` varchar(2) COLLATE utf8_bin NOT NULL,
  `zip` varchar(10) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `web` varchar(50) COLLATE utf8_bin NOT NULL,
  `employeeID` int(4) NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientID`, `modified`, `client`, `address`, `city`, `state`, `zip`, `phone`, `web`, `employeeID`, `notes`) VALUES
(1, '2017-09-16 23:31:04', 'Apple', '1 Infinite Loop', 'Cupertino', 'CA', '95014', '408-996â€“1010', 'www.apple.com', 0, 'iPhone, iPad'),
(2, '2017-09-16 23:18:18', 'Comcast', '', '', '', '', '', 'www.comcast.net', 0, ''),
(3, '2017-09-16 23:22:45', 'Palo Alto Networks', '', 'Santa Clara', 'CA', '', '', 'www.paloaltonetworks.com', 0, ''),
(4, '2017-09-16 00:01:20', 'Verizon', '', '', '', '', '', '', 0, ''),
(5, '2017-09-18 10:33:22', 'bbb', 'bbb', 'bbb', 'bb', '454', '087979', '8998', 4, '89'),
(6, '2017-09-18 10:34:31', 'bbb', 'bbb', 'bbb', 'bb', '454', '087979', '8998', 4, '89');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `contact` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `clientID` int(4) NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactID`, `modified`, `contact`, `title`, `work`, `cell`, `email`, `notes`, `clientID`, `projectID`) VALUES
(1, '2017-09-14 14:42:48', '03434', 'aaa', 'aaa', 'aaa', 'aaa@df.gd', 'Itï¿½s MySQL spatial data week here, though I am spreading out the posts to, um, ease the pain (or boredom). Anyway, here are some commands/functions I donï¿½t want to forget about later:\r\n\r\nStart with an existing table called geometry, add a spatial column and index it:\r\n\r\n', 3, 1),
(2, '2017-09-14 13:00:35', 'fgg', 'zzz', 'zzz', '07676', 'zzz@zzz.zzz', 'zzz', 3, 0),
(5, '2017-09-15 00:00:00', '00778', 'rrr', 'rr', 'rrrr', 'rrr@gmail.com', 'rrr', 2, 2),
(6, '2017-09-15 00:00:00', '06767', 'fdfd', 'dfdf', '07878', 'vbv@fdf.ghgh', 'ghg', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `employee` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `accountmgr` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `projectmgr` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `modified`, `employee`, `title`, `type`, `accountmgr`, `projectmgr`, `cell`, `email`, `notes`, `projectID`) VALUES
(2, '2017-09-14 14:43:22', 'www', 'www', 'Full Time', 'Yes', 'Yes', '05454', 'eee@fgd.gfhgjh', 'gjhgj', 1),
(3, '2017-09-15 14:15:50', 'vvv', 'vvv', 'Full Time', 'Yes', 'Yes', '0787787', 'vvv@gmail.com', 'vvv', 1),
(4, '2017-09-15 14:19:44', 'uuu', 'uuu', 'Full Time', 'Yes', 'Yes', '056', 'uuu@gmail.com', 'uuu', 0),
(5, '2017-09-15 14:20:10', 'mmm', 'mmm', 'Full Time', 'Yes', 'Yes', '0454', 'mmm@gmail.com', 'mmm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_project`
--

CREATE TABLE `employee_project` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(255) NOT NULL,
  `projectID` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_project`
--

INSERT INTO `employee_project` (`id`, `employeeID`, `projectID`, `timestamp`) VALUES
(1, '2', '1', 'dsf'),
(2, '3', '1', 'sdf'),
(3, '4', '1', 'dsdf'),
(4, '5', '1', 'sdfs');

-- --------------------------------------------------------

--
-- Table structure for table `findings`
--

CREATE TABLE `findings` (
  `findingID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `type` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `finding` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `observation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `severity` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remediation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `see_also` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `findings`
--

INSERT INTO `findings` (`findingID`, `modified`, `type`, `finding`, `observation`, `severity`, `remediation`, `see_also`) VALUES
(3, '2017-09-15 00:00:00', 'Host', 'bbb', 'ccc', 'ddd', 'ggg', 'hhh'),
(5, '2017-09-17 15:08:43', 'Web', 'xxx', 'yyy', 'zzz', 'aaa', '45'),
(6, '2017-09-17 15:07:23', 'Web', 'shapla', 'shapla', 'shapla', 'shapla', 'shapla');

-- --------------------------------------------------------

--
-- Table structure for table `hostvulns`
--

CREATE TABLE `hostvulns` (
  `hostvulnID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `tool` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vulnerability` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `findingID` int(3) NOT NULL,
  `cvss_base` int(2) NOT NULL,
  `internal` varchar(8) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `external` varchar(8) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remediation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `see_also` text NOT NULL,
  `published` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostvulns`
--

INSERT INTO `hostvulns` (`hostvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `cvss_base`, `internal`, `external`, `description`, `remediation`, `see_also`, `published`, `updated`) VALUES
(6, '2017-09-14 14:34:14', 'Nessus', 'dfsg', 3, 5, 'Critical', 'High', 'dfg', 'dfg', '', '0000-00-00', '0000-00-00'),
(7, '2017-09-14 14:34:23', 'Nessus', 'dfsg', 3, 3, 'Critical', 'High', 'dfg', 'dfg', '', '0000-00-00', '0000-00-00'),
(8, '2017-09-14 12:40:55', 'Nessus', 'dfsg', 3, 12, 'Critical', 'High', 'dfg', 'dfg', '\0\0\0\0\0\0\0\0\0\0\0\0\0$À\0\0\0\0\0\06À', '0000-00-00', '0000-00-00'),
(9, '2017-09-14 12:41:52', 'Nessus', 'q', 5, 2, 'Critical', 'High', 'q', 'q', '\0\0\0\0\0\0\0\0\0\0\0\0\0ð¿\0\0\0\0\0\0\0À', '0000-00-00', '0000-00-00'),
(10, '2017-09-14 13:52:35', 'Nexpose', 'g', 5, 5, 'Critical', 'Critical', 'g', 'g', '\0\0\0\0\0\0\0ËI(}!ÄQÀð¿•ìØ$E@', '0000-00-00', '0000-00-00'),
(11, '2017-09-17 14:59:28', 'Nessus', 'asa', 3, 0, 'Critical', 'High', 'asda', 'sdad', '\0\0\0\0\0\0\0ž^)ËÇá¿NÒü1-é¿', '0000-00-00', '0000-00-00'),
(12, '2017-09-17 15:03:22', 'Nexpose', 'ssad', 3, 0, 'Critical', 'High', 'asds', 'asdad', '\0\0\0\0\0\0\0\r¹§«;Ý¿\0\0\0\0¼Á', '0000-00-00', '0000-00-00'),
(13, '2017-09-17 15:03:58', 'Nexpose', 'llll', 3, 0, 'High', 'Medium', 'lll', 'llll', '\0\0\0\0\0\0\0\r¹§«;Ý¿\0\0\0\0¼Á', '0000-00-00', '0000-00-00'),
(14, '2017-09-18 11:46:02', 'Nessus', 'asad123', 3, 4545, 'High', 'Critical', 'dgd', 'dgd', 'asad', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `projectmgrs`
--

CREATE TABLE `projectmgrs` (
  `projectmgrID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `projectmgr` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `project` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `client` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `accountmgr` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `projectmgr` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `employee1` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `employee2` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `employee3` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `employee4` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `objective` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `billing` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rate` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address1` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address2` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `state` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `zip` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `kickoff` varchar(250) NOT NULL,
  `start` varchar(255) NOT NULL,
  `finish` varchar(255) NOT NULL,
  `hours` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tech_qa` date NOT NULL,
  `draft_delivery` date NOT NULL,
  `client_comments` date NOT NULL,
  `final_delivery` date NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hold` date NOT NULL,
  `restart` date NOT NULL,
  `percent_complete` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `complete` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `assisment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `modified`, `project`, `client`, `accountmgr`, `projectmgr`, `employee1`, `employee2`, `employee3`, `employee4`, `type`, `objective`, `billing`, `rate`, `address1`, `address2`, `city`, `state`, `zip`, `kickoff`, `start`, `finish`, `hours`, `tech_qa`, `draft_delivery`, `client_comments`, `final_delivery`, `status`, `notes`, `hold`, `restart`, `percent_complete`, `complete`, `assisment`) VALUES
(1, '2017-09-14 12:25:21', 'dgd', '3', '2', '2', 'ddd', 'fff', 'ggg', 'hhh', '', '', '', '', 'fff', '', 'fff', 'ff', '232', '09/14/2017', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Scoping', 'v', '0000-00-00', '0000-00-00', '', '', 'External,Mobile,'),
(2, '2017-09-17 15:26:03', 'fafaf', '3', '5', '4', 'www', 'vvv', 'uuu', 'mmm', '', '', '', '', 'afaf', '', 'fdaf', 'af', 'aaf', '09/07/2017', '09/12/2017', '09/12/2017', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Reporting', 'faf', '0000-00-00', '0000-00-00', '', '', 'External,Internal,Mobile,'),
(3, '2017-09-17 15:26:34', 'afaf', '3', '4', '4', 'www', 'vvv', 'uuu', 'mmm', '', '', '', '', 'faf', '', 'af', 'fa', '32', '09/20/2017', '09/04/2017', '09/08/2017', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'In Progres', 'qrqr', '0000-00-00', '0000-00-00', '', '', 'External,Internal,'),
(4, '2017-09-17 15:43:54', 'asd', '3', '5', '4', 'www', 'vvv', 'uuu', 'mmm', '', '', '', '', 'adsa', '', 'asd', 'as', 'asd', '09/11/2017', '09/11/2017', '09/21/2017', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Reporting', 'asdad', '0000-00-00', '0000-00-00', '', '', 'External,Internal,Mobile,'),
(5, '2017-09-17 15:46:14', 'qqq', '3', '4', '4', 'www', 'vvv', 'uuu', 'mmm', '', '', '', '', 'qqq', '', 'qqq', 'qq', 'qqq', '09/06/2017', '09/05/2017', '09/13/2017', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'In Progres', 'qqq', '0000-00-00', '0000-00-00', '', '', 'External,Internal,Mobile,'),
(6, '2017-09-18 14:50:30', 'ggg', '3', '5', '5', 'www', 'vvv', 'uuu', 'mmm', '', '', '', '', 'ggg', '', 'ggg', 'gg', '66', '09/18/2017', '09/20/2017', '09/22/2017', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Reporting', 'ggg', '0000-00-00', '0000-00-00', '', '', 'External,Internal,');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE `scan` (
  `scanID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `scan` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `location` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `severity` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fqdn` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `os` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `port` int(5) NOT NULL,
  `proof` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salt` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `role` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `modified`, `username`, `email`, `password`, `salt`, `activated`, `role`, `approved`) VALUES
(4, '0000-00-00 00:00:00', 'aaa', 'aaa@yahoo.com', '4625fd63b0e96fc0d656ae7381605e48d4a0f63a319fc743adf22688613883c7', 'bbb', 1, '1', 1),
(5, '2017-09-14 11:13:26', 'bbb', 'bbb@gmail.com', 'c09269b620a596eb5d49f623eae1b641defc592820d0214aa63b8170162e4192', '54e89c9e4c5ab38c', 0, '1', 1),
(10, '2017-09-17 13:10:15', 'hhhh', 'hhh@gmail.com', '0a659fe400ae8d1ca2020c7c3a8f5dca2e66c00c8c606cd4ba0ed48d37e8218c', 'ceda8de528211c1', 1, '2', 0),
(11, '2017-09-17 13:11:58', 'kkk', 'kashem@gmail.com', '623bd33342e16f12428cadd04d23a19b3e9bc3ce336f47e77c52790e130df391', '656961f63933dd6', 1, '2', 1),
(12, '2017-09-17 13:16:06', 'ddd', 'bisriman@shasha.massa', '397338348ae1a3f95c36bc66f07726f933497795c3a98592408b04c1acf61f53', '2ff860c2158fc68d', 1, '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vulnerabilities`
--

CREATE TABLE `vulnerabilities` (
  `vulnerabilityID` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `vulnerability` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `solution` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cvss_base_score` decimal(3,1) NOT NULL,
  `see_also` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cve` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `internal` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `external` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `scanID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webvulns`
--

CREATE TABLE `webvulns` (
  `webvulnID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `tool` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vulnerability` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `findingID` int(3) NOT NULL,
  `severity` varchar(8) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remediation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `see_also` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webvulns`
--

INSERT INTO `webvulns` (`webvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `severity`, `description`, `remediation`, `see_also`) VALUES
(4, '2017-09-14 14:33:41', 'acunetix', 'ff', 5, 'High', 'ff', 'ff', 'kkkk'),
(5, '2017-09-17 15:23:29', 'acunetix', 'dsf', 6, 'High', 'dfsd', 'sdfsf', 'sdf'),
(6, '2017-09-17 15:23:42', 'WebInspect', 'df', 5, 'High', 'fafa', 'faf', 'fdfaf'),
(7, '2017-09-17 15:23:54', 'WebInspect', 'afaf', 5, 'High', 'afaf', 'fdaf', 'afaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountmgrs`
--
ALTER TABLE `accountmgrs`
  ADD PRIMARY KEY (`accountmgrID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee_project`
--
ALTER TABLE `employee_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `findings`
--
ALTER TABLE `findings`
  ADD PRIMARY KEY (`findingID`);

--
-- Indexes for table `hostvulns`
--
ALTER TABLE `hostvulns`
  ADD PRIMARY KEY (`hostvulnID`);

--
-- Indexes for table `projectmgrs`
--
ALTER TABLE `projectmgrs`
  ADD PRIMARY KEY (`projectmgrID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `scan`
--
ALTER TABLE `scan`
  ADD PRIMARY KEY (`scanID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `vulnerabilities`
--
ALTER TABLE `vulnerabilities`
  ADD PRIMARY KEY (`vulnerabilityID`);

--
-- Indexes for table `webvulns`
--
ALTER TABLE `webvulns`
  ADD PRIMARY KEY (`webvulnID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountmgrs`
--
ALTER TABLE `accountmgrs`
  MODIFY `accountmgrID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee_project`
--
ALTER TABLE `employee_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `findings`
--
ALTER TABLE `findings`
  MODIFY `findingID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hostvulns`
--
ALTER TABLE `hostvulns`
  MODIFY `hostvulnID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `projectmgrs`
--
ALTER TABLE `projectmgrs`
  MODIFY `projectmgrID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `scan`
--
ALTER TABLE `scan`
  MODIFY `scanID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vulnerabilities`
--
ALTER TABLE `vulnerabilities`
  MODIFY `vulnerabilityID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `webvulns`
--
ALTER TABLE `webvulns`
  MODIFY `webvulnID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
