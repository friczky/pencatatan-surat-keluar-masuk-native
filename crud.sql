-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table crud.pengguna: ~0 rows (approximately)
REPLACE INTO `pengguna` (`id`, `nama`, `password`, `email`, `foto`, `role`) VALUES
	(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '20788102845.JANBADRA.png', 0),
	(19, 'Fadilah Riczky1', '21232f297a57a5a743894a0e4a801fc3', 'friczky@gmail.com', '141481106130.UINYSK.png', 1),
	(20, 'Fadilah Riczky11111', '21232f297a57a5a743894a0e4a801fc3', 'friczky@gmail.com', '245266884Gadjah_Mada_University_Logo.png', 0);

-- Dumping data for table crud.tentang: ~0 rows (approximately)
REPLACE INTO `tentang` (`id`, `nama_web`, `maps_url`, `logo`) VALUES
	(1, 'test', 'maps', '88336523445.JANBADRA.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
