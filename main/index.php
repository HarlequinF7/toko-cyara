<?php
session_start();
error_reporting(0);
//koneksi ke database
include 'koneksi.php';
include '../time_since.php';
$username =$_COOKIE["username"];
$passs    =$_COOKIE["password"];
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
if (!isset($username)) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login';</script>";
    header('location:login');

    exit();
}
?>
<?php 
$jumlahkomen=$koneksi->query("SELECT * FROM komentar WHERE status='belum dibaca' ");
$jumlah_komen= mysqli_num_rows($jumlahkomen);
$ambil=$koneksi->query("SELECT*FROM admin");
$detpem=$ambil->fetch_assoc() ?>
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
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

     <!-- Colorpicker Css -->
    <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/jquery/jquery.js"></script>

    <!-- ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMIN - <?php echo $toko1['namatoko'] ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count"><?php echo $jumlah_komen ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <?php while($komen=$jumlahkomen->fetch_assoc()){ ?>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b><?php echo $komen['nama'] ?>*</b> Komentar Pelanggan</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i><?php echo  time_since(strtotime($komen['tgl_komentar'])) ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="index?halaman=komentar">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../fotoprofil/<?php echo $detpem['foto'] ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $detpem['nama']?></div>
                    <div class="email"><?php echo $detpem['email']?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index?halaman=admin"><i class="material-icons">person</i>Profil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index?halaman=admin#change"><i class="material-icons">group</i>Ubah</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index?halaman=logout"><i class="material-icons">input</i>Keluar Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN MENU</li>
                    <li class="active">
                        <a href="index">
                            <i class="material-icons">home</i>
                            <span>BERANDA</span>
                        </a>
                    </li>
                    <li>
                        <a href="index?halaman=kategori">
                            <i class="material-icons">view_list</i>
                            <span>KATEGORI</span>
                        </a>
                    </li>
                    <li>
                        <a href="index?halaman=produk">
                            <i class="material-icons">store</i>
                            <span>PRODUK</span>
                        </a>
                    </li>
                    <li>
                        <a href="index?halaman=komentar" >
                            <i class="material-icons">forum</i>
                            <span>KOMENTAR</span>
                        </a>
                    </li>
                    <li>
                        <a href="index?halaman=banner" >
                            <i class="material-icons">exposure</i>
                            <span>BANNER</span>
                        </a>
                    </li>
                    <li>
                        <a href="index?halaman=halaman" >
                            <i class="material-icons">list</i>
                            <span>HALAMAN</span>
                        </a>
                    </li>
                    <li>
                        <a href="index?halaman=tampilan" >
                            <i class="material-icons">tablet_mac</i>
                            <span>TAMPILAN</span>
                        </a>    
                    </li>
                    
                    <li>
                        <a href="index?halaman=pelanggan" >
                            <i class="material-icons">people</i>
                            <span>PELANGGAN</span>
                        </a>    
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>PENGATURAN</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="index?halaman=admin">
                                <i class="material-icons">contacts</i>
                                <span>ADMIN</span>
                                </a>
                            </li>
                            <li>
                                <a href="index?halaman=profil">
                                <i class="material-icons">store</i>
                                <span>TOKO</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021-2022 <a href="javascript:void(0);">Admin | <?php echo $toko1['namatoko']?></a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div id="page-wrapper" >
            <div id="page-inner">
               <?php 
               if (isset($_GET['halaman'])) 
               {
                    if ($_GET['halaman']=="produk")
                    {
                       include 'produk.php'; 
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php'; 
                    }
                    elseif ($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php'; 
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php'; 
                    }
                    elseif ($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php'; 
                    }
                    elseif ($_GET['halaman']=="hapusproduk")
                    {
                        include 'hapusproduk.php'; 
                    }
                    elseif ($_GET['halaman']=="ubahproduk")
                    {
                        include 'ubahproduk.php'; 
                    }
                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="resi") 
                    {
                        include 'resi.php';
                    }
                    elseif ($_GET['halaman']=="member") 
                    {
                        include 'member.php';
                    }
                    elseif ($_GET['halaman']=="pengajuan") 
                    {
                        include 'pengajuan.php';
                    }
                    elseif ($_GET['halaman']=="resep") 
                    {
                        include 'resep.php';
                    }
                    elseif ($_GET['halaman']=="detailresep") 
                    {
                        include 'detailresep.php';
                    }
                    elseif ($_GET['halaman']=="voucher") 
                    {
                        include 'voucher.php';
                    }
                    elseif ($_GET['halaman']=="tambahvoucher") 
                    {
                        include 'tambahvoucher.php';
                    }
                    elseif ($_GET['halaman']=="laporan") 
                    {
                        include 'laporan.php';
                    }
                    elseif ($_GET['halaman']=="kategori") 
                    {
                        include 'kategori.php';

                    }
                    elseif ($_GET['halaman']=="ubahkategori") 
                    {
                        include 'ubahkategori.php';
                        
                    }
                    elseif ($_GET['halaman']=="hapusfotoproduk") 
                    {
                        include 'hapusfotoproduk.php';
                    }
                    
                    elseif ($_GET['halaman']=="tambahkategori") 
                    {
                        include 'tambahkategori.php';
                    }
                    elseif ($_GET['halaman']=="hapuskategori") 
                    {
                        include 'hapuskategori.php';
                    }
                    elseif ($_GET['halaman']=="tambahsubkategori") 
                    {
                        include 'tambahsubkategori.php';
                    }
                    elseif ($_GET['halaman']=="hapussubkategori") 
                    {
                        include 'hapussubkategori.php';
                    }
                    elseif ($_GET['halaman']=="ubahsubkategori") 
                    {
                        include 'ubahsubkategori.php';
                    }
                     elseif ($_GET['halaman']=="hapuspelanggan") 
                    {
                        include 'hapuspelanggan.php';
                    }
                    elseif ($_GET['halaman']=="profil") 
                    {
                        include 'profil.php';
                    }
                    elseif ($_GET['halaman']=="admin") 
                    {
                        include 'admin.php';
                    }
                    elseif ($_GET['halaman']=="ongkir") 
                    {
                        include 'ongkir.php';
                    }
                    elseif ($_GET['halaman']=="banner") 
                    {
                        include 'banner.php';
                    }
                    elseif ($_GET['halaman']=="editpromo") 
                    {
                        include 'editpromo.php';
                    }
                    elseif ($_GET['halaman']=="hapustema") 
                    {
                        include 'hapustema.php';
                    }
                     elseif ($_GET['halaman']=="komentar") 
                    {
                        include 'komentar.php';
                    }
                    elseif ($_GET['halaman']=="tambahartikel") 
                    {
                        include 'tambahartikel.php';
                    }
                    elseif ($_GET['halaman']=="ubahartikel") 
                    {
                        include 'ubahartikel.php';
                    }
                    elseif ($_GET['halaman']=="halaman") 
                    {
                        include 'halaman.php';
                    }
                    elseif ($_GET['halaman']=="ubahhalaman") 
                    {
                        include 'ubahhalaman.php';
                    }
                    elseif ($_GET['halaman']=="tambahhalaman") 
                    {
                        include 'tambahhalaman.php';
                    }
                    elseif ($_GET['halaman']=="midtran") 
                    {
                        include 'midtran.php';
                    }
                     elseif ($_GET['halaman']=="tambahongkir") 
                    {
                        include 'tambahongkir.php';
                    }
                     elseif ($_GET['halaman']=="payment") 
                    {
                        include 'payment.php';
                    }
                     elseif ($_GET['halaman']=="tampilan") 
                    {
                        include 'tampilan.php';
                    }
                    elseif ($_GET['halaman']=="analisis") 
                    {
                        include 'analisis.php';
                    }
                    

                    
               }
               else
               {
                    include 'home.php';
               } 
               ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->

            <!-- Widgets -->
            
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>



    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>


    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>
    
    <!-- Bootstrap Colorpicker Js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>




    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/tables/advanced-form-elements.js"></script>


    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
