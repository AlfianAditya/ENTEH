<?php
require_once '../connect_db.php';
$kategori  = $conn->query("SELECT * FROM  kategori");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="../add.php" enctype="multipart/form-data" style="font-family:monospace; width:100%;display: flex;flex-direction: column;align-items: center;">
        <h2>TAMBAH BERITA</h2>
          <div class="row">
            
            <div class="form-group col-md-3">
              <input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
            </div>
            <div class="form-group col-md-5">
              <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" required>
            </div>
            <select name="id_kategori" class="form-control form-control" id="defaultSelect">
                    <option value="">PILIH</option>
                <?php while ($key = mysqli_fetch_array($kategori)) { ?>
                    <option value="<?= $key['id_kategori']; ?>"><?= $key['nama_kategori']; ?></option>
                <?php } ?>
            </select>
            <div class="form-group col-md-3">
              <input class="form-control" id="gambar" type="file" name="gambar" placeholder="Gambar">
            </div>

            <div class="form-group col-md-2">
              <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </div>
        </form>
</body>
</html>
</body>
</html>