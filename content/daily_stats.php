<?php
echo 'connection has been established!';

    $sql = <<<SQL
    SELECT *
    FROM `day_entry`
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}



while($row = $result->fetch_assoc()){
    echo '<br />ID: ' . $row['id'] . '<br />';
    echo 'USERNAME: ' . $row['username'] . '<br />';
    echo 'MONTH: ' . $row['month'] . '<br />';
    echo 'DAY: ' . $row['day'] . '<br />';
    echo 'YEAR: ' . $row['year'] . '<br />';
    echo 'MILES BEGIN: ' . $row['miles_begin'] . '<br />';
    echo 'PAY PER RUN: ' . $row['payPerRun'] . '<br />';
    echo 'RUN COUNT: ' . $row['run_count'] . '<br />';
    echo 'MILES END: ' . $row['miles_end'] . '<br />';
    echo 'TOTAL CASH: ' . $row['total_cash'] . '<br />';
    echo 'STARTING AMOUNT: ' . $row['startingAmount'] . '<br />';

}


//TO DO: CREATE "EDIT" BUTTON WITH MYSQLI UPDATE
//TO DO: CREATE "DELETE" BUTTON WITH MYSQLI UPDATE

?>