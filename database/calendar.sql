-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 04:22 PM
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
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `presidentid` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `presidentid`, `department`, `place`, `number`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00', 0, '', '', 0),
(2, 'Long Event', '#FF0000', '2016-01-07 00:00:00', '2016-01-10 00:00:00', 0, '', '', 0),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00', 0, '', '', 0),
(4, 'Conference', '#40E0D0', '2016-01-11 00:00:00', '2016-01-13 00:00:00', 0, '', '', 0),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00', 0, '', '', 0),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '0000-00-00 00:00:00', 0, '', '', 0),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00', 0, '', '', 0),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '0000-00-00 00:00:00', 0, '', '', 0),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00', 0, '', '', 0),
(10, 'Double click to change', '#008000', '2016-01-28 00:00:00', '0000-00-00 00:00:00', 0, '', '', 0),
(21, 'เปิดงาน', '#FF8C00', '2019-05-15 12:00:00', '2019-05-15 13:00:00', 1, 'REG KKU', 'หอกาญ', 3),
(26, 'ฟหก', '', '2019-05-16 00:00:00', '2019-05-17 00:00:00', 1, '', '', 0),
(27, 'ฟหก', '', '2019-05-16 00:00:00', '2019-05-17 00:00:00', 1, '', '', 0),
(28, 'asd', '', '2019-05-14 00:00:00', '2019-05-15 00:00:00', 0, '', '', 0),
(29, 'asd', '', '2019-05-17 00:00:00', '2019-05-18 00:00:00', 0, '', '', 0),
(30, 'adsad', '', '2019-05-14 00:00:00', '2019-05-15 00:00:00', 0, '', '', 0),
(31, 'asdasd', '', '2019-05-15 00:00:00', '2019-05-16 00:00:00', 0, '', '', 0),
(32, 'asdasd', '', '2019-05-14 00:00:00', '2019-05-15 00:00:00', 0, '', '', 0),
(33, 'asd', '', '2019-05-14 00:00:00', '2019-05-15 00:00:00', 1, '', '', 0),
(34, 'asd', '', '2019-05-09 00:00:00', '2019-05-10 00:00:00', 4, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `presidentid` int(5) NOT NULL,
  `presidentname` varchar(500) NOT NULL,
  `position` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`presidentid`, `presidentname`, `position`) VALUES
(1, 'จันทโชติ ธรรมสาร', 'นายกรัฐมนตรี'),
(2, 'ฐิติพงศ์ สุริยะไกร', 'รองนายกรัฐมนตรี'),
(3, 'พงษ์ระวี เวียนศรี', 'ประธานบริหาร'),
(4, 'ติณห์ ผุยคำพิ', 'รองประธานบริหาร');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(3) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `type` varchar(2) NOT NULL,
  `presidentid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name_surname`, `username`, `password`, `department`, `tel`, `type`, `presidentid`) VALUES
(1, 'จันทโชติ ธรรมสาร', 'admin1', '1234', 'สำนักผู้บริหาร', '', '1', 1),
(2, 'กิตตินันท์ คนสอน', 'staff1', '1234', 'สำนักผู้บริหาร', '', '1', 1),
(3, 'ผู้บริหาร2', 'admin2', '1234', 'สำนักผู้บริหาร', '', '1', 2),
(5, 'เลขา2', 'staff2', '1234', 'สำนักผู้บริหาร', '', '1', 2),
(6, 'กองสำนัก1', 'user1', '1234', 'กองสำนัก', '', '2', 1),
(7, 'กองสำนัก2', 'user2', '1234', 'กองสำนัก', '', '2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`presidentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `presidentid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
