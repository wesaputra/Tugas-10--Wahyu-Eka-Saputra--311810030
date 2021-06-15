<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD dengan PHP MySQLi</title>
</head>
<body>
  <h1>CRUD dengan PHP MySQLi</h1>
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="text" name="nama_produk" placeholder="Nama Produk">
    <input type="number" name="harga" placeholder="Harga">
    <input type="number" name="qty" placeholder="Qty">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
  <!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>Nama Produk</th>
      <th>Harga</th>
      <th>Qty</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM produk");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_produk'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><?= $dt['qty'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_produk'] ?>" 
	  onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
    <?php
    endwhile;
    ?> 
  </table>
</body>
</html>