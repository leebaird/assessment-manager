
use amdb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `clients` (
  `clientID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `client` varchar(50) COLLATE utf8_bin NOT NULL,
  `web` varchar(50) COLLATE utf8_bin,
  `employeeID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `client_address` (
  `client_addressID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `address` varchar(50) COLLATE utf8_bin,
  `city` varchar(25) COLLATE utf8_bin,
  `state` varchar(2) COLLATE utf8_bin,
  `zip` varchar(10) COLLATE utf8_bin,
  `phone` varchar(20) COLLATE utf8_bin,
  `notes` text COLLATE utf8_bin
  `clientID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `contacts` (
  `contactID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `contact` varchar(50) COLLATE utf8_bin NOT NULL,
  `title` varchar(50) COLLATE utf8_bin,
  `work` varchar(20) COLLATE utf8_bin,
  `cell` varchar(12) COLLATE utf8_bin,
  `email` varchar(50) COLLATE utf8_bin,
  `notes` text COLLATE utf8_bin,
  `clientID` int(6) NOT NULL,
  `projectID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `employees` (
  `employeeID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `employee` varchar(50) COLLATE utf8_bin NOT NULL,
  `title` varchar(25) COLLATE utf8_bin,
  `cell` varchar(12) COLLATE utf8_bin,
  `email` varchar(50) COLLATE utf8_bin,
  `notes` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `employee_project` (
  `employee_projectID` int(6) NOT NULL,
  `employeeID` varchar(255) COLLATE utf8_bin NOT NULL,
  `projectID` varchar(255) COLLATE utf8_bin NOT NULL,
  `timestamp` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `findings` (
  `findingID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `type` varchar(25) COLLATE utf8_bin NOT NULL,
  `finding` varchar(50) COLLATE utf8_bin NOT NULL,
  `severity` text COLLATE utf8_bin,
  `observation` text COLLATE utf8_bin,
  `remediation` text COLLATE utf8_bin,
  `see_also` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `hostvulns` (
  `hostvulnID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `tool` varchar(16) COLLATE utf8_bin NOT NULL,
  `vulnerability` varchar(128) COLLATE utf8_bin NOT NULL,
  `findingID` int(6) NOT NULL,
  `cvss_base` int(2),
  `internal` varchar(8) COLLATE utf8_bin,
  `external` varchar(8) COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `remediation` text COLLATE utf8_bin,
  `see_also` text COLLATE utf8_bin,
  `published` varchar(12) COLLATE utf8_bin,
  `updated` varchar(12) COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `projects` (
  `projectID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `project` varchar(50) COLLATE utf8_bin NOT NULL,
  `assessmentID` int(6) NOT NULL,
  `clientID` int(6) NOT NULL,
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

CREATE TABLE `scans` (
  `scanID` int(6) NOT NULL,
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
  `projectID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `users` (
  `userID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL,
  `salt` varchar(128) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `role` varchar(25) COLLATE utf8_bin NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `vulnerabilities` (
  `vulnerabilityID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `vulnerability` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin,
  `solution` text COLLATE utf8_bin,
  `cvss_base_score` decimal(3,1),
  `see_also` text COLLATE utf8_bin,
  `cve` varchar(50) COLLATE utf8_bin,
  `internal` varchar(10) COLLATE utf8_bin,
  `external` varchar(10) COLLATE utf8_bin,
  `scanID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `webvulns` (
  `webvulnID` int(6) NOT NULL,
  `modified` datetime NOT NULL,
  `tool` varchar(16) COLLATE utf8_bin NOT NULL,
  `vulnerability` varchar(50) COLLATE utf8_bin NOT NULL,
  `findingID` int(3) NOT NULL,
  `severity` varchar(8) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin,
  `remediation` text COLLATE utf8_bin,
  `see_also` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientID`);

ALTER TABLE `client_address`
  ADD PRIMARY KEY (`client_addressID`);

ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactID`);

ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`);

ALTER TABLE `employee_project`
  ADD PRIMARY KEY (`employee_projectID`);

ALTER TABLE `findings`
  ADD PRIMARY KEY (`findingID`);

ALTER TABLE `hostvulns`
  ADD PRIMARY KEY (`hostvulnID`);

ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectID`);

ALTER TABLE `scans`
  ADD PRIMARY KEY (`scanID`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

ALTER TABLE `vulnerabilities`
  ADD PRIMARY KEY (`vulnerabilityID`);

ALTER TABLE `webvulns`
  ADD PRIMARY KEY (`webvulnID`);

ALTER TABLE `clients`
  MODIFY `clientID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `client_address`
  MODIFY `client_addressID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `contacts`
  MODIFY `contactID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `employees`
  MODIFY `employeeID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `employee_project`
  MODIFY `employee_projectID` int(6) NOT NULL AUTO_INCREMENT=1;

ALTER TABLE `findings`
  MODIFY `findingID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `hostvulns`
  MODIFY `hostvulnID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `projects`
  MODIFY `projectID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `scans`
  MODIFY `scanID` int(6) NOT NULL AUTO_INCREMENT=1;

ALTER TABLE `users`
  MODIFY `userID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `vulnerabilities`
  MODIFY `vulnerabilityID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `webvulns`
  MODIFY `webvulnID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

COMMIT;
