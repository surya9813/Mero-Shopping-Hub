<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../CSS/register.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="">User Name</label>
                        <input type="text" name="name" placeholder="Enter Your User Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Password</label>
                        <input type="password" name="password" placeholder="Enter Your User Password"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <button class="w-110">Login</button>
                    </div>
                    

                </form>
                <div class="mb-3">
                        <button name="submit" class="w-100"><a href="register.php"
                                style="text-decoration: none;">Register</a></button>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>