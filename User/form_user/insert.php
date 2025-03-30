
<?php
// Database connection
include("../Config.php");

if (isset($_POST['submit'])) {
    // Retrieve and sanitize inputs
    $Name = trim($_POST['name']);
    $Email = trim($_POST['email']);
    $Number = trim($_POST['number']);
    $Password = trim($_POST['password']);

    // Initialize an array to store error messages
    $errors = array();

    // Validate User Name: only letters and spaces allowed
    if (empty($Name) || !preg_match("/^[A-Za-z\s]+$/", $Name)) {
        $errors[] = "Please enter a valid name (only include letters and spaces only).";
    }

    // Validate Email: using regular expression to ensure it follows correct email format
    if (empty($Email) || !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $Email)) {
        $errors[] = "Please enter a valid email address.";
    } else {
        // Check if email has more than one '@' symbol
        $atCount = substr_count($Email, '@');
        if ($atCount !== 1) {
            $errors[] = "Email should contain exactly one '@' symbol.";
        }

        // Check if email has more than one dot('.') after '@'
        $dotPosition = strpos($Email, '.');
        $afterAt = substr($Email, $dotPosition);
        if (substr_count($afterAt, '.') > 1) {
            $errors[] = "Invalid email format: Only one dot('.') allowed after '@' symbol.";
        }
    }

    // Validate Number: ensure it's numeric, starts with 97 or 98, and has a sensible length
    if (empty($Number) || !preg_match("/^97|98[0-9]{8,13}$/", $Number)) {
        $errors[] = "Please enter a valid phone number that starts with 97 or 98.";
    }

    // Validate Password: ensure it's strong enough
    if (empty($Password) || strlen($Password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    // Check for duplicate Email
    $Dup_Email = mysqli_query($con, "SELECT * FROM `tbluser` WHERE Email = '$Email'");
    if (mysqli_num_rows($Dup_Email) > 0) {
        $errors[] = "This email is already taken.";
    }

    // Check for duplicate Username
    $Dup_username = mysqli_query($con, "SELECT * FROM `tbluser` WHERE UserName = '$Name'");
    if (mysqli_num_rows($Dup_username) > 0) {
        // If username is taken, add a suffix to make it unique
        $baseName = $Name;
        $suffix = 1;
        while (mysqli_num_rows($Dup_username) > 0) {
            $Name = $baseName . $suffix;
            $Dup_username = mysqli_query($con, "SELECT * FROM `tbluser` WHERE UserName = '$Name'");
            $suffix++;
        }
    }

    // If there are no errors, insert the data into the database
    if (empty($errors)) {
        // Hash the password before storing
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        // Insert the new user into the database
        $query = "INSERT INTO `tbluser` (`UserName`, `Email`, `Number`, `Password`) VALUES ('$Name', '$Email', '$Number', '$hashedPassword')";
        if (mysqli_query($con, $query)) {
            echo "<script>
                    alert('Registration successful. Please log in.');
                    window.location.href = './login.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Registration failed. Please try again.');
                    window.location.href = 'register.php';
                  </script>";
        }
    } else {
        // If there are errors, alert them and redirect back to the form
        $errorMessages = implode("\\n", $errors);
        echo "<script>
                alert('$errorMessages');
                window.location.href = 'register.php';
              </script>";
    }
}

// Close the database connection
mysqli_close($con);
?>
