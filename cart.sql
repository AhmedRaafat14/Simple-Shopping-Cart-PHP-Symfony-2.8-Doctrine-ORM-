-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 10:41 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BA388B7A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(2, 'mohand', 'mohand', 'ahmed.raafat1412@gmail.com', 'ahmed.raafat1412@gmail.com', 1, NULL, '$2y$13$22S5tUh2SgpjuWYiRH/Wceee.wtLzMpNYqM.YLvaSH0pyUBh66d8i', '2017-04-07 20:06:01', NULL, NULL, 'a:0:{}'),
(3, 'raafat', 'raafat', 'ahmed.raafat@gmail.com', 'ahmed.raafat@gmail.com', 1, NULL, '$2y$13$cQNl7n7FU4fxiSJuPjF8reUnFBDXYcQnSj3OGVVXG1vN93XhfFb5W', '2017-04-05 09:26:15', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `path`, `date`) VALUES
(1, 'test 1', 100.00, 'test 1', '1.jpg', '2017-04-04'),
(2, 'test 2', 200.00, 'test 2', '2.jpg', '2017-03-07'),
(3, 'test 3', 300.00, 'test 3', '3.jpg', '2017-04-02'),
(4, 'test 4', 400.00, 'test 4', '4.jpg', '2017-04-17'),
(5, 'test 5', 500.00, 'test 5', '5.jpg', '2017-04-10'),
(6, 'test 6', 600.00, 'test 6', '6.jpg', '2017-04-10'),
(7, 'test 7', 700.00, 'test 7', '7.jpg', '2017-04-10'),
(8, 'test 8', 800.00, 'test 8', '8.jpg', '2017-04-25'),
(9, 'test 9', 900.00, 'test 9', '9.jpg', '2017-04-03'),
(10, 'test 10', 10000.00, 'test 10', '10.jpg', '2017-04-01'),
(11, 'test 11', 10000.00, 'test 11', '10.jpg', '2017-04-01'),
(12, 'test 12', 10000.00, 'test 12', '10.jpg', '2017-04-01'),
(13, 'test 13', 10000.00, 'test 13', '10.jpg', '2017-04-01'),
(14, 'test 14', 600.00, 'test 14', '6.jpg', '2017-04-10'),
(15, 'test 15', 700.00, 'test 15', '7.jpg', '2017-04-10'),
(16, 'test 16', 300.00, 'test 16', '3.jpg', '2017-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`cart_id`),
  KEY `IDX_2D1C17244584665A` (`product_id`),
  KEY `IDX_2D1C17241AD5CDBF` (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_BA388B7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `FK_2D1C17241AD5CDBF` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `FK_2D1C17244584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
