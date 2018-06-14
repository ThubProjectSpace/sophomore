-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 11:58 AM
-- Server version: 10.1.31-MariaDB
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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `internals`
--

CREATE TABLE `internals` (
  `sno` int(11) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `sem` int(2) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `desc1` int(11) NOT NULL,
  `obj1` int(11) NOT NULL,
  `assg1` int(11) NOT NULL,
  `desc2` int(11) NOT NULL,
  `obj2` int(11) NOT NULL,
  `assg2` int(11) NOT NULL,
  `desc3` int(11) NOT NULL,
  `obj3` int(11) NOT NULL,
  `assg3` int(11) NOT NULL,
  `desc4` int(11) NOT NULL,
  `obj4` int(11) NOT NULL,
  `assg4` int(11) NOT NULL,
  `desc5` int(11) NOT NULL,
  `obj5` int(11) NOT NULL,
  `assg5` int(11) NOT NULL,
  `desc6` int(11) NOT NULL,
  `obj6` int(11) NOT NULL,
  `assg6` int(11) NOT NULL,
  `desc7` int(11) NOT NULL,
  `obj7` int(11) NOT NULL,
  `assg7` int(11) NOT NULL,
  `gr_total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internals`
--

INSERT INTO `internals` (`sno`, `rollno`, `sem`, `studentname`, `desc1`, `obj1`, `assg1`, `desc2`, `obj2`, `assg2`, `desc3`, `obj3`, `assg3`, `desc4`, `obj4`, `assg4`, `desc5`, `obj5`, `assg5`, `desc6`, `obj6`, `assg6`, `desc7`, `obj7`, `assg7`, `gr_total`, `status`) VALUES
(1, '16MH1A05B5', 0, 'SURI PREM KUMAR', 7, 4, 5, 0, 3, 3, 3, 3, 3, 4, 6, 3, 2, 4, 5, 8, 2, 1, 24, 22, 20, 66, 1),
(2, '16MH1A05B5', 0, 'SURI PREM KUMAR', 7, 4, 5, 0, 3, 3, 3, 3, 3, 4, 6, 3, 2, 4, 5, 8, 2, 1, 24, 22, 20, 66, 1),
(3, '17MH1A0501', 0, 'ADITYASHASANKP S K P V S', 13, 8, 5, 11, 5, 5, 8, 4, 5, 15, 6, 5, 15, 8, 5, 13, 4, 5, 75, 35, 30, 140, 1),
(4, '17MH1A0502', 0, 'AJITKUMAR', 7, 5, 5, 3, 5, 5, 3, 3, 3, 4, 5, 2, 9, 8, 5, 13, 1, 2, 39, 27, 22, 88, 1),
(5, '17MH1A0503', 0, 'ANKUSH KUMAR JHA', 12, 5, 5, 11, 5, 5, 8, 6, 3, 15, 8, 5, 10, 6, 5, 11, 3, 4, 67, 33, 27, 127, 1),
(6, '17MH1A0504', 0, 'ANUSURI SRI CHARAN', 8, 7, 5, 8, 5, 5, 7, 3, 4, 11, 4, 5, 7, 6, 5, 15, 5, 5, 56, 30, 29, 115, 1),
(7, '17MH1A0505', 0, 'BANDARU SANGEETHA', 12, 7, 5, 13, 5, 5, 14, 3, 5, 15, 5, 5, 14, 6, 5, 15, 4, 5, 83, 30, 30, 143, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internals`
--
ALTER TABLE `internals`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internals`
--
ALTER TABLE `internals`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
