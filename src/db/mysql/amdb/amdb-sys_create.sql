-- create database
create database amdb;

-- create and grant local access
create user 'amuser'@'localhost' identified by 'AmUs3r0354';
grant all privileges on amdb.* to 'amuser'@'localhost' with grant option;

-- create and grant remote access
create user 'amuser'@'%' identified by 'AmUs3r0354';
grant all privileges on amdb.* to 'amuser'@'%' with grant option;