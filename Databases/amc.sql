-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 08:51 AM
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
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `username` varchar(256) NOT NULL,
  `passsword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record`
--

CREATE TABLE `attendance_record` (
  `subject` varchar(256) NOT NULL,
  `class` varchar(256) NOT NULL,
  `division` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `count` int(10) NOT NULL,
  `attend_array` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_record`
--

INSERT INTO `attendance_record` (`subject`, `class`, `division`, `date`, `count`, `attend_array`) VALUES
('SDL', 'TE', 'C', '2017-09-13', 2, '5, 10'),
('SDL', 'TE', 'C', '2017-09-13', 2, '10, 2'),
('SDL', 'TE', 'C', '2017-09-14', 2, '5, 10');

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
('71617840m', 'kash', 'TE', 'comp', 'sit', '9730470070', 'root', 'C', 5),
('71617844m', 'kashyap', 'TE', 'computer', 'SIT', '9730470077', 'root', 'C', 10),
('71617890t', 'sudarshan', 'TE', 'Computer Enginerring', 'LOL', '9730777777', 'root', 'C', 2),
('74185296m', 'kashyap', 'Third Year', 'Computer Enginerring', 'LOL', '9874563210', 'root', 'C', 22);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`username`, `password`) VALUES
('prashant', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`prn_no`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
