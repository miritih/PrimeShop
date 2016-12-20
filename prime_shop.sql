-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2016 at 09:11 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prime_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 7, 'FNwru639zjBqalARwMd5LUtkYjH9tfv9', 1, '2015-10-29 08:37:55', '2015-10-29 08:37:55', '2015-10-29 08:37:55'),
(2, 8, 'miqkW87hFG61yiYsvBTmLatuTLTjlxKj', 1, '2015-10-29 08:42:34', '2015-10-29 08:42:34', '2015-10-29 08:42:34'),
(3, 9, 'mamRdhbjY1bZCvDU8e5yiedyn6BITrEB', 1, '2015-10-29 08:46:11', '2015-10-29 08:46:10', '2015-10-29 08:46:11'),
(4, 10, 'nj9PdJ32adCnLGiLFB6udldiKGd5vRT1', 1, '2015-10-29 08:50:32', '2015-10-29 08:50:32', '2015-10-29 08:50:32'),
(5, 11, 'HWga5Dlxp2caXeYN7Gqb0h5iT6RDcLHG', 1, '2015-12-05 04:36:09', '2015-12-05 04:36:09', '2015-12-05 04:36:09'),
(6, 12, 'CzBr9DtcoB0y7Ghhhz3NqIyayi79lleh', 1, '2016-01-01 04:39:05', '2016-01-01 04:39:05', '2016-01-01 04:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_07_02_230147_migration_cartalyst_sentinel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `detail_ID` int(11) NOT NULL,
  `detailOrderID` int(11) NOT NULL,
  `detailProductID` int(11) NOT NULL,
  `detailQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) NOT NULL,
  `orderUserID` int(11) NOT NULL,
  `orderAmount` float NOT NULL,
  `ordershipName` int(100) NOT NULL,
  `orderShipAddress` varchar(100) NOT NULL,
  `orderCity` varchar(50) NOT NULL,
  `orderZip` varchar(50) NOT NULL,
  `orderCountry` varchar(100) NOT NULL,
  `orderPhone` varchar(20) NOT NULL,
  `orderEmail` varchar(100) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orderShipped` tinyint(4) NOT NULL,
  `orderTrackingNo` varchar(80) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 7, 'Y7QXBE83nr4hbVagQMVjQtLdpTkkQ1Xp', '2015-10-29 08:38:14', '2015-10-29 08:38:14'),
