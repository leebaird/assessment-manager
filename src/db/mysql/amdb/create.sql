
CREATE TABLE assessments (
  assessmentID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  assessment ENUM('External', 'Internal', 'Mobile', 'Physical', 'Social Eng', 'War Dail', 'Web', 'Wireless'),
  projectID INT(6) NOT NULL,
  PRIMARY KEY (assessmentID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE status (
  statusID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  status ENUM('', 'Contract', 'Scoping', 'In Progress', 'Reporting', 'Review', 'Delivered', 'Complete'),
  projectID INT(6) NOT NULL,
  PRIMARY KEY (statusID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE clients (
  clientID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  client VARCHAR(50) NOT NULL,
  address VARCHAR(50),
  city VARCHAR(25),
  state VARCHAR(2),
  zip VARCHAR(10),
  phone VARCHAR(20),
  notes TEXT,
  web VARCHAR(50),
  employeeID VARCHAR(6),
  PRIMARY KEY (clientID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE contacts (
  contactID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  contact VARCHAR(50) NOT NULL,
  title VARCHAR(50),
  work VARCHAR(20),
  cell VARCHAR(12),
  email VARCHAR(50),
  notes TEXT,
  clientID INT(6) NOT NULL,
  projectID INT(6) NOT NULL,
  PRIMARY KEY (contactID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE employees (
  employeeID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  employee VARCHAR(50) NOT NULL,
  title VARCHAR(25),
  accountmgr VARCHAR(3),
  cell VARCHAR(12),
  email VARCHAR(50),
  notes TEXT,
  PRIMARY KEY (employeeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE employee_project (
  employeeID INT(6) NOT NULL,
  projectID INT(6) NOT NULL,
  timestamp VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE findings (
  findingID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  type VARCHAR(25) NOT NULL,
  finding VARCHAR(50) NOT NULL,
  severity TEXT,
  observation TEXT,
  remediation TEXT,
  see_also TEXT,
  PRIMARY KEY (findingID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE hostvulns (
  hostvulnID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  tool VARCHAR(16) NOT NULL,
  vulnerability VARCHAR(128) NOT NULL,
  findingID INT(6) NOT NULL,
  cvss_base INT(2),
  internal VARCHAR(8),
  external VARCHAR(8),
  description TEXT,
  remediation TEXT,
  see_also TEXT,
  published VARCHAR(12),
  updated VARCHAR(12),
  PRIMARY KEY (hostvulnID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE projects (
  projectID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  project VARCHAR(50) NOT NULL,
  assessmentID INT(6) NOT NULL,
  clientID INT(6) NOT NULL,
  kickoff VARCHAR(12),
  start VARCHAR(12),
  finish VARCHAR(12),
  tech_qa VARCHAR(12),
  draft_delivery VARCHAR(12),
  final_delivery VARCHAR(12),
  notes TEXT,
  PRIMARY KEY (projectID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE projects ADD (CONSTRAINT fk_client01 FOREIGN KEY (clientID) REFERENCES clients(clientID));

ALTER TABLE projects ADD (CONSTRAINT fk_assessment01 FOREIGN KEY (assessmentID) REFERENCES assessments(assessmentID));

CREATE TABLE project_employee (
  projectID INT(6) NOT NULL,
  employeeID INT(6) NOT NULL,
  roleID INT(6) NOT NULL,
  status ENUM('active', 'inactive'),
  PRIMARY KEY (projectID, employeeID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE project_employee ADD (CONSTRAINT fk_projects01 FOREIGN KEY (projectID) REFERENCES projects(projectID));

CREATE TABLE project_location (
  locationID INT(6) NOT NULL,
  projectID INT(6) NOT NULL,
  address VARCHAR(50),
  city VARCHAR(25),
  state VARCHAR(2),
  zip VARCHAR(10),
  phone VARCHAR(16),
  PRIMARY KEY (locationID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ALTER TABLE project_location ADD (CONSTRAINT fk_projects01 FOREIGN KEY (projectID) REFERENCES projects(projectID));

CREATE TABLE project_status (
  projectID INT(6) NOT NULL,
  statusID INT(6) NOT NULL,
  created timestamp,
  PRIMARY KEY (projectID, statusID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ALTER TABLE project_status ADD (CONSTRAINT fk_projects01 FOREIGN KEY (projectID) REFERENCES projects(projectID));

ALTER TABLE project_status ADD (CONSTRAINT fk_status01 FOREIGN KEY (statusID) REFERENCES status(statusID));

CREATE TABLE scans (
  scanID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  scan VARCHAR(50) NOT NULL,
  location VARCHAR(10),
  severity VARCHAR(10) NOT NULL,
  ip_address VARCHAR(15),
  fqdn VARCHAR(25),
  os VARCHAR(50),
  port INT(5),
  proof TEXT,
  date date,
  projectID INT(6) NOT NULL,
  PRIMARY KEY (scanID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE users (
  userID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(128) NOT NULL,
  salt VARCHAR(128) NOT NULL,
  activated tinyINT(1) NOT NULL,
  role VARCHAR(25) NOT NULL,
  approved tinyINT(1) NOT NULL,
  PRIMARY KEY (userID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE vulnerabilities (
  vulnerabilityID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  vulnerability VARCHAR(100) NOT NULL,
  description TEXT,
  solution TEXT,
  cvss_base_score decimal(3,1),
  see_also TEXT,
  cve VARCHAR(50),
  internal VARCHAR(10),
  external VARCHAR(10),
  scanID INT(6) NOT NULL,
  PRIMARY KEY (vulnerabilityID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE webvulns (
  webvulnID INT(6) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  tool VARCHAR(16) NOT NULL,
  vulnerability VARCHAR(50) NOT NULL,
  findingID INT(3) NOT NULL,
  severity VARCHAR(8) NOT NULL,
  description TEXT,
  remediation TEXT,
  see_also TEXT,
  PRIMARY KEY (webvulnID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`userID`, `modified`, `username`, `email`, `password`, `salt`, `activated`, `role`, `approved`) VALUES
(1, '2017-09-18 19:11:15', 'admin', 'admin@acme.com', 'f542eebb272ff24784ddc8f53f1a930532cdfbc1df30e5e6ffbd7e4c01925ee1', '2946e24c29c4368d', 1, '1', 1);

COMMIT;
