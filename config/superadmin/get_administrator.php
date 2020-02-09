<?php
    include('../config/koneksi.php');
    $no = 1;
    $query = mysqli_query($con,"SELECT * FROM tb_users");

	while( $row = mysqli_fetch_assoc($query)){
        ?>
        <tr class='gradeA'>
        
        <td> <?php echo $no++; ?> </td>
		<td> <?php echo $row['nama_user']; ?> </td>
		<td> <?php echo $row['username']; ?> </td>
        <td> <?php echo $row['pass']; ?> </td>
        <td> <?php echo $row['level']; ?> </td>
        <td> <a href="../config/superadmin/delete_administrator.php?id=<?php echo $row['id_user']?>" Onclick="return confirm('Apakah Anda Yakin Ingin Mengapus Data ')">Hapus</a> |
        <a href='update_administrator.php?id=<?php echo $row['id_user'] ?>'>Edit</a> 
        </tr>
    <?php				
	}
?>