
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<div class="card">
	   		<div class="body">
                <div class="block-header">
                    <h2>TAMBAH HALAMAN</h2>
                </div>
	   			<form method="post" >
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Judul Halaman</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="halaman" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Isi Halaman</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="isi" rows="10" required="" id="deskripsi"></textarea>
                                <script>
                                    CKEDITOR.replace( 'deskripsi' );
                                </script>
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
    $halaman=htmlspecialchars($_POST['halaman']);
    $isi =$_POST['isi'];
	$koneksi->query("INSERT INTO halaman (halaman, isi) VALUES('$halaman', '$isi')");
	echo "<script>alert('Halaman sudah ditambah');</script>";
	echo "<script>location='index?halaman=halaman';</script>";


}

?>
