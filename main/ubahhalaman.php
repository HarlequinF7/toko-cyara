
<?php 
$ambil = $koneksi->query("SELECT * FROM halaman WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="block-header">
		    <h2>UBAH HALAMAN</h2>
		</div>
		<div class="card">
	   		<div class="body">
	   			<form method="post" >
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Judul Halaman</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="halaman" value="<?php echo $pecah['halaman'] ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Isi Halaman</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="isi" rows="10" id="deskripsi"><?php echo $pecah['isi'] ?></textarea>
                                <script>
                                    CKEDITOR.replace( 'deskripsi' );
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" name="ubah">Ubah Halaman</button>
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

	$koneksi->query("UPDATE halaman SET halaman='$_POST[halaman]', isi='$_POST[isi]' WHERE id='$_GET[id]'");
	echo "<script>alert('Halaman sudah diubah');</script>";
	echo "<script>location='index?halaman=halaman';</script>";


}

?>
