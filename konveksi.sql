-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 11:16 AM
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
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `color_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_shop`
--

CREATE TABLE `product_shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `promotion` text NOT NULL,
  `price` int(11) NOT NULL,
  `discount_price` int(11) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `main_picture` text NOT NULL,
  `svg` text NOT NULL,
  `stock_status` int(11) NOT NULL,
  `show_dashboard` int(11) NOT NULL DEFAULT '0',
  `category` varchar(250) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_shop`
--

INSERT INTO `product_shop` (`id`, `name`, `promotion`, `price`, `discount_price`, `description`, `full_description`, `main_picture`, `svg`, `stock_status`, `show_dashboard`, `category`, `created_date`) VALUES
(1, 'TEST', '', 10000, 0, 'TEST', 'TEST', 'img_thumb20220105161302.jpg', 'M1091.89 706.86c-.73-4-8.21-37.53-8.21-37.53s-4.37-35.14-8.11-48.45-9.46-37.43-9.46-37.43-2-11.33-5.41-16.43-14.87-23.39-24.74-32.23-24.79-15.11-37.91-20.14S970 504.13 967.9 502s-3.57-5.51-5.51-6.32a8.47 8.47 0 0 1-4.21-3.57c-.81-1.46-2.38-4.19-8.4-4.12 0 0-.42 4.68 2.6 6.13s4.68 5.41 5.41 7.49.52 12.27.52 14.45-.42 4.68-2 6-3.85 5.82-19.55 5.41S892 513.18 892 513.18s-27.45-13.31-36.28-21.42-27.55-26.61-27.55-26.61-3.64-4.89-7.07-4a30.67 30.67 0 0 0-7.59 3.85s-5.09-1.66-10.6 2.81S782 479.7 782 479.7l-7.69 2.18-9.77 5.61s-5.41 1.56-8.42 2.5l-31.92 9.88s-7.49.62-9.15 1-9.36 3.33-13 6.76-17.36 12.58-22.46 23-18.92 32.54-24.22 45.43S639.43 613 639.43 613l-8.73 22.35-4.26 8.73s-1 4 .62 5 21.21 23 21.21 23l3-20.27 3.74-3.64s16.53-1.66 24.22-.31 19.75 4 31.81 10.71c0 0 3.12-.1 11.85 18.51 0 0 3 7.28 13.72 16.84 0 0-4.78 41.27-5.61 52.4s-7.17 55.72-8.84 66.23-2.08 11.75-2.08 11.75l-2 62.17s12.27 22.66 22 45.64 25.89 57.28 25.89 57.28l26.16 50.32 15.95 28.9s5.3 10.71 7.49 11.64 5.41 1.87 5.41 1.87.42.83 4.57 1.35 63.63 0 63.63 0l108.62-.47 34.1-.1 1.77-26.72a12.05 12.05 0 0 1-3.53-8.53c-.21-5.72.31-27.55.31-27.55l-1.87-12.06s-.21-6.34-1.14-8.84a168.52 168.52 0 0 0-11.64-22.77s-.52-6.76-1.14-7.8a11 11 0 0 0-1.46-1.87s.21-7.49-.52-9.36-2-6.55-2-6.55l-1.25-9.15.42-35.35 1-13.72s.1-25.47-.62-31.61-.42-17.57-.42-20.9 4.26-19.55 4.26-27.55.73-6.86-.62-18.3 3.74-16.43 3.53-29.73-.73-35.14-.73-35.14 24.85-2.81 36.91-8.32 36.8-10.4 36.8-10.4 2.66.13 1.93-3.82zM714.66 1046.35l-16.86-28.05-1.6-1.6-9.2 47.23s-4.08 15.27-4.44 19-1.42 11.36.89 12.43a24.54 24.54 0 0 0 13.67 3c7.63-.36 10.3-.71 8.52-3.73s-5.63-3.38-5.63-3.38 6.77-3 12.38-3.36 11.36-.18 24.86-7.1c0 0-2.66-5.86-16.16-24.32s-6.43-10.12-6.43-10.12z', 0, 0, ';2;1;', '2021-12-21 02:32:16');

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
