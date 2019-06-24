-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.15 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for medcare
CREATE DATABASE IF NOT EXISTS `medcare` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `medcare`;

-- Dumping structure for table medcare.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `all_script_patient_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.clients: ~0 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
REPLACE INTO `clients` (`id`, `all_script_patient_id`, `first_name`, `last_name`, `name`, `gender`, `dob`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'AL963258', 'Patient 1', '', 'Patient 1', 'male', '1990-05-25', 'siva@sqindia.net', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', NULL, NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table medcare.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_05_07_100025_create_clients_table', 2),
	(8, '2019_05_07_102724_add_extra_columns_to_clients_table', 3),
	(12, '2019_05_08_095628_create_work_queues_table', 4),
	(13, '2019_06_21_115345_create_summary_reports_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table medcare.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table medcare.summary_reports
CREATE TABLE IF NOT EXISTS `summary_reports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `work_queue_id` bigint(20) unsigned NOT NULL,
  `provider_report` longtext COLLATE utf8mb4_unicode_ci,
  `patient_report` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_reports_work_queue_id_foreign` (`work_queue_id`),
  CONSTRAINT `summary_reports_work_queue_id_foreign` FOREIGN KEY (`work_queue_id`) REFERENCES `work_queues` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.summary_reports: ~0 rows (approximately)
/*!40000 ALTER TABLE `summary_reports` DISABLE KEYS */;
REPLACE INTO `summary_reports` (`id`, `work_queue_id`, `provider_report`, `patient_report`, `created_at`, `updated_at`) VALUES
	(2, 1, '&lt;p&gt;Mr. Dr. Strange, pls review the following recommendations and provide your response to the recommendations fax to 800 555-5555&lt;/p&gt; &lt;h6&gt;Recommendation 1&lt;/h6&gt; &lt;div&gt; &lt;ul&gt; &lt;li&gt;Renal Dose Adjustment&lt;/li&gt; &lt;li&gt;Medication Duplication&lt;/li&gt; &lt;/ul&gt; &lt;/div&gt; &lt;h6&gt;Medication&lt;/h6&gt; &lt;p&gt;Venlafaxine 75mg XR, Take 1 tab by mouth before brekfast venlafaxine 225mg, take 1 tab by mouth before breakfast.&lt;/p&gt; &lt;h6&gt;Assessment&lt;/h6&gt; &lt;p&gt;Patient is taking total dose of 300mg/dy, but maximum daily dose is 225 mg. This medication also requires renal adjusment for CrCI 10-70 (Patient estimated Cr CI(Cockcroft-Gault):50.5 mL/min) requires a reduction of total daily doe by 25-50%.&lt;/p&gt; &lt;h6&gt;Plan&lt;/h6&gt; &lt;p&gt;Please consider reducing daily dose and renal adjusting this medicine.&lt;/p&gt; &lt;h6&gt;References&lt;/h6&gt; &lt;p&gt;Lexicomp&lt;/p&gt; &lt;h6&gt;Provider Response&lt;/h6&gt; &lt;p&gt;Provide Initials and (Yes/No) or explanation&lt;/p&gt;', '&lt;p&gt;Dr. Strange, pls review the following recommendations and provide your response\n										to\n										the recommendations fax to 800 555-5555&lt;/p&gt;\n									\n									&lt;h6&gt;Recommendation 1&lt;/h6&gt;\n									\n									&lt;div&gt;\n										&lt;ul&gt;\n											&lt;li&gt;Renal Dose Adjustment&lt;/li&gt;\n											&lt;li&gt;Medication Duplication&lt;/li&gt;\n										&lt;/ul&gt;\n									&lt;/div&gt;\n									\n									&lt;h6&gt;Medication&lt;/h6&gt;\n									&lt;p&gt;Venlafaxine 75mg XR, Take 1 tab by mouth before brekfast venlafaxine 225mg, take\n										1\n										tab by mouth before breakfast.&lt;/p&gt;\n									\n									&lt;h6&gt;Assessment&lt;/h6&gt;\n									&lt;p&gt;Patient is taking total dose of 300mg/dy, but maximum daily dose is 225 mg. This\n										medication also requires renal adjusment for CrCI 10-70 (Patient estimated Cr\n										CI(Cockcroft-Gault):50.5 mL/min) requires a reduction of total daily doe by\n										25-50%.&lt;/p&gt;\n									\n									&lt;h6&gt;Plan&lt;/h6&gt;\n									&lt;p&gt;Please consider reducing daily dose and renal adjusting this medicine.&lt;/p&gt;\n									\n									&lt;h6&gt;References&lt;/h6&gt;\n									&lt;p&gt;Lexicomp&lt;/p&gt;\n									\n									&lt;h6&gt;Provider Response&lt;/h6&gt;\n									&lt;p&gt;Provide Initials and (Yes/No) or explanation&lt;/p&gt;', '2019-06-24 08:35:50', '2019-06-24 10:35:56');
/*!40000 ALTER TABLE `summary_reports` ENABLE KEYS */;

-- Dumping structure for table medcare.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_live_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'work progress status',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_id_number_unique` (`id_number`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `first_name`, `last_name`, `name`, `email`, `id_number`, `password`, `start_date`, `end_date`, `account_type`, `user_role`, `work_live_status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'user1', NULL, 'siva', 'siva@sqindia.net', 'siva ID', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', '2019-05-01', '2019-10-31', 'admin', '1', NULL, '2019-06-18 11:45:12', '41DOsvoBSlQZ6MZgyhpyKJe4E9qNvf8uANPLWluKSqTjgTXe7XiQzlUMaXEr', NULL, '2019-06-18 11:45:12'),
	(2, 'user2', 'lname', 'user2 lname', 'user2@sqindia.net', 'user2 ID', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', '2019-04-01', '06/25/2019', 'consultant', '2', 'assigned', '2019-06-19 09:36:56', NULL, NULL, '2019-06-19 11:52:59'),
	(3, 'user3', NULL, 'user3', 'user3@sqindia.net', 'user3 ID', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', '2019-04-01', '2019-1-30', 'consultant', '2', 'assigned', '2019-06-19 14:59:36', NULL, NULL, '2019-06-19 11:51:09'),
	(4, 'user4', NULL, 'user4', 'user4@sqindia.net', 'user4 ID', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', '2019-04-01', '2019-1-30', 'consultant', '2', 'assigned', '2019-06-19 14:59:39', NULL, NULL, '2019-06-19 11:54:54'),
	(5, 'user5', 'lname', 'user1', 'user1@sqindia.net', 'user1 ID', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', '2019-04-01', '06/25/2019', 'consultant', '2', 'completed', '2019-06-19 09:36:56', NULL, NULL, '2019-06-19 09:36:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table medcare.work_queues
CREATE TABLE IF NOT EXISTS `work_queues` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `e_script_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewer_id` bigint(20) unsigned DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary_report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_queues_client_id_foreign` (`client_id`),
  KEY `work_queues_reviewer_id_foreign` (`reviewer_id`),
  CONSTRAINT `work_queues_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `work_queues_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.work_queues: ~4 rows (approximately)
/*!40000 ALTER TABLE `work_queues` DISABLE KEYS */;
REPLACE INTO `work_queues` (`id`, `client_id`, `e_script_id`, `reviewer_id`, `status`, `summary_report`, `chat_status`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL, 'unassigned', 'pending', NULL, NULL, NULL),
	(2, 1, NULL, NULL, 'unassigned', 'pending', NULL, NULL, '2019-06-19 12:23:53'),
	(3, 1, NULL, 3, 'assigned', 'pending', NULL, NULL, '2019-06-19 12:27:46'),
	(4, 1, NULL, 2, 'assigned', 'pending', NULL, NULL, '2019-06-19 12:25:24');
/*!40000 ALTER TABLE `work_queues` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
