-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 09:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Model KHMER', 'laptop', 'Model KHMER category', '1598504429.jpg', '2020-02-29 23:11:37', '2020-08-26 22:01:31'),
(2, 'Model THAI', 'mobile-phone', 'Model THAI category', '1598504443.jpg', '2020-02-29 23:11:37', '2020-08-26 22:01:52'),
(3, 'Model ASIA', 'books', 'Model ASIA category', '1598504455.jpg', '2020-02-29 23:11:37', '2020-08-26 22:02:13'),
(4, 'Model USA', 'television', 'Model USA Category', '1598504466.jpg', '2020-04-14 19:28:19', '2020-08-26 22:02:36'),
(5, 'Model CHINA', 'officals', 'Model CHINA Category', '1598504411.jpg', '2020-08-26 21:49:59', '2020-08-26 22:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_24_094458_create_categories_table', 1),
(5, '2020_01_25_092002_create_subcategories_table', 1),
(6, '2020_01_30_115511_create_products_table', 1),
(7, '2020_03_11_102436_create_orders_table', 2),
(8, '2020_03_14_044807_create_sliders_table', 3),
(9, '2020_03_29_104736_create_sliders_table', 4),
(10, '2020_04_13_231824_add_status_to_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart`, `created_at`, `updated_at`) VALUES
(14, 6, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:3:{i:4;a:5:{s:2:\"id\";i:4;s:4:\"name\";s:12:\"mobile phone\";s:5:\"price\";s:3:\"700\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/BCalVvWpyRtsE5qo6AYoGYaxEFFSi4PstWJL9bn1.jpeg\";}i:6;a:5:{s:2:\"id\";i:6;s:4:\"name\";s:15:\"Lenovo ThinkPad\";s:5:\"price\";s:3:\"777\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/xa6HX9dvWxo1ZT0lGebO8PtWmg8NKEauvJHC4PjX.jpeg\";}i:7;a:5:{s:2:\"id\";i:7;s:4:\"name\";s:20:\"HP Pavilion x360 14m\";s:5:\"price\";s:3:\"988\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/vJPNnJohM5f1OSzghA6O7qtZLBEi8QmHkgroxkZh.jpeg\";}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:2465;}', '2020-03-28 17:12:21', '2020-03-28 17:12:21'),
(15, 5, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:6;a:5:{s:2:\"id\";i:6;s:4:\"name\";s:15:\"Lenovo ThinkPad\";s:5:\"price\";s:3:\"777\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/xa6HX9dvWxo1ZT0lGebO8PtWmg8NKEauvJHC4PjX.jpeg\";}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:777;}', '2020-04-13 12:24:57', '2020-04-13 12:24:57'),
(16, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:6;a:5:{s:2:\"id\";i:6;s:4:\"name\";s:15:\"Lenovo ThinkPad\";s:5:\"price\";s:3:\"777\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/xa6HX9dvWxo1ZT0lGebO8PtWmg8NKEauvJHC4PjX.jpeg\";}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:777;}', '2020-04-13 13:22:25', '2020-04-13 13:22:25'),
(17, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:1;a:5:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"HP LAPTOPS \";s:5:\"price\";s:3:\"877\";s:3:\"qty\";i:1;s:5:\"image\";s:53:\"product/yyO8bETsNup8nECU8sF0d7VBeRVbkEiQWthswpHP.jpeg\";}i:7;a:5:{s:2:\"id\";i:7;s:4:\"name\";s:20:\"HP Pavilion x360 14m\";s:5:\"price\";s:3:\"988\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/vJPNnJohM5f1OSzghA6O7qtZLBEi8QmHkgroxkZh.jpeg\";}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:1865;}', '2020-04-13 13:36:04', '2020-04-13 13:36:04'),
(18, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:4;a:5:{s:2:\"id\";i:4;s:4:\"name\";s:12:\"mobile phone\";s:5:\"price\";s:3:\"700\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/BCalVvWpyRtsE5qo6AYoGYaxEFFSi4PstWJL9bn1.jpeg\";}i:7;a:5:{s:2:\"id\";i:7;s:4:\"name\";s:20:\"HP Pavilion x360 14m\";s:5:\"price\";s:3:\"988\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/vJPNnJohM5f1OSzghA6O7qtZLBEi8QmHkgroxkZh.jpeg\";}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:1688;}', '2020-04-13 13:44:03', '2020-04-13 13:44:03'),
(19, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:3;a:5:{s:2:\"id\";i:3;s:4:\"name\";s:14:\"LENOVO LAPTOPS\";s:5:\"price\";s:3:\"827\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/tLV4CHocTJmpnKMGxwSquuHn2gCGu4K1FV2yTwM0.jpeg\";}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:827;}', '2020-04-14 19:44:45', '2020-04-14 19:44:45'),
(20, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:10;a:5:{s:2:\"id\";i:10;s:4:\"name\";s:38:\"Samsung 32\" N5300 FULL HD Smart LED TV\";s:5:\"price\";s:3:\"800\";s:3:\"qty\";s:1:\"2\";s:5:\"image\";s:60:\"public/product/AphmHvZqptXcWInis3rVlulI8F9koIDsgTXLv8lC.jpeg\";}i:8;a:5:{s:2:\"id\";i:8;s:4:\"name\";s:38:\"LG screen 55″ ULTRA HD Commercial TV\";s:5:\"price\";s:4:\"1400\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/3EoIljUSDxgWzfZz32C8RElXwJusHu6X8JONmjlZ.jpeg\";}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:3000;}', '2020-04-14 19:54:31', '2020-04-14 19:54:31'),
(21, 6, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:8;a:5:{s:2:\"id\";i:8;s:4:\"name\";s:38:\"LG screen 55″ ULTRA HD Commercial TV\";s:5:\"price\";s:4:\"1400\";s:3:\"qty\";i:2;s:5:\"image\";s:60:\"public/product/3EoIljUSDxgWzfZz32C8RElXwJusHu6X8JONmjlZ.jpeg\";}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:2800;}', '2020-04-15 03:02:04', '2020-04-15 03:02:04'),
(22, 6, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:3:{i:8;a:5:{s:2:\"id\";i:8;s:4:\"name\";s:38:\"LG screen 55″ ULTRA HD Commercial TV\";s:5:\"price\";s:4:\"1400\";s:3:\"qty\";s:1:\"1\";s:5:\"image\";s:60:\"public/product/3EoIljUSDxgWzfZz32C8RElXwJusHu6X8JONmjlZ.jpeg\";}i:1;a:5:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"HP LAPTOPS \";s:5:\"price\";s:3:\"877\";s:3:\"qty\";i:1;s:5:\"image\";s:53:\"product/yyO8bETsNup8nECU8sF0d7VBeRVbkEiQWthswpHP.jpeg\";}i:7;a:5:{s:2:\"id\";i:7;s:4:\"name\";s:20:\"HP Pavilion x360 14m\";s:5:\"price\";s:3:\"988\";s:3:\"qty\";i:1;s:5:\"image\";s:60:\"public/product/vJPNnJohM5f1OSzghA6O7qtZLBEi8QmHkgroxkZh.jpeg\";}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:3265;}', '2020-04-15 03:08:18', '2020-04-15 03:08:18');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `description`, `additional_info`, `category_id`, `subcategory_id`, `created_at`, `updated_at`) VALUES
(1, 'HP LAPTOPS', '1598519943.jpg', '877', 'This is the description of a product', 'This is additional info', 2, 4, '2020-02-29 23:11:37', '2020-08-27 02:19:03'),
(3, 'LENOVO LAPTOPS', '1598519959.jpg', '827', 'This is the description of a product', 'This is additional info', 2, 5, '2020-02-29 23:11:37', '2020-08-27 02:19:19'),
(4, 'mobile phone', '1598519931.jpg', '700', 'This is a mobile phone', '<p>This is a mobile phone<br></p>', 1, 1, '2020-02-29 23:32:36', '2020-08-27 02:18:51'),
(5, 'DELL LAPTOP', '1598519907.jpg', '799', 'this is laptop', '<p>This is a mobile phone<br></p>', 4, 6, '2020-02-29 23:33:16', '2020-08-27 02:18:27'),
(6, 'Lenovo ThinkPad', '1598519892.jpg', '777', 'This is Lenovo laptop', '<div class=\"col-4\" style=\"float: left; margin-left: 0px; width: 370px; color: rgb(8, 14, 20); font-family: \"Proxima Nova\", sans-serif; font-size: 18px;\"><section class=\"good module\" style=\"margin-bottom: 30px; clear: both; line-height: 16px;\"><ul class=\"pros\" style=\"margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px 0px 0px 30px; font-size: 0.8125em; color: rgb(106, 118, 127);\"><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; color: rgb(53, 186, 0); vertical-align: middle; font-size: 18px;\">✓</span>Powerful processor options</li><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; color: rgb(53, 186, 0); vertical-align: middle; font-size: 18px;\">✓</span>Great screen</li><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; color: rgb(53, 186, 0); vertical-align: middle; font-size: 18px;\">✓</span>Good connectivity</li></ul></section></div><div class=\"col-4\" style=\"float: left; margin-left: 30px; width: 370px; color: rgb(8, 14, 20); font-family: \"Proxima Nova\", sans-serif; font-size: 18px;\"><section class=\"bad module\" style=\"margin-bottom: 30px; clear: both; line-height: 16px;\"><h2 class=\"heading\" style=\"font-weight: 700; line-height: 1.25em; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; z-index: 1; position: relative; font-size: 0.75em; color: rgb(222, 20, 0); text-align: center; text-transform: uppercase; clear: left;\"><br></h2><ul class=\"cons\" style=\"margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px 0px 0px 30px; font-size: 0.8125em; color: rgb(106, 118, 127);\"><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; vertical-align: middle; font-size: 18px;\">✕</span>Average battery life</li><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; vertical-align: middle; font-size: 18px;\">✕</span>Relatively bulky and heavy</li><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; vertical-align: middle; font-size: 18px;\">✕</span>Average speakers</li><li style=\"list-style: disc; margin-bottom: 20px; display: block;\"><span class=\"icon\" style=\"margin-right: 10px; vertical-align: middle; font-size: 18px;\">✕</span>Expensive with top-end options</li></ul></section></div>', 4, 6, '2020-03-02 22:34:23', '2020-08-27 02:18:12'),
(7, 'HP Pavilion x360 14m', '1598519878.jpg', '988', 'This is hp laptop', '<ul style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px 0px 0px 2.5rem; font-size: 1.125rem; line-height: 1.875rem; max-width: 620px; color: rgb(34, 34, 34); font-family: \"Helvetica Neue\", Arial, sans-serif;\"><li dir=\"ltr\" style=\"line-height: 1.45em; margin: 0px 0px 0.5rem; list-style-position: outside; max-width: 620px; padding: 0px;\"><strong style=\"font-weight: bold;\">CPU:</strong> Quad-core Intel Core i5-8265U</li><li dir=\"ltr\" style=\"line-height: 1.45em; margin: 0px 0px 0.5rem; list-style-position: outside; max-width: 620px; padding: 0px;\"><strong style=\"font-weight: bold;\">RAM:</strong> 8GB DDR4</li><li dir=\"ltr\" style=\"line-height: 1.45em; margin: 0px 0px 0.5rem; list-style-position: outside; max-width: 620px; padding: 0px;\"><strong style=\"font-weight: bold;\">GPU:</strong> Integrated Intel UHD Graphics 620</li><li dir=\"ltr\" style=\"line-height: 1.45em; margin: 0px 0px 0.5rem; list-style-position: outside; max-width: 620px; padding: 0px;\"><strong style=\"font-weight: bold;\">Display:</strong> 14-inch 1920 x 1080 IPS touchscreen</li><li dir=\"ltr\" style=\"line-height: 1.45em; margin: 0px 0px 0.5rem; list-style-position: outside; max-width: 620px; padding: 0px;\"><strong style=\"font-weight: bold;\">Storage:</strong> 128GB SSD</li></ul>', 2, 4, '2020-03-02 22:37:12', '2020-08-27 02:17:58'),
(8, 'LG screen 55″ ULTRA HD Commercial TV', '1598519865.jpg', '1400', 'With superb image quality and immersive sound, the LG 86-inch U', '<ol><li style=\"padding: 0px; margin: 0px; list-style: none;\">Content Management/Group Management</li><li style=\"padding: 0px; margin: 0px; list-style: none;\">SuperSign Control</li><li style=\"padding: 0px; margin: 0px; list-style: none;\">SNMP</li><li style=\"padding: 0px; margin: 0px; list-style: none;\">Wake-up On Lan</li><li style=\"padding: 0px; margin: 0px; list-style: none;\">Crestron Connected<span style=\"padding: 0px; margin: 0px; list-style: none; font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;\">®</span> (Network Based Control)</li></ol>', 2, 4, '2020-04-14 19:30:56', '2020-08-27 02:17:45'),
(9, 'LG 86-inch UM76 4K LED LCD AI ThinQ Smart TV', '1598519853.jpg', '900', 'With superb image quality and immersive sound, the LG 86-inch UM76 4K LED LCD AI ThinQ Smart TV offers an immersive entertainment experience when watching your favourite movies and TV series.', '<ul style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 25px; color: rgb(55, 55, 55); font-family: Lato, Arial, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><li style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 20px;\">exceptional detail and a stunning sense of realism</li><li style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 20px;\">Dolby Atmos delivers crisp, three-dimensional sound to accompany the great visuals</li><li style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 20px;\"><br></li></ul>', 1, 1, '2020-04-14 19:32:31', '2020-08-27 02:17:33'),
(10, 'Samsung 32\" N5300 FULL HD Smart LED TV', '1598519841.jpg', '800', 'Samsung 32\" N5300 FULL HD Smart LED TV', '<p>Samsung 32\" N5300 FULL HD Smart LED TV<br></p>', 1, 1, '2020-04-14 19:40:53', '2020-08-27 02:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_user`
--

CREATE TABLE `product_user` (
  `id` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(11, '1598505361.jpg', '2020-08-26 22:16:01', '2020-08-26 22:16:01'),
(13, '1598519754.jpg', '2020-08-27 02:15:54', '2020-08-27 02:15:54'),
(14, '1598519762.jpg', '2020-08-27 02:16:02', '2020-08-27 02:16:02'),
(15, '1598519768.jpg', '2020-08-27 02:16:08', '2020-08-27 02:16:08'),
(16, '1598521176.jpg', '2020-08-27 02:39:36', '2020-08-27 02:39:36'),
(17, '1598521585.jpg', '2020-08-27 02:46:25', '2020-08-27 02:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ms. Girls', '2020-02-29 23:11:37', '2020-08-26 22:03:49'),
(2, 1, 'Ms. Girls 007', '2020-02-29 23:11:37', '2020-08-26 22:04:08'),
(3, 1, 'Ms. Girls AB', '2020-02-29 23:11:37', '2020-08-26 22:04:21'),
(4, 2, 'Ms. Girls 0189', NULL, '2020-08-26 22:04:31'),
(5, 2, 'iphone8', NULL, NULL),
(6, 4, 'Ms. Girls 99', '2020-04-14 19:41:28', '2020-08-26 22:04:52'),
(7, 4, 'Ms. Girls 56', '2020-04-14 19:41:34', '2020-08-26 22:05:08');

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
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chantyAdmin', 'admin@gmail.com', '2020-02-29 23:11:37', '$2y$10$3t/OvPGC.7DPezsOn7Y1Fug3VELpjgQ1YyVy7AgBcR29beZAvD8FS', 1, NULL, '2020-02-29 23:11:37', '2020-02-29 23:11:37'),
(2, 'apple', 'apple@gmail.com', NULL, '$2y$10$4fKTWcco9vLB53KpX.BAcOqyVPEJ9r6DTHQiirZI1T0IooxxdRwKq', 0, NULL, '2020-03-09 21:53:06', '2020-03-09 21:53:06'),
(4, 'rank', 'ranj@gmail.com', NULL, '$2y$10$NRPD3LKo0ox0.cp61neilubauigXjMi.qXSfpT/JEMiR17NUoNOH2', 0, NULL, '2020-03-10 23:24:06', '2020-03-10 23:24:06'),
(5, 'ranj', 'ranjit@gmail.com', NULL, '$2y$10$4ctqos5t9UIgfqCzAlGsmeC1KnHgJsyojC0G0l4M.YRtzPFnce7cm', 0, NULL, '2020-03-28 13:16:38', '2020-03-28 13:16:38'),
(6, 'RANJIT', 'ranjitkarki2@gmail.com', NULL, '$2y$10$zStsC3mGw487pGA9I2Bck.T6C.REAgdaL6dXbRwenn7Ii8hXI7rFi', 0, NULL, '2020-03-28 14:43:56', '2020-03-28 14:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_user`
--
ALTER TABLE `product_user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
