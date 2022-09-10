<?php
require_once '../connect_db.php';
$kategori  = $conn->query("SELECT * FROM  kategori");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div style="width:100%;">
    <div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
      <form method="post" action="../add.php" enctype="multipart/form-data" style="font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;align-items: flex-start;">
      <br><br>
        <h1>TAMBAH BERITA</h1>
          <div class="row" style=width:80% >
            
            <div class="form-group col-md-3" style="display:flex;flex-direction: column;">
              <label for=""> Judul Berita</label>
              <br>
              <input style="height: 45px;border-radius: 10px;border: solid 1px black;"  class="form-control" type="text" name="judul_berita" autocomplete="off" required>
            </div>
            <br>

            <div class="form-group col-md-3" style="display:flex;flex-direction: column;">
              <label for=""> Deskripsi</label>
              <br>
              <textarea style="height: 100px;border-radius: 10px;"  class="form-control" type="text" name="deskripsi" autocomplete="off" required></textarea>
            </div>
            <br>

            <div class="form-group col-md-3" style="display:flex;flex-direction: column;">
              <label for=""> Kategori</label>
              <br>
              <select style="height: 45px;border-radius: 10px;"  name="id_kategori" class="form-control form-control" id="defaultSelect">
                      <option value="">PILIH</option>
                  <?php while ($key = mysqli_fetch_array($kategori)) { ?>
                      <option value="<?= $key['id_kategori']; ?>"><?= $key['nama_kategori']; ?></option>
                  <?php } ?>
              </select>
            </div>
            <br> <br>

            <div class="form-group col-md-3" style="display:flex;flex-direction: column;">
            <label for=""> Gambar</label>
            <br>
              <input style="border: solid 1px black;height: 45px;padding: 10px 35px;border-radius: 10px;" class="form-control" id="gambar" type="file" name="gambar" placeholder="Gambar">
            </div>

            <br><br>
            <div style="display:flex;flex-direction:row;">
              <div class="form-group col-md-2" style="padding-right:20px;">
                <button style="padding: 0px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;" type="submit" name="submit" class="btn btn-primary"  onclick="return confirm('Anda yakin akan Menambah Berita ini?')">Tambah Berita</button>
              </div>

              <div class="form-group col-md-2">
                <button style="padding: 0px 35px;height: 40px;height: 40px;background-color: red;border-radius: 10px;border: none;"class="btn btn-primary"><a href="../index.php" style="color:black;text-decoration:none;">Back</a></button>
              </div>
            </div>

            <br>
            <br>
            
          </div>
      </form>
    
    </div>
  </div>

</body>
</html>
</body>
</html>