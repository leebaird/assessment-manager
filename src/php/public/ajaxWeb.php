<?php
    $sn="";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";
    $connection = new mysqli($host,$username,$password,$dbname);
    $query = "SELECT * FROM findings WHERE findingID=".$_POST['findingID'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    $sn .= $row['severity']." ";
    $sn .= $row['observation']." ";
    $sn .= $row['remediation']." ";
    $sn .= $row['see_also']." ";

    print $sn;
?>
