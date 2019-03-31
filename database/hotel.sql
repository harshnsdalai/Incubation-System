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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, '', '', ''),
(2, 'asd', 'asd', 'asd'),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(3, 'Miss.', 'harsh', 'dalai', 'Deluxe Room', 'Quad', 1, '2019-01-02', '2019-01-03', 220.00, 228.80, 0.00, 'Room only', 8.80, 1),
(2, 'Dr.', 'asd', 'asd', 'Deluxe Room', 'Triple', 1, '2019-01-02', '2016-01-05', -240460.00, -269315.20, -21641.40, 'Half Board', -7213.80, -1093),
(8, '', 'aaaaa', 'anajsdjajsjdasdasd', 'Auditorium', '', 1, '2020-02-02', '2021-02-02', 0.00, 0.00, 0.00, '', 0.00, 366),
(9, '', 'sumit', 'dalai', 'Meeting room', '', 1, '2023-01-01', '2023-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(11, '', 'sumit', 'asdasdasd', 'Guest House', '', 1, '2019-01-01', '2019-01-02', 180.00, 180.00, 0.00, '', 0.00, 1),
(10, '', 'Animesh', 'Dhengre', 'Auditorium', '', 1, '2019-01-01', '2019-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(12, '', 'Animesh', 'ppt deni hai', 'Meeting room', '', 1, '2019-01-01', '2019-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(13, '', 'Animesh', 'ppt deni hai', 'Auditorium', '', 1, '2019-01-01', '2019-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(14, '', 'Animesh', 'ppt deni hai', 'Meeting room', '', 1, '2019-01-01', '2019-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(15, '', 'sumit', 'for ppt', 'Auditorium', '', 1, '2019-01-01', '2019-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(16, '', 'asdsad', 'cdcdcdcdc', 'Auditorium', '', 1, '2020-01-04', '2020-02-06', 0.00, 0.00, 0.00, '', 0.00, 33),
(17, '', 'harsh', 'for ppt', 'Auditorium', '', 1, '2019-01-01', '2019-01-02', 0.00, 0.00, 0.00, '', 0.00, 1),
(18, '', 'Animesh', 'for ppt', 'Guest House', '', 1, '2019-01-01', '2019-01-02', 180.00, 180.00, 0.00, '', 0.00, 1),
(19, '', 'harsh', 'workspace', 'Meeting room', '', 3, '2019-02-22', '2019-02-28', 0.00, 0.00, 0.00, '', 0.00, 6),
(20, '', 'aman', 'FURNITURE', 'Auditorium', '', 3, '2019-02-19', '2019-02-28', 0.00, 0.00, 0.00, '', 0.00, 9);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(2, 'Meeting Hall', 'Double', 'Free', NULL),
(3, 'Auditorium', NULL, 'Free', NULL),
(39, 'Lab 01', NULL, 'Free', NULL),
(40, 'Lab 01', NULL, 'Free', NULL),
(41, 'Meeting Hall', NULL, 'Free', NULL),
(42, 'Meeting Hall', NULL, 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(17, NULL, 'harsh', 'for ppt', 'harsh@harsh', NULL, NULL, '12151512', 'Auditorium', NULL, '1', NULL, '2019-01-01', '2019-01-02', 'Conform', 1),
(18, NULL, 'Animesh', 'for ppt', 'animeshdhengre@gmail.com', NULL, NULL, '7898204006', 'Guest House', NULL, '1', NULL, '2019-01-01', '2019-01-02', 'Conform', 1),
(19, NULL, 'harsh', 'workspace', 'harshnsdalai@gmail.com', NULL, NULL, '9589975318', 'Meeting room', NULL, '3', NULL, '2019-02-22', '2019-02-28', 'Conform', 6),
(20, NULL, 'aman', 'FURNITURE', 'my@gmail.com', NULL, NULL, '7974650028', 'Auditorium', NULL, '3', NULL, '2019-02-19', '2019-02-28', 'Conform', 9),
(21, NULL, 'aman', 'workspace', 'aman@aman', NULL, NULL, 'aman', 'Auditorium', NULL, '2', NULL, '2019-03-07', '2019-03-27', 'Not Conform', 20),
(22, NULL, 'ambani', 'FURNITURE', 'ambani@ambani', NULL, NULL, '7509005555', 'Auditorium', NULL, '2', NULL, '2019-03-01', '2019-03-31', 'Not Conform', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
