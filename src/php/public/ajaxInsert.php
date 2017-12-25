<?php
    //print "hi";
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";

    $connection = new mysqli($host, $username, $password, $dbname);
?>

<?php
    // CREATE RECORD.

    // Check for blank field.
    $project = @trim($_POST['project']);
    $ass="";
    $clientID = $_POST['clientID'];
    $query = "INSERT INTO projects (modified, project, assessmentID, clientID, kickoff, start, finish, tech_qa, draft_delivery, final_delivery, notes, status) VALUES (now(), '$_POST[project]', 1 ,$clientID , '$_POST[kickoff]', '$_POST[start_date]', '$_POST[finish]', '$_POST[tech_qa]', '$_POST[draft_delivery]', '$_POST[final_delivery]', '$_POST[notes]','$_POST[current_status]')";
    $result = mysqli_query($connection, $query);
    //confirm_query($result);

    /* start */
    $query = "select max(projectID) from projects";
    $result = mysqli_query($connection, $query);
    $projectid = mysqli_fetch_row($result);
    $projectid =$projectid[0];
    $ass=$_POST['selectedCountry'];

    $query= "insert into project_assessment values('',$projectid,'$ass')";
    $result = mysqli_query($connection, $query);
    //confirm_query($result);

    //new inclusion
    @$address=$_POST['address'];
    @$city=$_POST['city'];
    @$state=$_POST['state'];
    @$zip=$_POST['zip'];
    @$phone=$_POST['phone'];

    $query= "insert into project_locations values('',$projectid,'$address','$city','$state','$zip','$phone')";
    $result = mysqli_query($connection, $query);
    //new inclusion end 

    for($i=1;$i<=5;$i++){
        $address=$_POST['address'.$i];
        $city=$_POST['city'.$i];
        $state=$_POST['state'.$i];
        $zip=$_POST['zip'.$i];
        $phone=$_POST['phone'.$i];

        $query= "insert into project_locations values('',$projectid,'$address','$city','$state','$zip','$phone')";
        $result = mysqli_query($connection, $query);
        //confirm_query($result);
    }

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $idn = $row1[0]+1;

    //if ($idn==$_POST['projectID']) {
    $ext_objective = $_POST['ext_objective'];
    $ext_targets = $_POST['ext_targets'];
    $ext_exclude = $_POST['ext_exclude'];
    $ext_notes = $_POST['ext_notes'];

    // UPDATE RECORD.
    @$query_external = "UPDATE projects SET external_objective='$ext_objective',  external_targets='$ext_targets', external_exclude='$ext_exclude', external_notes='$ext_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_external);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $int_objective = $_POST['int_objective'];
    $int_targets = $_POST['int_targets'];
    $int_exclude = $_POST['int_exclude'];
    $int_notes = $_POST['int_notes'];

    // UPDATE RECORD.
    @$query_internal = "UPDATE projects SET internal_objective='$int_objective',  internal_targets='$int_targets', internal_exclude='$int_exclude', internal_notes='$int_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_internal);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $mob_objective = $_POST['mob_objective'];
    $mob_notes = $_POST['mob_notes'];
    @$query_mobile = "UPDATE projects SET mobile_objective='$mob_objective',  mobile_notes='$mob_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_mobile);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $physical_objective = $_POST['phy_objective'];
    $physical_notes = $_POST['phy_notes'];
    @$query_physical = "UPDATE projects SET physical_objective='$physical_objective',  physical_notes='$physical_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_physical);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $social_objective = $_POST['se_objective'];
    $social_notes = $_POST['se_notes'];
    @$query_social = "UPDATE projects SET social_objective='$social_objective',  social_notes='$social_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_social);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $war_objective = $_POST['war_objective'];
    $war_notes = $_POST['war_notes'];
    @$query_war = "UPDATE projects SET war_objective='$war_objective',  war_notes='$war_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_war);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $web_objective = $_POST['web_objective'];
    $web_notes = $_POST['web_notes'];
    @$query_web = "UPDATE projects SET web_objective='$web_objective',  web_notes='$web_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_web);
    //confirm_query($result);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $wireless_objective = $_POST['wireless_objective'];
    $wireless_notes = $_POST['wireless_notes'];
    @$query_wireless = "UPDATE projects SET wireless_objective='$wireless_objective',  wireless_notes='$wireless_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_wireless);
    //confirm_query($result);
?>
