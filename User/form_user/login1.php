<?php

$Name = $_POST['name'];
$Password = $_POST['password'];

$con = mysqli_connect('localhost:3308', 'root', '', 'ecommerce');
$result = mysqli_query($con, "SELECT * FROM `tbluser` WHERE (UserName = '$Name' OR Email = '$Name') AND Password = '$Password'");

session_start();




if(mysqli_num_rows($result)){

    $_SESSION['user']= $Name;
    
    echo"
        <script>
        alert('Sucessfully Login');
        window.location.href = '../Index_User.php';
        </script>
        ";
    }
    else{
        echo"
        <script>
        alert('Incorrect Email/Username/Password');
        window.location.href = './login.php';
        </script>
        ";
    }
?>