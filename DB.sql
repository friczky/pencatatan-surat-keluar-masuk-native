-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table pencatatan-surat.arsip_surat
CREATE TABLE IF NOT EXISTS `arsip_surat` (
  `id_arsip` int(11) NOT NULL AUTO_INCREMENT,
  `id_format_surat` varchar(100) DEFAULT NULL,
  `jenis_file` varchar(50) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_arsip`),
  KEY `id_format_surat` (`id_format_surat`),
  CONSTRAINT `FK_arsip_surat_format_surat` FOREIGN KEY (`id_format_surat`) REFERENCES `format_surat` (`id_format_surat`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan-surat.arsip_surat: ~2 rows (approximately)
/*!40000 ALTER TABLE `arsip_surat` DISABLE KEYS */;
INSERT INTO `arsip_surat` (`id_arsip`, `id_format_surat`, `jenis_file`, `file`) VALUES
	(8, 'ID2022082415344276', '0', '565717525770-7708716_2b-png.png'),
	(9, 'ID2022082415461062', '1', '6959260942@4x - Copy.pdf'),
	(10, 'ID202208261118576', '0', '1737050453chord-angelaki-tegami - Copy.pdf');
/*!40000 ALTER TABLE `arsip_surat` ENABLE KEYS */;

-- Dumping structure for table pencatatan-surat.format_rekap
CREATE TABLE IF NOT EXISTS `format_rekap` (
  `id_format_rekap` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_format_rekap`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan-surat.format_rekap: ~0 rows (approximately)
/*!40000 ALTER TABLE `format_rekap` DISABLE KEYS */;
/*!40000 ALTER TABLE `format_rekap` ENABLE KEYS */;

-- Dumping structure for table pencatatan-surat.format_surat
CREATE TABLE IF NOT EXISTS `format_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_format_surat` varchar(100) DEFAULT NULL,
  `nomor_agenda` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `asal_surat` varchar(100) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `tanggal_diterima` varchar(50) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `jenis_surat` int(11) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_format_surat` (`id_format_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan-surat.format_surat: ~2 rows (approximately)
/*!40000 ALTER TABLE `format_surat` DISABLE KEYS */;
INSERT INTO `format_surat` (`id`, `id_format_surat`, `nomor_agenda`, `tanggal`, `bulan`, `tahun`, `asal_surat`, `nomor_surat`, `tanggal_diterima`, `perihal`, `keterangan`, `jenis_surat`, `created_at`, `updated_at`) VALUES
	(7, 'ID2022082415344276', 'S/01/02/031', '24', '01', '2021', 'Warga', 'SRT000777', '2022-08-23', 'Pembuatan KTP Sementara', 'Pembuatan KTP Sementara', 0, '2022-08-24 22:34:42', NULL),
	(8, 'ID2022082415461062', 'S/01/02/031', '24', '01', '2022', 'Warga1', 'SRT000777', '2022-08-24', 'Pembuatan KTP Sementara', 'Pembuatan KTP Sementara', 1, '2022-08-24 22:46:10', NULL),
	(9, 'ID202208261118576', 'S/01/02/031', '25', '08', '2022', 'Warga1', 'SRT0007771', '2022-08-26', 'Pembuatan KTP Sementara111', 'Kategori untuk artikel pembelajaran', 0, '2022-08-26 18:18:57', NULL);
/*!40000 ALTER TABLE `format_surat` ENABLE KEYS */;

-- Dumping structure for table pencatatan-surat.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan-surat.pengguna: ~1 rows (approximately)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `role`, `foto`) VALUES
	(1, 'Administrator', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '0', '984656949770-7708716_2b-png.png');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

-- Dumping structure for table pencatatan-surat.tentang
CREATE TABLE IF NOT EXISTS `tentang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_web` varchar(50) NOT NULL DEFAULT '0',
  `logo` varchar(50) NOT NULL DEFAULT '0',
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pencatatan-surat.tentang: ~1 rows (approximately)
/*!40000 ALTER TABLE `tentang` DISABLE KEYS */;
INSERT INTO `tentang` (`id`, `nama_web`, `logo`, `penanggung_jawab`) VALUES
	(1, 'Sistem Administrasi Surat Masuk dan Surat Keluar', '1914760488logo160.png', 'Alfin');
/*!40000 ALTER TABLE `tentang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
