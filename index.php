<?php

session_unset();
session_destroy();
$current_login = $_SESSION["username"];
echo $current_login;
?>
<!DOCTYPE html>
<script>
</script>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>

    <!-- Allow the browser to utilize @media sizing recognition-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  ---------------------------------------------------  -->
    <!-- Do not add code between these script tags -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <!-------------------------------------------  -->
    <link href="layout/normalize.css" rel="stylesheet" type="text/css" />
    <link href="layout/index.css" rel="stylesheet" type="text/css" />
    <link href="layout/mobile.css" rel="stylesheet" type="text/css" />
    <link href="layout/custom.css" rel="stylesheet" type="text/css" />

</head>
<body>

  <?php
   
    include 'include/header.php';

  ?>


    <div class="body_container" style="width:100%;margin-top:25px;">
        <div class="login_container" style="width:50%;margin:0 auto;">
            <form id="login_form" action="content/login_function.php" method="post">


                <label for="login_form_username">Username: </label><br />
                <input id="login_form_username" name="login_form_username" type="text" />
                <br /><br />

                <label for="login_form_password">Password: </label><br />
                <input id="login_form_password" name="login_form_password" type="password" autocomplete="off" />
                <br /><br />

                <button id="login_form_submit" name="login_form_submit" type="submit">Login</button>
            </form>
        </div>
    </div>

    <script></script>

</body>
</html>
<!-- Do not add code between these script tags -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
<!-------------------------------------------  -->
<script>


</script>