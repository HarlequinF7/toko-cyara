<?php 
session_start(); 
error_reporting(0);
$username =$_COOKIE["email_pelanggan"];
$passs    =$_COOKIE["password_pelanggan"];
$namapelanggan    =$_COOKIE["nama_pelanggan"];
$idp    =$_COOKIE["id_pelanggan"];
include 'koneksi.php';
$toko=$koneksi->query("SELECT * FROM toko");
	$toko1=$toko->fetch_assoc();
?>
<?php $titik=$toko1['titik'] ?>
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
	<link rel="stylesheet" href="js/leaflet/leaflet.css">
    
    <script src="js/jquery.min.js"></script>

	<?php
	$id =$_GET['id'];
	$dat=array();
	$amb= $koneksi->query("SELECT * FROM kategori ");
	while($tia=$amb->fetch_assoc())
	{
	  $dat[]=$tia;
	}

	?>
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header -->
	<?php include 'header.php'; ?>
	<!--/ End Header -->

	<section class="shop-services section" style="padding-top: 0px">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h4 style="margin-bottom: 10px; border-bottom: 5px solid red; padding: 5px;">INFORMASI TOKO</h4>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p class="text">Alamat Toko : <?php echo $toko1['alamat'] ?>, <?php echo $toko1['tipe'] ?> <?php echo $toko1['distrik'] ?></p>
			</div>
		</div>
	</section>
	<!-- Start Product Area -->

<br><br><br><br>

<!-- footer -->
		
		<?php include 'menu.php'; ?>
		<!-- footer -->
	
	<!-- /End Footer Area -->
 
	<!-- Jquery -->

	<script src="js/leaflet/leaflet.js"></script>
	<script>
	    if (document.getElementById("maps-view-absen")) {
	        var map = L.map('maps-view-absen').setView([<?php echo $titik; ?>], 15);

	        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> Djazuli Ahmad'
	        }).addTo(map);

	        L.marker([<?php echo $titik; ?>]).addTo(map);
	    }
	</script>
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