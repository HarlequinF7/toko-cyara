<?php
error_reporting(0); 
session_start();

 
include 'koneksi.php';

$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc(); 
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
		.qty {
		    display: inline-block;
		    width: 100px;
		    font-size: 0;
		}

		button.btn-minus {
		    border-radius: 4px 0 0 4px;
		}

		button.btn-plus {
		    border-radius: 0 4px 4px 0;
		}

		button.btn-cart {
		    width: auto;
		}

			.cart .coupon {
		    position: relative;
		    width: 100%;
		    margin-bottom: 15px;
		    font-size: 0;
		}

		.cart .coupon input {
		    width: calc(100% - 135px);
		    height: 40px;
		    padding: 0 15px;
		    font-size: 16px;
		    color: #999999;
		    background: #ffffff;
		    border: 1px solid #dddddd;
		    border-radius: 4px;
		    margin-right: 15px;
		    transition: all .3s;
		}

		.cart .coupon input:focus {
		    border-color: #FF6F61;
		}

		.cart .coupon button {
		    width: 120px;
		    height: 40px;
		    padding: 2px 0;
		    font-size: 16px;
		    text-align: center;
		    color: #FF6F61;
		    background: #ffffff;
		    border: 1px solid #FF6F61;
		    border-radius: 4px;
		}

		.cart .coupon button:hover {
		    color: #ffffff;
		    background: #FF6F61;
		}

		.cart .cart-summary {
		    position: relative;
		    width: 100%;
		}

		.cart .cart-summary .cart-content {
		    padding: 30px;
		    background: #f3f6ff;
		}

		.cart .cart-summary .cart-content h1 {
		    font-size: 22px;
		    margin-bottom: 20px;
		}

		.cart .cart-summary .cart-content p span,
		.cart .cart-summary .cart-content h2 span {
		    float: right;
		}

		.cart .cart-summary .cart-content h2 {
		    font-size: 20px;
		    font-weight: 600;
		    padding-top: 12px;
		    border-top: 1px solid #dddddd;
		    margin: 0;
		}

		.cart .cart-summary .cart-btn button {
		    margin-top: 15px;
		    width: calc(50% - 15px);
		    height: 50px;
		    padding: 2px 10px;
		    text-align: center;
		    color: #ffffff;
		    background: #FF6F61;
		    border: none;
		    border-radius: 4px;
		}

		.cart .cart-summary .cart-btn button:hover {
		    color: #FF6F61;
		    background: #000000;
		}

		.cart .cart-summary .cart-btn button:first-child {
		    margin-right: 25px;
		    color: #FF6F61;
		    background: #ffffff;
		    border: 1px solid #FF6F61;
		}

		.cart .cart-summary .cart-btn button:first-child:hover {
		    color: #ffffff;
		    background: #FF6F61;
		}
		
    </style>
    <script src="js/jquery.min.js"></script>
	<?php
	$dat=array();
	$amb= $koneksi->query("SELECT * FROM kategori ");
	while($tia=$amb->fetch_assoc())
	{
	  $dat[]=$tia;
	}

	?>
</head>
<body class="js">
	

	<!-- Header -->
	<?php include 'header.php'; ?>
	<!--/ End Header -->

	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h4 style="margin-bottom: 10px; border-bottom: 5px solid red; padding: 5px;">KERANJANG BELANJA</h4>
				</div>
			</div>
			<?php if (empty($_SESSION["keranjang"])): ?>
			<div class="alert alert-danger"><strong>Keranjang Masih Kosong</strong></div><br>
			<?php endif ?>
			
			<?php $tota=0; ?>
			<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>
			<?php
			
			$ambil= $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk' ");
			$pecah=$ambil->fetch_assoc();
			$am = $koneksi->query("SELECT * FROM produk_foto WHERE id_produk='$id_produk' GROUP BY id_produk");
			$pec =$am->fetch_assoc();
        
			$berat=$pecah["berat_produk"];
			$price= $pecah['harga_produk'];
			
			
			$totalharga=$price*$jumlah;
			$judul3 = preg_replace("/\s/","-",$pecah['nama_produk']);
            $url2 = "produkdetail".$pecah['id_produk']."-".$judul3.".html";
            ?>
			
					
			<?php $tota+=$totalharga ?>
			
			

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" padding: 5px;box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%">
					<div class="row" >
						<div class="col-lg-7 col-md-7 col-12" style="margin-top: 10px; ">
							<div class="row" >
								<div class="col-lg-3 col-md-3 col-3">
							<!-- Start Single Service -->
									<div class="img">
										<?php if ($pec['url']==''): ?>
				                        <a href="#"><img src="foto_produk/<?php echo $pec['nama_produk_foto'] ?>" style="width: 100%" alt="Image"></a>
										<?php else: ?>
				                        <a href="#"><img src="<?php echo $pec['url'] ?>" style="width: 100%" alt="Image"></a>
										<?php endif ?>
				                    </div>
									<!-- End Single Service -->
								</div>
								<div class="col-lg-9 col-md-9 col-9"  >
								<!-- Start Single Service -->
									<div class="title">
										<h6><?php echo $pecah['nama_produk'] ?></h6>
									</div>

				                    <h6 style="color: red" value="" ><b>Harga : Rp.<?php echo $price ?></b></h6>
				                    <p><b>Jumlah Produk <?php echo $jumlah ?></b></p>
									<!-- End Single Service -->
								</div>
								
							</div>
						</div>
					
						<div class="col-lg-5 col-md-5 col-12" style="margin-top: 10px; ">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-4" align="left">
								<!-- Start Single Service -->
									<p>Total Harga</p>
									<h6>Rp.<?php echo $totalharga ?></h6>
									<!-- End Single Service -->
								</div>
								<div class="col-lg-8 col-md-8 col-8" align="right" >
									<!-- Start Single Service -->
									<a href="<?php echo $pecah['url'] ?>" class="btn primary-btn" style="background-color: blue; padding: 5px; color: white">BELI</a>
									<a  href="hapuskeranjang?id=<?php echo $id_produk ?>" class="btn primary-btn" style="background-color: red; padding: 5px; color: white">HAPUS</a>
									<!-- End Single Service -->
								</div>	
							</div>
							<!-- Start Single Service -->
							
							<!-- End Single Service -->
						</div>
					</div>
				</div>
					
				<br>
				<?php  endforeach ?>
			
		</div>
	</section>
	<!-- Start Product Area -->
<br><br><br><br><br>	
    
	<br>
	
	<!-- Start Footer Area -->
	<?php include 'footer.php' ?>
	<!-- /End Footer Area -->
 	<!-- navbar bawah -->
 	<?php include 'menu.php'; ?>
 	<!-- navbar bawah end -->
 
	<!-- Jquery -->

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