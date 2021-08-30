-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 21, 2021 at 09:23 AM
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
  `username` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `image` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `instagram` varchar(40) NOT NULL,
  `facebook` varchar(40) NOT NULL,
  `twitter` varchar(40) NOT NULL,
  `youtube` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `username`, `firstname`, `lastname`, `image`, `phone`, `email`, `password`, `instagram`, `facebook`, `twitter`, `youtube`) VALUES
(1, 'Mr.', 'Sharma Pradap', 'Sharma', 'Pradap', 'profile.jfif', '9678236714', 'sharma@gmail.com', '26b5c3f86027614d7c3bbec4238a97f8', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(2, 'Mr.', 'Varun Gupta', 'Varun', 'Gupta', 'profile.jfif', '9754370257', 'varun@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(3, 'Ms.', 'Meera Madhavan', 'Meera', 'Madhavan', 'profile.jfif', '9374183645', 'meera@gmail.com', 'Lap@1234', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(4, 'Ms.', 'Pavithra Sharma', 'Pavithra', 'Sharma', 'profile.jfif', '9374812934', 'pavithra@gmail.com', '7fc92d58888fcffcff11434c1407fe88', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com'),
(5, 'Ms.', 'Preethi Sharma', 'Preethi', 'Sharma', 'profile.jfif', '9754370257', 'preethi@gmail.com', '601757150822d642bd21743439a8efd4', 'instagram.com', 'facebook.com', 'twitter.com', 'youtube.com');

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
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
