-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2025 at 07:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12
USE web;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Gallery'),
(2, 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `cate_img`
--

CREATE TABLE `cate_img` (
  `cate_img_id` int(11) NOT NULL,
  `path_img` varchar(45) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cate_img`
--

INSERT INTO `cate_img` (`cate_img_id`, `path_img`, `category_id`) VALUES
(1, 'IMG_2191.JPG', 1),
(2, '2023_09_04_20_34_IMG_5045.JPG', 1),
(3, '2023_05_05_20_47_IMG_4438.JPG', 1),
(4, '2023_07_23_18_16_IMG_4985.JPG', 1),
(5, '2023_07_23_18_16_IMG_4986.JPG', 1),
(6, '2023_08_09_21_41_IMG_5012.JPG', 1),
(7, '2023_08_26_20_43_IMG_5041.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `phone`, `description`) VALUES
(1, 'Lê Trung Kiên', 'letrungkien3_t66@hus.edu.vn', '0353693404', 'Vipro'),
(2, 'Trịnh Quang Vinh', 'trinhquangvinh_t66@hus.edu.vn', '0123456789', 'Gà'),
(3, 'Phạm Thu Thủy', 'phamthuthuy_t66@hus.edu.vn', '0383683783', 'Xinh gái');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate_img`
--
ALTER TABLE `cate_img`
  ADD PRIMARY KEY (`cate_img_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cate_img`
--
ALTER TABLE `cate_img`
  MODIFY `cate_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cate_img`
--
ALTER TABLE `cate_img`
  ADD CONSTRAINT `cate_img_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
