-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 10:29 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urban_living`
--

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdivission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `title`, `address`, `area`, `subdivission`, `city`, `county`, `state`, `zipcode`, `created_at`, `updated_at`) VALUES
(29, 'Den Whisk Community', '289', '9872', 'manverr', 'DIALPUR', 'India', 'Punjab', '144803', '2020-03-30 05:17:47', '2020-03-30 05:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_no` int(11) NOT NULL,
  `plot_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_id` int(10) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `home_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(26, 32, 'Big Balcony house', 'a.jpg', '2020-03-30 23:41:42', '2020-03-31 00:59:19'),
(28, 49, 'Big Balcony', 'b.jpg', '2020-03-31 02:16:36', '2020-03-31 02:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `community_id` int(11) NOT NULL,
  `home_id` int(11) NOT NULL,
  `plot_no` int(11) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `dining` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mls` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `builder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `description`, `bedroom`, `bathroom`, `garage`, `stories`, `mls`, `area`, `builder`, `featured_image`, `gallery`, `slug`, `status_id`, `meta_description`, `meta_title`, `created_at`, `updated_at`) VALUES
(32, 'Paver Stone four', 'this is the house in the greeny place', '4', '6', '2', '7', '8754', 6573, 'rag and sam', '1585636029b.jpeg', 'anjkfd.jpg', 'paver-stone-four', 1, 'forest house', 'home page', '2020-03-27 02:30:56', '2020-03-31 00:57:10'),
(49, 'Indo D.G three', 'this is the house in the greeny place', '4', '6', '2', '7', '57687', 6573, 'ram and sons', '1585640680b.jpeg', 'anjkfd.jpg', 'indo-dg-three', 1, 'forest house', 'home page', '2020-03-31 02:13:45', '2020-03-31 02:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `homes_availaibles`
--

CREATE TABLE `homes_availaibles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_id` int(11) NOT NULL,
  `available_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_communities`
--

CREATE TABLE `home_communities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_communities`
--

INSERT INTO `home_communities` (`id`, `home_id`, `community_id`, `created_at`, `updated_at`) VALUES
(4, 42, 26, '2020-03-27 07:40:20', '2020-03-27 09:32:40'),
(5, 42, 13, '2020-03-29 22:49:49', '2020-03-29 22:49:49'),
(6, 43, 29, '2020-03-31 00:43:45', '2020-03-31 00:43:45'),
(7, 43, 29, '2020-03-31 00:43:59', '2020-03-31 00:43:59'),
(8, 43, 29, '2020-03-31 00:44:21', '2020-03-31 00:44:21'),
(9, 46, 12, '2020-03-31 00:48:01', '2020-03-31 00:48:01'),
(10, 47, 12, '2020-03-31 00:50:13', '2020-03-31 00:50:13'),
(11, 46, 27, '2020-03-31 00:55:41', '2020-03-31 00:55:41'),
(12, 49, 29, '2020-03-31 02:13:45', '2020-03-31 02:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `home_features`
--

CREATE TABLE `home_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_plot_no_ids`
--

CREATE TABLE `home_plot_no_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_id` int(11) NOT NULL,
  `plot_no_id` int(11) NOT NULL,
  `plot_Id_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_types`
--

CREATE TABLE `home_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_type_rels`
--

CREATE TABLE `home_type_rels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_id` int(11) NOT NULL,
  `home_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2020_03_18_062753_create_communities_table', 1),
