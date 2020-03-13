-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 06:39 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majestic_enroller_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fName` varchar(35) COLLATE utf8_bin NOT NULL,
  `lName` varchar(35) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `enrollmentDate` date NOT NULL,
  `currentSchoolYear` int(1) NOT NULL,
  `homePhone` int(12) NOT NULL,
  `mobilePhone` int(12) NOT NULL,
  `email` varchar(70) COLLATE utf8_bin NOT NULL,
  `contactName1` varchar(35) COLLATE utf8_bin NOT NULL,
  `contactPhone1` int(12) NOT NULL,
  `contactName2` varchar(35) COLLATE utf8_bin NOT NULL,
  `contactPhone2` int(12) NOT NULL,
  `imgUrl` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `P_Key` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fName`, `lName`, `dob`, `enrollmentDate`, `currentSchoolYear`, `homePhone`, `mobilePhone`, `email`, `contactName1`, `contactPhone1`, `contactName2`, `contactPhone2`, `imgUrl`, `P_Key`) VALUES
('Bruce', 'Wayne', '2009-11-11', '2020-03-11', 7, 432366055, 432366055, 'mitchellnally@msn.com', 'parent1', 432355555, 'partent2', 432355555, NULL, 10),
('Joshua', 'Williams', '2014-05-05', '2019-05-20', 7, 432366055, 432366055, 'josh@gmail.com', 'parent1', 432355555, 'partent2', 432360555, NULL, 12),
('Home', 'Simpson', '2005-05-05', '2010-05-05', 10, 432366055, 432366055, 'homer@hotmail.com', 'J simpson', 432360555, 'V simpson', 432360555, '131584073387', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`P_Key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `P_Key` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
