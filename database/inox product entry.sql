-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 10:04 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcgroupuae`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FamilyCode` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_ID` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'S/A/F/FC/K/C/Z',
  `Sub_Category_ID` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Sub_Category_ID` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Available_sizes` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Available_colours` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Finish` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_in_stock` int NOT NULL,
  `Thickness` double(8,2) NOT NULL,
  `Dimension` double(8,2) NOT NULL,
  `outlet_diameter` double(8,2) NOT NULL,
  `Available_variance` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `Brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit_of_measurement` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit_price` double(8,2) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `Type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Application` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MainImage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Thumpnail1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Thumpnail2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Thumpnail3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Thumpnail4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Thumpnail5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Thumpnail6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `TechnicalSheet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `products_product_id_unique` (`Product_id`),
  KEY `products_category_id_foreign` (`Category_ID`),
  KEY `products_sub_category_id_foreign` (`Sub_Category_ID`),
  KEY `products_sub_sub_category_id_foreign` (`Sub_Sub_Category_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
