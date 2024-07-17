<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Into Form</title>
    <link rel="stylesheet" href="../../CSS/Index.css">
</head>
<body>
<div class="center-container">
        <form action="Login1.php" method="POST">
            <h1>Login:</h1>

            <!-- Product Name Input -->
            <label for="Name">Name:</label>
            <input type="text" id="username" name="username" required placeholder="Enter user name">

            <!-- Product Price Input -->
            <label for="Password">Password:</label>
            <input type="password" id="userpassword" name="userpassword" required placeholder="Enter password">

           

            <!-- Submit Button -->
            <input type="submit" value="Login" name="submit">

        </form>
    </div>
</body>
</html>