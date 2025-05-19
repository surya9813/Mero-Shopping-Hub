<?php

session_start();
session_destroy();
header("location:../Index_User.php");

?>