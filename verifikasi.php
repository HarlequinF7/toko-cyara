<?php include 'koneksi.php'; ?>
<?php $koneksi->query("UPDATE pelanggan SET status='aktif' WHERE id_pelanggan='$_GET[id]'");
	echo "<script>alert('Selamat Akun Anda telah terverikasi');</script>";
	echo "<script>location='login';</script>"; ?>