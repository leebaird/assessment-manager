
CREATE TABLE assessments (
  assessmentID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  assessment ENUM('External', 'Internal', 'Mobile', 'Physical', 'Social Eng', 'War Dail', 'Web', 'Wireless'),
  projectID int(6) NOT NULL,
  PRIMARY KEY (assessmentID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE status (
  statusID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  status ENUM('', 'Contract', 'Scoping', 'In Progress', 'Reporting', 'Review', 'Delivered', 'Complete'),
  projectID int(6) NOT NULL,
  PRIMARY KEY (statusID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE clients (
  clientID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  client varchar(50) NOT NULL,
  address varchar(50),
  city varchar(25),
  state varchar(2),
  zip varchar(10),
  phone varchar(20),
  notes text,
  web varchar(50),
  employeeID varchar(6),
  PRIMARY KEY (clientID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE contacts (
  contactID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  contact varchar(50) NOT NULL,
  title varchar(50),
  work varchar(20),
  cell varchar(12),
  email varchar(50),
  notes text,
  clientID int(6) NOT NULL,
  projectID int(6) NOT NULL,
  PRIMARY KEY (contactID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE employees (
  employeeID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  employee varchar(50) NOT NULL,
  title varchar(25),
  accountmgr varchar(3),
  cell varchar(12),
  email varchar(50),
  notes text,
  PRIMARY KEY (employeeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE employee_project (
  employeeID int(6) NOT NULL,
  projectID int(6) NOT NULL,
  timestamp varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE findings (
  findingID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  type varchar(25) NOT NULL,
  finding varchar(50) NOT NULL,
  severity text,
  observation text,
  remediation text,
  see_also text,
  PRIMARY KEY (findingID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE hostvulns (
  hostvulnID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  tool varchar(16) NOT NULL,
  vulnerability varchar(128) NOT NULL,
  findingID int(6) NOT NULL,
  cvss_base int(2),
  internal varchar(8),
  external varchar(8),
  description text,
  remediation text,
  see_also text,
  published varchar(12),
  updated varchar(12),
  PRIMARY KEY (hostvulnID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE projects (
  projectID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  project varchar(50) NOT NULL,
  assessmentID int(6) NOT NULL,
  clientID int(6) NOT NULL,
  kickoff varchar(12),
  start varchar(12),
  finish varchar(12),
  tech_qa varchar(12),
  draft_delivery varchar(12),
  final_delivery varchar(12),
  notes text,
  objective varchar(100),
  PRIMARY KEY (projectID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE projects ADD (CONSTRAINT fk_client01 FOREIGN KEY (clientID) REFERENCES clients(clientID));

ALTER TABLE projects ADD (CONSTRAINT fk_assessment01 FOREIGN KEY (assessmentID) REFERENCES assessments(assessmentID));

CREATE TABLE project_employee (
  projectID int(6) NOT NULL,
  employeeID int(6) NOT NULL,
  roleID int(6) NOT NULL,
  status ENUM('active', 'inactive'),
  PRIMARY KEY (projectID, employeeID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE project_employee ADD (CONSTRAINT fk_projects01 FOREIGN KEY (projectID) REFERENCES projects(projectID));

CREATE TABLE project_location (
  locationID int(6) NOT NULL,
  projectID int(6) NOT NULL,
  address varchar(50),
  city varchar(25),
  state varchar(2),
  zip varchar(10),
  phone varchar(16),
  PRIMARY KEY (locationID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ALTER TABLE project_location ADD (CONSTRAINT fk_projects01 FOREIGN KEY (projectID) REFERENCES projects(projectID));

CREATE TABLE project_status (
  projectID int(6) NOT NULL,
  statusID int(6) NOT NULL,
  created timestamp,
  PRIMARY KEY (projectID, statusID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ALTER TABLE project_status ADD (CONSTRAINT fk_projects01 FOREIGN KEY (projectID) REFERENCES projects(projectID));

ALTER TABLE project_status ADD (CONSTRAINT fk_status01 FOREIGN KEY (statusID) REFERENCES status(statusID));

CREATE TABLE scans (
  scanID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  scan varchar(50) NOT NULL,
  location varchar(10),
  severity varchar(10) NOT NULL,
  ip_address varchar(15),
  fqdn varchar(25),
  os varchar(50),
  port int(5),
  proof text,
  date date,
  projectID int(6) NOT NULL,
  PRIMARY KEY (scanID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE users (
  userID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  username varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(128) NOT NULL,
  salt varchar(128) NOT NULL,
  activated tinyint(1) NOT NULL,
  role varchar(25) NOT NULL,
  approved tinyint(1) NOT NULL,
  PRIMARY KEY (userID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE vulnerabilities (
  vulnerabilityID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  vulnerability varchar(100) NOT NULL,
  description text,
  solution text,
  cvss_base_score decimal(3,1),
  see_also text,
  cve varchar(50),
  internal varchar(10),
  external varchar(10),
  scanID int(6) NOT NULL,
  PRIMARY KEY (vulnerabilityID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE webvulns (
  webvulnID int(6) NOT NULL AUTO_INCREMENT,
  modified datetime NOT NULL,
  tool varchar(16) NOT NULL,
  vulnerability varchar(50) NOT NULL,
  findingID int(3) NOT NULL,
  severity varchar(8) NOT NULL,
  description text,
  remediation text,
  see_also text,
  PRIMARY KEY (webvulnID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`userID`, `modified`, `username`, `email`, `password`, `salt`, `activated`, `role`, `approved`) VALUES
(1, '2017-09-18 19:11:15', 'admin', 'admin@acme.com', 'f542eebb272ff24784ddc8f53f1a930532cdfbc1df30e5e6ffbd7e4c01925ee1', '2946e24c29c4368d', 1, '1', 1);

COMMIT;
