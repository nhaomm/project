-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 12:10 PM
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
-- Table structure for table `db_student`
--

CREATE TABLE `db_student` (
  `STD_id` tinyint(4) NOT NULL COMMENT 'auto_number',
  `STD_fname` varchar(50) NOT NULL,
  `STD_lname` varchar(50) NOT NULL,
  `STD_Username` varchar(50) NOT NULL,
  `STD_email` varchar(50) NOT NULL,
  `STD_password` varchar(20) NOT NULL,
  `STD_department` varchar(50) NOT NULL,
  `STD_imageProfilepath` varchar(255) NOT NULL,
  `STD_timeregister` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_student`
--

INSERT INTO `db_student` (`STD_id`, `STD_fname`, `STD_lname`, `STD_Username`, `STD_email`, `STD_password`, `STD_department`, `STD_imageProfilepath`, `STD_timeregister`) VALUES
(18, 'hom', 'nam', 'namhom', 'zerokaokung@gmail.com', '123456788', 'คหกรรมศาสตร์', '', '2024-07-23 01:12:47'),
(21, 'n', 'h', 'nh', 'zerokaokung@gmail.com', '12345678', 'เทคโนโลยีสารสนเทศ', '', '2024-07-25 08:22:18'),
(119, 'kao', 'kaooo2', 'root', 'zeroaaaakaokung@gmail.com', 'aaaaa', 'การโรงแรม', '', '2024-08-13 07:15:14'),
(121, 'a', 'aa', 'a', 'a@a', 'a', 'คอมพิวเตอร์ธุรกิจ', '', '2024-08-13 07:23:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_student`
--
ALTER TABLE `db_student`
  ADD PRIMARY KEY (`STD_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_student`
--
ALTER TABLE `db_student`
  MODIFY `STD_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'auto_number', AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
