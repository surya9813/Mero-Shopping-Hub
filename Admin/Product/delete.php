<?php
include'../Config.php';
$Id = $_GET['ID'];

mysqli_query($con,"DELETE FROM `tblproduct` WHERE id = $Id");
header("location:index.php");

?>