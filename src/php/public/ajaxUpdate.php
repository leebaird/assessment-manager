<?php
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "amdb";

    $connection = new mysqli($host, $username, $password, $dbname);
?>

<?php
    $ext_objective = @$_POST['ext_objective'];
    $ext_targets = @$_POST['ext_targets'];
    $ext_exclude = @$_POST['ext_exclude'];
    $ext_notes = @$_POST['ext_notes'];
    $int_objective = @$_POST['int_objective'];
    $int_targets = @$_POST['int_targets'];
    $int_exclude = @$_POST['int_exclude'];
    $int_notes = @$_POST['int_notes'];

    $mob_objective = @$_POST['mob_objective'];
    $mob_notes = @$_POST['mob_notes'];

    $physical_objective = @$_POST['phy_objective'];
    $physical_notes = @$_POST['phy_notes'];

    $social_objective = @$_POST['se_objective'];
    $social_notes = @$_POST['se_notes'];

    $war_objective = @$_POST['war_objective'];
    $war_notes = @$_POST['war_notes'];

    $web_objective = @$_POST['web_objective'];
    $web_notes = @$_POST['web_notes'];

    $wireless_objective = @$_POST['wireless_objective'];
    $wireless_notes = @$_POST['wireless_notes'];

    // UPDATE RECORD.
    print @$query_external = "UPDATE projects SET
    external_objective='$ext_objective',
    external_targets='$ext_targets',
    external_exclude='$ext_exclude',
    external_notes='$ext_notes',

    internal_objective='$int_objective',
    internal_targets='$int_targets',
    internal_exclude='$int_exclude',
    internal_notes='$int_notes',

    mobile_objective='$mob_objective',
    mobile_notes='$mob_notes',

    physical_objective='$physical_objective',
    physical_notes='$physical_notes',

    social_objective='$social_objective',
    social_notes='$social_notes',

    war_objective='$war_objective',
    war_notes='$war_notes',

    web_objective='$web_objective',
    web_notes='$web_notes',

    wireless_objective='$wireless_objective',
    wireless_notes='$wireless_notes'
    WHERE projectID=".$_POST['projectID'];

    $result = mysqli_query($connection, $query_external);
?>