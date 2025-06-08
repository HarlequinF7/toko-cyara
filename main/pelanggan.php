<div class="block-header">
    <h2>DATA PELANGGAN</h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
				<table class="table table-bordered table-striped table-hover dataTable js-exportable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Telepon</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;?>
						<?php $ambil= $koneksi->query("SELECT * FROM pelanggan");?>
						<?php while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor;?></td>
							<td><?php echo $pecah['nama_pelanggan']?></td>
							<td><?php echo $pecah['email_pelanggan']?></td>
							<td><?php echo $pecah['telepon_pelanggan']?></td>
							
							<td><?php echo $pecah['status']?></td>
							<td>
								<a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_pelanggan'] ?>" class= "btn btn-danger">Hapus</a>
								<a href="https://wa.me/<?php echo $pecah['telepon_pelanggan'] ?>" class= "btn btn-success">Chat WA</a>
										
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
