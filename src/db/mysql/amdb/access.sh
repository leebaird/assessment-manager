#!/bin/bash

DB_HOST=localhost
DB_PORT=3306
DB_NAME=amdb
DB_USERNAME=amuser
DB_PASSWORD=AmUs3r0354

case "$1" in
  'setup')
    mysql -uroot < sys_create.sql
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < create.sql
    ;;

  'clear')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < create.sql
    ;;

  'drop')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
    ;;

  'load')
    mysql --local-infile -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < load.sql
    ;;

  'reload')
    $0 clear
    $0 load
    ;;

  'connect')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME
    ;;

  'connect.admin')
    mysql -uroot
    ;;

  'remove')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
    mysql -uroot < sys_drop.sql
    ;;

  *)
    echo "Usage: $0 {clear | load | reload | connect | drop | remove}"

esac
exit 0

