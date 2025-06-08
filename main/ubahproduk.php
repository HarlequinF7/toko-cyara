
<?php 

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$kate=$pecah['id_kategori'];
// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
$fotoproduk=array();
$ambilfoto=$koneksi->query("SELECT*FROM produk_foto WHERE id_produk='$_GET[id]'");
while($tiap=$ambilfoto->fetch_assoc())
{
    $fotoproduk[]=$tiap;
}

$kat= $koneksi->query("SELECT * FROM kategori WHERE id_kategori='$kate'");
$k=$kat->fetch_assoc();
?>
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
            <h2>UBAH PRODUK</h2>
        </div>
        <form method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">Nama Produk</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk'] ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">Harga (Rp)</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="harga" value="<?php echo $pecah['harga_produk'] ?>">
                            </div> 
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h2 class="card-inside-title">Berat (Gram)</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="berat" value="<?php echo $pecah['berat_produk'] ?>">
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h2 class="card-inside-title">Kategori</h2>
                        <select class="form-control" name="id_kategori" id="id_kategori"  required="required">
                            <option value="<?php echo $k['id_kategori'] ?>"><?php echo $k['nama_kategori'] ?></option>
                            <?php foreach ($datakategori as $key => $value): ?>
                            <option value="<?php echo $value["id_kategori"] ?>"><?php echo $value["nama_kategori"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">URL Affiliate</h2>
                        <input type="text" class="form-control" name="affiliate" value="<?php echo $pecah['url'] ?>">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Stok</h2>
                        <input type="text" class="form-control" name="stok" value="<?php echo $pecah['stok_produk'] ?>">
                    </div>

                </div>
            </div>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Foto Produk</h2>
                        <?php foreach ($fotoproduk as $key => $value): ?>
                        <div class="col-md-2">
                            <?php if ($value['url'=='']): ?>
                            <img src="../foto_produk/<?php echo $value["nama_produk_foto"] ?>" alt="" class="img-responsive">
                            <?php else: ?>
                            <img src="<?php echo $value["url"] ?>" alt="" class="img-responsive">    
                            <?php endif ?>
                            <a href="hapusfotoproduk?idfoto=<?php echo $value["id_produk_foto"] ?>&idproduk=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></a>
                        </div>
                        <?php endforeach ?>
                        
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form method="post" enctype="multipart/form-data">
                            <input type="file" name="fotomu" placeholder="File Gambar">
                            <input type="text" name="url" placeholder="URL Gambar" ><br>
                            <button class="btn btn-primary" name="simpan" ><i class="material-icons">note_add</i>Tambah Foto</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="card-inside-title">Deskripsi</h2>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10"><?php echo $pecah['deskripsi_produk'] ?></textarea>
                        <script>
                            CKEDITOR.replace( 'deskripsi' );
                        </script>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class ="btn btn-primary" name="ubah"><i class="material-icons">edit</i>Simpan</a></button>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
    </div>
</div>

 <?php  
 if (isset($_POST['ubah'])){
    $nama=htmlspecialchars($_POST['nama']);
    $harga=htmlspecialchars($_POST['harga']);
    $berat=htmlspecialchars($_POST['berat']);
    $deskripsi=$_POST['deskripsi'];
    $stok=htmlspecialchars($_POST['stok']);
    $urll=htmlspecialchars($_POST['affiliate']);
    $slug2=preg_replace("/\s/","-",$nama);
    $slug1= strtolower($slug2);
    $slug = preg_replace("/[^a-zA-Z0-9 -]/","",$slug1);
    $koneksi->query("UPDATE produk SET nama_produk='$nama', id_kategori='$_POST[id_kategori]',  harga_produk='$harga', berat_produk='$berat',  deskripsi_produk='$deskripsi', stok_produk='$stok', url='$urll', slug='$slug' WHERE id_produk='$_GET[id]'");
    

    echo "<script>alert('data produk telah diubah');</script>";
    echo "<script>location='index?halaman=produk';</script>";
 }
 ?>
 <?php  
if (isset($_POST["simpan"])) 
{
    $lokasifoto=$_FILES["fotomu"]["tmp_name"];
    $namafoto=$_FILES["fotomu"]["name"];
    $ack = rand(1,99999);
    $unk = $ack.$namafoto;
    $url=$_POST['url'];
    //upload
    move_uploaded_file($lokasifoto, "../foto_produk/".$unk);
    $koneksi->query("INSERT INTO produk_foto(id_produk, nama_produk_foto,url)VALUES('$_GET[id]','$unk','$url')");

    echo "<script>alert('foto produk berhasil disimpan');</script>";
    echo "<script>location='index?halaman=ubahproduk&id=$_GET[id]';</script>";  

}

?>
