<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <link href="../assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body background="white">

    <div id="wrapper">
    <?php include('component/navbar.php');?>
    <?php include('component/header.php');?>
        
    
    
    
    <?php include "head.php"; ?>
    <?php include "ktp_body.php"; ?>
    <?php include "no_sktp.php";?>
    <?php
    $cara = $_POST['nik'];
    $query = "SELECT * FROM tb_penduduk WHERE nik LIKE '%$cara%'";
    $sql = mysqli_query($con, $query);
    $baris = mysqli_fetch_array($sql);
    ?> 
<form  action="../config/superadmin/add_sktp.php" method="POST" >      
<hr width="90%" size="5" id="10" color="black">
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<td width="111" align="center">
    <td width="887"  face="Bodoni MT Black" align="center"><div align="center" ><b>SURAT PENGANTAR<b> <br>
      _________________________________<br>
    NOMOR : <input type="text" name="no_surat_sktp" value="<?php echo $no_surat; ?> "></div></td> <!-- di buat penomoran otomatis-->
    <td width="109"></td>

    <?php echo "<br>";?>
</table>
<br>
<br>
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
  <td width="98" align="center"></td>
    <td width="868" align="left"><?php echo $row[1]; ?></td> 
    <!-- di buat penomoran otomatis-->
 
    <td width="124"></td>
</tr>
</table>
<br>
<table width="100%" cellpadding="0" cellspacing="0" >
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">NIK</td> 
    <td width="820">: <input type="text" name="nik-Penduduk" value="<?php echo $baris['nik']?>" ></td>
</tr>
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">Nama</td> 
    <!-- di buat penomoran otomatis-->
    <td width="820">: <input type="text" name="nama_penduduk" value="<?php echo $baris['nama_pend']?>" ></td>
</tr>
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">Dusun</td> 
    <!-- di buat penomoran otomatis-->
    <td width="820">: <input type="text" name="dusun_penduduk" value="<?php echo $baris['dusun']?>"></td>
</tr>
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">Desa</td> 
    <!-- di buat penomoran otomatis-->
    <td width="820">: <input type="text" name="desa_penduduk" value="<?php echo $baris['desa_pend']?>"></td>
</tr>
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">RT/RW</td> 
    <!-- di buat penomoran otomatis-->
    <td width="820">: <input type="text" name="rt_dan_rw" value="<?php echo $baris['rt_rw']?>"></td>
</tr>
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">Kecamatan</td> 
    <!-- di buat penomoran otomatis-->
    <td width="820">: <input type="text" name="kec_penduduk" value="<?php echo $baris['kec_pend']?>"></td>
</tr>
<tr>
  <td width="108" align="center"></td>
    <td width="162" align="left">Berlaku sampai</td> 
    <!-- di buat penomoran otomatis-->
    <td width="820">: <input type="date" name="berlaku"></td>
</tr>
</table>


<br>
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
  <td width="98" align="center"></td>
    <td width="794" align="left"><?php echo $row[2]; ?></td> 
    <!-- di buat penomoran otomatis-->
    <td width="198"></td>
</tr>
</table>
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
  <td width="98" align="center"></td>
    <td width="794" align="left"><?php echo $row[3]; ?></td> 
    <!-- di buat penomoran otomatis-->
    <td width="198"></td>
</tr>
</table>
<br>
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td width="106" align="left"></td> 
 	 <td width="188" align="center"></td>
    <td width="527" align="left"></td> 
    <!-- di buat penomoran otomatis-->
    <td width="269" align="right">Tanggal : 28 september 2019<br>
</tr>
</table>
<br>
<br>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td width="111" align="left"></td> 
 	 <td width="197" align="center"></td>
    <td width="626" align="left"></td> 
    <!-- di buat penomoran otomatis-->
    <td width="156" align="center">Kepala Desa<br>
      <br>
	_____________
	<br><p><input type="text" name="kades"></p></td>
</tr>
</table>
<div class="form-group row">
  <div class="col-sm-4 col-sm-offset-2">
    <a class="btn btn-white btn-sm" href="cek_nik.php">Cancel</a>
    <button class="btn btn-success btn-sm" type="submit" name="save">Save</button>
  </div>
</div>
</form>
<?php
// if(!ISSET($_POST['submit'])){
//         $sql = "INSERT INTO * berkas_ktp values ('','$no_surat','$nik','$nama_pend','$dusun','$desa_pend','$rt_rw','$kec_pend','$berlaku','$kades')";
//         $query1 = mysqli_query($con, $sql); 
//         if(mysqli_num_rows($sql) == 0){
//           echo "data berhasil di simpan";
//         }     
// }
  ?>      </div>
        </div>


    <!-- Mainly scripts -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../assets/js/inspinia.js"></script>
    <script src="../assets/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="../assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>