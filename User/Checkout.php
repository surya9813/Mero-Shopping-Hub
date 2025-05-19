<?php
session_start();
include 'Config.php'; // make sure this connects to the ecommerce database

// Check if cart and user ID are available
if (isset($_SESSION['cart']) && isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];

    foreach ($_SESSION['cart'] as $item) {
        $productName = $item['productName'];
        $productPrice = $item['productPrice'];
        $productQuantity = $item['productQuantity'];
        $orderStatus = "Pending";

        // Prepare and execute the insert query
        $query = "INSERT INTO `orders` (uid, productName, productPrice, productQuantity, orderStatus) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("issis", $uid, $productName, $productPrice, $productQuantity, $orderStatus);
        $stmt->execute();
    }

    // Clear the cart after successful order
    unset($_SESSION['cart']);
} else {
    // If cart is empty or user not logged in
    echo "<script>alert('Cart is empty or user not logged in.'); window.location.href='viewCart.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>

    <h1>Your order has been successfully placed with <strong style="color:green">Cash On Delivery!</strong></h1>
    <p>Thank you for shopping with us.</p>
    <a href="Index_User.php">Continue Shopping</a>

</body>
</html>
