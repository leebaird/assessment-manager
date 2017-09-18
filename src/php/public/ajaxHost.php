<?php
    $sn="";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";
    $connection = new mysqli($host,$username,$password,$dbname);
    $query = "SELECT * FROM clients WHERE clientID=".$_POST['country_id'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    $sn .= $row['address']." ";
    $sn .= $row['state']." ";
    $sn .= $row['zip']." ";
    $sn .= $row['phone']." ";
    $sn .= $row['web']." ";

    print $sn;
?>
