-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 01:21 PM
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
-- Database: `falcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `baggage`
--

CREATE TABLE `baggage` (
  `id` int(11) NOT NULL,
  `users_id` bigint(20) DEFAULT NULL,
  `car_id` varchar(256) DEFAULT NULL,
  `pickup_destination` varchar(256) DEFAULT NULL,
  `dropoff_destination` varchar(256) DEFAULT NULL,
  `length` varchar(256) DEFAULT NULL,
  `width` varchar(256) DEFAULT NULL,
  `height` varchar(256) DEFAULT NULL,
  `weight` varchar(256) DEFAULT NULL,
  `distance` varchar(256) DEFAULT NULL,
  `car_price` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baggage`
--

INSERT INTO `baggage` (`id`, `users_id`, `car_id`, `pickup_destination`, `dropoff_destination`, `length`, `width`, `height`, `weight`, `distance`, `car_price`, `created_at`, `updated_at`) VALUES
(3, 34, '11', 'Guildford, UK', 'Hull, UK', '1.53', '2.54', '6.12', '10', '237 mi', '6210.03', '2023-11-03 06:46:15', '2023-11-03 06:55:29'),
(4, 34, '11', 'Glasgow, UK', 'Hyde Park, London, UK', '1.53', '2.54', '6.12', '10', '410 mi', '3153.39', '2023-11-03 06:58:39', '2023-11-06 00:44:54'),
(5, 34, '11', 'Hulberts', '1 Cannon House', '1.53', '2.54', '6.12', '10', '10.5 mi', '97.518', '2023-11-06 06:45:25', '2023-11-06 07:17:33'),
(6, 34, '11', '16 Cannon Street', '4 Glastonbury Crescent', '1.53', '2.54', '6.12', '10', '2.9 mi', '96.75', '2023-11-06 07:18:37', '2023-11-06 07:23:52'),
(7, 34, '11', '7 Cannon Street', 'Flat 30', '1.53', '2.54', '6.12', '10', '10.3 mi', '96.75', '2023-11-06 07:24:47', '2023-11-06 07:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `category` varchar(256) DEFAULT NULL,
  `written_by` varchar(256) DEFAULT NULL,
  `editor` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `category`, `written_by`, `editor`, `created_at`, `updated_at`) VALUES
(5, '/uploads/1699440816.jpg', 'How To Start Initiating An Startup In Few Days.', 'BUSINESS', 'Elliot Alderson', '<p>Financial experts support or help you to to find out which way you can raise your funds more. Arkit a trusted name for providing assistants. Initially their main objective was to ensure the service they provide these people are loyal to their industry, experienced and professional.</p><p>Unless you are the one who really cares about this, it is not terribly important. What all matters are how your hybrid mobile application development is going to work in the long run as no one will care about how it was built.</p>', '2023-11-08 05:53:37', '2023-11-08 06:25:00'),
(6, '/uploads/1699442223.jpg', 'Financial Experts Support Help You To Find Out.', 'STARTUP', 'Elliot Alderson', '<p>There are some big shifts taking place in the field of construction equipment mathematics. Starting with the integration of mathematics devices in vehicles right from the manufacturers, to the standardization and integration of mathematics data across various business functions, the future of mathematics has never seemed so full of potential for fleet-based businesses.</p>', '2023-11-08 06:17:03', '2023-11-08 06:25:09'),
(7, '/uploads/1699442309.jpg', 'Innovative Business All Over The World.', 'FINANCE', 'Elliot Alderson', '<p>Financial experts support or help you to to find out which way you can raise your funds more. Arkit is a trusted name for providing assistants. Initially, their main objective was to ensure the service they provide these people are loyal to their industry, experienced, and professional.</p><p>Another speaker, John Meuse, senior director of heavy equipment at Waste Management Inc., echoed this, citing a cost-saving of $17,000 for the company when it cut the idling time of a single Caterpillar 966 wheel loader.</p>', '2023-11-08 06:18:29', '2023-11-08 06:25:27'),
(8, '/uploads/1699442355.jpg', 'Fresh Startup Ideas For Digital Business', 'CONSULTING', 'Elliot Alderson', '<p>Financial experts support or help you to to find out which way you can raise your funds more. Arkit is a trusted name for providing assistance. Initially, their main objective was to ensure the service they provide these people are loyal to their industry, experienced, and professional.</p><p>Unless you are the one who really cares about this, it is not terribly important. What all matters is how your hybrid mobile application development is going to work in the long run as no one will care about how it was built.</p>', '2023-11-08 06:19:16', '2023-11-08 06:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `categories_id` bigint(20) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `img` varchar(256) DEFAULT NULL,
  `model` varchar(256) DEFAULT NULL,
  `type` varchar(256) DEFAULT NULL,
  `seats` varchar(256) DEFAULT NULL,
  `ac` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `des` text DEFAULT NULL,
  `first_mile_price` varchar(256) DEFAULT NULL,
  `after_first_mile_price` varchar(256) DEFAULT NULL,
  `driver_cab_details` varchar(256) DEFAULT NULL,
  `inclusion` varchar(256) DEFAULT NULL,
  `exclusion` varchar(256) DEFAULT NULL,
  `safety_guidelines` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `categories_id`, `name`, `img`, `model`, `type`, `seats`, `ac`, `description`, `des`, `first_mile_price`, `after_first_mile_price`, `driver_cab_details`, `inclusion`, `exclusion`, `safety_guidelines`, `created_at`, `updated_at`) VALUES
