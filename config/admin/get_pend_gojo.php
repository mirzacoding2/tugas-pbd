<?php
    include('../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM tb_penduduk WHERE dusun='Gojo'");

	while( $row = mysqli_fetch_assoc($query)){
        ?>
        <tr class='gradeA'>
        
        <td> <?php echo $no++; ?> </td>
		<td> <?php echo $row['nik']; ?> </td>
		<td> <?php echo $row['nama_pend']; ?> </td>
        <td> 
        <a href='update_pend_gojo.php?id_pend=<?php echo $row['id_pend'] ?>'>Edit</a> | <a href= href="tampil_pend_gojo.php?id_pend=<?php echo $row['id_pend'] ?>">Tampil</a></td>
        </tr>
    <?php				
	}
?>