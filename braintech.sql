-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql113.byetcluster.com
-- Generation Time: May 19, 2021 at 06:10 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezyro_28159409_ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(6) NOT NULL,
  `stu_id` varchar(50) NOT NULL,
  `cou_id` varchar(50) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `trans_id` varchar(500) NOT NULL,
  `trans_date` datetime NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `name`, `email`, `phone`, `pwd`, `photo`) VALUES
(1, 'BTT/ADM/101', 'Tirthadeep Basak', 'tirthadeepb22081999@gmail.com', 9748196335, 'tir_adm_123', 'adminimg/admintirtha.jpeg'),
(2, 'BTT/ADM/102', 'Shrayanika Saha', 'sanayamehta.com@gmail.com', 7003057986, 'shr_adm_123', 'adminimg/adminshrayanika.jpeg'),
(3, 'BTT/ADM/103', 'Bidisa Saha', 'bidisasaha99@gmail.com', 7980721095, 'bid_adm_123', 'adminimg/adminbidisa.jpeg'),
(4, 'BTT/ADM/104', 'Soham Mukhopadhyay', 'sohammukhopadhyay001@gmail.com', 9163306175, 'soh_adm_123', 'adminimg/adminsoham.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `c_id` varchar(30) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `fees` bigint(6) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(5) NOT NULL,
  `stu_id` varchar(30) NOT NULL,
  `c_id` varchar(30) NOT NULL,
  `marks` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stu_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pwd` varchar(80) NOT NULL,
  `photo` varchar(350) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `profile` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE `studentcourse` (
  `id` int(5) NOT NULL,
  `stu_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `total_fee` bigint(20) NOT NULL,
  `pending_fee` bigint(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Ongoing'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `tea_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pwd` varchar(50) NOT NULL DEFAULT 'btt_tch_4629',
  `address` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(350) NOT NULL,
  `high_qual` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachercourse`
--

CREATE TABLE `teachercourse` (
  `id` int(5) NOT NULL,
  `tea_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachercourse`
--
ALTER TABLE `teachercourse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentcourse`
--
ALTER TABLE `studentcourse`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachercourse`
--
ALTER TABLE `teachercourse`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
