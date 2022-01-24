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


-- Dumping database structure for satutegalpingen
CREATE DATABASE IF NOT EXISTS `satutegalpingen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `satutegalpingen`;

-- Dumping structure for table satutegalpingen.beritas
CREATE TABLE IF NOT EXISTS `beritas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carosel` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penting` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.beritas: ~1 rows (approximately)
/*!40000 ALTER TABLE `beritas` DISABLE KEYS */;
INSERT INTO `beritas` (`id`, `title`, `deskripsi`, `image`, `carosel`, `created_at`, `updated_at`, `penting`) VALUES
	(2, 'Vaksin Gajeh', 'Mendapat Vaksin Pancen Oye', '1642692835.4694-0-1479599196.png', 'yes', '2022-01-20 05:14:02', '2022-01-20 15:33:55', 'no');
/*!40000 ALTER TABLE `beritas` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.galeris
CREATE TABLE IF NOT EXISTS `galeris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.galeris: ~2 rows (approximately)
/*!40000 ALTER TABLE `galeris` DISABLE KEYS */;
INSERT INTO `galeris` (`id`, `title`, `image`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'Lomba Dukun hyhyhyhyh', '1642668559.gif', 'Lomba Tanggal 6666666666666', '2022-01-20 08:49:19', '2022-01-20 09:52:11'),
	(2, 'TUgasasasa', '1642672453.jpg', 'Vaksinasi Yang dijalankan hari minggu', '2022-01-20 09:54:13', '2022-01-20 09:54:13');
/*!40000 ALTER TABLE `galeris` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.guru_mapels
CREATE TABLE IF NOT EXISTS `guru_mapels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.guru_mapels: ~0 rows (approximately)
/*!40000 ALTER TABLE `guru_mapels` DISABLE KEYS */;
/*!40000 ALTER TABLE `guru_mapels` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.kontaks
CREATE TABLE IF NOT EXISTS `kontaks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.kontaks: ~0 rows (approximately)
/*!40000 ALTER TABLE `kontaks` DISABLE KEYS */;
/*!40000 ALTER TABLE `kontaks` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.mata_pelajarans
CREATE TABLE IF NOT EXISTS `mata_pelajarans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.mata_pelajarans: ~4 rows (approximately)
/*!40000 ALTER TABLE `mata_pelajarans` DISABLE KEYS */;
INSERT INTO `mata_pelajarans` (`id`, `mata_pelajaran`, `created_at`, `updated_at`) VALUES
	(1, 'Bahasa Dukunisasi', '2022-01-20 12:49:48', '2022-01-20 12:49:48'),
	(2, 'Tata Cara Voodoooooo', '2022-01-20 12:50:00', '2022-01-20 12:50:56'),
	(3, 'Ilmu Kebal Mang Oye', '2022-01-20 12:50:20', '2022-01-20 12:50:20');
