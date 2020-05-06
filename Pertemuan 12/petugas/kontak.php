<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'petugas'){
        header('Location: ../petugas/kontak.php');
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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
        </div>

        <div id="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="tentang.php">TENTANG</a></li>
                <li><a href="galeri.php">GALERI</a></li>
                <li><a href="kontak.php">KONTAK</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div id="isi">
            <h1>Kontak Kami</h1>
            <p>Hubungi kami melalui formulir dibawah ini!</p>
            <div class="kontak">
                <form action="#">
                    <label for="fname">Nama Depan</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                
                    <label for="lname">Nama Belakang</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                    </select>
                    <label for="subject">Masukan atau Komentar</label>
                    <textarea id="subject" name="subject" placeholder="Masukan kalimat.." style="height:200px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Dinda :)</p>
        </div>

    </div>
</body>
</html>