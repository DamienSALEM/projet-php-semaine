-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2021 at 10:36 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vin_sur_vin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nb_people` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `nb_people`, `date_time`) VALUES
(3, 1, 6, '2021-12-22 00:00:00'),
(4, 2, 3, '2021-12-03 00:00:00'),
(5, 2, 4, '2021-12-09 00:00:00'),
(6, 3, 10, '2021-12-04 00:00:00'),
(7, 3, 1, '2021-12-02 00:00:00'),
(8, 3, 1, '2021-12-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Rouge'),
(2, 'Rosé'),
(3, 'Blanc'),
(4, 'Jaune'),
(5, 'Beaujolais'),
(6, 'Champagne');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `user_id` int(11) NOT NULL,
  `cc_name` varchar(50) NOT NULL,
  `cc_number` varchar(16) NOT NULL,
  `cc_expiration` date NOT NULL,
  `cc_cvv` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `origin_country` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `promotion` int(11) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `is_in_menu` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand`, `origin_country`, `stock`, `price`, `promotion`, `image`, `is_in_menu`) VALUES
(1, 'Alsace grand cru Brand vendanges tardives Riesling', 3, 'Rielsling', 'France', 100, 95, NULL, 'https://i2.cdscdn.com/pdt2/1/2/C/1/700x700/BAUMGCPINOG12C.jpg', 1),
(2, '	Domaine de Rochemure 2016 Beaujolais Villages - Vin rouge de Bourgogne', 5, 'Domaine de Rochemure', 'France', 100, 9, NULL, 'https://i2.cdscdn.com/pdt2/N/1/0/1/700x700/CARMEN10.jpg', 1),
(3, 'Château Cheval Blanc - Saint-Emilion 1er Grand Cru Classé - Bordeaux - 2014', 1, 'Château Cheval Blanc', 'France', 100, 3230, NULL, 'https://i2.cdscdn.com/pdt2/1/4/C/1/700x700/CHEVALBLC14C.jpg', 1),
(4, 'Bourgogne La Chapelle Notre-Dame rosé', 2, 'La Chapelle Notre-Dame', 'France', 100, 8, NULL, 'https://i2.cdscdn.com/pdt2/9/3/5/1/700x700/AUC3299641113935.jpg', 1),
(5, 'NICOLAS POTEL 2013 Pouilly Fuissé Vin de Bourgogne - Blanc - 75 cl', 3, 'NICOLAS POTEL', 'France', 100, 18, NULL, 'https://i2.cdscdn.com/pdt2/I/1/3/1/700x700/POTPOUFUI13.jpg', 1),
(6, 'Domaine Christian Gros Ladoix Bourgogne 2013 - Vin rouge', 1, 'Domaine Christian Gros Ladoix', 'France', 100, 101, NULL, 'https://i2.cdscdn.com/pdt2/X/1/3/1/700x700/GROSLADOIX13.jpg', 1),
(7, 'Gisselbrecht - AOC Alsace Gewürztraminer Grand Cru Frankstein VIN BLANC', 3, 'Gisselbrecht ', 'France', 100, 11, NULL, 'https://i2.cdscdn.com/pdt2/1/1/C/1/700x700/GISSELGEWFRAN11C.jpg', 1),
(8, 'Château Beau-Séjour Bécot Saint-Emilion 2007', 1, 'Château Beau-Séjour Bécot', 'France', 100, 49, NULL, 'https://i2.cdscdn.com/pdt2/T/0/7/1/700x700/BBECOT07.jpg', 1),
(9, 'Aurochs 2015 Périgord - Vin rouge du Sud-Ouest', 1, 'Aurochs 2015 Périgord', 'France', 100, 4, NULL, 'https://i2.cdscdn.com/pdt2/R/G/E/1/700x700/AURCHIGPRGE.jpg', 1),
(10, 'MOËT & CHANDON ICE IMPÉRIAL', 6, 'MOËT & CHANDON', 'France', 100, 48, NULL, 'https://www.clos19.com/on/demandware.static/-/Sites-mh-master/default/dw4afcb324/images/large/moet_chandon/packshots/MOET-CHANDON-CHAMPAGNE-ICE-IMPERIAL-75CL-100081_0.jpg', 1),
(11, 'VEUVE CLICQUOT LA GRANDE DAME 2012 BY YAYOI KUSAMA', 6, 'VEUVE CLICQUOT', 'France', 100, 190, NULL, 'https://www.clos19.com/on/demandware.static/-/Sites-mh-master/default/dw87485752/images/large/veuve_clicquot/packshots/VEUVE-CLICQUOT-LA-GRANDE-DAME-2012-LIMITED-EDITION-YAYOI-KUSAMA-75CL-101375_1.jpg?im=Resize,width=408,height=544', 1),
(12, 'Côtes du Jura Vin Jaune Blanc 2011 - La Côte des Loups - Vin AOC Blanc du Jura - 62cl - Cépage Savagnin', 4, 'Cépage Savagnin', 'France', 100, 40, NULL, 'https://m.media-amazon.com/images/I/515hX0+ffdL._AC_SL1500_.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email_address`, `password`) VALUES
(1, 'Thomas', 'Jallu', 'thomas.jallu@gmail.com', 'toto78920');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
