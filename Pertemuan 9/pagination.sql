-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 07:56 AM
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
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagination_table`
--

CREATE TABLE `pagination_table` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagination_table`
--

INSERT INTO `pagination_table` (`id`, `name`, `age`, `dept`) VALUES
(1, 'Bambang', 22, 'Information Technology'),
(2, 'Pamungkas', 25, 'Computer Science'),
(3, 'Luna', 25, 'Computer Science'),
(4, 'Vivin', 24, 'Information Technology'),
(5, 'Dinda', 20, 'Computer Science'),
(6, 'Yuda', 21, 'Computer Science'),
(7, 'Dewi', 21, 'Computer Science'),
(8, 'Audini', 20, 'Computer Science'),
(9, 'Dode', 26, 'Computer Science'),
(10, 'Dharma', 35, 'Computer Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagination_table`
--
ALTER TABLE `pagination_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagination_table`
--
ALTER TABLE `pagination_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
