<?php 
$toko=$koneksi->query("SELECT * FROM toko");
$toko1=$toko->fetch_assoc();
?> 
<style type="text/css">
			.header.shop .middle-inner
			{
				background: <?= $toko1['backgroundaktif'] ?>;
				border-top: 0px;
			}
			.header.sticky .header-inner .nav li a
			{
				color: <?= $toko1['warnamenu'] ?>;
			}
			.header.shop .header-inner{
				background: <?= $toko1['warnaheader'] ?>;
			}

			.header.shop .nav li a
			{
				color: <?= $toko1['warnamenu'] ?>;
			}
			@media (max-width: 500px){
				.header.shop .middle-inner
				{
					box-shadow:3px 2px 3px 2px rgba(0,0,0,0.3);
				}
			}
		</style>
<?php if ($toko1['kanan']==1): ?>
<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<?php else: ?>			
<?php endif ?>		
<header class="header shop" >
		<!-- Topbar -->
		
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index"><img src="fotoprofil/<?php echo $toko1['fotoprofil'] ?>" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form" method="post" action="cari">
									<input type="text"  name="item" placeholder="Cari Produk">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form method="post" action="cari">
									<input name="item" placeholder="Cari Produk" type="text">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="profil" class="single-icon"><i class="ti-user" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="keranjang" class="single-icon"><i class="ti-bag"></i></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner" >
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="index">Home</a></li>
													<li><a href="#">Kategori<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<?php foreach ($dat as $key => $v): ?>
															<?php $j = preg_replace("/\s/","-",$v['nama_kategori']);
                              								$l = "kategori".$v['id_kategori']."-".$j.".html"; ?>
															<li><a href="<?php echo $l ?>"><?php echo $v['nama_kategori'] ?></a></li>
															<?php endforeach ?>
														</ul>
													</li>
													<li><a href="keranjang">Keranjang</a></li>
													<li><a href="https://cyaraafnan.my.id">Artikel</a></li>
													<li><a href="#">Akun<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="profil">Profil</a></li>
															<?php if (isset($username)): ?>
															<li><a href="logout">Logout</a></li>	
															<?php else: ?>
															<li><a href="login">Login</a></li>
															<li><a href="login">Register</a></li>
															<?php endif ?>
														</ul>
													</li>
													<li><a href="#">Informasi Toko<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<?php $tok=$koneksi->query("SELECT * FROM halaman");
															 while($tok1=$tok->fetch_assoc()){
															 $hal = preg_replace("/\s/","-",$tok1['halaman']);
									                         $halaman = "halaman".$tok1['id']."-".$hal.".html"; 
															 ?>
															<li><a href="<?php echo $halaman ?>"><?php echo $tok1['halaman'] ?></a></li>
															<?php } ?>
														</ul>
													</li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>