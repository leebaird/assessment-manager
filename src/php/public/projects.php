<?php
    $bodyid = "projects";
    include "../includes/header.php";
    require_once("../includes/common.php");
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#clientID').on('change',function(){
            var countryID = $(this).val();

            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxHost.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        document.getElementById('address').innerHTML = html;
                        document.getElementById('address1').innerHTML = html;
                        document.getElementById('address2').innerHTML = html;
                        document.getElementById('address3').innerHTML = html;
                        document.getElementById('address4').innerHTML = html;
                        document.getElementById('address5').innerHTML = html;
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#address').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxSelect.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        var res = html.split(",");
                        $('#web').val(res[0]);
                        $('#city').val(res[1]);
                        $('#state').val(res[2]);
                        $('#zip').val(res[3]);
                        $('#phone').val(res[4]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#address1').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxSelect.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        var res = html.split(",");
                        $('#city1').val(res[1]);
                        $('#state1').val(res[2]);
                        $('#zip1').val(res[3]);
                        $('#phone1').val(res[4]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#address2').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxSelect.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        var res = html.split(",");
                        $('#city2').val(res[1]);
                        $('#state2').val(res[2]);
                        $('#zip2').val(res[3]);
                        $('#phone2').val(res[4]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#address3').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxSelect.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        var res = html.split(",");
                        $('#city3').val(res[1]);
                        $('#state3').val(res[2]);
                        $('#zip3').val(res[3]);
                        $('#phone3').val(res[4]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#address4').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxSelect.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        var res = html.split(",");
                        $('#city4').val(res[1]);
                        $('#state4').val(res[2]);
                        $('#zip4').val(res[3]);
                        $('#phone4').val(res[4]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#address5').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'ajaxSelect.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        var res = html.split(",");
                        $('#city5').val(res[1]);
                        $('#state5').val(res[2]);
                        $('#zip5').val(res[3]);
                        $('#phone5').val(res[4]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            });

        $('#consultant1').on('change',function(){
            var consultant1 = $(this).val();
            if(consultant1==$('#consultant2').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant1').val("");
                return false;
            }

            else if(consultant1==$('#consultant3').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant1').val("");
                return false;
            }

            else if(consultant1==$('#consultant4').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant1').val("");
                return false;
            }

            else if(consultant1==$('#consultant5').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant1').val("");
                return false;
            }

            else if(consultant1==$('#consultant6').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant1').val("");
                return false;
            }

            else if(consultant1==$('#projectmgr').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant1').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#email1').val(res[0]);
                        $('#cell1').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });

        $('#consultant2').on('change',function(){
            var consultant1 = $(this).val();
            if(consultant1==$('#consultant1').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant2').val("");
                return false;
            }

            else if(consultant1==$('#consultant3').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant2').val("");
                return false;
            }

            else if(consultant1==$('#consultant4').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant2').val("");
                return false;
            }

            else if(consultant1==$('#consultant5').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant2').val("");
                return false;
            }

            else if(consultant1==$('#consultant6').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant2').val("");
                return false;
            }

            else if(consultant1==$('#projectmgr').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant2').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#email2').val(res[0]);
                        $('#cell2').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });

        $('#consultant3').on('change',function(){
            var consultant1 = $(this).val();

            if(consultant1==$('#consultant2').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant3').val("");
                return false;
            }

            else if(consultant1==$('#consultant1').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant3').val("");
                return false;
            }

            else if(consultant1==$('#consultant4').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant3').val("");
                return false;
            }

            else if(consultant1==$('#consultant5').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant3').val("");
                return false;
            }

            else if(consultant1==$('#consultant6').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant3').val("");
                return false;
            }

            else if(consultant1==$('#projectmgr').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant3').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#email3').val(res[0]);
                        $('#cell3').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });

        $('#consultant4').on('change',function(){
            var consultant1 = $(this).val();

            if(consultant1==$('#consultant2').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant4').val("");
                return false;
            }

            else if(consultant1==$('#consultant3').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant4').val("");
                return false;
            }

            else if(consultant1==$('#consultant1').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant4').val("");
                return false;
            }

            else if(consultant1==$('#consultant5').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant4').val("");
                return false;
            }

            else if(consultant1==$('#consultant6').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant4').val("");
                return false;
            }

            else if(consultant1==$('#projectmgr').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant4').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#email4').val(res[0]);
                        $('#cell4').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });

        $('#consultant5').on('change',function(){
            var consultant1 = $(this).val();
            if(consultant1==$('#consultant2').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant5').val("");
                return false;
            }

            else if(consultant1==$('#consultant3').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant5').val("");
                return false;
            }

            else if(consultant1==$('#consultant4').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant5').val("");
                return false;
            }

            else if(consultant1==$('#consultant1').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant5').val("");
                return false;
            }

            else if(consultant1==$('#consultant6').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant5').val("");
                return false;
            }

            else if(consultant1==$('#projectmgr').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant5').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#email5').val(res[0]);
                        $('#cell5').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });

        $('#consultant6').on('change',function(){
            var consultant1 = $(this).val();
            if(consultant1==$('#consultant2').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant6').val("");
                return false;
            }

            else if(consultant1==$('#consultant3').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant6').val("");
                return false;
            }

            else if(consultant1==$('#consultant4').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant6').val("");
                return false;
            }

            else if(consultant1==$('#consultant5').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant6').val("");
                return false;
            }

            else if(consultant1==$('#consultant1').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant6').val("");
                return false;
            }

            else if(consultant1==$('#projectmgr').val()){
                alert("This person has already been chosen, select another.");
                $('#consultant6').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#email6').val(res[0]);
                        $('#cell6').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });

        $('#projectmgr').on('change',function(){
            var consultant1 = $(this).val();
            if(consultant1==$('#consultant2').val()){
                alert("This person has already been chosen, select another.");
                $('#projectmgr').val("");
                return false;
            }

            else if(consultant1==$('#consultant3').val()){
                alert("This person has already been chosen, select another.");
                $('#projectmgr').val("");
                return false;
            }

            else if(consultant1==$('#consultant4').val()){
                alert("This person has already been chosen, select another.");
                $('#projectmgr').val("");
                return false;
            }

            else if(consultant1==$('#consultant5').val()){
                alert("This person has already been chosen, select another.");
                $('#projectmgr').val("");
                return false;
            }

            else if(consultant1==$('#consultant1').val()){
                alert("This person has already been chosen, select another.");
                $('#projectmgr').val("");
                return false;
            }

            else if(consultant1==$('#consultant6').val()){
                alert("This person has already been chosen, select another.");
                $('#projectmgr').val("");
                return false;
            }

            else {
            if(consultant1){
                $.ajax({
                    type:'POST',
                    url:'ajaxEmployee.php',
                    data:'consultant1='+consultant1,
                    success:function(html){
                        var res = html.split(",");
                        $('#emailpmg').val(res[0]);
                        $('#cellpmg').val(res[1]);
                    }
                    });
                }else{
                    //$('#city').html('Sorry');
                }
            }
            });
        });
</script>

<script>
    $(document).ready(function(){
    $("#one").hide();
    $("#two").hide();
    $("#three").hide();
    $("#four").hide();
    $("#five").hide();

    $("#show").click(function(){
        $("#one").show();
    });

    $("#hide1").click(function(){
        $("#one").hide();
    });

    $("#show1").click(function(){
        $("#two").show();
    });

    $("#hide2").click(function(){
        $("#two").hide();
    });

    $("#show2").click(function(){
        $("#three").show();
    });

    $("#hide3").click(function(){
        $("#three").hide();
    });

    $("#show3").click(function(){
        $("#four").show();
    });

    $("#hide4").click(function(){
        $("#four").hide();
    });

    $("#show4").click(function(){
        $("#five").show();
    });

    $("#hide5").click(function(){
        $("#five").hide();
    });
});
</script>

<?php
if (isset($_POST['create'])) {
    // CREATE RECORD.

    // Check for blank field.
    $project = trim($_POST['project']);

    if (empty($project)) {
        ?>
        <br>
        <button class="btn btn-danger" type="button"><strong>Warning!</strong> You must enter a project.</button>
        <br><br>
        <a class="btn btn-default" href="projects.php?create" input type="button">Back</a>
        <?php exit;
    }

    $clientID = trim($_POST['clientID']);

    if (empty($clientID)) {
        ?>
        <br>
        <button class="btn btn-danger" type="button"><strong>Warning!</strong> You must enter a client.</button>
        <br><br>
        <a class="btn btn-default" href="projects.php?create" input type="button">Back</a>
        <?php exit;
    }

    $ass="";
    $clientID = $_POST['clientID'];
    $query = "INSERT INTO projects (modified, project, assessmentID, clientID, kickoff, start, finish, tech_qa, draft_delivery, final_delivery, notes, status) VALUES (now(), '$_POST[project]', 1 ,$clientID , '$_POST[kickoff]', '$_POST[start_date]', '$_POST[finish]', '$_POST[tech_qa]', '$_POST[draft_delivery]', '$_POST[final_delivery]', '$_POST[notes]','$_POST[current_status]')";
    $result = mysqli_query($connection, $query);
    confirm_query($result);

/* start */
    $query = "select max(projectID) from projects";
    $result = mysqli_query($connection, $query);
    $projectid = mysqli_fetch_row($result);
    $projectid =$projectid[0];
    $ass = "";

    foreach(@$_POST['assessment'] as $selected){
        if(isset($_POST['assessment'])){
            $ass = $ass.$selected." ";  }
}
    $query= "insert into project_assessment values('',$projectid,'$ass')";
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    for($i=1;$i<=5;$i++){
        $address=$_POST['address'.$i];
        $city=$_POST['city'.$i];
        $state=$_POST['state'.$i];
        $zip=$_POST['zip'.$i];
        $phone=$_POST['phone'.$i];

        $query= "insert into project_locations values('',$projectid,'$address','$city','$state','$zip','$phone')";
        $result = mysqli_query($connection, $query);
        confirm_query($result);
    }

    //resource
    /*
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

    //external
    $ext_objective = $_POST['ext_objective'];
    $ext_targets = $_POST['ext_targets'];
    $ext_exclude = $_POST['ext_exclude'];
    $ext_notes = $_POST['ext_notes'];
    print $query_external = "INSERT INTO projects (external_objective, external_targets, external_exclude, external_notes) VALUES ('$ext_objective', '$ext_targets', '$ext_exclude', '$ext_notes')";exit;
    $result = mysqli_query($connection, $query_external);
    confirm_query($result);

    //internal

    //mobile

    //physical

    //social eng

    //war dall

    //web

    //wireless
    */
}

if (isset($_POST['update'])) {
    $ass="";

    // UPDATE RECORD.
    @$query = "UPDATE projects SET modified=now(), project='$_POST[project]', assessmentID=1, clientID='$_POST[clientID]', kickoff='$_POST[kickoff]', start='$_POST[start_date]', finish='$_POST[finish]', tech_qa='$_POST[tech_qa]', draft_delivery='$_POST[draft_delivery]', final_delivery='$_POST[final_delivery]', notes='$_POST[notes]',status='$_POST[current_status]' WHERE projectID=".intval($_POST['update']);

    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM project_assessment WHERE projectID=".intval($_POST['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    foreach((array)@$_POST['assessment'] as $selected){
        if(isset($_POST['assessment'])){
            $ass = $ass.$selected." ";  }
}

    $projectid=$_POST['update'];
    $query= "insert into project_assessment values('',$projectid,'$ass')";
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM project_locations WHERE projectID=".intval($_POST['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    for($i=1;$i<=5;$i++){
        @$address=$_POST['address'.$i];
        @$city=$_POST['city'.$i];
        @$state=$_POST['state'.$i];
        @$zip=$_POST['zip'.$i];
        @$phone=$_POST['phone'.$i];

    $query= "insert into project_locations values('',$projectid,'$address','$city','$state','$zip','$phone')";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    }

    //resource
    /*
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
    */

    //internal

    //mobile

    //physical

    //social eng

    //war dall

    //web

    //wireless

}

    //update external
    if(isset($_POST['update_ext'])){
    $ext_objective = $_POST['ext_objective'];
    $ext_targets = $_POST['ext_targets'];
    $ext_exclude = $_POST['ext_exclude'];
    $ext_notes = $_POST['ext_notes'];

    // UPDATE RECORD.
    @$query_external = "UPDATE projects SET external_objective='$ext_objective',  external_targets='$ext_targets', external_exclude='$ext_exclude', external_notes='$ext_notes' WHERE projectID=".$_POST['projectID'];
    $result = mysqli_query($connection, $query_external);
    confirm_query($result);
    }

    //update external Create
    if(isset($_POST['create_external'])){
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
        confirm_query($result);
        //}
        /*  else {
            print "<script>
            alert('Enter project information first');
            window.location='projects.php?create&projectID='+$idn;
            </script>";
        }*/
    }

    //update internal
    if(isset($_POST['int_submit'])){
        $int_objective = $_POST['int_objective'];
        $int_targets = $_POST['int_targets'];
        $int_exclude = $_POST['int_exclude'];
        $int_notes = $_POST['int_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET internal_objective='$int_objective',  internal_targets='$int_targets', internal_exclude='$int_exclude', internal_notes='$int_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update internal create
    if(isset($_POST['create_internal'])){
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
        confirm_query($result);
    }

    //update internal
    if(isset($_POST['mob_submit'])){
        $mob_objective = $_POST['mob_objective'];
        $mob_notes = $_POST['mob_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET mobile_objective='$mob_objective',  mobile_notes='$mob_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update mobile create
    if(isset($_POST['create_mobile'])){
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);
        $mob_objective = $_POST['mob_objective'];
        $mob_notes = $_POST['mob_notes'];
        @$query_mobile = "UPDATE projects SET mobile_objective='$mob_objective',  mobile_notes='$mob_notes' WHERE projectID=".$row1[0];
        $result = mysqli_query($connection, $query_mobile);
        confirm_query($result);
    }

    //update physical
    if(isset($_POST['physical_submit'])){
        $physical_objective = $_POST['phy_objective'];
        $physical_notes = $_POST['phy_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET physical_objective='$physical_objective',  physical_notes='$physical_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update physical create
    if(isset($_POST['create_physical'])){
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);
        $physical_objective = $_POST['phy_objective'];
        $physical_notes = $_POST['phy_notes'];
        @$query_physical = "UPDATE projects SET physical_objective='$physical_objective',  physical_notes='$physical_notes' WHERE projectID=".$row1[0];
        $result = mysqli_query($connection, $query_physical);
        confirm_query($result);
    }

    //update social
    if(isset($_POST['se_submit'])){
        $social_objective = $_POST['se_objective'];
        $social_notes = $_POST['se_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET social_objective='$social_objective',  social_notes='$social_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update social create
    if(isset($_POST['create_se'])){
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);
        $social_objective = $_POST['se_objective'];
        $social_notes = $_POST['se_notes'];
        @$query_social = "UPDATE projects SET social_objective='$social_objective',  social_notes='$social_notes' WHERE projectID=".$row1[0];
        $result = mysqli_query($connection, $query_social);
        confirm_query($result);
    }

    //update war
    if(isset($_POST['war_submit'])){
        $war_objective = $_POST['war_objective'];
        $war_notes = $_POST['war_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET war_objective='$war_objective',  war_notes='$war_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update social create
    if(isset($_POST['create_war'])){
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);
        $war_objective = $_POST['war_objective'];
        $war_notes = $_POST['war_notes'];
        @$query_war = "UPDATE projects SET war_objective='$war_objective',  war_notes='$war_notes' WHERE projectID=".$row1[0];
        $result = mysqli_query($connection, $query_war);
        confirm_query($result);
    }

    //update social
    if(isset($_POST['web_submit'])){
        $web_objective = $_POST['web_objective'];
        $web_notes = $_POST['web_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET web_objective='$web_objective',  web_notes='$web_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update web create
    if(isset($_POST['create_web'])){
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);
        $web_objective = $_POST['web_objective'];
        $web_notes = $_POST['web_notes'];
        @$query_web = "UPDATE projects SET web_objective='$web_objective',  web_notes='$web_notes' WHERE projectID=".$row1[0];
        $result = mysqli_query($connection, $query_web);
        confirm_query($result);
    }

    if(isset($_POST['wireless_submit'])){
        $wireless_objective = $_POST['wireless_objective'];
        $wireless_notes = $_POST['wireless_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET wireless_objective='$wireless_objective',  wireless_notes='$wireless_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

    //update web create
    if(isset($_POST['create_wire'])){
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);
        $wireless_objective = $_POST['wire_objective'];
        $wireless_notes = $_POST['wire_notes'];
        @$query_wireless = "UPDATE projects SET wireless_objective='$wireless_objective',  wireless_notes='$wireless_notes' WHERE projectID=".$row1[0];
        $result = mysqli_query($connection, $query_wireless);
        confirm_query($result);
    }

    if(isset($_POST['wire_submit'])){
        $wireless_objective = $_POST['wire_objective'];
        $wireless_notes = $_POST['wire_notes'];

        // UPDATE RECORD.
        @$query_external = "UPDATE projects SET wireless_objective='$wireless_objective',  wireless_notes='$wireless_notes' WHERE projectID=".$_POST['projectID'];
        $result = mysqli_query($connection, $query_external);
        confirm_query($result);
    }

if (isset($_GET['delete'])) {
    // DELETE RECORD.
    $query = "DELETE FROM project_locations WHERE projectID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM project_assessment WHERE projectID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM projects WHERE projectID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
}

if (isset($_GET['create'])) {
    ?>

<br><br><br>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Project</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs" role="tablist">
                     <?php if(@$_GET['psl']!='external' && @$_GET['psl']!='internal' && @$_GET['psl']!='mobile' && @$_GET['psl']!='physical' && @$_GET['psl']!='social-eng' && @$_GET['psl']!='war-dail' && @$_GET['psl']!='web' && @$_GET['psl']!='wireless') { ?>
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <?php } else { ?>

                    <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <?php } ?>
                    <li role="presentation"><a href="#resources" aria-controls="resources" role="tab" data-toggle="tab">Resources</a></li>
                     <?php if(@$_GET['psl']=='external') { ?>
                    <li role="presentation" class="active"><a href="#external" aria-controls="external" role="tab" data-toggle="tab">External</a></li>
                    <?php } else {?>

                    <li role="presentation"><a href="#external" aria-controls="external" role="tab" data-toggle="tab">External</a></li>
                    <?php } ?>
                    <?php if(@$_GET['psl']=='internal') { ?>

                    <li role="presentation" class="active"><a href="#internal" aria-controls="internal" role="tab" data-toggle="tab">Internal</a></li>
                    <?php } else {?>
                    <li role="presentation"><a href="#internal" aria-controls="internal" role="tab" data-toggle="tab">Internal</a></li>
                    <?php } ?>
                    <?php if(@$_GET['psl']=='mobile') { ?>

                    <li role="presentation" class="active"><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">Mobile</a></li>
                    <?php } else {?>
                    <li role="presentation"><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">Mobile</a></li>

                    <?php } ?>
                    <?php if(@$_GET['psl']=='physical') { ?>

                    <li role="presentation" class="active"><a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">Physical</a></li>
                    <?php } else {?>
                    <li role="presentation"><a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">Physical</a></li>
                    <?php } ?>
                    <?php if(@$_GET['psl']=='social-eng') { ?>
                    <li role="presentation" class="active"><a href="#social-eng" aria-controls="social-eng" role="tab" data-toggle="tab">Social Eng</a></li>
                    <?php } else {?>
                    <li role="presentation"><a href="#social-eng" aria-controls="social-eng" role="tab" data-toggle="tab">Social Eng</a></li>

                    <?php } ?>
                    <?php if(@$_GET['psl']=='war-dail') { ?>
                    <li role="presentation" class="active"><a href="#war-dail" aria-controls="war-dail" role="tab" data-toggle="tab">War Dail</a></li>
                    <?php } else {?>
                    <li role="presentation"><a href="#war-dail" aria-controls="war-dail" role="tab" data-toggle="tab">War Dail</a></li>
                    <?php } ?>
                    <?php if(@$_GET['psl']=='web') { ?>
                    <li role="presentation" class="active"><a href="#web" aria-controls="web" role="tab" data-toggle="tab">Web</a></li>
                    <?php } else {?>
                    <li role="presentation"><a href="#web" aria-controls="web" role="tab" data-toggle="tab">Web</a></li>
                    <?php } ?>
                     <?php if(@$_GET['psl']=='wireless') { ?>

                    <li role="presentation" class="active"><a href="#wireless" aria-controls="wireless" role="tab" data-toggle="tab">Wireless</a></li>
                    <?php } else {?>

                    <li role="presentation"><a href="#wireless" aria-controls="wireless" role="tab" data-toggle="tab">Wireless</a></li>

                    <?php } ?>

                </ul>
                <br>
                <div class="tab-content">
                    <!-- External panel -->
                    <?php if(@$_GET['psl']!='external' && @$_GET['psl']!='internal' && @$_GET['psl']!='mobile' && @$_GET['psl']!='physical' && @$_GET['psl']!='social-eng' && @$_GET['psl']!='war-dail' && @$_GET['psl']!='web' && @$_GET['psl']!='wireless') { ?>
                    <div role="tabpanel" class="tab-pane active" id="home">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="home">
                    <?php } ?>
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="psl" value="external" />
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-9">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="1">External
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="2">Internal
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="3">Mobile
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="4">Physical
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="5">Social Eng
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="6">War Dialing
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="7">Web
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="8">Wireless
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="project" placeholder="Project">
                                </div>

                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="current_status" id="current_status">
                                        <option value=""></option>
                                        <option value="Contract">Contract</option>
                                        <option value="Scoping">Scoping</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Reporting">Reporting</option>
                                        <option value="Review">Review</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $query1 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result1 = mysqli_query($connection, $query1);
                                confirm_query($result1);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="clientID"  id="clientID">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['clientID'].'">'.$c['client'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <label class="col-sm-2 control-label">Kickoff</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="kickoff" name="kickoff" placeholder="Kickoff">
                                    <script> $( "#kickoff" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5" >
                                    <select class="form-control" name="address"  id="address">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result1)) {
                                                echo '<option value = "'.$c['locationID'].'">'.$c['address'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                    <a href="#" id="show">+Address</a>
                                </div>

                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Start">
                                    <script> $( "#start_date" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state" id="state" placeholder="State">
                                </div>

                                <label class="col-sm-2 control-label">Finish</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="finish" name="finish" placeholder="Finish">
                                    <script> $( "#finish" ).datepicker(); </script>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
                                </div>

                                <label class="col-sm-5 control-label">Tech QA</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="tech_qa" name="tech_qa" placeholder="Tech QA">
                                    <script> $( "#tech_qa" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>

                                <label class="col-sm-4 control-label">Draft Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="draft_delivery" name="draft_delivery" placeholder="Draft Delivery">
                                    <script> $( "#draft_delivery" ).datepicker(); </script>
                                </div>
                            </div>

<!--- start -->
                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $query1 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result1 = mysqli_query($connection, $query1);
                                confirm_query($result1);
                            ?>

                            <span id="one">
                            <div class="form-group ">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5" >
                                    <select class="form-control" name="address1"  id="address1">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result1)) {
                                                echo '<option value = "'.$c['locationID'].'">'.$c['address'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                    <a href="#" id="show1">+Address</a>|<a href="#" id="hide1">Hide</a>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city1" id="city1" placeholder="City">
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state1" id="state1" placeholder="State">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip1" id="zip1" placeholder="Zip">
                                </div>
                            </div>

                            <div class="form-group  input_fields_wrap">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone">
                                </div>
                            </div>
                            </span>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $query1 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result1 = mysqli_query($connection, $query1);
                                confirm_query($result1);
                            ?>

                            <span id="two">
                            <div class="form-group ">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5" >
                                    <select class="form-control" name="address2"  id="address2">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result1)) {
                                                echo '<option value = "'.$c['locationID'].'">'.$c['address'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                    <a href="#" id="show2">+Address</a>|<a href="#" id="hide2">Hide</a>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city2" id="city2" placeholder="City">
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state2" id="state2" placeholder="State">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip2" id="zip2" placeholder="Zip">
                                </div>
                            </div>

                            <div class="form-group  input_fields_wrap">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone2" id="phone2" placeholder="Phone">
                                </div>
                            </div>
                            </span>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $query1 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result1 = mysqli_query($connection, $query1);
                                confirm_query($result1);
                            ?>

                            <span id="three">
                            <div class="form-group ">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5" >
                                    <select class="form-control" name="address3"  id="address3">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result1)) {
                                                echo '<option value = "'.$c['locationID'].'">'.$c['address'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                    <a href="#" id="show3">+Address</a>|<a href="#" id="hide3">Hide</a>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city3" id="city3" placeholder="City">
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state3" id="state3" placeholder="State">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip3" id="zip3" placeholder="Zip">
                                </div>
                            </div>

                            <div class="form-group  input_fields_wrap">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone3" id="phone3" placeholder="Phone">
                                </div>
                            </div>
                            </span>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $query1 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result1 = mysqli_query($connection, $query1);
                                confirm_query($result1);
                            ?>

                            <span id="four">
                            <div class="form-group ">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5" >
                                    <select class="form-control" name="address4"  id="address4">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result1)) {
                                                echo '<option value = "'.$c['locationID'].'">'.$c['address'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                    <a href="#" id="show4">+Address</a>|<a href="#" id="hide4">Hide</a>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city4" id="city4" placeholder="City">
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state4" id="state4" placeholder="State">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip4" id="zip4" placeholder="Zip">
                                </div>
                            </div>

                            <div class="form-group  input_fields_wrap">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone4" id="phone4" placeholder="Phone">
                                </div>
                            </div>
                            </span>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $query1 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result1 = mysqli_query($connection, $query1);
                                confirm_query($result1);
                            ?>

                            <span id="five">
                            <div class="form-group ">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5" >
                                    <select class="form-control" name="address5"  id="address5">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result1)) {
                                                echo '<option value = "'.$c['locationID'].'">'.$c['address'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                    <a href="#" id="hide5">Hide</a>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city5" id="city5" placeholder="City">
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state5" id="state5" placeholder="State">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip5" id="zip5" placeholder="Zip">
                                </div>
                            </div>

                            <div class="form-group  input_fields_wrap">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone5" id="phone5" placeholder="Phone">
                                </div>
                            </div>
                            </span>
<!-- end  -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="web" id="web" placeholder="Web">
                                </div>

                                <label class="col-sm-2 control-label">Final Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="final_delivery" name="final_delivery" placeholder="Final Delivery">
                                    <script> $( "#final_delivery" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Resources panel -->
                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                    <div role="tabpanel" class="tab-pane" id="resources">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="projectmgr"  id="projectmgr">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="emailpmg" id="emailpmg" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cellpmg" id="cellpmg" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="consultant1"  id="consultant1">
                                        <option value=""></option>

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email1" id="email1" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell1" id="cell1" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant2"  id="consultant2">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email2" id="email2" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell2" id="cell2" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 3</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant3"  id="consultant3">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email3" id="email3" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell3" id="cell3" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 4</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant4"  id="consultant4">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email4" id="email4" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell4" id="cell4" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 5</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant5"  id="consultant5">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email5" id="email5" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell5" id="cell5" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 6</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant6"  id="consultant6">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email6" id="email6" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell6" id="cell6" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                            </form>
                    </div>

                   <!-- External panel -->
                    <?php if(@$_GET['psl']=='external') { ?>
                    <div role="tabpanel" class="tab-pane active" id="external">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="external">
                    <?php } ?>

                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="
                        <?php print $_GET['projectID']; ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_targets" placeholder="Targets">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_exclude" placeholder="Exclude">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_external">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                   <!-- Internal panel -->
                    <?php if(@$_GET['psl']=='internal') { ?>
                    <div role="tabpanel" class="tab-pane active" id="internal">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="internal">
                    <?php } ?>
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_targets" placeholder="Targets">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_exclude" placeholder="Exclude">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_internal">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Mobile panel -->
                    <?php if(@$_GET['psl']=='mobile') { ?>
                    <div role="tabpanel" class="tab-pane active" id="mobile">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="mobile">
                    <?php } ?>
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_mobile">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Physical panel -->
                    <?php if(@$_GET['psl']=='physical') { ?>
                    <div role="tabpanel" class="tab-pane active" id="physical">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="physical">
                    <?php } ?>

                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_physical">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Social Eng panel -->
                    <?php if(@$_GET['psl']=='social-eng') { ?>
                    <div role="tabpanel" class="tab-pane active" id="social-eng">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="social-eng">
                    <?php } ?>

                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_se">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- War Dail panel -->
                    <?php if(@$_GET['psl']=='war-dail') { ?>
                    <div role="tabpanel" class="tab-pane active" id="war-dail">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="war-dail">
                    <?php } ?>
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_war">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Web panel -->
                    <?php if(@$_GET['psl']=='web') { ?>
                    <div role="tabpanel" class="tab-pane active" id="web">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="web">
                    <?php } ?>

                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_web">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Wireless panel -->
                    <?php if(@$_GET['psl']=='wireless') { ?>
                    <div role="tabpanel" class="tab-pane active" id="wireless">

                    <?php } else { ?>

                    <div role="tabpanel" class="tab-pane " id="wireless">
                    <?php } ?>
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['projectID'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create_wire">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
} elseif (isset($_GET['read'])) {
    // READ RECORD
    $query = "SELECT * FROM projects WHERE projectID=".intval($_GET['read']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $row = mysqli_fetch_assoc($result);
    $query = "SELECT * FROM clients WHERE clientID=".intval(@$row['clientID']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $c = mysqli_fetch_assoc($result);
    // Find number of records.
    $query2 = "SELECT * FROM projects";
    $result2 = mysqli_query($connection, $query2);
    confirm_query($result2);

    $limit = mysqli_num_rows($result2);

    // Free result set.
    mysqli_free_result($result2);

    // Get the page number or set it to 1 if no page is set.
    $read = isset($_GET['read']) ? (int)$_GET['read'] : 1; ?>

    <ul class="pager">
        <?php if ($read > 1): ?>
            <li class="previous"><a href="?read=<?= ($read - 1)?>">Previous</a></li>
        <?php endif ?>
        <?php if ($read < $limit): ?>
            <li class="previous"><a href="?read=<?= ($read + 1)?>">Next</a></li>
        <?php endif ?>
    </ul>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Read Project</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs" role="tablist" >
                    <li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#resources" aria-controls="resources" role="tab" data-toggle="tab">Resources</a></li>
                    <li role="presentation"><a href="#external" aria-controls="external" role="tab" data-toggle="tab">External</a></li>
                    <li role="presentation"><a href="#internal" aria-controls="internal" role="tab" data-toggle="tab">Internal</a></li>
                    <li role="presentation"><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">Mobile</a></li>
                    <li role="presentation"><a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">Physical</a></li>
                    <li role="presentation"><a href="#social-eng" aria-controls="social-eng" role="tab" data-toggle="tab">Social Eng</a></li>
                    <li role="presentation"><a href="#war-dail" aria-controls="war-dail" role="tab" data-toggle="tab">War Dail</a></li>
                    <li role="presentation"><a href="#web" aria-controls="web" role="tab" data-toggle="tab">Web</a></li>
                    <li role="presentation"><a href="#wireless" aria-controls="wireless" role="tab" data-toggle="tab">Wireless</a></li>
                </ul>
                <br>
                <div class="tab-content">
                    <!-- Home panel -->
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">

                            <?php
                                $query = "SELECT * FROM projects WHERE projectID=".intval($_GET['read']);
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $row = mysqli_fetch_assoc($result);
                                $query_assessment = "SELECT * FROM project_assessment WHERE projectID=".intval($_GET['read']);
                                $result_assessment = mysqli_query($connection, $query_assessment);
                                confirm_query($result_assessment);

                                $row_assessment = mysqli_fetch_assoc($result_assessment);
                                $assessment = @explode(" ", $row_assessment['assessmentID']); ?>

                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-9">
                                    <label class="checkbox-inline">
                                    <?php if (in_array(1, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="1" checked="checked" disabled readonly="readonly">External
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="1" disabled readonly="readonly" >External
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(2, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="2" checked="checked" disabled readonly="readonly">Internal
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="2" disabled readonly="readonly">Internal
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(3, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="3" checked="checked" disabled readonly="readonly">Mobile
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="3" disabled readonly="readonly">Mobile
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(4, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="4" disabled checked="checked" readonly="readonly">Physical
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="4" disabled readonly="readonly">Physical
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(5, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="5" disabled checked="checked" readonly="readonly">Social Eng
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="5" disabled readonly="readonly">Social Eng
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(6, @$assessment)) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="6" disabled checked="checked" readonly="readonly">War Dialing
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="6" disabled readonly="readonly">War Dialing
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(7, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]" value="7" checked="checked" disabled readonly="readonly">Web
                                    <?php
                                } else {
                                    ?>
                                    <input type="checkbox" name="assessment[]"
                                    value="7" disabled readonly="readonly">Web
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(8, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="8" checked="checked" disabled readonly="readonly">Wireless
                                    <?php
                                } else {
                                    ?>
                                    <input type="checkbox" name="assessment[]"
                                        value="8" disabled readonly="readonly">Wireless
                                    <?php
                                } ?>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="project" value="<?php echo $row['project'] ?>" readonly>
                                </div>

                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="current_status" id="current_status"  readonly disabled="disabled">
                                        <option value="<?php echo @$row['status'] ?>"><?php echo @$row['status'] ?></option>
                                        <option value="Contract">Contract</option>
                                        <option value="Scoping">Scoping</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Reporting">Reporting</option>
                                        <option value="Review">Review</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>

                        <?php
                            $query1 = "SELECT * FROM clients where clientID=".$row['clientID'];
                            $result1 = mysqli_query($connection, $query1);
                            $row1 = @mysqli_fetch_array($result1); ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="clientID"
                                    value="<?php echo $row1['client'] ?>" readonly>
                                </div>


                                <label class="col-sm-2 control-label">Kickoff</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="kickoff" value="<?php echo @$row['kickoff'] ?>" readonly>
                                </div>
                            </div>

                            <?php
                                $query1 = "SELECT * FROM client_locations where clientID=".$row['clientID'];
                                $result1 = mysqli_query($connection, $query1);
                                $i=0;
                                while($row1 = @mysqli_fetch_array($result1)){
                                $query11 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                $result11 = mysqli_query($connection, $query11); ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="address<?php if($i>0) print $i; ?>" id="address<?php  if($i>0) print $i; ?>" disabled>

                                        <option value="<?php echo $row1['clientID'] ?>"><?php echo $row1['address'] ?></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result11)) {
                                                ?>
                                        <option value = '<?php print $c["clientID"]; ?>' ><?php print $c["address"]; ?></option>
                                        <?php
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="start_date" value="<?php echo @$row['start'] ?>" readonly>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['city'] ?>" id="city<?php  if($i!=0) print $i; ?>" disabled>
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['state'] ?>" id="state<?php  if($i!=0) print $i; ?>" disabled>
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-2 control-label">Finish</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="finish" value="<?php echo @$row['finish'] ?>" readonly>
                                </div>
                                <?php } ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['zip'] ?>" id="zip<?php  if($i!=0) print $i; ?>" disabled>
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-5 control-label">Tech QA</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="tech_qa" value="<?php echo @$row['tech_qa'] ?>" readonly>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['phone'] ?>" id="phone<?php  if($i!=0) print $i; ?>" disabled>
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-4 control-label">Draft Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="draft_delivery" value="<?php echo @$row['draft_delivery'] ?>" readonly>
                                </div>
                                <?php } ?>
                            </div>

                            <?php $i++;
                            } ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-5">
                                    <?php
                                        // READ RECORD
                                        $query = "SELECT * FROM projects WHERE projectID=".intval($_GET['read']);
                                        $result = mysqli_query($connection, $query);
                                        confirm_query($result);

                                        $row = mysqli_fetch_assoc($result);
                                        $query = "SELECT * FROM clients WHERE clientID=".intval(@$row['clientID']);
                                        $result = mysqli_query($connection, $query);
                                        confirm_query($result);

                                        $c = mysqli_fetch_assoc($result);
                                    ?>
                                    <input type="text" class="form-control" name="web" value="<?php echo @$c['web']; ?>" readonly>
                                </div>
                                <label class="col-sm-2 control-label">Final Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="final_delivery" value="<?php echo @$row['final_delivery'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="notes" rows="6" readonly><?php echo $row['notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Resources panel -->
                    <div role="tabpanel" class="tab-pane" id="resources">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="projectmgr"  id="projectmgr" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="consultant1"  id="consultant1" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant2"  id="consultant2" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 3</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant3"  id="consultant3" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 4</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant4"  id="consultant4" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 5</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant5"  id="consultant5" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 6</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant6"  id="consultant6" disabled="disabled">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="disabled">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell" disabled="disabled">
                                </div>
                            </div>
                            </form>
                    </div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_objective" rows="2" readonly><?php echo @$row['external_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_targets" value="<?php echo @$row['external_targets'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_exclude" value="<?php echo @$row['external_exclude'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_notes" rows="6" readonly><?php echo @$row['external_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Internal panel -->
                    <div role="tabpanel" class="tab-pane" id="internal">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_objective" rows="2" readonly><?php echo @$row['internal_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_targets" value="<?php echo @$row['internal_targets'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_exclude" value="<?php echo @$row['internal_exclude'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_notes" rows="6" readonly><?php echo @$row['internal_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Mobile panel -->
                    <div role="tabpanel" class="tab-pane" id="mobile">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_objective" rows="2" readonly><?php echo @$row['mobile_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_notes" rows="6" readonly><?php echo @$row['mobile_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Physical panel -->
                    <div role="tabpanel" class="tab-pane" id="physical">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_objective" rows="2" readonly><?php echo @$row['physical_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_notes" rows="6" readonly><?php echo @$row['physical_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Social Eng panel -->
                    <div role="tabpanel" class="tab-pane" id="social-eng">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_objective" rows="2" readonly><?php echo @$row['social_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_notes" rows="6" readonly><?php echo @$row['social_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- War Dailing panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_objective" rows="2" readonly><?php echo @$row['war_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_notes" rows="6" readonly><?php echo @$row['war_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Web panel -->
                    <div role="tabpanel" class="tab-pane" id="web">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_objective" rows="2" readonly><?php echo @$row['web_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_notes" rows="6" readonly><?php echo @$row['web_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Wireless panel -->
                    <div role="tabpanel" class="tab-pane" id="wireless">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_objective" rows="2" readonly><?php echo @$row['wireless_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_notes" rows="6" readonly><?php echo @$row['wireless_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
} elseif (isset($_GET['update'])) {
    // UPDATE RECORD.
    $query = "SELECT * FROM projects WHERE projectID=".intval($_GET['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $row = mysqli_fetch_assoc($result);
    $query_assessment = "SELECT * FROM project_assessment WHERE projectID=".intval($_GET['update']);
    $result_assessment = mysqli_query($connection, $query_assessment);
    confirm_query($result_assessment);

    $row_assessment = mysqli_fetch_assoc($result_assessment);
    ?>

    <br><br><br>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Update Project</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#resources" aria-controls="resources" role="tab" data-toggle="tab">Resources</a></li>
                    <li role="presentation"><a href="#external" aria-controls="external" role="tab" data-toggle="tab">External</a></li>
                    <li role="presentation"><a href="#internal" aria-controls="internal" role="tab" data-toggle="tab">Internal</a></li>
                    <li role="presentation"><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">Mobile</a></li>
                    <li role="presentation"><a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">Physical</a></li>
                    <li role="presentation"><a href="#social-eng" aria-controls="social-eng" role="tab" data-toggle="tab">Social Eng</a></li>
                    <li role="presentation"><a href="#war-dail" aria-controls="war-dail" role="tab" data-toggle="tab">War Dail</a></li>
                    <li role="presentation"><a href="#web" aria-controls="web" role="tab" data-toggle="tab">Web</a></li>
                    <li role="presentation"><a href="#wireless" aria-controls="wireless" role="tab" data-toggle="tab">Wireless</a></li>
                </ul>
                <br>
                <div class="tab-content">
                    <!-- Home panel -->
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <form class="form-horizontal" action="projects.php" method="post">
                             <div class="form-group">

                            <?php
                                $assessment = @explode(" ", $row_assessment['assessmentID']); ?>

                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-9">
                                    <label class="checkbox-inline">
                                    <?php if (in_array(1, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="1" checked="checked">External
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="1" >External
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(2, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="2" checked="checked">Internal
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="2" >Internal
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(3, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="3" checked="checked">Mobile
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="3" >Mobile
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(4, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="4" checked="checked">Physical
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="4">Physical
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(5, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="5" checked="checked">Social Eng
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="5">Social Eng
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(6, @$assessment)) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="6" checked="checked">War Dialing
                                    <?php
                                } else {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="6" >War Dialing
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(7, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]" value="7" checked="checked">Web
                                    <?php
                                } else {
                                    ?>
                                    <input type="checkbox" name="assessment[]"
                                    value="7" >Web
                                    <?php
                                } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if (in_array(8, @$assessment)
                                    ) {
                                    ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="8" checked="checked">Wireless
                                    <?php
                                } else {
                                    ?>
                                    <input type="checkbox" name="assessment[]"
                                        value="8" >Wireless
                                    <?php
                                } ?>
                                    </label>
                                </div>
                            </div>
                            <input type = "hidden" name = "update" value = "<?php echo $row['projectID'] ?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="project" value="<?php echo $row['project'] ?>">
                                </div>

                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="current_status"  id="current_status">
                                        <option value="<?php //echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                        <option value="Contract"<?php echo($row['status'] == 'Contract' ? " selected" : "")?>>Contract</option>
                                        <option value="Scoping"<?php echo($row['status'] == 'Scoping' ? " selected" : "")?>>Scoping</option>
                                        <option value="In Progress"<?php echo($row['status'] == 'In Progress' ? " selected" : "")?>>In Progress</option>
                                        <option value="Reporting"<?php echo($row['status'] == 'Reporting' ? " selected" : "")?>>Reporting</option>
                                        <option value="Review"<?php echo($row['status'] == 'Review' ? " selected" : "")?>>Review</option>
                                        <option value="Delivered"<?php echo($row['status'] == 'Delivered' ? " selected" : "")?>>Delivered</option>
                                        <option value="Complete"<?php echo($row['status'] == 'Complete' ? " selected" : "")?>>Complete</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="clientID" id="clientID">
                                        <?php
                                            $query1 = "SELECT * FROM clients where clientID=".$row['clientID'];
                                            $result1 = mysqli_query($connection, $query1);
                                            $row11 = mysqli_fetch_array($result1);
                                            $query11 = "SELECT * FROM clients ORDER BY client ASC";
                                            $result11 = mysqli_query($connection, $query11);
                                            ?>

                                        <option value="<?php echo $row11['clientID'] ?>"><?php echo $row11['client'] ?></option>

                                        <?php
                                            while ($c = mysqli_fetch_assoc($result11)) {
                                        ?>

                                        <option value = '<?php print $c["clientID"]; ?>' ><?php print $c["client"]; ?></option>

                                        <?php
                                            }

                                        // Release returned data.
                                        mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label">Kickoff</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="kickoff" name="kickoff" value="<?php echo @$row['kickoff'] ?>">
                                    <script> $( "#kickoff" ).datepicker(); </script>
                                </div>
                            </div>

                            <?php
                                $query1 = "SELECT * FROM client_locations where clientID=".$row['clientID'];
                                $result1 = mysqli_query($connection, $query1);
                                $i=0;

                                while($row1 = mysqli_fetch_array($result1)){
                                    $query11 = "SELECT * FROM client_locations ORDER BY clientID ASC";
                                    $result11 = mysqli_query($connection, $query11); ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="address<?php if($i>0) print $i; ?>" id="address<?php  if($i>0) print $i; ?>">

                                        <option value="<?php echo $row1['clientID'] ?>"><?php echo $row1['address'] ?></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result11)) {
                                        ?>
                                        <option value = '<?php print $c["clientID"]; ?>' ><?php print $c["address"]; ?></option>
                                        <?php
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>

                                <?php if($i==0){ ?>
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo @$row['start'] ?>">
                                    <script> $( "#start_date" ).datepicker(); </script>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="city<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['city'] ?>" id="city<?php  if($i!=0) print $i; ?>" >
                                </div>

                                <label class="col-sm-1 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['state'] ?>" id="state<?php  if($i!=0) print $i; ?>">
                                </div>
                                <?php if($i==0){ ?>

                                <label class="col-sm-2 control-label">Finish</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="finish" name="finish" value="<?php echo @$row['finish'] ?>">
                                    <script> $( "#finish" ).datepicker(); </script>
                                </div>
                                <?php } ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['zip'] ?>" id="zip<?php  if($i!=0) print $i; ?>" >
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-5 control-label">Tech QA</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="tech_qa" name="tech_qa" value="<?php echo @$row['tech_qa'] ?>">
                                    <script> $( "#tech_qa" ).datepicker(); </script>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['phone'] ?>" id="phone<?php  if($i!=0) print $i; ?>" >
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-4 control-label">Draft Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="draft_delivery" name="draft_delivery" value="<?php echo @$row['draft_delivery'] ?>">
                                    <script> $( "#draft_delivery" ).datepicker(); </script>
                                </div>
                                <?php } ?>
                            </div>

                            <?php $i++;
                            } ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="web<?php print $i; ?>" value="<?php echo @$row11['web'] ?>" id="web<?php print $i; ?>">
                                </div>
                                <?php if($i==0){ ?>
                                <label class="col-sm-2 control-label">Final Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="final_delivery" name="final_delivery" value="<?php echo @$row['final_delivery'] ?>">
                                    <script> $( "#final_delivery" ).datepicker(); </script>
                                </div>
                                <?php } ?>
                            </div>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="notes" rows="6"><?php echo $row['notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Resources panel -->
                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                    <div role="tabpanel" class="tab-pane" id="resources">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="projectmgr"  id="projectmgr">
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="emailpmg" id="emailpmg" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cellpmg" id="cellpmg" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="consultant1"  id="consultant1">
                                        <option value=""></option>

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email1" id="email1" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell1" id="cell1" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant2"  id="consultant2">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email2" id="email2" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell2" id="cell2" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 3</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant3"  id="consultant3">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email3" id="email3" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell3" id="cell3" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 4</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant4"  id="consultant4">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email4" id="email4" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell4" id="cell4" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 5</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant5"  id="consultant5">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email5" id="email5" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell5" id="cell5" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 6</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant6"  id="consultant6">

                            <?php
                                $query = "SELECT * FROM employees ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                                        <option value=""></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email6" id="email6" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell6" id="cell6" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                            </form>
                    </div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_objective" rows="2"><?php echo $row['external_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_targets" value="<?php echo $row['external_targets'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_exclude" value="<?php echo $row['external_exclude'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_notes" rows="6"><?php echo $row['external_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="update_ext">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Internal panel -->
                    <div role="tabpanel" class="tab-pane" id="internal">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_objective" rows="2"><?php echo $row['internal_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_targets" value="<?php echo $row['internal_targets'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_exclude" value="<?php echo $row['internal_exclude'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_notes" rows="6"><?php echo $row['internal_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="int_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Mobile panel -->
                    <div role="tabpanel" class="tab-pane" id="mobile">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_objective" rows="2"><?php echo $row['mobile_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_notes" rows="6"><?php echo $row['mobile_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="mob_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Physical panel -->
                    <div role="tabpanel" class="tab-pane" id="physical">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_objective" rows="2"><?php echo $row['physical_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_notes" rows="6"><?php echo $row['physical_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="physical_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Social Eng panel -->
                    <div role="tabpanel" class="tab-pane" id="social-eng">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_objective" rows="2"><?php echo $row['social_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_notes" rows="6"><?php echo $row['social_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="se_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- War Dail panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_objective" rows="2"><?php echo $row['war_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_notes" rows="6"><?php echo $row['war_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="war_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Web panel -->
                    <div role="tabpanel" class="tab-pane" id="web">
                        <form class="form-horizontal" action="projects.php" method="post">
                        <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_objective" rows="2"><?php echo $row['web_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_notes" rows="6"><?php echo $row['web_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="web_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Wireless panel -->
                    <div role="tabpanel" class="tab-pane" id="wireless">
                        <form class="form-horizontal" action="projects.php" method="post">
                         <input type="hidden" name="projectID" value="<?php print $_GET['update'] ?>" />
                           <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_objective" rows="2"><?php echo $row['wireless_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_notes" rows="6"><?php echo $row['wireless_notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit" name="wire_submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
} else {
    // DISPLAY LIST OF RECORDS. ?>

    <br>
    <?php
        $maxid = 0;
        $query = 'SELECT MAX(projectID) AS `maxid` FROM `projects`';
        $row = mysqli_query($connection, $query);
        $row1 = mysqli_fetch_row($row);

        if ($row1[0]) {
            $maxid = $row1[0]+1;
    }
    ?>

    <a class="btn btn-primary" href="projects.php?create&projectID=<?php echo $maxid ?>" input type="button">New</a>
    <br>
    <br>

    <?php
        $query = "SELECT * FROM projects ORDER BY project ASC";
        $result = mysqli_query($connection, $query);
        confirm_query($result); ?>

    <table style="width: auto; " class="table table-bordered table-condensed table-hover">
        <tr>
            <th style="background-color:#E8E8E8;"></th>
            <th style="background-color:#E8E8E8;"></th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Project</th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Client</th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Start</th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Status</th>
            <th style="background-color:#E8E8E8; color:#0397B7; text-align:center;">Modified</th>
            <th style="background-color:#E8E8E8;"></th>
        </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $time = strtotime($row['modified']);
                $myDateFormat = date("m-d-y g:i A", $time);
                $query = "SELECT * FROM clients where clientID = ".@$row['clientID'];
                $client = mysqli_query($connection, $query);
                confirm_query($client);
                $client = mysqli_fetch_assoc($client);

                echo '
                <tr>
                    <td width="50">'.'<a class="btn btn-primary" href="projects.php?read='.$row['projectID'].'"><span class="glyphicon glyphicon-play"></span></a>'.'</td>
                    <td width="50">'.'<a class="btn btn-warning" href="projects.php?update='.$row['projectID'].'"><span class="glyphicon glyphicon-pencil"></span></a>'.'</td>
                    <td width="350">'.$row["project"].'</td>
                    <td width="300">'.$client['client'].'</td>
                    <td width="100">'.$row["start"].'</td>
                    <td width="100">'.@$row["status"].'</td>
                    <td width="150">'.$myDateFormat.'</td>
                    <td width="50">'.'<a class="btn btn-danger" href="projects.php?delete='.$row['projectID'].'"
                        onclick="return confirm(\'Are you sure you want to delete this record?\');"><span class="glyphicon glyphicon-trash"></span></a>'.'</td>
                </tr>';
            }

    // Release returned data.
    mysqli_free_result($result); ?>
    </table>
    <?php
}
?>

<?php include '../includes/footer.php'; ?>
