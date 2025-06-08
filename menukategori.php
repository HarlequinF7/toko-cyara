<br>
  <div class="container d-xl-none d-lg-none d-md-none">
      <div class="row">
      <?php foreach ($dat as $key => $v): ?>
      <?php $j = preg_replace("/\s/","-",$v['nama_kategori']);
      $l = "kategori".$v['id_kategori']."-".$j.".html"; ?>
<div class="col-3" style="box-shadow:1px 1px 1px 1px rgba(0,0,0,0.3); border-radius: 15%; margin-right: auto; margin-bottom: 10px; margin-left: auto;">
        <a href="<?php echo $l ?>"><img src="tema/<?php echo $v['ikon'] ?>" style="width: 100%; "></a>
        <p align="center"><?php echo $v['nama_kategori'] ?></p>
      </div>
      
      <?php endforeach ?>
      
      </div>
    </div>
  </div>
  <br>