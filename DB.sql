-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.15 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5608
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

-- Dumping structure for table medcare.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `workid` mediumint(9) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.messages: ~77 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
REPLACE INTO `messages` (`id`, `user_id`, `workid`, `message`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'dsfds', '2019-06-25 11:50:17', '2019-06-25 11:50:17'),
	(19, 5, 2, 'fgfd', '2019-06-25 12:24:48', '2019-06-25 12:24:48'),
	(20, 1, 3, 'dsfds', '2019-06-25 12:28:20', '2019-06-25 12:28:20'),
	(21, 1, 4, 'g', '2019-06-25 12:28:42', '2019-06-25 12:28:42'),
	(22, 1, 1, 'fg', '2019-06-25 12:28:53', '2019-06-25 12:28:53'),
	(23, 1, 2, 'fg', '2019-06-25 12:30:12', '2019-06-25 12:30:12'),
	(24, 1, 3, 'fdg', '2019-06-25 12:30:55', '2019-06-25 12:30:55'),
	(25, 1, 4, 'h', '2019-06-25 12:31:12', '2019-06-25 12:31:12'),
	(26, 1, 1, 'fgfd', '2019-06-25 12:31:21', '2019-06-25 12:31:21'),
	(27, 1, 2, 'fgdfg', '2019-06-25 12:32:12', '2019-06-25 12:32:12'),
	(28, 5, 3, 'ooo', '2019-06-25 12:32:25', '2019-06-25 12:32:25'),
	(29, 5, 4, '767', '2019-06-25 12:32:50', '2019-06-25 12:32:50'),
	(30, 5, 1, '56546', '2019-06-25 12:33:34', '2019-06-25 12:33:34'),
	(31, 1, 2, 'ds', '2019-06-25 13:42:16', '2019-06-25 13:42:16'),
	(32, 1, 3, 'dfds', '2019-06-27 10:31:19', '2019-06-27 10:31:19'),
	(33, 1, 4, 'yyy', '2019-06-27 10:32:52', '2019-06-27 10:32:52'),
	(34, 1, 2, 'fdgd', '2019-06-27 11:50:58', '2019-06-27 11:50:58'),
	(40, 1, 2, 'fgdgd', '2019-06-27 12:02:14', '2019-06-27 12:02:14'),
	(41, 2, 2, 'gfdg', '2019-06-27 12:04:09', '2019-06-27 12:04:09'),
	(42, 1, 2, '232', '2019-06-27 12:06:39', '2019-06-27 12:06:39'),
	(43, 1, 2, '11', '2019-06-27 12:09:06', '2019-06-27 12:09:06'),
	(44, 1, 2, 's', '2019-06-27 12:12:00', '2019-06-27 12:12:00'),
	(45, 2, 2, 'fdsf', '2019-06-27 12:16:35', '2019-06-27 12:16:35'),
	(46, 1, 2, '2', '2019-06-27 12:34:08', '2019-06-27 12:34:08'),
	(47, 5, 2, '3', '2019-06-27 12:34:35', '2019-06-27 12:34:35'),
	(48, 1, 2, '4', '2019-06-27 12:35:51', '2019-06-27 12:35:51'),
	(49, 5, 2, 'w', '2019-06-27 12:36:06', '2019-06-27 12:36:06'),
	(50, 5, 2, 'd', '2019-06-27 12:47:01', '2019-06-27 12:47:01'),
	(51, 5, 2, 'r', '2019-06-27 12:49:47', '2019-06-27 12:49:47'),
	(52, 5, 2, 'w', '2019-06-27 12:57:16', '2019-06-27 12:57:16'),
	(53, 5, 2, 'x', '2019-06-27 13:00:06', '2019-06-27 13:00:06'),
	(54, 5, 2, 'y', '2019-06-27 13:00:32', '2019-06-27 13:00:32'),
	(55, 5, 2, 'sa', '2019-06-27 13:00:53', '2019-06-27 13:00:53'),
	(56, 1, 2, 'u', '2019-06-27 13:04:43', '2019-06-27 13:04:43'),
	(57, 5, 2, 'q', '2019-06-27 13:04:49', '2019-06-27 13:04:49'),
	(58, 1, 2, 'a', '2019-06-28 05:47:32', '2019-06-28 05:47:32'),
	(59, 1, 2, 'c', '2019-06-28 05:47:45', '2019-06-28 05:47:45'),
	(60, 1, 2, 'z', '2019-06-28 06:38:28', '2019-06-28 06:38:28'),
	(61, 5, 2, 'a', '2019-06-28 06:43:21', '2019-06-28 06:43:21'),
	(62, 5, 2, 'c', '2019-06-28 06:43:33', '2019-06-28 06:43:33'),
	(63, 5, 2, 'e', '2019-06-28 06:46:13', '2019-06-28 06:46:13'),
	(64, 5, 2, 's', '2019-06-28 06:48:50', '2019-06-28 06:48:50'),
	(65, 5, 2, 'k', '2019-06-28 06:53:18', '2019-06-28 06:53:18'),
	(66, 5, 2, 't', '2019-06-28 06:53:27', '2019-06-28 06:53:27'),
	(67, 5, 2, 'r', '2019-06-28 06:53:33', '2019-06-28 06:53:33'),
	(68, 5, 2, 'd', '2019-06-28 06:53:47', '2019-06-28 06:53:47'),
	(69, 1, 2, 'df', '2019-06-28 06:55:02', '2019-06-28 06:55:02'),
	(70, 1, 2, 'df', '2019-06-28 06:55:07', '2019-06-28 06:55:07'),
	(71, 1, 2, 'e', '2019-06-28 06:55:12', '2019-06-28 06:55:12'),
	(72, 1, 2, 'w', '2019-06-28 06:55:15', '2019-06-28 06:55:15'),
	(73, 5, 2, 'zz', '2019-06-28 06:57:36', '2019-06-28 06:57:36'),
	(74, 5, 2, 'aq', '2019-06-28 06:57:42', '2019-06-28 06:57:42'),
	(75, 5, 2, 'df', '2019-06-28 07:01:32', '2019-06-28 07:01:32'),
	(76, 5, 2, 'q', '2019-06-28 07:01:40', '2019-06-28 07:01:40'),
	(77, 5, 2, 'a', '2019-06-28 07:01:53', '2019-06-28 07:01:53'),
	(78, 5, 2, 'w', '2019-06-28 07:02:01', '2019-06-28 07:02:01'),
	(79, 5, 2, 'q', '2019-06-28 07:02:17', '2019-06-28 07:02:17'),
	(80, 5, 2, 'e', '2019-06-28 07:02:44', '2019-06-28 07:02:44'),
	(81, 5, 2, 'z', '2019-06-28 07:04:36', '2019-06-28 07:04:36'),
	(82, 1, 2, 'tyest', '2019-06-28 07:23:02', '2019-06-28 07:23:02'),
	(83, 5, 2, 'rrrrr', '2019-06-28 07:25:33', '2019-06-28 07:25:33'),
	(84, 1, 2, 's', '2019-06-28 07:26:56', '2019-06-28 07:26:56'),
	(85, 5, 2, 'r', '2019-06-28 07:27:02', '2019-06-28 07:27:02'),
	(86, 5, 1, 'g', '2019-06-28 07:35:33', '2019-06-28 07:35:33'),
	(87, 1, 1, 'dsfds', '2019-06-28 07:36:53', '2019-06-28 07:36:53'),
	(88, 1, 2, 'dsfds', '2019-06-28 07:37:55', '2019-06-28 07:37:55'),
	(89, 1, 2, 'a', '2019-06-28 07:38:00', '2019-06-28 07:38:00'),
	(90, 1, 2, 'd', '2019-06-28 07:44:10', '2019-06-28 07:44:10'),
	(91, 1, 1, 'e', '2019-06-28 07:44:26', '2019-06-28 07:44:26'),
	(92, 1, 1, 's', '2019-06-28 07:52:35', '2019-06-28 07:52:35'),
	(93, 1, 2, 'hi', '2019-06-28 08:07:23', '2019-06-28 08:07:23'),
	(94, 5, 2, 'hui', '2019-06-28 08:07:42', '2019-06-28 08:07:42'),
	(95, 1, 2, 'ji', '2019-06-28 08:07:46', '2019-06-28 08:07:46'),
	(96, 1, 1, 'gfdg', '2019-06-28 11:11:57', '2019-06-28 11:11:57'),
	(97, 1, 1, 'eee', '2019-06-28 11:12:07', '2019-06-28 11:12:07'),
	(98, 1, 1, 'zzzzzzzzzzzz', '2019-06-28 11:26:34', '2019-06-28 11:26:34'),
	(99, 1, 2, 'za', '2019-06-28 12:55:40', '2019-06-28 12:55:40');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table medcare.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_05_07_100025_create_clients_table', 2),
	(8, '2019_05_07_102724_add_extra_columns_to_clients_table', 3),
	(12, '2019_05_08_095628_create_work_queues_table', 4),
	(13, '2019_06_21_115345_create_summary_reports_table', 5),
	(14, '2019_06_25_104932_create_messages_table', 6);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table medcare.summary_reports: ~2 rows (approximately)
