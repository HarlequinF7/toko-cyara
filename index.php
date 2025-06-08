<?php 
error_reporting(0);
	include 'koneksi.php'; 
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
?> 
<?php 
$domain="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

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
	<!-- Title Tag  -->
    <title><?php echo $toko1['namatoko'] ?></title>
	<!-- Favicon -->
	<meta name="title" content="<?php echo $toko1['namatoko'] ?>">
	<meta name="description" content="<?php echo $toko1['diskripsi'] ?>">
	<meta name="url" content="<?php echo $domain ?>">
	<meta name=”robots” content="index, follow">
	<meta name="image" content="<?= $gmbr['tema'] ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:sitename" content="<?php echo $toko1['namatoko'] ?>">
	<meta property="og:title" content="<?php echo $toko1['namatoko'] ?>">
	<meta property="og:url" content="<?php echo $domain ?>">
	<meta property="og:image" content="<?= $gmbr['tema'] ?>">
	
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
    
    <style type="text/css">
			.header.shop .middle-inner
			{
				background: <?= $toko1['backgroundaktif'] ?>;
				border-top: 0px;
			}
			.header.sticky .header-inner .nav li a
			{
				color: <?= $toko1['warnamenu'] ?>;
			}
			.header.shop .header-inner{
				background: <?= $toko1['warnaheader'] ?>;
			}

			.header.shop .nav li a
			{
				color: <?= $toko1['warnamenu'] ?>;
			}
			@media (max-width: 500px){
				.header.shop .middle-inner
				{
					
					box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3);
				}
			}
		</style>



    <script src="js/jquery.min.js"></script>
	<?php

	session_start();
	$dat=array();
	$amb= $koneksi->query("SELECT * FROM kategori");
	while($tia=$amb->fetch_assoc())
	{
	  $dat[]=$tia;
	}

	$dt=array();
	$jupuk= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk WHERE id_kategori=10 AND diskon !=1 GROUP BY nama_produk");
	while($murah=$jupuk->fetch_assoc())
	{
	  $dt[]=$murah;
	}
	?>

