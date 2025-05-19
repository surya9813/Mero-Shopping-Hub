<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <link rel="stylesheet" href="../CSS/viewCart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <?php include 'header.php'; ?>


    <div class="container">
        <din class="row">
            <div class="col">
                <h1>My Cart</h1>
            </div>
        </din>
    </div>


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-fluid">
                <table>
                    <thead>
                        <th>Serial No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        //session_destroy();
                        
                        $ptotal = 0;
                        $total = 0;
                        $i = 0;

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $ptotal = $value['productPrice'] * intval($value['productQuantity']);
                                $total += $value['productPrice'] * intval($value['productQuantity']);
                                $i = $key + 1;
                                echo "
                                    <form action = 'Insertcart.php' method='POST'>
                                      <tr>
                                          <td>$i</td>
                                          <td><input type = 'hidden' name = 'PName' value = '$value[productName]'>$value[productName]</td>
                                          <td><input type = 'hidden' name = 'PPrice' value = '$value[productPrice]'>$value[productPrice]</td>
                                          <td><input type = 'hidden' name = 'PQuantity' value = '$value[productQuantity]'>$value[productQuantity]</td>
                                          <td>$ptotal</td>
                                          
                                          <td><button name='remove' class='btn-danger'>Delete</button></td>
                                          <td> <input type='hidden' name='item' value='$value[productName]'></td>
                                    </tr>
                                    </form>
        
                                    ";

                            }

                        }

                        ?>



                    </tbody>




                </table>
            </div>

            <div class="col-lg-3">
                <h3>Total</h3>
                <h1 class="danger"><?php echo number_format($total, 2) ?></h1>
            </div>

            <div>
                <form action="Checkout.php" method="POST">
                    <button id="che" type="submit" name="checkout" class="btn-secondary">PROCEED TO CHECKOUT</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>