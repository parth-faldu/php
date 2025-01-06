-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 08:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Info_id` int(3) NOT NULL,
  `Roll_no` int(5) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Dept` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contact` int(10) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Info_id`, `Roll_no`, `Name`, `Dept`, `Address`, `Email`, `Contact`, `Birth_date`) VALUES
(2, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13'),
(3, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13'),
(4, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13'),
(5, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13'),
(6, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13'),
(7, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13'),
(8, 1, 'fsd', 'dsd', '1as', 'dfspa@com', 1234567890, '2024-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `Info_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
