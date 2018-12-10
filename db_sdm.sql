-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 03:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `IDAgama` int(11) NOT NULL AUTO_INCREMENT,
  `Agama` varchar(20) NOT NULL,
  PRIMARY KEY (`IDAgama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`IDAgama`, `Agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Buddha'),
(5, 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `calon_karyawan`
--

CREATE TABLE IF NOT EXISTS `calon_karyawan` (
  `id_calon_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `no_perjanjian1` varchar(10) NOT NULL,
  `key_form` enum('1','2') NOT NULL COMMENT '1 = guru, 2 = karyawan',
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(70) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_warganegara` int(2) NOT NULL,
  `suku` varchar(50) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `status_perkawinan` enum('1','2') NOT NULL COMMENT '1 = single, 2 = menikah',
  `anak_ke` varchar(5) NOT NULL,
  `jumlah_saudara` varchar(5) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `alamat_domisili` varchar(200) NOT NULL,
  `status_tempat_tinggal` enum('1','2','3') NOT NULL COMMENT '1 = Rumah Pribadi, 2 = Rumah Keluarga, 3 = Kost',
  `no_telp_rumah` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_darurat` varchar(50) NOT NULL,
  `hubungan_darurat` varchar(50) NOT NULL,
  `alamat_darurat` varchar(200) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `ktp_dikeluarkan_di` varchar(100) NOT NULL,
  `masa_berlaku_ktp` date DEFAULT NULL,
  `no_sim` varchar(100) NOT NULL,
  `sim_dikeluarkan_di` varchar(100) NOT NULL,
  `masa_berlaku_sim` date DEFAULT NULL,
  `no_passport` varchar(100) NOT NULL,
  `passport_dikeluarkan_di` varchar(100) NOT NULL,
  `masa_berlaku_passport` date DEFAULT NULL,
  `nama_suami_istri` varchar(50) NOT NULL,
  `pekerjaan_suami_istri` int(3) NOT NULL,
  `jumlah_anak` varchar(2) NOT NULL,
  `nama_anak1` varchar(50) NOT NULL,
  `usia_anak1` varchar(20) NOT NULL,
  `nama_anak2` varchar(50) NOT NULL,
  `usia_anak2` varchar(20) NOT NULL,
  `nama_anak3` varchar(50) NOT NULL,
  `usia_anak3` varchar(20) NOT NULL,
  `nama_anak4` varchar(50) NOT NULL,
  `usia_anak4` varchar(20) NOT NULL,
  `nama_anak5` varchar(50) NOT NULL,
  `usia_anak5` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `id_warganegara_ayah` int(2) NOT NULL,
  `alamat_rumah_ayah` varchar(200) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `id_pendidikan_ayah` int(2) NOT NULL,
  `id_pekerjaan_ayah` int(3) NOT NULL,
  `no_telp_ayah` varchar(15) NOT NULL,
  `alamat_kantor_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `id_warganegara_ibu` int(2) NOT NULL,
  `alamat_rumah_ibu` varchar(200) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `id_pendidikan_ibu` int(2) NOT NULL,
  `id_pekerjaan_ibu` int(3) NOT NULL,
  `no_telp_ibu` varchar(15) NOT NULL,
  `alamat_kantor_ibu` varchar(200) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `id_warganegara_wali` int(2) NOT NULL,
  `alamat_rumah_wali` varchar(200) NOT NULL,
  `tempat_lahir_wali` varchar(50) NOT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `id_pendidikan_wali` int(2) NOT NULL,
  `id_pekerjaan_wali` int(3) NOT NULL,
  `no_telp_wali` varchar(15) NOT NULL,
  `alamat_kantor_wali` varchar(200) NOT NULL,
  `pendidikan_terakhir` varchar(70) NOT NULL,
  `nama_tk` varchar(100) NOT NULL,
  `tk_kota` varchar(100) NOT NULL,
  `tk_masuk` varchar(15) DEFAULT NULL,
  `tk_keluar` varchar(15) DEFAULT NULL,
  `nama_sd` varchar(100) NOT NULL,
  `sd_kota` varchar(100) NOT NULL,
  `sd_masuk` varchar(15) DEFAULT NULL,
  `sd_keluar` varchar(15) DEFAULT NULL,
  `nama_smp` varchar(100) NOT NULL,
  `smp_kota` varchar(100) NOT NULL,
  `smp_masuk` varchar(15) DEFAULT NULL,
  `smp_keluar` varchar(15) DEFAULT NULL,
  `nama_slta` varchar(100) NOT NULL,
  `slta_jurusan` varchar(100) NOT NULL,
  `slta_kota` varchar(100) NOT NULL,
  `slta_masuk` varchar(15) DEFAULT NULL,
  `slta_keluar` varchar(15) DEFAULT NULL,
  `nama_d3` varchar(100) NOT NULL,
  `d3_jurusan` varchar(100) NOT NULL,
  `d3_kota` varchar(100) NOT NULL,
  `d3_masuk` varchar(15) DEFAULT NULL,
  `d3_keluar` varchar(15) DEFAULT NULL,
  `nama_s1` varchar(100) NOT NULL,
  `s1_jurusan` varchar(100) NOT NULL,
  `s1_kota` varchar(100) NOT NULL,
  `s1_masuk` varchar(15) DEFAULT NULL,
  `s1_keluar` varchar(15) DEFAULT NULL,
  `nama_s2` varchar(100) NOT NULL,
  `s2_jurusan` varchar(100) NOT NULL,
  `s2_kota` varchar(100) NOT NULL,
  `s2_masuk` varchar(15) DEFAULT NULL,
  `s2_keluar` varchar(15) DEFAULT NULL,
  `nama_s3` varchar(100) NOT NULL,
  `s3_jurusan` varchar(100) NOT NULL,
  `s3_kota` varchar(100) NOT NULL,
  `s3_masuk` varchar(15) DEFAULT NULL,
  `s3_keluar` varchar(15) DEFAULT NULL,
  `nama_perusahaan1` varchar(100) NOT NULL,
  `alamat_perusahaan1` varchar(200) NOT NULL,
  `jenis_usaha1` varchar(100) NOT NULL,
  `riwayat_jabatan1` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai1` varchar(15) DEFAULT NULL,
  `riwayat_pekerjaan_akhir1` varchar(15) DEFAULT NULL,
  `alasan_berhenti1` varchar(100) NOT NULL,
  `nama_perusahaan2` varchar(100) NOT NULL,
  `alamat_perusahaan2` varchar(200) NOT NULL,
  `jenis_usaha2` varchar(100) NOT NULL,
  `riwayat_jabatan2` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai2` varchar(15) DEFAULT NULL,
  `riwayat_pekerjaan_akhir2` varchar(15) DEFAULT NULL,
  `alasan_berhenti2` varchar(100) NOT NULL,
  `nama_perusahaan3` varchar(100) NOT NULL,
  `alamat_perusahaan3` varchar(200) NOT NULL,
  `jenis_usaha3` varchar(100) NOT NULL,
  `riwayat_jabatan3` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai3` varchar(15) DEFAULT NULL,
  `riwayat_pekerjaan_akhir3` varchar(15) DEFAULT NULL,
  `alasan_berhenti3` varchar(100) NOT NULL,
  `nama_perusahaan4` varchar(100) NOT NULL,
  `alamat_perusahaan4` varchar(200) NOT NULL,
  `jenis_usaha4` varchar(100) NOT NULL,
  `riwayat_jabatan4` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai4` varchar(15) DEFAULT NULL,
  `riwayat_pekerjaan_akhir4` varchar(15) DEFAULT NULL,
  `alasan_berhenti4` varchar(100) NOT NULL,
  `nama_perusahaan5` varchar(100) NOT NULL,
  `alamat_perusahaan5` varchar(200) NOT NULL,
  `jenis_usaha5` varchar(100) NOT NULL,
  `riwayat_jabatan5` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai5` varchar(15) DEFAULT NULL,
  `riwayat_pekerjaan_akhir5` varchar(15) DEFAULT NULL,
  `alasan_berhenti5` varchar(100) NOT NULL,
  `organisasi1` varchar(100) NOT NULL,
  `organisasi2` varchar(100) NOT NULL,
  `organisasi3` varchar(100) NOT NULL,
  `organisasi4` varchar(100) NOT NULL,
  `organisasi5` varchar(100) NOT NULL,
  `jenis_organisasi1` varchar(100) NOT NULL,
  `jenis_organisasi2` varchar(100) NOT NULL,
  `jenis_organisasi3` varchar(100) NOT NULL,
  `jenis_organisasi4` varchar(100) NOT NULL,
  `jenis_organisasi5` varchar(100) NOT NULL,
  `jabatan_organisasi1` varchar(100) NOT NULL,
  `jabatan_organisasi2` varchar(100) NOT NULL,
  `jabatan_organisasi3` varchar(100) NOT NULL,
  `jabatan_organisasi4` varchar(100) NOT NULL,
  `jabatan_organisasi5` varchar(100) NOT NULL,
  `periode_organisasi1` varchar(100) NOT NULL,
  `periode_organisasi2` varchar(100) NOT NULL,
  `periode_organisasi3` varchar(100) NOT NULL,
  `periode_organisasi4` varchar(100) NOT NULL,
  `periode_organisasi5` varchar(100) NOT NULL,
  `bahasa_asing1` varchar(100) NOT NULL,
  `bahasa_asing2` varchar(100) NOT NULL,
  `bahasa_asing3` varchar(100) NOT NULL,
  `digunakan_sejak1` varchar(20) NOT NULL,
  `digunakan_sejak2` varchar(20) NOT NULL,
  `digunakan_sejak3` varchar(20) NOT NULL,
  `membaca1` varchar(2) NOT NULL,
  `membaca2` varchar(2) NOT NULL,
  `membaca3` varchar(2) NOT NULL,
  `menulis1` varchar(2) NOT NULL,
  `menulis2` varchar(2) NOT NULL,
  `menulis3` varchar(3) NOT NULL,
  `berbicara1` varchar(2) NOT NULL,
  `berbicara2` varchar(2) NOT NULL,
  `berbicara3` varchar(2) NOT NULL,
  `hasil_penerimaan` enum('0','1','2') NOT NULL COMMENT '0 = Belum diproses, 1 = diterima, 2 = ditolak ',
  `telah_disetujui` enum('0','1') NOT NULL COMMENT '0 = Belum diproses, 1 = diproses / disetujui',
  `tanggal_lamaran` date NOT NULL,
  `tanggal_keputusan` date NOT NULL,
  `tanggal_mulai_kerja` date NOT NULL,
  PRIMARY KEY (`id_calon_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `gapok` varchar(20) NOT NULL,
  `id_tunjangan` int(11) NOT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history_penempatan`
--

CREATE TABLE IF NOT EXISTS `history_penempatan` (
  `id_history` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `sub_jabatan` varchar(50) NOT NULL,
  `ta` varchar(20) NOT NULL,
  PRIMARY KEY (`id_history`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `history_penempatan`
--

INSERT INTO `history_penempatan` (`id_history`, `nik`, `unit`, `jabatan`, `sub_jabatan`, `ta`) VALUES
(7, '1607127', 'SMP', 'Guru Musik', '', '2016/2017'),
(8, '1607127', 'SD', 'Guru Indonesia', '', '2016/2017'),
(9, '1607129', 'SMP', 'Guru Agama', 'Guru Agama Islam', '2016/2017'),
(10, '1601098', 'SMP', 'TU', '', ''),
(11, '1607108', 'TK', 'TU', '', ''),
(12, '1307015', 'SMP', 'Guru Kewarganegaraan', '', '2016/2017'),
(13, '1507088', 'SMP', 'Guru Science', '', '2016/2017'),
(14, '1607131', 'TK', 'Guru Inggris', '', ''),
(15, '1609138', 'SKR (Sekretariat)', 'HRD', '', ''),
(16, '1609138', 'SKR (Sekretariat)', 'Direktur', '', ''),
(17, '1609138', 'SD', 'Guru Indonesia', '', ''),
(18, '1607129', 'TK', 'Guru Inggris', '', ''),
(19, '1609138', 'SKR (Sekretariat)', 'IT', '', ''),
(20, '1208029', 'SD', 'Guru Inggris', '', ''),
(21, '1208029', 'TK', 'Guru Inggris', '', ''),
(22, '1208029', 'SMP', 'Guru Kewarganegaraan', '', ''),
(23, '1512095', 'SMP', 'OG', '', ''),
(24, '1512095', 'SMP', 'OG', '', ''),
(25, '1104001', 'SKR (Sekretariat)', 'HRD', '', ''),
(26, '1104001', 'TK', 'Kepala Sekolah', '', ''),
(27, '1104001', 'TK', 'OG', '', ''),
(28, '1104001', 'SMP', 'Guru Mandarin', '', ''),
(29, '1504069', 'SMP', 'Guru Komputer', '', ''),
(30, '1507088', 'SMP', 'Guru Science', '', ''),
(31, '1607128', 'SMP', 'Guru Olah Raga', '', ''),
(32, '1507091', 'SMP', 'Guru Agama', '', ''),
(33, '1507091', 'SD', 'Guru Agama', '', ''),
(34, '1507091', 'SMP', 'Guru Agama', '', ''),
(35, '1507091', 'SMP', 'Guru Agama', 'Guru Agama Islam', ''),
(36, '1104001', 'TK', 'Guru Inggris', '', ''),
(37, '1309032', 'SMP', 'Guru Agama', '', ''),
(38, '1104001', 'SD', 'Guru Agama', 'Guru Agama  Kristen', ''),
(39, '1207008', 'SD', '', '', ''),
(40, '1603103', 'SMP', 'Koordinator', '', ''),
(41, '1707145', 'TK', '', '', ''),
(42, '1707162', 'SD', '', '', ''),
(43, '009', 'SD', '', '', ''),
(44, '009', '', '', '', ''),
(45, '1507074', 'SD', 'Guru Tematik', '', ''),
(46, '1602102', 'SD', 'TU', '', ''),
(47, '1602102', 'SD', 'TU', '', ''),
(48, '1707162', 'SD', 'Guru Tematik', '', ''),
(49, '1710173', 'TK', 'TU', '', ''),
(50, '1507082', 'TK', 'Guru Inggris', '', ''),
(51, '1608135', 'SMP', 'TU', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobdesk`
--

CREATE TABLE IF NOT EXISTS `jobdesk` (
  `id_jobdesk` int(11) NOT NULL AUTO_INCREMENT,
  `file_jobdesk` varchar(255) NOT NULL,
  `id_master_unit` int(11) NOT NULL,
  `id_master_jabatan` int(11) NOT NULL,
  `id_master_sub_jabatan` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `status_aktif` enum('0','1') NOT NULL COMMENT '0 = tidak aktif, 1 = aktif',
  PRIMARY KEY (`id_jobdesk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `jobdesk`
--

INSERT INTO `jobdesk` (`id_jobdesk`, `file_jobdesk`, `id_master_unit`, `id_master_jabatan`, `id_master_sub_jabatan`, `id_ta`, `status_aktif`) VALUES
(11, 'yes.pdf', 5, 48, 0, 7, '1');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` varchar(10) NOT NULL,
  `karyawan` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `no_telp_rumah` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` int(2) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_warganegara` int(2) NOT NULL,
  `suku` varchar(50) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `status_perkawinan` enum('1','2') NOT NULL COMMENT '1 = single, 2 = menikah',
  `anak_ke` varchar(5) NOT NULL,
  `jumlah_saudara` varchar(5) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `status_tempat_tinggal` enum('1','2','3') NOT NULL COMMENT '1 = Rumah Pribadi, 2 = Rumah Keluarga, 3 = Kos',
  `nama_darurat` varchar(50) NOT NULL,
  `hubungan_darurat` varchar(50) NOT NULL,
  `alamat_darurat` varchar(200) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `ktp_dikeluarkan_di` varchar(100) NOT NULL,
  `masa_berlaku_ktp` date NOT NULL,
  `no_sim` varchar(100) NOT NULL,
  `sim_dikeluarkan_di` varchar(100) NOT NULL,
  `masa_berlaku_sim` date NOT NULL,
  `no_passport` varchar(100) NOT NULL,
  `passport_dikeluarkan_di` varchar(100) NOT NULL,
  `masa_berlaku_passport` date NOT NULL,
  `nama_suami_istri` varchar(50) NOT NULL,
  `pekerjaan_suami_istri` int(3) NOT NULL,
  `jumlah_anak` varchar(2) NOT NULL,
  `nama_anak1` varchar(50) NOT NULL,
  `usia_anak1` varchar(20) NOT NULL,
  `nama_anak2` varchar(50) NOT NULL,
  `usia_anak2` varchar(20) NOT NULL,
  `nama_anak3` varchar(50) NOT NULL,
  `usia_anak3` varchar(20) NOT NULL,
  `nama_anak4` varchar(50) NOT NULL,
  `usia_anak4` varchar(20) NOT NULL,
  `nama_anak5` varchar(50) NOT NULL,
  `usia_anak5` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `id_warganegara_ayah` int(2) NOT NULL,
  `alamat_rumah_ayah` varchar(200) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `id_pendidikan_ayah` int(2) NOT NULL,
  `id_pekerjaan_ayah` int(3) NOT NULL,
  `no_telp_ayah` varchar(15) NOT NULL,
  `alamat_kantor_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `id_warganegara_ibu` int(2) NOT NULL,
  `alamat_rumah_ibu` varchar(200) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `id_pendidikan_ibu` int(2) NOT NULL,
  `id_pekerjaan_ibu` int(3) NOT NULL,
  `no_telp_ibu` varchar(15) NOT NULL,
  `alamat_kantor_ibu` varchar(200) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `id_warganegara_wali` int(2) NOT NULL,
  `alamat_rumah_wali` varchar(200) NOT NULL,
  `tempat_lahir_wali` varchar(50) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `id_pendidikan_wali` int(2) NOT NULL,
  `id_pekerjaan_wali` int(3) NOT NULL,
  `no_telp_wali` varchar(15) NOT NULL,
  `alamat_kantor_wali` varchar(200) NOT NULL,
  `pendidikan_terakhir` varchar(70) NOT NULL,
  `nama_tk` varchar(100) NOT NULL,
  `tk_kota` varchar(100) NOT NULL,
  `tk_masuk` varchar(15) NOT NULL,
  `tk_keluar` varchar(15) NOT NULL,
  `nama_sd` varchar(100) NOT NULL,
  `sd_kota` varchar(100) NOT NULL,
  `sd_masuk` varchar(15) NOT NULL,
  `sd_keluar` varchar(15) NOT NULL,
  `nama_smp` varchar(100) NOT NULL,
  `smp_kota` varchar(100) NOT NULL,
  `smp_masuk` varchar(15) NOT NULL,
  `smp_keluar` varchar(15) NOT NULL,
  `nama_slta` varchar(100) NOT NULL,
  `slta_jurusan` varchar(100) NOT NULL,
  `slta_kota` varchar(100) NOT NULL,
  `slta_masuk` varchar(15) NOT NULL,
  `slta_keluar` varchar(15) NOT NULL,
  `nama_d3` varchar(100) NOT NULL,
  `d3_jurusan` varchar(100) NOT NULL,
  `d3_kota` varchar(100) NOT NULL,
  `d3_masuk` varchar(15) NOT NULL,
  `d3_keluar` varchar(15) NOT NULL,
  `nama_s1` varchar(100) NOT NULL,
  `s1_jurusan` varchar(100) NOT NULL,
  `s1_kota` varchar(100) NOT NULL,
  `s1_masuk` varchar(15) NOT NULL,
  `s1_keluar` varchar(15) NOT NULL,
  `nama_s2` varchar(100) NOT NULL,
  `s2_jurusan` varchar(100) NOT NULL,
  `s2_kota` varchar(100) NOT NULL,
  `s2_masuk` varchar(15) NOT NULL,
  `s2_keluar` varchar(15) NOT NULL,
  `nama_s3` varchar(100) NOT NULL,
  `s3_jurusan` varchar(100) NOT NULL,
  `s3_kota` varchar(100) NOT NULL,
  `s3_masuk` varchar(15) NOT NULL,
  `s3_keluar` varchar(15) NOT NULL,
  `nama_perusahaan1` varchar(100) NOT NULL,
  `alamat_perusahaan1` varchar(200) NOT NULL,
  `jenis_usaha1` varchar(100) NOT NULL,
  `riwayat_jabatan1` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai1` varchar(15) NOT NULL,
  `riwayat_pekerjaan_akhir1` varchar(15) NOT NULL,
  `alasan_berhenti1` varchar(100) NOT NULL,
  `nama_perusahaan2` varchar(100) NOT NULL,
  `alamat_perusahaan2` varchar(200) NOT NULL,
  `jenis_usaha2` varchar(100) NOT NULL,
  `riwayat_jabatan2` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai2` varchar(15) NOT NULL,
  `riwayat_pekerjaan_akhir2` varchar(15) NOT NULL,
  `alasan_berhenti2` varchar(100) NOT NULL,
  `nama_perusahaan3` varchar(100) NOT NULL,
  `alamat_perusahaan3` varchar(200) NOT NULL,
  `jenis_usaha3` varchar(100) NOT NULL,
  `riwayat_jabatan3` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai3` varchar(15) NOT NULL,
  `riwayat_pekerjaan_akhir3` varchar(15) NOT NULL,
  `alasan_berhenti3` varchar(100) NOT NULL,
  `nama_perusahaan4` varchar(100) NOT NULL,
  `alamat_perusahaan4` varchar(200) NOT NULL,
  `jenis_usaha4` varchar(100) NOT NULL,
  `riwayat_jabatan4` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai4` varchar(15) NOT NULL,
  `riwayat_pekerjaan_akhir4` varchar(15) NOT NULL,
  `alasan_berhenti4` varchar(100) NOT NULL,
  `nama_perusahaan5` varchar(100) NOT NULL,
  `alamat_perusahaan5` varchar(200) NOT NULL,
  `jenis_usaha5` varchar(100) NOT NULL,
  `riwayat_jabatan5` varchar(100) NOT NULL,
  `riwayat_pekerjaan_mulai5` varchar(15) NOT NULL,
  `riwayat_pekerjaan_akhir5` varchar(15) NOT NULL,
  `alasan_berhenti5` varchar(100) NOT NULL,
  `organisasi1` varchar(100) NOT NULL,
  `organisasi2` varchar(100) NOT NULL,
  `organisasi3` varchar(100) NOT NULL,
  `organisasi4` varchar(100) NOT NULL,
  `organisasi5` varchar(100) NOT NULL,
  `jenis_organisasi1` varchar(100) NOT NULL,
  `jenis_organisasi2` varchar(100) NOT NULL,
  `jenis_organisasi3` varchar(100) NOT NULL,
  `jenis_organisasi4` varchar(100) NOT NULL,
  `jenis_organisasi5` varchar(100) NOT NULL,
  `jabatan_organisasi1` varchar(100) NOT NULL,
  `jabatan_organisasi2` varchar(100) NOT NULL,
  `jabatan_organisasi3` varchar(100) NOT NULL,
  `jabatan_organisasi4` varchar(100) NOT NULL,
  `jabatan_organisasi5` varchar(100) NOT NULL,
  `periode_organisasi1` varchar(100) NOT NULL,
  `periode_organisasi2` varchar(100) NOT NULL,
  `periode_organisasi3` varchar(100) NOT NULL,
  `periode_organisasi4` varchar(100) NOT NULL,
  `periode_organisasi5` varchar(100) NOT NULL,
  `bahasa_asing1` varchar(100) NOT NULL,
  `bahasa_asing2` varchar(100) NOT NULL,
  `bahasa_asing3` varchar(100) NOT NULL,
  `digunakan_sejak1` varchar(20) NOT NULL,
  `digunakan_sejak2` varchar(20) NOT NULL,
  `digunakan_sejak3` varchar(20) NOT NULL,
  `membaca1` varchar(2) NOT NULL,
  `membaca2` varchar(2) NOT NULL,
  `membaca3` varchar(2) NOT NULL,
  `menulis1` varchar(2) NOT NULL,
  `menulis2` varchar(2) NOT NULL,
  `menulis3` varchar(2) NOT NULL,
  `berbicara1` varchar(2) NOT NULL,
  `berbicara2` varchar(2) NOT NULL,
  `berbicara3` varchar(2) NOT NULL,
  `id_pajak` int(11) NOT NULL,
  `tanggal` date NOT NULL COMMENT 'tanggal kontrak',
  `tanggal_mulai_kerja` date NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_gaji` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approved_jobdesk` enum('0','1','2') NOT NULL COMMENT '0 = blm memilih, 1 = setuju, 2 = tidak setuju',
  `peraturan_kepegawaian` int(1) NOT NULL COMMENT '0=belum memilih, 1=setuju 2=tidak setuju',
  `status_aktif` enum('1','2') NOT NULL COMMENT '1 = aktif, 2 = tidak aktif',
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `karyawan`, `telepon`, `no_telp_rumah`, `email`, `alamat`, `agama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `id_warganegara`, `suku`, `gol_darah`, `status_perkawinan`, `anak_ke`, `jumlah_saudara`, `foto`, `status_tempat_tinggal`, `nama_darurat`, `hubungan_darurat`, `alamat_darurat`, `no_ktp`, `ktp_dikeluarkan_di`, `masa_berlaku_ktp`, `no_sim`, `sim_dikeluarkan_di`, `masa_berlaku_sim`, `no_passport`, `passport_dikeluarkan_di`, `masa_berlaku_passport`, `nama_suami_istri`, `pekerjaan_suami_istri`, `jumlah_anak`, `nama_anak1`, `usia_anak1`, `nama_anak2`, `usia_anak2`, `nama_anak3`, `usia_anak3`, `nama_anak4`, `usia_anak4`, `nama_anak5`, `usia_anak5`, `nama_ayah`, `id_warganegara_ayah`, `alamat_rumah_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `id_pendidikan_ayah`, `id_pekerjaan_ayah`, `no_telp_ayah`, `alamat_kantor_ayah`, `nama_ibu`, `id_warganegara_ibu`, `alamat_rumah_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `id_pendidikan_ibu`, `id_pekerjaan_ibu`, `no_telp_ibu`, `alamat_kantor_ibu`, `nama_wali`, `id_warganegara_wali`, `alamat_rumah_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `id_pendidikan_wali`, `id_pekerjaan_wali`, `no_telp_wali`, `alamat_kantor_wali`, `pendidikan_terakhir`, `nama_tk`, `tk_kota`, `tk_masuk`, `tk_keluar`, `nama_sd`, `sd_kota`, `sd_masuk`, `sd_keluar`, `nama_smp`, `smp_kota`, `smp_masuk`, `smp_keluar`, `nama_slta`, `slta_jurusan`, `slta_kota`, `slta_masuk`, `slta_keluar`, `nama_d3`, `d3_jurusan`, `d3_kota`, `d3_masuk`, `d3_keluar`, `nama_s1`, `s1_jurusan`, `s1_kota`, `s1_masuk`, `s1_keluar`, `nama_s2`, `s2_jurusan`, `s2_kota`, `s2_masuk`, `s2_keluar`, `nama_s3`, `s3_jurusan`, `s3_kota`, `s3_masuk`, `s3_keluar`, `nama_perusahaan1`, `alamat_perusahaan1`, `jenis_usaha1`, `riwayat_jabatan1`, `riwayat_pekerjaan_mulai1`, `riwayat_pekerjaan_akhir1`, `alasan_berhenti1`, `nama_perusahaan2`, `alamat_perusahaan2`, `jenis_usaha2`, `riwayat_jabatan2`, `riwayat_pekerjaan_mulai2`, `riwayat_pekerjaan_akhir2`, `alasan_berhenti2`, `nama_perusahaan3`, `alamat_perusahaan3`, `jenis_usaha3`, `riwayat_jabatan3`, `riwayat_pekerjaan_mulai3`, `riwayat_pekerjaan_akhir3`, `alasan_berhenti3`, `nama_perusahaan4`, `alamat_perusahaan4`, `jenis_usaha4`, `riwayat_jabatan4`, `riwayat_pekerjaan_mulai4`, `riwayat_pekerjaan_akhir4`, `alasan_berhenti4`, `nama_perusahaan5`, `alamat_perusahaan5`, `jenis_usaha5`, `riwayat_jabatan5`, `riwayat_pekerjaan_mulai5`, `riwayat_pekerjaan_akhir5`, `alasan_berhenti5`, `organisasi1`, `organisasi2`, `organisasi3`, `organisasi4`, `organisasi5`, `jenis_organisasi1`, `jenis_organisasi2`, `jenis_organisasi3`, `jenis_organisasi4`, `jenis_organisasi5`, `jabatan_organisasi1`, `jabatan_organisasi2`, `jabatan_organisasi3`, `jabatan_organisasi4`, `jabatan_organisasi5`, `periode_organisasi1`, `periode_organisasi2`, `periode_organisasi3`, `periode_organisasi4`, `periode_organisasi5`, `bahasa_asing1`, `bahasa_asing2`, `bahasa_asing3`, `digunakan_sejak1`, `digunakan_sejak2`, `digunakan_sejak3`, `membaca1`, `membaca2`, `membaca3`, `menulis1`, `menulis2`, `menulis3`, `berbicara1`, `berbicara2`, `berbicara3`, `id_pajak`, `tanggal`, `tanggal_mulai_kerja`, `status_pegawai`, `id_pelamar`, `id_gaji`, `id_ta`, `no_rekening`, `password`, `approved_jobdesk`, `peraturan_kepegawaian`, `status_aktif`) VALUES
('1000001', 'Irwan Budihartono', '', '', '', '', 4, '', '0000-00-00', 'L', 1, '', '', '2', '', '', 'img1000001.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 64, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '1'),
('1000002', 'Tatang Sunarto', '', '', '', '', 2, '', '0000-00-00', 'P', 1, '', '', '1', '', '', 'img1000002.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 64, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '1'),
('1000003', 'Sutiawati Salim', '', '', '', '', 2, '', '0000-00-00', 'P', 1, '', '', '1', '', '', 'img001.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 64, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '1'),
('1104001', 'Ir. Rusmin Sadikin', '08164825257', '', 'jm_sadikin@yahoo.co.id', 'Jl. Telaga Bojong no 3\r\nCengkareng', 2, 'Jakarta', '1959-10-20', 'L', 1, 'Tionghoa', 'B', '2', '1', '2', 'img1104001.png', '1', 'Griselda', 'Anak', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata 1', '', '', '', '', 'Sekolah Dasar Kristen 1', 'Jakarta', '', '', 'Sekolah Menengh Pertama Kristen 1', 'Jakarta', '', '', 'Sekolah Menengah Atas Kristen 1', 'IPA', 'Jakarta', '', '', '', '', '', '', '', 'Universitas satya Wacana', 'Elektro', 'Salatiga', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 17, '0000-00-00', '0000-00-00', 'TETAP', 0, 0, 0, '', '8d7c5afab38fa859a2870aaf638ba1f7', '0', 0, '1'),
('1111002', 'Agung Anggiyawan', '', '', '', '', 1, '', '1992-11-26', 'L', 0, '', '', '1', '', '', 'img1111002.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 42, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'f41400afab87e746feae8e5a5291aa63', '0', 0, '2'),
('1112003', 'Yudha Defri Andriyawan', '089674858755', '', '', 'Jl.Pulo harapan indah RT 007/ RW 010\r\n', 1, 'Jakarta', '1991-12-08', 'L', 1, 'Jawa', 'A', '1', '', '', 'img1112003.png', '1', 'Fikih', '', 'Kapuk Rawa gabus', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Sudri', 1, '', 'Kendal', '1969-09-06', 5, 6, '082122953160', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA Pondok pesantren Al Islah Tajug sudimampir balongan indramayu', 'IPS', 'Indramayu', '', '2009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 86, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '04007c08740b3a956805407c2086e3bf', '0', 0, '1'),
('1207007', 'Sahudin Ali', '085776206914', '', '', 'Jl. KH. Hasyim Ashari N0.1 Rt. 007/002', 1, 'Tangerang', '1985-01-07', 'L', 1, 'Betawi', 'A', '2', '7', '7', 'img1207007.png', '1', 'Julia', 'Istri', 'SDA', '3671110701850002', 'Tangerang', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Julia', 1, '1', 'Nava Fricillia S', '4', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'Mahad Al-Zaitun', '', 'Jawa Barat', '2000', '2006', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PT. Pahtsung Indonesia', 'Kompleks City Park Blok A4', 'Pendidikan', 'Security', '2017-08-28', '2017-08-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 87, '0000-00-00', '0000-00-00', 'TETAP', 0, 0, 0, '', 'f611a6b54ac84f8b3b5ef888cd046340', '0', 0, '1'),
('1207008', 'Gisella Anasthasia.S.', '', '', 'gisella@gmail.com', '', 2, '', '1992-10-17', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'b9129eadf25f7c6586658f785a15a047', '0', 0, '2'),
('1207009', 'Magdalena Sri Puji M, S.E.', '081293975700', 'Jl. Galunggung ', 'kurnidalena04@gmail.com', 'Jl. Galunggung 2 Blok C5 No. 5 Perumnas Cengkareng Jakarta Barat', 3, 'Kulon Progo', '1973-05-18', 'P', 1, 'Jawa', 'O', '2', '4', '4', 'img1207009.png', '1', 'Yovita Sri Puji Astuti', 'Kakak Kandung', 'Perum. Pemda DKI Blok K2 No. 13', '3175025805730007', 'Jakarta Timur', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 82, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '057b6fac68b0c346bc1fddcead347eed', '0', 0, '1'),
('1208029', 'Aprila Windiarti, A.Md.', '089669327446', '089669327446', 'aprilawindy1982@gmail.com', '', 1, 'Banjarnegara', '1982-04-10', 'P', 1, 'Jawa', '', '2', '2', '2', 'img1208029.png', '1', '', '', '', '3173015004821003', 'jakarta', '2017-08-29', '', '', '0000-00-00', '', '', '0000-00-00', 'Tri Wahyudi', 106, '1', 'Dzaka Bisma Wahyudi', '6 tahun', '', '', '', '', '', '', '', '', 'Sunarno', 1, 'Desa Klampok Rt 01 Rw 08 Banjarnegara jawa tengah', 'Banjarnegara', '0000-00-00', 1, 9, '02860479751', '', 'Sri Sugiarti', 1, 'Desa Klampok Rt 01 Rw 08 Banjarnegara jawa tengah', 'Banjarnegara', '0000-00-00', 1, 6, '0286479751', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'D3 manajemen pemasaran Universitas Negeri Yogyakarta', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Negeri Yogyakarta', 'Manajemen Pemasaran', 'Yogyakarta', '2000', '2003', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 76, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'b4d3730bbc8854a7657766054a2f3a58', '0', 0, '1'),
('1208030', 'Ayu Sri Hartati, S.Pd.', '081287718288', '', 'ayu.7suarez@gmail.com', 'Jl. Kapuk Raya Rt 014 / 03 no. 7 \r\nkel. kapuk \r\nkec. Cengkareng \r\nJakarta Barat 11720', 1, 'Jakarta', '1988-07-02', 'P', 1, 'Jawa', 'B', '2', '3', '2', 'img1208030.png', '1', 'Aris Rohmawanto', 'Kakak Kandung', 'Jl. Jaya 25 Rt 02 / 10 no. 93\r\nkel. cengkareng barat\r\nkec. cengkareng ', '3173014207880001', 'Jakarta Barat', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Badrul Munir', 6, '1', 'Zalika Ramadhani Munir', '1 Tahun', '', '', '', '', '', '', '', '', 'Suharno', 1, '', 'Jakarta', '1960-10-10', 1, 0, '', '', 'Kastini ', 1, 'Jl. Kapuk raya rt 014 / 03 no. 7 \r\nkel. kapuk\r\nkec. cengkareng ', 'Jakarta', '1960-10-08', 1, 1, '081212335282', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Terbuka', 'Pendidikan', 'Jakarta', '2008', '2012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris ', '', '', '', '', '', 'C', '', '', 'C', '', '', 'K', '', '', 79, '0000-00-00', '0000-00-00', 'Tetap ', 0, 0, 0, '', '1bcb68f40c33b3e3f1ee8ef1c3ba580d', '0', 0, '1'),
('1307014', 'Widayati, S.Ag.', '089690123394', '082311084686', 'widayati85@gmail.com', '', 4, 'Pati', '1986-07-24', 'P', 1, 'Jawa', 'A', '1', '1', '2', 'img1307014.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'KEMIJAN', 1, 'JL. RAYA TAYU JEPARA DS. PAYAK RT 07 RW 23 KEC.CLUWAK KAB.PATI', 'PATI', '0000-00-00', 10, 99, '', '', 'SRI MULYANI', 1, 'JL. RAYA TAYU JEPARA DS. PAYAK RT 07 RW 23 KEC.CLUWAK KAB.PATI', '', '0000-00-00', 10, 99, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STIAB SMARATUGGA', 'DHAMMA ACARIYA', 'BOYOLALI', '2014', '2008', '', '', '', '', '', '', '', '', '', '', 'SEKOLAH BHAKTI UTAMA', 'KRENDANG RAYA, JAKARTA BARAT', 'SEKOLAH', 'GURU AGAMA', '2019-02-16', '2010-06-24', '', 'SEKOLAH GLOBAL MONTESSORI', 'CITRA 2 EXT JAKARTA BARAT', 'SEKOLAH', 'GURU AGAMA, B.INDONESIA, WALAS', '2010-07-04', '2013-06-24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 71, '0000-00-00', '0000-00-00', 'TETAP', 0, 0, 0, '', '6246c16a7dfdd60dd1c1c789199bacaa', '0', 0, '1'),
('1307015', 'Fransiska Murtini, S.Pd.', '081212812754', '', 'fransiskamurtini@gmail.com', 'Perum Simprug diporis Claster Sanur A 10 No 9 Tangerang', 3, 'Ngawi, ', '1969-02-24', 'P', 1, 'Jawa', 'AB', '2', '5', '6', 'img1307015.png', '1', 'Arief Hamidi Budi Santoso', 'suami', 'Perum Simprug diporis Claster Sanur A 10 No 9 Tangerang', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Arief Hamidi Budi santoso', 105, '2', 'Glenn Kevin cailla', '12', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STKIP SETIA BUDI TANGERANG', 'Bhs dan sastra', 'TANGERANG', '2006', '2008', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 55, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '7c99633668bcdf75e4dbab77b22f64fe', '0', 0, '1'),
('1307016', 'Nuning Febriyanti, S.Pd.', '085883027217', '-', 'nuning280609@gmail.com', 'Cluster Asri no 73\r\nJalan Hasyim Ashari gg Kramat Rt 007/002, Neroktog, Pinang , Kota Tangerang\r\nBanten', 3, 'Surakarta', '1980-02-13', 'P', 1, 'Jawa', 'o', '2', '6', '5', 'img1307016.png', '1', 'Yohanes wisnu Wibowo', 'suami', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Yohanes Wisnu Wibowo', 6, '1', 'Arsenius Wisang Wibowo', '7', '', '', '', '', '', '', '', '', 'Sri Hartoyo', 1, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Sanata Dharma ', 'pendidikan Ekonomi', 'Jogjakarta', '1998', '2003', '', '', '', '', '', '', '', '', '', '', 'Yayasan Panca Dharma', 'Jalan Pulomas V, Pulo Gadung Jakarta Timur', 'Pendidikan', 'Guru Akuntansi', '2004-07-01', '2008-06-30', 'pindah domisili', 'Lembaga Pendidikan Pelita Kasih', 'Taman palem Lestari , Blok E no 1', 'pendidikan', 'Guru SD', '2007-07-01', '2013-06-30', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 66, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '9fdde39ed38cbbb75a8f25ff6fb833c4', '0', 0, '1'),
('1307018', 'Siti Farikhah, S.S.', '085727297592', '-', 'sitifarikhah3013@gmail.com', 'Apartemen City Park Tower CB Lt 9 No. 12. Jln Kapuk Raya Cengkareng No.1, Jakarta Barat', 1, 'Kendal', '1988-10-16', 'P', 1, 'Jawa', 'AB', '1', '4', '6', 'img1307018.png', '3', 'Didik Sutendi', 'suami', 'Apartemen City Park Tower CB Lt 9 No.12, Jln Kapuk Raya Cengkareng No.1, Jakarta Barat', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Didik Sutendi', 107, '1', 'Samudra Annabhani Sutendi', '3', '', '', '', '', '', '', '', '', 'Nafian', 1, 'Ds Salamsari, Dsn Rejosari, RT 01/02, Kec. Boja, Kab. Kendal, Jateng', 'Kendal, ', '1959-12-11', 5, 9, '', '', 'Hazanah', 1, 'Ds Salamsari, Dsn Rejosari, RT 01/02, Kec. Boja, Kab. Kendal, Jateng', 'Kendal', '1959-12-30', 5, 9, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 'Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNNES (Universitas Negeri Semarang)', 'Sastra Inggris', 'Semarang', 'Agustus 2006', 'Oktober 2011', '', '', '', '', '', '', '', '', '', '', 'I Can Read', 'Perumahan Taman Palem Lestari Blok G2 No.11', 'Tempat Kursus Bahasa Inggris', 'English Teacher', '2013-03-16', '2014-03-31', 'resign', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'English Debate Society (EDS)', '', '', '', '', '', '', '', '', '', 'Devisi Training', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '2001', '', '', '', '', '', '', '', '', '', '', '', 94, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', '375dc6445a86e7825307b19a92f01a86', '0', 0, '1'),
('1307021', 'Fenny, S.Th.', '', '', 'fennyferdinand@gmail.com', '', 2, '', '1983-12-28', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '756fb96805c0be2c2691fd471cff71e1', '0', 0, '2'),
('1307023', 'Helmi, S.S.', '081297766639', '', 'helmiasuszen5@gmail.com', 'JL. TJ. PURA 4 NO. 169 KALI DERES JAKARTA BARAT', 2, 'Jakarta', '1985-08-06', 'P', 1, 'Batak', '0', '2', '1', '4', 'img1307023.png', '1', '', '', '', '3173064608850018', 'DKI JAKARTA', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'BENNY H. T. SIAGIAN', 5, '2', 'ESTER A. LISBETH', '9', 'BUNGA A. NOVALINA', '4', '', '', '', '', '', '', 'BATAS RAJA GUK GUK', 1, 'JL. MUSI BLOK E. 10 NO. 16 TEGAL ALUR', 'JAKARTA', '1959-09-27', 2, 9, '', '', 'DAMARIS SIBURIAN', 1, 'JL. MUSI BLOK E. 10 NO. 16 TEGAL ALUR', 'JAKARTA', '1961-05-18', 1, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNIV. BINUS', 'SASTRA INGGRIS', 'DKI JAKARTA', '2003', '2007', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 78, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '3cbddf475aa6a155910343f1be4043cc', '0', 0, '1'),
('1308027', 'Muhamad Safei Hasan', '089515386172', '', '', 'Pedongkelan Belakang Rt.011/013 No. 300, Jakarta Barat', 1, 'Jakarta', '1985-10-25', 'L', 1, 'Betawi', 'O', '2', '6', '6', 'img1307027.png', '1', 'Pinah Andriani', 'Istri', 'SDA', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Pinah Andriani', 1, '1', 'Putra Hadi Pratama', '7 th', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA 01 Majalengka', 'IPA', 'Majalengka', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PT. Inti Mas Surya', 'Muara Baru, Jakarta Utara', 'Ekspor Impor Tuna', 'Pengolahan', '', '', 'Gaji Kecil', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 91, '0000-00-00', '0000-00-00', 'TETAP', 0, 0, 0, '', '2a5aa6ff42400941cddbceca30fd6dc7', '0', 0, '1'),
('1308028', 'Dedy Wijaya, S.Si.', '081288076456', '', 'dedy.w.ho@gmail.com', '', 2, 'Prabumulih', '1980-04-12', 'L', 1, '', '', '2', '', '', 'img1308028.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 65, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '2f7ec6ad34456bceb41f7c9c77d57825', '0', 0, '1'),
('1309031', 'Wahyu Dhammayanti, S.Pd.B.', '085694300288', '', 'dhammacapriconus@gmail.com', 'Jln. Pedongkelan Rt 001/014, Kelurahan Cengkareng Timur, Kecamatan Cengkareng. JAKARTA BARAT', 4, 'Kebumen', '1990-01-07', 'P', 1, 'Jawa', 'o', '1', '5', '6', 'img1309031.png', '3', 'Ari Widiastuti', 'Saudara ', 'Perumahan Legok Permai Blok A. Tangerang', '3305184701900003', 'KEBUMEN', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'WAGIMAN', 1, 'Sidoharum Rt 02 / 03, Kecamatan Sempor, Kabupaten Kebumen. 54471', 'KEBUMEN', '1954-10-10', 2, 12, '087837821146', '', 'Nani Suwarni', 1, 'Sidoharum Rt 02 / 03, Kecamatan Sempor, Kabupaten Kebumen. 54471', 'Kebumen', '0000-00-00', 10, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1 PENDIDIKAN AGAMA BUDDHA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STIAB SMARATUNGGA', 'DHARMA ACARYA', 'BOYOLALI', '2009', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 62, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'ba794fe3c29c64f315f56eacb6a1b5a3', '0', 0, '1'),
('1309032', 'Tri Yuniati, S.Pd.B.', '085854399236', '', 'yuniehiema@gmail.com', 'Rusun BCI aster 2 Lt.2 No 2, Cengkareng Timur Jakarta Barat', 4, 'Kendal', '1990-06-14', 'P', 1, 'Jawa', 'A', '1', '2', '1', 'img1309032.png', '3', 'Eko Suryanto', 'Kakak', 'Rusun BCI aster 2 Lt.2 No 2, Cengkareng Timur Jakarta Barat', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STIAB Smaratungga Boyolali', 'Pendidikan Agama', 'Boyolali', '2009', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 72, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', '9ebcd661279739f390b55620a3945190', '0', 0, '1'),
('1309033', 'Uripah ', '083804305119', '', '', 'Jl. Pasar timbul Pedongkelan Baru Rt 15 / Rw 16 Cengkareng Timur , Jakarta Barat', 1, 'Banyumas', '1980-01-21', 'P', 1, 'Jawa', '', '2', '2', '3', 'img1309033.png', '3', 'Darsono', 'Suami', 'Jl. Pasar timbul Pedongkelan Baru Rt 15 / Rw 16 Cengkareng Timur , Jakarta Barat', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Darsono', 7, '3', 'Agung Hidayat', '13', 'Ari Saputra', '11', 'Jani Rimatuzzahra', '1', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SD', '', '', '', '', 'SDN  01 Pekuncen ', 'Banyumas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 92, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', '65f787c9b809a697471d3bb6309c3dfb', '0', 0, '1'),
('1310035', 'Gunawan', '', '', '', '', 1, '', '1991-05-22', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 52, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'd1258d22d96ba75eb5b5a16c035bd574', '0', 0, '2'),
('1310037', 'Nasirun, S.S.', '081905537584', '', 'nasirunkhan9284@gmail.com', 'citypark ', 1, 'Kendal', '1984-02-09', 'L', 1, 'jawa', 'AB', '1', '2', '6', 'img1310037.png', '3', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNNES (Universitas Negeri Semarang)', 'Sastra Inggris', 'Semarang', '2005', '2010', '', '', '', '', '', '', '', '', '', '', 'SMK Bina Nusantara ', 'Kab.Semarang', 'Sekolah', 'Guru Bahasa Inggris', '', '', 'pindah kerja', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'de javato', '', '', '', '', 'voluntary service', '', '', '', '', 'volunteer', '', '', '', '', '2009/2010', '', '', '', '', 'Bahasa Inggris', '', '', '2005', '', '', 'C', '', '', 'C', '', '', 'C', '', '', 59, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '53b4ac9a466e42aa18cafa2a6075adbd', '0', 0, '1'),
('1310038', 'Acim Suganda', '081298871794', '', 'acimsuganda87287@gmail.com', 'jl.kh abdul wahab Rt 06/ Rw 06 Duri Kosambi Cengkareng Jakarta Barat', 1, 'jakarta', '1972-04-11', 'L', 1, 'Betawi', '-', '2', '1', '5', 'img1310038.png', '1', 'Anwar Gunawan', 'Anak', 'jl.kh abdul wahab Rt 06/ Rw 06 Duri Kosambi Cengkareng Jakarta Barat', '3173011104720013', 'Jakarta', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Watriah', 111, '3', 'Anwar Gunawan', '23', 'Bahtiar Anhar', '20', 'Neita Sary', '26', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMP', '', '', '', '', '', '', '', '', 'SMPN 205 Jakarta', 'Kalideres', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 90, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', 'eb96a21b45128a19bc0f9d0bf62711ae', '0', 0, '1'),
('1311039', 'Novita Indri', '', '', 'novitaindry84@gmail.com', '', 1, '', '1984-02-21', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 98, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'bb5ca2eb0e03ceb056f6ea7e4b22ef06', '0', 0, '2'),
('1407041', 'Adelia', '082258655966', '089601872726', 'adelia1751@gmail.com', 'Perumahan Cinta Kasih Tzu Chi Blok A14 / 5B , Cengkareng Timur, Jakarta Barat 11730', 1, 'Jakarta', '1995-12-11', 'P', 1, '', 'O', '1', '2', '1', 'img1407041.png', '2', 'Rohana', 'Orang tua', 'Perumahan Cinta Kasih Tzu Chi Blok A14 / 5B , Cengkareng Timur, Jakarta Barat 11730', '3173015112950003', 'JAKARTA', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Chrisdianto', 1, 'Perumahan Cinta Kasih Tzu Chi Blok A14 / 5B , Cengkareng Timur, Jakarta Barat 11730', 'Jakarta', '1978-12-24', 1, 6, '089601872726', '', 'Rohana', 1, 'Perumahan Cinta Kasih Tzu Chi Blok A14 / 5B , Cengkareng Timur, Jakarta Barat 11730', 'Jakarta', '1978-11-10', 1, 1, '089601872726', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMK Cinta Kasih Tzu Chi', 'Administrasi Perkantoran', 'Jakarta Barat', '01 Juli 2011', '20 Juni 2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', 'Mandarin', '', '', '', '', 'C', 'C', '', 'C', 'C', '', 'C', 'K', '', 81, '0000-00-00', '0000-00-00', 'TETAP', 0, 0, 0, '', '53f177b2400f6d6f466dfe0bc9fa29d8', '0', 0, '1'),
('1407045', 'Dewi Kartika Wati, S.Pd.', '08111833369', '', 'dewikartikawati2001@gmail.com', 'Konp Duren Villa Blok B1 No 44 Ciledug Tangerang', 2, 'Jakarta', '1978-04-15', 'P', 1, 'Tionghua', 'B', '', '1', '2', 'img009.png', '', 'teguh', 'suami', 'komp Duren villa blok B 1 No 44 Ciledug Tangerang', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Teguh', 6, '2', 'Nathanael', '15 th', 'Darren', '8 th', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1 Pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kusuma Negara', 'PPKn', 'Jakarta', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 97, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '8a70f8388739809b325fa93421d702f7', '', 0, '1'),
('1407046', 'Kardiman, S.Kom.', '081389694525', '', 'kardiman_stn@yahoo.com', 'GG. LANGGAR FAJAR ALADIN NO 24\r\nRT 03 RW 06\r\nPEJAGALAN PENJARINGAN JAKUT', 2, 'BAA', '1981-05-17', 'L', 1, 'TIONG HOA', 'A', '1', '4', '5', 'img1407046.png', '1', 'MEILIANA', 'KAKAK', 'BAMBU KUNING RAYA NO 9\r\nCENGKARENG\r\nJAKARTA BARAT', '3172011705810010', 'JAKARTA UTARA', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'KIM SAN', 1, '', 'BAGANSIAPIAPI', '0000-00-00', 0, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNIVERSITAS BINA NUSANTARA', 'KOMPUTERISASI AKUNTANSI', 'JAKARTA BARAT', '1999', '2004', '', '', '', '', '', '', '', '', '', '', 'YAYASAN PANCARAN BERKAT', 'JELAMBAR', 'SEKOLAH', 'GURU', '2005-07-01', '2011-06-30', '', 'YAYASAN TZU CHI', '', 'SEKOLAH', 'GURU', '2011-07-01', '2014-06-30', '', 'YAYASAN PANCA CEMERLANG', '', 'SEKOLAH', 'GURU', '2014-07-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MANDARIN', 'HOKKIAN', 'INGGRIS', '1993', '1981', '1999', 'BS', 'BS', 'B', 'BS', 'BS', 'B', 'BS', 'BS', 'K', 56, '0000-00-00', '0000-00-00', 'GTY', 0, 0, 0, '', '9bafd288ffad3d765c2efa59ed36fb11', '0', 0, '1'),
('1407048', 'Marsudianto, S.Ag.', '081297689278', '081297689278', 'marsudianto_73@yahoo.com', 'Kp. Utan Bahagia No.37 Rt 006 Rw 07 \r\nCengkareng Timur - Jakarta Barat', 1, 'Jakarta', '1973-08-02', 'L', 1, 'Jawa', 'O', '2', '1', '0', 'img1407048.png', '1', 'Siti Nuraeni', 'Istri', 'Kp. Utan Bahagia No.37 Rt 006 Rw 07 \r\nCengkareng Timur - Jakarta Barat', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STAINU Jakarta', 'Islam Nusantara', 'Jakarta', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'bf6023d35f1e3a7b810a629c63d1160d', '0', 0, '1'),
('1407049', 'Hendra Santoso Lo, AAC.', '081287456130', '', 'hendralo28@gmail.com', 'Jl. Madrasah 1, no 1B, Rawabuaya, Cengkareng, Jakarta Barat', 3, 'Jakarta', '1990-05-28', 'L', 1, '', 'O', '1', '3', '2', 'img1407049.png', '1', 'Merry Lo', 'kakak kandung', 'Metro Permata 1', '', 'Jakarta Barat', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Tji Min, Lo', 1, 'Jl. Bojong Raya no. 199', 'Banda Aceh ', '1960-10-10', 3, 10, '02191333929', '', 'Asnah', 1, '-', 'Banda Aceh', '1961-12-02', 1, 0, '-', '-', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'associate ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sunway ', 'Communication', 'Malaysia', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sekolah Mahabodhi Vidya', 'jl. Palem Anggur, Citra 3', 'Pendidikan', 'Guru', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', 'Mandarin', '', '1998', '', '', 'BS', 'KS', '', 'BS', 'KS', '', 'BS', 'K', '', 84, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'e93f2a21f219b0a8445c81ce69241ccf', '0', 0, '1'),
('1407052', 'Lusiana Sri Sulastri, S.Pd.', '081806899324', '', 'lusiana.sri57@gmail.com', 'Jl. Kedoya Gg. Asem Rt 006 Rw 06 No. 15 Kedoya Utara Jakarta Barat', 3, 'Jakarta', '1980-11-15', 'P', 1, 'jawa', 'B', '2', '2', '2', 'img1407052.png', '1', 'Alexander Dhady Kristianto P', 'Suami', 'Jl. Kedoya Gg. Asem Rt 006 Rw 06 No. 15 Kedoya Utara Jakarta Barat', '3173055511800012', 'Jakarta Barat', '2017-11-15', '', '', '0000-00-00', '', '', '0000-00-00', 'Alexander Dhady Kristianto P', 106, '2', 'Alexander Nelson Joses', '10', 'Gabrielle Putri Emmanuella', '7', '', '', '', '', '', '', 'Antonius Tukiman ( Alm )', 1, '', 'Klaten', '1950-08-23', 7, 0, '', '', 'Veronika Sunarti', 1, 'Jl. Kedoya Gg. Asem Rt 006 Rw 06 No. 15 Kedoya Utara Jakarta Barat', 'Klaten', '1953-03-20', 4, 106, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'sarjana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Univ. Atmajaya', 'FKIP Bimbingan Konseling', 'Jakarta', '1999', '2014', '', '', '', '', '', '', '', '', '', '', 'Sekolah Bunda Hati Kudus Jakarta', 'Jl. Rahayu No. 22 Jelambar Jakarta Barat', 'Pendidikan', 'Guru ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WKRI', '', '', '', '', 'Gereja', '', '', '', '', 'Sie. Pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 61, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '684adaa7850aafcec31220b42340f6ed', '0', 0, '1'),
('1407054', 'Joni, S.S.', '081808208088', '0216696680', 'jinggoyes789@gmail.com', 'Jl. Pluit Mas VI A Blok G No.12', 4, 'Lubuk pakam', '1980-04-14', 'L', 1, 'Chinese Keturunan', 'B', '2', '3', '3', 'img1407054.png', '2', '', '', '', '', 'Jakarta Utara', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Ali Wijaya Kie', 1, 'Jl. Pluit Mas VI A Blok G No.12', 'Tiongkok', '1948-10-05', 1, 12, '0216696680', '', 'Lo Tjeng Hiang', 1, 'Jl.Pluit Mas VI A Blok G No.12', 'Pantai Labu', '1956-12-12', 10, 110, '0216696680', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mandarin', 'Hokkian', 'Inggris', '1995', 'kecil', '1999', 'BS', 'BS', 'C', 'BS', 'BS', 'K', 'BS', 'BS', 'K', 73, '0000-00-00', '0000-00-00', 'tetap', 0, 0, 0, '', '7e0b797239414954eaae675631bc0b23', '0', 0, '1'),
('1407055', 'Elisabet Arum Puspita, S.Pt.', '085728808731', '', 'elisabet@gmail.com', 'Gendingan Kidul RT. 01 RW. 04, kec. Widodaren, Kab. Ngawi', 3, 'Ngawi', '1988-11-07', 'P', 1, 'Jawa', '', '1', '1', '2', 'img1407055.png', '2', 'Stefanus Tegar Aji Pambudi', 'Saudara', 'Gendingan Kidul RT. 01 RW. 04, kec. Widodaren, Kab. Ngawi', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Stevanus Sri Bintono', 1, 'Gendingan Kidul RT. 01 RW. 04, kec. Widodaren, Kab. Ngawi', 'Blora', '1970-01-01', 3, 5, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Sarjana Peternakan', '', '', '', '', 'SDN GENDINGAN IV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Sebelas Maret Surakarta', 'Peternakan', 'Surakarta', '2018-03-19', '2018-03-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', '', '', '', '', '', 'C', '', '', 'C', '', '', 'K', '', '', 104, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '06196c17d666e20a1d4d744e02c2fcbf', '0', 0, '1'),
('1407056', 'Lucia Eni Nugraheni, S.Pd.', '081288812873', '-', 'luciaeni78@gmail.com', 'Jl Skip No 4 Rt 15 / Rw 14 Pisangan Baru Timur , Jakarta Timur', 3, 'Sleman', '1978-08-28', 'P', 1, 'Jawa', '', '2', '1', '2', 'img1407056.png', '1', 'Stevanus Priyantno Nondo Nugroho', 'Suami', 'Jl Skip No 4 Rt 15 / Rw 14 Pisangan Baru Timur , Jakarta Timur', '', 'Jakarta', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'STEVANUS PRIYANTNO NONDO NUGROHO', 106, '2', 'Ayuning Tiyas Ambawani', '9 th', 'Raras Galih Ambarwati', '6th', '', '', '', '', '', '', 'FX. Basuki', 0, 'Nyutran Mg 2 1653 Jogja', 'Jogjakarta', '1945-10-15', 1, 5, '-', 'Jln Taman Siswa', 'TH . Sujiyati', 0, '', 'Sleman', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1 Pendidikan bahasa Inggris ', 'TK Sang Timur ', 'Jogjakarta', '', '', 'SD sang timur', 'Jogjakarta', '1985', '1991', 'SMPN 16 ', 'Jogjakarta', '1991', '1994', 'stella Duce 2', 'ips', 'Jogjakarta', '1994', '1997', 'ABAYO ', 'Bahasa Inggris', 'Jogjakarta', '1997', '2000', 'STKIP Setia Budhi ', 'Pendidikan bahasa Inggris', 'Tangerang', '2001', '2002', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 57, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '041d027c56c902e208c9c66deb9ade6c', '0', 0, '1'),
('1407057', 'Maria Luki Susanti, S.Pd.', '085817396228', '081584338194', 'marialukisusanti@gmail.com', 'Jl. Akasia 1 No 73\r\nCengkareng, Jakarta Barat', 3, 'Yogyakarta', '1980-05-02', 'P', 0, 'Jawa', 'B', '2', '3', '2', 'img1407057.png', '1', 'Anna Listiana', 'kakak kandung', 'Perum Cipondoh Makmur Blok L No 6, Tangerang', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '1', 'Sebastianus Morgan Samudera', '6', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'sarjana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Univ. Sarjanawiyata Tamansiswa Yogyakarta', 'Pendidikan Bahasa Inggris', 'Yogyakarta', '1998', '2003', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'English', '', '', '2003', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 33, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', 'ee7cd8447d44b0b37298be4d15d15180', '0', 0, '1'),
('1407061', 'Dra. Ria Maria Carolina, M.M.', '', '', 'ria@gmail.com', '', 3, 'Jakarta', '1967-09-13', 'P', 1, '', 'A', '2', '3', '3', 'img1407061.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 'Santa Ursula', 'Jakarta', '', '', 'Santa Ursula', 'Jakarta', '', '', 'Santa Ursula', 'Jakat', '', '', 'Santa Ursula', 'IPS', 'Jakarta', '', '', '', '', '', '', '', 'Universitas Indonesia', 'Hubungan Internasional', 'Jakarta', '', '', 'STIE Supra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 88, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '1458a7065d0c3ae1d61023df68dfaf60', '0', 0, '1'),
('1408065', 'Caecilia Sri Wahyuni, S.Pd.', '', '', 'caecilia@gmail.com', '', 3, '', '1967-06-12', 'P', 1, '', '', '1', '', '', 'img1408065.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 41, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '8e8bfe9ce68e9f3e42b8537fa6f75e1a', '0', 0, '1'),
('1502066', 'Nilla Fitrianty', '', '', 'nillafitrianty@gmail.com', '', 2, '', '1981-08-05', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 46, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'efa8391ff5f64b1825d9b1da8743829d', '0', 0, '2');
INSERT INTO `karyawan` (`nik`, `karyawan`, `telepon`, `no_telp_rumah`, `email`, `alamat`, `agama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `id_warganegara`, `suku`, `gol_darah`, `status_perkawinan`, `anak_ke`, `jumlah_saudara`, `foto`, `status_tempat_tinggal`, `nama_darurat`, `hubungan_darurat`, `alamat_darurat`, `no_ktp`, `ktp_dikeluarkan_di`, `masa_berlaku_ktp`, `no_sim`, `sim_dikeluarkan_di`, `masa_berlaku_sim`, `no_passport`, `passport_dikeluarkan_di`, `masa_berlaku_passport`, `nama_suami_istri`, `pekerjaan_suami_istri`, `jumlah_anak`, `nama_anak1`, `usia_anak1`, `nama_anak2`, `usia_anak2`, `nama_anak3`, `usia_anak3`, `nama_anak4`, `usia_anak4`, `nama_anak5`, `usia_anak5`, `nama_ayah`, `id_warganegara_ayah`, `alamat_rumah_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `id_pendidikan_ayah`, `id_pekerjaan_ayah`, `no_telp_ayah`, `alamat_kantor_ayah`, `nama_ibu`, `id_warganegara_ibu`, `alamat_rumah_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `id_pendidikan_ibu`, `id_pekerjaan_ibu`, `no_telp_ibu`, `alamat_kantor_ibu`, `nama_wali`, `id_warganegara_wali`, `alamat_rumah_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `id_pendidikan_wali`, `id_pekerjaan_wali`, `no_telp_wali`, `alamat_kantor_wali`, `pendidikan_terakhir`, `nama_tk`, `tk_kota`, `tk_masuk`, `tk_keluar`, `nama_sd`, `sd_kota`, `sd_masuk`, `sd_keluar`, `nama_smp`, `smp_kota`, `smp_masuk`, `smp_keluar`, `nama_slta`, `slta_jurusan`, `slta_kota`, `slta_masuk`, `slta_keluar`, `nama_d3`, `d3_jurusan`, `d3_kota`, `d3_masuk`, `d3_keluar`, `nama_s1`, `s1_jurusan`, `s1_kota`, `s1_masuk`, `s1_keluar`, `nama_s2`, `s2_jurusan`, `s2_kota`, `s2_masuk`, `s2_keluar`, `nama_s3`, `s3_jurusan`, `s3_kota`, `s3_masuk`, `s3_keluar`, `nama_perusahaan1`, `alamat_perusahaan1`, `jenis_usaha1`, `riwayat_jabatan1`, `riwayat_pekerjaan_mulai1`, `riwayat_pekerjaan_akhir1`, `alasan_berhenti1`, `nama_perusahaan2`, `alamat_perusahaan2`, `jenis_usaha2`, `riwayat_jabatan2`, `riwayat_pekerjaan_mulai2`, `riwayat_pekerjaan_akhir2`, `alasan_berhenti2`, `nama_perusahaan3`, `alamat_perusahaan3`, `jenis_usaha3`, `riwayat_jabatan3`, `riwayat_pekerjaan_mulai3`, `riwayat_pekerjaan_akhir3`, `alasan_berhenti3`, `nama_perusahaan4`, `alamat_perusahaan4`, `jenis_usaha4`, `riwayat_jabatan4`, `riwayat_pekerjaan_mulai4`, `riwayat_pekerjaan_akhir4`, `alasan_berhenti4`, `nama_perusahaan5`, `alamat_perusahaan5`, `jenis_usaha5`, `riwayat_jabatan5`, `riwayat_pekerjaan_mulai5`, `riwayat_pekerjaan_akhir5`, `alasan_berhenti5`, `organisasi1`, `organisasi2`, `organisasi3`, `organisasi4`, `organisasi5`, `jenis_organisasi1`, `jenis_organisasi2`, `jenis_organisasi3`, `jenis_organisasi4`, `jenis_organisasi5`, `jabatan_organisasi1`, `jabatan_organisasi2`, `jabatan_organisasi3`, `jabatan_organisasi4`, `jabatan_organisasi5`, `periode_organisasi1`, `periode_organisasi2`, `periode_organisasi3`, `periode_organisasi4`, `periode_organisasi5`, `bahasa_asing1`, `bahasa_asing2`, `bahasa_asing3`, `digunakan_sejak1`, `digunakan_sejak2`, `digunakan_sejak3`, `membaca1`, `membaca2`, `membaca3`, `menulis1`, `menulis2`, `menulis3`, `berbicara1`, `berbicara2`, `berbicara3`, `id_pajak`, `tanggal`, `tanggal_mulai_kerja`, `status_pegawai`, `id_pelamar`, `id_gaji`, `id_ta`, `no_rekening`, `password`, `approved_jobdesk`, `peraturan_kepegawaian`, `status_aktif`) VALUES
('1502068', 'Maesaroh ', '088212822469', '', '', 'Jl. Pedongkelan Belakang Rt.011/013, Kapuk Jakarta Barat', 1, 'Jakarta', '1986-01-14', 'P', 1, 'Betawi', 'A+', '2', '6', '7', 'img1502068.png', '2', 'Handoko', 'Suami', 'Jl. Pedongkelan Belakang Rt.011/013, Kapuk Jakarta Barat', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Handoko', 6, '1', 'Kholifah', '1', '', '', '', '', '', '', '', '', 'M. Edi Sukmana', 1, '', 'Jakarta', '0000-00-00', 6, 11, '', '', 'Unah', 1, '', 'Jakarta', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 112, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', '8b9baeceed4f4e4b18672fc54a46fd89', '0', 0, '1'),
('1504069', 'Dra. Vitriyani Pryadarsina, M.Pd.', '085881264441', '085881264441', 'vitripry@yahoo.com', '', 2, 'Jakarta', '1967-01-05', 'P', 0, '', '', '1', '', '', 'img1504069.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '7ec54e7968ba5784af5a1b256a46a627', '0', 0, '1'),
('1504070', 'Sandi Ginanjar, S. Pd.', '', '', 'sandy@gmail.com', '', 1, '', '0000-00-00', 'L', 1, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '2'),
('1506072', 'Darmawan Widjaja, S.E.', '', '', 'darmawan_widjaja@yahoo.com', '', 2, '', '1972-12-12', 'L', 0, '', '', '1', '', '', 'img1505072.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 89, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '72f8cfe5a053cd40988e6b46383562a7', '0', 0, '1'),
('1507073', 'Bianca Raine Sim', '', '', 'biancasim23@gmail.com', '', 2, '', '1974-03-23', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 53, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'fb76204e6925221b7af22e2a3b36b36c', '0', 0, '2'),
('1507074', 'Maria Theresia, S. Pd.', '08988363464', '021-5403056', 'sakura_rain7@yahoo.com', 'Jalan Bangun Nusa I RT: 002/ RW: 002 No.022 Cengkareng Timur. Jakarta Barat.', 2, 'Jakarta', '1991-03-05', 'P', 1, 'batak', 'B', '1', '1', '2', 'img1507074.png', '2', 'Hotmaria Sipayung', 'Ibu', 'Jalan Bangun Nusa I RT: 002/ RW: 002 No.022 Cengkareng Timur. Jakarta Barat.', '', 'DKI JAKARTA', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Wesly Rajagukguk', 1, 'Jalan Bangun Nusa I RT: 002/ RW: 002 No.022 Cengkareng Timur. Jakarta Barat.', 'Pematang Siantar', '0000-00-00', 1, 5, '081389896912', '', 'Hotmaria Sipayung', 1, 'Jalan Bangun Nusa I RT: 002/ RW: 002 No.022 Cengkareng Timur. Jakarta Barat.', 'Bandar Negeri (Medan)', '0000-00-00', 1, 110, '081288782138', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'sarjana Pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Univ. Atmajaya', 'Pendidikan Bahasa Inggris', 'JAKARTA', '2009', '2013', '', '', '', '', '', '', '', '', '', '', 'Flamboyan KIndergarten', '', '', '', '', '', '', 'SMAN 13 Jakarta ', '', '', '', '', '', '', 'SDS Pelita Kasih', '', '', '', '', '', '', 'SDS Mahabodhi Vidya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bahasa inggris', '', '', '', '', '', 'BS', '', '', 'B', '', '', 'BS', '', '', 34, '0000-00-00', '0000-00-00', 'Kontrak 3', 0, 0, 0, '', 'ac86be1141fd9158e3e8a4fe5fbc7f09', '0', 0, '1'),
('1507076', 'Sisca', '081382098632', '081382098632', 'siscahere@gmail.com', 'Jl. Nurul Amal 14 no 4 \r\nRt 12 Rw 05\r\nCengkareng timur, Cengkareng, Jakarta Barat\r\n11730', 2, 'Jakarta', '1995-06-09', 'P', 1, 'Tionghoa', 'A', '1', '2', '1', 'img1507076.png', '1', 'Koe Mie Fa', 'Ibu', 'Jl. Nurul Amal 14 no 4 \r\nRt 12 Rw 05\r\nCengkareng timur, Cengkareng, Jakarta Barat\r\n11730', '3173014906951001', 'Dki Jakarta', '1970-01-01', '-', '-', '1970-01-01', '-', '-', '1970-01-01', '-', 0, '-', '-', '-', '', '', '', '', '', '', '', '', 'Hasan', 1, '', 'Palembang', '1987-09-11', 7, 12, '', '', 'Koe Mie FA', 1, '', 'Air Duren', '1987-11-17', 5, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMAN 84', 'Bahasa', 'Jakarta', '2010', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 75, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0ddb315a16b127c0ab1fccbbc4af82f9', '0', 0, '1'),
('1507078', 'Anes', '', '', 'anescheix@gmail.com', '', 2, '', '1993-06-23', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 110, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'fc07bf677cd4c5854ba36a5233baed05', '0', 0, '2'),
('1507079', 'Vera Astarina, S.Pd.', '085770046839', '', 'aghasthashe@yahoo.co.id', 'Jl.Prof Dr Soepomo Kelurahan Buaran Indah no.01 15119 RT02/RW04', 1, 'Tangerang', '1988-02-15', 'P', 1, 'Sunda', 'A', '2', 'perta', 'tiga', 'img1507079.png', '2', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 69, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '9e6fe97cdf9516d2a6dc6ee0aa2c030a', '0', 0, '1'),
('1507080', 'Agus Panut Santoso, S.Pd.', '085714886226', '085714886226', 'aguspanutsantoso@yahoo.co.id', '', 1, 'Wonogiri', '1983-08-07', 'L', 1, '', '', '2', '1', '1', 'img1507080.png', '1', '', '', '', '3312050708830001', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '1', 'FAHLEVI  ALTHARIZKY', '3,5 Tahun', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'sarjana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STKIP KUSUMA NEGARA JAKARTA', 'Pendidikan Matematika', 'JAKARTA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 70, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '9c4774bd4d46befb483436a58570ae78', '0', 0, '1'),
('1507081', 'Annie Kristiani, S.Pd.', '081319901039', '', 'venietia09@gmail.com', 'Sumur Bor Raya', 3, 'Semarang', '1974-12-30', 'P', 1, 'Jawa', 'A', '1', '3', '2', 'img1507081.png', '3', 'Anna Rosita', 'kakak', 'Ngawen Sidomulyo Rt.005 / Rw 015\r\nSalatiga', '', 'Salatiga', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Alexander Kasmani', 1, 'Ngawen Sidomulyo Rt.005 / Rw 015\r\nSalatiga', 'Kudus', '1941-08-15', 7, 12, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Kristen Satya Wacana', 'Bimbingan dan Konseling', 'Salatiga', 'September / 200', 'Desember / 2004', '', '', '', '', '', '', '', '', '', '', 'SMA PSAK Masehi', 'Ungaran', 'Sekolah', 'Guru', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 24, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', 'd80a8ef734a9ef803dcaed04c58da78e', '0', 0, '1'),
('1507082', 'Erni Hertaty Sihombing, S.Th.', '081289600254', '081286495969', 'erni.hertaty16@gmail.com', 'Jl. Bojong raya no. 16A, rt 04/05 Rawa Buaya, Cengkareng, Jakarta Barat', 2, 'Pekanbaru', '1973-03-04', 'P', 1, 'batak', 'O', '1', '2', '7', 'img1507082.png', '1', 'Jupid Aprilandi', 'Adik kandung', 'Jl. Bojong raya no. 16A, rt 04/05 Rawa Buaya, Cengkareng, Jakarta Barat', '3173084403730017', 'Jakarta Barat', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Djulu B Sihombing', 1, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 68, '0000-00-00', '0000-00-00', 'kontrak 2', 0, 0, 0, '', '38e893146f825c0403f634e21ef874f3', '0', 0, '1'),
('1507085', 'Retno Hari Endang Listyorini, S. Mn. ', '', '', 'inkririn@gmail.com', '', 3, '', '1972-01-08', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 32, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '5201aa3c9c5f022309fd7dd4bbca6d02', '0', 0, '2'),
('1507086', 'Wily Vitina', '', '', 'wily@gmail.com', '', 4, '', '1989-01-01', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 99, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '2da0ade5117c5d95b410e82f7e78de72', '0', 0, '2'),
('1507088', 'Martha Elselina Lingga, S.Si.', '', '', 'martha@gmail.com', '', 3, '', '0000-00-00', '', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 48, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '2'),
('1507089', 'Yessi Widiasty, S.Pd.', '081318142735', '-', 'sisi10yessi@gmail.com', 'Perum Permata Sepatan Blok D 21  No 21. Pisangan. Sepatan. Tanggerang.', 2, 'Jakarta', '1992-06-10', 'P', 1, 'China', 'B', '1', 'satu', 'dua', 'img1507089.png', '2', 'Jemmy Wibowo', 'Adik', 'Perum Permata Sepatan Blok D 21  No 21. Pisangan. Sepatan. Tanggerang.', '', 'Jakarta Barat', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Bong Syau Kwet', 1, 'Perum Permata Sepatan Blok D 21  No 21. Pisangan. Sepatan. Tanggerang.', 'Sungai Purun', '0000-00-00', 1, 9, '081318142734', '-', 'Oen Man Tjaw', 1, 'Perum Permata Sepatan Blok D 21  No 21. Pisangan. Sepatan. Tanggerang.', 'JAKARTA', '0000-00-00', 1, 110, '-', '-', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'sarjana Pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Univ. Atmajaya', 'Pendidikan Guru sekolah dasar', 'JAKARTA', '2011', '2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 60, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', 'b4cb1f12b5563d487a500df22aa61ff0', '0', 0, '1'),
('1507090', 'Asanih ', '', '', '', '', 1, '', '1975-08-17', 'P', 0, '', '', '1', '', '', 'img1507090.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 96, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '90e838d7fefb29ce9cbf1ebec36cef22', '0', 0, '1'),
('1507091', 'Samuel Seirama Gea, S. Ag. ', '081225643337', '', 'samuelseirama@gmail.com', 'Jl. Satria IV No. 20D Jelambar Grogol Pentamburan Jakarta Barat', 3, 'Tuhegeo I', '1987-08-17', 'L', 1, 'Nias', 'o', '1', '6', '5', 'img1507091.png', '3', 'Katarina Kastiani Gulo', '081315368090', 'Jl. Satria IV No. 20D Jelambar Grogol Pentamburan Jakarta Barat', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Angenanoi Gea', 1, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', 'SDN No. 074056 Dahana Humene', 'Gunungsitoli', '1994', '2000', 'SMP Negeri 2 Simanaere', 'Gunungsitoli', '2000', '2003', 'SMA Swasta Pembda 2 ', 'IPA', 'Gunungsitoli', '2003', '2006', '', '', '', '', '', 'SEKOLAH TINGGI PASTORAL DIAN MANDALA', 'KATEKETIK PASTORAL', 'Gunungsitoli', '2008', '2013', '', '', '', '', '', '', '', '', '', '', 'SDN 071070 Onowaembo', 'Desa: Onowaembo, Kecamatan: Gunungsitoli Idanoi, Kota: Gunungsitoli', 'Pengajar', 'Guru', '2013-07-01', '2014-05-30', 'Mengundurkan Diri', 'Paroki Kristus Raja Gido', 'Desa: Hiliweto, Kecamatan: Gido, Kabupaten: Nias', 'Kateketik', 'Katekis ', '2013-10-04', '2015-05-18', 'Mengundurkan diri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30, '0000-00-00', '0000-00-00', 'Kontrak 3', 0, 0, 0, '', '142ed41c6ad843a0c9fe5cc24317ac3c', '0', 0, '1'),
('1508087', 'Yuli Nugraheni, S.Pd.', '0895333964889', '-', 'ynugraheni18@ymail.com', 'Rusun Pesakih Blok B/611 Kel. Duri Kosambi, Cengkareng, Jakarta 11750', 3, 'Malang', '1970-08-01', 'P', 1, 'Jawa', 'B', '2', '2', '2', 'img1507087.png', '1', 'Larasati Estiningbudhi', 'Keponakan', 'Rusun Pesakih Blok I/403 Kel. Duri Kosambi, Cengkareng, Jakarta 11750', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Adrianus Ali Kuswanto', 9, '5', 'Antonius Satrio Wicaksono', '17 ', 'Immanuel Bagus Wicaksono', '12', 'Ignatius Galih Wicaksono', '11', 'Yohanes  Bagas Wicaksono', '11', 'Caecilia Glory Putri Kuswanto', '8', 'Yosep Tumiran (Alm)', 1, '', '', '0000-00-00', 0, 0, '', '', 'Wati', 1, 'Rusun Pesakih Blok B/611, Kel. Duri Kosambi, Cengkareng, Jakarta 11750', 'Pamekasan', '1948-06-28', 10, 1, '-', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IKIP Negeri Jakarta, Rawamangun', 'Pendidikan Bahasa Inggris', 'Jakarta', 'Agustus 1989', 'Maret 1996', '', '', '', '', '', '', '', '', '', '', 'The Eloquence', 'Kelapa Gading, Boulevard TN/2, Jakarta Utara', 'Kursus bahasa Inggris', 'Instruktur bahasa Inggris', '1992-07-01', '1997-08-01', 'Pindah rumah ke Tangerang', 'SMP Katholik Stella Maris', 'Jln. Lele, Teluk Gong, Jakarta Utara', 'pendidikan', 'guru bahasa Inggris kelas 2 dan 3', '1997-07-01', '1998-06-15', 'tidak ada kesepakatan soal besaran gaji ', 'St. Anna English Course, Puri Kembangan, Jakarta Barat', 'Blok E, Puri Kembangan, Jakarta Barat', 'kursus bahasa Inggris', 'instruktur bahasa Inggris', '1997-07-01', '2000-07-01', '', 'ELTI Gramedia', 'Kompleks Wijaya Center, Kebayoran Baru, Jakarta Selatan', 'kurusus bahasa Inggris', 'instruktur bahasa Inggris', '2000-08-01', '2009-03-31', 'Melahirkan anak ke-5', 'SDS Westin', 'Jln. G no 408, Teluk Gong, Jakarta Utara', 'pendidikan', 'guru SD bidang studi English, Math and Science', '2011-07-15', '2015-07-31', 'Pindah rumah ke daerah Cengkareng', 'Mudika (Muda-Mudi Katholik) Wilayah V, Paroki St.Philipus Rasul', '', '', '', '', 'keagamaan', '', '', '', '', 'sekretaris', '', '', '', '', '1995-1996', '', '', '', '', 'Inggris', '', '', '1992', '', '', 'B', '', '', 'BS', '', '', 'B', '', '', 83, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '00a98e46f40be031d8d4dfb269f4e52a', '0', 0, '1'),
('1508092', 'Valdino Van Room, S.E.', '', '-', 'vanroomvaldino@yahoo.co.id', 'jln.pejambon 2 no 8a', 2, '', '1990-08-18', 'L', 1, '', '', '1', '3', '', 'img1508092.png', '2', 'olivia van room', 'kakak kandung', 'jln.kebayoran baru', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'ERIC VAN ROOM', 1, 'JLN.PEJAMBON 2 NO 8A', 'JAKARTA', '0000-00-00', 2, 6, '', 'JLN.JAKSA/ PT IDE MURNI PRATAMA', 'MAYA MARIAM ROBOT', 1, 'JLN PEJAMBON 2 8A', 'JAKARTA', '0000-00-00', 2, 6, '', 'JLN.MANGGARAI / PT IWATA TRAVEL', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'sarjana ekonomi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'universitas Y.A.I', 'MANAJEMEN SDD', 'JAKARTA', '2008', '2012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 23, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '77b94e62c7753c1a8684170fc14c7c90', '0', 0, '1'),
('1508093', 'Zakaria Sim', '', '', 'zakaria@gmail.com', '', 4, '', '1988-06-27', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 100, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0d7d5b97228f4c686110c967be0ddbe3', '0', 0, '2'),
('1509094', 'Oey Iyong, S.Kom.', '08568047788', '0215448586', 'oeyiyong@yahoo.com', 'Jl. MKJ XXXI No. 52 Rt.015 Rw.012, kelurahan Kapuk Kecamatan cengkareng Jakarta Barat 11720', 4, 'Jakarta', '1982-04-06', 'L', 1, 'chinese', 'O', '1', '3', '4', 'img1508094.png', '2', 'Oey Tjoei Ling', 'Orang Tua', 'Jl. MKJ XXXI No. 52 Rt.015 Rw.012, kelurahan Kapuk Kecamatan cengkareng Jakarta Barat 11720', '3173010604820010', 'Jakarta Barat', '2017-04-06', '820412051033', 'Jakarta', '2019-04-06', '', '', '0000-00-00', 'Astri Tanbiat Djuangga', 7, '0', '', '', '', '', '', '', '', '', '', '', 'Liem Wie Kian', 1, 'Jl. MKJ XXXI No. 52 Rt.015 Rw.012, kelurahan Kapuk Kecamatan cengkareng Jakarta Barat 11720', 'Jakarta', '1955-02-02', 5, 1, '0215448586', '', 'Oey Tjoei Ling', 1, 'Jl. MKJ XXXI No. 52 Rt.015 Rw.012, kelurahan Kapuk Kecamatan cengkareng Jakarta Barat 11720', 'Jakarta', '1961-11-22', 5, 7, '0215448586', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1 Teknik Informatika', 'TK Mina Esa', 'Jakarta', '1987', '1989', 'SD Negeri 06 Petang', 'Jakarta', '1989', '1995', 'SLTP Negeri 122', 'Jakarta', '1995', '1998', 'SMK Permata Indah', 'Akutansi', 'Jakarta', '1998', '2001', '', '', '', '', '', 'STMIK Swadarma', 'Teknik Informatika', 'Jakarta', '2005', '2008', '', '', '', '', '', '', '', '', '', '', 'PT JS MULTI COLLECTION', 'PINTU KECIL ASEMKA', 'EKSPOR IMPORT', 'STAFF IT', '2002-05-20', '', 'LANJUT KULIAH', 'PT. DWIPERKASA MOBILTAMA', 'JL. BANDENGAN', 'OTOMOTIF', 'MARKETING', '', '', 'PINDAH KE PT ATPM', 'PT. BUANA INDOMOBIL TRADA', 'PIK', 'OTOMOTIF', 'KOORDINATOR MARKETING', '', '', 'PENSIUN DARI DUNIA MARKETING', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 22, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '9d0baa3b4007bc034ec50fde3cbcb13f', '0', 0, '1'),
('1512095', 'Turasih', '087825014810', '', '', 'Rumah Susun Cinta Kasih Blok B 33 No 3B Cengkareng Timur Jakarta Barat ', 1, 'Pemalang', '1982-10-16', 'P', 1, 'Jawa', 'O', '2', '5', '5', 'img1512095.png', '3', 'Rudi Santoso', 'Suami', 'Rumah Susun Cinta Kasih Blok B 33 No 3B Cengkareng Timur Jakarta Barat ', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Rudi Santoso', 99, '2', 'Jili Arianti', '10', 'Vita Aulia', '3', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA 1 Muhammadyah Caur Pemalang ', 'IPS', 'Pemalang', '', '2001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 93, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', '7759bb7a5da33abdb4a8a190e0961aed', '0', 0, '1'),
('1601096', 'Bong Chun Ying', '081807433740', '081807433740', 'chun.ying65@yahoo.com', 'jl. H. Solihun No. 26, Kemanggisan Jakarta Barat', 2, 'Bangka', '1980-06-04', 'P', 1, 'Chinese', 'O', '1', '3', '4', 'img1601096.png', '3', 'Yance', 'Adik Kandung', '', '', 'Bangka Belitung', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Bong Lip Min', 0, 'Jl.Kapten Tendean No.52 Belinyu Bangka', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA ST Agnes', 'IPS', 'Bangka', '1997', '2000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sanbe Farma', 'Taman Sari No.10 Bandung', 'Farmasi', 'Sekretaris Spv', '2000-09-25', '2015-10-31', 'Gaji Kecil', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 44, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', '7cf2829d7d095a23b8cff064362c9bec', '0', 0, '1'),
('1601097', 'Nana Sagi', '', '', 'sagin1002@gmail.com', '', 3, '', '1989-12-17', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 49, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '5d0871e7daf2cd5f6f8758b492b468ec', '0', 0, '2'),
('1601098', 'Erwin Tanzil , S.S.', '', '', 'erwin@gmail.com', '', 4, '', '1984-10-10', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 39, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'c24f9ebcdad24026432c9bc33734a33d', '0', 0, '1'),
('1601099', 'Zakarias Kurniadi Nurchayo', '', '', 'zakarias@gmail.com', '', 3, '', '1974-11-16', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 101, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'f136803ffe61ea9ae78fb189739f4b2b', '0', 0, '2'),
('1601100', 'Andreas Noverdi, S.Psi.', '081279300707', '', 'noverdiandreas@gmail.com', 'Jl. Pancoran Barat XI No. 11 Jakarta Selatan', 1, 'Bengkulu', '1989-11-03', 'L', 1, '', 'AB', '2', '2', '1', 'img1601100.png', '3', 'Septi', 'Istri ', 'Jl. Pancoran Barat XI No. 11 Jakarta Selatan', '', 'Bengkulu', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Septi Marlini', 112, '', '', '', '', '', '', '', '', '', '', '', 'Ir. Muryadi H', 1, '', 'Kerkap', '1956-03-18', 3, 12, '', '', 'Anneke Rompas, SE (Alm)', 1, '', 'Curup', '0000-00-00', 3, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1 Psikologi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Kristen Maranatha', 'Psikologi', 'Bandung', '2007', '2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '0000-00-00', '0000-00-00', 'kontrak 2', 0, 0, 0, '', '5cc4ae60d9f9d2c13d1750f5fdd9fb9f', '0', 0, '1'),
('1601101', 'Suwanda Aditya Saputra, S.Kom.', '087884434433', '087884434433', 'wanda.adit@gmail.com', '', 2, 'Pemalang', '1987-08-30', 'L', 1, 'Jawa', 'B', '2', '3', '2', 'img1601101.png', '2', 'Cuncun Elisabet', 'Istri', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Cuncun Elisabet', 7, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STMIK NUSA MANDIRI TANGERANG', 'Sistem Informasi', 'Tangerang', '2012', '2016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 43, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', '5296b73c885a1d66c233f9010968b667', '0', 0, '1'),
('1602102', 'Edward Lawanto', '08999772285', '', 'shiva_lines@yahoo.com', 'Jl Bambu Tali 2 nomor 6 Bojong Indah Cengkareng Jakarta Barat', 3, 'Jakarta', '1985-03-13', 'L', 1, '', 'O', '2', '1', '3', 'img1602102.png', '3', 'Catherine', '08999382787', 'Grand Palm Residence Lantai 11 D 16', '', '', '0000-00-00', '85031205971563', 'Jakarta', '2021-03-13', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'LAmaholot', 'IPA', 'Jakarta Barat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 58, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '90f10f22e6355c43935d85e4f3c454a4', '0', 0, '1'),
('1602120', '..', '', '', '', '', 0, '', '0000-00-00', 'L', 0, '', '', '1', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 63, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '2'),
('1603103', 'Yuliana, S.Pd.', '0816795012', '02156984705', 'min17j@gmail.com', 'Taman Semanan Indah Blok G5 No. 16\r\nSemanan - Kalideres\r\nJakarta Barat 11850', 2, 'Jakarta', '1980-01-19', 'P', 1, 'Tionghoa', 'A', '2', '4', '4', 'img1603103.png', '1', 'Tjong Kwet Min', 'Suami', 'Taman Semanan Indah Blok G5 No. 16\r\nSemanan - Kalideres\r\nJakarta Barat 11850', '3173015901800007', 'Jakarta Barat', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Tjong Kwet Min', 9, '2', 'Natasha Tjong', '16', 'Arvin Nathaniel Tjong', '13', '', '', '', '', '', '', 'Hendralex Yapadi (Alm.)', 0, '', '', '0000-00-00', 0, 0, '', '', 'Meliane', 1, 'Taman Surya 3 Blok G1 No. 34\r\nPegadungan - Kalideres\r\nJakarta Barat', 'Bandung', '1949-06-13', 5, 110, '085103981518', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Magister Pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Pelita Harapan', 'Manajemen Pendidikan', 'Jakarta', '2016', '2017', '', '', '', '', '', 'Harcourt Int&#039;l English Course', 'Taman Palem Lestari', 'Pendidikan', 'Guru Bahasa Inggris', '2002-01-14', '2004-08-20', 'Mendapatkan posisi Guru Bahasa Inggris Full Time di sekolah', 'SD Kristen Kasih Karunia', 'Taman Palem Lestari Blok F', 'Pendidikan', 'Guru Bahasa Inggris / Koordinator ', '2003-05-05', '2010-06-25', 'Mencari pengalaman baru', 'SD/SMP Pelita Kasih', 'Taman Palem Lestari Blok E', 'Pendidikan', 'Guru Bahasa Inggris ', '2010-07-05', '2013-06-21', 'Mendapatkan penawaran kembali ke sekolah sebelumnya', 'SMA Kasih Karunia', 'Taman Surya 5 ', 'Pendidikan', 'Wakil Kepala Sekolah Bid. Kurikulum', '2013-07-08', '2014-06-20', 'Kasih Karunia berganti nama menjadi Kasih Kemuliaan', 'SMP Kasih Kemuliaan (ex. Kasih Karunia)', 'Taman Surya 5', 'Pendidikan', 'Kepala Sekolah', '2014-07-07', '2015-06-19', 'Konsentrasi kepada anak pasca operasi lutut (arthroscopy)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', '', '', '1992', '', '', 'BS', '', '', 'BS', '', '', 'BS', '', '', 8, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '784eb65b8beb184a48740d277e9864a1', '0', 0, '1'),
('1606104', 'Kasnawi, S.Kom.', '085747777052', '', 'kasnawi20@gmail.com', '', 2, 'Pemalang', '1984-05-20', 'L', 1, 'Java', '', '1', '3', '2', 'img1606104.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '81060d991e47f109f7c2a1452aace67e', '0', 1, '1'),
('1607105', 'Anita Octavia, S.Ds.', '', '', 'anita@gmail.com', '', 2, '', '1988-11-04', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 16, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '816319210cfc50a031e75da0e1d65838', '0', 0, '2'),
('1607106', 'Umandara, S.Pd.', '', '', 'umandara.budiman@gmail.com', '', 4, '', '1988-11-05', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '9c96089e64e9c37c99a4ee70fcac7c89', '0', 0, '2'),
('1607107', 'Elsye Lim', '', '', 'elsye.lim5588@gmail.com', '', 4, '', '1988-11-06', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '1d74bbe334df9ae228ae3ed21cd0233a', '0', 0, '2'),
('1607108', 'Adelina Oktavia, S.Pd.', '08569903051', '', 'adel_linna@ymail.com', 'Jalan Warga No.15 RT.09 RW.06 Kelurahan Pondok Ranggon Kecamatan Cipayung  Jakarta Timur', 3, 'Jakarta', '1992-10-21', 'P', 1, 'Batak', 'A', '1', '2', '2', 'img1607108.png', '3', 'Tolopan Lumban Batu', '082113885455', 'Jalan Warga No.15 RT.09 RW.06 Kelurahan Pondok Ranggon Kecamatan Cipayung  Jakarta Timur', '', 'Jakarta', '2017-10-21', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Tolopan Lumban Batu', 1, 'Jalan Warga No.15 RT. 09 RW. 06 Kelurahan Pondok Ranggon Kecamatan Cipayung Jakarta Timur', 'Taput', '1963-06-12', 1, 9, '082113885455', '', 'Repi Pandeangan', 1, 'Jalan Warga No.15 RT. 09 RW. 06 Kelurahan Pondok Ranggon Kecamatan Cipayung Jakarta Timur', '', '0000-00-00', 1, 1, '081288679060', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNJ (Universitas Negeri Jakarta)', 'Pendidikan Bahasa dan Sastra Indonesia', 'Jakarta', '2010', '2016', '', '', '', '', '', '', '', '', '', '', 'Yayasan Kristen Saint John', 'Bekasi-Harapan Indah', 'Sekolah', 'Guru Mata Pelajaran', '2014-07-12', '2015-07-12', 'Melanjutkan pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Keluarga Mahasiswa Katolik Sacra Familia UNJ', 'Keluarga Mahasiswa Katolik Sacra Familia UNJ', '', '', '', 'UKM', 'UKM', '', '', '', 'Divisi Pengembangan Organisasi', 'Koordinator Divisi Pengembangan Organisasi', '', '', '', '2011/2012', '2012/2013', '', '', '', 'Bahasa Inggris', '', '', '2', '', '', 'C', '', '', 'C', '', '', 'C', '', '', 13, '0000-00-00', '0000-00-00', 'Kontrak ke-2', 0, 0, 0, '', '8523d07195b6a6362c05e967986d5e2d', '0', 0, '1'),
('1607109', 'Martina Tampubolon, S.Pd.', '089652686658', '', 'martina.mamot@yahoo.com', 'jalan gunung galunggung I blok D2 nomor 1', 2, 'Jakarta', '1992-06-20', 'P', 1, '', '', '1', '1', '3', 'img1607109.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Charles Tampubolon', 1, 'jalan gunung galunggung I blok D2 nomor 1', 'Siborong-borong', '1961-03-27', 1, 1, '081399223143', '', 'Hulda Sitio', 1, 'jalan gunung galunggung I blok D2 nomor 1', 'Siatasan', '1968-04-05', 1, 1, '081310353167', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', 'SDS Citra Bangsa', 'Jakarta', '', '', 'SDS Kasih Setia', 'DKI Jakarta', '1998', '2004', 'SMPN 248', 'DKI Jakarta', '2004', '2007', 'SMAN 84', 'IPA', 'DKI Jakarta', '2007', '2010', '', '', '', '', '', 'Universitas Kristen Indonesia', 'Pendidikan Matematika', 'DKI Jakarta', '2010', '2014', '', '', '', '', '', '', '', '', '', '', 'Sekolah KALAM KUDUS', 'Kosambi', 'Pendidikan', 'Guru', '2015-06-22', '2016-06-17', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HIMATIKA', '', '', '', '', 'PENDIDIKAN', '', '', '', '', 'SIE SOSIAL', '', '', '', '', '2011', '', '', '', '', 'English', '', '', '2004', '', '', 'C', '', '', 'B', '', '', 'C', '', '', 12, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '1ff0dd0e606814851b22db7d282aff63', '0', 0, '1'),
('1607110', 'Lidwina Elly MK, S.Pd', '', '', 'lidwina@gmail.com', '', 3, '', '1988-11-09', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 11, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'f10032a30bf67b3ce08d1e2af56d4c17', '0', 0, '2');
INSERT INTO `karyawan` (`nik`, `karyawan`, `telepon`, `no_telp_rumah`, `email`, `alamat`, `agama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `id_warganegara`, `suku`, `gol_darah`, `status_perkawinan`, `anak_ke`, `jumlah_saudara`, `foto`, `status_tempat_tinggal`, `nama_darurat`, `hubungan_darurat`, `alamat_darurat`, `no_ktp`, `ktp_dikeluarkan_di`, `masa_berlaku_ktp`, `no_sim`, `sim_dikeluarkan_di`, `masa_berlaku_sim`, `no_passport`, `passport_dikeluarkan_di`, `masa_berlaku_passport`, `nama_suami_istri`, `pekerjaan_suami_istri`, `jumlah_anak`, `nama_anak1`, `usia_anak1`, `nama_anak2`, `usia_anak2`, `nama_anak3`, `usia_anak3`, `nama_anak4`, `usia_anak4`, `nama_anak5`, `usia_anak5`, `nama_ayah`, `id_warganegara_ayah`, `alamat_rumah_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `id_pendidikan_ayah`, `id_pekerjaan_ayah`, `no_telp_ayah`, `alamat_kantor_ayah`, `nama_ibu`, `id_warganegara_ibu`, `alamat_rumah_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `id_pendidikan_ibu`, `id_pekerjaan_ibu`, `no_telp_ibu`, `alamat_kantor_ibu`, `nama_wali`, `id_warganegara_wali`, `alamat_rumah_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `id_pendidikan_wali`, `id_pekerjaan_wali`, `no_telp_wali`, `alamat_kantor_wali`, `pendidikan_terakhir`, `nama_tk`, `tk_kota`, `tk_masuk`, `tk_keluar`, `nama_sd`, `sd_kota`, `sd_masuk`, `sd_keluar`, `nama_smp`, `smp_kota`, `smp_masuk`, `smp_keluar`, `nama_slta`, `slta_jurusan`, `slta_kota`, `slta_masuk`, `slta_keluar`, `nama_d3`, `d3_jurusan`, `d3_kota`, `d3_masuk`, `d3_keluar`, `nama_s1`, `s1_jurusan`, `s1_kota`, `s1_masuk`, `s1_keluar`, `nama_s2`, `s2_jurusan`, `s2_kota`, `s2_masuk`, `s2_keluar`, `nama_s3`, `s3_jurusan`, `s3_kota`, `s3_masuk`, `s3_keluar`, `nama_perusahaan1`, `alamat_perusahaan1`, `jenis_usaha1`, `riwayat_jabatan1`, `riwayat_pekerjaan_mulai1`, `riwayat_pekerjaan_akhir1`, `alasan_berhenti1`, `nama_perusahaan2`, `alamat_perusahaan2`, `jenis_usaha2`, `riwayat_jabatan2`, `riwayat_pekerjaan_mulai2`, `riwayat_pekerjaan_akhir2`, `alasan_berhenti2`, `nama_perusahaan3`, `alamat_perusahaan3`, `jenis_usaha3`, `riwayat_jabatan3`, `riwayat_pekerjaan_mulai3`, `riwayat_pekerjaan_akhir3`, `alasan_berhenti3`, `nama_perusahaan4`, `alamat_perusahaan4`, `jenis_usaha4`, `riwayat_jabatan4`, `riwayat_pekerjaan_mulai4`, `riwayat_pekerjaan_akhir4`, `alasan_berhenti4`, `nama_perusahaan5`, `alamat_perusahaan5`, `jenis_usaha5`, `riwayat_jabatan5`, `riwayat_pekerjaan_mulai5`, `riwayat_pekerjaan_akhir5`, `alasan_berhenti5`, `organisasi1`, `organisasi2`, `organisasi3`, `organisasi4`, `organisasi5`, `jenis_organisasi1`, `jenis_organisasi2`, `jenis_organisasi3`, `jenis_organisasi4`, `jenis_organisasi5`, `jabatan_organisasi1`, `jabatan_organisasi2`, `jabatan_organisasi3`, `jabatan_organisasi4`, `jabatan_organisasi5`, `periode_organisasi1`, `periode_organisasi2`, `periode_organisasi3`, `periode_organisasi4`, `periode_organisasi5`, `bahasa_asing1`, `bahasa_asing2`, `bahasa_asing3`, `digunakan_sejak1`, `digunakan_sejak2`, `digunakan_sejak3`, `membaca1`, `membaca2`, `membaca3`, `menulis1`, `menulis2`, `menulis3`, `berbicara1`, `berbicara2`, `berbicara3`, `id_pajak`, `tanggal`, `tanggal_mulai_kerja`, `status_pegawai`, `id_pelamar`, `id_gaji`, `id_ta`, `no_rekening`, `password`, `approved_jobdesk`, `peraturan_kepegawaian`, `status_aktif`) VALUES
('1607111', 'Eko Sastro Winoto, S.Kom.', '', '', 'eko@gmail.com', '', 2, '', '1988-11-10', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'cee8efb5be25b40922059ac4b6cd84ea', '0', 0, '2'),
('1607112', 'Anton Wijaya, S.Hum.', '085697375926', '021-6302015', 'yeyf1992@gmail.com', 'JL KALIANYAR II RT 005/001 NO 2A', 3, 'Jakarta', '1992-05-05', 'L', 1, 'TIONGHOA', 'A', '1', '3', '2', 'img1607112.png', '2', 'DJAN SUMIYANTI', 'KAKAK KANDUNG', 'JL JEMBATAN BESI RAYA NO. 31', '3173040505920011', 'DKI Jakarta', '1970-01-01', '920512058934', 'DKI JAKARTA', '2021-05-05', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'JOHAN LIE', 1, 'JL KALIANYAR II RT 005/001 NO 2A', 'MEMPAWAH', '1953-03-26', 1, 9, '021-6302015', '-', 'JUKI OKTAVIA DJAN', 1, 'JL KALIANYAR II RT 005/001 NO 2A', 'PONTIANAK', '1959-10-16', 1, 110, '021-6302015', '-', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata-1', 'BUDI BAHASA', 'DKI JAKARTA', '1996-11-24', '1998-11-24', 'BUDI BAHASA', 'DKI JAKARTA', '1998-11-24', '2017-11-24', 'PELITA', 'DKI JAKARTA', '2017-11-24', '2017-11-24', 'PELITA IV', 'AKUNTANSI', 'DKI JAKARTA', '2017-11-24', '2017-11-24', '', '', '', '', '', 'UNVERSITAS BUNDA MULIA', 'BAHASA DAN BUDAYA TIONGHOA', 'DKI JAKARTA', '2017-11-24', '2017-11-24', '', '', '', '', '', '', '', '', '', '', 'AIXIN COLLEGE', 'Jalan Janur Elok X Blok QG 9 No.21, RT.4/RW.11', 'PENDIDIKAN', 'STAFF PENGAJAR', '2012-07-16', '2016-01-31', 'MELANJUTKAN KE TAHAPAN YANG LEBIH FORMAL (SEKOLAH)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FAKULTAS ILMU SOSIAL HUMANIORA', 'FAKULTAS ILMU SOSIAL HUMANIORA', '', '', '', 'SENAT MAHASISWA', 'SENAT MAHASISWA', '', '', '', 'KOORDINATOR KESEJAHTERAAN MAHASISWA', 'SEKRETARIS 1', '', '', '', '2012-2013', '2013-2014', '', '', '', 'MANDARIN', 'INGGRIS', '', '2008', '2004', '', 'BS', 'B', '', 'BS', 'C', '', 'BS', 'B', '', 40, '0000-00-00', '0000-00-00', 'KONTRAK KE 2', 0, 0, 0, '', 'ce6123ad6ea8e72dfefadd7b3a177940', '0', 0, '1'),
('1607113', 'Gratianus Sumardin Gea, S.Pd.', '081381740081/', '', 'sumardigea78@gmail.com', 'Jalan Tenis IV No. 95 Kapuk Cengkareng Jakarta Barat', 2, 'Fadoro', '1982-03-07', 'L', 1, 'Nias', '0', '2', '1', '5', 'img1607113.png', '3', 'Yusnita Megaria Siregar', 'Istri', 'Jalan Tenis IV No. 95 Kapuk Cengkareng - Jakarta Barat', '3173010703821007', 'JAKARTA', '2018-03-07', '', '', '0000-00-00', '', '', '0000-00-00', 'Yusnita Megaria Siregar', 110, '2', 'Graceylla Arta Tamariska Gea', '7,5 tahun', 'Gilroy Arta Ishak Gea', '6 tahun', '', '', '', '', '', '', 'Sabinus Sadiaro Gea', 1, 'Desa Fadoro', 'Fadoro', '0000-00-00', 10, 0, '', '', 'Emilia Edina Humendru', 1, 'Desa Fadoro', 'Hilimbowo', '0000-00-00', 10, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STKIP Kusuma Negara', 'Bahasa Inggris', 'Jakarta', '2011', '2015', '', '', '', '', '', '', '', '', '', '', 'PT. CST ', 'Jalan Krendang Selatan - Jakarata Barat', 'Lembaga Pendidikan ', 'Guru bahasa Inggris', '2010-08-01', '2012-08-01', 'Mengundurkan diri karena mengajar di sekolah', 'Westin School', 'Teluk Gong', 'SEKOLAH', 'Guru Bahasa Inggris', '2012-02-27', '2016-06-27', 'Mengundurkan diri karena mengajar di sekolah baru. ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 38, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', '35f1048de9ce99f4ee8067ddd67c5754', '0', 0, '1'),
('1607114', 'Xiong Jing (Nancy)', '', '', '466961517@gmail.com', '', 1, '', '1988-11-16', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 106, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '5345689f95bce615eab7d84019d2cc5b', '0', 0, '2'),
('1607115', 'Arnancy', '', '', 'nancyarn.dm@gmail.com', '', 1, '', '1988-11-20', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 105, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '743933c46410c40885d738fe5f1d6606', '0', 0, '2'),
('1607116', 'Susanti, B.A.', '081288687782', '', 'susanti@gmail.com', 'taman palem lestari blok a 18 no 25', 4, 'bagan siapi api', '1992-02-29', 'P', 1, 'china', 'O', '2', '4', '6', 'img1607116.png', '1', 'hendry', 'Suami', 'taman palem lestari blok a 18 no 25', '', 'tangerang', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'hendry ', 6, '1', 'Yume Aurelia Hongrizal', '2 BULAN', '', '', '', '', '', '', '', '', 'ENG GUAN ', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 's1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'universitas amosiensis', 'mandarin ', 'Jakarta', '03032013', '2015', '', '', '', '', '', '', '', '', '', '', 'SEKOLAH ANAK TERANG ', 'TAMAN ROYAL 1', 'SEKOLAH ', 'GURU ', '2011-06-30', '2015-07-31', 'JAUH ', 'SANTA LAURENSIA ', 'ALAM SUTERA ', 'SEKOLAH ', 'GURU', '2015-07-01', '2016-07-31', 'JAUH ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mandarin', 'INDONESIA ', '', '2005', '1996', '', 'BS', 'BS', '', 'BS', 'BS', '', 'BS', 'B', '', 37, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', '0add2cde8bd520a1ce4d6f7bf35d7eb6', '0', 0, '1'),
('1607117', 'Merlisa ', '0895320073351', '0895320073351', 'merlisa.angella99@gmail.com', 'TAMAN PALEM LESTARI BLOK A 18B NO 52, CENGKARENG BARAT', 4, 'Bagan siapi api', '1993-06-08', 'P', 1, 'Chinese', 'B', '1', '4', '5', 'img1607117.png', '1', 'ANTHONY', 'Kakak Kandung Laki-Laki', 'TAMAN PALEM LESTARI BLOK A 18B NO 52, CENGKARENG BARAT', '3172014806931001', '13-06-2017', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Tekjuan', 1, '', 'Bagan Siapi-api', '0000-00-00', 0, 0, '', '', 'Kho Bie Guat', 1, '', 'Bagan Siapi-api', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'Sekolah Perguruan Wahidin ', 'IPS', 'Bagan Siapi-api', '2008', '2011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Taiyang Kursus Mandarin', 'Teluk gong jalan K', 'Les mandarin', 'Guru Mandarin', '2011-04-21', '2015-11-30', 'Pindah rumah', 'PT. Jingsi ( Tzu chi)', 'Pantai indah Kapuk', 'importir', 'Finance', '2015-04-14', '2016-06-30', 'Pindah kerjaan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mandarin', 'Hokkian', '', 'Sejak kecil', 'Sejak kecil', '', 'BS', 'BS', '', 'B', 'C', '', 'BS', 'BS', '', 77, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', 'f99e5e90c9923ee547728516490d4145', '0', 0, '1'),
('1607118', 'Yuniar Cresentia', '', '', 'yuniar@gmail.com', '', 4, '', '1998-01-28', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 107, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '12cefb87f854fc59645ac471c3c7a0fd', '0', 0, '2'),
('1607120', 'Rajelaksmi', '', '', 'rajelaksmi@gmail.com', '', 4, '', '1966-10-10', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 108, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'c0fcba9345183094bbd3300b62185f7e', '0', 0, '2'),
('1607121', 'Noviany, S.Kom.', '087776651121', '5817568', 'noviany261090@gmail.com', 'Green Garden blok X-2 No.31', 2, 'Jakarta', '1990-10-26', 'P', 1, 'Chinese', '0', '1', '1', '3', 'img1607121.png', '2', 'Noviana', 'Adik Kandung', 'Green Garden blok X-2 No.31', '3173056610900008', 'JAKARTA', '2017-10-26', '90101205970672', 'Jakarta', '2019-10-26', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'WITONO', 1, 'Green Garden blok X-2 No.31', 'Rengat', '1961-10-17', 1, 9, '5817568', 'Jl. Otista Raya No. 45A', 'Erni', 1, 'Green Garden blok X-2 No.31', 'Teluk Kuantan', '1961-08-31', 1, 110, '5817568', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BINUS UNIVERSITY', 'Sistem Informasi', 'Jakarta', '2009', '2013', '', '', '', '', '', '', '', '', '', '', 'PANCA BUDI GROUP', 'JL. DAAN MOGOT KM 19,6 KAWASAN PUSAT NIAGA TERPADU', 'PLASTIK', 'GENERAL PURCHASING', '', '', '', 'PT. MEDIASI INDONESIA', 'JL. PESING POGLAR', 'KONTRAKTOR', 'TRANSLATOR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BNMC', 'BNMC', 'BNMC', '', '', 'KEMAHASISWAAN', 'KEMAHASISWAAN', 'KEMAHASISWAAN', '', '', 'AKTIVIS AKADEMIK', 'PENGURUS AKADEMIK', 'KETUA EVENT CHAIN ', '', '', '2009-2010', '2010-2011', '2010-2011', '', '', 'Mandarin', 'Inggris', '', '2013', '', '', 'B', 'C', '', 'B', 'B', '', 'B', 'C', '', 103, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'fdf2dc0f4457d3cec4c2d833884ff15d', '0', 0, '1'),
('1607122', 'Deis Natasyah, Spd', '', '', 'deisnatasyah@gmail.com', '', 3, '', '1988-11-21', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 47, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '468af54f88d85aaec28ce692bcb5c2ff', '0', 0, '2'),
('1607123', 'Stefanus Liga, S.Tr.Sn.', '', '', 'liga.stefanus@gmail.com', '', 2, 'Baturaja', '1970-01-01', 'L', 0, '', '', '1', '', '', 'img1607123.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 5, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '60f85730cac2a5995971e4029244ced8', '0', 0, '1'),
('1607124', 'Sally Claveria Panijaya , SE.', '', '', 'sallyclav@gmail.com', '', 3, '', '1988-11-17', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '066765e0a7a70860cb5c320e949c7f4b', '0', 0, '2'),
('1607125', 'Kahesa Yeremia', '', '', 'kahesa@gmail.com', '', 1, '', '1988-11-12', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 54, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'ca33e2de95c834a3f256f5718fdd7a3b', '0', 0, '2'),
('1607126', 'Bernadeta Wiwin Retnaningsih, S.Pd.', '087738625559', '087738625559', 'bwr32009@yahoo.com', '', 3, 'Sleman', '1979-03-06', 'P', 0, '', '', '2', '', '', 'img1607126.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '60ae09e6b91830ca9d41698a73cb49a4', '0', 0, '1'),
('1607127', 'Petrus Hari Kurniawan, S.Kom.', '085718834161', '08561224820', 'petrus.harry1@gmail.com', '', 3, 'Sumberdadi', '1989-07-20', 'L', 1, 'Jawa', '', '1', '4', '4', 'img1607127.png', '3', '', '', '', '1810032007890006', 'Pringsewu', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Suharno', 1, '', '', '0000-00-00', 0, 11, '', '', 'Ratna Ningsih', 1, '', '', '0000-00-00', 0, 110, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Strata Satu (S1) Sarjana Komputer', '', '', '', '', 'SD N 3 Margodadi', 'Pringsewu', '', '', 'SMP N 1 Ambarawa', 'Pringsewu', '', '', 'SMA N 1 Ambarawa', 'Ilmu Pengetahuan Alam (IPA)', 'Pringsewu', '', '', 'Bina Sarana Informatika (BSI)', 'Manajemen Informatika', 'Tangerang (Cimone)', '', '', 'Nusa Mandiri', 'Sistem Informasi', 'Jakarta', '', '', '', '', '', '', '', '', '', '', '', '', 'PT. SOFTEX INONESIA', 'Komplek Industri Gajah Tunggal - Pasir Jaya, Jatake Tangerang', 'Baby Diapers', 'Admin Produksi', '2009-01-14', '2016-07-29', 'Menjadi Guru ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '', '', '', 'B', '', '', 'C', '', '', 'C', '', '', 9, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '62cd7f1dec3793806378205dfdb96f2e', '0', 0, '1'),
('1607128', 'Suhadi Priyono, S.Pd.', '081578113827', '', 'suhadipriyono93@gmail.com', '', 1, 'Jakarta', '1993-12-11', 'L', 1, '', '', '2', '3', '3', 'img1607128.png', '3', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Repina', 1, '1', 'alby refiandi priyono', '6 bulan ', '', '', '', '', '', '', '', '', 'yono ', 1, 'jl. fajar baru utara Rt 06 Rw 08 Cengkareng Timur, jakarta barat', '', '0000-00-00', 5, 6, '', 'jl. fajar baru utara Rt 06 Rw 08 Cengkareng Timur, jakarta barat\r\nSDN cengkareng timur 07', 'sarmi ', 1, 'jl. fajar baru utara Rt 06 Rw 08 Cengkareng Timur, jakarta barat', '', '0000-00-00', 5, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', 'SDN CENGKARENG TIMUR 07', 'jakarta', '', '', 'SMPN 108 JAKARTA', 'jakarta', '', '', 'SMA YADIKA 2', 'IPS', 'jakarta ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SMP Al-Istiqomah ', '', 'guru ', 'guru olahraga', '2015-08-17', '2016-01-04', 'mendapatkan pekerjaan yang lebih layak', 'SMK KESATUAN JAKARTA', '', 'Guru ', 'guru olahraga', '2016-07-18', '2017-06-12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, '0000-00-00', '0000-00-00', 'kontrak ke 2', 0, 0, 0, '', '52820022b9834a734d1916ee2e1d289f', '0', 0, '1'),
('1607129', 'Endang Hermansyah, M.Pd.I', '', '', 'usmet36@gmail.com', '', 1, 'Cilutung', '1988-11-02', 'L', 1, '', '', '2', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 31, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '1ea9a882de67853daae86b701ca63df3', '0', 0, '2'),
('1607130', 'Robert Hendry, S.Pd.', '', '', 'robert@gmail.com', '', 2, '', '1992-02-22', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 36, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '3480434d46f12de91fa011a5680b079d', '0', 0, '2'),
('1607131', 'Fepson Ronald Sitompul, S.Pd.', '', '', 'fepson_sitompul@gmail.com', '', 2, '', '0000-00-00', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 35, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '0', 0, '2'),
('1608132', 'Warniah, S.Hum', '08179762489', '-', 'nheea.dc03@gmail.com', 'Jl.Dharma Wanita II No.49 Rt.009 Rw.001 Kel.Rawa Buaya Kec.Cengkareng Jakarta Barat 11740', 1, 'Cirebon', '1988-08-20', 'P', 1, 'Sunda', '-', '1', '4', '3', 'img1608132.png', '3', 'Dahlia', 'kakak kandung', 'Jl.Dharma Wanita II No.49 Rt.009 Rw.001 Kel.Rawa Buaya Kec.Cengkareng Jakarta Barat 11740', '3173016008880015', 'DKI JAKARTA', '1988-08-27', '880816261375', 'Bali', '2019-08-20', '-', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Dadang Dau', 1, 'Cirebon ', 'Cirebon', '0000-00-00', 10, 10, '', '', 'Turkini', 1, 'Cirebon', 'Cirebon', '0000-00-00', 10, 10, '', '', 'Dahlia', 1, 'Rawa Buaya', 'Jakarta', '0000-00-00', 7, 1, '', '', 'Sarjana Humaniora', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Bunda Mulia', 'Bahasa dan Budaya China', 'Jakarta', '2012', '2016', '', '', '', '', '', '', '', '', '', '', 'TMS Tour and Travel', 'Bali', 'Tour and travel', 'Quality Control', '2011-08-20', '2012-05-20', 'Mau melanjutkan pendidikan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Himpunan Mahasiswa', '', '', '', '', 'Kemahasiswaan', '', '', '', '', 'Humas', '', '', '', '', '2 tahun', '', '', '', '', 'Mandarin', '', '', '2012', '', '', '', '', '', '', '', '', '', '', '', 80, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', 'a074f1fe2f104a83752e21afce90e39f', '0', 0, '1'),
('1608133', 'Lim Hendra, S.E.', '08971165279', '', 'hobert_lims@yahoo.co.id', 'Komp. Poris Indah Jl. Cemara IV Blok H No. 169, Poris Indah Tangerang', 3, 'Jakarta', '1977-07-18', 'L', 0, 'Tiong Hoa', 'A', '2', '1', '2', 'img1608133.png', '1', 'Andry Hia', 'Adik Ipar', 'Komp. Poris Indah Jl. Cemara VII Blok H No.323, Porris Indah Tangerang', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Farlinda', 106, '2', 'Fabian Hosea', '15', 'Gilbert Rae', '12', '', '', '', '', '', '', 'Hadi Wijaya Lim', 1, '', 'Medan', '0000-00-00', 1, 9, '', '', 'Jainida', 1, '', 'Medan', '0000-00-00', 1, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STIE YAI', 'Manajemen Keuangan &amp; Perbankan', 'Jakarta', '1998', '2002', '', '', '', '', '', '', '', '', '', '', 'Narada School', 'Perum Kosambi Baru Blok A Ext.1', 'Pendidikan', 'Head of GA', '', '', 'Mencari pengalaman GA di Perusahaan (non pendidikan)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '', '', '', 'C', '', '', 'C', '', '', 'C', '', '', 67, '0000-00-00', '0000-00-00', 'Kontrak 2', 0, 0, 0, '', '1eca28f301a0853d467d7dc35e3c0963', '0', 0, '1'),
('1608134', 'Junita Manurung', '', '', '', '', 2, '', '1997-06-15', 'P', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 111, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '01330f2666fb0505188fb2acfa2be747', '0', 0, '2'),
('1608135', 'Edwin Edison', '087789222424', '087789222424', 'edwin.edisonn@gmail.com', '', 2, 'Bogor', '1996-05-30', 'L', 1, 'INDONESIA', 'AB', '1', '1', '1', 'img1608135.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 74, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '1df1b9158fff987e75a3952006fc8f8e', '0', 0, '1'),
('1608136', 'Chin Su Chin', '', '', '', '', 2, '', '1996-05-31', 'L', 0, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 109, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '44d8766d5b914bec6ecb7107f9676973', '0', 0, '2'),
('1609137', 'Novianti, S.I.Kom.', '082123837176', '', 'noviantihumas.pahtsung@gmail.c', '', 2, 'Tangerang', '1992-11-25', 'P', 1, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 85, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '2312f74a311253280ab78a6320cc2944', '0', 0, '1'),
('1609138', 'Aziz Rahman Aji', '08988742799', '', 'armansukses17@gmail.com', '', 1, 'Cilacap', '1992-10-16', 'L', 1, '', 'O', '1', '1', '3', '', '3', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1 Sistem Informasi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bina Sarana Informatika (BSI)', 'Manajemen Informatika', 'Jakarta Barat', '', '', 'STMIK NUSA MANDIRI', 'Sistem Informasi', 'Jakarta Barat', '2016', '2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 18, '0000-00-00', '0000-00-00', 'Kontrak ke 1', 0, 0, 0, '', '98d622a6b6fe647504b55d1f4c5c92c5', '0', 0, '2'),
('1700004', 'Ni Wayan Mega Astini', '085695056061', '', 'wayanmega3@gmail.com', 'Jln Mede no 6 A Utan Kayu Utara jakarta Timur', 5, 'Legundi', '1996-04-14', 'P', 1, 'Bali', 'O', '1', 'Perta', '4', 'img1700004.png', '3', 'Nyoman Darmawan', 'Saudara', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Wayan Arsa', 1, 'Legundi kecamatan ketapang lampung selatan', '', '0000-00-00', 10, 99, '', '', 'Nyoman Sipi', 1, 'Legundi kecamatan ketapang lampung selatan', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA Negeri 1 Ketapang', 'IPA', 'Kalianda', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 29, '0000-00-00', '0000-00-00', 'Honorer', 0, 0, 0, '', '46b68c4deb2594628b4c88f4696e78a8', '0', 0, '1'),
('1700005', 'Fernado Sutarli, S.E.', '08170900518', '', 'fernadosutarli@gmail.com', 'Green Lake City Cluster East Asia 12/66. Cipondoh', 3, 'Jakarta', '1987-12-18', 'L', 1, '', 'B', '', '1', '2', 'img007.png', '', 'Agnes Adikarta', 'istri', 'Green Lake City Cluster East Asia 12/66. Cipondoh', '3173031812870004', 'Jakarta', '1970-01-01', '871212052169', 'Jakarta', '2022-12-18', '', 'Jakarta', '0000-00-00', 'Agnes Adikarta', 6, '', '', '', '', '', '', '', '', '', '', '', 'Witarsa Sutarli', 1, 'villa danau indah blok ae no6, sunter kirana 7a', 'Jakarta', '1956-11-06', 3, 10, '0816933417', '', 'Jester Surachman', 1, 'villa danau indah blok ae no6, sunter kirana 7a', 'Jakarta', '1956-10-24', 3, 110, '081294372556', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Atma Jaya', 'Ekonomi', 'Jakarta', '2007', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Unit Citra Muda Jaya', '', '', '', '', 'Musik', '', '', '', '', 'Wakil ketua', '', '', '', '', '2011', '', '', '', '', 'Inggris', '', '', '', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 95, '0000-00-00', '0000-00-00', 'Inval', 0, 0, 0, '', 'e422d9f776a01eceb44ee0fca91ad6e5', '', 0, '1'),
('1701139', 'Diah Pramusinta', '', '', 'diah_pramusinta@gmail.com', '', 1, '', '1993-11-15', 'P', 1, '', '', '1', '', '', '', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 25, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '0124a2a3ff4e282024ae035a70bc5c9c', '0', 0, '2'),
('1701140', 'Syamsul Anwar', '089653743873', '', 'syamsul10anwar@gmail.com', 'Jl. Anggaran Rt 002/RW03 Karang Tengah Ciledug Tangerang. Banten ', 1, 'Tangerang', '1995-09-13', 'L', 1, 'Betawi', 'O', '1', '7', '6', 'img1701140.png', '2', 'Samlawih', 'Kakak', 'Jl. Anggaran Rt 002/RW03 Karang Tengah Ciledug Tangerang. Banten ', '3671121309950001', 'Tangerang', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA PGRI 117 Ciledug Tangerang', 'IPA', 'TANGERANG', '', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 26, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '', '7867001d38f1c728c98bfc7ba2bf30ed', '0', 0, '2'),
('1703141', 'Tan Fiona Nina Suriantio', '', '', '', '', 4, '', '1982-09-19', 'P', 1, '', '', '1', '', '', '', '2', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 27, '0000-00-00', '2017-03-01', 'Kontrak ke 1', 0, 0, 0, '5270386042', 'df61bbc6e145cf964313970834f54ddb', '0', 0, '2'),
('1703142', 'Muhammad Yusuf Saputro, S.Pd.', '08999928286', '', 'm_yusuf_s@ymail.com', '', 1, 'Rembang', '1994-08-03', 'L', 1, '', '', '1', '', '', 'img1703142.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 28, '0000-00-00', '2017-03-06', 'Kontrak ke 1', 0, 0, 0, '', 'd0e4824257b0ff465dbbd28890b94cf1', '0', 0, '1'),
('1704143', 'Fathya Eliza Rosyadi, S.Si.', '081212672434', '', 'fathyarosyadi@gmail.com', '', 1, 'Jakarta', '1995-04-19', 'P', 1, '', '', '1', '', '', 'img1704143.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 45, '0000-00-00', '0000-00-00', 'Kontrak ke 1', 0, 0, 0, '', 'f446ef738e2085bed24ab4e0b4dece47', '0', 0, '1'),
('1707144', 'Mohamad Nur, S.IP.', '', '', '', '', 1, 'Jakarta', '1994-12-28', 'L', 1, 'Java', 'A', '1', '3', '3', 'img1707144.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Suwanda', 1, 'Jl.Kh.Muhasyim VI RT 008/06 No.12 Cilandak Barat Jakarta Selatan', 'Jakarta', '1961-12-17', 5, 10, '', '', 'Suharningsih', 1, 'Jl.Kh.Muhasyim VI RT 008/06 No.12 Cilandak Barat Jakarta Selatan', 'Malang', '1961-08-02', 7, 99, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Syarif Hidayatullah Jakarta', 'Ilmu Perpustakaan', 'Tangerang Selatan', '2012', '2017', '', '', '', '', '', '', '', '', '', '', 'Yayasan Rumah Pendidikan Islam', 'Jl.HR Rasuna Said', 'Pendidikan', 'Kepala Perpustakaan', '2016-07-03', '2018-02-08', 'Project Selesai', 'Minyak dan Gas Bumi', 'Jl. HR Rasuna Said B-5', 'Minyak dan Gas', 'Pustakawan', '2017-02-06', '2017-09-08', 'Project Selesai', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Karang Taruna RW 06', 'Paskibraka', 'OSIS ', 'Marketing', '', 'Sosial', 'Paskibra', 'Orientasi Sekolah', '', '', 'Anggota', 'Anggota', 'Ketua Mading', 'Ketua Marketing Fair', '', '2012', '2008', '2010', '2012', '', 'Inggris', '', '', '2017', '', '', 'C', '', '', 'C', '', '', 'C', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '7310391071', '0fff0e4f950f44e4315d4f9fa5290326', '0', 1, '1'),
('1707145', 'Magdalena Manullang', '083890158227', '', 'lena.manutsuan@gmail.com', 'Jl. Pijar rt. 06, rw. 04 No. 32 Kel. kampung dukuh, kec. kramat jati. jak-tim', 2, 'Medan', '1980-09-20', 'P', 1, 'batak', 'B', '1', '5', '6', 'img1707145.png', '1', 'Mariana Manullang', 'kakak kandung', 'Jl. Pijar rt. 06, rw. 04 No. 32 Kel. kampung dukuh, kec. kramat jati. jak-tim', '3175046809800024', 'Jakarta Timur', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Sarles Binsar Manullang', 1, 'Asr. TNI - AD Glugur Hong Blok G No. 1. Medan', '', '0000-00-00', 1, 0, '', '', 'Juliana Fatmawati Pasaribu', 1, 'Asr. TNI - AD Glugur Hong Blok G No. 1. Medan', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMEA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '2013', '', '', 'BS', '', '', 'BS', '', '', 'BS', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '7310391071', '7a4a0f4068ba3fbcdfbb164794bd3263', '0', 1, '1'),
('1707146', 'Desi', '085245195293', '085245195293', 'deazzie.huang@gmail.com', 'The Royale Palm\r\nJln Royal Utama IV Blok  B No. 11\r\nCengkareng', 4, 'Singkawang', '1992-07-29', 'P', 1, 'Chinese', 'B', '1', '5', '5', 'img1707146.png', '1', 'Evan Janarso', 'Kakak Kandung Laki-Laki', 'Karawaci Residence\r\nJln Karawaci Residence Blok C No. 11', '6172016907920001', 'Singkawang', '2017-07-29', '', '', '0000-00-00', 'A9544700', 'Singkawang', '2015-01-02', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Bong Moei Fa', 1, 'Jln Siaga No. 16 Rt. 002 Rw. 001\r\nSingkawang Tengah Kalimantan Barat', 'Singkawang', '0000-00-00', 5, 1, '', '', 'Erlina', 1, 'Jln. Siaga No. 16 Rt. 002 Rw.01\r\nSingkawang Tengah Kalimantan Barat', 'Singkawang', '1961-02-04', 10, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMK', '', '', '', '', '', '', '', '', '', '', '', '', 'SMK Mudita Singkawang', 'Akuntansi', 'Singkawang', '2007', '2010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PT. Bintang Utama Distribusindo raya', 'Jln. Tanjung Batu Sakkok No.21 Singkawang', 'Dostributor', 'Admin Pelunasan', '2017-08-28', '2017-08-28', 'Mencari Suasana Baru', 'PT. Mitra Kawan Kita', 'Jl. Yohana Godang Singkawang', 'Distributor', 'Admin Keuangan', '2017-08-28', '2017-08-28', 'Mengundurkan diri karena mencari pekerjaaan lain', 'PT. BTI', 'Jln. Sei Wie Singkawang', 'Distributor', 'Admin Pengelolah Piutang', '2017-08-28', '2017-08-28', 'Tidak berada di kota Singkawang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mandarin', 'Inggris', '', '', '', '', 'B', 'K', '', 'B', 'K', '', 'B', 'K', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '7310391071', 'a730a619233efa1c08df063be15d3090', '0', 1, '1'),
('1707147', 'Juliana Ajun', '0895341629136', '', 'vallenpit80@gmail.com', 'The Royale Palm\r\nJl. Royal Utama IV Blok B No.11', 4, 'Sunga Pangkalan II', '1995-12-13', 'P', 1, 'Java', 'B', '1', '5', '7', 'img1707147.png', '1', 'Salina', 'Saudara Kandung Perempuan', 'Perumahan Villa Taman Kartini Blok E5 No.21/20', '6107155312950005', 'Bengkayang', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Pit Nyuk Liong', 1, 'Dusun Pelita Rt. 006 Rw. 004 Kel. Rukma Jaya Kec. Sungai Rya Kepulauan\r\nKalimantan Barat', '', '0000-00-00', 10, 99, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Guangzhou Normal School of Pre-school Education', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TK', 'Guangzhou', '2016', '2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mandarin', '', '', '', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '7310391071', 'b95f8f3ee490d4f5db5fa0f4e121cf9c', '0', 1, '1'),
('1707148', 'Yenny Farida Gulo, S.Pd.', '081294484291', '081294484291', 'yennyfaridagulo@gmail.com', 'KP.Dongkal rt 008/rw 003 Cipondoh Indah,cipondoh Tangerang.', 2, 'Orahili Badalu', '1990-05-02', 'P', 1, 'Nias', 'o', '2', '3', '7', 'img1707148.png', '', 'Matius Lede', 'suami', 'KP.Dongkal rt 008/rw 003 Cipondoh Indah,cipondoh Tangerang.', '36710542059000007', 'Kota Tangerang', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Rorogo Gulo', 1, 'Orahili Badalu Nias Barat Sumatra Utara', 'Orahili Badalu 18 Mei 1961', '0000-00-00', 3, 5, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sekolah ABBAkids', 'Poris Indah blok e no 164 A- B Cipondoh indah,Cipondoh Tangerang Kota', 'Sekolah', 'Guru Kelas', '2011-11-15', '2017-06-15', 'Kontrak habis', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '2003', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '7310391071', 'f5100182013b26dccaf2c8f19de1106f', '0', 1, '1'),
('1707149', 'Gita Prahmana, S.Pd.', '08561100750', '', 'gitangguh@gmail.com', '', 1, 'Jakarta', '1989-02-12', 'P', 1, '', '', '1', '', '', 'img1707149.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '7310391071', '80d066c6903dde7ec04659a950e6bf03', '0', 1, '1');
INSERT INTO `karyawan` (`nik`, `karyawan`, `telepon`, `no_telp_rumah`, `email`, `alamat`, `agama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `id_warganegara`, `suku`, `gol_darah`, `status_perkawinan`, `anak_ke`, `jumlah_saudara`, `foto`, `status_tempat_tinggal`, `nama_darurat`, `hubungan_darurat`, `alamat_darurat`, `no_ktp`, `ktp_dikeluarkan_di`, `masa_berlaku_ktp`, `no_sim`, `sim_dikeluarkan_di`, `masa_berlaku_sim`, `no_passport`, `passport_dikeluarkan_di`, `masa_berlaku_passport`, `nama_suami_istri`, `pekerjaan_suami_istri`, `jumlah_anak`, `nama_anak1`, `usia_anak1`, `nama_anak2`, `usia_anak2`, `nama_anak3`, `usia_anak3`, `nama_anak4`, `usia_anak4`, `nama_anak5`, `usia_anak5`, `nama_ayah`, `id_warganegara_ayah`, `alamat_rumah_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `id_pendidikan_ayah`, `id_pekerjaan_ayah`, `no_telp_ayah`, `alamat_kantor_ayah`, `nama_ibu`, `id_warganegara_ibu`, `alamat_rumah_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `id_pendidikan_ibu`, `id_pekerjaan_ibu`, `no_telp_ibu`, `alamat_kantor_ibu`, `nama_wali`, `id_warganegara_wali`, `alamat_rumah_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `id_pendidikan_wali`, `id_pekerjaan_wali`, `no_telp_wali`, `alamat_kantor_wali`, `pendidikan_terakhir`, `nama_tk`, `tk_kota`, `tk_masuk`, `tk_keluar`, `nama_sd`, `sd_kota`, `sd_masuk`, `sd_keluar`, `nama_smp`, `smp_kota`, `smp_masuk`, `smp_keluar`, `nama_slta`, `slta_jurusan`, `slta_kota`, `slta_masuk`, `slta_keluar`, `nama_d3`, `d3_jurusan`, `d3_kota`, `d3_masuk`, `d3_keluar`, `nama_s1`, `s1_jurusan`, `s1_kota`, `s1_masuk`, `s1_keluar`, `nama_s2`, `s2_jurusan`, `s2_kota`, `s2_masuk`, `s2_keluar`, `nama_s3`, `s3_jurusan`, `s3_kota`, `s3_masuk`, `s3_keluar`, `nama_perusahaan1`, `alamat_perusahaan1`, `jenis_usaha1`, `riwayat_jabatan1`, `riwayat_pekerjaan_mulai1`, `riwayat_pekerjaan_akhir1`, `alasan_berhenti1`, `nama_perusahaan2`, `alamat_perusahaan2`, `jenis_usaha2`, `riwayat_jabatan2`, `riwayat_pekerjaan_mulai2`, `riwayat_pekerjaan_akhir2`, `alasan_berhenti2`, `nama_perusahaan3`, `alamat_perusahaan3`, `jenis_usaha3`, `riwayat_jabatan3`, `riwayat_pekerjaan_mulai3`, `riwayat_pekerjaan_akhir3`, `alasan_berhenti3`, `nama_perusahaan4`, `alamat_perusahaan4`, `jenis_usaha4`, `riwayat_jabatan4`, `riwayat_pekerjaan_mulai4`, `riwayat_pekerjaan_akhir4`, `alasan_berhenti4`, `nama_perusahaan5`, `alamat_perusahaan5`, `jenis_usaha5`, `riwayat_jabatan5`, `riwayat_pekerjaan_mulai5`, `riwayat_pekerjaan_akhir5`, `alasan_berhenti5`, `organisasi1`, `organisasi2`, `organisasi3`, `organisasi4`, `organisasi5`, `jenis_organisasi1`, `jenis_organisasi2`, `jenis_organisasi3`, `jenis_organisasi4`, `jenis_organisasi5`, `jabatan_organisasi1`, `jabatan_organisasi2`, `jabatan_organisasi3`, `jabatan_organisasi4`, `jabatan_organisasi5`, `periode_organisasi1`, `periode_organisasi2`, `periode_organisasi3`, `periode_organisasi4`, `periode_organisasi5`, `bahasa_asing1`, `bahasa_asing2`, `bahasa_asing3`, `digunakan_sejak1`, `digunakan_sejak2`, `digunakan_sejak3`, `membaca1`, `membaca2`, `membaca3`, `menulis1`, `menulis2`, `menulis3`, `berbicara1`, `berbicara2`, `berbicara3`, `id_pajak`, `tanggal`, `tanggal_mulai_kerja`, `status_pegawai`, `id_pelamar`, `id_gaji`, `id_ta`, `no_rekening`, `password`, `approved_jobdesk`, `peraturan_kepegawaian`, `status_aktif`) VALUES
('1707150', 'Maria Wardani, S.Kom.', '089643854259', '', 'dani.agatha94@gmail.com', 'Kenanga blok A no 72 cipondoh Tangerang', 3, 'Wonogiri', '1994-10-04', 'P', 1, 'Java', 'B', '1', '1', '', 'img1707150.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', 'SMK YPKARYA 1', 'Multimedia', 'Tangerang', '2009', '2012', '', '', '', '', '', 'Universitas Budi Luhur', 'Teknik Informatika', 'Jakarta Selatan', '2012', '2017', '', '', '', '', '', '', '', '', '', '', 'Saint John&#039;s School', 'Taman Villa Meruya Blok D1', 'PendidikanGuru', '', '2015-08-18', '2017-08-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Indonesia', 'English', '', '', '', '', 'BS', 'BS', '', 'BS', 'BS', '', 'BS', 'BS', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '1f8411a4b82d7f9285c837017491fa60', '0', 1, '1'),
('1707151', 'Cicilia Indah Nuraeny, S.Pd.', '085640301577', '', 'ciciliaindahnuraeny@gmail.com', 'komplek kenanga sumber mas blok A/19 cipondoh Tangerang', 3, 'Cilacaap', '1994-10-04', 'P', 1, 'Java', 'A', '2', '8', '8', 'img1707151.png', '1', 'Fidelis Krisna Hernawan', 'suami', 'komplek kenanga sumber mas blok A/19 cipondoh Tangerang', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', 'Fidelis Krisna Hernawan', 106, '1', 'Maria Kyora Widi Hernawan', '7 bulan', '', '', '', '', '', '', '', '', 'Philipus Kumsari ', 1, '', 'Cilacap', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', 'TK Pius Bhakti Utama ', 'Kebumen', '1998', '1999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lion Air', '', '', 'pramugari', '2007-02-14', '2015-02-15', 'melanjutkan studi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'paskibra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2008-2010', '', '', '', '', 'Inggris', '', '', '', '', '', 'B', '', '', 'B', '', '', 'C', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '1f8411a4b82d7f9285c837017491fa60', '0', 1, '1'),
('1707152', 'Yolanda Halim, S.Hum, MTCSOL.', '08998761136', '08998761136', 'yolandahalim92@gmail.com', 'Jl. Asem no. 61B, Jakbar 11520', 4, 'Jakarta', '1992-08-27', 'P', 1, 'Chinesse', 'A', '1', '3', '2', 'img1707152.png', '1', 'Stevan Halim', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '9e5d8d614957c9e4214c7a6354157345', '0', 1, '1'),
('1707153', 'Herlina Junianti Sihombing, S.Pd.', '087883839003', '081317467651', 'herlinasihombing381@gmail.com', '', 2, 'Parapat', '1992-06-25', 'P', 1, 'Chinesse', '', '1', '', '', 'img1707153.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '0b0fd359dd3d4949bf29802beb8f4ba4', '0', 1, '1'),
('1707154', 'Mei Marlina Magdalena, S.Pd.', '085811813937', '081314200193', 'im3stg@gmail.com', 'Jl.Rusun Flaboyan RT 10 RW 08 block D no.135\r\nCengkareng,Jakarta Barat', 2, 'Jakarta', '1995-05-20', 'P', 1, 'Bataknese', 'O', '1', '1', '2', 'img1707154.png', '1', 'Binsar Halomoan Sitangang ', 'Ayah Kandung', 'Jl.Rusun Flaboyan RT 10 RW 08 block D no.135\r\nCengkareng,Jakarta Barat', '', 'Jakarta Timur', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Binsar Halomoan Sitanggang', 1, 'Jl.Rusun Flaboyan RT 10 RW 08 block D no.135\r\nCengkareng,Jakarta Barat', 'Pemakam Siantar', '1970-01-01', 1, 9, '081288752899', '', 'Risna Sinaga', 1, 'Jl.Rusun Flaboyan RT 10 RW 08 block D no.135\r\nCengkareng,Jakarta Barat', 'Lubuk Pakam', '1970-01-01', 0, 1, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', 'SDN Cengklong 3 ', 'Tangerang', '2000', '2006', 'SMP Yadika 10 Kosambi', 'Tangerang', '2006', '2009', 'SMAN 56 Jakarta ', 'IPA', 'Jakarta Barat', '2009', '2012', '', '', '', '', '', 'Universitas Kristen Indonesia', 'FKIP BS', 'Jakarta Timur', '2012', '2016', '', '', '', '', '', '', '', '', '', '', 'Teach Indonesia School', 'Jl. Kelapa Lilin NI 16/1, Kelapa Gading, Jakarta Utara', '', 'Assistant teacher', '', '', 'Jarak antara tempat tinggal dan kerja terlalu jauh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', '', '', '2012', '', '', 'BS', '', '', 'BS', '', '', 'B', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', 'e98f00cba2e825f8b8bb2de7a9aa373f', '0', 1, '1'),
('1707155', 'Agus Priyanto, S.Pd.', '087808783949', '', 'agus.cuan@gmail.com', '', 1, 'Tegal', '1982-06-11', 'L', 1, 'Jawa', '', '1', '', '', 'img1707155.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '30f5e042ee73b870486a271155f60e96', '0', 1, '1'),
('1707156', 'Christina Rinanda Y.V., S.Pd.', '085642094866', '', 'ririnrinanda@gmail.com', '', 3, 'Klaten', '1992-06-25', 'P', 1, 'JAWA', 'A', '1', '2', '2', 'img1707156.png', '3', 'Norbertus Riyanta', 'ayah', 'Pandeyan, Paseban, Bayat, Klaten', '', 'Klaten', '1970-01-01', '', 'klaten', '2017-08-28', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Norbertus Riyanta', 1, '', 'Klaten', '0000-00-00', 1, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', 'Indriyasana', 'Klaten', '', '', 'Kanisius', 'Klaten', '', '', 'Pangudi Luhur Bayat', 'Klaten', '2003', '2006', 'SMA Negeri 1 Cawas', 'IPA', 'Klaten', '2006', '2009', '', '', '', '', '', 'Universitas Sanata Dharma', 'Pendidikan Mtematika', 'Yogyakarta', '2009', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '0b0fd359dd3d4949bf29802beb8f4ba4', '0', 1, '1'),
('1707157', 'Ginanjar Prio Anggoro, S.Pd.', '085747400283', '', 'jar.anggoro@gmail.com', 'Jalan Pedongkelan Belakang rt 5/ rw 13 no.83 Kec. Cengkareng, Kel. Kapuk, Kota Jakarta Barat 11720', 1, 'Banyumas', '1993-02-23', 'L', 1, 'Jawa', '', '1', '2', '2', 'img1707157.png', '3', 'Naryeti', 'Ibu Kandung', 'Jalan Perintis No. 14A Pekunden, Banyumas, Jawa Tengah.', '3302112303930001', 'Banyumas', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Arisno', 1, 'Jalan Perintis No. 14A Pekunden Banyumas Jawa Tengah', 'Banyumas', '1970-01-01', 1, 9, '', '', 'Naryeti ', 1, 'Jalan Perintis No. 14A Pekunden Banyumas Jawa Tengah', 'Banyumas', '1964-02-12', 1, 5, '085647773790', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', 'TK Pertiwi', 'Banyumas', '1998', '1999', 'SD N Pekunden 1', 'Banyumas', '1999', '2005', 'SMP N 2 Banyumas', 'Banyumas', '2005', '2008', 'SMA N Banyumas', 'IPS', 'Banyumas', '2008', '2011', '', '', '', '', '', 'UNIVERSITAS NEGERI SEMARANG', 'Pendidikan Seni Musik', 'Semarang', '2012', '2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pergelaran Seni Musik 2014', '', '', '', '', 'Event Organizer', '', '', '', '', 'Ketua Penyelenggara', '', '', '', '', '1', '', '', '', '', 'Ingrris', '', '', '', '', '', 'C', '', '', 'C', '', '', 'K', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', 'fc5b57ea62d4ceb3b44a9aee582fa340', '0', 1, '1'),
('1707158', 'Bambang Saputra, S.Pd.', '085265772497', '085265772497', 'crimsonday.bs@gmail.com', 'RT 11 Kober, Rawa Kedaung Cengkareng', 1, 'Bukit tinggi', '1991-12-30', 'L', 1, 'minang', 'B', '1', '4', '3', 'img1707158.png', '3', 'Tata Aulia', 'Sahabat', 'Jalan Kerapu 3 no 40 Muara Angke, Jakarta Utara', '1304013012910001', 'Sumtera Barat', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Anwar', 1, 'Koto Baru Padang Panjang, Sumatera Barat', 'Padang Panjang', '0000-00-00', 1, 11, '', '', '(almh) Neng', 1, '', '', '0000-00-00', 1, 0, '', '', 'Teti Susanti', 1, 'Bukitiingi, Sumatera Barat', '', '0000-00-00', 1, 110, '', '', 'S1', '', '', '', '', 'SDN 19 Koto Baru', 'Tanah Datar, Sumatera Barat', '', '', 'SMPN 1 X Koto', 'Padang Panjang', '', '', 'MAN 1 Koto Baru Padang Panjang', 'IPA', '', '2008', '2010', '', '', '', '', '', 'State Islamic Institute of Bukittinggi', 'English Education', 'Bukittinggi', '2012', '2016', '', '', '', '', '', '', '', '', '', '', 'PT Jaco Nusantara Mandiri', 'Jembatan Besi Jakarta Utara', 'Perdagang', 'Operator Web Marketing', '2016-02-01', '2017-06-01', 'Gaji terlalu kecil', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'English Debate', 'HMJ', '', '', '', 'Organisasi Kampus', 'Organisasi Kampus', '', '', '', 'Anggota', 'Humas', '', '', '', '2 tahun', '3 tahun', '', '', '', 'English', 'arabic', '', '2012', '', '', 'BS', 'C', '', 'B', 'C', '', 'B', 'C', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', 'a2231cd5248e540197bb59fa8e427e34', '0', 1, '1'),
('1707159', 'Ikwal Septiana Rahim, S.Pd.I.', '089637593707', '081210263332', 'ikwalseptianarahim@gmail.com', '', 1, 'Jakarta', '1992-10-15', 'L', 1, 'Chinesse', '', '1', '', '', 'img1707159.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', 'a379566d047e5146ac2374d06c8ab363', '0', 1, '2'),
('1707160', 'Felicia  Stella Dewi, S.S.', '087788072298', '087788072298', 'feliciastelladewi@gmail.com', 'Perumahan Duta Garden, Blok G6 No 30', 2, 'Jakarta', '1995-06-17', 'P', 1, 'Chinesse', 'O', '1', '2', '2', 'img1707160.png', '1', 'Alvin Malvin Anthony', 'Kakak Kandung', 'Perumahan Duta Garden, Blok G6 No 30', '3173065706950003', 'Tegal Alur', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Sutrisno Sumantri', 1, 'Perumahan Duta Garden, Blok G6 No 30', 'Jakarta', '1969-12-25', 1, 9, '081285584818', 'Perumahan Duta Garden, Blok G6 No 30', 'Ng Cia Hui', 1, 'Perumahan Duta Garden, Blok G6 No 30', 'Medan', '1970-07-01', 1, 1, '081282028208', '', 'Alvin Malvin Anthony', 1, 'Perumahan Duta Garden, Blok G6 No 30', 'Jakarta', '1992-11-29', 1, 9, '085710278950', 'Perumahan Duta Garden, Blok G6 No 30', 'S1', '', '', '', '', 'Sekolah Pah Tsung', 'Jakarta', '2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PT NIKOMAS GEMILANG', 'Serang', 'Manufaktur adidas', 'Marketing &amp; Purchasing', '2016-07-01', '2017-01-01', 'Masa internship berakhir', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mandarin', 'Inggris', '', '2011', '2011', '', 'BS', 'BS', '', 'BS', 'B', '', 'BS', 'B', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '0d45976fe6d49a5f087edaf00762efbb', '0', 1, '1'),
('1707161', 'Naomi Pasaribu, S.Pd.', '087788663570', '', 'Naomiryanti@gmail.com', 'Jalan Rawa Gabus RT 007/011  no 219 kode pos 11720 Cengkareng Jakarta Barat', 2, 'Lumban Nainggolan', '1989-04-28', 'P', 1, 'Batak', 'AB', '1', '1', '4', 'img1707161.png', '1', 'Imelda Sihombing', 'Sepupu', 'Jalan Rawa Gabus RT 007/011  no 219 kode pos 11720 Cengkareng Jakarta Barat', '', 'Jakarta ', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Jhon Piter Pasaribu (alm)', 0, '', '', '0000-00-00', 0, 0, '', '', 'Roslan Simanjuntak', 0, 'Medan,Sumatera Utara', 'Sianjur', '1963-10-13', 2, 5, '', '', 'Asep Franto ', 1, 'Jalan Gunung Galunggung Perumnas Cengkareng ', 'Sitabo - tabo ', '1986-09-19', 3, 5, '0813988521', '', 'S1', 'STKIP Kusuma Negara ', 'Jakarta Timur', '2011', '2013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'STKIP Kusuma Negara Jakarta', 'Pendidikan Bahasa Inggris', 'Jakarta Barat', '2011', '2013', '', '', '', '', '', '', '', '', '', '', 'Australian School Sacred Heart', 'Taman Grisenda Blok D4 NO 28 -29', 'Pendidikan ', 'Guru SD ', '2014-03-10', '2016-06-10', 'Habis Kontrak', 'SMPK Kalam Kudus III', 'Perum Kosambi Baru Blok D4 ', 'Pendidikan ', 'Guru ', '2017-07-10', '2017-06-16', 'Habis Kontrak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', '', '', '2010 ', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '4dfa013ff22e56671e5f47b2125f3d23', '0', 1, '1'),
('1707162', 'Emerensiana Kenjam, S.Pd.', '085312492996', '', 'emerensianapahtsung@gmail.com', 'jl. tomang tinggi 1 no.7A Rt/Rw: 009/006 Kel/Desa Tomang Kec. Grogol Petamburan, Prov. DKI Jakarta', 3, 'Haulasi', '1989-12-08', 'P', 1, 'Timor', 'o', '1', '8', '8', 'img1707162.png', '3', 'Oktavianus Dua', 'saudara', 'jl. tomang tinggi 1 no.7A Rt/Rw: 009/006 Kel/Desa Tomang Kec. Grogol Petamburan, Prov. DKI Jakarta', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Petrus Kenjam', 1, 'Desa Haulasi, kec. Miomaffo Barat, kab. Timur Tengah Utara prov. NTT', 'Haulasi', '1942-05-06', 10, 9, '', '', 'Maria Loin', 1, 'Desa Haulasi, kec. Miomaffo Barat, kab. Timur Tengah Utara prov. NTT', 'Haulasi', '1944-04-04', 10, 110, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', 'SD Nian, ', 'Kefamenanu, Kupang NTT', '1995', '2001', 'SMP Bilipu, Bijaepasu', 'Kefamenanu, Kupang NTT', '2001', '2004', 'SMAK Nusa Melati', 'IPA', 'Jakarta', '2008', '2011', '', '', '', '', '', 'Universitas Indraprasta PGRI', 'Pendidikan Biologi', 'Jakarta', '2011', '2015', '', '', '', '', '', '', '', '', '', '', 'SDS ELOI', 'Jl. Tanah Sereal XVIII No. 17 A', 'Yayasan Pendidikan', 'Guru Kelas', '2015-07-11', '2017-07-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '2e98e4612dec596c3911147815a74beb', '0', 1, '1'),
('1707163', 'Ginanjar Eko Purboyo, M.Pd.', '081296269686', '087775897600', 'ginanjarekopurboyo@gmail.com', '', 1, 'Cilacap', '1989-11-17', 'L', 1, 'Chinesse', '', '1', '', '', 'img1707163.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '7b78f3dd941e58fea60c71c5be46b881', '0', 1, '1'),
('1707164', 'Riris Lastium Ambarita, S.Pd.', '085729438185', '085729438185', 'ririsambarita87@gmail.com', '', 2, 'Pematang Siantar', '1989-12-17', 'P', 1, 'Chinesse', '', '1', '', '', 'img1707164.png', '1', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '5d0871e7daf2cd5f6f8758b492b468ec', '0', 1, '1'),
('1707165', 'Fina Kurnia Abadi, S.Hum.', '089609090958', '', 'finakurniaabadi@gmail.com', 'jalan toram 2 no 24 D rt 04 rw 010', 4, 'JAKARTA', '1994-01-02', 'P', 1, 'Chinesse', 'AB', '1', '3', '4', 'img1707165.png', '2', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'TJOA HOKKY', 1, 'JALAN TORAM 1 NO 24 RT 04 RW 010', 'JAKARTA', '1970-01-01', 1, 7, '08971185522', '', 'INDRA DEWI', 1, 'JALAN TORAM 1 N0 24 D RT 04 RW 010', 'JAKARTA', '1970-01-01', 1, 1, '089655558553', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNIVERSITAS BUNDA MULIA', 'BAHASA DAN BUDAYA TIONGHOA', 'JAKARTA UTARA', '10 JULI 2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '8670099645', '45f537457cf0e3bd60049fb50ca0c623', '0', 1, '1'),
('1707166', 'Dhea Aprilia Damanik', '081376636854', '', 'dheadamanik24@gmail.com', 'Jl. Bulak Teko. gg Jambu rt 09 rw 011. Kalideres, Jakarta Barat', 2, 'Jakarta', '1999-04-24', 'P', 1, '', '', '1', '2', '', 'img006.png', '3', 'Lizda M Purba', 'Ibu', 'Gg Irma rt 005 rw 003. Cipayung, Jakarta Timur', '', 'Jakarta Timur', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Djasmen P Damanik', 1, '', '', '0000-00-00', 0, 0, '', '', 'Lizda M Purba', 1, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', 'SDN 06 PETANG KRAMAT JATI', 'Jakarta Timur', '', '', 'SMPK NUSA MELATI', 'Jakarta Timur', '', '', 'SMA PGRI 4 ', 'IPS', 'Jakarta Timur', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'OSIS', '', '', '', '', 'Sekolah', '', '', '', '', 'Head Of Mading Club', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '', '', '', 'B', '', '', 'B', '', '', 'C', '', '', 64, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'd17d45811ae4e8597c9e262218c549a1', '0', 0, '2'),
('1707167', 'Vivi Shelin', '081213570906', '', 'vivishelin1997@gmail.com', 'Duta Bandara Permai Blok HS 1 No.11\r\nDadap, Tangerang', 4, 'Jakarta', '1970-01-01', 'P', 1, '', 'B', '1', '1', '2', 'img011.png', '1', 'Kasni', 'Ayah', 'Duta Bandara Permai Blok HS 1 No.11\r\nDadap, Tangerang', '3603144203970003', 'Tangerang', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 7, '', '', '', '', '', '', '', '', '', '', '', 'Kasni', 1, 'Duta Bandara Permai Blok HS 1 No.11\r\nDadap, Tangerang', 'Bagan Siapi-api', '1970-01-01', 1, 6, '081382100096', '', 'Ngatmiati', 1, 'Duta Bandara Permai Blok HS 1 No.11\r\nDadap, Tangerang', 'Semarang', '1970-01-01', 10, 1, '0215503457', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 'TK Tunas Bangsa', 'Tangerang', '2001', '2003', 'SD Harapan Bunda', 'Tangerang', '2003', '2009', 'SMPN 224', 'Jakarta', '2009', '2012', 'SMK Cinta Kasih Tzu Chi', 'Administrasi Perkantoran', 'Jakarta', '2012', '2015', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SD Citra Kasih', 'Citra 2 Ext. Blok BI no.11-12', 'Pendidikan', 'Relation Officer', '2015-08-10', '2017-06-30', 'Ingin mencari pengalaman baru', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 102, '0000-00-00', '0000-00-00', 'Kontrak ke-1', 0, 0, 0, '', '60f85730cac2a5995971e4029244ced8', '0', 0, '1'),
('1707168', 'Chintia Bella', '089662986622', '', 'chintiabella66@gmail.com', 'apartemen city garden, lantai 17 no 55', 3, 'medan', '1996-06-06', 'P', 1, 'chinese', 'o', '1', '1', '2', 'img010.png', '3', 'mei cin', 'tante', 'golf lake residence, victoria hill 7 no 57', '1207264606960006', 'jakarta barat', '1970-01-01', '', '', '0000-00-00', 'X293398', 'Soekarno Hatta', '2021-11-17', '', 7, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'mei cin', 1, 'golf lake residence, victoria hill 7 no 57', 'medan ', '0000-00-00', 10, 1, '081218757578', '', 'SMK', '', '', '', '', '', '', '', '', '', '', '', '', 'Cinta Kasih Tzu Chi', 'Administrasi Perkantoran', 'Jakarta Barat', '2013', '2016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bimbel', 'golf lake residence, victoria hill 7 no 57', 'bimbel', 'guru les', '', '2017-07-25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'inggris', 'mandarin', '', '', '', '', 'C', 'K', '', 'C', 'K', '', 'C', 'K', '', 102, '0000-00-00', '0000-00-00', 'kontrak 1', 0, 0, 0, '', '339653f738a209253ba4631b312b8ab9', '0', 0, '1'),
('1708169', 'Eman Sulaiman', '089622760884', '', '', 'JL.Pedongkelan RT10/RW13 KELURAHAN KAPUK\r\nKEC.CENGKARENG JAKARTA BARAT', 1, 'Jakarta', '1997-05-04', 'L', 1, 'Jawa', '', '1', '3', '', 'img005.png', '2', '', '', '', '3173010405970009', 'JAKARTA', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', 'SD', 'Jakarta', '', '', '', '', '', '', 'SD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 64, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '862259691ed0dbcfd3d78f39ffb65370', '0', 0, '1'),
('1708170', 'Rizki Aryatama, S.Kom.', '', '', 'aryatama045@gmail.com', 'Jl.Hoschokroaminoto rt01/009 Larangan Indah Tangerang', 1, 'padang', '1993-02-20', 'L', 1, 'minang', 'O', '1', '3', '4', 'img004.png', '3', '', '', '', '3671132002930003', 'tangerang', '2018-02-20', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '2015', '', '', 'C', '', '', 'C', '', '', 'K', '', '', 64, '0000-00-00', '0000-00-00', 'Konrak ke-1', 0, 0, 0, '', '3b8a9f36fbe4aeb035a355601a462955', '0', 0, '1'),
('1710171', 'Eva Nopriani', '081315072595', '-', 'eva.nopriani@gmail.com', 'Jl.Utama selatan 4 no 6, cengkareng Jakarta Barat 11730', 3, 'Jakarta', '1980-11-12', 'P', 1, 'Tionghoa', 'O', '2', '3', '2', 'img1710171.png', '1', 'Devi Ariayani', 'Kakak Kandung', 'Jl. Bambu kuning Raya No. 1, Cengkareng Jakarta Barat 11730', '', '', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Arianto Tohir', 1, 'Jl. Bambu Kunengkareng Jakarta Barat 11730ing Raya No. 1, C', 'Tangerang', '0000-00-00', 1, 9, '', 'Jl. Utama Raya No. 4A, Cengkareng Jakarta Barat 11730', 'Erna Fatmawati', 1, 'Jl. Bambu Kunengkareng Jakarta Barat 11730ing Raya No. 1, C', 'Jakarta', '0000-00-00', 1, 110, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Akademi Sekertaris Tarakanita', 'Sekretaris', 'Jakarta Timur', '1999', '2003', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TK Pelita Kasih', 'Palem Lestari Blok B18', 'Pendidikan', 'Guru', '', '', 'Menikah', 'SMA Kasih Karunia', 'Taman Surya 5 Blok RR No. 1', 'Pendidikan', 'TU', '', '', '', 'TK Kasih Kemuliaan', 'Taman Surya 5 Blok RR No. 1', 'Pendidikan', 'Kepala Sekolah', '', '', '', 'Kanaan Global School', 'Taman Surya III Bouluvard L2', 'Pendidkan', 'Operator SMP dan SMA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'English', 'Mandarin', '', '1999', '1999', '', 'C', 'C', '', 'K', 'C', '', 'C', 'C', '', 90, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '', 'bfb403553aa54a0c69832c0782f6a807', '0', 0, '1'),
('1710172', 'Doris, S.Psi', '087877945888', '', 'doris.gunadi@gmail.com', 'Apartemen permata surya 1 tower i 510', 4, 'jakarta', '1976-12-26', 'P', 1, 'Chinese', '0 plus', '2', '1', '3', 'img1710172.png', '3', 'Halim wijaya mansur', 'suami', 'Apartemen permata surya 1 tower i 510', '', 'jakarta', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Halim Wijaya Mansur', 6, '1', 'Viriya Pannakumaro Halim', '6 bln', '', '', '', '', '', '', '', '', 'Loe song wei ', 2, '', 'Labuan bilik', '0000-00-00', 6, 12, '', '', 'Lainawati Gunadi', 2, '', 'bagan siapi-api', '0000-00-00', 5, 12, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UNIKA ATMAJAYA', 'Psikiologi', 'Jakarta Pusat', '1998', '2000', '', '', '', '', '', '', '', '', '', '', 'Sekolah Cinta Kasih Tzu Chi', 'outer ring road kamal raya no. 20 b', 'pendidikan ', 'guru mandarin SD kelas 1 dan 2', '2008-10-09', '2016-06-20', 'ingin punya anak', 'Sekolah Methodist', 'terusan bandengan utara no 91 AY', 'pendidikan ', 'guru KB', '2017-10-12', '2017-10-12', 'belajar bahasa di Beijing', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', 'Mandarin', '', '1995', '2006', '', 'B', 'C', '', 'C', 'C', '', 'B', 'C', '', 90, '0000-00-00', '0000-00-00', 'kontrak 1', 0, 0, 0, '', '6a0769981101e263786c1bba1e91c911', '0', 0, '1'),
('1710173', 'Fransiska Tria Susilawati, S.Kom', '081319381968', '0215449901', 'fransiska3a@gmail.com', 'Kp.Prepet Jaya No.63 Rt.005 Rw.04 Pegadungan, Kalideres, Jakarta Barat 11830', 3, 'Jakarta', '1987-11-22', 'P', 1, 'Jawa', 'A', '2', '3', '2', 'img1710173.png', '2', 'Egidius Joni', 'Suami', 'Kp.Prepet Jaya No.63 Rt.005 Rw.04 Pegadungan, Kalideres, Jakarta Barat 11830', '', 'Jakarta', '2017-11-22', '', 'Jakarta', '0000-00-00', '', '', '0000-00-00', 'Egidius Joni', 6, '1', 'Christian Julio', '3', '', '', '', '', '', '', '', '', 'L.Samidi', 1, 'Kp.Prepet Jaya No.63 Rt.005 Rw.04 Pegadungan, Kalideres, Jakarta Barat 11830', 'Jakarta', '1960-08-10', 1, 7, '0215449901', '', 'Ch.Marsiyah', 1, 'Kp.Prepet Jaya No.63 Rt.005 Rw.04 Pegadungan, Kalideres, Jakarta Barat 11830', 'Jakarta', '1960-04-01', 5, 1, '0215449901', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'S1', 'Strada', 'Jakarta', '1993', '1994', 'Bina Mulia I', 'Jakarta', '1994', '2000', 'Pelita II Strada', 'Jakarta', '2000', '20003', 'SMA N 95', 'IPA', 'Jakarta', '2003', '2009', 'AMIK Bina Sarana Infromatika', 'Teknik Komputer', 'Jakarta', '2006', '2009', 'STMIK Nusa Mandiri', 'Teknik Informatika', 'Jakarta', '2011', '2012', '', '', '', '', '', '', '', '', '', '', 'Kanaan Global School', 'Taman Surya 3, Jl.Boulevard L2', 'Pendidikan', 'TU', '2016-08-01', '2017-07-15', '', 'Permai', 'Pluit', 'Pendidikan', 'Guru Komputer', '2013-07-15', '2016-06-15', 'Mencari yang lebih dekat dengan rumah', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Wanita Katholik', '', '', '', '', 'Sosial Gereja', '', '', '', '', 'Sekretaris 3', '', '', '', '', '2016-2019', '', '', '', '', 'Inggris', '', '', 'SD', '', '', 'C', '', '', 'C', '', '', 'C', '', '', 90, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', '588484cb1dba99755a39d2a010c3c3f3', '0', 0, '1'),
('1710175', 'Agus Mandial, S. Sos. I', '085377210828', '', 'dialagusman@gmail.com', 'Jl. Kapuk Raya Gang Sinar, RT/RW: 007/002, Kapuk, Cengkareng, Jakarta Barat', 1, 'Dusun Baru', '1991-03-07', 'L', 1, 'Serawai', 'O', '1', '5', '6', 'img1710175.png', '3', 'Erli', 'Saudara Kandung', 'Dusun Baru, RT/RW:001/001, Ilir Talo, Seluma, Bengkulu', '', '', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Watriah', 111, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 90, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'bcc970cf099ea1bb4d5f888529595514', '0', 0, '1'),
('1710178', 'Melanie Priscila DM, S.Pd', '', '', 'melanied.murmanto@gmail.com', '', 2, 'jakarta', '1972-04-11', 'P', 1, '', 'A', '2', '', '', 'img1710174.png', '1', '', '', '', '', '', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 90, '0000-00-00', '0000-00-00', 'Tetap', 0, 0, 0, '', 'eb96a21b45128a19bc0f9d0bf62711ae', '0', 0, '1'),
('1711176', 'Ridho Kurniawan', '', '', '', '', 1, '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', '48da6dc49eb7d9a75ca0797a4f9b078b', '', 0, ''),
('1801174', 'Dzikrina Siregar', '081218373780', '', 'dzikrina.siregar@yahoo.co.id', 'perumahan pinang griya permai blok E No. 1235 Cileduk, Tangerang', 1, 'jakarta', '1993-10-08', 'P', 1, 'batak', 'B', '1', '1', '1', 'img1801174.png', '2', 'Batara Siregar', 'ayah', 'perumahan pinang griya permai blok E no 1235 cileduk Tangerang', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Batara Siregar', 1, 'komplek pinang griya permai blok E no. 1235 cileduk, Tangerang', 'Jakarta', '1963-09-21', 3, 12, '081806377193', '', 'Nurevida', 1, 'perumahan pinang griya permai blok E no1235 cileduk Tangerang', 'Medan', '1963-03-24', 2, 1, '081218373780', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'SMA 16 Jakarta', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA 16 Jakarta', 'IPS', 'Jakarta', '2009', '2011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'playdough preschool', 'jl cassablanca apt puri cassablanca jakarta pusat', 'preschool', 'assistant teacher', '2016-07-27', '2017-08-01', 'time management', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'inggris', '', '', '2011', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 115, '0000-00-00', '0000-00-00', 'kontrak 1', 0, 0, 0, '', 'da8556c776c5d49bbe735e6766a21b07', '', 0, '1'),
('1801177', 'Mei Audina', '089681766587', '', 'meiaudina17.mm@gmail.com', 'perum Royale palm blok B-11', 4, 'sungai duri', '1998-05-12', 'P', 1, 'tiong hoa', 'A', '1', '2', '6', 'img1801177.png', '3', 'Akian', 'Ibu kandung', 'Sungai duri, kalimantan barat', '6107015205980001', 'Bengkayang', '2018-05-21', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Asiung Bin Saopi', 1, 'Sungai Duri, Kalimantan Barat', '', '0000-00-00', 0, 7, '', '', 'Akian', 1, 'Sungai Duri, Kalimantan Barat', '', '0000-00-00', 0, 110, '081345224527', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'Guangzhou normal of pre-school education', '', '', '', '', '', '', '', '', '', '', '', '', 'SMK Negeri 1 Mempawah Hilir', 'Akuntansi', 'Pontianak', '2012', '2015', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'REX Instution', 'Pekanbaru', 'sekolah', 'guru mandarin', '2017-07-01', '2017-09-30', 'pemindahkerjaan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mandarin', 'inggris', '', '2010', '2015', '', 'B', 'C', '', 'B', 'C', '', 'B', 'C', '', 51, '0000-00-00', '0000-00-00', 'prohibition', 0, 0, 0, '', 'f7c8fbecc331ee4867b3721593195494', '0', 0, '1'),
('1801179', 'Risma Natalia', '081361086068', '', 'rismanatalia19@gmail.com', 'Jln.Kincir Raya Rt.003/006 Cengkareng Timur', 2, 'Jakarta', '1990-12-19', 'P', 1, 'Batak', '0', '1', '1', '2', 'img1801179.png', '3', 'Nico', 'Saudara Laki-Laki', 'Jln.Kincir Raya Rt.003/006 Cengkareng Timur', '1217085912900002', 'Jakarta', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Lisbet ButarButar', 1, '', 'Pangururan', '1967-03-01', 1, 9, '081375154139', '', 'Lina Silalahi', 1, '', 'Jakarta', '1963-01-23', 1, 9, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', '', '', '', '', '', 'B', '', '', 'B', '', '', 'B', '', '', 114, '0000-00-00', '0000-00-00', 'kontrak ke 1', 0, 0, 0, '', '5d3ada8f3fad3e873215ac34678d3919', '', 0, '1'),
('1801180', 'Yentien Kuswati', '', '', '', '', 3, 'Kelapa Kampit', '1985-11-07', 'P', 1, 'cina', 'o', '1', '3', '3', 'img1801180.png', '', '', '', '', '3172014711850009', 'pencatatan sipil, Jakarta utara', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Lipto Wijaya', 1, 'Mutiara Taman Palem Blok C9 no 60', 'Kelapa Kampit', '1948-12-22', 0, 9, '', '', 'Ng Lin tje', 1, 'Mutiara Taman Palem Blok C9 no 60', 'Tanjung Pandan', '1957-10-17', 0, 0, '', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SMA Chandra Kusuma', 'IPS', 'Jakarta', '2002', '2005', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sekolah Kristen Kasih Karunia', 'TAman Palem Lestari', 'pendidikan', 'Guru MAndarin', '2018-01-09', '2018-01-09', 'Mengajar di tempat kursus Little Angle', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Inggris', 'Mandarin', '', '', '', '', 'C', 'B', '', 'C', 'B', '', 'C', 'B', '', 116, '0000-00-00', '0000-00-00', '', 0, 0, 0, '', 'a78ecd1baa936bf1bc42f9458a0c8a53', '', 0, '1'),
('1801181', 'Novita Dewi Oei', '087885792088', '0215413308', 'noviewang80@gmail.com', 'Perumahan Kalideres Permai Blok E5 No.29', 2, 'kediri', '1980-11-25', 'P', 1, 'chiness', '0', '2', '2', '2', 'img1801181.png', '1', 'Daniel', 'suami', 'Perumahan Kalideres Permai Blok E5 No.', '3173066511800008', 'DKI Jakarta ', '1970-01-01', '', '', '0000-00-00', '', '', '0000-00-00', 'Daniel', 6, '', '', '', '', '', '', '', '', '', '', '', 'Budi Oei', 1, 'Perumahan Kalideres Permai Blok E5 No.29', 'Mojoagung', '1970-01-01', 3, 1, '0215413308', '', 'Agustina Siem', 1, 'Perumahan Kalideres Permai Blok E5 No.29', 'Kediri', '1970-01-01', 5, 1, '0215413308', '', '', 0, '', '', '0000-00-00', 0, 0, '', '', 'DIII Sekretari', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASMI Santa Maria ', 'Sekretari', 'Yogyakarta', '1999', '2002', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Jesslyn Medical Center', 'Taman Surya 3 Blok F1 No.63', 'Kesehatan', 'Marketing', '2015-04-14', '2018-01-04', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 113, '0000-00-00', '0000-00-00', 'Kontrak 1', 0, 0, 0, '', '8b1b515e8d535e9ce34ec35e2d7d55e7', '', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_berkas`
--

CREATE TABLE IF NOT EXISTS `kelengkapan_berkas` (
  `id_kelengkapan_berkas` double NOT NULL AUTO_INCREMENT,
  `id_calon_karyawan` int(11) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kelengkapan_berkas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=687 ;

--
-- Dumping data for table `kelengkapan_berkas`
--

INSERT INTO `kelengkapan_berkas` (`id_kelengkapan_berkas`, `id_calon_karyawan`, `id_berkas`, `tahun`) VALUES
(27, 5, 3, '2016'),
(28, 5, 7, '2016'),
(29, 5, 0, '2016'),
(30, 5, 0, '2016'),
(31, 5, 0, '2016'),
(32, 5, 0, '2016'),
(33, 5, 0, '2016'),
(34, 5, 0, '2016'),
(35, 5, 0, '2016'),
(36, 5, 0, '2016'),
(617, 80, 11, '2016'),
(618, 80, 12, '2016'),
(619, 80, 14, '2016'),
(620, 80, 15, '2016'),
(621, 80, 16, '2016'),
(622, 80, 17, '2016'),
(623, 80, 20, '2016'),
(624, 80, 0, '2016'),
(625, 80, 0, '2016'),
(626, 80, 0, '2016'),
(627, 81, 2, '2016'),
(628, 81, 3, '2016'),
(629, 81, 5, '2016'),
(630, 81, 7, '2016'),
(631, 81, 0, '2016'),
(632, 81, 0, '2016'),
(633, 81, 0, '2016'),
(634, 81, 0, '2016'),
(635, 81, 0, '2016'),
(636, 81, 0, '2016'),
(637, 82, 11, '2016'),
(638, 82, 12, '2016'),
(639, 82, 14, '2016'),
(640, 82, 18, '2016'),
(641, 82, 20, '2016'),
(642, 82, 0, '2016'),
(643, 82, 0, '2016'),
(644, 82, 0, '2016'),
(645, 82, 0, '2016'),
(646, 82, 0, '2016'),
(647, 83, 1, '2016'),
(648, 83, 3, '2016'),
(649, 83, 4, '2016'),
(650, 83, 5, '2016'),
(651, 83, 10, '2016'),
(652, 83, 0, '2016'),
(653, 83, 0, '2016'),
(654, 83, 0, '2016'),
(655, 83, 0, '2016'),
(656, 83, 0, '2016'),
(657, 84, 11, '2016'),
(658, 84, 12, '2016'),
(659, 84, 16, '2016'),
(660, 84, 17, '2016'),
(661, 84, 20, '2016'),
(662, 84, 0, '2016'),
(663, 84, 0, '2016'),
(664, 84, 0, '2016'),
(665, 84, 0, '2016'),
(666, 84, 0, '2016'),
(667, 85, 0, '2016'),
(668, 85, 0, '2016'),
(669, 85, 0, '2016'),
(670, 85, 0, '2016'),
(671, 85, 5, '2016'),
(672, 85, 0, '2016'),
(673, 85, 0, '2016'),
(674, 85, 0, '2016'),
(675, 85, 0, '2016'),
(676, 85, 0, '2016'),
(677, 1, 1, '2017'),
(678, 1, 2, '2017'),
(679, 1, 4, '2017'),
(680, 1, 6, '2017'),
(681, 1, 7, '2017'),
(682, 1, 10, '2017'),
(683, 1, 0, '2017'),
(684, 1, 0, '2017'),
(685, 1, 0, '2017'),
(686, 1, 0, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `list_jabatan`
--

CREATE TABLE IF NOT EXISTS `list_jabatan` (
  `id_list_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_calon_karyawan` int(11) NOT NULL,
  `id_master_jabatan` int(11) NOT NULL,
  PRIMARY KEY (`id_list_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `list_jabatan`
--

INSERT INTO `list_jabatan` (`id_list_jabatan`, `id_calon_karyawan`, `id_master_jabatan`) VALUES
(45, 5, 48),
(46, 84, 13),
(47, 83, 45),
(48, 82, 26),
(49, 80, 35),
(50, 81, 40);

-- --------------------------------------------------------

--
-- Table structure for table `list_sub_jabatan`
--

CREATE TABLE IF NOT EXISTS `list_sub_jabatan` (
  `id_list_sub_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_calon_karyawan` int(11) NOT NULL,
  `id_master_sub_jabatan` int(11) NOT NULL,
  PRIMARY KEY (`id_list_sub_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `list_sub_jabatan`
--

INSERT INTO `list_sub_jabatan` (`id_list_sub_jabatan`, `id_calon_karyawan`, `id_master_sub_jabatan`) VALUES
(1, 82, 10);

-- --------------------------------------------------------

--
-- Table structure for table `master_berkas`
--

CREATE TABLE IF NOT EXISTS `master_berkas` (
  `id_berkas` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_pegawai` enum('guru','karyawan') NOT NULL,
  `kelengkapan_berkas` text NOT NULL,
  `berkas_tahun` varchar(5) NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '1 = aktif, 2 = tidak aktif',
  PRIMARY KEY (`id_berkas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `master_berkas`
--

INSERT INTO `master_berkas` (`id_berkas`, `kategori_pegawai`, `kelengkapan_berkas`, `berkas_tahun`, `status`) VALUES
(1, 'karyawan', 'Surat lamaran pekerjaan yang ditujukan kepada Unit HRD Sekolah Pah Tsung', '2016', '1'),
(2, 'karyawan', 'Curiculum Vitae (CV) dan pas foto (3x4)cm sebanyak 1 lembar ditempel di Curiculum Vitae (CV)', '2016', '1'),
(3, 'karyawan', 'Fotocopy surat keterangan lulus (SKL) dari Universitas atau Sekolah', '2016', '1'),
(4, 'karyawan', 'Identitas diri dibuktikan dengan fotocopy KTP 1 lembar', '2016', '1'),
(5, 'karyawan', 'Sehat jasmani dan rohani, dibuktikan dengan surat keterangan sehat dari dokter/ RS', '2016', '1'),
(6, 'karyawan', 'Fotocopy Ijazah yang sudah dilegalisir sesuai dengan kualifikasi masing-masing', '2016', '1'),
(7, 'karyawan', 'Fotocopy Transkrip Nilai yang dilegalisir', '2016', '1'),
(8, 'karyawan', 'Fotocopy Sertifikat Komputer dan Sertifikat penunjang kemampuan lainnya', '2016', '1'),
(9, 'karyawan', 'Fotocopy Surat Pengalaman Kerja/ Referensi Kerja', '2016', '1'),
(10, 'karyawan', 'Fotocopy Surat Surat Lainya', '2016', '1'),
(11, 'guru', 'Surat lamaran pekerjaan yang ditujukan kepada Unit HRD Sekolah Pah Tsung', '2016', '1'),
(12, 'guru', 'Curiculum Vitae (CV) dan pas foto (3x4)cm sebanyak 1 lembar ditempel di Curiculum Vitae (CV)', '2016', '1'),
(13, 'guru', 'Fotocopy Sertifikat Guru bagi Guru yang telah sertifikasi/ yang telah mengikuti sertifikasi guru, Akta-IV', '2016', '1'),
(14, 'guru', 'Identitas diri dibuktikan dengan fotocopy KTP 1 lembar', '2016', '1'),
(15, 'guru', 'Sehat jasmani dan rohani, dibuktikan dengan surat keterangan sehat dari dokter/ RS', '2016', '1'),
(16, 'guru', 'Fotocopy Ijazah yang sudah dilegalisir sesuai dengan kualifikasi masing-masing', '2016', '1'),
(17, 'guru', 'Fotocopy Transkrip Nilai yang dilegalisir', '2016', '1'),
(18, 'guru', 'Fotocopy Sertifikat Komputer dan Sertifikat penunjang kemampuan lainnya', '2016', '1'),
(19, 'guru', 'Fotocopy Surat Pengalaman Kerja/ Referensi Kerja', '2016', '1'),
(20, 'guru', 'Fotocopy Surat Surat Lainya', '2016', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan`
--

CREATE TABLE IF NOT EXISTS `master_jabatan` (
  `id_master_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL,
  `kategori_jabatan` enum('1','2') NOT NULL COMMENT '1 = guru, 2 = karyawan',
  `id_master_unit` int(11) NOT NULL,
  PRIMARY KEY (`id_master_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `master_jabatan`
--

INSERT INTO `master_jabatan` (`id_master_jabatan`, `jabatan`, `kategori_jabatan`, `id_master_unit`) VALUES
(1, 'Kepala Sekolah', '1', 1),
(2, 'Wakil Kepala Sekolah', '1', 1),
(3, 'Guru Mandarin', '1', 1),
(4, 'Guru Inggris', '1', 1),
(5, 'Asisten Guru', '1', 1),
(6, 'OG', '1', 1),
(7, 'Kepala Sekolah', '1', 2),
(8, 'Wakil Kepala Sekolah', '1', 2),
(9, 'Guru Agama', '1', 2),
(10, 'Guru Inggris', '1', 2),
(11, 'Guru Tematik', '1', 2),
(12, 'Guru Indonesia', '1', 2),
(13, 'Guru Matematika', '1', 2),
(14, 'Guru BK', '1', 2),
(15, 'Guru Math', '1', 2),
(16, 'Guru Mandarin', '1', 2),
(17, 'Guru Science', '1', 2),
(18, 'Guru Musik', '1', 2),
(19, 'Guru Komputer', '1', 2),
(20, 'Guru Olah Raga', '1', 2),
(21, 'Pustakawan', '1', 2),
(22, 'TU', '1', 2),
(23, 'OG', '1', 2),
(24, 'Kepala Sekolah', '1', 3),
(25, 'Wakil Kepala Sekolah', '1', 3),
(26, 'Guru Agama', '1', 3),
(27, 'Guru Inggris', '1', 3),
(28, 'Guru Indonesia', '1', 3),
(29, 'Guru Matematika', '1', 3),
(30, 'Guru BK', '1', 3),
(31, 'Guru Math', '1', 3),
(32, 'Guru Mandarin', '1', 3),
(33, 'Guru Science', '1', 3),
(34, 'Guru Musik', '1', 3),
(35, 'Guru Komputer', '1', 3),
(36, 'Guru Olah Raga', '1', 3),
(37, 'TU', '1', 3),
(38, 'OG', '1', 3),
(39, 'Direktur', '2', 5),
(40, 'Humas', '2', 5),
(41, 'Accounting', '2', 5),
(42, 'Pendidikan/Koordinator', '2', 5),
(43, 'Keuangan', '2', 5),
(44, 'Bendahara', '2', 5),
(45, 'Pembelian', '2', 5),
(46, 'Toko', '2', 5),
(47, 'HRD', '2', 5),
(48, 'IT', '2', 5),
(49, 'Ka. Sarpras', '2', 5),
(50, 'Sarpras', '2', 5),
(51, 'Guru Kewarganegaraan', '1', 3),
(52, 'TU', '1', 1),
(53, 'Guru Musik', '1', 3),
(54, 'Guru SBK', '1', 2),
(55, 'Guru IPA', '1', 2),
(56, 'Koordinator', '1', 2),
(57, 'Koordinator', '1', 3),
(58, 'Guru IPS', '1', 3),
(59, 'Guru IPA', '1', 3),
(60, 'Purchasing', '2', 5),
(61, 'Tematik', '1', 2),
(62, 'Guru Tata Boga', '1', 3),
(63, 'Guru Bahasa Indonesia', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_soal`
--

CREATE TABLE IF NOT EXISTS `master_soal` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_pegawai` enum('guru','karyawan') NOT NULL,
  `soal` text NOT NULL,
  `soal_tahun` varchar(5) NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '1 = aktif, 2 = tidak aktif',
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `master_soal`
--

INSERT INTO `master_soal` (`id_soal`, `kategori_pegawai`, `soal`, `soal_tahun`, `status`) VALUES
(2, 'karyawan', 'Bagaimana Anda memandang tugas atau jabatan yang diberikan oleh lembaga ?', '2016', '1'),
(3, 'karyawan', 'Bagaimana Anda memandang pimpinan ditempat Anda bertugas ?', '2016', '1'),
(4, 'karyawan', 'Bagaimana Anda memandang rekan kerja ditempat Anda bertugasÂ ?', '2016', '1'),
(5, 'karyawan', 'Bagaimana saja tugas yang Anda lakukan sehubungan dengan tugas atau jabatan yang ditunjuk ?', '2016', '1'),
(6, 'karyawan', 'Coba Anda jelaskan, apa saja hal-hal yang Anda ketahui berkaitan dengan pekerjaan yang ingin Anda lamar ?', '2016', '1'),
(7, 'karyawan', 'Apa yang harus Anda lakukan untuk mengoptimalkan kinerja Anda di sekolah ?', '2016', '1'),
(8, 'karyawan', 'Apakah Anda memiliki keterbatasan atau kelemahan yang dapat menghambat Anda melakukan tugas ? Bagaimana usaha Anda menangani hal tersebut ?', '2016', '1'),
(9, 'karyawan', 'Apakah kekuatan dan kompetensi Anda untuk menunjang tugas sebagai karyawanÂ ?', '2016', '1'),
(10, 'karyawan', 'Keterampilan apa saja yang Anda miliki ?', '2016', '1'),
(11, 'karyawan', 'Apakah usaha yang Anda lakukan untuk menjadi karyawan dengan kinerja unggul ?', '2016', '1'),
(12, 'karyawan', 'Bagaimana Anda mengatasi banyaknya tekanan pekerjaan sesuai dengan target waktu yang ditetapkan ?', '2016', '1'),
(13, 'karyawan', 'Bagaimana kontribusi Anda dalam memajukan sekolah ?', '2016', '1'),
(14, 'karyawan', 'Sebutkan hobi Anda ?', '2016', '1'),
(15, 'karyawan', 'Kapan Anda dapat mulai bekerja ? Tanggal : ...', '2016', '1'),
(16, 'karyawan', 'Berapa harapan pendapatan yang ingin Anda peroleh ?', '2016', '1'),
(17, 'guru', 'Bagaimana Anda memandang siswa yang Anda ajar ?', '2016', '1'),
(18, 'guru', 'Bagaimana Anda memandang pimpinan disekolah tempatÂ Anda bertugas ?', '2016', '1'),
(19, 'guru', 'Bagaimana Anda memandang', '2016', '1'),
(20, 'guru', 'Apa saja tugas Anda sebagai Guru disekolah ?', '2016', '1'),
(21, 'guru', 'Apa yang Anda ketahui tentang bahan ajar dan administrasi Guru ?', '2016', '1'),
(22, 'guru', 'Apa yang harus Anda lakukan untuk mengoptimalkan kinerja Anda disekolah ?', '2016', '1'),
(23, 'guru', 'Apakah Anda memiliki keterbatasan atau kelemahan yang dapat menghambat Anda melakukan tugas ? Bagaimana usaha Anda menangani hal tersebut ?', '2016', '1'),
(24, 'guru', 'Apakah kekuatan dan kompetensi Anda untuk menunjang tugas sebagai Guru ?', '2016', '1'),
(25, 'guru', 'Keterampilan apa saja yang Anda miliki ?', '2016', '1'),
(26, 'guru', 'Apakah usaha yang Anda lakukan untuk menjadi Guru yang dapat ', '2016', '1'),
(27, 'guru', 'Bagaimana Anda mengatasi siswa yang bermasalah dalam belajar ?', '2016', '1'),
(28, 'guru', 'Bagaimana kontribusi Anda dalam memajukan sekolah ?', '2016', '1'),
(29, 'guru', 'Sebutkan hobi Anda ?', '2016', '1'),
(30, 'guru', 'Kapan Anda dapat mulai bekerja ? Tanggal : ...', '2016', '1'),
(31, 'guru', 'Berapa harapan pendapatan yang ingin Anda peroleh ?', '2016', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_sub_jabatan`
--

CREATE TABLE IF NOT EXISTS `master_sub_jabatan` (
  `id_master_sub_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_master_jabatan` int(11) NOT NULL,
  `master_sub_jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_master_sub_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `master_sub_jabatan`
--

INSERT INTO `master_sub_jabatan` (`id_master_sub_jabatan`, `id_master_jabatan`, `master_sub_jabatan`) VALUES
(1, 9, 'Guru Agama Islam'),
(2, 9, 'Guru Agama  Katholik'),
(3, 9, 'Guru Agama  Kristen'),
(4, 9, 'Guru Agama  Budha'),
(10, 26, 'Guru Agama Islam'),
(11, 26, 'Guru Agama Katholik'),
(12, 26, 'Guru Agama Kristen'),
(13, 26, 'Guru Agama Budha'),
(14, 50, 'Gardener'),
(15, 50, 'Driver'),
(16, 50, 'Office Boy'),
(17, 50, 'Teknisi'),
(18, 50, 'Fotocopy'),
(19, 9, 'Guru Agama Hindu'),
(20, 26, 'Guru Agama Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `master_tunjangan`
--

CREATE TABLE IF NOT EXISTS `master_tunjangan` (
  `id_tunjangan` int(11) NOT NULL AUTO_INCREMENT,
  `tunjangan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tunjangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_unit`
--

CREATE TABLE IF NOT EXISTS `master_unit` (
  `id_master_unit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_unit` varchar(50) NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '1 = aktif, 2 = tidak aktif',
  `kategori_pegawai` enum('1','2') NOT NULL COMMENT '1 = guru, 2 = karyawan',
  PRIMARY KEY (`id_master_unit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `master_unit`
--

INSERT INTO `master_unit` (`id_master_unit`, `nama_unit`, `status`, `kategori_pegawai`) VALUES
(1, 'TK', '1', '1'),
(2, 'SD', '1', '1'),
(3, 'SMP', '1', '1'),
(4, 'SMA', '2', '1'),
(5, 'SKR (Sekretariat)', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE IF NOT EXISTS `pajak` (
  `id_pajak` int(11) NOT NULL AUTO_INCREMENT,
  `ptkp` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `tanggal_pajak` date NOT NULL,
  PRIMARY KEY (`id_pajak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `pajak`
--

INSERT INTO `pajak` (`id_pajak`, `ptkp`, `npwp`, `tanggal_pajak`) VALUES
(1, '', '', '0000-00-00'),
(2, '', '', '0000-00-00'),
(3, '', '', '0000-00-00'),
(4, '', '', '0000-00-00'),
(5, '', '', '0000-00-00'),
(6, '', '', '0000-00-00'),
(7, '', '', '0000-00-00'),
(8, '', '', '0000-00-00'),
(9, '', '', '0000-00-00'),
(10, '', '', '0000-00-00'),
(11, '', '', '0000-00-00'),
(12, '', '', '0000-00-00'),
(13, '', '', '0000-00-00'),
(14, '', '', '0000-00-00'),
(15, '', '', '0000-00-00'),
(16, '', '', '0000-00-00'),
(17, '', '', '0000-00-00'),
(18, '', '', '0000-00-00'),
(19, '', '', '0000-00-00'),
(20, '', '', '0000-00-00'),
(21, '', '', '0000-00-00'),
(22, '', '', '0000-00-00'),
(23, '', '', '0000-00-00'),
(24, '', '', '0000-00-00'),
(25, '', '', '0000-00-00'),
(26, '', '', '0000-00-00'),
(27, '', '', '0000-00-00'),
(28, '', '', '0000-00-00'),
(29, '', '', '0000-00-00'),
(30, '', '', '0000-00-00'),
(31, '', '', '0000-00-00'),
(32, '', '', '0000-00-00'),
(33, '', '', '0000-00-00'),
(34, '', '', '0000-00-00'),
(35, '', '', '0000-00-00'),
(36, '', '', '0000-00-00'),
(37, '', '', '0000-00-00'),
(38, '', '', '0000-00-00'),
(39, '', '', '0000-00-00'),
(40, '', '73.725.937.4.033.000', '2016-07-16'),
(41, '', '', '0000-00-00'),
(42, '', '', '0000-00-00'),
(43, '', '', '0000-00-00'),
(44, '', '', '0000-00-00'),
(45, 'TK0', '', '0000-00-00'),
(46, '', '', '0000-00-00'),
(47, '', '', '0000-00-00'),
(48, '', '', '0000-00-00'),
(49, '', '', '0000-00-00'),
(50, '', '', '0000-00-00'),
(51, '', '', '0000-00-00'),
(52, '', '', '0000-00-00'),
(53, '', '', '0000-00-00'),
(54, '', '', '0000-00-00'),
(55, '', '', '0000-00-00'),
(56, '', '', '0000-00-00'),
(57, '', '', '0000-00-00'),
(58, '', '', '0000-00-00'),
(59, '', '', '0000-00-00'),
(60, '', '', '0000-00-00'),
(61, '', '', '0000-00-00'),
(62, '', '', '0000-00-00'),
(63, '', '', '0000-00-00'),
(64, '', '', '0000-00-00'),
(65, '', '', '0000-00-00'),
(66, '', '', '0000-00-00'),
(67, '', '', '0000-00-00'),
(68, '', '73.621.988.2-086.000', '0000-00-00'),
(69, '', '', '0000-00-00'),
(70, '', '', '0000-00-00'),
(71, '', '', '0000-00-00'),
(72, '', '', '0000-00-00'),
(73, '', '', '0000-00-00'),
(74, '', '', '0000-00-00'),
(75, '', '', '0000-00-00'),
(76, '', '', '0000-00-00'),
(77, '', '', '0000-00-00'),
(78, '', '', '0000-00-00'),
(79, '', '', '0000-00-00'),
(80, '', '800567687034000', '2016-08-20'),
(81, '', '', '0000-00-00'),
(82, '', '', '0000-00-00'),
(83, '', '', '0000-00-00'),
(84, '', '', '0000-00-00'),
(85, '', '', '0000-00-00'),
(86, '', '', '0000-00-00'),
(87, '', '', '0000-00-00'),
(88, '', '', '0000-00-00'),
(89, '', '', '0000-00-00'),
(90, '', '47.564.318.5-034.000', '2007-08-23'),
(91, '', '', '0000-00-00'),
(92, '', '', '0000-00-00'),
(93, '', '', '0000-00-00'),
(94, '', '', '0000-00-00'),
(95, '', '749548210048000', '0000-00-00'),
(96, '', '', '0000-00-00'),
(97, '', '', '0000-00-00'),
(98, '', '', '0000-00-00'),
(99, '', '', '0000-00-00'),
(100, '', '', '0000-00-00'),
(101, '', '', '0000-00-00'),
(102, '', '', '0000-00-00'),
(103, '', '724269774039000', '0000-00-00'),
(104, '', '', '0000-00-00'),
(105, '', '', '0000-00-00'),
(106, '', '', '0000-00-00'),
(107, '', '', '0000-00-00'),
(108, '', '', '0000-00-00'),
(109, '', '', '0000-00-00'),
(110, '', '', '0000-00-00'),
(111, '', '', '0000-00-00'),
(112, '', '', '0000-00-00'),
(113, '', '', '0000-00-00'),
(114, '', '', '0000-00-00'),
(115, '', '', '0000-00-00'),
(116, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id_payroll` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) NOT NULL,
  `gapok` int(8) NOT NULL,
  `t_fungsional` int(8) NOT NULL COMMENT 'fungsional/struktural',
  `t_kelebihan_jam` int(8) NOT NULL,
  `t_bahasa` int(8) NOT NULL,
  `rapel` int(8) NOT NULL,
  `t_5` int(8) NOT NULL,
  `t_kehadiran` int(8) NOT NULL,
  `t_kedisiplinan` int(8) NOT NULL,
  `penerimaan` int(11) NOT NULL,
  `pph_21` int(8) NOT NULL,
  `bpjs_jht` int(8) NOT NULL,
  `bpjs_jp` int(8) NOT NULL,
  `terlambat` int(8) NOT NULL,
  `potongan` int(11) NOT NULL,
  `thp` int(11) NOT NULL,
  `koperasi` int(8) NOT NULL,
  `yg_ditransfer` int(11) NOT NULL,
  `tanggal_gajian` date NOT NULL,
  PRIMARY KEY (`id_payroll`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id_payroll`, `nik`, `gapok`, `t_fungsional`, `t_kelebihan_jam`, `t_bahasa`, `rapel`, `t_5`, `t_kehadiran`, `t_kedisiplinan`, `penerimaan`, `pph_21`, `bpjs_jht`, `bpjs_jp`, `terlambat`, `potongan`, `thp`, `koperasi`, `yg_ditransfer`, `tanggal_gajian`) VALUES
(11, '1309031', 1000000, 10000000, 23000, 23453655, 666666666, 56546546, 46546, 546456456, 1200000, 2200000, 150000, 45000, 55555, 33556666, 64545455, 4545444, 45454545, '2017-06-18'),
(12, '1609138', 1400000, 7500000, 242342, 66666, 66664444, 45654645, 5555553, 534444, 15000, 32500, 37000, 48900, 33333, 44646466, 54545454, 45454545, 45454545, '2017-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE IF NOT EXISTS `penempatan` (
  `id_penempatan` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) NOT NULL,
  `urutan` varchar(5) NOT NULL,
  `unit` int(3) NOT NULL,
  `jabatan` int(3) NOT NULL,
  `sub_jabatan` varchar(3) NOT NULL,
  `id_ta` int(11) NOT NULL,
  PRIMARY KEY (`id_penempatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `penempatan`
--

INSERT INTO `penempatan` (`id_penempatan`, `nik`, `urutan`, `unit`, `jabatan`, `sub_jabatan`, `id_ta`) VALUES
(8, '1712136', '1', 5, 48, '', 7),
(9, '1607127', '1', 3, 35, '', 7),
(11, '1507080', '1', 3, 29, '', 7),
(12, '1607125', '1', 3, 28, '', 7),
(13, '1607126', '1', 3, 27, '', 7),
(16, '1507079', '1', 3, 51, '', 7),
(18, '1607129', '1', 2, 9, '1', 0),
(20, '1602102', '1', 2, 22, '', 0),
(21, '1207009', '1', 1, 52, '', 0),
(23, '1407048', '1', 2, 22, '', 0),
(24, '1407041', '1', 1, 52, '', 0),
(25, '1607123', '1', 3, 34, '', 0),
(28, '1507081', '1', 3, 30, '', 0),
(30, '1701140', '1', 5, 50, '18', 0),
(32, '1606104', '1', 5, 48, '', 0),
(33, '1601101', '1', 5, 48, '', 0),
(34, '1104001', '1', 5, 39, '', 0),
(35, '1407049', '1', 5, 40, '', 0),
(36, '1508094', '1', 5, 48, '', 0),
(37, '1607129', '2', 3, 26, '10', 0),
(41, '1601100', '1', 5, 47, '', 0),
(43, '1609138', '1', 5, 48, '', 0),
(45, '1512095', '1', 3, 38, '', 0),
(46, '1504069', '1', 3, 24, '', 0),
(49, '1607124', '1', 3, 32, '', 0),
(50, '1507088', '1', 3, 33, '', 0),
(51, '1607128', '1', 3, 36, '', 0),
(56, '1507082', '1', 2, 9, '', 0),
(57, '1507082', '2', 3, 26, '', 0),
(59, '1507091', '1', 2, 9, '2', 0),
(60, '1507091', '2', 3, 26, '11', 0),
(61, '1701139', '1', 2, 17, '', 0),
(62, '1703141', '1', 5, 40, '', 0),
(63, '1703142', '1', 3, 28, '', 0),
(64, '1700004', '1', 2, 9, '19', 0),
(65, '1407054', '1', 2, 16, '', 0),
(66, '1407054', '2', 3, 32, '', 0),
(68, '1700004', '2', 3, 26, '20', 0),
(70, '1309031', '1', 2, 11, '', 0),
(71, '1307016', '1', 2, 7, '', 0),
(72, '1407056', '1', 2, 11, '', 0),
(73, '1308028', '1', 2, 17, '', 0),
(74, '1407052', '1', 2, 11, '', 0),
(75, '1307015', '1', 2, 11, '', 0),
(76, '1507089', '1', 2, 11, '', 0),
(77, '1407045', '1', 2, 11, '', 0),
(78, '1407055', '1', 2, 11, '', 0),
(79, '1607115', '1', 2, 11, '', 0),
(80, '1307014', '1', 2, 11, '', 0),
(81, '1607107', '1', 2, 11, '', 0),
(82, '1607106', '1', 2, 11, '', 0),
(83, '1607108', '1', 2, 12, '', 0),
(84, '1309032', '1', 2, 9, '4', 0),
(85, '1507085', '1', 2, 54, '', 0),
(86, '1407057', '1', 2, 55, '', 0),
(87, '1407046', '1', 2, 16, '', 0),
(88, '1310037', '1', 2, 10, '', 0),
(90, '1307018', '1', 2, 10, '', 0),
(91, '1607105', '1', 2, 10, '', 0),
(92, '1607131', '1', 2, 18, '', 0),
(93, '1607130', '1', 2, 17, '', 0),
(94, '1607116', '1', 2, 16, '', 0),
(95, '1607109', '1', 2, 13, '', 0),
(96, '1607113', '1', 2, 10, '', 0),
(97, '1601098', '1', 2, 16, '', 0),
(98, '1607111', '1', 2, 15, '', 0),
(99, '1607112', '1', 2, 16, '', 0),
(100, '1607128', '2', 2, 20, '', 0),
(101, '1607123', '2', 2, 18, '', 0),
(102, '1607124', '2', 2, 16, '', 0),
(103, '1607127', '2', 2, 19, '', 0),
(104, '1607110', '1', 2, 14, '', 0),
(105, '1408065', '1', 2, 14, '', 0),
(106, '1504070', '1', 2, 21, '', 0),
(107, '1309033', '1', 2, 23, '', 0),
(108, '1704143', '1', 2, 17, '', 0),
(109, '1603103', '2', 2, 56, '', 0),
(111, '1603103', '1', 5, 42, '', 0),
(112, '1603103', '3', 3, 57, '', 0),
(114, '1707145', '1', 1, 4, '', 0),
(115, '1707144', '1', 2, 21, '', 0),
(116, '1707146', '1', 1, 3, '', 0),
(117, '1707147', '1', 1, 3, '', 0),
(118, '1707148', '1.Gur', 1, 4, '', 0),
(119, '1707149', '1', 2, 12, '', 0),
(120, '1707150', '1', 2, 19, '', 0),
(121, '1707151', '1', 2, 14, '', 0),
(122, '1707152', '1', 2, 16, '', 0),
(123, '1707153', '1', 2, 10, '', 0),
(124, '1707154', '1', 2, 10, '', 0),
(125, '1707155', '1', 2, 10, '', 0),
(126, '1707156', '1', 2, 13, '', 0),
(127, '1707157', '1', 2, 18, '', 0),
(128, '1707158', '1', 2, 10, '', 0),
(129, '1707159', '1', 2, 9, '1', 0),
(130, '1707160', '1', 2, 16, '', 0),
(132, '1707161', '1', 2, 10, '', 0),
(133, '1707163', '1', 3, 58, '', 0),
(134, '1707164', '1', 3, 59, '', 0),
(135, '1707165', '1', 3, 32, '', 0),
(136, '1407052', '2', 2, 8, '', 0),
(137, '1308028', '2', 3, 33, '', 0),
(138, '1601096', '1', 5, 60, '', 0),
(139, '1608132', '1', 1, 3, '', 0),
(140, '1607127', '3', 5, 48, '', 0),
(141, '1609137', '1', 5, 40, '', 0),
(143, '1707152', '2', 3, 32, '', 0),
(144, '1307014', '2', 3, 26, '13', 0),
(145, '1310037', '2', 3, 35, '', 0),
(146, '1707159', '2', 3, 26, '10', 0),
(147, '1310038', '1', 5, 50, '17', 0),
(148, '1307027', '1', 5, 50, '14', 0),
(149, '1207007', '1', 5, 50, '15', 0),
(150, '1112003', '1', 5, 50, '17', 0),
(151, '005', '1', 5, 50, '14', 0),
(152, '1309032', '2', 2, 54, '', 0),
(153, '1407057', '2', 2, 17, '', 0),
(154, '1407057', '3', 0, 0, '', 0),
(156, '009', '1', 2, 11, '', 0),
(158, '1507081', '2', 3, 62, '', 0),
(159, '007', '1', 3, 34, '', 0),
(160, '007', '2', 2, 18, '', 0),
(163, '004', '1', 5, 48, '', 0),
(164, '1307014', '3', 2, 9, '4', 0),
(165, '1208030', '1', 1, 63, '', 0),
(166, '010', '1', 1, 5, '', 0),
(167, '1507074', '1', 2, 10, '', 0),
(168, '011', '1', 1, 5, '', 0),
(169, '1607117', '1', 1, 3, '', 0),
(170, '1707165', '2', 2, 16, '', 0),
(171, '1707162', '1', 2, 11, '', 0),
(172, '1502068', '1', 1, 6, '', 0),
(173, '1710175', '1', 2, 9, '1', 0),
(174, '1710175', '2', 3, 26, '10', 0),
(175, '1710172', '1', 1, 3, '', 0),
(177, '1710173', '1', 3, 37, '', 0),
(178, '1608135', '2', 5, 48, '', 0),
(179, '1208029', '1', 1, 4, '', 0),
(180, '1507087', '1', 1, 4, '', 0),
(181, '1710174', '1', 1, 1, '', 0),
(182, '1801179', '1', 1, 5, '', 0),
(183, '1801174', '1', 1, 5, '', 0),
(184, '1507076', '1', 1, 4, '', 0),
(185, '1508087', '1', 1, 4, '', 0),
(186, '1307023', '1', 1, 4, '', 0),
(187, '1710178', '1', 1, 1, '', 0),
(188, '1607121', '1', 1, 3, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_pegawai`
--

CREATE TABLE IF NOT EXISTS `peraturan_pegawai` (
  `id_jobdesk` int(11) NOT NULL AUTO_INCREMENT,
  `file_jobdesk` varchar(255) NOT NULL,
  `id_master_unit` int(11) NOT NULL,
  `id_master_jabatan` int(11) NOT NULL,
  `id_master_sub_jabatan` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `status_aktif` enum('0','1') NOT NULL COMMENT '0 = tidak aktif, 1 = aktif',
  PRIMARY KEY (`id_jobdesk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `peraturan_pegawai`
--

INSERT INTO `peraturan_pegawai` (`id_jobdesk`, `file_jobdesk`, `id_master_unit`, `id_master_jabatan`, `id_master_sub_jabatan`, `id_ta`, `status_aktif`) VALUES
(11, 'yes.pdf', 5, 48, 0, 7, '1');

-- --------------------------------------------------------

--
-- Table structure for table `soal_soal`
--

CREATE TABLE IF NOT EXISTS `soal_soal` (
  `id_soal_pelamar` double NOT NULL AUTO_INCREMENT,
  `id_calon_karyawan` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `tahun` varchar(5) NOT NULL,
  PRIMARY KEY (`id_soal_pelamar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=968 ;

--
-- Dumping data for table `soal_soal`
--

INSERT INTO `soal_soal` (`id_soal_pelamar`, `id_calon_karyawan`, `id_soal`, `jawaban`, `tahun`) VALUES
(61, 5, 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis', '2016'),
(62, 5, 3, 'Sudah bukan rahasia lagi, adalah salah satu perusahaan yang software-nya banyak dibajak. Karena itu, perusahaan pun tak pernah putus semangat menyuarakan penggunaan software asli.', '2016'),
(63, 5, 4, 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem bbb wkwkw', '2016'),
(64, 5, 5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt', '2016'),
(65, 5, 6, 'Always ngoding brow! keep calm and stay focus !', '2016'),
(66, 5, 7, 't luptatum aaaaa delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum clarit', '2016'),
(67, 5, 8, '', '2016'),
(68, 5, 9, '', '2016'),
(69, 5, 10, '', '2016'),
(70, 5, 11, '', '2016'),
(71, 5, 12, '', '2016'),
(72, 5, 13, '', '2016'),
(73, 5, 14, '', '2016'),
(74, 5, 15, '', '2016'),
(75, 5, 16, 'Rp. 15.000.000,00', '2016'),
(837, 80, 17, '<p>Here&#39;s the story of a lovely lady, who was bringing up three very lovely girls. All of them had hair of gold, like their mother, the youngest one in curls. Here&#39;s the store, of a man named Brady, who was busy with three boys of his own. They were four men, living all together, yet they were all alone. &#39;Til the one day when the lady met this fellow. And they knew it was much more than a hunch, that this group would somehow form a family. That&#39;s the way we all became the Brady Bunch, the Brady Bunch. That&#39;s the way we all became the Brady Bunch. The Brady Bunch!</p>\r\n\r\n<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight! uhhhhhh yehhhh</p>\r\n', '2016'),
(838, 80, 18, '<p>Ok.. What walks down stairs, alone or in pairs, and makes a slinkity sound? A spring, a spring, a marvelous thing, everyone knows it&#39;s Slinky. It&#39;s Slinky, it&#39;s Slinky, for fun it&#39;s a wonderful toy. It&#39;s Slinky, it&#39;s Slinky, it&#39;s fun for a girl or a boy. It&#39;s fun for a girl or boy!</p>\r\n\r\n<p>Yogi Bear is smarter than the average bear, Yogi Bear is always in the ranger&#39;s hair. At a picnic table you will find him there, stuffing down more goodies than the average bear. He will sleep till noon but before it&#39;s dark, he&#39;ll have every picnic basket that&#39;s in Jellystone Park. Yogi has it better than a millionaire. That&#39;s because he&#39;s smarter than the average bear!</p>\r\n', '2016'),
(839, 80, 17, '<p>Yess !!!.. Here&#39;s the story of a lovely lady, who was bringing up three very lovely girls. All of them had hair of gold, like their mother, the youngest one in curls. Here&#39;s the store, of a man named Brady, who was busy with three boys of his own. They were four men, living all together, yet they were all alone. &#39;Til the one day when the lady met this fellow. And they knew it was much more than a hunch, that this group would somehow form a family. That&#39;s the way we all became the Brady Bunch, the Brady Bunch. That&#39;s the way we all became the Brady Bunch. The Brady Bunch!</p>\r\n\r\n<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p>\r\n', '2016'),
(840, 80, 18, '<p>What walks down stairs, alone or in pairs, and makes a slinkity sound? A spring, a spring, a marvelous thing, everyone knows it&#39;s Slinky. It&#39;s Slinky, it&#39;s Slinky, for fun it&#39;s a wonderful toy. It&#39;s Slinky, it&#39;s Slinky, it&#39;s fun for a girl or a boy. It&#39;s fun for a girl or boy!</p>\r\n\r\n<p>Yogi Bear is smarter than the average bear, Yogi Bear is always in the ranger&#39;s hair. At a picnic table you will find him there, stuffing down more goodies than the average bear. He will sleep till noon but before it&#39;s dark, he&#39;ll have every picnic basket that&#39;s in Jellystone Park. Yogi has it better than a millionaire. That&#39;s because he&#39;s smarter than the average bear!</p>\r\n', '2016'),
(841, 80, 19, '<p>What ever happened to predictability? The milkman, the paperboy, evening TV. Everywhere you look, everywhere you go, there&#39;s a heart, a hand to hold onto. Everywhere you look, everywhere you go. There&#39;s a face of somebody who needs you.<br />\r\nEverywhere you look, when you&#39;re lost out there and you&#39;re all alone, a light is waiting to carry you home, Everywhere you look. Everywhere you look.</p>\r\n\r\n<p>In the criminal justice system, the people are represented by two separate yet equally important groups. The police who investigate crime and the district attorneys who prosecute the offenders. These are their stories.<br />\r\n&nbsp;</p>\r\n', '2016'),
(842, 80, 20, '<p>Dance your cares away, worry&#39;s for another day. Let the music play, down at Fraggle Rock! Work you cares away, dancing&#39;s for another day. Let the Fraggles play, We&#39;re Gobo, Mokey, Wembley, Boober, Red! Dance your cares away, worry&#39;s for another day. Let the music play, down at Fraggle Rock! Down at Fraggle Rock! Down at Fraggle Rock.</p>\r\n\r\n<p>Making the world a better place, starts with one more smiling face. And Ronald&#39;s smile is just the thing, To make everybody sing! Put a smile on, put a smile on, everybody come on! Put a smile on!</p>\r\n', '2016'),
(843, 80, 21, '<p>Baby if you&#39;ve ever wondered, wondered what ever became of me. I&#39;m living on the air in Cincinnati, Cincinnati WKRP. Got time and tired of packing and unpacking. Town to town, up and down the dial. Maybe you and me were never meant to be, But baby think of me once in a while. I&#39;m in WKRP in Cincinnati.</p>\r\n', '2016'),
(844, 80, 22, '<p>Yogi Bear is smarter than the average bear, Yogi Bear is always in the ranger&#39;s hair. At a picnic table you will find him there, stuffing down more goodies than the average bear. He will sleep till noon but before it&#39;s dark, he&#39;ll have every picnic basket that&#39;s in Jellystone Park. Yogi has it better than a millionaire. That&#39;s because he&#39;s smarter than the average bear!</p>\r\n\r\n<p>What ever happened to predictability? The milkman, the paperboy, evening TV. Everywhere you look, everywhere you go, there&#39;s a heart, a hand to hold onto. Everywhere you look, everywhere you go. There&#39;s a face of somebody who needs you.<br />\r\nEverywhere you look, when you&#39;re lost out there and you&#39;re all alone, a light is waiting to carry you home, Everywhere you look. Everywhere you look.</p>\r\n\r\n<p>In the criminal justice system, the people are represented by two separate yet equally important groups. The police who investigate crime and the district attorneys who prosecute the offenders. These are their stories.</p>\r\n\r\n<p>Dance your cares away, worry&#39;s for another</p>\r\n', '2016'),
(845, 80, 23, '<p>What ever happened to predictability? The milkman, the paperboy, evening TV. Everywhere you look, everywhere you go, there&#39;s a heart, a hand to hold onto. Everywhere you look, everywhere you go. There&#39;s a face of somebody who needs you.<br />\r\nEverywhere you look, when you&#39;re lost out there and you&#39;re all alone, a light is waiting to carry you home, Everywhere you look. Everywhere you look.</p>\r\n\r\n<p>In the criminal justice system, the people are represented by two separate yet equally important groups. The police who investigate crime and the district attorneys who prosecute the offenders. These are their stories.</p>\r\n', '2016'),
(846, 80, 24, '<p>What ever happened to predictability? The milkman, the paperboy, evening TV. Everywhere you look, everywhere you go, there&#39;s a heart, a hand to hold onto. Everywhere you look, everywhere you go. There&#39;s a face of somebody who needs you.</p>\r\n', '2016'),
(847, 80, 25, '<p>Everywhere you look, everywhere you go, there&#39;s a heart, a hand to hold onto. Everywhere you look, everywhere you go. There&#39;s a face of somebody who needs you.<br />\r\nEverywhere you look, when you&#39;re lost out there and you&#39;re all alone, a light is waiting to carry you home, Everywhere you look. Everywhere you look.</p>\r\n\r\n<p>In the criminal justice system, the people are represented by two separate yet equally important groups.</p>\r\n', '2016'),
(848, 80, 26, '<p>Now, the world don&#39;t move to the beat of just one drum, what might be right for you, may not be right for some. A man is born, he&#39;s a man of means. Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p>\r\n\r\n<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>\r\n', '2016'),
(849, 80, 27, '<p>Now, the world don&#39;t move to the beat of just one drum, what might be right for you, may not be right for some. A man is born, he&#39;s a man of means. Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p>\r\n\r\n<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>\r\n', '2016'),
(850, 80, 28, '<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>\r\n', '2016'),
(851, 80, 29, '<p>We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>\r\n\r\n<p>Butterfly in the sky, I can go twice as high. Take a look, it&#39;s in a book - Reading Rainbow. I can go anywhere! Friends to know and ways to grow - Reading Rainbow. I can be anything! Take a look, it&#39;s in a book - Reading Rainbow. Reading Rainbow, Reading Rainbow, Reading Rainbow, Reading Rainbow!<br />\r\n&nbsp;</p>\r\n', '2016'),
(852, 80, 30, '<p>We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.<br />\r\n&nbsp;</p>\r\n', '2016'),
(853, 80, 31, '<p>Butterfly in the sky, I can go twice as high. Take a look, it&#39;s in a book - Reading Rainbow. I can go anywhere! Friends to know and ways to grow - Reading Rainbow. I can be anything! Take a look, it&#39;s in a book - Reading Rainbow. Reading Rainbow, Reading Rainbow, Reading Rainbow, Reading Rainbow!</p>\r\n', '2016'),
(854, 81, 2, '<p><strong>Hiks :(</strong> Now, the world don&#39;t move to the beat of just one drum, what might be right for you, may not be right for some. A man is born, he&#39;s a man of means. Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p>\r\n\r\n<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>\r\n\r\n<p>wkwkwkwkw mantep brow</p>\r\n', '2016'),
(855, 81, 2, '<p>Now, the world don&#39;t move to the beat of just one drum, what might be right for you, may not be right for some. A man is born, he&#39;s a man of means. Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!<br />&nbsp;</p>', '2016'),
(856, 81, 3, '<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab! wakwaww<br />&nbsp;</p>', '2016'),
(857, 81, 4, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p><p>Here&#39;s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(858, 81, 5, '<p>Here&#39;s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(859, 81, 6, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>', '2016'),
(860, 81, 7, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(861, 81, 8, '<p>Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(862, 81, 9, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(863, 81, 10, '<p>ths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(864, 81, 11, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past thod crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(865, 81, 12, '<p>Then along come two, they got nothing but their jeans. hem myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(866, 81, 13, '<p>Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(867, 81, 14, '<p>Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(868, 81, 15, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity.&nbsp;</p>', '2016'),
(869, 81, 2, '<p>Now, the world don&#39;t move to the beat of just one drum, what might be right for you, may not be right for some. A man is born, he&#39;s a man of means. Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!<br />&nbsp;</p>', '2016'),
(870, 81, 3, '<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!<br />&nbsp;</p>', '2016'),
(871, 81, 4, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p><p>Here&#39;s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(872, 81, 5, '<p>Here&#39;s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(873, 81, 6, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>', '2016'),
(874, 81, 7, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(875, 81, 8, '<p>Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(876, 81, 9, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(877, 81, 10, '<p>ths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(878, 81, 11, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past thod crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(879, 81, 12, '<p>Then along come two, they got nothing but their jeans. hem myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(880, 81, 13, '<p>Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(881, 81, 14, '<p>Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(882, 81, 15, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity.&nbsp;</p>', '2016'),
(883, 81, 16, '<p>Then along come two, they got nothing but their jeans. But they got, Diff&#39;rent Strokes, it takes Diff&#39;rent Strokes. It takes Diff&#39;rent Strokes to move the world.</p><p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>', '2016'),
(884, 82, 17, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster. wkwkwkwkkw<br />&nbsp;</p>', '2016'),
(885, 82, 18, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.</p>', '2016'),
(886, 82, 19, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(887, 82, 20, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(888, 82, 21, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(889, 82, 22, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(890, 82, 23, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(891, 82, 24, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(892, 82, 25, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(893, 82, 26, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(894, 82, 27, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(895, 82, 28, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(896, 82, 29, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(897, 82, 30, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(898, 82, 31, '<p>Moon over Parma, bring my love to me tonight. Guide her to Cleveland, underneath your silvery light. We&#39;re going bowlin&#39; so don&#39;t lose her in Solon. Moon over Parma, tonight!</p><p>In an age when nature and magic rule the world, there is an extraordinary legend: the story of a warrior who communicates with animals, who fights sorcery and the unnatural. His name is Dar, last of his tribe. He is also called Beastmaster.<br />&nbsp;</p>', '2016'),
(899, 83, 2, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(900, 83, 3, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(901, 83, 4, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(902, 83, 5, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(903, 83, 6, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(904, 83, 7, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(905, 83, 8, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(906, 83, 9, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(907, 83, 10, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(908, 83, 11, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(909, 83, 12, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(910, 83, 13, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(911, 83, 14, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(912, 83, 15, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(913, 83, 16, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p><p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(914, 84, 17, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(915, 84, 18, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(916, 84, 19, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(917, 84, 20, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(918, 84, 21, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(919, 84, 22, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(920, 84, 23, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(921, 84, 24, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(922, 84, 25, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(923, 84, 17, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(924, 84, 18, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(925, 84, 19, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(926, 84, 20, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(927, 84, 21, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(928, 84, 22, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(929, 84, 23, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(930, 84, 24, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(931, 84, 25, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(932, 84, 26, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(933, 84, 27, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(934, 84, 28, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016');
INSERT INTO `soal_soal` (`id_soal_pelamar`, `id_calon_karyawan`, `id_soal`, `jawaban`, `tahun`) VALUES
(935, 84, 29, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(936, 84, 30, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(937, 84, 31, '<p>Doc Bruce Banner, pelted by gamma rays, turned into the Hulk - ain&#39;t he unglamorous! Wreckin&#39; the town with the power of a bull, Ain&#39;t no monster cause who is that lovable? It&#39;s ever-lovin&#39; Hulk!...Hulk! Hulk!</p>', '2016'),
(938, 85, 2, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(939, 85, 3, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p>\r\n\r\n<p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>\r\n', '2016'),
(940, 85, 4, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(941, 85, 5, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(942, 85, 6, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(943, 85, 7, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.<br />&nbsp;</p>', '2016'),
(944, 85, 8, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(945, 85, 9, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(946, 85, 10, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(947, 85, 11, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(948, 85, 12, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(949, 85, 13, '<p><em><strong>Hot dogs, Armour hot dogs</strong></em>. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(950, 85, 14, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(951, 85, 15, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(952, 85, 16, '<p>Hot dogs, Armour hot dogs. What kind of kids eat Armour hot dogs? Fat kids, skinny kids, kids who climb on rocks. Tough kids, sissy kids, even kids with chicken pox love hot dogs, Armour hot dogs... The dogs kids love to bite!</p><p>Boy the way Glen Miller played, songs that made the hit parade. Guys like us we had it made, those were the days. And you knew who you were then, girls were girls and men were men. Mister, we could use a man like Herbert Hoover again. Didn&#39;t need no welfare state, everybody pulled his weight. Gee our old LaSalle ran great. Those were the days.</p>', '2016'),
(953, 1, 2, '<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>', '2017'),
(954, 1, 3, '<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>', '2017'),
(955, 1, 4, '<p><br />Our whole universe was in a hot dense state, then nearly fourteen billion years ago expansion started. Wait... The Earth began to cool, the autotrophs began to drool. Neanderthals developed tools, we built a wall (we built the pyramids). Math, science, history, unraveling the mysteries, that all started with the big bang!</p>', '2017'),
(956, 1, 5, '<p><br />Our whole universe was in a hot dense state, then nearly fourteen billion years ago expansion started. Wait... The Earth began to cool, the autotrophs began to drool. Neanderthals developed tools, we built a wall (we built the pyramids). Math, science, history, unraveling the mysteries, that all started with the big bang!<br />Our whole universe was in a hot dense state, then nearly fourteen billion years ago expansion started. Wait... The Earth began to cool, the autotrophs began to drool. Neanderthals developed tools, we built a wall (we built the pyramids). Math, science, history, unraveling the mysteries, that all started with the big bang!</p>', '2017'),
(957, 1, 6, '<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>', '2017'),
(958, 1, 7, '<p>Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!Enter at your peril, past the vaulted door. Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>', '2017'),
(959, 1, 8, '<p>Enter at your peril, past the vaulted door. Impossible&nbsp;</p>', '2017'),
(960, 1, 9, '<p>In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>', '2017'),
(961, 1, 10, '<p>&nbsp;Impossible things will happen that the world&#39;s never seen before. In Dexter&#39;s laboratory lives the smartest boy you&#39;ve ever seen, but Dee Dee blows his experiments to Smithereens! There&#39;s gloom and doom when things go boom in Dexter&#39;s lab!</p>', '2017'),
(962, 1, 11, '<p>fight with me!</p><p>Who can turn the world on with her smile? Who can take a nothing day, and suddenly make it all seem worthwhile? Well it&#39;s you girl, and you should know it. With each glance and every little movement you show it. Love is all around, no need to waste it. You can have a town, why don&#39;t you take it. You&#39;re gonna make it after all. You&#39;re gonna make it after all.</p>', '2017'),
(963, 1, 12, '<p>You&#39;re gonna make it after all. You&#39;re gonna make it after all.</p>', '2017'),
(964, 1, 13, '<p>Who can take a nothing day, and suddenly make it all seem worthwhile? Well it&#39;s you girl, and you should know it. With each glance and every little movement you show it. Love is all around, no need to waste it. You can have a town, why don&#39;t you take it. You&#39;re gonna make it after all. You&#39;re gonna make it after all.</p>', '2017'),
(965, 1, 14, '<p>Who can turn the world on with her smile? Who can take a nothing day, and suddenly make it all seem worthwhile?&nbsp;My kinda people, my kinda place. There&#39;s something special about this place. Got no reason to stray too far, &#39;cause it&#39;s all right here in my own backyard! This is a Burger King town, it&#39;s made just for me! This is a Burger King town, we know how burgers should be! Right up the road, left at the sign. My way, your way, one at a time, hot off the fire with anything on it! And don&#39;t it feel good when it&#39;s just how you want it? This is a Burger King town, it&#39;s made just for me! This is a Burger King town, we know how burgers should be!</p>', '2017'),
(966, 1, 15, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth. Skeptical of the visitors, Mike Donovan and Juliet Parrish infiltrated their ranks and soon discovered some startling secrets. The resistance is all that stands between us... and the visitors.</p>', '2017'),
(967, 1, 16, '<p>They arrived in fifty mother ships, offering their friendship and advance technology to Earth.</p>', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `surat_perjanjian1`
--

CREATE TABLE IF NOT EXISTS `surat_perjanjian1` (
  `id_surat_perjanjian1` int(11) NOT NULL AUTO_INCREMENT,
  `pasal` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tahun_ajaran` int(11) NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '1 = Aktif, 2 = Non aktif',
  PRIMARY KEY (`id_surat_perjanjian1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `surat_perjanjian1`
--

INSERT INTO `surat_perjanjian1` (`id_surat_perjanjian1`, `pasal`, `judul`, `isi`, `tahun_ajaran`, `status`) VALUES
(1, 'Pasal 1', 'Tugas dan Penempatan', '<p>Pihak Pertama mempekerjakan Pihak Kedua terhitung ________________ s.d. ________________ sebagai</p>\r\n\r\n<p>_____________________________________________________________ di Sekolah Pah Tsung.</p>\r\n', 7, '1'),
(2, 'Pasal 2', 'Gaji / honor', '<p>1. Honor dibayarkan sebesar Rp. _________________________________ / bulan</p>\r\n\r\n<p>&nbsp; &nbsp; Terdiri dari Gaji Pokok &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Rp.&nbsp;______________________________</p>\r\n\r\n<p>&nbsp; &nbsp; Tunjangan _______________ : Rp. ______________________________</p>\r\n\r\n<p>&nbsp; &nbsp; Tunjangan _______________ : Rp. ______________________________</p>\r\n\r\n<p>&nbsp; &nbsp; Tunjangan _______________ : Rp. ______________________________</p>\r\n\r\n<p>2. Uang Keahdiran &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Rp. ______________________________ per hari hadir.</p>\r\n\r\n<p>3. Semua gaji/honor tersebut diatas sudah termasuk tugas dan tanggung jawab yang dilaksanakan di</p>\r\n\r\n<p>&nbsp; &nbsp; Sekolah Pah Tsung.</p>\r\n\r\n<p>4. Tunjangan Hari Raya bagi yang sudah bekerja lebih dari 3 (tiga) bulan, yang akan diperhitungkan</p>\r\n\r\n<p>&nbsp; &nbsp; secara proposional.</p>\r\n\r\n<p>5. Pajak akan ditanggung pihak kedua.</p>\r\n\r\n<p>6. Pihak kedua tidak berhak atas fasilitas lainnya.</p>\r\n', 7, '1'),
(3, 'Pasal 3', 'Waktu Kerja', '<p>Hari dan jam kerja ditentukan sesuai dengan aturan yang berlaku di Sekolah Pah Tsung.</p>\r\n', 7, '1'),
(4, 'Pasal 4', 'Sanksi Ketidakhadiran', '<p>Bilamana Pihak Kedua tidak hadir sesuai jadwal yang telah disepakati oleh kedua belah pihak dengan alasan tidak dapat diterima oleh Pihak Pertama, maka gaji Pihak Kedua akan diberlakukan sesuai aturan yang berlaku.</p>\r\n', 7, '1'),
(5, 'Pasal 5', 'Tata Tertib, Kewajiban dan Disiplin Kerja', '<p>Pihak Kedua wajib mematuhi ketentuan tata tertib, kewajiban dan disiplin kerja berlaku dilingkungan sekolah pihak Pertama baik tertulis maupun tidak tertulis ( a.I. instruksi kerja, etika kerja dll. ) di unit kerja terkait dan sesuai dengan Peraturan Kerja yang berlaku.</p>\r\n', 7, '1'),
(6, 'Pasal 6', 'Pelanggaran Tata Tertib &amp; Undang-undang yang Berlaku serta Disiplin Kerja', '<p>Apabila selama periode berlakunya perjanjian ini pihak Kedua melakukan perbuatan melanggar Tata tertib dan disiplin kerja sebagaimana tercantum pada Peraturan Kerja yang berlaku, maka diputuskan hubungan kerjanya, tanpa mewajibkan pihak Pertama membayar kompensasi dan ganti rugi dalam bentuk apapun juga kepada pihak Kedua. Dan apabila pihak Kedua dengan sengaja bermaksud tidak menyelesaikan sesuai jadwal kontrak, maka pihak Kedua berkewajiban mengganti rugi kepada pihak Pertama sebesar 3 x bulan gaji pokok yang diterima setiap bulannya.</p>\r\n', 7, '1'),
(7, 'Pasal 7', 'Sakit Berkepanjangan', '<p>Apabila selama periode berlakunya perjanjian ini pihak Kedua berada dalam kondisi sakit berkepanjangan ( Segala jenis penyakit terutama jenis penyakit menular ) untuk jangka waktu 4 minggu lebih, berdasarkan rekomendasi dari dokter yang akan ditunjuk pihak Pertama, maka pihak Pertama akan emmutuskan perjanjian initanpa harus mewajibkan pihak Pertama untuk membayar kompensasi dan ganti rugi dalam bentuk apapun kepada pihak Kedua</p>\r\n', 7, '1'),
(8, 'Pasal 8', 'Penyelesaian Permasalahan', '<p>Apabila terjadi ketidaksepakatan dalam pelaksanaan ini maka kedua belah pihak akan menyelesaikan dengan cara kekeluargaan. Apabila penyelesaian sebagaimana tersebut diatas tidak tercapai maka permasalahan akan diserahkan kepada pihak yang berwenang di tempat domisili hukum Pihak Pertama.</p>\r\n', 7, '1'),
(9, 'Pasal 9', 'Berakhirnya Perjanjian', '<ol>\r\n	<li>Kedua belah pihak setuju bahwa berakhirnya perjanjian kerja sesuai dengan masa berlaku Yang tercantum dalam perjanjian ini, kecuali pada pasal 6 dan 7 pada perjanjian ini terpenuhi maka pihak Kedua setuju perjanjian ini berakhir terhitung dari dikeluarkannya keputusan Pemutusan Hubungan Kerja Pihak Kedua.</li>\r\n	<li>Kedua belah pihak tidak terikat untuk memperpanjang perjanjian kerja ini apabila waktu perjanjian kerja ini berakhir.</li>\r\n	<li>Pihak Kedua sepakat dan setuju apabila masa berlaku pada periode ini berakhir atau yang terkait dengan klausal pada pasal 6 &amp; 7 perjanjian ini, tidak menerima kompensasi/pesangon atau ganti rugi dalam bentuk apapun.</li>\r\n</ol>\r\n', 7, '1'),
(10, 'Pasal 10', 'Kekuatan Hukum Perjanjian Paruh Waktu', '<p>Kesepakatan sebagaimana tercantum pada perjanjian ini dibuat oleh masing-masing pihak dalam keadaan sadar, baik jasmani maupun rohani dan tanpa adanya paksaan dari pihak manapun juga.</p>\r\n', 7, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_ta` int(11) NOT NULL AUTO_INCREMENT,
  `ta` varchar(9) NOT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_ta`, `ta`) VALUES
(1, '2011/2012'),
(2, '2012/2013'),
(3, '2013/2014'),
(4, '2014/2015'),
(5, '2015/2016'),
(6, '2016/2017'),
(7, '2017/2018'),
(8, '2018/2019'),
(9, '2019/2020'),
(10, '2020/2021'),
(11, '2021/2022'),
(12, '2022/2023'),
(13, '2023/2024'),
(14, '2024/2025'),
(15, '2025/2026'),
(16, '2026/2027'),
(17, '2027/2028'),
(18, '2028/2029'),
(19, '2029/2030'),
(20, '2030/2031');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id_unit` int(11) NOT NULL AUTO_INCREMENT,
  `id_calon_karyawan` int(11) NOT NULL,
  `id_master_unit` int(11) NOT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `id_calon_karyawan`, `id_master_unit`) VALUES
(46, 5, 5),
(47, 84, 2),
(48, 83, 5),
(49, 82, 3),
(50, 80, 3),
(51, 81, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_admin` enum('1','2') NOT NULL COMMENT '1 = aktif, 2 = non aktif',
  `level` enum('1','2','3','4','5','6','7') NOT NULL COMMENT '1 = hrd, 2 = calon pelamar, 3 = Unit TK, 4 = Unit SD, 5 = Unit SMP, 6 = Unit SMA, 7 = Unit SKR',
  `user_online` enum('0','1') NOT NULL COMMENT '1 = online, 0 = offline',
  `m_dashboard1` int(1) NOT NULL,
  `m_dashboard2` int(1) NOT NULL,
  `m_user` int(1) NOT NULL,
  `m_master_data` int(1) NOT NULL,
  `m_pelamar` int(1) NOT NULL,
  `m_tambah_pelamar` int(1) NOT NULL,
  `m_detail_pelamar` int(1) NOT NULL,
  `m_induk_karyawan` int(1) NOT NULL,
  `m_payroll` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `foto`, `username`, `password`, `status_admin`, `level`, `user_online`, `m_dashboard1`, `m_dashboard2`, `m_user`, `m_master_data`, `m_pelamar`, `m_tambah_pelamar`, `m_detail_pelamar`, `m_induk_karyawan`, `m_payroll`) VALUES
(1, 'HRD', 'noverdiandreas89@gmail.com', '', 'hrd', '9650fc5dff723276222daf93b170e3af', '1', '1', '1', 1, 0, 1, 1, 1, 1, 1, 1, 0),
(2, 'Recruitment', 'recruitment@gmail.com', '', 'recruitment', '9650fc5dff723276222daf93b170e3af', '1', '2', '0', 0, 1, 0, 0, 0, 1, 1, 0, 0),
(3, 'Unit TK', 'unit_tk@gmail.com', '', 'unit_tk', '9650fc5dff723276222daf93b170e3af', '1', '3', '0', 0, 0, 0, 0, 1, 0, 1, 0, 0),
(4, 'Unit SD', 'unit_sd@gmail.com', '', 'unit_sd', '9650fc5dff723276222daf93b170e3af', '1', '4', '0', 0, 0, 0, 0, 1, 0, 1, 0, 0),
(5, 'Unit SMP', 'unit_smp@gmail.com', '', 'unit_smp', '9650fc5dff723276222daf93b170e3af', '1', '4', '0', 0, 0, 0, 0, 1, 0, 1, 0, 0),
(6, 'Unit SKR', 'unit_skr@gmail.com', '', 'unit_skr', '9650fc5dff723276222daf93b170e3af', '1', '4', '0', 0, 0, 0, 0, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `warganegara`
--

CREATE TABLE IF NOT EXISTS `warganegara` (
  `IDwn` int(11) NOT NULL AUTO_INCREMENT,
  `WargaNegara` varchar(50) NOT NULL,
  PRIMARY KEY (`IDwn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `warganegara`
--

INSERT INTO `warganegara` (`IDwn`, `WargaNegara`) VALUES
(1, 'Warga Negara Indonesia'),
(2, 'Warga Negara Asing');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
