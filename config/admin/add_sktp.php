<?php
include('../koneksi.php');
    $no_sktp=$_POST['no_surat_sktp'];
    $nik = $_POST['nik-Penduduk'];
    $nama_pend = $_POST['nama_penduduk'];
    $dusun  = $_POST['dusun_penduduk'];
    $desa   = $_POST['desa_penduduk'];
    $rt_rw  = $_POST["rt_dan_rw"];
    $kecamatan = $_POST['kec_penduduk'];
    $due_date = $_POST['berlaku'];
    $kades  = $_POST['kades'];
    $sql ="INSERT INTO berkas_ktp VALUES('','$no_sktp','$nik',
    '$nama_pend','$dusun','$desa','$rt_rw','$kecamatan','$due_date','$kades')";
    $query = mysqli_query($con,$sql);
    header("location:../../admin/home_admin.php");

?>