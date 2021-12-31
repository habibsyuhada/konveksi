-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 08:59 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konveksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `show_dashboard` int(11) NOT NULL DEFAULT '0',
  `status_delete` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `show_dashboard`, `status_delete`) VALUES
(1, 'Jaket', 0, 1),
(2, 'Kaos', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture_thumb` varchar(255) NOT NULL,
  `picture_main` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`link`, `name`, `picture_thumb`, `picture_main`, `category`, `price`, `description`, `created_date`) VALUES
('kaos', 'Kaos', 'img_kaos_thumb.jpg', 'img_kaos_main.jpg', 'Kaos', 10000, 'Bla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla BlaBla Bla', '2021-02-22 15:03:08'),
('kemeja', 'kemeja', 'img_kemeja_thumb.jpg', 'img_kemeja_main.jpg', 'Kaos', 123123, 'asd', '2021-02-22 15:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_shop`
--

CREATE TABLE `product_shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount_price` int(11) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `main_picture` text NOT NULL,
  `stock_status` int(11) NOT NULL,
  `show_dashboard` int(11) NOT NULL DEFAULT '0',
  `category` varchar(250) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_shop`
--

INSERT INTO `product_shop` (`id`, `name`, `price`, `discount_price`, `description`, `full_description`, `main_picture`, `stock_status`, `show_dashboard`, `category`, `created_date`) VALUES
(1, 'TEST', 10000, 0, 'TEST', 'TEST', 'img_thumb20211221093216.jpg', 0, 0, ';2;1;', '2021-12-21 02:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_date`) VALUES
(30, 'Habib Syuhada', 'habibsyuhada.1109@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-02-22 07:50:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`link`);

--
-- Indexes for table `product_shop`
--
ALTER TABLE `product_shop`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_shop`
--
ALTER TABLE `product_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
