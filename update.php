<?php

// cek no_polisi
if (isset($_GET['no_polisi'])) {
  include 'koneksi.php';
  $no_polisi = $_GET['no_polisi'];
 
  // ambil data berdasarkan no_polisi
  $sql="SELECT * FROM pelanggan WHERE no_polisi ='$no_polisi'";
  //$no=1;
  $query = mysqli_query($koneksi, $sql);		
  while ($row = mysqli_fetch_array($query))
  {
  ?>

  <h2>Halaman Update Data</h2>

  <form method="post" action="proses_update.php">
    <input type="varchar" name="no_polisi" value="<?php echo $row['no_polisi']?>">
    <input type="varchar" name="tipe_motor" value="<?php echo $row['tipe_motor'] ?>">
    <input type="varchar" name="alamat" value="<?php echo $row['alamat'] ?>">
    <input type="submit" name="submit" value="Update Data">
  </form>

  <?php
 
}}
