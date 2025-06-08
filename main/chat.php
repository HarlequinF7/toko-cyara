<?php 
include 'koneksi.php';
	$id_produk=$_POST['id_produk'];
    $komentar=$_POST['komentar'];
    date_default_timezone_set("Asia/Jakarta");
    $tgl_komentar=date("Y-m-d H:i:s"); 

    $koneksi->query("INSERT INTO komentar (id_produk, komentar, tgl_komentar, nama, userip) VALUES ('$id_produk', '$komentar', '$tgl_komentar', 'Admin', '0')");
    echo "<script> alert('Komentar Sudah Dijawab');</script>";
    echo "<script> location ='index?halaman=komentar';</script>";



 ?>