<?php
    include('../koneksi.php');

    $id_keluarga        = $_POST['id_kel'];
    // $id_pend            = $_POST['id_pend'];
    $nik            = $_POST['nik'];
    $nama_pend            = $_POST['nama'];
    $status_keluarga    = $_POST['status_keluarga'];

    $query = "INSERT INTO det_keluarga VALUES";

    $index = 0;
    foreach($id_keluarga as $id){ // Kita buat perulangan berdasarkan nis sampai data terakhir
        $query .= "('','".$id."','".$nik[$index]."','".$nama_pend[$index]."','".$status_keluarga[$index]."'),";
        $index++;
    }
    $query = substr($query, 0, strlen($query) - 1).";";

    $tes = mysqli_query($con, $query);

    echo "<script>alert('Data berhasil disimpan');window.location = '../../superadmin/data_keluarga.php';</script>";

    // echo"$tes";
?>
