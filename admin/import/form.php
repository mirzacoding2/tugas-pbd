<html lang="en">
	<head>
		<title>Import Data Excel dengan PHP</title>
		<!-- Load File jquery.min.js yang ada difolder js -->
		<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

		<link href="../../assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

		<link href="../../assets/css/animate.css" rel="stylesheet">
		<link href="../../assets/css/style.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			// Sembunyikan alert validasi kosong
			$("#kosong").hide();
		});
		</script>
	</head>
	<body>

	<div id="wrapper">
    <?php include('../component/navbar.php');?>
    <?php include('../component/header.php');?>
				
		<!-- Content -->
		
			
			<a href="../data_penduduk.php" class="btn btn-warning btn-sm">
			 Cancel
			</a>
			
			<h3>Form Import Data</h3>
			<hr>
			
				<form method="post" action="" enctype="multipart/form-data">
				<br><br>
				
			
				<input type="file" name="file" >
				
				<button class="btn btn-primary btn-sm" type="submit" name="preview">Preview</button>
			</form>
			
			<hr>
			
			<!-- Buat Preview Data -->
			<?php
			// Jika user telah mengklik tombol Preview
			if(isset($_POST['preview'])){
				//$ip = ; // Ambil IP Address dari User
				$namabarang_file_baru = 'data.xlsx';
				
				
				if(is_file('tmp/'.$namabarang_file_baru)) // Jika file tersebut ada
					unlink('tmp/'.$namabarang_file_baru); // Hapus file tersebut
				
				$tipe_file = $_FILES['file']['type']; // Ambil tipe file yang akan diupload
				$tmp_file = $_FILES['file']['tmp_name'];
				
				// Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
				if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
					move_uploaded_file($tmp_file, 'tmp/'.$namabarang_file_baru);
					require_once 'PHPExcel/PHPExcel.php';
					
					$excelreader = new PHPExcel_Reader_Excel2007();
					$loadexcel = $excelreader->load('tmp/'.$namabarang_file_baru); // Load file yang tadi diupload ke folder tmp
					$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

					echo "<form method='post' action='import.php'>";
					echo "
					<div class='table-responsive'>
					<table class='table table-striped table-bordered table-hover dataTables-example'>
					<tr>
						<th colspan='16' >Preview Data</th>
					</tr>
					<tr>
						<th>ID</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Agama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Golongan Darah</th>
						<th>Pendidikan</th>
						<th>Pekerjaan</th>
						<th>Status Pernikahan</th>
						<th>Warga Negara</th>
						<th>Dusun</th>
						<th>RT/RW</th>
						<th>Desa</th>
						<th>Kecamatan</th>
					</tr>";
					
					$numrow = 1;
					$kosong = 0;
					foreach($sheet as $row){ 
						$id_pend = $row['A'];
						$nik = $row['B']; 
						$nama_pend = $row['C']; 
						$agama = $row['D'];
						$tempat_lahir = $row['E'];
						$tanggal_lahir = $row['F'];
						$jenis_kelamin = $row['G'];
						$golongan_darah = $row['H'];
						$pendidikan = $row['I'];
						$pekerjaan = $row['J'];
						$status_pernikahan = $row['K'];
						$warga_negara = $row['L'];
						$dusun = $row['M'];
						$rt_rw = $row['N'];
						$desa_pend = $row['O'];
						$kec_pend = $row['P'];
						
						
						if(empty($id_pend) && empty($nik) && empty($nama_pend) && empty($agama) && empty($tempat_lahir) 
						&& empty($jenis_kelamin) && empty($golongan_darah) && empty($pendidikan) && empty($pekerjaan)
						&& empty($status_pernikahan) && empty($warga_negara) && empty($dusun) && empty($rt_rw) && empty($desa_pend) 
						&& empty($kec_pend))
							continue; 
						if($numrow > 1){
							// Validasi apakah semua data telah diisi
							$id_pend_td = ( ! empty($id_pend))? "" : " style='background: #E07171;'";
							$nik_td = ( ! empty($nik))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
							$nama_pend_td = ( ! empty($nama_pend))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
							$agama_td = ( ! empty($agama))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$tempat_lahir_td = ( ! empty($tempat_lahir))? "" : " style='background: #E07171;'";
							$tanggal_lahir_td = ( ! empty($tanggal_lahir))? "" : " style='background: #E07171;'";
							$jenis_kelamin_td = ( ! empty($jenis_kelamin))? "" : " style='background: #E07171;'";
							$golongan_darah_td = ( ! empty($golongan_darah))? "" : " style='background: #E07171;'";
							$pendidikan_td = ( ! empty($pendidikan))? "" : " style='background: #E07171;'";
							$pekerjaan_td = ( ! empty($pekerjaan))? "" : " style='background: #E07171;'";
							$status_pernikahan_td = ( ! empty($status_pernikahan))? "" : " style='background: #E07171;'";
							$warga_negara_td = ( ! empty($warga_negara))? "" : " style='background: #E07171;'";
							$dusun_td = ( ! empty($dusun))? "" : " style='background: #E07171;'";
							$rt_rw_td = ( ! empty($rt_rw))? "" : " style='background: #E07171;'";
							$desa_pend_td = ( ! empty($desa_pend))? "" : " style='background: #E07171;'";
							$kec_pend_td = ( ! empty($kec_pend))? "" : " style='background: #E07171;'";
														
							// Jika salah satu data ada yang kosong
							if(empty($id_pend) or empty($nik) or empty($nama_pend) or empty($agama) or empty($tempat_lahir) or empty($tanggal_lahir)){
								$kosong++; // Tambah 1 variabel $kosong
							}
							
							echo "<tr>";
							echo "<td".$id_pend_td.">".$id_pend."</td>";
							echo "<td".$nik_td.">".$nik."</td>";
							echo "<td".$nama_pend_td.">".$nama_pend."</td>";
							echo "<td".$agama_td.">".$agama."</td>";
							echo "<td".$tempat_lahir_td.">".$tempat_lahir."</td>";
							echo "<td".$tanggal_lahir_td.">".$tanggal_lahir."</td>";
							echo "<td".$jenis_kelamin_td.">".$jenis_kelamin."</td>";
							echo "<td".$golongan_darah_td.">".$golongan_darah."</td>";
							echo "<td".$pendidikan_td.">".$pendidikan."</td>";
							echo "<td".$pekerjaan_td.">".$pekerjaan."</td>";
							echo "<td".$status_pernikahan_td.">".$status_pernikahan."</td>";
							echo "<td".$warga_negara_td.">".$warga_negara."</td>";
							echo "<td".$dusun_td.">".$dusun."</td>";
							echo "<td".$rt_rw_td.">".$rt_rw."</td>";
							echo "<td".$desa_pend_td.">".$desa_pend."</td>";
							echo "<td".$kec_pend_td.">".$kec_pend."</td>";
							echo "</tr>";
						}
						
						$numrow++; // Tambah 1 setiap kali looping
					}
					echo "</table>
					</div>";
					if($kosong < 1){ 
						echo "<hr>";
						
						// Buat sebuah tombol untuk mengimport data ke database
						echo "<button type='submit' name='import' class='btn btn-warning btn-sm' >Import</button>";
					}
					
					echo "</form>";
				}
			}
			?>
		</div>
	</body>

	<script src="../../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../../assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="../../assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../assets/js/inspinia.js"></script>
    <script src="../../assets/js/plugins/pace/pace.min.js"></script>
</html>

