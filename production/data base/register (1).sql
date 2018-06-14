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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `password` text,
  `phnno` text NOT NULL,
  `email` text NOT NULL,
  `otp` text,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `rollno`, `password`, `phnno`, `email`, `otp`, `status`) VALUES
(1, '14MH1A0507', 'nekendhuku', '7702673747', '', '', 1),
(2, '14MH1A0519', 'iiii', '9885520844', '', '', 1),
(3, '14MH1A0525', '', '0', '', NULL, 1),
(4, '156Q1A0579', '', '0', '', NULL, 1),
(5, '15MH1A0561', '', '0', '', NULL, 1),
(6, '15MH1A0562', '', '0', '', NULL, 1),
(7, '15MH1A0563', '', '0', '', NULL, 1),
(8, '15MH1A0564', '', '0', '', NULL, 1),
(9, '15MH1A0565', '', '0', '', NULL, 1),
(10, '15MH1A0568', '', '0', '', NULL, 1),
(11, '15MH1A0571', '', '0', '', NULL, 1),
(12, '15MH1A0572', '', '0', '', NULL, 1),
(13, '15MH1A0573', '', '0', '', NULL, 1),
(14, '15MH1A0574', '', '0', '', NULL, 1),
(15, '15MH1A0575', '', '0', '', NULL, 1),
(16, '15MH1A0576', '', '0', '', NULL, 1),
(17, '15MH1A0577', '', '0', '', NULL, 1),
(18, '15MH1A0578', '', '0', '', NULL, 1),
(19, '15MH1A0579', '', '0', '', NULL, 1),
(20, '15MH1A0580', '', '0', '', NULL, 1),
(21, '15MH1A0581', '', '0', '', NULL, 1),
(22, '15MH1A0582', '', '0', '', NULL, 1),
(23, '15MH1A0583', '', '0', '', NULL, 1),
(24, '15MH1A0584', '', '0', '', NULL, 1),
(25, '15MH1A0585', '', '0', '', NULL, 1),
(26, '15MH1A0586', '', '0', '', NULL, 1),
(27, '15MH1A0587', '', '0', '', NULL, 1),
(28, '15MH1A0588', '', '0', '', NULL, 1),
(29, '15MH1A0590', '', '0', '', NULL, 1),
(30, '15MH1A0591', '', '0', '', NULL, 1),
(31, '15MH1A0592', '', '0', '', NULL, 1),
(32, '15MH1A0593', '', '0', '', NULL, 1),
(33, '15MH1A0594', '', '0', '', NULL, 1),
(34, '15MH1A0595', '', '0', '', NULL, 1),
(35, '15MH1A0597', '', '0', '', NULL, 1),
(36, '15MH1A0598', '', '0', '', NULL, 1),
(37, '15MH1A0599', '', '0', '', NULL, 1),
(38, '15MH1A05A0', '', '0', '', NULL, 1),
(39, '15MH1A05A1', '', '0', '', NULL, 1),
(40, '15MH1A05A2', '', '0', '', NULL, 1),
(41, '15MH1A05A3', '', '0', '', NULL, 1),
(42, '15MH1A05A4', '', '0', '', NULL, 1),
(43, '15MH1A05A6', '', '0', '', NULL, 1),
(44, '15MH1A05A7', '', '0', '', NULL, 1),
(45, '15MH1A05A8', '', '0', '', NULL, 1),
(46, '15MH1A05B0', '', '0', '', NULL, 1),
(47, '15MH1A05B1', '', '0', '', NULL, 1),
(48, '15MH1A05B2', '', '0', '', NULL, 1),
(49, '15MH1A05B3', '', '0', '', NULL, 1),
(50, '15MH1A05B4', '', '0', '', NULL, 1),
(51, '15MH1A05B8', '', '0', '', NULL, 1),
(52, '16MH5A0515', '', '0', '', NULL, 1),
(53, '15MH5A0501', '', '0', '', NULL, 1),
(54, '16MH5A0509', '', '0', '', NULL, 1),
(55, '16MH5A0510', '', '0', '', NULL, 1),
(56, '16MH5A0511', '', '0', '', NULL, 1),
(57, '16MH5A0512', '', '0', '', NULL, 1),
(58, '16MH5A0513', '', '0', '', NULL, 1),
(59, '16MH5A0514', '', '0', '', NULL, 1),
(60, '14MH1A0507', '', '', '', NULL, 1),
(61, '14MH1A0519', '', '', '', NULL, 1),
(62, '14MH1A0525', '', '', '', NULL, 1),
(63, '156Q1A0579', '', '', '', NULL, 1),
(64, '15MH1A0561', '', '', '', NULL, 1),
(65, '15MH1A0562', '', '', '', NULL, 1),
(66, '15MH1A0563', '', '', '', NULL, 1),
(67, '15MH1A0564', '', '', '', NULL, 1),
(68, '15MH1A0565', '', '', '', NULL, 1),
(69, '15MH1A0568', '', '', '', NULL, 1),
(70, '15MH1A0571', '', '', '', NULL, 1),
(71, '15MH1A0572', '', '', '', NULL, 1),
(72, '15MH1A0573', '', '', '', NULL, 1),
(73, '15MH1A0574', '', '', '', NULL, 1),
(74, '15MH1A0575', '', '', '', NULL, 1),
(75, '15MH1A0576', '', '', '', NULL, 1),
(76, '15MH1A0577', '', '', '', NULL, 1),
(77, '15MH1A0578', '', '', '', NULL, 1),
(78, '15MH1A0579', '', '', '', NULL, 1),
(79, '15MH1A0580', '', '', '', NULL, 1),
(80, '15MH1A0581', '', '', '', NULL, 1),
(81, '15MH1A0582', '', '', '', NULL, 1),
(82, '15MH1A0583', '', '', '', NULL, 1),
(83, '15MH1A0584', '', '', '', NULL, 1),
(84, '15MH1A0585', '', '', '', NULL, 1),
(85, '15MH1A0586', '', '', '', NULL, 1),
(86, '15MH1A0587', '', '', '', NULL, 1),
(87, '15MH1A0588', '', '', '', NULL, 1),
(88, '15MH1A0590', '', '', '', NULL, 1),
(89, '15MH1A0591', '', '', '', NULL, 1),
(90, '15MH1A0592', '', '', '', NULL, 1),
(91, '15MH1A0593', '', '', '', NULL, 1),
(92, '15MH1A0594', '', '', '', NULL, 1),
(93, '15MH1A0595', '', '', '', NULL, 1),
(94, '15MH1A0597', '', '', '', NULL, 1),
(95, '15MH1A0598', '', '', '', NULL, 1),
(96, '15MH1A0599', '', '', '', NULL, 1),
(97, '15MH1A05A0', '', '', '', NULL, 1),
(98, '15MH1A05A1', '', '', '', NULL, 1),
(99, '15MH1A05A2', '', '', '', NULL, 1),
(100, '15MH1A05A3', '', '', '', NULL, 1),
(101, '15MH1A05A4', '', '', '', NULL, 1),
(102, '15MH1A05A6', '', '', '', NULL, 1),
(103, '15MH1A05A7', '', '', '', NULL, 1),
(104, '15MH1A05A8', '', '', '', NULL, 1),
(105, '15MH1A05B0', '', '', '', NULL, 1),
(106, '15MH1A05B1', '', '', '', NULL, 1),
(107, '15MH1A05B2', '', '', '', NULL, 1),
(108, '15MH1A05B3', '', '', '', NULL, 1),
(109, '15MH1A05B4', '', '', '', NULL, 1),
(110, '15MH1A05B8', '', '', '', NULL, 1),
(111, '16MH5A0515', '', '', '', NULL, 1),
(112, '15MH5A0501', '', '', '', NULL, 1),
(113, '16MH5A0509', '', '', '', NULL, 1),
(114, '16MH5A0510', '', '', '', NULL, 1),
(115, '16MH5A0511', '', '', '', NULL, 1),
(116, '16MH5A0512', '', '', '', NULL, 1),
(117, '16MH5A0513', '', '', '', NULL, 1),
(118, '16MH5A0514', '', '', '', NULL, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
