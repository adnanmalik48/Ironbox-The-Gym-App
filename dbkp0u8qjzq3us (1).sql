-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2022 at 03:11 PM
-- Server version: 5.7.32-35-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkp0u8qjzq3us`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_categories`
--

CREATE TABLE `app_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_categories`
--

INSERT INTO `app_categories` (`id`, `name`, `cover_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trainers', 'cover_img/Trainers.jpg', 1, '2021-07-17 03:09:56', '2021-12-21 13:57:52'),
(2, 'Workout', 'cover_img/Workout.jpg', 1, '2021-07-17 03:10:32', '2021-12-21 13:52:43'),
(3, 'Diet', 'cover_img/Diet1.jpg', 1, '2021-07-17 03:10:56', '2021-07-17 03:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `base_urls`
--

CREATE TABLE `base_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `base_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_base_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage_base_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `base_urls`
--

INSERT INTO `base_urls` (`id`, `base_url`, `api_base_url`, `storage_base_url`, `created_at`, `updated_at`) VALUES
(1, 'https://ironbox963.com/', 'https://ironbox963.com/api/', 'https://ironbox963.com/storage/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_categories_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `sub_categories_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Muscle Building', 1, '2021-07-17 03:13:07', '2021-07-17 03:13:07'),
(2, '1', 'Strength Programme', 1, '2021-07-17 03:13:25', '2021-07-17 03:13:25'),
(3, '1', 'Functional Fitness', 1, '2021-07-17 03:13:41', '2021-07-17 03:13:41'),
(4, '1', 'Fat Loss', 1, '2021-07-17 03:13:55', '2021-07-17 03:13:55'),
(5, '2', 'Muscle Building', 1, '2021-07-17 03:14:16', '2021-07-17 03:14:16'),
(6, '2', 'Fat Loss', 1, '2021-07-17 03:14:30', '2021-07-17 03:14:30'),
(7, '2', 'Body Weight', 1, '2021-07-17 03:14:47', '2021-07-17 03:14:47'),
(8, '2', 'Functional Fitness', 1, '2021-07-17 03:15:05', '2021-07-17 03:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `contact_id`, `created_at`, `updated_at`) VALUES
(7, '3', '1', '2021-10-08 13:03:38', '2021-10-08 13:03:38'),
(8, '1', '3', '2021-10-08 13:03:38', '2021-10-08 13:03:38'),
(11, '3', '17', '2021-11-13 09:03:59', '2021-11-13 09:03:59'),
(12, '17', '3', '2021-11-13 09:03:59', '2021-11-13 09:03:59'),
(13, '20', '11', '2021-11-25 12:05:59', '2021-11-25 12:05:59'),
(14, '11', '20', '2021-11-25 12:05:59', '2021-11-25 12:05:59'),
(15, '29', '1', '2021-12-12 15:17:51', '2021-12-12 15:17:51'),
(16, '1', '29', '2021-12-12 15:17:51', '2021-12-12 15:17:51'),
(19, '31', '1', '2021-12-14 06:24:21', '2021-12-14 06:24:21'),
(20, '1', '31', '2021-12-14 06:24:21', '2021-12-14 06:24:21'),
(23, '32', '5', '2021-12-16 10:18:10', '2021-12-16 10:18:10'),
(24, '5', '32', '2021-12-16 10:18:10', '2021-12-16 10:18:10'),
(25, '37', '17', '2021-12-21 15:47:50', '2021-12-21 15:47:50'),
(26, '17', '37', '2021-12-21 15:47:50', '2021-12-21 15:47:50'),
(27, '38', '32', '2021-12-27 06:10:41', '2021-12-27 06:10:41'),
(28, '32', '38', '2021-12-27 06:10:41', '2021-12-27 06:10:41'),
(29, '32', '40', '2021-12-27 12:40:21', '2021-12-27 12:40:21'),
(30, '40', '32', '2021-12-27 12:40:21', '2021-12-27 12:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `custom_diet_plan`
--

CREATE TABLE `custom_diet_plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `difficulty_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_protein` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_fat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_calories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_carbohydrates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `protein_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fat_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `calories_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `carbohydrates_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1.0',
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_diet_plan`
--

INSERT INTO `custom_diet_plan` (`id`, `title`, `difficulty_level`, `description`, `duration`, `goal`, `caution`, `request_id`, `trainee_id`, `trainer_id`, `cover_image`, `total_protein`, `total_fat`, `total_calories`, `total_carbohydrates`, `protein_gain`, `fat_gain`, `calories_gain`, `carbohydrates_gain`, `version`, `progress`, `status`, `created_at`, `updated_at`) VALUES
(20, 'test', '1', 'test', '3', 'test', 'test', '7', '3', '1', 'diet_plans_cover_images/scaled_image_picker4384484251099719535.jpg', '56', '56', '56', '56', '0', '0', '0', '0', '1.0', '0', 1, '2021-09-08 15:31:11', '2021-09-08 15:31:48'),
(21, 'Sample Diet Plan', '1', 'Diet plan for caloric maintenance and weight loss.', '3', 'The goal for this plan is to maintain your calories intake and reduce weight.', 'If you feel too weak, consult doctor', '8', '3', '1', 'diet_plans_cover_images/scaled_image_picker14565939454007020.jpg', '73.7', '29.099999999999998', '698', '35.6', '0', '0', '0', '0', '1.0', '0', 1, '2021-09-08 17:10:25', '2021-09-08 17:20:30'),
(23, 'Test plan', '1', 'testttt', '1', 'tedtttt', 'testttt', '9', '3', '1', 'diet_plans_cover_images/scaled_image_picker5464548316987035807.jpg', '45', '44', '44', '44', '0', '0', '0', '0', '1.0', '0', 0, '2021-09-08 18:11:08', '2021-09-08 18:11:49'),
(24, 'test plan', '2', 'test plan', '1', 'test plan', 'test plan', '9', '3', '1', 'diet_plans_cover_images/scaled_image_picker1684558329699174721.jpg', '10', '10', '10', '10', '0', '0', '0', '0', '1.0', '0', 1, '2021-09-08 18:26:49', '2021-09-08 18:28:32'),
(25, 'uggg', '1', 'gcgg', '6', 'hggv', 'hvbb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7401787779144889502.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 07:32:05', '2021-12-08 07:32:05'),
(26, 'yghh', '1', 'uggh', '6', 'hvbb', 'hvbb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker5870549015755115030.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 08:35:00', '2021-12-08 08:35:00'),
(27, 'ughg', '1', 'hvvb', '2', 'yghh', 'gvhb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker592616117442040356.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 10:21:50', '2021-12-08 10:21:50'),
(28, 'tfgg', '1', 'uyhh', '3', 'ughb', 'jvbbb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8990763604411218976.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 11:05:12', '2021-12-08 11:05:12'),
(29, 'ughh', '1', 'jgvb', '2', 'uvhh', 'jyvb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker6219470987734396724.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 11:07:04', '2021-12-08 11:07:04'),
(30, 'ygh', '1', 'ugg', '2', 'ygg', 'hvb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker4707969614599029714.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 11:28:58', '2021-12-08 11:28:58'),
(31, 'ugh', '1', 'hgh', '4', 'ygg', 'gvv', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8587834840136340765.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 14:30:06', '2021-12-08 14:30:06'),
(32, 'gffg', '1', 'fhfgg', '2', 'fgfg', 'fvfgv', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8464753025544396480.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-08 19:17:27', '2021-12-28 09:37:33'),
(33, 'ugh hi', '1', 'FYI', '2', 'do', 'FL', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker6778253324658149600.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 05:53:03', '2021-12-09 05:53:03'),
(34, 'yffh', '1', 'gcgh', '2', 'yfg', 'cvh', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8473074150948461157.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 06:04:17', '2021-12-09 06:04:17'),
(35, 'UCI', '1', 'fun', '2', 'Tchaikovsky', 'fun', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7111773325914246251.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 06:06:09', '2021-12-09 06:06:09'),
(36, 'yfgg', '1', 'gfhh', '2', 'yfh', 'gvbb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker862653003584618644.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 06:08:08', '2021-12-09 06:08:08'),
(37, 'uggb', '1', 'gfgh', '2', 'ugh', 'gvbn', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker5744625822999020303.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 06:09:29', '2021-12-09 06:09:29'),
(38, 'jghhh', '1', 'cvbbb', '2', 'vv', 'bccv', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker172290335030758275.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 06:54:39', '2021-12-09 06:54:39'),
(39, 'uggh', '1', 'ughh', '2', 'jhbb', 'ufgh', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker3759335613556373485.png', '6', '6', '6', '6', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 06:56:17', '2021-12-09 06:58:10'),
(40, 'yggh', '1', 'ffghg', '2', 'yggg', 'yfg', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker3525221241344769191.png', '66', '6', '6', '6', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 07:18:01', '2021-12-09 07:18:49'),
(41, 'dggf', '1', 'sun', '2', 'dB', 'do', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7874729972765827734.png', '5', '5', '5', '5', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 08:12:32', '2021-12-09 08:13:25'),
(42, 'tho', '1', 'to', '2', 'to', 'hi', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker2574831357580320202.png', '102', '102', '102', '102', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 08:24:04', '2021-12-27 13:30:23'),
(43, 'to', '1', 'go', '2', 'tho', 'do', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker2878897464244387654.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 08:29:47', '2021-12-09 08:29:47'),
(44, 'thy', '1', 'first', '2', 'TN', 'tech', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker4106450662825045617.jpg', '3', '3', '6', '9', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 08:51:28', '2021-12-09 08:52:12'),
(45, 'try', '1', 'ugh', '2', 'try', 'first', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker2763643944634596058.jpg', '9', '9', '9', '9', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 09:00:03', '2021-12-09 09:00:41'),
(46, 'thy', '1', 'try', '2', 'try', 'dB', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker4154216859909973256.png', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 09:04:51', '2021-12-09 09:04:51'),
(47, 'ugh', '2', 'gym', '2', 'ugh', 'dB', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8608086531562729051.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 09:07:26', '2021-12-09 09:07:26'),
(48, 'uggf', '1', 'uggg', '2', 'yvg', 'yfhh', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7528234489045146641.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 10:11:54', '2021-12-09 10:11:54'),
(49, 'uuhhh', '1', 'jjjj', '1', 'jjj', 'jjjjj', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker9078819378752279795.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 10:18:25', '2021-12-09 10:18:25'),
(50, 'USB', '1', 'KFC', '2', 'ugh', 'ugh', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker2775724064301947570.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 10:33:26', '2021-12-09 10:33:26'),
(51, 'USB', '1', 'heh', '1', 'ugh', 'if', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker3202030621226628053.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 10:38:53', '2021-12-09 10:38:53'),
(52, 'fhhh', '3', 'vvvv', '2', 'fggg', 'vvvvv', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7315825239378689754.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 11:01:03', '2021-12-09 11:01:03'),
(53, 'kuvh', '1', 'fun', '1', 'ugh', 'fun', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8994139237980583072.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 11:03:39', '2021-12-09 11:03:39'),
(54, 'heh', '1', 'heh', '5', 'Jeff', 'Greg', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8437892712340837186.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 11:32:25', '2021-12-09 11:32:25'),
(55, 'first', '2', 'fun', '2', 'etch', 'week', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker8506742194185455606.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 12:14:13', '2021-12-09 12:14:13'),
(56, 'truck', '1', 'dry', '2', 'tfv', 'yfv', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7761352178724222616.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 12:30:33', '2021-12-09 12:30:33'),
(57, 'fun', '2', 'dB', '2', 'dB', 'fun', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker6738955835594859016.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 12:39:35', '2021-12-09 12:39:35'),
(58, 'dry', '2', 'dry', '2', 'dry', 'dry', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7705373243732398006.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 13:08:57', '2021-12-09 13:08:57'),
(59, 'ygvbh', '1', 'hfcv', '2', 'jhvv', 'bcvb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker3697555058808281050.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 13:11:33', '2021-12-09 13:11:33'),
(60, 'dry', '1', 'gyhjh', '2', 'gyhjh', 'dB', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker1510717820800609104.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 13:13:30', '2021-12-09 13:13:30'),
(61, 'rfff', '2', 'yfgg', '2', 'yfvv', 'cgvv', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker5157998143105743858.jpg', '2', '5', '5', '5', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 13:15:56', '2021-12-09 13:16:33'),
(62, 'deck', '1', 'Seth', '3', 'CTN', 'dry', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker7445105383389761082.jpg', '5', '5', '5', '5', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 13:19:21', '2021-12-09 13:20:40'),
(63, 'tdfgg', '1', 'hgvv', '2', 'ygvv', 'cvvb', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker3931197218452607203.jpg', '2', '2', '2', '5', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-09 13:23:08', '2021-12-09 13:23:53'),
(64, 'gggh', '1', 'gfgh', '2', 'uvvb', 'gvbn', '10', '3', '1', 'diet_plans_cover_images/scaled_image_picker6434962013632235632.jpg', '2', '2', '2', '2', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-10 09:51:30', '2021-12-10 09:52:07'),
(65, 'Wasi diet plan', '1', 'weight gain', '4', 'distraction', 'Injuriuos for heath', '13', '32', '40', 'diet_plans_cover_images/scaled_image_picker2138562866238419127.jpg', '8855', '8', '888', '89', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-27 12:54:57', '2021-12-27 13:26:41'),
(66, 'Wasi\'s diet plan', '1', 'check', '4', 'check', 'check', '14', '32', '40', 'diet_plans_cover_images/scaled_image_picker6980878284982451871.jpg', '658', '53.2', '889', '88', '0', '0', '0', '0', '1.0', '0', 1, '2021-12-28 06:42:36', '2021-12-28 06:54:18'),
(69, 'burger', '3', 'faty abs', '4', 'distrustion', 'blaa blaa', '15', '32', '40', 'diet_plans_cover_images/scaled_image_picker2454733645931186573.jpg', '1000', '2000', '1', '1000', '0', '0', '0', '0', '1.0', '0', 0, '2021-12-29 06:02:15', '2021-12-29 06:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `custom_diet_plan_day`
--

CREATE TABLE `custom_diet_plan_day` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `week_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_number` longtext COLLATE utf8mb4_unicode_ci,
  `total_meals` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_protein` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_fat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_calories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_carbohydrates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `protein_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fat_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `calories_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `carbohydrates_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_diet_plan_day`
--

INSERT INTO `custom_diet_plan_day` (`id`, `plan_id`, `week_number`, `day_number`, `total_meals`, `progress`, `total_protein`, `total_fat`, `total_calories`, `total_carbohydrates`, `protein_gain`, `fat_gain`, `calories_gain`, `carbohydrates_gain`, `created_at`, `updated_at`) VALUES
(34, '20', '1', '1', '1', '0', '56', '56', '56', '56', '0', '0', '0', '0', '2021-09-08 15:31:14', '2021-09-08 15:31:48'),
(35, '21', '1', '1', '4', '0', '73.7', '29.099999999999998', '698', '35.6', '0', '0', '0', '0', '2021-09-08 17:11:30', '2021-09-08 17:20:30'),
(36, '23', '1', '1', '1', '0', '45', '44', '44', '44', '0', '0', '0', '0', '2021-09-08 18:11:12', '2021-09-08 18:11:49'),
(37, '23', '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-09-08 18:11:57', '2021-09-08 18:11:57'),
(38, '24', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-09-08 18:27:03', '2021-09-08 18:27:03'),
(39, '24', '1', '1', '1', '0', '10', '10', '10', '10', '0', '0', '0', '0', '2021-09-08 18:27:15', '2021-09-08 18:28:32'),
(40, '25', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 07:33:40', '2021-12-08 07:34:53'),
(41, '26', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 08:35:07', '2021-12-08 08:35:07'),
(42, '27', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 10:21:57', '2021-12-08 10:21:57'),
(43, '27', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 10:22:03', '2021-12-08 10:22:12'),
(44, '28', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 11:05:16', '2021-12-08 11:05:25'),
(45, '29', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 11:07:09', '2021-12-08 11:07:17'),
(46, '29', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 11:09:07', '2021-12-08 11:09:07'),
(47, '30', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 11:29:02', '2021-12-08 11:29:11'),
(48, '30', '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 11:29:19', '2021-12-08 11:29:19'),
(49, '30', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 11:29:28', '2021-12-08 11:29:28'),
(52, '31', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 14:30:11', '2021-12-08 14:32:08'),
(53, '31', '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 14:32:41', '2021-12-08 14:32:41'),
(54, '32', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 19:17:35', '2021-12-08 19:19:17'),
(55, '32', '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-08 19:19:24', '2021-12-08 19:19:24'),
(56, '33', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 05:57:17', '2021-12-09 06:03:16'),
(57, '34', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 06:04:21', '2021-12-09 06:04:29'),
(58, '35', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 06:06:14', '2021-12-09 06:06:23'),
(59, '36', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 06:08:12', '2021-12-09 06:08:21'),
(60, '37', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 06:09:34', '2021-12-09 06:09:47'),
(61, '38', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 06:54:48', '2021-12-09 06:54:58'),
(62, '39', '1', '1', '1', '0', '6', '6', '6', '6', '0', '0', '0', '0', '2021-12-09 06:56:25', '2021-12-09 06:58:10'),
(63, '40', '1', '1', '1', '0', '66', '6', '6', '6', '0', '0', '0', '0', '2021-12-09 07:18:05', '2021-12-09 07:18:49'),
(64, '41', '1', '1', '1', '0', '5', '5', '5', '5', '0', '0', '0', '0', '2021-12-09 08:12:37', '2021-12-09 08:13:25'),
(65, '42', '1', '1', '1', '0', '102', '102', '102', '102', '0', '0', '0', '0', '2021-12-09 08:24:08', '2021-12-27 13:30:23'),
(66, '43', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 08:29:51', '2021-12-09 08:30:01'),
(67, '44', '1', '1', '1', '0', '3', '3', '6', '9', '0', '0', '0', '0', '2021-12-09 08:51:32', '2021-12-09 08:52:12'),
(68, '45', '1', '1', '1', '0', '9', '9', '9', '9', '0', '0', '0', '0', '2021-12-09 09:00:07', '2021-12-09 09:00:41'),
(69, '46', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 09:04:55', '2021-12-09 09:05:03'),
(70, '47', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 09:07:31', '2021-12-09 09:07:38'),
(71, '48', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 10:11:58', '2021-12-09 10:12:07'),
(72, '49', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 10:18:29', '2021-12-09 10:18:40'),
(73, '50', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 10:33:33', '2021-12-09 10:33:43'),
(74, '51', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 10:39:01', '2021-12-09 10:39:01'),
(75, '52', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 11:01:08', '2021-12-09 11:01:08'),
(76, '53', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 11:03:47', '2021-12-09 11:03:55'),
(77, '54', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 11:32:35', '2021-12-09 11:32:56'),
(78, '55', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 12:14:16', '2021-12-09 12:25:39'),
(79, '56', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 12:30:44', '2021-12-09 12:30:53'),
(80, '57', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 12:39:40', '2021-12-09 12:39:47'),
(81, '58', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 13:09:02', '2021-12-09 13:09:24'),
(82, '59', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 13:11:39', '2021-12-09 13:11:51'),
(83, '60', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 13:13:35', '2021-12-09 13:13:43'),
(84, '61', '1', '1', '1', '0', '2', '5', '5', '5', '0', '0', '0', '0', '2021-12-09 13:16:00', '2021-12-09 13:16:33'),
(85, '62', '1', '1', '1', '0', '5', '5', '5', '5', '0', '0', '0', '0', '2021-12-09 13:19:30', '2021-12-09 13:20:40'),
(86, '62', '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-12-09 13:21:53', '2021-12-09 13:21:53'),
(87, '63', '1', '1', '1', '0', '2', '2', '2', '5', '0', '0', '0', '0', '2021-12-09 13:23:12', '2021-12-09 13:23:53'),
(88, '64', '1', '1', '1', '0', '2', '2', '2', '2', '0', '0', '0', '0', '2021-12-10 09:51:34', '2021-12-10 09:52:07'),
(89, '65', '1', '1', '2', '0', '8855', '8', '888', '89', '0', '0', '0', '0', '2021-12-27 12:55:02', '2021-12-27 13:26:41'),
(90, '66', '1', '1', '1', '0', '658', '53.2', '889', '88', '0', '0', '0', '0', '2021-12-28 06:42:39', '2021-12-28 06:43:37'),
(93, '69', '1', '1', '1', '0', '1000', '2000', '1', '1000', '0', '0', '0', '0', '2021-12-29 06:02:19', '2021-12-29 06:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `custom_diet_plan_meal`
--

CREATE TABLE `custom_diet_plan_meal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_protein` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_fat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_calories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_carbohydrates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `protein_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fat_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `calories_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `carbohydrates_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_diet_plan_meal`
--

INSERT INTO `custom_diet_plan_meal` (`id`, `title`, `detail_id`, `total_protein`, `total_fat`, `total_calories`, `total_carbohydrates`, `protein_gain`, `fat_gain`, `calories_gain`, `carbohydrates_gain`, `time`, `progress`, `status`, `created_at`, `updated_at`) VALUES
(55, 'test', '34', '56', '56', '56', '56', '0', '0', '0', '0', '2:130', '0', 0, '2021-09-08 15:31:21', '2021-09-08 15:31:48'),
(56, 'Breakfast', '35', '23', '2.5', '201', '21.5', '0', '0', '0', '0', '8:480', '0', 0, '2021-09-08 17:12:02', '2021-09-08 17:16:27'),
(57, 'Mid Morning', '35', '4', '0.9', '77', '14', '0', '0', '0', '0', '11:660', '0', 0, '2021-09-08 17:12:32', '2021-09-08 17:18:20'),
(58, 'Lunch', '35', '26.7', '14.7', '240', '0.1', '0', '0', '0', '0', '14:840', '0', 0, '2021-09-08 17:12:53', '2021-09-08 17:19:39'),
(59, 'Dinner', '35', '20', '11', '180', '0', '0', '0', '0', '0', '21:1260', '0', 0, '2021-09-08 17:13:22', '2021-09-08 17:20:30'),
(60, 'testt', '36', '45', '44', '44', '44', '0', '0', '0', '0', '2:130', '0', 0, '2021-09-08 18:11:19', '2021-09-08 18:11:49'),
(61, 'test meal1', '39', '10', '10', '10', '10', '0', '0', '0', '0', '6:370', '0', 0, '2021-09-08 18:27:34', '2021-09-08 18:28:32'),
(62, 'yghh', '40', '0', '0', '0', '0', '0', '0', '0', '0', '03:15', '0', 0, '2021-12-08 07:34:53', '2021-12-08 07:34:53'),
(63, 'yggg', '43', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-08 10:22:12', '2021-12-08 10:22:12'),
(64, 'tff', '44', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-08 11:05:25', '2021-12-08 11:05:25'),
(65, 'yvgv', '45', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-08 11:07:17', '2021-12-08 11:07:17'),
(66, 'tfg', '47', '0', '0', '0', '0', '0', '0', '0', '0', '04:15', '0', 0, '2021-12-08 11:29:11', '2021-12-08 11:29:11'),
(67, 'yfgh', '52', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-08 14:32:08', '2021-12-08 14:32:08'),
(68, 'tdvdg', '54', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-08 19:19:17', '2021-12-08 19:19:17'),
(69, 'uggh', '56', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 06:03:16', '2021-12-09 06:03:16'),
(70, 'yfg', '57', '0', '0', '0', '0', '0', '0', '0', '0', '04:15', '0', 0, '2021-12-09 06:04:29', '2021-12-09 06:04:29'),
(71, 'yfcv', '58', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 06:06:23', '2021-12-09 06:06:23'),
(72, 'hff', '59', '0', '0', '0', '0', '0', '0', '0', '0', '04:05', '0', 0, '2021-12-09 06:08:21', '2021-12-09 06:08:21'),
(73, 'yfgh', '60', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 06:09:47', '2021-12-09 06:09:47'),
(74, 'hhhgg', '61', '0', '0', '0', '0', '0', '0', '0', '0', '02:05', '0', 0, '2021-12-09 06:54:58', '2021-12-09 06:54:58'),
(75, 'yfgg', '62', '6', '6', '6', '6', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 06:56:33', '2021-12-09 06:58:10'),
(76, 'yghh', '63', '66', '6', '6', '6', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 07:18:13', '2021-12-09 07:18:49'),
(77, 'week', '64', '5', '5', '5', '5', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 08:12:52', '2021-12-09 08:13:25'),
(78, 'Ugo', '65', '102', '102', '102', '102', '0', '0', '0', '0', '04:25', '0', 0, '2021-12-09 08:24:16', '2021-12-27 13:30:23'),
(79, 'tgg', '66', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 08:30:01', '2021-12-09 08:30:01'),
(80, 'try', '67', '3', '3', '6', '9', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 08:51:40', '2021-12-09 08:52:12'),
(81, 'try', '68', '9', '9', '9', '9', '0', '0', '0', '0', '04:15', '0', 0, '2021-12-09 09:00:16', '2021-12-09 09:00:41'),
(82, 'ugh', '69', '0', '0', '0', '0', '0', '0', '0', '0', '04:15', '0', 0, '2021-12-09 09:05:03', '2021-12-09 09:05:03'),
(83, '5th', '70', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 09:07:38', '2021-12-09 09:07:38'),
(84, 'gfyg', '71', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 10:12:07', '2021-12-09 10:12:07'),
(85, 'jjj', '72', '0', '0', '0', '0', '0', '0', '0', '0', '03:15', '0', 0, '2021-12-09 10:18:40', '2021-12-09 10:18:40'),
(86, 'ugh', '73', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 10:33:43', '2021-12-09 10:33:43'),
(87, 'in', '76', '0', '0', '0', '0', '0', '0', '0', '0', '03:15', '0', 0, '2021-12-09 11:03:55', '2021-12-09 11:03:55'),
(88, 'ffdf', '77', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 11:32:56', '2021-12-09 11:32:56'),
(89, 'do', '78', '0', '0', '0', '0', '0', '0', '0', '0', '05:15', '0', 0, '2021-12-09 12:25:39', '2021-12-09 12:25:39'),
(90, 'rff', '79', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 12:30:53', '2021-12-09 12:30:53'),
(91, 'dB', '80', '0', '0', '0', '0', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 12:39:47', '2021-12-09 12:39:47'),
(92, 'fvbv', '81', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 13:09:24', '2021-12-09 13:09:24'),
(93, 'fgvg', '82', '0', '0', '0', '0', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 13:11:51', '2021-12-09 13:11:51'),
(94, 'dB', '83', '0', '0', '0', '0', '0', '0', '0', '0', '05:10', '0', 0, '2021-12-09 13:13:43', '2021-12-09 13:13:43'),
(95, 'ffg', '84', '2', '5', '5', '5', '0', '0', '0', '0', '05:05', '0', 0, '2021-12-09 13:16:08', '2021-12-09 13:16:33'),
(96, 'dB', '85', '5', '5', '5', '5', '0', '0', '0', '0', '04:10', '0', 0, '2021-12-09 13:19:37', '2021-12-09 13:20:40'),
(97, 'yfgf', '87', '2', '2', '2', '5', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-09 13:23:21', '2021-12-09 13:23:53'),
(98, 'yfgh', '88', '2', '2', '2', '2', '0', '0', '0', '0', '03:10', '0', 0, '2021-12-10 09:51:43', '2021-12-10 09:52:07'),
(99, 'Breakfast', '89', '8855', '8', '888', '89', '0', '0', '0', '0', '02:05', '0', 0, '2021-12-27 13:00:04', '2021-12-27 13:26:41'),
(100, 'Lunch', '89', '0', '0', '0', '0', '0', '0', '0', '0', '03:00', '0', 0, '2021-12-27 13:08:40', '2021-12-27 13:08:40'),
(101, 'breakfast', '90', '658', '53.2', '889', '88', '0', '0', '0', '0', '02:00', '0', 0, '2021-12-28 06:42:52', '2021-12-28 06:43:37'),
(104, 'lunch', '93', '1000', '2000', '1', '1000', '0', '0', '0', '0', '05:00', '0', 0, '2021-12-29 06:02:30', '2021-12-29 06:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `custom_diet_plan_meal_dish`
--

CREATE TABLE `custom_diet_plan_meal_dish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbohydrates` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_diet_plan_meal_dish`
--

INSERT INTO `custom_diet_plan_meal_dish` (`id`, `name`, `meal_id`, `quantity`, `description`, `weight`, `image`, `protein`, `calories`, `fat`, `carbohydrates`, `caution`, `status`, `created_at`, `updated_at`) VALUES
(107, 'test', '55', NULL, 'test', '45', 'diet_plans_dishes_cover_images/scaled_image_picker8840704311670745441.jpg', '56.0', '56.0', '56.0', '56.0', 'test', 0, '2021-09-08 15:31:48', '2021-09-08 15:31:48'),
(108, '5 egg whites', '56', NULL, 'take 5 egg whites', '5', 'diet_plans_dishes_cover_images/scaled_image_picker2219154574994238552.jpg', '18.0', '85.0', '0.5', '1.0', 'none', 0, '2021-09-08 17:15:14', '2021-09-08 17:15:14'),
(109, 'uncooked oats', '56', NULL, 'eat oats', '33', 'diet_plans_dishes_cover_images/scaled_image_picker4394497457971644427.jpg', '5.0', '116.0', '2.0', '20.5', 'none', 0, '2021-09-08 17:16:27', '2021-09-08 17:16:27'),
(110, 'wheat bread', '57', NULL, 'eat bread', '29', 'diet_plans_dishes_cover_images/scaled_image_picker2938316224233721550.jpg', '4.0', '77.0', '0.9', '14.0', 'none', 0, '2021-09-08 17:18:20', '2021-09-08 17:18:20'),
(111, 'chicken', '58', NULL, 'I could eat chicken', '113.3', 'diet_plans_dishes_cover_images/scaled_image_picker7390169174753462003.jpg', '26.7', '240.0', '14.7', '0.1', 'none', 0, '2021-09-08 17:19:39', '2021-09-08 17:19:39'),
(112, 'chicken boneless', '59', NULL, 'eat chicken', '85', 'diet_plans_dishes_cover_images/scaled_image_picker7112650234001307402.jpg', '20.0', '180.0', '11.0', '0.0', 'none', 0, '2021-09-08 17:20:30', '2021-09-08 17:20:30'),
(113, 'fun', '60', NULL, 'cm', '55', 'diet_plans_dishes_cover_images/scaled_image_picker6892854164118904322.jpg', '45.0', '44.0', '44.0', '44.0', 'cm', 0, '2021-09-08 18:11:49', '2021-09-08 18:11:49'),
(114, 'test', '61', NULL, 'test', '50', NULL, '10.0', '10.0', '10.0', '10.0', 'test', 0, '2021-09-08 18:28:32', '2021-09-08 18:28:32'),
(115, 'yggg', '75', NULL, 'hvb', '6', 'diet_plans_dishes_cover_images/scaled_image_picker6872529283294458180.jpg', '6.0', '6.0', '6.0', '6.0', 'jvb', 0, '2021-12-09 06:58:10', '2021-12-09 06:58:10'),
(116, 'yhhh', '76', NULL, 'yggg', '6', 'diet_plans_dishes_cover_images/scaled_image_picker7065706554440382240.png', '66.0', '6.0', '6.0', '6.0', 'hgvh', 0, '2021-12-09 07:18:49', '2021-12-09 07:18:49'),
(117, 'jee', '77', NULL, 'to', '5', 'diet_plans_dishes_cover_images/scaled_image_picker3543743509898966889.jpg', '5.0', '5.0', '5.0', '5.0', 'FYI', 0, '2021-12-09 08:13:25', '2021-12-09 08:13:25'),
(119, 'yggg', '78', NULL, 'gghh', '3', 'diet_plans_dishes_cover_images/scaled_image_picker2871800714840032616.jpg', '3.0', '3.0', '3.0', '3.0', 'hbbb', 0, '2021-12-09 08:25:27', '2021-12-09 08:25:27'),
(120, 'tm', '80', NULL, 'try', '3', 'diet_plans_dishes_cover_images/scaled_image_picker7731415655722896700.jpg', '3.0', '6.0', '3.0', '9.0', 'thy', 0, '2021-12-09 08:52:12', '2021-12-09 08:52:12'),
(121, 'try', '81', NULL, 'try', '9', 'diet_plans_dishes_cover_images/scaled_image_picker6207358367401770263.jpg', '9.0', '9.0', '9.0', '9.0', 'try', 0, '2021-12-09 09:00:41', '2021-12-09 09:00:41'),
(122, 'yfgh', '95', NULL, 'rfvv', '2', 'diet_plans_dishes_cover_images/scaled_image_picker8255215298571872757.jpg', '2.0', '5.0', '5.0', '5.0', 'gcv', 0, '2021-12-09 13:16:33', '2021-12-09 13:16:33'),
(123, 'gugh', '96', NULL, 'fun', '5', 'diet_plans_dishes_cover_images/scaled_image_picker4363533024481435603.jpg', '5.0', '5.0', '5.0', '5.0', 'dB', 0, '2021-12-09 13:20:40', '2021-12-09 13:20:40'),
(124, 'you', '97', NULL, 'u', '3', 'diet_plans_dishes_cover_images/scaled_image_picker5660343058950746960.jpg', '2.0', '2.0', '2.0', '5.0', 'u', 0, '2021-12-09 13:23:53', '2021-12-09 13:23:53'),
(125, 'ufgg', '98', NULL, 'yfg', '3', 'diet_plans_dishes_cover_images/scaled_image_picker750427222323056767.jpg', '2.0', '2.0', '2.0', '2.0', 'gcvh', 0, '2021-12-10 09:52:07', '2021-12-10 09:52:07'),
(129, 'fffc', '99', NULL, 'xcccx', '555', 'diet_plans_dishes_cover_images/scaled_image_picker5918854131447718879.jpg', '8855.0', '888.0', '8.0', '89.0', 'ccd', 0, '2021-12-27 13:26:41', '2021-12-27 13:26:41'),
(130, 'gab', '78', NULL, 'hb', '99', 'diet_plans_dishes_cover_images/scaled_image_picker1245292775789989019.jpg', '99.0', '99.0', '99.0', '99.0', 'hh', 0, '2021-12-27 13:30:23', '2021-12-27 13:30:23'),
(131, 'Eggs', '101', NULL, 'check', '258', 'diet_plans_dishes_cover_images/scaled_image_picker8269492958241835580.jpg', '658.0', '889.0', '53.2', '88.0', 'check', 0, '2021-12-28 06:43:37', '2021-12-28 06:43:37'),
(132, 'andy wala burger', '104', NULL, 'pindi', '1000', 'diet_plans_dishes_cover_images/scaled_image_picker7998245660923397857.jpg', '1000.0', '1.0', '2000.0', '1000.0', 'nm', 0, '2021-12-29 06:03:45', '2021-12-29 06:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'c', '2021-12-20 08:25:45', '2021-12-20 08:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `food_library`
--

CREATE TABLE `food_library` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `caution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fat_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `calories_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `carbohydrates_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
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
(563, '2014_10_12_000000_create_users_table', 1),
(564, '2014_10_12_100000_create_password_resets_table', 1),
(565, '2019_08_19_000000_create_failed_jobs_table', 1),
(566, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(567, '2021_04_27_082229_create_user_logs_table', 1),
(568, '2021_04_29_084807_create_contacts_table', 1),
(569, '2021_05_25_130145_create_plan_reviews_table', 1),
(570, '2021_05_26_075831_create_plan_ratings_table', 1),
(571, '2021_05_28_132941_create_user_ratings_table', 1),
(572, '2021_05_31_064148_create_user_reviews_table', 1),
(573, '2021_06_04_084645_create_user_trainers_subscriptions_table', 1),
(574, '2021_06_07_084810_create_app_categories_table', 1),
(575, '2021_06_08_124707_create_user_subscriptions_history_table', 1),
(576, '2021_06_15_120442_create_sub_categories_table', 1),
(577, '2021_06_15_120606_create_child_categories_table', 1),
(578, '2021_06_15_121249_create_workout_plan_table', 1),
(579, '2021_06_15_121322_create_workout_plan_exercise_table', 1),
(580, '2021_06_15_121411_create_workout_plan_game_table', 1),
(581, '2021_06_15_121506_create_workout_plan_details_table', 1),
(582, '2021_06_18_062340_create_video_library_table', 1),
(583, '2021_06_30_123904_create_workout_plans_calories_table', 1),
(584, '2021_06_30_133510_create_user_workout_plans_table', 1),
(585, '2021_06_30_133655_create_user_workout_plan_details_table', 1),
(586, '2021_06_30_133716_create_user_workout_plan_games_table', 1),
(587, '2021_06_30_133736_create_user_workout_plan_exercises_table', 1),
(588, '2021_08_05_130052_create_question_bank_table', 1),
(589, '2021_08_05_130304_create_question_options_table', 1),
(590, '2021_08_06_131224_create_plan_requests_table', 1),
(591, '2021_08_06_131554_create_trainer_questions_table', 1),
(592, '2021_08_06_131806_create_request_questions_answers_table', 1),
(593, '2021_08_25_063953_create_custom_diet_plan_table', 1),
(594, '2021_08_25_081829_create_custom_diet_plan_meal_table', 1),
(595, '2021_08_25_082045_create_custom_diet_plan_meal_dish_table', 1),
(596, '2021_09_06_130100_create_custom_diet_plan_day_table', 1),
(597, '2021_09_06_134141_create_user_monthly_history_table', 1),
(598, '2021_09_06_134233_create_food_library_table', 1),
(599, '2021_09_06_134310_create_food_category_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('011f8e2816a129056f12bc410614fbc7db0db7fe85bcb6e68875aaa8490f10e8dcc5e433b9bed5d9', 40, 1, 'authToken', '[]', 0, '2021-12-29 11:56:56', '2021-12-29 11:56:56', '2022-12-29 11:56:56'),
('01d690a239db4ca72fd8ec621412c29ae00563a4b0a8fe17649f44aaa4e2a63b919da2badcef9598', NULL, 1, 'authToken', '[]', 0, '2021-12-08 07:58:18', '2021-12-08 07:58:18', '2022-12-08 07:58:18'),
('020d3a476427f5cc4d782710c5fc968d9bde3e4a4aa6d1d15567179125d3b4d93c104922d4372867', 32, 1, 'authToken', '[]', 0, '2022-01-10 09:07:26', '2022-01-10 09:07:26', '2023-01-10 09:07:26'),
('03fd61b4287cec6db95b1ecb1af2ecd9924c4edda7d2df2793a75677ecce4cbdc06c06afdd938568', 36, 1, 'authToken', '[]', 0, '2021-12-21 13:51:59', '2021-12-21 13:51:59', '2022-12-21 13:51:59'),
('05874baa78923e08c69f722917ad9bdd4c687a3922339a2ec9a5830d3e1009a84d8131a8905d8145', 11, 1, 'authToken', '[]', 0, '2021-11-24 12:11:15', '2021-11-24 12:11:15', '2022-11-24 12:11:15'),
('08f3c0c9d6ed86cf8fed5a5c83bc174cdfd76680314a63fe4adb7bd1f777fc198015a555d1c4193f', 32, 1, 'authToken', '[]', 0, '2021-12-27 11:16:06', '2021-12-27 11:16:06', '2022-12-27 11:16:06'),
('093823d9c461c610cb80ada75ceeb9ac10f12991154ff42af3534e4a59b0d42bb0d6919f03eb0c9d', NULL, 1, 'authToken', '[]', 0, '2021-12-12 15:15:19', '2021-12-12 15:15:19', '2022-12-12 15:15:19'),
('0aaafcb3753146ba7afc01aa85eb8939776ac85adabcef59b3426c98c920b87d8d3ec759b8067101', 32, 1, 'authToken', '[]', 0, '2021-12-17 10:28:45', '2021-12-17 10:28:45', '2022-12-17 10:28:45'),
('0ac5dbf20dfab587179704a995d2ee7ced2ba18bfed0158bc6a76cb4f0e829edd2fdf40612bf8777', 40, 1, 'authToken', '[]', 0, '2022-01-05 11:26:49', '2022-01-05 11:26:49', '2023-01-05 11:26:49'),
('0b64bc6bd1ed3eb52675cf8f3848dac76dc1eb4c7bae14aa63ada57e997c3aad649e4ad578bcc60f', 32, 1, 'authToken', '[]', 0, '2021-12-20 12:22:56', '2021-12-20 12:22:56', '2022-12-20 12:22:56'),
('100400b4102df1f027e4e23562e460fb9be5984c53895f3b28f0059632c2872d1525399ccf10aaf0', 3, 1, 'authToken', '[]', 0, '2021-11-23 11:38:40', '2021-11-23 11:38:40', '2022-11-23 11:38:40'),
('1164ad20e73467ff719e2288ea90ade9a5c13160d541fbb137517d124b1662590b6eff957aa3edf4', 1, 1, 'authToken', '[]', 0, '2021-12-08 10:20:41', '2021-12-08 10:20:41', '2022-12-08 10:20:41'),
('13aaab203787b7ea41d5822aac3ffecf273026940a0326d3f54f0f8765ba0e9e2d6c746bea665039', NULL, 1, 'authToken', '[]', 0, '2021-12-13 10:28:27', '2021-12-13 10:28:27', '2022-12-13 10:28:27'),
('17318da2151b065e7934199b5a9b667e25497ca8241a0c4af8dcfb084b54672bfb79451d252bf3f6', 3, 1, 'authToken', '[]', 0, '2021-11-23 12:53:18', '2021-11-23 12:53:18', '2022-11-23 12:53:18'),
('1aed71d7f4a705f8149d0180249db80627816d739f72cc721e544c341fb7cf5fb98a0d1a0ae8d6e8', 32, 1, 'authToken', '[]', 0, '2021-12-23 12:31:16', '2021-12-23 12:31:16', '2022-12-23 12:31:16'),
('1af5b17a36213d83d223cf20d5eb3d4470f6eba4424a28c030517541fa7cae43711b25999f4a903c', 40, 1, 'authToken', '[]', 0, '2021-12-28 07:42:01', '2021-12-28 07:42:01', '2022-12-28 07:42:01'),
('1bea5b5687fb172123ce9b120b0b31a89b1f95d43d5511d8cd0c97fd09f8600fb3c105626972ef07', 32, 1, 'authToken', '[]', 0, '2021-12-21 09:54:18', '2021-12-21 09:54:18', '2022-12-21 09:54:18'),
('1c9c620a9cf96dc0f2f0e285dcff669f0af38eec714f5fa8451ec0b82d8a260f39eed41abe42059c', 32, 1, 'authToken', '[]', 0, '2021-12-28 12:44:07', '2021-12-28 12:44:07', '2022-12-28 12:44:07'),
('2473afe7f4c80f6b20702fc4ed04f9577d11f3a8b4163b6505fabefc4bfa08e639a13f6b79a289de', 32, 1, 'authToken', '[]', 0, '2021-12-16 08:37:14', '2021-12-16 08:37:14', '2022-12-16 08:37:14'),
('2b0724daf8f8f2d0bdb35bd4fa5b8d5f12a9bb294346547eb7871b3f6c6e8bc22627b2b3037e21bb', 40, 1, 'authToken', '[]', 0, '2021-12-29 12:13:48', '2021-12-29 12:13:48', '2022-12-29 12:13:48'),
('2b7174d0377516c60635e4c63d8eccba4bd58b5fe380ffb946c753448278b60215664d4ccd15f039', 38, 1, 'authToken', '[]', 0, '2021-12-27 06:15:24', '2021-12-27 06:15:24', '2022-12-27 06:15:24'),
('2bd09209263808abd03ecaacbd3f87590edf0087b1e3d776d8cf32184f21b863fb65b7870ee83f1a', NULL, 1, 'authToken', '[]', 0, '2021-12-20 18:33:31', '2021-12-20 18:33:31', '2022-12-20 18:33:31'),
('2cbaca75c041b7bc75dea21c25763cab90eb472e193b6efc66ed898a5f1058c207453fa9f01b8fa6', 38, 1, 'authToken', '[]', 0, '2021-12-27 06:23:54', '2021-12-27 06:23:54', '2022-12-27 06:23:54'),
('31f510fed945f620813fc0af4665a0384bcca9c7cdbd3fa8ead91192db5725f85ee5812f3ad04f2e', 32, 1, 'authToken', '[]', 0, '2021-12-27 05:57:14', '2021-12-27 05:57:14', '2022-12-27 05:57:14'),
('3255dad24033b06cda371ac794b87597e3247a53964fa12ac81959d02723b7af6093808c3fcbd14e', NULL, 1, 'authToken', '[]', 0, '2021-12-21 13:50:20', '2021-12-21 13:50:20', '2022-12-21 13:50:20'),
('34a92d16015af7f99dae3da23862818c8fe91e4c14d1422a7e4476dc7a9d4615c888e543039e0d5f', 40, 1, 'authToken', '[]', 0, '2021-12-28 13:25:13', '2021-12-28 13:25:13', '2022-12-28 13:25:13'),
('34f1da3c22d5b83c8b4d2d81ab0a7f6cb2af9f67b4a0c3946b0244c85dc1e747faa885a66f62723d', 3, 1, 'authToken', '[]', 0, '2021-11-25 13:36:45', '2021-11-25 13:36:45', '2022-11-25 13:36:45'),
('351e06b949287949977046200fbfa52667a41710c75bde2d744588ccabfdf90de4ce9440aa739f1c', 32, 1, 'authToken', '[]', 0, '2021-12-28 07:49:21', '2021-12-28 07:49:21', '2022-12-28 07:49:21'),
('36a821d234c412a67f04c30c62da6cb85cb0f7c45861da49fd0be18cab8227bfc344c524f55be20e', 32, 1, 'authToken', '[]', 0, '2021-12-17 07:25:58', '2021-12-17 07:25:58', '2022-12-17 07:25:58'),
('3855e3e799d22134fe92d5d5ce77c531e522e76405666855f102b6743faf9d0b2ac3ef7091049b42', 32, 1, 'authToken', '[]', 0, '2021-12-17 05:32:33', '2021-12-17 05:32:33', '2022-12-17 05:32:33'),
('3e1bfa5b5dbb713df360461785e3ba0fcfa247d8c66b8cebe00ca0d7bdc597b868efbdab89e7d6c3', 40, 1, 'authToken', '[]', 0, '2021-12-28 07:55:27', '2021-12-28 07:55:27', '2022-12-28 07:55:27'),
('446ae156516a6d50d1388cf4252da2c0c8ab47d0a353de1b7369de3aa8dade64b34d57bf00fda209', 3, 1, 'authToken', '[]', 0, '2021-11-25 11:37:51', '2021-11-25 11:37:51', '2022-11-25 11:37:51'),
('448380801e16ea8530bed2e8e722cee1b4c930a3082af91983866f2fb686fb83167ce19d0359631d', NULL, 1, 'authToken', '[]', 0, '2021-12-10 11:06:36', '2021-12-10 11:06:36', '2022-12-10 11:06:36'),
('4620daddcee0e26452efe71aa760c23d641226b37b68e16109b0287ec249320cdec7834f69665638', 32, 1, 'authToken', '[]', 0, '2021-12-21 13:38:08', '2021-12-21 13:38:08', '2022-12-21 13:38:08'),
('46d1001d4f9b8d790da558c8750cb4e334a15b2206255b03aa85d2facb49fc1c4d78e5a19af020f9', 32, 1, 'authToken', '[]', 0, '2022-01-06 11:50:04', '2022-01-06 11:50:04', '2023-01-06 11:50:04'),
('488bd85aec920388398adfcadfd762bf21aa71680d02e9983f61d92ac147097ad0f70b1223d19eb7', 3, 1, 'authToken', '[]', 0, '2021-12-14 16:34:29', '2021-12-14 16:34:29', '2022-12-14 16:34:29'),
('498e77982f46cbdc73f89d530b367e7876c6717364c6dd00f6f5812c996af68c8854e93b6225ace0', NULL, 1, 'authToken', '[]', 0, '2021-12-27 11:02:38', '2021-12-27 11:02:38', '2022-12-27 11:02:38'),
('4a57d800be5727a3e315406b2379ff3a2ae8babeec1a84ec9d543d8e7c6f9f780f3688eedda196f9', 32, 1, 'authToken', '[]', 0, '2021-12-28 06:34:24', '2021-12-28 06:34:24', '2022-12-28 06:34:24'),
('4a7cde3d60bedfc49fd5ac383876c5adc073e62bce21df4d19e7120de0ecb75cf66ac391ba9b8bdd', 40, 1, 'authToken', '[]', 0, '2021-12-27 12:41:42', '2021-12-27 12:41:42', '2022-12-27 12:41:42'),
('4ad5ede416ed83f11d2f81ed47e91b37f6baf3a3a0efbaa5b9636dfee16f887afe42fc2fc65aea60', 40, 1, 'authToken', '[]', 0, '2021-12-27 12:32:21', '2021-12-27 12:32:21', '2022-12-27 12:32:21'),
('4c16fe6448e29370853edf737010ddd45131e18cdefcca7327e206a8e75ae408eedb530c2c817efa', 1, 1, 'authToken', '[]', 0, '2021-12-07 12:35:19', '2021-12-07 12:35:19', '2022-12-07 12:35:19'),
('4cc2f356194044655c1f817dcbb26d4d5c043cfa282f43cb7b370bc894c3d9c4f3939e4084c96207', 32, 1, 'authToken', '[]', 0, '2021-12-28 07:19:24', '2021-12-28 07:19:24', '2022-12-28 07:19:24'),
('4d57562f9471f2bfa9baabc9ed3406830491a362c85502d8885ace868320ce9e6b503db0590ac533', 32, 1, 'authToken', '[]', 0, '2021-12-31 10:29:13', '2021-12-31 10:29:13', '2022-12-31 10:29:13'),
('4d5c0c23db239080e144cfe5b29946e6b35778912b6f67eeff13327c985b2fbc29a56f326b8fe13c', 32, 1, 'authToken', '[]', 0, '2021-12-28 11:36:19', '2021-12-28 11:36:19', '2022-12-28 11:36:19'),
('510cf0f5de0e5dd97c9904991dab683b61282343d594ea6db8204da51e505928aec6989db8d0123f', 32, 1, 'authToken', '[]', 0, '2021-12-29 12:12:29', '2021-12-29 12:12:29', '2022-12-29 12:12:29'),
('55b69d13472f209a3b1cc245ac85e9495c2d88d8a751d682944e91c299a7e2c32ccd3bd121339f9e', 38, 1, 'authToken', '[]', 0, '2021-12-27 10:56:11', '2021-12-27 10:56:11', '2022-12-27 10:56:11'),
('583292e0b648ef4bb4588270d968ace5e1cacf1be0bbabcd96f7f233407d815683c9611dd2f0f715', 37, 1, 'authToken', '[]', 0, '2021-12-21 13:57:42', '2021-12-21 13:57:42', '2022-12-21 13:57:42'),
('591ef2692fb53e63fb9b191fc715600ff4f19059a95aa9d71daecb9d6ab524c1980b9639dac55da9', NULL, 1, 'authToken', '[]', 0, '2021-12-21 13:57:11', '2021-12-21 13:57:11', '2022-12-21 13:57:11'),
('5b4d435c07c6882944eea837a3213f091ce6df59034a8e952c049c766f38f0bbb97a2a77d9320016', 1, 1, 'authToken', '[]', 0, '2021-12-09 10:11:26', '2021-12-09 10:11:26', '2022-12-09 10:11:26'),
('5ebb81f1907ffeee239a3da05a97ef128a5ac706a15c9bb9bdc5b2017670e520b570ed539352ee1a', 1, 1, 'authToken', '[]', 0, '2021-12-10 11:08:25', '2021-12-10 11:08:25', '2022-12-10 11:08:25'),
('62185f7a5d713e435e2d4283204c743b40a4246b8f2e39e73f189c3ec5002902284637effbef4842', NULL, 1, 'authToken', '[]', 0, '2021-12-12 15:14:02', '2021-12-12 15:14:02', '2022-12-12 15:14:02'),
('6555dd4551a138637d6849d2a548646e4226ee62ab1a8157276a2bce7fb89fca96d50531e16e10c5', NULL, 1, 'authToken', '[]', 0, '2021-11-23 10:55:59', '2021-11-23 10:55:59', '2022-11-23 10:55:59'),
('6a368f0af0cdec231c64c9df64d731d06a1ef3c87c4eae8f79db7190a15d7d701263ce58631a6377', 32, 1, 'authToken', '[]', 0, '2021-12-16 09:26:17', '2021-12-16 09:26:17', '2022-12-16 09:26:17'),
('6a66e64c5a70feaa4fe7211413fe0103b2451086819c2ac8d7b5f0c913c99f52824860c660874b96', 40, 1, 'authToken', '[]', 0, '2021-12-29 12:41:19', '2021-12-29 12:41:19', '2022-12-29 12:41:19'),
('6cae1dd04cf1b5f9ee62abc0c42816543f24f8e771ba0fa9d550610b0ee4dafbc229c35ed35e26e1', 40, 1, 'authToken', '[]', 0, '2021-12-29 11:36:03', '2021-12-29 11:36:03', '2022-12-29 11:36:03'),
('6ef1d0ac38a6b6364ddb6d7169def9c648498d8129fc3977fcd6ed877504ddbf802e9b8f71a80daa', 32, 1, 'authToken', '[]', 0, '2021-12-29 06:21:14', '2021-12-29 06:21:14', '2022-12-29 06:21:14'),
('722ea6fb79eb5802bcea74f321cc4aa9c389bb25e1e94b1c4b54ed32649cff5ed6a134640c2e0a96', 3, 1, 'authToken', '[]', 0, '2021-11-23 13:18:29', '2021-11-23 13:18:29', '2022-11-23 13:18:29'),
('745d5357604fcd20a2c11dc218ad6b9ee85b08f04aba8c9b0268548261be2193094846a22b1fbf21', 32, 1, 'authToken', '[]', 0, '2021-12-21 08:25:10', '2021-12-21 08:25:10', '2022-12-21 08:25:10'),
('77a8c940806f2cf2c3b5276ca770c2dc779d0a6edbc0b84f794f2c75038e6f06909036a409905f5e', NULL, 1, 'authToken', '[]', 0, '2021-12-14 06:18:16', '2021-12-14 06:18:16', '2022-12-14 06:18:16'),
('79d1beee3401087cec7aad0b39f2e1e641b73320b261da955eb9482b7edccc14522580e9d86c03ee', 3, 1, 'authToken', '[]', 0, '2021-11-25 14:08:25', '2021-11-25 14:08:25', '2022-11-25 14:08:25'),
('7c28748b89757ab233c5b714b850c4a233a745cfa957dd64bd6d2d5de8c0c7685b2026b2ad483856', 32, 1, 'authToken', '[]', 0, '2021-12-27 06:14:08', '2021-12-27 06:14:08', '2022-12-27 06:14:08'),
('7dc4bef078a62063c048fd9b279580a980645ce9ae32ab90e9bdd68a823b475d87d3183eadd11b72', 32, 1, 'authToken', '[]', 0, '2021-12-17 05:36:29', '2021-12-17 05:36:29', '2022-12-17 05:36:29'),
('7dde6faab0bf93e58a0101d37cb226fad83ce49a5c2cc20b88bac2e542f5d7ce0119d86098fd7209', 32, 1, 'authToken', '[]', 0, '2021-12-29 11:38:38', '2021-12-29 11:38:38', '2022-12-29 11:38:38'),
('7f3343249620afd22379e77118f70e1bd6b641d71f2c60881ee78b8b86b69163699d2de18a867e03', 3, 1, 'authToken', '[]', 0, '2021-12-17 06:50:08', '2021-12-17 06:50:08', '2022-12-17 06:50:08'),
('851fa6a9a7a9829cc760707620376ca7f3a84f6fb6c2ae58bbced558f5aff60cca2e9e301c64f637', 1, 1, 'authToken', '[]', 0, '2021-12-02 05:51:51', '2021-12-02 05:51:51', '2022-12-02 05:51:51'),
('8635a2a74c2a79f90159c10ce5051ad7adb295651ac3f26f8fb73c14d8ec34ea5da0d492b5bdc509', 3, 1, 'authToken', '[]', 0, '2021-11-25 07:20:48', '2021-11-25 07:20:48', '2022-11-25 07:20:48'),
('87ddb5831163375c74808bd963883e077dc981c23f3f89133fba99261ac54c7000d4e4945e3e8c9d', 32, 1, 'authToken', '[]', 0, '2021-12-27 10:53:16', '2021-12-27 10:53:16', '2022-12-27 10:53:16'),
('891336693594219c0b412a94c368a8e55d5fe6272bea1d6d0e94f1407898b869cfe9685742c6af33', 40, 1, 'authToken', '[]', 0, '2022-01-05 08:59:10', '2022-01-05 08:59:10', '2023-01-05 08:59:10'),
('895ca41435a32192097f8d1d08c89b2778e5b578de7ed50b769ca1631b374ab14747815d0e39484e', 32, 1, 'authToken', '[]', 0, '2022-01-05 10:14:18', '2022-01-05 10:14:18', '2023-01-05 10:14:18'),
('8b2ff6f8a5de0dcbc76ff1906edf431fe766dbb3b983a7c9cab6aa30ded822b45af74ec0455b0b9a', 32, 1, 'authToken', '[]', 0, '2021-12-29 05:39:35', '2021-12-29 05:39:35', '2022-12-29 05:39:35'),
('8cde1d2c2f415a3c091b4f7264aa81bacda69a639f6e7da517ffb3b8e61b0a5e709700a182681022', 3, 1, 'authToken', '[]', 0, '2022-01-25 11:57:52', '2022-01-25 11:57:52', '2023-01-25 11:57:52'),
('8f6faad1e3e18cae502b183338617129afb9a45c5ad189fc5f5b3f935f1f290aec5f7e5216bf183c', 32, 1, 'authToken', '[]', 0, '2021-12-20 13:19:10', '2021-12-20 13:19:10', '2022-12-20 13:19:10'),
('91cb933f529811c8e07c3e0dcc33873138c17d459da9576d3fdc0022de9fb80ca1b0c679894b6ad9', 31, 1, 'authToken', '[]', 0, '2021-12-14 06:18:32', '2021-12-14 06:18:32', '2022-12-14 06:18:32'),
('921790b52129cef934e6cd9df8f469b2c30d9a12eeb79e35cc18c46da4aa831af63edcee252ab8df', 32, 1, 'authToken', '[]', 0, '2021-12-21 08:31:15', '2021-12-21 08:31:15', '2022-12-21 08:31:15'),
('92755db6bfe2082dfc99845e6754d8d6064bb6d241ede9349f6d3fd3273ea3179a9c509874dc7d86', 28, 1, 'authToken', '[]', 0, '2021-12-12 15:14:50', '2021-12-12 15:14:50', '2022-12-12 15:14:50'),
('948f67be5e48a687f4c06524144f6cdbc696d7cac078f7686cecf64402ff1435506c5e5aaa4d8724', 2, 1, 'authToken', '[]', 0, '2021-11-02 01:28:26', '2021-11-02 01:28:26', '2022-11-02 06:28:26'),
('9549d5cf1720dc55d59461205e69451dcf727f722e18496a450f87956411bd78215bb4034da02974', 32, 1, 'authToken', '[]', 0, '2021-12-21 13:49:44', '2021-12-21 13:49:44', '2022-12-21 13:49:43'),
('95a1762f0492caac9804a9d12f9650694052dca00c1ebda49687de727bf3ce93269a28a43b9d27d8', 38, 1, 'authToken', '[]', 0, '2021-12-28 06:38:16', '2021-12-28 06:38:16', '2022-12-28 06:38:16'),
('97361ba52d35735d5eb23ebc6aaa794d0064539597fedcc1094bb5bd24362a451f6bc89b6f0401fc', 32, 1, 'authToken', '[]', 0, '2021-12-29 13:12:55', '2021-12-29 13:12:55', '2022-12-29 13:12:55'),
('97a2df28e56270b9ba9ae0a25cbe20a8794138df330e73a339d2fd5b539f20143e624e093a5e5e5f', 32, 1, 'authToken', '[]', 0, '2021-12-28 07:57:21', '2021-12-28 07:57:21', '2022-12-28 07:57:21'),
('99b06c9ea1f60d4107359d5e24e707cf79b4efca03d7f86b339bec7abdcef26805b77f7ae00b393d', 1, 1, 'authToken', '[]', 0, '2021-12-06 06:22:08', '2021-12-06 06:22:08', '2022-12-06 06:22:08'),
('9c64de7240bdc761a2c61e9e93b149852bd721f29b32d82b5356a0e9128448eb6de312a26d09487d', NULL, 1, 'authToken', '[]', 0, '2021-12-11 09:29:56', '2021-12-11 09:29:56', '2022-12-11 09:29:56'),
('9ec2e70eb78d121451a23bde55758202ecfbc6594efc1335c38a6bbe89c7a0c6103cf46bb3528d84', 40, 1, 'authToken', '[]', 0, '2021-12-28 12:31:23', '2021-12-28 12:31:23', '2022-12-28 12:31:23'),
('a1a4fe647cefce898c34aeee4efeba250f3926a9aea368fd759975f15b3f60bef12cd636ccf98121', 32, 1, 'authToken', '[]', 0, '2021-12-20 13:25:22', '2021-12-20 13:25:22', '2022-12-20 13:25:22'),
('a24e5a2012929568288ddbf2137a9b12d79641c90ad1170e3f903b5d79e318a36b1c3e5c93f816ab', 40, 1, 'authToken', '[]', 0, '2021-12-29 05:26:09', '2021-12-29 05:26:09', '2022-12-29 05:26:09'),
('a45344163fe6dfd6c545488216641793be0050443661821c20f48e49c5bdae036e221098033fa34e', 32, 1, 'authToken', '[]', 0, '2021-12-29 05:25:11', '2021-12-29 05:25:11', '2022-12-29 05:25:11'),
('a77bfa0316a230e3b577f5f1ea65a53087b538053cd4af589639304e73a811419778085b87e79eb2', 32, 1, 'authToken', '[]', 0, '2021-12-23 12:06:36', '2021-12-23 12:06:36', '2022-12-23 12:06:36'),
('aa9c19dd661af6da0989dae41473c79bc7008a7f5244a117a13baf2b57894027118d97bb780cd44c', 40, 1, 'authToken', '[]', 0, '2021-12-31 09:49:54', '2021-12-31 09:49:54', '2022-12-31 09:49:54'),
('abea0ebf49a9f8942b15d1542b0dfaafc45a85eb4790c3d13cab523d51a8e8324a19b6188411edad', 40, 1, 'authToken', '[]', 0, '2021-12-29 05:53:15', '2021-12-29 05:53:15', '2022-12-29 05:53:15'),
('ac6a943884c24600811d105959604027100dea0440b553b586879f8325c784dd135350c0ea0a4ec5', 32, 1, 'authToken', '[]', 0, '2021-12-23 12:05:06', '2021-12-23 12:05:06', '2022-12-23 12:05:06'),
('adf9e3505ebbd14688ee4330b81cb50e5fec9e7e4d8dad96b57186fc9268bc0143065a1c09e8bd24', 32, 1, 'authToken', '[]', 0, '2022-01-06 12:57:16', '2022-01-06 12:57:16', '2023-01-06 12:57:16'),
('b0f6b46b4172bb74981633c88e0cf28fd98b0a089fce7cd471cc75c645794be52c1770026707bef6', 29, 1, 'authToken', '[]', 0, '2021-12-12 15:15:40', '2021-12-12 15:15:40', '2022-12-12 15:15:40'),
('b137be6f7fd517c2387d04f3d9f3e980b8f195100bddce4e82bef6f621ad28f6c6f82fcf9b1f45b1', NULL, 1, 'authToken', '[]', 0, '2021-12-16 08:36:37', '2021-12-16 08:36:37', '2022-12-16 08:36:37'),
('b23876e11e8fc20125871a21655ea34381af59888f02227ee7638d85f5a3ea677f38a14059ffae50', 38, 1, 'authToken', '[]', 0, '2021-12-27 06:19:59', '2021-12-27 06:19:59', '2022-12-27 06:19:59'),
('b53344753aa0248bed8b7964193f72c1f95534332f357113901eb8a6fb9975d30dfaeed3be5033cc', NULL, 1, 'authToken', '[]', 0, '2021-12-27 12:30:53', '2021-12-27 12:30:53', '2022-12-27 12:30:53'),
('b793ef836da4c3d30d3c9ae602d08ee6a98b42dce6a88dddcc54ffeb88d3d3edec699493cc9e148b', 3, 1, 'authToken', '[]', 0, '2021-12-02 12:06:51', '2021-12-02 12:06:51', '2022-12-02 12:06:51'),
('b94bec98332b9b24558ad58dcb487ea35e32d3a0bc52724f722d66036544116bc611367e15b01226', 32, 1, 'authToken', '[]', 0, '2021-12-29 11:54:19', '2021-12-29 11:54:19', '2022-12-29 11:54:19'),
('bad755ffcaa85d4996bcddda3b12fccb216aa8290fb6fc28d88632004a997fae1c19da8c870db5cb', 1, 1, 'authToken', '[]', 0, '2021-12-12 15:20:41', '2021-12-12 15:20:41', '2022-12-12 15:20:41'),
('bc1ba25b4e311a0062ae19cc59dcb3f22bad4392f4fa03dd477a2e568ab370e3bb81845d47e7748d', 40, 1, 'authToken', '[]', 0, '2021-12-28 10:19:16', '2021-12-28 10:19:16', '2022-12-28 10:19:16'),
('bce13e7b9ec83aa0952a6deda392fcb5a94c2a46d64ecbd6af7c9db312f385f2efb4a1dbfc623d81', 32, 1, 'authToken', '[]', 0, '2021-12-27 10:22:37', '2021-12-27 10:22:37', '2022-12-27 10:22:37'),
('bd6ba7b91e0e26b3d2a766cb3387e16d66e651f759b37f9f28b5f8b281c1cbec83700693e28f43ed', 38, 1, 'authToken', '[]', 0, '2021-12-27 10:48:43', '2021-12-27 10:48:43', '2022-12-27 10:48:43'),
('be01ca4a2011c21040f7c19fe20bbd5a99f4049497b94c45c49f939ebe7ef0eb6b683dc56367880f', 22, 1, 'authToken', '[]', 0, '2021-11-23 10:50:07', '2021-11-23 10:50:07', '2022-11-23 10:50:07'),
('c06af14c4bf7eb179126722b93cd1fbe3d772ea4d6849d0327c7762730d0600dce581ef5be91be11', 32, 1, 'authToken', '[]', 0, '2021-12-27 06:21:20', '2021-12-27 06:21:20', '2022-12-27 06:21:20'),
('c145bcc34d4664aeacf03d6f3564e6e860bc89bcb438e75c74bc78bbe9a71569baecb68e29907c9d', 39, 1, 'authToken', '[]', 0, '2021-12-28 06:39:21', '2021-12-28 06:39:21', '2022-12-28 06:39:21'),
('c69ec9fc47a618566e85d87146a752d8ade09e1019c54fc2f38091414b9e5d2c4aba88f4955dd82e', 32, 1, 'authToken', '[]', 0, '2021-12-28 07:43:31', '2021-12-28 07:43:31', '2022-12-28 07:43:31'),
('c7344560f5d0d2a79ac191c09ed85ba2c6f3e0bafedde291b50ff48148b24d92feaa9e666fc20475', 3, 1, 'authToken', '[]', 0, '2022-01-11 12:43:25', '2022-01-11 12:43:25', '2023-01-11 12:43:25'),
('c77d3a56a7b6e1d4de3d4e949edfd2a23b319c4a222a436c264ded3db457c9172bb677c6bf4bbb8e', 32, 1, 'authToken', '[]', 0, '2021-12-29 12:40:23', '2021-12-29 12:40:23', '2022-12-29 12:40:23'),
('cb99de2d6ebc0e35c9a64f534e47e53ab81deacff35359ade025aad934a2b3158c787f79c26beab5', 40, 1, 'authToken', '[]', 0, '2021-12-28 06:40:13', '2021-12-28 06:40:13', '2022-12-28 06:40:13'),
('d1a4a2f54ee1544b9bedee8456407c9fd8e8061fe9b99e2ae47ae899f98ec0b7a416f18f3909418f', 32, 1, 'authToken', '[]', 0, '2021-12-29 10:20:23', '2021-12-29 10:20:23', '2022-12-29 10:20:23'),
('d1a9f1d56881d127bdae4e344af288bba7beceed219381a9452ef086f56c1d36c26553fbd61aecf3', 3, 1, 'authToken', '[]', 0, '2021-12-16 11:01:35', '2021-12-16 11:01:35', '2022-12-16 11:01:35'),
('d35dbc55c431a69df65c043d8ae5a3a98329c7cb7798d2d5f5878f32a4ebb459af69ea0078f44688', NULL, 1, 'authToken', '[]', 0, '2021-11-02 01:27:51', '2021-11-02 01:27:51', '2022-11-02 06:27:51'),
('d9216fdc43713fea14dad95d1162e3d88beb55c80f407ca6ec78d34927da92c9f37d663cc0f1f265', 38, 1, 'authToken', '[]', 0, '2021-12-27 06:10:20', '2021-12-27 06:10:20', '2022-12-27 06:10:20'),
('db4cdc2c7408a7e19077d7a0daf6903d736d3a258cb1fcb372324ad31ca6ae6d31190bc1d456c30b', NULL, 1, 'authToken', '[]', 0, '2021-11-23 11:35:37', '2021-11-23 11:35:37', '2022-11-23 11:35:37'),
('dcb8e848a23d482648b51ed1d87be638f7f7c1e07dd9fca4f2582937e5333a7384dff4254a6fb17a', NULL, 1, 'authToken', '[]', 0, '2021-12-10 10:58:40', '2021-12-10 10:58:40', '2022-12-10 10:58:40'),
('e1540d8a7e2762ee5a9f4903e0d4f38b2e15359df81144d9ad6a1fd58208207b6b62aabc155da81b', 32, 1, 'authToken', '[]', 0, '2021-12-21 07:01:25', '2021-12-21 07:01:25', '2022-12-21 07:01:25'),
('e5b1170fe21ac3241f66fb2ed2eb2ff6bec159cc93446795aad768b987b19fdd0cd88533d86ad709', 27, 1, 'authToken', '[]', 0, '2021-12-11 09:30:29', '2021-12-11 09:30:29', '2022-12-11 09:30:29'),
('e6ce879c5f3942b1fd4d33d25842eb58d5ad2d883238567452483ac1e0b38e2550c0c91287ac39b1', 32, 1, 'authToken', '[]', 0, '2021-12-31 10:00:06', '2021-12-31 10:00:06', '2022-12-31 10:00:06'),
('eab7655a4fcdd4218fda501d6aff94c8dff5d61d2f08a7f812da4131745f9e668cb351ff05e4ddec', 1, 1, 'authToken', '[]', 0, '2021-12-09 05:51:34', '2021-12-09 05:51:34', '2022-12-09 05:51:34'),
('eb885f06fdbfa7ce214be4cc1a0f5776916c5bee12784e93932fd01bb4cff97571824b3f776d9587', 39, 1, 'authToken', '[]', 0, '2021-12-27 11:02:58', '2021-12-27 11:02:58', '2022-12-27 11:02:58'),
('ed2a5094b7f53d13c49ab0d1a6391a1168441b2e1d5dedff01953fae9f61c156ee1d7c4029175b2a', 32, 1, 'authToken', '[]', 0, '2021-12-27 12:35:32', '2021-12-27 12:35:32', '2022-12-27 12:35:32'),
('ee877396e1588e2b96a9875d84546c2360dae78218ca86ac59f3e4ebabf0cee9032697562c250fdf', 3, 1, 'authToken', '[]', 0, '2021-12-02 12:09:43', '2021-12-02 12:09:43', '2022-12-02 12:09:43'),
('ef73c2eb058c4e218273d6c54afc6fe76e1093bfe1d79f5b7ead0c82b33b127629685a0750cf61c0', 30, 1, 'authToken', '[]', 0, '2021-12-13 10:28:51', '2021-12-13 10:28:51', '2022-12-13 10:28:51'),
('f4d276d38021865dedb51b9d68668f7491061b13b0b7b346a09fcc23e319a3cd8d33b19bdb09c8fa', 20, 1, 'authToken', '[]', 0, '2021-11-25 12:02:59', '2021-11-25 12:02:59', '2022-11-25 12:02:59'),
('f76ab84fa6bc93f7112e6ee312d264711ff22513cda4dc1a8449df5fed103636cf5bc3ec0a019e6a', 3, 1, 'authToken', '[]', 0, '2021-12-30 05:51:40', '2021-12-30 05:51:40', '2022-12-30 05:51:40'),
('f7b92b601fe39547838f635bb75b31dcb07e0cae736669e92faab8dda9cd67a3c6fb3214a7a342ba', NULL, 1, 'authToken', '[]', 0, '2021-12-27 06:10:03', '2021-12-27 06:10:03', '2022-12-27 06:10:03'),
('f9dd8860d2b9f5e54b146084b0077ed6d948d5f4764f4a59a1bb6f3fcf60a95126ef49c4dfecf585', 3, 1, 'authToken', '[]', 0, '2022-01-24 07:22:51', '2022-01-24 07:22:51', '2023-01-24 07:22:51'),
('fae408bbd11109edb05d67878769a96e74751a607f4fff755a809283cf099aaa8fc7f6a1638c9578', 40, 1, 'authToken', '[]', 0, '2021-12-28 07:45:12', '2021-12-28 07:45:12', '2022-12-28 07:45:12'),
('fb1f8fcb4db243bbc393b351e991b844ce2517303f03ec320ff4e1ee1914adaf4adc52281695bdca', 32, 1, 'authToken', '[]', 0, '2021-12-23 12:05:47', '2021-12-23 12:05:47', '2022-12-23 12:05:47'),
('fb9be0bbd1ad32970bded675fe2a87e2cb5124623087b3671ec951108ce9aec239c51350184bca0f', 1, 1, 'authToken', '[]', 0, '2021-12-08 08:28:18', '2021-12-08 08:28:18', '2022-12-08 08:28:18'),
('fcabd644be13604a7d782314e29c06b9a36402d5d6647e71d1bad21ff6f8031876384ae8574c8414', 32, 1, 'authToken', '[]', 0, '2021-12-29 13:08:37', '2021-12-29 13:08:37', '2022-12-29 13:08:37'),
('ffa38ef5bdfa77cda3033d4e1624b6b05cfb715d40dee0f7b0723face0a533eceb76e36969c3e10b', 32, 1, 'authToken', '[]', 0, '2021-12-29 13:16:43', '2021-12-29 13:16:43', '2022-12-29 13:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ironbox Personal Access Client', 'g9OF29P10jT1rf88W8TMOK9wPOzRNXSzoQBdAV7e', NULL, 'http://localhost', 1, 0, 0, '2021-10-28 07:34:38', '2021-10-28 07:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-10-28 07:34:38', '2021-10-28 07:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'my-app-token', '7c8b121f8452ebeab04ba6fee9453a146355a817e49ae63e1fb7376065bccce3', '[\"*\"]', NULL, '2021-09-07 20:24:54', '2021-09-07 20:24:54'),
(2, 'App\\Models\\User', 3, 'my-app-token', 'd2083d3abd68898c3c4170b195daf054930ffd48dfa490f16178a306f40f6ffe', '[\"*\"]', NULL, '2021-09-07 20:28:06', '2021-09-07 20:28:06'),
(3, 'App\\Models\\User', 3, 'my-app-token', '8f598683f007ad55b639697fd05f259c1141983ebff9aa867954f6d42f05c6bc', '[\"*\"]', NULL, '2021-09-07 20:35:15', '2021-09-07 20:35:15'),
(4, 'App\\Models\\User', 1, 'my-app-token', 'e78f3ba7d8d0f5a862dbfe2a82cfc4403d3d468452dd5749e05da406b65790a8', '[\"*\"]', NULL, '2021-09-07 20:36:33', '2021-09-07 20:36:33'),
(5, 'App\\Models\\User', 3, 'my-app-token', 'dc7caff50c1cf0a04ac69b81ac09d15109cb0d83e9b625ecc0037f44c73deac9', '[\"*\"]', NULL, '2021-09-08 13:34:54', '2021-09-08 13:34:54'),
(6, 'App\\Models\\User', 1, 'my-app-token', '5da81e9dc5625d26fadbef5200bc9650e5fd119f9be8a4b8527b623824f9f7e4', '[\"*\"]', NULL, '2021-09-08 13:35:43', '2021-09-08 13:35:43'),
(7, 'App\\Models\\User', 1, 'my-app-token', 'f4d40d670a6a5ebf5ab8f86a65998cce8acfe3ac3c412b6a01ef21c27c438820', '[\"*\"]', NULL, '2021-09-08 13:36:01', '2021-09-08 13:36:01'),
(8, 'App\\Models\\User', 1, 'my-app-token', '835cb3dd2006dca931cfc43ab352fe814e9d9fef18849cd98d226d085ad5000a', '[\"*\"]', NULL, '2021-09-08 13:38:11', '2021-09-08 13:38:11'),
(9, 'App\\Models\\User', 1, 'my-app-token', 'b420d56b05ff733ce4309ddb0446644e6a97b8a976f91550f8e54d235fbeb5f7', '[\"*\"]', NULL, '2021-09-08 13:40:44', '2021-09-08 13:40:44'),
(10, 'App\\Models\\User', 3, 'my-app-token', '9018defcff1257d9b944e211b5389b0705ebc2f1c54060ba3b6e377f842066e0', '[\"*\"]', NULL, '2021-09-08 13:41:08', '2021-09-08 13:41:08'),
(11, 'App\\Models\\User', 1, 'my-app-token', 'cc0284734ff4a5bb806e15559865260bbf77af73ab84e20c3bf9714f6900aa71', '[\"*\"]', NULL, '2021-09-08 13:41:56', '2021-09-08 13:41:56'),
(12, 'App\\Models\\User', 3, 'my-app-token', '32e6bdb6802d9d9bc26b2815d81f848f06c2d1a7ff62b37abeec96cb72ebddda', '[\"*\"]', NULL, '2021-09-08 13:48:17', '2021-09-08 13:48:17'),
(13, 'App\\Models\\User', 1, 'my-app-token', 'c1b17014debdc25d57760cf22cd7c5c5444509416fe24295e81b6917b0751977', '[\"*\"]', NULL, '2021-09-08 13:49:23', '2021-09-08 13:49:23'),
(14, 'App\\Models\\User', 3, 'my-app-token', '848a81102b8d34234d64fa5d60dea317315400e179b95ae7376b61f419739d2b', '[\"*\"]', NULL, '2021-09-08 14:00:26', '2021-09-08 14:00:26'),
(15, 'App\\Models\\User', 3, 'my-app-token', '4232a916068ee9f9937c07790d3e8422e83d915e30d4bbba21d4489378cd081e', '[\"*\"]', NULL, '2021-09-08 16:37:00', '2021-09-08 16:37:00'),
(16, 'App\\Models\\User', 1, 'my-app-token', '169df7caa9856069cb36809da6ed810eb258ebb53d3ba32cd50682671861342b', '[\"*\"]', NULL, '2021-09-08 17:07:07', '2021-09-08 17:07:07'),
(17, 'App\\Models\\User', 3, 'my-app-token', '59969683a2030a8293b627d0073a22cd2fe314dc883e9d4c4df7964e5e04b729', '[\"*\"]', NULL, '2021-09-08 17:31:52', '2021-09-08 17:31:52'),
(18, 'App\\Models\\User', 1, 'my-app-token', '42b6c53b700d16fda333b40b138b2c17d6450e64a08d5144790c81a11796eeba', '[\"*\"]', NULL, '2021-09-08 17:53:12', '2021-09-08 17:53:12'),
(19, 'App\\Models\\User', 1, 'my-app-token', 'b79087e3deba49575498f231435c2ca4be24260eab0a10908a43c7eec4f4dc94', '[\"*\"]', NULL, '2021-09-08 18:09:01', '2021-09-08 18:09:01'),
(20, 'App\\Models\\User', 3, 'my-app-token', '9efe6456becd5fa04fadccc74a8b6571d0879719740d1e1bec6319e2a7ea04a1', '[\"*\"]', NULL, '2021-09-08 18:35:08', '2021-09-08 18:35:08'),
(21, 'App\\Models\\User', 1, 'my-app-token', '1e13186b9b58e384555b1900d69ffe65c3558547a6ef1db1ce0d083d22c70391', '[\"*\"]', NULL, '2021-09-08 20:12:24', '2021-09-08 20:12:24'),
(22, 'App\\Models\\User', 3, 'my-app-token', 'f040da2ba307376eddd920eb335db192386e1f0c22c99336345b3e57067f0c38', '[\"*\"]', NULL, '2021-09-21 18:59:42', '2021-09-21 18:59:42'),
(23, 'App\\Models\\User', 1, 'my-app-token', '295769e9647b5691b104783afd6a7c46538d17863a05b7800f7b08801947bbb1', '[\"*\"]', NULL, '2021-09-21 19:59:51', '2021-09-21 19:59:51'),
(24, 'App\\Models\\User', 3, 'my-app-token', '9ac4d5b3b40ec8b8a29e2d5fa63b28077d95be779201e6a8ae6ba23c87821e60', '[\"*\"]', NULL, '2021-09-22 13:37:16', '2021-09-22 13:37:16'),
(25, 'App\\Models\\User', 1, 'my-app-token', 'f7b9bad1845b58347df4d132d55073f2114e785072bd08010bee84b63d15cb4c', '[\"*\"]', NULL, '2021-09-23 14:41:21', '2021-09-23 14:41:21'),
(26, 'App\\Models\\User', 3, 'my-app-token', '5262542f9b52e91f75618fb20e31253fc9f9d7b9c34c8ee77f5dba4984de1976', '[\"*\"]', NULL, '2021-09-23 15:53:50', '2021-09-23 15:53:50'),
(27, 'App\\Models\\User', 1, 'my-app-token', '410c3c3170e83d06a204334d480bf8cff796221598631c4735af93a87087eb2f', '[\"*\"]', NULL, '2021-09-24 17:23:07', '2021-09-24 17:23:07'),
(28, 'App\\Models\\User', 3, 'my-app-token', '444f3151b527f10b481bacf12983f3317598fb0ce12eb32a9ec1d533675778c5', '[\"*\"]', NULL, '2021-09-24 17:26:48', '2021-09-24 17:26:48'),
(29, 'App\\Models\\User', 3, 'my-app-token', 'cf09c3afc2bbd66ad370cc4fb81da668b27a60bc105a15a1bd7cc3c3b7e7b29f', '[\"*\"]', NULL, '2021-09-25 03:36:05', '2021-09-25 03:36:05'),
(30, 'App\\Models\\User', 1, 'my-app-token', '736fd40f1657eddde95a5da71ec4b749ca31775795fc951766b21ddd992c0d30', '[\"*\"]', NULL, '2021-09-27 14:05:21', '2021-09-27 14:05:21'),
(31, 'App\\Models\\User', 3, 'my-app-token', '0323a3eaede4ed96ae2029ba05d73aab7dd328fa58ffe4f8c6ee1e6a7b997ae7', '[\"*\"]', NULL, '2021-09-27 14:07:45', '2021-09-27 14:07:45'),
(32, 'App\\Models\\User', 3, 'my-app-token', '50354436fbbc5e400ed678fd851da14834c495ae09b252aab4687402769a2d13', '[\"*\"]', NULL, '2021-09-27 16:59:25', '2021-09-27 16:59:25'),
(33, 'App\\Models\\User', 1, 'my-app-token', '4360eb2f60844122611980128271e5375face498c8a478e8541678da103dd9c1', '[\"*\"]', NULL, '2021-09-27 17:19:53', '2021-09-27 17:19:53'),
(34, 'App\\Models\\User', 3, 'my-app-token', 'cf8c0993957d5665346ff9957c407b34616f7999163c7591ce2934b42aae5f66', '[\"*\"]', NULL, '2021-09-27 17:41:03', '2021-09-27 17:41:03'),
(35, 'App\\Models\\User', 3, 'my-app-token', '97c8e7d6f2f176e20f32ce69526b437fb67a2e48820c84ebc543bb075ef705b7', '[\"*\"]', NULL, '2021-09-27 18:52:59', '2021-09-27 18:52:59'),
(36, 'App\\Models\\User', 1, 'my-app-token', '00f1816e05e6f44c240e618a07008a08c67cca02f2404e23d9bfc2830a9e5c4d', '[\"*\"]', NULL, '2021-09-28 14:34:37', '2021-09-28 14:34:37'),
(37, 'App\\Models\\User', 3, 'my-app-token', 'df2a43233925cf8b9b30faa4b521b2e2feee2823f4ff93a677675bf147065b0f', '[\"*\"]', NULL, '2021-09-28 14:43:58', '2021-09-28 14:43:58'),
(38, 'App\\Models\\User', 3, 'my-app-token', '150761a159dcde5690bc721f9a0002df261a3db24b29c3139c2a8275c42ff339', '[\"*\"]', NULL, '2021-09-29 19:39:26', '2021-09-29 19:39:26'),
(39, 'App\\Models\\User', 1, 'my-app-token', '167f8657fdae2c3321b74a426429266c5d0b7752bd74df467ccf0379a4e0b144', '[\"*\"]', NULL, '2021-09-30 19:23:55', '2021-09-30 19:23:55'),
(40, 'App\\Models\\User', 3, 'my-app-token', '3a4f99fe2319e3835a92bfa14e1114238f979c882f472516c4f906c7af773ead', '[\"*\"]', NULL, '2021-09-30 19:38:26', '2021-09-30 19:38:26'),
(41, 'App\\Models\\User', 1, 'my-app-token', 'd2531214097709e52036cb4e57bf876da55a8131c0932285ff938ea38d02a158', '[\"*\"]', NULL, '2021-10-06 13:09:11', '2021-10-06 13:09:11'),
(42, 'App\\Models\\User', 3, 'my-app-token', 'ab6d4bd0f80cc2398da1a77eb846dc3a24c70878537385d697a5fa792fb0eb16', '[\"*\"]', NULL, '2021-10-06 15:25:43', '2021-10-06 15:25:43'),
(43, 'App\\Models\\User', 3, 'my-app-token', '77f7d19e37da6bfa6b55fcc53f1e65f708cc6e8df9f10a944f43dd48e56bd4ff', '[\"*\"]', NULL, '2021-10-06 18:40:58', '2021-10-06 18:40:58'),
(44, 'App\\Models\\User', 6, 'my-app-token', '35188810e06768566e044c03f6c4f2a28156a9b0e71c462cbcbb4923fbf90f45', '[\"*\"]', NULL, '2021-10-07 19:08:19', '2021-10-07 19:08:19'),
(45, 'App\\Models\\User', 3, 'my-app-token', 'd6f86fc29975e9d8f4d2e645bb2cacfa184ca230f1cdc02fa9cedb8fe79de678', '[\"*\"]', NULL, '2021-10-07 19:10:05', '2021-10-07 19:10:05'),
(46, 'App\\Models\\User', 3, 'my-app-token', '76a5688c4c2a8f7f07a9c96a3d9049d1c852b9b36f187c03f446ca3d7353770b', '[\"*\"]', NULL, '2021-10-09 16:25:24', '2021-10-09 16:25:24'),
(47, 'App\\Models\\User', 1, 'my-app-token', '3b789c85b0d32e72328471ac47b65e7719a2435ef05eac7f109e583f73506cbf', '[\"*\"]', NULL, '2021-10-10 17:23:25', '2021-10-10 17:23:25'),
(48, 'App\\Models\\User', 3, 'my-app-token', '8ef1783bf962590143c6b2f046a9ee39b709f64c0676bb50cc03db648ee1afa7', '[\"*\"]', NULL, '2021-10-10 17:24:23', '2021-10-10 17:24:23'),
(49, 'App\\Models\\User', 3, 'my-app-token', '6a001f96d2b72cbe9971f6edf05642a7014c6aeeb0b9f807a0d16777a9bcc1a3', '[\"*\"]', NULL, '2021-10-11 12:39:51', '2021-10-11 12:39:51'),
(50, 'App\\Models\\User', 3, 'my-app-token', '438d4ccc547f1255725a22fc03d52bfc28b24b9dca096621c6c21ce6fdcb0eef', '[\"*\"]', NULL, '2021-10-11 15:38:37', '2021-10-11 15:38:37'),
(51, 'App\\Models\\User', 3, 'my-app-token', 'a92b28f198e98ece6dc3e581778e1d35adda3195562c838ef7def7f46bc02ea7', '[\"*\"]', NULL, '2021-10-12 17:45:35', '2021-10-12 17:45:35'),
(52, 'App\\Models\\User', 3, 'my-app-token', '9da9e0132eefba12d229bc435b7349c40dd9fd2057b314935728ac6775a8cf4b', '[\"*\"]', NULL, '2021-10-12 19:28:40', '2021-10-12 19:28:40'),
(53, 'App\\Models\\User', 3, 'my-app-token', '676e446e6e2ae90f639d612872f282d6743e267a1aeadf22f257d366c90f0a87', '[\"*\"]', NULL, '2021-10-13 13:14:00', '2021-10-13 13:14:00'),
(54, 'App\\Models\\User', 3, 'my-app-token', 'ec816c9f8a7c1c8e88dec8e04c166d1149023b6263947f69573b0a6599d0428c', '[\"*\"]', NULL, '2021-10-13 19:02:46', '2021-10-13 19:02:46'),
(55, 'App\\Models\\User', 3, 'my-app-token', '6843555e93c11c1e64f5651d00cf833df6d598b10f97e0cbcdf62dd1a3574ada', '[\"*\"]', NULL, '2021-10-14 12:48:31', '2021-10-14 12:48:31'),
(56, 'App\\Models\\User', 1, 'my-app-token', '6d74ead48ba6ea9b7d91644a5d578536f5dbd496308f6ac6a56c60e7ac9e1762', '[\"*\"]', NULL, '2021-10-14 18:56:08', '2021-10-14 18:56:08'),
(57, 'App\\Models\\User', 3, 'my-app-token', 'ae0801f9822d64fe2815c3f1b9346926b3c7f547ca75fca6d5b71e490c0628d2', '[\"*\"]', NULL, '2021-10-15 12:35:36', '2021-10-15 12:35:36'),
(58, 'App\\Models\\User', 1, 'my-app-token', '6e0965a34978fd81cece88a39669c9ce00875c870e3ec4b816871c14627c7ef2', '[\"*\"]', NULL, '2021-10-15 14:04:39', '2021-10-15 14:04:39'),
(59, 'App\\Models\\User', 3, 'my-app-token', 'df9cf093ca4f571fe981543c569438f56da46415ddce7e33019cb68bc6452136', '[\"*\"]', NULL, '2021-10-22 01:18:08', '2021-10-22 01:18:08'),
(60, 'App\\Models\\User', 3, 'my-app-token', 'a6d88f77826ec6601d4830685b93268557f6eb064a32eb48f9416ec2d96fe71f', '[\"*\"]', NULL, '2021-10-25 17:04:58', '2021-10-25 17:04:58'),
(61, 'App\\Models\\User', 10, 'my-app-token', '2e6abb023e264f172402dff47e9da254e4aec7129f29e448260a043cfa8c47a9', '[\"*\"]', NULL, '2021-10-25 17:58:47', '2021-10-25 17:58:47'),
(62, 'App\\Models\\User', 11, 'my-app-token', '0e247a8492dbfc0d9ef33977015de7a143dd8dbfa3c3a68f96ad8430d288dfcd', '[\"*\"]', NULL, '2021-10-25 18:03:50', '2021-10-25 18:03:50'),
(63, 'App\\Models\\User', 10, 'my-app-token', '3536720309facb0f47b51d3b96050414ad27693e8b9a2665f0ff29718a4f55b9', '[\"*\"]', NULL, '2021-10-25 19:04:41', '2021-10-25 19:04:41'),
(64, 'App\\Models\\User', 11, 'my-app-token', '99ea3684e1f1b164c28565d6d12f9755e05d390555a6b8819eddc5744212f93c', '[\"*\"]', NULL, '2021-10-25 19:09:13', '2021-10-25 19:09:13'),
(65, 'App\\Models\\User', 3, 'my-app-token', '41e19086b839e293ae7ef3b84a18d06245f119abaebe421c595af098cd43d058', '[\"*\"]', NULL, '2021-10-26 18:41:59', '2021-10-26 18:41:59'),
(66, 'App\\Models\\User', 3, 'my-app-token', 'c4ba8972dba5bc948d3a61d6dd5f721de29f1090c0b492ca881ac77ac2ab3ba9', '[\"*\"]', NULL, '2021-10-28 11:56:40', '2021-10-28 11:56:40'),
(67, 'App\\Models\\User', 3, 'my-app-token', '48aa5aa374fcb7acf33c229e5be32d27dcf171c58ba68c9417241d48c7d6cdf4', '[\"*\"]', NULL, '2021-10-31 04:47:20', '2021-10-31 04:47:20'),
(68, 'App\\Models\\User', 3, 'my-app-token', '6f843fab1eab93ac540f05eec49516ef157dfc5d5b7dd7927b8ea90d33026d39', '[\"*\"]', NULL, '2021-10-31 13:36:04', '2021-10-31 13:36:04'),
(69, 'App\\Models\\User', 3, 'my-app-token', 'a35e2c6e5e408f736077da5c4100919132b2859c6f5522bb4741f6a8081df7e8', '[\"*\"]', NULL, '2021-10-31 17:40:39', '2021-10-31 17:40:39'),
(70, 'App\\Models\\User', 3, 'my-app-token', '19eac48dbd235fd2f24e1e0d2ff2f6f4b033dfcff35d38655dba2c88e8e4af2a', '[\"*\"]', NULL, '2021-11-02 20:30:11', '2021-11-02 20:30:11'),
(71, 'App\\Models\\User', 3, 'my-app-token', 'cc617303f9debab7cedf0deeb8260ae861dafaf716eebfff3ff6a1f50d078a8f', '[\"*\"]', NULL, '2021-11-02 20:33:54', '2021-11-02 20:33:54'),
(72, 'App\\Models\\User', 3, 'my-app-token', 'fd2db31b3b3048e2a5b308744b8239349669c10c6dfcde110de1e37040623d92', '[\"*\"]', NULL, '2021-11-02 20:35:37', '2021-11-02 20:35:37'),
(73, 'App\\Models\\User', 3, 'my-app-token', 'e4bc7e8cf63be73f22be879f53c1f91f4fd467774ddbc850c017312ef8fc38e7', '[\"*\"]', NULL, '2021-11-02 20:36:27', '2021-11-02 20:36:27'),
(74, 'App\\Models\\User', 3, 'my-app-token', '407ddaad3a94c68423974e1e26d678b86f94fe7db2cc6b2a0221573e39be98ea', '[\"*\"]', NULL, '2021-11-02 20:37:48', '2021-11-02 20:37:48'),
(75, 'App\\Models\\User', 3, 'my-app-token', '2bdcccb54044a067d3116b708ee6d11690e5242090f53df9fb772336ce42f834', '[\"*\"]', NULL, '2021-11-02 20:39:41', '2021-11-02 20:39:41'),
(76, 'App\\Models\\User', 3, 'my-app-token', 'c9425d4893a7fd642df8016adb4c40d3561c78bf7b0ec79cec7782ee3142d820', '[\"*\"]', NULL, '2021-11-02 20:41:23', '2021-11-02 20:41:23'),
(77, 'App\\Models\\User', 12, 'my-app-token', '8c8ee7848fe6d2a3589491acaf67015faa05fcd95aa019c49a832be84bc3f393', '[\"*\"]', NULL, '2021-11-03 01:36:07', '2021-11-03 01:36:07'),
(78, 'App\\Models\\User', 12, 'my-app-token', '9cc0e0112c04b5f587e7afae1a42ff05d05e08821890d0229b5abbac854244ac', '[\"*\"]', NULL, '2021-11-03 01:36:13', '2021-11-03 01:36:13'),
(79, 'App\\Models\\User', 12, 'my-app-token', 'c923faa3488f75309afc4b81cd6eae54ca718272c2922f6360e8f0cadb65bf1b', '[\"*\"]', NULL, '2021-11-03 01:36:21', '2021-11-03 01:36:21'),
(80, 'App\\Models\\User', 3, 'my-app-token', '2f06527dd5912cb184f156dfb3fd6b9d5f4e0e58a40e2f08680840b323323fee', '[\"*\"]', NULL, '2021-11-03 13:23:24', '2021-11-03 13:23:24'),
(81, 'App\\Models\\User', 3, 'my-app-token', 'f2c4045a89f5ec0bd48a8ef8d309446ce65ba26a218c0f3b811d40ca9bfae7f9', '[\"*\"]', NULL, '2021-11-03 14:09:24', '2021-11-03 14:09:24'),
(82, 'App\\Models\\User', 3, 'my-app-token', 'c324f7e8dd53459dfdb9c1c7f325d5dd3788ccfe92f46c611d07162f22091363', '[\"*\"]', NULL, '2021-11-03 15:47:23', '2021-11-03 15:47:23'),
(83, 'App\\Models\\User', 14, 'my-app-token', '6303936d880995d223902973e79b1071c24e294ec0afb803cf6816c38a04cdaa', '[\"*\"]', NULL, '2021-11-03 18:13:31', '2021-11-03 18:13:31'),
(84, 'App\\Models\\User', 1, 'my-app-token', '742359dc7a434a9ad129b74820431a1ab9c68235be9660c64abeaa7f9044a0cc', '[\"*\"]', NULL, '2021-11-03 20:16:10', '2021-11-03 20:16:10'),
(85, 'App\\Models\\User', 17, 'my-app-token', '4f751b7ec1ca967a3af91ccacffced14a4426d5250c1200208e5e8b0f98d3b0d', '[\"*\"]', NULL, '2021-11-03 23:33:36', '2021-11-03 23:33:36'),
(86, 'App\\Models\\User', 1, 'my-app-token', 'c99ac3a3d8fcbc98f0112875dfa499cb6900666b37745bf6b5d5a86d039f8630', '[\"*\"]', NULL, '2021-11-04 15:32:45', '2021-11-04 15:32:45'),
(87, 'App\\Models\\User', 19, 'my-app-token', '933b1914e07d20a114887f8bcaf44ac57721cd3dede8573472c4722dcbb6c98a', '[\"*\"]', NULL, '2021-11-04 17:44:54', '2021-11-04 17:44:54'),
(88, 'App\\Models\\User', 3, 'my-app-token', '02c9cadc3160128fb7f62e5a11e95b6209c37af703326bcccc804cabd9cc05d4', '[\"*\"]', NULL, '2021-11-04 17:50:38', '2021-11-04 17:50:38'),
(89, 'App\\Models\\User', 3, 'my-app-token', '669d696b760da5e75f196c503760ca3de55f41d6f97b5f807c5d98e5cc6216cb', '[\"*\"]', NULL, '2021-11-04 20:24:56', '2021-11-04 20:24:56'),
(90, 'App\\Models\\User', 3, 'my-app-token', '20471c8698ade9f3160a48d43ef58473c34579d788ac8df12a8c801bea2f86fb', '[\"*\"]', NULL, '2021-11-05 12:58:19', '2021-11-05 12:58:19'),
(91, 'App\\Models\\User', 3, 'my-app-token', 'd0df43d3b72860b6b832d37b3fe916a033e7a0d7337ecd4e31feef592d2168cf', '[\"*\"]', NULL, '2021-11-05 13:51:13', '2021-11-05 13:51:13'),
(92, 'App\\Models\\User', 3, 'my-app-token', '5e2bf877420d34c9842449ec7264e4b9ba62a6ce88ef01c0ab557375489ec015', '[\"*\"]', NULL, '2021-11-05 13:51:39', '2021-11-05 13:51:39'),
(93, 'App\\Models\\User', 20, 'my-app-token', 'ea98b6006eb55dcb0901feecb954200d969a5b7f2423bcf9ca55ab6a42abc84d', '[\"*\"]', NULL, '2021-11-11 17:59:33', '2021-11-11 17:59:33'),
(94, 'App\\Models\\User', 3, 'my-app-token', 'd6be3411e139e0dcca21f85e3728e1dbf1e81a8e5b1fba94165f57d7268311ec', '[\"*\"]', NULL, '2021-11-11 18:24:49', '2021-11-11 18:24:49'),
(95, 'App\\Models\\User', 20, 'my-app-token', '3bb3dd14186abca1a76942854af30d36ea1d4178ff5b83fb88e258b317349523', '[\"*\"]', NULL, '2021-11-11 18:26:34', '2021-11-11 18:26:34'),
(96, 'App\\Models\\User', 3, 'my-app-token', '5bfcb01214f4bf6cee90fb81ec3a600c5faa6519d829bd0abbb751479196611e', '[\"*\"]', NULL, '2021-11-12 19:43:59', '2021-11-12 19:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `plan_ratings`
--

CREATE TABLE `plan_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `two_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `three_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `four_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `five_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rating_count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `avg_rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_ratings`
--

INSERT INTO `plan_ratings` (`id`, `plan_id`, `one_star`, `two_star`, `three_star`, `four_star`, `five_star`, `rating_count`, `avg_rating`, `created_at`, `updated_at`) VALUES
(1, '1', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-12 18:48:50', '2021-10-12 18:48:50'),
(2, '2', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-12 19:09:34', '2021-10-12 19:09:34'),
(3, '3', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-25 18:12:17', '2021-10-25 18:12:17'),
(4, '4', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-04 18:03:22', '2021-11-04 18:03:22'),
(5, '5', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-09 17:38:20', '2021-11-09 17:38:20'),
(6, '6', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-09 17:43:33', '2021-11-09 17:43:33'),
(7, '7', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-09 23:16:59', '2021-11-09 23:16:59'),
(8, '8', '0', '0', '1', '0', '0', '1', '3', '2021-11-11 18:09:49', '2021-12-20 10:55:39'),
(9, '9', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 07:30:23', '2021-12-07 07:30:23'),
(10, '10', '0', '0', '0', '0', '1', '1', '5', '2021-12-07 07:43:19', '2021-12-28 08:33:30'),
(11, '11', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 07:50:43', '2021-12-07 07:50:43'),
(12, '12', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 08:25:41', '2021-12-07 08:25:41'),
(13, '13', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 08:29:26', '2021-12-07 08:29:26'),
(14, '14', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 08:40:56', '2021-12-07 08:40:56'),
(15, '15', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 09:34:38', '2021-12-07 09:34:38'),
(16, '16', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 09:46:40', '2021-12-07 09:46:40'),
(17, '17', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 09:51:22', '2021-12-07 09:51:22'),
(18, '18', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 10:43:15', '2021-12-07 10:43:15'),
(19, '19', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 11:05:04', '2021-12-07 11:05:04'),
(20, '20', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 11:38:44', '2021-12-07 11:38:44'),
(21, '21', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 11:44:42', '2021-12-07 11:44:42'),
(22, '22', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 12:36:02', '2021-12-07 12:36:02'),
(23, '23', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 12:50:59', '2021-12-07 12:50:59'),
(24, '24', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 13:09:31', '2021-12-07 13:09:31'),
(25, '25', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 13:46:44', '2021-12-07 13:46:44'),
(26, '26', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 13:49:26', '2021-12-07 13:49:26'),
(27, '27', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 13:58:22', '2021-12-07 13:58:22'),
(28, '28', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-07 14:24:46', '2021-12-07 14:24:46'),
(29, '29', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-08 07:18:00', '2021-12-08 07:18:00'),
(30, '29', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-10 07:00:22', '2021-12-10 07:00:22'),
(31, '30', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-10 11:09:17', '2021-12-10 11:09:17'),
(32, '31', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 07:38:42', '2021-12-22 07:38:42'),
(33, '32', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 07:40:51', '2021-12-22 07:40:51'),
(34, '33', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 10:49:16', '2021-12-22 10:49:16'),
(35, '34', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 11:39:22', '2021-12-22 11:39:22'),
(36, '35', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 12:41:57', '2021-12-22 12:41:57'),
(37, '36', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 13:46:18', '2021-12-22 13:46:18'),
(38, '37', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-22 13:47:40', '2021-12-22 13:47:40'),
(39, '37', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 05:43:50', '2021-12-23 05:43:50'),
(40, '38', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 05:52:09', '2021-12-23 05:52:09'),
(41, '39', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 06:03:54', '2021-12-23 06:03:54'),
(42, '40', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 06:56:19', '2021-12-23 06:56:19'),
(43, '41', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 07:06:45', '2021-12-23 07:06:45'),
(44, '42', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 07:20:05', '2021-12-23 07:20:05'),
(45, '43', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-23 12:36:00', '2021-12-23 12:36:00'),
(46, '44', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-27 05:25:47', '2021-12-27 05:25:47'),
(47, '44', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-28 06:31:43', '2021-12-28 06:31:43'),
(48, '44', '0', '0', '0', '0', '0', '0', '0.0', '2022-01-05 09:03:05', '2022-01-05 09:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `plan_requests`
--

CREATE TABLE `plan_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_requests`
--

INSERT INTO `plan_requests` (`id`, `trainer_id`, `trainee_id`, `status`, `price`, `category`, `created_date`, `payment_status`, `created_at`, `updated_at`) VALUES
(7, '1', '3', '4', '80.0', '2', '2021-09-08', '1', '2021-09-08 15:30:26', '2021-09-08 15:31:56'),
(8, '1', '3', '4', '80.0', '2', '2021-09-08', '1', '2021-09-08 17:06:42', '2021-09-08 17:20:40'),
(9, '1', '3', '4', '80.0', '2', '2021-09-08', '1', '2021-09-08 17:55:18', '2021-09-08 18:30:28'),
(10, '1', '3', '2', '80.0', '2', '2021-09-08', '1', '2021-09-08 18:19:28', '2021-09-08 18:24:17'),
(11, '1', '31', '1', '80.0', '2', '2021-12-14', '1', '2021-12-14 06:28:08', '2021-12-14 06:28:08'),
(12, '1', '32', '1', '80.0', '2', '2021-12-16', '1', '2021-12-16 13:50:45', '2021-12-16 13:50:45'),
(13, '40', '32', '4', '25.0', '2', '2021-12-27', '1', '2021-12-27 12:41:06', '2021-12-27 13:40:28'),
(14, '40', '32', '4', '25.0', '2', '2021-12-28', '1', '2021-12-28 06:36:11', '2021-12-28 06:43:52'),
(15, '40', '32', '4', '25.0', '2', '2021-12-28', '1', '2021-12-28 07:44:45', '2021-12-29 06:04:05'),
(16, '40', '32', '2', '25.0', '2', '2021-12-28', '1', '2021-12-28 08:50:12', '2021-12-29 11:36:25'),
(17, '40', '32', '3', '25.0', '2', '2021-12-28', '1', '2021-12-28 12:50:23', '2021-12-29 12:10:06'),
(18, '40', '32', '3', '25.0', '2', '2021-12-29', '1', '2021-12-29 11:56:06', '2021-12-29 11:57:13'),
(19, '40', '32', '3', '25.0', '2', '2021-12-29', '1', '2021-12-29 12:13:09', '2021-12-29 12:13:58'),
(20, '40', '32', '3', '25.0', '2', '2021-12-29', '1', '2021-12-29 12:40:56', '2021-12-29 12:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `plan_reviews`
--

CREATE TABLE `plan_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_reviews`
--

INSERT INTO `plan_reviews` (`id`, `plan_id`, `user_id`, `message`, `rating`, `created_at`, `updated_at`) VALUES
(1, '8', '32', 'ok', '3', '2021-12-20 10:55:39', '2021-12-20 10:55:39'),
(2, '10', '32', 'okay', '5', '2021-12-28 08:33:30', '2021-12-28 08:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`id`, `statement`, `status`, `created_by`, `category`, `created_at`, `updated_at`) VALUES
(1, 'what is your country name?', '1', '1', '2', '2021-08-10 02:50:13', '2021-08-10 02:50:13'),
(2, 'What is your activity level?', '1', '1', '2', '2021-08-10 02:52:29', '2021-08-10 02:52:29'),
(3, 'What is your primary goal?', '1', '1', '2', '2021-08-10 02:53:47', '2021-08-10 02:53:47'),
(4, 'What is Your Diet Type?', '1', '1', '2', '2021-08-10 02:54:52', '2021-08-10 02:54:52'),
(5, 'Do you Have Any Allergies?', '1', '1', '2', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(6, 'If allergic to other substance, please mention below:', '1', '1', '2', '2021-08-10 02:56:30', '2021-08-10 02:56:30'),
(7, 'Foods you want to include in Diet plan?', '1', '1', '2', '2021-08-10 02:56:51', '2021-08-10 02:56:51'),
(8, 'Sleeping and work hours?', '1', '1', '2', '2021-08-10 02:57:31', '2021-08-10 02:57:31'),
(9, 'If you have a specific illness or disease, please mentioned in the box below:', '1', '1', '2', '2021-08-10 03:02:21', '2021-08-10 03:02:21'),
(10, 'Medications and supplements you’re currently taking:', '1', '1', '2', '2021-08-10 03:02:36', '2021-08-10 03:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_statement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `option_statement`, `created_at`, `updated_at`) VALUES
(2, '2', 'Lightly Active', '2021-08-10 02:52:29', '2021-08-10 02:52:29'),
(3, '2', 'Moderately Active', '2021-08-10 02:52:29', '2021-08-10 02:52:29'),
(4, '2', 'Extremely Active', '2021-08-10 02:52:29', '2021-08-10 02:52:29'),
(5, '3', 'Lose Weight', '2021-08-10 02:53:47', '2021-08-10 02:53:47'),
(6, '3', 'Build Muscle', '2021-08-10 02:53:47', '2021-08-10 02:53:47'),
(7, '3', 'Gain Weight', '2021-08-10 02:53:47', '2021-08-10 02:53:47'),
(8, '3', 'Develop Health', '2021-08-10 02:53:47', '2021-08-10 02:53:47'),
(10, '5', 'Gluten', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(11, '5', 'Peanut', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(12, '5', 'Eggs', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(13, '5', 'Fish', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(14, '5', 'Tree Nuts', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(15, '5', 'Dairy', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(16, '5', 'Soy', '2021-08-10 02:55:59', '2021-08-10 02:55:59'),
(17, '5', 'Shellfish', '2021-08-10 02:55:59', '2021-08-10 02:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `request_questions_answers`
--

CREATE TABLE `request_questions_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_request_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer_question_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_statement` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_questions_answers`
--

INSERT INTO `request_questions_answers` (`id`, `plan_request_id`, `trainer_question_id`, `answer_statement`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'fgj@gj.com', '2021-09-07 20:36:13', '2021-09-07 20:36:13'),
(2, '1', '2', 'fun', '2021-09-07 20:36:13', '2021-09-07 20:36:13'),
(3, '1', '3', 'dB', '2021-09-07 20:36:13', '2021-09-07 20:36:13'),
(4, '1', '4', 'dry', '2021-09-07 20:36:13', '2021-09-07 20:36:13'),
(5, '1', '5', 'dB', '2021-09-07 20:36:13', '2021-09-07 20:36:13'),
(6, '2', '1', 'cm', '2021-09-08 13:41:33', '2021-09-08 13:41:33'),
(7, '2', '2', 'go', '2021-09-08 13:41:33', '2021-09-08 13:41:33'),
(8, '2', '3', 'cm', '2021-09-08 13:41:33', '2021-09-08 13:41:33'),
(9, '2', '4', 'dB', '2021-09-08 13:41:33', '2021-09-08 13:41:33'),
(10, '2', '5', 'gym', '2021-09-08 13:41:33', '2021-09-08 13:41:33'),
(11, '3', '1', 'cm', '2021-09-08 13:48:48', '2021-09-08 13:48:48'),
(12, '3', '2', 'dry', '2021-09-08 13:48:48', '2021-09-08 13:48:48'),
(13, '3', '3', 'dry', '2021-09-08 13:48:48', '2021-09-08 13:48:48'),
(14, '3', '4', 'fun', '2021-09-08 13:48:48', '2021-09-08 13:48:48'),
(15, '3', '5', 'dry', '2021-09-08 13:48:48', '2021-09-08 13:48:48'),
(16, '4', '1', 'dry', '2021-09-08 13:49:04', '2021-09-08 13:49:04'),
(17, '4', '2', 'go', '2021-09-08 13:49:04', '2021-09-08 13:49:04'),
(18, '4', '3', 'FYI', '2021-09-08 13:49:04', '2021-09-08 13:49:04'),
(19, '4', '4', 'go', '2021-09-08 13:49:04', '2021-09-08 13:49:04'),
(20, '4', '5', 'dry', '2021-09-08 13:49:04', '2021-09-08 13:49:04'),
(21, '5', '1', 'fun', '2021-09-08 14:00:45', '2021-09-08 14:00:45'),
(22, '5', '2', 'Cuba', '2021-09-08 14:00:45', '2021-09-08 14:00:45'),
(23, '5', '3', 'Chubb', '2021-09-08 14:00:45', '2021-09-08 14:00:45'),
(24, '5', '4', 'Chubb', '2021-09-08 14:00:45', '2021-09-08 14:00:45'),
(25, '5', '5', 'Chubb', '2021-09-08 14:00:45', '2021-09-08 14:00:45'),
(26, '6', '1', 'Chubb', '2021-09-08 14:44:23', '2021-09-08 14:44:23'),
(27, '6', '2', 'Chubb', '2021-09-08 14:44:23', '2021-09-08 14:44:23'),
(28, '6', '3', 'Chubb', '2021-09-08 14:44:23', '2021-09-08 14:44:23'),
(29, '6', '4', 'Chubb', '2021-09-08 14:44:23', '2021-09-08 14:44:23'),
(30, '6', '5', 'Chubb', '2021-09-08 14:44:23', '2021-09-08 14:44:23'),
(31, '7', '1', 'Ch', '2021-09-08 15:30:26', '2021-09-08 15:30:26'),
(32, '7', '2', 'Chubb', '2021-09-08 15:30:26', '2021-09-08 15:30:26'),
(33, '7', '3', 'Ch', '2021-09-08 15:30:26', '2021-09-08 15:30:26'),
(34, '7', '4', 'cc', '2021-09-08 15:30:26', '2021-09-08 15:30:26'),
(35, '7', '5', 'DTH', '2021-09-08 15:30:26', '2021-09-08 15:30:26'),
(36, '8', '1', 'dB', '2021-09-08 17:06:42', '2021-09-08 17:06:42'),
(37, '8', '2', 'gjh', '2021-09-08 17:06:42', '2021-09-08 17:06:42'),
(38, '8', '3', 'dry', '2021-09-08 17:06:42', '2021-09-08 17:06:42'),
(39, '8', '4', 'dry', '2021-09-08 17:06:42', '2021-09-08 17:06:42'),
(40, '8', '5', 'dB', '2021-09-08 17:06:42', '2021-09-08 17:06:42'),
(41, '9', '1', 'fun', '2021-09-08 17:55:18', '2021-09-08 17:55:18'),
(42, '9', '2', 'fun fun', '2021-09-08 17:55:18', '2021-09-08 17:55:18'),
(43, '9', '3', 'Chubb', '2021-09-08 17:55:18', '2021-09-08 17:55:18'),
(44, '9', '4', 'fun', '2021-09-08 17:55:18', '2021-09-08 17:55:18'),
(45, '9', '5', 'fun', '2021-09-08 17:55:18', '2021-09-08 17:55:18'),
(46, '10', '1', 'test', '2021-09-08 18:19:28', '2021-09-08 18:19:28'),
(47, '10', '2', 'tes', '2021-09-08 18:19:28', '2021-09-08 18:19:28'),
(48, '10', '3', 'yr st', '2021-09-08 18:19:28', '2021-09-08 18:19:28'),
(49, '10', '4', 'yets', '2021-09-08 18:19:28', '2021-09-08 18:19:28'),
(50, '10', '5', 'teys', '2021-09-08 18:19:28', '2021-09-08 18:19:28'),
(51, '11', '1', 'Pakistan', '2021-12-14 06:28:08', '2021-12-14 06:28:08'),
(52, '11', '2', 'lightly Active', '2021-12-14 06:28:08', '2021-12-14 06:28:08'),
(53, '11', '3', 'build muscle', '2021-12-14 06:28:08', '2021-12-14 06:28:08'),
(54, '11', '4', 'regular', '2021-12-14 06:28:08', '2021-12-14 06:28:08'),
(55, '11', '5', 'eggs', '2021-12-14 06:28:08', '2021-12-14 06:28:08'),
(56, '12', '1', 'pak', '2021-12-16 13:50:45', '2021-12-16 13:50:45'),
(57, '12', '2', 'lightly active', '2021-12-16 13:50:45', '2021-12-16 13:50:45'),
(58, '12', '3', 'lose weight', '2021-12-16 13:50:45', '2021-12-16 13:50:45'),
(59, '12', '4', 'regular', '2021-12-16 13:50:45', '2021-12-16 13:50:45'),
(60, '12', '5', 'eggs', '2021-12-16 13:50:45', '2021-12-16 13:50:45'),
(61, '13', '7', 'Pakistan', '2021-12-27 12:41:06', '2021-12-27 12:41:06'),
(62, '13', '8', 'Lightly Active', '2021-12-27 12:41:06', '2021-12-27 12:41:06'),
(63, '13', '9', '8', '2021-12-27 12:41:06', '2021-12-27 12:41:06'),
(64, '14', '7', 'Pakistan', '2021-12-28 06:36:11', '2021-12-28 06:36:11'),
(65, '14', '8', 'light', '2021-12-28 06:36:11', '2021-12-28 06:36:11'),
(66, '14', '9', '7', '2021-12-28 06:36:11', '2021-12-28 06:36:11'),
(67, '15', '7', 'fc', '2021-12-28 07:44:45', '2021-12-28 07:44:45'),
(68, '15', '8', 'fd', '2021-12-28 07:44:45', '2021-12-28 07:44:45'),
(69, '15', '9', 'cc', '2021-12-28 07:44:45', '2021-12-28 07:44:45'),
(70, '16', '7', 'check', '2021-12-28 08:50:12', '2021-12-28 08:50:12'),
(71, '16', '8', 'vhebk', '2021-12-28 08:50:12', '2021-12-28 08:50:12'),
(72, '16', '9', '6', '2021-12-28 08:50:12', '2021-12-28 08:50:12'),
(73, '17', '7', 'pk', '2021-12-28 12:50:23', '2021-12-28 12:50:23'),
(74, '17', '8', 'oj', '2021-12-28 12:50:23', '2021-12-28 12:50:23'),
(75, '17', '9', '5', '2021-12-28 12:50:23', '2021-12-28 12:50:23'),
(76, '18', '7', 'test', '2021-12-29 11:56:06', '2021-12-29 11:56:06'),
(77, '18', '8', 'test', '2021-12-29 11:56:06', '2021-12-29 11:56:06'),
(78, '18', '9', 'test', '2021-12-29 11:56:06', '2021-12-29 11:56:06'),
(79, '19', '7', 'cf', '2021-12-29 12:13:09', '2021-12-29 12:13:09'),
(80, '19', '8', 'fbbv', '2021-12-29 12:13:09', '2021-12-29 12:13:09'),
(81, '19', '9', 'ff', '2021-12-29 12:13:09', '2021-12-29 12:13:09'),
(82, '20', '7', 'final test', '2021-12-29 12:40:56', '2021-12-29 12:40:56'),
(83, '20', '8', 'final test', '2021-12-29 12:40:56', '2021-12-29 12:40:56'),
(84, '20', '9', 'final test', '2021-12-29 12:40:56', '2021-12-29 12:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_categories_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `app_categories_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'Gym', 1, '2021-07-17 03:12:19', '2021-07-17 03:12:19'),
(2, '2', 'Home', 1, '2021-07-17 03:12:36', '2021-07-17 03:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_questions`
--

CREATE TABLE `trainer_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainer_questions`
--

INSERT INTO `trainer_questions` (`id`, `trainer_id`, `question_id`, `optional`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '0', '2021-09-07 20:24:59', '2021-09-07 20:24:59'),
(2, '1', '2', '0', '2021-09-07 20:25:01', '2021-09-07 20:25:01'),
(3, '1', '3', '0', '2021-09-07 20:25:04', '2021-09-07 20:25:04'),
(4, '1', '4', '0', '2021-09-07 20:25:05', '2021-09-07 20:25:05'),
(5, '1', '5', '0', '2021-09-07 20:25:06', '2021-09-07 20:25:06'),
(6, '39', '1', '0', '2021-12-27 11:03:13', '2021-12-27 11:03:13'),
(7, '40', '1', '0', '2021-12-27 12:32:30', '2021-12-27 12:32:30'),
(8, '40', '2', '0', '2021-12-27 12:32:40', '2021-12-27 12:32:40'),
(9, '40', '8', '0', '2021-12-27 12:32:49', '2021-12-27 12:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injury` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalBackground` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familyMedicalBackground` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specializesIn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `calories_burn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `imgUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatars/admin-avatar.png',
  `isPremiumUser` tinyint(4) NOT NULL DEFAULT '0',
  `accountStatus` tinyint(4) NOT NULL DEFAULT '0',
  `is_trainer` tinyint(4) NOT NULL DEFAULT '0',
  `is_trainee` tinyint(4) NOT NULL DEFAULT '0',
  `access_token` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videoUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialisation_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `questionare_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `usertype`, `phone`, `email`, `email_verified_at`, `age`, `gender`, `height`, `weight`, `injury`, `medicalBackground`, `familyMedicalBackground`, `specializesIn`, `experience`, `workout`, `calories_burn`, `imgUrl`, `isPremiumUser`, `accountStatus`, `is_trainer`, `is_trainee`, `access_token`, `description`, `price`, `videoUrl`, `specialisation_category`, `questionare_status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Waqar', 'waqar', 'trainer', '+925869808078', 'waqar@demo.com', NULL, '30', 'Male', '70.0', '70.0', NULL, NULL, NULL, 'weight loss', '3', '0', '0', 'avatars/scaled_image_picker2161457948815502689.jpg', 0, 1, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYmFkNzU1ZmZjYWE4NWQ0OTk2YmNkZGRhM2IxMmZjY2IyMTZhYTgyOTBmYjZmYzI4ZDg4NjMyMDA0YTk5N2ZhZTFjMTlkYThjODcwZGI1Y2IiLCJpYXQiOjE2MzkzMjI0NDEuMTg0NTE2OTA2NzM4MjgxMjUsIm5iZiI6MTYzOTMyMjQ0MS4xODQ1MjAwMDYxNzk4MDk1NzAzMTI1LCJleHAiOjE2NzA4NTg0NDEuMTgyNjg3MDQ0MTQzNjc2NzU3ODEyNSwic3ViIjoiMSIsInNjb3BlcyI6W119.fGIRiUVYaWD3k4HThL8Fnizhiihn7m8gXwjkDfsinQlOVDdjj96-4OO2KogWdj5i4S0YRKsYqyuASSLu_Ec2A_S9SAAlqsRfYWfMZsvErJQYfeXTgZmIko8-X4d0agFjLnt2uOw6C0Nbnx-mF0XrokOp19bDGaVPmX9TqGSoXeFKkcTFjcBz_rbPh7R6wp55lPqikSG8HnOQImusgzNR0JzJ5uK7fTZ5BbUUXjHDDrDkghqUrS829tdSYLX7gC3oDgyGLS6ysOrg_gn5H3D2xHhJNqxPDcys-k_sCz4ZF4I8ecK3boJqbsN_kF2dN8YDVjT_VgI-kL6D_9SbPy6VAjfZdj0U7Ek_yGHiG6f1Kgcppm06u0v1A5vWIewemevftXV7q2qQx3AGrGjo1s0XUHQJcf91pkuizkhORaTF4LCy40gYdtpL3yJYS8mLTK4b_FCiFekpFSsemSEa1GFqG1-GrLd3COcBke4S9qzk73QPIOAZF-39pGn0HYmbTjMpLITDa27ZBJV5_s0HiIG6xAIwEfEH4vBw0wkF5wPOgoeArgIaYPDs5P9-Wi4QmybA6_L3dqkt2eUKHNRlgYr1lDyeo-ANhhdSl0BoJKYWRRRScJRgxVIxxEJgOY-jwshCqJpyQg0ezA07w2XsiS3BGJL29ppZrKXBRDGMC9dUqn0', 'I am transformation expert and I have transformed myself along with 100s of clients over the last few years and my experience in keeping body fat levels minimum are my expertise.', '80', NULL, '2', '1', '$2y$10$tw6.T08o9ZKX3hflzQ56quilwhMN8E20CiPM/2yM2BFrfzaqP2ukq', NULL, '2021-09-07 20:24:37', '2021-12-12 15:20:41'),
(2, 'adnannn', 'khan159', 'admin', '0300287851999', 'adnanmalik4847@gmail.comn', NULL, '22', 'male', '34', '55', 'wedwd', 'werwedsd', 'wefsdsf', 'sssd', '23', '0', '0', 'avatars/admin-avatar.png', 0, 1, 1, 0, NULL, 'wedsdsdc sdsdfsdfssdsd sdsddf', '234', 'https://asdasdbabsd.com', '232e', '0', '$2y$10$8x2BfblJ7NPSqqeCSPaSIu53X53pxzogLWm0TtZwYQmloXVDmroIK', 'USjBJ3uhcYmDoI8mG6DUQR8f6aS6uPyMeyMcCtanBMHXhjsjlYJ5Ao3KgLWT', '2021-09-07 20:25:53', '2021-12-20 18:28:56'),
(3, 'Emma', 'emma', 'trainee', '+925808908089', 'test@demo.com', NULL, '30', 'Female', '70.0', '70.0', 'None', 'None', 'None', 'jbb', '7', '0', '0', 'avatars/scaled_image_picker3473418903397222101.jpg', 0, 1, 1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOGNkZTFkMmMyZjQxNWEzYzA5MWI0ZjcyNjRhYTgxYmFjZGE2OWE2MzlmNmU3ZGE1MTdmZmIzYjhlNjFiMGE1ZTcwOTcwMGExODI2ODEwMjIiLCJpYXQiOjE2NDMxMTE4NzIuODI4ODkxMDM4ODk0NjUzMzIwMzEyNSwibmJmIjoxNjQzMTExODcyLjgyODg5Nzk1MzAzMzQ0NzI2NTYyNSwiZXhwIjoxNjc0NjQ3ODcyLjgyMTI3MDk0MjY4Nzk4ODI4MTI1LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.FWdFE0zUxv4-0_dNRUrNZcFvFq37523SlD8_CXnYlTw17GgX1uhUBCIHsHjvEeaNShf76cOcUmn889e5p9vhJ7dkvVyO9a_svRdgrlYtOIqpdlIioyevhlpppbExPN2w1c5qTfQZR0XlOXmFoF0kUgOmNzXcFNLYacHWcUKoaaIiPfZJiif3-9UI5goR9spHgxE1mGI7erQgsAVLJ9Gz4LZlgHYfjcbu_dtwSUQs-VVgdpZivd8pStviXb4p_DNZUz2oc3BLmg1z8oxLQd3Fch7JDz7qHeNZs1Knbf747LKb8Hs6uFGq4zF0CBzvQkjdtnNmCmfFPsdZeYAtoVITZb4JGYMTlEPvy9qne9y1nREQHeNi5QynVpNrYm53g-R3W0fIG8G3EUHcSFcJ1lRYuutlOA2vLrI5DEagr-tAbV6_jWZ346kBoPoy9E-5LgcNLdbNnQOraToS5UnMOF_ggBcwhenXc-UMXJmDRd1oOc85DooFGwdMNxv89zjHxmjS_xrjyWgJDkM1CZzmlHXGVSo_myQWViVzLmcOybm6AY9NmwJGmHHu3Pumw0OtxHscO6pFMSnc7taqgA3qZfzmYhZnhjm254jW4TFzy6fHWYKuYO3gECxCIFylz9xQUUSrvZWS3S0MPSZOHjCOombiEwCsr2SzUBnTjBVCibg9kBE', 'jhb', NULL, NULL, NULL, '0', '$2y$10$/7biU/PuNVXK4gH.Vm0pVe8NWLn7ziQk.Gy3WmRZFIEwJ1ttH02ju', NULL, '2021-09-07 20:27:48', '2022-01-25 11:57:52'),
(4, 'dry FYI', 'dry5', 'trainee', '+923698656808', 'ty@g.com', NULL, '45', 'Male', '70.0', '90.0', 'None', 'None', 'None', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, NULL, NULL, NULL, NULL, 'null', '0', '$2y$10$8d6d0F1yQERDdnEn2QgkI.KlBeibeLMGgALAxlY1UAoTlLn7acmli', NULL, '2021-10-06 18:15:43', '2021-11-22 13:00:01'),
(5, 'hig fghh', 'ffg6', 'trainer', '+925807852569', 'fgg@gh.com', NULL, '34', 'Male', '78.0', '89.0', NULL, NULL, NULL, 'fgg', '3', '0', '0', 'avatars/admin-avatar.png', 0, 1, 1, 0, NULL, 'fghh', '67', NULL, '2', '0', '$2y$10$3mks03xCaLA4T5PwrGV/fuwluYawWFxkoKOB2uzJBeC3n0EpgQU4O', NULL, '2021-10-06 18:21:05', '2021-12-02 07:58:58'),
(6, 'mustafa ali', 'mustafa_ali', 'trainee', '+925478980895', 'mustafa@gmail.com', NULL, '25', 'Male', '70.0', '70.0', 'None', 'None', 'None', NULL, NULL, '0', '0', 'avatars/scaled_image_picker8514206033903576594.jpg', 0, 1, 0, 1, '44|LAIHrXMdg0Srv1yYMp8tJfUzYKD25LBIQ1kDN3IK', NULL, NULL, NULL, 'null', '0', '$2y$10$wYhAigM5Or0y2/E/7r/a7.1swi7FEj80Uskmo7eF.RM8Zc6YEoap2', NULL, '2021-10-07 19:08:01', '2021-12-02 07:55:53'),
(9, 'qasim', 'qasim', 'admin', '9203484304716', 'm.qasim@mindwhiz.co', NULL, '25', 'male', '6', '100', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$xDwGVwCx8R6Q1qXaTaEjQ.Xa2dEd6rcFx9qivTLG1A30Aeu3qS7S.', NULL, '2021-10-12 19:23:50', '2021-11-22 13:00:01'),
(10, 'Test User', 'test_user', 'trainee', '+928769456798', 'testuser@demo.com', NULL, '21', 'Female', '67.0', '78.0', 'ACL', 'None', 'None', NULL, NULL, '0', '0', 'avatars/scaled_image_picker6449761389939336574.jpg', 0, 0, 0, 1, '63|ImP37afT9c4TYAAc8AjQIsL1ZnLfrhISxwo9kG5h', NULL, NULL, NULL, 'null', '0', '$2y$10$mumVE3emHD2/H0qEbXMAVeyBj1WLbm7pk43eMY4GFWDIsX9S3Rvi.', NULL, '2021-10-25 17:58:25', '2021-11-22 13:00:01'),
(11, 'Test Trainer', 'testtrainer', 'trainer', '+926458569865', 'test_trainer@demo.com', NULL, '23', 'Female', '78.0', '78.0', NULL, NULL, NULL, 'weight loss', '6', '0', '0', 'avatars/scaled_image_picker1820064884326445526.jpg', 0, 1, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDU4NzRiYWE3ODkyM2UwOGM2OWY3MjI5MTdhZDliZGQ0YzY4N2EzOTIyMzM5YTJlYzlhNTgzMGQzZTEwMDlhODRkODEzMWE4OTA1ZDgxNDUiLCJpYXQiOjE2Mzc3NTU4NzUuOTUwOTMzOTMzMjU4MDU2NjQwNjI1LCJuYmYiOjE2Mzc3NTU4NzUuOTUwOTM3OTg2MzczOTAxMzY3MTg3NSwiZXhwIjoxNjY5MjkxODc1LjkzODUzNDAyMTM3NzU2MzQ3NjU2MjUsInN1YiI6IjExIiwic2NvcGVzIjpbXX0.aN3cK55xrRGZqYUQirFFtkSl5d5pLEMqszXj_BOApjavbC4FVJ6xkI7t5TDJCwQbu0T0kdvFivp0igGMF7Zpp9WU7cgAs0FD5p23laKUzx7VSwcgAou9wOZgg4GETVUxpjV0Obh8Kkl3igkXRWAi8D7LMmfMT1fSD3Y6RF26w1YAT6OJaBDkg1fWw_NGBs0XeEX6SAQAL2rcTPhek64TW1gQ5-DUTn6F7nn99gVrN7yDUc1Tpix-tD7fN-XsfAg1d_Wdg8C9WVEMG6QDvn2SyuHR9R4ZtVbzFVt1g9P-aN6hxgHDXgToSW4uFbH8hgbTy76GidNdinU5msUqYWtJqMgCOPcy5S2okLpZGCZKOPUSeMHQTdEFYRP6lICYAgU_bPPQeGYnUWs5KkdzoImHflW-ss0vk16K0m9qrri4fvO3v_5s0hcK__0nUT_EIPRKKl4E2x88vJ4mgIpVN1YRwx2sQP0UM-Py35k-_xBpWxO8r-fEXIR_hUv2l3JAAL9S65WwQ0UniM6zawY50qgE2-xtnmYQpruRmQCb5SFm-UZ7SNCJvWmzRCg_nIzz80ofNr3w6TeorarlR4Lx1erbZlDH1r86B-HHGezDnJc3iRHxEEuuIPuqjkd2n89fqAZuluGjsII7PL0KHZSLMkgyMqW5PVvFdRFCLeeLfeh9EvA', 'none', '80', NULL, '1', '0', '$2y$10$ksBsd4lIWgit4CxrCVXeX.73WmzOwI/zFJrGlVGHqB.m7fXdz8RUm', NULL, '2021-10-25 18:03:18', '2021-12-20 20:08:17'),
(12, 'asad ali', 'jojiqtr297', 'trainee', '+923205492785', 'asadaliazfar297@gmail.com', NULL, '24', 'Male', '67.0', '86.0', 'na', 'na', 'na', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, '79|gPXcs9dKDeliPgzfDwcTl0NC3nLyvp0PCVBC8wJj', NULL, NULL, NULL, 'null', '0', '$2y$10$RFlJ.2X.ukDCHW4aGLL.zuAYSvpr3lwC/EnPlPswfJtSYFWu54NWG', NULL, '2021-11-03 01:35:45', '2021-11-22 13:00:01'),
(13, 'huzaifa test', 'test12345', 'trainee', '+923000000000', 'huzaifa@gmail.com', NULL, '24', 'Male', '84.0', '95.0', 'none', 'none', 'none', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, NULL, NULL, NULL, NULL, 'null', '0', '$2y$10$68KjK7OtH00KhRu4NdGop.R5/PXw9Gsu3gv4TTKv/zTKzwUbNAZ46', NULL, '2021-11-03 13:00:01', '2021-11-22 13:00:01'),
(14, 'usama tallat', 'usamatallat', 'trainer', '+923008383660', 'usamatallat55@gmail.com', NULL, '22', 'Male', '61.0', '74.0', NULL, NULL, NULL, 'My classes are built upon the foundations of hypertrophy, strength, hiit workouts,compound complexes, boxing and kickboxing.', '6', '0', '0', 'avatars/scaled_image_picker3207332491608300292.jpg', 0, 1, 1, 0, '83|QkuuoOSP2chQqfsBcQK7Wsr0GFFcOE1O6h7Ac0JX', 'Hi there, I’m Usama and I’m a part of the fittest team in lahore and I’m here to help you achieve your goals. \n\nI have 6 years worth of experience in both boxing & bodybuilding. I’ve got diverse hands on experience in terms of performance management and Nutrition.', '70', NULL, '1', '0', '$2y$10$n6JzOUx1BILFXf6cKXOlRO9ZEH/8uo2.MJ4uf/cE22xeYN9uzzgC6', NULL, '2021-11-03 18:13:09', '2021-11-22 13:00:01'),
(16, 'Muhammad Adnan', 'Muhammafghhjj', 'admin', '0300287857913', 'adnanmalik4837@gmail.comm', NULL, '22', '22', '22', '22', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 1, 0, 0, NULL, 'All rights Reserved by ironbox', NULL, NULL, NULL, '0', '$2y$10$1mAhcpLnz1P7/.BkkOzyIu6.kJ.CgFA4U8tHINQgUC8qze9yoY8Ky', NULL, '2021-11-03 18:53:31', '2021-11-22 13:00:01'),
(17, 'Ahsan Shehzad', 'Ahsantw', 'trainer', '+923084518232', 'Ahsantw22@yahoo.com', NULL, '23', 'Male', '65.0', '72.0', NULL, NULL, NULL, 'Fat loss, Hypertrophy, Online Coaching, Strentgh and conditioning, Corrective exercise', '3', '0', '0', 'avatars/admin-avatar.png', 0, 1, 1, 0, '85|1mnycsYpzUz5swfTgKp1xCqEzfnq0oQTWMRMnZn9', 'Ahsan is a Fitness Coach. He is Certified Personal Trainer having Certifications from ISSA in Personal Training, Fitness Nutrition and Group Fitness certification From AFAA. He is currently a student of Sports Sciences/ Kinesiology and doing his specialization in Strentgh and conditioning. \nHe has 3.5 years experience with trainung clients.', '100', NULL, '1', '0', '$2y$10$nGabyqZlcjNxM7PLFoueBu6B7r3Yh9h8UkxqqQeO8HC3b.ZQQKZ/S', NULL, '2021-11-03 23:33:20', '2021-11-22 13:00:01'),
(18, 'Huzaifa Haider', 'huzaifahaider', 'admin', '0923059716313', 'huzaifahaider.m@gmail.com', NULL, '24', 'male', '82', '98', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$/o30YprS1P3f13gjOBj88OHCPyxfTgad6iM/r1sPgNVxBSXJTDnmS', NULL, '2021-11-04 13:43:02', '2021-11-22 13:00:01'),
(19, 'test test', 'test', 'trainer', '+926580898569', 'testttt@tt.tt', NULL, '34', 'Male', '77.0', '78.0', NULL, NULL, NULL, 'jjbh', '78', '0', '0', 'avatars/scaled_image_picker4928275814049318219.jpg', 0, 1, 1, 0, '87|iFhLeOm92IVnA6QS7wKTHVYXfIuvSeptvSY5HsiW', 'jhh', '90', NULL, '1', '0', '$2y$10$A6KdnmphjO9/3nwRR1M/XugWaLQy1Oz/MiI3mMVSBKkv1vPUG4cuO', NULL, '2021-11-04 17:44:33', '2021-11-22 13:00:01'),
(20, 'mustafah ali', 'mustafah1', 'admin', '0923214259990', 'daftpink001@gmail.com', NULL, '26', 'Male', '82.0', '74.0', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/scaled_image_picker3666009118675190391.jpg', 0, 1, 1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjRkMjc2ZDM4MDIxODY1ZGVkYjUxYjlkNjg2NjhmNzQ5MTA2MWIxM2IwYjdiMzQ2YTA5ZmNjMjNlMzE5YTNjZDhkMzNiMTliZGIwOWM4ZmEiLCJpYXQiOjE2Mzc4NDE3NzkuNzgzMTYyMTE3MDA0Mzk0NTMxMjUsIm5iZiI6MTYzNzg0MTc3OS43ODMxNjQ5NzgwMjczNDM3NSwiZXhwIjoxNjY5Mzc3Nzc5Ljc4MTAwODk1ODgxNjUyODMyMDMxMjUsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.Duqhx2TUoutCcwS1RTbkXrUqN2TwUbYGz6gtsMuiAKYP65qbswWi3LEgwgeYcDfS496A5ET7tcrBR1JL91e6X2tYrCzwxtZ3Qqrb10v_mBF5NnojOwLMpT71XxFxGw_brK0JtwgJtgtcJo1TxjDXzHcm_Ny42j_ozhrUrAilekawJc-c_QiQfy1sDBHXmZAzgNvDPlq1wccI4HwYxeLWf8EQgyN8ETn5EXHCCr88atg9lUcCeplrYTA9X-xuhwNkZPOId4IM5s8WWR5p0TlVOGR65cG9CS9oN6ahI0w5wvjBWqCgEwpwlRNWw1bumQiO30jpJiaPMcSVt-BS1mMmVxt_Y1pBmx3JVhNkJdxwciQ4YNJlxSbDBHzS7sIqiGpvcjhLcwT21ydYbOvSA4LhTrfIPe4qrsmLJ3AUkgaVtR4qc_2jMqv3zctSHZ0u709Sf-khanjj8TSIjNdEOqGsRFZp0mP6VLUZY8CXKzlmSu4ckjr1gm1Ra8GMvygAyBy27uOJv5wWcCP9zz4xHD7mHrO1VoPaUp-CSdZ2dIQDXPeJNfIrBhXM6G2aQlfggYHtTv8RermRsJkMJVJmxogDOmxTSf8LUX2Qwyc9nOvFh_WtvN-ZHpsfs-NL4MZU2HxuOy_tRjzX47Q50HnDFOcBWuEMwLkiNAN5buaMBkfqTIA', NULL, NULL, NULL, NULL, '0', '$2y$10$SyFdPbdDwvDPjZoo0xps5eQIVRupIhLhGrnhAZXJ.Wkc18tGinIaC', 'Y7lumU5ZxvtZEcmcpsX88990fbiSRGdW4BvAjsNTsf3pR4aBsv99hgOPWM6i', '2021-11-11 17:58:38', '2021-12-02 07:55:41'),
(21, 'Mindwhiz', 'mindwhiz', 'admin', '0300000000000', 'mindwhiz20@gmail.com', NULL, '00', 'male', '00', '00', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$HGBVUIF/BSSgdCnqE5dJBuhRv.bTaR01hnmPaygeUUTpX9PCsSZnq', NULL, NULL, NULL),
(22, 'IronBox', 'ironbox', 'admin', '0200000000000', 'info@ironbox963.com', NULL, '00', 'male', '00', '00', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$93gcY5W1iX5toEh0X/HdjuGkIJeM5A3JOchwUl2u9ygGtznQZFGdi', 'SAP8xehXC2qKVpjPHqbIMolAM5CcrqAJQ8hjIXtCvJuXK0bWV0P3NdgqFxEJ', NULL, NULL),
(23, 'adnan', 'khan', 'admin', '0300287851911', 'adnanmalik4847@gmail.com', NULL, '22', 'male', '34', '55', 'wedwd', 'werwedsd', 'wefsdsf', 'sssd', '23', '0', '0', 'avatars/admin-avatar.png', 0, 1, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZGI0Y2RjMmM3NDA4YTdlMTkwNzdkN2EwZGFmNjkwM2Q3MzZkM2EyNThjYjFmY2IzNzIzMjRhZDMxY2E2YWU2ZDMxMTkwYmMxZDQ1NmMzMGIiLCJpYXQiOjE2Mzc2NjczMzcuMTM0NDY5MDMyMjg3NTk3NjU2MjUsIm5iZiI6MTYzNzY2NzMzNy4xMzQ0NzQwMzkwNzc3NTg3ODkwNjI1LCJleHAiOjE2NjkyMDMzMzcuMTI0MzQ2OTcxNTExODQwODIwMzEyNSwic3ViIjoiIiwic2NvcGVzIjpbXX0.DVlOru1otsO6cnzIui-LtEf5Hu_KdQpnvV7MVC5QzME-6H8-ftbmgG8REG__jGK502loa0HBtUUmZUuUBRb0eAxA7M5Sz2XbQt6D17nfcCaIW8HeSm_9SOU9XT_mByhkefQR5oagFrGijxVMjLvgH0rZt1693sgUE4b8CnAJ5kS13advv15ek00-pp6y4NokUzmcc_IdPcJnAfc-zWLdB-ScKXTSIZkEJc4vhw450EQZrxqCtAhXRRMHUq6oQ-qJN3BPVbm5qxNC-34KWQiHhJCmrjAIMvrJfTgNqg3e5Fv8GsidcnKA2l-pPZXWcx5B7IvZLsK0Hi-_2sRIPdZFJZNFhGIfvyPndZlVn_CBpx89eVaUj35qj7dQKp6glqvF1NRK0XDwAex6nXkIRjt4uTjJlOdnvfYvtwOwSPTm35TzsS2wvM9TMsv3vJgTYvCqaSdZjf0citNa3zvVl85SuCMUETUte0gA-mAzrgbSx36iVua7rP9tua_ALve2koAkDJbhaWVY10ptQCFLhye1iMLhtXP_-VirW5O9fccxW161rTy9GWApCU_lcOIRYRv2WFFEIg53a51I6ANj87yfFPe6omyg9PTgmBrGa0mNbWPm5n1aKvrdwty58PbZ2h194MumQkgLTwAjPgPzL8-ICyfWaMtIaregvZ3iq0wCqos', 'wedsdsdc sdsdfsdfssdsd sdsddf', '234', 'https://asdasdbabsd.com', '232e', '0', '$2y$10$A3.B/2zhWyQG/BVxOb0HTOOLgduVylhSE4HSwQ8.S.nyOFldl5/0i', NULL, '2021-11-23 11:35:37', '2021-12-02 07:57:21'),
(24, 'Saad Tan', 'tansaad', 'trainer', '+923344585697', 'tans@gmail.com', NULL, '33', 'Male', '70.0', '89.0', NULL, NULL, NULL, 'weight loss', '6', '0', '0', 'avatars/scaled_image_picker1849117769006330012.jpg', 0, 0, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDFkNjkwYTIzOWRiNGNhNzJmZDhlYzYyMTQxMmMyOWFlMDA1NjNhNGIwYThmZTE3NjQ5ZjQ0YWFhNGUyYTYzYjkxOWRhMmJhZGNlZjk1OTgiLCJpYXQiOjE2Mzg5NTAyOTguNTQ5NzQwMDc2MDY1MDYzNDc2NTYyNSwibmJmIjoxNjM4OTUwMjk4LjU0OTc0NTA4Mjg1NTIyNDYwOTM3NSwiZXhwIjoxNjcwNDg2Mjk4LjU0MDAyNjkwMzE1MjQ2NTgyMDMxMjUsInN1YiI6IiIsInNjb3BlcyI6W119.X9tx4B872Adz43oXe_fhjq9YtA_YiUoF-TfsIPqfIRMutySSs7GhIODxDvJunWLXg5HcC1ouhMQok-Zh8lgJPtyRXRHWtsh-sj5SnRwrk62P0KUqDDUzz1-HMS91a50Brp_8fbunLfZre55-lH03OizSLE1PrWbFpKuS-Iepecl6X381LkvjWBrE6l1RVgTCTaNuw7mlrodU2z1yUziv7x7MZS5Q0A_rgiq5fO6sOPGjqxBssjnDCqpExH66wn1UQZukvyscnsrEpFBclEWpIDZFFKz4U0dHaJ4i1MonrmZ4tGDZqKj36bHjrrkfIea-h7xxzBzb7jzxVHWMHngqiCRK1a_cHu4H5YLMQzrNvpaZxgrguF8wcbckprbLAbV-gZgFwXNKkBKDLTn_Z8MPptqp7XCJv1GECGcp7Og6ZQtr3azFPYYi8Vhk9HEehGCJzEfQxY2gIoqcsfRko4339-LHiLEcJUky4yFLJZ9CkOULeb9MJnV8nFolRhh5Hg-pwe8aRNFArSqCDilVQGS22FlwVzq77oZd0Ag4Fiv9PYv_dfFKz6Lqp9nBgT0ejLIty_32_MeRswuJ37ybT3mUrzHjpJlFhjPjVtY-KvaH8-xyhPHQra4VkW6rmwiEnjXxijYFoAlHrn94EiI1F7mFQn7YqD8IZ5WvdZPVWZijOTU', 'I am transformation expert and I have transformed myself along with 100s of clients over the last few years.', '5000', NULL, '1', '0', '$2y$10$DE5svKkx5RtxdxFi3LIMleHVlE..hgmBNt4r2x5BPx0YBK9seTpzS', NULL, '2021-12-08 07:58:18', '2021-12-08 07:58:18'),
(25, 'yghh jhh', 'hhgh', 'trainer', '+923344585807', 'hgg@nn.nn', NULL, '65', 'Male', '69.0', '78.0', NULL, NULL, NULL, 'tfgh', '6', '0', '0', 'avatars/admin-avatar.png', 0, 0, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZGNiOGU4NDhhMjNkNDgyNjQ4YjUxZWQxZDg3YmU2MzhmN2Y3YzFlMDdkZDlmY2E0ZjI1ODI5MzdlNTMzM2E3Mzg0ZGZmNDI1NGE2ZmIxN2EiLCJpYXQiOjE2MzkxMzM5MjAuNTA3MjUxMDI0MjQ2MjE1ODIwMzEyNSwibmJmIjoxNjM5MTMzOTIwLjUwNzI1NjAzMTAzNjM3Njk1MzEyNSwiZXhwIjoxNjcwNjY5OTIwLjQ5ODIwNzA5MjI4NTE1NjI1LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.A_DNj7hHvCDX0-tv0bLlMT7Y41UeVO8ppegCmlRn7a89rQcBhgcfpWM20WrAm6T8ZiuTuKTH5yFlw07tloCwvGHP4aFFWWYKBrR8MYMdJcQYmTlFx4zPcPk3uwra0Q17HW-CSx_KtcyGXs0ZkMR5dKeTcsDO1EYs9OrSy7AyX47qUOAnUTCN7JolbCHAZJOUmG-WlMH6CDLkxgq4TeYLK4FVTUYBo8mKGQJ10o7SJOZs1aoxa1bsZ6K7bgcO_0gWnbVQZQRXEDlYa2q18wxa1UxeJga2ewW_Tb6ot7qQMFGrt1qL__kWZw60jGXLm8FR2hroN9rSEEQiNXQjwrJe2a_bVODHA3OMVaSR12hUqkYDUDXMMxi3Bym5kfR8Lj9SxERuOjDnLS1kFxUraKBLfqkAOIz4tfzZkxfHCdvg1jvwlsVlXZ6ugpeHBkssq5Ggcwuf3kIS3qfiXmB16rwRFVCi6Cw2KXJnTDyZToMHP_oc0TblIPVlIoSRYAJ9JMBKlw-rrj6tfl2TRsreMp8xupoRFbLcnGuVUghP88MVMca0XPz6fDyeQiluQ-5PNk7jMMDnxaHziRsvIefSWRhXi8WxEI1nQ-mxcfT1YKFKNPcyxP7WEXnQd6f7rKg3Cc6qvlupKnI8UwinN_8PKkf141K3DsPGoYo1_QPdP3BRiNw', 'tghh', '1000', NULL, '2', '0', '$2y$10$9z1lSMenjICZB46.Xp5vMuN6gQtH6Ahyky63G121loagnHdcoZuMK', NULL, '2021-12-10 10:58:40', '2021-12-10 10:58:40'),
(26, 'yfghh tfgh', 'tgh', 'trainee', '+923344585235', 'gh@nn.nn', NULL, '55', 'Male', '77.0', '77.0', 'Ugh', 'Thy', 'Thy', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDQ4MzgwODAxZTE2ZWE4NTMwYmVkMmU4ZTcyMmNlZTFiNGM5MzBhMzA4MmFmOTE5ODM4NjZmMmZiNjg2ZmI4MzE2N2NlMTlkMDM1OTYzMWQiLCJpYXQiOjE2MzkxMzQzOTYuMDIxMzI3MDE4NzM3NzkyOTY4NzUsIm5iZiI6MTYzOTEzNDM5Ni4wMjEzMzAxMTgxNzkzMjEyODkwNjI1LCJleHAiOjE2NzA2NzAzOTYuMDE5NDU0OTU2MDU0Njg3NSwic3ViIjoiIiwic2NvcGVzIjpbXX0.OwbwKDV0AYFurzDuucmlQ1ZmWCb9Qerl-3enGREU6CVbhJC6YJmO19kKxt4pWAxuMibtklwShsrGigA8rdN4SfvGy1Zk5Ur0qRyrZ8zfRibx7ukCA1kjAtM-RpzSL4ZIMXGNIJhkYQTUeTXldFNwxOlgjU3NvYxRFAXVwZVpISw0pcXMWmvILeY6XP2r-MKIM40fJhBc3KWdGVOicb8RD6AlIIXDsvmqXcHaBA7r7w4SQI5ROg-LUJ8vAN6DziZ49fhhpM83ZnyYr3ejsGWahXYhb_3c0uUCaoa2F3vkxHhXUAYNZc6UhVlgjta8_W2WF1Jc8UzGCAC5j_JXFn-6vqo7Z7BxuzKDfIQEhLB10izVwZhf6DcpJwdWkUpXnNR6KN-RmfC1_4L9yOohThcBbZUPmCtvLvoqv10V7fKam1vb_FkED08u77hGqb6z4CC4d4JGV1x0F08A0dEmF7F9R-7HxJ0YXOE99XNdpmxt7dr2RZDNlegnBLUim7lICXM1Q5bVFUfYHAPFRYXbNeZUFQrm8Vv-YwxVbMLY3Ww45sGAmYFUVAoKXyw8SgmzfpLQurDy_EAsEOyNrtzkDeTOcLMgOK-tpkdDEYWsyoPZtq2JL_CcSemf2vm-3lLLvdmUCOXkOCx_Aav2Dis2J3ZN8ACK-5a_hXTwYKTCwQRmoXY', NULL, NULL, NULL, 'null', '0', '$2y$10$VAZcqKgiemFWEAf0xaJA/.BWEWORln.9qU0fYkt/pAhrbUtiF/u/.', NULL, '2021-12-10 11:06:36', '2021-12-10 11:06:36'),
(27, 'salman ahmed', 'saluahmed123', 'trainee', '0923214217202', 'salman615.sa@gmail.com', NULL, '29', 'Male', '69.0', '75.0', 'none', 'none', 'none', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 1, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZTViMTE3MGZlMjFhYzMyNDFmNjZmYjJlZDJlYjJmZjZiZWMxNTljYzkzNDQ2Nzk1YWFkNzY4Yjk4N2IxOWZkZDBjZDg4NTMzZDg2YWQ3MDkiLCJpYXQiOjE2MzkyMTUwMjkuNDM1NzEyMDk5MDc1MzE3MzgyODEyNSwibmJmIjoxNjM5MjE1MDI5LjQzNTczMDkzNDE0MzA2NjQwNjI1LCJleHAiOjE2NzA3NTEwMjkuNDMzODM5MDgyNzE3ODk1NTA3ODEyNSwic3ViIjoiMjciLCJzY29wZXMiOltdfQ.of8qxZmztYnd8-sc_lKK_8PshVYiiX6uDaJ0nmZf5QXia9zUkyRo1OENvZCAak4HtRx19cMxFbYbytjTp4PfjppNmIE0A3ZfWNPVDvQ57UtJfQ1zo22uZFpkt5dvu8nn0ZNzIGeAeVJBsB7s0yD_aF-WASmeskWPVji2vW9Kv8JJXsb_4N2cFFgQFaZ3HlFWTWRdAXGPkVV6FhnkGvRJDjzhdHeISe9IMQqZZIRST2Gv3Ze1L2YgipYF96uzYg3dd-dYON55qVxj4R27i9zMOkbM3QXmYD76LuP0-WHk50TyzxYyHzD3rdk3IVcv4rr11zuH-Dvoc38KsU1MbpMh0-mDo-Z8PJc-yEux_gnmBjXew7Mu9d1OzKZtteX8_94jtbGPjxKHxmQNc_2O7Y77PS2x3twAYE_qJ05SfH84Oo4mO5v4iRB_6YTnaw2tG87Y8f8TbfeXbI-cvnjYjKgQcsfUQ1O6xMqMyfD9wO620TpyQTSaKzqyo9tW17NWtZWPf0GE8RftkcV53AkCEpJC9UHU6wvj8MD5bLwkuK0u1sYrr6WoBaWiJ_Jm_DRvYAITAAHnZK0mro5Jz7zXzJI_zaju6WoPtzVqYx-r0d59SgW4lhgHK1jYcMPBalyJm9tn5PIQ3amM2NjXsV8DYmRmYewbYEn5pGjSKLtb2nS-i98', NULL, NULL, NULL, 'null', '0', '$2y$10$S/PyKLT.kq2vTjUk7VAFa.97iGTqCt5PcwOdUJfRkBzsTqgomaDTq', NULL, '2021-12-11 09:29:56', '2021-12-11 10:12:28'),
(28, 'uzaid husnain', 'uzairhusnain', 'trainee', '+923350148814', 'gamet73@hotmail.com', NULL, '23', 'Male', '70.0', '65.0', 'bjb', 'fhh', 'chh', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTI3NTVkYjZiZmUyMDgyZGZjOTk4NDVlNjc1NGQ4ZDYwNjRiYjZkMjQxZWRlOTM0OWY2ZDNmZDMyNzNlYTMxNzlhOWM1MDk4NzRkYzdkODYiLCJpYXQiOjE2MzkzMjIwOTAuMjg4OTQ5MDEyNzU2MzQ3NjU2MjUsIm5iZiI6MTYzOTMyMjA5MC4yODg5NTIxMTIxOTc4NzU5NzY1NjI1LCJleHAiOjE2NzA4NTgwOTAuMjg3MDM4MDg3ODQ0ODQ4NjMyODEyNSwic3ViIjoiMjgiLCJzY29wZXMiOltdfQ.vxRTTKCA70REDN3n8ma-gaWA8ILi_qTDkxYNfpufr7547KwSz1NjI8jO3K5Rz8_5X3EBRHAR7p2IkurUmiovOf15fdEKGKkcx_ZjXKA7qh8TU5DtXOsg-Lk86OMpOZQm4VxqyQth6wswUSnRYlwnjp_5h9YYRuVGQthUIE8jclP_4RmEPZKDUpFlGRHUhzizDId9o_AWK5CPf9Zc1B8wMjOu8fcV3OhIHuuZ8vVu2wFT3ETRFpfR4dNMuxnouO3thXsJ58ocQTAoUd7V3nBNlk-R6UkN-1FANBzBn7YAoUrwwrhEUedbcJ-JtdrcQhUzQOUubtcOoy2Ev593HLpPpWuXpepsjQCOJtifvyvlx66y7BQ7l83Gl2JxKaebFg_XmxMLYxz8zBcGXtpCbg4zyzTOmXbALAV6SF-iRAhM4RuIMtCoAjzzVLFkTjK7RUNAtIlq4h-KG1QdXZlg5EgkL7QJgMbdKVXdq4rLGa-mVHSSnLdkUV7gH74ZqpaZXVl7FGt_tC2iPCZp7LGpRoagOqLyl0dFJAQ1p0GTRLUvAc9ZLOBPywIk1zdOYZJx-77QqNi388fk_y0N5ZtGmrE0_yDv0ifvnYDUUCqIpOaP9Ua7Dngz1slJF9bI07Q4RAQU9acj-VE1la4HC5HNpujTQXzQ6NR__EbTDEDiNppLFbw', NULL, NULL, NULL, 'null', '0', '$2y$10$wXkguNhCDX19hzWZk17L7OgDeCyycE/72dKetm96To3IMicCC8ZCi', NULL, '2021-12-12 15:14:02', '2021-12-12 15:14:50'),
(29, 'Zain Rauf', 'abx', 'trainee', '+923214798338', 'zainrauf97@gmail.com', NULL, '24', 'Male', '70.0', '67.0', 'none', 'none', 'none', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjBmNmI0NmI0MTcyYmI3NDk4MTYzM2M4OGUwY2YyOGZkOThiMGEwODlmY2U3Y2Q0NzFjYzc1YzY0NTc5NGJlNTJjMTc3MDAyNjcwN2JlZjYiLCJpYXQiOjE2MzkzMjIxNDAuNzU4OTg1OTk2MjQ2MzM3ODkwNjI1LCJuYmYiOjE2MzkzMjIxNDAuNzU4OTg5MDk1Njg3ODY2MjEwOTM3NSwiZXhwIjoxNjcwODU4MTQwLjc1NzQyMTk3MDM2NzQzMTY0MDYyNSwic3ViIjoiMjkiLCJzY29wZXMiOltdfQ.pvG2p9wTeJHZHEbGpn2jyOmFfhC0teIpVhqAGIJ4w0oEq9CjB2nP-gSvs2nJFLMdv-GjROXNshoWG1ud83ousb2XREnLz4qxrdKNiVfVXI30GOLfEtccVC8p3qdRVM0SfvUt2CLp6Uj10jOfNtL8lzNLzy280NJgXu2_nhMz02cc1kVE-ANyxWQRplffuEW-7ySZBMwQIDUvrZZ1HgTUOP4GB7_Ns9ZTvOxA9dJ8U8XthywxMQK43KLLz4MP6x9zL4-iqJo14WNJTJo9dpacwHip7ZJ6NOa2pc2l8yVzgo4deWZ1UVihq4S8ypnnbeMDlNx2ZrO-YHWlZ_Fir6JaWDO-HYhQR5RVgVsdSHrq4NbHfNpI08tJGXBEb1N4_InIxGsRr4t8zd4cK2d8iOsCrJpCW1_aU_kVIfVQbR34iNUmyzy5qMmB5XVxflfFKGWAMIyP6pU4MPFce9P9WgYZlePMdeRWPz-kHAESXyyg9qLyKch2Fi__kHgdjKmC5mSTCX-ZqrLV8maOKIydUMe1U1PAf2KxCNbPfZIg6prirlfCFTFiKp5nk6kMUPcnBswEpuOP2xgyY7HeWyiT4-R5lACtP8G7h1ihYCxCBOCi8DWlp26Kh1yFeHjCgAIKmSmbqQHIRBR2OJRqbSYgUQTXby1gAsBdPhDI1Ug_eDOUzM8', NULL, NULL, NULL, 'null', '0', '$2y$10$y6mUETa/6qKzwuXlKlzHHOG2oQrd6KKN6xZ6KCl.bCjeh6nQs19ZW', NULL, '2021-12-12 15:15:19', '2021-12-12 15:15:40'),
(30, 'Ammad Hassan', 'ammadhas', 'trainee', '+923314330660', 'ammadhas@gmail.com', NULL, '38', 'Male', '67.0', '111.0', 'none', 'none', 'none', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWY3M2MyZWIwNThjNGUyMTgyNzNkNmM1NGFmYzZmZTc2ZTEwOTNiZmUxZDc5ZjViN2VhZDBjODJiMzNiMTI3NjI5Njg1YTA3NTBjZjYxYzAiLCJpYXQiOjE2MzkzOTEzMzEuNTQ1MDMxMDcwNzA5MjI4NTE1NjI1LCJuYmYiOjE2MzkzOTEzMzEuNTQ1MDM0ODg1NDA2NDk0MTQwNjI1LCJleHAiOjE2NzA5MjczMzEuNTQzMTcwOTI4OTU1MDc4MTI1LCJzdWIiOiIzMCIsInNjb3BlcyI6W119.YPmi7dzIEePaiGgCSkR9SEUGJDpoHv31kM8jmgDclHeV_ctKeLfiAd0FUGa82Q2IYopNYzTI-TYHaX6V6LRSLG89t9YBjZLz-Mkl7WikpdIjZM-Fcz6RzvxuxyHxGBwITSkgUgI2XnUOxrz1bshL_uxpQHJzDZD35dEOhEnOUkS5AuB_eVRfuhWL9geS7uUpGaakzlOnaUvoNZUtwlWVRiARy8cA1Ue5H191lkT0JAp-MtnUqNdID96x1OfJDSHitoyWlUELP_w1velvwqDGV4CZYrTaNR7SGoZuZ3pFaBJ2QKpCuMkJGQfARnSeChaf5upa4xoAvG-xgzRrL_XJoRYbm_gwqfbJGdxLlgzCXvpcEgYOYzws0XLW76wmLEVyyX_aQadjG4xdCksx4xPwxQP083zQS78zPYyhcvfLNo7QoBfulr_5RXjz5s-OIyCaNKBEQ9Aq9eB31QyFYWXY9GoQ8VR0_H5TC51a-JFpR4OFgT2TP_RFEOOxGObvvNVCC68ZvS2jbXj_EJxNGIqYoFsAVNFuf5EG644THzsCxorgNuoVZg3VcZggUgbJN20kbfYdwaH_N8-xOJ6zUicRnQjA5jVn7Foj8yh6XZpmSVSnhp-qlk_BS06RGcxaVDIIoBDTjLDky90MpTF23nuo8iadhUrUlKvBZc0YE9UmYCo', NULL, NULL, NULL, 'null', '0', '$2y$10$gSsaUcwa.o/K07DH.etW4O0NwWG2bcNNADctD26b4Y3Bk6uJULoZy', NULL, '2021-12-13 10:28:27', '2021-12-13 10:28:51'),
(31, 'waseem imtiaz', 'waseem', 'trainee', '+923114087771', 'waseemimtiaz10@gmail.com', NULL, '23', 'Male', '70.0', '63.0', 'none', 'none', 'none', 'weight lose', '2', '15', '200', 'avatars/admin-avatar.png', 0, 0, 1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTFjYjkzM2Y1Mjk4MTFjOGUwN2MzZTBkY2MzMzg3MzEzOGMxN2Q0NTlkYTk1NzZkM2ZkYzAwMjJkZTlmYjgwY2ExYjBjNjc5ODk0YjZhZDkiLCJpYXQiOjE2Mzk0NjI3MTIuNjI0MDYzOTY4NjU4NDQ3MjY1NjI1LCJuYmYiOjE2Mzk0NjI3MTIuNjI0MDY2MTE0NDI1NjU5MTc5Njg3NSwiZXhwIjoxNjcwOTk4NzEyLjYyMjI1Mjk0MTEzMTU5MTc5Njg3NSwic3ViIjoiMzEiLCJzY29wZXMiOltdfQ.UfMrpIeDP6CmFqotFezkot5bWycIw3NuPyY4_6y0ME6Q9otHRjjWvHVC4ddb5tJe6bDzi8iXbS3ABPubjGwJJ_twAuJstGuWfd0BZCfaEJMa4AnrLZ2v3imr0tZC9enrZRCUEvAZ9dbjC5tBJkpWeX9rSpUn_GM_Opgr-FFo0W5CA-Di6I0vkQ58O9m0O3VTXt4EuA_l-Wtmi4rAGGyPBIiWT4z4vezjWHtpJDlM7w7KLA-iY38Gfb1rc-51ueASYkOqqaosxfsCCVVuMPtFWHx6BOw-c35jfDXJAo1M9kuwZEo-R-nLN-PEFHo5pXeQCislHRdssboHetlZrgoeSTZ3hMWyC3EkfrBkFVDDgtmWVP7ryktZ48QyoIvikYB1rbv6KrkeD0BFRCmENHrtOtDvfBDqN0YPJJDndRZDGGqCzzJuW_zsk75VdOuenujs9F58rlav60QRfvlfATKEOKqHjB7XFJUPY2pxWNBhR-rWh_2h7t7y5-UJb0P1a5NJfRtNqwwAyGif_-tSYo21u5wkmmW1Zpavh0xfvGMd9UBfbrOZAuFdgem6FNUxdVqrq4b1sSCGPZ-V0BRntqUww70KbkDvcJ7CvERp-9vtp_MsDDZWIpmC7FvoHjeRis8tcXO2ptUtcY-PXbPJH5bgvjjkho0AHU579974b-vEMHU', 'bsbs', NULL, NULL, NULL, '0', '$2y$10$8WUkDFhb1EkEJQsffH0R0.djQ2ITvEXet92kIUhuKeqdjKdB2X3dy', NULL, '2021-12-14 06:18:16', '2021-12-14 06:31:39'),
(32, 'Wasimughal', 'wasimughal', 'trainee', '+921100000111', 'waseem@mindwhiz.co', NULL, '25', 'Male', '63.0', '85.0', 'yes', 'nopes', 'none', 'weight gain', '2', '10', '0', 'avatars/scaled_image_picker7046904618975989501.jpg', 0, 1, 1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDIwZDNhNDc2NDI3ZjVjYzRkNzgyNzEwYzVmYzk2OGQ5YmRlM2U0YTRhYTZkMWQxNTU2NzE3OTEyNWQzYjRkOTNjMTA0OTIyZDQzNzI4NjciLCJpYXQiOjE2NDE4MDU2NDYuODc3MDU0OTI5NzMzMjc2MzY3MTg3NSwibmJmIjoxNjQxODA1NjQ2Ljg3NzA1OTkzNjUyMzQzNzUsImV4cCI6MTY3MzM0MTY0Ni44NTYwNDY5MTUwNTQzMjEyODkwNjI1LCJzdWIiOiIzMiIsInNjb3BlcyI6W119.Z4mBUWuAPZYSsM10gfCX7UXN10fZAErUUVcHAhnfXma6DW9kxiXn-BPs7KNUKUf5nxTwQ9lkJ5d2FnbirbK_1gOyt7cKafEgqlUAp-fbJaofYIAKMRgGiMYBGwpcsCZwXcxGtEChNyBK5XxkX0M4n6EgI8MGyh8Wy82K3RmB9qgL40_YBnuAtBvbuYSzcVTP2yCk5fV5G5Lmw1h4yTabvYJA1hJsJdTz6WA8ksOJJsSuzYAtICNg4FzBnCn0Yw4EqTn1c4CPaBaKR-Zxi_d_w6rPYtjvVVdY4zv0vS9QXH78TI9NHcA3OTZblVRLOS67lWC-9_kofJxoH4xCeTtzBihtU8g1yKT-Iwwh10pTnrvL5Mb88ioq2t7AffZp5WFUgoCAXp3ML_RFZouGmVYQsR9TnAPIggeNoRg6_CXqKnoeGXzZYL-RAfcDQoXGHgooAztRo0pKUBqbH1C881klDl2OtpKi4xpfCEADjlzn0twM5SffmwVp_IuAa893NP31o8f5KcfTbLglDRE9wH3b1Jn6IofRcSdRe1eqwPuQjkVzc4n7DbV5agMu2cAE1xOrtg73VM30Xegdcj5MK1cmR4IJ5Qw9yCFO5r-_2cM_vIirRu2XZxCjpFSCkc7ohOZSnqglcNyBMMeqtVZlrGdeGVdnS5IjsLQ3H9v8UzkQ32U', 'desc check', '1000', NULL, NULL, '0', '$2y$10$xzDxNd5Wf/HyhXrJh5sv.eewPRUc85o8OP/aBaYXJ3bKey6QNaI3S', NULL, '2021-12-16 08:36:37', '2022-01-10 09:07:26'),
(33, 'salman ch', 'salman', 'trainee', '1234567891234', 'svsd@gmaimn.com', NULL, '-11', 'male', '-42', '-13', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$BxmL26QVn//buLgVcHFZZOtLeVGMRFpYQO.taerUiK7IwZlMuSAxW', NULL, '2021-12-20 07:45:46', '2021-12-20 07:45:46'),
(34, 'jjjjj', 'salmanch', 'trainee', '1234567891023', 'salmanch622@gmail.com', NULL, '-15', 'male', '-12', '-12', NULL, NULL, NULL, NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$IeF7RSryKes2BRCoH8pb5.dtAkeJUaR15wFsxejf3K3dnlRKfJ/ye', NULL, '2021-12-20 07:48:29', '2021-12-20 07:48:29'),
(35, 'adnannn', 'khan1599', 'admin', '0300287851991', 'adnanmalik4847@gmail.comm', NULL, '22', 'male', '34', '55', 'wedwd', 'werwedsd', 'wefsdsf', 'sssd', '23', '0', '0', 'avatars/admin-avatar.png', 0, 0, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMmJkMDkyMDkyNjM4MDhhYmQwM2VjYWFjYmQzZjg3NTkwZWRmMDA4N2IxZTNkNzc2ZDhjZjMyMTg0ZjIxYjg2M2ZiNjViNzg3MGVlODNmMWEiLCJpYXQiOjE2NDAwMjUyMTEuNDA0ODYwMDE5NjgzODM3ODkwNjI1LCJuYmYiOjE2NDAwMjUyMTEuNDA0ODY0MDcyNzk5NjgyNjE3MTg3NSwiZXhwIjoxNjcxNTYxMjExLjM5MzY1OTExNDgzNzY0NjQ4NDM3NSwic3ViIjoiIiwic2NvcGVzIjpbXX0.HoAHMKjZ_Diq2DYCLDjUoWJClIT1FkyheKuKXc8NRKSFHajJf1u3aqE5q8r3Jsbd_VgvXhr0W_n_RPBwKKafx5bPYGOMLaFsGmwxHomzofNaV7pDzmlGxQGPLgOZwaTGWCemLSPqkP1xwcLkr4Vn3r7JGbWGjBnFzOnANdd-zLZ2fR_Z4J5fRPLqybkmrcDvO3VLkCNbGtPzFD-9-_qHbxov9sBfwd38LKk7CBmoO0VU0U9WyN3c_rP0OgMttclgb7taMuNlfLzA1IKXi38SIj2aVHk8WA4wtibhgV5X2KARDq5EIyzhrzGDYUxfb8RDP3B4M3Gnhl3oFAe_E6RDTGHC0b1ov7_C6zOEP0Jngfq7rEGhQGNdQnN75MBhQrGolnv1QQA1CSyi94CUg-0art3-7VbJQP8vTwWGJglYDykCV3zyU2LGKePPLDPP_uBjV-zVWaJWAAMjkXEI0rXfBdL6ro_Ru6R6_3Di3wAjFhv91rO2NSkKanjYqybCJpdWhhgLb9OOhBTl-3P7xXuAXgSMzKZ-Foz4Kq_5WoDTulgCXkwVvhHvVS-SNWC-BcMimhz_TwzBmBYf_j-t3mrH9-tc7_jgJBzpr_luTm71P-L0LTy9zatn8fvJYGxg2sG_TEBwari_fxlCPG7ymAMfHFduLiHVBX4NY6PEGeyG2xM', 'wedsdsdc sdsdfsdfssdsd sdsddf', '234', 'https://asdasdbabsd.com', '232e', '0', '$2y$10$rRrsBkmBXrHKFZpNrgd.8.GQA32mBa5Osf03nmwYepaQ.DHEu03FC', NULL, '2021-12-20 18:33:31', '2021-12-20 18:33:31'),
(37, 'bzbs nxnn', 'nsnd', 'trainee', '+923002878579', 'adnanmalik4837@gmail.com', NULL, '98', 'Male', '88.0', '22.0', 'fg', 'gh', 'hj', NULL, NULL, '0', '0', 'avatars/admin-avatar.png', 0, 0, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTgzMjkyZTBiNjQ4ZWY0YmI0NTg4MjcwZDk2OGFjZTVlMWNhY2YxYmUwYmJhYmNkOTZmN2YyMzM0MDdkODE1NjgzYzk2MTFkZDJmMGY3MTUiLCJpYXQiOjE2NDAwOTUwNjIuNDI3MDIxOTgwMjg1NjQ0NTMxMjUsIm5iZiI6MTY0MDA5NTA2Mi40MjcwMjYwMzM0MDE0ODkyNTc4MTI1LCJleHAiOjE2NzE2MzEwNjIuNDI1MzA4OTQyNzk0Nzk5ODA0Njg3NSwic3ViIjoiMzciLCJzY29wZXMiOltdfQ.aavy55ALfDwqbF5GJMsUR1RPwZwZc_wRm-N38-Chcxjoui-YaV6XVcLTREXn8aloVBL6Lf69byOyV8WYqklFG__HunkUd-iizR2TOgJq8Mg2HwZbGGqHIffSZlgS7k6dAa-foGM-GwCOZ9mDdaygM8HIurQZXtGXsSVhKODZSqgBGRquVwdN5pTQEcfEnOoxZZpEKvjKu5l6uLPdSoINrHbmNNcx9Zb8_BwZ9zZID-hI670dlLeDXMk6yECZUsgAOqkHE-9zhWaxcDd75iRWaYhy15sO6EK1OU735RfPJrx-82YS8ZYIywvvhZ4_SNuFJnjJwZkjxtSk2z6FlC7IFVc9LBy8Ee-n8ijDGcqylRuaVDreg2xsj-H6aNLhtzDrVM5ncDUKjB0_4gtXhHJNRSHM36SMw7PazfSctGQ2ZDDaE1mAlezSD3y58h4DRx-o0DVLpta8oQn74OceGFaDaMoDe9ipRZazFsSAJHhr9KXlSxERroGKwuBG09LQYhePf1SpSH2XxqZRi2YTLynd_Jp5lxVDx5eJn2f73NjCzCpdl0DWGTT26RR4wWvadp4mwiZhRPnTYcBhi6ZspLnc-Eh5uvtQ443dmsOSvar6bHrz-ALP3UikJBLDA8nternr_szq1s7m1zlRfgqgQQj_eXrkSOuUYvvpZ2t249QQo1A', NULL, NULL, NULL, 'null', '0', '$2y$10$m3ByCw8BUeolpUAvoJXWKuf7p5brZI6//fcBtuQl0bqpS4lGxtUHq', NULL, '2021-12-21 13:57:11', '2021-12-21 13:57:42'),
(38, 'Check', 'check123', 'trainee', '+923127866499', 'check@gmail.com', NULL, '25', 'Male', '25.0', '88.0', 'check injury', 'check medical', 'check bg', NULL, NULL, '0', '0', 'avatars/scaled_image_picker3414446204258206312.jpg', 0, 0, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTVhMTc2MmYwNDkyY2FhYzk4MDRhOWQxMmY5NjUwNjk0MDUyZGNhMDBjMWViZGE0OTY4N2RlNzI3YmYzY2U5MzI2OWEyOGE0M2I5ZDI3ZDgiLCJpYXQiOjE2NDA2NzM0OTYuMTAzMzQzMDA5OTQ4NzMwNDY4NzUsIm5iZiI6MTY0MDY3MzQ5Ni4xMDMzNDYxMDkzOTAyNTg3ODkwNjI1LCJleHAiOjE2NzIyMDk0OTYuMTAxNzc4OTg0MDY5ODI0MjE4NzUsInN1YiI6IjM4Iiwic2NvcGVzIjpbXX0.f6yROycYbM853xhRNO6tSpOFanHVN8rRX4n5Z-IMcAqJDcG1_IvBdHcdykvjU8_uInzJI9kR1ved81LMqgrafAtbMegmsOp90eP8M1zDsJ_7v3CW1K70SWR8U0j5CK5i_6UgZIaLo2yZzV5FpWaeD4EGgkSWimp79yc4fl3CDeRkSQQsoal3wAGuzp8vDb3hCU8kLQtIqCj7XnJtUugrDSiTQ90VznHS3Kt8J6akH-5udC2FbEx8Jxq_8P2lKreFgEJDjozbEQZs3ci1r-gCbbnMXke6US_Wr5DhDXR9gqWc9sCN5AnLVteiXws-QDEa29t-zRL11k3Bsxd4FKdP4tRyCPJzR3lciQX4PsTZJFEyamndXa9q03Scq_zT7Ctz1m6tW3fpyM9kF8eGU-P2yKCiEYowsPXVc6Tz-GSKbNSkuemTjQ91mOzT0Lb1901I1vDBAM8jjngnHGTLG-iHY983Wgfeo_2oAWx9ri2jj2g_K3GprHXDwmalYrIzjtRRwjh2lnJflg0dthIpw-ooZx1YUgABM3CWjNd1JladTzq1HRYMNUL9_SN3b5BDx8Ef8erswCDZyf1BFjcMJhLAS0grRwGJqPjq8MGn-RSPGectIvk2nDf3nF5bHmnM4PNy4lklBOanZ1yaxLIldvCGPWskS8tXwMlY5ObfCnp6LXE', NULL, NULL, NULL, NULL, '0', '$2y$10$auhq3LaAci/ilAQhHCrDsO2A.KkRie69V066Fq1QDtfc68iWwXXQO', NULL, '2021-12-27 06:10:03', '2021-12-28 06:38:16'),
(39, 'check 123', 'check12', 'trainer', '+923666666558', 'check123@gmail.com', NULL, '69', 'Male', '99.0', '99.0', NULL, NULL, NULL, 'gh', '2', '0', '0', 'avatars/scaled_image_picker5960758340043855484.jpg', 0, 0, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzE0NWJjYzM0ZDQ2NjRhZWFjZjAzZDZmMzU2NGU2ZTg2MGJjODliY2I0MzhlNzVjNzRiYzc4YmJlOWE3MTU2OWJhZWNiNjhlMjk5MDdjOWQiLCJpYXQiOjE2NDA2NzM1NjEuOTgwNDg0OTYyNDYzMzc4OTA2MjUsIm5iZiI6MTY0MDY3MzU2MS45ODA0ODgwNjE5MDQ5MDcyMjY1NjI1LCJleHAiOjE2NzIyMDk1NjEuOTc4NzUzMDg5OTA0Nzg1MTU2MjUsInN1YiI6IjM5Iiwic2NvcGVzIjpbXX0.DwKonJBsWq2wB3dtBThhZ8UceIAVdlT8d90D9BiB_o6Pi2k9ZaGwR5YFyzTpOBo7GqHlaYcwj7dcPwgb3YmLCCmnXfVG3WfAwEpde2P2WNGuxo4uWj6b0tYkotxkaYCupam4juUxKnffMTmlWkOAFlMqHA039npqlayTRFHkUXwSorYEOlXpTWrwwNg02j6jDzhiQuarJKEHr-o90QO2Vwk90jfR0QrV9HjegBrYwQhTjSBLaLL3jQXqCaCOwBITTtBV2-CSWvu2raRE4MDDxrcGQdLPDOxeIdn56XMfAL7rAMzJus6Ro9U7KE8_S8G-zFowcraFgqgfiJ0l0qc6QBu26FopNYeAm1kWFH4HoYMZnQS-4aaPLThsWNIU5-hIKKfD_EkBcfmZAJY3CJPOuYbemtH4TitZX3uju8tVeiZ7JnWXnOsbybHoz0dyM_rECpu13uOFsrplb8CIunqd5D8XmEXJ4bzFYWevVei1mhhGuNCA8E2Gs44jrxn9lGTGreAR6Xbt70Oc4_ZdekKvefrW7Gc6YHxiDYFz_vPCCbRXoqV9IY7ZNJfufXcrHG1LGa-3g8olY3HXE59oqBvik-nVTNBZTExyNbi_fAxAge-Z1T1zsxaYJU4jAOWbULUHvetv5H5qPZahLLf6qB-wuPqPJj8L-BkTB4UreTZwWoc', 'ghhvc', '120', NULL, '2', '1', '$2y$10$.UtNyMsT4P4.EH0XJFR28u5C047N6J4QTqewTstCZtKaquaP5jrjO', NULL, '2021-12-27 11:02:38', '2021-12-28 06:39:21'),
(40, 'Diet Planner', 'dietmaster', 'trainer', '+923485689809', 'diet@gmail.com', NULL, '56', 'Male', '25.0', '88.0', NULL, NULL, NULL, 'diet planer', '2', '0', '0', 'avatars/scaled_image_picker3370628763189047793.jpg', 0, 1, 1, 0, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMGFjNWRiZjIwZGZhYjU4NzE3OTcwNGE5OTVkMmVlN2NlZDJiYTE4YmZlZDAxNThiYzZhNzZjYjRmMGU4MjllZGQyZmRmNDA2MTJiZjg3NzciLCJpYXQiOjE2NDEzODIwMTAuNDQ1ODYzOTYyMTczNDYxOTE0MDYyNSwibmJmIjoxNjQxMzgyMDEwLjQ0NTg2OTkyMjYzNzkzOTQ1MzEyNSwiZXhwIjoxNjcyOTE4MDA5LjkzNjQwNTg5NzE0MDUwMjkyOTY4NzUsInN1YiI6IjQwIiwic2NvcGVzIjpbXX0.fkvWaCdvnUD1WJ1UvhvW2ARpiIcqh9jbF4qRA66om6I5JR-SilkYdGxIMId7rVBmABAl4T52Cwca6yOQZ75HLM3v16HLPt0ViNb51PdpIE24s_wDDXtWXmibhv2SSAswXD4DtnNA_zoMh1ySuCp3K7VTkBNZ5itTegmCdG9pibMsIoHs6iNSgC-RButoN5DshGZLfgkLM5vCkRGO8ALqcEGFplQddQEs6dvJ4U7QjLofgbLystkKRIlkUUw6hs3jOvj1fwcwiC6rw9UKiWm9AG4Vg4vGsRk9VL9_ZbMAKTXC_5frl9FuebtcsHNBdiRxUQ-NfMr2C5zcXMWhoUSR1GLUKm4QtNVLLN7UmAaLwyBwNUv75T77d8Fy4GW4FRoZqlj8CBICIcpNDPICMGeRNU1NBveLTKAlneiDiPn50Id4Hl0E1IN1tbE42MUCHvUWuV-tEi_Mmd3S9WsnQ0pSI5-_IgNB9YvbD-wHIYRWmK7SJBW-LFt8Vhw0uSWBOyzesk_JxTIKWSeuDolWIJjGoDFl14rBf86kWCONSI6yuAepq-aYWkYxGPff4waRKNCSlrtXiP-zTwpfyouRPe5ZDY-8zykeXMghllXWQo2wxI7fVijqDRax0Hhz69wz4y-ZcoyV0o9M2BUj8IIr38qFmqC-IQw5eeUcpf4YvUtRBt4', 'Desc Test', '1000', NULL, NULL, '1', '$2y$10$uTemgMZzoovBK0lVK0fUQ.xiIjyl60lwVri5ZikhX9UEoZ3lXkhuG', NULL, '2021-12-27 12:30:53', '2022-01-05 11:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minutes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cal_burn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `fat_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cal_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `carbohydrates_gain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exercise_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `title`, `reps`, `minutes`, `cal_burn`, `protein_gain`, `fat_gain`, `cal_gain`, `carbohydrates_gain`, `video_url`, `description`, `category_id`, `caution`, `meal_time`, `weight`, `quantity`, `created_date`, `created_by`, `user_id`, `meal_id`, `exercise_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'nzn', '55', '646', '55', '0', '0', '0', '0', NULL, 'msm', '1', NULL, NULL, NULL, NULL, '2021-09-09', '3', '3', NULL, NULL, 0, '2021-09-08 18:09:01', '2021-09-08 18:09:01'),
(3, 'running', '22', '15', '100', '0', '0', '0', '0', NULL, '2km', '1', NULL, NULL, NULL, NULL, '2021-09-09', '3', '3', NULL, NULL, 1, '2021-09-08 18:09:43', '2021-09-08 18:11:44'),
(4, 'dry', '4', '4', '7', '0', '0', '0', '0', NULL, 'dB', '1', NULL, NULL, NULL, NULL, '2021-09-08', '3', '3', NULL, NULL, 0, '2021-09-08 18:38:48', '2021-09-08 18:38:48'),
(8, 'ygg', '5', '3', '8', '0', '0', '0', '0', NULL, 'hgg', '1', NULL, NULL, NULL, NULL, '2021-11-30', '3', '3', NULL, NULL, 0, '2021-11-30 10:51:12', '2021-11-30 10:51:12'),
(9, 'yhh', '5', '3', '7', '0', '0', '0', '0', NULL, 'hhh', '1', NULL, NULL, NULL, NULL, '2021-12-09', '3', '3', NULL, NULL, 0, '2021-12-02 13:44:38', '2021-12-02 13:44:38'),
(11, 'running', '2', '15', '250', '0', '0', '0', '0', NULL, '2km', '1', NULL, NULL, NULL, NULL, '2021-12-14', '31', '31', NULL, NULL, 0, '2021-12-14 06:32:10', '2021-12-14 06:32:10'),
(12, 'dumplings', '2', '10', '100', '0', '0', '0', '0', NULL, 'vv', '1', NULL, NULL, NULL, NULL, '2021-12-14', '31', '31', NULL, NULL, 0, '2021-12-14 06:33:03', '2021-12-14 06:33:03'),
(13, 'swimming', '2', '10', '100', '0', '0', '0', '0', NULL, 'pool', '1', NULL, NULL, NULL, NULL, '2021-12-14', '31', '31', NULL, NULL, 0, '2021-12-14 06:33:43', '2021-12-14 06:33:43'),
(14, 'push ups', '6', '0', NULL, '0', '0', '0', '0', NULL, 'yo', '1', NULL, NULL, NULL, NULL, '2021-12-17', '32', '32', NULL, '5', 0, '2021-12-17 05:50:40', '2021-12-17 05:50:40'),
(15, 'fhh', '1', '2', '0', '0', '0', '0', '0', NULL, 'dhgd', '1', NULL, NULL, NULL, NULL, '2021-12-17', '3', '3', NULL, NULL, 0, '2021-12-17 06:50:55', '2021-12-17 06:50:55'),
(16, 'dgg', '2', '2', '0', '0', '0', '0', '0', NULL, 'dgg', '1', NULL, NULL, NULL, NULL, '2021-12-17', '3', '3', NULL, NULL, 0, '2021-12-17 06:51:29', '2021-12-17 06:51:29'),
(17, 'Dumping', '12', '10', NULL, '0', '0', '0', '0', NULL, 'No pain No gain', '1', NULL, NULL, NULL, NULL, '2021-12-28', '32', '32', NULL, '7', 1, '2021-12-28 08:53:11', '2021-12-28 08:53:27'),
(18, 'gyg', '58', '5896', '89', '0', '0', '0', '0', NULL, 'ggb', '1', NULL, NULL, NULL, NULL, '2022-01-06', '32', '32', NULL, NULL, 0, '2022-01-05 08:56:08', '2022-01-05 08:56:08'),
(19, 'check', '5', '96', '2688', '0', '0', '0', '0', NULL, 'hh', '1', NULL, NULL, NULL, NULL, '2022-01-08', '40', '32', NULL, NULL, 0, '2022-01-05 10:13:35', '2022-01-05 10:13:35'),
(20, 'bg', '99', '9', '99', '0', '0', '0', '0', NULL, 'hh', '1', NULL, NULL, NULL, NULL, '2022-01-05', '32', '32', NULL, NULL, 0, '2022-01-05 10:23:04', '2022-01-05 10:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_monthly_history`
--

CREATE TABLE `user_monthly_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci,
  `cal_burn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein_gain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_gain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories_gain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carbohydrates_gain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_ratings`
--

CREATE TABLE `user_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `two_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `three_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `four_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `five_star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rating_count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `avg_rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ratings`
--

INSERT INTO `user_ratings` (`id`, `user_id`, `one_star`, `two_star`, `three_star`, `four_star`, `five_star`, `rating_count`, `avg_rating`, `created_at`, `updated_at`) VALUES
(1, '1', '0', '1', '0', '0', '2', '3', '4', '2021-09-07 20:24:37', '2021-12-28 08:42:33'),
(2, '3', '0', '0', '0', '0', '0', '0', '0.0', '2021-09-07 20:27:48', '2021-09-07 20:27:48'),
(3, '4', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-06 18:15:43', '2021-10-06 18:15:43'),
(4, '5', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-06 18:21:05', '2021-10-06 18:21:05'),
(5, '6', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-07 19:08:01', '2021-10-07 19:08:01'),
(6, '7', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-12 19:16:49', '2021-10-12 19:16:49'),
(7, '8', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-12 19:21:14', '2021-10-12 19:21:14'),
(8, '9', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-12 19:23:50', '2021-10-12 19:23:50'),
(9, '10', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-25 17:58:25', '2021-10-25 17:58:25'),
(10, '11', '0', '0', '0', '0', '0', '0', '0.0', '2021-10-25 18:03:18', '2021-10-25 18:03:18'),
(11, '12', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-03 01:35:45', '2021-11-03 01:35:45'),
(12, '13', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-03 13:00:01', '2021-11-03 13:00:01'),
(13, '14', '0', '0', '1', '0', '0', '1', '3', '2021-11-03 18:13:09', '2021-11-13 09:05:19'),
(14, '17', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-03 23:33:20', '2021-11-03 23:33:20'),
(15, '18', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-04 13:43:02', '2021-11-04 13:43:02'),
(16, '19', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-04 17:44:33', '2021-11-04 17:44:33'),
(17, '20', '0', '0', '0', '0', '1', '1', '5', '2021-11-11 17:58:38', '2021-11-13 09:02:46'),
(18, '23', '0', '0', '0', '0', '0', '0', '0.0', '2021-11-23 11:35:37', '2021-11-23 11:35:37'),
(19, '24', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-08 07:58:18', '2021-12-08 07:58:18'),
(20, '25', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-10 10:58:40', '2021-12-10 10:58:40'),
(21, '26', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-10 11:06:36', '2021-12-10 11:06:36'),
(22, '27', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-11 09:29:56', '2021-12-11 09:29:56'),
(23, '28', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-12 15:14:02', '2021-12-12 15:14:02'),
(24, '29', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-12 15:15:19', '2021-12-12 15:15:19'),
(25, '30', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-13 10:28:27', '2021-12-13 10:28:27'),
(26, '31', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-14 06:18:16', '2021-12-14 06:18:16'),
(27, '32', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-16 08:36:37', '2021-12-16 08:36:37'),
(28, '33', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-20 07:45:46', '2021-12-20 07:45:46'),
(29, '34', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-20 07:48:29', '2021-12-20 07:48:29'),
(30, '35', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-20 18:33:31', '2021-12-20 18:33:31'),
(31, '36', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-21 13:50:20', '2021-12-21 13:50:20'),
(32, '37', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-21 13:57:11', '2021-12-21 13:57:11'),
(33, '38', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-27 06:10:03', '2021-12-27 06:10:03'),
(34, '39', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-27 11:02:38', '2021-12-27 11:02:38'),
(35, '40', '0', '0', '0', '0', '0', '0', '0.0', '2021-12-27 12:30:53', '2021-12-27 12:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `message`, `review_for`, `review_by`, `created_at`, `updated_at`) VALUES
(1, 'good', '1', '3', '2021-09-08 18:15:46', '2021-09-08 18:15:46'),
(2, 'testing', '1', '30', '2021-12-13 11:51:56', '2021-12-13 11:51:56'),
(3, 'ok', '1', '32', '2021-12-28 08:42:32', '2021-12-28 08:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions_history`
--

CREATE TABLE `user_subscriptions_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsub_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subscriptions_history`
--

INSERT INTO `user_subscriptions_history` (`id`, `trainer_id`, `trainee_id`, `start_date`, `end_date`, `unsub_date`, `sub_price`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '2021-09-08', '2021-10-08', '2021-09-08', '80.0', '2021-09-08 18:15:52', '2021-09-08 18:15:52'),
(2, '1', '3', '2021-09-08', '2021-10-08', '2021-10-08', '80.0', '2021-10-08 13:00:02', '2021-10-08 13:00:02'),
(3, '1', '3', '2021-10-08', '2021-11-07', '2021-11-07', '80.0', '2021-11-07 13:00:02', '2021-11-07 13:00:02'),
(4, '20', '3', '2021-11-13', '2021-12-13', '2021-11-13', '199.0', '2021-11-13 09:02:50', '2021-11-13 09:02:50'),
(5, '14', '3', '2021-11-13', '2021-12-13', '2021-11-13', '70.0', '2021-11-13 09:05:21', '2021-11-13 09:05:21'),
(6, '1', '30', '2021-12-13', '2022-01-12', '2021-12-13', '80.0', '2021-12-13 11:52:01', '2021-12-13 11:52:01'),
(7, '1', '32', '2021-12-16', '2022-01-15', '2021-12-28', '80.0', '2021-12-28 08:42:36', '2021-12-28 08:42:36'),
(8, '1', '32', '2022-01-05', '2022-02-04', '2022-01-05', '80.0', '2022-01-05 08:51:07', '2022-01-05 08:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_trainers_subscriptions`
--

CREATE TABLE `user_trainers_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_trainers_subscriptions`
--

INSERT INTO `user_trainers_subscriptions` (`id`, `trainer_id`, `trainee_id`, `start_date`, `end_date`, `sub_price`, `status`, `created_at`, `updated_at`) VALUES
(5, '17', '3', '2021-11-13', '2021-12-13', '100.0', 1, '2021-11-13 09:03:59', '2021-11-13 09:03:59'),
(6, '11', '20', '2021-11-25', '2021-12-25', '80.0', 1, '2021-11-25 12:05:59', '2021-11-25 12:05:59'),
(7, '1', '29', '2021-12-12', '2022-01-11', '80.0', 1, '2021-12-12 15:17:51', '2021-12-12 15:17:51'),
(9, '1', '31', '2021-12-14', '2022-01-13', '80.0', 1, '2021-12-14 06:24:21', '2021-12-14 06:24:21'),
(11, '5', '32', '2021-12-16', '2022-01-15', '67.0', 1, '2021-12-16 10:18:10', '2021-12-16 10:18:10'),
(12, '17', '37', '2021-12-21', '2022-01-20', '100.0', 1, '2021-12-21 15:47:50', '2021-12-21 15:47:50'),
(13, '32', '38', '2021-12-27', '2022-01-26', '5000.0', 1, '2021-12-27 06:10:41', '2021-12-27 06:10:41'),
(14, '40', '32', '2021-12-27', '2022-01-26', '25.0', 1, '2021-12-27 12:40:21', '2021-12-27 12:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_workout_plans`
--

CREATE TABLE `user_workout_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `caution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `difficulty_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muscle_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1.0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_workout_plans`
--

INSERT INTO `user_workout_plans` (`id`, `user_id`, `plan_id`, `title`, `description`, `caution`, `price`, `trainer_id`, `cover_img`, `cover_video`, `difficulty_level`, `duration`, `muscle_type`, `category_id`, `review_status`, `progress`, `version`, `created_at`, `updated_at`) VALUES
(1, '20', '7', 'compound complex', 'deadlifts: 15 to 20 reps \noverheadpress: 10 to 12 reps\nbacksquats: 15 to 20 reps \nbarbellbentover rows: 15 to 20 reps\nfloor press or bench press: 15 to 20 reps \nplank: 1 minute\ngorilla curls: 25 reps \ntricep overhead: 25\n\n3to 4 rounds.', 'warm up is compulsory before every workout.', '65.0', '14', 'workout_plans_cover_images/scaled_image_picker5911610756288021165.jpg', NULL, '2', '4', 'full body', '1', '0', '0', '1.0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(2, '20', '3', 'weight gain', 'Weight gain plan', 'no caution', '70.0', '11', 'workout_plans_cover_images/scaled_image_picker2747065786318734147.jpg', NULL, '1', '4', 'abs', '1', '0', '0', '1.0', '2021-11-29 10:57:20', '2021-11-29 10:57:20'),
(3, '28', '3', 'weight gain', 'Weight gain plan', 'no caution', '70.0', '11', 'workout_plans_cover_images/scaled_image_picker2747065786318734147.jpg', NULL, '1', '4', 'abs', '1', '0', '0', '1.0', '2021-12-12 15:16:00', '2021-12-12 15:16:00'),
(4, '28', '7', 'compound complex', 'deadlifts: 15 to 20 reps \noverheadpress: 10 to 12 reps\nbacksquats: 15 to 20 reps \nbarbellbentover rows: 15 to 20 reps\nfloor press or bench press: 15 to 20 reps \nplank: 1 minute\ngorilla curls: 25 reps \ntricep overhead: 25\n\n3to 4 rounds.', 'warm up is compulsory before every workout.', '65.0', '14', 'workout_plans_cover_images/scaled_image_picker5911610756288021165.jpg', NULL, '2', '4', 'full body', '1', '0', '0', '1.0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(5, '29', '3', 'weight gain', 'Weight gain plan', 'no caution', '70.0', '11', 'workout_plans_cover_images/scaled_image_picker2747065786318734147.jpg', NULL, '1', '4', 'abs', '1', '0', '0', '1.0', '2021-12-12 15:19:35', '2021-12-12 15:19:35'),
(6, '30', '3', 'weight gain', 'Weight gain plan', 'no caution', '70.0', '11', 'workout_plans_cover_images/scaled_image_picker2747065786318734147.jpg', NULL, '1', '4', 'abs', '1', '0', '0', '1.0', '2021-12-13 11:52:50', '2021-12-13 11:52:50'),
(7, '31', '7', 'compound complex', 'deadlifts: 15 to 20 reps \noverheadpress: 10 to 12 reps\nbacksquats: 15 to 20 reps \nbarbellbentover rows: 15 to 20 reps\nfloor press or bench press: 15 to 20 reps \nplank: 1 minute\ngorilla curls: 25 reps \ntricep overhead: 25\n\n3to 4 rounds.', 'warm up is compulsory before every workout.', '65.0', '14', 'workout_plans_cover_images/scaled_image_picker5911610756288021165.jpg', NULL, '2', '4', 'full body', '1', '0', '0', '1.0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(8, '32', '3', 'weight gain', 'Weight gain plan', 'no caution', '70.0', '11', 'workout_plans_cover_images/scaled_image_picker2747065786318734147.jpg', NULL, '1', '4', 'abs', '1', '0', '0', '1.0', '2021-12-16 13:33:39', '2021-12-16 13:33:39'),
(9, '38', '43', 'Biceps', 'gain your biceps', 'let\'s do this Marine !', '200.0', '32', 'workout_plans_cover_images/scaled_image_picker7313000690633535598.jpg', NULL, '1', '4', 'biceps', '1', '0', '0', '2', '2021-12-27 06:11:00', '2021-12-27 06:11:00'),
(10, '32', '43', 'Biceps', 'gain your biceps', 'let\'s do this Marine !', '200.0', '32', 'workout_plans_cover_images/scaled_image_picker7313000690633535598.jpg', NULL, '1', '4', 'biceps', '1', '0', '100', '2', '2021-12-28 06:36:31', '2021-12-28 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_workout_plan_details`
--

CREATE TABLE `user_workout_plan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_workout_plan_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_workout_plan_details_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avg_cal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cal_burn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `day_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `week_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_workout_plan_details`
--

INSERT INTO `user_workout_plan_details` (`id`, `user_workout_plan_id`, `pre_workout_plan_details_id`, `day_title`, `min_calories`, `max_calories`, `avg_cal`, `cal_burn`, `day_number`, `week_number`, `progress`, `created_at`, `updated_at`) VALUES
(1, '1', '12', 'compound complex', '300', '600', '450', '0', '1', '1', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(2, '1', '13', 'compound complex', '300', '600', '450', '0', '1', '1', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(3, '1', '14', 'active recovery', '200', '350', '275', '0', '2', '1', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(4, '1', '15', 'full body strength training', '350', '650', '500', '0', '3', '1', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(5, '1', '16', 'boxing', '600', '1000', '800', '0', '4', '1', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(6, '1', '17', 'hiit workout', '400', '600', '500', '0', '5', '1', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(7, '2', '9', 'shoulder', '300', '500', '400', '0', '1', '1', '0', '2021-11-29 10:57:20', '2021-11-29 10:57:20'),
(8, '3', '9', 'shoulder', '300', '500', '372', '0', '1', '1', '0', '2021-12-12 15:16:00', '2021-12-12 15:16:00'),
(9, '4', '12', 'compound complex', '300', '600', '422', '0', '1', '1', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(10, '4', '13', 'compound complex', '300', '600', '422', '0', '1', '1', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(11, '4', '14', 'active recovery', '200', '350', '247', '0', '2', '1', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(12, '4', '15', 'full body strength training', '350', '650', '472', '0', '3', '1', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(13, '4', '16', 'boxing', '600', '1000', '772', '0', '4', '1', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(14, '4', '17', 'hiit workout', '400', '600', '472', '0', '5', '1', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(15, '5', '9', 'shoulder', '300', '500', '372', '0', '1', '1', '0', '2021-12-12 15:19:35', '2021-12-12 15:19:35'),
(16, '6', '9', 'shoulder', '300', '500', '496', '0', '1', '1', '0', '2021-12-13 11:52:50', '2021-12-13 11:52:50'),
(17, '7', '12', 'compound complex', '300', '600', '402', '0', '1', '1', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(18, '7', '13', 'compound complex', '300', '600', '402', '0', '1', '1', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(19, '7', '14', 'active recovery', '200', '350', '227', '0', '2', '1', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(20, '7', '15', 'full body strength training', '350', '650', '452', '0', '3', '1', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(21, '7', '16', 'boxing', '600', '1000', '752', '0', '4', '1', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(22, '7', '17', 'hiit workout', '400', '600', '452', '0', '5', '1', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(23, '8', '9', 'shoulder', '300', '500', '428', '0', '1', '1', '0', '2021-12-16 13:33:39', '2021-12-16 13:33:39'),
(24, '9', '61', 'Biseps', '300', '500', '400', '0', '1', '1', '0', '2021-12-27 06:11:00', '2021-12-27 06:11:00'),
(25, '10', '61', 'Biseps', '300', '500', '428', '428', '1', '1', '100', '2021-12-28 06:36:31', '2021-12-28 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_workout_plan_exercises`
--

CREATE TABLE `user_workout_plan_exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_workout_plan_game_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_workout_plan_exercises`
--

INSERT INTO `user_workout_plan_exercises` (`id`, `user_workout_plan_game_id`, `name`, `reps`, `duration`, `video_url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'push ups', '6', '0', NULL, 'yo', 0, '2021-11-29 10:57:20', '2021-11-29 10:57:20'),
(2, '3', 'push ups', '6', '0', NULL, 'yo', 0, '2021-12-12 15:16:00', '2021-12-12 15:16:00'),
(3, '5', 'push ups', '6', '0', NULL, 'yo', 0, '2021-12-12 15:19:35', '2021-12-12 15:19:35'),
(4, '6', 'push ups', '6', '0', NULL, 'yo', 0, '2021-12-13 11:52:50', '2021-12-13 11:52:50'),
(5, '8', 'push ups', '6', '0', NULL, 'yo', 0, '2021-12-16 13:33:39', '2021-12-16 13:33:39'),
(6, '9', 'Dumping', '12', '10', NULL, 'No pain No gain', 0, '2021-12-27 06:11:00', '2021-12-27 06:11:00'),
(7, '10', 'Dumping', '12', '10', NULL, 'No pain No gain', 1, '2021-12-28 06:36:31', '2021-12-28 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_workout_plan_games`
--

CREATE TABLE `user_workout_plan_games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_workout_plan_details_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_workout_plan_games_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sets` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rounds` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_workout_plan_games`
--

INSERT INTO `user_workout_plan_games` (`id`, `user_workout_plan_details_id`, `pre_workout_plan_games_id`, `name`, `sets`, `rounds`, `progress`, `created_at`, `updated_at`) VALUES
(1, '1', '10', 'giant set', '8', 'null', '0', '2021-11-25 12:23:31', '2021-11-25 12:23:31'),
(2, '7', '7', 'super set', '6', 'null', '0', '2021-11-29 10:57:20', '2021-11-29 10:57:20'),
(3, '8', '7', 'super set', '6', 'null', '0', '2021-12-12 15:16:00', '2021-12-12 15:16:00'),
(4, '9', '10', 'giant set', '8', 'null', '0', '2021-12-12 15:16:53', '2021-12-12 15:16:53'),
(5, '15', '7', 'super set', '6', 'null', '0', '2021-12-12 15:19:35', '2021-12-12 15:19:35'),
(6, '16', '7', 'super set', '6', 'null', '0', '2021-12-13 11:52:50', '2021-12-13 11:52:50'),
(7, '17', '10', 'giant set', '8', 'null', '0', '2021-12-14 06:26:29', '2021-12-14 06:26:29'),
(8, '23', '7', 'super set', '6', 'null', '0', '2021-12-16 13:33:39', '2021-12-16 13:33:39'),
(9, '24', '54', 'Super set', '3', 'null', '0', '2021-12-27 06:11:00', '2021-12-27 06:11:00'),
(10, '25', '54', 'Super set', '3', 'null', '100', '2021-12-28 06:36:31', '2021-12-28 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `video_library`
--

CREATE TABLE `video_library` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_library`
--

INSERT INTO `video_library` (`id`, `name`, `description`, `status`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Face Pulls - Shoulders - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=c_wPHCnh3xw', '2022-01-25 10:57:42', '2022-01-25 14:45:13'),
(3, 'Barbell Back Squats - Legs - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=m0hTCZsp6FE', '2022-01-25 14:44:42', '2022-01-25 14:44:42'),
(4, 'High To Low Cable Flys - Chest - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=8gCE6-19B1o', '2022-01-25 14:45:58', '2022-01-25 14:45:58'),
(5, 'Flat Bench Dumbbell Flys - Chest - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=EF1ZCWUZPTk', '2022-01-25 14:46:47', '2022-01-25 14:46:47'),
(6, 'Incline Barbell Bench Press - Chest - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=fdJzdIxhMPM', '2022-01-25 14:47:15', '2022-01-25 14:47:15'),
(7, 'Incline Dumbbell Bench Press - Chest - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=nUUdcsOUz94', '2022-01-25 14:48:16', '2022-01-25 14:48:16'),
(8, 'Overhand Barbell Rows', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=JAQeYN3Doo8', '2022-01-25 14:49:07', '2022-01-25 14:49:07'),
(9, 'Overhand Dumbbells Curls - Bicep - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=_nB_WLp3yK0', '2022-01-25 14:49:30', '2022-01-25 14:49:30'),
(10, 'Seated Incline Bench Dumbbells Curls - Bicep - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=K76FZIHFJXU', '2022-01-25 14:49:54', '2022-01-25 14:49:54'),
(11, 'Seated Dumbbells Concentration Curls - Bicep - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=WtmDAN8xR80', '2022-01-25 14:50:13', '2022-01-25 14:50:13'),
(12, 'Standing Cable Lat Pull Down - Back - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=BfBXTJcU6Uk', '2022-01-25 14:51:19', '2022-01-25 14:51:19'),
(13, 'Seated Close Grip Cable Rows - Back - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=NL0fMUMfhDo', '2022-01-25 14:51:57', '2022-01-25 14:51:57'),
(14, 'Seated Wide Grip High Cable Pull Downs - Cardio - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=dWGU5qWYC70', '2022-01-25 14:52:49', '2022-01-25 14:52:49'),
(15, 'Bar Over Burpees - Cardio - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=BAepSu7oDXI', '2022-01-25 14:53:28', '2022-01-25 14:53:28'),
(16, 'BOX Jumps Burpees - Cardio - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=Yxy4bkVY6F4', '2022-01-25 14:54:15', '2022-01-25 14:54:15'),
(17, 'Dumbell Around The World - Shoulders - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=KKnX5rGjiiM', '2022-01-25 14:55:16', '2022-01-25 14:55:16'),
(18, 'Burpees - Cardio - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=fZgvGFzs5bU', '2022-01-25 14:55:41', '2022-01-25 14:55:41'),
(19, 'BarBell Racks Pulls - Back - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=HLxl564GBX4', '2022-01-25 14:56:08', '2022-01-25 14:56:08'),
(20, 'Bent Over Rear Delt Flys - Shoulders - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=oWwmeyA60zk', '2022-01-25 14:56:35', '2022-01-25 14:56:35'),
(21, 'Seated Incline Bench BD Front Raises - Chest - IronBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=seQNl-hCvUc', '2022-01-25 14:57:06', '2022-01-25 14:57:06'),
(22, 'Dumbell Shrugs - Shoulders - IroxBox', 'Hey peeps, let\'s get your heart rate up, burn some calories, and sweat it out. Let\'s get started with your mat and a bottle of water. Please remember that we are all different and that you can customize this according to your health. Today, make a HEALTHY CHOICE and join IRON BOX for a HEALTHY WEIGHT LOSS!', 1, 'https://www.youtube.com/watch?v=IhTev3_d96A', '2022-01-25 14:58:13', '2022-01-25 14:58:13'),
(23, 'Afifa Mehmood Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=XAphtXTt8_E', '2022-01-25 14:58:37', '2022-01-25 14:58:37'),
(24, 'Mustafa Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=VuBhHUqKsLg', '2022-01-25 14:59:01', '2022-01-25 14:59:01'),
(25, 'Muzamil Tariq Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=rRulCHcm0hU', '2022-01-25 14:59:29', '2022-01-25 14:59:29'),
(26, 'Sameer Head Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=FA0YzM6nozc', '2022-01-25 14:59:50', '2022-01-25 14:59:50'),
(27, 'Huzaifa Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=BhaLoyftHks', '2022-01-25 15:01:09', '2022-01-25 15:01:09'),
(28, 'DR. Asim Javed Nutritionist - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=azW0d-O1f8s', '2022-01-25 15:02:12', '2022-01-25 15:02:12'),
(29, 'Aiza Ali Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=FUSIfQ7P5ZU', '2022-01-25 15:02:53', '2022-01-25 15:02:53'),
(30, 'Hamza Shiekh Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=Tr9tH1ExiPM', '2022-01-25 15:03:38', '2022-01-25 15:03:38'),
(31, 'Nazish Ali Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=npj_IjfpcNY', '2022-01-25 15:04:05', '2022-01-25 15:04:05'),
(32, 'Osama CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=3aPpsmZvIsA', '2022-01-25 15:05:11', '2022-01-25 15:05:11'),
(33, 'Waqar Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=-Wnn_3e_UaU', '2022-01-25 15:05:40', '2022-01-25 15:05:40'),
(34, 'Ahsan Shahzad CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=TmWfvsRZzno', '2022-01-25 15:06:05', '2022-01-25 15:06:05'),
(35, 'Amna Cheema CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=_eXzUUHhwfg', '2022-01-25 15:06:30', '2022-01-25 15:06:30'),
(36, 'Khushbakth CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=_eJFJRFJ7Tw', '2022-01-25 15:06:51', '2022-01-25 15:06:51'),
(37, 'Hamza Nadeem CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=aVGg7E4_OVw', '2022-01-25 15:07:52', '2022-01-25 15:07:52'),
(38, 'Ali Rauf Qureshi CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=ci1R_WCcjOg', '2022-01-25 15:08:12', '2022-01-25 15:08:12'),
(39, 'Farhan CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=t98GU7y26VY', '2022-01-25 15:08:38', '2022-01-25 15:08:38'),
(40, 'Hayyan CrossFit Trainer - IronBox', 'Meet our trainers that do all the hard work to shed your unwanted figures on scale. And yes, they’ll maintain the PACE for you! All you have to do now is move your feet to the beat! Let\'s go on a weight loss journey! from warm up to multiple circuits and even an ab finisher sharing insights and their expertise to help anybody over the globe to create a workout for themselves. Below is the entire workout routine.', 1, 'https://www.youtube.com/watch?v=A9NHF-N74EQ', '2022-01-25 15:09:02', '2022-01-25 15:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plan`
--

CREATE TABLE `workout_plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `caution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trainer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `difficulty_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muscle_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1.0',
  `whats_new` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_plan`
--

INSERT INTO `workout_plan` (`id`, `title`, `description`, `caution`, `price`, `trainer_id`, `cover_img`, `cover_video`, `difficulty_level`, `duration`, `category`, `muscle_type`, `version`, `whats_new`, `status`, `created_at`, `updated_at`) VALUES
(2, 'test', 'Weight loss plan', 'djhg', '67.0', '3', 'workout_plans_cover_images/scaled_image_picker5375104720618391783.jpg', 'https://www.youtube.com/watch?v=Q5WU_7rh6h4', '1', '4', '1', 'abs', '1.0', NULL, 0, '2021-10-12 19:09:34', '2021-10-12 19:09:34'),
(3, 'weight gain', 'Weight gain plan', 'no caution', '70.0', '11', 'workout_plans_cover_images/scaled_image_picker2747065786318734147.jpg', NULL, '1', '4', '1', 'abs', '1.0', NULL, 1, '2021-10-25 18:12:17', '2021-10-25 18:13:53'),
(4, 'weigth gain', 'FULL BODY COMPOUND WORKOUT.\nit will contain main lifts.\nDEADLIFTS: 1warm up sets,3 working sets, Reps 5,6.\nSQUATS: 1warmup set, 3 working set 7,8reps.\nBENCHPRESS:1warmup set, 3 working set, reps 10,12. \nBARBELL BENTOVERROWS:1warmup set, 3 working set, reps 12,10.\nOVERHEAD PRESS:3 working sets.', 'warm sets are compulsory for form, if the form isn\'t right you are lifting your ego not weights.', '50.0', '14', 'workout_plans_cover_images/scaled_image_picker5056800661305106851.jpg', NULL, '2', '6', '1', 'full body.', '1.0', NULL, 0, '2021-11-04 18:03:22', '2021-11-04 18:03:22'),
(5, 'muscle gain', 'This plan is designed to make sure you get maximum benefit in the shortest period of time that you have.', 'make sure to do all exercises witu proper form', '50.0', '17', 'workout_plans_cover_images/scaled_image_picker5545157377489764156.jpg', 'https://www.youtube.com/watch?v=Q5WU_7rh6h4', '2', '4', '1', 'Arms', '1.0', NULL, 0, '2021-11-09 17:38:20', '2021-11-09 17:38:20'),
(6, 'Muscle gain', 'This plan will help you acheive maximum benefit in shortest period of time', 'make sure to do all repititions with good form', '50.0', '17', 'workout_plans_cover_images/scaled_image_picker9114544422432241798.png', 'https://www.youtube.com/watch?v=Q5WU_7rh6h4', '2', '4', '1', 'Arms', '1.0', NULL, 0, '2021-11-09 17:43:33', '2021-11-09 17:43:33'),
(7, 'compound complex', 'deadlifts: 15 to 20 reps \noverheadpress: 10 to 12 reps\nbacksquats: 15 to 20 reps \nbarbellbentover rows: 15 to 20 reps\nfloor press or bench press: 15 to 20 reps \nplank: 1 minute\ngorilla curls: 25 reps \ntricep overhead: 25\n\n3to 4 rounds.', 'warm up is compulsory before every workout.', '65.0', '14', 'workout_plans_cover_images/scaled_image_picker5911610756288021165.jpg', NULL, '2', '4', '1', 'full body', '1.0', NULL, 1, '2021-11-09 23:16:59', '2021-11-25 12:18:26'),
(8, 'x', 'Test entry', 'please be careful', '80.0', '20', 'workout_plans_cover_images/scaled_image_picker8663930104110349954.jpg', NULL, '2', '4', '2', 'shoulder', '2', NULL, 0, '2021-11-11 18:09:49', '2021-11-11 18:10:33'),
(10, 'dgh', 'Hhhh', 'jj', '77.0', '1', 'workout_plans_cover_images/scaled_image_picker7525619266393546550.png', NULL, '1', '4', '1', 'ujh', '1.0', NULL, 0, '2021-12-07 07:43:19', '2021-12-07 07:43:19'),
(11, 'uhhh', 'Hbb', 'ii', '77.0', '1', 'workout_plans_cover_images/scaled_image_picker6249828567193464316.png', NULL, '2', '6', '1', 'hvv', '1.0', NULL, 0, '2021-12-07 07:50:43', '2021-12-07 07:50:43'),
(12, 'uhhh', 'Hcvb', 'hhbb', '77.0', '1', 'workout_plans_cover_images/scaled_image_picker4927406117843245977.png', NULL, '1', '4', '1', 'bcvb', '1.0', NULL, 0, '2021-12-07 08:25:41', '2021-12-07 08:25:41'),
(14, 'yggh', 'Cvbb', 'jbh', '77.0', '1', 'workout_plans_cover_images/scaled_image_picker2233465137164381157.png', NULL, '1', '4', '1', 'vvbb', '1.0', NULL, 0, '2021-12-07 08:40:56', '2021-12-07 08:40:56'),
(15, 'gvhh', 'Cvb', 'hhj', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker7383206201297154884.png', NULL, '1', '4', '1', 'cvbb', '1.0', NULL, 0, '2021-12-07 09:34:38', '2021-12-07 09:34:38'),
(16, 'yfgj', 'Ghbbv', 'yggh', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker1819391962907947459.png', NULL, '1', '4', '1', 'fbb', '1.0', NULL, 0, '2021-12-07 09:46:40', '2021-12-07 09:46:40'),
(17, 'ugvhg', 'Ggvbb', 'jgh', '65.0', '1', 'workout_plans_cover_images/scaled_image_picker3410180026310332393.png', NULL, '1', '4', '1', 'fghvv', '1.0', NULL, 0, '2021-12-07 09:51:22', '2021-12-07 09:51:22'),
(18, 'yggg', 'Vvvb', 'yhg', '88.0', '1', 'workout_plans_cover_images/scaled_image_picker5675427277055786864.png', NULL, '1', '4', '1', 'fvvv', '1.0', NULL, 0, '2021-12-07 10:43:15', '2021-12-07 10:43:15'),
(19, 'ygvv', 'Gvbb', 'yhb', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker7884944105230094231.png', NULL, '1', '4', '1', 'gvbb', '1.0', NULL, 0, '2021-12-07 11:05:04', '2021-12-07 11:05:04'),
(20, 'ggf', 'Dgh', 'ghg', '77.0', '1', 'workout_plans_cover_images/scaled_image_picker4146874139667340599.png', NULL, '1', '4', '1', 'vvg', '1.0', NULL, 0, '2021-12-07 11:38:44', '2021-12-07 11:38:44'),
(21, 'yggh', 'Hbbb', 'uhh', '77.0', '1', 'workout_plans_cover_images/scaled_image_picker2583650928931628013.png', NULL, '1', '4', '1', 'yfgb', '1.0', NULL, 0, '2021-12-07 11:44:42', '2021-12-07 11:44:42'),
(22, 'yghh', 'Gcvv', 'ygh', '55.0', '1', 'workout_plans_cover_images/scaled_image_picker7482010884780856873.png', NULL, '1', '4', '1', 'ufvh', '1.0', NULL, 0, '2021-12-07 12:36:02', '2021-12-07 12:36:02'),
(23, 'uvhhh', 'Gvbb', 'tfgg', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker6839689264713483514.png', NULL, '1', '4', '1', 'hfhh', '1.0', NULL, 0, '2021-12-07 12:50:59', '2021-12-07 12:50:59'),
(24, 'ifg', 'Xbvb', 'fhd', '56.0', '1', 'workout_plans_cover_images/scaled_image_picker6869935038518453295.png', NULL, '1', '4', '1', 'dhcg', '1.0', NULL, 0, '2021-12-07 13:09:31', '2021-12-07 13:09:31'),
(25, 'yvuh', 'Gvbb', 'ggg', '555.0', '1', 'workout_plans_cover_images/scaled_image_picker194099626063677971.png', NULL, '1', '4', '1', 'gvhb', '1.0', NULL, 0, '2021-12-07 13:46:44', '2021-12-07 13:46:44'),
(26, 'ygb', 'Bhhb', 'gfg', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker5889771304499318705.png', NULL, '1', '4', '1', 'gggb', '1.0', NULL, 0, '2021-12-07 13:49:26', '2021-12-07 13:49:26'),
(27, 'ughh', 'Hbhh', 'ggg', '6.0', '1', 'workout_plans_cover_images/scaled_image_picker6150894098889304619.png', NULL, '1', '4', '1', 'hvhh', '1.0', NULL, 0, '2021-12-07 13:58:22', '2021-12-07 13:58:22'),
(28, 'tfhh', 'Vhbb', 'yvg', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker6745255786600589664.png', NULL, '1', '4', '1', 'vhbv', '1.0', NULL, 0, '2021-12-07 14:24:46', '2021-12-07 14:24:46'),
(29, 'Fat Loss DB Workout', 'Muscle building', 'none', '5000.0', '1', 'workout_plans_cover_images/scaled_image_picker6518333209964562565.jpg', NULL, '1', '4', '5', 'Shoulder', '2', 'tfgh', 0, '2021-12-10 07:00:22', '2021-12-10 10:53:26'),
(30, 'the', 'Cm', 'thi', '66.0', '1', 'workout_plans_cover_images/scaled_image_picker4881795638205186008.jpg', NULL, '1', '4', '1', 'Feb', '2', NULL, 0, '2021-12-10 11:09:17', '2021-12-10 11:09:28'),
(31, 'Weight gain', 'bla blaa blaaa', 'get do this', '2000.0', '32', 'workout_plans_cover_images/scaled_image_picker5106039698473290427.jpg', NULL, '3', '4', '1', 'Biceps', '2', NULL, 0, '2021-12-22 07:38:42', '2021-12-22 07:39:45'),
(32, 'vg', 'vvbnn', 'vv', '8.0', '32', 'workout_plans_cover_images/scaled_image_picker5319580468607670378.jpg', NULL, '2', '4', '1', 'vg', '1.0', NULL, 0, '2021-12-22 07:40:51', '2021-12-22 07:40:51'),
(34, 'yg', 'yg', 'gf', '99.0', '32', 'workout_plans_cover_images/scaled_image_picker878217794273404217.jpg', NULL, '3', '4', '1', 'fv', '1.0', NULL, 0, '2021-12-22 11:39:22', '2021-12-22 11:39:22'),
(35, 'w', 'x', 'dd', '85.0', '32', 'workout_plans_cover_images/scaled_image_picker1422107481294315720.jpg', NULL, '1', '4', '1', 'd', '2', NULL, 0, '2021-12-22 12:41:57', '2021-12-22 12:59:47'),
(36, 'jsk', 'sbns', 'e', '7997.0', '32', 'workout_plans_cover_images/scaled_image_picker1369828833075062615.jpg', NULL, '1', '4', '1', 'hdj', '1.0', NULL, 0, '2021-12-22 13:46:18', '2021-12-22 13:46:18'),
(37, 'g', 'ff', 'dd', '85.0', '32', 'workout_plans_cover_images/scaled_image_picker4738081381992651457.jpg', NULL, '1', '4', '1', 'cf', '1.0', NULL, 0, '2021-12-23 05:43:50', '2021-12-23 05:43:50'),
(38, 'gg', 'g', 'cc', '8.0', '32', 'workout_plans_cover_images/scaled_image_picker4299336925102107059.jpg', NULL, '2', '4', '1', 'gg', '1.0', NULL, 0, '2021-12-23 05:52:09', '2021-12-23 05:52:09'),
(39, 'vf', 'cc', 'cf', '55.0', '32', 'workout_plans_cover_images/scaled_image_picker7656043439907110921.jpg', NULL, '1', '4', '5', 'c', '1.0', NULL, 0, '2021-12-23 06:03:54', '2021-12-23 06:03:54'),
(40, 'f', 'cc', 'dd', '8.0', '32', 'workout_plans_cover_images/scaled_image_picker5562135692645228700.jpg', NULL, '1', '4', '1', 'vg', '1.0', NULL, 0, '2021-12-23 06:56:19', '2021-12-23 06:56:19'),
(41, 'f', 'dd', 'dd', '85.0', '32', 'workout_plans_cover_images/scaled_image_picker4820933656768719083.jpg', NULL, '1', '4', '1', 'd', '1.0', NULL, 0, '2021-12-23 07:06:45', '2021-12-23 07:06:45'),
(43, 'Biceps', 'gain your biceps', 'let\'s do this Marine !', '200.0', '32', 'workout_plans_cover_images/scaled_image_picker7313000690633535598.jpg', NULL, '1', '4', '1', 'biceps', '2', NULL, 1, '2021-12-23 12:36:00', '2021-12-23 12:58:15'),
(44, 'fgh', 'vv', 'gv', '58.0', '40', 'workout_plans_cover_images/scaled_image_picker2005150327282677704.jpg', NULL, '1', '4', '1', 'gb', '1.0', NULL, 0, '2022-01-05 09:03:05', '2022-01-05 09:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plans_calories`
--

CREATE TABLE `workout_plans_calories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lower_weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_candidate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_plans_calories`
--

INSERT INTO `workout_plans_calories` (`id`, `lower_weight`, `upper_weight`, `calories`, `base_candidate`, `created_at`, `updated_at`) VALUES
(1, '38', '44', '-24', '0', '2021-07-17 03:19:13', '2021-07-17 03:19:13'),
(2, '45', '54', '-18', '0', '2021-07-17 03:19:34', '2021-07-17 03:19:34'),
(3, '55', '64', '-12', '0', '2021-07-17 03:19:49', '2021-07-17 03:19:49'),
(4, '65', '71', '-7', '0', '2021-07-17 03:20:10', '2021-07-17 03:20:10'),
(5, '72', '80', '0', '1', '2021-07-17 03:20:34', '2021-07-17 03:20:34'),
(6, '81', '88', '+7', '0', '2021-07-17 03:20:54', '2021-07-17 03:20:54'),
(7, '89', '99', '+14', '0', '2021-07-17 03:21:13', '2021-07-17 03:21:13'),
(8, '100', '110', '+20', '0', '2021-07-17 03:21:41', '2021-07-17 03:21:41'),
(9, '111', '122', '+24', '0', '2021-07-17 03:21:59', '2021-07-17 03:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plan_details`
--

CREATE TABLE `workout_plan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `week_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_plan_details`
--

INSERT INTO `workout_plan_details` (`id`, `plan_id`, `day_title`, `min_calories`, `max_calories`, `day_number`, `week_number`, `created_at`, `updated_at`) VALUES
(4, '2', 'shoulders', '500', '600', '1', '1', '2021-10-12 19:10:07', '2021-10-12 19:10:07'),
(5, '2', 'shoulders', '500', '600', '1', '1', '2021-10-12 19:12:04', '2021-10-12 19:12:04'),
(6, '2', 'shoulders', '500', '600', '1', '1', '2021-10-12 19:12:40', '2021-10-12 19:12:40'),
(7, '2', 'shoulders', '500', '600', '1', '1', '2021-10-12 19:17:58', '2021-10-12 19:17:58'),
(8, '2', 'shoulders', '500', '600', '1', '1', '2021-10-12 19:23:07', '2021-10-12 19:23:07'),
(9, '3', 'shoulder', '300', '500', '1', '1', '2021-10-25 18:12:32', '2021-10-25 18:12:32'),
(10, '5', 'Arms', '200', '300', '1', '1', '2021-11-09 17:39:06', '2021-11-09 17:39:06'),
(11, '6', 'amrs', '200', '300', '1', '1', '2021-11-09 17:43:47', '2021-11-09 17:43:47'),
(12, '7', 'compound complex', '300', '600', '1', '1', '2021-11-09 23:23:04', '2021-11-09 23:23:04'),
(13, '7', 'compound complex', '300', '600', '1', '1', '2021-11-09 23:24:24', '2021-11-09 23:24:24'),
(14, '7', 'active recovery', '200', '350', '2', '1', '2021-11-09 23:26:20', '2021-11-09 23:26:20'),
(15, '7', 'full body strength training', '350', '650', '3', '1', '2021-11-09 23:26:59', '2021-11-09 23:26:59'),
(16, '7', 'boxing', '600', '1000', '4', '1', '2021-11-09 23:27:21', '2021-11-09 23:27:21'),
(17, '7', 'hiit workout', '400', '600', '5', '1', '2021-11-09 23:27:45', '2021-11-09 23:27:45'),
(18, '15', 'fgg', '555', '900', '1', '1', '2021-12-07 09:35:02', '2021-12-07 09:35:02'),
(19, '17', 'yfgh', '300', '900', '1', '1', '2021-12-07 09:51:45', '2021-12-07 09:51:45'),
(20, '18', 'ygg', '66', '99', '1', '1', '2021-12-07 10:43:30', '2021-12-07 10:43:30'),
(21, '19', 'tvvv', '55', '66', '1', '1', '2021-12-07 11:05:17', '2021-12-07 11:05:17'),
(22, '19', 'tvvv', '55', '66', '1', '1', '2021-12-07 11:05:29', '2021-12-07 11:05:29'),
(23, '20', 'dgh', '66', '99', '1', '1', '2021-12-07 11:39:05', '2021-12-07 11:39:05'),
(24, '21', 'yggg', '66', '99', '1', '1', '2021-12-07 11:44:55', '2021-12-07 11:44:55'),
(25, '21', 'tgg', '6', '9', '2', '1', '2021-12-07 11:46:47', '2021-12-07 11:46:47'),
(26, '21', 'yhhh', '66', '669', '3', '1', '2021-12-07 11:47:36', '2021-12-07 11:47:36'),
(27, '22', 'hvh', '66', '99', '1', '1', '2021-12-07 12:36:13', '2021-12-07 12:36:13'),
(28, '23', 'yfug', '66', '99', '1', '1', '2021-12-07 12:51:12', '2021-12-07 12:51:12'),
(29, '24', 'gdhh', '66', '99', '1', '1', '2021-12-07 13:09:46', '2021-12-07 13:09:46'),
(30, '25', 'ygg', '66', '99', '1', '1', '2021-12-07 13:46:57', '2021-12-07 13:46:57'),
(31, '25', 'ygg', '66', '99', '1', '1', '2021-12-07 13:47:28', '2021-12-07 13:47:28'),
(32, '26', 'tfgg', '66', '69', '1', '1', '2021-12-07 13:49:49', '2021-12-07 13:49:49'),
(33, '27', 'ygg', '66', '99', '1', '1', '2021-12-07 13:58:39', '2021-12-07 13:58:39'),
(34, '28', 'yvh', '66', '99', '1', '1', '2021-12-07 14:24:57', '2021-12-07 14:24:57'),
(35, '29', 'Shoulders & Arms', '300', '400', '1', '1', '2021-12-10 07:01:05', '2021-12-10 07:01:05'),
(36, '29', 'Cardio & Abs', '550', '650', '2', '1', '2021-12-10 07:08:04', '2021-12-10 07:08:04'),
(37, '29', 'Legs', '430', '510', '3', '1', '2021-12-10 07:10:50', '2021-12-10 07:10:50'),
(38, '29', 'Chest & Back', '430', '500', '4', '1', '2021-12-10 07:13:06', '2021-12-10 07:13:06'),
(39, '29', 'Cardio & Abs', '450', '590', '5', '1', '2021-12-10 07:14:36', '2021-12-10 07:14:36'),
(40, '31', 'biseps', '300', '500', '1', '1', '2021-12-22 07:39:03', '2021-12-22 07:39:03'),
(45, '34', 'shoulder', '69', '55', '1', '1', '2021-12-22 11:39:44', '2021-12-22 11:39:44'),
(46, '34', 'shoulder', '69', '55', '1', '1', '2021-12-22 11:44:57', '2021-12-22 11:44:57'),
(47, '34', 'shoulder', '69', '55', '1', '1', '2021-12-22 11:45:04', '2021-12-22 11:45:04'),
(48, '34', 'shoulder', '69', '55', '1', '1', '2021-12-22 11:56:00', '2021-12-22 11:56:00'),
(49, '34', 'shoulder', '69', '55', '1', '1', '2021-12-22 12:36:34', '2021-12-22 12:36:34'),
(50, '35', 'c', '5', '88', '1', '1', '2021-12-22 12:42:33', '2021-12-22 12:42:33'),
(51, '37', 'se', '55', '98', '1', '1', '2021-12-23 05:44:02', '2021-12-23 05:44:02'),
(52, '38', 'dd', '55', '99', '1', '1', '2021-12-23 05:52:21', '2021-12-23 05:52:21'),
(53, '39', 'ff', '66', '9', '1', '2', '2021-12-23 06:04:13', '2021-12-23 06:04:13'),
(54, '40', 'rf', '55', '9', '1', '1', '2021-12-23 06:56:29', '2021-12-23 06:56:29'),
(55, '41', 'yy', '6', '65', '1', '1', '2021-12-23 07:06:56', '2021-12-23 07:06:56'),
(61, '43', 'Biseps', '300', '500', '1', '1', '2021-12-23 12:36:20', '2021-12-23 12:36:20'),
(62, '44', 'b', '3', '36', '1', '1', '2022-01-05 09:03:16', '2022-01-05 09:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plan_exercise`
--

CREATE TABLE `workout_plan_exercise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_plan_exercise`
--

INSERT INTO `workout_plan_exercise` (`id`, `game_id`, `name`, `reps`, `duration`, `video_url`, `description`, `created_at`, `updated_at`) VALUES
(3, '4', 'push ups', '2', '15', 'Trainers', 'do push ups', '2021-10-12 19:11:37', '2021-10-12 19:11:37'),
(4, '6', 'pushups', '10', '0', NULL, 'go up and doe', '2021-10-12 19:18:49', '2021-10-12 19:18:49'),
(5, '6', 'pull ups', '12', '0', NULL, 'go downnn and uppp', '2021-10-12 19:20:55', '2021-10-12 19:20:55'),
(6, '7', 'push ups', '6', '0', NULL, 'yo', '2021-10-25 18:12:55', '2021-10-25 18:12:55'),
(7, '8', 'ez bar Biceps curl/Triceps overhead', '12', '6', NULL, 'Perform biceps curl with EZ bar and do Triceps overhead with 10kgs dumbbell', '2021-11-09 17:41:18', '2021-11-09 17:41:18'),
(8, '9', 'Ez bar biceps curl/Overhead extension', '12', '10', 'Trainers', 'Perform biceps curl by using wider grip on ez bar and do overhead e', '2021-11-09 17:46:00', '2021-11-09 17:46:00'),
(9, '12', 'tgg', '5', '0', NULL, 'ggg', '2021-12-07 11:06:05', '2021-12-07 11:06:05'),
(10, '14', 'ugbb', '6', '0', NULL, 'yfgb', '2021-12-07 11:46:29', '2021-12-07 11:46:29'),
(11, '15', 'ygh', '6', '8', NULL, 'yhb', '2021-12-07 11:47:13', '2021-12-07 11:47:13'),
(12, '19', 'ufg', '5', '0', NULL, 'vbbb', '2021-12-07 13:10:12', '2021-12-07 13:10:12'),
(13, '22', 'yghhb', '66', '0', NULL, 'tygh', '2021-12-07 13:59:15', '2021-12-07 13:59:15'),
(14, '24', 'shoulder press', '10', '0', NULL, 'shoulder press', '2021-12-10 07:02:19', '2021-12-10 07:02:19'),
(15, '24', 'burpees', '10', '0', NULL, 'burpees', '2021-12-10 07:02:45', '2021-12-10 07:02:45'),
(16, '24', 'break', '1', '0', NULL, 'take break for 5sec', '2021-12-10 07:03:29', '2021-12-10 07:03:29'),
(17, '25', 'front raises', '10', '0', NULL, 'front raises', '2021-12-10 07:04:36', '2021-12-10 07:04:36'),
(18, '25', 'lateral raises', '10', '0', NULL, 'lateral raises', '2021-12-10 07:05:03', '2021-12-10 07:05:03'),
(19, '25', 'posterior raises', '10', '0', NULL, 'posterior raises', '2021-12-10 07:05:31', '2021-12-10 07:05:31'),
(20, '25', 'break', '1', '0', NULL, 'take break for 30sec', '2021-12-10 07:06:00', '2021-12-10 07:06:00'),
(21, '26', 'skips', '50', '0', NULL, 'skips', '2021-12-10 07:06:40', '2021-12-10 07:06:40'),
(22, '26', 'mountain climber', '50', '0', NULL, 'climb mountain', '2021-12-10 07:07:16', '2021-12-10 07:07:16'),
(23, '27', 'ski mans/planks', '30', '0', NULL, 'planks', '2021-12-10 07:09:15', '2021-12-10 07:09:15'),
(24, '27', 'pock jumps', '30', '0', NULL, 'pock jumps', '2021-12-10 07:09:37', '2021-12-10 07:09:37'),
(25, '28', 'double crunches', '20', '0', NULL, 'double crunches', '2021-12-10 07:10:16', '2021-12-10 07:10:16'),
(26, '29', 'squats 12kg', '20', '0', NULL, '12kg squats', '2021-12-10 07:11:40', '2021-12-10 07:11:40'),
(27, '29', 'squat hold', '30', '0', NULL, 'hold squat hold', '2021-12-10 07:12:17', '2021-12-10 07:12:17'),
(28, '30', 'decline chest press 16kg', '10', '0', NULL, 'decline chest press 15kg', '2021-12-10 07:13:59', '2021-12-10 07:13:59'),
(29, '31', 'situps', '10', '0', NULL, 'situps', '2021-12-10 07:15:31', '2021-12-10 07:15:31'),
(34, '38', 'tt', '5', '89', NULL, 'gg', '2021-12-22 11:44:30', '2021-12-22 11:44:30'),
(35, '39', 'rf', '8', '88', NULL, 'v', '2021-12-22 11:46:39', '2021-12-22 11:46:39'),
(36, '40', 'gf', '5', '55', NULL, 'ff', '2021-12-22 11:56:25', '2021-12-22 11:56:25'),
(37, '41', 'push up', '7', '5', NULL, 'take it easy', '2021-12-22 12:37:09', '2021-12-22 12:37:09'),
(38, '42', 'push up', '8', '88', NULL, 'lets do this', '2021-12-22 12:43:16', '2021-12-22 12:43:16'),
(41, '43', 'cf', '8', '8', NULL, 'cc', '2021-12-23 05:45:39', '2021-12-23 05:45:39'),
(42, '44', 'tt', '88', '08', NULL, 'v', '2021-12-23 05:53:18', '2021-12-23 05:53:18'),
(43, '44', 'ff', '8', '88', NULL, 'cc', '2021-12-23 05:53:31', '2021-12-23 05:53:31'),
(44, '45', 'rf', '55', '88', NULL, 'ff', '2021-12-23 06:05:00', '2021-12-23 06:05:00'),
(52, '48', 'gf', '88', '88', NULL, 'ff', '2021-12-23 07:19:22', '2021-12-23 07:19:22'),
(57, '54', 'Dumping', '12', '10', NULL, 'No pain No gain', '2021-12-23 12:37:19', '2021-12-23 12:37:19'),
(58, '55', 'ghw', '69', '69', NULL, 'ghh', '2022-01-05 09:03:40', '2022-01-05 09:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plan_game`
--

CREATE TABLE `workout_plan_game` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workout_plan_details_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sets` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rounds` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_plan_game`
--

INSERT INTO `workout_plan_game` (`id`, `workout_plan_details_id`, `name`, `sets`, `rounds`, `created_at`, `updated_at`) VALUES
(4, '4', 'super set', '2', 'null', '2021-10-12 19:10:38', '2021-10-12 19:10:38'),
(5, '6', 'shoulder press', '4', 'null', '2021-10-12 19:12:55', '2021-10-12 19:12:55'),
(6, '7', 'circuit 1', '3', 'null', '2021-10-12 19:18:26', '2021-10-12 19:18:26'),
(7, '9', 'super set', '6', 'null', '2021-10-25 18:12:40', '2021-10-25 18:12:40'),
(8, '10', 'Super Set', '4', 'null', '2021-11-09 17:39:19', '2021-11-09 17:39:19'),
(9, '11', 'super set', '4', 'null', '2021-11-09 17:43:56', '2021-11-09 17:43:56'),
(10, '12', 'giant set', '8', 'null', '2021-11-09 23:24:14', '2021-11-09 23:24:14'),
(11, '18', 'yghb', '7', 'null', '2021-12-07 09:37:10', '2021-12-07 09:37:10'),
(12, '22', 'tgg', '3', 'null', '2021-12-07 11:05:44', '2021-12-07 11:05:44'),
(13, '23', 'dgff', '3', 'null', '2021-12-07 11:39:50', '2021-12-07 11:39:50'),
(14, '24', 'hgh', '6', 'null', '2021-12-07 11:45:05', '2021-12-07 11:45:05'),
(15, '25', 'ygg', '6', 'null', '2021-12-07 11:46:57', '2021-12-07 11:46:57'),
(16, '26', 'yguh', '66', 'null', '2021-12-07 11:47:48', '2021-12-07 11:47:48'),
(17, '27', 'hcgh', '6', 'null', '2021-12-07 12:36:23', '2021-12-07 12:36:23'),
(18, '28', 'tff', '5', 'null', '2021-12-07 12:51:22', '2021-12-07 12:51:22'),
(19, '29', 'tgf', '3', 'null', '2021-12-07 13:09:54', '2021-12-07 13:09:54'),
(22, '33', 'ygv', '6', 'null', '2021-12-07 13:58:52', '2021-12-07 13:58:52'),
(23, '34', 'ugh', '6', 'null', '2021-12-07 14:25:05', '2021-12-07 14:25:05'),
(24, '35', 'shoulder & arms', '3', 'null', '2021-12-10 07:01:51', '2021-12-10 07:01:51'),
(25, '35', 'super set', '3', 'null', '2021-12-10 07:04:14', '2021-12-10 07:04:14'),
(26, '35', 'super set', '3', 'null', '2021-12-10 07:06:22', '2021-12-10 07:06:22'),
(27, '36', 'Hiit', '3', 'null', '2021-12-10 07:08:18', '2021-12-10 07:08:18'),
(28, '36', 'Abs', '3', 'null', '2021-12-10 07:08:37', '2021-12-10 07:08:37'),
(29, '37', 'Repeat', '4', 'null', '2021-12-10 07:11:04', '2021-12-10 07:11:04'),
(30, '38', 'Repeat', '4', 'null', '2021-12-10 07:13:20', '2021-12-10 07:13:20'),
(31, '39', 'Random', '1', 'null', '2021-12-10 07:14:59', '2021-12-10 07:14:59'),
(32, '40', 'set w', '12', 'null', '2021-12-22 07:39:28', '2021-12-22 07:39:28'),
(38, '45', 'gg', '25', 'null', '2021-12-22 11:39:58', '2021-12-22 11:39:58'),
(39, '47', 'b', '6', 'null', '2021-12-22 11:45:17', '2021-12-22 11:45:17'),
(40, '48', 'cf', '5', 'null', '2021-12-22 11:56:08', '2021-12-22 11:56:08'),
(41, '49', 'ik', '56', 'null', '2021-12-22 12:36:43', '2021-12-22 12:36:43'),
(42, '50', 'c', '55', 'null', '2021-12-22 12:42:42', '2021-12-22 12:42:42'),
(43, '51', 'vf', '8', 'null', '2021-12-23 05:44:16', '2021-12-23 05:44:16'),
(44, '52', 'v', '8', 'null', '2021-12-23 05:52:33', '2021-12-23 05:52:33'),
(45, '53', 'gg', '9', 'null', '2021-12-23 06:04:23', '2021-12-23 06:04:23'),
(46, '53', 'f', '88', 'null', '2021-12-23 06:04:34', '2021-12-23 06:04:34'),
(47, '54', 'ff', '88', 'null', '2021-12-23 06:56:39', '2021-12-23 06:56:39'),
(48, '55', 'f', '66', 'null', '2021-12-23 07:07:07', '2021-12-23 07:07:07'),
(54, '61', 'Super set', '3', 'null', '2021-12-23 12:36:39', '2021-12-23 12:36:39'),
(55, '62', 'vb', '69', 'null', '2022-01-05 09:03:23', '2022-01-05 09:03:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_categories`
--
ALTER TABLE `app_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_urls`
--
ALTER TABLE `base_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_diet_plan`
--
ALTER TABLE `custom_diet_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_diet_plan_day`
--
ALTER TABLE `custom_diet_plan_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_diet_plan_meal`
--
ALTER TABLE `custom_diet_plan_meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_diet_plan_meal_dish`
--
ALTER TABLE `custom_diet_plan_meal_dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_library`
--
ALTER TABLE `food_library`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plan_ratings`
--
ALTER TABLE `plan_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_requests`
--
ALTER TABLE `plan_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_reviews`
--
ALTER TABLE `plan_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_questions_answers`
--
ALTER TABLE `request_questions_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_questions`
--
ALTER TABLE `trainer_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_monthly_history`
--
ALTER TABLE `user_monthly_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ratings`
--
ALTER TABLE `user_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subscriptions_history`
--
ALTER TABLE `user_subscriptions_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_trainers_subscriptions`
--
ALTER TABLE `user_trainers_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_workout_plans`
--
ALTER TABLE `user_workout_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_workout_plan_details`
--
ALTER TABLE `user_workout_plan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_workout_plan_exercises`
--
ALTER TABLE `user_workout_plan_exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_workout_plan_games`
--
ALTER TABLE `user_workout_plan_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_library`
--
ALTER TABLE `video_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_plan`
--
ALTER TABLE `workout_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_plans_calories`
--
ALTER TABLE `workout_plans_calories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_plan_details`
--
ALTER TABLE `workout_plan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_plan_exercise`
--
ALTER TABLE `workout_plan_exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_plan_game`
--
ALTER TABLE `workout_plan_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_categories`
--
ALTER TABLE `app_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `base_urls`
--
ALTER TABLE `base_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `custom_diet_plan`
--
ALTER TABLE `custom_diet_plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `custom_diet_plan_day`
--
ALTER TABLE `custom_diet_plan_day`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `custom_diet_plan_meal`
--
ALTER TABLE `custom_diet_plan_meal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `custom_diet_plan_meal_dish`
--
ALTER TABLE `custom_diet_plan_meal_dish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_library`
--
ALTER TABLE `food_library`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `plan_ratings`
--
ALTER TABLE `plan_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `plan_requests`
--
ALTER TABLE `plan_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `plan_reviews`
--
ALTER TABLE `plan_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request_questions_answers`
--
ALTER TABLE `request_questions_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer_questions`
--
ALTER TABLE `trainer_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_monthly_history`
--
ALTER TABLE `user_monthly_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_ratings`
--
ALTER TABLE `user_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_subscriptions_history`
--
ALTER TABLE `user_subscriptions_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_trainers_subscriptions`
--
ALTER TABLE `user_trainers_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_workout_plans`
--
ALTER TABLE `user_workout_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_workout_plan_details`
--
ALTER TABLE `user_workout_plan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_workout_plan_exercises`
--
ALTER TABLE `user_workout_plan_exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_workout_plan_games`
--
ALTER TABLE `user_workout_plan_games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video_library`
--
ALTER TABLE `video_library`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `workout_plan`
--
ALTER TABLE `workout_plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `workout_plans_calories`
--
ALTER TABLE `workout_plans_calories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `workout_plan_details`
--
ALTER TABLE `workout_plan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `workout_plan_exercise`
--
ALTER TABLE `workout_plan_exercise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `workout_plan_game`
--
ALTER TABLE `workout_plan_game`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
