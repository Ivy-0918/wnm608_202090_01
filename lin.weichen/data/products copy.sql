-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2020 at 01:37 AM
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
  `catergory` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `quantity` int(12) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `catergory`, `price`, `quantity`, `date_create`, `date_modify`, `image_main`, `image_other`, `image_thumb`, `description`, `url`) VALUES
(1, 'GK Vol.2', 'model', 90.00, 2, '2020-11-09 00:48:48', '2020-11-09 00:48:48', 'img/DB/GK/Vol.2_main.jpg', 'img/DB/GK/Vol.2_1.jpg', 'img/DB/GK/Vol.2_t.jpg', 'models#Decoration#MegaHouse GK series#Dragon Ball#Son Goku', 'https://db_gk_vol2.com'),
(2, 'GK Vol.4', 'model', 71.90, 1, '2020-11-09 00:55:52', '2020-11-09 00:55:52', 'img/DB/GK/Vol.4_main.jpg', 'img/DB/GK/Vol.4_1.jpg', 'img/DB/GK/Vol.4_t.jpg', 'models#Decoration#MegaHouse GK series#Dragon Ball#Bulma', 'https://db_gk_vol4.com'),
(4, 'WCF Vol.2', 'model', 27.55, 4, '2020-11-09 01:05:05', '2020-11-09 01:05:05', 'img/model_DB_WCF Vol.2_main.jpg', 'img/model_DB_WCF Vol.2_1.jpg,img/model_DB_WCF Vol.2_2.jpg', 'img/model_DB_WCF Vol.2_t.jpg', 'models#Decoration#MegaHouse WCF series#Dragon Ball#Vegeta', 'https://WCF.com'),
(5, 'P.O.P Vol.3', 'model', 74.89, 2, '2020-11-09 01:07:14', '2020-11-09 01:07:14', 'img/model_DB_P.O.P Vol.3_main.jpg', 'img/model_DB_P.O.P Vol.3_1.jpg,img/model_DB_P.O.P Vol.3_2.jpg', 'img/model_DB_P.O.P Vol.3_t.jpg', 'models#Decoration#MegaHouse POP series#Dragon Ball#Trunks', 'https://pop.com'),
(7, 'WCF Vol.3', 'model', 97.00, 2, '2020-11-09 01:14:05', '2020-11-09 01:14:05', 'img/OP/WCF/Vol.3_main.jpg', 'img/OP/WCF/Vol.3_1.jpg', 'img/OP/WCF/Vol.3_t.jpg', 'models#Decoration#MegaHouse WCF series#One Piece#Franky', 'https://op_wcf_vol.3.com'),
(8, 'WCF Vol.4', 'model', 88.25, 2, '2020-11-09 01:24:40', '2020-11-09 01:24:40', 'img/OP/WCF/Vol.4_main.jpg', 'img/OP/WCF/Vol.4_1.jpg', 'img/OP/WCF/Vol.4_t.jpg', 'models#Decoration#MegaHouse WCF series#One Piece#Animal Kingdom', 'https://op_wcf_vol4.com'),
(9, 'P.O.P Vol.5', 'model', 24.90, 1, '2020-11-09 01:26:05', '2020-11-09 01:26:05', 'img/OP/POP/Vol.5_main.jpg', 'img/OP/POP/Vol.5_1.jpg', 'img/OP/POP/Vol.5_t.jpg', 'models#Decoration#MegaHouse POP series#One Piece#Monkey D Luffy', 'https://op_pop_vol5.com'),
(10, 'P.O.P Vol.8', 'model', 210.50, 3, '2020-11-09 01:27:15', '2020-11-09 01:27:15', 'img/OP/POP/Vol.8_main.jpg\r\n', 'img/OP/POP/Vol.8_1.jpg', 'img/OP/POP/Vol.8_t.jpg', 'models#Decoration#MegaHouse POP series#One Piece#Roronoa. Sauron', 'https://op_pop_vol8.com'),
(11, 'GK Vol.7', 'model', 110.98, 2, '2020-11-09 01:28:36', '2020-11-09 01:28:36', 'img/OP/GK/Vol.7_main.jpg\r\n', 'img/OP/GK/Vol.7_1.jpg\r\n', 'img/OP/GK/Vol.7_t.jpg\r\n', 'models#Decoration#MegaHouse DK series#One Piece#Nami', 'https://op_gk_vol7.com'),
(12, 'Iron Man', 'toy', 50.00, 3, '2020-11-09 01:29:50', '2020-11-09 01:29:50', 'img/ironman_main.jpg', 'img/ironman_1.jpg', 'img/ironman_t.jpg', 'toys#Decoration#Marvel Legends series#Marvel#Iron Man', 'https://iron_man.com'),
(13, 'Chucky', 'toy', 14.99, 3, '2020-11-09 01:31:12', '2020-11-09 01:31:12', 'img/chucky_main.jpg', 'img/chucky_1.jpg', 'img/chucky_t.jpg', 'toys#Decoration#Horrible Movie series#Action Figure#Chucky', 'https://chucky.com'),
(14, 'Mr.Potato Head', 'toy', 25.00, 1, '2020-11-09 01:32:29', '2020-11-09 01:32:29', 'img/potato_main.jpg', 'img/potato_1.jpg', 'img/potato_t.jpg', 'toys#Decoration#Pixar Movie series#Toy Story#Mr. Potato Head', 'https://potato_head.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
