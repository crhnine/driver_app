<!DOCTYPE html>
<script></script>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>

    <!-- Allow the browser to utilize @media sizing recognition-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  ---------------------------------------------------  -->

    <link href="../layout/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../layout/index.css" rel="stylesheet" type="text/css" />
    <link href="../layout/mobile.css" rel="stylesheet" type="text/css" />
    <link href="../layout/custom.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include '../include/header.php';   ?>
<div style="width:100%;">
<div style="width:50%;margin:0px auto;margin-top:25px;">
    <form action="../submissions/register.php" method="post" style="text-align:center;">

        <label for="username" style="margin: 15px 0px 0px 0px;">Username: </label><br />
        <input type="text" id="username" name="register_username" class="form_input" /><br />
        <label for="password" style="margin: 15px 0px 0px 0px;">Password: </label><br />
        <input type="password" id="password" name="register_password" class="form_input" /><br />
        <label for="province" style="margin: 15px 0px 0px 0px;">State: </label><br />
        <input type="text" id="province" name="register_province" class="form_input" /><br />
        <label for="city" style="margin: 15px 0px 0px 0px;">City: </label><br />
        <input type="text" id="city" name="register_city" class="form_input" /><br />

        <button type="submit" style="margin-top:15px;">Sign up!</button>

    </form>

    </div>
    </div>
    <script></script>
</body>
</html>