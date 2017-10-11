<style>
    .vertical-center {
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<?php
    $bodyid = "home";
    $err="";
    include "../includes/header.php";
    require_once("../includes/common.php");

    if ($_SESSION['user']['userRoleID']==1) {
        if (isset($_POST['create'])) {
            // CREATE RECORD
            if (!empty($_POST)) {
                if (empty($_POST['username'])) {
                    die("<br><br><br><br>Please enter a username.");
                    $err .="Please enter a username.";
                }

                if (empty($_POST['password'])) {
                    die("<br><br><br><br>Please enter a password.");
                    $err .="Please enter a password.";
                }

                if (strlen($_POST['password']) < 12) {
                    die("<br><br><br><br>Your password is too short. The minimum length is 12 characters.");
                    $err .="Your password is too short. The minimum length is 12 characters.";
                }

                if (($_POST['password']) != ($_POST['password2'])) {
                    die("<br><br><br><br>Your passwords do not match.");
                    $err .="Your passwords do not match.";
                }

                if (!preg_match("#[A-Z]+#", ($_POST['password']))) {
                    die("<br><br><br><br>Your password must contain at least one uppercase letter.");
                    $err .="Your password must contain at least one uppercase letter.";
                }

                if (!preg_match("#[a-z]+#", ($_POST['password']))) {
                    die("<br><br><br><br>Your password must contain at least one lowercase letter.");
                    $err .="Your password must contain at least one lowercase letter.";
                }

                if (!preg_match("#[0-9]+#", ($_POST['password']))) {
                    die("<br><br><br><br>Your password must contain at least one number.");
                    $err .="Your password must contain at least one number.";
                }

                if (!preg_match("#[\W]+#", ($_POST['password']))) {
                    die("<br><br><br><br>Your password must contain at least one special character.");
                    $err .="Your password must contain at least one special character.";
                }

                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    die("<br><br><br><br>Invalid email address.");
                    $err .="Invalid email address.";
                }

                // Check if the username is already in use.
                $query = "SELECT 1 FROM users WHERE username = :username";

                // This contains the definitions for any special tokens that we place in the SQL query.
                $query_params = array(
                    ':username' => $_POST['username']
                );

                try {
                    $stmt = $db->prepare($query);
                    $result = $stmt->execute($query_params);
                } catch (PDOException $ex) {
                    // On a production website, you should not output $ex->getMessage().
                    die("Failed to run query: " . $ex->getMessage());
                }

                // The fetch() method returns an array representing the "next" row from the selected results, or
                // false if there are no more rows to fetch.
                $row = $stmt->fetch();

                // If a row was returned, then we know a matching username was found in the database already and we
                // should not allow the user to continue.
                if ($row) {
                    die("This username is already in use.");
                }

                // Perform the same type of check for the email address, in order to ensure that it is unique.
                $query = "SELECT 1 FROM users WHERE email = :email";

                $query_params = array(
                    ':email' => $_POST['email']
                );

                try {
                    $stmt = $db->prepare($query);
                    $result = $stmt->execute($query_params);
                } catch (PDOException $ex) {
                    die("Failed to run query: " . $ex->getMessage());
                }

                $row = $stmt->fetch();

                if ($row) {
                    die("This email address is already in use.");
                }

                // A salt is randomly generated here to protect against brute force and rainbow table attacks.
                $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));

                // Hash the password with the salt so that it is securely stored in the database.
                $password = hash('sha256', $_POST['password'] . $salt);

                // Hash the hash value 65,536 more times to protect against brute force attacks.
                for ($round = 0; $round < 65536; $round++) {
                    $password = hash('sha256', $password . $salt);
                }

                $query_params = array(
                    ':username' => $_POST['username'],
                    ':password' => $password,
                    ':salt' => $salt,
                    ':email' => $_POST['email']
                );

                $username = $_POST['username'];
                $email = $_POST['email'];
                $role = $_POST['role'];
                $approval = $_POST['approval'];

                $query = "INSERT INTO users (modified, username, email, password, salt, activated, userRoleID, approved) VALUES (now(), '$username', '$email', '$password', '$salt', 1, '$role', $approval)";

                try {
                    // Execute the query to create the user.
                    $stmt = $db->prepare($query);
                    $result = $stmt->execute($query_params);
                } catch (PDOException $ex) {
                    // On a production website, you should not output $ex->getMessage().
                    die("<div align='center'><br><br><br><br><br><br>
                    Failed to run query: " . $ex->getMessage()."</div>");
                }

                // Postfix not configured yet.
                $to = "leebaird@gmail.com";
                $subject = "New user registration.";
                $message = "A new user has requested an account.";
                //mail($to,$subject,$message);

                header("Location: users.php");
                die("Redirecting to users.php");
            }
            //confirm_query($result);
        }

        if (isset($_GET['delete'])) {
            // DELETE RECORD
            $query = "DELETE FROM users WHERE userID=".intval($_GET['delete']);
            $result = mysqli_query($connection, $query);
            confirm_query($result);
        }

        if (isset($_POST['update'])) {
            // UPDATE RECORD.
            $query = "UPDATE users SET username='$_POST[username]', email='$_POST[email]', userRoleID='$_POST[role]', approved='$_POST[approved]' WHERE userID=".intval($_POST['update']);
            $result = mysqli_query($connection, $query);
            confirm_query($result);
        }
