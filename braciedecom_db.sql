-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `braciedecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', '1', '2023-08-01 09:53:14', '2023-09-04 16:02:40'),
(2, 'Meat', '1', '2024-05-01 19:40:24', '2024-05-01 19:40:24'),
(3, 'Gaming', '1', '2023-08-01 09:53:14', '2023-09-04 16:02:40'),
(4, 'Digital ELectronics', '1', '2024-05-01 19:40:24', '2024-05-01 19:40:24'),
(5, 'Clothing', '1', '2024-05-01 19:40:24', '2024-05-01 19:40:24'),
(6, 'Pet Care', '1', '2024-05-01 19:40:24', '2024-05-01 19:40:24'),
(7, 'jewelry', '1', '2024-05-01 19:40:24', '2024-05-01 19:40:24'),
(8, 'Kitchen Essentials', '1', '2024-05-01 19:40:24', '2024-05-01 19:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(17, '2024_05_01_191334_create_category_table', 2),
(18, '2024_05_01_191350_create_user_product_table', 2),
(19, '2024_05_01_191301_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `weight`, `product_price`, `sales`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Colorful Stylish Shirt', 1, 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'shirt.jpg', '0.5 gm', 720, 1, '1', '2023-09-04 16:02:40', '2024-05-01 19:58:02'),
(2, 'Apple', 1, 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'apple.jpg', '1 kg', 320, 1, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(3, 'Beef', 2, 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'beef.jpg', '1 gm', 1000, 1, '1', '2023-09-04 16:02:40', '2024-05-01 19:58:02'),
(4, 'Game console', 3, 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'game.jpg', '0.5 kg', 2000, 1, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(5, 'Camera', 4, 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'camera.jpg', '0.5 kg', 2000, 1, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(6, 'Cat food original', 6, 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'pet.jpg', '0.5 kg', 1200, 1, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shantana mirdha', 'shantanamirdha2016@gmail.com', '2024-05-01 18:20:13', '$2y$10$.FN2jKIJ1Glohw9azQkjlOFuDC.rUWSvHLb9l5nntyTjV.mVpeMPK', 'sec 11 uttara', 'admin', NULL, '2024-05-01 14:32:46', '2024-05-01 14:32:46'),
(2, 'Maruf Prodhann', 'shantanamirdha.ruet.cse@gmail.com', '2024-05-01 18:20:13', '$2y$10$WsIJx0XbF1lhgVSqUo7.buhb5jHRgbJXaOt9rofEGRzwI7aBqf.d2', '12 kajla gate, vodra,Rajshahi', 'user', 'anvhobsEYdWBHKHRzvlSJYZaQShNGMDs5jzifQGHcNhodHQ6Ov9IQSQTUhZg', '2024-05-01 14:35:08', '2024-05-01 14:35:08'),
(3, 'Aboni Kundu', 'abonikundu@gmail.com', '2024-05-01 18:18:32', '$2y$10$8./7QTFHTNagrCc767CvQuuUlXPlxr0rG6yIm1D3sG0.HYBF38lg.', 'Luxmibazar , dhaka-1100', 'user', NULL, '2024-05-01 14:36:55', '2024-05-01 14:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `user_product_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_product`
--

INSERT INTO `user_product` (`user_product_id`, `product_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0', '2023-09-04 16:02:40', '2023-08-27 17:20:29'),
(2, 1, 2, '0', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(3, 1, 1, '0', '2023-09-04 16:02:40', '2023-08-27 17:20:29'),
(4, 1, 2, '0', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(5, 1, 3, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(6, 2, 1, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(7, 2, 6, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(8, 2, 4, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(9, 3, 1, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01'),
(10, 3, 2, '1', '2024-05-01 19:40:24', '2024-04-30 20:14:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_product`
--
ALTER TABLE `user_product`
  ADD PRIMARY KEY (`user_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_product`
--
ALTER TABLE `user_product`
  MODIFY `user_product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
