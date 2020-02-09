
<table border=1>

<?php
include "../config/koneksi.php";
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM tb_penduduk";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)){

?>


<?php } } ?>

<?php if (ISSET($_POST['submit'])){
 $cari = $_POST['nt'];
 $query2 = "SELECT * FROM tb_penduduk WHERE nik LIKE '%$cari%'";
 
 $sql = mysqli_query($con, $query2);
 while ($r = mysqli_fetch_array($sql)){

  ?>
<tr>
 <td><?php echo $r['nik']; ?></td>
 </tr>
 <td>
 <td><?php echo $r['nama_ped']; ?></td>
 <td><?php echo $r['tanggal_lahir']; ?></td>
 <td><?php echo $r['tempat_lahir']; ?></td>
 <td><?php echo $r['jenis_kelamin']; ?></td>
 <td><?php echo $r['pekerjaan']; ?></td>
 <td><?php echo $r['dusun']; ?></td>
 <td><?php echo $r['desa_pend']; ?></td>
 <td><?php echo $r['kec_pend']; ?></td>


</tr>  
 <?php }} 
//  header("location:tampil.php")
 ?>

