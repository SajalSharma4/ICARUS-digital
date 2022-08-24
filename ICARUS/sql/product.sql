-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 01:04 PM
-- Server version: 8.0.28
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `price` varchar(200) NOT NULL,
  `demand` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `img`, `price`, `demand`, `date`) VALUES
(1, 'Lenovo IdeaPad Gaming 3i', 'Lenovo_Ideapad.jpg', '65890', 1200, '2022-08-23 07:59:20'),
(2, 'Dell Inspiron 16 Laptop', 'Dell_Inspiron.jpg', '67999', 876, '2022-08-23 07:59:40'),
(3, 'boAt Rockerz 450', 'Boat_Rockerz_450.jpg', '1499', 298, '2022-08-23 08:00:24'),
(4, 'Sennheiser HD 820', 'Sennheiser_HD_820.jpg', '14999', 578, '2022-08-23 07:59:55'),
(5, 'Samsung Galaxy Buds2 Pro', 'Samsung_Galaxy_Buds2_Pro.jpg', '16999', 402, '2022-08-23 08:00:20'),
(6, 'Logitech G102 Gaming Mouse', 'Logitech_G102.jpg', '1999', 1002, '2022-08-23 07:59:35'),
(7, 'iball FREEGO G100', 'iball_FREEGO_G100.jpg', '749', 317, '2022-08-23 08:00:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
