<style type="text/css">
    * { margin: 0; padding: 0; }
    img { max-width: 100%; }
    .cycle-slideshow {
        width: 100%;
        max-width: 960px;
        z-index: -1;
        display: block;
        position: relative;
        margin: 20px auto;
        overflow: hidden;
    }
    .cycle-prev, .cycle-next {
        font-size: 200%;
        color: #fff;
        display: block;
        position: absolute;
        top: 50%;
        z-index: 100;
        cursor: pointer;
        margin-top: -16px;
    }
    .cycle-prev { left: 42px; }
    .cycle-next { right: 62px; }
    .cycle-pager {
        position: absolute;
        width: 100%;
        height: 10px;
        bottom: 10px;
        z-index: 990;
        color: silver;
        text-align: center;
    }
    .cycle-pager span {
        text-indent: 100%;
        top: 100px;
        width: 14px;
        height: 8px;
        display: inline-block;
        box-shadow: 2px 1px 5px rgba(0,0,0,0.8);
        border-radius: 20%;
        margin: 0 10px;
        white-space: nowrap;
        cursor: pointer;
    }
    .cycle-pager-active 
    { 
    	background-color: black;
    }
    /*style produk detail*/
    .product__details__text h3 {
		color: #252525;
		font-weight: 700;
		margin-bottom: 16px;
	}

	.product__details__text .product__details__rating {
		font-size: 14px;
		margin-bottom: 12px;
	}

	.product__details__text .product__details__rating i .on{
		margin-right: -2px;
		color: #EDBB0E;
	}
    .product__details__text .product__details__rating i .off{
        margin-right: -2px;
        color: grey;
    }

	.product__details__text .product__details__rating span {
		color: #dd2222;
		margin-left: 4px;
	}

	.product__details__text .product__details__price {
		font-size: 30px;
		color: #dd2222;
		font-weight: 600;
		margin-bottom: 15px;
	}

	.product__details__text p {
		margin-bottom: 45px;
	}

	.product__details__text ul {
		border-top: 1px solid #ebebeb;
		padding-top: 40px;
		margin-top: 50px;
	}

	.product__details__text ul li {
		font-size: 16px;
		color: #1c1c1c;
		list-style: none;
		line-height: 36px;
	}

	.product__details__text ul li b {
		font-weight: 700;
		width: 170px;
		display: inline-block;
	}

	.product__details__text ul li span samp {
		color: #dd2222;
	}

	.product__details__text ul li .share {
		display: inline-block;
	}

	.product__details__text ul li .share a {
		display: inline-block;
		font-size: 15px;
		color: #1c1c1c;
		margin-right: 25px;
	}

	.product__details__text ul li .share a:last-child {
		margin-right: 0;
	}
    .product__details__quantity {
    display: inline-block;
    margin-right: 6px;
}
    .pro-qty {
    width: 140px;
    height: 50px;
    display: inline-block;
    position: relative;
    text-align: center;
    background: #f5f5f5;
    margin-bottom: 5px;
}

.pro-qty input {
    height: 100%;
    width: 100%;
    font-size: 16px;
    color: #6f6f6f;
    width: 50px;
    border: none;
    background: #f5f5f5;
    text-align: center;
}

.pro-qty .qtybtn {
    width: 35px;
    font-size: 16px;
    color: #6f6f6f;
    cursor: pointer;
    display: inline-block;
}


	@media only screen and (min-device-width:120px) and (max-device-width : 750px)
	{
		.baru {
			display: block;
		}
	}

	

</style>
<script type="text/javascript" src="slider.js"></script>
<?php
include 'time_since.php';

$barang= $koneksi->query("SELECT * FROM  produk_foto  WHERE id_produk='$id_produk'");
while($produkdetail=$barang->fetch_assoc())
{
    $arus[]=$produkdetail;
}

