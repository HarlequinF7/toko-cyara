<?php $ambil=$koneksi->query("SELECT*FROM admin");
$detpem=$ambil->fetch_assoc() ?>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-3">
        <div class="card profile-card">
            <div class="profile-header">&nbsp;</div>
            <div class="profile-body">
                <div class="image-area">
                    <img src="../fotoprofil/<?php echo $detpem['foto'] ?>" alt="AdminBSB - Profile Image" width="130" height="130" />
                </div>
                <div class="content-area">
                    <h3><?php echo $detpem['nama'] ?></h3>
                </div>
            </div>
            <div class="profile-footer">
                <ul>
                    <li>
                        <span>Followers</span>
                        <span>1.234</span>
                    </li>
                    <li>
                        <span>Following</span>
                        <span>1.201</span>
                    </li>
                    <li>
                        <span>Friends</span>
                        <span>14.252</span>
                    </li>
                </ul>
                <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active" style="display: block;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Profil</a></li>
                        <li role="presentation"><a href="#change" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Nama Administrator</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama"  value="<?php echo $detpem['nama'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="email"  value="<?php echo $detpem['email'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Username</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" name="user" value="<?php echo $detpem['username'] ?>"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Ganti Foto</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" id="InputExperience" type="file" name="fotok" required=""></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger" name="ganti">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="change">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="NewPassword" class="col-sm-3 control-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPassword" name="sandi" placeholder="New Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPasswordConfirm" class="col-sm-3 control-label">Konfiramasi Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPasswordConfirm" name="sandi2" placeholder="New Password (Confirm)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" name="ubah" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  
if (isset($_POST["ganti"])) 
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
    $telepon1 =mysqli_real_escape_string($koneksi, $_POST['user']);
    $telepon=htmlspecialchars($telepon1);

    if (!($eksok)) {
        echo "<script>alert('Oppss, Ekstensi File Foto tidak cocok')</script>";
    }else{
        $berita =$detpem['foto'];
        if (file_exists("fotoprofil/$berita"))
        {
            unlink("fotoprofil/$berita");
        }
        move_uploaded_file($lokasifoto, "../fotoprofil/$unik");
        $koneksi->query("UPDATE admin SET nama='$nama', email='$email',  username='$telepon', foto='$unik'");

        echo "<script>alert('Profil Berhasil Diubah')</script>";
        echo "<script>location='index?halaman=admin';</script>";

        }

    
}

?>
<?php  
if (isset($_POST["ubah"])) 
{
    $password1 = mysqli_real_escape_string($koneksi,$_POST['sandi']);
    $konfir = mysqli_real_escape_string($koneksi,$_POST['sandi2']);
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
        $koneksi->query("UPDATE admin SET password='$enkripsi'");
        echo "<script>alert('Password Berhasil Diubah')</script>";
        echo "<script>location='index?halaman=admin';</script>";
    }
    else{
        echo "<script>alert('Konfirmasi Password Tidak Sama')</script>";
    }
    
}

?>