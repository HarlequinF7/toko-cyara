
<?php 
$data=array();
$ambil = $koneksi->query("SELECT * FROM tema");
while($pecah = $ambil->fetch_assoc()){
	$data[]=$pecah;
}

?>

 <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="block-header">
		    <h2>BANNER</h2>
		</div>
	    <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php foreach ($data as $key => $value): ?>
						<div class="col-md-6">
							<img src="<?php echo $value["tema"] ?>" alt="" class="img-responsive"><br>
							<a href="index.php?halaman=hapustema&id=<?php echo $value["id_tema"] ?>" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></a>
						</div>
						<?php endforeach ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<form method="post" enctype="multipart/form-data">
							<input type="text" name="gambar" class="form-control"  placeholder="Url Gambar" required>
                    		<input type="text" name="url"class="form-control"  placeholder="URL Affiliate" required><br>
							<button class="btn btn-primary" name="simpan" ><i class="material-icons">note_add</i>Tambah Banner</button>
						</form>
						 <span>* Maksimal 3 Gambar Banner</span>
                    </div>

                </div>
            </div>
	    </div>
	</div>
</div>

 <?php  
if (isset($_POST["simpan"])) 
{
	
	$namafoto=htmlspecialchars($_POST['gambar']);
	$koneksi->query("INSERT INTO tema(tema, url)VALUES('$namafoto','$_POST[url]')");

	echo "<script>alert('foto banner berhasil disimpan');</script>";
	echo "<script>location='index.php?halaman=banner';</script>";

}

?>
