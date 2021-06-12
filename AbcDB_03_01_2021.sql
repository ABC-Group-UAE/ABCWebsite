-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2021 at 11:58 AM
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
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `Brand id` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand_Name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image URL` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Brand id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Brand id`, `Brand_Name`, `Image URL`) VALUES
('1', 'Bathx', ''),
('2', 'Becken', ''),
('3', 'Viceroy', ''),
('4', 'Granitogres', ''),
('5', 'Inox', ''),
('6', 'Deko', '');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Candidate_Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Candidate_mailid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobPosition` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverletter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `careers_candidate_mailid_unique` (`Candidate_mailid`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `Candidate_Name`, `Candidate_mailid`, `jobPosition`, `coverletter`, `resume`, `updated_at`, `created_at`) VALUES
(4, 'dff', 'cxva@gmail.com', 'asdas', 'nmbnmbn', 'C:\\wamp64\\tmp\\php7DBE.tmp', '2020-09-08 13:31:56', '2020-09-08 13:31:56'),
(5, 'sada', 'qwd1@wewe.com', 'asdas', 'cxvcxcx', 'C:\\wamp64\\tmp\\php7781.tmp', '2020-09-08 13:47:13', '2020-09-08 13:47:13'),
(6, 'sada', 'cxv2@gmail.com', 'sadasd', 'b.jlmbhbj.hkj', 'C:\\wamp64\\tmp\\phpF93C.tmp', '2020-09-08 13:49:56', '2020-09-08 13:49:56'),
(7, 'dff', 'xzc1@gmail.com', 'jkjk', 'jhvbhb hbjbhioj', 'C:\\wamp64\\tmp\\php4C7.tmp', '2020-09-08 13:53:16', '2020-09-08 13:53:16'),
(8, 'dff', 'sadsad5@gmail.com', 'cxxc', 'zcvz', 'C:\\wamp64\\tmp\\php650C.tmp', '2020-09-08 14:00:14', '2020-09-08 14:00:14'),
(9, 'dff', 'qwd2@wewe.com', 'r', 'erer', 'C:\\wamp64\\tmp\\php6278.tmp', '2020-09-08 14:01:19', '2020-09-08 14:01:19'),
(10, 'xcv', 'sadsad8@gmail.com', 'xg', 'dhghd', 'C:\\wamp64\\tmp\\php124B.tmp', '2020-09-08 14:03:09', '2020-09-08 14:03:09'),
(16, 'gjhjff', 'sadsad@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php1D58.tmp', '2020-09-09 03:04:10', '2020-09-09 03:04:10'),
(17, 'gjhjff', 'sadsad22@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\phpAADE.tmp', '2020-09-09 03:16:48', '2020-09-09 03:16:48'),
(18, 'gjhjff', 'sadsad32@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\phpA0A9.tmp', '2020-09-09 03:17:50', '2020-09-09 03:17:50'),
(19, 'gjhjff', 'sadsad42@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php3096.tmp', '2020-09-09 03:18:27', '2020-09-09 03:18:27'),
(20, 'gjhjff', 'sadsad52@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php6A01.tmp', '2020-09-09 03:19:47', '2020-09-09 03:19:47'),
(21, 'gjhjff', 'sadsad62@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php1717.tmp', '2020-09-09 03:24:54', '2020-09-09 03:24:54'),
(22, 'gjhjff', 'sadsad72@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php2CD9.tmp', '2020-09-09 03:27:11', '2020-09-09 03:27:11'),
(23, 'gjhjff', 'sadsad73@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php7114.tmp', '2020-09-09 03:35:07', '2020-09-09 03:35:07'),
(24, 'gjhjff', 'sadsad74@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php8AA4.tmp', '2020-09-09 03:36:19', '2020-09-09 03:36:19'),
(25, 'gjhjff', 'sadsad75@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\phpCE31.tmp', '2020-09-09 03:37:42', '2020-09-09 03:37:42'),
(26, 'gjhjff', 'sadsad76@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php90C8.tmp', '2020-09-09 03:41:48', '2020-09-09 03:41:48'),
(27, 'gjhjff', 'sadsad77@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\php8AC9.tmp', '2020-09-09 03:42:53', '2020-09-09 03:42:53'),
(28, 'gjhjff', 'sadsad78@11gmail.com', 'dfdhfg', 'hsssssssssssssssssssssss', 'C:\\wamp64\\tmp\\phpE1FD.tmp', '2020-09-09 03:44:20', '2020-09-09 03:44:20'),
(52, 'Aswini', 'aswani.technologies@gmail.com', 'web developer', 'jfjhjhj', 'C:\\wamp\\tmp\\phpB73A.tmp', '2020-12-27 07:17:24', '2020-12-27 07:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `catalogues`
--

DROP TABLE IF EXISTS `catalogues`;
CREATE TABLE IF NOT EXISTS `catalogues` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `catalogue_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontCover` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdfPath` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogues`
--

INSERT INTO `catalogues` (`id`, `catalogue_name`, `category_ID`, `frontCover`, `pdfPath`, `created_at`, `updated_at`) VALUES
(1, 'BathX Cabinet', 'S', '01.png', 'Bathx_Cabinet.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51'),
(2, 'Bathx sanitaryware', 'S', '02.png', 'Searchable_Bathx _Sanitaryware.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51'),
(3, 'Becken', 'S', '03.png', 'BECKEN_CATALOGUE.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51'),
(4, 'Bathx Faucets', 'S', '04.png', 'BATHX_CATALOGUE.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51'),
(5, 'GranitoGres', 'S', '05.png', 'GRANITO_GRES.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51'),
(6, 'Inox', 'S', '06.png', 'INOX.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51'),
(7, 'Appliances', 'S', '0.jpg', 'Bathx_Catalogue_7.pdf', '2020-09-16 07:33:51', '2020-09-16 07:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `Category_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Category_ID`),
  UNIQUE KEY `categories_category_id_unique` (`Category_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_ID`, `Category_Name`, `Description`, `Status`, `updated_at`, `created_at`) VALUES
('C', 'Ceramics', 'Ceramics', 'Active', '2020-10-26 06:02:11', '2020-09-10 12:04:03'),
('K', 'Kitchen', 'Kitchen', 'Active', '2020-09-10 12:04:03', '2020-09-10 12:04:03'),
('S', 'Sanitarywares', 'Sanitarywares', 'Active', '2020-09-10 10:22:45', '2020-09-10 12:04:03'),
('Z', 'Accessories', 'Accessories', 'Active', '2020-09-10 12:04:03', '2020-09-10 12:04:03'),
('A', 'Allied ', 'Allied', 'Active', '2020-09-10 12:04:03', '2020-09-10 12:04:03'),
('M', 'Mixers', 'Mixers', 'Active', '2020-09-10 12:04:03', '2020-09-10 12:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

DROP TABLE IF EXISTS `colours`;
CREATE TABLE IF NOT EXISTS `colours` (
  `color_code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`color_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`color_code`, `colour`) VALUES
('BK', 'Black'),
('BN', 'Brown'),
('B', 'Blue'),
('BG', 'Beige'),
('I', 'Ivory'),
('G', 'Grey'),
('GN', 'Green'),
('W', 'White'),
('P', 'Purple'),
('A ', 'Apricot'),
('C', 'Chrome'),
('GD', 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerName` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail id` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Region` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time stamp` timestamp NOT NULL,
  `website` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'individual'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquired_product`
