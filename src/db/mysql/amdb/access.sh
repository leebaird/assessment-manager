#!/bin/bash

DB_HOST=localhost
DB_PORT=3306
DB_NAME=amdb
DB_USERNAME=amuser
DB_PASSWORD=AmUs3r0354

# Check for OS X
check=`uname -a | awk '{print $1}'`

if [ $check = 'Darwin' ]; then
    mysql=/Applications/XAMPP/xamppfiles/bin/mysql
    web="open -a Safari http://localhost/assessment-manager/src/php/"
else
    mysql=/usr/bin/mysql
    web="firefox -new-tab http://localhost/assessment-manager/src/php/"
fi

case $1 in
    clear)
        $mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
        $mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < create.sql
        echo; echo;;

    connect)
        $mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME
        echo; echo;;

    connect.admin)
        $mysql -uroot
        echo; echo;;

    create)
        $mysql -uroot < sys_create.sql
        $mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < create.sql
        $web
        echo; echo;;

    create2)
        $mysql -uroot < sys_create.sql
        $mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < flat.sql
        $web
        echo; echo;;

    drop)
        $mysql -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < drop.sql
        $mysql -uroot < sys_drop.sql
        echo; echo;;

    load)
        $mysql --local-infile -u$DB_USERNAME -p$DB_PASSWORD -D $DB_NAME < sample_data.sql
        echo; echo;;

    reload)
        $0 clear
        $0 load
        echo; echo;;

    *)
        echo
        echo "Usage: $0 (clear | connect | create | drop | load | reload)"
        echo; echo
esac

