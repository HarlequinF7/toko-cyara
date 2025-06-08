
<?php 
session_start();
include 'koneksi.php';
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();


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
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin | <?php echo $toko1['namatoko']?></title>
    <!-- Favicon-->
    <link rel="icon" href="../fotoprofil/<?php echo $toko1['favicon'] ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b> <?php echo $toko1['namatoko'] ?></b></a>
            <small>Admin - <?php echo $toko1['namatoko'] ?></small>
        </div>
        <div class="card">
            <div class="body">
                <form method="post">
                    <div class="msg">Silahkan Masuk Dengan Akun Anda</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="user"  required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="pass"  required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login" >MASUK</button>
                        </div>
                    </div>
                   
                </form>
                <?php

                  if(isset($_POST['login'])){
                  $email2=mysqli_real_escape_string($koneksi, $_POST['user']);
                    $password2=mysqli_real_escape_string($koneksi,$_POST['pass']);
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
                  $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$email' AND password='$dataenkripsi'");  

                  $yangcocok = $ambil->num_rows;

                  if ($yangcocok==1) {
                    $akun=$ambil->fetch_assoc();
                    $username =htmlspecialchars($akun["username"]);
                    $passs    =htmlspecialchars($akun["password"]);
                    
                    setcookie("username", $username, time()+3600000);
                    setcookie("password", $passs, time()+3600000);
                            echo "<div class='alert alert-info'>Login Sukses</div>";
                   echo "<meta http-equiv='refresh' content='1;url=index'>"; 
                  }

                  else{
                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                   echo "<meta http-equiv='refresh' content='1;url=login'>"; 
                  

                  }
                 }



                ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

<