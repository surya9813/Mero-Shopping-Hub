<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystore</title>
    <link rel="stylesheet" href="../CSS/Mystore.css">

    <!-- Font Awesome CSS Code -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php
session_start();
if(!$_SESSION['admin']){
    header("location:Form/Login.php");
}

?>

<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a href="" class="navbar-brand">
                    <h1>Mystore</h1>
                </a>
                <span>
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    Hello,<?php echo $_SESSION['admin'];  ?> |
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="Form/Logout.php">Logout</a>
                    <a href="../User/Index_User.php">Userpannel</a>
                </span>
            </div>
        </nav>
    </header>
    <main>
        <div class="dash">
            <h2>Dashboard</h2>
        </div>
        <div class="board">
            <a href="Product/index.php">Add Post</a>
            <a href="user.php">Users</a>
        </div>
    </main>
    <?php

include 'footer.php';

?>
</body>

</html>