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
    include '../Config.php';
    $id = $_GET['ID'];
    $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE id = '$id'");
    $data = mysqli_fetch_array($Record);
    ?>
    <div class="center-container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Product Update:</h1>

            <!-- Product Name Input -->
            <label for="productName">Product Name:</label>
            <input type="text" value="<?php echo $data['PName'] ?>" id="productName" name="Pname" required>

            <!-- Product Price Input -->
            <label for="productPrice">Product Price:</label>
            <input type="number" value="<?php echo $data['PPrice']; ?>" id="productPrice" name="Pprice" min="1"
                step="0.01" required>

            <!-- Add Product Image Input -->
            <label for="productImage">Add Product Image:</label>
            <input type="file" id="productImage" name="Pimage" accept="image/*"><br>
            <img src="<?php echo $data['PImage'] ?>" alt="Product Image" style="height:400px; width:400px;">

            <!-- Select Page Category Input -->
            <label for="pageCategory">Select Page Category:</label>
            <select id="Pages" name="Pages" required>
                <option value="Redmi" <?php if ($data['PCategory'] == 'Redmi') echo 'selected'; ?>>Redmi</option>
                <option value="Iphone" <?php if ($data['PCategory'] == 'Iphone') echo 'selected'; ?>>Iphone</option>
                <option value="Realme" <?php if ($data['PCategory'] == 'Realme') echo 'selected'; ?>>Realme</option>
                <option value="Samsung" <?php if ($data['PCategory'] == 'Samsung') echo 'selected'; ?>>Samsung</option>
                <option value="others" <?php if ($data['PCategory'] == 'others') echo 'selected'; ?>>others</option>
            </select>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

            <!-- Submit Button -->
            <button name="update" class="button"
                style="background-color: #dc3545; font-size: 1.4rem; font-weight: bold; margin-top: 3rem; padding: 0.5rem 1rem; border: none; color: white;">Update</button>

        </form>
    </div>

    <?php
    include 'Config.php';

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_category = $_POST['Pages'];

        // Check if a new image is uploaded
        if (!empty($_FILES['Pimage']['name'])) {
            $image_loc = $_FILES['Pimage']['tmp_name'];
            $image_name = $_FILES['Pimage']['name'];
            $img_des = "Uploadimage/" . $image_name;

            move_uploaded_file($image_loc, $img_des);

            // Update with image
            $query = "UPDATE `tblproduct` 
                      SET `PName` = '$product_name', 
                          `PPrice` = '$product_price', 
                          `PImage` = '$img_des', 
                          `PCategory` = '$product_category' 
                      WHERE id = $id";
        } else {
            // Update without image
            $query = "UPDATE `tblproduct` 
                      SET `PName` = '$product_name', 
                          `PPrice` = '$product_price', 
                          `PCategory` = '$product_category' 
                      WHERE id = $id";
        }

        mysqli_query($con, $query);
        header("Location: index.php");
    }
    ?>
</body>

</html>
