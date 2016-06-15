<?php
session_start();
include '../include/connect.php';
$db = new mysqli($host, $username, $password, 'driver_app');
$current_login = $_SESSION["username"];
echo $current_login;



//TO DO: BE SURE TO WRITE FUNCTIONALITY THAT ALLOWS TESTING OF LOGIN AND ACTUAL LOGOUT WITH SESSION UNSET
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Delivery Driver App</title>
    <!-- Do not add code between these script tags -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <!-------------------------------------------  -->
    <script>
   $(function () {
        $('#dataForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '../submissions/form_submit.php',
                data: $('#dataForm').serialize(),
                success: function () {
                    alert('form was submitted');
                }
            });
        });
   });
    </script>
<!--  EACH AJAX REQUEST NEEDS TO BE IN ITS OWN SEPARATE SCRIPT-->
    <script>
        $(function () {
            $('#tips_form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '../submissions/tips_form_submit.php',
                    data: $('#tips_form').serialize(),
                    success: function () {
                        alert('form was submitted');
                    }
                });
            });
        });
    </script>
    <title>Delivery Driver App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../layout/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../layout/index.css" rel="stylesheet" type="text/css" />
    <link href="../layout/mobile.css" rel="stylesheet" type="text/css" />
    <link href="../layout/custom.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <?php

        include '../include/header.php';

    ?>
    
    <div id="mobile_container">

        <div id="information_block">

            <div class="btn_container" style="">
                <button id="startDay" style="">Start the Day</button>
            </div>

            <div id="endDay" style="width:100%;display:none;">
                <div id="day_display" class="day_display" style="">

                </div>
                <div id="cont_btn" class="btn_container" style="display:none;width:95%;margin:0 auto;margin-top:25px;">
                    <button id="continue" class="cont_btn">Continue</button>
                </div>

                <div class="endBtn btn_container" style="width:95%;margin:0 auto;">
                    <button id="endDayBtn" style="margin:0 auto;display:none;">End the Day</button>
                </div>
                <!--   -->

                <form id="dataForm" class="dataForm">
                    <!-- STEP ONE--->
                    <!-- Starting the day -->
                    <!-- Current Date is passed to these inputs and sent off to the server  -->
                    <div id="step_one" style="width:60%;margin:0 auto;display:none;text-align:center;">
                        <input type="text" name="form_identification" id="form_identification_01" value="one" hidden />
                        <input id="month" type="hidden" name="month" />
                        <input id="day" type="hidden" name="day" />
                        <input id="year" type="hidden" name="year" />
                        <!------------------------------------------------------------------------>
                        <div class="input_field01">
                            <label for="miles_begin" id="miles_begin_label">Starting Miles</label><br />
                            <input id="miles_begin" name="miles_begin" style="display:inline-block" /><br /><br />

                            <label for="payPerRun" id="payPerRun_label">$ Per Run</label><br />
                            <input id="payPerRun" name="payPerRun" style="display:inline-block" /><br /><br />

                            <label for="startingAmount" id="startingAmount_label">Starting Cash on Hand</label><br />
                            <input id="startingAmount" name="startingAmount" style="display:inline-block" /><br /><br />
                        </div>
                    </div>
                    <!-- ------------------------------------------------------------------ -->
                    <!-- STEP TWO -->


                    <div id="step_two" style="width:60%;margin:0 auto;display:none;text-align:center;">
                     
                            <div class="count_container">
                                <div style="width:100%;margin:0 auto;margin-bottom:20px;">

                                    <div id="display_value" class="display_value">


                                    </div>
                                    <button id="remove_run" class="tip_tracker"  style="margin-right:20%;"><img src="../img/minus.png"  /></button>

                                    <input type="number" name="run_count" id="runCountInput" value="1" hidden />
                                    <div id="run_count" class="run_count" style="width:20%;height:80px;margin-right:20%;float:left;"></div>

                                    <button id="add_run" class="tip_tracker"><img src="../img/plus.png" /></button>
    
                                </div>
                            </div>

                    </div> 


                    <!-- -->
                    <!-- STEP THREE -->
                    <!-- Ending the Day -->

                    <div id="step_three" style="display:none;width:60%;margin:0 auto;">
                        <label id="miles_end_label" for="miles_end" style="display:none">Ending Miles</label><br />
                        <input id="miles_end" name="miles_end" style="display:none" /><br /><br />

                        <label id="total_cash_label" for="total_cash" style="display:none">Money Made Minus Hourly for the Shift</label><br />
                        <input id="total_cash" name="total_cash" style="display:none" /><br /><br />
                        <!-- ------------------------------------------------------------------ -->

                        <button type="submit" name="submit" value="submit" id="submitBtn" style="display:none;">Submit</button>
                    </div>
                </form>
                <!--   -->

                <form id="tips_form" style="width:100%;margin:0 auto;margin-top:10px;display:none;">
                    <div class="count_container" style="width:60%;margin-top:20px;margin:0 auto;padding-top:85px;text-align:center;">
                        <input id="month_02" hidden name="month_02" />
                        <input id="day_02" hidden name="day_02" />
                        <input id="year_02" hidden name="year_02" />
                        <input type="text" name="form_identification" id="form_identification_02" value="two" hidden />

                        <input type="number" name="run_count01" id="runCountSpecific" hidden value="" />

                        <label for="tip_amount" id="tip_amount_label" >Tip for this run </label><br />
                        <input type="text" name="tip_amount" id="tip_amount" class="tip_amount" /><br /><br />

                        <label for="ref_number" id="ref_number_label">Ticket #</label><br /><br />
                        <input type="number" name="ref_number_input" id="ref_number" min="1" />


                        <button type="submit" id="submit_tips" name="submit_tips" value="save_tips" style="width:200px;height:30px;margin-top:20px;">Save tip for run </button>
                    </div>
                    <!-- TO DO: DISPLAY THROUGH AJAX DATABASE ENTRIES BASED ON USER LOGGED IN --> 
                    <div class="current_statistics">
                         <?php include 'daily_tips.php';  ?>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div>
    </div>
    </body>
