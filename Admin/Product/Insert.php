<?php

if (isset($_POST['submit'])) {

    include '../Config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    // print_r($product_image); to print product name,price,image.
    $img_des = "Uploadimage/" . $image_name;
    $product_category = $_POST['Pages'];



    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);



    //Insert Product

    mysqli_query($con, "INSERT INTO `tblproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) VALUES ('$product_name','$product_price','$img_des','$product_category')");

    header("location:index.php");
} ?>


<!-- Fetch Data -->