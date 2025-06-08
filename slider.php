<style>
#slideshow {max-width:1000px;margin:auto}
#slideshow *{box-sizing:border-box}

/* GAMBAR */
#slideshow .gambar{position:relative}
#slideshow .gambar .mySlides {position:relative;display: none}
#slideshow .gambar .mySlides img{max-width:100%}

/* PREV-NEXT */
#slideshow .prev,
#slideshow .next {position:absolute;top:50%;cursor:pointer;width:auto;margin-top:-22px;padding:16px;color:white;font-weight:bold;font-size:18px;transition:0.6s ease;border-radius:0 3px 3px 0;user-select:none}
#slideshow .prev:before {content:"\276E"}
#slideshow .next:before {content:"\276F"}
#slideshow .next{right:0;border-radius:3px 0 0 3px}
#slideshow .prev:hover,
#slideshow .next:hover {background-color:rgba(0,0,0,0.8)}

/* NOMOR-CAPTION */
#slideshow .number{color:#f2f2f2;font-size:12px;padding:10px;position:absolute;top:0}
#slideshow .caption {position:absolute;bottom:0;color:#f2f2f2;font-size:15px;padding:10px;width:100%;text-align:center}

.fade:not(.show){
    opacity: 100;
}

/* TOMBOL */
#slideshow .button{text-align:center;padding:2px}
#slideshow .button .dot {cursor:pointer;height:15px;width:15px;margin:0 2px;background-color:#bbb;border-radius:50%;display:inline-block;transition:background-color 0.6s ease}
#slideshow .button .dot.active,
#slideshow .button .dot:hover {background-color: #717171;}

/* FADING (ANIMASI) */
#slideshow .gambar .fade {-webkit-animation-name:fade;-webkit-animation-duration:1.5s;animation-name:fade;animation-duration:1.5s}

@-webkit-keyframes fade{
  from{opacity:.4}
  to{opacity:1}
}
</style>
<?php
$data=array();
$ambil= $koneksi->query("SELECT * FROM tema");
while($tiap=$ambil->fetch_assoc())
{
  $data[]=$tiap;
}
?>
<br>

<div id="slideshow">
<div class="gambar">
    <?php 
    $no=1;
    foreach ($data as $key => $value): ?>

        
  <div class="mySlides fade">
    <div class="number"><?php echo $no; ?> / 3</div>
        <a href="<?php echo $value['url'] ?>"><img src="<?php echo $value["tema"] ?>"></a>

  </div>
        <?php 
$no++;
    endforeach ?>

  <a class="prev" onclick="plusSlides(-1)"></a>
  <a class="next" onclick="plusSlides(1)"></a>
</div>
<div class="button">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


