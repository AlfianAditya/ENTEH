<?php
require_once 'connect_db.php';
$categori = $conn->query("SELECT * FROM produk");
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
  
    <div style="width:70%; background:grey">
      <img src="gambar/valhala.jpg" class="w100" style="" alt="">
    </div>
    <div style="width:30%;display: flex;flex-direction: column;justify-content: center;" class="center">
      <a href="">Kategori<a>
      <h2>Assasin's Creed Valhalla</h2>
      
      <a href="">Read More</a>
    </div>
  </div>
<!-- pilihan editor-->
<br><br>
<br><br>
<h3 style="padding:25px">EDITOR CHOICE</h3>

<div style="width:100%;height:100%;display:flex;flex-direction:row;">

<?php
$q = $conn->query("SELECT * FROM produk INNER JOIN kategori ON kategori.id_kategori = produk.id_kategori");

while ($dt = $q->fetch_assoc()) :

?>
<div style="width:25%;display:flex;flex-direction:column;padding:25px;flex-wrap: wrap;">
    <div style=" background:grey;height:35%;">
      <img src="./gambar/<?= $dt['gambar'] ?>"style="height:100%;width:100%;"></td>
    </div>
    <div style=";display: flex;flex-direction: column;justify-content: center; color:black;" class="center">
      <p>KATEGORI : <?= $dt['nama_kategori'] ?><p>
      <h2><?= $dt['judul_berita'] ?></h2>
      
      <a href="readmore.php?id=<?= $dt['id_produk']?>">Read More</a>
    </div>
  </div>
<?php
endwhile;
?> 

</div>

<!-- pilihan editor-->
<br><br>
<br><br>

<div style="display:flex;flex-direction:row;">
  
  <div style="width:100%;height:100%;display:flex;flex-direction:column;">
  <h3 style="    margin-left: 13%;padding:25px;color:black;">LAST NEWS</h3>
  <?php
    $q = $conn->query("SELECT * FROM produk INNER JOIN kategori ON kategori.id_kategori = produk.id_kategori");
    while ($dt = $q->fetch_assoc()) :
    ?>
    <div style="width:75%;display:flex;flex-direction:row;padding:0 0 15% 15%;">
    
      <div style=" background:grey;width:75%">
        <img src="./gambar/<?= $dt['gambar'] ?>" style="width:100%" alt="">
      </div>
      <div style="width:25%;display: flex;flex-direction: column;justify-content: center;" class="center">
        <p>KATEGORI : <?= $dt['nama_kategori'] ?><p>
        <br><br>
        <h2><?= $dt['judul_berita'] ?></h2>
        <br><br>
        <p><?= $dt['deskripsi'] ?></p>
        <br><br>
        <a href="readmore.php?id=<?= $dt['id_produk']?>">Read More</a>
      </div>
    </div>
    <?php
    endwhile;
    ?> 

    
<!-- MOST POPULAR-->
  <!-- <div style="width:40%">
    <h3 style="padding:25px">MOST POPULAR NEWS</h3>
    <div class="img" style="width:100%;color:white;height:100%;display:flex;flex-direction:column;">
      <div style="width:100%;display:flex;flex-direction:row;padding:25px">
        <div style=" background:grey;">
          <img src="gambar/valhala.jpg" class="w100" style="" alt="">
        </div>
        <div style=";display: flex;flex-direction: column;justify-content: center;" class="center">
          <a href="">Kategori<a>
          <h2>Assasin's Creed Valhalla</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,…</p>
          <a href="">Read More</a>
        </div>
      </div>
      <h3 style="padding:25px;color:black;">Trending Now</h3>
      <div style="width:100%;display:flex;flex-direction:row;padding:25px">
        <div style=" background:grey;">
          <img src="gambar/valhala.jpg" class="w100" style="" alt="">
        </div>
        <div style=";display: flex;flex-direction: column;justify-content: center;" class="center">
          <a href="">Kategori<a>
          <h2>Assasin's Creed Valhalla</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,…</p>
          <a href="">Read More</a>
        </div>
      </div>
    </div> -->


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
        <h2 style="padding:5%;">Quick Line</h2>
       
      </div>
      <div style="width:30%;">
        <h2 style="padding:20%;">Social Networks</h2>
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


