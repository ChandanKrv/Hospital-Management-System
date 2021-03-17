-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 12:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLs_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLs_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLs_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `a_image` text NOT NULL,
  `a_gender` varchar(15) NOT NULL,
  `a_dob` date NOT NULL,
  `a_address` varchar(225) NOT NULL,
  `a_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `s_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `s_image` varchar(225) NOT NULL,
  `s_gender` varchar(15) NOT NULL,
  `s_dob` varchar(15) NOT NULL,
  `s_department` varchar(225) NOT NULL,
  `s_address` varchar(225) NOT NULL,
  `s_timings` varchar(225) NOT NULL,
  `s_bio` varchar(5000) NOT NULL,
  `s_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `p_image` text NOT NULL,
  `p_gender` int(15) NOT NULL,
  `p_dob` date NOT NULL,
  `p_dept` varchar(225) NOT NULL,
  `s_id` int(15) NOT NULL,
  `p_address` varchar(225) NOT NULL,
  `p_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `s_image` text NOT NULL,
  `s_gender` varchar(15) NOT NULL,
  `s_dob` date NOT NULL,
  `s_dept` varchar(225) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `hms_id` varchar(255) DEFAULT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_full_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_vcode` varchar(10) NOT NULL,
  `u_status` varchar(50) NOT NULL,
  `u_role` varchar(100) NOT NULL,
  `u_timestamp` varchar(100) DEFAULT NULL,
  `u_ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `hms_id`, `u_name`, `u_full_name`, `u_email`, `u_password`, `u_vcode`, `u_status`, `u_role`, `u_timestamp`, `u_ip`) VALUES
(23, NULL, 'Candy2', 'adminCandy', 'admin@apkof.com', '$2y$10$N/g8wYqJU4CNB3BxzSSUoeG3oIQDIDioNbVCU0QTWPrtGF6h3d/3q', '0', 'verified', 'admin', '2021-01-27 11:08:09', ''),
(24, NULL, 'arijit', 'admin', 'admin@gmail.com', '$2y$10$DvomXy2yjdeTBrOIRKpvJOSxuBTKmo2CBLn.KbsUHZMExs4y7SE..', '0', 'verified', 'admin', '2021-01-27 16:41:31', ''),
(25, '123', 'student', 'Student', 'student@gmail.com', '$2y$10$tc6.kWiQOqzchU9OnSEGuuhy30QYS3qt5sRNVwkhiQxIcDvuBI..m', '0', 'verified', 'student', '2021-01-27 16:42:35', ''),
(62, 'RM21C301', 'candy', 'Chandan Kumar Verma', 'chandan.nit.cse@gmail.com', '$2y$10$i5o1rJWoqibYLIMGzBYtyegsRJGkSPVKm9AGNprfMKT2r0U6y3pwi', '0', 'verified', 'student', '2021-02-14 18:41:55', '202.142.107.236');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_name` (`u_name`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_unique` (`hms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin to user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor to user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `doctor` (`s_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff to user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLs_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLs_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLs_COLLATION_CONNECTION */;
