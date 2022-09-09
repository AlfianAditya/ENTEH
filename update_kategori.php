<?php

require_once 'connect_db.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // ambil data berdasarkan kategori
  $q = $conn->query("SELECT * FROM kategori WHERE id_kategori = '$id'");
  foreach ($q as $dt) :
?>
  <!DOCTYPE html>
    <html>
    <head>
      <title>CRUD dengan PHP - Ubah</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <h3>Ubah Kategori</h3>
          </div>
          <div class="card-body">
            <form method="post" action="proses_update_kategori.php">
              <input type="hidden" name="id_kategori" value="<?= $dt['id_kategori'] ?>">
              
              <div class="form-group col-md-8">
                <label>Kategori</label>
                <input class="form-control" type="text" name="nama_kategori" placeholder="Kategori" value="<?= $dt['nama_kategori'] ?>">
              </div>
              
              <div class="form-group col-md-8">
                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Anda yakin akan mengupdate data ini?')">Simpan</button>
              </div>
            </form>
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
  <?php
  endforeach;
}