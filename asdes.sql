-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2020 pada 12.03
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_body`
--

CREATE TABLE `akta_body` (
  `id` int(11) NOT NULL,
  `body1` varchar(200) NOT NULL,
  `body2` varchar(200) NOT NULL,
  `body3` varchar(200) NOT NULL,
  `body4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akta_body`
--

INSERT INTO `akta_body` (`id`, `body1`, `body2`, `body3`, `body4`) VALUES
(1, 'Yang bertandatangan di bawah ini:', 'Dengan ini menerangkan', 'Demikain surat Keterangan ini di buat untuk seperlunya', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_ktp`
--

CREATE TABLE `berkas_ktp` (
  `id` int(11) NOT NULL,
  `no_sktp` varchar(20) NOT NULL,
  `nik` char(20) NOT NULL,
  `nama_pend` varchar(70) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `desa_pend` varchar(20) NOT NULL,
  `rt_rw` char(9) NOT NULL,
  `kec_pend` varchar(20) NOT NULL,
  `due_date` date NOT NULL,
  `kades` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas_ktp`
--

INSERT INTO `berkas_ktp` (`id`, `no_sktp`, `nik`, `nama_pend`, `dusun`, `desa_pend`, `rt_rw`, `kec_pend`, `due_date`, `kades`) VALUES
(10, '013/SKTP/XII/2019 ', '934859258293', 'Dawin Rechard ', 'Suka Maju', 'Kedongpoh', '01/25', 'Nglipar', '2019-12-27', 'aaaaa'),
(11, '017/SKTP/XII/2019 ', '123456789', 'sgsdgs', 'Gojo', 'Kedung Poh', '03/01', 'Nglipar', '2019-12-19', 'aaaaa'),
(12, '018/SKTP/XII/2019 ', '934859258293', 'Dawin Rechard ', 'Suka Maju', 'Kedongpoh', '01/25', 'Nglipar', '2019-12-20', 'aaaaa'),
(13, '019/SKTP/XII/2019 ', '934859258293', 'Dawin Rechard ', 'Suka Maju', 'Kedongpoh', '01/25', 'Nglipar', '2019-12-21', 'Ridwan Setiawan '),
(14, '020/SKTP/I/2020 ', '3403021204610000', 'DARSONO', 'Gojo', 'Kedongpoh', '01/01', 'Nglipar', '0000-00-00', 'hjlk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_nosktp`
--

CREATE TABLE `berkas_nosktp` (
  `id_sktp` int(11) NOT NULL,
  `kode_sktp` varchar(5) NOT NULL,
  `no_sktp` varchar(3) NOT NULL,
  `bulan_sktp` varchar(3) NOT NULL,
  `tahun_sktp` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas_nosktp`
--

INSERT INTO `berkas_nosktp` (`id_sktp`, `kode_sktp`, `no_sktp`, `bulan_sktp`, `tahun_sktp`) VALUES
(4, 'SKTP', '001', 'XII', '2019'),
(5, 'SKTP', '002', 'XII', '2019'),
(6, 'SKTP', '003', 'XII', '2019'),
(7, 'SKTP', '004', 'XII', '2019'),
(8, 'SKTP', '005', 'XII', '2019'),
(9, 'SKTP', '006', 'XII', '2019'),
(10, 'SKTP', '007', 'XII', '2019'),
(11, 'SKTP', '008', 'XII', '2019'),
(12, 'SKTP', '009', 'XII', '2019'),
(13, 'SKTP', '010', 'XII', '2019'),
(14, 'SKTP', '011', 'XII', '2019'),
(15, 'SKTP', '012', 'XII', '2019'),
(16, 'SKTP', '013', 'XII', '2019'),
(17, 'SKTP', '014', 'XII', '2019'),
(18, 'SKTP', '015', 'XII', '2019'),
(19, 'SKTP', '016', 'XII', '2019'),
(20, 'SKTP', '017', 'XII', '2019'),
(21, 'SKTP', '018', 'XII', '2019'),
(22, 'SKTP', '019', 'XII', '2019'),
(23, 'SKTP', '020', 'I', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_keluarga`
--

CREATE TABLE `det_keluarga` (
  `id_det` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pend` varchar(60) NOT NULL,
  `status_keluarga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `det_keluarga`
--

INSERT INTO `det_keluarga` (`id_det`, `id_keluarga`, `nik`, `nama_pend`, `status_keluarga`) VALUES
(11, 14, '3403021204610000', 'Darsono', 'Kepala Keluarga'),
(12, 14, '3403026007650001	', 'Rubinem', 'Istri'),
(13, 14, '3403026012030001', 'DESTI AMELIA PUTRI', 'Anak'),
(14, 15, '3403021109830003', 'Wasno', 'Kepala Keluarga'),
(15, 15, '3403024409910006', 'Ngatini', 'Istri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `head`
--

CREATE TABLE `head` (
  `id` int(11) NOT NULL,
  `head1` varchar(200) NOT NULL,
  `head2` varchar(200) NOT NULL,
  `head3` varchar(200) NOT NULL,
  `head4` varchar(200) NOT NULL,
  `head5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `head`
--

INSERT INTO `head` (`id`, `head1`, `head2`, `head3`, `head4`, `head5`) VALUES
(1, 'PEMERINTAH KABUPATEN GUNUNGKIDUL', 'KECAMATAN NGLIPAR', 'DESA KEDONGPOH', 'Alamat : JL.Nglipar-Ngawen Km 5,Wonosar,Kode Pos 55852 ', 'Telp(082137860971) ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp_body`
--

CREATE TABLE `ktp_body` (
  `id` int(11) NOT NULL,
  `body1` varchar(200) NOT NULL,
  `body2` varchar(200) NOT NULL,
  `body3` varchar(200) NOT NULL,
  `body5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktp_body`
--

INSERT INTO `ktp_body` (`id`, `body1`, `body2`, `body3`, `body5`) VALUES
(1, ' Yang bertanda tangan di bawah ini Kepala Desa Kedongpoh Kecamatan Nglipar <br>\r\nmenerangkan bahwa :', 'Nama tersebut di atas benar benar penduduk Desa Kedungpoh,Kecamatan Nglipar,Kabupaten,Gunungkidul', 'Demikian Surat ini di buat dengan sebenarnya untuk di gunakan sebagai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `id_jenis` int(11) NOT NULL,
  `nama_surat` int(11) NOT NULL,
  `kd_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluarga`
--

CREATE TABLE `tb_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `desa_pend` varchar(20) NOT NULL,
  `kec_pend` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keluarga`
--

INSERT INTO `tb_keluarga` (`id_keluarga`, `no_kk`, `dusun`, `rt_rw`, `desa_pend`, `kec_pend`) VALUES
(12, '21432534647', 'Suka Makmur', '06/01', 'Kedongpoh', 'Nglipar'),
(13, '87489234846', 'Gojo', '06/01', 'Kedongpoh', 'Nglipar'),
(14, '87489234846', 'Gojo', '06/01', 'Kedongpoh', 'Nglipar'),
(15, '21432534647', 'Suka Makmur', '09/01', 'Kedongpoh', 'Nglipar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_pend` int(11) NOT NULL,
  `nik` char(20) NOT NULL,
  `nama_pend` varchar(70) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `golongan_darah` char(3) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status_pernikahan` varchar(15) NOT NULL,
  `warga_negara` varchar(20) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `rt_rw` char(9) NOT NULL,
  `desa_pend` varchar(20) NOT NULL,
  `kec_pend` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_pend`, `nik`, `nama_pend`, `agama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `pendidikan`, `pekerjaan`, `status_pernikahan`, `warga_negara`, `dusun`, `rt_rw`, `desa_pend`, `kec_pend`) VALUES
(1, '3403021204610000', 'DARSONO', 'ISLAM', 'GUNUNGKIDUL', '1961-04-12', 'LAKI LAKI', 'A', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(2, '3403026007650001', 'RUBINEM', 'ISLAM', 'GUNUNGKIDUL', '1965-07-20', 'PEREMPUAN', 'B', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(3, '3403026012030001', 'DESTI AMELIA PUTRI', 'ISLAM', 'GUNUNGKIDUL', '2003-12-20', 'PEREMPUAN', 'O', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(4, '3403020707050002', 'BAYU SAPUTRO', 'ISLAM', 'GUNUNGKIDUL', '2005-07-07', 'LAKI LAKI', 'A/B', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(5, '3403020403650001', 'MUJIANA', 'ISLAM', 'GUNUNGKDIUL', '1965-03-04', 'LAKI LAKI', 'A', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(6, '3403024607690004', 'WARTINEM', 'ISLAM', 'GUNUNGKIDUL', '1969-07-06', 'PEREMPUAN', 'B', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(7, '3403020508040001', 'MUKLISIN IKHSAN FARUDIN', 'ISLAM', 'GUNUNGKIDUL', '2004-08-05', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Gojo', '01/01', 'Kedongpoh', 'Nglipar'),
(8, '3403021109830003', 'WASNO', 'ISLAM', 'GUNUNGKIDUL', '1983-09-11', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(9, '3403024409910006', 'NGATINI', 'ISLAM', 'GUNUNGKIDUL', '1991-09-04', 'PEREMPUAN', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(10, '3403025803120001', 'LISDYA VERONICHA SAPUTRI', 'ISLAM', 'GUNUNGKIDUL', '2012-03-18', 'PEREMPUAN', 'O', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(11, '3403021002640004', 'JUMIYO', 'ISLAM', 'GUNUNGKIDUL', '1964-02-10', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'ISLAM', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(12, '3403025203630003', 'KODAMIYAH', 'ISLAM', 'GUNUNGKIDUL', '1963-03-12', 'PEREMPUAN', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(13, '3403020611010001', 'ANGGA NOVI OKTIYANTO', 'ISLAM', 'GUNUNGKIDUL', '2001-11-06', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(14, '3403022105640002', 'SUMEDIYONO', 'ISLAM', 'GUNUNGKIDUL', '1964-05-21', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Makmur', '02/02', 'Kedongpoh', 'Nglipar'),
(15, '3403027112670021', 'LASMINAH', 'ISLAM', 'GUNUNGKIDUL', '1967-12-31', 'PEREMPUAN', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Maju', '03/03', 'Kedongpoh', 'Nglipar'),
(16, '3403021907990001', 'ANDIKA DWI SAPUTRA', 'ISLAM', 'GUNUNGKIDUL', '1999-07-19', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Suka Maju', '03/03', 'Kedongpoh', 'Nglipar'),
(17, '3403021302630001', 'PURWO ATMOJO', 'ISLAM', 'GUNUNGKIDLU', '1963-02-13', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Maju', '03/03', 'Kedongpoh', 'Nglipar'),
(18, '3403025608640001', 'SUTIRAH', 'ISLAM', 'GUNUNGKIDUL', '1964-08-25', 'PEREMPUAN', 'O', 'SMA/SMK', 'BURUH', 'KAWIN', 'INDONESIA', 'Suka Maju', '03/03', 'Kedongpoh', 'Nglipar'),
(19, '3403021402960001', 'DEDI SETYO NUGROHO', 'ISLAM', 'GUNUNGKIDUL', '1996-02-14', 'LAKI LAKI', 'O', 'SMA/SMK', 'BURUH', 'BELUM KAWIN', 'INDONESIA', 'Suka Maju', '03/03', 'Kedongpoh', 'Nglipar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sktp`
--

CREATE TABLE `tb_sktp` (
  `id_sktp` int(11) NOT NULL,
  `kode_sktp` varchar(5) NOT NULL,
  `no_sktp` varchar(3) NOT NULL,
  `bulan_sktp` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama_user`, `username`, `pass`, `level`) VALUES
(1, 'Agusta Budi Setiawan', 'agusta_s', 'superadmin1', 'superadmin'),
(2, 'Galang Aditya Pratama', 'galang_a', 'admin1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta_body`
--
ALTER TABLE `akta_body`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berkas_ktp`
--
ALTER TABLE `berkas_ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berkas_nosktp`
--
ALTER TABLE `berkas_nosktp`
  ADD PRIMARY KEY (`id_sktp`);

--
-- Indeks untuk tabel `det_keluarga`
--
ALTER TABLE `det_keluarga`
  ADD PRIMARY KEY (`id_det`);

--
-- Indeks untuk tabel `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ktp_body`
--
ALTER TABLE `ktp_body`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_keluarga`
--
ALTER TABLE `tb_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indeks untuk tabel `tb_sktp`
--
ALTER TABLE `tb_sktp`
  ADD PRIMARY KEY (`id_sktp`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta_body`
--
ALTER TABLE `akta_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berkas_ktp`
--
ALTER TABLE `berkas_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `berkas_nosktp`
--
ALTER TABLE `berkas_nosktp`
  MODIFY `id_sktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `det_keluarga`
--
ALTER TABLE `det_keluarga`
  MODIFY `id_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `head`
--
ALTER TABLE `head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ktp_body`
--
ALTER TABLE `ktp_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_keluarga`
--
ALTER TABLE `tb_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_sktp`
--
ALTER TABLE `tb_sktp`
  MODIFY `id_sktp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
