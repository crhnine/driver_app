<?php

session_start();



$tips_username = $_SESSION['username'];

echo $tips_username;

include '../include/connect.php';

$con = mysql_connect("$host","$username","$password")or die("cannot connect to database");

mysql_select_db("$db_name")or die("cannot select database table");







$month = $_POST['month'];

$day = $_POST['day'];

$year = $_POST['year'];

$miles_begin = $_POST['miles_begin'];

$payPerRun = $_POST['payPerRun'];

$run_count = $_POST['run_count'];

$startingAmount = $_POST['startingAmount'];

$miles_end = $_POST['miles_end'];

$total_cash = $_POST['total_cash'];



$sql_post = "INSERT INTO $daily_table ($login_column1, month, day, year, $daily_miles, $daily_ppr, $daily_count, $daily_initial, $daily_miles_end, $daily_coh) VALUES ('$tips_username', '$month', '$day', '$year', '$miles_begin', '$payPerRun', '$run_count', '$startingAmount', '$miles_end', '$total_cash')";

$db_post = mysql_query($sql_post)or die('Query "' . $sql_post . '" failed: ' . mysql_error());



?>