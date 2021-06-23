<?php

// cek no_polisi
if (isset($_GET['no_polisi'])) {
  include 'koneksi.php';
  $no_polisi = $_GET['no_polisi'];
 

  // perintah hapus data pelanggan berdasarkan no_polisi yang dikirimkan
  $sql="DELETE FROM pelanggan WHERE no_polisi ='$no_polisi'";
  $query = mysqli_query($koneksi,$sql);	
  
  // cek perintah
  if ($sql) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data pelanggan berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data pelanggan gagal dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}