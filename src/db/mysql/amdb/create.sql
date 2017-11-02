-- lookup tables
CREATE TABLE user_roles (
  userRoleID INT(2) NOT NULL,
  user_role VARCHAR(32) NOT NULL,
  PRIMARY KEY (userRoleID)
);

insert into user_roles values (1, "admin");
insert into user_roles values (2, "user");


CREATE TABLE roles (
  roleID INT(2) NOT NULL,
  role VARCHAR(32) NOT NULL,
  PRIMARY KEY (roleID)
);

insert into roles values (1, "Account Manager");
insert into roles values (2, "Program Manager");
insert into roles values (3, "Project Manager");
insert into roles values (4, "Tech Lead");
insert into roles values (5, "Engineer");


CREATE TABLE status (
  statusID INT(2) NOT NULL,
  status VARCHAR(16) NOT NULL,
  PRIMARY KEY (statusID)
);

insert into status values (1, "Unknown");
insert into status values (2, "Contract");
insert into status values (3, "Scoping");
insert into status values (4, "In Progress");
insert into status values (5, "Reporting");
insert into status values (6, "Review");
insert into status values (7, "Delivered");
insert into status values (8, "Complete");


CREATE TABLE assessments (
  assessmentID INT(2) NOT NULL,
  assessment VARCHAR(32) NOT NULL,
  PRIMARY KEY (assessmentID)
);

insert into assessments values (1, "External");
insert into assessments values (2, "Internal");
insert into assessments values (3, "Mobile");
insert into assessments values (4, "Physical");
insert into assessments values (5, "Social Engineering");
insert into assessments values (6, "War Dail");
insert into assessments values (7, "Web");
insert into assessments values (8, "Wireless");


CREATE TABLE users (
  userID INT(11) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(128) NOT NULL,
  salt VARCHAR(128) NOT NULL,
  userRoleID INT(2) NOT NULL,
  activated tinyINT(1) NOT NULL,
  approved tinyINT(1) NOT NULL,
  PRIMARY KEY (userID)
);

-- FK constraints
ALTER TABLE users ADD (CONSTRAINT fk_urole01 FOREIGN KEY (userRoleID) REFERENCES user_roles(userRoleID));

-- default admin user
INSERT INTO `users` (`userID`, `modified`, `username`, `email`, `password`, `salt`, `userRoleID`, `activated`, `approved`) VALUES
(1, '2017-09-18 19:11:15', 'admin', 'admin@acme.com', 'f542eebb272ff24784ddc8f53f1a930532cdfbc1df30e5e6ffbd7e4c01925ee1', '2946e24c29c4368d', 1, 1, 1);


CREATE TABLE employees (
  employeeID INT(11) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  employee VARCHAR(50) NOT NULL,
  title VARCHAR(25),
  cell VARCHAR(12),
  email VARCHAR(50),
  notes TEXT,
  PRIMARY KEY (employeeID)
);


CREATE TABLE clients (
  clientID INT(11) NOT NULL AUTO_INCREMENT,
  client VARCHAR(50) NOT NULL,
  modified DATETIME NOT NULL,
  web VARCHAR(255),
  PRIMARY KEY (clientID)
);


CREATE TABLE client_locations (
  locationID INT(11) NOT NULL AUTO_INCREMENT,
  clientID INT(11) NOT NULL,
  modified DATETIME NOT NULL,
  address VARCHAR(50),
  city VARCHAR(25),
  state VARCHAR(2),
  zip VARCHAR(10),
  phone VARCHAR(20),
  notes TEXT,
  PRIMARY KEY (locationID)
);

-- FK constraints
ALTER TABLE client_locations ADD (CONSTRAINT fk_clocation01 FOREIGN KEY (clientID) REFERENCES clients(clientID));


CREATE TABLE client_contacts (
  contactID INT(11) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  contact VARCHAR(50) NOT NULL,
  title VARCHAR(50),
  work VARCHAR(20),
  cell VARCHAR(12),
  email VARCHAR(50),
  notes TEXT,
  clientID INT(11) NOT NULL,
  PRIMARY KEY (contactID)
);

-- FK constraints
ALTER TABLE client_contacts ADD (CONSTRAINT fk_ccontact01 FOREIGN KEY (clientID) REFERENCES clients(clientID));


CREATE TABLE client_account_managers (
  clientID INT(11) NOT NULL,
  employeeID INT(11) NOT NULL,
  statusID INT(2) NOT NULL,
  modified DATETIME NOT NULL,
  PRIMARY KEY (clientID, employeeID)
);

-- FK constraints
ALTER TABLE client_account_managers ADD (CONSTRAINT fk_cam01 FOREIGN KEY (clientID) REFERENCES clients(clientID));
ALTER TABLE client_account_managers ADD (CONSTRAINT fk_cam02 FOREIGN KEY (employeeID) REFERENCES employees(employeeID));
ALTER TABLE client_account_managers ADD (CONSTRAINT fk_cam03 FOREIGN KEY (statusID) REFERENCES status(statusID));


