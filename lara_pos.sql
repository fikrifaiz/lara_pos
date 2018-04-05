-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 10:05 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(10) UNSIGNED NOT NULL,
  `courier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `courier_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Sandy Nugraha', 'Delivery', '2018-04-03 19:35:08', '2018-04-03 19:35:08'),
(5, 'Tony', 'Pending', '2018-04-04 22:58:58', '2018-04-04 22:58:58'),
(6, 'Danil', 'Delivery', '2018-04-04 23:05:23', '2018-04-04 23:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(11, 'fikri faiz', '087720018161', 'CIANJUR', '2018-04-03 19:34:50', '2018-04-03 19:34:50'),
(12, 'Rian fauzi', '094483472837283', 'CIANJUR', '2018-04-04 23:00:20', '2018-04-04 23:00:20'),
(13, 'Ahmad', '08894734', 'BANDUNG', '2018-04-04 23:06:26', '2018-04-04 23:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(4, 'Nikon D3300 18-55mm vr ii', '1', '5400000', '2018-04-03 19:34:18', '2018-04-03 19:34:18'),
(5, 'Lensa Sigma 18-200 f4 OSS', '1', '9000000', '2018-04-04 22:59:58', '2018-04-04 22:59:58'),
(6, 'Tripod Manfrotto', '4', '2000000', '2018-04-04 23:06:08', '2018-04-04 23:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_04_03_040429_create_customers_table', 1),
('2018_04_03_170204_create_items_table', 2),
('2018_04_03_170716_create_sellers_table', 3),
('2018_04_03_172636_create_items_table', 4),
('2018_04_03_172814_create_orders_table', 4),
('2018_04_03_172932_create_couriers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `item_id`, `seller_id`, `courier_id`, `created_at`, `updated_at`) VALUES
(1, 7, 3, 3, 3, '2018-04-03 11:39:45', '2018-04-03 11:39:45'),
(2, 5, 1, 1, 1, '2018-04-03 12:16:50', '2018-04-03 12:16:50'),
(3, 5, 3, 3, 3, '2018-04-03 12:34:01', '2018-04-03 12:34:01'),
(4, 11, 4, 4, 4, '2018-04-03 19:35:14', '2018-04-03 19:35:14'),
(5, 12, 5, 5, 5, '2018-04-04 23:00:44', '2018-04-04 23:00:44'),
(6, 12, 5, 4, 5, '2018-04-04 23:06:58', '2018-04-04 23:06:58'),
(7, 11, 4, 4, 4, '2018-04-04 23:13:56', '2018-04-04 23:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(10) UNSIGNED NOT NULL,
  `seller_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `seller_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(4, 'witacom', 'witacom@gmail.com', '087720018161', '2018-04-03 19:34:34', '2018-04-03 19:34:34'),
(5, 'tokocamzone', 'camzone@gmail.com', '08763535252121', '2018-04-04 22:59:19', '2018-04-04 22:59:19'),
(6, 'mitra', 'mitra@gmail.com', '083232323223', '2018-04-04 23:05:39', '2018-04-04 23:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'faiz', 'fikrifaiz@gmail.com', '$2y$10$hh53kI3DgzbEN73/PNbkjeCu4thKgXL7JzlpZd4/vX/cY8/sPH/N6', 'jcHRDsBHzCEI34tHRseLZ5oqVLyX05EA9SE42xpfaQ2PI3x0VawihMm0rzLI', '2018-04-02 22:11:39', '2018-04-03 07:31:56'),
(2, 'fikri', 'fikri@gmail.com', '$2y$10$YYYwABGn7AjMICueLLAQWeheKzMmU4acli2gsFO1X5kS.ARTl7GKW', 'hAOoxvOrN8KGOYvUAWDSEGRkJGu7bnnm9784ASSezvKMTRVGHHFPSuXm0jzC', '2018-04-03 19:32:30', '2018-04-03 19:35:17'),
(3, 'korek', 'korek@gmail.com', '$2y$10$KZ.c9HGATG9CzFHS2dLyrudyJ2Zho/0AqabGDLVpwb6mvJhxCijeO', '5G6VGiwc5WKZxpC2a3FS7r0Es9DfAJMaMQgX74PlbR0llWh3y1HtTMjdRHiF', '2018-04-03 20:32:57', '2018-04-04 22:45:52'),
(4, 'ad', 'ad@gmail.com', '$2y$10$Bznt4KJXE5mSs2nmFle/NOlFZxBsWd.LZXPjtxaXuTtcBaAGPLXlK', NULL, '2018-04-03 21:23:00', '2018-04-03 21:23:00'),
(5, 'fafa', 'fafa@gmail.com', '$2y$10$PrpSeENjz4yfvY3xrtPt4OYDgleUmMtBBJObzM2ZXmTI.5IP2vJ/S', '9MsLOPLlTYlQugFzniNSLE96nV5MUEWaorcxHNXS7Nyslt6byHmniG0yuAoY', '2018-04-04 22:57:41', '2018-04-04 23:04:05'),
(6, 'rara', 'rara@gmail.com', '$2y$10$SFf4W/EM8T6HaIwWmaG9HOp5QeUdr7X9AluI/WZstb2M5yoePV0Fa', 'ASBU5AAIaE18CU097WZp4kPpT1CtvoKdzGicVa8RseFhcGDpbfEk7s4CKDsk', '2018-04-04 23:04:39', '2018-04-04 23:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
