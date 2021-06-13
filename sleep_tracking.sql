-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 06:00 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sleep_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `uname` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fullname`, `uname`, `age`, `gender`, `pwd`) VALUES
(1, 'Madhu', 'mad@madblocks.tech', 28, 'male', '1234'),
(2, 'Madhu', 'mad@madblocks.tech', 28, 'male', '1234'),
(3, 'Madhu', 'mad@madblocks.tech', 28, 'male', '1234'),
(4, 'Galla Sravani', 'sravanigalla1221@gmail.com', 28, 'female', '1234'),
(5, 'Madhu', 'parvathanenimadhu@gmail.com', 28, 'male', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sleeplog`
--

CREATE TABLE `sleeplog` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `times` text NOT NULL,
  `timew` text NOT NULL,
  `dates` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleeplog`
--

INSERT INTO `sleeplog` (`id`, `uname`, `times`, `timew`, `dates`) VALUES
(1, 'mad@madblocks.tech', '12:31', '14:31', '2021-06-13'),
(2, 'mad@madblocks.tech', '11:14', '15:18', '2021-06-14'),
(3, 'parvathanenimadhu@gmail.com', '10:21', '15:26', '2021-06-13'),
(4, 'parvathanenimadhu@gmail.com', '12:23', '21:32', '2021-06-13'),
(5, 'parvathanenimadhu@gmail.com', '12:24', '13:25', '2021-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleeplog`
--
ALTER TABLE `sleeplog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sleeplog`
--
ALTER TABLE `sleeplog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
