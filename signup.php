<?php
  require("func.php");
  
  if( isset($_POST["daftar"])){
    if(daftar($_POST) > 0){
      echo "  
      <script>alert('Terima kasih anda telah terdaftar!'); location='./signin.php';</script>";
    } else{
      echo"<script>alert('Daftar Gagal, Silahkan Coba Lagi!');</script>";
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
  <link href="./css/signup.css" rel="stylesheet">
  </head>


<!-- ===================================== -->
  <body class="text-center background">
    <h3 class="teks-daftar">Daftar</h3>
  
        <!--Bagian pinggir-->
        <div>
        <a href="#">
          <div class ="box" style="left: 888px; top: 407px;"></div>
          <img class="logo-facebook" src="./PerpusKuy/logos_facebook.png">
          <p class ="teks-kotak" style="left: 945px; top: 412px;"> Daftar Dengan Facebook</p>
        </a>
        </div>

        <div>
          <a href="#">
            <div class ="box" style="left: 888px; top: 235px;"></div>
            <img class="logo-google" src="./PerpusKuy/flat-color-icons_google.png">
            <p class ="teks-kotak" style="left: 935px; top: 328px;">Daftar Dengan Google</p>
          </a>
        </div>

        <div>
        <a href="#">
          <div class ="box" style="left: 888px; top: 321px;"></div>
          <img class="logo-twitter" src="./PerpusKuy/logos_twitter.png">
          <p class ="teks-kotak" style="left: 935px; top: 240px;">Daftar Dengan twitter</p>
        </a>
        </div>

        <div class="garis1"></div>
        <h5 class="teks-atau">Atau</h5>
        <div class="garis2"></div>

        <!--Akhir bagian pinggir-->

    <a href="./index.php"><img class ="tempat-logo col-sm-4"  src="./Logo.png"></a>
        <main class="form-signin">

    <div class=" posisi-form">

          <form action="" method="post">
          <div class="border-like">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required>
              <label for="nama">Nama</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" name="pwd" id="pwd" placeholder="pwd" required>
              <label for="pwd">Password</label>
            </div>
            
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me" required> Dengan pembuatan akun, Anda menyetujui <a href="#" style="color: black;"><u>Syarat & Ketentuan</u></a> serta <a href="#" style="color: black;"><u href="#"> Kebijakan Privasi</u></a> PerpusKuy</input>
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-warning mb-3" type="submit" for="daftar" id="daftar" name="daftar">Daftar</button>
            
            <p class ="mb-3">Sudah Punya Akun? <a  href="./signin.php" >Masuk!</a></p>
          </div>
          </form>
          </div>
      </main>

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
