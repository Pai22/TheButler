-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 10:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butler`
--

-- --------------------------------------------------------

--
-- Table structure for table `community_admin`
--

CREATE TABLE `community_admin` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `post_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `community_admin`
--

INSERT INTO `community_admin` (`id`, `title`, `content`, `post_date`, `user_id`) VALUES
(1, 'ประกาศด่วน', 'น้ำจะไม่ไหลทั้งวัน 1 เมษายน 2567 ขออภัยล่วงหน้า', '2024-04-02 09:46:20', 11);

-- --------------------------------------------------------

--
-- Table structure for table `images_bill`
--

CREATE TABLE `images_bill` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploadde_on` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `images_bill`
--

INSERT INTO `images_bill` (`id`, `file_name`, `uploadde_on`, `user_id`) VALUES
(14, '22.jpg', '2024-04-05 02:43:04', 10),
(15, '33.jpg', '2024-04-05 02:43:52', 9),
(17, '48625E38-B816-466E-86F6-8F9C920DD921.jpg', '2024-04-05 03:57:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_admin`
--

CREATE TABLE `room_admin` (
  `id` int(11) NOT NULL,
  `user_number_room` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room_admin`
--

INSERT INTO `room_admin` (`id`, `user_number_room`, `price`) VALUES
(2, 109, 4086),
(3, 110, 4052),
(4, 105, 4128),
(6, 104, 4280),
(7, 105, 4506);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'maid'),
(2, 'technician');

-- --------------------------------------------------------

--
-- Table structure for table `showservices`
--

CREATE TABLE `showservices` (
  `id` int(11) NOT NULL,
  `date_service` text NOT NULL,
  `time_service` time DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showservices`
--

INSERT INTO `showservices` (`id`, `date_service`, `time_service`, `service_id`, `user_id`) VALUES
(10, '2024-04-23', '15:55:00', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `number_room` int(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` char(10) NOT NULL,
  `email` char(32) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `number_room`, `username`, `password`, `name`, `gender`, `email`, `role`) VALUES
(1, 101, 'R101', 'ce8fce17f94a3e67a09ea48b48d5ac02e55e7b6a', 'emmy', 'f', 'xxxx@gmail.com', 'm'),
(2, 102, 'R102', 'b3626e36c0123c5886ebbfdeed486bd9d19d0cfb', 'Biw', 'f', 'xxxx@gmail.com', 'm'),
(3, 103, 'R103', 'xxx', 'xxx', 'f', 'xxxx@gmail.com', 'm'),
(4, 104, 'R104', 'xxx', 'xxx', 'm', 'xxxx@gmail.com', 'm'),
(5, 105, 'R105', '0f2ce461f7ccca6fd04e33c364cdf251a4ff3815', 'barry', 'm', 'xxxx@gmail.com', 'm'),
(6, 106, 'R106', 'xxx', 'xxx', 'm', 'xxxx@gmail.com', 'm'),
(7, 107, 'R107', 'xxx', 'xxx', 'f', 'xxxx@gmail.com', 'm'),
(8, 108, 'R108', 'xxx', 'xxx', 'f', 'xxxx@gmail.com', 'm'),
(9, 109, 'R109', 'df9639defc0a6e967e11e03c178264631595a9d6', 'PAI', 'f', 'pai555@gmail.com', 'm'),
(10, 110, 'R110', '97734ee6cddb56a110d613fcd96dbadf63645228', 'เตยเตย', 'f', 'toie11@gmail.com', 'm'),
(11, 0, 'admin', '8dc9fa69ec51046b4472bb512e292d959edd2aef', 'admin', 'f', 'xxxx@gmail.com', 'a'),
(12, 0, 'staff', 'e51157a25105c5db6deb0fcc52482ecb5ded2173', 'staff', 'o', 'xxxx@gmail.com', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community_admin`
--
ALTER TABLE `community_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_bill`
--
ALTER TABLE `images_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_admin`
--
ALTER TABLE `room_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showservices`
--
ALTER TABLE `showservices`
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
-- AUTO_INCREMENT for table `community_admin`
--
ALTER TABLE `community_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images_bill`
--
ALTER TABLE `images_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room_admin`
--
ALTER TABLE `room_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `showservices`
--
ALTER TABLE `showservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
