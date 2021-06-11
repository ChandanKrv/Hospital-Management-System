-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2021 at 01:01 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candyapkof_hms`
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
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(100) NOT NULL,
  `booked_by_hmsid_pt` varchar(255) NOT NULL,
  `assigned_to_hmsid_doc` varchar(255) DEFAULT NULL,
  `assigned_to_hmsid_staff` varchar(100) DEFAULT NULL,
  `pt_name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `pt_email` varchar(255) NOT NULL,
  `pt_phone` varchar(100) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','pending','release') NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `hms_id_dc` varchar(255) NOT NULL,
  `hms_id_pt` varchar(255) NOT NULL,
  `apt_date` varchar(255) NOT NULL,
  `apt_message` varchar(255) NOT NULL,
  `apt_token` varchar(255) NOT NULL,
  `apt_timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
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
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `d_image` varchar(225) NOT NULL,
  `d_gender` varchar(15) NOT NULL,
  `d_dob` varchar(15) NOT NULL,
  `d_department` varchar(225) NOT NULL,
  `d_address` varchar(225) NOT NULL,
  `d_timings` varchar(225) NOT NULL,
  `d_bio` varchar(5000) NOT NULL,
  `d_phone` varchar(15) NOT NULL,
  `d_fees` varchar(100) NOT NULL,
  `d_speciality` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `p_image` varchar(225) NOT NULL,
  `p_gender` varchar(15) NOT NULL,
  `p_dob` varchar(15) NOT NULL,
  `p_proof_type` varchar(225) NOT NULL,
  `p_proof_details` varchar(225) NOT NULL,
  `p_address` varchar(225) NOT NULL,
  `p_bio` varchar(5000) NOT NULL,
  `p_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(200) NOT NULL,
  `hms_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(15) NOT NULL,
  `u_id` int(15) NOT NULL,
  `s_image` varchar(225) NOT NULL,
  `s_gender` varchar(15) NOT NULL,
  `s_dob` varchar(15) NOT NULL,
  `s_department` varchar(225) NOT NULL,
  `s_address` varchar(225) NOT NULL,
  `s_timings` varchar(225) NOT NULL,
  `s_bio` varchar(5000) NOT NULL,
  `s_phone` varchar(15) NOT NULL,
  `s_fees` varchar(100) NOT NULL,
  `s_speciality` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(1, NULL, 'tirtha2208', 'TIRTHADEEP BASAK', 'tirthadeepbfb.com@gmail.com', '$2y$10$mEl.dVB4eY5koRqO0/rjrOIoesO2s6npvI3fsEPcu0WEC338eUZPm', '0', 'verified', 'patient', '2021-05-23 10:59:32', ''),
(2, NULL, 'admin', 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '$2y$10$ILGNR0kwyCNJsEnbJ2zPW.0WA9dNRGPuR0RK6Xr3ljzypmYTMx7z.', '0', 'verified', 'admin', '2021-05-27 10:05:35', ''),
(3, 'HMSID-123', 'Chandan', 'Chandan', 'chandan.nit.cse@gmail.com', '$2y$10$L1gA5Bvv9f0LGuXJcbnvxeQPzyQDLCXy/raldcN0iXLJ9Fz/bj88i', '0', 'verified', 'admin', '2021-05-28 23:12:44', '');

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
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc apt to user` (`hms_id_dc`),
  ADD KEY `pt apt to user` (`hms_id_pt`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin to user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `doc apt to user` FOREIGN KEY (`hms_id_dc`) REFERENCES `user` (`hms_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pt apt to user` FOREIGN KEY (`hms_id_pt`) REFERENCES `user` (`hms_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `staff to user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor to user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
