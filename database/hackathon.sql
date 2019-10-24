-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 03:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `date_of_booking` date NOT NULL,
  `service_date` datetime NOT NULL,
  `name_of_user` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date_of_booking`, `service_date`, `name_of_user`, `time`, `phone`, `address`) VALUES
(20, '2019-09-30', '2019-09-19 00:00:00', 'shahid shaikh', '9-10am', 8765365623, 'malad'),
(22, '2019-09-30', '2019-09-21 00:00:00', 'Ankit', '9-10am', 8374823, 'Vasai'),
(37, '2019-10-07', '2019-10-11 00:00:00', 'AMIT SINGH', '9-10am', 1234567890, 'Malad(W) , Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `type_of_service` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `fullname`, `username`, `password`, `phone`, `type_of_service`, `email`) VALUES
(2, 'Dharmesh bhai', 'dharmesh_bhai', '12', 9988888888, 'Painter', 'dharmesh@yahoo.com'),
(3, 'Shahid Shaikh', 'shahid_shahid', '1234', 9981111111, 'sweeper', 'shahid@hbk.com'),
(4, 'Shahid Shaikh', 'shahid_shahid', '1234', 998444444, 'sweeper', 'shahid@hbk.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `emailid`, `phone`, `address`, `password`, `username`) VALUES
(4, 'aisha patel', 'aisha@gmail.com', 888888887, 'dahisar w, mumbai 400092', '123456789', 'aisha'),
(9, 'raju', 'raju155@gmail.com', 9876543210, 'eksarborivali', 'raju123', 'raju111'),
(13, 'RAJU B POTHARAJU', 'raju@gmail.com', 9876543210, 'atharva college of engineering', '1234', 'raju1234'),
(14, 'vikas', 'vikas123@gmai.com', 87675878, 'borivali west', '', ''),
(15, 'vikas', 'vikas123@gmai.com', 87675878, 'borivali west', 'vikas123', 'vikasvikas'),
(16, 'sagar samudrala', 'sagarsamudrala123@gmai.com', 789876545, 'hyderabad', 'sagar', 'sagar@username'),
(17, 'devarsh', 'devarsh@gmail.com', 987654321, 'dadar', 'dev', 'devarsh123'),
(18, 'Sandeep Kanojia', 'sandy_kanojia@yahoo.com', 8424921000, 'borivali w, mumbai', 'sandy123', 'sandy123'),
(19, 'Jayom', 'jayom@gmail.com', 1234567890, 'asdfghjkl', 'jayom', 'jayom'),
(21, 'Raju Potharaju', 'rajup@gmail.com', 7777777778, 'borivali w, mumbai', '123', 'raju@developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
