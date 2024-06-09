-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 02:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedbackform`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `enrollmentno` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `yearadmin` int(4) NOT NULL,
  `department` varchar(30) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `pimage`, `fullname`, `enrollmentno`, `password`, `gender`, `birthdate`, `yearadmin`, `department`, `sem`, `email`) VALUES
(1, 'Profile Images/2019-02-09-12-28-29-789.jpg', 'Shoheb Kazi', 1605690259, '1642d4333aab9865e955ea9c74b94de5', 'Male', '2000-01-30', 2016, 'Computer Engineering', '6th', 'shohebkazi456@gmail.com'),
(2, 'Profile Images/2019-03-26-12-58-52-981.jpg', 'Shadab Khan', 1605690255, '68b2f07529a94a656cbd415a5d845ec2', 'Male', '1999-11-22', 2016, 'Computer Engineering', '6th', 'shadabkhan1999@gmail.com'),
(3, 'Profile Images/2019-03-26-12-44-37-056.jpg', 'Wasim Shaikh', 1605690277, '48f70313f771dc5080c944e92af3b180', 'Male', '2000-05-04', 2016, 'Computer Engineering', '6th', 'wasimshaikh@gmail.com'),
(4, 'Profile Images/2019-03-26-12-46-19-131.jpg', 'Ahtesham Syed', 1605690234, 'f76e50ec089254a71b4390528139a727', 'Male', '2000-06-04', 2016, 'Computer Engineering', '6th', 'rajasyed71@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