?>

<div><?php //if(isset($err)){ print "<br><br><br><br>".$err; }?></div>

<?php
    if (isset($_GET['create'])) {
?>

<div class="vertical-center">
    <div class="container col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create User</h3>
            </div>

        <div class="panel-body">
            <form class="form-horizontal" action="users.php" method="post">
                <div class="form-group">
                    <label class="col-sm-4 control-label">User Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="username" placeholder="User Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="email" placeholder="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Retype Password</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password2" placeholder="Retype Password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Role</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="role">
                            <option value="2">User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Approval</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="approval">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn btn-primary" type="submit" name="create">Create</button>
                    <a class="btn btn-default" href="users.php">Back</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<?php
    } elseif (isset($_GET['read'])) {

        // READ RECORD.
        $query = "SELECT * FROM users WHERE userID=".intval($_GET['read']);
        $result = mysqli_query($connection, $query);
        confirm_query($result);
        $row = mysqli_fetch_assoc($result);
?>

<div class="vertical-center">
    <div class="container col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                    <h3 class="panel-title">Read User</h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="users.php" method="post">
                        <input type = "hidden" name = "update" value = "<?php echo $row['userID'] ?>">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'] ?>" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Role</label>
                            <div class="col-sm-2">

                                <?php
                                    if ($row['userRoleID']==1) {
                                ?>

                                <input type="text" class="form-control" name="email" placeholder="Email" value="Admin" readonly="readonly">
                                <?php
                                }
                                    if ($row['userRoleID']==2) {
                                ?>

                                <input type="text" class="form-control" name="email" placeholder="Email" value="User" readonly="readonly">
                                <?php
                                } ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Approved</label>
                            <div class="col-sm-2">
                                <?php
                                    if ($row['approved']==1) {
                                ?>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="Yes" readonly="readonly">
                                <?php
                                }
                                    if ($row['approved']==0) {
                                ?>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="No" readonly="readonly">
                                <?php
                                } ?>
                            </div>
                        </div>

                        <div class="form-actions">
                            <a class="btn btn-default" href="users.php">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        } elseif (isset($_GET['update'])) {

            // UPDATE RECORD.
            $query = "SELECT * FROM users WHERE userID=".intval($_GET['update']);
            $result = mysqli_query($connection, $query);
            confirm_query($result);
            $row = mysqli_fetch_assoc($result); ?>

<div class="vertical-center">
    <div class="container col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Update User</h3>
            </div>

        <div class="panel-body">
            <form class="form-horizontal" action="users.php" method="post">
            <input type = "hidden" name = "update" value = "<?php echo $row['userID'] ?>">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Role</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="role">
                        <?php
                        if ($row['userRoleID']==1) {
                            ?>
                            <option value="1">Admin</option>
                        <?php
                        }
                            if ($row['userRoleID']==2) {
                        ?>

                        <option value="2">User</option>

                        <?php
                        } ?>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Approved</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="approved">
                            <?php
                                if ($row['approved']==1) {
                            ?>
                                <option value="1">Yes</option>
                            <?php
                            }
                                if ($row['approved']==0) {
                            ?>

                            <option value="0">No</option>
                            <?php
                            } ?>
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
</div>

<?php
    } else {
?>

<br>
<a class="btn btn-primary" href="users.php?create" input type="button">New</a>

<?php
    print "<br><br>";
    $query = "SELECT userID, username, email FROM users";

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
    } catch (PDOException $ex) {
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
        <th style="background-color:#E8E8E8;"></th>
    </tr>

    <?php
        while ($row = mysqli_fetch_assoc($result)) {
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
            if ($row["userRoleID"]==1) {
                echo'
                <td width="100">Admin</td>
                ';
            } elseif ($row["userRoleID"]==2) {
                echo'
                <td width="100">User</td>
                ';
            }
            echo '
                <td width="100">'
    ?>

    <?php if ($row["approved"]==1) {
        print "Yes";
    } elseif ($row["approved"]==0) {
        print "No";
    } ?>

    <?php
        echo
        '</td>
        <td width="175">'.$myDateFormat.'</td>
        <td width="50">'.'<a class="btn btn-danger" href="users.php?delete='.$row['userID'].'"
        onclick="return confirm(\'Are you sure you want to delete this record?\');"><span class="glyphicon glyphicon-trash"></span></a>'.'</td>'
    ?>

    <td><?php if ($row["approved"]==0) {
        ?> <a href="users.php?approval=<?php print $row["userID"]; ?>">Approval</a> <?php
        } ?></td>
        </tr>
         <?php
        }

    // Release returned data.
    mysqli_free_result($result); ?>
</table>

<?php
    if (isset($_GET['approval'])) {
        $sql ="update users set approved=1 where userID=".$_GET['approval'];
        $result = mysqli_query($connection, $sql);
        confirm_query($result);
    }
} ?>

<?php
    include '../includes/footer.php';
?>

<?php
    } else {
        header("Location: ../index.php");
        die("Redirecting to ../index.php");
    }
?>

<?php

?>
