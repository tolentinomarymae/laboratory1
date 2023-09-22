-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2023 at 12:32 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

DROP TABLE IF EXISTS `table_category`;
CREATE TABLE IF NOT EXISTS `table_category` (
  `ProductCategory` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`ProductCategory`) VALUES
('Furniture'),
('Home Decor'),
('Kitchen'),
('Groceries'),
('Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

DROP TABLE IF EXISTS `table_products`;
CREATE TABLE IF NOT EXISTS `table_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ProductName` text NOT NULL,
  `ProductDescription` text NOT NULL,
  `ProductCategory` text NOT NULL,
  `ProductQuantity` int NOT NULL,
  `ProductPrice` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`id`, `ProductName`, `ProductDescription`, `ProductCategory`, `ProductQuantity`, `ProductPrice`) VALUES
(1, 'Cellphone', 'fasddfs', 'Electronics', 25, 800),
(2, 'Jeans', 'fsdfsfsf', 'Fashion', 50, 100),
(3, 'Paracetamol', 'dfjshjdgdg', 'Health & Wellness', 54, 200),
(4, 'Sunglass', 'dfsdfsfsfsf', 'Fashion', 2, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
