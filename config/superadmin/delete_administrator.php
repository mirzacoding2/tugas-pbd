<?php
    include('../koneksi.php');

    $id = $_GET['id'];

    mysqli_query($con,"DELETE FROM tb_users WHERE id_user ='$id' ");
    

    header("location:../../superadmin/data_administrator.php");

?>