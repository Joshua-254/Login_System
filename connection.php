<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database = "users_sample";

$conn = mysqli_connect($servername, $username, $password, $database);

// executing query
if(!$conn){
    echo "Failed to connect to database: " . mysqli_connect_error();
}
?>