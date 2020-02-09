<?php
    include('../koneksi.php');

    $nik = $_POST['nik'];
   
    $query=mysqli_query($con,'SELECT * FROM tb_penduduk WHERE nik="$nik"');
    
    header("location:../../admin/cek_nik.php");
?>