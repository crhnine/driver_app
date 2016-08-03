<?php session_start(); ?>
<?php include '../include/connect.php'; ?>
<?php 
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db = mysql_select_db("$db_name")or die("can not select DB");

?>
<?php
$_SESSION["username"] = Null;
   $login_form_username = $_POST['login_form_username'];
   $login_form_password = $_POST['login_form_password'];

   $hash2 = hash('ripemd160',$login_form_password);

   $verify_login = "SELECT * FROM user_login WHERE username = '$login_form_username' AND password = '$hash2'";
   $login_verified = mysql_query($verify_login)or die(mysql_error());


   while($info = mysql_fetch_array($login_verified)){


   $num_login = mysql_num_rows($login_verified);
   $username = $info['username'];
          if($num_login == 1){
              session_start();
              $_SESSION["username"] = $username; 
              header('Location: data.php');
            }
        else{
              header('Location: ../index.php?confirm=Login was unsuccessful Please try again');
            }

};
   

?>