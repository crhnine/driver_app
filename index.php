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
    <button  id="startDay"  style="">Start the Day</button>
    </div>


    <div id="endDay" style="width:100%;display:none;">
    <div id="day_display" class="day_display" style="">

    </div>
    <!--   -->

    <form class="dataForm">
    <!-- STEP ONE--->
    <!-- Starting the day -->
    <!-- Current Date is passed to these inputs and sent off to the server  -->
    <div>
    <input id="month" type="hidden" name="month" /><br /><br />
    <input id="day" type="hidden" name="day" /><br /><br />
    <input id="year" type="hidden" name="year" /><br /><br />
    <!------------------------------------------------------------------------>
    <label for="miles_begin" id="miles_begin_label">Starting Miles</label><br />
    <input id="miles_begin" name="miles_begin" style="display:inline-block" /><br /><br />

    <label for="payPerRun" id="payPerRun_label">$ Per Run</label><br />
    <input id="payPerRun" name="payPerRun" style="display:inline-block" /><br /><br />

    <label for="startingAmount" id="startingAmount_label">Starting Cash on Hand</label><br />
    <input id="startingAmount" name="startingAmount" style="display:inline-block" /><br /><br />
    </div>
    <!-- ------------------------------------------------------------------ -->
    <!-- STEP TWO -->
    <!-- TO DO: BUILD THE + AND - FEATURE SO DRIVERS CAN KEEP TRACK OF HOW MANY RUNS THEY HAVE Chris Hodges -->
    <!-- TO DO: BUILD THE + AND - ALIGN ALL OF THE ELEMENTS SO THAT THEY MAKE SENSE AESTHETICALLY CORRECT ON THE PAGE Chris Hodges -->
    <!-- TO DO: BUILD THE + AND - ADD DESIGN TO LABELS AND INPUTS Chris Hodges -->



    <!-- -->
    <!-- STEP THREE -->
    <!-- Ending the Day -->


    <label id="miles_end_label" for="miles_end" style="display:none">Ending Miles</label><br />
    <input id="miles_end" name="miles_end" style="display:none" /><br /><br />

    <label id="total_cash_label" for="total_cash" style="display:none">Money Made Minus Hourly for the Shift</label><br />
    <input id="total_cash" name="total_cash" style="display:none" /><br /><br />
    <!-- ------------------------------------------------------------------ -->

    <button type="submit" name="submit" value="submit" id="submitBtn" style="display:none;">Submit</button>
    </form>
    <!--   -->
    <div class="btn_container" style="">
    <button id="continue" style="">Continue</button>
    </div>
    <div class="endBtn btn_container">
    <button id="endDayBtn" onclick="endDay()"  style="display:none">End the Day</button>
    </div>

    </div>


    </div>
    </div>

    <div>

</div>
</body>
</html>

    <script type="text/javascript">



       $('#startDay').click(function(){
       $('form').trigger('reset');
       $('#continue').css("display" , "inline");
        $(this).css("display" , "none");
        $('#endDay').css("display" , "inline");


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

    $('#continue').click(function(){

        $('#continue').css("display" , "none");
        $('#endDayBtn').css("display" , "inline");
        $('#day_display').css("display" , "none");
        $('#miles_begin_label').css("display" , "none");
        $('#miles_begin').css("display" , "none");
        $('#payPerRun_label').css("display" , "none");
        $('#payPerRun').css("display" , "none");
        $('#startingAmount_label').css("display" , "none");
        $('#startingAmount').css("display" , "none");



    });

    $('#endDayBtn').click(function(){

        $('#endDayBtn').css("display" , "none");
        $('#submitBtn').css("display" , "inline");

        $('#miles_end_label').css("display" , "inline");
        $('#miles_end').css("display" , "inline");
        $('#total_cash_label').css("display" , "inline");
        $('#total_cash').css("display" , "inline");
       
    });

    $('#submitBtn').click(function(){
    $('#endDay').css("display" , "none");
    $('#startDay').css("display" , "inline");

});

     


    </script>
</body>
</html>