-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2021 at 05:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_consultation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `schedule_id`, `email`, `created_at`, `updated_at`) VALUES
(2, 2, 'SecondEmail@gmail.com', '2021-12-07 01:07:53', '2021-12-07 01:07:53'),
(3, 1, 'Another@gmail.com', '2021-12-07 01:08:26', '2021-12-07 01:08:26'),
(4, 2, 'ggness@gmail.coms', '2021-12-07 01:09:07', '2021-12-07 01:09:07'),
(5, 3, 'Scchedddule1@gmail', '2021-12-07 01:11:54', '2021-12-07 01:11:54'),
(6, 3, 'Scchedddule2@gmail', '2021-12-07 01:12:01', '2021-12-07 01:12:01'),
(7, 1, 'silas@dwebsite.net', '2021-12-08 07:32:32', '2021-12-08 07:32:32'),
(8, 1, 'dwc.fs.dummy@gmail.com', '2021-12-08 18:40:21', '2021-12-08 18:40:21'),
(9, 1, 'dwc.fs.dummy@gmail.com', '2021-12-08 18:42:04', '2021-12-08 18:42:04'),
(11, 4, 'dwc.fs.dummy2@gmail.com', '2021-12-08 19:26:17', '2021-12-08 19:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 3),
(36, '2014_10_12_100000_create_password_resets_table', 3),
(37, '2019_08_19_000000_create_failed_jobs_table', 3),
(38, '2021_07_09_162951_create_roles_table', 3),
(39, '2021_07_09_164945_add_role_id_to_users_table', 3),
(40, '2021_11_29_043658_create_schedules_table', 3),
(41, '2021_12_05_160013_create_bookings_table', 3),
(34, '2021_12_07_090406_rename_bookings_table', 2),
(42, '2021_12_08_160518_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bookings@gmail.com', '$2y$10$N/byaiBeWD6rA7P44qDNrO4CjdlMblpptwNVlkS5wfid083ptcJMi', '2021-12-07 06:13:33'),
('ggness@gmail.com', '$2y$10$hzyHCMp.n1uUS2qWo3zD5OljxfcxPbC83fPVBTzmHSCv0SN.aLCyG', '2021-12-09 05:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `start_time` int(10) UNSIGNED NOT NULL,
  `end_time` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `title`, `user_id`, `start_time`, `end_time`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Schedule one', 1, 1, 2, '2021-12-07', '2021-12-07 01:07:14', '2021-12-07 01:07:14'),
(2, 'Schedule Two', 1, 3, 3, '2021-12-07', '2021-12-07 01:07:26', '2021-12-07 01:07:26'),
(3, 'New Scchedd', 2, 1, 1, '2021-12-07', '2021-12-07 01:11:46', '2021-12-07 01:11:46'),
(4, 'Book my consultation schedule (URGENT)', 3, 1, 2, '2021-12-09', '2021-12-08 19:25:50', '2021-12-08 19:25:50'),
(5, 'New booking', 3, 1, 2, '2021-12-09', '2021-12-08 20:56:06', '2021-12-08 20:56:06'),
(6, 'This is new', 3, 1, 2, '2021-12-09', '2021-12-08 21:00:53', '2021-12-08 21:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'ggness', 'ggness@gmail.com', NULL, '$2y$10$xoLXwpsNG8TlMmESjWXWAeNeME6aGoGn97kAMMOLHQLfMBzAp4yo6', NULL, '2021-12-07 01:07:06', '2021-12-07 01:07:06', 1),
(2, 'bookings', 'dwc.fs.dummy05@gmail.com', NULL, '$2y$10$zcOPehm6ZZY/.Ec.a7Lhk.1SB9z1YCnix4kQAIjS7m4pFJ0qeknxm', NULL, '2021-12-07 01:11:40', '2021-12-07 01:11:40', 1),
(3, 'Reinhard Admin', 'dwc.fs.dummy4@gmail.com', NULL, '$2y$10$NOfQo.A48He7q6bvncdgNuwQv5EP/Jllhus7bm9Hfv0CV8agKTFo.', NULL, '2021-12-08 19:24:56', '2021-12-08 19:24:56', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
