<?php  

include 'koneksi.php';
$id_produk=$_GET["id"];


//hapus data di mysql
$koneksi->query("DELETE FROM komentar WHERE id_komentar='$id_produk'");

echo "<script>alert('Komentar Dihapus');</script>";
echo "<script>location='index?halaman=komentar';</script>";
?>