<?php 
error_reporting(0);
	include 'koneksi.php'; 
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
?> 
<?php 
$username =$_COOKIE["email_pelanggan"];
$passs    =$_COOKIE["password_pelanggan"];
$namapelanggan    =$_COOKIE["nama_pelanggan"];
$idp    =$_COOKIE["id_pelanggan"];
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
	<meta name="url" content="<?php echo $toko1['domain'] ?>">
	<meta name=”robots” content="index, follow">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:sitename" content="<?php echo $toko1['namatoko'] ?>">
	<meta property="og:title" content="<?php echo $toko1['namatoko'] ?>">
	<meta property="og:url" content="<?php echo $toko1['domain'] ?>">
	<meta property="og:image" content="fotoprofil/<?php echo $toko1['fotoprofil'] ?>">
	
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
	<!-- Header -->
	<?php include 'header.php'; ?>
	<!--/ End Header -->
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>


	<?php include 'menukategori.php' ?>

	<!-- end menu kategori gambar -->
	
	<!-- Start Small Banner  -->
	
	<!-- End Small Banner -->
	
	
	<!-- Start Midium Banner  -->
	
	<!-- End Midium Banner -->
	
	<!-- semua produk -->
	<div class="container" >
		<div class="row" >
			<div class="col-12">
				<div class="section-title" style="margin-bottom:  0px">
					<h2>Semua Produk</h2>
				</div>
			</div>
		</div>
		<div class="row" id="ajaxproduk" >
			
			
		</div>
	</div>
	<script type="text/javascript">
  $(document).ready(function(){
   var flag = 0;

   $.ajax({
    type: "GET",
    url: "get_data.php",
    data: {
     'offset':0,
     'limit':12
    },
    success: function(data) {
     $('#ajaxproduk').append(data);
     flag +=12;
    }
   });

   $(window).scroll(function(){
    if($(window).scrollTop() >= $(document).height() - $(window).height()-1000) {
     $.ajax({
      type: "GET",
      url: "get_data.php",
      data: {
       'offset':flag,
       'limit':12
      },
      success: function(data) {
       $('#ajaxproduk').append(data);
       flag +=12;
      }
     });
    }
   });
  });

 </script>
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