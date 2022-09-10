<?php

require_once 'connect_db.php';

if (isset($_POST['submit'])) {
  $nama_kategori = $_POST['nama_kategori'];
  $cej = $conn->query("SELECT nama_kategori FROM kategori WHERE nama_kategori='$nama_kategori'");
                    
  // $cej   = mysqli_num_rows (mysqli_query(""));
  
      if(mysqli_num_rows($cej) > 0) {
          // $_SESSION['pesan'] = "Oops! Duplikat input data ...";
          echo "<script>alert('Kategori Sudah Ada'); window.location.href='tambah/v_add_kategori.php'</script>";
          die;
          // header("location:tambah/v_add.php");
      }
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