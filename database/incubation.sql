-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 02:45 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incubation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'harsh@harsh', 'harsh'),
(2, 'dalai@dalai', 'dalai');

-- --------------------------------------------------------

--
-- Table structure for table `incubation`
--

CREATE TABLE `incubation` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `comp_name` text NOT NULL,
  `comp_add` text NOT NULL,
  `idea` text NOT NULL,
  `number` int(100) NOT NULL,
  `dipp` text NOT NULL,
  `financial` int(100) NOT NULL,
  `manpower` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incubation`
--

INSERT INTO `incubation` (`id`, `email`, `password`, `comp_name`, `comp_add`, `idea`, `number`, `dipp`, `financial`, `manpower`) VALUES
(9, 'banyan@banyan', 'banyan', 'BANYAN', '', '', 2147483647, 'sdf2q', 40000, 4),
(10, 'codenicely@codenicely', 'codenicely', 'CODENICELY', '', '', 2147483647, '123', 34678, 4),
(11, 'lambo@lambo', 'lambo', 'LAMOSIN', '', '', 2147483647, '123', 40000, 4),
(12, 'jodi@jodi', 'jodi', 'JODI', '', '', 2147483647, '123', 12000, 1),
(14, 'facebook@facebook', 'facebook', 'facebook', '', '', 0, '', 0, 0),
(15, 'jio@jio', 'jio', 'JIO RELIANCE', '', '', 2147483647, 'sdf2q', 40000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `work_experince` text NOT NULL,
  `fsp` text NOT NULL,
  `number` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `email`, `password`, `work_experince`, `fsp`, `number`, `name`) VALUES
(8, 'sahilmeshram676@gmail.com', '123456789', '8', 'youtube', 2147483647, 'anisumihar'),
(10, 'sumit@sumit', 'sumit', '3', 'Maths', 2147483647, 'SUmit'),
(11, 'aman@aman', 'aman', 'gsadg', 'maths', 2147483647, 'aman06016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incubation`
--
ALTER TABLE `incubation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incubation`
--
ALTER TABLE `incubation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
