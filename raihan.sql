-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 05:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_a`
--

CREATE TABLE `section_a` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_a`
--

INSERT INTO `section_a` (`id`, `name`, `fname`, `sid`, `email`) VALUES
(1, 'Raihan hasan', 'Raihan', 1258, 'raihan@gmail.com'),
(2, 'Shakib Sarar Arnab', 'Shakib', 7466, 'arnab00@gmail.com'),
(3, 'Shakib Sarar Arnab', 'Shakib', 1, 'arnab0000007@gmail.com'),
(4, 'Raihan ali', 'raihan', 722, 'ar@gmail.com'),
(5, 'shimul banik', 'shimul', 1258, 'shimul@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `section_b`
--

CREATE TABLE `section_b` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_b`
--

INSERT INTO `section_b` (`id`, `name`, `fname`, `sid`, `email`) VALUES
(1, 'tuhin bhuiyan', 'tuhin', 5981, 'tuhin@gmail.com'),
(2, 'Raihan hasan', 'Raihan', 1258, 'raihan@gmail.com'),
(3, 'Shohail uddin Sarker', 'Shohail', 7096, 'sushom@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `section_c`
--

CREATE TABLE `section_c` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_c`
--

INSERT INTO `section_c` (`id`, `name`, `fname`, `sid`, `email`) VALUES
(1, 'bishal roy', 'bishal', 544, 'bishal@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `section_d`
--

CREATE TABLE `section_d` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_d`
--

INSERT INTO `section_d` (`id`, `name`, `fname`, `sid`, `email`) VALUES
(1, 'tom hanks', 'tom', 256, 'tom@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section_a`
--
ALTER TABLE `section_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_b`
--
ALTER TABLE `section_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_c`
--
ALTER TABLE `section_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_d`
--
ALTER TABLE `section_d`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `section_a`
--
ALTER TABLE `section_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_b`
--
ALTER TABLE `section_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_c`
--
ALTER TABLE `section_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_d`
--
ALTER TABLE `section_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
