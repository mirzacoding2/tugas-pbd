<?php
    include ("../config/koneksi.php");
    //Turn off all error reporting 
    error_reporting(0);
    $sql="SELECT  * FROM berkas_nosktp ORDER BY id_sktp DESC LIMIT 1";
    $result=mysqli_query($con,$sql);

    $cek= mysqli_fetch_array($result);

    // if ($cek[0]==0){
        // echo "pembuat surat no 1";
    // }else{
        // echo "pembuat surat no ".$s=$cek[0]+1;

    // }
    // echo "<br>";
    $ex =explode('/',$cek['no_sktp']); //explode mengubah data string jadi array
    //$se= implode(',',$ex);// kebalikanya di atas



    if (date('d')=='01'){ $a = '01'; }
    else{ $a = sprintf("%03d", $ex[0]+1); }



    $b = 'SKTP';
    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
    $d = date('Y');
    // $f = array('','1','2','3','4','5','6','7','8','9','10','11','12');

    $no_surat = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;
    $e=$c[date('n')];


    
    $q= "INSERT INTO berkas_nosktp  VALUES('','$b','$a','$e','$d')";
    $save=mysqli_query($con,$q);

    // if($save == 1){
    // echo "berhasil di simpan";
    // }else{
    //     echo "gagal di simpan";
    // }?>