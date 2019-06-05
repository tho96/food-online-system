-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2019 at 07:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_restore`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `email` varchar(30) NOT NULL,
  `qty1` int(10) NOT NULL,
  `qty2` int(10) NOT NULL,
  `qty3` int(10) NOT NULL,
  `qty4` int(10) NOT NULL,
  `qty5` int(10) NOT NULL,
  `qty6` int(10) NOT NULL,
  `qty7` int(10) NOT NULL,
  `qty8` int(10) NOT NULL,
  `qty9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`) VALUES
('vn@gmail.com', 1, 1, 0, 0, 1, 0, 0, 0, 0),
('vn199@gmail.com', 0, 0, 7, 0, 0, 0, 0, 0, 0),
('vn199@gmail.com', 0, 0, 1, 1, 1, 1, 0, 0, 1),
('new1@testing.com', 2, 0, 0, 0, 0, 0, 0, 0, 0),
('new1@testing.com', 1, 0, 0, 0, 0, 0, 0, 0, 0),
('new1@testing.com', 1, 0, 0, 0, 0, 0, 0, 0, 0),
('new1@testing.com', 2, 0, 0, 0, 0, 0, 0, 0, 0),
('new1@testing.com', 0, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `php_users_login`
--

CREATE TABLE `php_users_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `php_users_login`
--

INSERT INTO `php_users_login` (`id`, `email`, `password`, `last_login`) VALUES
(32, 'sar@gmaill.com', 'sa', '2019-05-17 16:55:50'),
(33, 'arc@gmail.com', 'ar', '2019-05-17 16:55:50'),
(35, 'vn@gmail.com', 'vn9', '2019-05-17 16:55:50'),
(37, 'test@gmail.com', '$2y$10$jQ4uKzEfKz5SbTlkFxjDDubxTft.QmwVrsiroP4StqtA9QIeUR4Ie', '2019-05-17 16:55:50'),
(38, 'abc@gmail.com', '$2y$10$.gr5YyCjBMbwbcrmyN7GdeKjsN0hx1wZZSrA9JGGSp6mdUqQ7RGeW', '2019-05-17 16:55:50'),
(39, 'example@yahoo.com', '$2y$10$IfKGbcnmWUnoEaIpJV3Miujxyrv0LKX0g8Zmy6ygjqlN74HVWQggK', '2019-05-17 16:55:50'),
(40, 'test@gmail.com', '$2y$10$xFT8DbF3kamPGhHxZlONAeXLETKyLd4Iqg4ugGYDVQ6bwXQvbPMiO', '2019-05-17 16:55:50'),
(41, '123@a.com', '$2y$10$qFoCu.7XOJq19MFosE7JzOsUEVo9MozM9iGzvTxg4TLceNEHLoaTe', '2019-05-17 16:55:50'),
(42, 'a@gmail.com', '$2y$10$zq7hT4zJ1raWr/XZGJX/ZeZEgSKAtc9VpSO2jdl.AzZ4ib8Bwa5IO', '2019-05-17 16:55:50'),
(45, '987@abc.com', '$2y$10$c3sSBo6E5kn1JzvnRRTViOlFhROHiNMLxsARHsRvh.Mp/rRPssty6', '2019-05-17 16:55:50'),
(46, 'new@testing.com', '$2y$10$uILZDj3dVrQj59BzyIvJg.ItvlIlJNsM8f0gb3D1xQCZnPCrKUDUm', '2019-05-17 16:55:50'),
(47, 'new1@testing.com', '$2y$10$t6bMyAgp6ZC06HJlEwhlJ.oZw9gbaw8nLqOKdGXIq3/yogSUUYzuS', '2019-05-17 16:55:50'),
(48, 'new2@testing.com', '$2y$10$6opTSE..m4tj7GYUNJYYqO0Y38SRW9uTiZg5UWfpfQv47n6UhSZ/i', '2019-05-17 16:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `cpw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `location`, `mob`, `addr`, `email`, `pw`, `cpw`) VALUES
('Sa', 'Nar', 'Orange', '9120852312', 'D/202, Thakur Village', 'sar@gmaill.com', 'sar', 'sar'),
('Ar', 'Mas', 'Fullerton', '9012654732', 'C/308, Raheja Apartments', 'arc@gmail.com', 'ar', 'arr'),
('Vt', 'Ne', 'Los Angeles', '9512456745', 'A/401, Rose Villa', 'vn9@gmail.com', 'vi', 'vin'),
('Chloe', 'Ho', '', '', '', '', '', ''),
('Chloe', 'Ho', 'Los Angeles', '1234567890', '123', 'test@gmail.com', '$2y$10$jQ4uKzEfKz5SbTlkFxjDDub', '1'),
('Nguyen', 'A', 'Orange', '1234567890', '123', 'abc@gmail.com', '$2y$10$.gr5YyCjBMbwbcrmyN7GdeK', '1'),
('lily', 'N', 'Fullerton', '1234567890', '123', 'example@yahoo.com', '$2y$10$IfKGbcnmWUnoEaIpJV3Miuj', '987654321'),
('a', 'b', 'Los Angeles', '1234567890', '123', 'test@gmail.com', '$2y$10$xFT8DbF3kamPGhHxZlONAeX', '1'),
('a', 'b', 'Los Angeles', '1234567890', '123', '123@a.com', '$2y$10$qFoCu.7XOJq19MFosE7JzOs', ''),
('a', 'b', 'Los Angeles', '1234567890', '123', 'a@gmail.com', '$2y$10$zq7hT4zJ1raWr/XZGJX/ZeZ', ''),
('a', 'ndzkbn', 'Los Angeles', '1234567890', '123', '123@abc.com', '987654321', '987654321'),
('sfba', 'adfbadf', 'Los Angeles', '1234567890', '123', '123@bcd.com', '$2y$10$lAXzzrQzS88eTYZa6UmUKOY', '123456789'),
('afdsgvaeds', 'asvasvasfva', 'Orange', '1234567890', '123', '987@abc.com', '$2y$10$c3sSBo6E5kn1JzvnRRTViOl', '987654321'),
('chloe', 'ho', 'Orange', '1234657890', '123', 'new@testing.com', '$2y$10$uILZDj3dVrQj59BzyIvJg.I', '$2y$10$eA//2XMe/RaJr9R7RJtsJed'),
('John', 'Doe', 'Orange', '1234567890', '23abc', 'new1@testing.com', '$2y$10$t6bMyAgp6ZC06HJlEwhlJ.o', '$2y$10$DUhlA3O0GgQ0IWCV/k7jEOj'),
('Jessica', 'A', 'Fullerton', '1234567890', '123bcd', 'new2@testing.com', '$2y$10$6opTSE..m4tj7GYUNJYYqO0', '$2y$10$dcgfAe/qyL9PDPhmVFObkeH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_users_login`
--
ALTER TABLE `php_users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_users_login`
--
ALTER TABLE `php_users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
