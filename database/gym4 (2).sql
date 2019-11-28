-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 04:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'Haha@gmail.com', '1', '2016-04-04 20:31:45', '2019-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `sescode` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `protstatus` int(11) NOT NULL,
  `starton` date NOT NULL,
  `duration` int(11) NOT NULL,
  `trainer` varchar(500) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `sescode` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `time`, `sescode`, `fees`, `posting_date`) VALUES
(27, 230415, 101, 320, '2019-11-28 14:55:33'),
(28, 445615, 102, 240, '2019-11-28 14:57:16'),
(29, 800945, 103, 280, '2019-11-28 14:57:28'),
(30, 10001145, 104, 300, '2019-11-28 14:57:42'),
(31, 230415, 201, 240, '2019-11-28 14:58:48'),
(32, 445615, 202, 320, '2019-11-28 14:59:05'),
(33, 800945, 203, 280, '2019-11-28 14:59:25'),
(34, 10001145, 204, 300, '2019-11-28 14:59:39'),
(35, 230415, 301, 280, '2019-11-28 15:00:04'),
(36, 445615, 302, 320, '2019-11-28 15:00:19'),
(37, 800945, 303, 240, '2019-11-28 15:00:36'),
(38, 10001145, 304, 300, '2019-11-28 15:00:49'),
(39, 230415, 401, 300, '2019-11-28 15:01:12'),
(40, 445615, 402, 240, '2019-11-28 15:01:30'),
(41, 800945, 403, 320, '2019-11-28 15:01:48'),
(42, 10001145, 404, 280, '2019-11-28 15:02:02'),
(43, 245430, 501, 280, '2019-11-28 15:02:19'),
(44, 445615, 502, 320, '2019-11-28 15:02:34'),
(45, 800945, 503, 240, '2019-11-28 15:02:53'),
(46, 10001145, 504, 300, '2019-11-28 15:03:07'),
(47, 230415, 601, 320, '2019-11-28 15:03:20'),
(48, 445615, 602, 240, '2019-11-28 15:03:33'),
(49, 800945, 603, 280, '2019-11-28 15:03:48'),
(50, 10001145, 604, 300, '2019-11-28 15:04:02'),
(51, 230415, 701, 240, '2019-11-28 15:04:18'),
(52, 445615, 702, 320, '2019-11-28 15:04:37'),
(53, 800945, 703, 280, '2019-11-28 15:04:51'),
(54, 10001145, 704, 300, '2019-11-28 15:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Perlis'),
(2, 'Penang'),
(3, 'Kedah\r\n'),
(4, 'Perak'),
(5, 'Selangor\r\n'),
(6, 'Melaka'),
(7, 'Negeri Sembilan'),
(8, 'Johor'),
(9, 'Pahang'),
(10, 'Terengganu'),
(11, 'Kelantan'),
(12, 'Sabah'),
(13, 'Sarawak\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `phone`, `username`, `fullname`, `posting_date`) VALUES
(12, '01119325689', 'Mat', 'Mohd Hafiz', '2019-11-28 14:21:53'),
(13, '0142127515', 'Iwey', 'Alif Syazwan', '2019-11-28 14:23:35'),
(14, '0149046896', 'Wang', 'Ridzuan Sumiri', '2019-11-28 14:24:46'),
(15, '0192558239', 'Ijat', 'Tengku Izzat', '2019-11-28 14:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(48, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-12 16:56:37'),
(49, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-20 04:57:23'),
(50, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-20 04:58:21'),
(51, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-20 06:28:31'),
(52, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-23 15:12:16'),
(53, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-25 15:35:28'),
(54, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-25 15:35:29'),
(55, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-25 18:48:55'),
(56, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-25 18:49:01'),
(57, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-26 16:53:31'),
(58, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-26 17:00:47'),
(59, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-27 07:01:39'),
(60, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-27 07:01:39'),
(61, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-27 07:01:40'),
(62, 27, 'rasmi@gmail.com', 0x3a3a31, '', '', '2019-11-27 14:39:29'),
(63, 24, 'abg@gmail.com', 0x3a3a31, '', '', '2019-11-27 15:52:38'),
(64, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-27 17:10:48'),
(65, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-28 11:13:24'),
(66, 28, 'freedomgundam52@gmail.com', 0x3139322e3136382e34332e3439, '', '', '2019-11-28 13:32:31'),
(67, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-28 13:45:00'),
(68, 23, 'halineymar113@gmail.com', 0x3a3a31, '', '', '2019-11-28 14:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(10, '108061211', 'code', 'test', 'projects', 'male', 8467067344, 'test@gmail.com', '1', '2016-06-22 04:21:33', '23-06-2016 11:04:15', '22-06-2016 05:16:49'),
(19, '102355', 'Harry', 'projects', 'Singh', 'male', 6786786786, 'Harry@gmail.com', '6786786786', '2016-06-26 16:33:36', '', ''),
(20, '586952', 'Benjamin', '', 'projects', 'male', 8596185625, 'Benjamin@gmail.com', '8596185625', '2016-06-26 16:40:07', '', ''),
(22, '12', 'Abdul', 'man', 'Halim', 'others', 333, 'hali@gmail.com', '333', '2019-09-22 17:15:36', '', ''),
(23, '4242', 'Teng', 'Kamal', 'Fahmi', 'male', 8, 'halineymar113@gmail.com', '1', '2019-09-22 17:19:04', '28-11-2019 04:43:37', '20-11-2019 10:34:46'),
(24, '3454', 'Abang', 'Hasif', 'Ajmal', 'male', 198875643, 'abg@gmail.com', '1', '2019-09-23 12:54:54', '07-11-2019 02:55:57', '07-11-2019 02:59:33'),
(27, '1234', 'Rasmi', 'Jang', 'Ni', 'male', 999, 'rasmi@gmail.com', '1', '2019-11-27 14:38:49', '', ''),
(28, '5623', 'loh', 'kacak', 'bergaya', 'others', 3516978, 'freedomgundam52@gmail.com', 'animax21', '2019-11-28 13:32:12', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
