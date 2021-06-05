<?php
    session_start();
    require 'func.php';
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> 
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

<!-- My CSS -->
    <link rel="stylesheet" href="css/bantuan.css">

    <title>PerpusKuy!</title>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <a class="navbar-brand" href="#"><img src ="Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-brand navbar-nav m-lg-auto"> <!-- Peruahan Margin Left-->
            <a class="nav-item nav-link active" aria-current="page" href="index.php">Beranda</a>
            <a class="nav-item nav-link active" href="RakBuku.php">Rak Buku</a>
            <a class="nav-item nav-link active" href="#">Bantuan</a>
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

<!--atas start-->
    <div class="atas">
        <img src="Perpuskuy/bantuan.png" width="1360" height="140">  
    </div>
<!--atas end-->

<!-- Grid System Start -->
<div class="container">
    <div class="row rak align-items-center">
        <div class="col"><a class="color" href="#">
            <div class="box1 box-text"><span>Mencari Buku</span><br><br>Mau Tau cara mencari barang yang kamu inginkan? buku yang kamu cari tidak ketemu? butuh rekomendasi buku?cari tau disini!</div>
        </a></div>
        <div class="col"><a class="color" href="#">
            <div class="box1 box-text"><span>Pinjam Buku</span><br><br>Mau tahu bagaimana cara meminjam buku di PerpusKuy?<br>Cari tahu di sini!
            </div>
        </a></div>
        <div class="col"><a class="color" href="#">
            <div class="box1 box-text"><span>Seputar Pembayaran</span><br><br>Sedang mencari tahu cara melakukan pembayaran ongkir atau denda?<br>cari tahu disisni</div>
        </a></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row rak align-items-center">
        <div class="col"><a class="color" href="#">
            <div class="box1 box-text"><span>Pengiriman</span><br><br>Ingin mencari tahu tentang pengiriman?<br>Bingung pesananmu tak kunjung tiba?<br>cari tahu disisni</div>
        </a></div>
        <div class="col"><a class="color" href="#">
            <div class="box1 box-text"><span>Syarat & Ketentuan</span><br><br>Syarat & ketentuan peminjaman dan pengguna di PerpusKuy<br>cari tahu disisni</div>
        </a></div>
        <div class="col"><a class="color" href="#">
            <div class="box1 box-text"><span>Seputar Website</span><br><br>Butuh penjelasan soal berbagai fitur di PerpusKuy?<br>Cari tahu di sini</div>
        </a></div>
    </div>
</div>
<div class="container">
    <div class="row rak align-item-center">
        <div class="col"><a class="color" href="#">
            <div class="box2 box-text"><span>Partnership</span><br><br><p>Ingin Bekerja sama dengan PerpusKuy?<br>Cari tahu infonya disini!</p></div>
        </a></div>
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
        <td></td>
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