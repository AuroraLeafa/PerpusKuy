<?php 
  session_start();
  require 'func.php'; 

//set cookie
if( isset($_COOKIE['key1']) && isset($_COOKIE['key2'])){

  $key1 = $_COOKIE['key1'];
  $key2 = $_COOKIE['key2'];

  //Take Email
  $result = mysqli_query($conn, "SELECT email FROM user WHERE id = $key1");

  // cek cookie & username
  if ($key2 === hash('sha256', $row['email'])){
    $_SESSION['login'] = true;
  }

}

if( isset($_SESSION["login"])){
  header("Location: index.php");
}

//tekan login
if( isset($_POST["login"] )) {
  $email = $_POST["email"];
  $password = $_POST["pwd"];
  
  $cek = "SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($conn, $cek);

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["pwd"])){
          // Set Session
          $_SESSION["login"] = true;
          $_SESSION["id"] = $row["id"];
          $_SESSION["nama"] = $row["nama"];
          $_SESSION["email"] = $row["email"];
          $_SESSION["alamat"] = $row["alamat"];
          $_SESSION["nohp"] = $row["nohp"];
          $_SESSION["hobi"] = $row["hobi"];
          $_SESSION["image"] = $row["image"];
          $_SESSION["date_created"] = $row["date_created"];
          header("Location: index.php");
          //exit;

          //cek remember me
          if( isset($_POST['remember-me'])){
            setcookie('key1', hash('sha256', $row['id']), time()+300);
            setcookie('key2', hash('sha256', $row['nama']));
          }
    }else{
      echo"
        <script> alert('Email/Password Salah!'); </script>
      ";
    }
  }else{
    echo"
      <script> alert('Email belum terdaftar!'); </script>
    ";
  } 

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>PerpusKuy! - Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
  <link href="./css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center background">
  <div class="rectangle-signin col-sm-4">
        <!--Bagian Atas-->
        <a href="#"> <img class="logo-facebook" src="./PerpusKuy/logos_facebook.png"></a>
        <a href="#"> <img class="logo-google" src="./PerpusKuy/flat-color-icons_google.png"></a>
        <a href="#"> <img class="logo-twitter" src="./PerpusKuy/logos_twitter.png"></a>
        <div class="lines"></div>
        <div class="lines2"></div>
        <h5 class="teks-atau">Atau</h5>
        <!--Akhir bagian Atas-->

    <a href="./index.php"><img class ="tempat-logo col-sm-4"  src="./Logo.png"></a>
        <main class="form-signin">

          <form action="" method="post">
          <div class="border-like">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="pwd" id="pwd" placeholder="pwd">
              <label for="pwd">Password</label>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me" name="remember-me" id="remember-me"> Ingat Saya</input>
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-warning mb-3" type="submit" for="login" id="login" name="login">Login</button>
            <a  href="./signup.php" > Belum Punya Akun?</a>
          </div>
          </form>
      </main>
  </div>

<!--
Copyright ©Perpuskuy 2021
This Website was made with full of hardwork, joy, and love

this website was created by:
- M. Refansyach. S    | @revansahdragunov
- Anida K.            | @ann_k16
- Khaidar L.          | @khaidar_lubis
- Aminah L.           | -
  -->

  </body>
</html>
