-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 04:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--
CREATE DATABASE IF NOT EXISTS `task` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `task`;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `startdate` varchar(10) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `current_city` varchar(20) NOT NULL,
  `cityname` varchar(20) NOT NULL,
  `relocate` varchar(20) NOT NULL,
  `lastcompany` varchar(50) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `id` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `email`, `linkedin`, `position`, `startdate`, `mobile`, `current_city`, `cityname`, `relocate`, `lastcompany`, `comments`, `id`, `timestamp`) VALUES
('', '', '', '', '', '', '', 'delhi', '', 'yes', '', '', 8, '2021-06-25 09:06:05'),
('Ayushi', 'Mishra', 'ayushimishra7009@gma', '', '', '', '+917376124237', 'delhi', '', 'yes', '', '', 9, '2021-06-25 10:32:27'),
('', '', '', '', '', '', '', 'Delhi', '', 'yes', '', '', 10, '2021-06-25 10:39:01'),
('Ayushi', 'Mishra', 'ayushimishra7009@gma', '', '', '', '+917376124237', 'Delhi', '', 'yes', '', '', 11, '2021-06-25 10:39:11'),
('', '', '', '', '', '', '', 'Delhi', '', 'yes', '', '', 12, '2021-06-25 11:02:10'),
('Ayushi', 'Mishra', 'ayushimishra7009@gma', '', '', '', '+917376124237', 'other', 'Others', 'yes', 'mmmmmmmm', '', 13, '2021-06-25 11:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `time`, `name`) VALUES
(2, '2021-06-24 11:15:58', 'sjxfwdfhwhchhcghgchhhhhhhhhhhhhh          hgh gcfhgchf eghgc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
