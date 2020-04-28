-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `slno` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `days` int(11) NOT NULL,
  `muser` varchar(10) NOT NULL,
  `tuser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`slno`, `class_name`, `days`, `muser`, `tuser`) VALUES
(1, 'CARDIO KICKBOXING', 10, 'smartcat', 'jafar'),
(2, 'AEROBICS', 12, 'guru', 'aisha'),
(3, 'ZUMBA', 13, 'smartcat', 'soumya'),
(4, 'Cardio Kickboxing', 12, 'arpana', 'jafar');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` varchar(10) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `trainer_name` varchar(50) NOT NULL,
  `trainer_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `trainer_name`, `trainer_id`) VALUES
('ARMCL1', 'CARDIO KICKBOXING', 'JAFAR KHAN', '1ARMT001'),
('ARMCL10', 'HIIT', 'ZOYA', '1ARMT009'),
('ARMCL2', 'AEROBICS', 'AISHA', '1ARMT010'),
('ARMCL3', 'POWER YOGA', 'SHASHI KUMAR', '1ARMT002'),
('ARMCL4', 'BOLLY BEATS', 'ANTARA GHUA', '1ARMT003'),
('ARMCL5', 'ZUMBA', 'SOUMYA', '1ARMT004'),
('ARMCL6', 'STEP', 'SHWETHA SHETTY', '1ARMT005'),
('ARMCL7', 'STRENGTH AND CONDITIONING', 'AJAY SINGH', '1ARMT006'),
('ARMCL8', 'TABATA', 'HONEY BATRA', '1ARMT007'),
('ARMCL9', 'LATIN BOLLY', 'DOLLY', '1ARMT008');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `AGE` int(10) NOT NULL,
  `GENDER` varchar(2) NOT NULL,
  `DOB` date NOT NULL,
  `CONTACT` double NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`first`, `last`, `AGE`, `GENDER`, `DOB`, `CONTACT`, `email`, `username`, `password`) VALUES
('Shikha', 'n', 76, 'F', '9000-05-31', 748884, 'dhdjjjjs', '', ''),
('Anusree', 'K', 20, 'F', '2000-03-29', 9393730073, 'anusreekmanoj@gmail.com', 'anu', '2903'),
('Arpana', 'R', 19, 'F', '2000-03-20', 374728748, 'arpana.cs18@bmasce.ac.in', 'arpana', '1234'),
('Divyakriti', 'Masun', 21, 'F', '1999-01-23', 336226363, 'divyakriti.cs18@bmsce.ac.in', 'divyakriti', '1234'),
('Gagan', 'Roshan', 20, 'M', '2000-01-20', 2312874721, 'gagan.cs18@bmsce.ac.in', 'gagan', '1234'),
('Guru', 'Nanma', 20, 'F', '2000-05-29', 7411830877, 'nanma.cs18@bmsce.ac.in', 'guru', '1234'),
('niha', 't', 0, '', '0000-00-00', 0, '', 'nihayu', ''),
('Prathibha', 'R', 19, 'F', '2000-09-27', 6362389581, 'prathibha.cs18@bmsce.ac.in', 'prathibha', '2709'),
('Pooja', 'Srinivasan', 20, 'F', '2000-01-18', 9738531406, 'poojasrinivasan18@gmail.com', 'smartcat', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`first`, `last`, `fee`) VALUES
('pooja', 'srinivasan', 3000),
('Guru', 'Nanma', 400000),
('Anusree ', 'K', 50000),
('Prathibha', 'R', 5000),
('Divyakriti', 'Masun', 40020),
('Niha', '', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `trainer_info`
--

CREATE TABLE `trainer_info` (
  `trainer_id` varchar(10) NOT NULL,
  `trainer_name` varchar(50) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_info`
--

INSERT INTO `trainer_info` (`trainer_id`, `trainer_name`, `skill`, `email`, `password`, `username`) VALUES
('', 'sunny', 'boxing', 'sunny@gmail,com', '', ''),
('1ARMT0010', 'AISHA', 'AEROBICS', 'aisha@gmail.com', '1234', 'aisha'),
('1ARMT006', 'AJAY SINGH', 'STRENGTH AND CONDITIONING', 'ajay@gmail.com', '1234', 'ajay'),
('1ARMT003', 'ANTARA GHUA', 'BOLLY BEATS', 'antara@gmail.com', '1234', 'antara'),
('1ARMT008', 'DOLLY', 'LATIN BOLLY', 'dolly@gmail.com', '1234', 'dolly'),
('1ARMT007', 'HONEY BATRA', 'TABATA', 'honey@gmail.com', '1234', 'honey'),
('1ARMT001', 'JAFAR KHAN', 'CARDIO KICKBOXING', 'jafar@gmail.com', '1234', 'jafar'),
('', 'Rohit', 'weight training', 'rohit@gmail.com', '1234', 'rohit'),
('1ARMT002', 'SHASHI KUMAR', 'POWER YOGA', 'shashi.kumar@gmail.com', '1234', 'shashi'),
('1ARMT005', 'SHWETHA SHETTY', 'STEP', 'shwetha@gmail.com', '1234', 'shwetha'),
('1ARMT004', 'SOUMYA', 'ZUMBA', 'soumya@gmail.com', '1234', 'soumya'),
('', 'Tommy', 'dietian', 'tommy@gmailcom', '1234', 'tommy'),
('1ARMT009', 'ZOYA', 'HIIT', 'zoya@gmail.com', '1234', 'zoya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`slno`),
  ADD KEY `tuser` (`tuser`),
  ADD KEY `muser` (`muser`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `trainer_info`
--
ALTER TABLE `trainer_info`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`tuser`) REFERENCES `trainer_info` (`username`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`muser`) REFERENCES `member_info` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
