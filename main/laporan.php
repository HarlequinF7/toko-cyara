
<div class="block-header">
    <h2>LAPORAN PENJUALAN</h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
					<?php 
					$semuadata=array();
					$tglm = "_";
					$tgls ="_";
					if (isset($_POST["kirim"]))
					{
						$tglm = $_POST["tglm"];
						$tgls =$_POST['tgls'];
						$ambil=$koneksi->query("SELECT*FROM pembelian pm LEFT JOIN pembelian_produk pl ON pm.id_pembelian=pl.id_pembelian WHERE tanggal_pembelian BETWEEN '$tglm' AND '$tgls' ");
						WHILE ($pecah =$ambil->fetch_assoc())
						{
							$semuadata[]=$pecah;
						}
					}
					?>
						
					<h2>Laporan Penjualan dari <?php echo $tglm ?> Hingga <?php echo $tgls ?></h2>
					<hr>

					<form method="post">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label>Tanggal Mulai</label>
									<input type="date" name="tglm" class="form-control">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Tanggal Selesai</label>
									<input type="date" name="tgls" class="form-control">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label></label><br>
									<button class="btn btn-primary" name="kirim">Lihat</button>
								</div>
							</div>
						</div>
					</form>

					<table class="table table-bordered table-striped table-hover dataTable js-exportable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Produk</th>
								<th>Tanggal</th>
								<th>Status</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<?php $total=0; ?>
							<?php $nomor=1;?>
							<?php foreach ($semuadata as $key => $value): ?>
							<?php $total+=$value['total_pembelian'] ?>
								
							
							<tr>
								<td><?php echo $nomor;?></td>
								<td><?php echo $value["nama"] ?></td>
								<td><?php echo date("l, F d Y/H:i ", strtotime($value['tanggal_pembelian']));?></td>
								<td><?php echo $value["status_pembelian"] ?></td>
								<td>Rp.<?php echo number_format($value["total_pembelian"]) ?></td>
							</tr>
							<?php $nomor++;?>
							<?php endforeach ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="4">Total</th>
								<th>Rp.<?php echo number_format($total) ?></th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				
			</div>	
		</div>
	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="block-header">
	    <h2>DATA PENJUALAN BULANAN</h2>
	</div>
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
                	<?php
                	$data=array();
					
					if (isset($_POST['submit'])) {
						$bulan=date($_POST['bulan']);
					
					 	$tampil=$koneksi->query("SELECT  *, SUM(pembelian_produk.jumlah) AS jml FROM pembelian JOIN pembelian_produk ON pembelian.id_pembelian=pembelian_produk.id_pembelian WHERE MONTH(pembelian.tanggal_pembelian)='$bulan' GROUP BY pembelian_produk.nama ORDER BY jml DESC");
					 	while($tam=$tampil->fetch_assoc())

						 {
							$data[]=$tam;
						}
					 } 
					?>
                	<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="bulan">
										<option>Pilih Bulan</option>
										<option value="1">Januari</option>
										<option value="2">Februari</option>
										<option value="3">Maret</option>
										<option value="4">April</option>
										<option value="5">Mei</option>
										<option value="6">Juni</option>
										<option value="7">Juli</option>
										<option value="8">Agustus</option>
										<option value="9">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">Desember</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label></label>
									<button class="btn btn-primary" name="submit" type="submit">Lihat</button>
								</div>
							</div>
						</div>
					</form>
					
                	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
					<thead>
						<tr>
							<th>Ranking</th>
							<th>Nama Produk</th>
							<th>Status Pembelian</th>
							<th>Total Penjualan</th>
						</tr>
					</thead>
					<tbody>
						<?php $tota=0; ?>
						<?php $nomo=1;?>
						<?php foreach ($data as $key => $ta): ?>
						<?php $tota+=$ta['jml'] ?>
						<tr>
							<td><?php echo $nomo;?></td>
							<td><?php echo $ta['nama'];?></td>
							<td><?php echo $ta['status_pembelian'];?></td>
							<td><?php echo $ta['jml'];?></td>
						</tr>
						<?php $nomo++;?>
						<?php endforeach ?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="3">Total</th>
							<th><?php echo $tota ?></th>
						</tr>
					</tfoot>	
				</table>


				
			</div>	
		</div>
	</div>

    <div class="block-header">
	    <h2>DATA RANKING PRODUK PENJUALAN</h2>
	</div>
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
                	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
					<?php 
				$semuadata=array();
				$am=$koneksi->query("SELECT nama , SUM(jumlah) FROM pembelian_produk GROUP BY nama ORDER BY SUM(jumlah) DESC");
				while($pe=$am->fetch_assoc())
					{
						$semuadata[]=$pe;
					}
				?>


					<thead>
						<tr>
							<th>Ranking</th>
							<th>Nama Produk</th>
							<th>Total Penjualan</th>
						</tr>
					</thead>
					<tbody>
						<?php $total=0; ?>
						<?php $nomor=1;?>
						<?php foreach ($semuadata as $key => $value): ?>
						<?php $total+=$value['SUM(jumlah)'] ?>
						<tr>
							<td><?php echo $nomor;?></td>
							<td><?php echo $value['nama'];?></td>
							<td><?php echo $value['SUM(jumlah)'];?></td>
						</tr>
						<?php $nomor++;?>
						<?php endforeach ?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2">Total</th>
							<th><?php echo $total ?></th>
							<th></th>
						</tr>
					</tfoot>	
				</table>


				
			</div>	
		</div>



