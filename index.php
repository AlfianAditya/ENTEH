<?php
require_once 'connect_db.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>TNE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="date">Tanggal: <?= date("d/m/Y H:i a") ?></h5>
        <form method="post" action="add.php" enctype="multipart/form-data">
        <p>TAMBAH BERITA</p>
          <div class="row">
            
            <div class="form-group col-md-3">
              <input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
            </div>
            <div class="form-group col-md-5">
              <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" required>
            </div>
            <div class="form-group col-md-3">
              <input class="form-control" type="file" name="gambar" placeholder="Gambar">
            </div>
            <div class="form-group col-md-2">
              <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </div>
        </form>
        <table class="table">
          <tr>
            <th width="10%">No.</th>
            <th width="20%">Gambar</th>
            <th width="30%">Judul Berita</th>
            <th width="30%">Deskripsi Berita</th>
            
            <th width="20%" colspan="2">Aksi</th>
          </tr>
          <?php
          $q           = $conn->query("SELECT * FROM produk");
          $no          = 1;
          while ($dt = $q->fetch_assoc()) :
          ?>
          <tr>  
            <td><?= $no++ ?></td>
            <td><?= $dt['gambar'] ?></td>
            <td><?= $dt['judul_berita'] ?></td>
            <td><?= $dt['deskripsi'] ?></td>
            

            <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
          </tr>
          <?php
          endwhile;
          ?> 
        </table>
      </div>
    </div>
  </div>
  <footer>
    <div class="copyright">
      by <strong><span>ALFIAN</span></strong>
    </div>
  </footer>
</body>
</html>