<?php if ($toko1['kanan']==1): ?>
<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<?php else: ?>			
<?php endif ?>	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index"><img src="fotoprofil/<?php echo $toko1['fotoprofil'] ?>" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form" method="post" action="cari">
									<input type="text"  name="item" placeholder="Cari Produk">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form method="post" action="cari">
									<input name="item" placeholder="Cari Produk" type="text">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="profil" class="single-icon"><i class="ti-user" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="keranjang" class="single-icon"><i class="ti-bag"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Header Inner -->
		<div class="header-inner" >
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									
									<li class="main-mega"><a href="#">Menu Terbaru<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<?php $baru= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk GROUP BY produk_foto.id_produk ORDER BY tanggal DESC LIMIT 3");
												while($baru1=$baru->fetch_assoc()){
												$idk=$baru1['id_kategori']; ?>
												<?php $kat= $koneksi->query("SELECT * FROM kategori WHERE id_kategori ='$idk'");
												$kate=$kat->fetch_assoc(); 
												$judul = preg_replace("/\s/","-",$baru1['nama_produk']);
                              				$url_link = "produkdetail".$baru1['id_produk']."-".$judul.".html";?>	
											<li class="single-menu">
												<a href="#" class="title-link"><?php echo $kate['nama_kategori'] ?></a>
												<a href="<?php echo $baru1['slug'] ?>"><div class="image">
													<?php if ($baru1['url']==''): ?>
													<img src="foto_produk/<?php echo $baru1['nama_produk_foto'] ?>" style="max-height: 150px" alt="#">
													<?php else: ?>
													<img src="<?php echo $baru1['url'] ?>" style="max-height: 150px" alt="#">
													<?php endif ?>
												</div></a>
												<div class="inner-link">
													<a href="<?php echo$baru1['slug']  ?>"><element><?php echo $baru1['nama_produk'] ?></element></a>
												</div>
											</li>
											<?php } ?>
										</ul>
									</li>
									<?php $tok=$koneksi->query("SELECT * FROM kategori LIMIT 8");
									 while($tok1=$tok->fetch_assoc()){
									 $hal = preg_replace("/\s/","-",$tok1['nama_kategori']);
			                         $halam = "kategori".$tok1['id_kategori']."-".$hal.".html"; 
									 ?>
									<li><a href="<?php echo $halam ?>"><?php echo $tok1['nama_kategori'] ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#">Kategori<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<?php foreach ($dat as $key => $v): ?>
															<?php $j = preg_replace("/\s/","-",$v['nama_kategori']);
						                              		$l = "kategori".$v['id_kategori']."-".$j.".html"; ?>
															<li><a href="<?php echo $l ?>"><?php echo $v['nama_kategori'] ?></a></li>
															<?php endforeach ?> 
														</ul>
													</li>
													<li><a href="keranjang">Keranjang</a></li>
													<li><a href="https://cyaraafnan.my.id">Artikel</a></li>
													<li><a href="#">Akun<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="profil">Profil</a></li>
															<?php if (isset($username)): ?>
															<li><a href="logout">Logout</a></li>	
															<?php else: ?>
															<li><a href="login">Login</a></li>
															<li><a href="login">Register</a></li>
															<?php endif ?>
														</ul>
													</li>
													<li><a href="#">Informasi Toko<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<?php $tok=$koneksi->query("SELECT * FROM halaman");
															 while($tok1=$tok->fetch_assoc()){
															 $hal = preg_replace("/\s/","-",$tok1['halaman']);
									                         $halaman = "halaman".$tok1['id']."-".$hal.".html"; 
															 ?>
															<li><a href="<?php echo $halaman ?>"><?php echo $tok1['halaman'] ?></a></li>
														<?php } ?>
														</ul>
													</li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<div class="col-lg-9 offset-lg-3 col-12">			
		<?php include 'slider.php' ?>		
	</div>						
	<!--/ End Slider Area -->
	<!-- start Menu Kategori gambar -->
	<br>

	<?php include 'menukategori.php' ?>

	<!-- end menu kategori gambar -->
	
	<!-- Start Small Banner  -->
	
	<!-- End Small Banner -->
	
	
	<!-- Start Midium Banner  -->
	
	<!-- End Midium Banner -->
	<!-- Start Product Area -->
    <div class="product-area section" style="padding-top: 0px">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Produk Pilihan</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Terbaru</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Termurah</a></li>

								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<?php if ($toko1['tampilan']=='1'): ?>
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<?php
											$terlaris= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk GROUP BY nama_produk ORDER BY produk.id_produk DESC LIMIT 16");
											while($laris=$terlaris->fetch_assoc()){
											$dskn = $laris['diskon']; 
											$hrg= $laris['harga_produk'];
											$jumlahkarakter= strlen($dskn);
								            if ($jumlahkarakter>3) {
								                $psn=$dkn;
								            }else{
											$psn = ($dskn/100)*$hrg;
								            }
											$hrgadskon=$hrg-$psn;
											$judul = preg_replace("/\s/","-",$laris['nama_produk']);
                              				$url_link = "produkdetail".$laris['id_produk']."-".$judul.".html";
											?>
											<div class="col-xl-6 col-lg-6 col-md-6 col-12">
												<div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%; margin: 5px; ">
													<div class="row" >
														<div class="col-xl-6 col-lg-6 col-md-6 col-6">
															<div class="product-img">
																<a href="<?php echo $laris['slug'] ?>">
																	<?php if ($laris['url']==''): ?>
																	<img class="default-img" src="foto_produk/<?php echo $laris['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
																	<img class="hover-img" src="foto_produk/<?php echo $laris['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
																	<?php else: ?>
																	<img class="default-img" src="<?php echo $laris['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
																	<img class="hover-img" src="<?php echo $laris['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">	
																	<?php endif ?>
																	<?php if ($dskn=='0'): ?>
																	<?php elseif($jumlahkarakter>3): ?> 
										                            <span class="out-of-stock">Diskon Rp.<?php echo $dskn ?></span>
										                            <?php else: ?>
										                            <span class="out-of-stock">Diskon <?php echo $dskn ?>%</span>
																	<?php endif ?>
																</a>
															</div>
														</div>							
														<div class="col-xl-6 col-lg-6 col-md-6 col-6">
															<div class="product-content" style="margin: 5px;" >
																<h3><a href="<?php echo $laris['slug'] ?>" style="font-size: 18px"><?php echo $laris['nama_produk'] ?></a></h3>
																<p><?php echo substr($laris['deskripsi_produk'], 0,30)   ?></p>
																<div class="product-price" >
																	<?php if ($dskn=='0'): ?>
																	<span style="font-size: 22px">Rp.<?php echo $hrg ?></span>
																	<?php else: ?>
																	<span class="old" style="font-size: 22px;">Rp.<?php echo $hrg ?></span>
																	<span style="font-size: 22px">Rp.<?php echo $hargadiskon ?></span>
																	<?php endif ?>
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>
			
											<?php } ?>
											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<?php
											$termurah= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk GROUP BY nama_produk ORDER BY harga_produk ASC LIMIT 16");
											while($murah=$termurah->fetch_assoc()){
											$dkn = $murah['diskon']; 
											$hr= $murah['harga_produk'];
											$jumlahkarakter= strlen($dkn);
								            if ($jumlahkarakter>3) {
								                $hasilkurang1=$dkn;
								            }else{
											$hasilkurang1 = ($dkn/100)*$hr;
								            }
											$hrgdskn=$hr-$hasilkurang1;
											$judul1 = preg_replace("/\s/","-",$murah['nama_produk']);
                              				$url = "produkdetail".$murah['id_produk']."-".$judul1.".html";
											?>
											<div class="col-xl-6 col-lg-6 col-md-6 col-12">
												<div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%; margin: 5px;">
													<div class="row" >
														<div class="col-xl-6 col-lg-6 col-md-6 col-6">
															<div class="product-img">
																<a href="<?php echo $murah['slug'] ?>">
																	<?php if ($murah['url']==''): ?>
																	<img class="default-img" src="foto_produk/<?php echo $murah['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
																	<img class="hover-img" src="foto_produk/<?php echo $murah['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
																	<?php else: ?>
																	<img class="default-img" src="<?php echo $murah['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
																	<img class="hover-img" src="<?php echo $murah['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">	
																	<?php endif ?>
																	<?php if ($dkn=='0'): ?>
																	<?php elseif($jumlahkarakter>3): ?> 
										                            <span class="out-of-stock">Diskon Rp.<?php echo $dkn ?></span>
										                            <?php else: ?>
										                            <span class="out-of-stock">Diskon <?php echo $dkn ?>%</span>
																	<?php endif ?>
																</a>
															</div>
														</div>							
														<div class="col-xl-6 col-lg-6 col-md-6 col-6">
															<div class="product-content" style="margin: 5px;" >
																<h3><a href="<?php echo $murah['slug'] ?>" style="font-size: 18px"><?php echo $murah['nama_produk'] ?></a></h3>
																<p><?php echo substr($murah['deskripsi_produk'], 0,30)   ?></p>
																<div class="product-price" >
																	<?php if ($dkn=='0'): ?>
																	<span style="font-size: 22px">Rp.<?php echo $hr ?></span>
																	<?php else: ?>
																	<span class="old" style="font-size: 22px;">Rp.<?php echo $hr ?></span>
																	<span style="font-size: 22px">Rp.<?php echo $hrgdskn ?></span>
																	<?php endif ?>
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>
			
											<?php } ?>
											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->	
								<?php else: ?>	
								
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<?php
											$terlaris= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk GROUP BY nama_produk ORDER BY produk.id_produk DESC LIMIT 16");
											while($laris=$terlaris->fetch_assoc()){
											$dskn = $laris['diskon']; 
											$hrg= $laris['harga_produk'];
											$jumlahkarakter= strlen($dskn);
								            if ($jumlahkarakter>3) {
								                $psn=$dskn;
								            }else{
											$psn = ($dskn/100)*$hrg;
								            }
											
											$hrgadskon=$hrg-$psn;
											$judul = preg_replace("/\s/","-",$laris['nama_produk']);
                              				$url_link = "produkdetail".$laris['id_produk']."-".$judul.".html";
											?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-6">
												<div class="single-product"  style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%; ">
													<div class="product-img">
														<a href="<?php echo $laris['slug'] ?>">
															<?php if ($laris['url']==''): ?>
															<img class="default-img" src="foto_produk/<?php echo $laris['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
															<img class="hover-img" src="foto_produk/<?php echo $laris['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
															<?php else: ?>
															<img class="default-img" src="<?php echo $laris['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
															<img class="hover-img" src="<?php echo $laris['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">
															<?php endif ?>
															<?php if ($dskn=='0'): ?>
															<?php elseif($jumlahkarakter>3): ?> 
								                            <span class="out-of-stock">Diskon Rp.<?php echo $dskn ?></span>
								                            <?php else: ?>
								                            <span class="out-of-stock">Diskon <?php echo $dskn ?>%</span>
															<?php endif ?>
														</a>
														
													</div>
													<div class="product-content" style="margin: 5px">
														
														<h3><a href="<?php echo $laris['slug'] ?>" style="font-size: 18px"><?php echo $laris['nama_produk'] ?></a></h3>
														<p><?php echo substr($laris['deskripsi_produk'], 0,30)   ?></p>
														<div class="product-price" >
															<?php if ($dskn=='0'): ?>
															<span style="font-size: 22px">Rp.<?php echo $hrg ?></span>
															<?php else: ?>
															<span class="old" style="font-size: 22px;">Rp.<?php echo $hrg ?></span>
															<span style="font-size: 22px">Rp.<?php echo $hrgadskon ?></span>
															<?php endif ?>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
								    <div class="tab-single">
								        <div class="row">
								            <?php
								            $termurah = $koneksi->query("SELECT * FROM produk 
								                JOIN produk_foto ON produk.id_produk = produk_foto.id_produk 
								                GROUP BY nama_produk 
								                ORDER BY harga_produk ASC 
								                LIMIT 16");

								            while($murah = $termurah->fetch_assoc()) {
								                // Validasi nilai numerik
								                $dkn = isset($murah['diskon']) && is_numeric($murah['diskon']) ? floatval($murah['diskon']) : 0;
								                $hr = isset($murah['harga_produk']) && is_numeric($murah['harga_produk']) ? floatval($murah['harga_produk']) : 0;

								                // Hitung diskon
								                $jumlahkarakter = strlen((string)$dkn);
								                if ($jumlahkarakter > 3) {
								                    $psna = $dkn;
								                } else {
								                    $psna = ($dkn / 100) * $hr;
								                }

								                $hrgdskn = $hr - $psna;

								                // Slug dan URL
								                $judul1 = preg_replace("/\s+/", "-", $murah['nama_produk']);
								                $url = "produkdetail" . $murah['id_produk'] . "-" . $judul1 . ".html";
								            ?>
								            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
								                <div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%;">
								                    <div class="product-img">
								                        <a href="<?php echo $murah['slug'] ?>">
								                            <?php if ($murah['url'] == ''): ?>
								                                <img class="default-img" src="foto_produk/<?php echo $murah['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
								                                <img class="hover-img" src="foto_produk/<?php echo $murah['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
								                            <?php else: ?>
								                                <img class="default-img" src="<?php echo $murah['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
								                                <img class="hover-img" src="<?php echo $murah['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
								                            <?php endif ?>

								                            <?php if ($dkn > 0): ?>
								                                <?php if ($jumlahkarakter > 3): ?>
								                                    <span class="out-of-stock">Diskon Rp.<?php echo number_format($dkn, 0, ',', '.') ?></span>
								                                <?php else: ?>
								                                    <span class="out-of-stock">Diskon <?php echo $dkn ?>%</span>
								                                <?php endif ?>
								                            <?php endif ?>
								                        </a>
								                    </div>

								                    <div class="product-content" style="margin: 5px">
								                        <h3>
								                            <a href="<?php echo $murah['slug'] ?>" style="font-size: 18px"><?php echo $murah['nama_produk'] ?></a>
								                        </h3>
								                        <p><?php echo substr($murah['deskripsi_produk'], 0, 30) ?></p>
								                        <div class="product-price">
								                            <?php if ($dkn == 0): ?>
								                                <span style="font-size: 22px">Rp.<?php echo number_format($hr, 0, ',', '.') ?></span>
								                            <?php else: ?>
								                                <span class="old" style="font-size: 22px;">Rp.<?php echo number_format($hr, 0, ',', '.') ?></span>
								                                <span style="font-size: 22px">Rp.<?php echo number_format($hrgdskn, 0, ',', '.') ?></span>
								                            <?php endif ?>
								                        </div>
								                    </div>
								                </div>
								            </div>
								            <?php } ?>
								        </div>
								    </div>
								</div>

								<?php endif ?>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- semua produk -->
	
	<!-- akhir semua produk -->
	<br>
	<!-- Start Footer Area -->
	<?php include 'footer.php' ?>
	<!-- /End Footer Area -->
 	<!-- navbar bawah -->
 	<?php include 'menu.php'; ?>
 	<!-- navbar bawah end -->
	<!-- Jquery -->
	<!-- ajax  -->
	
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
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
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
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