<?php
    $sn="";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";

    $connection = new mysqli($host, $username, $password, $dbname);

    // Query for location.
    $query_loc = "SELECT * FROM employees WHERE employeeID=".$_POST['consultant1'];
    $result_loc = mysqli_query($connection, $query_loc);
    $row_loc = mysqli_fetch_array($result_loc);

    $sn .= $row_loc['email'].",";
    $sn .= $row_loc['cell'].",";

    print $sn;
