<?php

include "koneksi.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data.xlsx';
	
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	
	// Buat query Insert
	$sql = $pdo->prepare("INSERT INTO tb_penduduk VALUES(:id_pend,:nik,:nama_pend,:agama,:tempat_lahir,
	:tanggal_lahir, :jenis_kelamin, :golongan_darah, :pendidikan, :pekerjaan, :status_pernikahan, :warga_negara, :dusun
	, :rt_rw, :desa_pend, :kec_pend)");
	
	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
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
		
		
		// Cek jika semua data tidak diisi
		if(empty($id_pend) && empty($nik) && empty($nama_pend) && empty($agama) && empty($tempat_lahir) && empty($tanggal_lahir)
		&& empty($jenis_kelamin) && empty($golongan_darah) && empty($pendidikan) && empty($pekerjaan)
		&& empty($status_pernikahan) && empty($warga_negara) && empty($dusun) && empty($rt_rw) && empty($desa_pend) 
		&& empty($kec_pend))
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
		if($numrow > 1){
			// Proses simpan ke Database
			$sql->bindParam(':id_pend', $id_pend);
			$sql->bindParam(':nik', $nik);
			$sql->bindParam(':nama_pend', $nama_pend);
			$sql->bindParam(':agama', $agama);
			$sql->bindParam(':tempat_lahir', $tempat_lahir);
			$sql->bindParam(':tanggal_lahir', $tanggal_lahir);
			$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
			$sql->bindParam(':golongan_darah', $golongan_darah);
			$sql->bindParam(':pendidikan', $pendidikan);
			$sql->bindParam(':pekerjaan', $pekerjaan);
			$sql->bindParam(':status_pernikahan', $status_pernikahan);
			$sql->bindParam(':warga_negara', $warga_negara);
			$sql->bindParam(':dusun', $dusun);
			$sql->bindParam(':rt_rw', $rt_rw);
			$sql->bindParam(':desa_pend', $desa_pend);
			$sql->bindParam(':kec_pend', $kec_pend);
			$sql->execute(); // Eksekusi query insert
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: ../data_penduduk.php'); // Redirect ke halaman awal
?>
