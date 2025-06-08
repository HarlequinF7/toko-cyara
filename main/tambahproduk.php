<?php
$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="block-header">
		    <h2>TAMBAH PRODUK</h2>
		</div>
		<form method="post" enctype="multipart/form-data">
	    <div class="card">
	   		<div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">Nama Produk</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">Harga Normal (Rp)</h2>
                        <div class="form-group">
	                        <div class="form-line">
	                            <input type="text" class="form-control" name="harga" placeholder="1000"  required="required">
	                        </div> 
                        </div> 
                    </div>
                </div>
	   		</div>

	   		<div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<h2 class="card-inside-title">Kategori</h2>
                        <select class="form-control" name="id_kategori" id="id_kategori"  required="required">
				 			<option value="">Pilih Kategori</option>
				 			<?php foreach ($datakategori as $key => $value): ?>
				 			<option value="<?php echo $value["id_kategori"] ?>"><?php echo $value["nama_kategori"] ?></option>
				 			<?php endforeach ?>
				 		</select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">Berat (Gram)</h2>
                        <div class="form-group">
                        	<div class="form-line">
	                            <input type="text" class="form-control" name="berat" placeholder="4"  required="required">
	                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">URL Affiliate Shopee/Tokped</h2>
                        <div class="form-group">
                        	<div class="form-line">
	                            <input type="text" class="form-control" name="affiliate" placeholder="URL Affiliate"  required="required">
	                        </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    	<h2 class="card-inside-title">Foto Produk</h2>
                        <div class="letak-input" style="margin-top: 10px;">
							<input type="file" class="form-control" name="foto[]"  placeholder="File Gambar">
							<input type="text" class="form-control" name="url[]"  placeholder="UrL Gambar">
						</div><br>
						<span class="btn btn-primary btn-tambah">
							<i class="material-icons">library_add</i>
						</span>
						<small>* Pilih Salah Satu File Gambar/URL</small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    	<h2 class="card-inside-title">Stok</h2>
                        <input type="number" class="form-control" name="stok"  required="required">
                    </div>
                </div>
            </div>
            <div class="body">
            	<div class="row clearfix">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="card-inside-title">Deskripsi</h2>
						<textarea class="form-control" name="deskripsi" id="deskripsi" rows="10"></textarea>
						<script>
					        CKEDITOR.replace( 'deskripsi' );
					    </script>
            		</div>
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            		<button class ="btn btn-primary" name="save"><i class="material-icons">save</i>Simpan</a></button>
            		</div>
            	</div>
            </div>
            
	    </div>
	</form>
	</div>
</div>
<?php
if (isset ($_POST['save']))
{
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("Y-m-d H:i:s");
	$namanamafoto = $_FILES['foto']['name'];
	$lokasilokasifoto =$_FILES['foto']['tmp_name'];
	$harga=htmlspecialchars($_POST['harga']);
	$berat=htmlspecialchars($_POST['berat']);
	$deskripsi=$_POST['deskripsi'];
	$stok=htmlspecialchars($_POST['stok']);
	$judul=htmlspecialchars($_POST['nama']);
	$slug2=preg_replace("/\s/","-",$judul);
	$slug1= strtolower($slug2);
	$slug = preg_replace("/[^a-zA-Z0-9 -]/","",$slug1);
	$koneksi->query("INSERT INTO produk (nama_produk,id_kategori,  harga_produk, berat_produk,  deskripsi_produk, stok_produk, url, tanggal, slug)
		VALUES('$judul','$_POST[id_kategori]', '$harga', '$berat', '$deskripsi','$stok','$_POST[affiliate]', '$tanggal', '$slug')");
	$id_produk_barusan=$koneksi->insert_id;
	foreach ($namanamafoto as $key => $tiap_nama) 
	{
		$url=$_POST['url'][$key];
		$tiap_lokasi =$lokasilokasifoto[$key];
        $ack = rand(1,99999);
        $unk = $ack.$tiap_nama;
		move_uploaded_file($tiap_lokasi, "../foto_produk/".$unk);

		$koneksi->query("INSERT INTO produk_foto(id_produk, nama_produk_foto, url)
			VALUES('$id_produk_barusan','$unk','$url')");
	}
	
	echo "<script>alert('Produk Ditambah');</script>";
	echo "<script>location='index?halaman=produk';</script>";

}
?>

<script>
	$(document).ready(function(){
		$(".btn-tambah").on("click",function(){
			$(".letak-input").append("<input type='file' class='form-control' name='foto[]' style='margin-top:10px'><input type='text' class='form-control'  placeholder='Url Gambar' name='url[]' >");
		})
	})
</script>
