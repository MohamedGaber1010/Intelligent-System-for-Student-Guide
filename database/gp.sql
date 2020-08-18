-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 08:32 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp`
--
CREATE DATABASE gp;
-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `CourseID` int(11) NOT NULL,
  `submitted` tinyint(1) NOT NULL,
  `degree` int(11) NOT NULL,
  `wholedegree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`ID`, `Name`, `Title`, `DoctorID`, `Date`, `CourseID`, `submitted`, `degree`, `wholedegree`) VALUES
(1, 'sheet', 'Sheet for chapter 1.3', 1, '0000-00-00', 1, 1, 5, 10),
(2, 'httpsdeveloper.apple.comdesignresources', 'httpsdeveloper.apple.comdesignresources', 1, '2018-03-29', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Comment` text NOT NULL,
  `CommenterID` int(11) NOT NULL,
  `NewsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `StartTime` int(11) NOT NULL,
  `EndTime` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `departmentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `Name`, `DoctorID`, `StartTime`, `EndTime`, `Day`, `level`, `departmentID`) VALUES
(1, 'Operating system', 0, 0, 0, 0, 4, 1),
(3, 'Pattern recognition', 0, 0, 0, 0, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Name`) VALUES
(1, 'CS'),
(2, 'IS'),
(3, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `matrial`
--

CREATE TABLE `matrial` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `DepartmentID` int(11) NOT NULL,
  `UploaderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matrial`
--

INSERT INTO `matrial` (`ID`, `Name`, `Title`, `Date`, `Type`, `CourseID`, `DepartmentID`, `UploaderID`) VALUES
(1, 'Data_Mining1', '', '2018-03-15', 'pdf', 1, 2, 2),
(2, 'testtt', '', '2018-03-06', 'pdf', 1, 2, 1),
(5, 'mov_bbb', 'intro to image processing', '2018-03-22', 'videos', 1, 3, 1),
(7, 'HtmlVideo', 'Learn Html From Scratch', '2018-03-21', 'videos', 1, 2, 2),
(8, 'we', '', '2018-03-01', 'photos', 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Post` text NOT NULL,
  `Time` time NOT NULL,
  `PublisherID` int(11) NOT NULL,
  `isMain` tinyint(1) NOT NULL,
  `courseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Post`, `Time`, `PublisherID`, `isMain`, `courseID`) VALUES
(7, 'hh', '00:00:00', 2, 0, 1),
(8, 'jjjj', '00:00:00', 2, 0, 1),
(9, 'knk', '00:00:00', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` int(11) NOT NULL,
  `DepartmentID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `PhoneNumber` double NOT NULL,
  `SSN` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `isDoctor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `Level`, `DepartmentID`, `CourseID`, `PhoneNumber`, `SSN`, `Image`, `isDoctor`) VALUES
(1, 'Abdelrahman Mohamed', 'Abdelrahman.man@hotmail.com', '123', 4, 0, 0, 201097165720, 6265656, '', 0),
(2, 'Moaaz Salah', 'Moaaz@gmail.com', '123', 4, 0, 0, 0, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `sheetdoctor` (`DoctorID`),
  ADD KEY `sheetcourse` (`CourseID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `commentNEWS` (`NewsID`),
  ADD KEY `commenterUSER` (`CommenterID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_dep` (`departmentID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `matrial`
--
ALTER TABLE `matrial`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UNIQUE` (`Name`),
  ADD KEY `courseMaterials` (`CourseID`),
  ADD KEY `departmentMaterial` (`DepartmentID`),
  ADD KEY `userMaterial` (`UploaderID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `publisheruser` (`PublisherID`),
  ADD KEY `cuesenews` (`courseID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UNIQUE` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `matrial`
--
ALTER TABLE `matrial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `sheetcourse` FOREIGN KEY (`CourseID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sheetdoctor` FOREIGN KEY (`DoctorID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `commentpost` FOREIGN KEY (`NewsID`) REFERENCES `news` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentuser` FOREIGN KEY (`CommenterID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_dep` FOREIGN KEY (`departmentID`) REFERENCES `department` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matrial`
--
ALTER TABLE `matrial`
  ADD CONSTRAINT `courseMaterials` FOREIGN KEY (`CourseID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `departmentMaterial` FOREIGN KEY (`DepartmentID`) REFERENCES `department` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userMaterial` FOREIGN KEY (`UploaderID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `cuesenews` FOREIGN KEY (`courseID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usernews` FOREIGN KEY (`PublisherID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
