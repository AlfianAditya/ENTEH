<?php
require_once 'connect_db.php';
session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
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
        <button><a href="tambah/v_add.php">Tambah BERITA</a></button>
        <button><a href="tambah/v_add_kategori.php">Tambah Kategori</a></button>
        <button ><a href="logout.php" onclick="return confirm('YAKIN ANDA MAU KELUAR ENTEH?')" >Logout</a></button>
        <table class="table">
          <tr>
            <th width="10%">No.</th>
            <th width="20%">Gambar</th>
            <th width="20%">Judul Berita</th>
            <th width="30%">Deskripsi Berita</th>
            <th width="10%">Kategori</th>
            
            <th width="10%" colspan="2">Aksi</th>
          </tr>
          <?php
          $q           = $conn->query("SELECT * FROM produk INNER JOIN kategori ON kategori.id_kategori = produk.id_kategori");
          
          $no          = 1;
          while ($dt = $q->fetch_assoc()) :
          ?>
          <tr>  
            <td><?= $no++ ?></td>
            <td><img src="./gambar/<?= $dt['gambar'] ?>"style="width:25%;"></td>
            <td><?= $dt['judul_berita'] ?></td>
            <td><?= $dt['deskripsi'] ?></td>
            <td><?= $dt['nama_kategori'] ?></td>

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