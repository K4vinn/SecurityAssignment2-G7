-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 08:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_gender` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_dob` date NOT NULL,
  `admin_phoneNo` varchar(20) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_city` varchar(50) NOT NULL,
  `admin_zip` int(6) NOT NULL,
  `admin_state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_password`, `admin_name`, `admin_gender`, `admin_email`, `admin_dob`, `admin_phoneNo`, `admin_address`, `admin_city`, `admin_zip`, `admin_state`) VALUES
('A001', 'Admin12345', 'Admin', 'Female', 'admin@gmail.com', '2000-11-01', '012-34567890', 'admin address', 'admin city', 11500, 'Penang');

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `user_id` varchar(50) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phoneNo` varchar(20) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  `doctor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`user_id`, `booking_id`, `user_name`, `user_gender`, `user_email`, `user_phoneNo`, `start`, `end`, `status`, `doctor_name`) VALUES
('U003', 51, 'tengteng', 'Female', 'tengteng8132002@gmail.com', '0123456789', '2023-11-29 11:50:00', '2023-11-29 00:50:00', 'Approved', 'Joseph Cheah'),
('U001', 68, 'tengteng', 'Female', 'p20012535@student.newinti.edu.my', '0123456789', '2022-11-29 00:50:00', '2022-11-29 13:50:00', 'Rejected', 'Alex Lim'),
('U001', 71, 'teng', 'Male', 'tengteng8132002@gmail.com', '0123456789', '2023-11-01 19:40:00', '2023-11-01 19:40:00', 'Pending', 'Alex Lim'),
('U001', 73, 'tengteng', 'Female', 'tengteng8132002@gmail.com', '0123456789', '2023-11-07 13:18:00', '2023-11-14 13:18:00', 'Pending', 'Alex Lim'),
('U001', 74, 'tengteng', 'Male', 'tengteng8132002@gmail.com', '0123456789', '2023-11-21 12:22:00', '2023-11-21 13:22:00', 'Pending', 'Alex Lim'),
('U001', 76, 'tengteng', 'Female', 'p20012535@student.newinti.edu.my', '0123456789', '2023-11-21 19:18:00', '2023-11-21 20:18:00', 'Pending', 'Alex Lim'),
('U001', 77, 'tengteng', 'Female', 'tengteng8132002@gmail.com', '0123456789', '2023-11-15 19:42:00', '2023-11-15 20:42:00', 'Pending', 'Alex Lim'),
('U001', 78, 'tengteng', 'Male', 'tengteng8132002@gmail.com', '0124207460', '2023-11-14 23:45:00', '2023-11-14 13:45:00', 'Pending', 'Alex Lim'),
('U001', 79, 'tengteng', 'Male', 'tengteng8132002@gmail.com', '0124207460', '2023-11-18 19:46:00', '2023-11-18 20:46:00', 'Pending', 'Alex Lim'),
('U001', 80, 'ttt', 'Male', 'tengteng8132002@gmail.com', '0123456789', '2023-11-14 23:53:00', '2023-11-14 12:53:00', 'Pending', 'Alex Lim'),
('U001', 81, 'ttt', 'Male', 'tengteng8132002@gmail.com', '0123456789', '2023-11-14 23:53:00', '2023-11-14 12:53:00', 'Pending', 'Alex Lim'),
('U001', 82, 'tengteng', 'Female', 'tengteng8132002@gmail.com', '0124207460', '2023-11-14 12:58:00', '2023-11-14 13:58:00', 'Pending', 'Alex Lim'),
('U006', 86, 'teng', 'Female', 'tengteng8132002@gmail.com', '0123456789', '2023-11-23 07:05:00', '2023-11-23 08:05:00', 'Pending', 'Joseph Cheah'),
('U006', 87, 'teng', 'Female', 'tengteng8132002@gmail.com', '0123456789', '2023-11-23 07:05:00', '2023-11-23 08:05:00', 'Pending', 'Joseph Cheah'),
('U006', 88, 'teng', 'Female', 'tengteng8132002@gmail.com', '0123456789', '2023-11-23 07:05:00', '2023-11-23 08:05:00', 'Approved', 'Joseph Cheah'),
('U006', 89, 'tengteng', 'Female', 'tengteng8132002@gmail.com', '0124207460', '2023-11-15 04:11:00', '2023-11-15 06:11:00', 'Pending', 'Alex Lim');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`no`, `name`, `email`, `subject`, `message`) VALUES
(1, 'teng', 'tengteng8132002@gmail.com', 'teng', 'tengteng'),
(2, 'teng', 'tengteng8132002@gmail.com', 'teng', 'dafzsdgxfhjkjl;'),
(13, 'Shirley', 'tengteng8132002@gmail.com', 'subject', 'hello, here is Shirley. '),
(14, 'teng', 'tengteng8132002@gmail.com', 'teng', 'tengteng'),
(15, 'hi', 'tengteng8132002@gmail.com', 'hihi', 'hihih'),
(16, 'Teng Teng Lim', 'tengteng8132002@gmail.com', 'teng', 'tengteng'),
(17, 'Teng Teng Lim', 'tengteng8132002@gmail.com', '123', '12321312321');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_id` varchar(50) NOT NULL,
  `doctor_password` varchar(20) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_gender` varchar(20) NOT NULL,
  `doctor_email` varchar(50) NOT NULL,
  `doctor_dob` date NOT NULL,
  `doctor_phoneNo` varchar(20) NOT NULL,
  `doctor_address` varchar(100) NOT NULL,
  `doctor_city` varchar(50) NOT NULL,
  `doctor_zip` int(6) NOT NULL,
  `doctor_state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_id`, `doctor_password`, `doctor_name`, `doctor_gender`, `doctor_email`, `doctor_dob`, `doctor_phoneNo`, `doctor_address`, `doctor_city`, `doctor_zip`, `doctor_state`) VALUES
('D001', 'doctorpassword', 'Alex Lim', 'Male', 'doctor@gmail.com', '1991-11-25', '012-09876543', 'doctor address demo', 'doctor city ', 11550, 'Penang'),
('D002', 'doctorpassword2', 'Joseph Cheah', 'Male', 'doctor2@gmail.com', '1991-06-10', '012-09876543', 'DEMO', 'doctor city2', 11550, 'Penang');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_phoneNo` varchar(20) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `address_city` varchar(50) NOT NULL,
  `address_zip` int(6) NOT NULL,
  `address_state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_password`, `user_name`, `user_gender`, `user_email`, `user_dob`, `user_phoneNo`, `user_address`, `address_city`, `address_zip`, `address_state`) VALUES
