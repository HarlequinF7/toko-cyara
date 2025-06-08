
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<div class="card">
	   		<div class="body">
                <div class="block-header">
                    <h2>TAMBAH ARTIKEL</h2>
                </div>
	   			<form method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Judul Artikel</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="halaman" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Isi Artikel</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="isi" rows="10" required="" id="deskripsi"></textarea>
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
                                <input type="file" name="gambar" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" name="simpan">Tambah Halaman</button>
                	</div>
                </div>
            	</form>
        	</div>
        </div>
	</div>
</div>
<?php 
if (isset($_POST['simpan']))
{
    $namanamafoto = $_FILES['gambar']['name'];
    $lokasilokasifoto =$_FILES['gambar']['tmp_name'];
    $ack = rand(1,99999);
    $unk = $ack.$namanamafoto;
    move_uploaded_file($lokasilokasifoto, "../foto_produk/".$unk);
    $tanggal=date("Y-m-d");
    $halaman=htmlspecialchars($_POST['halaman']);
    $isi=$_POST['isi'];
	$koneksi->query("INSERT INTO artikel (judul, isi, tanggal, gambar) VALUES('$halaman', '$isi', '$tanggal', '$unk')");
	echo "<script>alert('Artikel sudah ditambah');</script>";
	echo "<script>location='index?halaman=halaman';</script>";


}

?>
