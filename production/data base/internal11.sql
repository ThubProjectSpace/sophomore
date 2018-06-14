-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 06:37 PM
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
-- Table structure for table `internal11`
--

CREATE TABLE `internal11` (
  `sno` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `studentname` int(11) NOT NULL,
  `desc1` int(11) NOT NULL,
  `asg1` int(11) NOT NULL,
  `obj1` int(11) NOT NULL,
  `desc2` int(11) NOT NULL,
  `asg2` int(11) NOT NULL,
  `obj2` int(11) NOT NULL,
  `desc3` int(11) NOT NULL,
  `asg3` int(11) NOT NULL,
  `obj3` int(11) NOT NULL,
  `decs4` int(11) NOT NULL,
  `asg4` int(11) NOT NULL,
  `obj4` int(11) NOT NULL,
  `desc5` int(11) NOT NULL,
  `asg5` int(11) NOT NULL,
  `obj5` int(11) NOT NULL,
  `desc6` int(11) NOT NULL,
  `obj6` int(11) NOT NULL,
  `assg6` int(11) NOT NULL,
  `lab1` int(11) NOT NULL,
  `lab2` int(11) NOT NULL,
  `lab3` int(11) NOT NULL,
  `gr_total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internal11`
--
ALTER TABLE `internal11`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internal11`
--
ALTER TABLE `internal11`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
