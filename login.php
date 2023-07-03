<?php
   include "connection.php";
   session_start();

// getting user details
   $username = $_POST["user_name"];
   $password =  $_POST["pass_word"];

   
   // check if user credentials match
   $check_user = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
   #die($check_user);


   // user must only be one value
$result = mysqli_query($conn,$check_user);
#$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1) {
    $_SESSION['login_user'] = $username;   
    header("location: page.php");
 }else {
    $error = "Your Login Name or Password is invalid";
    header('location: index.php');
 }

?>