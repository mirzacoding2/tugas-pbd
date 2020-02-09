<?php
    include('../koneksi.php');
    
    $Nama_user   = $_POST['nameuser'];
    $username    = $_POST['username'];
    $password    = $_POST['Password'];
    $Level       = $_POST['Level'];
    $query = mysqli_query($con, "INSERT INTO tb_users VALUES('','$Nama_user','$username','$password','$Level')") 
    or die(mysqli_error($con));

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../superadmin/data_administrator.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');history.go(-1);</script>";
    }


?>