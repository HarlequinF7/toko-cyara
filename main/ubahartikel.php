
<?php 
$ambil = $koneksi->query("SELECT * FROM artikel WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<div class="card">
	   		<div class="body">
                <div class="block-header">
                    <h2>UBAH ARTIKEL</h2>
                </div>
	   			<form method="post" >
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Judul Artikel</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="halaman" value="<?php echo $pecah['judul'] ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Isi Artikel</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="isi" rows="10" id="deskripsi"><?php echo $pecah['isi'] ?></textarea>
                                <script>
                                    CKEDITOR.replace( 'deskripsi' );
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Gambar Artikel</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <img src="../foto_produk/<?php echo $pecah['gambar'] ?>" style="max-width: 200px">
                                <input type="text" name="gambar" value="<?php echo $pecah['judul'] ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" name="ubah">Ubah</button>
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
    $foto=$pecah["gambar"];
    unlink("../foto_produk/".$foto);
    $namanamafoto = $_FILES['gambar']['name'];
    $lokasilokasifoto =$_FILES['gambar']['tmp_name'];
    $ack = rand(1,99999);
    $unk = $ack.$namanamafoto;
    move_uploaded_file($lokasilokasifoto, "../foto_produk/".$unk);
    $tanggal=date("Y-m-d");
	$koneksi->query("UPDATE artikel SET judul='$_POST[halaman]', isi='$_POST[isi]', '$unk' WHERE id='$_GET[id]'");
	echo "<script>alert('Artikel sudah diubah');</script>";
	echo "<script>location='index?halaman=halaman';</script>";


}

?>
