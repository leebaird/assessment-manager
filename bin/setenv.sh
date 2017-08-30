#!/bin/bash

case "$1" in
  'linux')
    # linux environment
    export LAMPP_HOME=/opt/lampp
    export PATH=$LAMPP_HOME/bin:$PATH
    ;;

  'osx')
    # osx environment
    export LAMPP_HOME=/Applications/XAMPP
    export PATH=$LAMPP_HOME/bin:$PATH
    ;;

  *)
    echo
    echo "Usage: $0 {linux | osx}"
    echo

esac