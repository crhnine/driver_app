<?php



session_start();



$username_login_check = $_SESSION['username'];

if($username_login_check != Null){



header('Location: legithtml.com/content/data.php');

}



include '../include/connect.php';

$db = new mysqli($host, $username, $password, 'driver_app');



if($db->connect_errno > 0){

    die('Unable to connect to database [' . $db->connect_error . ']');

}



$login_username = $_POST['login_form_username'];

$login_password = $_POST['login_form_password'];


/* For security purposes all sql statement values should be placed as variable and stored elsewhere  */
    $login_sql = "SELECT * FROM $login_table WHERE $login_column1 = '$login_username' AND $login_column2 = '$login_password'";



if(!$result = $db->query($login_sql)){

    die('There was an error running the query [' . $db->error . ']');

}



while($user_row = $result->fetch_assoc()){



$_SESSION['username'] = $user_row['username'];

$_SESSION['id'] = $user_row['id'];

$_SESSION['province'] = $user_row['province'];

$_SESSION['city'] = $user_row['city'];

}



?>