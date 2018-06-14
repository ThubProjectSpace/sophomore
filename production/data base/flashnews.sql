-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 11:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `flash_news`
--

CREATE TABLE `flash_news` (
  `id` int(11) NOT NULL,
  `category` text,
  `textarea` text,
  `text_heading` text,
  `link` text NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flash_news`
--

INSERT INTO `flash_news` (`id`, `category`, `textarea`, `text_heading`, `link`, `DATE_TIME`, `STATUS`) VALUES
(56, 'update', '                        tfyugjknjv', NULL, '', '2018-05-24 10:09:44', 1),
(61, 'event', '             dytrygvydytfgkjb vck;ljhgcgvbnm,           ', 'events', '', '2018-05-25 06:52:42', 1),
(74, 'event', '                      bbbbvgfdtyuujm  ', 'events yyy', '', '2018-05-25 07:24:42', 1),
(78, 'update', '                        sdrfthguyecvbbb', 'llllkjjjj', 'http://localhost/scoop/gentela-gh-pages/production/adminnews.php', '2018-05-25 10:05:17', 1),
(79, 'update', '            fyrhgvbgferstyhvvb             ', 'update', 'http://localhost/scoop/gentela-gh-pages/production/adminnews.php', '2018-05-25 10:05:37', 1),
(80, 'event', '           sgtdgjggyhutrftgft             ', 'event', 'http://localhost/scoop/gentela-gh-pages/production/adminnews.php', '2018-05-25 10:10:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flash_news`
--
ALTER TABLE `flash_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flash_news`
--
ALTER TABLE `flash_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
