<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="body">
				<div class="block-header">
				    <h2>DETAIL TRANSAKSI</h2>
				</div>
				<?php
				$toko=$koneksi->query("SELECT * FROM toko");
				$toko1=$toko->fetch_assoc(); 
				$ambil =$koneksi->query("SELECT*FROM pembelian JOIN pelanggan
					ON pembelian.id_pelanggan=pelanggan.id_pelanggan
					WHERE pembelian.id_pembelian='$_GET[id]'");
				$detail =$ambil->fetch_assoc();
				$id=$_GET['id'];
				$payment =$koneksi->query("SELECT*FROM pembayaran JOIN pembelian ON pembayaran.id_pembelian=pembelian.id_pembelian WHERE pembayaran.id_pembelian='$_GET[id]'");
				$payments =$payment->fetch_assoc();
				$bukti1 =$koneksi->query("SELECT*FROM bukti WHERE id_pembelian='$_GET[id]'");
				$bukti =$bukti1->fetch_assoc();
				$kec=$detail['kecamatan'];
				$desa=$detail['desa'];
				$batas=$detail['batas'];
				$ongkir=$detail['ongkir'];
				$total_pembelian =$detail['total_pembelian'];
				$total=$total_pembelian+$ongkir;
				$id=$_GET['id'];
				$unik1= rand(1,9999);
					$judul1 = preg_replace("/\s/","-",'Gfst45');
					$url1 = "print".$id."-".$judul1."-".$unik1.".html";
				?>
			
				<div class="card-header"> Invoice :<strong> <?php echo $payments['orderid'] ?></strong>
                    <div class="pull-right"> <a class="btn btn-sm btn-info" href="<?php echo $url1?>" style="color: white"><i class="fa fa-print mr-1"></i> Print</a> 
                </div>
				<br><br>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h4 class="mb-3" style="margin-bottom: -10;"><b>Pesanan :</b></h4>
                            <div><strong>Invoice : <?php echo $payments['orderid'] ?></strong></div>
                            <div>Tanggal : <?php echo date("d F Y", strtotime($detail['tanggal_pembelian']))?></div>
                            <?php if (empty($payments['va_number'])): ?>
                            <?php else: ?>
                            <div>Kode Pembayaran : <b><?php echo $payments['va_number'] ?></b></div>	
                            <?php endif ?>
                            
                        </div>
                        <div class="col-sm-4">
                            <h4 class="mb-3" style="margin-bottom: -10px; margin-top: 15px"><b>Pelanggan :</b></h4><br>
                            <div><strong> Nama : <?php echo $detail['nama_pelanggan']; ?> </strong></div>
                            <div>Telepon : <?php echo $detail['telepon_pelanggan']; ?></div>
                            <div>Email : <?php echo $detail['email_pelanggan']; ?></div>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="mb-3" style="margin-bottom: -10px; margin-top: 15px"><b>Pengiriman :</b></h4><br>
                            <div><b>Paket: <?php echo $detail['paket']; ?></b> </div>
                            <div>Ongkir : Rp. <?php echo number_format($ongkir); ?></div>
                            <div>Alamat : <?php echo $detail['kecamatan']; ?><br><?php echo $desa; ?> <?php echo $detail['alamatpengiriman']; ?></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">Produk</th>
                                    <th class="center">Jumlah</th>
                                    <th class="center">Harga</th>
                                    <th class="center">SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $tota=0; ?>
                            	<?php $nomor=1;?>
                            	<?php $jml=0;?>
								<?php $tiap= $koneksi->query("SELECT * FROM pembelian_produk  JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE id_pembelian='$_GET[id]'");
								while($tiaptiap =$tiap->fetch_assoc()){
								$id_produk=$tiaptiap['id_produk'];
								$tota+=$tiaptiap['subharga'];
								$jml+=$tiaptiap['jumlah'];
								$mem=$koneksi->query("SELECT * FROM leveluser WHERE nama='$level' AND id_produk='$id_produk'");
								$member=$mem->fetch_assoc();
								?>
                                <tr>
                                	<td><?php echo 	$nomor ?></td>
                                    <td><?php echo 	$tiaptiap['nama'] ?></td>
                                    <td><?php echo 	$tiaptiap['jumlah'] ?></td>
									<td>Rp.<?php echo number_format($tiaptiap['harga']) ?></td>	
                                    <td>Rp.<?php echo number_format($tiaptiap['subharga'])	 ?></td>
                                </tr>
                                <?php $nomor++ ?>
                            	<?php } ?>
                            </tbody>
                            <?php if ($jml>$toko1['ongkir']): ?>
                            <?php $total=$tota; ?>	
                            <?php else: ?>
                            <?php $total=$tota+$ongkir; ?>	
                            <?php endif ?>
                            <tfoot style="border-bottom: 3px solid black">
                            	<tr>
                            		<td colspan="4">Total</td>
                            		<td>Rp.<?php echo number_format($tota) ?></td>
                            	</tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 ml-auto">

                        <?php if ($payments['status']=='pending' AND $payments['tfbank']=='payment gateaway'): ?><br>
                        Pembayaran Rp.<?php echo $total; ?> Sebelum Melewati <strong style="color: red"><?php echo date("l, d-M-Y /H:i", strtotime($payments['batas']))?></strong> Ke <br>
						<b><?php echo strtoupper($payments['bank'])  ?></b> Dengan Kode Pembayaran <strong><?php echo $payments['va_number'] ?></strong><br>
						<?php else: ?>
						Silahkan Melakukan Pembayaran  <b> Rp.<?php echo $total; ?></b> Sebelum Melewati <strong style="color: red"><?php echo date("l, d-M-Y /H:i", strtotime($payments['batas']))?></strong> Ke <br>
						<b><?php echo strtoupper($payments['tfbank'])  ?></b><br>
						<strong style="color: red">Jika Pembayaran Belum Dilakukan Maka Pembelian akan Batal Otomatis</strong>
						
                        <?php endif ?>
                         </div>
                        <div class="col-lg-6 col-sm-6 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left"><strong>Subtotal</strong></td>
                                        <td class="right">Rp.<?php echo number_format($tota ) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Voucher</strong></td>
                                        <td class="right">Rp.<?php echo number_format($detail['kupon'] ) ?></td>
                                    </tr>
                                    <tr>
                                    	<?php if ($jml<$toko1['ongkir']): ?>
                                    	<td class="left"><strong>Ongkir</strong></td>
                                        <td class="right">Rp.<?php echo number_format($ongkir); ?></td>
                                    	<?php else: ?>	
                                    	<td class="left"><strong>Gratis Ongkir</strong></td>
                                        <td class="right">Rp.<?php echo number_format(0); ?></td>
                                    	<?php endif ?>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Total</strong></td>
                                        <td class="right"><strong>Rp.<?php echo number_format($total); ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php if ($payments['tfbank']!=="payment gateaway"): ?>
							<a type="button" class="view_data btn btn-primary" data-toggle="modal"  data-target="#my" class= "btn btn-warning pull-right">Bukti Pembayaran</a>
						<?php else: ?>			
						<?php endif ?>
						<?php if ($payments['status']=='sudah bayar'): ?>
							<a href="kirim?id=<?php echo $id ?>" type="button" class="btn btn-warning">Pesanan Dikirim</a>
						<?php endif ?>
                        </div>
						
                    </div>
                </div>				
	        </div>
		</div>
	</div>
</div>	
<div class="modal fade" id="my" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
				<!-- memulai untuk konten dinamis -->
				<!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" align="center" id="myModalLabel" style="border-bottom: 5px solid red; padding-bottom: 2px;">Bukti Pembayaran</h4>
				</div>
               <form method="post" >
					<div class="form-group">
                        <label class="col-sm-4 col-form-label">Nama Pembayar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $bukti['nama'] ?>">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-4 col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $bukti['tanggal'] ?>">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $bukti['jumlah'] ?>">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-4 col-form-label">Bukti</label>
						<img src="../buktipembayaran/<?php echo $bukti['bukti'] ?>" alt="" styel="width:100%">
                    </div>
            	</form>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>