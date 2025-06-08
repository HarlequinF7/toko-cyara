<?php
include 'koneksi.php';


    $id = $_POST['id'];
    $sql = mysqli_query($koneksi, "SELECT * from komentar join produk on komentar.id_produk=produk.id_produk where komentar.id_komentar='$id'");
    $row = mysqli_fetch_array($sql);
    $id_produk=$row['id_produk'];       
?>

            <!-- Modal -->
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" align="center" id="myModalLabel" style="border-bottom: 5px solid red; padding-bottom: 2px;">Jawab Komentar</h4>
            </div>
          
            
              
                  <div class="form-group">
                            <label class="col-sm-4 col-form-label">Nama Pelanggan</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['nama'];?>" readonly>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            </div>
                            </div>
                  <div class="form-group">
                            <label class="col-sm-4 col-form-label">Produk Yang Dikomen</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['nama_produk'];?>" readonly>
                            </div>
                            </div>
                  <div class="form-group">
                            <label class="col-sm-4 col-form-label">Komentar</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['komentar'];?>" readonly>
                            </div>
                            </div>
               <form method="post" action="chat">      
               <input type="hidden" name="id_produk" value="<?php echo $id_produk ?>">       
                  <div class="form-group">
                            <label class="col-sm-4 col-form-label">Jawab Komentar</label>
                            <div class="col-sm-8">
                            <textarea name="komentar" style="width: 100%">@<?php echo $row['nama'];?></textarea>
                            </div>
                            </div>

                <div class="form-group">
                    <div class="col-sm-8">
                        <button class="btn btn-primary" type="submit" name="submit">Jawab</button>
                    </div>
                </div>

            </form>

