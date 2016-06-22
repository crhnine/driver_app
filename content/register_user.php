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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
</head>
<body>
<?php include '../include/header.php';   ?>
<div style="width:100%;">
<div style="width:50%;margin:0px auto;margin-top:25px;">
    <form id="register_user_form" action="../submissions/register.php" method="post" style="text-align:center;">
        <p>Fill out the information below to get started!</p>
        <p id="required_field" style="">Required field has been left empty.</p>
        
        <label for="username" id="username_label" style="margin: 15px 0px 0px 0px;">Username: </label><br />
        <input type="text" id="username" name="register_username" class="form_input" /><br />
        
        <label for="password" id="password_label" style="margin: 15px 0px 0px 0px;">Password: </label><br />
        <input type="password" id="password" name="register_password" class="form_input" /><br />
        
        <label for="province" id="province_label" style="margin: 15px 0px 0px 0px;">State: </label><br />
        <input type="text" id="province" name="register_province" class="form_input" /><br />
        
        <label for="city" id="city_label" style="margin: 15px 0px 0px 0px;">City: </label><br />
        <input type="text" id="city" name="register_city" class="form_input" /><br />

       

    </form>
    <button id="submit_button" type="button">Sign up!</button>
    </div>
    </div>
    <script type="text/javascript">
      function notify() {

      if($( "#username" ).val() === ''){
          $("#username_label").css("color" , "red");
          $("#username_label").html("Username:  *");
          $("#required_field").css("display" , "inline-block");
        }

      if($( "#password" ).val() === ''){
          $("#password_label").css("color" , "red");
          $("#password_label").html("Password:  *");
          $("#required_field").css("display" , "inline-block");
        }

      if($( "#province" ).val() === ''){
          $("#province_label").css("color" , "red");
          $("#province_label").html("State:  *");
          $("#required_field").css("display" , "inline-block");
        }

      if($( "#city" ).val() === ''){
          $("#city_label").css("color" , "red");
          $("#city_label").html("City:  *");
          $("#required_field").css("display" , "inline-block");
        }

        else{

        $("#register_user_form").submit();
        }

}
$( "#submit_button" ).on( "click", notify );




    </script>
    <!-- TO DO: Need to add even more advanced form validation. How to check the server to see if a username already exists. AJAX? This should be enough. If one does exist ask the user to enter a different username. -->
    <!--
    If username is not blank pull all usernames from the server.
    If the entered username matches any usernames on the server, block the submission, throw alert for user to enter new username.
    Needs to keep the information the user has entered currently on the form.
    Also, we need to add a checkbox or button that will allow the user to show the characters of the password or place enter twice and check that they match.
    -->
</body>
</html>