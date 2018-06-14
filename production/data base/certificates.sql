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
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) NOT NULL,
  `file_name` text NOT NULL,
  `file_type` text NOT NULL,
  `others` text NOT NULL,
  `rollno` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `file_name`, `file_type`, `others`, `rollno`, `status`) VALUES
(1, '', 'ssc', '', '', 1),
(2, '', 'ssc', '', '', 1),
(3, '', 'ssc', '', '', 1),
(4, '', 'ssc', '', '', 1),
(5, '', 'ssc', '', '', 1),
(6, '', 'inter', '', '', 1),
(7, '', 'inter', '', '', 1),
(8, '', 'inter', '', '', 1),
(9, '', 'inter', '', '', 1),
(10, '', 'ssc', '', '', 1),
(11, '', 'ssc', '', '', 1),
(12, '', 'inter', '', '', 1),
(13, '', 'ssc', '', '', 1),
(14, '', 'inter', '', '', 1),
(15, '', 'passport', '', '15MH1A0561', 1),
(16, '', 'caste', '', '15MH1A0561', 1),
(17, '', 'res', '', '15MH1A0561', 1),
(18, '', 'inter', '', '15MH1A0561', 1),
(19, '19.jpg', 'inter', '', '15MH1A0561', 1),
(20, '20.jpg', 'ssc', '', '', 1),
(21, '21.jpg', 'res', '', '', 1),
(22, '', 'res', '', '', 1),
(23, '23.jpg', 'caste', '', '', 1),
(24, '24.jpg', 'inter', '', '15MH1A0561', 1),
(25, '25.jpg', 'income', '', '', 1),
(26, '26.jpg', 'income', '', '', 1),
(27, '', 'income', '', '', 1),
(28, '28.jpg', 'caste', '', '', 1),
(29, '', 'caste', '', '', 1),
(30, '30.jpg', 'inter', '', '', 1),
(31, '', 'inter', '', '', 1),
(32, '32.jpg', 'caste', '', '', 1),
(33, '', 'caste', '', '', 1),
(0, '', 'ssc', '', '15MH1A0564', 1),
(0, '', 'others', 'ojfd', '15MH1A0564', 1),
(0, '', 'others', 'png', '15MH1A0564', 1),
(0, '', 'caste', '', '15MH1A0564', 1),
(0, '', 'ssc', '', '15MH1A0564', 1),
(0, '', 'res', '', '15MH1A0564', 1),
(0, '', 'caste', '', '15MH1A0564', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
