-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 05:59 PM
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
(2, 'Call of Duty: MW', 'The iconic first-person shooter game is back! Cross play, free maps and modes, and new engine deliver the largest technical leap in Call of Duty history.', 1500, 'cod.jpg', 'Racing Games', 2, 'true', 'true'),
(3, 'PUBG', 'PUBG is a battle royal shooter that pits 100 players against each other in a struggle for survival. Its platforms and voice support and movements beyond gaming universe.', 1200, 'pubg.jpg', 'FPS', 1, 'true', 'true'),
(7, 'New game updated', 'this ie jfh the nexr to do theuks hdpp hosd siodl kj f edf efsdf s', 1200, '5494392.jpg', 'Maxyy Games', 0, 'true', 'true'),
(8, 'tik tak toe', 'this ie jfh the nexr to do theuks hdpp hosd siodl kj f edf efsdf s', 500, 'FPS.jpg', 'Maxyy Games', 0, 'true', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
