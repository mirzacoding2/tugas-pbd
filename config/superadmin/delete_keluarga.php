<?php
    include('../koneksi.php');

    $id = (int)$_GET['id'];
    if($id){
    //delte data produk
    mysqli_query($con,"DELETE FROM det_keluarga WHERE id_det='{$id}'");
}
    header("location:../../superadmin/data_keluarga.php");	
    exit;
?>