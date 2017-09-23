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
                    var res = html.split(",");
                    $('#address').val(res[0]);
                    $('#city').val(res[1]);
                    $('#state').val(res[2]);
                    $('#zip').val(res[3]);
                    $('#phone').val(res[4]);
                    $('#web').val(res[5]);
                    
                    $('#accountmgr').val(res[6]);
                    $('#projectmgr').val(res[7]);
                    $('#consultant1').val(res[14]);
                    $('#consultant2').val(res[15]);
                    $('#consultant3').val(res[16]);
                    $('#consultant4').val(res[17]);

                }
            });
        }else{
            //$('#city').html('Sorry');
        }
    });
});
</script>

<?php


if (isset($_POST['create'])) {
    // CREATE RECORD.

    // Check for blank field.
    $project = trim($_POST['project']);
    if (empty($project)) { ?>
        <br>
        <button class="btn btn-danger" type="button"><strong>Warning!</strong> You must enter a project.</button>
        <br><br>
        <a class="btn btn-default" href="projects.php?create" input type="button">Back</a>
        <?php exit;
    }

    $clientID = trim($_POST['clientID']);
    if (empty($clientID)) { ?>
        <br>
        <button class="btn btn-danger" type="button"><strong>Warning!</strong> You must enter a client.</button>
        <br><br>
        <a class="btn btn-default" href="projects.php?create" input type="button">Back</a>
        <?php exit;
    }

$ass="";
foreach($_POST['assessment'] as $selected){
$ass .= $selected.",";
}
   $query = "INSERT INTO projects (modified, project, assessment, client, address, city, state, zip,  phone, web,  accountmgr, projectmgr, consultant1, consultant2, consultant3, consultant4, kickoff, start, finish, status,  notes) VALUES (now(), '$_POST[project]', '$ass', '$_POST[clientID]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[phone]','$_POST[web]','$_POST[accountmgr]', '$_POST[projectmgr]', '$_POST[consultant1]', '$_POST[consultant2]', '$_POST[consultant3]', '$_POST[consultant4]', '$_POST[kickoff]', '$_POST[start_date]', '$_POST[finish]', '$_POST[current_status]', '$_POST[notes]')";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
}

if (isset($_POST['update'])) {
    $ass="";
    foreach($_POST['assessment'] as $selected){
    $ass .= $selected.",";
    //}
}

    // UPDATE RECORD.
    @$query = "UPDATE projects SET modified=now(), project='$_POST[project]', assessment='$ass', client='$_POST[clientID]', address='$_POST[address]', city='$_POST[city]', state='$_POST[state]', zip='$_POST[zip]',phone='$_POST[phone]',web='$_POST[web]', accountmgr='$_POST[employeeID]', projectmgr='$_POST[projectmgr]', consultant1='$_POST[consultant1]', consultant2='$_POST[consultant2]', consultant3='$_POST[consultant3]', consultant4='$_POST[consultant4]', kickoff='$_POST[kickoff]', start='$_POST[start_date]', finish='$_POST[finish]', status='$_POST[current_status]', notes='$_POST[notes]' WHERE projectID=".intval($_POST['update']);

    $result = mysqli_query($connection, $query);
    confirm_query($result);
}

if (isset($_GET['delete'])) {
    // DELETE RECORD.
    $query = "DELETE FROM projects WHERE projectID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
}

