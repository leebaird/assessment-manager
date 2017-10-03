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

    $sn .= $row['address'].",";
    $sn .= $row['city'].",";
    $sn .= $row['state'].",";
    $sn .= $row['zip'].",";
    $sn .= $row['phone'].",";
    $sn .= $row['web'].",";

    $query1 = "SELECT * FROM employees WHERE employeeID=".$row['employeeID'];
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_array($result1);
	$sn .= $row1['employee'].",";
/*
    $query2 = "SELECT * FROM employees WHERE employeeID=".$row['projectmgr'];
    $result2 = mysqli_query($connection, $query2);
    $row2 = mysqli_fetch_array($result2);

    $query3 = "SELECT * FROM employees WHERE employeeID=".$row['consultant1'];
    $result3 = mysqli_query($connection, $query3);
    $row3 = mysqli_fetch_array($result3);

    $query4 = "SELECT * FROM employees WHERE employeeID=".$row['consultant2'];
    $result4 = mysqli_query($connection, $query4);
    $row4 = mysqli_fetch_array($result4);

    $query5 = "SELECT * FROM employees WHERE employeeID=".$row['consultant3'];
    $result5 = mysqli_query($connection, $query5);
    $row5 = mysqli_fetch_array($result5);

    $query6 = "SELECT * FROM employees WHERE employeeID=".$row['consultant4'];
    $result6 = mysqli_query($connection, $query6);
    $row6 = mysqli_fetch_array($result6);

    $sn .= $row['projectmgr'].",";
    $sn .= $row['consultant1'].",";
    $sn .= $row['consultant2'].",";
    $sn .= $row['consultant3'].",";
    $sn .= $row['consultant4'].",";

    $sn .= $row1['employee'].",";
    $sn .= $row2['employee'].",";
    $sn .= $row3['employee'].",";
    $sn .= $row4['employee'].",";
    $sn .= $row5['employee'].",";
    $sn .= $row6['employee'].",";
*/
    print $sn;
