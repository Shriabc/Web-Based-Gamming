<?php

session_start();
 
include "include/database.php"; 

session_destroy();
header("location:../admin_login.php");
?>