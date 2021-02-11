-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 08:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_models`
--

CREATE TABLE `app_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_models`
--

INSERT INTO `app_models` (`id`, `surname`, `firstname`, `nic`, `mobile`, `email`, `qualification`, `experience`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Edirisinghe', 'Vihanga', '967455223V', '0761212123', 'v@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 05:26:11', '2021-02-10 05:26:11'),
(2, 'Wijesinghe', 'Shakya', '976545632V', '0781212678', 'sh@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 05:59:27', '2021-02-10 05:59:27'),
(4, 'Herath', 'Kushani', '956800994V', '0776512345', 'kushani@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 06:56:11', '2021-02-10 06:56:11'),
(6, 'Wijerathne', 'Kiyashu', '943434223V', '0764453430', 'kiyashu@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 06:58:54', '2021-02-10 06:58:54'),
(10, 'Bandara', 'Jeewantha', '945566112V', '0765577872', 'jee@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 07:46:48', '2021-02-10 07:46:48'),
(12, 'Herath', 'Deshani', '976545630V', '0786677212', 'desh@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 07:49:46', '2021-02-10 07:49:46'),
(13, 'Jayasinghe', 'Dasuni', '968866112V', '0712356782', 'dasu@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 07:54:09', '2021-02-10 07:54:09'),
(15, 'Amaradiwakara', 'Gayesh', '968822335V', '0326688712', 'g@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 07:59:06', '2021-02-10 07:59:06'),
(16, 'Amaradiwakara', 'Gayesh', '967888781V', '0326688712', 'g@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 08:03:54', '2021-02-10 08:03:54'),
(17, 'Dayawardane', 'silumi', '957788446V', '0775665789', 'silumi@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 10:01:26', '2021-02-10 10:01:26'),
(18, 'Gamage', 'Gangani', '961123345V', '0774235179', 'gangani@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 10:43:46', '2021-02-10 10:43:46'),
(19, 'Gamage', 'Gangani', '965544552V', '0774235179', 'gangani@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 10:45:05', '2021-02-10 10:45:05'),
(20, 'Kumari', 'Gayani', '997855663V', '0785572236', 'Gayanikumari@gmail.com', 'BSc in Computer Science- 2nd Class Lower- University of Colombo- 2015', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 11:50:31', '2021-02-10 11:50:31'),
(21, 'Kumari', 'Gayani', '989999992V', '+10785572236', 'Gayanikumari@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 11:57:03', '2021-02-10 11:57:03'),
(22, 'Kumari', 'Gayani', '997878885V', '+10785572236', 'Gayanikumari@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 11:59:10', '2021-02-10 11:59:10'),
(24, 'Kumari', 'Gayani', '998977445V', '+10785572236', 'Gayanikumari@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 12:00:46', '2021-02-10 12:00:46'),
(25, 'Kumari', 'Inali', '987878781V', '0712344466', 'inali@gmail.com', 'BSc in Computer Science- 1St Class- University of Moratuwa- 2020', 'Company Name - Software Engineer- 2017 to 2020', NULL, '2021-02-10 12:02:32', '2021-02-10 12:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_10_055930_create_app_models_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_models`
--
ALTER TABLE `app_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `app_models_nic_unique` (`nic`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_models`
--
ALTER TABLE `app_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
