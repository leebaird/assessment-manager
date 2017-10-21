<?php
    $bodyid = "projects";
    include "../includes/header.php";
    require_once("../includes/common.php");
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <br> href="projects.php" title="projects"<br>
        <a class="btn btn-default" href="projects.php?create" input type="button">Back</a>
        <?php exit;
    }

    $ass="";
    $clientID = $_POST['clientID'];
    $query = "INSERT INTO projects (modified, project, assessmentID, clientID, kickoff, start, finish, tech_qa, draft_delivery, final_delivery, notes) VALUES (now(), '$_POST[project]', 1 ,$clientID , '$_POST[kickoff]', '$_POST[start_date]', '$_POST[finish]', '$_POST[tech_qa]', '$_POST[draft_delivery]', '$_POST[final_delivery]', '$_POST[notes]')";

    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "select max(projectID) from projects";
    $result = mysqli_query($connection, $query);
    $projectid = mysqli_fetch_row($result);
    $projectid =$projectid[0];
    $ass = "";
    foreach($_POST['assessment'] as $selected){
    if(isset($_POST['assessment'])){
        $ass = $ass.$selected." ";  }
}
    $query= "insert into project_assisment values('',$projectid,'$ass')";
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
}

if (isset($_POST['update'])) {
    $ass="";

    // UPDATE RECORD.
    @$query = "UPDATE projects SET modified=now(), project='$_POST[project]', assessmentID=1, clientID='$_POST[clientID]', kickoff='$_POST[kickoff]', start='$_POST[start_date]', finish='$_POST[finish]', tech_qa='$_POST[tech_qa]', draft_delivery='$_POST[draft_delivery]', final_delivery='$_POST[final_delivery]', notes='$_POST[notes]' WHERE projectID=".intval($_POST['update']);

    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM project_assisment WHERE project_id=".intval($_POST['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    foreach(@$_POST['assessment'] as $selected){
    if(isset($_POST['assessment'])){
$ass = $ass.$selected." ";  }
}
    $projectid=$_POST['update'];

    $query= "insert into project_assisment values('',$projectid,'$ass')";
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
}

