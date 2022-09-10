<?php
require_once '../connect_db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tambah Kategori</title>
</head>
<body>
<div style="width:100%;">
  <div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
    <form method="post" action="../add_kategori.php" enctype="multipart/form-data" style="font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;align-items: flex-start;">
      <br><br>    
      <h1>TAMBAH KATEGORI</h1>
        <div class="row" style=width:80% >
          <div class="form-group col-md-3" style="display:flex;flex-direction: column;">
            <label for=""> Nama Kategori</label>
            <br>
            <input style="height: 45px;border-radius: 10px;border: solid 1px black;" class="form-control" type="text" name="nama_kategori" required>
            <div class="form-group col-md-2">
            <br>
              <button  style="padding: 0px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;" type="submit" name="submit" class="btn btn-primary"  onclick="return confirm('Anda yakin akan Menambahkan kategori ini?')">Tambah Kategori</button>
            </div>
            <br><br>
            <label for=""> Tabel Kategori</label>
              <br>
              <table style="border-radius: 10px;text-align: center;" class="table">
                <tr>
                  <th style="padding: 0.75rem;vertical-align: top;">No.</th>
                  <th>Kategori</th>
                  <th colspan="2">Aksi</th>
                </tr>
                  <?php
                    $q           = $conn->query("SELECT * FROM kategori");
                    $no          = 1;
                    while ($dt = $q->fetch_assoc()) :
                  ?>
                  <tr>  
                    <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><?= $no++ ?></td>
                    <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><?= $dt['nama_kategori'] ?></td>
                    <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><a style="color:black;text-decoration: none;" href="../update_kategori.php?id=<?= $dt['id_kategori'] ?>">Ubah</a></td>
                    <td style="padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;"><a  style="color:black;text-decoration: none;" href="../delete_kategori.php?id=<?= $dt['id_kategori'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
                  </tr>
                  <?php
                    endwhile;
                  ?> 
              </table>

          <br><br>
          <div style="display:flex;flex-direction:row;">
              <div class="form-group col-md-2">
                <button  style="padding: 0px 35px;height: 40px;height: 40px;background-color: red;border-radius: 10px;border: none;" class="btn btn-primary"><a href="../index.php" style="color:black;text-decoration:none;">back</a></button>
              </div>

          </div>
        </div>
    </form>
        <br><br>
  </div>
</div>

</body>
</html>
</body>
</html>