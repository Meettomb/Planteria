-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 06:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pid` varchar(255) DEFAULT NULL,
  `p_image` varchar(150) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `main_price` varchar(255) DEFAULT NULL,
  `dis_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `uid`, `uname`, `email`, `pid`, `p_image`, `product_name`, `main_price`, `dis_price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, '11', 'abc', 'b@b.b', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(2, '11', 'abc', 'b@b.b', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(3, '12', 'abc', 'b@b.c', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(4, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(5, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(6, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(7, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(8, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(9, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(10, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(11, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(12, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(13, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(14, '14', 'Meet', 'Patel@gmail.com', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(15, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(16, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(17, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(18, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(19, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(20, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(21, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(22, '14', 'Meet', 'Patel@gmail.com', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(23, '12', 'abc', 'b@b.c', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(24, '12', 'abc', 'b@b.c', '26', 'plant_packeg1.jpg', '4 Best Indoor Plants Pack', '3000', '2000', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
