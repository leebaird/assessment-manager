#!/bin/bash

DB_HOST=localhost
DB_PORT=3306
DB_NAME=amdb
DB_USERNAME=amuser
DB_PASSWORD=AmUs3r0354

case "$1" in
  'clear')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < create.sql
    ;;

  'connect')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME
    ;;

  'connect.admin')
    mysql -uroot
    ;;

  'drop')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
    ;;

  'load')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < sample_data.sql
    ;;

  'reload')
    $0 clear
    $0 load
    ;;

  'remove')
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
    mysql -uroot < sys_drop.sql
    ;;

  'setup')
    mysql -uroot < sys_create.sql
    mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < create.sql
    ;;

  *)
    echo "Usage: $0 (clear | connect | drop | load | reload | remove | setup)"
esac

