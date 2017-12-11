<script type="text/javascript">
    $(document).ready(function(){
        $('#update_ext').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#int_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#mob_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#physical_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#se_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#war_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#web_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#wire_submit').click(function(){
            var projectID=$('#projectID').val();

            var ext_objective=$('#ext_objective').val();
            var ext_targets=$('#ext_targets').val();
            var ext_exclude=$('#ext_exclude').val();
            var ext_notes=$('#ext_notes').val();

            var int_objective=$('#int_objective').val();
            var int_targets=$('#int_targets').val();
            var int_exclude=$('#int_exclude').val();
            var int_notes=$('#int_notes').val();

            var mob_objective=$('#mob_objective').val();
            var mob_notes=$('#mob_notes').val();

            var phy_objective=$('#phy_objective').val();
            var phy_notes=$('#phy_notes').val();

            var se_objective=$('#se_objective').val();
            var se_notes=$('#se_notes').val();

            var war_objective=$('#war_objective').val();
            var war_notes=$('#war_notes').val();

            var web_objective=$('#web_objective').val();
            var web_notes=$('#web_notes').val();

            var wireless_objective=$('#wire_objective').val();
            var wireless_notes=$('#wire_notes').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'ext_objective='+ext_objective+
'&ext_targets='+ext_targets+
'&ext_exclude='+ext_exclude+
'&ext_notes='+ext_notes+
'&int_objective='+int_objective+
'&int_targets='+int_targets+
'&int_exclude='+int_exclude+
'&int_notes='+int_notes+
'&mob_objective='+mob_objective+
'&mob_notes='+mob_notes+
'&phy_objective='+phy_objective+
'&phy_notes='+phy_notes+
'&se_objective='+se_objective+
'&se_notes='+se_notes+
'&war_objective='+war_objective+
'&war_notes='+war_notes+
'&web_objective='+web_objective+
'&web_notes='+web_notes+
'&wireless_objective='+wireless_objective+
'&wireless_notes='+wireless_notes+
'&projectID='+projectID
,
                    success:function(html){
                        alert(html);
                        window.location="projects.php";
                    }
            });
        });
    });
</script>