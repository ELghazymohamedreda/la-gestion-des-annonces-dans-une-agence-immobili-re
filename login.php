<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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




    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 d-flex justify-content-center align-items-center">
                        <div class="card" style="border-radius: 15px; d-flex justify-content-center align-items-center">
                            <div class="card-body p-5 d-flex justify-content-center align-items-center">
                                
                            <form class="form " method="post" name="login" >
                                    <h1 class="login-title text-center" >Login</h1>
                                    <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="d-flex justify-content-center my-5">
                                        <input type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body" value="Login" name="submit" class="login-button"/>
                                    </div>
                                    <div class="form-outline mb-4 text-center">
                                        <p class="link"><a href="registration.php">New Registration</a></p>
                                    </div>
                            </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>