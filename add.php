<?php

require_once 'connect_db.php';

if (isset($_POST['submit'])) {
  $gambar    = $_POST['gambar'];
  $j_berita  = $_POST['judul_berita'];
  $deskripsi = $_POST['deskripsi'];

  $q = $conn->query("INSERT INTO produk (gambar, judul_berita, deskripsi ) VALUES ('$gambar', '$j_berita', '$deskripsi')");

  if ($q) {
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  header('Location: index.php');
}