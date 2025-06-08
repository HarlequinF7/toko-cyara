<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMPILAN NAVBAR HEADER
                </h2>
            </div>
            <form method="post">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <b>BACKGROUND HEADER</b>
                        <div class="input-group colorpicker">
                            <div class="form-line">
                                <input type="text" name="backgroundaktif" class="form-control" value="<?php echo $toko1['backgroundaktif'] ?>;">
                            </div>
                            <span class="input-group-addon">
                                <i></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <b>WARNA HEADER</b>
                        <div class="input-group colorpicker">
                            <div class="form-line">
                                <input type="text" name="warnaheader" class="form-control" value="<?php echo $toko1['warnaheader'] ?>;">
                            </div>
                            <span class="input-group-addon">
                                <i></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <b>WARNA MENU</b>
                        <div class="input-group colorpicker">
                            <div class="form-line">
                                <input type="text" name="warnamenu" class="form-control" value="<?php echo $toko1['warnamenu'] ?>;">
                            </div>
                            <span class="input-group-addon">
                                <i></i>
                            </span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="update">Ganti</button>
            </div>
            </form>
        </div>
        <div class="card">
            <div class="header">
                <h2>
                    TAMPILAN NAVBAR FOOTER
                </h2>
            </div>
            <form method="post" >
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <b>BACKGROUND FOOTER</b>
                        <div class="input-group colorpicker">
                            <div class="form-line">
                                <input type="text" name="footer" class="form-control" value="<?php echo $toko1['warnafooter'] ?>;">
                            </div>
                            <span class="input-group-addon">
                                <i></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <b>WARNA IKON</b>
                        <div class="input-group colorpicker">
                            <div class="form-line">
                                <input type="text" name="warnaikon" class="form-control" value="<?php echo $toko1['warnaikon'] ?>;">
                            </div>
                            <span class="input-group-addon">
                                <i></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <b>WARNA IKON AKTIF</b>
                        <div class="input-group colorpicker">
                            <div class="form-line">
                                <input type="text" name="warnaikonaktif" class="form-control" value="<?php echo $toko1['warnaikonaktif'] ?>;">
                            </div>
                            <span class="input-group-addon">
                                <i></i>
                            </span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="edit">Ganti</button>
            </div>
            </form>
        </div>
        <div class="card">
            <div class="header">
                <h2>
                    TAMPILAN PRODUK & LOGO
                </h2>
            </div>
            <form method="post" >
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h2 class="card-inside-title">Tampilan Produk</h2>
                        <select class="form-control" name="tampilan">
                            <option value="1">List</option>
                            <option value="2">Kotak</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <h2 class="card-inside-title">Aktifkan Klik Kanan</h2>
                        <select class="form-control" name="kanan">
                            <option value="1">Off</option>
                            <option value="2">On</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="ganti">Ganti</button>
            </div>
            </form>
            <div class="body">
                    <form method="post" enctype="multipart/form-data">

                <div class="row clearfix">
                    <div class="col-md-6">
                        <h2 class="card-inside-title">Tampilan Logo</h2>
                        <img src="../fotoprofil/<?php echo $toko1["fotoprofil"] ?>" alt="" class="img-responsive"><br>
                        <input type="file" name="logo" required="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="card-inside-title">Tampilan Favicon</h2>
                        <img src="../fotoprofil/<?php echo $toko1["favicon"] ?>" alt="" class="img-responsive"><br>
                        <input type="file" name="favicon" required="">
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="ubah">Ganti</button>
                    </form>
                
            </div>
        </div>
    </div>
</div>
<?php  
if (isset($_POST["ubah"])) 
{

    $favicon=$detpem['favicon'];
    $logo=$detpem['fotoprofil'];

    if (file_exists("../fotoprofil/$favicon"))
        {
            unlink("../fotoprofil/$favicon");
        }
    if (file_exists("../fotoprofil/$logo"))
        {
            unlink("../fotoprofil/$logo");
        }
    $lokasifoto=$_FILES["logo"]["tmp_name"];
    $namafoto=$_FILES["logo"]["name"];
    $ikon1=$_FILES["favicon"]["tmp_name"];
    $ikon=$_FILES["favicon"]["name"];
    //upload

    move_uploaded_file($lokasifoto, "../fotoprofil/".$namafoto);
    move_uploaded_file($ikon1, "../fotoprofil/".$ikon);
    $koneksi->query("UPDATE toko SET fotoprofil='$namafoto', favicon='$ikon'");

    echo "<script>alert('Logo & Favicon berhasil disimpan');</script>";
    echo "<script>location='index?halaman=tampilan';</script>";

}

?>
<?php  
if (isset($_POST["ganti"])) 
{

    $fb=htmlspecialchars($_POST['tampilan']);
    $ig=htmlspecialchars($_POST['kanan']);

    $koneksi->query("UPDATE toko SET tampilan='$fb', kanan='$ig'");

    echo "<script>alert('Tampilan Produk berhasil disimpan');</script>";
    echo "<script>location='index?halaman=tampilan';</script>";

}

?>
<?php  
if (isset($_POST["edit"])) 
{

    $footer=htmlspecialchars($_POST['footer']);
    $warnaikon=htmlspecialchars($_POST['warnaikon']);

    $warnaikonaktif=htmlspecialchars($_POST['warnaikonaktif']);

    $koneksi->query("UPDATE toko SET warnafooter='$footer', warnaikon='$warnaikon', warnaikonaktif='$warnaikonaktif'");

    echo "<script>alert('Warna Footer berhasil disimpan');</script>";
    echo "<script>location='index?halaman=tampilan';</script>";

}

?>
<?php  
if (isset($_POST["update"])) 
{

    $backgroundaktif=htmlspecialchars($_POST['backgroundaktif']);
    $warnaheader=htmlspecialchars($_POST['warnaheader']);
    $warnamenu=htmlspecialchars($_POST['warnamenu']);

    $koneksi->query("UPDATE toko SET backgroundaktif='$backgroundaktif', warnaheader='$warnaheader', warnamenu='$warnamenu'");

    echo "<script>alert('Warna Header berhasil disimpan');</script>";
    echo "<script>location='index?halaman=tampilan';</script>";

}

?>