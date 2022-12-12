-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 09:44 AM
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
-- Database: `bike`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(4, 'admin', '$2y$10$jS4vHFAFGRGZZwG4kjr8xOUyz3PkYLNLapYoxSge/PhNjUFQStHRy', '0000-00-00 00:00:00'),
(5, 'anuj', '$2y$10$0O/hwn91O/sNXSBGLftCU.bZhcl3c6fdtcsPPdMZ0hc93dfyUHKMi', '0000-00-00 00:00:00'),
(6, 'ajinkya', '$2y$10$fTCe7FUyooYP.AOoSPhTkeD0gWH58OCTm7zEepPGeUlrRSleP/kf2', '0000-00-00 00:00:00'),
(7, 'ap', '$2y$10$VrK7quFxOtUJCQ2VbBlx/OwTa/4DaOV8dNE9eB5Zi7HpcWZqVrOmK', '0000-00-00 00:00:00'),
(8, 'harry', '$2y$10$hBZrsP9mSZw9auLipXAvWeF/Px6.futHDQJwSgpwIaZAAkfuRIVOq', '0000-00-00 00:00:00'),
(9, 'adcet', '$2y$10$.HiqJDE4k356I6xSQ67W7OYvaSToy2KdQxQO.nBRXCArDbcsPiIgK', '0000-00-00 00:00:00'),
(10, 'suraj', '$2y$10$DHUI1BWyZnlnBnwT5JTACeuSd8QW2oRA/1Xnn/3GVEStCQMkmstpq', '0000-00-00 00:00:00'),
(11, 'Prasad', '$2y$10$yEDDHBVeA587cI.oKIkIyu8OQAZ8ow.sir95jRrq36sA1usDzNMt.', '0000-00-00 00:00:00'),
(12, 'apk', '$2y$10$yL4ZcReXPTON3UzMVuamC.lTFAL5BjQ1AmY3n7zvaQKpQclikL0.2', '0000-00-00 00:00:00'),
(13, 'shailesh', '$2y$10$gNlY0ygs7XJdgH0WTNTuuO656UGopyY92Q0pnMGUStG1PyDw0Z7ku', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
