-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 12:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_project_1`
--

CREATE TABLE `users_project_1` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default-img.jpg',
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_project_1`
--

INSERT INTO `users_project_1` (`id`, `name`, `email`, `image`, `password`) VALUES
(1, 'Admin', 'poryniqud@mailinator.com', '1-Admin-2023-09-17.png', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'qaviruv', 'nyfysalab@mailinator.com', 'default-img.jpg', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(3, 'koroxekijy', 'wuxa@mailinator.com', 'default-img.jpg', 'f3ed11bbdb94fd9ebdefbaf646ab94d3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_project_1`
--
ALTER TABLE `users_project_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_project_1`
--
ALTER TABLE `users_project_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
