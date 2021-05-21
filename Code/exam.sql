-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 03:00 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(5) NOT NULL,
  `cname` text NOT NULL,
  `sem` int(11) NOT NULL,
  `branch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `sem`, `branch`) VALUES
('CC101', 'EG', 1, 'CP'),
('CC141', 'Comm', 1, 'CP'),
('CC143', 'OS', 1, 'CP'),
('CE102', 'BCE', 3, 'CE'),
('CP461', 'python', 2, 'CP'),
('EC471', 'AP', 2, 'EC');

-- --------------------------------------------------------

--
-- Table structure for table `qbank`
--

CREATE TABLE `qbank` (
  `qbid` int(11) NOT NULL,
  `cid` varchar(5) NOT NULL,
  `tid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `que` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qbank`
--

INSERT INTO `qbank` (`qbid`, `cid`, `tid`, `marks`, `que`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 'CC101', 1, 1, 'what is eg?', 'a', 'b', 'c', 'd', 1),
(1, 'Comm', 1, 0, '', '', '', '', '', 0),
(2, 'CC101', 1, 1, 'what is my name?', 'e', 'f', 'g', 'h', 2),
(2, 'Comm', 1, 1, 'what is your name?', 'w', 'x', 'y', 'z', 3),
(3, 'CC101', 1, 1, 'what is their name?', 'e', 'f', 'g', 'h', 3),
(4, 'CC101', 1, 1, 'what is my pet name?', 't', 'y', 'd', 's', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `cid` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `qname` text NOT NULL,
  `qbids` text CHARACTER SET utf8mb4 NOT NULL,
  `tmarks` int(11) NOT NULL,
  `date` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `tid`, `cid`, `qname`, `qbids`, `tmarks`, `date`, `time`) VALUES
(1, 1, 'CC101', 'ddd', '1', 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `tpwd` varchar(10) NOT NULL,
  `tname` varchar(11) NOT NULL,
  `branch` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tpwd`, `tname`, `branch`) VALUES
(1, 'password', 'NMP', 'CP'),
(2, 'password', 'MMV', 'CP'),
(3, 'password', 'HDP', 'EC'),
(4, 'password', 'ABC', 'CE'),
(5, 'password', 'DGT', 'CP'),
(6, 'password', 'HDV', 'CP'),
(8, 'password', 'SSD', 'CP');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `tid` int(11) NOT NULL,
  `cid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`tid`, `cid`) VALUES
(1, 'CC141'),
(1, 'CC101'),
(3, 'EC471'),
(4, 'CE102'),
(2, 'CP461'),
(2, 'CC143'),
(2, 'CC141');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `qbank`
--
ALTER TABLE `qbank`
  ADD PRIMARY KEY (`qbid`,`cid`,`tid`),
  ADD KEY `cid` (`cid`,`tid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`qid`,`tid`,`cid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD KEY `cid` (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`),
  ADD CONSTRAINT `quiz_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
