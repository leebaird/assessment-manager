<?php
    $sn="";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";
    $connection = new mysqli($host, $username, $password, $dbname);
    $query = "SELECT * FROM contacts WHERE clientID=".$_POST['country_id'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    //confirm_query($result);

    $sn .=$row['contact']." ";

    $query1 = "SELECT * FROM employee_project WHERE projectID=".$row['projectID'];
    $result1 = mysqli_query($connection, $query1);

    while ($row1 = mysqli_fetch_array($result1)) {
        $query2 = "SELECT * FROM employees WHERE employeeID=".$row1['employeeID'];
        $result2 = mysqli_query($connection, $query2);
        $row2 = mysqli_fetch_array($result2);
        $sn .= $row2['employee']." ";
    }
    print $sn;