</html> 
<script type="text/javascript">
    $('#startDay').click(function () {
       $(this).css("display", "none");
       $('form').trigger('reset');
       $('#endDay').css("display", "block");
       $('#step_one').css("display", "block");

       $('#day_display').css("display", "block");
       $('#miles_begin_label').css("display", "block");
       $('#miles_begin').css("display", "inline-block");
       $('#payPerRun_label').css("display", "block");
       $('#payPerRun').css("display", "inline-block");
       $('#startingAmount_label').css("display", "block");
       $('#startingAmount').css("display", "inline-block");


       $('#cont_btn').css("display", "block");
       $('#continue').css("display", "block");

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
        var month_reset_02 = month[d.getMonth()];

        $('#year').val(year);
        $('#day').val(day);
        $('#month').val(month_reset);

        $('#year_02').val(year);
        $('#day_02').val(day);
        $('#month_02').val(month_reset_02);

        var htmlString = '<div class="day_grouping"><div class="date_heading">Month:  </div>' + month_reset + '</div><div class="day_grouping"><div class="date_heading">Day:  </div>' + day + '</div><div class="day_grouping"><div class="date_heading">Year:  </div>' + year + '</div></div>';
        $('.day_display').html(htmlString);
    });

    $('#continue').click(function(){

        $('#continue').css("display", "none");
        $('#step_one').css("display", "none");
        $('#day_display').css("display", "none");
        $('#miles_begin_label').css("display", "none");
        $('#miles_begin').css("display", "none");
        $('#payPerRun_label').css("display", "none");
        $('#payPerRun').css("display", "none");
        $('#startingAmount_label').css("display", "none");
        $('#startingAmount').css("display", "none");

        $('#step_two').css("display", "block");
        $('#tips_form').css("display", "block");
        $('#endDayBtn').css("display" , "block");

        var run_count = $('#runCountInput').val();
        $('.run_count').html(run_count);
        $('#runCountSpecific').val(run_count);
           
    });

    $('#add_run').click(function (e) {
        e.preventDefault();
        var val = $('#runCountInput').val();

        var new_val = parseInt($('#runCountInput').val()) + 1;
        var new_val = parseInt(new_val);
        var value_string = '<div>' + new_val + '</div>';
        $('#runCountInput').val(new_val);
        $('.run_count').html(value_string);
        $('#runCountSpecific').val(new_val);
        
    });

    $('#remove_run').click(function (e) {
        e.preventDefault();
        var val = $('#runCountInput').val();

        var new_val = parseInt($('#runCountInput').val()) - 1;
        var new_val = parseInt(new_val);
        if(new_val <= 0){
            new_val = 1;
            new_val = parseInt(new_val);
        }
        var value_string = '<div>' + new_val + '</div>';
        $('#runCountInput').val(new_val);
        $('.run_count').html(value_string);
        $('#runCountSpecific').val(new_val);
    });

    $('#endDayBtn').click(function(){

        $('#endDayBtn').css("display", "none");
        $('#step_two').css("display", "none");
        $('#tips_form').css("display", "none");

        $('#submitBtn').css("display", "block");
        $('#step_three').css("display", "block");
        $('#miles_end_label').css("display" , "block");
        $('#miles_end').css("display" , "block");
        $('#total_cash_label').css("display" , "block");
        $('#total_cash').css("display" , "block");

    });

    $('#submitBtn').click(function(){
 
        $('#startDay').css("display", "block");

        $('#cont_btn').css("display", "none");
        $('#step_one').css("display", "none");
        $('#step_two').css("display", "none");
        $('#step_three').css("display", "none");
        $('#tips_form').css("display", "none");

    });
</script>