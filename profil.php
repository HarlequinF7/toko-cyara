<?php 
session_start();
error_reporting(0);
include 'koneksi.php';

error_reporting(0);
$username =$_COOKIE["email_pelanggan"];
$passs    =$_COOKIE["password_pelanggan"];
$namapelanggan    =$_COOKIE["nama_pelanggan"];
$idp    =$_COOKIE["id_pelanggan"];
if (!isset($username)) 
{
	echo "<script> alert('anda belum login');</script>";
	echo "<script> location ='login';</script>";
}
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
    <script src="js/jquery.min.js"></script>
	<?php
	$dat=array();
	$amb= $koneksi->query("SELECT * FROM kategori ");
	while($tia=$amb->fetch_assoc())
	{
	  $dat[]=$tia;
	}

	?>
	<style type="text/css">
.ignielHorizontal ul {
  background-color: white;
   /* Warna background menu */
  max-width: 100%; /* Lebar maksimal menu */
  overflow-x: auto;
}
.ignielHorizontal {
  color: black;
  line-height: 0px;
  overflow: hidden;
}
.ignielHorizontal a {
  font-size: 15px;
  color: black;
  font-weight: bold;
  text-decoration: none;
  padding: 10px 13px;
  line-height: 1.5em;
  display: block;
}
.ignielHorizontal a:hover {
  background-color: black;
  color: white;
  text-decoration: none;
}

.ignielHorizontal ul, .ignielHorizontal li {
  list-style: none;
  display: inline-block;
  white-space: nowrap;
  margin: 0px;
  padding: 0px;
}
@media screen and (max-width: 480px){
  .ignielHorizontal a {
    font-size: 13px;
    padding: 8px 11px;
  }
}
@media screen and (max-width: 360px){
  .ignielHorizontal a {
    font-size: 12px;
    padding: 7px 10px;
  }
}
	</style>
