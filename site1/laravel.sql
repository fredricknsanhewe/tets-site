-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 08:40 AM
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
-- Database: `laravel`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_16_140119_create_sections_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fredricknsanhewe@gmail.com', '$2y$10$zm4pEmFMWmqYoO6LXi5S3ueHF1Gkaxf09XjYMjXKDoQo0.00ekr.G', '2025-01-22 04:50:18');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(6, 'hero', '\"{\\\"heading\\\":\\\"Welcome to Our Good Site\\\",\\\"subheading\\\":\\\"We offer amazing services!\\\"}\"', NULL, '2025-01-20 14:13:28'),
(7, 'services', '\"[{\\\"title\\\":\\\"Services\\\",\\\"description\\\":\\\"very good service that we offer here\\\"},{\\\"description\\\":\\\"Very Good Jobs in there.very good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer here\\\"},{\\\"description\\\":\\\"Very Good Jobs in there.very good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer herevery good service that we offer here Very Good Jobs in there\\\"},{\\\"description\\\":\\\"Very Good Jobs in there\\\"},{\\\"description\\\":\\\"Very Good Jobs in there\\\"}]\"', NULL, '2025-01-20 15:43:28'),
(8, 'testimonials', '\"[{\\\"name\\\":\\\"John Mbanje\\\",\\\"position\\\":\\\"C.E.O\\\\\\/Founder\\\",\\\"quote\\\":\\\"Amazing service. The professionalism and dedication shown were beyond our expectations. It made our experience smooth and enjoyable.\\\"},{\\\"name\\\":\\\"Jane Doe\\\",\\\"position\\\":\\\"Manager\\\",\\\"quote\\\":\\\"Excellent experience. The team went above and beyond to ensure every detail was perfect. Their attention to customer needs is remarkable.\\\"},{\\\"name\\\":\\\"Alex Smith\\\",\\\"position\\\":\\\"Developer\\\",\\\"quote\\\":\\\"Great support. Whenever we faced an issue, the team was there to assist us quickly and effectively. Their commitment is commendable.\\\"},{\\\"name\\\":\\\"Maria Johnson\\\",\\\"position\\\":\\\"Marketing Head\\\",\\\"quote\\\":\\\"Outstanding collaboration. Their innovative approach and clear communication made the process seamless and highly productive.\\\"},{\\\"name\\\":\\\"Michael Brown\\\",\\\"position\\\":\\\"Team Leader\\\",\\\"quote\\\":\\\"Exceptional results. The work delivered was top-notch and exceeded our expectations. The quality and creativity were unmatched.\\\"},{\\\"name\\\":\\\"Samantha Williams\\\",\\\"position\\\":\\\"Product Manager\\\",\\\"quote\\\":\\\"Incredible service. They understood our requirements perfectly and delivered a solution that aligned with our vision and goals.\\\"},{\\\"name\\\":\\\"David Lee\\\",\\\"position\\\":\\\"Consultant\\\",\\\"quote\\\":\\\"Impressive dedication. The level of care and thought put into every step of the process was truly inspiring and reassuring.\\\"},{\\\"name\\\":\\\"Emily Davis\\\",\\\"position\\\":\\\"HR Specialist\\\",\\\"quote\\\":\\\"Fantastic execution. They handled our project with such professionalism and expertise that we couldn\\\\u2019t have asked for more.\\\"},{\\\"name\\\":\\\"Chris Wilson\\\",\\\"position\\\":\\\"Operations Director\\\",\\\"quote\\\":\\\"Reliable and efficient. They managed the entire workflow smoothly and ensured everything was completed on time and within scope.\\\"},{\\\"name\\\":\\\"Laura Taylor\\\",\\\"position\\\":\\\"Creative Designer\\\",\\\"quote\\\":\\\"Exceptional creativity. Their innovative ideas and unique approach brought a fresh perspective to our project.\\\"}]\"', NULL, '2025-01-22 04:48:20'),
(9, 'contact', '\"{\\\"phone1\\\":\\\"+263777111222\\\",\\\"phone2\\\":\\\"+26377771111\\\",\\\"email1\\\":\\\"admin@abc.com\\\",\\\"email2\\\":\\\"info@example.com\\\",\\\"address\\\":\\\"123 Cnr Jason & Samora\\\",\\\"country\\\":\\\"Zimbabwe\\\"}\"', NULL, NULL),
(13, 'about', '\"{\\\"heading\\\":\\\"LION PVT LTD\\\",\\\"ceo-name\\\":\\\"Tinashe Neuman\\\",\\\"text\\\":\\\"We are a Zimbabwean company based in Harare. We specialize in a number of things that incluse but not limited to:\\\",\\\"feature1\\\":\\\"Web Development\\\",\\\"feature2\\\":\\\"Software Development\\\",\\\"feature3\\\":\\\"Economic Development\\\",\\\"feature4\\\":\\\"Farming \\\",\\\"feature5\\\":\\\"English and literature Lessons\\\",\\\"feature6\\\":\\\"News production and filming\\\"}\"', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$0mJMN9PnFy8OQw5lKOoXreuzB2DMdWXFqr1IPq24QQAbgHuzhNHi2', NULL, '2025-01-16 12:46:13', '2025-01-16 12:46:13'),
(2, 'User2', 'user2@gmail.com', NULL, '$2y$10$0mJMN9PnFy8OQw5lKOoXreuzB2DMdWXFqr1IPq24QQAbgHuzhNHi2', NULL, '2025-01-22 05:26:55', '2025-01-22 05:26:55');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
