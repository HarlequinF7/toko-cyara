<div class="block-header">
    <h2>KATEGORI</h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Kategori</th>
							<th>Ikon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;?>

						<?php $ambil= $koneksi->query("SELECT * FROM kategori");?>
						<?php while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor ?></td>
							<td><?php echo $pecah["nama_kategori"] ?></td>
							<td><img src="../tema/<?php echo $pecah["ikon"] ?>" style="width: 200px"></td>
							<td>
								<a href="index.php?halaman=hapuskategori&id=<?php echo $pecah['id_kategori'];?>" class="btn btn-warning btn-sm">Hapus</a>
								<a href="index.php?halaman=ubahkategori&id=<?php echo $pecah['id_kategori'];?>" class="btn btn-danger btn-sm">Ubah</a>
							</td>

						</tr>
						<?php $nomor++;?>
						<?php }?>

					</tbody>

				</table>
				<button data-toggle="modal" data-target="#myModal" class="btn btn-primary"> Tambah Kategori</button>
			</div>	
		</div>
	</div>
</div>




   


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog"><br><br><br><br>
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header">
        <h2 class="modal-title">Tambah Kategori</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
        <form method="post" enctype="multipart/form-data">
      <div class="modal-body form">
               
                    <div class="form-body">
                        <div class="form-group">
      	   
      		
      		
	            
	            	<label for="password">Nama Kategori</label>
	                <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" required="">
	            </div>
            
            
            	
                <div class="form-group">
                	<label for="password">Ikon Kategori</label>
                    <input type="file" name="ikon" required="">
                </div>
            <hr>
			<button class="btn btn-primary" name="tambah">Tambah</button>
			</div>
		</div>
		</form>
      
      <?php 
		if (isset($_POST['tambah']))
		{
			$lokasifoto=$_FILES["ikon"]["tmp_name"];
			$namafoto=$_FILES["ikon"]["name"];
			$kategori =$_POST["kategori"];
			move_uploaded_file($lokasifoto, "../tema/".$namafoto);
			$koneksi->query("INSERT INTO kategori(nama_kategori, ikon)
				VALUES ('$kategori', '$namafoto')");
			echo "<script> alert('Kategori Sudah Bertambah');</script>";
			

		}


		?>
      <!-- body modal -->
	<!-- footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>