CREATE TABLE projects (
  projectID INT(11) NOT NULL,
  modified DATETIME NOT NULL,
  project VARCHAR(50) NOT NULL,
  assessmentID INT(11) NOT NULL,
  clientID INT(11) NOT NULL,
  kickoff VARCHAR(12) DEFAULT NULL,
  start VARCHAR(12) DEFAULT NULL,
  finish VARCHAR(12) DEFAULT NULL,
  tech_qa VARCHAR(12) DEFAULT NULL,
  draft_delivery VARCHAR(12) DEFAULT NULL,
  final_delivery VARCHAR(12) DEFAULT NULL,
  notes TEXT,
  status VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE projects
  ADD PRIMARY KEY (projectID),
  ADD KEY fk_client01 (clientID),
  ADD KEY fk_assessment01 (assessmentID);

ALTER TABLE projects
  MODIFY projectID INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE projects
  ADD CONSTRAINT fk_assessment01 FOREIGN KEY (assessmentID) REFERENCES assessments (assessmentID),
  ADD CONSTRAINT fk_client01 FOREIGN KEY (clientID) REFERENCES clients (clientID);


CREATE TABLE project_status (
  projectID INT(11) NOT NULL,
  statusID INT(3) NOT NULL,
  created TIMESTAMP NOT NULL,
  PRIMARY KEY (projectID, statusID)
);

ALTER TABLE project_status ADD (CONSTRAINT fk_ps01 FOREIGN KEY (statusID) REFERENCES status(statusID));
ALTER TABLE project_status ADD (CONSTRAINT fk_ps02 FOREIGN KEY (projectID) REFERENCES projects(projectID));


CREATE TABLE project_assessment (
  id INT(11) NOT NULL,
  projectID INT(11) NOT NULL,
  assessmentID VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE project_assessment ADD PRIMARY KEY (id);
ALTER TABLE project_assessment MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;


CREATE TABLE project_employees (
  projectID INT(11) NOT NULL,
  employeeID INT(11) NOT NULL,
  roleID INT(2) NOT NULL,
  statusID INT(2) NOT NULL,
  modified DATETIME NOT NULL,
  notes TEXT,
  PRIMARY KEY (projectID, employeeID, roleID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE project_employees ADD (CONSTRAINT fk_pe01 FOREIGN KEY (projectID) REFERENCES projects(projectID));
ALTER TABLE project_employees ADD (CONSTRAINT fk_pe02 FOREIGN KEY (employeeID) REFERENCES employees(employeeID));
ALTER TABLE project_employees ADD (CONSTRAINT fk_pe03 FOREIGN KEY (roleID) REFERENCES roles(roleID));
ALTER TABLE project_employees ADD (CONSTRAINT fk_pe04 FOREIGN KEY (statusID) REFERENCES status(statusID));


CREATE TABLE project_locations (
  locationID int(11) NOT NULL,
  projectID int(11) NOT NULL,
  address varchar(50) DEFAULT NULL,
  city varchar(25) DEFAULT NULL,
  state varchar(2) DEFAULT NULL,
  zip varchar(10) DEFAULT NULL,
  phone varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE project_locations ADD PRIMARY KEY (locationID), ADD KEY fk_plocation01 (projectID);
ALTER TABLE project_locations MODIFY locationID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
ALTER TABLE project_locations ADD CONSTRAINT fk_plocation01 FOREIGN KEY (projectID) REFERENCES projects (projectID);


CREATE TABLE contacts (
  contactID INT(11) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  contact VARCHAR(50) NOT NULL,
  title VARCHAR(50),
  work VARCHAR(20),
  cell VARCHAR(12),
  email VARCHAR(50),
  notes TEXT,
  clientID INT(11) NOT NULL,
  projectID INT(11) NOT NULL,
  PRIMARY KEY (contactID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE project_location_contacts (
  projectID INT(11) NOT NULL,
  clientLocationID INT(11) NOT NULL,
  contactID INT(11) NOT NULL,
  PRIMARY KEY (projectID, clientLocationID, contactID)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE project_location_contacts ADD (CONSTRAINT fk_plc01 FOREIGN KEY (projectID) REFERENCES projects(projectID));
ALTER TABLE project_location_contacts ADD (CONSTRAINT fk_plc02 FOREIGN KEY (clientLocationID) REFERENCES client_locations(locationID));
ALTER TABLE project_location_contacts ADD (CONSTRAINT fk_plc03 FOREIGN KEY (contactID) REFERENCES contacts(contactID));


CREATE TABLE findings (
  findingID INT(11) NOT NULL AUTO_INCREMENT,
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
  hostvulnID INT(11) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  tool VARCHAR(16) NOT NULL,
  vulnerability VARCHAR(128) NOT NULL,
  findingID INT(11) NOT NULL,
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


CREATE TABLE scans (
  scanID INT(11) NOT NULL AUTO_INCREMENT,
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
  projectID INT(11) NOT NULL,
  PRIMARY KEY (scanID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE vulnerabilities (
  vulnerabilityID INT(11) NOT NULL AUTO_INCREMENT,
  modified DATETIME NOT NULL,
  vulnerability VARCHAR(100) NOT NULL,
  description TEXT,
  solution TEXT,
  cvss_base_score decimal(3,1),
  see_also TEXT,
  cve VARCHAR(50),
  internal VARCHAR(10),
  external VARCHAR(10),
  scanID INT(11) NOT NULL,
  PRIMARY KEY (vulnerabilityID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE webvulns (
  webvulnID INT(11) NOT NULL AUTO_INCREMENT,
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


COMMIT;
