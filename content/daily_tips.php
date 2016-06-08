<?php
    $sql = <<<SQL
    SELECT *
    FROM `tip_per_run`
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}



while($row = $result->fetch_assoc()){

    echo '<div style="width:100%;height:40px;margin-top:30px;color:white;background-color:grey;padding-top:11px;font-weight:700;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"><div style="float:left;width:15%;box-sizing:border-box;padding-left:2%">RUN:' . $row['run_count'] . '</div>';
    echo '<div style="float:left;width:40%;box-sizing:border-box;padding-left:2%;">TICKET NUMBER: ' . $row['ref_number'] . '</div>';
    echo '<div style="float:left;width:35%;box-sizing:border-box;padding-left:2%;">TIP AMOUNT: ' . $row['tip_amount'] . '</div></div>';
}


//TO DO: CREATE "EDIT" BUTTON WITH MYSQLI UPDATE
//TO DO: CREATE "DELETE" BUTTON WITH MYSQLI UPDATE

?>