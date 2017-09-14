-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 09:17 PM
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

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`username`, `passsword`) VALUES
('principal', 'sit');

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
  `attend_array` varchar(100) NOT NULL,
  `lesson_plan` text NOT NULL,
  `teacher` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_record`
--

INSERT INTO `attendance_record` (`subject`, `class`, `division`, `date`, `count`, `attend_array`, `lesson_plan`, `teacher`) VALUES
('SDL', 'TE', 'B', '2017-09-14', 1, '50', '<p><strong>Oh teacher please.</strong></p>\r\n', 'Prashant Dongre');

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
('71617790m', 'kevin modi', 'TE', 'Computer Enginerring', 'LOL', '9662244182', 'root', 'B', 12),
('71617840m', 'kashyap shroff', 'TE', 'Computer Enginerring', 'LOL', '9730470070', 'root', 'B', 5),
('71617850m', 'divya', 'TE', 'Computer Enginerring', 'SIT', '7845129630', 'root', 'C', 20),
('77777777m', 'sudarshan', 'TE', 'Computer Enginerring', 'SIT', '7418529630', 'root', 'B', 50);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `teacher_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`username`, `password`, `teacher_name`) VALUES
('prashant', 'root', 'Prashant Dongre');

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