if (isset($_GET['delete'])) {
    // DELETE RECORD.

    $query = "DELETE FROM project_locations WHERE projectID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM project_assisment WHERE project_id=".intval($_GET['delete']);
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
                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                                    <!--<a href="#" id="show5">+Address</a>|--><a href="#" id="hide5">Hide</a>
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="consultant1"  id="consultant1">
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant2"  id="consultant2">
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 3</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant3"  id="consultant3">
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 4</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant4"  id="consultant4">
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 5</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant5"  id="consultant5">
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 6</label>
                                <div class="col-sm-3">
                                     <select class="form-control" name="consultant6"  id="consultant6">
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
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell">
                                </div>
                            </div>
                    </div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- Internal panel -->
                    <div role="tabpanel" class="tab-pane" id="internal">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- Mobile panel -->
                    <div role="tabpanel" class="tab-pane" id="mobile">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- Physical panel -->
                    <div role="tabpanel" class="tab-pane" id="physical">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- Social Eng panel -->
                    <div role="tabpanel" class="tab-pane" id="social-eng">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- War Dail panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- Web panel -->
                    <div role="tabpanel" class="tab-pane" id="web">
                        <form class="form-horizontal" action="projects.php" method="post">
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
                        </form>
                    </div>

                    <!-- Wireless panel -->
                    <div role="tabpanel" class="tab-pane" id="wireless">
                        <form class="form-horizontal" action="projects.php" method="post">
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
    $query = "SELECT * FROM clients WHERE client=".intval(@$row['clientID']);
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
                                <label class="col-sm-2 control-label">Project</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="project" value="<?php echo $row['project'] ?>" readonly>
                                </div>

                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="current_status" value="<?php echo @$row['status'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">

                            <?php
                                $query = "SELECT * FROM projects WHERE projectID=".intval($_GET['read']);
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);

                                $row = mysqli_fetch_assoc($result);
                                $query_assisment = "SELECT * FROM project_assisment WHERE project_id=".intval($_GET['read']);
                                $result_assisment = mysqli_query($connection, $query_assisment);
                                confirm_query($result_assisment);

                                $row_assisment = mysqli_fetch_assoc($result_assisment);
                                $assisment = @explode(" ", $row_assisment['assesment_id']); ?>

                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-9">
                                    <label class="checkbox-inline">
                                    <?php if (in_array(1, @$assisment)
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
                                    <?php if (in_array(2, @$assisment)
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
                                    <?php if (in_array(3, @$assisment)
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
                                    <?php if (in_array(4, @$assisment)
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
                                    <?php if (in_array(5, @$assisment)
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
                                    <?php if (in_array(6, @$assisment)) {
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
                                    <?php if (in_array(7, @$assisment)
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
                                    <?php if (in_array(8, @$assisment)
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

                        <?php
                            $query1 = "SELECT * FROM clients where clientID=".$row['clientID'];
                            $result1 = mysqli_query($connection, $query1);
                            $row1 = mysqli_fetch_array($result1); ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="clientID"
                                    value="<?php echo $row1['client'] ?>" readonly>
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
                                <div class="col-sm-4">
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
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="city<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['city'] ?>" id="city<?php  if($i!=0) print $i; ?>" disabled>
                                </div>

                                <label class="col-sm-2 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['state'] ?>" id="state<?php  if($i!=0) print $i; ?>" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="zip<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['zip'] ?>" id="zip<?php  if($i!=0) print $i; ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="phone<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['phone'] ?>" id="phone<?php  if($i!=0) print $i; ?>" disabled>
                                </div>
                            </div>

<?php $i++;

} ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="web" value="<?php echo @$row['web'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kickoff</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="kickoff" value="<?php echo @$row['kickoff'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="start_date" value="<?php echo @$row['start'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Finish</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="finish" value="<?php echo @$row['finish'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tech QA</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="tech_qa" value="<?php echo @$row['tech_qa'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Draft Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="draft_delivery" value="<?php echo @$row['draft_delivery'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Final Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="final_delivery" value="<?php echo @$row['final_delivery'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-8">
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
                         Need to think about this layout.
                    </div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_targets" value="" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_exclude" value="" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="int_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_targets" value="" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_exclude" value="" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="mob_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="phy_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="se_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="war_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="web_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_notes" rows="6" readonly></textarea>
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
                                    <textarea class="form-control" name="wire_objective" rows="2" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_notes" rows="6" readonly></textarea>
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
    $query_assisment = "SELECT * FROM project_assisment WHERE project_id=".intval($_GET['update']);
    $result_assisment = mysqli_query($connection, $query_assisment);
    confirm_query($result_assisment);

    $row_assisment = mysqli_fetch_assoc($result_assisment);
    ?>

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
                            <input type = "hidden" name = "update" value = "<?php echo $row['projectID'] ?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project</label>
                                <div class="col-sm-6">
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

                            <?php
                                $assisment = @explode(" ", $row_assisment['assesment_id']); ?>

                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-9">
                                    <label class="checkbox-inline">
                                    <?php if (in_array(1, @$assisment)
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
                                    <?php if (in_array(2, @$assisment)
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
                                    <?php if (in_array(3, @$assisment)
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
                                    <?php if (in_array(4, @$assisment)
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
                                    <?php if (in_array(5, @$assisment)
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
                                    <?php if (in_array(6, @$assisment)) {
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
                                    <?php if (in_array(7, @$assisment)
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
                                    <?php if (in_array(8, @$assisment)
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

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="clientID" id="clientID">
                                        <?php
                                            $query1 = "SELECT * FROM clients where clientID=".$row['clientID'];
                                            $result1 = mysqli_query($connection, $query1);
                                            $row11 = mysqli_fetch_array($result1);
                                            $query11 = "SELECT * FROM clients ORDER BY client ASC";
                                            $result11 = mysqli_query($connection, $query11); ?>

                                        <option value="<?php echo $row11['clientID'] ?>"><?php echo $row11['client'] ?></option>
                                        <?php
                                            while ($c = mysqli_fetch_assoc($result11)) {
                                        ?>
                                        <option value = '<?php print $c["clientID"]; ?>' ><?php print $c["client"]; ?></option>
                                        <?php
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result); ?>
                                    </select>
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
                                <div class="col-sm-4">
                                    <select class="form-control" name="address<?php if($i>0) print $i; ?>" id="address<?php  if($i>0) print $i; ?>">

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
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="city<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['city'] ?>" id="city<?php  if($i!=0) print $i; ?>" >
                                </div>

                                <label class="col-sm-2 control-label">State</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state<?php  if($i!=0) print $i; ?>" value="<?php echo $row1['state'] ?>" id="state<?php  if($i!=0) print $i; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Zip</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="zip<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['zip'] ?>" id="zip<?php  if($i!=0) print $i; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="phone<?php  if($i!=0) print $i; ?>" value="<?php echo @$row1['phone'] ?>" id="phone<?php  if($i!=0) print $i; ?>" >
                                </div>
                            </div>

<?php $i++;

} ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="web<?php print $i; ?>" value="<?php echo @$row11['web'] ?>" id="web<?php print $i; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kickoff</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="kickoff" name="kickoff" value="<?php echo @$row['kickoff'] ?>">
                                    <script> $( "#kickoff" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo @$row['start'] ?>">
                                    <script> $( "#start_date" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Finish</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="finish" name="finish" value="<?php echo @$row['finish'] ?>">
                                    <script> $( "#finish" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tech QA</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="tech_qa" name="tech_qa" value="<?php echo @$row['tech_qa'] ?>">
                                    <script> $( "#tech_qa" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Draft Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="draft_delivery" name="draft_delivery" value="<?php echo @$row['draft_delivery'] ?>">
                                    <script> $( "#draft_delivery" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Final Delivery</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="final_delivery" name="final_delivery" value="<?php echo @$row['final_delivery'] ?>">
                                    <script> $( "#final_delivery" ).datepicker(); </script>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result); ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-8">
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
                    <div role="tabpanel" class="tab-pane" id="resources">
                        Need to think about this layout.
                    </div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_targets" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ext_exclude" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ext_notes" rows="6"></textarea>
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
                                    <textarea class="form-control" name="int_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_targets" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="int_exclude" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="int_notes" rows="6"></textarea>
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
                                    <textarea class="form-control" name="mob_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="mob_notes" rows="6"></textarea>
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
                                    <textarea class="form-control" name="phy_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="phy_notes" rows="6"></textarea>
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
                                    <textarea class="form-control" name="se_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="se_notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- War Dail panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="war_notes" rows="6"></textarea>
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
                                    <textarea class="form-control" name="web_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="web_notes" rows="6"></textarea>
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
                                    <textarea class="form-control" name="wire_objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="wire_notes" rows="6"></textarea>
                                </div>
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
    <a class="btn btn-primary" href="projects.php?create" input type="button">New</a>
    <br>
    <br>

    <?php
        $query = "SELECT * FROM projects ORDER BY project ASC";
        $result = mysqli_query($connection, $query);
        confirm_query($result); ?>

    <table style="width: auto;" class="table table-bordered table-condensed table-hover">
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
