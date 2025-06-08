<?php session_start(); 
error_reporting(0);
	include 'koneksi.php';
$username =$_COOKIE["email_pelanggan"];
$passs    =$_COOKIE["password_pelanggan"];
$namapelanggan    =$_COOKIE["nama_pelanggan"];
$id_pelanggan    =$_COOKIE["id_pelanggan"];
$domain="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$urlweb =$domain;
$user_ip=$_SERVER['REMOTE_ADDR'];

$slug=mysqli_real_escape_string($koneksi,$_GET["id"]);
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
$brg= $koneksi->query("SELECT * FROM  produk WHERE slug='$slug'");
$produk=$brg->fetch_assoc();
$id_produk=$produk['id_produk'];

$namabrg = $produk['nama_produk'];
$kategoribrg = $produk['id_kategori']; 
$bati= $produk['harga_produk'];
$laba = $produk['diskon'];
$jumlahkarakter= strlen($laba);
if ($jumlahkarakter>3) {
    $duit=$laba;
}else{
$duit = ($laba/100)*$bati ;
}
$diskonharga=$bati-$duit;

$gambar= $koneksi->query("SELECT * FROM  produk_foto  WHERE id_produk='$id_produk'");
$gambar1=$gambar->fetch_assoc();
 
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $toko1['namatoko'] ?> | <?php echo $namabrg ?></title>
	<meta name="title" content="<?php echo $namabrg ?>">
	<meta name="url" content="<?php echo $urlweb ?>">
	<?php if ($gambar1['url']==''): ?>
	<meta name="image" content="foto_produk/<?= $gambar1['nama_produk_foto'] ?>">
	<?php else: ?>
	<meta name="image" content="<?= $gambar1['url'] ?>">
	<?php endif ?>
	<meta name=”robots” content="index, follow">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:sitename" content="<?php echo $toko1['namatoko'] ?>">
	<meta property="og:title" content="<?php echo $namabrg ?>">
	<meta property="og:url" content="<?php echo $urlweb ?>">
	<?php if ($gambar1['url']==''): ?>
	<meta property="og:image" content="foto_produk/<?= $gambar1['nama_produk_foto'] ?>">
	<?php else: ?>	
	<meta property="og:image" content="<?= $gambar1['url'] ?>">
	<?php endif ?>
	<meta property="article:author" content="https://www.facebook.com/stevan.jzl">

	<!-- Title Tag  -->
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="fotoprofil/<?php echo $toko1['favicon'] ?>">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="wa.css">




    <script src="js/jquery.min.js"></script>
	<?php


	date_default_timezone_set("Asia/Jakarta");
    $tgl_komentar=date("Y-m-d H:i:s"); 
	$dat=array();
	$amb= $koneksi->query("SELECT * FROM kategori ");
	while($tia=$amb->fetch_assoc())
	{
	  $dat[]=$tia;
	}

	$dt=array();
	$jupuk= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk WHERE id_kategori=10 GROUP BY nama_produk");
	while($setiap=$jupuk->fetch_assoc())
	{
	  $dt[]=$setiap;
	}
	?>

	<?php 
	 //cek apakah sudah dikunjungi oleh ip address diatas
	  $check_ip = $koneksi->query("SELECT userip from view where id_produk='$id_produk' and userip='$user_ip'");
	  if($check_ip->num_rows>=1)
	  { 
	  }
	  else
	  {
	    //jika belum dikunjungi oleh ip address user diatas akan melakukan perhitungan
	   $koneksi->query("INSERT INTO view (userip, id_produk, tgl) values('$user_ip','$id_produk', '$tgl_komentar')");
	   $koneksi->query("UPDATE produk set views = views+1 where id_produk='$id_produk' ");
	  }
	 ?>
	
