-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2018 at 03:15 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `hotel_id`, `username`, `password`) VALUES
(1, 1, 'hotel', 'hotel'),
(2, 2, 'hotel2', 'hotel2'),
(3, 3, 'hotel3', 'hotel3');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `hotel_id`, `room_id`, `user_id`, `start_date`, `end_date`, `status`, `payment_id`) VALUES
(1, 1, 1, 1, '2018-03-31', '2018-04-18', 'confirmed', 1),
(3, 1, 1, 2, '2018-04-06', '2018-04-06', 'confirmed', 0),
(4, 1, 1, 2, '2018-04-06', '2018-04-06', 'canceled', 0),
(5, 1, 1, 2, '2018-04-06', '2018-04-06', 'confirmed', 0),
(6, 1, 1, 2, '2018-04-06', '2018-04-06', 'confirmed', 2),
(7, 1, 1, 2, '2018-04-06', '2018-04-06', 'confirmed', 3),
(8, 2, 4, 1, '2018-05-10', '2018-05-10', 'canceled', 4),
(9, 3, 11, 1, '2018-05-02', '2018-05-01', 'canceled', 5),
(10, 1, 3, 1, '2018-05-13', '2018-05-13', 'confirmed', 6);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `address` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `phone`, `city`, `zip`, `address`) VALUES
(1, 'Orient Queen Homes', '+961(1)361140\r\n ', 'beirut', '1107', 'Beirut, 1.9 km to City centre'),
(2, 'Hilton Beirut Habtoor Grand', '+961(1)500666', 'beirut', '55555', 'Beirut, 4.2 km to City centre'),
(3, 'Le Bristol Beirut', '    +961(1)351400', 'beirut', '0000', 'Beirut, 2.2 km to City centre'),
(4, 'The Queen\'s Park', '+44(20)72298080', 'london', 'W2 3SJ\r\n', 'London, 0.9 km to Hyde Park'),
(5, 'Kempinski Nile Hotel Cairo', '+20(2)27980000\r\n ', 'cairo', '11519', 'Cairo, 2.1 km to City centre');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `hotel_id`, `user_id`, `total`, `date`) VALUES
(1, 1, 1, 50, '2018-03-29 21:49:02'),
(2, 1, 2, 50, '2018-04-05 22:34:38'),
(3, 1, 2, 50, '2018-04-05 22:38:34'),
(4, 2, 1, 30, '2018-05-09 23:19:40'),
(5, 3, 1, 200, '2018-05-13 00:09:08'),
(6, 1, 1, 500, '2018-05-13 00:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `hotel_id`, `src`) VALUES
(7, 1, '1.png'),
(8, 2, '2.png'),
(9, 3, '3.png'),
(10, 4, '4.png'),
(11, 5, '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `view` varchar(255) NOT NULL,
  `beds` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `type_id`, `number`, `floor`, `view`, `beds`, `status`) VALUES
(1, 1, 1, 100, 1, 'sea', 1, 'false'),
(3, 1, 4, 101, 1, 'mountain', 2, 'false'),
(4, 2, 5, 100, 1, 'sea', 2, 'false'),
(5, 2, 6, 120, 2, 'mountain', 1, 'true'),
(6, 2, 7, 230, 1, 'city', 2, 'true'),
(7, 2, 6, 123, 2, 'mountain', 2, 'true'),
(8, 2, 8, 320, 3, 'sea', 1, 'true'),
(9, 3, 9, 345, 2, 'city', 2, 'true'),
(10, 3, 9, 325, 3, 'city', 2, 'true'),
(11, 3, 10, 456, 1, 'city', 2, 'false'),
(12, 1, 1, 345, 1, 'sea', 2, 'true'),
(13, 1, 2, 866, 2, 'sea', 2, 'true'),
(14, 1, 3, 562, 2, 'sea', 2, 'true'),
(15, 4, 1, 345, 1, 'sea', 2, 'true'),
(18, 4, 12, 866, 2, 'sea', 2, 'true'),
(19, 4, 11, 562, 2, 'sea', 2, 'true'),
(20, 5, 13, 230, 1, 'city', 2, 'true'),
(21, 5, 14, 123, 2, 'mountain', 2, 'true'),
(22, 5, 13, 320, 3, 'sea', 1, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `hotel_id`, `service`) VALUES
(2, 1, 'Restaurant'),
(4, 1, 'A/C'),
(5, 2, 'FREE WIFI'),
(6, 2, 'SPA'),
(7, 2, 'POOL'),
(8, 3, 'DINNING'),
(9, 3, 'CLUB'),
(10, 3, 'SPA'),
(11, 4, 'DINNING'),
(12, 4, 'CLUB'),
(13, 4, 'SPA'),
(14, 5, 'DINNING'),
(15, 5, 'CLUB'),
(16, 5, 'SPA'),
(19, 1, 'BAR');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `hotel_id`, `type`, `price`) VALUES
(1, 1, 'Standard', 45),
(2, 1, 'Superior', 78),
(3, 1, 'Suite', 120),
(4, 1, 'Presidential', 500),
(5, 2, 'Standard', 30),
(6, 2, 'Superior', 55),
(7, 2, 'Suite', 100),
(8, 2, 'Presidential', 130),
(9, 3, 'Presidential', 300),
(10, 3, 'Suite', 200),
(11, 4, 'Presidential', 300),
(12, 4, 'Suite', 200),
(13, 5, 'Standard', 30),
(14, 5, 'Superior', 55);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`) VALUES
(1, 'user', 'user', 'user', '6753354353'),
(2, 'user2', 'user2', 'user2', '5353277859'),
(3, 'user3', 'user3', 'user3', '78574639');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
