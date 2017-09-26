-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2017 at 05:05 AM
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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `client` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin,
  `city` varchar(25) COLLATE utf8_bin,
  `state` varchar(2) COLLATE utf8_bin,
  `zip` varchar(10) COLLATE utf8_bin,
  `phone` varchar(20) COLLATE utf8_bin,
  `web` varchar(50) COLLATE utf8_bin,
  `employeeID` int(4) NOT NULL,
  `notes` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientID`, `modified`, `client`, `address`, `city`, `state`, `zip`, `phone`, `web`, `employeeID`, `notes`) VALUES
(1, '2017-09-22 21:56:14', 'Apple', '1 Infinite Loop', 'Cupertino', 'CA', '95014', '408-996-1010', 'www.apple.com', 5, 'iPhone, iPad'),
(2, '2017-09-22 22:10:04', 'Comcast', '1701 JFK Blvd', 'Philadelphia', 'PA', '19103', '215-286-1700', 'www.comcast.net', 5, ''),
(3, '2017-09-22 22:09:59', 'Palo Alto Networks', '3000 Tannery Way', 'Santa Clara', 'CA', '95054', '408-753-4000', 'www.paloaltonetworks.com', 5, ''),
(4, '2017-09-22 22:10:09', 'Verizon', '140 W. St.', 'New York', 'NY', '10007', '212-395-1000', 'www.verizon.com', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `contact` varchar(50) COLLATE utf8_bin NOT NULL,
  `title` varchar(50) COLLATE utf8_bin,
  `work` varchar(20) COLLATE utf8_bin,
  `cell` varchar(12) COLLATE utf8_bin,
  `email` varchar(50) COLLATE utf8_bin,
  `notes` text COLLATE utf8_bin,
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
  `title` varchar(25) COLLATE utf8_bin,
  `cell` varchar(12) COLLATE utf8_bin,
  `email` varchar(50) COLLATE utf8_bin,
  `notes` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `modified`, `employee`, `title`, `accountmgr`, `cell`, `email`, `notes`, `projectID`) VALUES
(1, '2017-09-18 20:53:41', 'Bugs Bunny', 'Manager', '', '', 'bugs.bunny@acme.com', '', 0),
(2, '2017-09-18 20:54:40', 'Moe Howard', 'Red Team', '', '', '', 'Linux', 0),
(3, '2017-09-18 20:55:02', 'Larry Fine', 'Red Team', '', '', '', 'Windows', 0),
(4, '2017-09-18 20:55:27', 'Curly Howard', 'Red Team', '', '', '', 'Web', 0),
(5, '2017-09-22 22:11:25', 'Wile E Coyote', 'Pure Genius', 'Yes', '', '', '', 0);

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
  `severity` text COLLATE utf8_bin NOT NULL,
  `observation` text COLLATE utf8_bin,
  `remediation` text COLLATE utf8_bin,
  `see_also` text COLLATE utf8_bin
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
  `cvss_base` int(2),
  `internal` varchar(8) COLLATE utf8_bin,
  `external` varchar(8) COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `remediation` text COLLATE utf8_bin,
  `see_also` text COLLATE utf8_bin,
  `published` varchar(12) COLLATE utf8_bin,
  `updated` varchar(12) COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hostvulns`
--

INSERT INTO `hostvulns` (`hostvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `cvss_base`, `internal`, `external`, `description`, `remediation`, `see_also`, `published`, `updated`) VALUES
(1, '2017-09-22 20:45:52', 'Nessus', 'OS X <10.10', 2, 10, 'High', 'Critical', 'qqq', 'www', 'eee', '', ''),
(2, '2017-09-22 22:12:49', 'Manual', 'Palo Alto admin console', 1, 0, 'Medium', 'High', '', '', '', '09/01/2017', '09/08/2017');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `project` varchar(50) COLLATE utf8_bin NOT NULL,
  `assessmentID` int(4) NOT NULL,
  `clientID` int(4) NOT NULL,
  `kickoff` varchar(12) COLLATE utf8_bin,
  `start` varchar(12) COLLATE utf8_bin,
  `finish` varchar(12) COLLATE utf8_bin,
  `tech_qa` varchar(12) COLLATE utf8_bin,
  `draft_delivery` varchar(12) COLLATE utf8_bin,
  `final_delivery` varchar(12) COLLATE utf8_bin,
  `notes` text COLLATE utf8_bin,
  `objective` varchar(100) COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

alter table `projects`
  add (constraint fk_client01 foreign key (clientID) references clients(clientID));
    
alter table `projects`
  add (constraint fk_assessment01 foreign key (assessmentID) references assessments(assessmentID));

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `modified`, `project`, `assessment`, `client`, `address`, `city`, `state`, `zip`, `phone`, `web`, `employeeID`, `projectmgr`, `consultant1`, `consultant2`, `consultant3`, `consultant4`, `kickoff`, `start`, `tech_qa`, `draft_delivery`, `final_delivery`, `finish`, `status`, `notes`, `objective`) VALUES
(1, '2017-09-22 21:21:23', 'Q3 Vulnerability Assessment', 'External,', '1', '', '1', 'In', 'Loop', '', '', '', '', 'Cook', '', '', '', '09/01/2017', '09/03/2017', '0000-00-00', '0000-00-00', '0000-00-00', '09/08/2017', '', '', ''),
(2, '2017-09-22 21:21:55', 'test', 'Wireless,', '4', '<br />\r\n<b>Notice</b>:  U', ' boolean given in <b>/App', ' b', ' boolean g', ' boolean given in <b', ' boolean given in <b>/Applications/XAMPP/xamppfile', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE `scan` (
  `scanID` int(4) NOT NULL,
  `modified` datetime NOT NULL,
  `scan` varchar(50) COLLATE utf8_bin NOT NULL,
  `location` varchar(10) COLLATE utf8_bin,
  `severity` varchar(10) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(15) COLLATE utf8_bin,
  `fqdn` varchar(25) COLLATE utf8_bin,
  `os` varchar(50) COLLATE utf8_bin,
  `port` int(5),
  `proof` text COLLATE utf8_bin,
  `date` date,
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
  `description` text COLLATE utf8_bin,
  `solution` text COLLATE utf8_bin,
  `cvss_base_score` decimal(3,1),
  `see_also` text COLLATE utf8_bin,
  `cve` varchar(50) COLLATE utf8_bin,
  `internal` varchar(10) COLLATE utf8_bin,
  `external` varchar(10) COLLATE utf8_bin,
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
  `description` text COLLATE utf8_bin,
  `remediation` text COLLATE utf8_bin,
  `see_also` text COLLATE utf8_bin
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
  MODIFY `employeeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `vulnerabilityID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webvulns`
--
ALTER TABLE `webvulns`
  MODIFY `webvulnID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
