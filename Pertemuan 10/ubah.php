<?php
  
  require 'functions.php';
  
  $id = $_GET["id"];
  //var_dump($id);

  //query data berdasarkan
  $mhs = query("SELECT * FROM mahasiswa WHERE id = $id ")[0]; 
  

  if(isset($_POST["submit"]))
  {
    if(ubah($_POST) > 0 )
    {
      echo "
          <script>
              alert('data berhasil diubah');
              document.location.href = 'index.php';

          </script>
      ";
    }
    else {
      echo "
          <script>
              alert('data gagal diubah');
              document.location.href = 'index.php';

          </script>
      ";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRUD-Ubah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Menyisipkan Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
  <div class="container">
    <form action="" method="post">
      <!-- DALAM ubah kita memerlukan id tetapi user tidak memelurkan id, jadi kita hidden id tersebut di html5-->
      <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
      <div class="form-group">
        <label for="Nama">Nama :</label>
        <input type="name"  name="nama" class="form-control" id="Nama" value="<?= $mhs["nama"]; ?>">
      </div>
      <div class="form-group">
        <label for="Nim">Nim :</label>
        <input type="text" name="nim" class="form-control" id="Nim" required value="<?= $mhs["nim"]; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" class="form-control" id="email" value="<?= $mhs["email"]; ?>">
      </div>
      <div class="form-group">
        <label for="Jurusan">Jurusan :</label>
        <input type="text" name="jurusan" class="form-control" id="Jurusan" value="<?= $mhs["jurusan"]; ?>" >
      </div>
      <div class="form-group">
        <label for="Gambar">Gambar :</label>
        <input type="text" name="gambar" class="form-control" id="Gambar" value="<?= $mhs["gambar"]; ?>">
      </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</body>
</html>
