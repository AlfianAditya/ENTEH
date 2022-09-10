<?php
require_once 'connect_db.php';

if (isset($_POST['submit'])) {

  $id = $_POST['id_produk'];
  $j_berita = $_POST['judul_berita'];
  $deskripsi = $_POST['deskripsi'];
  $gambar = $_POST['gambar'];
  $id_kategori = $_POST['id_kategori'];
  
  $q = $conn->query("UPDATE produk SET judul_berita = '$j_berita', deskripsi = '$deskripsi', gambar = '$gambar', id_kategori = '$id_kategori' WHERE id_produk = '$id'");

  if ($q) {
    echo "<script>alert('Berita berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('Berita gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  header('Location: index.php');
}