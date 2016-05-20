<?php

session_start();

$sql = mysql_query("SELECT * FROM login WHERE '$username' === username AND '$password' === password");




?>