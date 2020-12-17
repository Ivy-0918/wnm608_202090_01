-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 07:12 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ivylin_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `quantity` int(12) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `quantity`, `date_create`, `date_modify`, `image_main`, `image_other`, `image_thumb`, `description`) VALUES
(1, 'GK Burori Vol.3', 'Model_GB', 90.00, 2, '2020-11-09 00:48:48', '2020-11-09 00:48:48', 'DB_GK_Vol.3_1.jpg', 'DB_GK_Vol.3_1.jpg,DB_GK_Vol.3_2.jpg,DB_GK_Vol.3_3.jpg', 'DB_GK_Vol.3_1.jpg', 'models#Decoration#MegaHouse GK series#Dragon Ball#Burori '),
(2, 'GK \r\nSon Gohan Vol.4', 'Model_GB', 71.90, 1, '2020-11-09 00:55:52', '2020-11-09 00:55:52', 'DB_GK_Vol.5_1.jpg', 'DB_GK_Vol.5_1.jpg,DB_GK_Vol.5_2.jpg,DB_GK_Vol.5_3.jpg,DB_GK_Vol.5_4.jpg', 'DB_GK_Vol.5_1.jpg', 'models#Decoration#MegaHouse GK series#Dragon Ball#Son Gohan'),
(4, 'WCF Master Roshi Vol.2', 'Model_GB', 27.55, 4, '2020-11-09 01:05:05', '2020-11-09 01:05:05', 'DB_WCF_Vol.2_1.jpg', 'DB_WCF_Vol.2_1.jpg,DB_WCF_Vol.2_2.jpg,DB_WCF_Vol.2_3.jpg,DB_WCF_Vol.2_4.jpg', 'DB_WCF_Vol.2_1.jpg', 'models#Decoration#MegaHouse WCF series#Dragon Ball#Master Roshi '),
(5, 'P.O.P Furiza Vol.4', 'Model_GB', 74.89, 2, '2020-11-09 01:07:14', '2020-11-09 01:07:14', 'DB_POP_Vol.4_1.jpg', 'DB_POP_Vol.4_1.jpg,DB_POP_Vol.4_2.jpg,DB_POP_Vol.4_3.jpg', 'DB_POP_Vol.4_1.jpg', 'models#Decoration#MegaHouse POP series#Dragon Ball#Furiza '),
(7, 'WCF Monkey D.Luffy Vol.3', 'Model_OP', 97.00, 2, '2020-11-09 01:14:05', '2020-11-09 01:14:05', 'OP_GK_Vol.3_1.jpg', 'OP_GK_Vol.3_1.jpg,OP_GK_Vol.3_2.jpg,OP_GK_Vol.3_3.jpg,OP_GK_Vol.3_4.jpg', 'OP_GK_Vol.3_1.jpg', 'models#Decoration#MegaHouse WCF series#One Piece#Monkey D.Luffy'),
(8, 'WCF Roronoa Zoro Vol.2', 'Model_OP', 88.25, 2, '2020-11-09 01:24:40', '2020-11-09 01:24:40', 'OP_GK_Vol.2_1.jpg', 'OP_GK_Vol.2_1.jpg,OP_GK_Vol.2_2.jpg,OP_GK_Vol.2_3.jpg,OP_GK_Vol.2_4.jpg', 'OP_GK_Vol.2_1.jpg', 'models#Decoration#MegaHouse WCF series#One Piece#Roronoa Zoro'),
(9, 'P.O.P Portgas D. Ace Vol.8', 'Model_OP', 24.90, 1, '2020-11-09 01:26:05', '2020-11-09 01:26:05', 'OP_POP_Vol.8_1.jpg', 'OP_POP_Vol.8_1.jpg,OP_POP_Vol.8_2.jpg,OP_POP_Vol.8_3.jpg,OP_POP_Vol.8_4.jpg,OP_POP_Vol.8_5.jpg', 'OP_POP_Vol.8_1.jpg', 'models#Decoration#MegaHouse POP series#One Piece#Portgas D. Ace'),
(10, 'P.O.P Tony Tony Chopper Vol.6', 'Model_OP', 210.50, 3, '2020-11-09 01:27:15', '2020-11-09 01:27:15', 'OP_POP_Vol.6_1.jpg', 'OP_POP_Vol.6_1.jpg,OP_POP_Vol.6_2.jpg', 'OP_POP_Vol.6_1.jpg', 'models#Decoration#MegaHouse POP series#One Piece#Tony Tony . Chopper'),
(11, 'P.O.P Crocodile Vol.5', 'Model_OP', 110.98, 2, '2020-11-09 01:28:36', '2020-11-09 01:28:36', 'OP_POP_Vol.5_1.jpg', 'OP_POP_Vol.5_1.jpg,OP_POP_Vol.5_2.jpg,OP_POP_Vol.5_3.jpg,OP_POP_Vol.5_4.jpg', 'OP_POP_Vol.5_1.jpg', 'models#Decoration#MegaHouse POP series#One Piece#Crocodile'),
(12, 'Iron Man', 'Toy', 50.00, 3, '2020-11-09 01:29:50', '2020-11-09 01:29:50', 'ironman_2.jpg', 'ironman_2.jpg,ironman_1.jpg,ironman_3.jpg', 'ironman_2.jpg', 'toys#Decoration#Marvel Legends series#Marvel#Iron Man'),
(13, 'Chucky', 'Toy', 14.99, 3, '2020-11-09 01:31:12', '2020-11-09 01:31:12', 'chucky_1.jpg', 'chucky_1.jpg,chucky_2.jpg,chucky_3.jpg', 'chucky_1.jpg', 'toys#Decoration#Horrible Movie series#Action Figure#Chucky'),
(14, 'Mr.Potato Head', 'Toy', 25.00, 1, '2020-11-09 01:32:29', '2020-11-09 01:32:29', 'potato.jpg', 'potato.jpg,potato_1.jpg,potato_2.jpg,potato_3.jpg', 'potato.jpg', 'toys#Decoration#Pixar Movie series#Toy Story#Mr. Potato Head');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
