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
      <title>EDIT</title>
      
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div style="width:100%;">
      <div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
            <form method="post" action="proses_update_kategori.php" style="font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;align-items: flex-start;">
                <br><br>    
            <h1>EDIT KATEGORI</h1>  
            
            <input type="hidden" name="id_kategori" value="<?= $dt['id_kategori'] ?>">
              
              <div class="form-group col-md-8" style="display:flex;flex-direction: column;">
                <label>Kategori</label>
                <br>
                <input style="height: 45px;border-radius: 10px;border: solid 1px black;" class="form-control" type="text" name="nama_kategori" placeholder="Kategori" value="<?= $dt['nama_kategori'] ?>">
              </div>

              <br><br>
              <div style="display:flex;flex-direction:row;">
              <div class="form-group col-md-2" style="padding-right:20px;">
                <button style="padding: 0px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;" type="submit" name="submit" class="btn btn-primary"  onclick="return confirm('Anda yakin akan Mengedit Kategori ini?')">Edit Kategori</button>
              </div>

              <div class="form-group col-md-2">
                <button style="padding: 0px 35px;height: 40px;height: 40px;background-color: red;border-radius: 10px;border: none;"class="btn btn-primary"><a href="index.php" style="color:black;text-decoration:none;">Back</a></button>
              </div>
            </div>
            </form>
            <br><br>
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