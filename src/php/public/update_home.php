<?php
    $ass=$_POST['selectedCountry'];

    // UPDATE RECORD.
    @$query = "UPDATE projects SET modified=now(), project='$_POST[project]', assessmentID=1, clientID='$_POST[clientID]', kickoff='$_POST[kickoff]', start='$_POST[start_date]', finish='$_POST[finish]', tech_qa='$_POST[tech_qa]', draft_delivery='$_POST[draft_delivery]', final_delivery='$_POST[final_delivery]', notes='$_POST[notes]',status='$_POST[current_status]' WHERE projectID=".intval($_POST['projectID']);

    $result = mysqli_query($connection, $query);
    //confirm_query($result);

    $query = "DELETE FROM project_assessment WHERE projectID=".intval($_POST['projectID']);
    $result = mysqli_query($connection, $query);
    //confirm_query($result);

    $projectid=$_POST['projectID'];
    $query= "insert into project_assessment values('',$projectid,'$ass')";
    $result = mysqli_query($connection, $query);
    //confirm_query($result);

    $query = "DELETE FROM project_locations WHERE projectID=".intval($_POST['projectID']);
    $result = mysqli_query($connection, $query);
    //confirm_query($result);

    //new inclusion
    @$address=$_POST['address'];
    @$city=$_POST['city'];
    @$state=$_POST['state'];
    @$zip=$_POST['zip'];
    @$phone=$_POST['phone'];

    print $query= "insert into project_locations values('',$projectid,'$address','$city','$state','$zip','$phone')";
    $result = mysqli_query($connection, $query);
    //new inclusion end

    for($i=1;$i<=5;$i++){
        @$address=$_POST['address'.$i];
        @$city=$_POST['city'.$i];
        @$state=$_POST['state'.$i];
        @$zip=$_POST['zip'.$i];
        @$phone=$_POST['phone'.$i];

    $query= "insert into project_locations values('',$projectid,'$address','$city','$state','$zip','$phone')";
    $result = mysqli_query($connection, $query);
    //confirm_query($result);
    }
?>
