<?php

session_start();
session_destroy();
header("location:../../User/Index_User.php");
