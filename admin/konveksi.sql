-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 10:38 AM
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
(30, 'Habib Syuhada', 'habibsyuhada.1109@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-02-22 07:50:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`link`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
