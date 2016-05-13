<?php
session_start();
include 'include/connect.php';
$_SESSION["newsession"] = $value; //Obtains sessions stored in $value


$con = mysql_connect("$host", "$username", "$password")or die("Could not connect to DB");
$db = mysql_select_db("$db_name")or die("Could not find the database");
?>


<!DOCTYPE html>
<html>

<head>
<!-- Do not add code between these script tags -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
<!-------------------------------------------  -->

<script>





   $(function () {

        $('form').on('submit', function (e) {

            e.preventDefault();

            $.ajax({
                type: 'post',
                url: 'form_submit.php',
                data: $('form').serialize(),
                success: function () {
                    alert('form was submitted');
                }
            });
         
        });
        
    });  


</script>




<title>Delivery Driver App</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="layout/normalize.css" rel="stylesheet" type="text/css" />
<link href="layout/index.css" rel="stylesheet" type="text/css" />
<link href="layout/mobile.css" rel="stylesheet" type="text/css" />
<link href="layout/custom.css" rel="stylesheet" type="text/css" />

</head>


<body>
    <div style="width:100%;height:35px;background-color:#f85708;border-bottom:1px solid white;">
    <!--  Hello username float right  -->
    </div>
    <div class="header_container">
    <p style="margin:0px;width:100%;text-align:center">
    Driver-B-App
   </p>
    </div>
    <div id="mobile_container">

    <div id="information_block">

    <div class="btn_container" style="">
    <button  id="startDay" onclick="startDay()" style="">Start the Day</button>
    </div>
    <div id="endDay" style="width:100%;display:none;">

    <div class="day_display" style="">

    </div>
    <!--   -->
    <form class="dataForm">
    <!-- Current Date is passed to these inputs and sent off to the server  -->
    <input id="month" type="hidden" name="month" /><br /><br />
    <input id="day" type="hidden" name="day" /><br /><br />
    <input id="year" type="hidden" name="year" /><br /><br />
    <!------------------------------------------------------------------------>
    <label for="miles_begin">Starting Miles</label><br />
    <input id="miles_begin" name="miles_begin" style="display:inline-block" /><br /><br />

    <label for="payPerRun">$ Per Run</label><br />
    <input id="payPerRun" name="payPerRun" style="display:inline-block" /><br /><br />

    <label for="startingAmount">Starting Cash on Hand</label><br />
    <input id="startingAmount" name="startingAmount" style="display:inline-block" /><br /><br />

    <label for="miles_end">Ending Miles</label><br />
    <input id="miles_end" name="miles_end" /><br /><br />

    <label for="total_cash">Money Made Minus Hourly for the Shift</label><br />
    <input id="total_cash" name="total_cash" /><br /><br />
    <button type="submit" name="submit" value="submit" id="submitBtn" style="">Submit</button>
 
    </form>
    <!--   -->
    
    <div class="endBtn btn_container">
    <button id="endDayBtn" onclick="endDay()"  style="">End the Day</button>
    </div>

    </div>


    </div>
    </div>

    <div>

</div>

    <script type="text/javascript">



       $('#startDay').click(function(){

       $('form').trigger('reset');

        $(this).css("display" , "none");
        $('#endDay').css("display" , "inline");
        $('#endDayBtn').css("display" , "inline");
        $('#submitBtn').css("display" , "none");


        var d = new Date();
        var year = d.getFullYear();
        var day = d.getDate();
        var month = new Array();
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";
        var month_reset = month[d.getMonth()];

        $('#year').val(year);
        $('#day').val(day);
        $('#month').val(month_reset);


        var htmlString = '<div class="day_grouping"><div class="date_heading">Month:  </div>' + month_reset + '</div><div class="day_grouping"><div class="date_heading">Day:  </div>' + day + '</div><div class="day_grouping"><div class="date_heading">Year:  </div>' + year + '</div></div>';
        $('.day_display').html(htmlString);
    });

    $('#endDayBtn').click(function(){

        $('#endDayBtn').css("display" , "none");
        $('#submitBtn').css("display" , "inline");
       
    });

    $('#submitBtn').click(function(){
    $('#endDay').css("display" , "none");
    $('#startDay').css("display" , "inline");

});

     


    </script>
</body>
</html>