/*!40000 ALTER TABLE `mata_pelajarans` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.migrations: ~13 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(8, '2022_01_16_212612_sarana_prasarana', 2),
	(9, '2022_01_17_073002_create_sarana_prasaranas_table', 3),
	(12, '2022_01_18_091007_create_mata_pelajarans_table', 4),
	(13, '2022_01_18_091028_create_tenaga_pendidiks_table', 4),
	(14, '2022_01_18_091053_create_guru_mapels_table', 5),
	(15, '2022_01_18_061931_create_beritas_table', 6),
	(16, '2022_01_18_061946_create_galeris_table', 6),
	(17, '2022_01_18_062011_create_visi_misis_table', 6),
	(18, '2022_01_18_062036_create_prestasis_table', 6),
	(19, '2022_01_18_090920_create_kontaks_table', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.prestasis
CREATE TABLE IF NOT EXISTS `prestasis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.prestasis: ~2 rows (approximately)
/*!40000 ALTER TABLE `prestasis` DISABLE KEYS */;
INSERT INTO `prestasis` (`id`, `title`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Juara III dukunisasi', 'Ya gitulahhhhhhhh', '1642684831.gif', '2022-01-20 13:20:31', '2022-01-20 13:20:31'),
	(2, 'Jarau jjj', 'ffffffffffffhhhhhhhhhhh', '1642687033.link-aja.png', '2022-01-20 13:20:54', '2022-01-20 13:57:13'),
	(3, 'hjjjjjjjjjjjjjjjkkkkkkkkkkkkk', 'mmmmmmmmmmmmmmmmmmmmm', '1642686685.jpg', '2022-01-20 13:51:25', '2022-01-20 13:51:25');
/*!40000 ALTER TABLE `prestasis` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.sarana_prasaranas
CREATE TABLE IF NOT EXISTS `sarana_prasaranas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.sarana_prasaranas: ~4 rows (approximately)
/*!40000 ALTER TABLE `sarana_prasaranas` DISABLE KEYS */;
INSERT INTO `sarana_prasaranas` (`id`, `title`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Vaksinasi Jumatan', 'Vaksinasi Yang dijalankan hari Sabtu', '1642694077.link-aja.png', '2022-01-19 17:37:44', '2022-01-20 18:55:53'),
	(2, 'Kamar Mandi', 'Tempat buang air Besar/Kecil', '1642614021.png', '2022-01-19 17:40:21', '2022-01-20 18:56:11');
/*!40000 ALTER TABLE `sarana_prasaranas` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.tenaga_pendidiks
CREATE TABLE IF NOT EXISTS `tenaga_pendidiks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_GuruKaryawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carosel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.tenaga_pendidiks: ~2 rows (approximately)
/*!40000 ALTER TABLE `tenaga_pendidiks` DISABLE KEYS */;
INSERT INTO `tenaga_pendidiks` (`id`, `nama_GuruKaryawan`, `image`, `carosel`, `role`, `created_at`, `updated_at`) VALUES
	(1, 'Jahm', '1642688991.jpg', 'yes', 'Kepala Sekolah', '2022-01-20 14:29:51', '2022-01-20 14:31:24'),
	(2, 'Kologh', '1642689057.profile-pic.jpg', 'yes', 'Kepala Sekolah', '2022-01-20 14:30:47', '2022-01-20 14:30:57');
/*!40000 ALTER TABLE `tenaga_pendidiks` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_super` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `is_admin`, `is_super`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Sanama Manggolia', 'sanam@gmail.com', 'saname', '$2y$10$RxAQAAQZVzFbmWmJmM0ILuPBsRZ1w08TFHi.iJvF/ZN95VXU968t2', 'yes', 'no', NULL, NULL, '2022-01-16 11:05:14', '2022-01-20 06:55:22'),
	(4, 'Bussy Master', 'bussy@gmail.com', 'bussye', '$2y$10$hrfYC2RQdsAjBg3UUtHqoODGROmJ7B20Q4IuHC6/nJhCUSc.LgI36', 'no', 'yes', NULL, NULL, '2022-01-16 17:53:54', '2022-01-17 09:03:32'),
	(8, 'Contoh Mahmutianhui', 'contoh@gmail.com', 'contoh', '$2y$10$58RB6i0hENsOBMXOu5E2zedfRFnlQ.utpzgZo05uWeXPmddCH1zX6', 'yes', 'no', NULL, NULL, '2022-01-19 10:42:31', '2022-01-20 08:06:08'),
	(9, 'Ahmad Dahlianun', 'ahmad@gmial.com', 'ahmad', '$2y$10$q/f0W.2EBUk.05wPk/X8kucoAKLNeBBzvlI5TwOXy8y4fOIw0mkYK', 'no', 'yes', NULL, NULL, '2022-01-19 10:43:46', '2022-01-19 11:23:29'),
	(10, 'Fredrick Seener', 'siames@gmail.com', 'siames', '$2y$10$wl1buGrJHNSnbBL6dxK84OBpeMEJsJPfUv1bfNpJC9EQ7uUnIOZRy', 'no', 'yes', NULL, NULL, '2022-01-19 12:04:20', '2022-01-19 12:04:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table satutegalpingen.visi_misis
CREATE TABLE IF NOT EXISTS `visi_misis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table satutegalpingen.visi_misis: ~2 rows (approximately)
/*!40000 ALTER TABLE `visi_misis` DISABLE KEYS */;
INSERT INTO `visi_misis` (`id`, `title`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(4, 'visi', 'hfghgfhfhfhfhfhfghfghfhfg', '2022-01-20 15:06:17', '2022-01-20 15:06:17'),
	(5, 'misi', 'adsadasdasdadadasdadasdasdasddasdasdasdasd', '2022-01-20 15:06:08', '2022-01-20 15:06:08');
/*!40000 ALTER TABLE `visi_misis` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
