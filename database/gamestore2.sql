-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 05:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Rony talukdar', 'rontal', '$2y$10$LpS/Q3TH9Iz3GF8HUeV55uHdlcgV.3Fj1l76xP0rRwhShfALBl0dW'),
(3, 'faraz rofu', 'faro', '$2y$10$sZ4fFK9JMp/KLiU3Xaw7y..OyP2.edLVkfziwhDvNu.NzH21Da.re');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `active` varchar(10) NOT NULL,
  `featured` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`, `active`, `featured`) VALUES
(1, 'Action Games', 'yMzgIO.jpg', 'true', ''),
(2, 'Racing Games', 'Racing1.jpg', 'true', ''),
(3, 'Sports Games', 'sports.jpg', 'true', ''),
(4, 'FPS', 'FPS.jpg', 'true', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(256) NOT NULL,
  `category` varchar(255) NOT NULL,
  `total_sell` int(100) NOT NULL,
  `active` varchar(10) NOT NULL,
  `exclusive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `price`, `image`, `category`, `total_sell`, `active`, `exclusive`) VALUES
(1, 'GTA 5', 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond.', 2000, 'gta.jpg', 'Action Games', 2, 'true', ''),
(2, 'Call of Duty: MW', 'The iconic first-person shooter game is back! Cross play, free maps and modes, and new engine deliver the largest technical leap in Call of Duty history.', 1500, 'cod.jpg', 'Racing Games', 1, 'true', 'true'),
(3, 'PUBG', 'PUBG is a battle royal shooter that pits 100 players against each other in a struggle for survival. Its platforms and voice support and movements beyond gaming universe.', 1200, 'pubg.jpg', 'FPS', 1, 'true', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` int(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `game_id` int(100) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` int(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `game_id`, `order_date`, `total_price`, `status`) VALUES
(1, 'rock', 'rocky@gmail.com', 1999911111, 'dhaka dhaka', 1, '2021-08-23', 2000, 'confirm'),
(2, 'star', 'rocky@gmail.com', 414141, 'dhaka dhaka', 0, '2021-08-23', 2000, ''),
(3, 'Gazi ', 'da@gmail.com', 414141, 'dhaka dhaka', 1, '2021-08-23', 2000, ''),
(4, 'Gazi Tra', 'rm007@nomail.c', 414141, 'dhaka dhaka', 1, '2021-08-23', 2000, ''),
(5, 'rajuuu', 'rajumai.@notmail.com', 183222222, 'CTG CTG', 2, '2021-08-23', 1500, ''),
(6, 'rafio', 'rafio@gmail.com', 2147483647, 'CTG CTG', 3, '2021-08-23', 1200, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
