Follow on Twitter [![Twitter Follow](https://img.shields.io/twitter/follow/discoverscripts.svg?style=social&label=Follow)](https://twitter.com/discoverscripts) 
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/leebaird/discover/blob/master/LICENSE)

### About
```
This project is currently in the beta stage of development.

Manage all logistical information for a pentest including clients, contacts, employees, findings, projects,
scoping, and vulnerabilities.

Special thanks to Shipul Biswas for all his help on this project!
https://www.guru.com/freelancers/far-bis
```

### macOS Requirements
```
Homebrew
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

XAMPP
https://www.apachefriends.org/download.html
```

### Setup
```
Open XAMPP and use the control panel to start MySQL and Apache.
cd /Applications/XAMPP/htdocs/
Change line 8 in index.php to header('Location: '.$uri.'/assessment-manager/src/php/index.php');
git clone https://github.com/leebaird/assessment-manager.git
```

### Usage
```
cd assessment-manager/bin/
./setenv.sh osx

cd ../src/db/mysql/amdb/
./access.sh setup
./access.sh clear
./access.sh load

Open Safari to localhost and enter the default creds.
account: admin
password: 1234!@#$qwerQWER
```

### Pages
```
Clients
Contacts
Employees
Findings: create finding categories with boiler plate text for your deliverables.
Projects: track important dates and various aspects of an engagement.
Vulnerabilities:
    Host: import Nessus and Nexpose findings.
    Web: import Burp Suite Pro and Acunetix findings.
```
