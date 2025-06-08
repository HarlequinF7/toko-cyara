<?php 
error_reporting(0);
$username =$_COOKIE["email_pelanggan"];
$passs    =$_COOKIE["password_pelanggan"];
$idp    =$_COOKIE["id_pelanggan"];

setcookie("email_pelanggan", $username, time()-3600000);
setcookie("password_pelanggan", $passs, time()-3600000);
setcookie("id_pelanggan", $idp, time()-3600000);
echo "<script>alert('anda telah logout');</script>";
echo "<script>location='index';</script>";
?>