<?php
include "../config/koneksi.php";
$sql="SELECT  * FROM  ktp_body";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>