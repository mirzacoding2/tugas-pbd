<?php
    include('../koneksi.php');
    
    $nik                = $_POST['nik_pend'];
    $nama_pend          = $_POST['nama_pend'];
    $agama              = $_POST['agama'];
    $tempat_lahir       = $_POST['tempat_lahir'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $golongan_darah     = $_POST['gol_darah'];
    $pendidikan         = $_POST['pendidikan'];
    $pekerjaan          = $_POST['pekerjaan'];
    $status_pernikahan  = $_POST['status_pernikahan'];
    $warga_negara       = $_POST['warga_negara'];
    $dusun              = $_POST['dusun'];
    $rt_rw              = $_POST['rt_rw'];
    $desa_pend          = $_POST['desa_pend'];
    $kec_pend           = $_POST['kec_pend'];

    $query = mysqli_query($con, "INSERT INTO tb_penduduk VALUES('','$nik','$nama_pend','$agama','$tempat_lahir','$tanggal_lahir',
    '$jenis_kelamin','$golongan_darah','$pendidikan','$pekerjaan','$status_pernikahan','$warga_negara','$dusun','$rt_rw',
    '$desa_pend','$kec_pend')") or die(mysqli_error($con));

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../../admin/data_penduduk.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
    header("location:../../admin/data_penduduk.php");

?>