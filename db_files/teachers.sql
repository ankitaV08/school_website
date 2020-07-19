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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `empid` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `mail_id` varchar(255) NOT NULL,
  `mobno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`empid`, `t_name`, `mail_id`, `mobno`) VALUES
(1, 'Aryabhata', 'abc@gmail.com', 1234567890),
(2, 'Chanakya', 'c@gmail.com', 1023456789),
(3, 'Ada Lovelace', 'pro@gmail.com', 1203456789),
(4, 'Ramanujan', 'rama@yahoo.com', 1230456789),
(5, 'Albert Einstein', 'albert@yahoo.com', 1234056789),
(6, 'Aristotle', 'aristo@gmail.com', 1234506789),
(7, 'Helen', 'helen123@gmail.com', 1334560789),
(8, 'Nikola Tesla', 'nik@gmail.com', 1234567089),
(9, 'Issac Newton', 'issac8@yahoo.com', 1234567880),
(10, 'Thomas Edison', 'bulb@gmail.com', 1234456789),
(11, 'Mark Twain', 'mark@yahoo.com', 1111111110),
(12, 'Stephen Hawking', 'relativity@yahoo.com', 2147483647),
(13, 'Marie Curie', 'marie@gmail.com', 1020304050),
(14, 'Swati', 'swati@gmail.com', 2147483647),
(15, 'Manikandan', 'm@yahoio.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
