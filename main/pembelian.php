
<!-- Navigation Menu Horizontal Scroll by igniel.com -->
<div class="block-header">
    <h2>TRANSAKSI</h2>
</div>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div>
		  	<ul  class="nav nav-tabs"  role="tablist" >
		    <li role="presentation" class="active"><a href="#semua" title="Download" aria-controls="home" role="tab" data-toggle="tab">Semua</a></a></li>
		    <li role="presentation"><a href="#belum" title="Download" aria-controls="home" role="tab" data-toggle="tab">Belum Bayar</a></a></li>
		    <li role="presentation" ><a href="#sudah" title="Download" aria-controls="home" role="tab" data-toggle="tab">Sudah Bayar</a></a></li>
		    <li role="presentation" ><a href="#dikirim" title="Download" aria-controls="home" role="tab" data-toggle="tab">Barang Dikirim</a></a></li>
		    <li role="presentation" ><a href="#batal" title="Download" aria-controls="home" role="tab" data-toggle="tab">Dibatalkan</a></a></li>
		    <li role="presentation" ><a href="#selesai" title="Download" aria-controls="home" role="tab" data-toggle="tab">Selesai</a></a></li>
			</div>

		<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="semua">
			<div class="body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Order ID</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>Batas</th>
					<th>Metode</th>
					<th>Status</th>
					<th>Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1;?>
				<?php $ambil= $koneksi->query("SELECT *, pembayaran.status AS sts FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan=pelanggan.id_pelanggan ORDER BY waktu DESC ");?>
				<?php while($pecah=$ambil->fetch_assoc()){?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $pecah['nama_pelanggan']?></td>
					<td><?php echo $pecah['orderid']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['waktu']))?></td>
					<td>Rp.<?php echo $pecah['totalbayar']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['batas']))?></td>
					<td><?php echo $pecah['metode']?></td>
					<?php if ($pecah['sts']=='pending'): ?>
					<td style="color: red;"><b><?php echo $pecah['sts']?></b></td>	
					<?php elseif ($pecah['status']=='selesai'): ?>
					<td style="color: green;"><b><?php echo $pecah['sts']?></b></td>	
					<?php else: ?>	
					<td style="color: blue;"><b><?php echo $pecah['sts']?></b></td>	
					<?php endif ?>
					<td><?php echo $pecah['tfbank']?></td>
					<td>
						<a href="index?halaman=detail&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-info">Detail</a>
						<a href="index?halaman=batal&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-danger">Batal</a>
					</td>
				</tr>
				<?php $nomor++;?>
				<?php }?>
			</tbody>
			</table>
			</div>
			</div>
		    </div>	
		<div role="tabpanel" class="tab-pane fade in" id="belum">
			<div class="body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Order ID</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>Batas</th>
					<th>Metode</th>
					<th>Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1;?>
				<?php $ambil= $koneksi->query("SELECT * FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan=pelanggan.id_pelanggan WHERE pembayaran.status='pending' ORDER BY waktu DESC ");?>
				<?php while($pecah=$ambil->fetch_assoc()){?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $pecah['nama_pelanggan']?></td>
					<td><?php echo $pecah['orderid']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['waktu']))?></td>
					<td>Rp.<?php echo $pecah['totalbayar']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['batas']))?></td>
					<td><?php echo $pecah['metode']?></td>
					<td><?php echo $pecah['tfbank']?></td>
					<td>
						<a href="index?halaman=detail&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-info">Detail</a>
						<a href="index?halaman=batal&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-danger">Batal</a>
					</td>
				</tr>
				<?php $nomor++;?>
				<?php }?>
			</tbody>
			</table>
			</div>
			</div>
		    </div>
		    <div role="tabpanel" class="tab-pane fade in " id="sudah">
			<div class="body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama Pelanggan</th>
					<th>Order ID</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>Metode</th>
					<th>Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor1=1;?>
				<?php $ambil2= $koneksi->query("SELECT * FROM pelanggan JOIN pembayaran ON pelanggan.id_pelanggan=pembayaran.id_pelanggan WHERE pembayaran.status='sudah bayar' ");?>
				<?php while($pecah2=$ambil2->fetch_assoc()){?>
				<tr>
					<td><?php echo $nomor1;?></td>
					<td><?php echo $pecah2['nama_pelanggan']?></td>
					<td><?php echo $pecah2['orderid']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah2['waktu']))?></td>
					<td>Rp. <?php echo $pecah2['totalbayar']?></td>
					<td><?php echo $pecah2['metode']?></td>
					<td><?php echo $pecah2['tfbank']?></td>
					<td>
						<?php if($pecah2['tfbank']=='COD' AND $pecah2['tfbank']=='payment gateaway'): ?>
						<a href="index?halaman=detail&id=<?php echo $pecah2['id_pembelian']?>" class= "btn btn-info">Detail</a>
						<a href="index?halaman=kirim&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-danger">Kirim</a>
						<?php else: ?>
						<a href="index?halaman=detail&id=<?php echo $pecah2['id_pembelian']?>" class= "btn btn-info">Detail</a>
						<a href="kirim?id=<?php echo $pecah2['id_pembelian']?>" class= "btn btn-danger">Kirim</a>	
						<a type="button" class="view_data btn btn-primary" data-toggle="modal"  data-target="#my" id="<?php echo $pecah2['id_pembelian'] ?>" class= "btn btn-warning">Bukti Bayar</a>
						<?php endif ?>		
					</td>
				</tr>
				<?php $nomor1++;?>
				<?php } ?>
			</tbody>
			</table>
			</div>
			</div>
		    </div>
		    <div role="tabpanel" class="tab-pane fade in " id="dikirim">
			<div class="body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Order ID</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>Metode</th>
					<th>Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1;?>
				<?php $ambil= $koneksi->query("SELECT * FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan=pelanggan.id_pelanggan WHERE pembayaran.status='dikirim' ORDER BY pembayaran.waktu DESC ");?>
				<?php while($pecah=$ambil->fetch_assoc()){?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $pecah['nama_pelanggan']?></td>
					<td><?php echo $pecah['orderid']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['waktu']))?></td>
					<td>Rp. <?php echo number_format($pecah['totalbayar'])?></td>
					<td><?php echo $pecah['metode']?></td>
					<td><?php echo $pecah['tfbank']?></td>
					<td>
						<a href="index?halaman=detail&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-info">Detail</a>
					</td>
				</tr>
				<?php $nomor++;?>
				<?php }?>
			</tbody>
			</table>
			</div>
			</div>
		    </div>
		    <div role="tabpanel" class="tab-pane fade in " id="batal">
			<div class="body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Order ID</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>Batas</th>
					<th>Metode</th>
					<th>Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1;?>
				<?php $ambil= $koneksi->query("SELECT * FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan=pelanggan.id_pelanggan WHERE pembayaran.status='batal' ORDER BY waktu DESC ");?>
				<?php while($pecah=$ambil->fetch_assoc()){?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $pecah['nama_pelanggan']?></td>
					<td><?php echo $pecah['orderid']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['waktu']))?></td>
					<td>Rp. <?php echo $pecah['totalbayar']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['batas']))?></td>
					<td><?php echo $pecah['metode']?></td>
					<td><?php echo $pecah['tfbank']?></td>
					<td>
						<a href="index?halaman=detail&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-info">Detail</a>
					</td>
				</tr>
				<?php $nomor++;?>
				<?php }?>
			</tbody>
			</table>
			</div>
			</div>
		    </div>
		    <div role="tabpanel" class="tab-pane fade in " id="selesai">
			<div class="body">
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama </th>
					<th>Order ID</th>
					<th>Tanggal </th>
					<th>Total </th>
					<th>Tanggal Diterima</th>
					<th>Metode</th>
					<th>Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1;?>
				<?php $ambil= $koneksi->query("SELECT * FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan=pelanggan.id_pelanggan WHERE pembayaran.status='selesai' ORDER BY waktu DESC ");?>
				<?php while($pecah=$ambil->fetch_assoc()){?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $pecah['nama_pelanggan']?></td>
					<td><?php echo $pecah['orderid'] ?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['waktu']))?></td>
					<td>Rp. <?php echo $pecah['totalbayar']?></td>
					<td><?php echo date("d F Y / H:i:s", strtotime($pecah['waktuupdate']))?></td>
					<td><?php echo $pecah['metode']?></td>
					<td><?php echo $pecah['tfbank']?></td>
					<td>
						<a href="index?halaman=detail&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-info">Detail</a>
					</td>
				</tr>
				<?php $nomor++;?>
				<?php }?>
			</tbody>
			</table>
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
				<div  id="data_siswa">
				</div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script>
	// ini menyiapkan dokumen agar siap grak :)
	$(document).ready(function(){
		// yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
		$('.view_data').click(function(){
			// membuat variabel id, nilainya dari attribut id pada button
			// id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
			var id = $(this).attr("id");
			
			// memulai ajax
			$.ajax({
				url: 'bukti.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
				method: 'post',		// method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
				data: {id:id},		// nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
				success:function(data){		// kode dibawah ini jalan kalau sukses
					$('#data_siswa').html(data);	// mengisi konten dari -> <div class="modal-body" id="data_siswa">
					$('#myModal').modal("show");	// menampilkan dialog modal nya
				}
			});
		});
	});
	</script>                                    