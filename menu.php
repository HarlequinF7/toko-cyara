
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style type="">
   .bg-light
   {
    background-color: <?= $toko1['warnafooter'] ?> !important; 
   } 
  nav li i{
    font-size: 26px;
    color:<?= $toko1['warnaikon'] ?>;
  }
  nav li span{
    font-size: 16px;
    color:<?= $toko1['warnaikon'] ?>;
  }

nav li a.active i {
    color: <?= $toko1['warnaikonaktif'] ?>;

}
nav li a.active span {
    color: <?= $toko1['warnaikonaktif'] ?>;

}
</style>

<!-- Bottom Navbar -->
  <nav class="navbar navbar-dark bg-light navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="index" class="nav-link text-center">
                <i class="fas fa-home" ></i>
                <span class="small d-block">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="semuaproduk" class="nav-link text-center">
                <i class="fas fa-briefcase " ></i>
                <span class="small d-block">Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="keranjang" class="nav-link text-center">
                <i class="fas fa-cart-plus" ></i>
                <span class="small d-block">Keranjang</span>
            </a>
        </li>
        <li class="nav-item dropup">
            <a href="#" class="nav-link text-center" role="button" id="dropdownMenuProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <i class="fas fa-user" ></i>
                <span class="small d-block">Profil</span>
            </a>
            <!-- Dropup menu for profile -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuProfile">
                <a class="dropdown-item" href="profil">Profil</a>
                <div class="dropdown-divider"></div>
                <?php
                
                 if (isset($username)): ?>
                <a class="dropdown-item" href="logout">Logout</a>
                <?php else: ?>
                <a class="dropdown-item" href="login">Login</a>  
                <?php endif ?>
                
            </div>
        </li>
    </ul>
</nav>
  <script>
$('.dropdown-toggle').dropdown()
</script>
  <script type="text/javascript">
    $(function() {
    var path = window.location.href; // Mengambil data URL pada Address bar
    $('nav a').each(function() {
        // Jika URL pada menu ini sama persis dengan path...
        if (this.href === path) {
            // Tambahkan kelas "active" pada menu ini
            $(this).addClass('active');
        }else{
          $(this).removeClass('active');
        }
    });
});
</script>

