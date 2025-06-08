<div class="block-header">
    <h2>PRODUK</h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
                	<a href="index?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Kategori</th>
							<th>Harga</th>
							<th>Berat Gr</th>
							<th>Foto</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;?>
						<?php $ambil=$koneksi->query("SELECT *,produk_foto.url as urll FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori JOIN produk_foto ON produk.id_produk=produk_foto.id_produk GROUP BY nama_produk"); ?>
						<?php while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor;?></td>
							<td><?php echo $pecah['nama_produk']?></td>
							<td><?php echo $pecah['nama_kategori']?></td>
							<td><?php echo $pecah['harga_produk']?></td>
							<td><?php echo $pecah['berat_produk']?></td>
							<td>
								<?php if ($pecah['urll']==''): ?>
									<img src="../foto_produk/<?php echo $pecah['nama_produk_foto']?>" width="100px">
								<?php else: ?>
									<img src="<?php echo $pecah['url']?>" width="100px">
								<?php endif ?>
							</td>
							<td><?php echo $pecah['stok_produk']?></td>
							<td>
								<a href="index?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class= "btn btn-danger" onclick="return confirm('Yakin Mau di Hapus?')" ><i class="material-icons">delete</i>Hapus</a>
								<a href="index?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class= "btn btn-warning"><i class="material-icons">edit</i>Ubah</a>
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