('U001', 'User12345', 'User Name', 'Female', 'user1@gmail.com', '2001-11-08', '012-34567890', 'user address demo', 'user city', 11500, 'Penang'),
('U002', 'User12345', 'User Name2', 'Female', 'user2@gmail.com', '2001-11-11', '012-34567890', 'demo', 'user city2', 11500, 'Penang'),
('U003', 'User12345', 'User Name3', 'Female', 'user3@gmail.com', '2022-05-10', '012-34567890', 'demo', 'user city3', 11500, 'Penang'),
('U005', 'User12345', 'User5', 'Male', 'user@gmail.com', '2002-09-16', '012-4567890', 'demo testing', 'demo testing', 12345, 'demo testing'),
('U006', 'Teng12345', 'Teng Teng Lim', 'female', 'tengteng8132002@gmail.com', '2002-08-13', '0124207460', '2,  Jalan Putih', 'Ayer Itam', 11060, 'Penang'),
('U007', 'Teng12345', 'Teng Teng Lim', 'on', 'teng@gmail.com', '2023-11-12', '0124207460', '2,  Jalan Putih', 'Ayer Itam', 11060, 'Penang'),
('U008', 'Teng12345', 'Teng Teng Lim', 'on', 'teng@gmail.com', '2023-11-12', '0124207460', '2,  Jalan Putih', 'Ayer Itam', 11060, 'Penang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `FK_userId` (`user_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD CONSTRAINT `FK_userId` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
