<?php
/**
 * Created by PhpStorm.
 * User: Kimaiga
 * Date: 8/17/2018
 * Time: 13:02
 */

//using mysqli to initiate db connection

$servername = "localhost";
$database = "zilojo";
$username = "root";
$password = "303seminarian";

// Creating connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
