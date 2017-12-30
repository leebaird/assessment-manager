<?php
    $sn="";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";

    $connection = new mysqli($host, $username, $password, $dbname);
    $query_loc = "SELECT * FROM client_locations WHERE locationID=".$_POST['country_id'];
    $result_loc = mysqli_query($connection, $query_loc);
    $row_loc = mysqli_fetch_array($result_loc);

    $query = "SELECT * FROM clients WHERE clientID=".$row_loc['clientID'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $sn .= $row['web'].",";
    $sn .= $row_loc['city'].",";
    $sn .= $row_loc['state'].",";
    $sn .= $row_loc['zip'].",";
    $sn .= $row_loc['phone'].",";

    print $sn;
