/* The code you provided is a PHP script that creates a login form and inserts the entered username and
password into a database table called "Details". */
<?php

include("Connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="x">
            <form action="">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Username" required> <br>

                <label for="Password">Password:</label>
                <input type="password" name="Password" id="Password" placeholder="Password" required> <br>


                <input type="submit" value="Submit" class="btn">


            </form>
        </div>




    </div>


    <?php

    $user = $_GET['username'];
    $pass = $_GET['Password'];







    $query  = "INSERT INTO Details  VALUES ('$user','$pass')";
    $data =  mysqli_query($conn, $query);

    if ($data) {
        // echo "Data Inserted Successfully";
    } else {
        echo "Data Filed";
    }





    ?>












</body>

</html>