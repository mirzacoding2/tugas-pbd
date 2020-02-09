<?php
    include('../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM tb_penduduk WHERE dusun='Suka Maju'");

	while( $row = mysqli_fetch_assoc($query)){
        ?>
        <tr class='gradeA'>
        
        <td> <?php echo $no++; ?> </td>
		<td> <?php echo $row['nik']; ?> </td>
		<td> <?php echo $row['nama_pend']; ?> </td>
        <td> <a href='../config/superadmin/delete_pend_smj.php?id_pend=<?php echo $row['id_pend']?>'>Hapus</a> |
         <a href='update_pend_smj.php?id_pend=<?php echo $row['id_pend'] ?>'>Edit</a> | <a  href="tampil_pend_smj.php?id_pend=<?php echo $row['id_pend'] ?>">Tampil</a></td>
        </tr>
    <?php				
	}
?>