<?php
$error = "Your Login Name or Password is invalid";

?>
<html>

<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title>Login Page</title>

  <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
      text-align:center;

    }

    label {
      font-weight: bold;
      width: 100px;
      font-size: 14px;
    }

    .box {
      border: #666666 solid 1px;
      margin: auto;
      width: 50%;

  padding: 10px;
    }
    #form-holder{
      margin: auto;
      width: 50%;
      padding: 10px;
      overflow: hidden;
      margin-top: 200px;

    }
    input {
      autoComplete=none;

    }
 

  </style>

</head>

<body bgcolor="#FFFFFF">

  <div align="center">
    <div style="border: solid 1px #333333; " align="center" id="form-holder">

      <div style="margin:30px">

        <form action="login.php" type="POST" method="POST">
          <h3>Login</h3>
          <label>UserName :</label>
          <input type="text" name="user_name" id="user_name" class="box" /><br /><br />
          <label>Password :</label>
          <input type="password" name="pass_word" id="pass_word" class="box" /><br /><br />
          <input type="submit" value=" Submit" /><br />
        </form>

        <div style="font-size:11px; color:#cc0000; margin-top:10px">
          <?php echo $error; ?>
        </div>

      </div>

    </div>

  </div>

</body>

</html>