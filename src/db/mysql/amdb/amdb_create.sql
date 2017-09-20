-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2017 at 05:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
  `accountmgr` varchar(50) COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, '2017-09-18 20:41:02', 'Apple', '1 Infinite Loop', 'Cupertino', 'CA', '95014', '408-996-1010', 'www.apple.com', 0, 'iPhone, iPad'),
(2, '2017-09-18 20:37:00', 'Comcast', '1701 JFK Blvd', 'Philadelphia', 'PA', '19103', '215-286-1700', 'www.comcast.net', 0, ''),
(3, '2017-09-18 20:38:22', 'Palo Alto Networks', '3000 Tannery Way', 'Santa Clara', 'CA', '95054', '408-753-4000', 'www.paloaltonetworks.com', 0, ''),
(4, '2017-09-18 20:40:05', 'Verizon', '140 W. St.', 'New York', 'NY', '10007', '212-395-1000', 'www.verizon.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `contact` varchar(50) COLLATE utf8_bin NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `work` varchar(20) COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `clientID` int(4) NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactID`, `modified`, `contact`, `title`, `work`, `cell`, `email`, `notes`, `clientID`, `projectID`) VALUES
(1, '2017-09-18 20:43:51', 'Brian Roberts', 'CEO', '', '', '', '', 2, 0),
(2, '2017-09-18 20:43:12', 'Lowell McAdam', 'CEO', '', '', '', '', 4, 0),
(3, '2017-09-18 20:50:59', 'Mark D. McLaughlin', 'CEO', '', '', '', '', 3, 0),
(4, '2017-09-18 20:42:22', 'Tim Cook', 'CEO', '', '', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `employee` varchar(50) COLLATE utf8_bin NOT NULL,
  `title` varchar(25) COLLATE utf8_bin NOT NULL,
  `type` varchar(10) COLLATE utf8_bin NOT NULL,
  `accountmgr` varchar(3) COLLATE utf8_bin NOT NULL,
  `projectmgr` varchar(3) COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `modified`, `employee`, `title`, `type`, `accountmgr`, `projectmgr`, `cell`, `email`, `notes`, `projectID`) VALUES
(1, '2017-09-18 20:53:41', 'Bugs Bunny', 'Manager', '', '', '', '', 'bugs.bunny@acme.com', '', 0),
(2, '2017-09-18 20:54:40', 'Moe Howard', 'Red Team', '', '', '', '', '', 'Linux', 0),
(3, '2017-09-18 20:55:02', 'Larry Fine', 'Red Team', '', '', '', '', '', 'Windows', 0),
(4, '2017-09-18 20:55:27', 'Curly Howard', 'Red Team', '', '', '', '', '', 'Web', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_project`
--

CREATE TABLE `employee_project` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(255) COLLATE utf8_bin NOT NULL,
  `projectID` varchar(255) COLLATE utf8_bin NOT NULL,
  `timestamp` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `findings`
--

CREATE TABLE `findings` (
  `findingID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `type` varchar(25) COLLATE utf8_bin NOT NULL,
  `finding` varchar(50) COLLATE utf8_bin NOT NULL,
  `observation` text COLLATE utf8_bin NOT NULL,
  `severity` text COLLATE utf8_bin NOT NULL,
  `remediation` text COLLATE utf8_bin NOT NULL,
  `see_also` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `findings`
--

INSERT INTO `findings` (`findingID`, `modified`, `type`, `finding`, `observation`, `severity`, `remediation`, `see_also`) VALUES
(1, '2017-09-18 20:56:27', 'Host', 'Access to Administrative Interface', 'aaa', 'bbb', 'ccc', 'ddd'),
(2, '2017-09-18 20:57:53', 'Host', 'Apple Patching Issues', '', '', '', ''),
(3, '2017-09-18 20:57:20', 'Host', 'Apple Configuration Issues', '', '', '', ''),
(4, '2017-09-18 20:58:18', 'Web', 'Reflected XSS', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hostvulns`
--

CREATE TABLE `hostvulns` (
  `hostvulnID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `tool` varchar(16) COLLATE utf8_bin NOT NULL,
  `vulnerability` varchar(128) COLLATE utf8_bin NOT NULL,
  `findingID` int(3) NOT NULL,
  `cvss_base` int(2) NOT NULL,
  `internal` varchar(8) COLLATE utf8_bin NOT NULL,
  `external` varchar(8) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `remediation` text COLLATE utf8_bin NOT NULL,
  `see_also` text COLLATE utf8_bin NOT NULL,
  `published` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hostvulns`
--

INSERT INTO `hostvulns` (`hostvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `cvss_base`, `internal`, `external`, `description`, `remediation`, `see_also`, `published`, `updated`) VALUES
(1, '2017-09-18 21:03:42', 'Nessus', 'OS X <10.10', 2, 10, 'High', 'Critical', 'qqq', 'www', 'eee', '0000-00-00', '0000-00-00'),
(2, '2017-09-18 23:43:09', 'Manual', 'Palo Alto admin console', 1, 0, 'Medium', 'High', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `projectmgrs`
--

CREATE TABLE `projectmgrs` (
  `projectmgrID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `projectmgr` varchar(50) COLLATE utf8_bin NOT NULL,
  `cell` varchar(12) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `project` varchar(50) COLLATE utf8_bin NOT NULL,
  `client` varchar(50) COLLATE utf8_bin NOT NULL,
  `accountmgr` varchar(50) COLLATE utf8_bin NOT NULL,
  `projectmgr` varchar(50) COLLATE utf8_bin NOT NULL,
  `consultant1` varchar(50) COLLATE utf8_bin NOT NULL,
  `consultant2` varchar(50) COLLATE utf8_bin NOT NULL,
  `consultant3` varchar(50) COLLATE utf8_bin NOT NULL,
  `consultant4` varchar(50) COLLATE utf8_bin NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `objective` varchar(100) COLLATE utf8_bin NOT NULL,
  `billing` varchar(25) COLLATE utf8_bin NOT NULL,
  `rate` varchar(10) COLLATE utf8_bin NOT NULL,
  `address1` varchar(25) COLLATE utf8_bin NOT NULL,
  `address2` varchar(25) COLLATE utf8_bin NOT NULL,
  `city` varchar(25) COLLATE utf8_bin NOT NULL,
  `state` varchar(2) COLLATE utf8_bin NOT NULL,
  `zip` varchar(10) COLLATE utf8_bin NOT NULL,
  `kickoff` varchar(250) COLLATE utf8_bin NOT NULL,
  `start` varchar(255) COLLATE utf8_bin NOT NULL,
  `finish` varchar(255) COLLATE utf8_bin NOT NULL,
  `hours` varchar(25) COLLATE utf8_bin NOT NULL,
  `tech_qa` date NOT NULL,
  `draft_delivery` date NOT NULL,
  `client_comments` date NOT NULL,
  `final_delivery` date NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `hold` date NOT NULL,
  `restart` date NOT NULL,
  `percent_complete` varchar(3) COLLATE utf8_bin NOT NULL,
  `complete` varchar(5) COLLATE utf8_bin NOT NULL,
  `assisment` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `modified`, `project`, `client`, `accountmgr`, `projectmgr`, `consultant1`, `consultant2`, `consultant3`, `consultant4`, `type`, `objective`, `billing`, `rate`, `address1`, `address2`, `city`, `state`, `zip`, `kickoff`, `start`, `finish`, `hours`, `tech_qa`, `draft_delivery`, `client_comments`, `final_delivery`, `status`, `notes`, `hold`, `restart`, `percent_complete`, `complete`, `assisment`) VALUES
(1, '2017-09-18 23:51:22', 'Q3 Vulnerability Assessment', '1', '', '', 'Cook', '', '', '', '', '', '', '', '', '', '1', 'In', 'Loop', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', 'External,Internal,');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE `scan` (
  `scanID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `scan` varchar(50) COLLATE utf8_bin NOT NULL,
  `location` varchar(10) COLLATE utf8_bin NOT NULL,
  `severity` varchar(10) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(15) COLLATE utf8_bin NOT NULL,
  `fqdn` varchar(25) COLLATE utf8_bin NOT NULL,
  `os` varchar(50) COLLATE utf8_bin NOT NULL,
  `port` int(5) NOT NULL,
  `proof` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `projectID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL,
  `salt` varchar(128) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `role` varchar(25) COLLATE utf8_bin NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `modified`, `username`, `email`, `password`, `salt`, `activated`, `role`, `approved`) VALUES
(1, '2017-09-18 19:11:15', 'admin', 'admin@acme.com', 'f542eebb272ff24784ddc8f53f1a930532cdfbc1df30e5e6ffbd7e4c01925ee1', '2946e24c29c4368d', 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vulnerabilities`
--

CREATE TABLE `vulnerabilities` (
  `vulnerabilityID` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `vulnerability` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `solution` text COLLATE utf8_bin NOT NULL,
  `cvss_base_score` decimal(3,1) NOT NULL,
  `see_also` text COLLATE utf8_bin NOT NULL,
  `cve` varchar(50) COLLATE utf8_bin NOT NULL,
  `internal` varchar(10) COLLATE utf8_bin NOT NULL,
  `external` varchar(10) COLLATE utf8_bin NOT NULL,
  `scanID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `webvulns`
--

CREATE TABLE `webvulns` (
  `webvulnID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `tool` varchar(16) COLLATE utf8_bin NOT NULL,
  `vulnerability` varchar(50) COLLATE utf8_bin NOT NULL,
  `findingID` int(3) NOT NULL,
  `severity` varchar(8) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `remediation` text COLLATE utf8_bin NOT NULL,
  `see_also` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `webvulns`
--

INSERT INTO `webvulns` (`webvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `severity`, `description`, `remediation`, `see_also`) VALUES
(1, '2017-09-18 23:47:28', 'Burp', 'Homepage XSS', 4, 'Medium', '', '', '');

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
  MODIFY `clientID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_project`
--
ALTER TABLE `employee_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `findings`
--
ALTER TABLE `findings`
  MODIFY `findingID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hostvulns`
--
ALTER TABLE `hostvulns`
  MODIFY `hostvulnID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectmgrs`
--
ALTER TABLE `projectmgrs`
  MODIFY `projectmgrID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scan`
--
ALTER TABLE `scan`
  MODIFY `scanID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vulnerabilities`
--
ALTER TABLE `vulnerabilities`
  MODIFY `vulnerabilityID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webvulns`
--
ALTER TABLE `webvulns`
  MODIFY `webvulnID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
