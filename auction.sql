-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2023 at 04:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` bigint(10) NOT NULL,
  `bid_price` int(6) NOT NULL,
  `product_id` bigint(10) NOT NULL,
  `bidder` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `bid_price`, `product_id`, `bidder`) VALUES
(1, 15000, 1, 3),
(2, 20000, 2, 4),
(3, 100000, 3, 2),
(4, 0, 4, 3),
(5, 19000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Clothing'),
(2, 'Watch'),
(3, 'Car'),
(4, 'Electronic'),
(5, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(11) NOT NULL,
  `category_id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(7) NOT NULL,
  `discription` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_owner` int(10) NOT NULL,
  `end_date` date NOT NULL,
  `starting_price` int(6) NOT NULL,
  `current_bid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `discription`, `image`, `product_owner`, `end_date`, `starting_price`, `current_bid`) VALUES
(1, 5, 'iphone7', 1000, 'iPhone, series of smartphones produced by Apple Inc., combining mobile telephone, digital camera, music player, and personal computing technologies.', 'phone5.jpg', 2, '2023-10-09', 0, 19000),
(2, 2, 'rolex', 20000, 'Rolex timepieces are the most reputable and renowned timepieces in the world today. Invented by Hans Wilsdorf in 1908 and branded under the iconic Rolex name in 1915, these watches epitomize timeless elegance and prestige among all luxury watches.', 'wt3.jpg', 2, '2024-04-05', 0, 44),
(3, 4, 'Electric kettle', 1000, 'An electric kettle plugs into an outlet and uses electricity to power an integrated heating element, rather than using a stovetop burner to heat water', 'kettle1.jpg', 1, '2024-04-05', 0, 654),
(4, 1, '', 39, '', '', 1, '2024-04-05', 0, 239);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `address`, `contact_number`, `password`, `username`) VALUES
(1, 'Srijana', 'Rimal', 'Maitidevi', 9857573475, '202cb962ac59075b964b07152d234b70', 'srijanaR'),
(2, 'Krishna', 'Rimal', 'Krishna Mandir, Imadol', 9868957429, 'fghm', 'KrishnaR'),
(3, 'Krishna', 'Rimal', 'Krishna Mandir, Imadol', 9868957429, 'fghm,.', 'KrishnaR'),
(4, 'Tanusa', 'Sharma', 'Dehili', 12345677, '41fcba09f2bdcdf315ba4119dc7978dd', 'Tanu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
