<?php
    include('../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM berkas_ktp");

	while( $row = mysqli_fetch_assoc($query)){
        ?>
        <tr class='gradeA'>
        
        <td> <?php echo $no++; ?> </td>
        <td> <?php echo $row['no_sktp']; ?> </td>
        <td> <?php echo $row['nik']; ?> </td>
		<td> <?php echo $row['nama_pend']; ?> </td>
		<td> <?php echo $row['dusun']; ?> </td>
        <td> <a href="#">Tampil</a></td>
        </tr>
    <?php				
	}
?>