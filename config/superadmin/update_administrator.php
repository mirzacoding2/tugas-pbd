<?php
    include('../koneksi.php');

    $id                = $_POST['id'];
    $nama              = $_POST['name'];
    $username          = $_POST['username'];
    $password          = $_POST['password'];
    $level             = $_POST['level'];
    $sql="UPDATE tb_users SET nama_user='$nama',username='$username',pass='$password',level='$level' WHERE id_user='$id'";
    $query = mysqli_query($con,$sql);

    if($query) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='../../superadmin/data_administrator.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
    }
    
?>