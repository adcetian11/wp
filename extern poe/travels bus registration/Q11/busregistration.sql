-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 04:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus1`
--

CREATE TABLE `bus1` (
  `sr` int(11) NOT NULL,
  `busno` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `from` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `to` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `passengers` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `bus1`
--

INSERT INTO `bus1` (`sr`, `busno`, `from`, `to`, `passengers`) VALUES
(1, '1', 'sangli', 'pune', '2'),
(2, '1', 'sangli', 'pune', '2'),
(3, '1', 'sangli', 'pune', '2'),
(4, '1', 'sangli', 'pune', '20');

-- --------------------------------------------------------

--
-- Table structure for table `bus2`
--

CREATE TABLE `bus2` (
  `sr` int(11) NOT NULL,
  `from` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `to` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `passengers` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sr` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `address` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sr`, `name`, `email`, `contact`, `username`, `password`, `address`) VALUES
(1, 'Prathmesh', 'p@gmail.com', '785855584555', 'Prathmesh', '123', 'Ashti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus1`
--
ALTER TABLE `bus1`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `bus2`
--
ALTER TABLE `bus2`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus1`
--
ALTER TABLE `bus1`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bus2`
--
ALTER TABLE `bus2`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
