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
                <p>User Register</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">User Name</label>
                        <input type="text" name="name" placeholder="Enter Your User Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Email</label>
                        <input type="email" name="email" placeholder="Enter Your Usere Email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Number</label>
                        <input type="number" name="number" placeholder="Enter Your User Number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Password</label>
                        <input type="password" name="password" placeholder="Enter Your User Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="w-100">Register</button>
                    </div>
                    <div class="mb-3">
                        <button class="w-110"><a href="./login.php" style="text-decoration: none";>Already Account</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>