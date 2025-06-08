
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="card">
			<div class="body">
				<div class="block-header">
				    <h2>HALAMAN WEBSITE</h2>
				</div>
                <div class="table-responsive">
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Halaman</th>
							<th>Isi Halaman</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;?>

						<?php $ambil= $koneksi->query("SELECT * FROM halaman");
						while($pecah=$ambil->fetch_assoc()) {

							
						?>
						<tr>
							<td><?php echo $nomor ?></td>
							<td><?php echo $pecah["halaman"] ?></td>
							<td><?php echo $pecah['isi']; ?></td>
							<td>
								<a href="hapushalaman.php?id=<?php echo $pecah['id'];?>" class="btn btn-warning btn-sm"><i class="material-icons">delete</i>Hapus</a>
								<a href="index.php?halaman=ubahhalaman&id=<?php echo $pecah['id'];?>" class="btn btn-danger btn-sm"><i class="material-icons">edit</i>Ubah</a>
							</td>

						</tr>
						<?php $nomor++;?>
						<?php }?>

					</tbody>

				</table>
				<a class="btn btn-primary" href="index.php?halaman=tambahhalaman"><i class="material-icons">add</i> Tambah Halaman</a>
			</div>
		</div>	<br>
	</div>
</div>

