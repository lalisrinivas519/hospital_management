-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 12:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `password`, `name`, `mobile`, `email`) VALUES
(1, 'admin', '12345', 'erty', '12345', 'sdfghjk@wer'),
(2, '123', '12345', 'chaitra', '123456y', 'chaitra@viva');

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'vacant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `moblie` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('pending','approved','reject') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `userid`, `name`, `gender`, `mobile`, `email`, `Service`, `Doctor`, `date`, `appointment_date`, `description`, `status`) VALUES
('', '1234', 'swathi', '', '', '', '', '', '', '', '', 'pending'),
('', '', 'Swathi N', '20', '07022984950', 'swathigowdan2001@gmail.com', 'ENT Checkup', 'Dr. John Smith', '05/28/2024', '05/21/2024', 'qwertyui', 'pending'),
('', '', 'Swathi N', '20', '07022984950', 'swathigowdan2001@gmail.com', 'Heart Checkup', 'Dr. Hossein Shams', '05/21/2024', '05/14/2024', 'asdfghj', 'pending'),
('', '', 'sindhu', 'Femal', '07022984950', 'swathigowdan2001@gmail.com', 'Heart Checkup', 'Dr. Maryam Amiri', '06/04/2024', '05/21/2024', 'Zxcvfgbhnjm', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `aadhar_front` varchar(255) NOT NULL,
  `aadhar_back` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `pan_image` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `manufacture_date` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `mg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_id`, `name`, `manufacture_date`, `expiry_date`, `stock`, `mg`) VALUES
(12, '1234', 'sdfgh', 'sdfgh', 'sdfgh', 'sdfgh', 'erty'),
(13, '12345', 'cipla', '2024-05-08', '2024-05-21', '400', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `who_i_am` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `aadhar_front` varchar(255) NOT NULL,
  `aadhar_back` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `pan_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `medical_card_number` varchar(255) NOT NULL,
  `medical_card_front` varchar(255) NOT NULL,
  `medical_card_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `name`, `password`, `who_i_am`, `position`, `dob`, `gender`, `mobile`, `email`, `address`, `city`, `state`, `country`, `aadhar_no`, `aadhar_front`, `aadhar_back`, `pan_no`, `pan_image`, `description`, `medical_card_number`, `medical_card_front`, `medical_card_back`) VALUES
(1, '111', 'Annaya', 'chelamma729', 'patient', 'patient', '29/03/2004', 'Male', '9606755315', 'chelamma729@gmail.com', '', 'Hyderabad, Telangana 500040', 'Telangana', 'India', '45465765', 'aadhar_fron.png', 'banner1.jpg', '45467', 'pan_image', '', '465465767', 'blood (2).png', 'blood (3).png'),
(2, '222', 'DR.GOLLA SRUTHI', 'Mallikarjun', 'staff', 'doctor', '07/02/2004', 'Female', '+91 8985558802', '', '', 'Kurnool, Andhra Pradesh', '', '', '', '', '', '', '', 'doctor', '', '', ''),
(3, '333', 'Giribabu', 'gollasruthi', 'staff', 'admin', '', 'Male', '94933 75265', '', '', 'Kurnool', 'Andhra Pradesh', 'India', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allotment`
--
ALTER TABLE `allotment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
