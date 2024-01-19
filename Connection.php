/* The code you provided is establishing a connection to a MySQL database using PHP. */
<?php 


$servername ="localhost";
$username ="root";
$password ="";
$database ="user";


$conn = mysqli_connect($servername,$username,$password,$database);


 if($conn){
    //echo "Connection established";
 }
 else {
    echo "Connection failed";
 }


