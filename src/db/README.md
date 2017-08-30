## MySQL

### Setup Admin Level User Account
```
# create a user
mysql --local-infile -u<username> -D <database name> -p < mysql-sys-admin_create.sql

# drop a user
mysql --local-infile -u<username> -D <database name> -p < mysql-sys-admin_drop.sql
```
