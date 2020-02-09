<?php
    include('../koneksi.php');

    $no_kk              = $_POST['no_kk'];
    $dusun              = $_POST['dusun'];
    $rt_rw              = $_POST['rt_rw'];
    $desa_pend          = $_POST['desa_pend'];
    $kec_pend           = $_POST['kec_pend'];

    $sql = mysqli_query($con,"INSERT INTO tb_keluarga VALUES('','$no_kk','$dusun','$rt_rw', '$desa_pend', '$kec_pend')");
    // $sql .= "INSERT INTO angg_keluarga VALUES('$no_kk','$nik','$nama_penduduk','$status_keluarga')";
    // $sql .= "INSERT INTO angg_keluarga VALUES('$no_kk','$nik','$nama_penduduk','$status_keluarga')";
    // $sql .= "INSERT INTO angg_keluarga VALUES('$no_kk','$nik','$nama_penduduk','$status_keluarga')";

    if ($sql) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../admin/input_anggota.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
?>