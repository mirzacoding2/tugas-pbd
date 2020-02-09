<?php
    include('../koneksi.php');

    $id = $_GET['id_pend'];

    mysqli_query($con,"DELETE FROM tb_penduduk WHERE id_pend ='$id' ");

    header("location:../../superadmin/data_pend_sm.php");

?>