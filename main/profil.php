<?php $ambil=$koneksi->query("SELECT*FROM toko");
$detpem=$ambil->fetch_assoc() ?>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-3">
        <div class="card profile-card">
            <div class="profile-header">&nbsp;</div>
            <div class="profile-body">
                <div class="image-area">
                    <img src="../fotoprofil/<?php echo $detpem['fotoprofil'] ?>" alt="AdminBSB - Profile Image" width="130" height="130" />
                </div>
                <div class="content-area">
                    <h3><?php echo $detpem['namatoko'] ?></h3>
                </div>
            </div>
            <div class="profile-footer">
                <ul>
                    <li>
                        <span>Email</span>
                        <span><?php echo $detpem['email'] ?></span>
                    </li>
                    <li>
                        <span>Telepon</span>
                        <span><?php echo $detpem['telepon'] ?></span>
                    </li>
                    <li>
                        <span>Kodepos</span>
                        <span><?php echo $detpem['kodepos'] ?></span>
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
                        <li role="presentation" class="active" style="display: block;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Profil Toko</a></li>
                        <li role="presentation"><a href="#change" aria-controls="settings" role="tab" data-toggle="tab">Ubah Profil</a></li>
                        <li role="presentation"><a href="#sosmed" aria-controls="settings" role="tab" data-toggle="tab">Sosial Media</a></li>
                        <li role="presentation"><a href="#lokasi" aria-controls="settings" role="tab" data-toggle="tab">Lokasi Toko</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Nama Toko</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="<?php echo $detpem['namatoko'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Domain Aplikasi</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="<?php echo $detpem['domain'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $detpem['email'] ?>"  readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Telepon</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" id="InputExperience" name="InputExperience" value="<?php echo $detpem['telepon'] ?>" readonly></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Titik Kordinat Toko</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="<?php echo $detpem['titik'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Alamat</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" id="InputExperience" name="InputExperience" value="<?php echo $detpem['provinsi'] ?>, <?php echo $detpem['tipe'] ?> <?php echo $detpem['distrik'] ?>. <?php echo $detpem['alamat'] ?>" readonly></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Kodepos</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" id="InputExperience" name="InputExperience" value="<?php echo $detpem['kodepos'] ?>" readonly></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputSkills" class="col-sm-2 control-label">Deskripsi Toko</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills" value="<?php echo $detpem['diskripsi'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="change">
                        	<div class="row">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Nama Toko</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namatoko" value="<?php echo $detpem['namatoko'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Domain Toko</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" name="domain" value="<?php echo $detpem['domain'] ?>"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" value="<?php echo $detpem['email'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Telepon</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" name="telepon" value="<?php echo $detpem['telepon'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Titik Kordinat Toko</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text"  class="form-control" name="titik" value="<?php echo $detpem['titik'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Deskripsi Toko</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="deskripsi" value="<?php echo $detpem['diskripsi'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger" name="edit">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="sosmed">
                        	<div class="row">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fb" value="<?php echo $detpem['fb'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="ig" value="<?php echo $detpem['ig'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Youtube</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" name="youtube" value="<?php echo $detpem['youtube'] ?>"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputSkills" class="col-sm-2 control-label">Twitter</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="twitter" value="<?php echo $detpem['twitter'] ?>">
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
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="lokasi">
                        	<div class="row">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Provinsi</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <select class="form-control" name="provinsi"  required="required"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Kabupaten/Kota</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <select class="form-control" name="distrik"  required="required" ></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Kodepos</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input class="form-control" name="kodepos"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputSkills" class="col-sm-2 control-label">Alamat Lengkap</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger" name="tambah">SUBMIT</button>
                                    </div>
                                </div>
                                <input type="text" name="provinsi" hidden="">
								<input type="text" name="distrik_id" hidden="">
								<input type="text" name="distrik" hidden="">
								<input type="text" name="tipe" hidden="">
								<input type="text" name="kodepos" hidden="">
                            </form>
                            </div>
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

	$fb=htmlspecialchars($_POST['fb']);
	$ig=htmlspecialchars($_POST['ig']);
	$youtube=htmlspecialchars($_POST['youtube']);
	$twitter=htmlspecialchars($_POST['twitter']);

	$koneksi->query("UPDATE toko SET fb='$fb', ig='$ig', youtube='$youtube', twitter='$twitter'");

	echo "<script>alert('Sosmed berhasil disimpan');</script>";
	echo "<script>location='index?halaman=profil';</script>";

}

?>

<?php  
if (isset($_POST["edit"])) 
{

	$nama=htmlspecialchars($_POST['namatoko']);
	$email=htmlspecialchars($_POST['email']);
	$telepon=htmlspecialchars($_POST['telepon']);
	$deskripsi=htmlspecialchars($_POST['deskripsi']);
    $domain=htmlspecialchars($_POST['domain']);
    $titik=htmlspecialchars($_POST['titik']);

	$koneksi->query("UPDATE toko SET namatoko='$nama', email='$email', telepon='$telepon', diskripsi='$deskripsi', domain='$domain', titik='$titik'");

	echo "<script>alert('Sosmed berhasil disimpan');</script>";
	echo "<script>location='index?halaman=profil';</script>";

}

?>
<?php  
if (isset($_POST["tambah"])) 
{

	$provinsi=htmlspecialchars($_POST['provinsi']);
	$distrik=htmlspecialchars($_POST['distrik']);
    $distrik_id=htmlspecialchars($_POST['distrik_id']);
	$kodepos=htmlspecialchars($_POST['kodepos']);
	$alamat=htmlspecialchars($_POST['alamat']);
	$tipe=htmlspecialchars($_POST['tipe']);

	$koneksi->query("UPDATE toko SET provinsi='$provinsi', distrik='$distrik', kodepos='$kodepos', alamat='$alamat', tipe='$tipe', distrik_id='$distrik_id'");

	echo "<script>alert('Lokasi berhasil disimpan');</script>";
	echo "<script>location='index?halaman=profil';</script>";

}

?>

<script >
		$(document).ready(function(){
			$.ajax({
				type:'post',
				url:'dataprovinsi.php',
				success:function(hasil_provinsi)
				{
					$("select[name=provinsi]").html(hasil_provinsi);
				}
			});
			$("select[name=provinsi").on("change",function(){
				var	id_provinsi_terpilih=$("option:selected",this).attr("id_provinsi");
				$.ajax({
					type:'post',
					url:'datadistrict.php',
					data: 'id_provinsi='+id_provinsi_terpilih,
					success:function(hasil_distrik)
					{
						$("select[name=distrik]").html(hasil_distrik);
					}
				})
			});
			$("select[name=distrik]").on("change", function(){
				var prov=$("option:selected",this).attr("provinsi");
				var iddist=$("option:selected", this).attr("distrik_id");
				var dist=$("option:selected", this).attr("distrik");
				var tipe=$("option:selected", this).attr("tipe");
				var kode=$("option:selected", this).attr("kodepos");
				// alert(prov);
				$("input[name=provinsi]").val(prov);
				$("input[name=distrik_id]").val(iddist);
				$("input[name=distrik]").val(dist);
				$("input[name=tipe]").val(tipe);
				$("input[name=kodepos]").val(kode);


			});
		});
</script>