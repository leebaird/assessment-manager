#!/bin/bash

# Check for OS X
check=`uname -a | awk '{print $1}'`

if [ $check = 'Darwin' ]; then
    export LAMPP_HOME=/Applications/XAMPP
    export PATH=$LAMPP_HOME/bin:$PATH
    echo
    echo 'Environmental variables set for OS X.'
else
    export LAMPP_HOME=/opt/lampp
    export PATH=$LAMPP_HOME/bin:$PATH
    echo
    echo 'Environmental variables set for Linux.'
fi

echo
echo
