<?php
   include 'connection.php';
   //include 'login.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];

   $selection_user_query = "SELECT * FROM users WHERE username = '$user_check'";
   $ses_sql = mysqli_query($conn,$selection_user_query);

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['username'];   
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>