
<?php

include 'koneksi.php';

$out = '';
$sql = "SELECT * FROM districts where regency_id ='".$_POST["kab"]."'";
$result = mysqli_query($koneksi, $sql);
$out ='<option value="">PILIH KECAMATAN</option>';
while($row = mysqli_fetch_array($result))
{
 $out .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
}
echo $out;
?>