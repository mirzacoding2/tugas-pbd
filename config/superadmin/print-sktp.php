<?php
// membuat tanggal hari ini
$date=date('d-F-Y');
include('../../config/koneksi.php');
$id=$_GET['id'];
$mahasiswa = mysqli_query($con,"SELECT * FROM berkas_ktp WHERE id='$id'");
$row = mysqli_fetch_array($mahasiswa);
//membalik format tanggal
$tanggal=$row["due_date"];
$dudate=date("d-F-Y",strtotime($tanggal));
// memanggil library FPDF
require('../../assets/pdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(200,7,'PEMERINTAH KABUPATEN GUNUNGKIDUL',0,1,'C');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(200,7,'KECAMATAN NGLIPAR',0,1,'C');
$pdf->Cell(10,3,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(200,7,'Alamat : JL.Nglipar-Ngawen Km 5,Wonosar,Kode Pos 55852 ',0,1,'C');
$pdf->Cell(200,7,'Telp(082137860971)',0,1,'C');
$pdf->SetFont('Arial','B',19);
$pdf->Cell(50,7,'______________________________________________________________________________________________________________________________________________',0,1,'C');
$pdf->SetFont('Arial','B',13);
$pdf->Cell(10,10,'',0,1);
$pdf->Cell(200,7,'SURAT PENGANTAR KTP',0,1,'C');
$pdf->SetFont('Arial','B',19);
$pdf->Cell(200,7,'_______________',0,1,'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(200,7,'NOMOR : '.$row['no_sktp'],0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,20,'',0,1);
 
$pdf->SetFont('Arial','',12);
$pdf->Cell(1,6,'Yang bertanda tangan di bawah ini Kepala Desa Kedongpoh Kecamatan Nglipar.',0,1);
$pdf->Cell(1,6,'Menerangkan Bahwa :',0,1);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45,8,'NIK',2,0);
$pdf->Cell(80,8,':'.$row['nik'],2,1);
$pdf->Cell(45,8,'Nama',2,0);
$pdf->Cell(80,8,':'.$row['nama_pend'],2,1);
$pdf->Cell(45,8,'Dusun',2,0);
$pdf->Cell(80,8,':'.$row['dusun'],2,1);
$pdf->Cell(45,8,'Desa',2,0);
$pdf->Cell(80,8,':'.$row['desa_pend'],2,1);
$pdf->Cell(45,8,'RT/RW',2,0);
$pdf->Cell(80,8,':'.$row['rt_rw'],2,1);
$pdf->Cell(45,8,'Kecamatan',2,0);
$pdf->Cell(80,8,':'.$row['kec_pend'],2,1);
$pdf->Cell(45,8,'Berlaku Sampai',2,0);
$pdf->Cell(80,8,':'.$dudate,2,1);
$pdf->Cell(10,5,'',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(160,6,'Nama tersebut di atas benar benar penduduk Desa Kedungpoh,Kecamatan Nglipar,',0,1);
$pdf->Cell(160,6,'Kabupaten,Gunungkidul',0,1);
$pdf->Cell(160,6,'Demikian Surat ini di buat dengan sebenarnya untuk di gunakan sebagai mana mestinya.',0,1);
$pdf->Cell(10,20,'',0,1);
$pdf->Cell(300,6,'Tanggal :'.$date,0,1,'C');
$pdf->Cell(10,5,'',0,1);
$pdf->Cell(300,6,'Kepala Desa',0,1,'C');
$pdf->Cell(10,15,'',0,1);
$pdf->Cell(300,6,'__________',0,1,'C');
$pdf->Cell(300,6,$row['kades'],0,1,'C');
 
$pdf->Output();
?>