--

DROP TABLE IF EXISTS `enquired_product`;
CREATE TABLE IF NOT EXISTS `enquired_product` (
  `slno` int NOT NULL,
  `customer_mailid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phoneno` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `showroom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` float(8,6) NOT NULL,
  `longitude` float(8,6) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `showroom`, `street`, `city`, `country`, `email`, `phone_no`, `latitude`, `longitude`, `image`) VALUES
(1, 'Alif International', 'King Faisal Street', 'Sharjah', 'UAE', 'info@abcmercantile.ae', '+971567330999', 25.324965, 55.401588, 'alif.jpg'),
(2, 'Alif International', 'New Sajja', 'Sharjah', 'UAE', 'info@abcmercantile.ae', '+971567330999', 25.341295, 55.628571, 'sajja.jpg'),
(3, 'ABC CERAMICS LLC.', 'Ruwi', 'Oman', 'Oman', 'info@abcgroupoman.com', ' +968 26894949', 23.585268, 58.545609, 'Oman_Barka.jpg'),
(4, 'ABC My home tiles & bathz llc', 'Ruwi', 'Oman', 'Oman', 'info@abcgroupoman.com', ' +968 26894949', 23.585268, 58.545609, 'Oman_Barka.jpg'),
(5, 'Al Baraka Ceramics LLC', 'Barka', 'Oman', 'Oman', 'info@abcgroupoman.com', ' +968 26894949', 23.660141, 57.916222, 'Oman_Barka.jpg'),
(6, 'ABC IMPEX AFRICA', 'Madhvani Business park', 'Kampala', 'Uganda', 'info@abcuganda.com', '+256701834162', 0.318232, 32.614193, 'Oman_Barka.jpg'),
(7, 'ABC IMPEX AFRICA', 'Chinese Business Hotel', 'Kampala', 'Uganda', 'info@abcuganda.com', '+256701834162', 0.314034, 32.611004, 'Oman_Barka.jpg'),
(8, 'ABC IMPEX AFRICA', '7th street', 'Kampala', 'Uganda', 'info@abcuganda.com', '+256701834162', 0.317548, 32.602196, 'Oman_Barka.jpg'),
(9, 'ABC Stiles & Bathz', 'Jinja Road', 'Kampala', 'Uganda', 'info@abcuganda.com', '+256701834162', 0.324108, 32.603271, 'Oman_Barka.jpg'),
(10, 'ABC My Home', 'Ntinda', 'Kampala', 'Uganda', 'info@abcuganda.com', '+256701834162', 0.341630, 32.614910, 'Oman_Barka.jpg'),
(11, 'Afri Trade Rwanda Ltd', 'Gasabo', 'Umujyi wa kigali', 'Rwanda', 'info@abcgrouprwanda.com', '+256757585599', -1.927650, 30.075731, 'Oman_Barka.jpg'),
(12, 'ABC tiles & Bathz', 'Nyarugenge', 'Kigali', 'Rwanda', 'info@abcgrouprwanda.com', '+256757585599', -1.942240, 30.061037, 'Oman_Barka.jpg'),
(13, 'EMPORIO TILES TANZANIA Ltd.', 'Morroco area', 'Dar Es Salaam', 'Tanzania', 'info@abctanzania.com', '+255 682 953 332', -6.776607, 39.260231, 'Oman_Barka.jpg'),
(14, 'EMPORIO TILES TANZANIA Ltd', 'Kariakoo', 'Dar Es Salaam', 'Tanzania', 'info@abctanzania.com', '+255 682 953 332', -6.818283, 39.272850, 'Oman_Barka.jpg'),
(15, 'ABC MY HOME', 'Ilala', 'Dar Es Salaam', 'Tanzania', 'info@abctanzania.com', '+255 682 953 332', -6.819359, 39.284992, 'Oman_Barka.jpg'),
(16, 'ABC PROJECT WLL', 'Souq Al Qalah', ' Doha', 'Qatar', 'info@abcgroupqatar.com', '+97444164440', 25.223970, 51.433865, 'Oman_Barka.jpg'),
(17, 'ABC PROJECT WLL', 'Industrial area', 'Doha', 'Qatar', 'info@abcgroupqatar.com', '+97444164440', 25.167309, 51.431961, 'Oman_Barka.jpg'),
(18, 'ABC PROJECT WLL', 'Dragon Mart', 'Doha', 'Qatar', 'info@abcgroupqatar.com', '+97444164440', 25.195492, 51.454353, 'Oman_Barka.jpg'),
(19, 'ABC PROJECT WLL', 'Muaither', 'Doha', 'Qatar', 'info@abcgroupqatar.com', '+97444164440', 25.273348, 51.412815, 'Oman_Barka.jpg'),
(20, 'ABC CERAMIC WLL', 'Salwa Road', ' Doha', 'Qatar', 'info@abcgroupqatar.com', '+97444164440', 25.259272, 51.489979, 'Oman_Barka.jpg'),
(21, 'ABC HAUZ', 'Salwa Road', 'Doha', 'Qatar', 'info@abcgroupqatar.com', '+97444164440', 25.242582, 51.461666, 'Oman_Barka.jpg'),
(22, 'ABC Ceramics', 'GAG 07,08 Dragonmart2 - Dubai', 'Dubai', 'UAE', 'info@abcmercantile.ae', '+971567330999', 25.174427, 55.417961, 'Oman_Barka.jpg'),
(24, 'ABC Group International', 'P4-06, SAIF Zone', 'Sharjah', 'UAE', 'info@abcmercantile.ae', '+971567330999', 25.338938, 55.486118, 'abcUAE.jpg'),
(26, 'Indware Rwanda Ltd', 'Remera', 'kigali', 'Rwanda', 'info@abcgrouprwanda.com', '+256757585599', -1.951441, 30.108103, ''),
(27, 'ABC Emporio Tiles Tanzania', 'Plot No:21/24, Gerezani Indust', 'Dar es Salaam', 'Tanzania', 'info@abctanzania.com', '+255 682 953 332', -6.830749, 39.276142, ''),
(29, 'ABC My Home, Zanzibar', 'ground floor, Building no;559,', 'Urban West Zanzibar', 'Tanzania', 'info@abctanzania.com', '+255 682 953 332', -6.211927, 39.218166, ''),
(30, 'ABC Ceramics', 'Nujum AL Amerat Mall, Ground f', 'Amerat Sultanate of Oman', 'oman', 'info@abcgroupoman.com', ' +968 26894949', 23.524988, 58.505650, ''),
(31, 'Lime Light', 'Souq-Al Qalah, Near Qatar Airw', 'Doha', 'Qatar', 'info@limelight.qa', '+974 55204105', 25.224403, 51.433598, ''),
(32, 'ABC Ceramics', 'Shop No.8, Al Benna Centre - K', 'Sharjah', 'UAE', 'info@abcmercantile.ae', '+971501497262', 25.337433, 55.398037, ''),
(33, 'ABC Hauz', 'Industrial Area 4 - Sharjah ', 'Sharjah', 'UAE', 'info@abcmercantile.ae', '+971501497262', 25.324652, 55.401970, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_08_152551_create_careers_table', 1),
(2, '2020_09_10_103449_create_categories_table', 2),
(3, '2020_09_10_105544_create_sub_categories_table', 2),
(4, '2020_09_10_110230_create_sub_sub_categories_table', 2),
(5, '2020_09_13_114406_create_catalogues_table', 3),
(6, '2020_09_14_061948_create_catalogues_table', 4),
(9, '2020_09_16_060130_create_products_table', 5),
(10, '2020_09_17_060619_related_products', 6);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `subscriberID` bigint NOT NULL AUTO_INCREMENT,
  `SubscriberMailid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`subscriberID`)
) ENGINE=MyISAM AUTO_INCREMENT=2076599169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`subscriberID`, `SubscriberMailid`) VALUES
(348750264, 'xzfdf'),
(1342635730, 'asdasd'),
(1189545644, 'adasd'),
(469524308, 'cxvxcv'),
(495682564, 'asdsad'),
(1822276112, 'asdsad'),
(1250922493, 'sdd'),
(1838110451, 'ADD'),
(1107485380, 'media@abcgroup.ae'),
(1997824000, 'media@abcgroup.ae'),
(1869750199, 'media@abcgroup.ae'),
(724824913, 'asfsafadsff'),
(1091638150, 'aishamnoushad@gmail.com'),
(2076599168, 'sfdf@gfdgfdbbf'),
(650775222, 'sfdf@gfdgfdbbf'),
(665241985, 'sfdf@gfdgfdbbf'),
(1062487157, 'sfdf@gfdgfdbbf'),
(1465304953, 'media@abcgroup.ae'),
(1184185365, 'branding@abcmercantile.ae'),
(509825776, 'media@abcgroup.ae'),
(1451154629, 'media@abcgroup.ae'),
(258234115, 'media@abcgroup.ae'),
(662386533, 'aswani.technology@gmail.com'),
(1937897648, 'aswani.technology@gmail.com'),
(99294821, 'aswani.technology@gmail.com'),
(1516687227, 'aswani.technology@gmail.com'),
(1575065564, 'branding@abcmercantile.ae'),
(283686474, 'media@abcgroup.ae'),
(76828584, 'media@abcgroup.ae'),
(1602254142, 'branding@abcmercantile.ae'),
(1447328842, 'media@abcgroup.ae'),
(398249060, 'media@abcgroup.ae'),
(226367768, 'media@abcgroup.ae'),
(1419881825, 'branding@abcmercantile.ae'),
(1615873446, 'abcgroupuae2020@gmail.com'),
(143101011, 'media@abcgroup.ae'),
(1011967403, 'abcgroupuae2020@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `slno` int NOT NULL AUTO_INCREMENT,
  `page_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_info` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`slno`, `page_id`, `page_name`, `site_info`) VALUES
(1, '5f152e10d13f492ef1b162d0', 'Home', '5f103f7e5224a5353e5ce1c7'),
(2, '5f3777ed7e418d2a303727a8', 'Team', '5f103f7e5224a5353e5ce1c7'),
(3, '5f82fad77a840103fa8c5f7d', 'Shoplist', '5f103f7e5224a5353e5ce1c7'),
(4, '5f855af0d840bd5a5d33da88', 'Description', '5f103f7e5224a5353e5ce1c7'),
(5, '5f8592151ab185e1ffca5abc', 'Product', '5f103f7e5224a5353e5ce1c7'),
(6, '5f3793b77e418d16a737538f', 'Global Presence', '5f103f7e5224a5353e5ce1c7'),
(7, '5f37e851a5fdcbaf4914e3db', 'Exhibit', '5f103f7e5224a5353e5ce1c7'),
(8, '5f3a728891dd005d899cef5b', 'Downloads', '5f103f7e5224a5353e5ce1c7'),
(9, '5f3779c4fb8e3e05cfcfc276', 'Dealers', '5f103f7e5224a5353e5ce1c7'),
(10, '5f37862be7bab8542dbb0886', 'Career', '5f103f7e5224a5353e5ce1c7'),
(11, '5f391927bba6e95475e1cb89', 'Brands', '5f103f7e5224a5353e5ce1c7');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_ID` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'S/A/F/FC/K/C/Z',
  `Sub_Category_ID` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Sub_Category_ID` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Available_sizes` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Available_colours` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Finish` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_in_stock` int NOT NULL,
  `Thickness` double(8,2) NOT NULL,
  `Dimension` double(8,2) NOT NULL,
  `outlet_diameter` double(8,2) NOT NULL,
  `Available_variance` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit_of_measurement` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit_price` double(8,2) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Application` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MainImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumpnail1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumpnail2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumpnail3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumpnail4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumpnail5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumpnail6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TechnicalSheet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `products_product_id_unique` (`Product_id`),
  KEY `products_category_id_foreign` (`Category_ID`),
  KEY `products_sub_category_id_foreign` (`Sub_Category_ID`),
  KEY `products_sub_sub_category_id_foreign` (`Sub_Sub_Category_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Category_ID`, `Sub_Category_ID`, `Sub_Sub_Category_ID`, `product_name`, `shape`, `colour`, `size`, `description`, `long_description`, `Available_sizes`, `Available_colours`, `Finish`, `material`, `unit_in_stock`, `Thickness`, `Dimension`, `outlet_diameter`, `Available_variance`, `Brand`, `Unit_of_measurement`, `Unit_price`, `category`, `Type`, `Application`, `MainImage`, `Thumpnail1`, `Thumpnail2`, `Thumpnail3`, `Thumpnail4`, `Thumpnail5`, `Thumpnail6`, `TechnicalSheet`, `created_at`, `updated_at`) VALUES
('868', 'S', '1', 'T2', 'Nadina Washdown Two-Piece Toilet ', '', 'white', '680 x 370 x 815mm', 'Washdown Two-piece I, Toilet', 'Washdown Two-piece I, Toilet', '', 'white', '', 'ceramic', 10, 0.00, 680.00, 100.00, '', 'BathX', 'PCs', 1000.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'angle_SV_868.JPG', 'TopView_868.JPG', 'full_FV_868.JPG', 'Full_LSV_868.JPG', 'LSV_868.JPG', 'FV_868.JPG', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5502', 'S', '1', 'T1', ' Zigo Washdown One-piece Toilet UP Seat Cover', '', 'white', '', 'Washdown One-piece Toilet', 'Washdown One-piece Toilet', '', 'white', '', 'ceramic', 10, 0.00, 0.00, 100.00, '', 'BathX', 'PCs', 1001.00, 'Water Closet', 'Sanitary', 'Bathroom', 'LSFV_5502.JPG', 'FLSV_5502.JPG', 'FSV_5502.JPG', 'FV_5502.JPG', 'SV_5502.JPG', 'TV_5502.JPG', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5905', 'S', '1', 'T1', 'Dorit Washdown One-Piece Toilet PP Seat Cover', '', 'white', '700 x 380 x 790mm', 'Washdown One-piece Toile', 'Washdown One-piece Toile', '', 'white', '', 'ceramic', 11, 0.00, 700.00, 100.00, '', 'BathX', 'PCs', 1002.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ALSV_5905.JPG', 'ASV_5905.JPG', 'ASV_5905.JPG', 'LSV_5905.JPG', 'TV_5905.JPG', 'ZFV_5905.JPG', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5967', 'S', '1', 'T1', 'Tanana One-Piece toilet Washdown', '', 'white', '640x350x800mm', 'Washdown One-piece Toile', 'Washdown One-piece Toile', '', 'white', '', 'ceramic', 12, 0.00, 640.00, 100.00, '', 'BathX', 'PCs', 1003.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ALSV_5967.JPG', 'FFV_5967.JPG', 'FLSV_5967.JPG', 'LSV_5967.JPG', 'TSV_5967.JPG', 'ZFV_5967.JPG', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('840', 'S', '1', 'T1', 'MORON\nON-840B ', '', 'white', '690 x 380 x 750mm', 'Washdown One-piece Toilet', 'Washdown One-piece Toilet', '', 'white', '', 'ceramic', 13, 0.00, 690.00, 100.00, 'S-trap,P-trap', 'BathX', 'PCs', 1004.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_840.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('889', 'S', '1', 'T3', 'BARI\n889\nWall-hung Toilet ', '', 'white', '570x350x395mm', 'Wall-Hung Toilet 570x350x395mm', 'Wall-Hung Toilet 570x350x395mm', '', 'white', '', 'ceramic', 14, 0.00, 570.00, 100.00, '', 'BathX', 'PCs', 1005.00, 'WALL-HUNG TOILET', 'Sanitary', 'Bathroom', 'ASV_889.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5598', 'S', '1', 'T1', 'Bingo Washdown One-Piece Toilet ', '', 'white', '710 x 370 x 780mm ', 'Bingo Washdown One-Piece Toilet 710 x 370 x 780mm ', 'Bingo Washdown One-Piece Toilet  710 x 370 x 780mm ', '', 'white', '', 'ceramic', 15, 0.00, 710.00, 75.00, '', 'BathX', 'PCs', 1006.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_5598.JPG', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('315', 'S', '14', '', 'SQUAT PAN 315', '', 'white', '520 x 425 x 240mm', 'SQUAT PAN 520 x 425 x 240mm', 'SQUAT PAN 520 x 425 x 240mm', '', 'white', '', 'Porcelain ceramics', 16, 0.00, 520.00, 0.00, '', 'BathX', 'PCs', 1007.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_315.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('815', 'S', '1', 'T2', 'Swift Washdown Two-Piece Toilet ', '', 'white', '720x390x735mm ', '  Swift Two-Piece Toilet Wash-down 720x390x735mm ', '  Swift Two-Piece Toilet Wash-down 720x390x735mm ', '', 'white', '', 'ceramic', 17, 0.00, 720.00, 100.00, '', 'BathX', 'PCs', 1008.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_815.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('818', 'S', '1', 'T2', 'Beat Washdown Two-Piece Toilet ', '', 'white', '645x350x800mm', '  Beat Two-Piece Toilet Wash-down 645x350x800mm', '  Beat Two-Piece Toilet Wash-down 645x350x800mm', '', 'white', '', 'ceramic', 18, 0.00, 645.00, 100.00, '', 'BathX', 'PCs', 1009.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_818.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('823', 'S', '1', 'T2', 'Nano Washdown Two-Piece Toilet ', '', 'white', '690x385x750mm', '  Nano Two-Piece Toilet Wash-down 690x385x750mm', '  Nano Two-Piece Toilet Wash-down 690x385x750mm', '', 'white', '', 'ceramic', 19, 0.00, 690.00, 100.00, '', 'BathX', 'PCs', 1010.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_823.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2222', 'S', '2', 'B5', 'Kinder Basin With Long Pedestal (560x440x850)', '', 'white', '560x440x850mm', ' Kinder Pedestal Basin- Long (560x440x850)', 'Basin with Pedestal Size: 560x440x850mm Back against the wall to installPorcelain ceramic', '', 'white', '', 'ceramic', 20, 0.00, 560.00, 0.00, '', 'BathX', 'PCs', 1011.00, 'Washbasin with Pedestal ', 'Sanitary', 'Any where', 'ASV_2222.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('886', 'S', '1', 'T3', 'Spanish Wall-Hung Toilet PP Seat cover Size: 510X360X390Mm ', '', 'white', '510X360X390Mm ', 'Spanish Wall-Hung Toilet PP Seat cover  Size: 510X360X390Mm  ', 'Wall-hung Toilet Size: 510x360x390mm Outlet diameter: 100mm Back against the wall to install Also Available U.F. Soft-close toilet cover', '', 'white', '', 'Porcelain ceramics', 21, 0.00, 510.00, 100.00, '', 'BathX', 'PCs', 1012.00, 'Wall Hung Toilet', 'Sanitary', 'Bathroom', 'ASV_886.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2247', 'S', '2', 'B4', 'Akon Wall-Hung Basin', '', 'white', '560 x 430 x 400mm', ' Akon Pedestal Basin Short 560x430x400mm ', 'Wall-hung Basin Size: 560x430x400mm Back against the wall to install Porcelain Ceramics', '', 'white', '', 'Porcelain ceramics', 22, 0.00, 560.00, 0.00, '', 'BathX', 'PCs', 1013.00, 'Wall-Hung Basin', 'Sanitary', 'Any where', 'ASV_2247.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2402', 'S', '2', 'B5', 'Venus Basin With Pedestal Porcelain Ceramic', '', 'white', ': 615 x 490 x 800mm', 'Venus Basin With Pedestal Porcelain Ceramic', 'Venus Basin With Pedestal Porcelain Ceramic', '', 'white', '', 'Porcelain ceramics', 23, 0.00, 0.00, 0.00, '', 'BathX', 'PCs', 1014.00, 'Basin With Pedestal', 'Sanitary', 'Any where', 'ASV_2402.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('2403', 'S', '2', 'B5', 'Gama Basin With Long Pedestal (575x455x860)', '', 'white', '575x455x860mm', ' Gama Pedestal Basin- Long  575x455x860mm', 'Pedestal Basin- Long Size: 575x455x860mm Back against the wall to install Porcelain ceramic', '', 'white', '', 'Porcelain ceramics', 24, 0.00, 575.00, 0.00, '', 'BathX', 'PCs', 1015.00, 'Basin With Pedestal', 'Sanitary', 'Any where', 'ASV_2403.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5508', 'S', '1', 'T1', 'Siphonic One-piece Toilet ', '', 'white', '690 x 370 x 750mm', 'Siphonic One-piece Toilet  690 x 370 x 750mm', 'Siphonic One-piece Toilet  690 x 370 x 750mm', '', 'white', '', 'Porcelain ceramics', 25, 0.00, 690.00, 100.00, '', 'BathX', 'PCs', 1016.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_5508.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5527', 'S', '1', 'T1', 'PRIMA 200 5527 Washdown One-piece Toilet', '', 'white', '700 x 370 x 660mm', 'PRIMA 200 5527 Washdown One-piece Toilet', 'PRIMA 200 5527 Washdown One-piece Toilet', '', 'white', '', 'Porcelain ceramics', 26, 0.00, 700.00, 100.00, '', 'BathX', 'PCs', 1017.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_5527.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5575', 'S', '1', 'T1', ' One-Piece Toilet Siphonic ', '', 'white', '630x380x710mm', 'One-Piece Toilet Siphonic 630x380x710mm', 'One-Piece Toilet Siphonic 630x380x710mm', '', 'white', '', 'Porcelain ceramics', 28, 0.00, 630.00, 76.00, '', 'BathX', 'PCs', 1019.00, 'Water Closet ', 'Sanitary', 'Bathroom', 'ASV_5575.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('615', 'S', '15', '', '615 Stall Urinal', '', 'white', '385 x 350 x 985mm', '615 Stall Urinal 385 x 350 x 985mm', '615 Stall Urinal 385 x 350 x 985mm', '', 'white', '', 'Porcelain ceramics', 29, 0.00, 385.00, 0.00, '', 'BathX', 'PCs', 1020.00, 'Urinals', 'Sanitary', 'Bathroom', 'ASV_615.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('614', 'S', '15', '', '614\nWall-hung Urinal (Sensor) ', '', '', '', '614\nWall-hung Urinal (Sensor) ', '614 Wall-hung Urinal (Sensor)', '', 'white', '', 'Porcelain ceramics', 30, 0.00, 0.00, 0.00, '', 'BathX', 'PCs', 1021.00, 'Urinals', 'Sanitary', 'Bathroom', 'ASV_614.jpg', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `related_products`
--

DROP TABLE IF EXISTS `related_products`;
CREATE TABLE IF NOT EXISTS `related_products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Related_Product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type_Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `related_products_product_id_foreign` (`Product_id`),
  KEY `related_products_related_product_id_foreign` (`Related_Product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `related_products`
--

INSERT INTO `related_products` (`id`, `Product_id`, `Related_Product_id`, `Type_Description`, `created_at`, `updated_at`) VALUES
(1, 'BX1071', 'BX1072', 'baQRIa0FmD', '2020-09-17 02:43:05', '2020-09-17 02:43:05'),
(4, 'BX1073', 'BX1072', 'GOCkKXok7K', '2020-09-17 02:45:19', '2020-09-17 02:45:19'),
(3, 'BX1071', 'BX1073', 'GOCkKXok7K', '2020-09-17 02:45:19', '2020-09-17 02:45:19'),
(5, 'BX1071', 'BX1074', 'baQRIa0FmD', '2020-09-17 02:43:05', '2020-09-17 02:43:05'),
(6, 'BX1072', 'BX1073', 'baQRIa0FmD', '2020-09-17 02:43:05', '2020-09-17 02:43:05'),
(7, 'BX1072', 'BX1081', 'GOCkKXok7K', '2020-09-17 02:45:19', '2020-09-17 02:45:19'),
(8, 'BX1072', 'BX1079', 'GOCkKXok7K', '2020-09-17 02:45:19', '2020-09-17 02:45:19'),
(9, 'BX1072', 'BX1076', 'baQRIa0FmD', '2020-09-17 02:43:05', '2020-09-17 02:43:05'),
(10, 'BX1081', 'BX1073', 'baQRIa0FmD', '2020-09-17 02:43:05', '2020-09-17 02:43:05'),
(11, 'BX1081', 'BX1085', 'GOCkKXok7K', '2020-09-17 02:45:19', '2020-09-17 02:45:19'),
(12, 'BX1081', 'BX1079', 'GOCkKXok7K', '2020-09-17 02:45:19', '2020-09-17 02:45:19'),
(13, 'BX1081', 'BX1084', 'baQRIa0FmD', '2020-09-17 02:43:05', '2020-09-17 02:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `Category_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Category_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Category_Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Category_ID`,`Sub_Category_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`Category_ID`, `Sub_Category_ID`, `Sub_Category_Name`, `Description`, `Status`, `updated_at`, `created_at`) VALUES
('A', '1', 'Concealed Diverter', 'Concealed Diverter', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '2', 'Trim Set', 'Trim Set', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '3', 'Shattaf', 'Shattaf', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '4', 'Consealed Shower mixer with diverter', 'Consealed Shower mixer with diverter', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '5', 'Consealed Shower diverter', 'Consealed Shower diverter', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '6', 'Consealed Shower stop cock', 'Consealed Shower stop cock', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '7', 'Rain Shower', 'Rain Shower', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '8', 'Shower Column', 'Shower Column', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '9', 'Shower Kit', 'Shower Kit', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '10', 'Shower Head/ Hand Shower', 'Shower Head/ Hand Shower', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '11', 'Over head Showerset', 'Over head Showerset', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('A', '12', 'Hand Shower Set', 'Hand Shower Set', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('C', 'CT1', 'Floor Tiles', 'Floor Tiles', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('C', 'CT2', 'Wall Tiles', 'Wall Tiles', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('M', 'FC', 'Cold Taps', 'Cold Taps', 'Active', '2020-09-24 07:16:43', '2020-09-24 07:16:43'),
('M', 'F', 'Faucets', 'Faucets', 'Active', '2020-09-24 07:15:16', '2020-09-24 07:15:16'),
('K', '1', 'Sink', 'Sink', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('K', '2', 'Sink Mixer', 'Sink Mixer', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '1', 'Toilet', 'Toilet', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '2', 'Basin', 'Basin', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '11', 'Shower Room and Enclosures', 'Shower Room and Enclosures', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '12', 'Bathtub', 'Bathtub', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '13', '3 Set - Family', '3 Set - Family', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '14', 'Squat Pan', 'Squat Pan', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '15', 'Urinals', 'Urinals', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '16', 'Cabinets', 'Cabinets', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '18', 'Shower Tray', 'Shower Tray', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '19', 'MassageTub', 'MassageTub', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '20', 'Bidet', 'Bidet', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('S', '21', 'WUDU Washer', 'WUDU Washer', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '1', 'Robe Hook', 'Robe Hook', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '2', 'Towel Ring', 'Towel Ring', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '3', 'Tumbler Holder', 'Tumbler Holder', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '4', 'Dish Holder', 'Dish Holder', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '5', 'Toilet paper holder', 'Toilet paper holder', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '6', 'Towel Bar', 'Towel Bar', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '7', 'Toilet Brush Holder', 'Toilet Brush Holder', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '8', 'Angle Valve', 'Angle Valve', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '9', 'Bathroom Set', 'Bathroom Set', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '10', 'Mirrors', 'Mirrors', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '11', 'Drainers', 'Drainers', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '12', 'Water Heater', 'Water Heater', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '13', 'Dryers', 'Dryers', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '14', 'Dispensers', 'Dispensers', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '15', 'Seat Covers', 'Seat Covers and Cisterns', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '16', 'Shower Accessories', 'Shower Accessories', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '17', 'Waste Coupling ', 'Waste Coupling ', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '18', 'Installation Accessories', 'Installation Accessories', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '19', 'Connection Tube', 'Connection Tube', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '20', ' Bottle Trap', ' Bottle Trap', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '21', 'Cisterns', 'Cisterns', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '23', 'Hook', 'Hook', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '22', 'Bathroom 5 set family', 'Bathroom 5 set family', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '24', 'Bath basket', 'Bath basket', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '25', 'Bathroom Shelves', 'Bathroom Shelves', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '26', 'Dustbin', 'Dustbin', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '27', 'Push Button', 'Push Button', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18'),
('Z', '28', 'Grab Bar', 'Grab Bar', 'Active', '2020-09-10 12:17:18', '2020-09-10 12:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

DROP TABLE IF EXISTS `sub_sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_sub_categories` (
  `Category_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Category_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Sub_Category_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_Sub_Category_Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Category_ID`,`Sub_Category_ID`,`Sub_Sub_Category_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`Category_ID`, `Sub_Category_ID`, `Sub_Sub_Category_ID`, `Sub_Sub_Category_Name`, `Description`, `Status`, `updated_at`, `created_at`) VALUES
('C', 'CT1', '5', '800 * 800', '800 * 800', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT1', '4', '600 * 600', '600 * 600', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT1', '3', '800 * 1600', '800 * 1600', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT1', '2', '600 * 1200', '600 * 1200', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT1', '1', '400 * 400', '400 * 400', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('K', '2', '2', 'Non Pull Out', 'Non Pull Out', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('K', '2', '1', 'Pull Out', 'Pull Out', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('K', '1', '2', 'Double Bowl', 'Double Bowl', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('K', '1', '1', 'Single Bowl', 'Single Bowl', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B12', 'Natural stone', 'Natural stone', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B11', 'Re engineered marble', 'Re engineered marble', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '12', 'B', 'Drop in', 'Drop in', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '12', 'A', 'Freestanding Bath tub', 'Freestanding Bath tub', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B10', 'Glass Basin', 'Glass Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B9', 'Art Basin', 'Art Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B8', 'Below Counter Basin', 'Below Counter Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B7', 'Above Counter Basin', 'Above Counter Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B6', 'Freestanding Basin', 'Freestanding Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B5', 'Pedestal Basin', 'Pedestal Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '2', 'B4', 'Wall Hung Basin', 'Wall Hung Basin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '1', 'T4', 'Intelligent Toilet', 'Intelligent Toilet', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '1', 'T3', 'Wall Hung Toilet', 'Wall Hung Toilet', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '1', 'T2', 'Two Piece Toilet', 'Two Piece Toilet', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('S', '1', 'T1', 'Single Piece Toilet', 'Single Piece Toilet', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '11', 'B', 'linear', 'linear', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '11', 'A', 'Rectangle', 'Rectangle', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '26', 'b', 'Normal', 'Normal', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '26', 'A', 'Automatic dustbin', 'Automatic dustbin', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '13', '2', 'hair dryer', 'hair dryer', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '13', '1', 'hand dryer', 'hand dryer', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '3', 'B', 'Double Tumbler Holder', 'Double Tumbler Holder', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '3', 'A', 'Single Tumbler Holder', 'Single Tumbler Holder', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '1', 'B', 'Double Robe Hook', 'Double Robe Hook', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '1', 'A', 'Single Robe Hook', 'Single Robe Hook', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '6', 'B', 'Double Towel Bar', 'Double Towel Bar', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('Z', '6', 'A', 'Single Towel Bar', 'Single Towel Bar', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT2', '1', '250 * 375', '250 * 375', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT2', '2', '300 * 450', '300 * 450', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('C', 'CT2', '3', '300 * 600', '300 * 600', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '3', 'Shower mixer', 'Shower mixer', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '4', 'Sink Mixer', 'Sink Mixer', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '5', 'Bathroom Spout ', 'Bathroom Spout ', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '6', 'Hand Shower Mixer ', 'Hand Shower Mixer ', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '8', 'Tub Filler', 'Tub Filler', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '1', 'Basin Mixer', 'Basin Mixer', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '2', 'Art Basin Mixer', 'Art Basin Mixer', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'F', '9', 'tub and Hand shower ', 'tub and Hand shower ', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'FC', '1', 'Basin Taps', 'Basin Taps', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'FC', '4', 'Sink Taps', 'Sink Taps', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04'),
('M', 'FC', '5', 'Bib Taps', 'Bib Taps', 'Active', '2020-09-24 07:13:04', '2020-09-24 07:13:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
