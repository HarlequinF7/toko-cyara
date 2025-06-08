<?php

$ambilfoto=$koneksi->query("SELECT *FROM produk_foto WHERE id_produk='$_GET[id]'");
while($detailfoto=$ambilfoto->fetch_assoc()){
$fotoproduk=$detailfoto["nama_produk_foto"];
	if (file_exists("../foto_produk/$fotoproduk"))
	{
		unlink("../foto_produk/$fotoproduk");
	} 
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");
$koneksi->query("DELETE FROM produk_foto WHERE id_produk='$_GET[id]'");

echo "<script>alert('produk terhapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";

?>