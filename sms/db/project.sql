-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `roll_no` int(5) NOT NULL,
  `register_no` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` char(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`roll_no`, `register_no`, `name`, `year`, `dob`, `email`, `password`) VALUES
(51149, 2113141100007, 'chola', 'Third year', '2004-06-13', 'cholakanta13@gmail.com', '1'),
(51124, 2113141100026, 'Ragul ', 'Third year', '2004-01-15', 'ragulv1501@gmail.com', '1'),
(61149, 2213141100010, 'Gokul', 'Second year', '2004-08-30', 'gokulaprasad2004@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `email` varchar(50) NOT NULL,
  `c_basic` int(10) DEFAULT NULL,
  `c_inter` int(10) DEFAULT NULL,
  `c_adv` int(10) DEFAULT NULL,
  `c_final` int(10) DEFAULT NULL,
  `py_basic` int(10) DEFAULT NULL,
  `py_inter` int(10) DEFAULT NULL,
  `py_adv` int(10) DEFAULT NULL,
  `py_final` int(10) DEFAULT NULL,
  `ex_basic` int(10) DEFAULT NULL,
  `ex_inter` int(10) DEFAULT NULL,
  `ex_adv` int(10) DEFAULT NULL,
  `ex_final` int(10) DEFAULT NULL,
  `java_basic` int(10) DEFAULT NULL,
  `java_inter` int(10) DEFAULT NULL,
  `java_adv` int(10) DEFAULT NULL,
  `java_final` int(10) DEFAULT NULL,
  `os_basic` int(10) DEFAULT NULL,
  `os_inter` int(10) DEFAULT NULL,
  `os_adv` int(10) DEFAULT NULL,
  `os_final` int(10) DEFAULT NULL,
  `cc_basic` int(10) DEFAULT NULL,
  `cc_inter` int(10) DEFAULT NULL,
  `cc_adv` int(10) DEFAULT NULL,
  `cc_final` int(10) DEFAULT NULL,
  `se_basic` int(10) DEFAULT NULL,
  `se_inter` int(10) DEFAULT NULL,
  `se_adv` int(10) DEFAULT NULL,
  `se_final` int(10) DEFAULT NULL,
  `r_basic` int(10) DEFAULT NULL,
  `r_inter` int(10) DEFAULT NULL,
  `r_adv` int(10) DEFAULT NULL,
  `r_final` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`email`, `c_basic`, `c_inter`, `c_adv`, `c_final`, `py_basic`, `py_inter`, `py_adv`, `py_final`, `ex_basic`, `ex_inter`, `ex_adv`, `ex_final`, `java_basic`, `java_inter`, `java_adv`, `java_final`, `os_basic`, `os_inter`, `os_adv`, `os_final`, `cc_basic`, `cc_inter`, `cc_adv`, `cc_final`, `se_basic`, `se_inter`, `se_adv`, `se_final`, `r_basic`, `r_inter`, `r_adv`, `r_final`) VALUES
('cholakanta13@gmail.com', 2, 1, 2, 2, 5, 0, 1, 3, 0, 0, 0, 1, 1, 0, 1, 3, 0, 0, 1, 4, 0, 0, 1, 2, 1, 2, 2, 0, 3, 0, 1, 1),
('ragulv1501@gmail.com', 8, 6, 8, 15, 6, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`register_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
