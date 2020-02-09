<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Data Penduduk</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <link href="../assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
    <?php include('component/navbar.php');?>
    <?php include('component/header.php');?>
        
            
        
<?php include "head.php"; ?>
<?php include "akta_body.php"; ?>    
<tr></tr>
<hr width="90%" size="5" id="10" color="black">
<tr></tr>
<table>
<table width="100%">
  <tr>
    <td width="156" align="center">
    <td width="750" align="center"><div align="center">
        <b>SURAT KETERANGAN PENGANTAR AKTA KELAHIRAN</b><br>
      _____________________________________<br>
    NOMOR : 127/X1/16/209/2019  </div></td>
    <td width="173"></td>
  </tr>
  </td>
</table>
<br>
<table>
  <tr>
    <td width="57" align="center">
    <td width="773" align="center"><div align="left"><?php echo $row[1]; ?></div></td>
    <td width="246"></td>
  </tr>
  </td>
</table>
<br>
<table>
  <tr>
    <td width="57" align="center">
    <td width="204" align="center"><div align="left">No. KK </div></td>
    <td width="815">: <input type="text" name="no_kk" value=""></td>
  </tr>
  <tr>
    <td width="57" align="center">
    <td width="204" align="center"><div align="left">Nama Ayah</div></td>
    <td width="815">: <input type="text" name="nama_ayah"></td>
  </tr>
  <tr>
    <td width="57" align="center">
    <td width="204" align="center"><div align="left">Nama Ibu</div></td>
    <td width="815">: <input type="text" name="nama_ibu"></td>
  </tr>
</table>
<table>
<tr>
    <td width="54" align="center">
    <td width="1024" align="center"><div align="left"><?php echo $row[2]; ?></div></td>
</tr>
</tabel>
<table>
  <tr>
    <td width="57" align="center">
    <td width="204" align="center"><div align="left">Nama Anak</div></td>
    <td width="815">: <input type="text" name="nama_anak"></td>
  </tr>
  <tr>
    <td width="57" align="center">
    <td width="204" align="center"><div align="left">Tempat Lahir</div></td>
    <td width="815">: <input type="text" name="tempat_lahir" id=""></td>
  </tr>
  
  <tr>
        <td width="57" align="center">
        <td width="204" align="center"><div align="left">Tanggal Lahir</div></td>
        <td width="815">: <input type="text" name="tgl_lahir"></td>
  </tr>

  <tr>
    <td width="57" align="center">
    <td width="204" align="center"><div align="left">Status Anak Ke</div></td>
    <td width="815">: <input type="text" name="anak_ke" id=""></td>
  </tr>
  <tr>
          <td width="57" align="center">
          <td width="204" align="center"><div align="left">Berlaku mulai tanggal</div></td>
          <td width="815">: <input type="date" name='berlaku'></td>
  </tr>  
</table>
<table>
<tr>
    <td width="54" align="center">
    <td width="1024" align="center"><div align="left"><?php echo $row[3]; ?></div></td>
</tr>
</tabel>
<br>
<table>
  <tr>
    <td width="800" align="center"><div align="left"></div></td>
    <td width="276" align="center">
    <div align=>
      <p>Dibuat di : Kedongpoh </p>
      <p>Pada Tangga :28 oktober 2019 </p>
    </div>
      <p>Kepala desa Kedongpoh</p>
      <br>
      <br>
      <p>_____________________</p>
      <p>Edi susilo<p></p>
    </td>
  </tr>
</table>
       

        </div>
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
