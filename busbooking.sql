-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `busname` text DEFAULT NULL,
  `pickuploc` text DEFAULT NULL,
  `droploc` text DEFAULT NULL,
  `pickuptime` text DEFAULT NULL,
  `droptime` text DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `count` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `available` text DEFAULT NULL,
  `single` text DEFAULT NULL,
  `busid` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `busname`, `pickuploc`, `droploc`, `pickuptime`, `droptime`, `duration`, `rating`, `count`, `price`, `available`, `single`, `busid`) VALUES
(1, 'IntriCity SmartBus', 'London', 'Scotland', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '001'),
(2, 'BSR Tours & Travels', 'London', 'Paris', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '002'),
(3, 'Sri Krishna Travels', 'London', 'New Castle', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '003'),
(4, 'IntriCity SmartBus', 'Scotland', 'London', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '004'),
(5, 'BSR Tours & Travels', 'Scotland', 'Paris', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '005'),
(6, 'Sri Krishna Travels', 'Scotland', 'New Castle', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '006'),
(7, 'IntriCity SmartBus', 'Paris', 'London', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '007'),
(8, 'BSR Tours & Travels', 'Paris', 'Scotland', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '008'),
(9, 'Sri Krishna Travels', 'Paris', 'New Castle', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '009'),
(10, 'IntriCity SmartBus', 'New Castle', 'London', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '010'),
(11, 'BSR Tours & Travels', 'New Castle', 'Scotland', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '011'),
(12, 'Sri Krishna Travels', 'New Castle', 'Paris', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '012'),
(13, 'BSR Tours & Travels', 'London', 'Scotland', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '013'),
(14, 'Sri Krishna Travels', 'London', 'Scotland', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '014'),
(15, 'Vikram Travels', 'London', 'Scotland', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '015'),
(16, 'BSR Tours & Travels', 'London', 'Paris', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '016'),
(17, 'Sri Krishna Travels', 'London', 'Paris', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '017'),
(18, 'Vikram Travels', 'London', 'Paris', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '018'),
(19, 'BSR Tours & Travels', 'London', 'New Castle', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '019'),
(20, 'Sri Krishna Travels', 'London', 'New Castle', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '020'),
(21, 'Vikram Travels', 'London', 'New Castle', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '021'),
(22, 'BSR Tours & Travels', 'Scotland', 'London', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '022'),
(23, 'Sri Krishna Travels', 'Scotland', 'London', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '023'),
(24, 'Vikram Travels', 'Scotland', 'London', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '024'),
(25, 'BSR Tours & Travels', 'Scotland', 'Paris', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '025'),
(26, 'Sri Krishna Travels', 'Scotland', 'Paris', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '026'),
(27, 'Vikram Travels', 'Scotland', 'Paris', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '027'),
(28, 'BSR Tours & Travels', 'Scotland', 'New Castle', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '028'),
(29, 'Sri Krishna Travels', 'Scotland', 'New Castle', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '029'),
(30, 'Vikram Travels', 'Scotland', 'New Castle', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '030'),
(31, 'BSR Tours & Travels', 'Paris', 'London', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '031'),
(32, 'Sri Krishna Travels', 'Paris', 'London', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '032'),
(33, 'Vikram Travels', 'Paris', 'London', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '033'),
(34, 'BSR Tours & Travels', 'Paris', 'Scotland', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '034'),
(35, 'Sri Krishna Travels', 'Paris', 'Scotland', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '035'),
(36, 'Vikram Travels', 'Paris', 'Scotland', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '036'),
(37, 'BSR Tours & Travels', 'Paris', 'New Castle', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '037'),
(38, 'Sri Krishna Travels', 'Paris', 'New Castle', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '038'),
(39, 'Vikram Travels', 'Paris', 'New Castle', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '039'),
(40, 'BSR Tours & Travels', 'New Castle', 'London', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '040'),
(41, 'Sri Krishna Travels', 'New Castle', 'London', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '041'),
(42, 'Vikram Travels', 'New Castle', 'London', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '042'),
(43, 'BSR Tours & Travels', 'New Castle', 'Scotland', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '043'),
(44, 'Sri Krishna Travels', 'New Castle', 'Scotland', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '044'),
(45, 'Vikram Travels', 'New Castle', 'Scotland', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '045'),
(46, 'BSR Tours & Travels', 'New Castle', 'Paris', '13.00', '20.30', '7h 30m', '4.3', '347', '200', '8', '3', '046'),
(47, 'Sri Krishna Travels', 'New Castle', 'Paris', '18.00', '22.45', '4h 45m', '4.8', '189', '250', '10', '1', '047'),
(48, 'Vikram Travels', 'New Castle', 'Paris', '05.00', '11.00', '6h', '4.5', '662', '150', '7', '2', '048');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `boarding` text DEFAULT NULL,
  `dropping` text DEFAULT NULL,
  `pickuptime` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `pickuploc` text DEFAULT NULL,
  `droploc` text DEFAULT NULL,
  `ticketid` text DEFAULT NULL,
  `fare` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `userid` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `userid`) VALUES
(1, 'Yatheswar', 'yathe@gmail', '12345', '82627ee2f5fc2fa8f49818df8aa80850');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
