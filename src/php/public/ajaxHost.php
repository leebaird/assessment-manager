<?php
    $sn="";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";

    $connection = new mysqli($host, $username, $password, $dbname);
    $query = "SELECT * FROM clients WHERE clientID=".$_POST['country_id'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $query_loc = "SELECT * FROM client_locations WHERE clientID=".$_POST['country_id'];
    $result_loc = mysqli_query($connection, $query_loc);
    $sn .= "<select class='form-control' name='address'  id='address'>"; 
    $sn .= "<option value=''>Select Address</option>";

    while($row_loc = mysqli_fetch_array($result_loc)){
        $sn .= "<option value='".$row_loc['locationID']."'>".$row_loc['address']."</option>";
    }

    $sn .= "</select>";

    print $sn;
