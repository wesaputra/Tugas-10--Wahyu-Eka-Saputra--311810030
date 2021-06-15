<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $n_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $qty = $_POST['qty'];

  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO produk VALUES ('', '$n_produk', '$harga', '$qty')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); 
	window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan');
	window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}