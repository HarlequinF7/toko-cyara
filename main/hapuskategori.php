<?php 
$ambil =$koneksi->query("SELECT*FROM kategori WHERE id_kategori='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$tema =$pecah['ikon'];
if (file_exists("../tema/$tema"))
{
	unlink("../tema/$tema");
} 

$koneksi->query("DELETE FROM kategori WHERE id_kategori='$_GET[id]'");
$koneksi->query("DELETE FROM subkategori WHERE id_kategori='$_GET[id]'");

echo "<script>alert('Kategori terhapus');</script>";
echo "<script>location='index.php?halaman=kategori';</script>";

?>