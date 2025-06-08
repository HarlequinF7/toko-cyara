<?php
include 'koneksi.php';  
$koneksi->query("DELETE FROM halaman WHERE id='$_GET[id]'");

echo "<script>alert('halaman terhapus');</script>";
echo "<script>location='index.php?halaman=halaman';</script>";

?>