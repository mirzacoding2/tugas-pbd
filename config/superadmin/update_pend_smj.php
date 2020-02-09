<?php
    include('../koneksi.php');

    $id_pend            = $_POST['id_pend'];
    $nik                = $_POST['nik'];
    $nama_pend          = $_POST['nama_pend'];
    $agama              = $_POST['agama'];
    $tempat_lahir       = $_POST['tempat_lahir'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $golongan_darah     = $_POST['golongan_darah'];
    $pendidikan         = $_POST['pendidikan'];
    $pekerjaan          = $_POST['pekerjaan'];
    $status_pernikahan  = $_POST['status_pernikahan'];
    $warga_negara       = $_POST['warga_negara'];
    $dusun              = $_POST['dusun'];
    $rt_rw              = $_POST['rt_rw'];
    $desa_pend          = $_POST['desa_pend'];
    $kec_pend           = $_POST['kec_pend'];

    $query = mysqli_query($con, "UPDATE tb_penduduk SET nik='$nik', nama_pend='$nama_pend' , agama='$agama' , tempat_lahir='$tempat_lahir' , tanggal_lahir='$tanggal_lahir',
    jenis_kelamin='$jenis_kelamin',golongan_darah='$golongan_darah',pendidikan='$pendidikan',pekerjaan='$pekerjaan',status_pernikahan='$status_pernikahan',warga_negara='$warga_negara',dusun='$dusun',rt_rw='$rt_rw',
    desa_pend='$desa_pend',kec_pend='$kec_pend' WHERE id_pend='$id_pend'") or die(mysqli_error($con));

    if($query) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='../../superadmin/data_pend_smj.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
    }
    header("location:../../superadmin/data_pend_smj.php");
    
?>