/*!40000 ALTER TABLE `summary_reports` DISABLE KEYS */;
REPLACE INTO `summary_reports` (`id`, `work_queue_id`, `provider_report`, `patient_report`, `created_at`, `updated_at`) VALUES
	(2, 1, '&lt;p&gt;Mr. Dr. Strange, pls review the following recommendations and provide your response to the recommendations fax to 800 555-5555&lt;/p&gt; &lt;h6&gt;Recommendation 1&lt;/h6&gt; &lt;div&gt; &lt;ul&gt; &lt;li&gt;Renal Dose Adjustment&lt;/li&gt; &lt;li&gt;Medication Duplication&lt;/li&gt; &lt;/ul&gt; &lt;/div&gt; &lt;h6&gt;Medication&lt;/h6&gt; &lt;p&gt;Venlafaxine 75mg XR, Take 1 tab by mouth before brekfast venlafaxine 225mg, take 1 tab by mouth before breakfast.&lt;/p&gt; &lt;h6&gt;Assessment&lt;/h6&gt; &lt;p&gt;Patient is taking total dose of 300mg/dy, but maximum daily dose is 225 mg. This medication also requires renal adjusment for CrCI 10-70 (Patient estimated Cr CI(Cockcroft-Gault):50.5 mL/min) requires a reduction of total daily doe by 25-50%.&lt;/p&gt; &lt;h6&gt;Plan&lt;/h6&gt; &lt;p&gt;Please consider reducing daily dose and renal adjusting this medicine.&lt;/p&gt; &lt;h6&gt;References&lt;/h6&gt; &lt;p&gt;Lexicomp&lt;/p&gt; &lt;h6&gt;Provider Response&lt;/h6&gt; &lt;p&gt;Provide Initials and (Yes/No) or explanation&lt;/p&gt;', '&lt;p&gt;Ms. Dr. Strange, pls review the following recommendations and provide your response\n										to\n										the recommendations fax to 800 555-5555&lt;/p&gt;\n									\n									&lt;h6&gt;Recommendation 1&lt;/h6&gt;\n									\n									&lt;div&gt;\n										&lt;ul&gt;\n											&lt;li&gt;Renal Dose Adjustment&lt;/li&gt;\n											&lt;li&gt;Medication Duplication&lt;/li&gt;\n										&lt;/ul&gt;\n									&lt;/div&gt;\n									\n									&lt;h6&gt;Medication&lt;/h6&gt;\n									&lt;p&gt;Venlafaxine 75mg XR, Take 1 tab by mouth before brekfast venlafaxine 225mg, take\n										1\n										tab by mouth before breakfast.&lt;/p&gt;\n									\n									&lt;h6&gt;Assessment&lt;/h6&gt;\n									&lt;p&gt;Patient is taking total dose of 300mg/dy, but maximum daily dose is 225 mg. This\n										medication also requires renal adjusment for CrCI 10-70 (Patient estimated Cr\n										CI(Cockcroft-Gault):50.5 mL/min) requires a reduction of total daily doe by\n										25-50%.&lt;/p&gt;\n									\n									&lt;h6&gt;Plan&lt;/h6&gt;\n									&lt;p&gt;Please consider reducing daily dose and renal adjusting this medicine.&lt;/p&gt;\n									\n									&lt;h6&gt;References&lt;/h6&gt;\n									&lt;p&gt;Lexicomp&lt;/p&gt;\n									\n									&lt;h6&gt;Provider Response&lt;/h6&gt;\n									&lt;p&gt;Provide Initials and (Yes/No) or explanation&lt;/p&gt;', '2019-06-24 08:35:50', '2019-06-28 12:56:55'),
	(3, 2, 'dd', NULL, '2019-06-28 13:14:57', '2019-06-28 13:14:57');
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
	(1, 'user1', NULL, 'siva', 'siva@sqindia.net', 'siva ID', '$2y$10$nWOkkfUx/z0OtIsejWW35uBcJURDPD7L/553tTZcnKlUSN4a5eOkG', '2019-05-01', '2019-10-31', 'admin', '1', NULL, '2019-06-18 11:45:12', 'zgPUhCDVqLoaOKgHkKmsctvqklKJTWfnz44xf2f17cZEGEb5pty1HZFPD35Q', NULL, '2019-06-18 11:45:12'),
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
