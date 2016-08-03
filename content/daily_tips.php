<?php


session_start();
include '../include/connect.php';
$db = new mysqli($host, $username, $password, 'driver_app');
$current_login = $_SESSION["username"];


$tips_month = date(F);
$tips_day = date(j);
$tips_year = date(Y);


    $sql = <<<SQL
    SELECT *
    FROM `$tips_table` WHERE username = '$current_login' AND month = '$tips_month' AND day = '$tips_day' AND year = '$tips_year' ORDER BY id DESC
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}



while($row = $result->fetch_assoc()){

    echo '<div class="tips_stats"><div class="tips_runs">' . $row['run'] . '</div>';
    echo '<div class="tips_ref_number">' . $row['ref_number'] . '</div>';
    echo '<div class="tips_amount">' . $row['tip_amount'] . '</div></div>';
}


//TO DO: CREATE "EDIT" BUTTON WITH MYSQLI UPDATE
//TO DO: CREATE "DELETE" BUTTON WITH MYSQLI UPDATE

?>