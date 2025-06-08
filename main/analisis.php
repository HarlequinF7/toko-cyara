<?php 
$label=["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
for($bulan =1; $bulan<13; $bulan++)
{
    $query=$koneksi->query("SELECT *, SUM(pembelian_produk.jumlah) AS jml FROM pembelian JOIN pembelian_produk ON pembelian.id_pembelian=pembelian_produk.id_pembelian WHERE MONTH(pembelian.tanggal_pembelian) ='$bulan'");
    $row=$query->fetch_assoc();
    $jumlah[]=$row['jml'];
}
?>
<?php 

for($bln =1; $bln<13; $bln++)
{
    $jumlah_peserta=$koneksi->query("SELECT * FROM pembelian  WHERE MONTH(tanggal_pembelian) ='$bln'");
    $jumlahpeserta[]= mysqli_num_rows($jumlah_peserta);
}
?>

<?php 
for($mont =1; $mont<13; $mont++)
{
    $jumlahpengunjung=$koneksi->query("SELECT * FROM view  WHERE MONTH(tgl) ='$mont'");
    $jumlah_pengunjung[]= mysqli_num_rows($jumlahpengunjung);
}
?>

<?php $pending=$koneksi->query("SELECT * FROM pembelian WHERE status_pembelian='pending' ");
$status1= mysqli_num_rows($pending); ?>

<?php $sudah=$koneksi->query("SELECT * FROM pembayaran WHERE status='sudah bayar' ");
$status2= mysqli_num_rows($sudah); ?>

<?php $dikirim=$koneksi->query("SELECT * FROM pembelian WHERE status_pembelian='dikirim' ");
$status3= mysqli_num_rows($dikirim); ?>

<?php $diterima=$koneksi->query("SELECT * FROM pembelian WHERE status_pembelian='diterima' ");
$status4= mysqli_num_rows($diterima); ?>

<?php $batal=$koneksi->query("SELECT * FROM pembayaran WHERE status='batal' ");
$status5= mysqli_num_rows($batal); ?>

<?php $selesai=$koneksi->query("SELECT * FROM pembelian WHERE status_pembelian='selesai' ");
$status6= mysqli_num_rows($selesai); ?>

            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GRAFIK TRANSAKSI PENJUALAN</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <canvas id="line_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
                <!-- Bar Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GRAFIK PENJUALAN PADA PRODUK</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <canvas id="bar_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>

            <div class="row clearfix">
                <!-- Radar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GRAFIK PENGUNJUNG PADA PRODUK</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <canvas id="radar_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Radar Chart -->
                <!-- Pie Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GRAFIK STATUS TRANSAKSI</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <canvas id="pie_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Pie Chart -->
            </div>
            <!-- /. PAGE WRAPPER  -->

            <!-- Widgets -->
            
                <!-- #END# Browser Usage -->
            </div>
        
    <script type="text/javascript">
    
$(function () {
    new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
    new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
});

function getChartJs(type) {
    var config = null;

    if (type === 'line') {
        config = {
            type: 'line',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                datasets: [{
                    label: "Jumlah Transaksi",
                    data: <?php echo json_encode($jumlahpeserta); ?>,
                    borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 188, 212, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                    pointBorderWidth: 1
                }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($label); ?>,
                datasets: [{
                    label: "Produk Terjual",
                    data: <?php echo json_encode($jumlah); ?>,
                    backgroundColor: 'rgba(0, 188, 212, 0.8)'
                }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'radar') {
        config = {
            type: 'radar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                datasets: [{
                    label: "Jumlah Pengunjung",
                    data: [<?php echo json_encode($jumlah_pengunjung); ?>],
                    borderColor: 'rgba(0, 188, 212, 0.8)',
                    backgroundColor: 'rgba(0, 188, 212, 0.5)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.8)',
                    pointBorderWidth: 1
                }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'pie') {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [<?php echo $status1 ?>, <?php echo $status2 ?>, <?php echo $status3 ?>, <?php echo $status4 ?>, <?php echo $status5 ?>, <?php echo $status6 ?>],
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)",
                        "rgb(0, 0, 255)",
                        "rgb(128, 0, 128)"
                    ],
                }],
                labels: [
                    "pending",
                    "sudah bayar",
                    "dikirim",
                    "diterima",
                    "batal",
                    "selesai"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    return config;
}
    </script>

