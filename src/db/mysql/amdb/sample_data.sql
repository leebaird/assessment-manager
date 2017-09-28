use amdb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO `clients` (`clientID`, `modified`, `client`, `address`, `city`, `state`, `zip`, `phone`, `web`, `employeeID`, `notes`) VALUES
(1, '2017-09-22 21:56:14', 'Apple', '1 Infinite Loop', 'Cupertino', 'CA', '95014', '408-996-1010', 'www.apple.com', 5, 'iPhone, iPad'),
(2, '2017-09-22 22:10:04', 'Comcast', '1701 JFK Blvd', 'Philadelphia', 'PA', '19103', '215-286-1700', 'www.comcast.net', 5, ''),
(3, '2017-09-22 22:09:59', 'Palo Alto Networks', '3000 Tannery Way', 'Santa Clara', 'CA', '95054', '408-753-4000', 'www.paloaltonetworks.com', 5, ''),
(4, '2017-09-22 22:10:09', 'Verizon', '140 W. St.', 'New York', 'NY', '10007', '212-395-1000', 'www.verizon.com', 5, '');

INSERT INTO `contacts` (`contactID`, `modified`, `contact`, `title`, `work`, `cell`, `email`, `notes`, `clientID`, `projectID`) VALUES
(1, '2017-09-18 20:43:51', 'Brian Roberts', 'CEO', '', '', '', '', 2, 0),
(2, '2017-09-18 20:43:12', 'Lowell McAdam', 'CEO', '', '', '', '', 4, 0),
(3, '2017-09-18 20:50:59', 'Mark D. McLaughlin', 'CEO', '', '', '', '', 3, 0),
(4, '2017-09-18 20:42:22', 'Tim Cook', 'CEO', '', '', '', '', 1, 0);

INSERT INTO `employees` (`employeeID`, `modified`, `employee`, `title`, `accountmgr`, `cell`, `email`, `notes`, `projectID`) VALUES
(1, '2017-09-18 20:53:41', 'Bugs Bunny', 'Manager', '', '', 'bugs.bunny@acme.com', '', 0),
(2, '2017-09-18 20:54:40', 'Moe Howard', 'Red Team', '', '', '', 'Linux', 0),
(3, '2017-09-18 20:55:02', 'Larry Fine', 'Red Team', '', '', '', 'Windows', 0),
(4, '2017-09-18 20:55:27', 'Curly Howard', 'Red Team', '', '', '', 'Web', 0),
(5, '2017-09-22 22:11:25', 'Wile E Coyote', 'Pure Genius', 'Yes', '', '', '', 0);

INSERT INTO `findings` (`findingID`, `modified`, `type`, `finding`, `observation`, `severity`, `remediation`, `see_also`) VALUES
(1, '2017-09-18 20:56:27', 'Host', 'Access to Administrative Interface', 'aaa', 'bbb', 'ccc', 'ddd'),
(2, '2017-09-18 20:57:53', 'Host', 'Apple Patching Issues', '', '', '', ''),
(3, '2017-09-18 20:57:20', 'Host', 'Apple Configuration Issues', '', '', '', ''),
(4, '2017-09-18 20:58:18', 'Web', 'Reflected XSS', '', '', '', '');

INSERT INTO `hostvulns` (`hostvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `cvss_base`, `internal`, `external`, `description`, `remediation`, `see_also`, `published`, `updated`) VALUES
(1, '2017-09-22 20:45:52', 'Nessus', 'OS X <10.10', 2, 10, 'High', 'Critical', 'qqq', 'www', 'eee', '', ''),
(2, '2017-09-22 22:12:49', 'Manual', 'Palo Alto admin console', 1, 0, 'Medium', 'High', '', '', '', '09/01/2017', '09/08/2017');

INSERT INTO `projects` (`projectID`, `modified`, `project`, `assessment`, `client`, `address`, `city`, `state`, `zip`, `phone`, `web`, `employeeID`, `projectmgr`, `consultant1`, `consultant2`, `consultant3`, `consultant4`, `kickoff`, `start`, `tech_qa`, `draft_delivery`, `final_delivery`, `finish`, `status`, `notes`, `objective`) VALUES
(1, '2017-09-22 21:21:23', 'Q3 Vulnerability Assessment', 'External,', '1', '', '1', 'In', 'Loop', '', '', '', '', 'Cook', '', '', '', '09/01/2017', '09/03/2017', '0000-00-00', '0000-00-00', '0000-00-00', '09/08/2017', '', '', ''),
(2, '2017-09-22 21:21:55', 'test', 'Wireless,', '4', '<br />\r\n<b>Notice</b>:  U', ' boolean given in <b>/App', ' b', ' boolean g', ' boolean given in <b', ' boolean given in <b>/Applications/XAMPP/xamppfile', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

INSERT INTO `webvulns` (`webvulnID`, `modified`, `tool`, `vulnerability`, `findingID`, `severity`, `description`, `remediation`, `see_also`) VALUES
(1, '2017-09-18 23:47:28', 'Burp', 'Homepage XSS', 4, 'Medium', '', '', '');
