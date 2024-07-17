<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/header.css">
</head>

<body class="hello">
    <?php
    session_start();
    $count = 0;
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a href="" class="navbar-brand">
                    <h1><img src="../Image/Logo-black.png" alt=""></h1>
                </a>
            </div>
            <div class="nav-with">
                <a href="Index_User.php"><i class="fa-solid fa-house-chimney"></i>Home</a>
                <a href="viewCart.php"><i class="fa-solid fa-cart-plus"></i>Cart(
                    <?php echo $count ?>) |
                </a>
                <span class="warning">
                    <i class="fa-solid fa-users"></i>Hello, 

                    <?php
                    if (isset($_SESSION['user'])) {
                        echo $_SESSION['user'];
                       echo" | <a href='form_user/logout.php'><i class='fa-solid fa-right-to-bracket'></i>Logout |</a> ";
                    }
                    else{
                        echo" | <a href='form_user/login.php'><i class='fa-solid fa-right-to-bracket'></i>Login |</a> ";
                    }
                    ?>
                    
                    <a href="../Admin/mystore.php">Admin</a>
                </span>
            </div>
        </nav>
    </header>
    <main>
        <div class="bullet-remove">
            <ul class="anchor">
                <li><a href="Laptop.php">LAPTOP</a></li>
                <li><a href="Bag.php">BAG</a></li>
                <li><a href="Mobile.php">MOBILE</a></li>
            </ul>
        </div>
    </main>
</body>

</html>