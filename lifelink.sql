-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifelink`
--

-- --------------------------------------------------------

--
-- Table structure for table `newbirths`
--

CREATE TABLE `newbirths` (
  `id` int(200) NOT NULL,
  `weight` int(10) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `fnin` varchar(20) NOT NULL,
  `mnin` varchar(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `status` enum('Normal_Birth','Operation') NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `hc` varchar(30) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `fcontacts` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(11) NOT NULL,
  `mother` varchar(250) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `hospital` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`id`, `mother`, `reason`, `hospital`, `date`, `comment`) VALUES
(3, 'Ayo Proscovia', 'Operation', 'KCCA', '2020-02-04', 'BAD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(17, 'moses ', 'moses', '52bd43d37ed62eb4c226'),
(18, 'anthon', 'anthon', 'e84b3c5fe9e83c580c3b'),
(19, 'okabo jasper', 'jasper', '*B2ACB9267346C031597');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newbirths`
--
ALTER TABLE `newbirths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
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
-- AUTO_INCREMENT for table `newbirths`
--
ALTER TABLE `newbirths`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
