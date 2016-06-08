<?php

//session_start();

//$username_login_check = $_SESSION['username'];
//echo $username_login_check;

//if($username_login_check != Null){

//header('Location: ../data.php');

//}

include '../include/connect.php';
$db = new mysqli($host, $username, $password, 'driver_app');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$login_username = 'hello';     //$_POST['username'];
$login_password = 'world';     //$_POST['password'];

    $login_sql = "SELECT * FROM user_login WHERE username = '$login_username' AND password = '$login_password'";

if(!$result = $db->query($login_sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($user_row = $result->fetch_assoc()){

echo 'ID: ' . $user_row['id'] . '<br />';
echo 'USERNAME: ' . $user_row['username'] . '<br />';
echo 'PASSWORD: ' . $user_row['password'] . '<br />';
echo 'PROVINCE: ' . $user_row['province'] . '<br />';
echo 'CITY: ' . $user_row['city'] . '<br />';
}


//$_SESSION['username'] = Null;
//$username = $_POST['username'];
//$password = $_POST['password'];

//$login_query = "SELECT * FROM login WHERE '$username' === username AND '$password' === password";
//$sql = mysql_query($login_query);



//while($info = mysql_fetch_array($sql)){
//   $num_rows = mysql_num_rows($sql);
  

//   if($num_rows === 1){

//    $_SESSION["username"] = $username;
//    header('Location: data.php');

//    }
    
//    else{

//    header('Location: index.html');
//    }


//}


?>