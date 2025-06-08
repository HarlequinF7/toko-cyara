<?php 


$koneksi->query("DELETE FROM subkategori WHERE id_subkategori='$_GET[id]'");

echo "<script>alert('SubKategori terhapus');</script>";
echo "<script>location='index.php?halaman=subkategori';</script>";

?>