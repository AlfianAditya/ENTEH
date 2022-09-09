<?php
require_once 'connect_db.php';
$categori = $conn->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
  <title>TNE</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="style.css">
</head>
<body style="color:black">
<!-- gambar awal -->
  <div class="cover" style="width:100%;color:white;height:100%;display:flex">
    <div style="width:70%; background:grey">
      <img src="gambar/valhala.jpg" class="w100" style="" alt="">
    </div>
    <div style="width:30%;display: flex;flex-direction: column;justify-content: center;" class="center">
      <a href="">Kategori<a>
      <h2>Assasin's Creed Valhalla</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,…</p>
      <a href="">Read More</a>
    </div>
  </div>

<!-- pilihan editor-->
<br><br>
<br><br>
<h3 style="padding:25px">EDITOR CHOICE</h3>

<div style="width:100%;color:white;height:100%;display:flex;flex-direction:row;">

<?php
$q = $conn->query("SELECT * FROM produk INNER JOIN kategori ON kategori.id_kategori = produk.id_kategori");

while ($dt = $q->fetch_assoc()) :

?>
<div style="width:20%;display:flex;flex-direction:column;padding:25px">
    <div style=" background:grey;">
    <img src="./gambar/<?= $dt['gambar'] ?>"style="width:25%;"></td>
    </div>
    <div style=";display: flex;flex-direction: column;justify-content: center; color:black;" class="center">
      <p><?= $dt['nama_kategori'] ?><p>
      <h2><?= $dt['judul_berita'] ?></h2>
      <p><?= $dt['deskripsi'] ?></p>
      <a href="">Read More</a>
    </div>
  </div>
<?php
endwhile;
?> 


  <div style="width:20%;display:flex;flex-direction:column;padding:25px">
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

  <div style="width:20%;display:flex;flex-direction:column;padding:25px">
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

  <div style="width:20%;display:flex;flex-direction:column;padding:25px">
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

</div>

<!-- pilihan editor-->
<br><br>
<br><br>

<div style="display:flex;flex-direction:row;">
  
  <div style="width:55%;color:white;height:100%;display:flex;flex-direction:column;">
  <h3 style="padding:25px;color:black;">LAST NEWS</h3>
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
  </div>

<!-- MOST POPULAR-->
  <div style="width:40%">
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
    </div>


  </div>
</div>
<br><br>
<br><br>













<br><br>
<br><br><br><br>
<br><br>
  <!-- <nav style="background:grey">
    <div>
      <ul>
        <li>
          <a href="">HOME</a>
        </li>
      </ul>
    </div>
    <div class="" style="">
      <ul>
        <li>
          <a href="">TECHNOLOGY</a>
        </li>
        <li>
          <a href="">VIDEO GAME</a>
        </li>
        <li>
          <a href="">MOVIE</a>
        </li>
        <li>
          <a href="">LOGIN</a>
        </li>
      </ul>
    </div>
  </nav> -->



  <!-- <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="date">Tanggal: <?= date("d/m/Y H:i a") ?></h5>
        <form method="post" action="add.php">
          <div class="row">
            <div class="form-group col-md-5">
              <input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk">
            </div>
            <div class="form-group col-md-3">
              <input class="form-control" type="number" name="harga" placeholder="Harga">
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="number" name="qty" placeholder="Qty">
            </div>
            <div class="form-group col-md-2">
              <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </div>
        </form>
        <table class="table">
          <tr>
            <th width="10%">No.</th>
            <th width="40%">Nama Produk</th>
            <th width="30%">Harga</th>
            <th width="10%">Qty</th>
            <th width="10%" colspan="2">Aksi</th>
          </tr>
          <?php
          $q           = $conn->query("SELECT * FROM produk");
          $no          = 1;
          $total_harga = 0;
          $total_qty   = 0;
          while ($dt = $q->fetch_assoc()) :
            $total_harga = $total_harga + intval($dt['harga']) * intval($dt['qty']);
            $total_qty   = $total_qty + intval($dt['qty']);
          ?>
          <tr>  
            <td><?= $no++ ?></td>
            <td><?= $dt['nama_produk'] ?></td>
            <td><?= 'Rp '.number_format($dt['harga'], 2) ?></td>
            <td><?= $dt['qty'] ?></td>
            <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
          </tr>
          <?php
          endwhile;
          ?> 
          <tr>  
            <td colspan="2"><b>Total<b></td>
            <td><b><?='Rp '.number_format($total_harga, 2) ?><b></td>
            <td><b><?=$total_qty ?><b></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div> -->
  <footer>
    <div class="copyright">
      by <strong><span>ALFIAN</span></strong>
    </div>
  </footer>
</body>
</html>


