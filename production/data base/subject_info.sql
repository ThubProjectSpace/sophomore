-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 09:12 AM
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
-- Table structure for table `subject_info`
--

CREATE TABLE `subject_info` (
  `id` int(11) NOT NULL,
  `sem` int(2) NOT NULL,
  `subject` text NOT NULL,
  `category` text NOT NULL,
  `held` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_info`
--

INSERT INTO `subject_info` (`id`, `sem`, `subject`, `category`, `held`, `status`) VALUES
(1, 21, 'MANEGERIAL ECONOMICS AND FINANCIAL ANALYSIS', '', 0, 1),
(1, 22, 'PROBABILITY AND STATISTICS', '', 0, 1),
(1, 31, 'COMPILER DESIGN', 'T', 0, 1),
(1, 32, 'SOFTWARE ENGINEERING', 'T', 50, 1),
(2, 21, 'DATA STRUCTURES', '', 0, 1),
(2, 22, 'JAVA PROGRAMMING', '', 0, 1),
(2, 31, 'DATA COMMUNICATION', 'T', 0, 1),
(2, 32, 'DATAWAREHOUSING AND DATA MINING', 'T', 50, 1),
(3, 21, 'OBJECT ORIENTED PROGRAMMING THROUGH C++', 'T', 0, 1),
(3, 22, 'ADVANCED DATA STRUCTURES', 'T', 0, 1),
(3, 31, 'PRINCIPLES OF PROGRAMMING LANGUAGES', 'T', 0, 1),
(3, 32, 'COMPUTER NETWORKS', 'T', 50, 1),
(4, 21, 'MATHEMATICAL FOUNDATIONS OF COMPUTER SCIENCE', '', 0, 1),
(4, 22, 'COMPUTER ORGANISATION', '', 0, 1),
(4, 31, 'DATABASE MANAGEMENT SYSTEMS', 'T', 0, 1),
(4, 32, 'DESIGN AND ANALYSIS OF ALGORITHMS', 'T', 50, 1),
(5, 21, 'DIGITAL LOGIC DESIGN', 'T', 0, 1),
(5, 22, 'FORMAL LANGUAGES AND AUTOMATA THEORY', 'T', 0, 1),
(5, 31, 'OPERATING SYSTEMS', 'T', 0, 1),
(5, 32, 'WEB TECHNOLOGIES', 'T', 50, 1),
(6, 21, 'OBJECT ORIENTED PROGRAMMING LAB', '', 0, 1),
(6, 22, 'ADVANCED DATA STRUCTURES LAB', '', 0, 1),
(6, 31, 'COMPILER DESIGN LAB', 'L', 0, 1),
(6, 32, 'COMPUTER NETWORKS AND NETWORK POGRAMMING LAB', 'L', 15, 1),
(7, 21, 'DATA STRUCTURES LAB', 'L', 0, 1),
(7, 22, 'JAVA PROGRAMMING LAB', 'L', 0, 1),
(7, 31, 'OPERATING SYSTEM AND LINUX PROGRAMMING LAB', 'L', 0, 1),
(7, 32, 'SOFTWARE ENGINEERING LAB', 'L', 15, 1),
(8, 21, 'DIGITAL LOGIC DESIGN LAB', 'L', 0, 1),
(8, 22, 'FREE OPEN SOURCE SOFTWARE(FOSS) LAB', 'L', 0, 1),
(8, 31, 'DATABASE MANAGEMENT SYSTEMS LAB', 'L', 0, 1),
(8, 32, 'WEB TECHNOLOGIES LAB', 'L', 15, 1),
(9, 21, 'SEMINAR', '', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject_info`
--
ALTER TABLE `subject_info`
  ADD PRIMARY KEY (`id`,`sem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_info`
--
ALTER TABLE `subject_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
