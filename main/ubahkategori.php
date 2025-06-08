
<?php 
$ambil = $koneksi->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?> 

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="block-header">
		    <h2>UBAH KATEGORI</h2>
		</div>
		<div class="card">
	   		<div class="body">
	   			<form method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Nama Kategori</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kategori" class="form-control" value="<?php echo $pecah['nama_kategori'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Ikon Kategori</h2>
                        <div class="form-group">
					 		<img src="../tema/<?php echo $pecah['ikon']; ?>" width="200">
					 	</div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" name="ubah">Ubah Kategori</button>
                	</div>
                </div>
            	</form>
        	</div>
        </div>
	</div>
</div>

<?php 
if (isset($_POST['ubah']))
{
	$namafoto=$_FILES["foto"]["name"];
	$lokasifoto=$_FILES["foto"]["tmp_name"];
	$kategori=htmlspecialchars($_POST['kategori']);
	
	if(!empty($lokasifoto)){
		move_uploaded_file($lokasifoto, "../tema/".$namafoto);
		$il =$koneksi->query("SELECT*FROM kategori WHERE id_kategori='$_GET[id]'");
		$uh = $il->fetch_assoc();
		$logo =$uh['ikon'];
		if (file_exists("../tema/$logo"))
		{
			unlink("../tema/$logo");
		}
		$koneksi->query("UPDATE kategori SET nama_kategori='$kategori', ikon='$namafoto' WHERE id_kategori='$_GET[id]'");
	}
	else{
		$koneksi->query("UPDATE kategori SET nama_kategori='$kategori' WHERE id_kategori='$_GET[id]'");
	}
	echo "<script>alert('kategori sudah diubah');</script>";
	echo "<script>location='index.php?halaman=kategori';</script>";


}
?>