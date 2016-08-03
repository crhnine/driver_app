<?php



//CONNECT TO DATABASE

//COLLECT INFORMATION FROM REGISTER.HTML

//PREPARE SQL QUERY FOR USER_LOGIN TABLE

//POST INFORMATION

//REDIRECT TO LOGIN PAGE



include '../include/connect.php';

$con = mysql_connect("$host","$username","$password")or die("cannot connect to database");

mysql_select_db("$db_name")or die("cannot select database table");





$register_username = $_POST['register_username'];

$register_password = $_POST['register_password'];

$register_province = $_POST['register_province'];

$register_city = $_POST['register_city'];

$hash = hash('ripemd160',$register_password);

$sql_post3 = "INSERT INTO $driver_table . $login_table ($login_column1, $login_column2, $login_column3, $login_column4) VALUES ('$register_username', '$hash', '$register_province', '$register_city')";

$db_post3 = mysql_query($sql_post3)or die('Query "' . $sql_post3. '" failed: ' . mysql_error());



header('Location: ../index.php');

//$username_check = "SELECT $login_column1 FROM $login_table WHERE $login_column1 = '$register_username'";

//$username_availability = mysql_query($username_check)or die('Query "' . $username_check . '" failed: ' . mysql_error());



//while($username_taken = mysql_fetch_array($username_availability)){



//    $num_username = mysql_num_rows($username_taken);

//    if($num_username = 1){



//        echo 'Sorry, that username is already taken! Please try another.';

//        header('Location: ../content/register_user.php');    
//    }

//}





?>