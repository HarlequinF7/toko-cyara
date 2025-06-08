<?php
$email1=$koneksi->query("SELECT * FROM email");
$email=$email1->fetch_assoc();
$host=$email['hostmail'];
$kunci=$email['password'];
$domain=$email['domain'];
$email2=$email['email'];
?>
        
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
	    <div class="card">
            <div class="body">
                <div class="row clearfix">
					
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="block-header">
						<h2>PENGATURAN EMAIL SMTP</h2>
					</div>
                        <form method="POST">
				          <div class="form-group">
				            <label>Email</label>
				            <input name="email" class="form-control" type="email" value="<?php echo $email2 ?>">
				          </div>
				          <div class="form-group">
				            <label>Password</label>
				            <input name="pass" class="form-control" type="password" value="<?php echo $kunci ?>">
				          </div>
				          <div class="form-group">
				            <label>Host Mail</label>
				            <input name="host" class="form-control" type="text" value="<?php echo $host ?>">
				          </div>
				          <div class="form-group">
				            <label>Domain</label>
				            <input name="domain" class="form-control" type="text" value="<?php echo $domain ?>">
				          </div>
				          <button type="submit" name="ubah" class="btn btn-danger" align="left">Ubah</button>
				        </form>
                    </div>
                </div>
            </div>
	    </div>
	</div>
<?php  
if (isset($_POST["ubah"])) 
{

    $email=htmlspecialchars($_POST['email']);
    $pass=htmlspecialchars($_POST['pass']);
    $host=htmlspecialchars($_POST['host']);
    $domain=htmlspecialchars($_POST['domain']);

    $koneksi->query("UPDATE email SET email='$email', password='$pass', hostmail='$host', domain='$domain'");

    echo "<script>alert('App Email berhasil disimpan');</script>";
    echo "<script>location='index?halaman=komentar';</script>";

}

?>
<?php $l= $koneksi->query("SELECT * FROM produk ORDER BY tanggal DESC");
?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="block-header">
    <h2>DATA KOMENTAR</h2>
</div>
    	<div class="card">
			<div class="body">
                <div class="table-responsive">
					<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<th>Nama Produk</th>
							<th>Komentar</th>
							<th>Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;?>

						<?php $ambil= $koneksi->query("SELECT * FROM komentar JOIN produk ON komentar.id_produk=produk.id_produk ORDER BY komentar.tgl_komentar DESC");?>
						<?php while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor ?></td>
							<td><?php echo $pecah["nama"] ?></td>
							<td><?php echo $pecah["nama_produk"] ?></td>
							<td><?php echo $pecah["komentar"] ?></td>
							<td><?php echo date("l, F d Y/H:i ", strtotime($pecah['tgl_komentar']));?></td>
							<td>
								<a href="hapuskomentar?id=<?php echo $pecah['id_komentar'];?>" class="btn btn-warning btn-sm"><i class="material-icons">delete</i></a>
								<a type="button" class="view_data btn btn-primary" data-toggle="modal" id="<?php echo $pecah['id_komentar'] ?>" data-target="#myModal" class= "btn btn-warning"><i class="material-icons">chat_bubble</i></a>
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



<?php 
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE email set email='$_POST[email]', password='$_POST[pass]', hostmail='$_POST[host]', domain='$_POST[domain]'");
	echo "<script>alert('SMPT Diubah');</script>";
	echo "<script>location='index?halaman=komentar';</script>";
}
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
	<!-- End of Modal -->
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
				url: 'jawab.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
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