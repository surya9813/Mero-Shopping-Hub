<?php
$Name = $_POST['name'];
$Password = $_POST['password'];

include("../Config.php");
session_start();

$result = mysqli_query($con, "SELECT * FROM `tbluser` WHERE (UserName = '$Name' OR Email = '$Name') AND Password = '$Password'");

// Check if user exists
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $row['UserName']; // or $row['Email']
    $_SESSION['uid'] = $row['Id']; // assuming your table column for user ID is named 'Id'

    echo "
        <script>
            alert('Successfully Logged In');
            window.location.href = '../Index_User.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Incorrect Email/Username/Password');
            window.location.href = './login.php';
        </script>
    ";
}
?>