(4, '2020_03_18_064858_create_homes_table', 2),
(5, '2020_03_18_071154_create_community_homes_availaibles_table', 2),
(6, '2020_03_18_071213_create_statuses_table', 2),
(7, '2020_03_18_074123_create_features_table', 2),
(8, '2020_03_18_074549_create_community_features_table', 2),
(9, '2020_03_18_075339_create_floors_table', 2),
(10, '2020_03_18_080252_create_components_table', 3),
(11, '2020_03_18_091450_create_home_types_table', 4),
(12, '2020_03_18_091943_create_home_type_rels_table', 4),
(13, '2020_03_18_093557_create_plot_nos_table', 5),
(14, '2020_03_18_093757_create_plot_ids_table', 5),
(15, '2020_03_18_101929_create_community_plot_no_ids_table', 6),
(16, '2020_03_18_092413_create_pages_table', 7),
(17, '2020_03_23_084322_create_home_communities_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `meta_title`, `meta_description`, `description`, `slug`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'Home page', 'urban-living-home-page', 'This is the home page of Urban Living', '<section id=\"section_2112709390\" class=\"section content-box   section-border-no section-bborder-no section-height-content section-bgtype- section-fixed-background-no  section-bgstyle-stretch section-triangle-no triangle-location-top parallax-section-no section-overlay-no section-overlay-dot-no \"  style=\"padding-top:0;padding-bottom:0;margin:0px 0px 0px 0px;background-color:#ffffff;\" data-video-ratio=\"\" data-parallax-speed=\"1\" ><div class=\"section-overlay\" style=\"\"></div><div class=\"container section-content\" ><div class=\"row-fluid\"><div class=\"row-fluid equal-cheight-no  element-padding-default element-vpadding-default\">\r\n	<div class=\"section-column bgalignment-current span12\" style=\"\">\r\n		<div class=\"inner-content  content-box  textnone\" style=\"padding-top:10px;padding-bottom:10px;padding-left:0px;padding-right:0px;\">\r\n			\r\n	<div class=\"column-text  wpb_animate_when_almost_visible wpb_left-to-right\">\r\n		<p style=\"padding-top: 10px;\">Biorev provides photorealistic 3D renderings and 3D animations for the design/build industry, inventors, and product developers. Biorev is dedicated to customer service. We stand behind our work and we support client technology needs unconditionally. Biorev has the track record, support, and service to take your project to a new level. We create beautiful conversion-friendly websites, drive targeted website traffic, and create outstanding 3D Renderings and Animations. The staff at Biorev has been responsible for designing multimedia presentations for a variety of large companies internationally.</p>\r\n<p>We are young HR technologies, outsourcing and Services Company, We provide end-to-end employee life cycle management solutions to organizations. Biorev is a leading HR Outsourcing company, specializing in HR Shared Services, Recruitment, Offshore Staffing, Consultancy Services, Technology solutions for web and mobile applications, Social Media Solutions and IT solutions</p>\r\n<p>We are proudly serving clients globally ranging from IT to Construction Industry.</p>\r\n\r\n	</div> \r\n		</div> \r\n	</div> \r\n</div></div></div></section>', 'Home-page', 'a.jpg', NULL, NULL);

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
-- Table structure for table `plot_ids`
--

CREATE TABLE `plot_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plot_ids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plot_nos`
--

CREATE TABLE `plot_nos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plot_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Available', '2020-03-28 03:24:02', '2020-03-28 03:24:02'),
(2, 'Sold', '2020-03-28 03:26:29', '2020-03-28 03:26:29'),
(3, 'Hold', '2020-03-28 03:26:39', '2020-03-28 03:26:39'),
(4, 'Under Contruction', '2020-03-28 03:27:15', '2020-03-28 03:27:15');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ankit', '98ankit47@gmail.com', NULL, '$2y$10$W3wx79iqR0NGlgUKILfozOu2gUdwHLESj8TLlwaIf/4OxY4xZc96O', NULL, '2020-03-23 04:36:57', '2020-03-23 04:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes_availaibles`
--
ALTER TABLE `homes_availaibles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_communities`
--
ALTER TABLE `home_communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_features`
--
ALTER TABLE `home_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_plot_no_ids`
--
ALTER TABLE `home_plot_no_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_types`
--
ALTER TABLE `home_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_type_rels`
--
ALTER TABLE `home_type_rels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plot_ids`
--
ALTER TABLE `plot_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plot_nos`
--
ALTER TABLE `plot_nos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `homes_availaibles`
--
ALTER TABLE `homes_availaibles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_communities`
--
ALTER TABLE `home_communities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_features`
--
ALTER TABLE `home_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_plot_no_ids`
--
ALTER TABLE `home_plot_no_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_types`
--
ALTER TABLE `home_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_type_rels`
--
ALTER TABLE `home_type_rels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plot_ids`
--
ALTER TABLE `plot_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plot_nos`
--
ALTER TABLE `plot_nos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
