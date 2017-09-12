-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 10:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amc`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `prn_no` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `acad_year` varchar(256) NOT NULL,
  `branch` varchar(256) NOT NULL,
  `college` varchar(256) NOT NULL,
  `mobile_number` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `division` varchar(256) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`prn_no`, `name`, `acad_year`, `branch`, `college`, `mobile_number`, `password`, `division`, `roll`) VALUES
('', '', '', '', '', '', '', '', 0),
('71617840m', 'Kashyap', 'Fourth Year', 'Computer Enginerring', 'LOL', '9730470070', 'qwe', '', 0),
('71617884c', 'dfsd', 'First Year', 'Computer Enginerring', 'LOL', '7777777777', 'Sudhjj.h', '', 0),
('716188952', 'Hello', 'First Year', 'Information Technology', 'LOL', '8888888888', 'Sudhbkjnkj', 'TEA', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`prn_no`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
