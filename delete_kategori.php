<?php
require_once 'connect_db.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q  = $conn->query("DELETE FROM kategori WHERE id_kategori = '$id'");

  if ($q) {
    echo "<script>alert('Kategori dihapus'); window.location.href='tambah/v_add_kategori.php'</script>";
  } else {
    echo "<script>alert('Kategori dihapus'); window.location.href='index.php'</script>";
  }
} else {
  header('Location:index.php');
}