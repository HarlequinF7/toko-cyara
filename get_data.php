<?php
include 'koneksi.php';
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
if(isset($_GET['offset']) && isset($_GET['limit'])) {
  $limit = 16;
  $offset = $_GET['offset'];
			$semua= $koneksi->query("SELECT * FROM produk JOIN produk_foto ON produk.id_produk=produk_foto.id_produk GROUP BY produk_foto.id_produk LIMIT {$limit} OFFSET {$offset} ");
			while($semuanya=$semua->fetch_assoc()){
			$kurangi = $semuanya['diskon']; 
			$jumlahkarakter= strlen($kurangi);
            $price= $semuanya['harga_produk'];
           
			$judul4 = preg_replace("/\s/","-",$semuanya['nama_produk']);
                        $url3 = "produkdetail".$semuanya['id_produk']."-".$judul4.".html";
			?>
			<?php if ($toko1['tampilan']=='1'): ?>
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%; margin: 5px">
					<div class="row" >
						<div class="col-xl-6 col-lg-6 col-md-6 col-6">
							<div class="product-img">
								<a href="<?php echo $semuanya['slug'] ?>">
									<?php if ($semuanya['url']==''): ?>

									<img class="default-img" src="foto_produk/<?php echo $semuanya['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
									<img class="hover-img" src="foto_produk/<?php echo $semuanya['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
									<?php else: ?>

									<img class="default-img" src="<?php echo $semuanya['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
									<img class="hover-img" src="<?php echo $semuanya['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">
										
									<?php endif ?>
									
								</a>
							</div>
						</div>							
						<div class="col-xl-6 col-lg-6 col-md-6 col-6">
							<div class="product-content" style="margin: 5px;" >
								<h6><a href="<?php echo $semuanya['slug'] ?>" style="font-size: 18px"><?php echo $semuanya['nama_produk'] ?></a></h6>
								<div class="product-price" >
									<span style="font-size: 22px">Rp.<?php echo $price ?></span>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>	
			<?php else: ?>	
			<div class="col-xl-3 col-lg-4 col-md-4 col-6">
				
				<div class="single-product" style="box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3); border-radius: 2%">
					
					<div class="product-img">
						<a href="<?php echo $semuanya['slug'] ?>">
							<?php if ($semuanya['url']==''): ?>

							<img class="default-img" src="foto_produk/<?php echo $semuanya['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px" alt="#">
							<img class="hover-img" src="foto_produk/<?php echo $semuanya['nama_produk_foto'] ?>" style="width: 100%; max-height: 170px"  alt="#">
							<?php else: ?>

							<img class="default-img" src="<?php echo $semuanya['url'] ?>" style="width: 100%; max-height: 170px" alt="#">
							<img class="hover-img" src="<?php echo $semuanya['url'] ?>" style="width: 100%; max-height: 170px"  alt="#">
								
							<?php endif ?>
							
						</a>
						
					</div>
					<div class="product-content" style="margin: 5px">
						<h6><a href="<?php echo $semuanya['slug'] ?>"  style="font-size: 18px"><?php echo $semuanya['nama_produk'] ?></a></h6>
						<div class="product-price">
							
							<span style="font-size: 22px">Rp.<?php echo $price ?></span>
							
						</div>
					</div>
				
				</div>
			
			</div>
			<?php endif ?>
			<?php } ?>
	<?php } ?>		