-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `querilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `message`) VALUES
(5, 'mjhm118899@gmail.com', 'Domain Addon Error', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `balance_transaction` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `balance_transaction`, `order_id`, `amount`, `email`, `status`) VALUES
(3, 'txn_1IBMriHI2zaeiIxo1mnzrcOA', '443301611072934', '46.4', 'mjhm118899@gmail.com', '1'),
(5, 'txn_1IBN3NHI2zaeiIxoJtAWZEmL', '459581611073657', '28.8', 'mjhm118899@gmail.com', '1'),
(6, 'txn_1IBN82HI2zaeiIxon0yy7aO8', '411491611073946', '43.2', 'mjhm118899@gmail.com', '1'),
(9, 'txn_1ICOs7HI2zaeiIxoLT7mIGAS', '919741611318976', '43.2', 'mjhm118899@gmail.com', '1'),
(10, 'txn_1ICOxaHI2zaeiIxoSLUszi5l', '543871611319315', '43.2', 'info@zahidmzhmm.com', '1'),
(11, 'txn_1ICPbEHI2zaeiIxo22npXoOQ', '169011611321773', '43.2', 'mjhm118899@gmail.com', '1'),
(12, 'txn_1ICPpYHI2zaeiIxobzvgJuwp', '601821611322660', '43.2', 'mjhm118899@gmail.com', '1'),
(13, 'txn_1ICQ3cHI2zaeiIxoNh2OE9Hv', '677231611323533', '28.8', 'mjhm118899@gmail.com', '1'),
(14, 'txn_1IJZCAHI2zaeiIxo7xWXshPo', '755831613026955', '36', 'mjhm118899@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` mediumtext NOT NULL,
  `big_des` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `big_des`, `file`, `price`, `images`, `status`, `inserted_at`) VALUES
(3, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-3.jpg', 1, '0000-00-00 00:00:00'),
(4, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-3.jpg', 1, '0000-00-00 00:00:00'),
(5, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(6, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(8, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(9, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(10, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(11, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(12, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(14, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(15, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(16, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(17, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(18, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(19, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(20, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(21, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(22, 'Lorem ipsum dolor sit amet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '', '14.40', 'img-4.jpg', 1, '0000-00-00 00:00:00'),
(24, 'Adobe After Effects CC 2020', 'Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020', '<p>Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020Adobe After Effects CC 2020<br></p>', '39304591613026874.jpg', '12', '23588391613026874.jpg', 1, '2021-02-11 07:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`) VALUES
(7, 'mjhm118899@gmail.com', 'c5b8592b03c9d26aae19a88e8e15b3dc98586e98', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
