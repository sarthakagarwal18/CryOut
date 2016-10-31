-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 12:36 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cryout`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileacomplaint`
--

CREATE TABLE IF NOT EXISTS `fileacomplaint` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `medical` tinyint(1) NOT NULL,
  `police` tinyint(1) NOT NULL,
  `counselling` tinyint(1) NOT NULL,
  `details` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileacomplaint`
--

INSERT INTO `fileacomplaint` (`id`, `type`, `medical`, `police`, `counselling`, `details`, `name`, `email`) VALUES
(1, '', 0, 0, 0, '', '', ''),
(2, 'domestic violence', 1, 0, 0, 'vdsvsa', 'dfawfqwd', 'sdfada@gegg'),
(3, 'sexual harrasment', 0, 0, 0, 'zfzf', 'shreya', 'shreya.chandra96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `govtid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `city`, `govtid`) VALUES
(1, 'shreya.chandra96@gmail.com', '4a3232c59ecda21ac71bebe3b329bf36', 'shreya', 'delhi', 1234),
(2, 'shreya.chandra96@gmail.com', '4a3232c59ecda21ac71bebe3b329bf36', 'SHREYA', 'DELHI', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileacomplaint`
--
ALTER TABLE `fileacomplaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileacomplaint`
--
ALTER TABLE `fileacomplaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
