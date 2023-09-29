-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 05:06 AM
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
-- Database: `medflight`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `forbidden` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'shahrukh', 'Mehmood', 'admin@gmail.com', '$2y$10$ase1lOsEePxm1MXjkmLMXOyhhgFqTrfbWXI8tx5uAcA7N1kd5.OAC', 'LtA56RpxGiH1sw0Grw8UoTX4KEJQnLrVqC9RExDfN9usJkZHW3CjHfTTp9RO', 1, 0, 'en', NULL, NULL, '2023-09-28 10:49:41', '2023-09-28 10:49:41'),
(2, 'shahrukh', 'mailk', 'shahrukh862001@gmail.com', '$2y$10$xJnKXgyVwz4oP7nJhUmd1u8fPtQZ2JorezuAbJUuNJPnQEQIy2wSm', NULL, 1, 0, 'en', NULL, '2023-09-22 23:11:14', '2023-09-22 23:11:14', NULL),
(3, 'shahrukh', 'mailk', 'admin21@gmail.com', '$2y$10$i3FsPmBiyyLCieL.vF6YluS3UuEOdcGJe2ZdDia51f7/UbS1yMCeu', NULL, 1, 0, 'en', NULL, '2023-09-26 10:42:36', '2023-09-26 10:42:43', NULL),
(4, 'I', 'Me', 'adminnn@gmail.com', '$2y$10$iM0WHZYS0XFfR5qPzsy1sO9MBRt4UcYQoKQniO5Z.VI6hDcsykcp.', 'trJ93BTIHSMMYVGNdCg0eKxgd4IXe168AVAS9lc3ljmpXfg1RzFzcSnkYbx9', 1, 0, 'en', NULL, '2023-09-28 10:50:24', '2023-09-28 10:50:59', '2023-09-28 10:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `case1s`
--

CREATE TABLE `case1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coordinator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rn_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rn_fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case1s`
--

INSERT INTO `case1s` (`id`, `client`, `status`, `dob`, `coordinator`, `phone`, `email`, `fax`, `rn`, `rn_email`, `rn_fax`, `created_at`, `updated_at`) VALUES
(4, 'asd', 'final', '2023-09-07', 'asd', '5465', 'asdasdasd@gmail.com', 'sad', 'asd', 'asd@gmail.com', 'sd', '2023-09-27 00:45:47', '2023-09-27 23:11:45'),
(5, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:23', NULL),
(6, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:26', NULL),
(7, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:28', NULL),
(8, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:29', NULL),
(9, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:32', NULL),
(10, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:33', NULL),
(11, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:34', NULL),
(12, 'aaaa', NULL, '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:35', NULL),
(13, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:47', NULL),
(14, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:49', NULL),
(15, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:50', NULL),
(16, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:51', NULL),
(17, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:53', NULL),
(18, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:55', NULL),
(19, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:56', NULL),
(20, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:12:58', NULL),
(21, 'aaaa', 'active', '2023-09-01', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', 'aaaa', 'aaaa@gmail.com', 'aaaa', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case2s`
--

CREATE TABLE `case2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case1_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coordinator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_rn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case2s`
--

INSERT INTO `case2s` (`id`, `case1_id`, `client_name`, `status`, `dob`, `coordinator`, `flight_rn`, `created_at`, `updated_at`) VALUES
(4, '4', 'asd', 'final', '2023-09-20', 'sad', 'asd', '2023-09-27 00:45:48', '2023-09-27 23:11:45'),
(5, '5', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:23', NULL),
(6, '6', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:26', NULL),
(7, '7', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:28', NULL),
(8, '8', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:30', NULL),
(9, '9', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:32', NULL),
(10, '10', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:33', NULL),
(11, '11', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:34', NULL),
(12, '12', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:36', NULL),
(13, '13', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:48', NULL),
(14, '14', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:49', NULL),
(15, '15', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:50', NULL),
(16, '16', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:51', NULL),
(17, '17', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:53', NULL),
(18, '18', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:55', NULL),
(19, '19', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:56', NULL),
(20, '20', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:12:58', NULL),
(21, '21', 'asasasa', NULL, '2023-09-14', 'sasasa', 'asasasa', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_document_statuses`
--

CREATE TABLE `client_document_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `fitness_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medfit_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_order_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `constent_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_document_statuses`
--

INSERT INTO `client_document_statuses` (`id`, `case_1_id`, `case_2_id`, `fitness_check`, `medfit_check`, `dc_order_check`, `constent_check`, `identification_check`, `other`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 'true', 'true', 'true', 'true', 'true', 'sa', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:26', NULL),
(7, 7, 7, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:28', NULL),
(8, 8, 8, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:36', NULL),
(13, 13, 13, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:49', NULL),
(15, 15, 15, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:50', NULL),
(16, 16, 16, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:53', NULL),
(18, 18, 18, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:12:58', NULL),
(21, 21, 21, 'true', 'true', 'true', 'true', 'true', 'sdsd', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_nurse_to_nurses`
--

CREATE TABLE `client_nurse_to_nurses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `rn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fio2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allergies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nuero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analgesia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sedation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_nurse_to_nurses`
--

INSERT INTO `client_nurse_to_nurses` (`id`, `case_1_id`, `case_2_id`, `rn_name`, `date_time`, `temp`, `hr`, `bp`, `rr`, `fio2`, `spo2`, `allergies`, `nuero`, `cv`, `pulm`, `gl`, `gu`, `skin`, `analgesia`, `sedation`, `iv`, `notes`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 'asd', 'asd', 'asd', '0.2', '0.3', '0.3', '0.3', '0.2', 'asdasd', 'sda', 'asdsad', 'asdasd', 'asdsad', 'asdasd', 'asdasd', 'asdsad', 'asdasd', 'asdsad', 'asdasd', '2023-09-27 23:16:27', '2023-09-27 23:16:27'),
(5, 5, 5, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:36', NULL),
(13, 13, 13, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:49', NULL),
(15, 15, 15, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:50', NULL),
(16, 16, 16, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:53', NULL),
(18, 18, 18, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:12:58', NULL),
(21, 21, 21, 'sds', 'sdsd', 'sd', '0.2', '0.4', '0.6', '0.6', '0.5', 'sds', 'sdsd', 'sds', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 'sdsds', 'sdsdsd', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commercial_airlines`
--

CREATE TABLE `commercial_airlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `passenger_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharging_md` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharging_facility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rehab_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commercial_airlines`
--

INSERT INTO `commercial_airlines` (`id`, `case_1_id`, `case_2_id`, `passenger_name`, `discharging_md`, `discharging_facility`, `rehab_unit`, `unit_phone`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'asdasd', 'asd', 'asd', 'asd', 'asd', '2023-09-26 10:49:42', NULL),
(4, 4, 4, 'asd', 'asd', 'asd', 'asd', 'asd', '2023-09-27 00:45:49', NULL),
(5, 5, 5, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:25', NULL),
(6, 6, 6, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:34', NULL),
(11, 11, 11, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:56', NULL),
(19, 19, 19, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sdsd', 'dsds', 'dsds', 'ddsd', 'dsds', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discharging_facilities`
--

CREATE TABLE `discharging_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `present_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attending_md` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharge_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discharging_facilities`
--

INSERT INTO `discharging_facilities` (`id`, `case_1_id`, `case_2_id`, `present_location`, `phone`, `address`, `city_state`, `room`, `zip`, `unit`, `unit_phone`, `attending_md`, `fax`, `admission_date`, `discharge_date`, `other`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 'asd', 'asd', 'sad', 'asd', 'sadasd', 'sa', 'asd', 'asd', 'asd', 'asd', '2023-09-13', '2023-09-13', 'sad', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:23', NULL),
(6, 6, 6, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:26', NULL),
(7, 7, 7, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:28', NULL),
(8, 8, 8, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:34', NULL),
(12, 12, 12, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:36', NULL),
(13, 13, 13, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:49', NULL),
(15, 15, 15, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:50', NULL),
(16, 16, 16, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:51', NULL),
(17, 17, 17, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:53', NULL),
(18, 18, 18, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:56', NULL),
(20, 20, 20, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:12:58', NULL),
(21, 21, 21, 'sasasa', '33', 'asdasd', 'asd', '12', 'xsxs', 'sdsd', 'sds', 'sdsd', 'sds', '2023-09-29', '2023-09-30', 'as', '2023-09-28 10:13:00', NULL);

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '488d5bea-48a1-4523-9263-2838d66158c4', 'database', 'default', '{\"uuid\":\"488d5bea-48a1-4523-9263-2838d66158c4\",\"displayName\":\"App\\\\Jobs\\\\EmailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EmailJob\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EmailJob\\\":12:{s:12:\\\"\\u0000*\\u0000emailType\\\";s:14:\\\"download_email\\\";s:14:\\\"\\u0000*\\u0000requestData\\\";a:14:{s:7:\\\"user_id\\\";i:17;s:5:\\\"email\\\";s:24:\\\"shahrukh862001@gmail.com\\\";s:12:\\\"display_name\\\";s:14:\\\"shahrukh malik\\\";s:17:\\\"sender_visitor_id\\\";N;s:9:\\\"file_link\\\";s:25:\\\"testing.com\\/sharelink\\/efg\\\";s:11:\\\"expiry_date\\\";s:11:\\\"15-Aug-2023\\\";s:10:\\\"file_count\\\";s:1:\\\"5\\\";s:4:\\\"note\\\";s:11:\\\"TestingNote\\\";s:12:\\\"file_details\\\";a:1:{i:0;a:3:{s:9:\\\"file_name\\\";s:9:\\\"file1.jpg\\\";s:9:\\\"file_size\\\";s:4:\\\"2048\\\";s:9:\\\"file_unit\\\";N;}}s:4:\\\"date\\\";s:0:\\\"\\\";s:4:\\\"time\\\";N;s:12:\\\"country_name\\\";s:8:\\\"PAKISTAN\\\";s:8:\\\"platform\\\";s:0:\\\"\\\";s:6:\\\"qrcode\\\";s:72:\\\"C:\\\\xampp\\\\htdocs\\\\backend-zitransfer\\\\src\\\\storage\\\\app\\/public\\\\1695100455.png\\\";}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\EmailJob has been attempted too many times or run too long. The job may have previously timed out. in C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:750\nStack trace:\n#0 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(504): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(418): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#2 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(329): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#6 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#12 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\symfony\\console\\Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\xampp\\htdocs\\backend-zitransfer\\src\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\xampp\\htdocs\\backend-zitransfer\\src\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2023-09-19 00:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `rn_outbound` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_rn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rn_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`id`, `case_1_id`, `case_2_id`, `rn_outbound`, `client_rn`, `rn_return`, `notes`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'asdasd', 'asdasd', 'asd', 'asd', '2023-09-26 10:49:41', NULL),
(4, 4, 4, 'asdsad', 'asdasd', 'asdasda', 'asdasd', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:49', NULL),
(15, 15, 15, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sdsdsd', 'sdsdsdsdsds', 'dsdsd', 'sdsdsd', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flying_angels`
--

CREATE TABLE `flying_angels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `re` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dear_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facesheet_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercial_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fitness_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `constent_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropiate_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_check` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `please_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flying_angels`
--

INSERT INTO `flying_angels` (`id`, `case_1_id`, `case_2_id`, `from`, `to`, `fax`, `pages`, `phone`, `date`, `re`, `dear_name`, `facesheet_check`, `commercial_check`, `fitness_check`, `constent_check`, `photo_check`, `appropiate_check`, `other`, `other_check`, `please_check`, `comment`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'asd', 'asd', 'asd', 'sadas', 'asd', '2023-08-31', 'sad', 'asdasdasd', 'true', 'true', 'true', 'true', 'true', 'true', 'sadsad', 'true', 'true', 'asdasd', '2023-09-26 10:49:42', NULL),
(4, 4, 4, 'asd', 'asd', 'asd', 'sadas', 'asd', '2023-09-29', 'sad', 'asdasdasd', 'true', 'true', 'true', 'true', 'true', 'true', 'sadsad', 'true', NULL, 'ad', '2023-09-27 00:45:49', '2023-09-27 23:11:45'),
(5, 5, 5, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:25', NULL),
(6, 6, 6, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:34', NULL),
(11, 11, 11, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:56', NULL),
(19, 19, 19, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'dsd', 'sdss', 'sdsd', 'sdsds', 'sds', '2023-09-06', 'sds', 'sdsd', 'true', 'true', 'true', 'true', 'true', 'true', 'asasa', 'true', 'true', 'sdsdsd', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flying_rules`
--

CREATE TABLE `flying_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `pre_diet_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_dvt_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_bowel_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_other_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_oxygen_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_foley_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iv_fluids` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iv_fluid_check` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solution_check` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_ml` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_ml_check` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_other_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_medication_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_sedation_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_analgesia_check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flying_rules`
--

INSERT INTO `flying_rules` (`id`, `case_1_id`, `case_2_id`, `pre_diet_check`, `pre_dvt_check`, `pre_bowel_check`, `pre_other_check`, `in_oxygen_check`, `in_foley_check`, `iv_fluids`, `iv_fluid_check`, `solution`, `solution_check`, `rate_ml`, `rate_ml_check`, `in_other_check`, `in_medication_check`, `in_hour`, `in_sedation_check`, `in_analgesia_check`, `in_provider`, `in_signature`, `in_date`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'true', 'true', 'true', 'true', 'true', 'true', 'asd', 'true', 'asd', 'true', 'asdasd', 'true', 'true', 'true', 'asd', 'true', 'true', 'asdasd', 'asdsad', '2023-09-20', '2023-09-26 10:49:42', NULL),
(4, 4, 4, 'true', 'true', 'true', 'true', 'true', 'true', 'asdasd', 'true', 'asd', 'true', 'asdasd', 'true', 'true', 'true', 'asd', 'true', 'true', 'asdasd', 'asdsad', '2023-09-07', '2023-09-27 00:45:49', NULL),
(5, 5, 5, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:25', NULL),
(6, 6, 6, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:34', NULL),
(11, 11, 11, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:56', NULL),
(19, 19, 19, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'true', 'true', 'true', 'true', 'true', 'true', 'sddsd', 'true', 'sdsdsd', 'true', 'sdsdsd', 'true', 'true', 'true', 'sdsd', 'true', 'true', 'sdsd', 'sdsds', '2023-09-20', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ground_details`
--

CREATE TABLE `ground_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `departure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ground_details`
--

INSERT INTO `ground_details` (`id`, `case_1_id`, `case_2_id`, `departure`, `arrival`, `notes`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'asdas', 'asdasd', 'JKJHLJ', '2023-09-26 10:49:41', NULL),
(4, 4, 4, 'asd', 'asd', 'asd', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sdsdsdsd', 'sdsdsd', 'sdsdsd', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intake_demographics`
--

CREATE TABLE `intake_demographics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_rep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_demographics`
--

INSERT INTO `intake_demographics` (`id`, `case_1_id`, `client_name`, `dob`, `age`, `diagnosis`, `height`, `weight`, `contact_number`, `secondary_contact`, `contact_number_2`, `relationship`, `email`, `other`, `address`, `client_rep`, `created_at`, `updated_at`) VALUES
(4, 4, 'hjgjhg', '2012-06-05', '11', 'asd', '5', '5', 'a475475\\575', '46449', '+968977', 'asd', 'asd@gmail.com', 'sd', 'asd', 'sad', '2023-09-27 00:45:47', NULL),
(5, 5, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:23', NULL),
(6, 6, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:26', NULL),
(7, 7, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:28', NULL),
(8, 8, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:30', NULL),
(9, 9, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:32', NULL),
(10, 10, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:33', NULL),
(11, 11, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:34', NULL),
(12, 12, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:35', NULL),
(13, 13, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:47', NULL),
(14, 14, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:49', NULL),
(15, 15, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:50', NULL),
(16, 16, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:51', NULL),
(17, 17, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:53', NULL),
(18, 18, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:55', NULL),
(19, 19, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:56', NULL),
(20, 20, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:12:58', NULL),
(21, 21, 'aaaa', '2023-09-02', '22', 'none', '6feet', '67', '0343 5190708', '3343434344', '34343443434', 'nnnn', 'aoun@gmail.com', 'as', 'asasa', 'asasa', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loading_details`
--

CREATE TABLE `loading_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `loading_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loading_details`
--

INSERT INTO `loading_details` (`id`, `case_1_id`, `case_2_id`, `loading_1`, `loading_2`, `loading_3`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'KLADJLKK', 'KLKFDA', 'kasd', '2023-09-26 10:49:42', NULL),
(4, 4, 4, 'asd', 'asd', 'asd', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sdsdsd', 'sdsdsdsd', 'sdsds', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1, '9bc6daeb-81b9-47b1-b69d-a8d53921c150', 'avatar', 'avatar', 'avatar.png', 'image/png', 'media', 'media', 23924, '[]', '[]', '{\"thumb_200\":true,\"thumb_75\":true,\"thumb_150\":true}', '[]', 1, '2021-01-20 04:16:39', '2021-01-20 04:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `medical_needs`
--

CREATE TABLE `medical_needs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `oxygen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spo2_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_of_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sit_up_tolerance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `econ_acceptable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_needed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_service_request` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oxygen_needed_during` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_needs`
--

INSERT INTO `medical_needs` (`id`, `case_1_id`, `case_2_id`, `oxygen`, `spo2_target`, `class_of_service`, `sit_up_tolerance`, `econ_acceptable`, `staff_needed`, `special_service_request`, `oxygen_needed_during`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 'asd', 'asd', 'asd', 'sad', 'asd', 'asd', 'asd', 'asd', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:26', NULL),
(7, 7, 7, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:28', NULL),
(8, 8, 8, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:34', NULL),
(12, 12, 12, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:36', NULL),
(13, 13, 13, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:49', NULL),
(15, 15, 15, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:50', NULL),
(16, 16, 16, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:53', NULL),
(18, 18, 18, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:12:58', NULL),
(21, 21, 21, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'asa', 'asas', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medical_treatments`
--

CREATE TABLE `medical_treatments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_treatments`
--

INSERT INTO `medical_treatments` (`id`, `case_1_id`, `case_2_id`, `name`, `text2`, `from`, `to`, `from1`, `to1`, `client_signature`, `client_date`, `guardian_signature`, `guardian_date`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asddas', '2023-09-12', 'asd', '2023-09-06', '2023-09-26 10:49:42', NULL),
(4, 4, 4, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asddas', '2023-09-19', 'asd', '2023-09-25', '2023-09-27 00:45:49', NULL),
(5, 5, 5, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:25', NULL),
(6, 6, 6, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:33', NULL),
(10, 10, 10, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:34', NULL),
(11, 11, 11, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:55', NULL),
(18, 18, 18, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:56', NULL),
(19, 19, 19, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sds', 'sdsd', 'sds', 'dsdsd', 'sdsd', 'sdsd', 'dsds', '2023-09-27', 'sdsd', '2023-10-06', '2023-09-28 10:13:00', NULL);

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
(10, '2020_12_23_190338_create_media_table', 1),
(11, '2020_12_23_190338_create_permission_tables', 1),
(12, '2020_12_23_190343_fill_default_admin_user_and_permissions', 1),
(13, '2021_01_19_201629_create_translations_table', 2),
(14, '2021_01_19_203646_fill_permissions_for_role', 3),
(15, '2021_01_19_204007_fill_permissions_for_permission', 4),
(16, '2021_01_19_205003_create_table_geo_vars', 5),
(17, '2021_01_19_205133_fill_permissions_for_geo-var', 5),
(23, '2014_10_12_000000_create_users_table', 6),
(24, '2014_10_12_100000_create_password_resets_table', 6),
(25, '2017_08_24_000000_create_activations_table', 6),
(26, '2017_08_24_000000_create_admin_activations_table', 6),
(27, '2017_08_24_000000_create_admin_password_resets_table', 6),
(28, '2017_08_24_000000_create_admin_users_table', 6),
(29, '2018_07_18_000000_create_wysiwyg_media_table', 6),
(30, '2019_08_19_000000_create_failed_jobs_table', 6),
(31, '2020_10_21_000000_add_last_login_at_timestamp_to_admin_users_table', 6),
(32, '2023_08_16_115211_create_user_google_details_table', 7),
(33, '2023_08_15_082200_create_file_receives_table', 8),
(34, '2023_08_15_075026_create_share_files_table', 9),
(35, '2023_08_15_074431_create_download_files_table', 10),
(36, '2023_08_15_061903_create_file_details_table', 11),
(37, '2023_08_15_060815_create_files_table', 12),
(42, '2023_08_23_150115_create_background_home_images_table', 14),
(45, '2023_08_25_043902_create_themes_table', 16),
(46, '2023_08_23_045703_create_advertisements_table', 17),
(47, '2023_09_14_041415_create_jobs_table', 18),
(48, '2023_09_25_145702_create_case1s_table', 19),
(50, '2023_09_25_151250_create_case2s_table', 21),
(53, '2023_09_25_150215_create_intake_demographics_table', 23),
(54, '2023_09_25_151109_create_third_party_payors_table', 24),
(55, '2023_09_25_151413_create_discharging_facilities_table', 25),
(56, '2023_09_25_152544_create_receiving_facilities_table', 26),
(58, '2023_09_25_152926_create_mediacal_needs_table', 27),
(59, '2023_09_25_152926_create_medical_needs_table', 28),
(60, '2023_09_25_153446_create_travel_infos_table', 29),
(61, '2023_09_25_171228_create_client_document_statuses_table', 30),
(62, '2023_09_26_004947_create_client_nurse_to_nurses_table', 31),
(63, '2023_09_26_005352_create_flight_details_table', 32),
(64, '2023_09_26_005630_create_ground_details_table', 33),
(65, '2023_09_26_005756_create_loading_details_table', 34),
(66, '2023_09_26_005855_create_travel_instructions_table', 35),
(67, '2023_09_26_005952_create_flying_angels_table', 36),
(68, '2023_09_26_010320_create_commercial_airlines_table', 37),
(69, '2023_09_26_010805_create_flying_rules_table', 38),
(70, '2023_09_26_011856_create_medical_treatments_table', 39),
(71, '2023_09_26_011330_create_physican_statements_table', 40);

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
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1),
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 2),
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 3),
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(2, 'admin.translation.index', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(3, 'admin.translation.edit', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(4, 'admin.translation.rescan', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(5, 'admin.admin-user.index', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(6, 'admin.admin-user.create', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(7, 'admin.admin-user.edit', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(8, 'admin.admin-user.delete', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(9, 'admin.upload', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(10, 'admin.admin-user.impersonal-login', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(11, 'admin.role', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(12, 'admin.role.index', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(13, 'admin.role.create', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(14, 'admin.role.show', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(15, 'admin.role.edit', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(16, 'admin.role.delete', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(17, 'admin.role.bulk-delete', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(18, 'admin.permission', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(19, 'admin.permission.index', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(20, 'admin.permission.create', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(21, 'admin.permission.show', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(22, 'admin.permission.edit', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(23, 'admin.permission.delete', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(24, 'admin.permission.bulk-delete', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(25, 'admin.geo-var', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(26, 'admin.geo-var.index', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(27, 'admin.geo-var.create', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(28, 'admin.geo-var.show', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(29, 'admin.geo-var.edit', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(30, 'admin.geo-var.delete', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(31, 'admin.geo-var.bulk-delete', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Login Token', '2c28a464dfa60d49adfa55875b0bf8249f5c7e2104d9a44aae3f99998887c0aa', '[\"*\"]', NULL, '2023-08-15 01:12:10', '2023-08-15 01:12:10'),
(2, 'App\\Models\\User', 1, 'Login Token', 'cd1cf64f3c597986f3849e40c4792856e402d30489f7f7a96402e7cdf5d517ff', '[\"*\"]', NULL, '2023-08-15 01:13:39', '2023-08-15 01:13:39'),
(3, 'App\\Models\\User', 1, 'Login Token', '38a1dea75db78770a6522518c361a6427af264ebfd88bcaf940c22c9ff29abcc', '[\"*\"]', NULL, '2023-08-15 01:15:36', '2023-08-15 01:15:36'),
(4, 'App\\Models\\User', 1, 'Login Token', '7211de4e52b8f886e55cc0f3b71d9b97166f779632ed7c8b7250ad9e7b381b9b', '[\"*\"]', NULL, '2023-08-15 01:16:28', '2023-08-15 01:16:28'),
(5, 'App\\Models\\User', 2, 'Login Token', '2f7255e429a17da72efb013d33e2ea1718c188af2ed049232953146054e61c1c', '[\"*\"]', NULL, '2023-08-19 00:08:08', '2023-08-19 00:08:08'),
(6, 'App\\Models\\User', 11, 'Login Token', '51a726b23b56fd5d8d8115f3f06c76b44f93861a215fe3731249c97fdf4134b1', '[\"*\"]', NULL, '2023-09-02 05:57:55', '2023-09-02 05:57:55'),
(7, 'App\\Models\\User', 11, 'Login Token', '9647291a26bce3608553500d8f5bd2d8ba61b1a7a42c0a91b918254a995d1fac', '[\"*\"]', NULL, '2023-09-11 01:45:30', '2023-09-11 01:45:30'),
(8, 'App\\Models\\User', 11, 'Login Token', 'c9adf163967ba7c407fa0ba168a7a418ea9a5583680fb68b2e90f8f94f017837', '[\"*\"]', NULL, '2023-09-11 01:46:33', '2023-09-11 01:46:33'),
(9, 'App\\Models\\User', 17, 'Login Token', 'caa3e8c237971d57d38fe4b81a294dda847bfdc5984f1fd8cd54bc3f9c897748', '[\"*\"]', NULL, '2023-09-19 03:04:33', '2023-09-19 03:04:33'),
(10, 'App\\Models\\User', 17, 'Login Token', '4c4ccbabab6021f8bfaa2b98ec71207275d4b2fdbff043c2c7407338ec1cf7c4', '[\"*\"]', NULL, '2023-09-19 23:33:23', '2023-09-19 23:33:23'),
(11, 'App\\Models\\User', 18, 'Login Token', '546cec8cdd213a24fdb07309a88415b5f640d54ed82a8f24bd2318b98ab0cfdd', '[\"*\"]', NULL, '2023-09-20 00:23:47', '2023-09-20 00:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `physican_statements`
--

CREATE TABLE `physican_statements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `passenger_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_travel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arival_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharging_facility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharging_md` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addmision_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftf_from_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_of_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `economy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oxygen_required` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oxygen_needed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sop2_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forseen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contagious` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prognosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physician_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physican_statements`
--

INSERT INTO `physican_statements` (`id`, `case_1_id`, `case_2_id`, `passenger_name`, `date_of_travel`, `from`, `to`, `airline`, `flight`, `departure_time`, `arival_time`, `discharging_facility`, `discharging_md`, `facility_address`, `phone_number`, `addmision_date`, `diagnosis`, `ftf_from_date`, `class_of_service`, `economy`, `passenger`, `oxygen_required`, `oxygen_needed`, `sop2_target`, `attendant`, `special_service`, `forseen`, `contagious`, `prognosis`, `facility`, `address`, `physician_name`, `signature`, `date`, `created_at`, `updated_at`) VALUES
(2, 2, 2, '2023-09-02', '2023-08-31', 'asd', 'asd', 'asd', 'as', '20:49', '20:48', '20:48', '20:52', 'asda', 'asd', '2023-09-14', 'asdasd', '2023-09-20', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-09-26 10:49:42', NULL),
(4, 4, 4, '2023-09-29', '2023-09-20', 'asd', 'asd', 'asd', 'as', '10:46', '10:46', '10:47', '10:44', 'asda', 'asd', '2023-09-20', 'asdasd', '2023-09-19', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-09-27 00:45:49', NULL),
(5, 5, 5, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:25', NULL),
(6, 6, 6, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:34', NULL),
(11, 11, 11, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:56', NULL),
(19, 19, 19, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sdsds', '2023-09-22', 'sdsd', 'sdsds', 'dsdsd', 'dsdsds', '20:16', '20:16', '20:17', '20:15', 'sdsd', 'sdsd', '2023-09-02', 'sdsd', '2023-08-29', 'sd', 'sdsd', 'sdsd', 'sdsds', 'sdsds', 'sdsd', 'dsdsds', 'ds', 'sds', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'ssds', 'sds', 'sds', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `receiving_facilities`
--

CREATE TABLE `receiving_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attending_md` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receiving_facilities`
--

INSERT INTO `receiving_facilities` (`id`, `case_1_id`, `case_2_id`, `destination`, `phone`, `address`, `city_state`, `room`, `zip`, `contact_person`, `phone2`, `attending_md`, `other`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 'sad', '67551132', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-09-27 00:45:48', NULL),
(5, 5, 5, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:26', NULL),
(7, 7, 7, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:28', NULL),
(8, 8, 8, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:33', NULL),
(11, 11, 11, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:34', NULL),
(12, 12, 12, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:36', NULL),
(13, 13, 13, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:49', NULL),
(15, 15, 15, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:50', NULL),
(16, 16, 16, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:53', NULL),
(18, 18, 18, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:55', NULL),
(19, 19, 19, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:56', NULL),
(20, 20, 20, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:12:58', NULL),
(21, 21, 21, 'asas', 'asas', 'asas', 'asasa', 'as', 'asas', 'asas', 'asas', 'asas', 'asas', '2023-09-28 10:13:00', NULL);

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
(1, 'Administrator', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(2, 'accountant', 'accountant', '2021-01-20 04:38:27', '2021-01-20 04:38:27'),
(11, 'tt', 'tt', '2023-07-13 06:51:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `third_party_payors`
--

CREATE TABLE `third_party_payors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_rep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relevent_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `third_party_payors`
--

INSERT INTO `third_party_payors` (`id`, `case_1_id`, `company`, `contact`, `phone`, `email`, `address`, `additional_rep`, `relevent_history`, `notes`, `created_at`, `updated_at`) VALUES
(4, 4, 'asd', 'asd', 'asd', 'asd@gmail.com', 'asd', 'asd', 'sad', 'asd', '2023-09-27 00:45:47', NULL),
(5, 5, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:23', NULL),
(6, 6, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:26', NULL),
(7, 7, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:28', NULL),
(8, 8, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:30', NULL),
(9, 9, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:32', NULL),
(10, 10, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:33', NULL),
(11, 11, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:34', NULL),
(12, 12, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:35', NULL),
(13, 13, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:48', NULL),
(14, 14, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:49', NULL),
(15, 15, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:50', NULL),
(16, 16, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:51', NULL),
(17, 17, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:53', NULL),
(18, 18, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:55', NULL),
(19, 19, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:56', NULL),
(20, 20, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:12:58', NULL),
(21, 21, 'asas', 'asas', 'asas', 'asas', 'asas', 'asas', 'sassas', 'asasas', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `travel_infos`
--

CREATE TABLE `travel_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `travel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_ftf_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_ftf_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart_airport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrive_airport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart_facility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrive_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrive_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_infos`
--

INSERT INTO `travel_infos` (`id`, `case_1_id`, `case_2_id`, `travel_date`, `travel_hour`, `travel_ftf_start_date`, `travel_ftf_end_date`, `depart_airport`, `arrive_airport`, `airline`, `depart_time`, `depart_facility`, `arrive_time`, `arrive_date`, `created_at`, `updated_at`) VALUES
(4, 4, 4, '2023-08-31', '56', '2023-09-21', '2023-10-04', 'sad', 'asd', 'asd', '10:44', '2023-09-21', '10:41', '2023-09-26', '2023-09-27 00:45:48', NULL),
(5, 5, 5, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:24', NULL),
(6, 6, 6, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:26', NULL),
(7, 7, 7, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:28', NULL),
(8, 8, 8, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:31', NULL),
(9, 9, 9, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:32', NULL),
(10, 10, 10, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:33', NULL),
(11, 11, 11, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:35', NULL),
(12, 12, 12, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:36', NULL),
(13, 13, 13, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:48', NULL),
(14, 14, 14, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:49', NULL),
(15, 15, 15, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:50', NULL),
(16, 16, 16, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:52', NULL),
(17, 17, 17, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:53', NULL),
(18, 18, 18, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:55', NULL),
(19, 19, 19, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:57', NULL),
(20, 20, 20, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:12:58', NULL),
(21, 21, 21, '2023-09-07', 'asa', '2023-09-13', '2023-09-30', 'sdsd', 'sdsd', 'sdsdsd', '20:13', '2023-09-29', '12:10', '2023-09-28', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `travel_instructions`
--

CREATE TABLE `travel_instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_1_id` int(11) DEFAULT NULL,
  `case_2_id` int(11) DEFAULT NULL,
  `general` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_instructions`
--

INSERT INTO `travel_instructions` (`id`, `case_1_id`, `case_2_id`, `general`, `loading_2`, `loading_3`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'adsa', 'adas', 's', '2023-09-26 10:49:42', NULL),
(4, 4, 4, 'asd', 'asd', 'asd', '2023-09-27 00:45:49', NULL),
(5, 5, 5, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:24', NULL),
(6, 6, 6, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:27', NULL),
(7, 7, 7, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:29', NULL),
(8, 8, 8, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:31', NULL),
(9, 9, 9, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:32', NULL),
(10, 10, 10, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:34', NULL),
(11, 11, 11, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:35', NULL),
(12, 12, 12, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:37', NULL),
(13, 13, 13, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:48', NULL),
(14, 14, 14, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:50', NULL),
(15, 15, 15, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:51', NULL),
(16, 16, 16, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:52', NULL),
(17, 17, 17, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:54', NULL),
(18, 18, 18, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:56', NULL),
(19, 19, 19, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:57', NULL),
(20, 20, 20, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:12:59', NULL),
(21, 21, 21, 'sdsd', 'sdsds', 'sdsd', '2023-09-28 10:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int(10) UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indexes for table `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indexes for table `case1s`
--
ALTER TABLE `case1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case2s`
--
ALTER TABLE `case2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_document_statuses`
--
ALTER TABLE `client_document_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_nurse_to_nurses`
--
ALTER TABLE `client_nurse_to_nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_airlines`
--
ALTER TABLE `commercial_airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discharging_facilities`
--
ALTER TABLE `discharging_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flying_angels`
--
ALTER TABLE `flying_angels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flying_rules`
--
ALTER TABLE `flying_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ground_details`
--
ALTER TABLE `ground_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intake_demographics`
--
ALTER TABLE `intake_demographics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loading_details`
--
ALTER TABLE `loading_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `medical_needs`
--
ALTER TABLE `medical_needs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_treatments`
--
ALTER TABLE `medical_treatments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `physican_statements`
--
ALTER TABLE `physican_statements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiving_facilities`
--
ALTER TABLE `receiving_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `third_party_payors`
--
ALTER TABLE `third_party_payors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_infos`
--
ALTER TABLE `travel_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_instructions`
--
ALTER TABLE `travel_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `case1s`
--
ALTER TABLE `case1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `case2s`
--
ALTER TABLE `case2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `client_document_statuses`
--
ALTER TABLE `client_document_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `client_nurse_to_nurses`
--
ALTER TABLE `client_nurse_to_nurses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `commercial_airlines`
--
ALTER TABLE `commercial_airlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `discharging_facilities`
--
ALTER TABLE `discharging_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `flying_angels`
--
ALTER TABLE `flying_angels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `flying_rules`
--
ALTER TABLE `flying_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ground_details`
--
ALTER TABLE `ground_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `intake_demographics`
--
ALTER TABLE `intake_demographics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `loading_details`
--
ALTER TABLE `loading_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_needs`
--
ALTER TABLE `medical_needs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `medical_treatments`
--
ALTER TABLE `medical_treatments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `physican_statements`
--
ALTER TABLE `physican_statements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `receiving_facilities`
--
ALTER TABLE `receiving_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `third_party_payors`
--
ALTER TABLE `third_party_payors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `travel_infos`
--
ALTER TABLE `travel_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `travel_instructions`
--
ALTER TABLE `travel_instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