</head>
<body class="js">
	
	
	
	
	<!-- Header -->
	<?php include 'header.php'; ?>
	<!--/ End Header -->
		<br>
	<!-- Start Product Area -->
    <?php include 'sliderproduk.php' ?>
	<!-- End Product Area -->
	<!-- Produk terkait -->
	<div class="product-area most-popular section" style="padding-top: 10px">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Produk Terkait</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<?php 
						$datamakanan=array();
						$makanan=$koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk WHERE  id_kategori='$kategoribrg' GROUP BY nama_produk LIMIT 10"); 
						while($makanan1=$makanan->fetch_assoc()){
							$datamakanan[]=$makanan1;
						}
						?>
						<?php foreach ($datamakanan as $key => $makan): ?>
						<?php $gebyar = $makan['diskon']; 
						$rego= $makan['harga_produk'];
						$jumlahkarakter= strlen($gebyar);
						if ($jumlahkarakter>3) {
						    $persenan=$gebyar;
						}else{
						$persenan = ($gebyar/100)*$rego ;
						}
						$totaldiskon=$rego-$persenan;
						$judul3 = preg_replace("/\s/","-",$makan['nama_produk']);
                        $url2 = "produkdetail".$makan['id_produk']."-".$judul3.".html";
						?>
						<div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%; margin: 10px;">

							<div class="product-img">
								<a href="<?php echo $makan['slug'] ?>">
									<?php if ($makan['url']==''): ?>
									<img class="default-img" src="foto_produk/<?php echo $makan['nama_produk_foto'] ?>" style="width: 100%;  max-height: 200px " alt="#" >
									<img class="hover-img" src="foto_produk/<?php echo $makan['nama_produk_foto'] ?>" style="width: 100%; max-height: 200px " alt="#">
									<?php else: ?>
									<img class="default-img" src="<?php echo $makan['url'] ?>" style="width: 100%;  max-height: 200px " alt="#" >
									<img class="hover-img" src="<?php echo $makan['url'] ?>" style="width: 100%; max-height: 200px " alt="#">	
									<?php endif ?>
									<?php if ($gebyar=='0'): ?>
									<?php elseif($jumlahkarakter>3): ?>	
									<span class="out-of-stock">Diskon Rp.<?php echo $gebyar ?></span>
									<?php else: ?>
									<span class="out-of-stock">Diskon <?php echo $gebyar ?>%</span>
									<?php endif ?>
									
								</a>
								
							</div>
							<div class="product-content" style="margin:5px">
								<h3><a href="<?php echo $makan['slug'] ?>" style="font-size: 18px"><?php echo $makan['nama_produk'] ?></a></h3>
								<p><?php echo substr($makan['deskripsi_produk'], 0,30) . '...';  ?></p>
								<div class="product-price">
									<?php if ($gebyar=='0'): ?>
									<span style="font-size: 18px">Rp.<?php echo $rego ?></span>
									<?php else: ?>
									<span class="old" style="font-size: 18px">Rp.<?php echo $rego ?></span>
									<span style="font-size: 18px">Rp.<?php echo $totaldiskon ?></span>
									<?php endif ?>
								</div>
							</div>
						</div>
						<?php endforeach ?>
						<!-- End Single Product -->
						
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- End Product Area -->
	<br>
	<!-- semua produk -->
	
	<input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
<label class='chatButton' for='offchatMenu'>
  <svg class='svg-1' viewBox='0 0 32 32'><g><path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path><path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path></g></svg>
  <svg class='svg-2' viewBox='0 0 512 512'><path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path></svg>
</label>

<div class='chatBox'>
  <div class='chatContent'>
    <div class='chatHeader'>
      <svg viewbox='0 0 32 32'><path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path><rect height='2' width='2' x='19' y='9'></rect><rect height='2' width='2' x='14' y='9'></rect><rect height='2' width='2' x='24' y='9'></rect><path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path></svg>
      <div class='chatTitle'>Silahkan chat dengan tim kami <span>Untuk Menanyakan Atau Memesan Produk</span></div>
    </div>
    <div class='chatText'>
      <span>Halo, Ada yang bisa kami bantu?</span>
      <span class='typing'>...</span>
    </div>
  </div>
  
  <a class='chatStart' href='https://api.whatsapp.com/send?phone=<?php echo $toko1['telepon'] ?>&text=Assalamualaikum%2C%20
Saya%20ingin%20menanyakan%20produk%20<?= $urlweb ?>' rel='nofollow noreferrer' target='_blank'>
    <span>Mulai chat...</span>        
  </a>
</div>
	<!-- akhir semua produk -->
	<!-- Modal end -->

	<!-- Start Footer Area -->
	<?php include 'footer.php'; ?>
	<!-- /End Footer Area -->
 	<!-- ajax  -->

	<!-- Jquery -->

    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>