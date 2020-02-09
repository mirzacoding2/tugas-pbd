<?php
    include('../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM tb_keluarga a JOIN det_keluarga b ON a.id_keluarga = b.id_keluarga");

	while( $row = mysqli_fetch_assoc($query)){
        ?>
        <tr class='gradeA'>
        
        <td> <?php echo $no++; ?> </td>
		<td> <?php echo $row['no_kk']; ?> </td>
        <td> <?php echo $row['nama_pend']; ?> </td>
        <td> <?php echo $row['nik']; ?> </td>
        <td> <?php echo $row['status_keluarga']; ?> </td>
        <td> <?php echo $row['dusun']; ?> </td>
        <td> 
        <a  href="tampil_keluarga.php?id=<?php echo $row['id_keluarga'] ?>">Tampil</a></td>
        </tr>
    <?php				
	}
?>