<?php
include 'include/connect.php';
$con = mysql_connect("$host","$username","$password")or die("cannot connect to database");
mysql_select_db("$db_name")or die("cannot select database table");

$form_identification = $_POST['form_identification'];

if($form_identification === "one"){

$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$miles_begin = $_POST['miles_begin'];
$payPerRun = $_POST['payPerRun'];
$run_count = $_POST['run_count'];
$startingAmount = $_POST['startingAmount'];
$miles_end = $_POST['miles_end'];
$total_cash = $_POST['total_cash'];

$sql_post = "INSERT INTO day_entry (month, day, year, miles_begin, payPerRun, run_count, startingAmount, miles_end, total_cash) VALUES ('$month', '$day', '$year', '$miles_begin', '$payPerRun', '$run_count', '$startingAmount', '$miles_end', '$total_cash')";
$db_post = mysql_query($sql_post)or die('Query "' . $sql_post . '" failed: ' . mysql_error());
}


elseif($form_identification === "two"){

$run_count = $_POST['run_count'];
$tip_amount = $_POST['tip_amount'];
$month_02 = $_POST['month_02'];
$day_02 = $_POST['day_02'];
$year_02 = $_POST['year_02'];

$sql_post2 = "INSERT INTO tip_per_run (month, day, year, tip_amount, run_count) VALUES ('$month_02', '$day_02', '$year_02', '$tip_amount', '$run_count')";
$db_post2 = mysql_query($sql_post2)or die('Query "' . $sql_post2 . '" failed: ' . mysql_error());



?>