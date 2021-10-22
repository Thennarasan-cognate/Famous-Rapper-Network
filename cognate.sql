-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 22, 2021 at 10:21 AM
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
-- Table structure for table `offerings`
--

CREATE TABLE `offerings` (
  `id` int(33) NOT NULL,
  `offerings` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offerings`
--

INSERT INTO `offerings` (`id`, `offerings`) VALUES
(1, 'Feature Verse'),
(2, 'Coaching'),
(3, 'Production'),
(4, 'Mixing'),
(5, 'Mastering'),
(6, 'Cyphers'),
(7, 'Online Events'),
(8, 'Live Performances'),
(9, 'Photography'),
(10, 'Videography'),
(11, 'Video Editing'),
(12, 'Remix Challenge'),
(13, 'Mailing List');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(33) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `instagram` varchar(40) NOT NULL,
  `facebook` varchar(40) NOT NULL,
  `twitter` varchar(40) NOT NULL,
  `youtube` varchar(500) NOT NULL,
  `Location` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `fullname`, `image`, `phone`, `role`, `email`, `password`, `confirm_password`, `instagram`, `facebook`, `twitter`, `youtube`, `Location`) VALUES
(1, 'Admin', 'Admin', 'Admin Admin', 'profile.png', '9248610456', 'Admin', 'Admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '0e7517141fb53f21ee439b355b5a1d0a', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(2, 'Thennarasan', 'Boovaragan', 'Thennarasan Boovaragan', 'profile.png', '7806880596', 'User', 'thennarasan@gmail.com', '566b90345409295e8cbba6aa3446c485', '566b90345409295e8cbba6aa3446c485', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(3, 'Kyle', 'James', 'Kyle James', 'profile.png', '9837672819', 'User', 'KyleJames860@gmail.com', '2ec9246a5c996d9a0004b47ec3dc6a81', '2ec9246a5c996d9a0004b47ec3dc6a81', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(4, 'Sedia', 'B', 'Sedia B', 'profile.png', '9824756102', 'User', 'blackchinamusic@gmail.com', 'aabb08f59a5cbe498657274b0acff6c7', 'aabb08f59a5cbe498657274b0acff6c7', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(5, 'Kid', 'Rohan', 'Kid Rohan', 'profile.png', '9827410846', 'User', 'thelonelycottage@gmail.com', 'e4d9b646b046fbe1dbcde2eb9949b60e', 'e4d9b646b046fbe1dbcde2eb9949b60e', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(6, 'David', 'Prorok', 'David Prorok', 'profile.png', '7806880596', 'User', 'david@famousrapper.com', '889211b122daa7f9f917d3d3b3475514', '889211b122daa7f9f917d3d3b3475514', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(7, 'Zhe', 'The Free', 'Zhe The Free', 'profile.png', '9827410846', 'User', 'Zhethefree@gmail.com', 'c690d96b5584cce2e59384df7881f569', 'c690d96b5584cce2e59384df7881f569', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(8, 'Ramya', 'Rajendiran', 'Ramya Rajendiran', 'profile.png', '9248610456', 'User', 'RamyaR1999@gmail.com', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp', 'Srimushnam'),
(9, 'subha', 'chezhiyan', 'subhavadhana', 'profile.png', '8870567780', 'User', 'subhavadhana7@gmail.com', '3fb3e3f32b5acb729c37fe4d6ca5ec37', '3fb3e3f32b5acb729c37fe4d6ca5ec37', 'https://instagram.com/', 'https://facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&', 'Srimushnam');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `roles`) VALUES
(1, 'Rapper'),
(2, 'Singer'),
(3, 'Producer'),
(4, 'Investor'),
(5, 'Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `view_all_artists`
--

CREATE TABLE `view_all_artists` (
  `user_id` int(40) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Email` varchar(42) NOT NULL,
  `Roles` varchar(80) NOT NULL,
  `Offerings` varchar(120) NOT NULL,
  `Interview_link` varchar(80) NOT NULL,
  `Location` varchar(40) NOT NULL,
  `Home_town` varchar(40) NOT NULL,
  `Birth_place` varchar(40) NOT NULL,
  `Instagram` varchar(80) NOT NULL,
  `Youtube` varchar(80) NOT NULL,
  `Spotify` varchar(80) NOT NULL,
  `Merch_image` varchar(150) NOT NULL,
  `Merch_link` varchar(150) NOT NULL,
  `Headline` varchar(100) NOT NULL,
  `About` varchar(1000) NOT NULL,
  `Featured_song` varchar(80) NOT NULL,
  `Featured_music` varchar(80) NOT NULL,
  `Featured_album` varchar(80) NOT NULL,
  `Soundcloud` varchar(80) NOT NULL,
  `Twitter` varchar(80) NOT NULL,
  `Community` varchar(80) NOT NULL,
  `Facebook` varchar(80) NOT NULL,
  `Podcast` varchar(80) NOT NULL,
  `Mailing_list` varchar(80) NOT NULL,
  `Tiktok` varchar(80) NOT NULL,
  `Bandcamp` varchar(80) NOT NULL,
  `Patreon` varchar(80) NOT NULL,
  `LinkedIn` varchar(80) NOT NULL,
  `Favourites` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `view_all_artists`
--

INSERT INTO `view_all_artists` (`user_id`, `Name`, `Email`, `Roles`, `Offerings`, `Interview_link`, `Location`, `Home_town`, `Birth_place`, `Instagram`, `Youtube`, `Spotify`, `Merch_image`, `Merch_link`, `Headline`, `About`, `Featured_song`, `Featured_music`, `Featured_album`, `Soundcloud`, `Twitter`, `Community`, `Facebook`, `Podcast`, `Mailing_list`, `Tiktok`, `Bandcamp`, `Patreon`, `LinkedIn`, `Favourites`) VALUES
(1, 'Kyle James', 'KyleJames860@gmail.com', 'Rapper', 'Feature Verse', 'https://www.youtube.com/watch?v=zZcTjkhHv_I', 'Phoenix, AZ', 'Hartford, Connecticut', 'Hartford, Connecticut', 'https://www.instagram.com/kylejames860/', 'https://www.youtube.com/channel/UC1cOWLTWlQignaz-6SksEyQ', 'https://open.spotify.com/artist/5UTuz80B1vtrD3Nv7gbDOD', 'https://www.kylejames860.com/wp-content/uploads/2020/07/Screen-Shot-2020-07-25-at-12.30.58-AM-1.png', 'https://teespring.com/stores/kylejames860', 'Healthiest Rapper Alive!', 'Music is my life! I love to create art and I’m here to inspire others! I grew up in Hartford, but moved to Phoenix, AZ shortly after my father died and started a new life. I got into rapping while I was attending Arizona State University. I started getting more into it when I was going to Phoenix College taking music classes. Nowadays I’m involved with various forms of art. My purpose is to have a positive impact on the planet. I will live a life that would make my father proud and help millions of people live better lives.', 'https://song.link/us/i/1568215191', 'https://www.youtube.com/watch?v=CyyG7Xeh53g', 'https://album.link/us/i/1568215188', 'https://soundcloud.com/kylejames860', 'https://twitter.com/KyleJames860', '', 'https://www.facebook.com/kylejames860/', '', '', '', '', '', 'https://twitter.com/KyleJames860', 'True'),
(2, 'Sedia B', 'blackchinamusic@gmail.com', 'Rapper', 'Live Performances', 'https://www.youtube.com/watch?v=5-C1mTW4pII&t=62s', 'Virgina', 'Shanghai, China', 'Virginia', 'https://www.instagram.com/sedia.b/', 'https://www.youtube.com/channel/UCm2JvCYynT_XhiXAXp', 'https://open.spotify.com/artist/1YoKg3k1px2JUV3NlSQknD', 'https://vangogh.teespring.com/v3/image/hW6NDfluyuw5KPy1lZ9onhwm_wQ/480/560.jpg', 'https://teespring.com/new-delete-block', 'Wild, Bougie, & Bad', 'Sedia B’s music is a peer into the mind of a feminine and bossy woman.\r\nShe is a woman who loves herself and spreads that message in her music. \r\n\r\nWith catchy songs like, “Delete & Block” and “Fuck Boy” off of her “Diary of A Girlie” EP, Sedia captures in a playful way how to avoid men who only offer sex and how to set positive boundaries for yourself. \r\n\r\nOverall, Sedia B’s music is for uplifting women, who feel like they are not living their best life. Sedia B is a true example, of how you can be whoever you want as long as you set your mind towards it, work hard,\r\nand love yourself.', 'https://song.link/us/i/1484504694', 'https://www.youtube.com/watch?v=udmVRE4qfWA', '', '', '', '', 'https://www.facebook.com/sedia.bonsu/', 'https://anchor.fm/sedia-bonsu', '', '', '', '', '', 'True'),
(3, 'Kid Rohan', 'thelonelycottage@gmail.com', 'Producer', 'Remix Challenge', 'https://www.youtube.com/watch?v=4lz6hx9uLPM', 'Novato, CA', 'Novato, CA', 'Novato, CA', 'https://www.instagram.com/kidrohan/', 'https://www.youtube.com/channel/UCHyEFKg-7OSr8txPKdo1nXg', 'https://open.spotify.com/artist/5L9uHUNCB3FGHHUhTlTyVm', 'https://vangogh.teespring.com/v3/image/3m0qMyxHzBr1yOMMLyflPpe_U6Y/800/800.jpg', 'https://kid-rohans-merchandise.creator-spring.com/?', 'Bringing multimedia music revolved around self-love and anti-perfection to the forefront', '', 'https://song.link/us/i/1514211624', 'https://www.youtube.com/watch?v=ngv9HOHrX3w', '', 'https://soundcloud.com/kidrohan', 'https://twitter.com/kid_rohan/', '', 'https://www.facebook.com/KidRohan/', '', 'https://mailchi.mp/36f62e6293ed/sign-up-to-the-kid-rohan-newsletter', 'https://www.tiktok.com/@kidrohan?\r\n', 'https://thelonelycottage.bandcamp.com/', '', '', 'False'),
(4, 'David Prorok', 'david@famousrapper.com', 'Software Engineer', 'Coaching', 'https://www.youtube.com/watch?v=B97huk1wL2I', 'Oakland, CA', 'Arlington Heights, IL', 'Arlington Heights, IL', 'https://www.instagram.com/david.prorok', 'https://youtube.com/davidprorok', '', 'https://ih1.redbubble.net/image.2763579097.5077/ssrco,dad_hat,product,FFFDF5:8c3db69414,front_three_quarter,square,1000x1000-bg,f8f8f8.jpg', 'https://www.redbubble.com/shop/ap/89165077', '', '', 'https://song.link/us/i/1496102115', 'https://www.youtube.com/watch?v=wcTqNdlOHWE', 'https://album.link/us/i/1532398154', 'https://soundcloud.com/davidprorok', 'https://twitter.com/david_prorok', 'https://www.facebook.com/groups/davidprorok', 'https://www.facebook.com/the.david.prorok', 'https://www.youtube.com/channel/UCMiLgqFqPN6AHCTKbnUE7Bw', 'http://davidprorok.substack.com', '', 'https://davidprorok.bandcamp.com/', 'https://www.patreon.com/davidprorok ', 'https://www.linkedin.com/in/davidprorok/', 'False'),
(5, 'Zhe The Free', 'Zhethefree@gmail.com', 'Singer', 'Remix Challenge', 'https://instagram.com', 'America', 'America', 'America', 'https://instagram.com', 'https://www.youtube.com/watch?v=Ejr50PNXDB8', 'https://open.spotify.com/artist/4mjNmlGkTZikFBkXag2CWT', 'https://youtube.com', 'https://youtube.com', 'Headline', 'About', 'https://youtube.com', 'https://www.youtube.com/watch?v=B9YKnNtFqds', 'https://youtube.com', 'https://soundcloud.com', 'https://twitter.com', 'https://youtube.com', 'https://www.facebook.com', 'https://youtube.com', '', '', '', '', 'https://www.linked.com', 'True');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offerings`
--
ALTER TABLE `offerings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_all_artists`
--
ALTER TABLE `view_all_artists`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offerings`
--
ALTER TABLE `offerings`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `view_all_artists`
--
ALTER TABLE `view_all_artists`
  MODIFY `user_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
