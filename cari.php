<?php session_start();
error_reporting(0);
$username =$_COOKIE["email_pelanggan"];
$passs    =$_COOKIE["password_pelanggan"];
$namapelanggan    =$_COOKIE["nama_pelanggan"];
$idp    =$_COOKIE["id_pelanggan"];
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
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

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




    <script src="js/jquery.min.js"></script>
    <?php
	$dat=array();
	$amb= $koneksi->query("SELECT * FROM kategori ");
	while($tia=$amb->fetch_assoc())
	{
	  $dat[]=$tia;
	}
	$keyword = htmlspecialchars($_POST["item"]);
	$setiapp = array();
	$jupuk=$koneksi->query("SELECT*FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk WHERE nama_produk LIKE '%$keyword%' OR deskripsi_produk LIKE '%$keyword%' GROUP BY nama_produk");
	while($setiapda=$jupuk->fetch_assoc())
	{
		$setiapp[]=$setiapda;
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
    <?php include 'menukategori.php' ?>
    <!--/ End Header -->
    <br>
    <!-- Start Product Area -->
    <div class="container">
        <div class="row">
            <h3 style="margin-bottom: 10px; border-bottom: 5px solid red; padding: 2px;">Hasil Pencarian :
                <?php echo $keyword ?></h3>
        </div>
        <?php if (empty($setiapp)): ?>
        <div class="alert alert-danger">Produk <strong><?php echo $keyword ?></strong> Tidak Ditemukan</div><br>
        <?php endif ?>
        <div class="row">

            <?php foreach ($setiapp as $key => $setiap): ?>
            <?php
			$kurangi1 = $setiap['diskon']; 
			$price1= $setiap['harga_produk'];
            $jumlahkarakter= strlen($kurangi1);
            if ($jumlahkarakter>3) {
                $hasilkurang1=$kurangi1;
            }else{
			$hasilkurang1 = ($kurangi1/100)*$price1;
            }
			$totalkurang1=$price1-$hasilkurang1;
			$judul1 = preg_replace("/\s/","-",$setiap['nama_produk']);
                        $url1 = "produkdetail".$setiap['id_produk']."-".$judul1.".html";
			?>
            <?php if ($toko1['tampilan']=='1'): ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                
                
                
                <div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%; margin: 5px;">
                    <div class="row" >
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="product-img">
                                <a href="<?php echo $setiap['slug'] ?>">
                                    <?php if ($setiap['url']==''): ?>
                                    
                                    <img class="default-img" src="foto_produk/<?php echo $setiap['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
                                    <img class="hover-img" src="foto_produk/<?php echo $setiap['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
                                    <?php else: ?>

                                    <img class="default-img" src="<?php echo $setiap['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
                                    <img class="hover-img" src="<?php echo $setiap['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">    
                                    <?php endif ?>
                                </a>
                            </div>
                        </div>                          
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="product-content" style="margin: 5px;" >
                                <h3><a href="<?php echo $setiap['slug'] ?>" style="font-size: 18px"><?php echo $setiap['nama_produk'] ?></a></h3>
                                <p><?php echo substr($setiap['deskripsi_produk'], 0,30)   ?></p>
                                <div class="product-price" >
                                    <span style="font-size: 22px">Rp.<?php echo $price1 ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <?php else: ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                <div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%;">
                    <div class="product-img">
                        <a href="<?php echo $setiap['slug'] ?>">
                            <?php if ($setiap['url']==''): ?>
                            
                            <img class="default-img" src="foto_produk/<?php echo $setiap['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
                            <img class="hover-img" src="foto_produk/<?php echo $setiap['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
                            <?php else: ?>

                            <img class="default-img" src="<?php echo $setiap['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
                            <img class="hover-img" src="<?php echo $setiap['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">    
                            <?php endif ?>
                        </a>
                    </div>
                    <div class="product-content" style="margin: 5px;" >
                        <h3><a href="<?php echo $setiap['slug'] ?>" style="font-size: 18px;"><?php echo $setiap['nama_produk'] ?>(Stok :<?php echo $setiap['stok_produk'] ?>)</a></h3>
                        <p><?php echo substr($setiap['deskripsi_produk'], 0,30) ?></p>
                        <div class="product-price">
                            <span style="font-size: 22px;">Rp.<?php echo $price1 ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif ?>
            <?php endforeach ?>     


        </div>
    </div>
    <!-- End Product Area -->
    <br>
    <!-- semua produk -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title" style="margin-bottom:  0px">
                    <h2>Semua Produk</h2>
                </div>
            </div>
        </div>
        <div class="row" id="ajaxproduk">
        

        </div>
    </div><br>
    <!-- akhir semua produk -->

    <!-- Start Footer Area -->
    <?php include 'footer.php'; ?>
    <?php include 'menu.php'; ?>
    <!-- /End Footer Area -->
    <!-- ajax  -->
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