-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 09:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_html`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `vol_id` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nombre_passager` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `vol_id`, `numero`, `nom`, `prenom`, `email`, `phone`, `nombre_passager`, `created_at`, `updated_at`) VALUES
(1, 7, '23168', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 05:54:53', '2023-03-29 05:54:53'),
(2, 8, '15061', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 05:54:53', '2023-03-29 05:54:53'),
(3, 7, '48969', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 05:57:03', '2023-03-29 05:57:03'),
(4, 8, '13077', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 05:57:03', '2023-03-29 05:57:03'),
(5, 7, '77803', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:01:41', '2023-03-29 06:01:41'),
(6, 8, '76031', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:01:41', '2023-03-29 06:01:41'),
(7, 7, '61476', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:03:37', '2023-03-29 06:03:37'),
(8, 8, '54586', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:03:37', '2023-03-29 06:03:37'),
(9, 7, '73122', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:04:45', '2023-03-29 06:04:45'),
(10, 8, '50845', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:04:45', '2023-03-29 06:04:45'),
(11, 7, '71139', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:06:45', '2023-03-29 06:06:45'),
(12, 8, '83472', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:06:45', '2023-03-29 06:06:45'),
(13, 7, '79632', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:13:28', '2023-03-29 06:13:28'),
(14, 8, '17012', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:13:28', '2023-03-29 06:13:28'),
(15, 7, '92562', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:14:04', '2023-03-29 06:14:04'),
(16, 8, '91237', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:14:04', '2023-03-29 06:14:04'),
(17, 7, '44848', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:14:33', '2023-03-29 06:14:33'),
(18, 8, '35538', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:14:33', '2023-03-29 06:14:33'),
(19, 7, '15749', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:17:09', '2023-03-29 06:17:09'),
(20, 8, '23348', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:17:09', '2023-03-29 06:17:09'),
(21, 7, '99493', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:17:39', '2023-03-29 06:17:39'),
(22, 8, '81326', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:17:39', '2023-03-29 06:17:39'),
(23, 7, '37968', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:17:56', '2023-03-29 06:17:56'),
(24, 15, '97370', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:17:56', '2023-03-29 06:17:56'),
(25, 7, '59471', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:21:44', '2023-03-29 06:21:44'),
(26, 15, '26158', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:21:44', '2023-03-29 06:21:44'),
(27, 7, '98050', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:22:18', '2023-03-29 06:22:18'),
(28, 15, '73193', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:22:18', '2023-03-29 06:22:18'),
(29, 7, '23652', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:23:38', '2023-03-29 06:23:38'),
(30, 15, '77576', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:23:38', '2023-03-29 06:23:38'),
(31, 7, '27404', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:24:29', '2023-03-29 06:24:29'),
(32, 15, '35878', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:24:29', '2023-03-29 06:24:29'),
(33, 7, '92675', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:24:54', '2023-03-29 06:24:54'),
(34, 15, '78637', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:24:54', '2023-03-29 06:24:54'),
(35, 7, '72136', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:25:56', '2023-03-29 06:25:56'),
(36, 15, '69461', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:25:56', '2023-03-29 06:25:56'),
(37, 7, '65353', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:26:20', '2023-03-29 06:26:20'),
(38, 15, '82421', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:26:20', '2023-03-29 06:26:20'),
(39, 7, '18489', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:29:17', '2023-03-29 06:29:17'),
(40, 15, '84976', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:29:17', '2023-03-29 06:29:17'),
(41, 7, '78277', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:32:49', '2023-03-29 06:32:49'),
(42, 15, '35423', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:32:49', '2023-03-29 06:32:49'),
(43, 7, '58456', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:34:11', '2023-03-29 06:34:11'),
(44, 8, '53734', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:34:11', '2023-03-29 06:34:11'),
(45, 7, '75453', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:35:06', '2023-03-29 06:35:06'),
(46, 8, '81184', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:35:07', '2023-03-29 06:35:07'),
(47, 7, '73257', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:36:13', '2023-03-29 06:36:13'),
(48, 8, '99361', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:36:13', '2023-03-29 06:36:13'),
(49, 7, '54448', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:37:50', '2023-03-29 06:37:50'),
(50, 8, '52226', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:37:50', '2023-03-29 06:37:50'),
(51, 7, '84518', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:38:11', '2023-03-29 06:38:11'),
(52, 8, '59923', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:38:11', '2023-03-29 06:38:11'),
(53, 7, '29985', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:41:56', '2023-03-29 06:41:56'),
(54, 8, '19806', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:41:56', '2023-03-29 06:41:56'),
(55, 7, '83448', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:42:04', '2023-03-29 06:42:04'),
(56, 8, '29520', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:42:04', '2023-03-29 06:42:04'),
(57, 14, '87529', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:42:21', '2023-03-29 06:42:21'),
(58, 15, '43813', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:42:21', '2023-03-29 06:42:21'),
(59, 14, '21226', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:43:06', '2023-03-29 06:43:06'),
(60, 15, '64732', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:43:06', '2023-03-29 06:43:06'),
(61, 14, '35585', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:43:46', '2023-03-29 06:43:46'),
(62, 15, '60521', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:43:46', '2023-03-29 06:43:46'),
(63, 14, '58353', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:44:15', '2023-03-29 06:44:15'),
(64, 15, '52761', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:44:15', '2023-03-29 06:44:15'),
(65, 14, '40055', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:44:50', '2023-03-29 06:44:50'),
(66, 15, '55620', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:44:50', '2023-03-29 06:44:50'),
(67, 14, '98534', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:48:56', '2023-03-29 06:48:56'),
(68, 15, '39485', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:48:56', '2023-03-29 06:48:56'),
(69, 14, '47958', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:49:01', '2023-03-29 06:49:01'),
(70, 15, '35480', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:49:01', '2023-03-29 06:49:01'),
(71, 7, '44917', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:50:59', '2023-03-29 06:50:59'),
(72, 8, '90454', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:50:59', '2023-03-29 06:50:59'),
(73, 7, '11224', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:52:23', '2023-03-29 06:52:23'),
(74, 8, '61079', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:52:23', '2023-03-29 06:52:23'),
(75, 14, '70064', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:56:22', '2023-03-29 06:56:22'),
(76, 15, '88432', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:56:22', '2023-03-29 06:56:22'),
(77, 14, '42484', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:59:29', '2023-03-29 06:59:29'),
(78, 15, '78428', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 06:59:29', '2023-03-29 06:59:29'),
(79, 14, '33860', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:01:53', '2023-03-29 07:01:53'),
(80, 15, '16196', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:01:53', '2023-03-29 07:01:53'),
(81, 14, '50554', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:02:19', '2023-03-29 07:02:19'),
(82, 15, '70112', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:02:19', '2023-03-29 07:02:19'),
(83, 14, '98029', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:02:24', '2023-03-29 07:02:24'),
(84, 15, '66676', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:02:24', '2023-03-29 07:02:24'),
(85, 14, '71280', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:02:43', '2023-03-29 07:02:43'),
(86, 15, '94958', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:02:43', '2023-03-29 07:02:43'),
(87, 14, '31943', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:03:35', '2023-03-29 07:03:35'),
(88, 15, '25167', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:03:35', '2023-03-29 07:03:35'),
(89, 14, '23594', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:03:59', '2023-03-29 07:03:59'),
(90, 15, '15941', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:03:59', '2023-03-29 07:03:59'),
(91, 14, '53460', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:05:20', '2023-03-29 07:05:20'),
(92, 15, '77862', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:05:20', '2023-03-29 07:05:20'),
(93, 14, '16184', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:13:47', '2023-03-29 07:13:47'),
(94, 15, '13488', 'Messai', 'Embarek', 'blancho@gmail.com', '+33778368569', 1, '2023-03-29 07:13:47', '2023-03-29 07:13:47'),
(95, 14, '97952', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:22:34', '2023-03-29 07:22:34'),
(96, 2, '76937', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:22:34', '2023-03-29 07:22:34'),
(97, 14, '68834', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:23:38', '2023-03-29 07:23:38'),
(98, 2, '72645', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:23:38', '2023-03-29 07:23:38'),
(99, 14, '48370', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:23:52', '2023-03-29 07:23:52'),
(100, 2, '21861', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:23:52', '2023-03-29 07:23:52'),
(101, 14, '13928', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:24:24', '2023-03-29 07:24:24'),
(102, 2, '31928', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:24:24', '2023-03-29 07:24:24'),
(103, 14, '66150', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:32:17', '2023-03-29 07:32:17'),
(104, 2, '32397', 'Messai', 'Embarek', 'blanchard@hotmail.com', '0661485783', 1, '2023-03-29 07:32:17', '2023-03-29 07:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `vols`
--

CREATE TABLE `vols` (
  `id` int(11) NOT NULL,
  `numero` int(9) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `vol_time` decimal(8,2) NOT NULL DEFAULT 0.00,
  `date_depart` datetime NOT NULL,
  `places` int(4) NOT NULL DEFAULT 0,
  `reservations` int(4) NOT NULL DEFAULT 0,
  `prix` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vols`
--

INSERT INTO `vols` (`id`, `numero`, `depart`, `arrivee`, `vol_time`, `date_depart`, `places`, `reservations`, `prix`, `created_at`, `updated_at`) VALUES
(1, 123, 'Paris', 'New York', '8.50', '2023-04-01 08:00:00', 200, 10, '500.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(2, 456, 'New York', 'Paris', '7.50', '2023-04-02 09:30:00', 150, 5, '600.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(3, 789, 'Paris', 'London', '5.50', '2023-04-03 10:45:00', 100, 3, '300.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(4, 111, 'London', 'Paris', '6.50', '2023-04-04 12:00:00', 250, 20, '400.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(5, 222, 'New York', 'London', '8.00', '2023-04-05 14:30:00', 175, 8, '700.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(6, 333, 'London', 'New York', '7.00', '2023-04-06 16:45:00', 120, 5, '800.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(7, 444, 'Paris', 'New York', '8.50', '2023-04-07 18:00:00', 200, 10, '500.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(8, 555, 'New York', 'Paris', '7.50', '2023-04-08 19:30:00', 150, 5, '600.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(9, 666, 'Paris', 'London', '5.50', '2023-04-09 20:45:00', 100, 3, '300.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(11, 777, 'London', 'Paris', '6.50', '2023-04-10 22:00:00', 250, 20, '400.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(12, 888, 'New York', 'London', '8.00', '2023-04-11 23:30:00', 175, 8, '700.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(13, 999, 'London', 'New York', '7.00', '2023-04-12 01:45:00', 120, 5, '800.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(14, 1010, 'Paris', 'New York', '8.50', '2023-04-13 03:00:00', 200, 10, '500.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(15, 1111, 'New York', 'Paris', '7.50', '2023-04-14 04:30:00', 150, 5, '600.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(16, 1212, 'Paris', 'London', '5.50', '2023-04-15 05:45:00', 100, 3, '300.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43'),
(17, 1313, 'London', 'Paris', '5.50', '2023-04-16 07:00:00', 250, 20, '400.00', '2023-03-28 03:37:43', '2023-03-28 03:37:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_vol_id_foreign` (`vol_id`) USING BTREE;

--
-- Indexes for table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `vols`
--
ALTER TABLE `vols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`vol_id`) REFERENCES `vols` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
