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
-- Table structure for table `internal21`
--

CREATE TABLE `internal21` (
  `sno` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `studentname` int(11) NOT NULL,
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
  `lab1` int(11) NOT NULL,
  `lab2` int(11) NOT NULL,
  `lab3` int(11) NOT NULL,
  `gr_total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
