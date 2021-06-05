<?php
  session_start();
  require '../../func.php';

  if( !isset($_SESSION["login"])){
    echo "  
      <script>alert('Maaf untuk mengakses page ini, anda harus jadi member Perpuskuy dulu, yuk login!'); location='../../signin.php';</script>";
  }
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
    <link rel="stylesheet" href="../css/sinopsis.css">

    <title>PerpusKuy!</title>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <a class="navbar-brand" href="../../index.php"><img src ="../../Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-brand navbar-nav m-lg-auto"> <!-- Peruahan Margin Left-->
            <a class="nav-item nav-link active" aria-current="page" href="../../index.php">Beranda</a>
            <a class="nav-item nav-link active" href="../../RakBuku.php">Rak Buku</a>
            <a class="nav-item nav-link active" href="../../bantuan.php">Bantuan</a>

            <?php if(isset($_SESSION["login"])) : ?>
            <a class="nav-item nav-link active" href="../../profile/profile.php"><?= $_SESSION["nama"] ?></a>
            <a class="nav-item btn btn-warning tombol" href="../../logout.php">Logout</a>
        
            <?php elseif(!isset($_SESSION["login"])) : ?>
            <a class="nav-item btn tombol" href="../../signin.php">Masuk</a>
            <a class="nav-item btn btn-warning tombol" href="../../signup.php">Mulai</a>
        
        <?php endif; ?>
        </div>
    </div>
    </img>
</div>
</nav>
<!-- Navbar End -->

<!-- Grid System Start -->
<div class="container">
    <div>
        <div class="col">
            <a class="page" href="#">Sinopsis</a>
        </div>
        <div class="col">
            <a class="page1" href="#">BAB 1</a>
        </div>
        <div class="col">
            <a class="page2" href="#">BAB 2</a>
        </div>
        <div class="col">
            <div class="box1 box-text"><span width=25 >Sinopsis Solo Leveling</span><br><br>Kami bertiga teman baik. Remaja, murid kelas sebelas. Penampilan kami sama seperti murid SMA lainnya. Tapi kami menyimpan rahaia besar.Namaku Raib, aku bisa menghilang. Seli, teman semejaku bisa mengeluarkan petir daritelapak tangannya. Dan Ali, si biang kerok sekaligus si genius, bisa berubah menjadi beruang rakasa. Kami bertiga kemudian bertualang ke dunia paralel yang tidak diketahui banyak orang, yang disebut Klan Bumi, Klan Bulan, Klan Matahari,dan Klan Bintang. Kami bertemu tokoh-tokoh hebat. Penduduk klan lain.Ini petualangan keempat kami. Setelah tiga kali berhasil menyelamatkan dunia paralel dari kehancuran besar, kami harus menyaksikan bahwa kamilah yang melepaskan “musuh besar”-nya.Ini ternyata bukan akhir petualangan, ini justru awal dari semuanya.Itulah paragraf yang tertera di sampul bagian belakang novel Bintang karya Tere Liye. Matahari merupakan buku keempat dalam serial Bumi. Buku ini kembali mengisahkan petualangan tiga remaja yang bersahabat sejak kelas X, Raib, Seli, dan Ali dalam menjelajahi dunia pararel.Dalam novel ini dan novel-novel serial Bumi sebelumnya, diceritakan bahwa Klan Bintang merupakan klan yang paling jauh dan paling menakjubkan diantara ketiga klan lainnya, Bumi, Bulan, Matahari. Letak Klan Bintang yang jauh serta misterius membuat klan ini tidak ada yang membahas atau tercatat dalam buku-buku klan lain.Cerita dalam novel Bintang ini dimulai dari sekembalinya Raib dan kedua temanya dalam menemukan letak Klan Bintang serta mencari tahu apa yang terjadi di sana yang diceritakan dalam novel sebelumnya, yaitu Matahari. Dari petualangan tersebut, Raib, Seli, dan Ali memperoleh informasi bahwa Dewan Kota Zaramaraz berusaha menghancurkan klan di permukaan dengan cara meruntuhkan pasak bumi yang telah dijaga ribuan tahun. Setelah mendengar informasi tersbut, Raib, Seli, dan Ali langsung menuju Klan Bulan dengan menggunakan Buku Kehidupan milik Raib untuk melaporkannya kepada Av, Miss Selena, dan Ketua Konsil Klan Matahari yang baru.Setelah mendengar laporan dari Raib, Seli, dan Ali mengenai rencana Dewan Kota Zaramaraz tersebut, para petinggi Klan Bulan dan Klan Bintang memutuskan membentuk tim yang terdiri dari Raib, Seli, Ali, serta sepuluh petarung terbaik dari Klan Bulan  dan Klan Matahri yang diketuai oleh Miss Selena untuk mencari serta mengamankan pasak bumi yang dimaksud Dewan Kota Zaramaraz.Dengan kejeniusan yang dimiliki Ali, ia berhasil menyiskan enam titik dari ribuan titik magma yang memungkinkan akan dilepaskan oleh Dewan Kota Zaramaraz. Meski tinggal enam titik yang harus diperiksa, perjalanan mereka tetap tidak mudah. Mereka harus menyusuri lorong-lorong tak berpenghuni yang berbahaya dan harus menghadapi pasukan Klan Bintang yang berjaga setiap saat.Tugas Raib serta pasukan lain dalam menemukan pasak yang dimaksud, ternyata membuat perjalanan ke Klan Bintang ini berbeda dengan perjalanan ke Klan Bintang sebelumnya yang diceritakan dalam novel Matahari. Ruangan-ruangan lain dalam Klan tersebut menjadi lebih tereksplor dan tentu saja membuat ceritanya menjadi tidak membosankan. Bukan hanya keunikan masing-masing ruangan, melainkan juga bagaimana pendapat serta hubungan masyarakat ruangan itu dengan Dewan Kota yang semakin mempertajam kesan bahwa Klan Bintang, dengan seluruh teknologi yang amat mutakhir, ternyata juga memiliki cacat.Lalu, apakah Miss Selena, Raib, Seli, Ali, serta Pasukan dari Klan Bulan dan Klan Matahari berhasil menemukan serta mengamankan pasak yang dimaksud?Dalam buku keempat serial Bumi ini, banyak yang akhirnya mengakui kecerdasan Ali. Disini, ia terlihat sangat genius, dan cerdik. Logika dan penjelasan-penjelasan yang ia paparkan sangat masuk akal. Terlebih lagi, dia telah membuat ILY versi 3.0 yang didesain lebih canggih dengan menambahkan teknologi baru yang dipelajari di Klan Bintang.Kebanyakan orang mengira bahwa Bintang merupakan buku terakhir dari Serial “Bumi”. Tapi siapa sangka di akhir buku tertulis “Bersambung ke buku yang kelima, KOMET”. Petualangan mereka belum berakhir. Masih ada misteri yang belum terpecahkan, salah satunya siapa orang tua Raib. Meskipun buku-buku serial Bumi ini bergenre fantasi, tetapi banyak sekali pesan moral yang disampaikan oleh Tere Liye yang dapat diterapkan dalam kehidupan sehari-hari. Buku ini sangat cocok dibaca semua kalangn terutama para remaja seusia Raib.</div>
        </div>
    </div>
</div>
<!-- Grid System End -->

<!-- Footer Start -->
<div class="footer"> 
    <table border="0" width="40%">
    <tr>
        <td>
        <img src="../../Logo.png">
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
</body>
</html>