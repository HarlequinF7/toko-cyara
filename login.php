<?php 
session_start();
error_reporting(0);
include 'koneksi.php';
if (isset($_SESSION['pelanggan'])) {
  echo "<script> location ='index';</script>";
}
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
$namatoko=$toko1['namatoko'];
$domaintoko=$toko1['domain'];
$email1=$koneksi->query("SELECT * FROM email");
$email=$email1->fetch_assoc();
$email2=$email['email'];
$host=$email['hostmail'];
$kunci=$email['password'];
$domain=$email['domain'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="sign.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title><?php echo $toko1['namatoko'] ?> - Login</title>
    <link rel="icon" type="image/png" href="fotoprofil/<?php echo $toko1['favicon'] ?>">
  </head>
  <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div class="container-fluid">
      <div class="forms-container-fluid">
        <div class="signin-signup">
          <form method="post" class="sign-in-form">
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" required="" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required="" name="password" />
            </div>
            <input type="submit" value="Masuk" class="btn btn-primary" name="login" />
            
          </form>
          <?php
			if (isset($_POST["login"]))
			{
				$email2=mysqli_real_escape_string($koneksi, $_POST['email']);
				$password2=mysqli_real_escape_string($koneksi,$_POST['password']);
				$password=htmlspecialchars($password2);
				$email=htmlspecialchars($email2);
				$data=$password;
				$method="AES-128-CTR";
				$key ="Sipinter123@#@";
				$option=0;
				//asal saja hehehe 
				//namun pajangnya sesuiai method cipher 
				//cek dengan openssl_cipher_iv_length($method);
				$iv="1251632135716362";
				$dataenkripsi=openssl_encrypt($data, $method, $key, $option, $iv);
				$ambi=$koneksi->query("SELECT * FROM pelanggan
				WHERE email_pelanggan='$email' AND password_pelanggan='$dataenkripsi' AND status='aktif'");
				$akunyangcoco=$ambi->num_rows;
				if($akunyangcoco==1)
				{
					$akun =$ambi->fetch_assoc();
          $username =$akun["email_pelanggan"];
          $passs    =$akun["password_pelanggan"];
          $namapelanggan   =$akun["nama_pelanggan"];
          $idp    =$akun["id_pelanggan"];
        
          setcookie("email_pelanggan", $username, time()+3600000);
          setcookie("password_pelanggan", $passs, time()+3600000);
          setcookie("nama_pelanggan", $namapelanggan, time()+3600000);
          setcookie("id_pelanggan", $idp, time()+3600000);
					echo "<script>setTimeout(function () { swal({ title: 'Login Sukses', text: 'Silahkan Belanja Di Jualan.com', type: 'success', timer: 5000, showConfirmButton: true }); },10); window.setTimeout(function(){ window.location.replace('checkout'); } ,5000);</script>";
					
				}
				else
				{
					echo "<script>setTimeout(function () { swal({ title: 'Login Gagal', text: 'Silahkan Cek Ulang Akun Anda', icon: 'warning', timer: 5000, showConfirmButton: true }); },10); window.setTimeout(function(){ window.location.replace('login'); } ,5000);</script>";
				}
			}
			?>
          <form method="post" class="sign-up-form">
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="nama"  required="" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required="" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Nomor WA" max="12" name="telepon" required="" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="sandi" required="" />
            </div>
            <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <?php  
					if (isset($_POST["daftar"])) 
					{
						$nama1 = mysqli_real_escape_string($koneksi, $_POST['nama']);
						$nama=htmlspecialchars($nama1);
						$email1 = mysqli_real_escape_string($koneksi, $_POST['email']);
						$email=htmlspecialchars($email1);
						$telepon1 =mysqli_real_escape_string($koneksi, $_POST['telepon']);
						$telepon=htmlspecialchars($telepon1);
						$password1 = mysqli_real_escape_string($koneksi, $_POST['sandi']);
						$password=htmlspecialchars($password1);
						$data=$password;
						$method="AES-128-CTR";
						$key ="Sipinter123@#@";
						$option=0;
						//asal saja hehehe 
						//namun pajangnya sesuiai method cipher 
						//cek dengan openssl_cipher_iv_length($method);
						$iv="1251632135716362";
						$enkripsi=openssl_encrypt($data, $method, $key, $option, $iv);

						//cek apakah email sudah ada
						$ambil=$koneksi->query("SELECT*FROM pelanggan 
							WHERE email_pelanggan='$email'");
						$yangcocok=$ambil->num_rows;
						if ($yangcocok==1) 
						{
							echo "<script>setTimeout(function () { swal({ title: 'Pendaftaran Gagal', text: 'Pastikan Email ANda Belum Tedaftar', icon: 'warning', timer: 5000, showConfirmButton: true }); },10); window.setTimeout(function(){ window.location.replace('login'); } ,5000);</script>";
						}
						else
						{
							$koneksi->query("INSERT INTO pelanggan
								(nama_pelanggan, email_pelanggan,  password_pelanggan, telepon_pelanggan, status)
								VALUES('$nama','$email','$enkripsi','$telepon', 'aktif')");

							echo "<script>setTimeout(function () { swal({ title: 'Pendaftaran Sukses', text: 'Silahkan Login', type: 'success', timer: 5000, showConfirmButton: true }); },10); window.setTimeout(function(){ window.location.replace('login'); } ,5000);</script>";
						}
					}
					?>
        </div>
      </div>

      <div class="panels-container-fluid">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Punya Akun ?</h3>
            <p>
              Buruhan Daftar ! Untuk Bisa Belanja Dimanapun dan Kapanpun.
            </p>
            <button class="btn btn-success" id="sign-up-btn">
             Daftar
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Yuk Login Dulu !</h3>
            <p>
              Lalu Nikmati Belanja dan Dapatkan Barang dengan Kualitas Hot. 
            </p>
            <button class="btn btn-success" id="sign-in-btn">
              Masuk
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
<?php include 'menu.php'; ?>
    <script src="app.js"></script>
    <script src="js/jquery.min.js"></script>
  </body>
</html>
