-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 12, 2024 at 09:23 PM
-- Server version: 5.7.44
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Producten`
--

CREATE TABLE `Producten` (
  `id` int(255) NOT NULL,
  `naam` text NOT NULL,
  `prijs` double NOT NULL,
  `omschrijving` text NOT NULL,
  `gram` double NOT NULL,
  `voedingswaarden` text NOT NULL,
  `recensies` text NOT NULL,
  `tht` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Producten`
--

INSERT INTO `Producten` (`id`, `naam`, `prijs`, `omschrijving`, `gram`, `voedingswaarden`, `recensies`, `tht`) VALUES
(11105, 'Banaan', 2.19, 'Geel', 1000, '', 'Zijn lekkere zoeten banaan', '2024-05-08'),
(11106, 'Aardbei', 3.49, 'Lekkere mooi rood', 250, '', 'Best wel duur', '2024-05-08'),
(11110, 'Watermeloen', 2, 'lekker sappig', 1000, '', 'Lekker zoet', '2024-05-08'),
(11113, 'Banaan', 2.19, 'Geel', 1000, '', 'Zijn lekkere zoeten banaan', '2024-05-08'),
(11114, 'Aardbei', 3.49, 'Lekkere mooi rood', 250, '', 'Best wel duur', '2024-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'awa', 'ashiodihdih@live.nl', 'awa'),
(10, 'Abdelilah', 'abdelilahbenhaddi024@gmail.com', 'awa'),
(11, 'esgdrfchgvhb', 'qEA@WSRDTFYGUHJI', 'sdfxcgh'),
(12, 'admin', 'admin', 'admin'),
(13, 'Sanji024', 'Vinsmoke@hotmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Producten`
--
ALTER TABLE `Producten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Producten`
--
ALTER TABLE `Producten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
