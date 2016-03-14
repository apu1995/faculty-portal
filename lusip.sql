-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2016 at 05:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lusip`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `sid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `insnm` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `pref1` varchar(50) NOT NULL,
  `pref2` varchar(50) NOT NULL,
  `abs` varchar(5000) DEFAULT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`sid`, `name`, `mail`, `contact`, `gender`, `insnm`, `year`, `branch`, `pref1`, `pref2`, `abs`, `link`) VALUES
('Y13UC043', 'Apurva Singh', 'asinghvirgo@gmail.com', '9409288260', 'Female', 'LNMIIT', 'III', 'CSE', '4', '3', 'Name is Apurva Singh.', 'http://hello.com'),
('Y13UC044', 'Aditi Singh', 'asinghvirgo@gmail.com', '9409288260', 'Female', 'Nirma', 'III', 'CSE', '4', '3', 'Name is Apurva Singh.', 'http://hello.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `flag`) VALUES
('aditi', '5d41402abc4b2a76b9719d911017c592', 0),
('apurva', 'dbe9454e9d8631d841c29589ad155186', 1),
('arpit', '6efec8b0cb2ca37e772943a76c7531e4', 0),
('guest', '5d41402abc4b2a76b9719d911017c592', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`pid` int(11) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `duration` int(11) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `size` int(11) NOT NULL,
  `prereq` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `other` varchar(500) DEFAULT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `faculty`, `dept`, `title`, `duration`, `branch`, `size`, `prereq`, `description`, `other`, `year`) VALUES
(3, 'apurva', ' CSE ', 'WebDevlopment', 3, ' CSE , CCE , ECE ', 5, 'HTML, CSS, PHP', 'A Web Development Project', 'Aditi Singh, Naughty', ' I , II , III '),
(4, 'apurva', ' CCE ', 'R programming', 3, ' CSE , CCE ', 3, 'R', 'A Basic R Programming Project', 'Aditi Singh', ' II , III '),
(5, 'apurva', ' CCE ', '.NET', 8, ' CSE , CCE ', 6, '.NET Knowledge', 'NET and MySQL Project', '', ' II , III '),
(6, 'apurva', ' ECE ', 'USS Based TTS System', 6, ' CSE , CCE , ECE ', 5, 'DSP', 'Building USS Based TTS System.', '', ' II , III '),
(7, 'apurva', ' MCH ', 'Robotics', 6, '', 3, '', 'Hehe', '', ''),
(8, 'apurva', ' CCE ', 'Hello', 34, ' CSE ', 3, 'ihjh', 'hlihlo', 'bglhi', ' I , II ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
