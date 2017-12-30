
<script type="text/javascript">
    $(document).ready(function(){
        $('#update_ext').click(function(){
            var projectID=$('#projectID').val();

var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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

var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();

var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();

                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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
'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();

var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();

                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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
'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        //alert(html);
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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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

var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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

'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        //alert(html);
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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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

'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        //alert(html);
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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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
'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        //alert(html);
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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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

'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        //alert(html);
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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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
'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        //alert(html);
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
var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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

'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

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
        $('#update').click(function(){ 
            var projectID=$('#projectID').val();

var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();
                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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

'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

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
        $('#update_resource').click(function(){
            var projectID=$('#projectID').val();

var project=$('#project').val();
var clientID=$('#clientID').val();
var kickoff=$('#kickoff').val();
var start_date=$('#start_date').val();
var finish=$('#finish').val();
var tech_qa=$('#tech_qa').val();
var draft_delivery=$('#draft_delivery').val();
var final_delivery=$('#final_delivery').val();
var notes=$('#notes').val();
var current_status=$('#current_status').val();

var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var zip=$('#zip').val();
var phone=$('#phone').val();

var address1=$('#address1').val();
var city1=$('#city1').val();
var state1=$('#state1').val();
var zip1=$('#zip1').val();
var phone1=$('#phone1').val();

var address2=$('#address2').val();
var city2=$('#city2').val();
var state2=$('#state2').val();
var zip2=$('#zip2').val();
var phone2=$('#phone2').val();

var address3=$('#address3').val();
var city3=$('#city3').val();
var state3=$('#state3').val();
var zip3=$('#zip3').val();
var phone3=$('#phone3').val();

var address4=$('#address4').val();
var city4=$('#city4').val();
var state4=$('#state4').val();
var zip4=$('#zip4').val();
var phone4=$('#phone4').val();

var address5=$('#address5').val();
var city5=$('#city5').val();
var state5=$('#state5').val();
var zip5=$('#zip5').val();
var phone5=$('#phone5').val();

var selectedCountry = new Array();
var n = jQuery("#assessment:checked").length;

if (n > 0){
    jQuery("#assessment:checked").each(function(){
        selectedCountry.push($(this).val());
    });
}

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
var projectmgr=$('#projectmgr').val();
var emailpmg=$('#emailpmg').val();
var cellpmg=$('#cellpmg').val();
var consultant1=$('#consultant1').val();
var email1=$('#email1').val();
var cell1=$('#cell1').val();

var consultant2=$('#consultant2').val();
var email2=$('#email2').val();
var cell2=$('#cell2').val();

var consultant3=$('#consultant3').val();
var email3=$('#email3').val();
var cell3=$('#cell3').val();

var consultant4=$('#consultant4').val();
var email4=$('#email4').val();
var cell4=$('#cell4').val();

var consultant5=$('#consultant5').val();
var email5=$('#email5').val();
var cell5=$('#cell5').val();

var consultant6=$('#consultant6').val();
var email6=$('#email6').val();
var cell6=$('#cell6').val();

                $.ajax({
                    type:'POST',
                    url:'ajaxUpdate.php',
data:'project='+project+
'&clientID='+clientID+
'&kickoff='+kickoff+
'&start_date='+start_date+

'&finish='+finish+
'&tech_qa='+tech_qa+
'&draft_delivery='+draft_delivery+
'&final_delivery='+final_delivery+
'&notes='+notes+
'&current_status='+current_status+

'&selectedCountry='+selectedCountry+

'&address='+address+
'&city='+city+
'&state='+state+
'&zip='+zip+
'&phone='+phone+

'&address1='+address1+
'&city1='+city1+
'&state1='+state1+
'&zip1='+zip1+
'&phone1='+phone1+

'&address2='+address2+
'&city2='+city2+
'&state2='+state2+
'&zip2='+zip2+
'&phone2='+phone2+

'&address3='+address3+
'&city3='+city3+
'&state3='+state3+
'&zip3='+zip3+
'&phone3='+phone3+

'&address4='+address4+
'&city4='+city4+
'&state4='+state4+
'&zip4='+zip4+
'&phone4='+phone4+

'&address5='+address5+
'&city5='+city5+
'&state5='+state5+
'&zip5='+zip5+
'&phone5='+phone5+

'&ext_objective='+ext_objective+
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
'&projectmgr='+projectmgr+
'&emailpmg='+emailpmg+
'&cellpmg='+cellpmg+

'&consultant1='+consultant1+
'&email1='+email1+
'&cell1='+cell1+

'&consultant2='+consultant2+
'&email2='+email2+
'&cell2='+cell2+

'&consultant3='+consultant3+
'&email3='+email3+
'&cell3='+cell3+

'&consultant4='+consultant4+
'&email4='+email4+
'&cell4='+cell4+

'&consultant5='+consultant5+
'&email5='+email5+
'&cell5='+cell5+

'&consultant6='+consultant6+
'&email6='+email6+
'&cell6='+cell6+

'&projectID='+projectID
,
                    success:function(html){
                        window.location="projects.php";
                    }
                    });
        });
    });
</script>