(2, 8, 'kfQCkKIwhWisB3xTdDGQ0UGYuDmGPNP3', '2015-10-29 08:44:54', '2015-10-29 08:44:54'),
(3, 10, 'Wn1n8XK8lx2lk8hYGOstdj5hGr93MdAy', '2015-10-29 08:50:53', '2015-10-29 08:50:53'),
(4, 10, '6MHMvPT3533i21uZiJNz2YvVgnn7O5bL', '2015-10-29 08:51:49', '2015-10-29 08:51:49'),
(5, 10, 'hUSXabJtcMAZ3ieJzaPlhlqNkbGlsDLV', '2015-11-14 05:15:07', '2015-11-14 05:15:07'),
(6, 11, '3kSpSJMbh5w4092jufL387B5ZfAtres0', '2015-12-05 04:36:16', '2015-12-05 04:36:16'),
(7, 12, 'UqY80Rh3v8MNOEWAqAIcSisJigr2eLzo', '2016-01-01 04:39:22', '2016-01-01 04:39:22'),
(8, 11, '4FsC8rh3Y7XIGlzLZYieyouOlq5gLQjG', '2016-02-10 13:01:42', '2016-02-10 13:01:42'),
(9, 11, '0Vi7zvu4SG7joHi5bn6AhvUIBDj7JXVW', '2016-02-20 15:22:35', '2016-02-20 15:22:35'),
(10, 11, '8cDRUJR5EfeOiXlGJtU1t8f14KHkAcAw', '2016-03-16 14:58:54', '2016-03-16 14:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `categoryName`) VALUES
(1, 'Farming'),
(2, 'Dams/Fish Ponds'),
(3, 'Tents'),
(4, 'BioGas'),
(5, 'aquarium');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `productPrice` float NOT NULL,
  `productCartDesc` varchar(250) NOT NULL,
  `productShortDesc` varchar(500) NOT NULL,
  `productLongDesc` text NOT NULL,
  `productThumb` varchar(100) NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `productCategoryID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `productStock` float NOT NULL,
  `brand` varchar(100) NOT NULL,
  `ProductLive` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `productCategoryID` (`productCategoryID`),
  KEY `subcategoryID` (`subcategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productPrice`, `productCartDesc`, `productShortDesc`, `productLongDesc`, `productThumb`, `productImage`, `productCategoryID`, `subcategoryID`, `productStock`, `brand`, `ProductLive`, `created_at`, `updated_at`) VALUES
(1, 'Fish pond liner', 1000, 'krlklkrfjdndlkdf ', 'okfpospfposk', 'kk.jvdlk xckljvlkxzczkczx zclkjzc lzkclzkc lxkc;lx', 'WP_20150806_004.jpg', 'WP_20150806_004.jpg', 1, 1, 23, 'Prime variable covers', 1, '2015-09-20 21:19:56', '2015-09-29 21:00:00'),
(2, 'Bio Gas Bag', 1000, 'biogas bag', 'used to store bio gas', 'used to store bio gas', 'Biogas_bag.png', 'Biogas_bag.png', 4, 8, 30, 'Prime variable covers', 1, '2015-09-20 21:20:10', '2015-09-29 21:00:00'),
(3, 'BioGas Generator', 50000, 'BioGas Generator', 'BioGas Generator', 'BioGas Generator', 'biogas_generator.png', 'biogas_generator.png', 4, 9, 10, 'Prime variable covers', 1, '2015-09-20 21:20:22', '2015-09-29 21:00:00'),
(4, 'Drippers', 1000, 'drippers', 'drippers', 'drippers', 'dripers.jpg', 'dripers.jpg', 1, 3, 1000, 'prime variable covers', 1, '2015-09-20 22:18:52', '2015-09-29 21:00:00'),
(5, 'Plastic Drippers', 500, 'Plastic Drippers', 'Plastic Drippers', 'Plastic Drippers', 'plastic_drippers.jpg', 'plastic_drippers.jpg', 1, 3, 800, 'Prime', 1, '2015-09-20 22:24:49', '2015-09-29 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subCategory`
--

CREATE TABLE IF NOT EXISTS `subCategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `optionName` varchar(50) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subCategory`
--

INSERT INTO `subCategory` (`id`, `optionName`, `categoryID`) VALUES
(1, 'Farming Tools', 1),
(2, 'Green Houses', 1),
(3, 'Drippes', 1),
(4, 'Fish ponds', 2),
(5, 'Dams', 2),
(6, 'sdsfdf', 2),
(7, 'rtrtrtrtte', 3),
(8, 'BioGas Bags', 4),
(9, 'BioGas Generators', 4);

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=119 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(100, NULL, 'global', NULL, '2015-11-14 05:14:59', '2015-11-14 05:14:59'),
(101, NULL, 'ip', '127.0.0.1', '2015-11-14 05:14:59', '2015-11-14 05:14:59'),
(102, 10, 'user', NULL, '2015-11-14 05:14:59', '2015-11-14 05:14:59'),
(103, NULL, 'global', NULL, '2015-12-05 03:54:05', '2015-12-05 03:54:05'),
(104, NULL, 'ip', '127.0.0.1', '2015-12-05 03:54:05', '2015-12-05 03:54:05'),
(105, NULL, 'global', NULL, '2015-12-05 04:34:26', '2015-12-05 04:34:26'),
(106, NULL, 'ip', '127.0.0.1', '2015-12-05 04:34:26', '2015-12-05 04:34:26'),
(107, NULL, 'global', NULL, '2015-12-05 04:35:38', '2015-12-05 04:35:38'),
(108, NULL, 'ip', '127.0.0.1', '2015-12-05 04:35:38', '2015-12-05 04:35:38'),
(109, 10, 'user', NULL, '2015-12-05 04:35:38', '2015-12-05 04:35:38'),
(110, NULL, 'global', NULL, '2016-01-01 04:37:54', '2016-01-01 04:37:54'),
(111, NULL, 'ip', '127.0.0.1', '2016-01-01 04:37:54', '2016-01-01 04:37:54'),
(112, NULL, 'global', NULL, '2016-01-01 04:38:24', '2016-01-01 04:38:24'),
(113, NULL, 'ip', '127.0.0.1', '2016-01-01 04:38:24', '2016-01-01 04:38:24'),
(114, 11, 'user', NULL, '2016-01-01 04:38:25', '2016-01-01 04:38:25'),
(115, NULL, 'global', NULL, '2016-02-10 12:28:44', '2016-02-10 12:28:44'),
(116, NULL, 'ip', '127.0.0.1', '2016-02-10 12:28:44', '2016-02-10 12:28:44'),
(117, NULL, 'global', NULL, '2016-03-16 14:58:33', '2016-03-16 14:58:33'),
(118, NULL, 'ip', '127.0.0.1', '2016-03-16 14:58:33', '2016-03-16 14:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(7, 'wewe@gmail.com', '$2y$10$jMeQX6Uth1IRWVqpbqfp1utjKp5X7eYhN.Uq9ailgjxbP6SEvdGDq', NULL, '2015-10-29 08:38:14', NULL, 'mwenda', '', '', '2015-10-29 08:37:55', '2015-10-29 08:38:14'),
(11, 'ericmwenda5@gmail.com', '$2y$10$cfktQhKg23zB6H3ymjnyI.1vMy38GoJVrbVjLDMZz8TPSK4FQeMe.', NULL, '2016-03-16 14:58:54', 'eric', 'mwenda', '12345678232', '1212c weer', '2015-12-05 04:36:09', '2016-03-16 14:58:54'),
(12, 'e@gmail.com', '$2y$10$t0md18le.cANVaSaoEcu7uiVCCDSQRsFO0XHABx85A9CmyaV0.pHe', NULL, '2016-01-01 04:39:22', 'sdb', 'xm', '789877687687', 'wah', '2016-01-01 04:39:05', '2016-01-01 04:39:22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`subcategoryID`) REFERENCES `subCategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subCategory`
--
ALTER TABLE `subCategory`
  ADD CONSTRAINT `subCategory_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `productcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
