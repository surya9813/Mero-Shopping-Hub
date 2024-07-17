<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Page</title>
    <link rel="stylesheet" href="../../CSS/index.css">
</head>

<body>
    <?php
     include'Config.php';
     $id = $_GET['ID'];
     $Record = mysqli_query($con,"SELECT * FROM `tblproduct` WHERE id = '$id'");
     $data = mysqli_fetch_array($Record);
    ?>
    <div class="center-container">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <h1>Product Update:</h1>

            <!-- Product Name Input -->
            <label for="productName">Product Name:</label>
            <input type="text" value="<?php echo $data['PName'] ?>" id="productName" name="Pname" required>

            <!-- Product Price Input -->
            <label for="productPrice">Product Price:</label>
            <input type="number" value="<?php echo $data['PPrice'] ?>" id="productPrice" name="Pprice" required>

            <!-- Add Product Image Input -->
            <label for="productImage">Add Product Image:</label>
            <input type="file" id="productImage" name="Pimage" accept="image/*"><br>
            <img src="<?php echo $data['PImage'] ?>" alt="" style="height:400px; width:400px;">

            <!-- Select Page Category Input -->
            <label for="pageCategory">Select Page Category:</label>
            <select id="Pages" name="Pages" required>
                <option value="Home" selected>Home</option>
                <option value="mobile">Mobile</option>
                <option value="bag">Bag</option>
                <option value="laptop">Laptop</option>
            </select>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" >

            <!-- Submit Button -->
            <button name="update" class="button" style="background-color: #dc3545; font-size: 1.4rem; font-weight: bold; margin-top: 3rem; padding: 0.5rem 1rem; border: none; color: white;">Update</button>

        </form>
    </div>

    <!-- when someone click on update button the these php code must run -->

    <?php
    include'Config.php';

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    // print_r($product_image); to print product name,price,image.
    $img_des = "Uploadimage/" . $image_name;
    $product_category = $_POST['Pages'];

    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);

    mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`='$img_des',`PCategory`='$product_category' WHERE id = $id");

    header("location:index.php");

}
    ?>


</body>

</html>
