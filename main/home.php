<?php
	 // total value
    $jumlahpengunjung=$koneksi->query("SELECT * FROM view  ");
    $jumlah_pengunjung= mysqli_num_rows($jumlahpengunjung);
 
    $jumlahkomentar=$koneksi->query("SELECT * FROM komentar  ");
    $jumlah_komentar= mysqli_num_rows($jumlahkomentar);

   $jumlahpelanggan=$koneksi->query("SELECT * FROM pelanggan  ");
    $jumlah_pelanggan= mysqli_num_rows($jumlahpelanggan);

    $jumlahproduk=$koneksi->query("SELECT * FROM produk  ");
    $jumlah_produk= mysqli_num_rows($jumlahproduk);

   
?>
        <div class="block-header">
                <h2>DASHBOARD</h2>
        </div>
        	<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL PELANGGAN</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_pelanggan ?></div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL KOMENTAR</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $jumlah_komentar ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">remove_red_eye</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL VISITOR</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $jumlah_pengunjung ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL PRODUK</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_produk ?></div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- #END# Widgets -->

           
            
            