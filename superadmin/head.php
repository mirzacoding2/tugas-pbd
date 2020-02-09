<html>
<head>
<title></title>
</head>
<?php
include('../config/koneksi.php');
$sql="SELECT  * FROM  head";
$result=mysqli_query($con,$sql);
$cek= mysqli_fetch_array($result);

?>
<body>
<table width="100%">
  <tr>
    <td width="120" align="center">&nbsp;</td>
    <td width="751" align="center"><h2 align="center"><?php echo $cek[1]; ?><br>
    <?php echo $cek[2]; ?><br>
      </h2>
    <p align="center"></p><?php echo $cek[4]; ?> <br>
	<?php echo $cek[5]; ?> </p>
    </td>
    <td width="120" align="center">&nbsp;</td>
  </tr>
</table>

</body>
</html>