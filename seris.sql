-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 06:45 PM
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
-- Database: `seris`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(2, 'Saad', 'dfg@sdf.cf', 'djfh jdkrfg dfb gjdhxfbm,hfcbvgjdxhfb,dxfbgljdh'),
(3, 'sdf', 'sdf@dfg.gr', 'adjhfb kljsdbfg jklfbgklsdfbjlkj blkxfgj bikldtfb'),
(4, 'Tarig', 'dkfgh@dkfjh.com', 'ildfg kldjsfb dkfjs ,cv lkdjfg .kzd jfm. b\' ndz fbzd fkzdnf glk'),
(5, 'Rico', 'jkr@rfjg.com', 'dfjk bdzkjf gsjdklfbg lksdnfglkjbdfnslkbfkmzlklksdfhlksdfncvks;dnbk;sd nfgk;nc.vmb.kdfjng.,;kdbn g.,nczfk.bj.d;kd jngf d'),
(6, 'Mohmmed', 'mohmmed@gmail.com', 'dfgdfg dsfg fg xdf sdr');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `poster`, `description`, `creator`, `stars`, `video_link`, `top`) VALUES
(1, 'Peaky blinders', 'peakyblinders.jpg', 'A gangster family epic set in 1919 Birmingham, England; centered on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby.\r\n\r\nCreator: Steven Knight\r\n\r\nStars: Cillian Murphy, Paul Anderson, Helen McCrory', 'hek Creator', 'sefsf Stars', 'https://www.youtube.com/embed/zxRwTERrAeM', 1),
(2, 'breaking bad', 'posterBB.jpg', 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family future.', 'Vince Gilligan', ' Bryan Cranston, Aaron Paul, Anna Gunn', 'https://www.youtube.com/embed/HhesaQXLuRY', 0),
(3, 'Daredevil', 'daredevil.jpg', 'A blind lawyer by day, vigilante by night. Matt Murdock fights the crime of New York as Daredevil.', 'Drew Goddard', 'Charlie Cox, Vincent DOnofrio, Deborah Ann Woll', 'https://www.youtube.com/embed/jAy6NJ_D5vU', 0),
(4, 'Game Of Thrones', 'gameofthrones.jpg', 'Nine noble families fight for control over the mythical lands of Westeros, while an ancient enemy returns after being dormant for thousands of years.', 'David Benioff, D.B. Weiss', 'Emilia Clarke, Peter Dinklage, Kit Harington', 'https://www.youtube.com/embed/CnhFBlkzYe8', 0),
(5, 'Vikings', 'vikings2.jpg', 'Vikings transports us to the brutal and mysterious world of Ragnar Lothbrok, a Viking warrior and farmer who yearns to explore - and raid - the distant shores across the ocean.', 'Creator: Michael Hirst', 'Gustaf SkarsgØ£Â¥rd, Katheryn Winnick, Alexander Ludwig', 'https://www.youtube.com/embed/f5av6OqFwz0', 0),
(6, 'Lost', 'lost.jpg', 'The survivors of a plane crash are forced to work together in order to survive on a seemingly deserted tropical island.', 'J J.J. Abrams, Jeffrey Lieber, Damon Lindelof', 'Jorge Garcia, Josh Holloway, Yunjin Kim', 'https://www.youtube.com/embed/KTu8iDynwNc', 1),
(7, 'The100', 'the100.jpg', 'Set ninety-seven years after a nuclear war has destroyed civilization, when a spaceship housing humanity\'s lone survivors sends one hundred juvenile delinquents back to Earth, in hopes of possibly re-populating the planet.', 'Jason Rothenberg', 'Eliza Taylor, Bob Morley, Marie Avgeropoulos', 'https://www.youtube.com/embed/aDrsItJ_HU4', 1),
(8, 'Prison break', 'prisonbreak.jpg', 'Due to a political conspiracy, an innocent man is sent to death row and his only hope is his brother, who makes it his mission to deliberately get himself sent to the same prison in order to break the both of them out, from the inside.', 'Paul', 'Dominic Purcell, Wentworth Miller, Amaury Nolasco', 'https://www.youtube.com/embed/AL9zLctDJaU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`) VALUES
(1, 'Admin', 'Admin@gmail.com', 'Admin', 'Admin', 'Admin'),
(4, 'sdf', 'sdff@gmail.com', '11', 'fgh', 'hhhhhgf'),
(5, 'trd', 'bbb@gmail.com', 'aaz', 'dfg dfg', 'sdsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
