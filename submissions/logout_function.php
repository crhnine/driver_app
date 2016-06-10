<?php

session_unset();
session_destroy();
header('Location: legithtml.com/driver_app/index.php?confirm=Login again to continue.');
?>