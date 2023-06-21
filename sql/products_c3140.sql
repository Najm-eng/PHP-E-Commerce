-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 02:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_c3140`
--

CREATE TABLE `products_c3140` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_c3140`
--

INSERT INTO `products_c3140` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Men Fossil Wirstwatch', 'watch1', 'images/product-8.jpg', '499.00'),
(2, 'Men Roadster 2021', 'watch2', 'images/product-9.jpg', '769.99'),
(3, 'Slim Smart Watch', 'watch3', 'images/exclusive.png', '350.99'),
(4, 'Apple Watch', 'watch4', 'images/apple.jpg', '699.00'),
(5, 'Men letter patch decor slip-on running shoes', 'shoes1', 'images/product-11.jpg', '79.99'),
(6, 'Men letter graphic lace-up running shoes', 'shoes2', 'images/product-10.jpg', '149.99'),
(7, 'Men stitch detail lace-up front running shoes', 'shoes3', 'images/product-2.jpg', '149.99'),
(8, 'Men slogan graphic lace-up front high top skate shoes', 'shoes4', 'images/product-5.jpg', '129.00'),
(9, 'Men lace-up front running shoes', 'shoes5', 'images/category-1.jpg', '128.00'),
(10, 'white Men lace-up front running shoes6', 'shoes', 'images/product-12.jpg', '128.00'),
(11, 'Men lace-up front skate shoes', 'shoes7', 'images/product-16.jpg', '89.99'),
(12, 'Men graohic detail lace-up chunky sneakers', 'shoes8', 'images/product-15.jpg', '219.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
