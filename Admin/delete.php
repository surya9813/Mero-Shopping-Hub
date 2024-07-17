<?php

include'Config.php';
$Id = $_GET['ID'];

mysqli_query($con,"DELETE FROM `tbluser` WHERE Id = $Id");
header("location:user.php");



?>