<?php
include 'include/connect.php';
$con = mysql_connect("$host","$username","$password")or die("cannot connect to database");
mysql_select_db("$db_name")or die("cannot select database table");

$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$miles_begin = $_POST['miles_begin'];
$payPerRun = $_POST['payPerRun'];
$startingAmount = $_POST['startingAmount'];
$miles_end = $_POST['miles_end'];
$total_cash = $_POST['total_cash'];

$sql_post = "INSERT INTO day_entry (month, day, year, miles_begin, payPerRun, startingAmount, miles_end, total_cash) VALUES ('$month', '$day', '$year', '$miles_begin', '$payPerRun', '$startingAmount', '$miles_end', '$total_cash')";
$db_post = mysql_query($sql_post)or die('Query "' . $sql_post . '" failed: ' . mysql_error());


?>