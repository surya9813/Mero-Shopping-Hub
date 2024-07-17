<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/user.css">
</head>

<body>
    <?php
    include 'mystore.php';
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM `tbluser`");
    $row_count = mysqli_num_rows($Record);
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table>
                    <thead>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($Record)) {
                            $i++;
                            echo "<tr>
                          <td>$i</td>
                          <td>$row[UserName]</td>
                          <td>$row[Email]</td>
                          <td>$row[Number]</td>
                          <td class='anchor'><a href='delete.php?ID=$row[Id]'>Delete</a></td>
                     </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="total">
        <h3>Total</h3>
        <h1>
            <?php echo $row_count; ?>
        </h1>
    </div>
    <?php

include 'footer.php';

?>

</body>

</html>
