-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 07:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percobaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `icon_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `r` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `u` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `d` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `slug`, `role_id`, `icon_menu`, `c`, `r`, `u`, `d`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menu', 'menu', 1, NULL, 'N', 'Y', 'N', 'Y', '2021-09-11 12:26:30', '2021-09-11 12:26:30', NULL),
(2, 'Menu', 'menu', 2, NULL, 'Y', 'Y', 'Y', 'Y', '2021-09-11 12:41:10', '2021-09-11 12:41:10', NULL),
(3, 'Dashboard', 'beranda', 1, 'mdi mdi-airplay', 'N', 'N', 'Y', 'N', '2021-09-11 13:02:40', '2021-09-12 04:51:25', NULL),
(4, 'Item', 'item', 1, 'mdi mdi-package', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:06:07', '2021-09-12 04:56:18', NULL),
(5, 'Curriculum Vitae', 'curriculum', 1, 'mdi mdi-paperclip', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:06:57', '2021-09-12 05:30:32', NULL),
(6, 'Dashboard', 'beranda', 2, 'mdi mdi-airplay', 'N', 'N', 'Y', 'N', '2021-09-11 13:09:00', '2021-09-12 04:49:57', NULL),
(7, 'Item', 'item', 2, 'mdi mdi-package', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:09:21', '2021-09-12 04:56:05', NULL),
(8, 'Curriculum Vitae', 'curriculum', 2, 'mdi mdi-paperclip', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:10:08', '2021-09-12 05:30:23', NULL),
(9, 'Transaksi', 'transaksi', 2, 'mdi mdi-beaker-check-outline', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:10:36', '2021-09-12 05:31:51', NULL),
(10, 'Tiket', 'tiket', 2, NULL, 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:10:51', '2021-09-11 13:10:51', NULL),
(11, 'Testimoni', 'testimoni', 2, 'mdi mdi-nature-people', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:11:19', '2021-09-12 05:34:52', NULL),
(12, 'Portal', 'portal', 2, 'mdi mdi-circle-double', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:11:31', '2021-09-12 05:33:37', NULL),
(13, 'Kategori', 'kategori', 2, NULL, 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:12:57', '2021-09-11 13:12:57', NULL),
(14, 'Maintenance', 'maintenance', 2, NULL, 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:13:12', '2021-09-11 13:13:12', NULL),
(15, 'Akses', 'akses_pengguna', 2, 'mdi mdi-key-link', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:13:37', '2021-09-12 05:37:40', NULL),
(16, 'Pengguna', 'pengguna', 2, 'dripicons-user-group', 'Y', 'Y', 'Y', 'Y', '2021-09-11 13:13:58', '2021-09-12 05:36:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_kategori`
--

CREATE TABLE `menu_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_kategori`
--

INSERT INTO `menu_kategori` (`id`, `menu_kategori`, `menu_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aplikasi', 6, '2021-09-11 15:14:52', '2021-09-11 15:14:52', NULL),
(2, 'Aplikasi', 7, '2021-09-11 15:17:48', '2021-09-11 15:17:48', NULL),
(3, 'Aplikasi', 8, '2021-09-11 15:17:55', '2021-09-11 15:17:55', NULL),
(4, 'Aplikasi', 9, '2021-09-11 15:18:05', '2021-09-11 15:18:05', NULL),
(5, 'Frontend', 11, '2021-09-11 15:18:36', '2021-09-11 15:18:36', NULL),
(6, 'Frontend', 12, '2021-09-11 15:18:43', '2021-09-11 15:18:43', NULL),
(7, 'Fitur Admin', 13, '2021-09-11 15:18:59', '2021-09-11 15:18:59', NULL),
(8, 'Fitur Admin', 2, '2021-09-11 15:19:23', '2021-09-11 15:19:23', NULL),
(9, 'Fitur Admin', 14, '2021-09-11 15:19:35', '2021-09-11 15:19:35', NULL),
(10, 'Fitur Admin', 15, '2021-09-11 15:19:51', '2021-09-11 15:19:51', NULL),
(11, 'Fitur Admin', 16, '2021-09-11 15:20:00', '2021-09-11 15:20:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_kategori`
--
ALTER TABLE `menu_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_kategori_menu_id_foreign` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_kategori`
--
ALTER TABLE `menu_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_kategori`
--
ALTER TABLE `menu_kategori`
  ADD CONSTRAINT `menu_kategori_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
