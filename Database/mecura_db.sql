-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 02:13 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecura_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `p_id` int(6) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_age` int(3) NOT NULL,
  `p_mbl` bigint(10) DEFAULT NULL,
  `p_add` varchar(140) DEFAULT NULL,
  `p_sex` varchar(7) DEFAULT NULL,
  `p_doc` varchar(50) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `p_day` varchar(30) DEFAULT NULL,
  `did` int(4) DEFAULT NULL,
  `p_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`p_id`, `p_name`, `p_age`, `p_mbl`, `p_add`, `p_sex`, `p_doc`, `p_date`, `p_day`, `did`, `p_time`) VALUES
(170003, 'Ravi', 21, 1234568974, 'India', 'male', 'Dr. MD Jamal Khan', '0000-00-00', 'Monday 4:00 PM - 5:00 PM', 1001, '2017-06-29 12:32:14'),
(170004, 'Ravi', 12, 1234567890, 'India', 'male', 'Dr. MD Jamal Khan', '0000-00-00', 'Wednesday 4:00 PM - 5:00 PM', 1001, '2017-06-29 12:35:43'),
(170005, 'Akhil', 21, 1023654789, 'Kolkata', 'male', 'Dr. NAHEED PARVEZE', '0000-00-00', 'Thursday 10:30 PM - 11:30 PM', 1014, '2017-06-29 12:36:30'),
(170006, 'Ravi', 12, 1253698565, 'India', 'male', 'Dr. AHSAN AYUB KHAN', '0000-00-00', 'Thursday 10:30 AM - 12:00 PM', 1004, '2017-06-29 12:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `mon` varchar(5) DEFAULT NULL,
  `tue` varchar(5) DEFAULT NULL,
  `wed` varchar(5) DEFAULT NULL,
  `thr` varchar(5) DEFAULT NULL,
  `fri` varchar(5) DEFAULT NULL,
  `sat` varchar(5) DEFAULT NULL,
  `sun` varchar(5) DEFAULT NULL,
  `did` int(5) NOT NULL,
  `aid` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`mon`, `tue`, `wed`, `thr`, `fri`, `sat`, `sun`, `did`, `aid`, `time`) VALUES
('y', NULL, 'y', NULL, NULL, 'y', NULL, 1001, 1, '4:00 PM - 5:00 PM'),
(NULL, NULL, 'y', NULL, NULL, NULL, NULL, 1002, 2, '12:00 PM - 1:00 PM'),
(NULL, NULL, 'y', NULL, 'y', NULL, NULL, 1003, 3, '11:00 AM - 12:00 PM'),
(NULL, NULL, NULL, 'y', NULL, NULL, NULL, 1004, 4, '10:30 AM - 12:00 PM'),
(NULL, NULL, NULL, NULL, NULL, NULL, 'y', 1005, 5, '12:00 PM - 1:00 PM'),
('y', 'y', 'y', 'y', 'y', 'y', NULL, 1006, 6, '09:00 PM - 10:00 PM'),
('y', 'y', 'y', 'y', 'y', 'y', NULL, 1007, 7, '08:00 PM - 09:00 PM'),
(NULL, NULL, NULL, NULL, 'y', NULL, NULL, 1008, 8, '10:30 AM - 11:30 AM'),
('y', 'y', NULL, NULL, NULL, NULL, NULL, 1009, 9, '03:00 PM - 05:00 PM'),
(NULL, 'y', NULL, NULL, 'y', 'y', NULL, 1010, 10, '05:00 PM - 07:00 PM'),
(NULL, 'y', NULL, NULL, NULL, NULL, NULL, 1011, 11, '10:30 AM - 11:30 AM'),
(NULL, NULL, NULL, NULL, 'y', NULL, NULL, 1011, 12, '03:00 PM - 04:00 PM'),
('y', NULL, 'y', NULL, NULL, NULL, NULL, 1012, 13, '10:30 PM - 12:00 PM'),
(NULL, NULL, NULL, 'y', NULL, 'y', NULL, 1012, 14, '06:00 PM - 07:00 PM'),
(NULL, 'y', NULL, NULL, NULL, NULL, NULL, 1013, 15, '11:00 AM - 01:00 PM'),
(NULL, NULL, NULL, 'y', NULL, NULL, NULL, 1013, 16, '12:00 PM - 01:30 PM'),
('y', NULL, NULL, 'y', NULL, NULL, NULL, 1014, 17, '10:30 PM - 11:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `did` int(4) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`did`, `specialisation`, `doctor`, `time`) VALUES
(1001, 'Child Specialist', 'Dr. MD Jamal Khan', 'Mon/Wed/Sat: 4:00pm-5:00pm'),
(1002, 'Orthopaedic', 'Dr. Tahseen Siddique', 'Wed: 12:00pm-1:00pm'),
(1003, 'Gyaenocologist', 'Dr. T. MUSTAQUE', 'Wed/Fri: 11:00am-12:00pm'),
(1004, 'MS in Ear', 'Dr. AHSAN AYUB KHAN', 'Thurs: 10:30am-12:00pm'),
(1005, 'MS in Ear', 'Dr. SANJAY KUMAR GUPTA', 'Sun: 12:00pm-1:00pm'),
(1006, 'Laproscopic & Cancer Surgeon', 'Dr. MD SARFARAZ ALAM', 'Mon to Sat: 9:00pm-10:00pm'),
(1007, 'OBS & Gyane & Infertility Specialist', 'Dr. SHAHZADI FATIMA', 'Mon to Sat: 8:00pm-9:00pm'),
(1008, 'General Physician', 'Dr. SABA AMBRIN', 'Fri: 10:30am-11:30am'),
(1009, 'Oral & Dental Implantalogist', 'Dr. MD WASIM HUSSAIN', 'Mon/Tue: 3:00pm-5:00pm'),
(1010, 'Physician & Cardio-Diabetologist', 'Dr. IMRAN AHMED KHAN', 'Tue/Fri/Sat: 5:00pm-7:00pm'),
(1011, 'Dental Surgeon', 'Dr. SHAISTA MUNIR HAQUE', 'Tue: 10:30am-11:30am<br>Fri: 3:00pm-4:00pm'),
(1012, 'Oral & Dental surgeon', 'Dr. REHAN H. KHAN', 'Mon/Wed: 10:30pm-12:00pm<br>Thurs/Sat: 6:00pm-7:00pm'),
(1013, 'General Physician', 'Dr. SHAISTA IZHAR', 'Tue: 11:00am-1:00pm<br>Thurs: 12:00pm-1:30pm'),
(1014, 'Gyaenocologist', 'Dr. NAHEED PARVEZE', 'By Appointment<br>Mon/Thurs: 10:30pm-11:30pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `p_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170007;
--
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `did` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
