-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 04:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Course` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `StudentID`, `Username`, `Course`, `Age`) VALUES
(1, 0, '', 'ydsu', 85),
(2, 34, 'jkfs', 'Computer Programming', 19),
(3, 200556020, 'Kartik', 'Computer Programming', 19),
(4, 200556020, 'Kartik', 'Computer Programming', 19),
(5, 200556020, 'Kartik', 'Computer Programming', 19),
(6, 200556020, 'Kartik', 'Computer Programming', 19),
(7, 200556020, 'Kartik', 'Computer Programming', 19),
(8, 200556020, 'Kartik', 'Computer Programming', 19),
(9, 200556020, 'Kartik', 'Computer Programming', 19),
(10, 200556020, 'Kartik', 'Computer Programming', 19),
(11, 200556020, 'Kartik', 'Computer Programming', 19),
(12, 200556020, 'Kartik', 'Computer Programming', 19),
(13, 1234, 'Kartik', 'Computer Programming', 19),
(14, 1234, 'Kartik', 'Computer Programming', 19),
(15, 89, 'Kartik', 'Computer Programming', 9),
(16, 89, 'Kartik', 'Computer Programming', 9),
(17, 89, 'Kartik', 'Computer Programming', 9),
(18, 89, 'Kartik', 'Computer Programming', 9),
(19, 89, 'Kartik', 'Computer Programming', 9),
(20, 8, 'h', 'h', 7),
(21, 8, 'h', 'h', 7),
(22, 8, 'h', 'h', 7),
(23, 8, 'h', 'h', 7),
(24, 8, 'h', 'h', 7),
(25, 8, 'h', 'h', 7),
(26, 8, 'h', 'h', 7),
(27, 23, 'Kartik', 'Computer Programming', 16),
(28, 12, 'Kartik', 'Computer Programming', 3),
(29, 122, 'Kartik', 'Computer Programming', 12),
(30, 122, 'Kartik', 'Computer Programming', 12),
(31, 122, 'Kartik', 'Computer Programming', 12),
(32, 122, 'Kartik', 'Computer Programming', 12),
(33, 122, 'Kartik', 'Computer Programming', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
