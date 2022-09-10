<?php

require_once 'connect_db.php';
$kategori  = $conn->query("SELECT * FROM  kategori");
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");
  foreach ($q as $dt) :
?>
  <!DOCTYPE html>
    <html>
    <head>
      <title>EDIT</title>
      
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div style="width:100%;">
      <div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
          <form method="post" action="proses_update.php"style="font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;align-items: flex-start;">
              <input type="hidden" name="id_produk" value="<?= $dt['id_produk'] ?>">
              <br><br>    
              <h1>EDIT BERITA</h1>
              <br>
              <div class="row" style=width:80% >
                <div class= "form-group col-md-3" style="display:flex;flex-direction: column;">
                  <label>Gambar</label>
                  <br>
                  <label for=""><?= $dt['gambar'] ?></label>
                  <input id="file_gambar" style="border: solid 1px black;height: 45px;padding: 10px 35px;border-radius: 10px;" class="form-control" type="file" name="gambar" value="<?= $dt['gambar'] ?>">
                </div>
                <br> <br>

                <div class="form-group col-md-8" style="display:flex;flex-direction: column;">
                  <label>Judul Berita</label>
                  <br>
                  <input style="height: 45px;border-radius: 10px;border: solid 1px black;" class="form-control" type="text" name="judul_berita" value="<?= $dt['judul_berita'] ?>">
                </div>
                <br> <br>
                <div class="form-group col-md-8" style="display:flex;flex-direction: column;">
                  <label>Deskripsi</label>
                  <br>
                  <textarea style="height: 100px;border-radius: 10px;border: solid 1px black;" class="form-control" type="text" name="deskripsi" value=""><?= $dt['deskripsi'] ?></textarea>    
                </div>
                <br> <br> 
                <div class="form-group col-md-3" style="display:flex;flex-direction: column;">
                <label for=""> Kategori</label>
                <br>  
                <select style="height: 45px;border-radius: 10px;" name="id_kategori" class="form-control form-control" id="defaultSelect">
                    <option value="">PILIH</option>
                    <?php while ($key = mysqli_fetch_array($kategori)) { ?>
                        <option value="<?= $key['id_kategori']; ?>" <?= $key['id_kategori'] == $dt['id_kategori'] ? 'selected' : '' ?>><?= $key['nama_kategori']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <br> <br>

                <div style="display:flex;flex-direction:row;">
                  <div class="form-group col-md-2" style="padding-right:20px;">
                    <button style="padding: 0px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;" type="submit" name="submit" class="btn btn-primary"  onclick="return confirm('Anda yakin akan Mengupdate data ini?')">Tambah Berita</button>
                  </div>

                  <div class="form-group col-md-2">
                    <button style="padding: 0px 35px;height: 40px;height: 40px;background-color: red;border-radius: 10px;border: none;"class="btn btn-primary"><a href="index.php" style="color:black;text-decoration:none;">Back</a></button>
                  </div>
                </div>
              </div>




            </form>
            <br> <br> 
        </div>
      </div>
      <footer>
        <div class="copyright">
          by <strong><span>ALFIAN</span></strong>
        </div>
      </footer>
      <script>
        let filegambar=document.getElementById('file_gambar')
        let hiddengambar=document.getElementById('hidden_gambar')
        document.addEventListener("DOMContentLoaded", function(event) { 
          document.getElementById("file_gambar").addEventListener("change", function(){
            console.log(this.value[0].files)
          });
        });
        
       
      </script>
    </body>
    
  </html>
  <?php
  endforeach;
}?>
