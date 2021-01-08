-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 05:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datn_mb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `seat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `name`, `type`, `seat`, `created_at`, `updated_at`) VALUES
(1, 'Lab 1', 1, 100, NULL, NULL),
(2, 'Lab 2', 1, 100, NULL, NULL),
(3, 'Lab 3', 1, 100, NULL, NULL),
(4, 'Lab 4', 1, 100, NULL, NULL),
(5, 'Lab 5', 0, 50, NULL, NULL),
(6, 'Lab 6', 0, 80, NULL, NULL),
(7, 'Lab 7', 1, 100, NULL, NULL),
(8, 'Lab 8', 1, 100, NULL, NULL),
(9, 'Lab 9', 1, 100, NULL, NULL),
(10, 'Lab 10', 1, 100, NULL, NULL),
(11, 'Lab 11', 1, 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(18, '2016_06_01_000004_create_oauth_clients_table', 1),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2020_07_30_032511_create_labs_table', 1),
(22, '2020_12_23_041009_create_seats_table', 1),
(23, '2020_12_23_041420_create_times_table', 1),
(24, '2020_12_23_041421_create_registrations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `seat_id` bigint(20) UNSIGNED NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `user_id`, `seat_id`, `time_in`, `time_out`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-01-08 01:54:00', '2021-01-08 03:55:00', 1, '2021-01-07 09:52:25', '2021-01-07 09:52:25'),
(2, 2, 46, '2021-01-08 13:55:00', '2021-01-08 15:59:00', 1, '2021-01-07 09:53:25', '2021-01-07 09:53:25'),
(3, 2, 47, '2021-01-09 06:41:00', '2021-01-09 07:42:00', 1, '2021-01-07 12:38:01', '2021-01-07 12:38:01'),
(4, 2, 47, '2021-01-10 05:48:00', '2021-01-10 06:48:00', 1, '2021-01-07 12:52:02', '2021-01-07 12:52:02'),
(5, 2, 51, '2021-01-12 04:55:00', '2021-01-12 07:57:00', 1, '2021-01-07 12:53:05', '2021-01-07 12:53:05'),
(6, 3, 52, '2021-01-12 04:55:00', '2021-01-12 07:57:00', 0, '2021-01-07 12:53:06', '2021-01-07 12:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `lab_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `name`, `lab_id`, `created_at`, `updated_at`) VALUES
(1, 'a0', 1, NULL, NULL),
(2, 'a1', 1, NULL, NULL),
(3, 'a2', 1, NULL, NULL),
(4, 'a3', 1, NULL, NULL),
(5, 'a4', 1, NULL, NULL),
(6, 'a5', 1, NULL, NULL),
(7, 'a6', 1, NULL, NULL),
(8, 'a7', 1, NULL, NULL),
(9, 'a8', 1, NULL, NULL),
(10, 'a9', 1, NULL, NULL),
(11, 'a10', 1, NULL, NULL),
(12, 'a11', 1, NULL, NULL),
(13, 'a12', 1, NULL, NULL),
(14, 'a13', 1, NULL, NULL),
(15, 'B0', 1, NULL, NULL),
(16, 'B1', 1, NULL, NULL),
(17, 'B2', 1, NULL, NULL),
(18, 'B3', 1, NULL, NULL),
(19, 'B4', 1, NULL, NULL),
(20, 'B5', 1, NULL, NULL),
(21, 'B6', 1, NULL, NULL),
(22, 'B7', 1, NULL, NULL),
(23, 'B8', 1, NULL, NULL),
(24, 'B9', 1, NULL, NULL),
(25, 'B10', 1, NULL, NULL),
(26, 'B11', 1, NULL, NULL),
(27, 'B12', 1, NULL, NULL),
(28, 'B13', 1, NULL, NULL),
(29, 'C0', 1, NULL, NULL),
(30, 'C1', 1, NULL, NULL),
(31, 'C2', 1, NULL, NULL),
(32, 'C3', 1, NULL, NULL),
(33, 'C4', 1, NULL, NULL),
(34, 'C5', 1, NULL, NULL),
(35, 'C6', 1, NULL, NULL),
(36, 'C7', 1, NULL, NULL),
(37, 'C8', 1, NULL, NULL),
(38, 'C9', 1, NULL, NULL),
(39, 'C10', 1, NULL, NULL),
(40, 'C11', 1, NULL, NULL),
(41, 'C12', 1, NULL, NULL),
(42, 'C13', 1, NULL, NULL),
(43, 'D0', 1, NULL, NULL),
(44, 'D1', 1, NULL, NULL),
(45, 'D2', 1, NULL, NULL),
(46, 'D3', 1, NULL, NULL),
(47, 'D4', 1, NULL, NULL),
(48, 'D5', 1, NULL, NULL),
(49, 'D6', 1, NULL, NULL),
(50, 'D7', 1, NULL, NULL),
(51, 'D8', 1, NULL, NULL),
(52, 'D9', 1, NULL, NULL),
(53, 'D10', 1, NULL, NULL),
(54, 'D11', 1, NULL, NULL),
(55, 'D12', 1, NULL, NULL),
(56, 'D13', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `time_in` int(11) NOT NULL,
  `time_out` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mssv` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mssv`, `email`, `phone`, `email_verified_at`, `password`, `role`, `sex`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bùi Thị Mến', '20132674', 'namnguyen20132674@gmail.com', '0848384333', NULL, '$2y$10$Ae5Kze3NNfnWza2ukjR1i.ZRAmQiS9nhdDddIQcFO5djfpTi/8Sb2', 1, 1, NULL, NULL, NULL),
(2, 'Bùi Thị Mến', '20166461', 'menbt@gmail.com', '0842829222', NULL, '$2y$10$/g3//B7YxvAorXYI4IUI6e6/9hZVYHvqiEnPefqTUpE6C73w4jhkC', 0, 0, NULL, NULL, NULL),
(3, 'Bùi Thị Nam', '20166462', 'menbt2@gmail.com', '0123456789', NULL, '$2y$10$iJ/bw0h/bZKar08N3NWokOgckHAZ/wtMEGnxy1sVMKlRghCY2u4m2', 0, 0, NULL, '2021-01-07 12:45:35', '2021-01-07 12:45:35'),
(4, 'Nguyễn Văn A', '20166460', '20166460@sis.hust.edu.vn', '1', NULL, '$2y$10$hN4DVJJsAwT0IYafM2W9Med4Dbxn8RkV07NWilHfWZtVGHFZID5jm', 0, 1, NULL, '2021-01-07 21:06:33', '2021-01-07 21:06:33'),
(6, 'Nguyễn Văn B', '20166463', '20166463@sis.hust.edu.vn', '3', NULL, '$2y$10$IwUtyCBXBBIJ0yDnKE.1WuLrWUI7rlYsrvHFXJK53LTvKb0V158Pi', 0, 1, NULL, '2021-01-07 21:07:59', '2021-01-07 21:07:59'),
(7, 'Nguyễn Văn C', '20166464', '20166464@sis.hust.edu.vn', '4', NULL, '$2y$10$Y09DUcAp5Wp2StrJ1QmCSeuF4AAkENifxikhoJIQM6R/3lMSpwsfO', 0, 1, NULL, '2021-01-07 21:08:28', '2021-01-07 21:08:28'),
(8, 'Nguyễn Văn D', '20166465', '20166465@sis.hust.edu.vn', '5', NULL, '$2y$10$VrZxAVUXyZ4WaqIrOpvceefOMTjSuVIFx.T7RfRRkJhUWMFsFH5/i', 0, 1, NULL, '2021-01-07 21:09:01', '2021-01-07 21:09:01'),
(9, 'Nguyễn Văn E', '20166466', '20166466@sis.hust.edu.vn', '6', NULL, '$2y$10$VyHprAWymi1djSIeqHEze.ps/e3DI5MJ7zRdAFosWlBZvTTfxxifa', 0, 1, NULL, '2021-01-07 21:09:37', '2021-01-07 21:09:38'),
(10, 'Nguyễn Văn F', '20166467', '20166467@sis.hust.edu.vn', '7', NULL, '$2y$10$L.sc41EduxI9kYfwRT4mTOjz424Y4xBTVAQ6CFjlWTkXjPuaUCwlK', 0, 1, NULL, '2021-01-07 21:10:26', '2021-01-07 21:10:26'),
(11, 'Nguyễn Văn G', '20166468', '20166468@sis.hust.edu.vn', '8', NULL, '$2y$10$x0vgOTu2dSTJAV3Z1uIK8.wUpTbRGxwaOlzz4IL3CM5Oy.98w7a4e', 0, 1, NULL, '2021-01-07 21:11:05', '2021-01-07 21:11:05'),
(12, 'Nguyễn Văn H', '20166469', '20166469@sis.hust.edu.vn', '9', NULL, '$2y$10$WPzbY1/F0YrpRmtPUuooG.UddUWOoZnbFUu3AxflfuhLtDEoXKX6K', 0, 1, NULL, '2021-01-07 21:11:51', '2021-01-07 21:11:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registrations_user_id_foreign` (`user_id`),
  ADD KEY `registrations_seat_id_foreign` (`seat_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seats_lab_id_foreign` (`lab_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mssv_unique` (`mssv`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registrations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_lab_id_foreign` FOREIGN KEY (`lab_id`) REFERENCES `labs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
