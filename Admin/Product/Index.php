<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Page</title>
    <link rel="stylesheet" href="../../CSS/index.css">
</head>

<body>
    <div class="center-container">
        <form action="Insert.php" method="POST" enctype="multipart/form-data">
            <h1>Product Details:</h1>

            <!-- Product Name Input -->
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="Pname" required>

            <!-- Product Price Input -->
            <label for="productPrice">Product Price:</label>
            <input type="number" id="productPrice" name="Pprice" required>

            <!-- Add Product Image Input -->
            <label for="productImage">Add Product Image:</label>
            <input type="file" id="productImage" name="Pimage" accept="image/*">

            <!-- Select Page Category Input -->
            <label for="pageCategory">Select Page Category:</label>
            <select id="Pages" name="Pages" required>
                <option value="" selected>Select Category</option>
                <option value="Redmi">Redmi</option>
                <option value="Iphone">Iphone</option>
                <option value="Realme">Realme</option>
                <option value="Samsung">Samsung</option>
                <option value="others">others</option>
            </select>

            <!-- Submit Button -->
            <input type="submit" value="Upload" name="submit">

        </form>
    </div>

    <div class="container">
        <div class="row">
            <div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../Config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
                        while ($row = mysqli_fetch_array($Record))
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[PName]</td>
                                    <td>$row[PPrice]</td>
                                    <td><img src='$row[PImage]' height='100px' width='100px'></td>
                                    <td>$row[PCategory]</td>
                                    <td><a href='delete.php? ID= $row[id]'style='text-decoration: none;'>Delete</a></td>
                                    <td><a href='update.php? ID= $row[id]'style='text-decoration: none;'>Update</a></td>
                                </tr>
                            ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include ("../footer.php");?>

</body>

</html>