?>
<form method="post">
<section class="product-details spad">
    <div class="container">
        <div class="row">
        	
            <div class="col-lg-6 col-md-6 ">
               <div class="cycle-slideshow">
				    <span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
				    <span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
				    <span class="cycle-pager"></span> 
				    <?php foreach ($arus as $key => $alur): ?>
                        <?php if ($alur['url']==''): ?>
                        <img src="foto_produk/<?php echo $alur["nama_produk_foto"] ?>" style="width: 100%; max-height: 450px">
                        <?php else: ?>
                        <img src="<?php echo $alur["url"] ?>" style="width: 100%; max-height: 450px">
                        <?php endif ?>
				    <?php endforeach ?> <!-- Untuk membuat tanda bulat atau link pada slider -->
				</div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h4><?php echo $produk['nama_produk'] ?></h4>
                    <div class="product__details__rating">
                        <span ><img src="images/staro.png"></i></span>
                        <span ><img src="images/staro.png"></i></span>
                        <span ><img src="images/staro.png"></i></span>
                        <span ><img src="images/staro.png"></i></span>
                        <span ><img src="images/staro.png"></i></span>
                        <span>(5)</span>
                    </div>
                    <?php if ($laba=='0'): ?>
                    <div class="product__details__price" style="margin-bottom: 10px">Rp.<?php echo $bati ?></div>
                    <?php else: ?>
                    <div class="product__details__price" style="margin-bottom: 10px"><span style="text-decoration: line-through;">Rp.<?php echo $bati ?></span> <span>Rp.<?php echo $diskonharga ?></span></div>        
                    <?php endif ?>

                    <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="jumlah">
                                </div>
                            </div>
                        </div>
                    <button name="keranjang" type="submit" class="baru btn primary-btn " style="background-color: white; color:red; border : 1px solid red"><b></i> KERANJANG</b></button>
                    <a href="<?php echo $produk['url'] ?>" class="baru btn primary-btn"  style="background-color: red; "><b>BELI</b></a>
                    <nav class="navbar navbar-dark bg-white navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none" style="padding: 0px">
                        <button name="keranjang" type="submit" class="btn primary-btn" style="background-color: white; color:red; width: 50%;"><b>KERANJANG</b></button>
                        <a href="<?php echo $produk['url']?>" class="baru btn primary-btn" style="background-color: red; width: 50%; "><b>BELI</b></a>
                    </nav> 
                    <ul style="border-bottom: 2px solid red; margin-top: 13px; padding-top: 8px" >
                        <li><b>Stok Produk</b> <span><?php echo $produk['stok_produk'] ?></span></li>
                        <li><b>Berat Produk</b> <span><?php echo $produk['berat_produk'] ?> Gram</span></li>
                        <li><b>Bagikan</b>
                            <div class="share">
                                <a href="https://www.facebook.com/share.php?u=<?php echo $urlweb ?>"><img src="images/facebook.png"></a>
                                <a href="https://twitter.com/home/?status=<?php echo $urlweb ?>"><img src="images/twit.png"></a>
                                <a href="https://api.whatsapp.com/send?phone=&text=<?php echo $produk['nama_produk'] ?> | <?php echo $urlweb ?>" onclick="return ! window.open(this.href);"><img src="images/wa.png"></a>
                                <a href="whatsapp://send?text=<?php echo $urlweb ?>"><img src="images/wa.png"></a>
                                <a href="https://telegram.me/share/url?url=<?php echo $urlweb ?>"><img src="images/tele.png"></a>
                                <a href="https://plus.google.com/share?url=<?php echo $urlweb ?>"><img src="images/email.png"></a>
                            </div>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
            <br>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                aria-selected="false">Diskusi</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc" style="overflow: scroll; max-height: 400px">
                                <h6>Deskripsi</h6>
                                <p><?php echo $produk['deskripsi_produk'] ?></p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc" style="overflow: scroll; max-height: 400px">
                                <br>
                               <?php
                               $al=$koneksi->query("SELECT*FROM komentar WHERE userip='$user_ip'");
                                $tat=$al->fetch_assoc(); 
                                $nam=$tat['nama'];
                                $am =$koneksi->query("SELECT*FROM komentar 
                                    WHERE id_produk='$id_produk' ORDER BY tgl_komentar DESC");
                                    while($det =$am->fetch_assoc()){
                                        ?>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2" ><img src="fotoprofil/man.png" style="width: 100%; max-width: 50px; border-radius: 50%;" ></td>
                                            <td style="border-bottom: 2px solid red"><b><?php echo $det['nama'] ?></b>* <?php echo date("l, F d Y/H:i ", strtotime($det['tgl_komentar']));?></td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td colspan="1"><?php echo $det['komentar'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php } ?>    
                                <form method="post">
                                    <?php if (!empty($nam)): ?>
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $nam ?>" readonly>  
                                    <?php else: ?>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Isikan Nama Anda">  
                                    </div>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <label>Isi Komentar</label>
                                        <textarea class="form-control" name="isi" placeholder="Isi Komentar"></textarea>    
                                    </div>
                                     <br> 
                                    <button class=" btn btn-primary" name="kirim"> Kirim</button>
                                </form>
                                <?php if (isset($_POST["kirim"])) 
                                {
                                    $nama=htmlspecialchars($_POST['nama']);
                                    $isi =htmlspecialchars($_POST['isi']);
                                    
                                    
                                    $koneksi->query("INSERT INTO komentar (nama, id_produk, tgl_komentar, komentar, userip)
                                VALUES( '$nama' , '$id_produk', '$tgl_komentar', '$isi', '$user_ip')");

                                    echo "<script> location ='$urlweb';</script>";    
                                    
                                                         
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</form>
<?php  
if (isset($_POST["keranjang"])) 
{
    $jumlah=htmlspecialchars($_POST["jumlah"]);
    $_SESSION["keranjang"][$id_produk]= $jumlah;
    echo "<script> alert('Produk Masuk Ke Favorit');</script>";
    echo "<script> location ='keranjang';</script>";
}
?>
<script type="text/javascript">

	var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
</script>
