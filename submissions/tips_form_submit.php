<?php
session_start();
$tips_username = $_SESSION['username'];
echo $tips_username;

include '../include/connect.php';
$con = mysql_connect("$host","$username","$password")or die("cannot connect to database");
mysql_select_db("$db_name")or die("cannot select database table");

$month_02 = $_POST['month_02'];
$day_02 = $_POST['day_02'];
$year_02 = $_POST['year_02'];
$tip_amount = $_POST['tip_amount'];
$run_count01 = $_POST['run_count01'];
$ref_number = $_POST['ref_number_input'];

$sql_post2 = "INSERT INTO tip_per_run (username, month, day, year, tip_amount, run, ref_number) VALUES ('$tips_username' , '$month_02', '$day_02', '$year_02', '$tip_amount', '$run_count01', '$ref_number')";
$db_post2 = mysql_query($sql_post2)or die('Query "' . $sql_post2 . '" failed: ' . mysql_error());


?>