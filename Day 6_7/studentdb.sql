-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 01:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp(),
  `username` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `rollno` varchar(8) NOT NULL,
  `password` char(200) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `regdate`, `username`, `name`, `rollno`, `password`, `php`, `mysql`, `html`, `total`, `percent`, `email`) VALUES
(8, '0000-00-00 00:00:00', 'admin', '', '', '900150983cd24fb0d6963f7d28e17f72', 0, 0, 0, 0, 0, '0'),
(33, '2020-10-13 08:35:34', 'gaya3', 'Gayatri Nambiar', '37', '34eace700b79730481c17bab7e2657e1', 88, 99, 98, 285, 95, '0'),
(34, '2020-10-13 13:23:02', 'wqwqwqww', 'asasassas', '33', '81dc9bdb52d04dc20036dbd8313ed055', 56, 87, 99, 242, 81, '0'),
(35, '2020-10-15 03:09:24', 'tomcy', 'Tomcy Thomas', '12', '202cb962ac59075b964b07152d234b70', 21, 34, 48, 103, 34, ''),
(36, '2020-10-15 03:10:38', 'tomcythomas', 'gg', '123', 'a0d373d6ea5e6a4e6a7fdace243d739a', 77, 88, 99, 264, 88, ''),
(37, '2020-10-15 03:11:10', 'tomcy12', 'Tomcy Thomas', '61', 'a0d373d6ea5e6a4e6a7fdace243d739a', 89, 9, 9, 107, 36, ''),
(39, '2020-10-15 10:13:09', 'richuj', 'Richi John', '34', 'd4196b1fdcaee1cd88bc0a0bd15d66c4', 77, 66, 99, 242, 81, 'r@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
