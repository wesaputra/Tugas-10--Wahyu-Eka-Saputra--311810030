<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $no_polisi=$_POST['no_polisi'];
  $tipe_motor=$_POST['tipe_motor'];
  $alamat=$_POST['alamat'];
  $total = $_POST['total'];
 
  $sql="UPDATE pelanggan SET no_polisi = '$no_polisi', tipe_motor ='$tipe_motor', alamat ='$alamat' WHERE no_polisi = '$no_polisi'";
  $query = mysqli_query($koneksi, $sql);	

  if ($sql) {
    // pesan jika data berubah
    echo "<script>alert('Data pelanggan berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data pelanggan gagal diubah'); window.location.href='index.php'</script>";
  }s
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}