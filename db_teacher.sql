-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 12:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvc_e-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_teacher`
--

CREATE TABLE `db_teacher` (
  `TCH_id` tinyint(4) NOT NULL COMMENT 'auto_number',
  `TCH_fname` varchar(50) NOT NULL,
  `TCH_lname` varchar(50) NOT NULL,
  `TCH_Username` varchar(50) NOT NULL,
  `TCH_email` varchar(50) NOT NULL,
  `TCH_password` varchar(20) NOT NULL,
  `TCH_department` varchar(50) NOT NULL,
  `TCH_imageProfilepath` varchar(255) NOT NULL,
  `TCH_timeregister` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='ตารางเก็บข้อมูลคุณครู';

--
-- Dumping data for table `db_teacher`
--

INSERT INTO `db_teacher` (`TCH_id`, `TCH_fname`, `TCH_lname`, `TCH_Username`, `TCH_email`, `TCH_password`, `TCH_department`, `TCH_imageProfilepath`, `TCH_timeregister`) VALUES
(2, 'n', 'h', 'nh', 'zerokaokung@gmail.com', '12345678', 'ถ่ายภาพและมัลติมีเดีย', '', '2024-07-25 07:11:23'),
(3, 'ds', 'fsfgb', 'sfgvv', 'zerokaokung@gmail.com', 'sdv ', 'เทคโนโลยีสารสนเทศ', '', '2024-07-25 10:08:41'),
(4, 'pam', 'pam4', 'pam', 'zerokaokung@gmail.com', '1', 'ถ่ายภาพและมัลติมีเดีย', 'pam.JPG', '2024-08-14 07:33:43'),
(6, 'aa', 'ฟ', 'root', 'zerokaokung@gmail.com', 'TCH_password', 'เทคโนโลยีสารสนเทศ', '', '2024-08-13 03:43:27'),
(7, 'aaa', 'a', 'หกอ', 'zerokaokung@gmail.com', 'a', 'เทคโนโลยีสารสนเทศ', '', '2024-08-11 13:01:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_teacher`
--
ALTER TABLE `db_teacher`
  ADD PRIMARY KEY (`TCH_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_teacher`
--
ALTER TABLE `db_teacher`
  MODIFY `TCH_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'auto_number', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
