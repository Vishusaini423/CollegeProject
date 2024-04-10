-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_meal`
--

CREATE TABLE `book_meal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_meal`
--

INSERT INTO `book_meal` (`id`, `name`, `email`, `mobile`, `landmark`, `dish_name`, `quantity`, `address`, `created_at`, `updated_at`) VALUES
(1, 'VISHU', '22@gmail.com', 1234567890, 'wsedfghjk', 'wedfghnjm', 12345, 'sdfgbhnjm', '2024-02-24 20:55:17', '2024-02-24 20:55:17'),
(2, 'Vishu Saini', 'vishusaini423@gmail.com', 9149063808, 'Gol chakkar se right', 'Pizza', 2, 'Flat no.51 C, Picasso Floors , Landran Road', '2024-02-24 20:56:10', '2024-02-24 20:56:10'),
(4, 'Vishu Saini', 'vishusaini424@gmail.com', 9149063808, 'Gol chakkar se right', 'Pizza', 2, 'Flat no.51 C, Picasso Floors , Landran Road', '2024-02-24 20:58:36', '2024-02-24 20:58:36'),
(5, 'Abhinav Chaudhary', 'abhinav83600@gmail.com', 8360085972, 'Straight from the entry gate', 'Butter Chicken', 1, 'Flat no.27 B, Picasso Floors , Landran Road', '2024-02-24 21:01:49', '2024-02-24 21:01:49'),
(6, 'Aditya Joshi', 'adi4792@gmail.com', 9911576140, '3rd flat from the main gate', 'Cheese Roll', 2, 'Flat no. 3A , Amari Greens', '2024-02-24 21:03:33', '2024-02-24 21:03:33'),
(7, 'Vishu Saini', 'vishusaini423@gmail.com', 9149063808, 'Near Banyan Tree', 'Sweets', 2, 'H No. 4 ,', '2024-02-27 10:08:56', '2024-02-27 10:08:56'),
(8, 'Gunjan Saini', 'gunjan.saini010@gmail.com', 9520362684, 'Tagore A', 'Pizza', 2, 'Roorkee, Haridwar', '2024-03-14 08:54:24', '2024-03-14 08:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `created_at`, `updated_at`) VALUES
(19, 2, 28, NULL, NULL),
(20, 2, 29, NULL, NULL),
(21, 2, 28, NULL, NULL),
(22, 2, 27, NULL, NULL),
(23, 2, 21, NULL, NULL),
(24, 2, 21, NULL, NULL),
(26, 2, 20, NULL, NULL),
(27, 2, 27, NULL, NULL),
(28, 2, 28, NULL, NULL),
(29, 2, 21, NULL, NULL),
(30, 2, 20, NULL, NULL),
(31, 2, 10, NULL, NULL),
(32, 2, 20, NULL, NULL),
(33, 2, 19, NULL, NULL),
(34, 2, 11, NULL, NULL),
(35, 2, 19, NULL, NULL),
(36, 2, 19, NULL, NULL),
(37, 2, 2, NULL, NULL),
(39, 2, 20, NULL, NULL),
(40, 2, 20, NULL, NULL),
(41, 2, 19, NULL, NULL),
(42, 2, 19, NULL, NULL),
(43, 2, 19, NULL, NULL),
(44, 2, 2, NULL, NULL),
(45, 2, 28, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Sweets', 'Sweets.jpg', '2024-02-28 09:12:04', '2024-02-28 09:12:04'),
(3, 'Snacks', 'Snacks.jpg', '2024-02-28 09:15:02', '2024-02-28 09:15:02'),
(4, 'Chinese', 'Chinese.jpg', '2024-02-28 09:53:41', '2024-02-28 09:53:41'),
(5, 'Main Course', 'main_course.jpg', '2024-02-28 09:53:49', '2024-02-28 09:53:49'),
(8, 'South Indian', '1709202386_South_indian.jpg', '2024-02-29 10:26:26', '2024-02-29 10:26:26'),
(9, 'Paneer', '1709203997_paneer1.jpg', '2024-02-29 10:53:18', '2024-02-29 10:53:18'),
(10, 'Shakes', '1709205426_shakes.jpg', '2024-02-29 11:17:06', '2024-02-29 11:17:06'),
(11, 'Chicken', '1709205488_chicken.jpg', '2024-02-29 11:18:08', '2024-02-29 11:18:08'),
(14, 'Rolls', '1709205679_rolls.jpg', '2024-02-29 11:21:19', '2024-02-29 11:21:19'),
(15, 'Briyani', '1709205955_briyani.jpg', '2024-02-29 11:25:55', '2024-02-29 11:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcat_id` bigint(20) UNSIGNED NOT NULL,
  `cost_type` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category_id`, `subcat_id`, `cost_type`, `name`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '/kg', 'White Rasgulla', '240/kg', '220', NULL, NULL),
(2, 1, 1, '/kg', 'Kaju Katli', '700/kg', '660', NULL, NULL),
(3, 1, 3, '/kg', 'Gulab Jamub', '220/kg', '200', NULL, NULL),
(4, 1, 1, '/kg', 'Besan Burfi', '200/kg', '180', NULL, NULL),
(5, 1, 1, '/kg', 'Mava Burfi', '240/kg', '240', NULL, NULL),
(6, 4, 2, '/plate', 'Boiled Momos', '80/plate', '70', NULL, NULL),
(7, 1, 1, '/kg', 'Rava Burfi', '400/kg', '350', NULL, NULL),
(8, 1, 1, '/kg', 'Coconut Burfi', '380/kg', '360', NULL, NULL),
(9, 1, 1, '/kg', 'chocolate Burfi', '240/kg', '240', NULL, NULL),
(10, 1, 1, '/kg', 'Plain Burfi', '240/kg', '240', NULL, NULL),
(11, 1, 1, '/kg', 'Kalakand', '250/kg', '240', NULL, NULL),
(12, 1, 1, '/kg', 'Badam Burfi', '300/kg', '300', NULL, NULL),
(13, 4, 4, '/plate', 'Chicken Manchurian', '120/plate', '120', NULL, NULL),
(14, 4, 4, '/plate', 'Paneer Manchurian', '100/plate', '100', NULL, NULL),
(15, 4, 4, '/plate', 'Veg Manchurian', '100/plate', '90', NULL, NULL),
(16, 1, 3, '/kg', 'Rasbari', '220/kg', '200', NULL, NULL),
(17, 1, 3, '/kg', 'Cham Cham', '250/kg', '250', NULL, NULL),
(18, 1, 3, '/kg', 'Pistachio Rasgulla', '260/kg', '240', NULL, NULL),
(19, 3, 5, '/plate', 'Mix Pakora', '80', '60', NULL, NULL),
(20, 3, 5, '/kg', 'Paneer pakora', '300', '280', NULL, NULL),
(21, 3, 5, '/peiece', 'Bread Pakora', '15', '15', NULL, NULL),
(22, 4, 2, '/plate', 'Paneer Momos', '110', '100', NULL, NULL),
(23, 4, 2, '/plate', 'Fried Momos', '110', '100', NULL, NULL),
(24, 4, 2, '/plate', 'Tandoori Momos', '120', '120', NULL, NULL),
(25, 4, 2, '/plate', 'Kurkure Momos', '100', '100', NULL, NULL),
(26, 3, 6, '/peiece', 'Cheese Burger', '70', '60', NULL, NULL),
(27, 3, 6, '/peiece', 'Noodle Burger', '60', '50', NULL, NULL),
(28, 3, 6, '/peiece', 'Chicken Burger', '80', '80', NULL, NULL),
(29, 3, 6, '/peiece', 'Classic Burger', '50', '50', NULL, NULL),
(30, 3, 6, '/peiece', 'Veggie Burger', '50', '40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_24_201007_create_book_meal_table', 2),
(7, '2024_02_25_095842_create_users_table', 3),
(8, '2024_02_28_090332_create_categories_table', 4),
(10, '2024_02_29_060103_create_sub_category_table', 5),
(13, '2024_02_29_062554_create_sub_categories_table', 6),
(14, '2024_02_29_085126_create_foods_table', 6),
(16, '2024_04_03_080447_create_carts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Burfi', 'burfi.jpg', NULL, NULL),
(2, 4, 'Momos', '1709207759_momo.jpg', NULL, NULL),
(3, 1, 'Rasgulla', '1709207884_rasgulla.jpg', NULL, NULL),
(4, 4, 'Manchurian', '1709277266_manchurian.jpg', NULL, NULL),
(5, 3, 'Pakora', '1711444602_240_F_364075185_lsW05QGxLrE9skRRLe0KVjUzbouikhXL.jpg', NULL, NULL),
(6, 3, 'Burger', '1711550326_240_F_157743662_YKJEVXytEgPz08DgswRMPQMgv4D6cKL0.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `type`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vishu Saini', 'vishusaini423@gmail.com', '1709033852_export.png', '$2y$12$UR2FOROpwrTJKWSD3PvF5eRO9Ni6XGCXYiaB9Zu4VmsAMiDhuMdVi', 1, NULL, NULL, NULL, NULL),
(2, 'ADITYA JOSHI', 'Adi44@gmail.com', '1709102170_export.png', '$2y$12$ha.8B/UXF0e/Zxf0MV.hkO7SjxukzW4kNsXT8oIqSECTM84pHQ/RC', NULL, NULL, NULL, NULL, NULL),
(3, 'Abhinav Chaudhary', 'abhinav83600@gmail.com', '1709104553_Abhinav_sub_admin.png', '$2y$12$tq6MgnYa9Mr0IebSosElcOzXWtS75H52e.3S4aoI6CgsFMSV8zxN.', 2, NULL, NULL, NULL, NULL),
(7, 'Gunjan Saini', 'gunjan.saini010@gmail.com', '1710405905_IMG-20190217-WA0012.jpg', '$2y$12$uFTiBPVXfN7FkVcj62sATOcWj48eA/FSr9gY9bN5K0C7eKT9aryEO', NULL, NULL, NULL, NULL, NULL),
(8, 'Shakun Payal', 'shakunpayal21@gmail.com', '1710407276_240_F_207035142_mHrOxNNjXlDMMXMpl1Rc3ikHi3CmpeqR.jpg', '$2y$12$ANRaAWBuO3qq4pLkjsnD7.228khjeMXJteCOzb/R6zE2MdcweYQqu', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_meal`
--
ALTER TABLE `book_meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foods_category_id_foreign` (`category_id`),
  ADD KEY `foods_subcat_id_foreign` (`subcat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `book_meal`
--
ALTER TABLE `book_meal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `foods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `foods_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
