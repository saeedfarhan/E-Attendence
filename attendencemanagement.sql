-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 03:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendencemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(256) NOT NULL,
  `a_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'user111', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `u_id` int(11) NOT NULL,
  `u_username` varchar(256) NOT NULL,
  `u_name` varchar(256) NOT NULL,
  `u_rollno` varchar(256) NOT NULL,
  `java` int(11) NOT NULL,
  `iwt` int(11) NOT NULL,
  `cpi` int(11) NOT NULL,
  `adbms` int(11) NOT NULL,
  `wireless` int(11) NOT NULL,
  `attended_classes` int(11) NOT NULL,
  `total_classes` int(11) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`u_id`, `u_username`, `u_name`, `u_rollno`, `java`, `iwt`, `cpi`, `adbms`, `wireless`, `attended_classes`, `total_classes`, `percentage`) VALUES
(1, 'stu160722', 'farhan', '160722', 8, 1, 1, 1, 2, 13, 13, 100),
(2, 'stu160723', 'irfan', '160723', 3, 1, 1, 1, 2, 8, 13, 61.5385),
(3, 'stu160744', 'aqib', '160744', 1, 1, 1, 1, 2, 6, 13, 46.1538);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `u_id` int(11) NOT NULL,
  `u_username` varchar(256) NOT NULL,
  `u_password` varchar(256) NOT NULL,
  `u_email` varchar(256) DEFAULT NULL,
  `u_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`u_id`, `u_username`, `u_password`, `u_email`, `u_phone`) VALUES
(1, 'stu160722', '$2y$10$M7p9FDgVZnye/8uLEptvJ.W28vmZ2lX5pf4rO1gMCOgUct.8vXL76', 'lycnxassaut@gmail.com', '9596129062'),
(2, 'stu232321', '$2y$10$iDtE8/uzjOSPb5snojzO3uy3mfuvkhVGWmJTISmJM9.Rk2h.ingou', 'adsads@g.com', '1232132132'),
(3, 'stu160723', '$2y$10$Niy7lkTzUDpSSSP3Bmwc8.U/7/oxVu7j1uyQWnh6aWcXW4gJKF3EG', 'saeedfarhan129@gmail.com', '9906439121'),
(4, 'stu160744', '$2y$10$8kCPZLeU2beXuWxFkDP0zeVFdFwibfDETnDryuS8w8chMEmy1IrPO', 'syedfurqaansfj@rediffmail.com', '7889475779');

-- --------------------------------------------------------

--
-- Table structure for table `subjectassigned`
--

CREATE TABLE `subjectassigned` (
  `u_id` int(11) NOT NULL,
  `u_username` varchar(256) NOT NULL,
  `u_name` varchar(256) NOT NULL,
  `assigned_subject` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectassigned`
--

INSERT INTO `subjectassigned` (`u_id`, `u_username`, `u_name`, `assigned_subject`) VALUES
(1, 'kgp16someone', 'someone', 'java'),
(2, 'kgp16some2.111', 'some2.111', 'adbms'),
(3, 'kgp16some3.111', 'some3.111', 'cpi'),
(4, 'kgp16some4.111', 'some4.111', 'iwt'),
(5, 'kgp16something', 'something', 'wireless');

-- --------------------------------------------------------

--
-- Table structure for table `subject_classes`
--

CREATE TABLE `subject_classes` (
  `s_id` int(11) NOT NULL,
  `subjects` varchar(256) NOT NULL,
  `no_of_classes` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_classes`
--

INSERT INTO `subject_classes` (`s_id`, `subjects`, `no_of_classes`) VALUES
(1, 'java', '9'),
(2, 'adbms', '1'),
(3, 'cpi', '1'),
(4, 'iwt', '1'),
(5, 'wireless', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `u_id` int(11) NOT NULL,
  `u_username` varchar(256) NOT NULL,
  `u_password` varchar(256) NOT NULL,
  `u_email` varchar(256) NOT NULL,
  `u_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`u_id`, `u_username`, `u_password`, `u_email`, `u_phone`) VALUES
(1, 'kgp16someone', '$2y$10$81TkyFJ/tVe2i8pzI2XujuFSFVoVYb138K2zKHBZmV8kVQMv4DHGW', 'lycnxassaut@gmail.com', '9596129062'),
(2, 'kgp16some2.111', '$2y$10$otSXzpmMTMpXf6iIUeunsu.nly/UKqGk8.F9rpMSwKFpuJRwCD.c.', 'saeedfarhan129@gmail.com', '9906439121'),
(3, 'kgp16some3.111', '$2y$10$3KofxWCuafU44VBq/4ytBe2R4T5Lz8o2PHce9YDLmHHT/VvWCArSe', 'syedfurqaansfj@rediffmail.com', '7889475779'),
(4, 'kgp16some4.111', '$2y$10$a1vz1vmIG8ilpJxB.DFU0uN7aeB6.HlsK6HGOY85g2k3NNZdlI0LO', 'saqibkirmani45@gmail.com', '8808238232'),
(5, 'kgp16something', '$2y$10$OtO7X/GBJGDIol7eDeYv2eXzwXCssVfSJXlEP2RHsFVUyubc7SuDO', 'saeedfarhan111@gmail.com', '9906439232');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `subjectassigned`
--
ALTER TABLE `subjectassigned`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `subject_classes`
--
ALTER TABLE `subject_classes`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjectassigned`
--
ALTER TABLE `subjectassigned`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject_classes`
--
ALTER TABLE `subject_classes`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