if (isset($_GET['create'])) {
    ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Project</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#report" aria-controls="report" role="tab" data-toggle="tab">Report</a></li>
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
                                <label class="col-sm-2 control-label">Project</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="project" placeholder="Project">
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="External">External
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="Internal">Internal
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="Mobile">Mobile
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="Physical">Physical
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="Social Eng">Social Eng
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="War Dialing">War Dialing
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="Web">Web
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="assessment[]" value="Wireless">Wireless
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="clientID"  id="clientID">
                                        <option value=""></option>
                                        <?php
                                            while($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['clientID'].'">'.$c['client'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                           

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="address" id="address" placeholder="Address" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City, State, Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                </div>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state" id="state" placeholder="State">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="web" id="web" placeholder="Web">
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM employees WHERE accountmgr='Yes' ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Account Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="accountmgr" id="accountmgr">
                                        <option value=""></option>
                                        <?php
                                            while($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM employees WHERE projectmgr='Yes' ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="projectmgr"  id="projectmgr">
                                        <option value=""></option>
                                        <?php
                                            while($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c['employeeID'].'">'.$c['employee'].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant1" placeholder="Consultant 1" id="consultant1" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant2" placeholder="Consultant 2" id="consultant2" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 3</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant3" placeholder="Consultant 3" id="consultant3" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 4</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant4" placeholder="Consultant 4" id="consultant4" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kickoff</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="kickoff" name="kickoff" placeholder="Kickoff">
                                    <script> $( "#kickoff" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Start">
                                    <script> $( "#start_date" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Finish</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="finish" name="finish" placeholder="Finish">
                                    <script> $( "#finish" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="current_status" id="current_status">
                                        <option value=""></option>
                                        <option value="Scoping">Scoping</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Reporting">Reporting</option>
                                        <option value="Review">Review</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Due</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="due" name="due" placeholder="Due">
                                    <script> $( "#due" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit" name="create">Create</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Report panel -->
                    <div role="tabpanel" class="tab-pane" id="report"><!--Need to think about this layout.--></div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ext_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ex_targets" placeholder="Targets">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ex_exclude" placeholder="Exclude">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ext_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Internal panel -->
                    <div role="tabpanel" class="tab-pane" id="internal">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="int_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="int_targets" placeholder="Targets">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="int_exclude" placeholder="Exclude">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="int_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                         -->
                    </div>

                    <!-- Mobile panel -->
                    <div role="tabpanel" class="tab-pane" id="mobile">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="mob_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="mob_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Physical panel -->
                    <div role="tabpanel" class="tab-pane" id="physical">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="phy_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="phy_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Social Eng panel -->
                    <div role="tabpanel" class="tab-pane" id="social-eng">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="se_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="se_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- War Dail panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="war_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="war_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Web panel -->
                    <div role="tabpanel" class="tab-pane" id="web">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="web_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="web_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Wireless panel -->
                    <div role="tabpanel" class="tab-pane" id="wireless">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="wire_objective" placeholder="Objective" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="wire_notes" placeholder="Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

elseif (isset($_GET['read'])) {
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
    $read = isset($_GET['read']) ? (int)$_GET['read'] : 1;
    ?>

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
                    <li role="presentation"><a href="#report" aria-controls="report" role="tab" data-toggle="tab">Report</a></li>
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
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="project" value="<?php echo $row['project'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                            <?php
                            //print $row['assisment'];

                            $assisment = @explode(",",$row['assessment']);
                            ?>

                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                    <?php if(in_array("External", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="External" checked="checked" disabled="disabled">External
                                    <?php } else {?>
                                         <input type="checkbox" name="assessment[]"
                                         value="External" disabled="disabled">External
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Internal", @$assisment)){ ?>

                                        <input type="checkbox" name="assessment[]"
                                        value="Internal" checked="checked" disabled="disabled">Internal
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Internal" disabled="disabled">Internal
                                    <?php } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if(in_array("Mobile", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Mobile" checked="checked" disabled="disabled">Mobile
                                        <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Mobile" disabled="disabled">Mobile
                                    <?php } ?>
                                    </label>

                                    <label class="checkbox-inline">
                                    <?php if(in_array("Physical", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Physical" checked="checked" disabled="disabled">Physical
                                     <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Physical" disabled="disabled">Physical
                                     <?php } ?>                                label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Social Eng", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]" 
                                        value="Social Eng" checked="checked" disabled="disabled">Social Eng
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Social Eng" disabled="disabled">Social Eng
                                        <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("War Dialing", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="War Dialing" checked="checked" disabled="disabled">War Dialing
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="War Dialing" disabled="disabled">War Dialing
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Web", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Web" checked="checked" disabled="disabled">Web
                                    <?php } else {?>
                                    <input type="checkbox" name="assessment[]"
                                    value="Web" disabled="disabled">Web
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Wireless", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Wireless" checked="checked" disabled="disabled">Wireless
                                    <?php } else {?>
                                    <input type="checkbox" name="assessment[]"
                                        value="Wireless" disabled="disabled">Wireless
                                    <?php } ?>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="clientID"
                                    value="<?php echo $c['client'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="address" rows="2" readonly><?php echo @$row['address'] ?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City, State, Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="city" value="<?php echo $row['city'] ?>" readonly>
                                </div>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state" value="<?php echo $row['state'] ?>" readonly>
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip" value="<?php echo $row['zip'] ?>" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone" value="<?php echo @$row['phone'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="web" value="<?php echo @$row['web'] ?>" readonly>
                                </div>
                            </div>

                            <?php
                                $query11 = "SELECT * FROM employees where employeeID=".$row['accountmgr'];
                                $result11 = mysqli_query($connection, $query11);
                                $row11 = @mysqli_fetch_array($result11);

                            ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Account Mgr</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="accountmgr" value="<?php echo $row11['employee'] ?>" readonly>
                                </div>
                            </div>

                            <?php
                                $query11 = "SELECT * FROM employees where employeeID=".$row['projectmgr'];
                                $result11 = mysqli_query($connection, $query11);
                                $row11 = @mysqli_fetch_array($result11);

                            ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project Mgr</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="projectmgr" value="<?php echo $row11['employee'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant1" value="<?php echo $row['consultant1'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant2" value="<?php echo $row['consultant2'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="col-sm-2 control-label">Consultant 3</label>
                               <div class="col-sm-3">
                                   <input type="text" class="form-control" name="consultant3" value="<?php echo $row['consultant3'] ?>" readonly>
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-sm-2 control-label">Consultant 4</label>
                               <div class="col-sm-3">
                                   <input type="text" class="form-control" name="consultant4" value="<?php echo $row['consultant4'] ?>" readonly>
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
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="current_status" value="<?php echo @$row['status'] ?>" readonly>
                                </div>
                           </div>

                           <div class="form-group">
                               <label class="col-sm-2 control-label">Due</label>
                               <div class="col-sm-2">
                                   <input type="text" class="form-control" name="due" value="<?php echo @$row['due'] ?>" readonly>
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-sm-2 control-label">Notes</label>
                               <div class="col-sm-10">
                                   <textarea class="form-control" name="notes" rows="6" readonly><?php echo $row['notes'] ?></textarea>
                               </div>
                           </div>

                           <div class="form-actions">
                               <a class="btn btn-default" href="projects.php">Back</a>
                           </div>
                       </form>
                    </div>

                    <!-- Report panel -->
                    <div role="tabpanel" class="tab-pane" id="report"><!-- Need to think about this layout. --></div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">

                        <!-- <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ext_objective" rows="2" readonly><?php// //echo $row['ext_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ext_targets" value="<?php// //echo $row['ext_targets'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ext_exclude" value="<?php// //echo $row['ext_exclude'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ext_notes" rows="6" readonly><?php// //echo $row['ext_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>-->
                    </div>

                    <!-- Internal panel -->
                    <div role="tabpanel" class="tab-pane" id="internal">
                    <!-- 
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="int_objective" rows="2" readonly><?php// echo $row['int_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="int_targets" value="<?php// echo $row['int_targets'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="int_exclude" value="<?php// echo $row['int_exclude'] ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="int_notes" rows="6" readonly><?php// echo $row['int_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                         -->
                    </div>

                    <!-- Mobile panel -->
                    <!-- 
                    <div role="tabpanel" class="tab-pane" id="mobile">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="mob_objective" rows="2" readonly><?php// echo $row['mob_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="mob_notes" rows="6" readonly><?php// //echo $row['mob_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                         -->
                    </div>

                    <!-- Physical panel -->
                    <div role="tabpanel" class="tab-pane" id="physical">
                    <!--
                            <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="phy_objective" rows="2" readonly><?php// echo $row['phy_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="phy_notes" rows="6" readonly><?php// echo $row['phy_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Social Eng panel -->
                    <!--
                    <div role="tabpanel" class="tab-pane" id="social-eng">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="se_objective" rows="2" readonly><?php// echo $row['se_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="se_notes" rows="6" readonly><?php// echo $row['se_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- War Dailing panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                    <!-- 
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="war_objective" rows="2" readonly><?php// echo $row['war_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="war_notes" rows="6" readonly><?php// echo $row['war_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Web panel -->
                    <div role="tabpanel" class="tab-pane" id="web">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="web_objective" rows="2" readonly><?php// echo $row['web_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="web_notes" rows="6" readonly><?php// echo $row['web_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>

                    <!-- Wireless panel -->
                    <div role="tabpanel" class="tab-pane" id="wireless">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="wire_objective" rows="2" readonly><?php// echo $row['wire_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="wire_notes" rows="6" readonly><?php// echo $row['wire_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

elseif (isset($_GET['update'])) {
    // UPDATE RECORD.
    $query = "SELECT * FROM projects WHERE projectID=".intval($_GET['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Update Project</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#report" aria-controls="report" role="tab" data-toggle="tab">Report</a></li>
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
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="project" value="<?php echo $row['project'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                            <?php

                            $assisment = @explode(",",$row['assessment']);
                            ?>

                                <label class="col-sm-2 control-label">Assessment</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                    <?php if(in_array("External", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="External" checked="checked">External
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="External" >External
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Internal", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Internal" checked="checked">Internal
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Internal" >Internal
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Mobile", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Mobile" checked="checked">Mobile
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Mobile" >Mobile
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Physical", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Physical" checked="checked">Physical
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Physical">Physical
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Social Eng", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Social Eng" checked="checked">Social Eng
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Social Eng">Social Eng
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("War Dialing", @$assisment)){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="War Dialing" checked="checked">War Dialing
                                    <?php } else {?>
                                        <input type="checkbox" name="assessment[]"
                                        value="War Dialing" >War Dialing
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Web", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]" value="Web" checked="checked">Web
                                    <?php } else {?>
                                    <input type="checkbox" name="assessment[]"
                                    value="Web" >Web
                                    <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                    <?php if(in_array("Wireless", @$assisment)
                                    ){ ?>
                                        <input type="checkbox" name="assessment[]"
                                        value="Wireless" checked="checked">Wireless
                                    <?php } else {?>
                                    <input type="checkbox" name="assessment[]"
                                        value="Wireless" >Wireless
                                    <?php } ?>
                                    </label>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Client</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="clientID" id="clientID">
                            <?php
                                $query1 = "SELECT * FROM clients where clientID=".$row['client'];
                                $result1 = mysqli_query($connection, $query1);
                                $row1 = mysqli_fetch_array($result);
                            ?>
                                        <option value="<?php echo $row['client'] ?>"><?php echo $row1['client'] ?></option>
                                        <?php
                                            while($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c["clientID"].'"'.($row['client'] == $c['client'] ? ' selected' : '').'>'.$c["client"].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="address" rows="2"  id="address"><?php echo @$row['address'] ?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">City, State, Zip</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="city" value="<?php echo $row['city'] ?>" id="city" >
                                </div>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="state" value="<?php echo $row['state'] ?>" id="state">
                                </div>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="zip" value="<?php echo $row['zip'] ?>" id="zip">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="phone" value="<?php echo @$row['phone'] ?>" id="phone" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Web</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="web" value="<?php echo @$row['web'] ?>" id="web">
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM employees WHERE accountmgr='Yes' ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>

                            <?php
                            //    $query11 = "SELECT * FROM employees where employeeID=".$row['accountmgr'];
                            //    $result11 = mysqli_query($connection, $query11);
                            //    $row11 = @mysqli_fetch_array($result11);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Account Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="employeeID"  id="employeeID">
                                        <option value="<?php echo @$row11['employeeID'] ?>"><?php echo @$row11['employee'] ?></option>
                                        <?php
                                            while($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c["employeeID"].'"'.($row['employeeID'] == $c['employeeID'] ? ' selected' : '').'>'.$c["employee"].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM employees WHERE projectmgr='Yes' ORDER BY employee ASC";
                                $result = mysqli_query($connection, $query);
                                //confirm_query($result);
                            ?>

                            <?php
                                $query12 = "SELECT * FROM employees where employeeID=".$row['projectmgr'];
                                $result12 = mysqli_query($connection, $query12);
                                $row12 = @mysqli_fetch_array($result12);
                            ?>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project Mgr</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="projectmgr" id="projectmgr">
                                        <option value="<?php echo @$row12['employeeID'] ?>"><?php echo @$row12['employee'] ?></option>
                                        <?php
                                            while($c = mysqli_fetch_assoc($result)) {
                                                echo '<option value = "'.$c["employeeID"].'"'.($row['employeeID'] == $c['employeeID'] ? ' selected' : '').'>'.$c["employee"].'</option>';
                                            }

                                            // Release returned data.
                                            mysqli_free_result($result);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 1</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant1"
                                    id="consultant1"  value="<?php echo $row['consultant1'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 2</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant2"
                                    id="consultant2" value="<?php echo $row['consultant2'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 3</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant3"
                                    id="consultant3" value="<?php echo $row['consultant3'] ?>" value="<?php echo $row['consultant3'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Consultant 4</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="consultant4"
                                    id="consultant4" value="<?php echo $row['consultant4'] ?>" value="<?php echo $row['consultant4'] ?>">
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
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="current_status"  id="current_status">
                                        <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                        <option value="Scoping"<?php echo ($row['status'] == 'Scoping' ? " selected" : "")?>>Scoping</option>
                                        <option value="In Progress"<?php echo ($row['status'] == 'In Progress' ? " selected" : "")?>>In Progress</option>
                                        <option value="Reporting"<?php echo ($row['status'] == 'Reporting' ? " selected" : "")?>>Reporting</option>
                                        <option value="Review"<?php echo ($row['status'] == 'Review' ? " selected" : "")?>>Review</option>
                                        <option value="Delivered"<?php echo ($row['status'] == 'Delivered' ? " selected" : "")?>>Delivered</option>
                                        <option value="Complete"<?php echo ($row['status'] == 'Complete' ? " selected" : "")?>>Complete</option>
                                    </select>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM clients ORDER BY client ASC";
                                $result = mysqli_query($connection, $query);
                                confirm_query($result);
                            ?>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Due</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="due" name="due" value="<?php echo @$row['due'] ?>">
                                    <script> $( "#due" ).datepicker(); </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="notes" rows="6"><?php echo $row['notes'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button class="btn btn-warning" type="submit">Update</button>
                                <a class="btn btn-default" href="projects.php">Back</a>
                            </div>
                        </form>
                    </div>

                    <!-- Report panel -->
                    <div role="tabpanel" class="tab-pane" id="report"><!-- Need to think about this layout. --></div>

                    <!-- External panel -->
                    <div role="tabpanel" class="tab-pane" id="external">
                    <!-- 
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ext_objective" rows="2"><?php// echo $row['ext_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ext_targets" value="<?php// echo $row['ext_targets'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ext_exclude" value="<?php// echo $row['ext_exclude'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ext_notes" rows="6"><?php// echo $row['ext_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- Internal panel -->
                    <!-- <div role="tabpanel" class="tab-pane" id="internal">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="int_objective" rows="2"><?php// echo $row['int_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Targets</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="int_targets" value="<?php// echo $row['int_targets'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="int_exclude" value="<?php// echo $row['int_exclude'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="int_notes" rows="6"><?php// echo $row['int_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- Mobile panel -->
                    <div role="tabpanel" class="tab-pane" id="mobile">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="mob_objective" rows="2"><?php// echo $row['mob_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="mob_notes" rows="6"><?php// echo $row['mob_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- Physical panel -->
                    <div role="tabpanel" class="tab-pane" id="physical">
                    <!-- 
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="phy_objective" rows="2"><?php// echo $row['phy_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="phy_notes" rows="6"><?php// echo $row['phy_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- Social Eng panel -->
                    <div role="tabpanel" class="tab-pane" id="social-eng">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="se_objective" rows="2"><?php// echo $row['se_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="se_notes" rows="6"><?php// echo $row['se_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- War Dail panel -->
                    <div role="tabpanel" class="tab-pane" id="war-dail">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="war_objective" rows="2"><?php// echo $row['war_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="war_notes" rows="6"><?php// echo $row['war_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- Web panel -->
                    <div role="tabpanel" class="tab-pane" id="web">
                    <!--
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="web_objective" rows="2"><?php// echo $row['web_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="web_notes" rows="6"><?php// echo $row['web_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>

                    <!-- Wireless panel -->
                    <!--
                    <div role="tabpanel" class="tab-pane" id="wireless">
                        <form class="form-horizontal" action="projects.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Objective</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="wire_objective" rows="2"><?php// echo $row['wire_objective'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="wire_notes" rows="6"><?php// echo $row['wire_notes'] ?></textarea>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}


else {
    // DISPLAY LIST OF RECORDS.
    ?>
    <br>
    <a class="btn btn-primary" href="projects.php?create" input type="button">New</a>
    <br>
    <br>

    <?php
        // Perform db query.
        $query = "SELECT * FROM projects ORDER BY project ASC";
        $result = mysqli_query($connection, $query);
        confirm_query($result);
    ?>

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
            while($row = mysqli_fetch_assoc($result)) {
                $time = strtotime($row['modified']);
                $myDateFormat = date("m-d-y g:i A", $time);
                $query = "SELECT * FROM clients where clientID = ".intval($row['client']);
                $client = mysqli_query($connection, $query);
                confirm_query($client);
                $client = mysqli_fetch_assoc($client);

                echo '
                <tr>
                    <td width="50">'.'<a class="btn btn-primary" href="projects.php?read='.$row['projectID'].'"><span class="glyphicon glyphicon-play"></span></a>'.'</td>
                    <td width="50">'.'<a class="btn btn-warning" href="projects.php?update='.$row['projectID'].'"><span class="glyphicon glyphicon-pencil"></span></a>'.'</td>
                    <td width="350">'.$row["project"].'</td>
                    <td width="100">'.$client['client'].'</td>
                    <td width="125">'.$row["start"].'</td>
                    <td width="100">'.$row["status"].'</td>
                    <td width="250">'.$myDateFormat.'</td>
                    <td width="50">'.'<a class="btn btn-danger" href="projects.php?delete='.$row['projectID'].'"
                        onclick="return confirm(\'Are you sure you want to delete this record?\');"><span class="glyphicon glyphicon-trash"></span></a>'.'</td>
                </tr>';
            }

            // Release returned data.
            mysqli_free_result($result);
        ?>
    </table>
    <?php
}
?>

<?php include '../includes/footer.php'; ?>
