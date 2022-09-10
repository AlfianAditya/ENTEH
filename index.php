<?php
require_once 'connect_db.php';

session_start();
$session=$_SESSION['username'];
$q = $conn->query("SELECT * FROM user WHERE  username = '$session'");
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    // var_dump($q->fetch_assoc());
    // die;
    if($q->fetch_assoc()['level']=='user'){
        header("Location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <p>Halo <b><?php echo $_SESSION['username']; ?><p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p> -->
<div style="width:100%;padding-top: 2%;">
<div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
  <div class="card-body">
    <div style="font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;align-items: flex-start;">
      <div style="display:flex;flex-direction:row;">
          <div class="form-group col-md-2">
            <button  style="padding: 10px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;" class="btn btn-primary"><a href="tambah/v_add.php">Tambah BERITA</a></button>
          </div>
          <div class="form-group col-md-2">
            <button  style="padding: 10px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;" class="btn btn-primary"><a href="tambah/v_add_kategori.php">Tambah Kategori</a></button>
          </div>
          <div class="form-group col-md-2">
            <button  style="padding: 10px 35px;height: 40px;background-color: red;border-radius: 10px;border: none;" class="btn btn-primary"><a href="logout.php" onclick="return confirm('YAKIN ANDA MAU KELUAR ENTEH?')" >Logout</a><button>
          </div>
          <div class="form-group col-md-2">
            <button  style="padding: 10px 35px;height: 40px;background-color: blue;border-radius: 10px;border: none;" class="btn btn-primary"><a href="add_admin.php" >ADD USER</a><button>
          </div>
        </div>
        <br><br>
        <label for=""> Tabel Berita</label>
        <br>
        <table  style="border-radius: 10px;text-align: center;" class="table">
          <tr>
            <th style="padding: 0.75rem;vertical-align: top;" width="10%">No.</th>
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
            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><?= $no++ ?></td>
            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><img src="./gambar/<?= $dt['gambar'] ?>"style="width:25%;"></td>
            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><?= $dt['judul_berita'] ?></td>
            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><?= $dt['deskripsi'] ?></td>
            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><?= $dt['nama_kategori'] ?></td>

            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
            <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><a href="delete.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus Berita ini?')">Hapus</a></td>
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