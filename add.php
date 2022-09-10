<?php

require_once 'connect_db.php';

if (isset($_POST['submit'])) {
  
  $j_berita  = $_POST['judul_berita'];
  $deskripsi = $_POST['deskripsi'];
  $gambar    = $_FILES['gambar']['name'];
  $id_kategori  = $_POST['id_kategori'];


  if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $j_b   = $_POST['judul_berita'];
                    $cej = $conn->query("SELECT judul_berita FROM produk WHERE judul_berita='$_POST[judul_berita]'");
                    
                    // $cej   = mysqli_num_rows (mysqli_query(""));
                    
                        if(mysqli_num_rows($cej) > 0) {
                            // $_SESSION['pesan'] = "Oops! Duplikat input data ...";
                            echo "<script>alert('Berita Sudah Ada'); window.location.href='tambah/v_add.php'</script>";
                            // header("location:tambah/v_add.php");
                        }
                        
                    $q = $conn->query("INSERT INTO produk (judul_berita, deskripsi, gambar, id_kategori  ) VALUES ( '$j_berita', '$deskripsi','$nama_gambar_baru', '$id_kategori' )");

                    // print_r($q);
                    // die;
                    // $query = "INSERT INTO produk (nama_produk, deskripsi, harga_beli, harga_jual, gambar) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";
                    // $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$q){
                      echo "<script>alert('Berita gagal ditambahkan'); window.location.href='tambah/v_add.php'</script>";
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                      echo "<script>alert('Berita berhasil ditambahkan'); window.location.href='index.php'</script>";
                    }
  
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='tambah/.v_add.php';</script>";
              }
  } else {
    $q = $conn->query("INSERT INTO produk (judul_berita, deskripsi, gambar, id_kategori  ) VALUES ( '$j_berita', '$deskripsi','$nama_gambar_baru', '$id_kategori' )");
                    
                    // periska query apakah ada error
                    if(!$q){
                      echo "<script>alert('Berita gagal ditambahkan'); window.location.href='index.php'</script>";
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Berita berhasil ditambahkan'); window.location.href='index.php'</script>";
                    }
  }
//   $q = $conn->query("INSERT INTO produk (judul_berita, deskripsi, id_kategori ) VALUES (' '$j_berita', '$deskripsi', '$id_kategori')");

//   if ($q) {
//     echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
//   } else {
//     echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
//   }
// } else {
//   header('Location: index.php');
// }
}
?>