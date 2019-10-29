-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 01:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social networking`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `user_message` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `uid`, `user_message`, `date`, `time`) VALUES
(90, '8503837848', 'dfdf', '0000-00-00', '2017-02-17 05:18:44'),
(91, '2020202020', 'happy', '0000-00-00', '2017-02-17 15:31:43'),
(92, '2020202020', 'kjkj', '0000-00-00', '2017-02-17 15:31:53'),
(93, '2020202020', 'kjlkjljlkj', '0000-00-00', '2017-02-17 15:32:00'),
(94, '2020202020', 'ljljlkj', '0000-00-00', '2017-02-17 15:32:05'),
(95, '2020202020', 'yu', '0000-00-00', '2017-02-17 15:32:12'),
(96, '2020202020', 'hi', '0000-00-00', '2017-03-04 12:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `private_msg`
--

CREATE TABLE `private_msg` (
  `id` int(11) NOT NULL,
  `tomsg` bigint(11) NOT NULL,
  `frommsg` bigint(11) NOT NULL,
  `time_msg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message_is` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_msg`
--

INSERT INTO `private_msg` (`id`, `tomsg`, `frommsg`, `time_msg`, `message_is`) VALUES
(86, 2345543234, 8503837848, '2017-02-17 05:10:38', 'j'),
(87, 8503837848, 2345543234, '2017-02-17 05:10:51', 'bol'),
(88, 5959595959, 8503837848, '2017-03-04 11:36:40', 'jkfkj'),
(89, 5959595959, 8503837848, '2017-03-04 11:36:47', 'dfddffdf\n\n\n'),
(90, 8503837848, 2345543234, '2017-03-04 12:22:45', 'kjkjkj');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `course` varchar(10) DEFAULT NULL,
  `year` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'commerce.jpg',
  `faculty` varchar(50) NOT NULL,
  `que` int(11) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'n',
  `rollno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `dob`, `mob`, `course`, `year`, `gender`, `password`, `image`, `faculty`, `que`, `ans`, `status`, `rollno`, `address`) VALUES
('kapil nama', 'kj@k', '2017-12-31', 1234567895, 'BCA', '', 'female', '1', 'commerce.jpg', '', 1, 'qw', 'n', '', ''),
('Nikhil', 'kj@kj', '2016-10-30', 2020202020, 'BBA', 'II year', 'male', '1', 'commerce.jpg', '', 1, 'red', 'n', '', ''),
('NEW STUDENT', 'KJ@KJ', '2017-12-31', 2345543234, 'BCA', 'I year', 'male', '1', 'commerce.jpg', 'Principle', 1, '1', 'y', '', ''),
('ui', 'kj@kj', '2017-12-31', 4456789087, 'BCA', 'II year', 'male', '88', 'commerce.jpg', 'Principle', 3, '', 'n', '', ''),
('qwert', 'kj@kj', '2017-12-30', 4567678976, 'BCA', 'I year', 'female', '1', 'commerce.jpg', 'Principle', 2, 'jodhpur', '', '', ''),
('dkfj', 'kldjf@kj', '2017-12-31', 5959595959, 'BCA', 'I year', 'male', '1', 'commerce.jpg', 'vice principle', 0, '', '', '', ''),
('kapil kumar chhipa', 'kapilchhipakjkj@m', '15-04-1998', 8503837848, 'BCA', 'III year', 'male', '8', 'Screenshot (237).png', '', 0, '', 'y', '5', 'jaipur'),
('any name', 'gaurav@2gmail.com', '2016-10-30', 8888888888, '', 'none', 'male', '8888888888', 'windows_69-wallpaper-2880x1800.jpg', 'BBA Dep.', 0, '', 'n', '', ''),
('KAPIL', 'KAPIL@GMAIL.COM', '2016-11-30', 9999889098, 'BCA', 'II year', 'female', '1', 'commerce.jpg', '', 0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_msg`
--
ALTER TABLE `private_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `private_msg`
--
ALTER TABLE `private_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
