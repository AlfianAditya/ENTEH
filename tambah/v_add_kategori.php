<?php
require_once '../connect_db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="../add_kategori.php" enctype="multipart/form-data">
        <p>TAMBAH Kategori</p>
          <div class="row">
            <div class="form-group col-md-3">
            <input class="form-control" type="text" name="nama_kategori" placeholder="Kategori" required>
            <table class="table">
          <tr>
            <th>No.</th>
            <th>Kategori</th>
            
            <th colspan="2">Aksi</th>
          </tr>
          <?php
          $q           = $conn->query("SELECT * FROM kategori");
          $no          = 1;
          while ($dt = $q->fetch_assoc()) :
          ?>
          <tr>  
            <td ><?= $no++ ?></td>
            
            <td><?= $dt['nama_kategori'] ?></td>

            <td><a href="../update_kategori.php?id=<?= $dt['id_kategori'] ?>">Ubah</a></td>
            <td><a href="../delete_kategori.php?id=<?= $dt['id_kategori'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
          </tr>
          <?php
          endwhile;
          ?> 
        </table>

            <div class="form-group col-md-2">
              <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </div>
        </form>
</body>
</html>
</body>
</html>