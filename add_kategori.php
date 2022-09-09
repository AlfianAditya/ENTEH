<?php

require_once 'connect_db.php';

if (isset($_POST['submit'])) {
  $nama_kategori = $_POST['nama_kategori'];

  $w = $conn->query("INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')");  

  if ($w) {
    echo "<script>alert('kategori berhasil ditambahkan'); window.location.href='tambah/v_add_kategori.php'</script>";
  } else {
    echo "<script>alert('kategori gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  header('Location: index.php');
}

?>