(11, 6, 'Honda Civic', '/uploads/1697525272.png', '2019', 'Full', '5', 'AC', 'The versatile 2019 Civic has a version for everyone; its lineup includes a two-door coupe as well as a four-door sedan and hatchback. It\'s available with two excellent four-cylinder engines and either an adroit continuously variable automatic transmission (CVT) or a slick-shifting six-speed manual.', 'According to the experts, We pit the new-generation Honda Civic against the segment benchmark, which is the Skoda Octavia and the Toyota Corolla. Does the new Civic have the goods to usurp the throne of the Octavia or will the Octavia continue to prevail?...', '4.59', '2.23', 'The versatile 2019 Civic has a version for everyone; its lineup includes a two-door coupe as well as a four-door sedan and hatchback. It\'s available with two excellent four-cylinder engines and either an adroit continuously variable automatic transmission ', 'State tax\nDriver Allowance\n Only one pickup and drop', ' Fare beyond 600kms\nAirport entry charge', 'The versatile 2019 Civic has a version for everyone; its lineup includes a two-door coupe as well as a four-door sedan and hatchback. It\'s available with two excellent four-cylinder engines and either an adroit continuously variable automatic transmission ', '2023-10-17 01:47:52', '2023-11-02 05:13:58'),
(12, 7, 'Corolla GLI', '/uploads/1697525415.jfif', '2018', 'Luxurious', '5', 'AC', 'The Corolla 1.3 GLi/XLi immobilizer is an anti-theft system that prevents the use of an unauthorized key with the vehicle. Every time the key is inserted into the ignition switch it transmits a unique electronic signal to the vehicle, enabling the engine to start.', 'If you\'re considering a Toyota Corolla, you may be wondering, “How long do Toyota Corollas last?” With regular service and maintenance, the Toyota Corolla has a life expectancy of up to 10 years or 300,000 miles.', '4.59', '3.63', NULL, NULL, NULL, NULL, '2023-10-17 01:50:15', '2023-11-02 05:14:08'),
(13, 8, 'APV', '/uploads/1697526092.jfif', '2017', '6 Seater', '6', 'AC', 'The Suzuki APV is a minivan/light commercial vehicle designed by Suzuki in Japan and manufactured in Indonesia by Suzuki Indomobil Motor. The abbreviation \"APV\" is short for All Purpose Vehicle.', 'All-purpose vehicle\" means any vehicle that is designed primarily for cross-country travel on land, water, or land and water and that is steered by wheels, caterpillar treads, or a combination of wheels and caterpillar treads and includes vehicles that operate on a cushion of air, vehicles commonly known as all-', '4.59', '7.68', NULL, NULL, NULL, NULL, '2023-10-17 02:01:32', '2023-11-02 05:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bag_capacities` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `car_categories`, `bag_capacities`, `created_at`, `updated_at`) VALUES
(6, 'Basic', '2', '2023-10-12 00:28:55', '2023-11-02 05:04:28'),
(7, 'Salon', '3', '2023-10-12 07:22:42', '2023-11-02 05:04:34'),
(8, '6 Seater', '4', '2023-10-12 07:25:10', '2023-11-02 05:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_08_064833_create_sessions_table', 1),
(7, '2023_10_11_144732_create_categories_table', 2),
(8, '2023_10_18_111430_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 34, '2023-10-20 10:44:52', '2023-10-20 10:44:52'),
(4, 'App\\Models\\User', 64, '2023-10-20 12:15:18', '2023-10-20 12:15:18'),
(4, 'App\\Models\\User', 65, '2023-10-23 07:07:20', '2023-10-23 07:07:20'),
(4, 'App\\Models\\User', 66, '2023-10-25 11:03:06', '2023-10-25 11:03:06'),
(4, 'App\\Models\\User', 67, '2023-10-25 11:08:14', '2023-10-25 11:08:14'),
(4, 'App\\Models\\User', 68, '2023-10-25 11:11:23', '2023-10-25 11:11:23'),
(4, 'App\\Models\\User', 69, '2023-10-25 11:15:27', '2023-10-25 11:15:27'),
(4, 'App\\Models\\User', 70, '2023-10-25 11:24:57', '2023-10-25 11:24:57'),
(4, 'App\\Models\\User', 71, '2023-10-25 11:27:43', '2023-10-25 11:27:43'),
(4, 'App\\Models\\User', 72, '2023-10-25 11:57:23', '2023-10-25 11:57:23'),
(4, 'App\\Models\\User', 73, '2023-10-25 12:17:49', '2023-10-25 12:17:49'),
(4, 'App\\Models\\User', 74, '2023-10-25 12:19:14', '2023-10-25 12:19:14'),
(4, 'App\\Models\\User', 75, '2023-10-25 12:21:25', '2023-10-25 12:21:25'),
(4, 'App\\Models\\User', 76, '2023-10-25 12:22:56', '2023-10-25 12:22:56'),
(4, 'App\\Models\\User', 77, '2023-10-26 11:58:55', '2023-10-26 11:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('fasihahmed349@gmail.com', '$2y$10$/.xBP1/s7HLTSpjNCFawZOSW.dU.nlUSRFwJ9fe3YIfNl.IpNJxPa', '2023-10-26 07:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'MyApp', '5011ddf5f2ef1c9c6a6472a847312ab9a09f9d3e5c9a9e47841fb279f78ec2c6', '[\"*\"]', NULL, NULL, '2023-10-13 01:41:45', '2023-10-13 01:41:45'),
(2, 'App\\Models\\User', 4, 'MyApp', '06ff197b0e7acf23a16f5af21b3f9e58c2beb80348a32be1a1672d22eeefd013', '[\"*\"]', '2023-10-16 04:25:27', NULL, '2023-10-13 01:43:34', '2023-10-16 04:25:27'),
(3, 'App\\Models\\User', 4, 'MyApp', '49e9597d6bd8746b3e7ea8fe7d3343f242d0bfcde05a942d3dbbb539204d2c4a', '[\"*\"]', NULL, NULL, '2023-10-13 01:44:33', '2023-10-13 01:44:33'),
(4, 'App\\Models\\User', 4, 'MyApp', '65c47bfd3d181a3a7173a2ed37d0506631127249107cd74e25a32d266c93a151', '[\"*\"]', NULL, NULL, '2023-10-16 04:27:02', '2023-10-16 04:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'web', '2023-10-18 23:45:51', '2023-10-18 23:45:51'),
(4, 'User', 'web', '2023-10-18 23:45:51', '2023-10-18 23:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_form`
--

CREATE TABLE `search_form` (
  `id` int(11) NOT NULL,
  `users_id` bigint(20) DEFAULT NULL,
  `pickup_destination` varchar(256) DEFAULT NULL,
  `dropoff_destination` varchar(256) DEFAULT NULL,
  `return_pickup_destination` varchar(256) DEFAULT NULL,
  `return_dropoff_destination` varchar(256) DEFAULT NULL,
  `pickup_date` varchar(256) DEFAULT NULL,
  `pickup_time` varchar(256) DEFAULT NULL,
  `return_date` varchar(256) DEFAULT NULL,
  `return_time` varchar(256) DEFAULT NULL,
  `luggage` varchar(256) DEFAULT NULL,
  `passengers` varchar(256) DEFAULT NULL,
  `distance` varchar(256) DEFAULT NULL,
  `one_way` varchar(100) DEFAULT NULL,
  `car_price` varchar(256) DEFAULT NULL,
  `car_id` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_form`
--

INSERT INTO `search_form` (`id`, `users_id`, `pickup_destination`, `dropoff_destination`, `return_pickup_destination`, `return_dropoff_destination`, `pickup_date`, `pickup_time`, `return_date`, `return_time`, `luggage`, `passengers`, `distance`, `one_way`, `car_price`, `car_id`, `created_at`, `updated_at`) VALUES
(78, NULL, 'Glasgow, UK', 'Hull, UK', NULL, NULL, '2023-11-02', '22:24', NULL, NULL, '1', '5', '267 mi', 'One Way', NULL, NULL, '2023-11-02 07:19:27', '2023-11-02 07:19:27'),
(79, 34, 'Glasgow, UK', 'Hull, UK', NULL, NULL, '2023-11-02', '20:23', NULL, NULL, '1', '5', '267 mi', 'One Way', '2055.15', '11', '2023-11-02 07:21:03', '2023-11-02 07:21:33'),
(80, 34, 'Glasgow, UK', 'Hull, UK', 'Hull, UK', 'John o\' Groats, UK', '2023-11-02', '18:23', '2023-11-02', '19:24', '4', '5', '808 mi', 'Two Way', '6210.03', '11', '2023-11-02 07:22:14', '2023-11-02 07:22:58'),
(81, NULL, 'Glasgow, UK', 'Hull, UK', NULL, NULL, '2023-11-22', '15:37', NULL, NULL, '4', '4', '267 mi', 'One Way', NULL, NULL, '2023-11-06 00:32:23', '2023-11-06 00:32:23'),
(82, 34, 'Glasgow, UK', 'Hyde Park, London, UK', NULL, NULL, '2023-11-14', '15:39', NULL, NULL, '4', '4', '410 mi', 'One Way', '3153.39', '11', '2023-11-06 00:34:13', '2023-11-06 00:44:54'),
(83, 34, '3 Hulland Place', 'Jk Surveyors Ltd', NULL, NULL, '2023-11-22', '18:43', NULL, NULL, '1', '4', '3.3 mi', 'One Way', NULL, NULL, '2023-11-06 06:40:45', '2023-11-06 06:40:45'),
(84, 34, '26 Cannon Street', 'Hullternative Pest Control', NULL, NULL, '2023-11-07', '19:18', NULL, NULL, '1', '4', '12.1 mi', 'One Way', '97.518', '11', '2023-11-06 07:16:43', '2023-11-06 07:17:33'),
(85, 34, '11 Cannon Street', 'Hullternative Pest Control', NULL, NULL, '2023-11-22', '21:27', NULL, NULL, '1', '4', '12.0 mi', 'One Way', '96.75', '11', '2023-11-06 07:22:59', '2023-11-06 07:23:52'),
(86, NULL, '9 Cannon Street', 'James Hull Associates', 'James Hull Associates', 'Golden Glassy', '2023-11-07', '11:52', '2023-11-07', '12:53', '1', '5', '9.5 mi', 'Two Way', NULL, NULL, '2023-11-07 00:51:58', '2023-11-07 00:51:58'),
(87, NULL, '5 Cannon House', 'James Hull Associates', 'James Hull Associates', 'Jalsagor Restaurant', '2023-11-08', '19:28', '2023-11-08', '22:32', '4', '5', '65 mi', 'Two Way', NULL, NULL, '2023-11-07 07:26:28', '2023-11-07 07:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8Q6WKpqGrQ9xS85YhTMAIysRo8D9PQGlsjHHL4EW', 34, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVXdZR21tRHZyMUpUa0ZUeUZCQXdoaWpHQTZhVnJHcDVFNGVERXBXTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozNDt9', 1700050749),
('9jqrExSZUrJPPu6kG4wgMBeR70AImRS7JIbUptxZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianliM0tDNVJaRlJZS0V2N095eTUwVFFYbjhLUmxwOEF2eGlNWFJvcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1699341260),
('fTmOTmCqAbgZPvFs7fPkhmfPDzKzh9VO1iNgD0HM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0dyUFlUMjRkVHoySFdCY3Rrd09lQVBSWkM2aUZwMEFUQ3NTOTE0TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1699360050),
('ovI4jkPj7xhXnt07Ekfr5ykcTLrlzkSWbWKwv8fh', 34, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3YwdkZoYkV3Q0toYlZZRXZEbTlyTTFsRko4MFR1WFNSd3c0RzNHYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nLzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozNDt9', 1699448279);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(34, 'Admin', 'admin@admin.com', '2023-10-20 05:44:52', '$2y$10$p9mW.3FrlSv3SLJyxP9wkuZp/IV0Epp45u.ZpIMXsdZJBsnRImW.W', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-20 05:44:52', '2023-10-25 02:28:54'),
(64, 'Fasih', 'fasih@gmail.com', NULL, '$2y$10$q9gv8AN60zrOAnzhDnT5cu7/NL2dtFai0BNQKLkwKzPWSB.va5UcC', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:15:18', '2023-10-20 07:15:18'),
(65, 'Tasha Turner', 'religav@mailinator.com', NULL, '$2y$10$6ovA1skQSC6Mq2J7jkm/3u35Vataq9lblD/BUnS1eeAgnaOK.vMNi', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 02:07:20', '2023-10-23 02:07:20'),
(72, 'Talha Sahni', 'talhasahni116@gmail.com', NULL, '$2y$10$MiESGduxShRt2apjlhLZ1evhawuWImJYPmTD.OfbBbvisxmvQZSzO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-25 06:57:23', '2023-11-02 07:27:49'),
(77, 'Rama Berger', 'fasihahmed34@gmail.com', NULL, '$2y$10$6QbCmZ9BNXLf/DGHK9Yd4ePTtzSeIvyN6BE6dYo.gIbbRKOr.xHou', NULL, NULL, NULL, 'Q3OCzOuNMKsSSjDK8V65j0u01g8TRH76dElNt2y6StltIBulMpZlLIjn2Pco', NULL, NULL, '2023-10-26 06:58:55', '2023-11-08 05:04:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baggage`
--
ALTER TABLE `baggage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `search_form`
--
ALTER TABLE `search_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `baggage`
--
ALTER TABLE `baggage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `search_form`
--
ALTER TABLE `search_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
