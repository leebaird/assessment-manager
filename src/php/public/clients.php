<?php
$bodyid = "clients";
include "../includes/header.php";
require_once("../includes/common.php");

if (isset($_POST['create'])) {
    // CREATE RECORD.

    // Check for blank field.
    $client = trim($_POST['client']);

    if (empty($client)) {
        ?>
        <br>
        <button class="btn btn-danger" type="button"><strong>Warning!</strong> You must enter a client.</button>
        <br><br>
        <a class="btn btn-default" href="clients.php?create" input type="button">Back</a>
        <?php exit;
    }

    $query = "INSERT INTO clients (modified, client, web) VALUES (now(), '$_POST[client]','$_POST[web]')";
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query_max_id = "select max(clientID) from clients";
    $result_max_id = mysqli_query($connection, $query_max_id);
    $max_id = mysqli_fetch_row($result_max_id);

    $query_loc = "INSERT INTO client_locations (modified, clientID, address, city, state, zip, phone, notes) VALUES (now(), '$max_id[0]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[notes]')";

    $result_loc = mysqli_query($connection, $query_loc);
    confirm_query($result_loc);
    //$query = "INSERT INTO clients (modified, client, address, city, state, zip, phone, web, employeeID, notes) VALUES (now(), '$_POST[client]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[web]', '$_POST[employeeID]', '$_POST[notes]')";
}

if (isset($_POST['address_more'])) {
    // CREATE RECORD.

    // Check for blank field.
    $client = trim($_POST['client']);

    if (empty($client)) {
        ?>
        <br>
        <button class="btn btn-danger" type="button"><strong>Warning!</strong> You must enter a client.</button>
        <br><br>
        <a class="btn btn-default" href="clients.php?create" input type="button">Back</a>
        <?php exit;
    }

    //$query = "INSERT INTO clients (modified, client, web) VALUES (now(), '$_POST[client]','$_POST[web]')";
    //$result = mysqli_query($connection, $query);
    //confirm_query($result);

    $query_max_id = "select clientID from clients where client='$_POST[client]'";
    $result_max_id = mysqli_query($connection, $query_max_id);
    $max_id = mysqli_fetch_row($result_max_id);

    $query_loc = "INSERT INTO client_locations (modified, clientID, address, city, state, zip, phone, notes) VALUES (now(), '$max_id[0]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[notes]')";

    $result_loc = mysqli_query($connection, $query_loc);
    confirm_query($result_loc);
    //$query = "INSERT INTO clients (modified, client, address, city, state, zip, phone, web, employeeID, notes) VALUES (now(), '$_POST[client]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[web]', '$_POST[employeeID]', '$_POST[notes]')";
}

if (isset($_POST['update'])) {
    for($i=1;$i<=15;$i++){
    $address = @$_POST['address'.$i];
    $city = @$_POST['city'.$i];
    $state = @$_POST['state'.$i];
    $zip = @$_POST['zip'.$i];
    $phone = @$_POST['phone'.$i];
    $notes = @$_POST['notes'.$i];
    $locationID = @$_POST['locationID'.$i];
    $notes = @$_POST['notes'.$i];

    if (isset($address)) {
        $query_add = "UPDATE client_locations SET modified=now(), address='$address', city='$city', state='$state', zip='$zip', phone='$phone', notes='$notes' WHERE locationID=".$locationID;
        $result_add = mysqli_query($connection, $query_add);
        confirm_query($result_add);
    }
}

    // UPDATE RECORD.
    $query = "UPDATE clients SET modified=now(), client='$_POST[client]',  web='$_POST[web]' WHERE clientID=".intval($_POST['update']);

    //$query = "UPDATE clients SET modified=now(), client='$_POST[client]', address='$_POST[address]', city='$_POST[city]', state='$_POST[state]', zip='$_POST[zip]', phone='$_POST[phone]', web='$_POST[web]', employeeID='$_POST[employeeID]', notes='$_POST[notes]' WHERE clientID=".intval($_POST['update']);
    $result = mysqli_query($connection, $query);
    //confirm_query($result);
}

if (isset($_GET['delete'])) {
    // DELETE RECORD.
    $query = "DELETE FROM client_locations WHERE clientID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    $query = "DELETE FROM clients WHERE clientID=".intval($_GET['delete']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
}

