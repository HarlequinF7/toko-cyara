<?php 
error_reporting(0);
$username =$_COOKIE["username"];
$passs    =$_COOKIE["password"];

setcookie("username", $username, time()-3600000);
setcookie("password", $passs, time()-3600000);
echo "<script>alert('anda telah logout');</script>";
echo "<script>location='login';</script>";
 ?>