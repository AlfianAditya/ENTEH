<?php
require_once 'connect_db.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_kategori'];
  $nama_kategori = $_POST['nama_kategori'];
  
  $q = $conn->query("UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id'");
  if ($q) {
    echo "<script>alert('Kategori berhasil diubah'); window.location.href='tambah/v_add_kategori.php'</script>";
  } else {
    echo "<script>alert('Kategori gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  header('Location: index.php');
}