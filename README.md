Follow on Twitter [![Twitter Follow](https://img.shields.io/twitter/follow/discoverscripts.svg?style=social&label=Follow)](https://twitter.com/discoverscripts) [![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/leebaird/discover/blob/master/LICENSE)

### About
* This project is currently in the alpha stage of development.
* A central place for PMs to store information on clients, contacts, employees, and projects.

### Requirements
* Install XAMPP (PHP 5.6.31): https://www.apachefriends.org/download.html
* Use /Applications/XAMPP/manager-osx to start MySQL and Apache.
* cd /Applications/XAMPP/htdocs/
* git clone https://github.com/leebaird/assessment-manager.git

### Linux Setup
* cd /opt/xampp/htdocs/assessment-manager/bin/
 * ./setenv.sh
* cd ../src/db/mysql/amdb/
* ./amdb.sh setup

### OS X Setup
* cd /Applications/XAMPP/htdocs/assessment-manager/bin/
* ./setenv.sh
* cd ../src/db/mysql/amdb/
* ./amdb.sh setup

### Usage
* Register for a new account, then login.

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
