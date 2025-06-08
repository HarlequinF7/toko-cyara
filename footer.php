<link rel="stylesheet" href="js/leaflet/leaflet.css">
<script src="js/leaflet/leaflet.js"></script>

<style type="text/css">
	.footer{
		background-color:black;
	}
</style>
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index"><img src="fotoprofil/<?php echo $toko1['fotoprofil'] ?>" alt="#"></a>
							</div>
							<p class="text"><?php echo $toko1['diskripsi'] ?></p>
							<p class="call">Ada Pertanyaan? Hubungi Kami<span><a href="tel:<?php echo $toko1['telepon'] ?>">+<?php echo $toko1['telepon'] ?></a></span></p>
							<?php $titik=$toko1['titik'] ?>

						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<?php $tok=$koneksi->query("SELECT * FROM halaman");
							 while($tok1=$tok->fetch_assoc()){
							 $hal = preg_replace("/\s/","-",$tok1['halaman']);
                             $halaman = "halaman".$tok1['id']."-".$hal.".html"; 
							 ?>
							<ul>
								<li style="margin-bottom: 8px"><a href="<?php echo $halaman ?>" ><?php echo $tok1['halaman'] ?></a></li>
							</ul>
							<?php } ?>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4></h4>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Temukan Kami</h4>
							
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li><?php echo $toko1['alamat'] ?>, <?php echo $toko1['tipe'] ?> <?php echo $toko1['distrik'] ?></li>
									<li><?php echo $toko1['provinsi'] ?></li>
									<li><?php echo $toko1['email'] ?></li>
									<li>+<?php echo $toko1['telepon'] ?></li>
								</ul>
							</div><br>
							<div id='maps-view-absen' style='width: 100%; height:250px;'></div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="<?php echo $toko1['fb'] ?>"><i class="ti-facebook"></i></a></li>
								<li><a href="<?php echo $toko1['youtube'] ?>"><i class="ti-youtube"></i></a></li>
								<li><a href="<?php echo $toko1['ig'] ?>"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2022 -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script>
            if (document.getElementById("maps-view-absen")) {
                var map = L.map('maps-view-absen').setView([<?php echo $titik; ?>], 15);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> Djazuli Ahmad'
                }).addTo(map);

                L.marker([<?php echo $titik; ?>]).addTo(map);
            }
        </script>