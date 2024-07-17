<?php
include 'Config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link rel="stylesheet" href="../CSS/Index_User.css">
    <?php include 'header.php'; ?>
</head>

<body>
    
    <h1 class="heading">Mobile</h1>

    <div class="card-collection">
    <?php
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
    while ($row = mysqli_fetch_array($Record)) {
        $check_page = $row['PCategory'];
        if($check_page === 'mobile'){

        echo "

<div class='card'>
<form action='Insertcart.php' method = 'POST'>
  <img src='../Admin/Product/$row[PImage]' class='card-img-top' alt='Placeholder Image'>
  <div class='card-body'>
    <h5 class='card-title'>$row[PName]</h5>
    <p class='card-text'>RS:  $row[PPrice]</p>
    <input type='hidden' name='PName' id='' value='$row[PName]'>
    <input type='hidden' name='PPrice' id='' value='$row[PPrice]'>
    <input type='number' name='PQuantity' value=' min='1' max='20'' placeholder='Quantity'>
    <input type='submit' name='addCart'value='Add To Card' class='inputsubmitbutton'>
  </div>
</form>
</div>

";
        }
    }
    
    ?>

    </div>

    <?php

include 'footer.php';

?>
</body>

</html>