-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 02:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `admno` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `classno` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`admno`, `name`, `classno`, `email`, `address`, `city`) VALUES
(202010001, 'Alan', 2, 'alan@yahoo.com', 'Maple street', 'Bhopal'),
(202010002, 'Jake', 1, 'jk@yahoo.com', 'New Market', 'Bhopal'),
(202010003, 'Vibha', 3, 'vb@gmail.com', 'House-12, GCF, Ranjhi.', 'Jabalpur'),
(202010004, 'Amy', 6, 'amy@gmail.com', 'H-5, Hitech City, Gwalior.', 'Gwalior'),
(202010005, 'Rosa', 6, 'rosa@yahoo.com', 'Nikhil Bungalows, street no. 12', 'Indore'),
(202010006, 'Addya Gupta', 10, 'addya@yahoo.com', '22-B, Bakers Street', 'Jaipur'),
(202010007, 'ABC', 6, 'abc@gmail.com', 'XYZ street 12', 'Indore'),
(202010008, 'Ankita', 5, 'anki@yahoo.com', 'XyZ', 'Bhopal'),
(202010009, 'ANki', 6, 'a@yahoo.com', 'Aashima', 'Bhopal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`admno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `admno` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202010010;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
