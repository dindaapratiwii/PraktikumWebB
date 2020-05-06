<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../admin/galeri.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h1>Galeri</h1>
            <form class="example" action="#">
                <input type="text" placeholder="Cari Buku..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Semua Bisa Menjadi Programmer Python Case Study</p>
                    <p>YUNIAR SUPARDI & DR.(CD) DEDE, S.KOM., M.KOM</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>288.0</li>
                            <li>6 Jan 2020</li>
                            <li>9786230011689</li>
                            <li>Indonesia</li>
                            <li>Elex Media Komputindo</li>
                            <li>0.28 kg</li>
                            <li>14.0 cm</li>
                            <li>21.0 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                </div>
                <img src="../img/buku_python.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>5 Pemrograman Dasar Desain Website</p>
                    <p>Jubilee Enterprise</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>312.0</li>
                            <li>2 Des 2019</li>
                            <li>9786230010651</li>
                            <li>Indonesia</li>
                            <li>Elex Media Komputindo</li>
                            <li>0.4 kg</li>
                            <li>14.0 cm</li>
                            <li>21.0 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                    
                </div>
                <img src="../img/buku_web.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Java, Referensi Lengkap Untuk Programer</p>
                    <p>R.h. Sianipar</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>386.0</li>
                            <li>3 Des 2019</li>
                            <li>9789792965629</li>
                            <li>Indonesia</li>
                            <li>Andi Offset</li>
                            <li>0.824 kg</li>
                            <li>20.0 cm</li>
                            <li>28.0 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                   
                </div>
                <img src="../img/buku_java.jpg" alt="">
            </div>
            <div><center><button class="button">Tampilkan Lebih Banyak</button></center></div>
            <br>
        </div>

        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Dinda :)</p>
        </div>

    </div>
</body>
</html>