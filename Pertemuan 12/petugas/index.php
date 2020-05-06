<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'petugas'){
        header('Location: ../petugas/index.php');
      }
    }
    else{
      header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <p align="center">Selamat Datang</p>
    <p  align="center"><?php echo $_SESSION['User']?></p>
    <p align="center">Level User</p>
    <p align="center"><?php echo $_SESSION['level']?></p>
    <div id="batas">
        <div id="header">
            <img src="../img/banner.jpg" alt="">
            <p>Perpustakaan Universitas Udayana</p>
        </div>

        <div id="sidebar">
            <img src="../img/logo_unud.png" alt="">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
        </div>

        <div id="menu">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="tentang.php">TENTANG</a></li>
                <li><a href="galeri.php">GALERI</a></li>
                <li><a href="kontak.php">KONTAK</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div id="isi">
            <h1>Selamat Datang</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book.</p>
            <h1>Galeri</h1>
            <div class = "galeri">
                <img src="../img/buku_python.jpg" alt="">
                <p><a href="galeri.html">Semua Bisa Menjadi Programmer Python Case Study</a></p>
            </div>
            <div class = "galeri">
                <img src="../img/buku_web.jpg" alt="">
                <p><a href="galeri.html">5 Pemrograman Dasar Desain Website</a></p>
            </div>
            
            <div class = "galeri">
                <img src="../img/buku_java.jpg" alt="">
                <p><a href="galeri.html">Java, Referensi Lengkap Untuk Programer</a></p>
            </div>
        </div>

        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Dinda :)</p>
        </div>

    </div>
</body>
</html>