</head>
<body class="js">
	
	

	<!-- Header -->
	<?php include 'header.php'; ?>
	<!--/ End Header -->

	<!-- start riwayat -->
	<section class="shop-services section">
    <div class="container">
       <div class="ignielHorizontal product__details__tab " >
		    <ul class=" nav nav-tabs" role="tablist" style="margin-bottom: 20px">
		        <li class="nav-item">
		            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
		                aria-selected="true">Profil Anda</a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
		                aria-selected="false">Ubah Profil</a>
		        </li>
		        
		        <li class="nav-item">
		            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab"
		                aria-selected="false">Ubah Password</a>
		        </li>
		        

		    </ul>
		    <div class="tab-content">
		        <div class="tab-pane active" id="tabs-1" role="tabpanel" >
		            <div class="product__details__tab__desc">
		            	<h3 style="margin-bottom: 20px;border-bottom: 5px solid red; padding: 5px;" align="center">Profil Anda </i></h3>
		            	<div class="checkout-form">
		            		<style type="text/css">
		            			input {
		            				width: 100%;
		            			}
		            		</style>
		            		<?php 
							$id_pelanggan= $idp;
							$ambil= $koneksi->query("SELECT *FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
							$pecah=$ambil->fetch_assoc();?>
							<!-- Form -->
							<div class="row">
								<div class="col-lg-4 col-12" style="border-bottom: 5px solid red; margin-bottom: 20px; padding-bottom: 5px; ">
									<img src="fotoprofil/<?php echo $pecah['fotoprofil'] ?>"   style="width: 100%;  max-height: 320px; margin-right: auto; border-radius: 60%; -moz-border-radius:60%; border: 10px solid crimson;">
								</div>
								
								<div class="col-lg-8 col-12">

									<div class="row">
										<div class="col-lg-6 col-md-6 col-12">
											<div class="form-group">
												<label><span><i class="fas fa-user" ></i></span> Nama Lengkap</label>
												<input type="text" name="name" value="<?php echo $pecah['nama_pelanggan'] ?>" readonly="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="form-group">
												<label><i class="fas fa-envelope"></i> Email Anda</label>
												<input type="email" name="name" value="<?php echo $pecah['email_pelanggan'] ?>" readonly="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-12">
											<div class="form-group">
												<label><span><i class="fas fa-phone"></i></span> Telepon Anda<span></span></label>
												<input type="text" name="email"  value="<?php echo $pecah['telepon_pelanggan'] ?>" readonly="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="form-group">
												<label><span><i class="fas fa-lock"></i></span> Password Anda<span></span></label>
												<input type="password" name="email" value="<?php echo $pecah['password_pelanggan'] ?>" readonly="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-12">
											<div class="form-group">
												<label><span><i class="fas fa-location"></i></span> Alamat Lengkap</label>
												<textarea rows="5" readonly="" value="<?php echo $pecah['alamat'] ?>"><?php echo $pecah['alamat'] ?></textarea>
											</div>
										</div>
									</div>

								<!--/ End Form -->
								</div>
							</div>
							
						</div>
                    </div>
                </div>
                <div class="tab-pane " id="tabs-2" role="tabpanel">
		            <div class="product__details__tab__desc">
		            	<h3 style="margin-bottom: 20px;border-bottom: 5px solid red; padding: 5px;" align="center">Ubah Profil</i></h3>
		            	<div class="checkout-form">
		            		<style type="text/css">
		            			input {
		            				width: 100%;
		            			}
		            		</style>

							<!-- Form -->
							<form class="form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label><span><i class="fas fa-user" ></i></span> Nama Lengkap</label>
											<input type="text" name="nama" value="<?php echo $pecah['nama_pelanggan'] ?>" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label><i class="fas fa-envelope"></i> Email Anda</label>
											<input type="email" name="email" value="<?php echo $pecah['email_pelanggan'] ?>" required >
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label><span><i class="fas fa-phone"></i></span> Telepon Anda<span></span></label>
											<input type="text" name="telepon"  value="<?php echo $pecah['telepon_pelanggan'] ?>" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label><i class="fas fa-image"></i> Ganti Foto</label>
											<input type="file" name="fotok"  required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label><span><i class="fas fa-location"></i></span> Alamat Lengkap</label>
											<textarea rows="5" required name="alamat" value=""><?php echo $pecah['alamat'] ?></textarea>
										</div>
									</div>
								</div>
								<button class="btn btn-danger" type="submit" name="ubah"><i class="fas fa-edit"> Ubah</i></button>
							</form>
							
							<!--/ End Form -->
						</div>
		            </div>
		        </div>
		        
		        <div class="tab-pane " id="tabs-4" role="tabpanel">
		            <div class="product__details__tab__desc">
		            	<h3 style="margin-bottom: 20px;border-bottom: 5px solid red; padding: 5px;" align="center">Ubah Password</i></h3>
		            	<div class="checkout-form">
		            		<style type="text/css">
		            			input {
		            				width: 100%;
		            			}
		            		</style>

										<!-- Form -->
										<form class="form" method="post">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">

														<label><span><i class="fas fa-lock" ></i></span> Password Baru</label>
														<input type="password" name="password" required > 

													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">
														<label><i class="fas fa-lock"></i> Konfirmasi Password</label>
														<input type="password" name="konfir" required >
													</div>
												</div>
												
											</div>
											<button class="btn btn-danger" type="submit" name="sandi"><i class="fas fa-edit"> Ubah Password</i></button>
										</form>
										<!--/ End Form -->
									</div>
		            </div>
		        </div>
							
		        
            </div>
		</div>
  </section>
  <?php  
if (isset($_POST["ubah"])) 
{
	$fototoko = $_FILES['fotok']['name'];
	$lokasifoto= $_FILES['fotok']['tmp_name'];
	$acak = rand(1,99999);
	$unik = $acak.$fototoko;
	$eksfile=array('jpg','gif','jpeg','png');
	$eks=strtolower(end(explode('.',$unik)));
	$eksok=in_array($eks, $eksfile);
	$nama1 = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$nama=htmlspecialchars($nama1);
	$email1 = mysqli_real_escape_string($koneksi, $_POST['email']);
	$email=htmlspecialchars($email1);
	$telepon1 =mysqli_real_escape_string($koneksi, $_POST['telepon']);
	$telepon=htmlspecialchars($telepon1);
	$password1 = mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$password=htmlspecialchars($password1);

	if (!($eksok)) {
		echo "<script>alert('Oppss, Ekstensi File Foto tidak cocok')</script>";
	}else{
		$berita =$pecah['fotoprofil'];
		if (file_exists("fotoprofil/$berita"))
		{
			unlink("fotoprofil/$berita");
		}
		move_uploaded_file($lokasifoto, "fotoprofil/$unik");
		$koneksi->query("UPDATE pelanggan SET nama_pelanggan='$nama', email_pelanggan='$email',  telepon_pelanggan='$telepon',  alamat='$password', fotoprofil='$unik' where id_pelanggan='$id_pelanggan'");

		echo "<script>alert('Profil Berhasil Diubah')</script>";
		echo "<script>location='profil.php';</script>";

		}

	
}

?>
<?php  
if (isset($_POST["sandi"])) 
{
	$password1 = mysqli_real_escape_string($koneksi,$_POST['password']);
	$konfir = mysqli_real_escape_string($koneksi,$_POST['konfir']);
	$password=htmlspecialchars($password1);
	$konfir1=htmlspecialchars($konfir);
	$data=$password;
	$method="AES-128-CTR";
	$key ="Sipinter123@#@";
	$option=0;
	//asal saja hehehe 
	//namun pajangnya sesuiai method cipher 
	//cek dengan openssl_cipher_iv_length($method);
	$iv="1251632135716362";
	$enkripsi=openssl_encrypt($data, $method, $key, $option, $iv);

	if ($password1 == $konfir1) {
		$koneksi->query("UPDATE pelanggan SET password_pelanggan='$enkripsi' where id_pelanggan='$id_pelanggan'");
		echo "<script>alert('Password Berhasil Diubah')</script>";
		echo "<script>location='profil';</script>";
	}
	else{
		echo "<script>alert('Konfirmasi Password Tidak Sama')</script>";
	}
	
}

?>
	<!-- end riwayat -->
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>	
    
	<br>
	
	<!-- /End Footer Area -->
 	<?php include 'menu.php'; ?>
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