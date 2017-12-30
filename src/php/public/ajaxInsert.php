<?php
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

    /* start */
    $query = "select max(projectID) from projects";
    $result = mysqli_query($connection, $query);
    $projectid = mysqli_fetch_row($result);
    $projectid =$projectid[0];
    $ass=$_POST['selectedCountry'];

    $query= "insert into project_assessment values('',$projectid,'$ass')";
    $result = mysqli_query($connection, $query);

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
    }

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $idn = $row1[0]+1;

    $ext_objective = $_POST['ext_objective'];
    $ext_targets = $_POST['ext_targets'];
    $ext_exclude = $_POST['ext_exclude'];
    $ext_notes = $_POST['ext_notes'];

    // UPDATE RECORD.
    @$query_external = "UPDATE projects SET external_objective='$ext_objective',  external_targets='$ext_targets', external_exclude='$ext_exclude', external_notes='$ext_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_external);

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

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $mob_objective = $_POST['mob_objective'];
    $mob_notes = $_POST['mob_notes'];
    @$query_mobile = "UPDATE projects SET mobile_objective='$mob_objective',  mobile_notes='$mob_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_mobile);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $physical_objective = $_POST['phy_objective'];
    $physical_notes = $_POST['phy_notes'];
    @$query_physical = "UPDATE projects SET physical_objective='$physical_objective',  physical_notes='$physical_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_physical);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $social_objective = $_POST['se_objective'];
    $social_notes = $_POST['se_notes'];
    @$query_social = "UPDATE projects SET social_objective='$social_objective',  social_notes='$social_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_social);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $war_objective = $_POST['war_objective'];
    $war_notes = $_POST['war_notes'];
    @$query_war = "UPDATE projects SET war_objective='$war_objective',  war_notes='$war_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_war);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $web_objective = $_POST['web_objective'];
    $web_notes = $_POST['web_notes'];
    @$query_web = "UPDATE projects SET web_objective='$web_objective',  web_notes='$web_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_web);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);
    $wireless_objective = $_POST['wireless_objective'];
    $wireless_notes = $_POST['wireless_notes'];
    @$query_wireless = "UPDATE projects SET wireless_objective='$wireless_objective',  wireless_notes='$wireless_notes' WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_wireless);

    $maxid = 0;
    $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
    $row = mysqli_query($connection, $query);
    $row1 = mysqli_fetch_row($row);

    $projectmgr = $_POST['projectmgr'];
    $emailpmg = $_POST['emailpmg'];
    $cellpmg = $_POST['cellpmg'];

    $consultant1 = $_POST['consultant1'];
    $email1 = $_POST['email1'];
    $cell1 = $_POST['cell1'];

    $consultant2 = $_POST['consultant2'];
    $email2 = $_POST['email2'];
    $cell2 = $_POST['cell2'];

    $consultant3 = $_POST['consultant3'];
    $email3 = $_POST['email3'];
    $cell3 = $_POST['cell3'];

    $consultant4 = $_POST['consultant4'];
    $email4 = $_POST['email4'];
    $cell4 = $_POST['cell4'];

    $consultant5 = $_POST['consultant5'];
    $email5 = $_POST['email5'];
    $cell5 = $_POST['cell5'];

    $consultant6 = $_POST['consultant6'];
    $email6 = $_POST['email6'];
    $cell6 = $_POST['cell6'];

    @$query_resource = "UPDATE projects SET resource_title1='Project Mgr
',resource_name1='$projectmgr', resource_email1='$emailpmg', resource_cell1='$cellpmg',

resource_title2='Consultant 1', resource_name2='$consultant1', resource_email2='$email1', resource_cell2='$cell1',

resource_title3='Consultant 2', resource_name3='$consultant2', resource_email3='$email2', resource_cell3='$cell2',

resource_title4='Consultant 3', resource_name4='$consultant3', resource_email4='$email3', resource_cell4='$cell3',

resource_title5='Consultant 4', resource_name5='$consultant4', resource_email5='$email4', resource_cell5='$cell4',

resource_title6='Consultant 5', resource_name6='$consultant5', resource_email6='$email5', resource_cell6='$cell5',

resource_title7='Consultant 6', resource_name7='$consultant6', resource_email7='$email6', resource_cell7='$cell6'

WHERE projectID=".$row1[0];
    $result = mysqli_query($connection, $query_resource);
?>
