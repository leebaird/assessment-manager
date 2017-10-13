Follow on Twitter [![Twitter Follow](https://img.shields.io/twitter/follow/discoverscripts.svg?style=social&label=Follow)](https://twitter.com/discoverscripts) [![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/leebaird/discover/blob/master/LICENSE)

### About
* This project is currently in the alpha stage of development.
* Manage all logistical information for a pentest including clients, contacts, employees, findings, projects, scoping, and vulnerabilities.

### Requirements
* Install XAMPP (PHP 7.1.9): https://www.apachefriends.org/download.html

### OS X Setup
* Use /Applications/XAMPP/manager-osx to start MySQL and Apache.
* cd /Applications/XAMPP/htdocs/
* git clone https://github.com/leebaird/assessment-manager.git

### Linux Setup
* Start MySQL and Apache.
* cd /opt/xampp/htdocs/
* git clone https://github.com/leebaird/assessment-manager.git

### Usage
* cd assessment-manager/bin/
* . ./setenv.sh

* cd ../src/db/mysql/amdb/
* ./access.sh setup
* ./access.sh clear
* ./access.sh load

* Default account: admin
* Default password: 1234!@#$qwerQWER

### Pages
```
* Clients
* Contacts
* Employees
* Findings: create finding categories with boiler plate text for your deliverables.
* Projects: track important dates and various aspects of an engagement.
* Vulnerabilities:
    Host: import Nessus and Nexpose findings.
    Web: import Burp and Acunetix findings.
```