if (isset($_GET['create'])) {
    ?>

<style>
    .vertical-center {
        height: 88vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<br><br>
<div class="vertical-center">
    <div class="container col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Client</h3>
            </div>

        <div class="panel-body">
            <form class="form-horizontal" action="clients.php" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Client</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="client" placeholder="Client">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="address" placeholder="Address" rows="2"></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>

                    <label class="col-sm-1 control-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state" placeholder="State">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="zip" placeholder="Zip">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Web</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="web" placeholder="Web">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="notes" placeholder="Notes" rows="6"></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" type="submit" name="create">Create</button>
                    <a class="btn btn-default" href="clients.php">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php
} elseif (isset($_GET['read'])) {
    // READ RECORD.
    $query = "SELECT * FROM clients WHERE clientID=".intval($_GET['read']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    $row = mysqli_fetch_assoc($result);

    $query = "SELECT * FROM employees WHERE employeeID=".intval(@$row['employeeID']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    $c = mysqli_fetch_assoc($result);

    // Find number of records.
    $query2 = "SELECT * FROM clients";
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

<style>
    .vertical-center {
        /*height: 70vh;*/
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="vertical-center">
    <div class="container col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Read Client</h3>
            </div>
            <div class="panel-body">

            <form class="form-horizontal" action="clients.php" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Client</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="client" value="<?php echo $row['client'] ?>" readonly>
                    </div>
                </div>

<!--
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="address" rows="2" readonly><?php //echo $row['address'] ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" value="<?php //echo $row['city'] ?>" readonly>
                    </div>

                    <label class="col-sm-1 control-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state" value="<?php //echo $row['state'] ?>" readonly>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="zip" value="<?php //echo $row['zip'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone" value="<?php //echo $row['phone'] ?>" readonly>
                    </div>
                </div>
-->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Web</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="web" value="<?php echo $row['web'] ?>" readonly>
                    </div>
                </div>
<!--
                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="notes" rows="6" readonly><?php //echo $row['notes'] ?></textarea>
                    </div>
                </div>
-->

                    <input type="hidden" class="form-control" name="client" value="<?php echo $row['clientID'] ?>" readonly>
                 <!--   </div>
                </div>-->

                <?php
                    // READ RECORD.
                    $query_more = "SELECT * FROM client_locations WHERE clientID=".intval($_GET['read']);
                    $result_more = mysqli_query($connection, $query_more);
                    confirm_query($result_more);
                    while($row_more = mysqli_fetch_assoc($result_more)){
                ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="address" rows="2" readonly><?php echo $row_more['address'] ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" value="<?php echo $row_more['city'] ?>" readonly>
                    </div>

                    <label class="col-sm-1 control-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state" value="<?php echo $row_more['state'] ?>" readonly>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="zip" value="<?php echo $row_more['zip'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone" value="<?php echo $row_more['phone'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Web</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="web" value="<?php echo $row['web'] ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="notes" rows="6" readonly><?php echo $row_more['notes'] ?></textarea>
                    </div>
                </div>
<?php } ?>
                <div class="form-actions">
                    <a class="btn btn-default" href="clients.php">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php
} elseif (isset($_GET['update'])) {
    // UPDATE RECORD.
    $query = "SELECT * FROM clients WHERE clientID=".intval($_GET['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    $row = mysqli_fetch_assoc($result); ?>

<br>

<style>
    .vertical-center {
        /*height: 83vh;*/
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="vertical-center">
    <div class="container col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Update Client</h3>
            </div>
            <div class="panel-body">

            <form class="form-horizontal" action="clients.php" method="post">
                <input type="hidden" name="update" value="<?php echo $row['clientID'] ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Client</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="client" value="<?php echo $row['client'] ?>">
                    </div>
                </div>

                <?php
                /*
                    $query = "SELECT * FROM employees WHERE accountmgr='Yes' ORDER BY employee ASC";
                    $result = mysqli_query($connection, $query);
                    confirm_query($result); */ ?>
<!--
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="address" rows="2"><?php //echo $row['address'] ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" value="<?php //echo $row['city'] ?>">
                    </div>

                    <label class="col-sm-1 control-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state" value="<?php //echo $row['state'] ?>">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="zip" value="<?php //echo $row['zip'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone" value="<?php //echo $row['phone'] ?>">
                    </div>
                </div>
-->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Web</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="web" value="<?php echo $row['web'] ?>">
                    </div>
                </div>
<!--
                <div class="form-group">
                    <label class="col-sm-3 control-label">Account Mgr</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="employeeID">
                            <option value=""></option>
                            <?php
                                /*while ($c = mysqli_fetch_assoc($result)) {
                                    echo '<option value = "'.$c["employeeID"].'"'.($row['employeeID'] == $c['employeeID'] ? ' selected' : '').'>'.$c["employee"].'</option>';
                                }

    // Release returned data.
    mysqli_free_result($result); */?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="notes" rows="6"><?php //echo $row['notes'] ?></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-warning" type="submit">Update</button>
                    <a class="btn btn-default" href="clients.php">Back</a>
                </div>
            </form>-->


            <!-- <form class="form-horizontal" action="clients.php" method="post"> -->

                <?php
                    // READ RECORD.
                    $query_more = "SELECT * FROM client_locations WHERE clientID=".intval($_GET['update']);
                    $result_more = mysqli_query($connection, $query_more);
                    confirm_query($result_more);
                    while($row_more = mysqli_fetch_assoc($result_more)){
                ?>

                <!--<div class="form-group">
                    <label class="col-sm-3 control-label">Client</label>
                    <div class="col-sm-7">-->
                        <input type="hidden" class="form-control" name="locationID<?php echo $row_more['locationID'] ?>" 
                        value="<?php echo $row_more['locationID'] ?>" >
                 <!--   </div>
                </div>-->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="address<?php echo $row_more['locationID'] ?>" rows="2" ><?php echo $row_more['address'] ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city<?php echo $row_more['locationID'] ?>" value="<?php echo $row_more['city'] ?>" >
                    </div>

                    <label class="col-sm-1 control-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state<?php echo $row_more['locationID'] ?>" value="<?php echo $row_more['state'] ?>" >
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="zip<?php echo $row_more['locationID'] ?>" value="<?php echo $row_more['zip'] ?>" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone<?php echo $row_more['locationID'] ?>" value="<?php echo $row_more['phone'] ?>" >
                    </div>
                </div>
<!--
                <div class="form-group">
                    <label class="col-sm-3 control-label">Web</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="web" value="<?php //echo $row['web'] ?>" >
                    </div>
                </div>
-->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="notes<?php echo $row_more['locationID'] ?>" rows="6" ><?php echo $row_more['notes'] ?></textarea>
                    </div>
                </div>
<?php } ?>
                <div class="form-actions">
                    <button class="btn btn-warning" type="submit">Update</button>
                    <a class="btn btn-default" href="clients.php">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php
} else {
    // DISPLAY LIST OF RECORDS.
    ?>
    <br>
    <a class="btn btn-primary" href="clients.php?create" input type="button">New</a>
    <br>
    <br>
    <div align="center">

            </div>
    <?php
        // Perform db query.
        $query = "SELECT * FROM clients ORDER BY client ASC";
        $result = mysqli_query($connection, $query);
        confirm_query($result); ?>

    <table style="width: auto;" class="table table-bordered table-condensed table-hover">
        <tr>
            <th style="background-color:#E8E8E8;"></th>
            <th style="background-color:#E8E8E8;"></th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Client</th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Address</th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">City</th>
            <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">State</th>
            <th style="background-color:#E8E8E8; color:#0397B7; text-align:center;">Modified</th>
            <th style="background-color:#E8E8E8;"></th>
            <th style="background-color:#E8E8E8;"></th>
        </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $time = strtotime($row['modified']);
                $myDateFormat = date("m-d-y g:i A", $time);
                /*
                $query = "SELECT * FROM employees where employeeID = ".intval(@$row['employeeID']);
                $finding = mysqli_query($connection, $query);
                confirm_query($finding);
                $finding = mysqli_fetch_assoc($finding);
                */
                $query = "SELECT * FROM client_locations where clientID = ".intval(@$row['clientID']);
                $finding1 = mysqli_query($connection, $query);
                confirm_query($finding1);
                while($finding = mysqli_fetch_assoc($finding1)){

                echo '
                <tr>
                    <td width="50">'.'<a class="btn btn-primary" href="clients.php?read='.$row['clientID'].'"><span class="glyphicon glyphicon-play"></span></a>'.'</td>
                    <td width="50">'.'<a class="btn btn-warning" href="clients.php?update='.$row['clientID'].'"><span class="glyphicon glyphicon-pencil"></span></a>'.'</td>
                    <td width="300">'.$row["client"].'</td>
                    <td width="200">'.$finding["address"].'</td>
                    <td width="175">'.$finding["city"].'</td>
                    <td width="75">'.$finding["state"].'</td>
                    <td width="150">'.$myDateFormat.'</td>
                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#myModal'.$row['clientID'].'">+Address</a></td>
                    <td width="50">'.'<a class="btn btn-danger" href="clients.php?delete='.$row['clientID'].'"
                        onclick="return confirm(\'Are you sure you want to delete this record?\');"><span class="glyphicon glyphicon-trash"></span></a>'.'</td>
                </tr>';

            }
            }
    // Release returned data.
    mysqli_free_result($result); ?>

    </table>
    <?php
}
?>

<!--<div class="container">
<!-- Trigger the modal with a button -->
<?php
    // Perform db query.
    $query = "SELECT * FROM clients ORDER BY client ASC";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    while ($row = mysqli_fetch_assoc($result)) {
?>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row["clientID"]; ?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Additional Address</h4>
            </div>

        <div class="modal-body">
            <form class="form-horizontal" action="clients.php" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Client</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="client" placeholder="Client" 
                        value="<?php echo $row["client"]; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="address" placeholder="Address" rows="2"></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>

                    <label class="col-sm-1 control-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="state" placeholder="State">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="zip" placeholder="Zip">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="notes" placeholder="Notes" rows="6"></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" type="submit" name="address_more">Create</button>
                    <a class="btn btn-default" href="clients.php">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>
<?php include '../includes/footer.php'; ?>
