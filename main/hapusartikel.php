<?php
include 'koneksi.php';
$ambilfoto=$koneksi->query("SELECT *FROM artikel WHERE id='$_GET[id]'");
$detailfoto=$ambilfoto->fetch_assoc();

$namafilefoto=$detailfoto["gambar"];
unlink("../foto_produk/".$namafilefoto);
  
$koneksi->query("DELETE FROM artikel WHERE id='$_GET[id]'");

echo "<script>alert('Artikel terhapus');</script>";
echo "<script>location='index?halaman=halaman';</script>";

?>