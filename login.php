<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

require 'db.php';
session_start();
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM client WHERE email = '$email' AND password ='$password'");
  $row = mysqli_fetch_assoc($result);

///////////////////////condition de confirmation et verifier le mot pass

  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']  && $email == $row['email']) {
      $_SESSION["login"] = true;
      $_SESSION["id_client"] = $row["id_client"];
      header("Location: index.php");
    }

    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

?>


    <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
            <p class="link"><a href="registration.php">New Registration</a></p>
    </form>
</body>
</html>