-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2026 at 01:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawfect_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$FeSZCZV2dSB46KpouN.8EemCmsBl3wRtg7OE7Li/oEYPJz172wkny', '2026-03-02 21:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `order_date`, `status`) VALUES
(1, 1, 0.00, '2026-03-01 20:25:40', 'Cancelled'),
(2, 1, 0.00, '2026-03-01 20:26:31', 'Cancelled'),
(3, 1, 335.57, '2026-03-01 20:33:03', 'Cancelled'),
(4, 1, 335.57, '2026-03-01 20:34:23', 'Cancelled'),
(5, 1, 335.57, '2026-03-01 20:39:55', 'Cancelled'),
(6, 1, 460.06, '2026-03-01 20:40:35', 'Cancelled'),
(7, 1, 635.24, '2026-03-01 20:47:11', 'Pending'),
(8, 1, 98.50, '2026-03-01 20:49:34', 'Pending'),
(9, 1, 51.98, '2026-03-01 20:50:11', 'Pending'),
(10, 1, 25.99, '2026-03-01 20:51:29', 'Completed'),
(11, 1, 25.99, '2026-03-01 20:53:13', 'Cancelled'),
(12, 1, 101.38, '2026-03-02 23:42:45', 'Pending'),
(13, 1, 27.00, '2026-03-02 23:58:39', 'Pending'),
(14, 1, 40.50, '2026-03-09 17:01:46', 'Pending'),
(15, 1, 301.78, '2026-03-18 23:30:10', 'Pending'),
(16, 1, 1750.88, '2026-03-19 00:27:49', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_name`, `price`, `quantity`, `image`) VALUES
(1, 1, '', 0.00, 1, ''),
(2, 1, '', 0.00, 2, ''),
(3, 2, '', 0.00, 1, ''),
(4, 2, '', 0.00, 1, ''),
(5, 2, '', 0.00, 1, ''),
(6, 7, 'Pet Harness', 13.50, 3, 'harness.jpg'),
(7, 7, 'Pet Toy', 50.69, 4, 'pet-toy.jpg'),
(8, 7, 'Pet Cage', 85.00, 4, 'cage.jpg'),
(9, 7, 'Pet Food', 25.99, 2, 'pet-food.jpg'),
(10, 8, 'Pet Cage', 85.00, 1, 'cage.jpg'),
(11, 8, 'Pet Harness', 13.50, 1, 'harness.jpg'),
(12, 9, 'Pet Food', 25.99, 2, 'pet-food.jpg'),
(13, 10, 'Pet Food', 25.99, 1, 'pet-food.jpg'),
(14, 11, 'Pet Food', 25.99, 1, 'pet-food.jpg'),
(15, 12, 'Pet Toy', 50.69, 2, 'pet-toy.jpg'),
(16, 13, 'Pet Harness', 13.50, 2, 'harness.jpg'),
(17, 14, 'Pet Harness', 13.50, 3, 'harness.jpg'),
(18, 15, 'PSP', 150.89, 2, 'psp.jpg'),
(19, 16, 'Virtual Reality', 999.99, 1, 'vr.jpg'),
(20, 16, 'Switch Pro', 750.89, 1, 'switch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT 0.0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category`, `rating`, `created_at`) VALUES
(9, 'PlayStation 5', 'Super intriguing', 250.99, 'ps5.jpg', 'console', 4.5, '2026-03-18 23:10:22'),
(10, 'Nintendo Switch', 'Sci-Fi games', 499.99, 'nitendo.jpg', 'console', 4.5, '2026-03-18 23:10:22'),
(11, 'Xbox 360', 'Best visuals', 809.29, 'xbox.jpg', 'console', 4.8, '2026-03-18 23:10:22'),
(12, 'Virtual Reality', 'Over the moon feeling', 999.99, 'vr.jpg', 'console', 4.5, '2026-03-18 23:10:22'),
(13, 'Switch Pro', 'Best visual experience', 750.89, 'switch.jpg', 'console', 5.0, '2026-03-18 23:10:22'),
(14, 'Xbox Controller', 'Best quality controllers', 125.00, 'xboxcharger.jpg', 'accessory', 5.0, '2026-03-18 23:10:22'),
(15, 'VR Controllers', 'Top notch controllers', 300.50, 'vrgames.jpg', 'accessory', 5.0, '2026-03-18 23:10:22'),
(16, 'PSP', 'Portable gaming device', 150.89, 'psp.jpg', 'console', 5.0, '2026-03-18 23:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `dob`, `created_at`) VALUES
(1, 'Daniel', 'Ifeanyi', 'ifidaniel3@gmail.com', '$2y$10$8ZvEJfRF23CHXq8s/ybBeOYr48/6PnlB.iXf3M2J7Sv8/H6q74dBy', '07825292964', '2020-04-24', '2026-02-28 23:19:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
