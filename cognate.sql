-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 31, 2021 at 09:06 AM
-- Server version: 5.7.24
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
-- Database: `cognate`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(33) NOT NULL,
  `title` text NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `image` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `instagram` varchar(40) NOT NULL,
  `facebook` varchar(40) NOT NULL,
  `twitter` varchar(40) NOT NULL,
  `youtube` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `firstname`, `lastname`, `image`, `phone`, `email`, `password`, `confirm_password`, `instagram`, `facebook`, `twitter`, `youtube`) VALUES
(1, 'Mr.', 'Sharma', 'Pradap', 'profile.jfif', '9678236714', 'sharma@gmail.com', '26b5c3f86027614d7c3bbec4238a97f8', '', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(2, 'Mr.', 'Varun', 'Gupta', 'profile.jfif', '9754370257', 'varun@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(3, 'Ms.', 'Meera', 'Madhavan', 'profile.jfif', '9374183645', 'meera@gmail.com', 'Lap@1234', '', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(4, 'Ms.', 'Pavithra', 'Sharma', 'profile.jfif', '9374812934', 'pavithra@gmail.com', '7fc92d58888fcffcff11434c1407fe88', '', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(5, 'Ms.', 'Preethi', 'Sharma', 'profile.jfif', '9754370257', 'preethi@gmail.com', '601757150822d642bd21743439a8efd4', '', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(6, 'Mr/Ms', 'TestUser', 'TestLast', 'profile.jfif', '9842287036', 'test@gmail.com', '8b1a9953c4611296a827abf8c47804d7', '8b1a9953c4611296a827abf8c47804d7', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(7, 'Mr/Ms', 'Thennarasan', 'Boovaragan', 'profile.jfif', '9842287036', 'Thenns@talevent.in', '5d41402abc4b2a76b9719d911017c592', '5d41402abc4b2a76b9719d911017c592', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(8, 'Mr/Ms', 'Priya', 'Dharshini', 'profile.jfif', '9159587036', 'Thenns@talevent.in', '8b1a9953c4611296a827abf8c47804d7', '8b1a9953c4611296a827abf8c47804d7', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(9, 'Mr/Ms', 'nisha', 'kolanchi', 'profile.jfif', '9878664787', 'nisha@gmail.com', 'a9f56b7ece2113c9c4a1214a19ede99c', 'a9f56b7ece2113c9c4a1214a19ede99c', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(10, 'Mr/Ms', 'Thennarasan', 'Boovaragan', 'profile.jfif', '9842287036', 'Thenns@talevent.in', '2c838aba642cca954ebb3a2144eec2a7', '2c838aba642cca954ebb3a2144eec2a7', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(11, 'Mr/Ms', 'Neha', 'Ramakrishnan', 'profile.jfif', '9159587036', 'neha@gmail.com', '2c838aba642cca954ebb3a2144eec2a7', '2c838aba642cca954ebb3a2144eec2a7', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(12, 'Mr/Ms', 'Thennarasan', 'Boovaragan', 'profile.jfif', '9842287036', 'Thenns@talevent.in', '2c838aba642cca954ebb3a2144eec2a7', '2c838aba642cca954ebb3a2144eec2a7', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
