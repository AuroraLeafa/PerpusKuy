<?php 
        session_start();
        require 'func.php';
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

<!-- My CSS -->
    <link rel="stylesheet" href="./css/RakBukuStyle.css">

    <title>PerpusKuy!</title>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="index.php"><img src ="Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-brand navbar-nav m-lg-auto"> <!-- Peruahan Margin Left-->
        <a class="nav-item nav-link active" aria-current="page" href="index.php">Beranda</a>
        <a class="nav-item nav-link active" href="#">Rak Buku</a>
        <a class="nav-item nav-link active" href="bantuan.php">Bantuan</a>

        <?php if(isset($_SESSION["login"])) : ?>
            <a class="nav-item nav-link active" href="./profile/profile.php"><?= $_SESSION["nama"] ?></a>
            <a class="nav-item btn btn-warning tombol" href="./logout.php">Logout</a>
        
        <?php elseif(!isset($_SESSION["login"])) : ?>
            <a class="nav-item btn tombol" href="signin.php">Masuk</a>
            <a class="nav-item btn btn-warning tombol" href="signup.php">Mulai</a>
        
        <?php endif; ?>
        
        </div>
    </div>
    </img>
    </div>
</nav>
<!-- Navbar End -->

<!-- Grid System Start -->
<div class="container">
    <div class="row rak align-items-center">
        <div class="col">
            <a href="./buku/bintang/sinopsis.php"><img src="Perpuskuy/buku/Bintang.jpg"></a>
            <p>Bintang</p>
        </div>
        <div class="col">
            <a href="./buku/selena/sinopsis.php"><img src="Perpuskuy/buku/Selena.jpg"></a>
            <p>Selena</p>
        </div>
        <div class="col">
            <a href="./buku/selamattinggal/sinopsis.php"><img src="Perpuskuy/buku/Selamat_Tinggal.jpg"></a>
            <p>Selamat Tinggal</p>
        </div>
        <div class="col">
            <a href="./buku/sololeveling/sinopsis.php"><img src="Perpuskuy/buku/Solo_Leveling.jpg"></a>
            <p>Solo Leveling</p>
        </div>
        <div class="col">
            <a href="./buku/nebula/sinopsis.php"><img src="Perpuskuy/buku/Nebula.jpg"></a>
            <p>Nebula</p>
        </div>
    </div>
</div>
<!-- Grid System End -->

<!-- Footer Start -->
<div class="footer"> 
    <table border="0" width="40%">
    <tr>
        <td>
        <img src="Logo.png">
        </td>
        <td> 
        <a href="#" class="footer-style">Tentang Kami!</a> 
        </td>
        <td>
        <a href="#" class="footer-style">Hubungi Kami!</a>
        </td>
    </tr>
    </table>
    </div>
<!-- Footer End -->

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