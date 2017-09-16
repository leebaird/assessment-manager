<?php
    $bodyid = "home";
    include "../includes/header.php";
    require_once("../includes/common.php");
    print $_SESSION['user']['role']; 
    if($_SESSION['user']['role']==1){

    if (isset($_GET['delete'])) {
        // DELETE RECORD
        $query = "DELETE FROM users WHERE userID=".intval($_GET['delete']);
        $result = mysqli_query($connection, $query);
        confirm_query($result);
    }
    
    if (isset($_POST['update'])) {
        // UPDATE RECORD.
        $query = "UPDATE users SET username='$_POST[username]', email='$_POST[email]', role='$_POST[role]', approved='$_POST[approved]' WHERE userID=".intval($_POST['update']);
        $result = mysqli_query($connection, $query);
        confirm_query($result);
    }
?>

<?php
if (isset($_GET['read'])) {

    // UPDATE RECORD.
    $query = "SELECT * FROM users WHERE userID=".intval($_GET['read']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Contact</h3>
            </div>

        <div class="panel-body">
            <form class="form-horizontal" action="users.php" method="post">
            <input type = "hidden" name = "update" value = "<?php echo $row['userID'] ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'] ?>" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'] ?>" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-5">
                        
                        <?php
                        if($row['role']==1){
                        ?>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="Admin" readonly="readonly"> 
                        <?php
                        }
                        
                        if($row['role']==2){
                        ?>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="User" readonly="readonly">  
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Approved</label>
                    <div class="col-sm-5">
                        <?php
                        if($row['approved']==1){
                        ?>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="Yes" readonly="readonly">
                        <?php
                        }
                        
                        if($row['approved']==0){
                        ?>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="No" readonly="readonly">
                        <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a class="btn btn-default" href="users.php">Back</a>
                </div>
            </form>

        </div>
        </div>
    </div>
    <?php
}


else if (isset($_GET['update'])) {
    
    // UPDATE RECORD.
    $query = "SELECT * FROM users WHERE userID=".intval($_GET['update']);
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Contact</h3>
            </div>

        <div class="panel-body">
            <form class="form-horizontal" action="users.php" method="post">
            <input type = "hidden" name = "update" value = "<?php echo $row['userID'] ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="role">
                        <?php   
                        if($row['role']==1){
                        ?>
                            <option value="1">Admin</option>
                        <?php
                        }
                        
                        if($row['role']==2){
                        ?>
                            <option value="2">User</option>
                        <?php
                        }
                        ?>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Approved</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="approved">
                        <?php   
                        if($row['approved']==1){
                        ?>
                            <option value="1">Yes</option>
                        <?php
                        }
                        
                        if($row['approved']==0){
                        ?>
                            <option value="0">No</option>
                        <?php
                        }
                        ?>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a class="btn btn-default" href="users.php">Back</a>
                </div>
            </form>

        </div>
        </div>
    </div>
    <?php
}


else {
    print "<br><br><br>";
    $query = "SELECT userID, username, email FROM users";

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
    }

    catch(PDOException $ex) {
        // On a production website, you should not output $ex->getMessage().
        die("Failed to run query: " . $ex->getMessage());
    }

    $rows = $stmt->fetchAll();

        $query = "SELECT * FROM users ORDER BY username ASC";
        $result = mysqli_query($connection, $query);
        confirm_query($result);
?>
<table style="width: auto;" class="table table-bordered table-condensed table-hover">
    <tr>
        <th style="background-color:#E8E8E8;"></th>
        <th style="background-color:#E8E8E8;"></th>
        <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Username</th>
        <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Email</th>
        <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Role</th>
        <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Approved</th>
        <th style="background-color:#E8E8E8; color:#0397B7; font-weight:bold; text-align:center;">Modified</th>
        <th style="background-color:#E8E8E8;"></th>
    </tr>

    <?php
        while($row = mysqli_fetch_assoc($result)) {
            $time = strtotime($row['modified']);
            $myDateFormat = date("m-d-y g:i A", $time);
            $query = "SELECT * FROM users where userID = ".intval($row['userID']);
            $finding = mysqli_query($connection, $query);
            confirm_query($finding);
            $finding = mysqli_fetch_assoc($finding);

            echo '
            <tr>
                <td width="50">'.'<a class="btn btn-primary" href="users.php?read='.$row['userID'].'"><span class="glyphicon glyphicon-play"></span></a>'.'</td>
                <td width="50">'.'<a class="btn btn-warning" href="users.php?update='.$row['userID'].'"><span class="glyphicon glyphicon-pencil"></span></a>'.'</td>
                <td width="200">'.$row["username"].'</td>
                <td width="300">'.$row["email"].'</td>
                ';
            if($row["role"]==1){
            echo'
                
                <td width="100">Admin</td>
                ';}
            else if($row["role"]==2){
            echo'
                
                <td width="100">User</td>
                ';
            }
            echo '
                <td width="100">'.$row["approved"].'</td>
                <td width="175">'.$myDateFormat.'</td>
                <td width="50">'.'<a class="btn btn-danger" href="users.php?delete='.$row['userID'].'"
                onclick="return confirm(\'Are you sure you want to delete this record?\');"><span class="glyphicon glyphicon-trash"></span></a>'.'</td>
            </tr>';
        }

        // Release returned data.
        mysqli_free_result($result);
    ?>

</table>
<?php } ?>
<?php include '../includes/footer.php'; ?>
<?php } else {
        header("Location: ../index.php");
        die("Redirecting to ../index.php");
}
    ?>
