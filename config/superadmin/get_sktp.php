<?php
    include('../config/koneksi.php');
    $no = 1;
    $lama=1;// lama 1 hari
    // membuat kondisi apabila waktu due_date lebiah dari 1 hari maka otomatis data akan terhapus
    $oto="DELETE FROM berkas_sktp WHERE DATADIFF(CURDATE(),due_date >$lama)";
    $result=mysqli_query($con,$oto);
    // menampilkan data 
    $query = mysqli_query($con,"SELECT * FROM berkas_ktp");

	while( $row = mysqli_fetch_assoc($query)){
        ?>
        <tr class='gradeA'>
        
        <td> <?php echo $no++; ?> </td>
        <td> <?php echo $row['no_sktp']; ?> </td>
        <td> <?php echo $row['nik']; ?> </td>
		<td> <?php echo $row['nama_pend']; ?> </td>
		<td> <?php echo $row['dusun']; ?> </td>
        <td>
        <a  href="../config/superadmin/print-sktp.php?id=<?php echo $row['id']?>" class="btn btn-success" >Print
        <i class="fa fa-print" aria-hiddent="true"></i>
        </a>
        </td>
        </tr>
    <?php				
	}
?>