<?php
require_once 'connect_db.php';
$kategori  = $conn->query("SELECT * FROM  kategori");
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM produk INNER JOIN kategori ON kategori.id_kategori = produk.id_kategori WHERE id_produk = '$id'");

  // var_dump($q->fetch_assoc());
  // die;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>TNE</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="color:black">
<!-- gambar awal -->
<ul>
  <li><a class="active" href="dashboard.php">Home</a></li>
  <li style="    float: right;"><a href="login.php">LOGIN</a></li>
</ul>
<br><br><br>
<br><br>
  <div class="cover" style="width:100%;color:black;height:100%;display:flex">
  <?php
  
  foreach ($q as $dt) :
  ?>
    <div style="width:70%; background:grey">
      <img src="./gambar/<?= $dt['gambar'] ?>" class="w100" style="" alt="">
    </div>
    <div style="width:30%;display: flex;flex-direction: column;justify-content: center;" class="center">
      <p><?= $dt['nama_kategori'] ?><p>
      <h2><?= $dt['judul_berita'] ?></h2>
      <p><?= $dt['deskripsi'] ?></p>
    
    </div>
  </div>
  <?php 
  endforeach
  ?>
<!-- pilihan editor-->
<br><br>
<br><br>

<!-- pilihan editor-->
<br><br>
<br><br>



  </div>
</div>
<br><br>
<br><br>













<br><br>
<br><br><br><br>
<br><br>


    <div style="color:white;background-color:#04091e;height:50%;display:flex;flex-direction:row;">
    <br>
      <br>
      <br>
    <div style="width:30%;">
        <h2>Alfianews.com</h2> 
        <br>
      <br>
        <p>Garsansnews merupakan portal berita kekinian</p>
      </div>
      <br>
      <div style="width:30%;">
        <h2>Quick Line</h2>
       
      </div>
      <div style="width:30%;">
        <h2>Social Networks</h2>
        <br>
      <br>
        <a style="color:white;" href="">Facebook</a>
        <br>
      <br>
        <a style="color:white;"href="">Twiiter</a>
        <br>
      <br>  
        <a style="color:white;"href="">youtube</a>
      <br><br><br>
      </div> 


      <br>
      <br>
      <br>
    </div>
    <div style="margin:auto;color:white;background-color:#04091e;"class="copyright">
        by <strong><span>ALFIAN</span></strong>
      </div>

</body>
</html>